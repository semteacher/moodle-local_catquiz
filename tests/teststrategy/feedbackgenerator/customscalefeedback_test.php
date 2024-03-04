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
 * Tests the filterforsubscale class.
 *
 * @package    local_catquiz
 * @author David Szkiba <david.szkiba@wunderbyte.at>
 * @copyright  2023 Georg Maißer <info@wunderbyte.at>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_catquiz;

use basic_testcase;
use local_catquiz\teststrategy\feedbackgenerator\customscalefeedback;
use local_catquiz\teststrategy\feedbacksettings;
use PHPUnit\Framework\ExpectationFailedException;
use SebastianBergmann\RecursionContext\InvalidArgumentException;
use UnexpectedValueException;

/**
 * Tests the filterforsubscale class.
 *
 * @package    local_catquiz
 * @author     David Szkiba, Magdalena Holczik
 * @copyright  2024 Wunderbyte GmbH <info@wunderbyte.at>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * @covers \local_catquiz\teststrategy\preselect_task\filterforsubscale
 */
class customscalefeedback_test extends basic_testcase {

    /**
     * Test that questions of subscales are removed as needed.
     *
     * @param array $catscales
     * @param array $feedbackdata
     * @param array $expected
     *
     * @return void
     * @throws InvalidArgumentException
     * @throws ExpectationFailedException
     * @dataProvider get_studentfeedback_provider
     */
    public function test_get_studentfeedback(array $catscales, array $feedbackdata, array $expected) {

        $feedbacksettings = new feedbacksettings(LOCAL_CATQUIZ_STRATEGY_LOWESTSUB);
        $customscalefeedback = $this->getMockBuilder(customscalefeedback::class)
            ->onlyMethods([
                'get_catscales',
            ])
            ->setConstructorArgs([$feedbacksettings])
            ->getMock();

        // Configure the stub.
        $customscalefeedback->method('get_catscales')
            ->willReturn($catscales);

        $output = $customscalefeedback->get_studentfeedback($feedbackdata);
        $this->assertEquals($expected, $output);
    }

    public static function get_studentfeedback_provider() {
        return [
            'lowestskillgap' => [
                'catscales' => [ '272' => (object) [
                    'name' => 'Skala 272',
                    ],
                ],
                'feedbackdata' => [
                    'customscalefeedback_abilities' => [
                        '272' => [
                            'value' => "1.5"
                        ],
                    ],
                    'quizsettings' => [
                        "numberoffeedbackoptionsselect" => "2",
                        "feedback_scaleid_limit_lower_272_1" => "-3",
                        "feedback_scaleid_limit_upper_272_1" => "0",
                        "feedbackeditor_scaleid_272_1" => (object) [
                            "text" => "<p dir=\"ltr\" style=\"text-align: left;\">adsfafs<\/p>",
                            "format" => "1",
                            "itemid" => "903590937",
                        ],
                        "feedback_scaleid_limit_lower_272_2" => "0",
                        "feedback_scaleid_limit_upper_272_2" => "3",
                        "feedbackeditor_scaleid_272_2" => (object) [
                            "text" => "<p dir=\"ltr\" style=\"text-align: left;\">adsfafs<\/p>",
                            "format" => "1",
                            "itemid" => "903590937",
                        ],
                    ],
                ],
                'expected' => [
                    'heading' => 'Feedback',
                    'content' => 'Skala 272: <p dir="ltr" style="text-align: left;">adsfafs<\/p><br/>'
                ]
            ]
                ];
    }

}
