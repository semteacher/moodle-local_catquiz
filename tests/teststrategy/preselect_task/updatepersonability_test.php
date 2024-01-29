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
 * Tests the updatepersonability class
 *
 * @package    local_catquiz
 * @author David Szkiba <david.szkiba@wunderbyte.at>
 * @copyright  2023 Georg Maißer <info@wunderbyte.at>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_catquiz\teststrategy\preselect_task;

use local_catquiz\local\result;
use local_catquiz\teststrategy\preselect_task\updatepersonability_testing;
use local_catquiz\teststrategy\progress;
use PHPUnit\Framework\ExpectationFailedException;
use PHPUnit\Framework\TestCase;
use SebastianBergmann\RecursionContext\InvalidArgumentException;

/**
 * Tests the updatepersonability class
 *
 * @package    local_catquiz
 * @author David Szkiba <david.szkiba@wunderbyte.at>
 * @copyright  2023 Georg Maißer <info@wunderbyte.at>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * @covers \local_catquiz\teststrategy\preselect_task\updatepersonability
 */
class updatepersonability_test extends TestCase {

    /**
     * Tests that the ability is not updated in cases where it should not be updated.
     *
     * @dataProvider skippedprovider
     *
     * @param mixed $expected
     * @param mixed $lastquestion
     * @param mixed $context
     *
     * @return mixed
     * @throws InvalidArgumentException
     * @throws ExpectationFailedException
     *
     */
    public function test_ability_calculation_is_skipped_correctly($expected, $lastquestion, $context) {
        // We can not add a stub in the provider, so we do it here.
        $progressstub = $this->createStub(progress::class);
        $progressstub->method('get_last_question')
            ->willReturn($lastquestion);
        $context['progress'] = $progressstub;

        $returncontext = fn($context) => result::ok($context);
        // The updatepersonaiblitytesting class is a slightly modified version
        // of the updatepersonability class that just overrides parts that load
        // data from the DB or cache.
        $updatepersonability = new updatepersonability_testing();
        $result = $updatepersonability->process($context, $returncontext);
        $this->assertEquals($expected, $result->unwrap()['skip_reason']);
    }

    /**
     * Skipped provider.
     *
     * @return array
     *
     */
    public static function skippedprovider():array {
        return [
            'last_question_is_null' => [
                'expected' => 'lastquestionnull',
                'lastquestion' => null,
                'context' => [
                    'contextid' => 1,
                    'catscaleid' => 1,
                ],
            ],
            'is_pilot_question' => [
                'expected' => 'pilotquestion',
                'lastquestion' => (object) ['is_pilot' => true],
                'context' => [
                    'contextid' => 1,
                    'catscaleid' => 1,
                    'userid' => 1,
                    // Can be null here, because for pilot questions the ability will not be updated.
                    'fake_response_data' => [],
                ],
            ],
            'not_enough_responses' => [
                'expected' => 'notenoughdataforuser',
                'lastquestion' => (object) ['catscaleid' => "1"],
                'context' => [
                    'userid' => 1, // This user does not have enough responses.
                    'contextid' => 1,
                    'person_ability' => [
                        '1' => 0.12,
                    ],
                    'catscaleid' => 1,
                    'questionsattempted' => 1,
                    'minimumquestions' => 3,
                    'skip_reason' => 'not skipped',
                    'questions' => [
                        (object) ['catscaleid' => "1"],
                        (object) ['catscaleid' => "2"],
                    ],
                    // Answers that do not have at least one correct response are filtered out.
                    // In this case, only item 1 will be kept.
                    'fake_response_data' => [
                        1 => [
                            'component' => [
                                1 => ['fraction' => "1.000"],
                                2 => ['fraction' => "0.000"],
                                3 => ['fraction' => "0.000"],
                            ],
                        ],
                        844 => [
                            'component' => [
                                1 => ['fraction' => "0.000"],
                                2 => ['fraction' => "0.000"],
                                3 => ['fraction' => "0.000"],
                            ],
                        ],
                    ],
                    'fake_item_params' => [
                            1 => ['difficulty' => 2.1],
                            2 => ['difficulty' => -1.4],
                    ],
                ],
            ],
            'has_enough_responses' => [
                'expected' => 'not_skipped',
                'lastquestion' => (object) ['catscaleid' => "2", "id" => "2"],
                'context' => [
                    'skip_reason' => 'not_skipped',
                    'person_ability' => [
                        1 => 1.23,
                        2 => 0.77,
                    ],
                    'contextid' => 1,
                    'catscaleid' => 1,
                    'userid' => 1, // This user does not have enough responses.
                    'questions' => [
                        (object) ['catscaleid' => "1"],
                        (object) ['catscaleid' => "2"],
                    ],
                    // Answers that do not have at least one correct response are filtered out.
                    // In this case, only item 1 will be kept.
                    'fake_response_data' => [
                        1 => [
                            'component' => [
                                1 => ['fraction' => "1.000"],
                                2 => ['fraction' => "0.000"],
                                3 => ['fraction' => "0.000"],
                            ],
                        ],
                        844 => [
                            'component' => [
                                1 => ['fraction' => "0.000"],
                                2 => ['fraction' => "1.000"],
                                3 => ['fraction' => "0.000"],
                            ],
                        ],
                    ],
                    'fake_item_params' => [
                            1 => ['difficulty' => 2.1],
                            2 => ['difficulty' => -1.4],
                    ],
                    'questionsattempted' => 0,
                    'minimumquestions' => 10,
                ],
            ],
        ];
    }
}
