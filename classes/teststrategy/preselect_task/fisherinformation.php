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
 * Class fisherinformation.
 *
 * @package local_catquiz
 * @copyright 2023 Wunderbyte GmbH
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_catquiz\teststrategy\preselect_task;

use local_catquiz\local\result;
use local_catquiz\teststrategy\preselect_task;
use local_catquiz\wb_middleware;
use moodle_exception;

/**
 * Test strategy fisherinformation.
 *
 * @package local_catquiz
 * @copyright 2023 Wunderbyte GmbH
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
final class fisherinformation extends preselect_task implements wb_middleware {

    /**
     * PROPERTYNAME
     *
     * @var string
     */
    const PROPERTYNAME = 'fisherinformation';

    /**
     * Run preselect task.
     *
     * @param array $context
     * @param callable $next
     *
     * @return result
     *
     */
    public function run(array $context, callable $next): result {
        foreach ($context['questions'] as $item) {
            if (!array_key_exists($item->model, $context['installed_models'])) {
                throw new moodle_exception('missingmodel', 'local_catquiz');
            }

            $model = $context['installed_models'][$item->model];
            foreach ($model::get_parameter_names() as $paramname) {
                $params[$paramname] = floatval($item->$paramname);
            }

            $item->{self::PROPERTYNAME} = $model::fisher_info(
                $context['person_ability'],
                $params
            );
        }
        return $next($context);
    }

    /**
     * Get required context keys
     *
     * @return array
     *
     */
    public function get_required_context_keys(): array {
        return [
            'installed_models',
            'person_ability',
            'questions',
        ];
    }
}
