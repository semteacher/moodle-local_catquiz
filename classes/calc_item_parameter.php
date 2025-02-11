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
 * @author Daniel Pasterk
 * @copyright 2023 Wunderbyte GmbH
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_catquiz;

class calc_item_parameter{

    static function get_item_difficulty($fractions) {
        $num_correct = array_sum($fractions);
        $num_all = count($fractions);
        $difficulty = log($num_correct / $num_all );
        return $difficulty;
    }

    static function get_all_item_difficulty($map){
        $item_difficulties = array();
        foreach ($map as $question_id => $fractions) {
            $item_difficulty = self::get_item_difficulty($fractions);
            $item_difficulties[$question_id] = $item_difficulty;
        }
        return $item_difficulties;
    }
}
