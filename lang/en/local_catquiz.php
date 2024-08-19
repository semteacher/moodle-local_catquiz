<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin strings are defined here.
 *
 * @package     local_catquiz
 * @category    string
 * @copyright   2022 onwards Wunderbyte GmbH <info@wunderbyte.at>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abilityinglobalscale'] = 'Ability in global scale';
$string['abilityintestedscale'] = 'Ability score in top-most parent scale';
$string['abilityintestedscale_before'] = 'Ability score in top-most parent scale - before';
$string['abilityprofile'] = 'Ability score profile in {$a}';
$string['abilityprofile_title'] = 'Ability score in test';
$string['abortpersonabilitynotchanged'] = 'Person parameter did not change';
$string['acceptedstandarderror'] = 'Accepted standarderror';
$string['acceptedstandarderror_help'] = 'If the standard error for a scale is outside of this range, the scale will no longer be tested.';
$string['action'] = 'Action';
$string['activitystatussetactive'] = 'Testitem is now active.';
$string['activitystatussetinactive'] = 'Testitem is now inactive.';
$string['add_testitem_to_scale'] = '{$a->testitemlink} added to {$a->catscalelink}';
$string['addcategory'] = 'Add category';
$string['addcontext'] = 'Add CAT context';
$string['addedrecords'] = '{$a} record(s) added.';
$string['addoredittemplate'] = 'Add or edit template';
$string['addquestion'] = 'Add question from catalogue';
$string['addtest'] = 'Add existing test';
$string['addtestitem'] = 'Add test items';
$string['addtestitembody'] = 'Do you want to add the following test items to the current CAT scale?';
$string['addtestitemsubmit'] = 'Add';
$string['addtestitemtitle'] = 'Add test items to CAT scales';
$string['allquestionscorrect'] = 'Not available- all questions were answered correctly';
$string['allquestionsincorrect'] = 'Not available - all questions were answered incorrectly';
$string['applychanges'] = 'Apply Changes';
$string['aria:catscaleimage'] = 'Background pattern for this CAT scale';
$string['assign'] = 'Assign';
$string['assigntestitemstocatscales'] = 'Assign testitem to CAT scale';
$string['attempt_completed'] = 'Attempt completed';
$string['attemptchartstitle'] = 'Number and results of attempts in scale “{$a}”';
$string['attemptfeedbacknotavailable'] = 'No feedback available';
$string['attemptfeedbacknotyetavailable'] = 'Feedback for attempts will be displayed when available.';
$string['attempts'] = 'Attempts';
$string['attemptscollapsableheading'] = 'Feedback for your attempts:';
$string['autocontextdescription'] = 'Automatically generated via import for CAT scale {$a}.';
$string['automatic_reload_on_scale_selection'] = 'Form reload on scale selection';
$string['automatic_reload_on_scale_selection_description'] = 'Reload quizsettings form automatically on (sub-)scale selection';
$string['automaticallygeneratedbycron'] = 'Cron Job (automatically executed)';
$string['averageofallanswers'] = 'Average';
$string['backtotable'] = 'Back to overview table';
$string['breakinfo_backtotest'] = 'Back to the test';
$string['breakinfo_continue'] = 'You can continue the test at {$a}';
$string['breakinfo_description'] = 'Test was paused';
$string['breakinfo_title'] = 'Test paused';
$string['cachedef_adaptivequizattempt'] = 'Adaptive quiz attempt';
$string['cachedef_catcontexts'] = 'Contexts of catquiz';
$string['cachedef_catscales'] = 'Caches the CAT scales of catquiz';
$string['cachedef_eventlogtable'] = 'Logs of events';
$string['cachedef_quizattempts'] = 'Quizattempt';
$string['cachedef_studentstatstable'] = 'Data of students in table';
$string['cachedef_testenvironments'] = 'Testenvironments';
$string['cachedef_testitemstable'] = 'Data of testitem in table';
$string['cachedef_teststrategies'] = 'Teststrategies';
$string['calculate'] = 'Calculate';
$string['calculation_executed'] = 'Calculation executed.';
$string['calculations'] = 'Calculations';
$string['callbackfunctionnotapplied'] = 'Callback function could not be applied.';
$string['callbackfunctionnotdefined'] = 'Callback function is not defined.';
$string['canbesetto0iflabelgiven'] = 'Can be 0 if matching of testitem is via label.';
$string['cannotdeletescalewithchildren'] = 'Cannot delete CAT scale with children';
$string['catcatscaleprime'] = 'Content/Scale';
$string['catcatscaleprime_help'] = 'Select the content area that is relevant to you. Content areas are created and managed as a so-called scale by a CAT manager. If you would like your own content and sub-areas, please contact the CAT manager or the administrator of your Moodle instance.';
$string['catcatscales'] = 'Selection subscales';
$string['catcatscales_help'] = 'Select and deselect the subscales that are relevant to you. A subscale includes questions from part of the selected content area. In a test experiment, only questions from the selected subscales are used.';
$string['catcatscales_selectall'] = 'Select all subscales';
$string['catcontext'] = 'CAT context';
$string['catmanager'] = 'CAT-Manager';
$string['catmanagernumberofquestions'] = 'Number of questions';
$string['catmanagernumberofsubscales'] = 'Number of subscales';
$string['catquiz'] = 'Catquiz';
$string['catquiz:canmanage'] = 'Is allowed to manage Catquiz plugin';
$string['catquiz:manage_catcontexts'] = 'Manage Cat contexts';
$string['catquiz:manage_catscales'] = 'Is allowed to manage Catquiz CAT scales';
$string['catquiz:manage_testenvironments'] = 'Mange test environments';
$string['catquiz:subscribecatscales'] = 'Is allowed to subscribe to Catquiz CAT scales';
$string['catquiz:view_teacher_feedback'] = 'Access teacher feedback';
$string['catquiz:view_users_feedback'] = 'Access feedback from all users, not only current one.';
$string['catquiz_feedbackheader'] = 'Feedback';
$string['catquiz_left_quote'] = '&ldquo;';
$string['catquiz_selectfirstquestion'] = 'Otherwise start';
$string['catquiz_selectfirstquestion_help'] = 'During a test attempt, the algorithm decides based on this setting which criterion will be used to select the first question to be played.';
$string['catquiz_selectteststrategy'] = 'Purpose of test';
$string['catquiz_teststrategyheader'] = 'CAT Settings';
$string['catquizfeedback'] = 'Returns an overview of the last quiz attempts.';
$string['catquizfeedbackheader'] = 'Feedback for “{$a}”';
$string['catquizroledescription'] = 'Catquiz Manager';
$string['catquizsettings'] = 'Test content and context';
$string['catquizstatistics_askforparams'] = 'Please provide a “globalscale” or “courseid” parameter';
$string['catquizstatistics_exportcsv_description'] = 'As user with permission to download exports, here you can export results of all attempts as a CSV file';
$string['catquizstatistics_exportcsv_heading'] = 'Export data of selected attempts as CSV';
$string['catquizstatistics_h1_global'] = 'Statistics of scale {$a} in moodle instance';
$string['catquizstatistics_h1_scale'] = 'Statistics for scale {$a->scalename} in course {$a->coursename}.';
$string['catquizstatistics_h1_single'] = 'Statistik zu Test {$a}';
$string['catquizstatistics_h2_global'] = 'The following data are from all users
    that participated in tests on this moodle instance using
    scale {$a} as main scale.';
$string['catquizstatistics_h2_scale'] = 'The following data are from tests {$a->linkedcourses} in course {$a->coursename}. They use the scale {$a->scale}.';
$string['catquizstatistics_h2_single'] = 'The following data are from test {$a->link} that uses the scale {$a->scale}.';
$string['catquizstatistics_nodataforcourse'] = 'There are no CAT tests for the given courseid';
$string['catquizstatistics_numattempts_title'] = 'Number of attempts';
$string['catquizstatistics_numattemptsperperson_title'] = 'Attempts per person';
$string['catquizstatistics_numberofresponses'] = 'Number of responses';
$string['catquizstatistics_overview'] = 'Overview';
$string['catquizstatistics_progress_peers_title'] = 'Average result of your peers in scale “{$a}”';
$string['catquizstatistics_progress_personal_title'] = 'Your personal results for that scale';
$string['catquizstatistics_scale_course_conflict'] = 'The given testid is not part of the given course';
$string['catquizstatistics_scale_testid_conflict'] = 'The test for the given testid is not using the provided scale';
$string['catquizstatistics_testusage'] = 'Testusage';
$string['catquizstatistics_timerange_both'] = 'Only data between {$a->starttime} and {$a->endtime} are used.';
$string['catquizstatistics_timerange_end'] = 'Only data before {$a->endtime} are used.';
$string['catquizstatistics_timerange_start'] = 'Only data after {$a->starttime} are used.';
$string['catquizstatisticsnodata'] = 'No attempt data available for the given settings';
$string['catscale'] = 'CAT scale';
$string['catscale_created'] = 'CAT scale created';
$string['catscale_updated'] = 'CAT scale updated';
$string['catscaleid'] = 'CAT scale ID';
$string['catscaleidnotmatching'] = 'Scale with id {$a->catscaleid} was not found in database. Corresponding item was not imported.';
$string['catscales'] = 'Define catquiz CAT scales';
$string['catscales:information'] = 'Define CAT scales: {$a->link}';
$string['catscalesheading'] = 'CAT scales';
$string['catscalesname_exists'] = 'The name is already being used';
$string['catscaleupdatedtitle'] = 'A CAT scale was updated';
$string['cattags'] = 'Manage course tags';
$string['cattags:information'] = 'These tags identify courses that teachers can enroll students in, regardless of whether they are part of the course.';
$string['chart_detectedscales_title'] = 'Detected scales (Top {$a})';
$string['chartlegendabilityrelative'] = '{$a->difference} (Compared to parentscale); {$a->ability} (ability score of scale)';
$string['checkdelimiter'] = 'Check if data is separated via the selected symbol.';
$string['checkdelimiteroremptycontent'] = 'Check if data is given and separated via the selected symbol.';
$string['checklinking'] = 'Check linking';
$string['choosecontextid'] = 'Choose CAT context';
$string['chooseparent'] = 'Choose parent scale';
$string['choosesubscaleforfeedback'] = 'Select a subscale';
$string['choosesubscaleforfeedback_help'] = 'You can now store <number of options> feedback informations for the subscales displayed. Select a (sub-)scale to enter your feedback. The colored symbols indicate the current status of processing, measured by the number of feedback options you entered:
    gray - no feedback stored in the sub-scale yet
    yellow - some feedback options still unfilled
    green - feedback fully deposited';
$string['choosesubscaleforfeedback_text'] = '';
$string['choosetags'] = 'Choose tag(s)';
$string['choosetags:disclaimer'] = 'Multiple selection with key “⌘ command” (apple) or “Ctrl” (windows, linux)';
$string['choosetemplate'] = 'Choose a test environment';
$string['classicalcat'] = 'Classical test';
$string['close'] = 'Close';
$string['cogwheeltitle'] = 'Display details';
$string['color_1_code'] = '#ff0000';
$string['color_1_name'] = 'Red';
$string['color_2_code'] = '#000000';
$string['color_2_name'] = 'Black';
$string['color_3_code'] = '#8b0000';
$string['color_3_name'] = 'Darkred';
$string['color_4_code'] = '#ffa500';
$string['color_4_name'] = 'Orange';
$string['color_5_code'] = '#ffff00';
$string['color_5_name'] = 'Yellow';
$string['color_6_code'] = '#90ee90';
$string['color_6_name'] = 'Lightgreen';
$string['color_7_code'] = '#006400';
$string['color_7_name'] = 'Darkgreen';
$string['color_8_code'] = '#e8e9eb';
$string['color_8_name'] = 'White';
$string['comparetotestaverage'] = 'Overview';
$string['complete_attempt_description'] = 'Attempt with id {$a->attemptid} in CAT scale {$a->catscalelink} completed by user {$a->userid}.';
$string['component'] = 'Plugin';
$string['confirmactivitychange'] = 'You are about to change the activity status of the following item: <br> “{$a->data}”';
$string['confirmdeletion'] = 'You are about to delete the following item: <br> “{$a->data}”';
$string['context_created'] = 'CAT context created.';
$string['context_updated'] = 'CAT context updated';
$string['contextidselect'] = 'CAT context - without selection default context is created';
$string['copysettingsforallsubscales'] = 'Apply values to given subscales';
$string['courseenrolementstring'] = 'Because of your test results, you are now enroled in course(s) {$a}. Good luck with your studies.';
$string['courseselection'] = 'Select course';
$string['create_catscale_description'] = 'CAT scale {$a->catscalelink} with id {$a->objectid} created.';
$string['create_context_description'] = 'CAT context {$a} created.';
$string['createcatscale'] = 'Create a CAT scale';
$string['createnewcatscale'] = 'Create new CAT scale';
$string['currentability'] = 'Your ability score';
$string['currentabilityfellowstudents'] = 'Average';
$string['dataincomplete'] = 'Record with componentid {$a->id} is incomplete and could not be treated entirely. Check field “{$a->field}”.';
$string['dateparseformat'] = 'Date parse format';
$string['dateparseformat_help'] = 'Please use the date format like specified in your CSV file (j.n.Y H:i:s). More information at <a href="http://php.net/manual/en/function.date.php">that resource</a>.';
$string['daysago'] = '{$a} days ago';
$string['debuginfo_desc'] = 'As a user with permission to export attempts, you can download the attempt as CSV file here';
$string['debuginfo_desc_title'] = 'Export attempt # {$a}';
$string['defaultcontext'] = 'New default context for scale';
$string['defaultcontextdescription'] = 'Includes all test items';
$string['defaultcontextname'] = 'Default CAT context';
$string['defaultdateformat'] = 'j.n.Y H:i:s';
$string['deletedatatitle'] = 'Delete';
$string['deletedcatscale'] = 'catscale that doesn’t exist anymore';
$string['detected_scales_ability'] = 'Ability score';
$string['detected_scales_chart_description'] = 'The following chart displays
    the values in comparison with your ability score in {$a}. Click the bar to
    see the scale name and value';
$string['detected_scales_number_questions'] = 'Played questions';
$string['detected_scales_reference'] = 'Reference scale';
$string['detected_scales_scalename'] = 'Scale';
$string['difficulty'] = 'Difficulty';
$string['difficulty_next_easier'] = 'Next more difficult question';
$string['difficulty_next_more_difficult'] = 'Next easier question';
$string['disclaimer:numberoffeedbackchange'] = 'Changes may require an adjustment of feedback content.';
$string['discrimination'] = 'Discrimination';
$string['documentation'] = 'Documentation';
$string['downloaddemofile'] = 'Download demofile';
$string['edititemparams'] = 'Edit item params';
$string['edittestenvironment'] = 'Edit testenvironment';
$string['emptyfirstquestionlist'] = 'Can’t select a start question because the list is empty';
$string['endtime'] = 'End';
$string['endtimestamp'] = 'Endtime';
$string['enrol_only_to_reported_scales'] = 'Enrol users only to courses of detected primary scale(s).';
$string['enrol_only_to_reported_scales_help'] = 'Standard would be to enrol users according to results in areas detected according to the purpose of the test.
If you uncheck this option, users will be enroled according to all other valid results as well.';
$string['enrolementstringend'] = 'Good luck with your studies!';
$string['enrolementstringstart'] = 'Based on your results in test {$a->testname} in course {$a->coursename} you are now...<br>';
$string['enrolementstringstartforfeedback'] = 'Based on your results you are now...<br>';
$string['enrolled_courses'] = 'Enrolled courses';
$string['enrolmentmessagetitle'] = 'Notification about new course / group enrolments';
$string['error'] = 'An error occured';
$string['error:fraction0'] = 'Unfortunately, we were unable to determine a valid result based on your answers. We would be pleased if you would try again.';
$string['error:fraction1'] = 'Congratulations, you have answered all the questions correctly! That is really awesome!
    However, due to this excellent performance, we were unable to determine a conclusive result.';
$string['error:nminscale'] = 'Unfortunately, we were unable to determine a result as not enough questions were answered during the test attempt.
    Please make sure you answer all the questions in your next attempt to get a correct result.';
$string['error:noscalestoreport'] = 'Unfortunately, with the current number of questions asked in the areas tested,
    we were unable to determine a reliable result. We recommend that you contact those responsible for the test
    and ask them to increase the number of questions to be answered.';
$string['error:rootonly'] = '';
$string['error:semax'] = 'Unfortunately, we were unable to determine a result with the specified minimum accuracy in the areas tested.
    We recommend that you contact those responsible for the test and ask them to increase the number of questions to be answered.';
$string['error:semin'] = '';
$string['errorfetchnextquestion'] = 'There was an error while selecting the next question';
$string['errorhastobefloat'] = 'Has to be a decimal';
$string['errorhastobeint'] = 'Has to be a whole number';
$string['errorminscalevalue'] = 'Min value has to be smaller than max value';
$string['errornoitems'] = 'The quiz can not be started with the given settings. Please contact your CAT manager.';
$string['errorrecordnotfound'] = 'There was an error with the database query. The record was not found.';
$string['errorupperlimitvalue'] = 'Upper limit value has to be larger than lower limit value';
$string['estimatedbecause:allanswerscorrect'] = 'Congratulations! You answered all question correctly! Unfortunately, your results could therefore not be calculated reliably and were estimated.';
$string['estimatedbecause:allanswersincorrect'] = 'Your results could not be calculated reliably and were estimated, because you answered all questions incorrectly.';
$string['estimatedbecause:default'] = 'Your results could not be calculated reliably and were estimated.';
$string['eventname'] = 'Event name';
$string['eventtime'] = 'Event time';
$string['exceededmaxattempttime'] = 'The maximum attempt time has been exceeded.';
$string['executed_calculation_description'] = 'A calculation was executed of catscale {$a->catscalename} with id {$a->catscaleid} in context {$a->contextid} by {$a->user}. In the following models, items were recalculated: {$a->updatedmodels}';
$string['eyeicontitle'] = 'Activate/Disable';
$string['failedtoaddmultipleitems'] = '{$a->numadded} questions successfully added, failed with {$a->numfailed} questions: {$a->failedids}';
$string['feedback_colorrange'] = 'Colorrange of a feedbackscale';
$string['feedback_customscale_nofeedback'] = 'No feedback was provided for your test results';
$string['feedback_details_description'] = 'Following table lists all aspects
    (scales) of {$a}, for which a reliable result could be calculated.';
$string['feedback_details_heading'] = 'Details of your result';
$string['feedback_details_lowestskill'] = 'Scale {$a->name} with an ability
    score of {$a->value} (± {$a->se}) was found to be the scale with the
    largest deficit.';
$string['feedback_tab_clicked'] = 'Click on feedback tab';
$string['feedback_tab_clicked_description'] = 'User {$a->userid} clicked the “{$a->feedback_translated}” tab in {$a->attemptlink}';
$string['feedback_table_answercorrect'] = 'correct';
$string['feedback_table_answerincorrect'] = 'incorrect';
$string['feedback_table_answerpartlycorrect'] = 'partly correct';
$string['feedback_table_questionnumber'] = '#';
$string['feedbackbarlegend'] = 'Color code';
$string['feedbackcomparetoaverage'] = '<p>The test measures your ability in {$a->quotedscale} by calculating an ability score in the range between
{$a->scale_min} and {$a->scale_max}. A higher value indicates a better ability.</p>
<p>You reached a score of {$a->ability_global} (with a standard error of ± {$a->se_global}). The average score of all participants is {$a->average_ability}. {$a->betterthan}</p>
<p>The following chart displays your personal score (upper mark) and the current average score (lower mark):</p>';
$string['feedbackcomparison_betterthan'] = 'Your score is better than {$a->quantile}% of all other participants.';
$string['feedbackcompletedentirely'] = 'All feedbacks completed for this scale.';
$string['feedbackcompletedpartially'] = '{$a} feedbacks of this scale completed.';
$string['feedbacklegend'] = 'Feedback to be displayed in color bar legend';
$string['feedbacknumber'] = 'Feedback for range {$a}';
$string['feedbackrange'] = 'Ability level {$a}';
$string['feedbacksheader'] = 'Attempt {$a}';
$string['fieldnamesdontmatch'] = 'The imported fieldnames don’t match the defined fieldnames.';
$string['firstquestion_startnewtest'] = 'Start new test';
$string['firstquestionreuseexistingdata'] = 'by using previous user results';
$string['firstquestionselectotherwise'] = ' ...otherwise: ';
$string['fisherinformation'] = 'Fisherinformation';
$string['followingcourses'] = 'subscribed in the following course(s):<br>';
$string['followinggroups'] = 'member of the following group(s):<br>';
$string['force'] = 'Force values';
$string['format'] = 'format';
$string['formelementbetweenzeroandone'] = 'Please enter values between 0 and 1.';
$string['formelementnegative'] = 'Input a positive number';
$string['formelementnegativefloat'] = 'Input a negative decimal number';
$string['formelementnegativefloatwithdefault'] = 'Input a negative decimal number. Default would be {$a}.';
$string['formelementpositivefloat'] = 'Input a positive decimal number';
$string['formelementpositivefloatwithdefault'] = 'Input a positive decimal number. Default would be {$a}.';
$string['formelementwrongpercent'] = 'Input a number from 0 to 100';
$string['formetimelimitnotprovided'] = 'Input at least one value of time limit';
$string['formminquestgreaterthan'] = 'Minimum must be less than maximum';
$string['formmscalegreaterthantest'] = 'Per scale minimum must be less than per test maximum';
$string['genericsubmit'] = 'Confirm';
$string['global_scale'] = 'Global scale';
$string['graphicalsummary_description'] = 'During an attempt your ability is recalculated after each response. The following chart shows how your estimated ability in {$a} changed';
$string['graphicalsummary_description_lowest'] = 'Zusätzlich ist auch die
    Entwicklung Ihres Fähigkeitswertes bezüglich der als Defizit
    identifizierten Skala {$a} dargestellt:';
$string['greateststrenght:tooltiptitle'] = 'your strongest scale {$a}';
$string['groupenrolementstring'] = '“{$a->groupname}” in course “<a href="{$a->courseurl}">{$a->coursename}</a>”';
$string['groupenrolmenthelptext'] = 'Please enter exact name(s) of existing group like (i.e. “group1,group2” or “group3”).';
$string['groupenrolmenthelptext_help'] = 'Please enter exact name(s) of existing group like (i.e. “group1,group2” or “group3”).';
$string['guessing'] = 'Guessing';
$string['hasability'] = 'Ability was calculated';
$string['healthstatus'] = 'Health status';
$string['hoursago'] = '{$a} hours ago';
$string['id'] = 'ID';
$string['ifdefinedusedtomatch'] = 'If defined, will be used to match.';
$string['importcolumnsinfos'] = 'Informations about columns to be imported:';
$string['importcontextinfo'] = 'The context id should be set when existing items are updated for unambiguous matching with exisiting items. When importing new items, it is advisable to leave the context field empty. A new context is then generated automatically, which contains the items from the default context plus the newly imported items. If a context is defined when importing new items, the context of the corresponding top scale must be changed (in the CAT Manager dashboard, Scales area) in order to use these items during quiz.';
$string['importcsv'] = 'Import CSV';
$string['imported_testitem_description'] = '{$a} testitems were imported.';
$string['importfailed'] = 'Import failed';
$string['importsuccess'] = 'Import was successful. {$a} record(s) treated.';
$string['includepilotquestions'] = 'Activate pilot mode';
$string['includepilotquestions_help'] = 'In the pilot mode, questions are added to the tests whose parameters (e.g. difficulty, guessing) are not determined yet. These do not contribute to the test result. The data generated by the processing can later be statistically evaluated by a CAT manager to determine the question parameters.';
$string['includetimelimit'] = 'Limit time for attempt';
$string['includetimelimit_help'] = 'Define a maximum duration for an attempt to be finished.';
$string['inferallsubscales'] = 'Infer all subscales';
$string['infergreateststrength'] = 'Infer greatest strength';
$string['inferlowestskillgap'] = 'Infer lowest skill gap';
$string['relevantscales'] = 'Infer relevant subscales';
$string['instance'] = 'Test';
$string['integratequestions'] = 'Integrate questions from subscales';
$string['invisible'] = 'Invisible';
$string['itemassignedtoparentorsubscale'] = 'Record with componentid {$a->componentid} is already assigned to a parent or child scale of {$a->newscalename} and was not imported.';
$string['itemassignedtosecondscale'] = 'Record with componentid {$a->componentid} is already assigned to scale {$a->scalelink}, now also assigned to {$a->newscalename}.';
$string['itemdifficulties'] = 'Item difficulties';
$string['itemdifficultiesnodata'] = 'No item difficulties were calculated';
$string['itemdifficulty'] = 'Item difficulty';
$string['itemsplayed'] = 'evaluated items';
$string['itemstatus_-5'] = 'Manually excluded';
$string['itemstatus_0'] = 'Not yet calculated';
$string['itemstatus_1'] = 'Calculated';
$string['itemstatus_4'] = 'Manually updated';
$string['itemstatus_5'] = 'Manually confirmed';
$string['label'] = 'Label';
$string['labelforrelativepersonabilitychart'] = 'Relative Ability';
$string['labelidnotfound'] = 'Label {$a} not found.';
$string['labelidnotunique'] = 'Label {$a} is not unique.';
$string['lang'] = 'Language';
$string['lastattempttime'] = 'Last attempt';
$string['learningprogress_description'] = 'How did your ability score change
    over time? Did you improve?<br/>The following chart displays the progress
    of your (general) ability score in {$a} in comparison to the average of all
    test attempts:';
$string['learningprogress_title'] = 'Your progress';
$string['learningprogresstitle'] = 'Progress';
$string['likelihood'] = 'Likelihood';
$string['local_catquiz_toggle_testitemstatus_message'] = 'Testitem status was updated';
$string['logsafter'] = 'Logs after';
$string['logsbefore'] = 'Logs before';
$string['lowerlimit'] = 'Lower limit';
$string['lowestskill:tooltiptitle'] = 'your lowest scale {$a}';
$string['manage_catcontexts'] = 'Manage CAT contexts';
$string['managecatcontexts'] = 'Manage CAT contexts';
$string['managecatscale'] = 'Manage CAT scale';
$string['managecatscales'] = 'Manage CAT scales';
$string['managetestenvironments'] = 'Manage testenvironments';
$string['mandatory'] = 'mandatory';
$string['max'] = 'max: ';
$string['max_iterations'] = 'Maximum number of iterations';
$string['maxabilityscalevalue'] = 'Person ability maximum:';
$string['maxabilityscalevalue_help'] = 'Enter the highest possible person ability of this scale as a positive decimal value. The mean is zero.';
$string['maxquestionspersubscale'] = 'Maximum number of questions returned per subscale';
$string['maxquestionspersubscale_help'] = 'When this number of questions was returned for any subscale, no more questions from this scale will be shown. A value of 0 means that there is no limit.';
$string['maxscalevalue'] = 'Max value';
$string['maxscalevalueinformation'] = 'Enter the highest possible person ability of this scale as a positive decimal value. The mean is zero. Will only be set when creating a new root scale and then applies to all sub-scales. To do so, define values (at least) in first dataset. Values in existing scales cannot be changed via import. If you want to change the values of an existing scale, please switch to the “Scales” tab.';
$string['maxtime'] = 'Max time for test';
$string['maxtimeperitem'] = 'Max time per question in seconds';
$string['maxtimeperquestion'] = 'Maximum time';
$string['maxtimeperquestion_help'] = 'If the user takes longer to answer a question, a break will be enforced';
$string['messageprovider:catscaleupdate'] = 'Notification of CAT scale update';
$string['messageprovider:enrolmentfeedback'] = 'Automatical enrolment to courses and groups.';
$string['messageprovider:updatecatscale'] = 'Recieves notification on subscrition of catscale';
$string['min'] = 'min: ';
$string['minabilityscalevalue'] = 'Person ability minimum:';
$string['minabilityscalevalue_help'] = 'Enter the lowest possible person ability of this scale as a negative decimal value. The mean is zero.';
$string['minquestions_default_desc'] = 'This value will be set by default but can be overwritten in the quiz settings.';
$string['minquestions_default_name'] = 'Default minimum questions per quiz attempt';
$string['minquestionsnotreached'] = 'Test result can not be calculated because minimum number of questions was not reached';
$string['minquestionspersubscale'] = 'Minimum number of questions returned per subscale';
$string['minquestionspersubscale_help'] = 'Questions of a subscale will be excluded only if at least the minimum number of questions was shown.';
$string['minscalevalue'] = 'Min value';
$string['minscalevalueinformation'] = 'Enter the lowest possible person ability of this scale as a negative decimal value. The mean is zero. Will only be set when creating a new root scale and then applies to all sub-scales. To do so, define values (at least) in first dataset. Values in existing scales cannot be changed via import. If you want to change the values of an existing scale, please switch to the “Scales” tab.';
$string['mintimeperitem'] = 'Min time per question in seconds';
$string['missinglabel'] = 'Imported CSV does not contain mandatory column {$a}. Data can not be imported.';
$string['model'] = 'Model';
$string['model_override'] = 'Only use this model';
$string['modeldeactivated'] = 'Deactivate CAT engine';
$string['modelinformation'] = 'This field is necessary to entirely treat the record. If it is empty, item can only be assigned to CAT scale.';
$string['models'] = 'Models';
$string['moreinformation'] = 'More Information';
$string['moveitemtootherscale'] = 'Testitem(s) {$a} already assigned to another (sub-)scale of the same tree. Modify assignment?';
$string['name'] = 'Name';
$string['nameexists'] = 'The name of the CAT scale already exists';
$string['newcustomtest'] = 'Custom test';
$string['noaccessyet'] = 'No access yet';
$string['noedit'] = 'End Editing';
$string['nofeedback'] = 'No feedback defined.';
$string['nogapallowed'] = 'No gap in the feedbackrange allowed. Please make sure that upper limit of former range is equivalent to lower limit of next range.';
$string['noint'] = 'Please enter an integer number';
$string['nolabels'] = 'No column labels defined in settings object.';
$string['noparentsgiven'] = 'Items for scale {$a->catscalename} can not be localized, because there are no parent scales given.';
$string['norecordsfound'] = 'There are no questions in this scale';
$string['noremainingquestions'] = 'You ran out of questions';
$string['noresult'] = 'No ability was calculated';
$string['noscaleselected'] = 'No scale selected';
$string['noscalesfound'] = 'No valid feedback could be generated.';
$string['noselection'] = 'No selection';
$string['nothingtocompare'] = 'There are not enough valid results available for a comparison.';
$string['notificationcatscalechange'] = 'Hello {$a->firstname} {$a->lastname},
CAT scales have been changed on the Moodle platform {$a->instancename}.
This email informs you as the CAT Manager* responsible for those CAT scales of these changes . {$a->editorname} made the following changes to the CAT scale “{$a->catscalename}”:
    {$a->changedescription}
You can review the current state here: {$a->linkonscale}';
$string['notifyallteachers'] = 'Notify all teachers';
$string['notifyteachersofselectedcourses'] = 'Notify teachers of selected courses';
$string['notimelimit'] = 'No timelimit';
$string['notpositive'] = 'Please enter a positive number';
$string['notyetattempted'] = 'No attempts';
$string['notyetcalculated'] = 'Not yet calculated';
$string['numberofanswers'] = 'Answers total';
$string['numberofanswerscorrect'] = 'Correct';
$string['numberofanswersincorrect'] = 'Wrong';
$string['numberofanswerspartlycorrect'] = 'Partly correct';
$string['numberofattempts'] = 'Number of attempts';
$string['numberoffeedbackoptionpersubscale'] = 'Number of ability ranges';
$string['numberoffeedbackoptionpersubscale_help'] = 'Select how many options of feedback you need per subscale. Using the feedback options, you can provide graded, written feedback depending on the ability score identified and enroll in different courses or groups.';
$string['numberofpersonsanswered'] = 'By different persons';
$string['numberofquestions'] = '# questions';
$string['numberofquestionsperscale'] = 'Number of questions per scale';
$string['numberofquestionsperscale_help'] = 'Set max. value to 0 to play testattempt without a limit.';
$string['numberofquestionspertest'] = 'Number of questions per test';
$string['numberofquestionspertest_help'] = 'Set max. value to 0 to play testattempt without a limit.';
$string['numberoftestitemsused'] = 'Number of displayed questions';
$string['numberofusagesintests'] = 'In tests';
$string['numberofusers'] = '# users';
$string['onecourseenroled'] = 'Because of your test results in “{$a->catscalename}”, you are now enrolled in course “<a href="{$a->courseurl}">{$a->coursename}</a>”.';
$string['onegroupenroled'] = 'Because of your test results in “{$a->catscalename}”, you are now enrolled in group “{$a->groupname}” in course “<a href="{$a->courseurl}">{$a->coursename}</a>”.';
$string['openformat'] = 'open format';
$string['optional'] = 'optional';
$string['ownfeedbacksheader'] = 'My Attempt from {$a}';
$string['parent'] = 'Parent CAT scale - None if top level CAT scale';
$string['parentid'] = 'Parent id';
$string['parentscale'] = 'Parentscale';
$string['parentscalenamesinformation'] = 'To match the an item via the scalename, make sure to name all parent scales including root scale. For new - yet to be created - scales, you can enter parent scales for the defined scale. Start with the highest parent and separate all children with “|” (vertical line unicode U+007C - do not mistake for slash “/”). To enable import to parent scales, set “0” here.';
$string['passinglevel'] = 'Passing level in %';
$string['passinglevel_help'] = 'There is a level of personal competency that can be set for the test.';
$string['perattempt'] = 'per attempt ';
$string['peritem'] = 'per item ';
$string['personabilities'] = 'Ability scores';
$string['personabilitiesnodata'] = 'No ability scores were calculated';
$string['personability'] = 'Ability score';
$string['personabilityafterattempt'] = 'Ability score after attempt';
$string['personabilitybeforeattempt'] = 'Ability score before attempt';
$string['personabilitycharttitle'] = 'Relative ability score in subscales compared to {$a}';
$string['personabilityfeedbacktitle'] = 'Personability Profile';
$string['personabilityinscale'] = 'Ability score in scale “{$a}”';
$string['personabilityrangestring'] = '{$a->rangestart} - {$a->rangeend}';
$string['personabilitytitletab'] = 'Details of results';
$string['pilot_questions'] = 'Pilot questions';
$string['pilotratio'] = 'Proportion of questions to be piloted in %';
$string['pilotratio_help'] = 'Proportion of questions still to be piloted in the total number of questions in a test attempt. For example, specifying 20% ​means that one out of five questions in a test experiment will be a question to be piloted';
$string['pleasecheckorcancel'] = 'Please confirm or cancel';
$string['pleasechoose'] = 'please choose';
$string['pluginname'] = 'Adaptive Quiz - Advanced CAT Module';
$string['previewquestion'] = 'Preview question';
$string['progress'] = 'Progress';
$string['questioncategories'] = 'Question category';
$string['questioncontextattempts'] = '# Attempts in selected context';
$string['questionpreview'] = 'Question preview';
$string['questionresults'] = 'Question results';
$string['questions'] = 'Questions';
$string['questionssummary'] = 'Summary';
$string['questiontext'] = 'Question text';
$string['questiontype'] = 'Question type';
$string['quizattempts'] = 'Quiz Attempts';
$string['quizgraphicalsummary'] = 'Quiz progress summary';
$string['reachedmaximumquestions'] = 'Reached maximum number of questions';
$string['recalculationscheduled'] = 'Recalculation of the context parameters has been scheduled';
$string['recentevents'] = 'Recent Events';
$string['removetestitem'] = 'Remove test items';
$string['removetestitembody'] = 'Do you want to remove the following test items from the current CAT scale? <br> {$a->data}';
$string['removetestitemsubmit'] = 'Remove';
$string['removetestitemtitle'] = 'Remove test item from CAT scale';
$string['reportscale'] = 'Include scale for report';
$string['response'] = 'Response';
$string['responsesbyusercharttitle'] = 'Total number of responses per person';
$string['rootscale:tooltiptitle'] = 'root scale {$a}';
$string['scaledetailviewheading'] = 'Detailview of catscale {$a}';
$string['scaleiddisplay'] = ' (ID: {$a})';
$string['scaleinformation'] = 'The id of the CAT scale the item should be assigned to.';
$string['scalenameinformation'] = 'The name of the CAT scale the item should be assigned to. If no catscale id given, matching is done via name.';
$string['scalescorechartlabel'] = '{$a}-Score';
$string['scaleselected'] = 'defined scale {$a}';
$string['score'] = 'Weighted score';
$string['scoreofpeers'] = 'Average of your peers';
$string['searchcatcontext'] = 'Search CAT contexts';
$string['seeitemsplayed'] = 'Display items played';
$string['selectcatcontext'] = 'Select a CAT context';
$string['selectcatcontext_help'] = 'Contexts differentiate the data in terms of target group, purpose or time/cohort. The deployment context is managed by the CAT manager. If you would like your own context of use for your purpose, please contact the CAT manager or the administrator of your Moodle instance.';
$string['selectcatscale'] = 'Scale:';
$string['selected_scales_all_ranges_label'] = 'Number of participants';
$string['selectitem'] = 'No items selected';
$string['selectmodel'] = 'Choose a model';
$string['selectparentscale'] = 'Select CAT scale';
$string['selectsubscale'] = 'Select a subscale';
$string['setautonitificationonenrolmentforscale'] = 'Inform participants about group or course enrollment using the standard text.';
$string['setautonitificationonenrolmentforscale_help'] = '
In addition to their written feedback, participants will receive the following note: “You have been automatically enrolled in the group <group name> / the course <course name as a link>.”';
$string['setcourseenrolmentforscale'] = 'Subscription to a course';
$string['setcourseenrolmentforscale_help'] = 'Test participants are enrolled in this (external) course after completing the test, provided the result falls within the set ability range. You can only select courses for which you have the right to enroll or which have been approved for enrollment by a CAT manager. If you do not wish to enroll in an external course, please leave this field blank.';
$string['setcoursesforscaletext'] = 'For catscale {$a}, determine the ability score for the individual feedback, the written feedback and the respective enrollments in courses or groups.';
$string['setfeedbackforscale'] = 'written feedback';
$string['setfeedbackforscale_help'] = 'This text will be displayed to the test participants after completion of the test, provided the result for the subscale <subscale name> falls within the defined ability range.';
$string['setgrouprenrolmentforscale'] = 'Enrol to a group';
$string['setgrouprenrolmentforscale_help'] = 'Test participants are enrolled in this group of the course after completing the test, provided the result falls within the set ability range. If you do not wish to be enrolled in a group, please leave this field blank.';
$string['setsevalue'] = 'Please define values. Standard: min={$a->min} max={$a->max}';
$string['shortcodescatquizfeedback'] = 'Display feedback for quiz attempts';
$string['shortcodescatquizstatistics'] = 'Display statistics for a CAT test';
$string['shortcodescatscalesoverview'] = 'Display catscales overview.';
$string['shortcodeslistofquizattempts'] = 'Returns a table of quiz attempts.';
$string['showlistofcatscalemanagers'] = 'Show list of CAT scale managers';
$string['somethingwentwrong'] = 'Something went wrong. Please contact your admin.';
$string['standarderror'] = 'Standarderror';
$string['starttime'] = 'Start';
$string['starttimestamp'] = 'Starttime';
$string['startwithdifficultquestion'] = 'with a difficult question';
$string['startwitheasyquestion'] = 'with an easy question';
$string['startwithmediumquestion'] = 'with a medium difficult question';
$string['startwithverydifficultquestion'] = 'with a very difficult question';
$string['startwithveryeasyquestion'] = 'with a very easy question';
$string['statistics'] = 'Stats';
$string['statusactiveorinactive'] = 'The activity status of the item. Set to “1” to make sure, item will not be used. Leave empty or set “0” for “active”.';
$string['store_debug_info_desc'] = 'When set, additional data for each quiz
    attempt are saved and provided as CSV download. This can take up a lot of
    space.';
$string['store_debug_info_name'] = 'Create quiz feedback with debug information';
$string['strategy'] = 'Strategy';
$string['stringdate:day'] = '{$a}';
$string['stringdate:month:01'] = 'January';
$string['stringdate:month:02'] = 'February';
$string['stringdate:month:03'] = 'March';
$string['stringdate:month:04'] = 'April';
$string['stringdate:month:05'] = 'May';
$string['stringdate:month:06'] = 'June';
$string['stringdate:month:07'] = 'July';
$string['stringdate:month:08'] = 'August';
$string['stringdate:month:09'] = 'September';
$string['stringdate:month:10'] = 'October';
$string['stringdate:month:11'] = 'November';
$string['stringdate:month:12'] = 'December';
$string['stringdate:quarter'] = 'Q{$a->q} {$a->y}';
$string['stringdate:week'] = 'week {$a}';
$string['studentdetails'] = 'Student details';
$string['studentstats'] = 'Students';
$string['subfeedbackrange'] = '({$a->lowerlimit} to {$a->upperlimit})';
$string['subplugintype_catmodel'] = 'CAT model';
$string['subplugintype_catmodel_plural'] = 'CAT models';
$string['subscribe'] = 'Subscribe';
$string['subscribed'] = 'Subscribed';
$string['subscribedcatscalesheading'] = 'Subscribed CAT scales';
$string['summary'] = 'Summary';
$string['summarygeneral'] = 'General';
$string['summarylastcalculation'] = 'Last complete calculation';
$string['summarynumberofassignedcatscales'] = 'Number of assigned CAT scales';
$string['summarynumberoftests'] = 'Number of assigned tests';
$string['summarytotalnumberofquestions'] = 'Number of questions (total)';
$string['target'] = 'Target';
$string['task_recalculate_cat_model_params'] = 'Recalculate CAT parameters';
$string['teacherfeedback'] = 'Feedback for teachers';
$string['templatetype'] = 'Template';
$string['test'] = 'Test Subscription';
$string['testinfolabel'] = 'Test information';
$string['testitem'] = 'Testitem with id {$a}';
$string['testitem_deleted'] = 'Testitem deleted';
$string['testitem_deleted_description'] = 'Testitem with ID {$a->testitemid} deleted.';
$string['testitem_imported'] = 'Testitem(s) imported';
$string['testitem_status_updated_description'] = 'Status of {$a->testitemlink} set to: {$a->statusstring}';
$string['testitemactivitystatus_updated'] = 'Activity status of testitem updated.';
$string['testitemdashboard'] = 'Testitem Dashboard';
$string['testiteminrelatedscale'] = 'Test item is already assigned to a parent- or subscale';
$string['testiteminscale_added'] = 'Testitem added to CAT scale';
$string['testiteminscale_updated'] = 'Testitem updated in CAT scale';
$string['testitems'] = 'Test items';
$string['testitemstatus_updated'] = 'Status of testitem updated.';
$string['testsandtemplates'] = 'Tests & Templates';
$string['teststrategy'] = 'Teststrategy';
$string['teststrategy_balanced'] = 'Moderate CAT';
$string['teststrategy_base'] = 'Base class for test strategies';
$string['teststrategy_fastest'] = 'CAT';
$string['teststrategy_info'] = 'Info class for test strategies';
$string['testtype'] = 'Test';
$string['time_penalty_threshold_desc'] = 'A question that has already been
    answered by a user in a previous test attempt is only asked again with a
    reduced probability. The probability depends on the duration between the
    previous and the current attempt. The longer the given recurrence delay,
    the longer this protection against repeated questions is effective.';
$string['time_penalty_threshold_name'] = 'Recurrence delay in days';
$string['timemodified'] = 'Time modified';
$string['timeoutabortnoresult'] = 'Test aborted without result.';
$string['timeoutabortresult'] = 'Test aborted with result.';
$string['timeoutfinishwithresult'] = 'Test aborted after finished current question.';
$string['timepacedtest'] = 'Timepaced test';
$string['toggleactivity'] = 'Activity status';
$string['togglestatus'] = 'Toggle status';
$string['totalnumberoftestitems'] = 'Total number of questions';
$string['tr_sd_ratio_desc'] = 'The multiplier for the confidence interval is
    the multiple of the standard deviation around the mean value by which a parameter
    parameter estimate of a person or item difficulty is expected. If
    the multiplier for the confidence interval is set too high, there is a
    risk that the numerical algorithm will become unstable and provide unreliable
    unreliable values when the data situation is difficult. The default value is a multiplier
    of 3.0, which statistically includes 99.9 percent of all expected cases.';
$string['tr_sd_ratio_name'] = 'Trusted region factor';
$string['trashbintitle'] = 'Delete item';
$string['type'] = 'Type';
$string['undefined'] = 'undefined';
$string['update_context_description'] = 'CAT context {$a} updated.';
$string['update_testitem_activity_status'] = 'Activity status of {$a->testitemlink} changed.';
$string['update_testitem_in_scale'] = '{$a->testitemlink} updated in {$a->catscalelink}';
$string['updatedrecords'] = '{$a} record(s) updated.';
$string['uploadcontext'] = 'autocontext_{$a->scalename}_{$a->usertime}';
$string['upperlimit'] = 'Upper limit';
$string['usage'] = 'Usage';
$string['usecatquiz'] = 'Use the catquiz engine for this test instance.';
$string['userfeedbacksheader'] = 'Attempt {$a->attemptid} from {$a->time}, by {$a->firstname} {$a->lastname} (userid: {$a->userid})';
$string['usertocourse_enroled'] = 'User enroled to course';
$string['usertocourse_enroled_description'] = 'User with ID {$a->userid} was enroled to course “<a href="{$a->courseurl}">{$a->coursename}</a>”';
$string['usertogroup_enroled'] = 'User enroled to group';
$string['usertogroup_enroled_description'] = 'User with ID {$a->userid} was enroled to group “{$a->groupname}” in course “<a href="{$a->courseurl}">{$a->coursename}</a>”‚';
$string['userupdatedcatscale'] = 'User with ID {$a->userid} updated {$a->catscalelink}';
$string['validateform:changevaluesorstatus'] = 'Please enter values or change the status.';
$string['validateform:onlyoneconfirmedstatusallowed'] = 'This status is allowed for one strategy only.';
$string['valuemustbegreaterzero'] = 'Value must be greater than zero.';
$string['versionchosen'] = 'Version chosen:';
$string['versioning'] = 'Versioning';
$string['wronglabels'] = 'Imported CSV not containing the right labels. Column {$a} can not be imported.';
$string['yourscorein'] = 'Your average scores in “{$a}”';
