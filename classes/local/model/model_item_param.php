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

use cache_helper;
use Exception;
use stdClass;

/**
 * This class holds a single item param object
 *
 * This is one of the return values from a model param estimation.
 */
class model_item_param {

    // For some items, the model returns -INF or INF as difficulty.
    // However, we expect it to be numeric, so we encode those
    // values as -1000 and 1000
    const MIN = -1000;
    const MAX = 1000;

    const STATUS_NOT_SET = -5;
    const STATUS_NOT_CALCULATED = 0;
    const STATUS_SET_BY_STRATEGY = 1;
    const STATUS_UPDATED_MANUALLY = 4;
    const STATUS_SET_MANUALLY = 5;

    /**
     * @var array<float>
     */
    private array $parameters;

    private int $status = 0;

    private string $modelname;

    /**
     * Models that create items are free to use this field to store some metadata
     * @var array
     */
    private array $metadata;

    /**
     * @var integer $id The item id, e.g. question id
     */
    private int $id;

    public function __construct(int $id, string $modelname, array $metadata = [], int $status = self::STATUS_NOT_CALCULATED) {
        $this->id = $id;
        $this->model_name = $modelname;
        $this->metadata = $metadata;
        $this->status = $status;
    }
    public function get_params_array(): array {
        return $this->parameters;
    }

    /**
     * Returns the item id (e.g. question id)
     *
     * @return int
     */
    public function get_id(): int {
        return $this->id;
    }

    public function get_model_name(): string {
        return $this->model_name;
    }

    public function get_difficulty(): float {
        return $this->parameters['difficulty'];
    }

    public function set_parameters(array $parameters): self {
        $this->parameters = $parameters;
        return $this;
    }

    public function set_difficulty(float $difficulty): self {
        $this->parameters['difficulty'] = $difficulty;
        return $this;
    }

    public function set_metadata(array $metadata): self {
        $this->metadata = $metadata;
        return $this;
    }

    public function get_metadata(): array {
        return $this->metadata;
    }

    public function set_status(int $status): self {
        $this->status = $status;
        return $this;
    }

    public function get_status(): int {
        return $this->status;
    }

    /**
     * @param int $componentid
     * @param string $model
     * @param int $contextid
     * @param stdClass $new_record
     * @return void
     * @throws Exception
     */
    public static function update_in_db(
        int $id,
        int $componentid,
        string $model,
        int $contextid,
        stdClass $newrecord
    ) {
        global $DB;

        if (intval($newrecord->status) === self::STATUS_SET_MANUALLY) {
            // Only one model can be the selected one. Set the status of all
            // other models back to 0
            $existingitems = $DB->get_record(
                'local_catquiz_itemparams',
                [
                    'componentid' => $componentid,
                    'contextid' => $contextid,
                    'status' => self::STATUS_SET_MANUALLY,
                ]
            );
            // Get item params for other models
            $otheritems = array_filter(
                $existingitems,
                function($i) use ($model) {
                    return $i->model !== $model;
                }
            );
            foreach ($otheritems as $otheritem) {
                $otheritem->status = self::STATUS_NOT_CALCULATED;
                $DB->update_record('local_catquiz_itemparams', $otheritem, true);
            }
        }

        $dbrecord = $DB->get_record(
            'local_catquiz_itemparams',
            [
                'id' => $id,
            ]
        );
        if (!$dbrecord) {
            throw new Exception('Can not update record because it does not exist');
        }
        foreach ($newrecord as $property => $value) {
            // Some properties should not be updated
            if (in_array($property, ['id', 'componentid'])) {
                continue;
            }
            $dbrecord->$property = $value;
        }
        $DB->update_record(
            'local_catquiz_itemparams',
            $dbrecord
        );
        cache_helper::purge_by_event('changesintestitems');
    }
};
