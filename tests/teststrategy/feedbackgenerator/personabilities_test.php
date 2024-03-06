<?php
// This file is part of Moodle - http =>//moodle.org/
//
// Moodle is free software => you can redistribute it and/or modify
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
// along with Moodle.  If not, see <http =>//www.gnu.org/licenses/>.

/**
 * Tests the feedbackgenerator personability.
 *
 * @package    local_catquiz
 * @author David Szkiba <david.szkiba@wunderbyte.at>
 * @copyright  2023 Georg Maißer <info@wunderbyte.at>
 * @license    http =>//www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_catquiz;

use basic_testcase;
use local_catquiz\teststrategy\feedbackgenerator\customscalefeedback;
use local_catquiz\teststrategy\feedbackgenerator\personabilities;
use local_catquiz\teststrategy\feedbacksettings;
use PHPUnit\Framework\ExpectationFailedException;
use SebastianBergmann\RecursionContext\InvalidArgumentException;
use UnexpectedValueException;

/**
 * Tests the feedbackgenerator personability.
 *
 * @package    local_catquiz
 * @author     David Szkiba, Magdalena Holczik
 * @copyright  2024 Wunderbyte GmbH <info@wunderbyte.at>
 * @license    http =>//www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * @covers \local_catquiz\teststrategy\preselect_task\filterforsubscale
 */
class personabilities_test extends basic_testcase {

    /**
     * Test that questions of subscales are removed as needed.
     *
     * @param array $feedbackdata
     * @param array $expected
     *
     * @return void
     * @throws InvalidArgumentException
     * @throws ExpectationFailedException
     * @dataProvider get_studentfeedback_provider
     */
    public function test_get_studentfeedback(array $feedbackdata, array $expected) {

        $feedbacksettings = new feedbacksettings(LOCAL_CATQUIZ_STRATEGY_LOWESTSUB);
        $personabilities = new personabilities($feedbacksettings);
        $output = $personabilities->get_studentfeedback($feedbackdata);
        $this->assertEquals($expected, $output);
    }

    /**
     * Data provider for test_get_studentfeedback.
     *
     * @return array
     *
     */
    public static function get_studentfeedback_provider(): array {

        return [
            'lowestskillgap' => [
                'feedbackdata' => [
                    'personabilities_abilities' => [
                        '271' => [
                            'value' => "-2.5175",
                            'primary' => "true",
                            'toreport' => "true",
                            'name' => "Simulation",
                        ],
                        '272' => [
                            'value' => "-2.51755",
                        ],
                        '273' => [
                            'value' => "-2.51755",
                        ],
                    ],
                    'primaryscale' => [
                        'id' => '271',
                        'name' => 'Simulation',
                        'parentid' => '0',
                    ],
                    'quizsettings' => self::return_quizsettings(),
                ],
                'expected' => [
                    'heading' => 'Feedback',
                    'content' => 'There was no valid feedback found.',
                ],
            ],
        ];
    }

    /**
     * Returns array of quizsettings.
     *
     * @return array
     *
     */
    private static function return_quizsettings(): array {
        return [
            "name" => "Neuer Test Test",
            "showdescription" => "0",
            "attempts" => "0",
            "password" => "",
            "browsersecurity" => "0",
            "attemptfeedback" => "",
            "showattemptprogress" => "0",
            "catmodel" => "catquiz",
            "choosetemplate" => "0",
            "testenvironment_addoredittemplate" => "0",
            "catquiz_catscales" => "271",
            "catquiz_subscalecheckbox_272" => "1",
            "catquiz_subscalecheckbox_273" => "1",
            "catquiz_subscalecheckbox_274" => "1",
            "catquiz_subscalecheckbox_275" => "1",
            "catquiz_subscalecheckbox_277" => "1",
            "catquiz_subscalecheckbox_278" => "1",
            "catquiz_subscalecheckbox_279" => "1",
            "catquiz_subscalecheckbox_276" => "1",
            "catquiz_subscalecheckbox_280" => "1",
            "catquiz_subscalecheckbox_281" => "1",
            "catquiz_subscalecheckbox_282" => "1",
            "catquiz_subscalecheckbox_283" => "1",
            "catquiz_subscalecheckbox_284" => "1",
            "catquiz_subscalecheckbox_285" => "1",
            "catquiz_subscalecheckbox_286" => "1",
            "catquiz_subscalecheckbox_287" => "1",
            "catquiz_subscalecheckbox_288" => "1",
            "catquiz_subscalecheckbox_289" => "1",
            "catquiz_subscalecheckbox_290" => "1",
            "catquiz_subscalecheckbox_291" => "1",
            "catquiz_subscalecheckbox_292" => "1",
            "catquiz_subscalecheckbox_293" => "1",
            "catquiz_subscalecheckbox_294" => "1",
            "catquiz_subscalecheckbox_295" => "1",
            "catquiz_passinglevel" => "",
            "catquiz_selectteststrategy" => "4",
            "catquiz_includepilotquestions" => "0",
            "catquiz_selectfirstquestion" => "startwitheasiestquestion",
            "maxquestionsgroup" => [
                "catquiz_minquestions" => 2,
                "catquiz_maxquestions" => 7,
            ],
            "maxquestionsscalegroup" => [
                "catquiz_minquestionspersubscale" => 2,
                "catquiz_maxquestionspersubscale" => 7,
            ],
            "catquiz_standarderrorgroup" => [
                "catquiz_standarderror_min" => 0.1,
                "catquiz_standarderror_max" => 2,
            ],
            "catquiz_includetimelimit" => "0",
            "numberoffeedbackoptionsselect" => "2",
            "catquiz_scalereportcheckbox_271" => "1",
            "feedback_scaleid_limit_lower_271_1" => "-3",
            "feedback_scaleid_limit_upper_271_1" => "0",
            "feedbackeditor_scaleid_271_1" => [
                "text" => "<p dir=\"ltr\" style=\"text-align => left;\">Feedback f\u00fcr Simulation!<\/p>",
                "format" => "1",
                "itemid" => "456277333",
            ],
            "feedbacklegend_scaleid_271_1" => "rot",
            "wb_colourpicker_271_1" => "3",
            "selectedcolour" => "",
            "catquiz_courses_271_1" => [],
            "catquiz_group_271_1" => "",
            "enrolment_message_checkbox_271_1" => "0",
            "feedback_scaleid_limit_lower_271_2" => "0",
            "feedback_scaleid_limit_upper_271_2" => "3",
            "feedbackeditor_scaleid_271_2" => [
                "text" => "<p dir=\"ltr\" style=\"text-align => left;\">Simulation Feedback gr\u00fcn!<\/p>",
                "format" => "1",
                "itemid" => "729257697",
            ],
            "feedbacklegend_scaleid_271_2" => "gr\u00fcn!",
            "wb_colourpicker_271_2" => "6",
            "catquiz_courses_271_2" => [],
            "catquiz_group_271_2" => "",
            "enrolment_message_checkbox_271_2" => "0",
            "catquiz_scalereportcheckbox_272" => "1",
            "feedback_scaleid_limit_lower_272_1" => "-3",
            "feedback_scaleid_limit_upper_272_1" => "0",
            "feedbackeditor_scaleid_272_1" => [
                "text" => "",
                "format" => "1",
                "itemid" => "438620153",
            ],
            "feedbacklegend_scaleid_272_1" => "",
            "wb_colourpicker_272_1" => "3",
            "catquiz_courses_272_1" => [],
            "catquiz_group_272_1" => "",
            "enrolment_message_checkbox_272_1" => "0",
            "feedback_scaleid_limit_lower_272_2" => "0",
            "feedback_scaleid_limit_upper_272_2" => "3",
            "feedbackeditor_scaleid_272_2" => [
                "text" => "",
                "format" => "1",
                "itemid" => "739292679",
            ],
            "feedbacklegend_scaleid_272_2" => "",
            "wb_colourpicker_272_2" => "6",
            "catquiz_courses_272_2" => [],
            "catquiz_group_272_2" => "",
            "enrolment_message_checkbox_272_2" => "0",
            "catquiz_scalereportcheckbox_273" => "1",
            "feedback_scaleid_limit_lower_273_1" => "-3",
            "feedback_scaleid_limit_upper_273_1" => "0",
            "feedbackeditor_scaleid_273_1" => [
                "text" => "",
                "format" => "1",
                "itemid" => "604232012",
            ],
            "feedbacklegend_scaleid_273_1" => "",
            "wb_colourpicker_273_1" => "3",
            "catquiz_courses_273_1" => [],
            "catquiz_group_273_1" => "",
            "enrolment_message_checkbox_273_1" => "0",
            "feedback_scaleid_limit_lower_273_2" => "0",
            "feedback_scaleid_limit_upper_273_2" => "3",
            "feedbackeditor_scaleid_273_2" => [
                "text" => "",
                "format" => "1",
                "itemid" => "852008641",
            ],
            "feedbacklegend_scaleid_273_2" => "",
            "wb_colourpicker_273_2" => "6",
            "catquiz_courses_273_2" => [],
            "catquiz_group_273_2" => "",
            "enrolment_message_checkbox_273_2" => "0",
            "catquiz_scalereportcheckbox_274" => "1",
            "feedback_scaleid_limit_lower_274_1" => "-3",
            "feedback_scaleid_limit_upper_274_1" => "0",
            "feedbackeditor_scaleid_274_1" => [
                "text" => "",
                "format" => "1",
                "itemid" => "790306459",
            ],
            "feedbacklegend_scaleid_274_1" => "",
            "wb_colourpicker_274_1" => "3",
            "catquiz_courses_274_1" => [],
            "catquiz_group_274_1" => "",
            "enrolment_message_checkbox_274_1" => "0",
            "feedback_scaleid_limit_lower_274_2" => "0",
            "feedback_scaleid_limit_upper_274_2" => "3",
            "feedbackeditor_scaleid_274_2" => [
                "text" => "",
                "format" => "1",
                "itemid" => "602522636",
            ],
            "feedbacklegend_scaleid_274_2" => "",
            "wb_colourpicker_274_2" => "6",
            "catquiz_courses_274_2" => [],
            "catquiz_group_274_2" => "",
            "enrolment_message_checkbox_274_2" => "0",
            "catquiz_scalereportcheckbox_275" => "1",
            "feedback_scaleid_limit_lower_275_1" => "-3",
            "feedback_scaleid_limit_upper_275_1" => "0",
            "feedbackeditor_scaleid_275_1" => [
                "text" => "",
                "format" => "1",
                "itemid" => "158336160",
            ],
            "feedbacklegend_scaleid_275_1" => "",
            "wb_colourpicker_275_1" => "3",
            "catquiz_courses_275_1" => [],
            "catquiz_group_275_1" => "",
            "enrolment_message_checkbox_275_1" => "0",
            "feedback_scaleid_limit_lower_275_2" => "0",
            "feedback_scaleid_limit_upper_275_2" => "3",
            "feedbackeditor_scaleid_275_2" => [
                "text" => "",
                "format" => "1",
                "itemid" => "427741918",
            ],
            "feedbacklegend_scaleid_275_2" => "",
            "wb_colourpicker_275_2" => "6",
            "catquiz_courses_275_2" => [],
            "catquiz_group_275_2" => "",
            "enrolment_message_checkbox_275_2" => "0",
            "catquiz_scalereportcheckbox_277" => "1",
            "feedback_scaleid_limit_lower_277_1" => "-3",
            "feedback_scaleid_limit_upper_277_1" => "0",
            "feedbackeditor_scaleid_277_1" => [
                "text" => "",
                "format" => "1",
                "itemid" => "236941169",
            ],
            "feedbacklegend_scaleid_277_1" => "",
            "wb_colourpicker_277_1" => "3",
            "catquiz_courses_277_1" => [],
            "catquiz_group_277_1" => "",
            "enrolment_message_checkbox_277_1" => "0",
            "feedback_scaleid_limit_lower_277_2" => "0",
            "feedback_scaleid_limit_upper_277_2" => "3",
            "feedbackeditor_scaleid_277_2" => [
                "text" => "",
                "format" => "1",
                "itemid" => "272879686",
            ],
            "feedbacklegend_scaleid_277_2" => "",
            "wb_colourpicker_277_2" => "6",
            "catquiz_courses_277_2" => [],
            "catquiz_group_277_2" => "",
            "enrolment_message_checkbox_277_2" => "0",
            "catquiz_scalereportcheckbox_278" => "1",
            "feedback_scaleid_limit_lower_278_1" => "-3",
            "feedback_scaleid_limit_upper_278_1" => "0",
            "feedbackeditor_scaleid_278_1" => [
                "text" => "",
                "format" => "1",
                "itemid" => "986841251",
            ],
            "feedbacklegend_scaleid_278_1" => "",
            "wb_colourpicker_278_1" => "3",
            "catquiz_courses_278_1" => [],
            "catquiz_group_278_1" => "",
            "enrolment_message_checkbox_278_1" => "0",
            "feedback_scaleid_limit_lower_278_2" => "0",
            "feedback_scaleid_limit_upper_278_2" => "3",
            "feedbackeditor_scaleid_278_2" => [
                "text" => "",
                "format" => "1",
                "itemid" => "438443767",
            ],
            "feedbacklegend_scaleid_278_2" => "",
            "wb_colourpicker_278_2" => "6",
            "catquiz_courses_278_2" => [],
            "catquiz_group_278_2" => "",
            "enrolment_message_checkbox_278_2" => "0",
            "catquiz_scalereportcheckbox_279" => "1",
            "feedback_scaleid_limit_lower_279_1" => "-3",
            "feedback_scaleid_limit_upper_279_1" => "0",
            "feedbackeditor_scaleid_279_1" => [
                "text" => "",
                "format" => "1",
                "itemid" => "916584383",
            ],
            "feedbacklegend_scaleid_279_1" => "",
            "wb_colourpicker_279_1" => "3",
            "catquiz_courses_279_1" => [],
            "catquiz_group_279_1" => "",
            "enrolment_message_checkbox_279_1" => "0",
            "feedback_scaleid_limit_lower_279_2" => "0",
            "feedback_scaleid_limit_upper_279_2" => "3",
            "feedbackeditor_scaleid_279_2" => [
                "text" => "",
                "format" => "1",
                "itemid" => "23475802",
            ],
            "feedbacklegend_scaleid_279_2" => "",
            "wb_colourpicker_279_2" => "6",
            "catquiz_courses_279_2" => [],
            "catquiz_group_279_2" => "",
            "enrolment_message_checkbox_279_2" => "0",
            "catquiz_scalereportcheckbox_276" => "1",
            "feedback_scaleid_limit_lower_276_1" => "-3",
            "feedback_scaleid_limit_upper_276_1" => "0",
            "feedbackeditor_scaleid_276_1" => [
                "text" => "",
                "format" => "1",
                "itemid" => "70206690",
            ],
            "feedbacklegend_scaleid_276_1" => "",
            "wb_colourpicker_276_1" => "3",
            "catquiz_courses_276_1" => [],
            "catquiz_group_276_1" => "",
            "enrolment_message_checkbox_276_1" => "0",
            "feedback_scaleid_limit_lower_276_2" => "0",
            "feedback_scaleid_limit_upper_276_2" => "3",
            "feedbackeditor_scaleid_276_2" => [
                "text" => "",
                "format" => "1",
                "itemid" => "870359857",
            ],
            "feedbacklegend_scaleid_276_2" => "",
            "wb_colourpicker_276_2" => "6",
            "catquiz_courses_276_2" => [],
            "catquiz_group_276_2" => "",
            "enrolment_message_checkbox_276_2" => "0",
            "catquiz_scalereportcheckbox_280" => "1",
            "feedback_scaleid_limit_lower_280_1" => "-3",
            "feedback_scaleid_limit_upper_280_1" => "0",
            "feedbackeditor_scaleid_280_1" => [
                "text" => "",
                "format" => "1",
                "itemid" => "243898310",
            ],
            "feedbacklegend_scaleid_280_1" => "",
            "wb_colourpicker_280_1" => "3",
            "catquiz_courses_280_1" => [],
            "catquiz_group_280_1" => "",
            "enrolment_message_checkbox_280_1" => "0",
            "feedback_scaleid_limit_lower_280_2" => "0",
            "feedback_scaleid_limit_upper_280_2" => "3",
            "feedbackeditor_scaleid_280_2" => [
                "text" => "",
                "format" => "1",
                "itemid" => "528033077",
            ],
            "feedbacklegend_scaleid_280_2" => "",
            "wb_colourpicker_280_2" => "6",
            "catquiz_courses_280_2" => [],
            "catquiz_group_280_2" => "",
            "enrolment_message_checkbox_280_2" => "0",
            "catquiz_scalereportcheckbox_281" => "1",
            "feedback_scaleid_limit_lower_281_1" => "-3",
            "feedback_scaleid_limit_upper_281_1" => "0",
            "feedbackeditor_scaleid_281_1" => [
                "text" => "",
                "format" => "1",
                "itemid" => "622311123",
            ],
            "feedbacklegend_scaleid_281_1" => "",
            "wb_colourpicker_281_1" => "3",
            "catquiz_courses_281_1" => [],
            "catquiz_group_281_1" => "",
            "enrolment_message_checkbox_281_1" => "0",
            "feedback_scaleid_limit_lower_281_2" => "0",
            "feedback_scaleid_limit_upper_281_2" => "3",
            "feedbackeditor_scaleid_281_2" => [
                "text" => "",
                "format" => "1",
                "itemid" => "220586735",
            ],
            "feedbacklegend_scaleid_281_2" => "",
            "wb_colourpicker_281_2" => "6",
            "catquiz_courses_281_2" => [],
            "catquiz_group_281_2" => "",
            "enrolment_message_checkbox_281_2" => "0",
            "catquiz_scalereportcheckbox_282" => "1",
            "feedback_scaleid_limit_lower_282_1" => "-3",
            "feedback_scaleid_limit_upper_282_1" => "0",
            "feedbackeditor_scaleid_282_1" => [
                "text" => "",
                "format" => "1",
                "itemid" => "866185775",
            ],
            "feedbacklegend_scaleid_282_1" => "",
            "wb_colourpicker_282_1" => "3",
            "catquiz_courses_282_1" => [],
            "catquiz_group_282_1" => "",
            "enrolment_message_checkbox_282_1" => "0",
            "feedback_scaleid_limit_lower_282_2" => "0",
            "feedback_scaleid_limit_upper_282_2" => "3",
            "feedbackeditor_scaleid_282_2" => [
                "text" => "",
                "format" => "1",
                "itemid" => "882967691",
            ],
            "feedbacklegend_scaleid_282_2" => "",
            "wb_colourpicker_282_2" => "6",
            "catquiz_courses_282_2" => [],
            "catquiz_group_282_2" => "",
            "enrolment_message_checkbox_282_2" => "0",
            "catquiz_scalereportcheckbox_283" => "1",
            "feedback_scaleid_limit_lower_283_1" => "-3",
            "feedback_scaleid_limit_upper_283_1" => "0",
            "feedbackeditor_scaleid_283_1" => [
                "text" => "",
                "format" => "1",
                "itemid" => "870174961",
            ],
            "feedbacklegend_scaleid_283_1" => "",
            "wb_colourpicker_283_1" => "3",
            "catquiz_courses_283_1" => [],
            "catquiz_group_283_1" => "",
            "enrolment_message_checkbox_283_1" => "0",
            "feedback_scaleid_limit_lower_283_2" => "0",
            "feedback_scaleid_limit_upper_283_2" => "3",
            "feedbackeditor_scaleid_283_2" => [
                "text" => "",
                "format" => "1",
                "itemid" => "293702434",
            ],
            "feedbacklegend_scaleid_283_2" => "",
            "wb_colourpicker_283_2" => "6",
            "catquiz_courses_283_2" => [],
            "catquiz_group_283_2" => "",
            "enrolment_message_checkbox_283_2" => "0",
            "catquiz_scalereportcheckbox_284" => "1",
            "feedback_scaleid_limit_lower_284_1" => "-3",
            "feedback_scaleid_limit_upper_284_1" => "0",
            "feedbackeditor_scaleid_284_1" => [
                "text" => "",
                "format" => "1",
                "itemid" => "812838393",
            ],
            "feedbacklegend_scaleid_284_1" => "",
            "wb_colourpicker_284_1" => "3",
            "catquiz_courses_284_1" => [],
            "catquiz_group_284_1" => "",
            "enrolment_message_checkbox_284_1" => "0",
            "feedback_scaleid_limit_lower_284_2" => "0",
            "feedback_scaleid_limit_upper_284_2" => "3",
            "feedbackeditor_scaleid_284_2" => [
                "text" => "",
                "format" => "1",
                "itemid" => "966612654",
            ],
            "feedbacklegend_scaleid_284_2" => "",
            "wb_colourpicker_284_2" => "6",
            "catquiz_courses_284_2" => [],
            "catquiz_group_284_2" => "",
            "enrolment_message_checkbox_284_2" => "0",
            "catquiz_scalereportcheckbox_285" => "1",
            "feedback_scaleid_limit_lower_285_1" => "-3",
            "feedback_scaleid_limit_upper_285_1" => "0",
            "feedbackeditor_scaleid_285_1" => [
                "text" => "",
                "format" => "1",
                "itemid" => "866586526",
            ],
            "feedbacklegend_scaleid_285_1" => "",
            "wb_colourpicker_285_1" => "3",
            "catquiz_courses_285_1" => [],
            "catquiz_group_285_1" => "",
            "enrolment_message_checkbox_285_1" => "0",
            "feedback_scaleid_limit_lower_285_2" => "0",
            "feedback_scaleid_limit_upper_285_2" => "3",
            "feedbackeditor_scaleid_285_2" => [
                "text" => "",
                "format" => "1",
                "itemid" => "739680193",
            ],
            "feedbacklegend_scaleid_285_2" => "",
            "wb_colourpicker_285_2" => "6",
            "catquiz_courses_285_2" => [],
            "catquiz_group_285_2" => "",
            "enrolment_message_checkbox_285_2" => "0",
            "catquiz_scalereportcheckbox_286" => "1",
            "feedback_scaleid_limit_lower_286_1" => "-3",
            "feedback_scaleid_limit_upper_286_1" => "0",
            "feedbackeditor_scaleid_286_1" => [
                "text" => "",
                "format" => "1",
                "itemid" => "70410854",
            ],
            "feedbacklegend_scaleid_286_1" => "",
            "wb_colourpicker_286_1" => "3",
            "catquiz_courses_286_1" => [],
            "catquiz_group_286_1" => "",
            "enrolment_message_checkbox_286_1" => "0",
            "feedback_scaleid_limit_lower_286_2" => "0",
            "feedback_scaleid_limit_upper_286_2" => "3",
            "feedbackeditor_scaleid_286_2" => [
                "text" => "",
                "format" => "1",
                "itemid" => "909817799",
            ],
            "feedbacklegend_scaleid_286_2" => "",
            "wb_colourpicker_286_2" => "6",
            "catquiz_courses_286_2" => [],
            "catquiz_group_286_2" => "",
            "enrolment_message_checkbox_286_2" => "0",
            "catquiz_scalereportcheckbox_287" => "1",
            "feedback_scaleid_limit_lower_287_1" => "-3",
            "feedback_scaleid_limit_upper_287_1" => "0",
            "feedbackeditor_scaleid_287_1" => [
                "text" => "",
                "format" => "1",
                "itemid" => "179566669",
            ],
            "feedbacklegend_scaleid_287_1" => "",
            "wb_colourpicker_287_1" => "3",
            "catquiz_courses_287_1" => [],
            "catquiz_group_287_1" => "",
            "enrolment_message_checkbox_287_1" => "0",
            "feedback_scaleid_limit_lower_287_2" => "0",
            "feedback_scaleid_limit_upper_287_2" => "3",
            "feedbackeditor_scaleid_287_2" => [
                "text" => "",
                "format" => "1",
                "itemid" => "379981478",
            ],
            "feedbacklegend_scaleid_287_2" => "",
            "wb_colourpicker_287_2" => "6",
            "catquiz_courses_287_2" => [],
            "catquiz_group_287_2" => "",
            "enrolment_message_checkbox_287_2" => "0",
            "catquiz_scalereportcheckbox_288" => "1",
            "feedback_scaleid_limit_lower_288_1" => "-3",
            "feedback_scaleid_limit_upper_288_1" => "0",
            "feedbackeditor_scaleid_288_1" => [
                "text" => "",
                "format" => "1",
                "itemid" => "555403158",
            ],
            "feedbacklegend_scaleid_288_1" => "",
            "wb_colourpicker_288_1" => "3",
            "catquiz_courses_288_1" => [],
            "catquiz_group_288_1" => "",
            "enrolment_message_checkbox_288_1" => "0",
            "feedback_scaleid_limit_lower_288_2" => "0",
            "feedback_scaleid_limit_upper_288_2" => "3",
            "feedbackeditor_scaleid_288_2" => [
                "text" => "",
                "format" => "1",
                "itemid" => "438134489",
            ],
            "feedbacklegend_scaleid_288_2" => "",
            "wb_colourpicker_288_2" => "6",
            "catquiz_courses_288_2" => [],
            "catquiz_group_288_2" => "",
            "enrolment_message_checkbox_288_2" => "0",
            "catquiz_scalereportcheckbox_289" => "1",
            "feedback_scaleid_limit_lower_289_1" => "-3",
            "feedback_scaleid_limit_upper_289_1" => "0",
            "feedbackeditor_scaleid_289_1" => [
                "text" => "",
                "format" => "1",
                "itemid" => "301714681",
            ],
            "feedbacklegend_scaleid_289_1" => "",
            "wb_colourpicker_289_1" => "3",
            "catquiz_courses_289_1" => [],
            "catquiz_group_289_1" => "",
            "enrolment_message_checkbox_289_1" => "0",
            "feedback_scaleid_limit_lower_289_2" => "0",
            "feedback_scaleid_limit_upper_289_2" => "3",
            "feedbackeditor_scaleid_289_2" => [
                "text" => "",
                "format" => "1",
                "itemid" => "399438379",
            ],
            "feedbacklegend_scaleid_289_2" => "",
            "wb_colourpicker_289_2" => "6",
            "catquiz_courses_289_2" => [],
            "catquiz_group_289_2" => "",
            "enrolment_message_checkbox_289_2" => "0",
            "catquiz_scalereportcheckbox_290" => "1",
            "feedback_scaleid_limit_lower_290_1" => "-3",
            "feedback_scaleid_limit_upper_290_1" => "0",
            "feedbackeditor_scaleid_290_1" => [
                "text" => "",
                "format" => "1",
                "itemid" => "644817590",
            ],
            "feedbacklegend_scaleid_290_1" => "",
            "wb_colourpicker_290_1" => "3",
            "catquiz_courses_290_1" => [],
            "catquiz_group_290_1" => "",
            "enrolment_message_checkbox_290_1" => "0",
            "feedback_scaleid_limit_lower_290_2" => "0",
            "feedback_scaleid_limit_upper_290_2" => "3",
            "feedbackeditor_scaleid_290_2" => [
                "text" => "",
                "format" => "1",
                "itemid" => "237433644",
            ],
            "feedbacklegend_scaleid_290_2" => "",
            "wb_colourpicker_290_2" => "6",
            "catquiz_courses_290_2" => [],
            "catquiz_group_290_2" => "",
            "enrolment_message_checkbox_290_2" => "0",
            "catquiz_scalereportcheckbox_291" => "1",
            "feedback_scaleid_limit_lower_291_1" => "-3",
            "feedback_scaleid_limit_upper_291_1" => "0",
            "feedbackeditor_scaleid_291_1" => [
                "text" => "",
                "format" => "1",
                "itemid" => "705139951",
            ],
            "feedbacklegend_scaleid_291_1" => "",
            "wb_colourpicker_291_1" => "3",
            "catquiz_courses_291_1" => [],
            "catquiz_group_291_1" => "",
            "enrolment_message_checkbox_291_1" => "0",
            "feedback_scaleid_limit_lower_291_2" => "0",
            "feedback_scaleid_limit_upper_291_2" => "3",
            "feedbackeditor_scaleid_291_2" => [
                "text" => "",
                "format" => "1",
                "itemid" => "142604445",
            ],
            "feedbacklegend_scaleid_291_2" => "",
            "wb_colourpicker_291_2" => "6",
            "catquiz_courses_291_2" => [],
            "catquiz_group_291_2" => "",
            "enrolment_message_checkbox_291_2" => "0",
            "catquiz_scalereportcheckbox_292" => "1",
            "feedback_scaleid_limit_lower_292_1" => "-3",
            "feedback_scaleid_limit_upper_292_1" => "0",
            "feedbackeditor_scaleid_292_1" => [
                "text" => "",
                "format" => "1",
                "itemid" => "150833516",
            ],
            "feedbacklegend_scaleid_292_1" => "",
            "wb_colourpicker_292_1" => "3",
            "catquiz_courses_292_1" => [],
            "catquiz_group_292_1" => "",
            "enrolment_message_checkbox_292_1" => "0",
            "feedback_scaleid_limit_lower_292_2" => "0",
            "feedback_scaleid_limit_upper_292_2" => "3",
            "feedbackeditor_scaleid_292_2" => [
                "text" => "",
                "format" => "1",
                "itemid" => "791078276",
            ],
            "feedbacklegend_scaleid_292_2" => "",
            "wb_colourpicker_292_2" => "6",
            "catquiz_courses_292_2" => [],
            "catquiz_group_292_2" => "",
            "enrolment_message_checkbox_292_2" => "0",
            "catquiz_scalereportcheckbox_293" => "1",
            "feedback_scaleid_limit_lower_293_1" => "-3",
            "feedback_scaleid_limit_upper_293_1" => "0",
            "feedbackeditor_scaleid_293_1" => [
                "text" => "",
                "format" => "1",
                "itemid" => "583549774",
            ],
            "feedbacklegend_scaleid_293_1" => "",
            "wb_colourpicker_293_1" => "3",
            "catquiz_courses_293_1" => [],
            "catquiz_group_293_1" => "",
            "enrolment_message_checkbox_293_1" => "0",
            "feedback_scaleid_limit_lower_293_2" => "0",
            "feedback_scaleid_limit_upper_293_2" => "3",
            "feedbackeditor_scaleid_293_2" => [
                "text" => "",
                "format" => "1",
                "itemid" => "202968023",
            ],
            "feedbacklegend_scaleid_293_2" => "",
            "wb_colourpicker_293_2" => "6",
            "catquiz_courses_293_2" => [],
            "catquiz_group_293_2" => "",
            "enrolment_message_checkbox_293_2" => "0",
            "catquiz_scalereportcheckbox_294" => "1",
            "feedback_scaleid_limit_lower_294_1" => "-3",
            "feedback_scaleid_limit_upper_294_1" => "0",
            "feedbackeditor_scaleid_294_1" => [
                "text" => "",
                "format" => "1",
                "itemid" => "742602749",
            ],
            "feedbacklegend_scaleid_294_1" => "",
            "wb_colourpicker_294_1" => "3",
            "catquiz_courses_294_1" => [],
            "catquiz_group_294_1" => "",
            "enrolment_message_checkbox_294_1" => "0",
            "feedback_scaleid_limit_lower_294_2" => "0",
            "feedback_scaleid_limit_upper_294_2" => "3",
            "feedbackeditor_scaleid_294_2" => [
                "text" => "",
                "format" => "1",
                "itemid" => "442729251",
            ],
            "feedbacklegend_scaleid_294_2" => "",
            "wb_colourpicker_294_2" => "6",
            "catquiz_courses_294_2" => [],
            "catquiz_group_294_2" => "",
            "enrolment_message_checkbox_294_2" => "0",
            "catquiz_scalereportcheckbox_295" => "1",
            "feedback_scaleid_limit_lower_295_1" => "-3",
            "feedback_scaleid_limit_upper_295_1" => "0",
            "feedbackeditor_scaleid_295_1" => [
                "text" => "",
                "format" => "1",
                "itemid" => "532234971",
            ],
            "feedbacklegend_scaleid_295_1" => "",
            "wb_colourpicker_295_1" => "3",
            "catquiz_courses_295_1" => [],
            "catquiz_group_295_1" => "",
            "enrolment_message_checkbox_295_1" => "0",
            "feedback_scaleid_limit_lower_295_2" => "0",
            "feedback_scaleid_limit_upper_295_2" => "3",
            "feedbackeditor_scaleid_295_2" => [
                "text" => "",
                "format" => "1",
                "itemid" => "754853655",
            ],
            "feedbacklegend_scaleid_295_2" => "",
            "wb_colourpicker_295_2" => "6",
            "catquiz_courses_295_2" => [],
            "catquiz_group_295_2" => "",
            "enrolment_message_checkbox_295_2" => "0",
            "catmodelfieldsmarker" => 0,
            "gradecat" => "8",
            "gradepass" => null,
            "grademethod" => "1",
            "visible" => 1,
            "visibleoncoursepage" => 1,
            "cmidnumber" => "",
            "lang" => "",
            "groupmode" => "0",
            "groupingid" => "0",
            "availabilityconditionsjson" => "{\"op\" =>\"&\",\"c\" =>[],\"showc\" =>[]}",
            "completionunlocked" => 0,
            "completion" => "1",
            "completionexpected" => 0,
            "tags" => [],
            "coursemodule" => "1019",
            "module" => 30,
            "modulename" => "adaptivequiz",
            "add" => "0",
            "update" => 1019,
            "return" => 1,
            "sr" => 0,
            "beforemod" => 0,
            "competencies" => [],
            "competency_rule" => "0",
            "override_grade" => 0,
            "submitbutton" => "Speichern und anzeigen",
            "mform_isexpanded_id_catmodelheading" => 1,
            "mform_isexpanded_id_catquiz_header" => 1,
            "mform_isexpanded_id_catquiz_teststrategy" => 1,
            "mform_isexpanded_id_catquiz_feedback" => 1,
            "frontend" => true,
            "completionview" => 0,
            "completionpassgrade" => 0,
            "completiongradeitemnumber" => null,
            "conditiongradegroup" => [],
            "conditionfieldgroup" => [],
            "downloadcontent" => 1,
            "intro" => "",
            "introformat" => "1",
            "timemodified" => 1709737727,
            "showabilitymeasure" => 0
        ];
    }

}
