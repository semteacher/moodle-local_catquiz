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
 * Class personabilities.
 *
 * @package local_catquiz
 * @copyright 2023 Wunderbyte GmbH
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_catquiz\teststrategy\feedbackgenerator;

use cache;
use local_catquiz\catquiz;
use local_catquiz\teststrategy\feedbackgenerator;

/**
 * Returns a custom feedback for each scale.
 *
 * If the person ability for this attempt is below the threshold as set in the
 * quiz settings, the user will see the message that was defined there.
 *
 * @package local_catquiz
 * @copyright 2023 Wunderbyte GmbH
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class customscalefeedback extends feedbackgenerator {
    protected function get_studentfeedback(array $data): array {

        $text = $data['customscalefeedback'];
        return [
            'heading' => $this->get_heading(),
            'content' => $text,
        ];
    }

    protected function get_teacherfeedback(array $data): array {
        return [];
    }

    public function get_required_context_keys(): array {
        return [
            'quizsettings',
            'personabilities',
            'customscalefeedback',
        ];
    }

    public function get_heading(): string {
        return get_string('catquiz_feedbackheader', 'local_catquiz');
    }

    public function load_data(int $attemptid, array $initialcontext): ?array {
        $cache = cache::make('local_catquiz', 'adaptivequizattempt');
        $quizsettings = (array) ($initialcontext['quizsettings'] ?? $cache->get('quizsettings')) ?: null;
        if ($quizsettings === null) {
            return null;
        }

        $personabilities = $initialcontext['personabilities'] ?? $cache->get('personabilities') ?: null;
        if ($personabilities === null) {
            return null;
        }

        $scalefeedback = [];
        foreach ($personabilities as $catscaleid => $personability) {
            $lowerlimitprop = sprintf('feedback_scaleid_%d_lowerlimit', $catscaleid);
            $lowerlimit = floatval($quizsettings[$lowerlimitprop]);
            if ($personability >= $lowerlimit) {
                continue;
            }

            $feedbackprop = sprintf('feedback_scaleid_%d_feedback', $catscaleid);
            $feedback = $quizsettings[$feedbackprop];
            // Do not display empty feedback messages.
            if (!$feedback) {
                continue;
            }

            $scalefeedback[$catscaleid] = $feedback;
        }

        if (! $scalefeedback) {
            return null;
        }

        $catscales = catquiz::get_catscales(array_keys($scalefeedback));
        $text = "";
        foreach ($catscales as $cs) {
            $text .= $cs->name . ': ' . $scalefeedback[$cs->id] . '<br/>';
        }

        return [
            'customscalefeedback' => $text,
            'quizsettings' => $quizsettings,
            'personabilities' => $personabilities,
        ];
    }
}