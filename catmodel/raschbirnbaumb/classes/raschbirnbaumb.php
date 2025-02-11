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
 * Event factory interface.
 *
 * @package    local_catquiz
 * @copyright  2023 Wunderbyte GmbH <georg.maisser@wunderbyte.at>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace catmodel_raschbirnbaumb;

use local_catquiz\local\model\model_calc;

defined('MOODLE_INTERNAL') || die();

/**
 * Interface for model calc item classes.
 *
 * @copyright  2023 Wunderbyte GmbH <georg.maisser@wunderbyte.at>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class raschbirnbaumb implements model_calc {

    /**
     * Responses.
     *
     * @var array
     */
    private $responses = array();

    /**
     * Item difficulties
     *
     * @var array
     */
    private $itemdifficulties = array();

    /**
     * Item discriminations
     *
     * @var array
     */
    private $itemdiscriminations = array();

    /**
     * Person abilities.
     *
     * @var array
     */
    private $personabilities = array();

    /**
     * The constructur of the class makes an inital calculation based only on the responses.
     *
     *
     * @param array $responses
     */
    public function __construct(array $responses = []) {



        if (empty($responses)) {
            $responses = $this->responses;
        } else {
            $this->responses = $responses;
        }

        $numitems = count(current($responses));
        $numpersons = count($responses);

        // Initialize item difficulties and discriminations
        $itemdifficulties = array_fill(0, $numitems, 0);
        $itemdiscriminations = array_fill(0, $numitems, 0);

        // Initialize person abilities
        $personabilities = array_fill(0, $numpersons, 0);

        // Estimate item difficulties and discriminations
        for ($i = 0; $i < $numitems; $i++) {
            $num_yes = 0;
            $num_no = 0;
            foreach ($responses as $personresponses) {
                if ($personresponses[$i] == 1) {
                    $num_yes++;
                } else {
                    $num_no++;
                }
            }
            $p_yes = $num_yes / $numpersons;
            $p_no = $num_no / $numpersons;

            // Make sure $p_yes is never 0, to avoid infinity.
            $p_yes = $p_yes === 0 ? 0.00001 : $p_yes;

            $itemdifficulties[$i] = log($p_no / $p_yes);
            $itemdiscriminations[$i] = 1;
        }

        // Estimate person abilities
        for ($j = 0; $j < $numpersons; $j++) {
            $ability = 0;
            for ($i = 0; $i < $numitems; $i++) {
                $ability += ($responses[$j][$i] - $p_yes) * $itemdifficulties[$i];
            }
            $personabilities[$j] = $ability;
        }

        $this->itemdifficulties = $itemdifficulties;
        $this->itemdiscriminations = $itemdiscriminations;
        $this->personabilities = $personabilities;
    }


    /**
     * Get Item Parameters by feedbing responses.
     *
     * @param array $responses
     * @return void
     */
    public function get_item_parameters(array $responses):array {

        $item_params = array();

        $numitems = count($this->itemdifficulties);
        $numresponses = count($responses);

        for ($i = 0; $i < $numitems; $i++) {
            $itemdifficulty = $this->itemdifficulties[$i];
            $itemdiscrimination = $this->itemdiscriminations[$i];

            $numcorrect = 0;
            $totalresponses = 0;

            foreach ($responses as $response) {
                if (isset($response['answers'][$i])) {
                $totalresponses++;
                $numcorrect += $response['answers'][$i];
                }
            }

            // Make sure $p_yes is never 0, to avoid infinity.
            $totalresponses = $totalresponses === 0 ? 0.00001 : $totalresponses;

            $p = $numcorrect / $totalresponses;
            $q = 1 - $p;

            // Todo: right now, we only return dummy data.
            // And we only have it for ONE testitem.
            // The whole function has to be rewritten to deal with more than one testitem.

            $itemdifficulty = [-2.00, -1.80, -1.60, -1.40, -1.20, -1.00, -0.80, -0.60, -0.40, -0.20];
            $itemdiscrimination = [0.03, 0.18, 0.37, 0.62, 0.84, 0.98, 1.00, 0.92, 0.74, 0.52];

            $itemparams = array(
                'difficulty' => $itemdifficulty,
                'discrimination' => $itemdiscrimination,
                'p' => $p,
                'q' => $q
            );
        }

        return $itemparams;
    }


    /**
     * Get the Persons ability based on their responses.
     *
     * @param array $responses
     * @return array
     */
    public function get_person_abilities(array $responses):array {

        $person_abilities = array();

        $numitems = count($this->itemdifficulties);
        $num_responses = count($responses);

        for ($i = 0; $i < $num_responses; $i++) {
        $personability = 0;

        foreach ($responses[$i]['answers'] as $j => $answer) {
            $itemdifficulty = $this->itemdifficulties[$j];
            $itemdiscrimination = $this->itemdiscriminations[$j];

            $personability += log(($answer * $itemdiscrimination) + ((1 - $answer) * (1 / $itemdiscrimination))) - log($itemdifficulty / (1 - $itemdifficulty));
        }

        $personability /= $numitems;

        $person_abilities[] = array(
            'ability' => $personability
        );
        }

        return $person_abilities;
    }
}
