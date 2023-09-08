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
 * Class strategybalancedscore.
 *
 * @package local_catquiz
 * @copyright 2023 Wunderbyte GmbH
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_catquiz\teststrategy\preselect_task;

use local_catquiz\local\result;
use local_catquiz\teststrategy\preselect_task;
use local_catquiz\teststrategy\preselect_task\fisherinformation;
use local_catquiz\teststrategy\preselect_task\lasttimeplayedpenalty;
use local_catquiz\wb_middleware;

/**
 * Add a score to each question and sort questions descending by score
 *
 * @package local_catquiz
 * @copyright 2023 Wunderbyte GmbH
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
final class strategybalancedscore extends preselect_task implements wb_middleware {

    /**
     * Run preselect task.
     *
     * @param array $context
     * @param callable $next
     *
     * @return result
     *
     */
    public function run(array &$context, callable $next): result {
        foreach ($context['questions'] as $question) {
            $lasttimeplayedpenaltyweighted = (1 - (
               $question->lasttimeplayedpenalty / $context['penalty_threshold']));
            $numberofgeneralattemptspenaltyweighted = (1 - (
                $question->{numberofgeneralattempts::PROPERTYNAME} / $context['generalnumberofattempts_max']));
            $question->score = $numberofgeneralattemptspenaltyweighted * $lasttimeplayedpenaltyweighted;
        }

        uasort($context['questions'], function($q1, $q2) {
            return $q2->score <=> $q1->score;
        });

        return result::ok(reset($context['questions']));
    }

    /**
     * Get required context keys
     *
     * @return array
     *
     */
    public function get_required_context_keys(): array {
        return [
            'penalty_threshold',
            'questions',
            'generalnumberofattempts_max'
        ];
    }
}
