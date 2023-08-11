<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Entities Class to display list of entity records.
 *
 * @package local_catquiz
 * @copyright 2023 Wunderbyte GmbH <info@wunderbyte.at>
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_catquiz\local\model;
use ArrayAccess;
use ArrayIterator;
use Countable;
use dml_exception;
use IteratorAggregate;
use local_catquiz\catquiz;
use Traversable;

/**
 * This class holds a list of item param objects
 *
 * This is one of the return values from a model param estimation.
 */
class model_item_param_list implements ArrayAccess, IteratorAggregate, Countable {
    /**
     * @var array<model_item_param>
     */
    private array $itemparams;

    public function __construct() {
        $this->item_params = [];
    }

    public function count(): int {
        return count($this->item_params);
    }

    /**
     * Try to load existing item params from the DB.
     * If none are found, it returns an empty list.
     *
     * @param int $contextid
     * @param string $model_name
     * @param ?int $catscaleid
     * @return model_item_param_list
     */
    public static function load_from_db(int $contextid, string $modelname, ?int $catscaleid = null): self {
        global $DB;
        $models = model_strategy::get_installed_models();

        if ($catscaleid) {
            $itemrows = catquiz::get_itemparams($contextid, $catscaleid, $modelname);
        } else {
            $itemrows = $DB->get_records(
                'local_catquiz_itemparams',
                [
                    'contextid' => $contextid,
                    'model' => $modelname,
                ],
            );
        }
        $itemparameters = new model_item_param_list();
        foreach ($itemrows as $r) {
            // Skip NaN values here
            if ($r->difficulty === "NaN") {
                continue;
            }
            $i = new model_item_param($r->componentid, $modelname);
            $parameternames = $models[$modelname]::get_parameter_names();
            $params = [];
            foreach ($parameternames as $paramname) {
                $params[$paramname] = $r->$paramname;
            }
            $i->set_parameters($params);
            $itemparameters->add($i);
        }

        return $itemparameters;
    }

    public function getiterator(): Traversable {
        return new ArrayIterator($this->item_params);
    }

    public function add(model_item_param $itemparam) {
        $this->item_params[$itemparam->get_id()] = $itemparam;
    }

    public function offsetSet($offset, $value): void {
        if (is_null($offset)) {
            $this->item_params[] = $value;
        } else {
            $this->item_params[$offset] = $value;
        }
    }

    public function offsetExists($offset): bool {
        return isset($this->item_params[$offset]);
    }

    public function offsetUnset($offset): void {
        unset($this->item_params[$offset]);
    }

    public function offsetGet($offset): ?model_item_param {
        return isset($this->item_params[$offset]) ? $this->item_params[$offset] : null;
    }

    /**
     * Returns the item difficulties as a float array
     *
     * @return array<float>
     */
    public function get_values($sorted = false): array {
        $data = array_map(
            function (model_item_param $param) {
                return $param->get_difficulty();
            },
            $this->item_params
        );

        $data = array_filter($data, function ($a) {
            return is_finite($a) && abs($a) != model_item_param::MAX;
        });
        if ($sorted) {
            sort($data);
        }
        return $data;
    }

    public function as_array(): array {
        $data = [];
        foreach ($this->item_params as $i) {
            $data[$i->get_id()] = $i;
        }
        return $data;
    }

    public function save_to_db(int $contextid) {

        global $DB;

        // Get existing records for the given contextid from the DB, so that we know
        // whether we should create a new item param or update an existing one.
        $existingparamsrows = $DB->get_records(
            'local_catquiz_itemparams',
            ['contextid' => $contextid, ]
        );
        $existingparams = [];
        foreach ($existingparamsrows as $r) {
            $existingparams[$r->componentid][$r->model] = $r;
        };

        $records = array_map(
            function ($param) use ($contextid) {
                $record = [
                    'componentid' => $param->get_id(),
                    'componentname' => 'question',
                    'model' => $param->get_model_name(),
                    'contextid' => $contextid,
                    'status' => $param->get_status(),
                ];
                foreach ($param->get_params_array() as $paramname => $value) {
                    if (abs($value) > model_item_param::MAX) {
                        $value = $value < 0 ? model_item_param::MIN : model_item_param::MAX;
                    }
                    $record[$paramname] = $value;
                }

                return $record;
            },
            $this->item_params
        );

        $updatedrecords = [];
        $newrecords = [];
        $now = time();
        $models = model_strategy::get_installed_models();
        foreach ($records as $record) {
            // Do not save or update items that have a NAN as one of their
            // parameter's values
            $parameternames = $models[$record['model']]::get_parameter_names();
            foreach ($parameternames as $parametername) {
                if (is_nan($record[$parametername])) {
                    continue;
                }
            }

            $isexistingparam = array_key_exists($record['componentid'], $existingparams)
                && array_key_exists($record['model'], $existingparams[$record['componentid']]);
            // If record already exists, update it. Otherwise, insert a new record to the DB
            if ($isexistingparam) {
                $record['id'] = $existingparams[$record['componentid']][$record['model']]->id;
                $record['timemodified'] = $now;
                $updatedrecords[] = $record;
            } else {
                $record['timecreated'] = $now;
                $record['timemodified'] = $now;
                $newrecords[] = $record;
            }
        }

        if (!empty($newrecords)) {
            $DB->insert_records('local_catquiz_itemparams', $newrecords);

        }

        foreach ($updatedrecords as $r) {
            $DB->update_record('local_catquiz_itemparams', $r, true);
        }
    }

    /**
     * Check if record exists to update, if not, insert.
     * Some logic to provide the correct values if missing.
     * @param array $newrecord
     * @return int
     * @throws dml_exception
     */
    public static function save_or_update_testitem_in_db(array $newrecord) {
        global $DB;

        $record = $DB->get_record("local_catquiz_itemparams", [
            'componentid' => $newrecord['componentid'],
            'componentname' => $newrecord['componentname'],
            'model' => $newrecord['model'],
        ]);
        $now = time();
        $newrecord['timemodified'] = empty($newrecord['timemodified']) ? $now : $newrecord['timemodified'];
        if (isset($record->timecreated) && $record->timecreated != "0") {
            $newrecord['timecreated'] = !empty($newrecord['timecreated']) ? $newrecord['timecreated'] : $record->timecreated;
        } else {
            $newrecord['timecreated'] = !empty($newrecord['timecreated']) ? $newrecord['timecreated'] : $now;
        }

        $newrecord['status'] = !empty($newrecord['status']) ? $newrecord['status'] : model_item_param::STATUS_UPDATED_MANUALLY;

        if (!$record) {
            // Make sure the record to insert has no id.
            unset($newrecord['id']);
            $id = $DB->insert_record('local_catquiz_itemparams', $newrecord);
        } else {

            $newrecord['id'] = $record->id;
            if ($DB->update_record('local_catquiz_itemparams', $newrecord, true)) {
                $id = $newrecord['id'];
            }
        }
        return $id;
    }

};
