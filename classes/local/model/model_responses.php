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

use local_catquiz\local\model\model_item_list;
use local_catquiz\local\model\model_item_response;
use local_catquiz\local\model\model_person_param_list;

/**
 * Contains information about a performed quiz or test
 *
 * For example: a list of users performed a test. Objects of this class show how the users performed on this test.
 * E.g.: which users took part, how did they answer the questions, etc.
 */
class model_responses {
    private $data;

    private array $hascorrectanswer = [];

    /**
     * @return array<int>
     */
    public function get_item_ids(): array {
        $userids = array_keys($this->data);
        $questionids = [];

        foreach ($userids as $userid) {
            $components = array();
            $components = array_merge($components, array_keys($this->data[$userid]));
            foreach ($components as $component) {
                $questionids = array_merge(
                    $questionids, array_keys($this->data[$userid][$component])
                );
            }
        }

        return array_unique($questionids);
    }

    public static function create_from_array(array $data) {
        return (new self)->setData($data);
    }

    /**
     * Helper function to get the person IDs from the response.
     *
     * @return array<int>  */
    public function get_user_ids(): array {
        return array_keys($this->data);
    }

    /**
     * Returns an array of arrays of item responses indexed by question id.
     * So for each question ID, there is an array of model_item_response entries
     *
     * @return array<array<model_item_response>>
     */
    public function get_item_response(model_person_param_list $personparamlist): array {
        $itemresponse = [];

        // Restructure the data
        // From:
        // $data[PERSONID] -> [All responses to different items by this user]
        // To:
        // $data[QUESTIONID] -> [All responses to this question by different users]
        foreach ($personparamlist->get_person_params() as $pp) {
            $components = array();
            if (!array_key_exists($pp->get_id(), $this->data)) {
                continue;
            }
            $responsesbyuser = $this->data[$pp->get_id()];
            $components = array_merge($components, $responsesbyuser);
            foreach (array_keys($components) as $component) {
                $questionids = array_keys($this->data[$pp->get_id()][$component]);
                foreach ($questionids as $questionid) {
                    $fraction = $this->data[$pp->get_id()][$component][$questionid]['fraction'];
                    $itemresponse[$questionid][] = new model_item_response(
                        $fraction, $pp->get_ability()
                    );
                }
            }
        }
        return $itemresponse;
    }

    public function setdata($data) {
        $hascorrectanswer = [];
        foreach ($data as $userid => $components) {
            foreach($components as $component) {
                foreach($component as $componentid => $results) {
                    if (floatval($results['fraction']) === 1.0) { // TODO might need to be updated
                        $hascorrectanswer[] = $componentid;
                    }
                }
            }
        }

        // Filter out items that do not have a single correct answer
        $this->has_correct_answer = array_unique($hascorrectanswer);
        foreach($data as $userid => $components) {
            foreach($components as $componentname => $component) {
                foreach (array_keys($component) as $componentid) {
                    if (!in_array($componentid, $this->has_correct_answer)) {
                        unset($data[$userid][$componentname][$componentid]);

                        // If that was the only question in that component, remove the component
                        if (count($data[$userid][$componentname]) === 0) {
                            unset($data[$userid][$componentname]);

                            // If there are no data left for this user, remove that entry
                            if (count($data[$userid]) === 0) {
                                unset($data[$userid]);
                            }
                        }
                    }
                }
            }
        }
        $this->data = $data;

        return $this;
    }

    /**
     * @return array
     */
    public function as_array() {
        return $this->data;
    }

    /**
     * Returns the person params from all persons that are found in this responses object.
     * The ability is initialized to 0.
     *
     * @return model_person_param_list
     */
    public function get_initial_person_abilities() {
        $personparamlist = new model_person_param_list();
        foreach (array_keys($this->as_array()) as $userid) {
            $p = new model_person_param($userid);
            $personparamlist->add($p);
        }
        return $personparamlist;
    }
};
