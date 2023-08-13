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
 *  Code for validation of developing process.
 *
 * @package local_catquiz
 * @author Daniel Pasterk
 * @copyright 2023 Wunderbyte GmbH
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use local_catquiz\catcalc;
use local_catquiz\catcontext;
use local_catquiz\local\model\model_item_param;
use local_catquiz\local\model\model_item_param_list;
use local_catquiz\local\model\model_person_param;
use local_catquiz\local\model\model_person_param_list;
use local_catquiz\local\model\model_responses;
use local_catquiz\local\model\model_strategy;

require_once(__DIR__ . '../../../../config.php');

require_login();

$PAGE->set_url(new moodle_url('/local/catquiz/workspace.php'));
$PAGE->set_context(context_system::instance());
$PAGE->set_pagelayout('frontpage');
$urlfront = new moodle_url('/workspace.php');
$urlplugin = new moodle_url('workspace.php');

echo $OUTPUT->header();

$response = new model_responses();

$synthitemresponse = \local_catquiz\synthcat::get_item_response2(40, 65, 0.0);

// Estimate item parameter with 1 PL.

$start = [0.2];
$model1pl = new \catmodel_raschbirnbauma\raschbirnbauma($response, "Rasch_1PL");
$paramsmodel1pl = catcalc::estimate_item_params($synthitemresponse, $model1pl, $start);

// Estimate item parameter with 2 PL.

$start = [1, 3];
$model2pl = new \catmodel_raschbirnbaumb\raschbirnbaumb($response, "Rasch_2PL");
$paramsmodel2pl = catcalc::estimate_item_params($synthitemresponse, $model2pl, $start);

// Estimate item parameter with 3 PL.

$start = [1, 3, 0.2];
$model3pl = new \catmodel_raschbirnbaumc\raschbirnbaumc($response, "Rasch_3PL");
$paramsmodel3pl = catcalc::estimate_item_params($synthitemresponse, $model3pl, $start);

echo "finished";

echo $OUTPUT->footer();
