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
 * @copyright   2022 Wunderbyte GmbH <info@wunderbyte.at>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

global $CFG;

require_once($CFG->dirroot . '/local/catquiz/lib.php');

$string['pluginname'] = 'ALiSe CAT Quiz';
$string['catquiz'] = 'Catquiz';

// Catquiz handler.
$string['catscale'] = 'CAT scale';
$string['catquizsettings'] = 'Test content and context';
$string['selectmodel'] = 'Choose a model';
$string['model'] = 'Model';
$string['modeldeactivated'] = 'Deactivate CAT engine';
$string['usecatquiz'] = 'Use the catquiz engine for this test instance.';
$string['catscales'] = 'Define catquiz CAT scales';
$string['catscales:information'] = 'Define CAT scales: {$a->link}';
$string['cattags'] = 'Manage course tags';
$string['cattags:information'] = 'These tags identify courses that teachers can enroll students in, regardless of whether they are part of the course.';
$string['choosetags'] = 'Choose tag(s)';
$string['choosetags:disclaimer'] = 'Multiple selection with key "⌘ command" (apple) or "Ctrl" (windows, linux)';
$string['catscalesname_exists'] = 'The name is already being used';
$string['cachedef_catscales'] = 'Caches the CAT scales of catquiz';
$string['catcatscales'] = 'Selection subscales';
$string['selectparentscale'] = 'Select CAT scale';
$string['catcatscales_help'] = 'Select and deselect the subscales that are relevant to you. A subscale includes questions from part of the selected content area. In a test experiment, only questions from the selected subscales are used.';
$string['nameexists'] = 'The name of the CAT scale already exists';
$string['createnewcatscale'] = 'Create new CAT scale';
$string['parent'] = 'Parent CAT scale - None if top level CAT scale';
$string['managecatscale'] = 'Manage CAT scale';
$string['managetestenvironments'] = 'Manage testenvironments';
$string['showlistofcatscalemanagers'] = "Show list of CAT scale managers";
$string['addcategory'] = "Add category";
$string['documentation'] = "Documentation";
$string['createcatscale'] = 'Create a CAT scale';
$string['cannotdeletescalewithchildren'] = 'Cannot delete CAT scale with children';
$string['passinglevel'] = 'Passing level in %';
$string['passinglevel_help'] = 'There is a level of personal competency that can be set for the test.';
$string['pilotratio'] = 'Proportion of questions to be piloted in %';
$string['pilotratio_help'] = 'Proportion of questions still to be piloted in the total number of questions in a test attempt. For example, specifying 20% ​means that one out of five questions in a test experiment will be a question to be piloted';
$string['pilotattemptsthreshold'] = 'Minimum number of adaptations';
$string['pilotattemptsthreshold_help'] = 'Questions with less attempts will be considered pilot questions';
$string['includepilotquestions'] = 'Activate pilot mode';
$string['standarderrorpersubscale'] = 'Standarderror per subscale in percent';
$string['standarderrorpersubscale_help'] = 'If the standard error for a scale drops below this value, it will no longer be tested.';
$string['maxquestionspersubscale'] = 'Maximum number of questions returned per subscale';
$string['maxquestionspersubscale_help'] = 'When this number of questions was returned for any subscale, no more questions from this scale will be shown. A value of 0 means that there is no limit.';
$string['minquestionspersubscale'] = 'Minimum number of questions returned per subscale';
$string['minquestionspersubscale_help'] = 'Questions of a subscale will be excluded only if at least the minimum number of questions was shown.';
$string['maxquestions'] = 'Max. questions per test.';
$string['maxquestions_help'] = '0 means no limit.';
$string['minquestions'] = 'Min. number of questions per test.';
$string['minquestions_help'] = 'There will be at least this number of questions in the test.';
$string['timepacedtest'] = 'Timepaced test';
$string['maxtime'] = 'Max time for test';
$string['maxtimeperitem'] = 'Max time per question in seconds';
$string['mintimeperitem'] = 'Min time per question in seconds';
$string['actontimeout'] = 'Action on timeout';
$string['contextidselect'] = 'CAT context - without selection default context is created';
$string['choosecontextid'] = 'Choose CAT context';
$string['defaultcontext'] = 'New default context for scale';

$string['timeoutabortnoresult'] = 'Test aborted without result.';
$string['timeoutabortresult'] = 'Test aborted with result.';
$string['timeoutfinishwithresult'] = 'Test aborted after finished current question.';

$string['minmaxgroup'] = 'Add min and max value as decimal';
$string['minscalevalue'] = 'Min value';
$string['maxscalevalue'] = 'Max value';
$string['chooseparent'] = 'Choose parent scale';
$string['errorminscalevalue'] = 'Min value has to be smaller than max value';
$string['errorhastobefloat'] = 'Has to be a deciamal';

$string['addoredittemplate'] = "Add or edit template";

// Test Strategy.
$string['catquiz_teststrategyheader'] = 'CAT Settings';
$string['catquiz_selectteststrategy'] = 'Purpose of test';

$string['teststrategy_base'] = 'Base class for test strategies';
$string['teststrategy_info'] = 'Info class for test strategies';
$string['teststrategy_fastest'] = 'Radical CAT';
$string['teststrategy_balanced'] = 'Moderate CAT';
$string['pilot_questions'] = 'Pilot questions';
$string['inferlowestskillgap'] = 'Infer lowest skill gap';
$string['infergreateststrength'] = 'Infer greatest strength';
$string['inferallsubscales'] = 'Infer all subscales';
$string['classicalcat'] = 'Classical test';

$string['catquiz_selectfirstquestion'] = "Start new CAT test with...";
$string['startwitheasiestquestion'] = "Start with the easiest question";
$string['startwithfirstofsecondquintil'] = "Start with the first question of the second quintil";
$string['startwithfirstofsecondquartil'] = "Start with the first question of the second quartil";
$string['startwithmostdifficultsecondquartil'] = "Start with the most difficult question of the second quartil";
$string['startwithaverageabilityoftest'] = "Use the average person ability of the current test";
$string['startwithcurrentability'] = "Use the person's current ability to determine the first question";

$string['maxtimeperquestion'] = "Maximum time per question in seconds";
$string['maxtimeperquestion_help'] = "If the user takes longer to answer a question, a break will be enforced";
$string['breakduration'] = "Duration of a forced break in seconds";

// Tests environment.
$string['newcustomtest'] = 'Custom test';
$string['lang'] = 'Language';
$string['component'] = 'Plugin';
$string['invisible'] = 'Invisible';
$string['edittestenvironment'] = 'Edit testenvironment';
$string['choosetemplate'] = 'Choose a test environment';
$string['parentid'] = 'Parent id';
$string['force'] = 'Force values';
$string['catscaleid'] = 'CAT scale ID';
$string['numberofquestions'] = '# questions';
$string['numberofusers'] = '# users';

// Cat contexts.
$string['addcontext'] = 'Add CAT context';
$string['managecatcontexts'] = 'Manage CAT contexts';
$string['manage_catcontexts'] = 'Manage CAT contexts';
$string['starttimestamp'] = 'Context start time';
$string['endtimestamp'] = 'Context end time';
$string['timemodified'] = 'Time modified';
$string['notimelimit'] = 'Kein Zeitlimit';
$string['attempts'] = 'Attempts';
$string['action'] = 'Action';
$string['searchcatcontext'] = 'Search CAT contexts';
$string['selectcatcontext'] = 'Select a CAT context';
$string['defaultcontextname'] = 'Default CAT context';
$string['defaultcontextdescription'] = 'Includes all test items';
$string['autocontextdescription'] = 'Automatically generated via import for CAT scale {$a}.';
$string['uploadcontext'] = 'autocontext_{$a->scalename}_{$a->usertime}';
$string['noint'] = 'Please enter an integer number';
$string['notpositive'] = 'Please enter a positive number';
$string['strategy'] = 'Strategy';
$string['max_iterations'] = 'Maximum number of iterations';
$string['model_override'] = 'Only use this model';

$string['starttimestamp'] = 'Starttime';
$string['endtimestamp'] = 'Endtime';

// Buttons.
$string['subscribe'] = 'Subscribe';
$string['subscribed'] = 'Subscribed';
$string['timemodified'] = 'Time modified';

// Events and Event Logs.
$string['target'] = 'Target';
$string['userupdatedcatscale'] = 'User with id {$a->userid} updated {$a->catscalelink}';
$string['catscale_updated'] = 'CAT scale updated';
$string['testitem'] = 'Testitem with id {$a}';
$string['add_testitem_to_scale'] = '{$a->testitemlink} added to {$a->catscalelink}';
$string['testiteminscale_added'] = 'Testitem added to CAT scale';
$string['testiteminscale_updated'] = 'Testitem updated in CAT scale';
$string['update_testitem_in_scale'] = '{$a->testitemlink} updated in {$a->catscalelink}';
$string['testitemactivitystatus_updated'] = 'Activity status of testitem updated.';
$string['update_testitem_activity_status'] = 'Activity status of {$a->testitemlink} changed.';
$string['activitystatussetinactive'] = 'Testitem is now inactive.';
$string['activitystatussetactive'] = 'Testitem is now active.';
$string['testitemstatus_updated'] = 'Status of testitem updated.';
$string['testitem_status_updated_description'] = 'Status of {$a->testitemlink} set to: {$a->statusstring}';
$string['catscale_created'] = 'CAT scale created';
$string['create_catscale_description'] = 'CAT scale {$a->catscalelink} with id {$a->objectid} created.';
$string['context_created'] = 'CAT context created.';
$string['create_context_description'] = 'CAT context {$a} created.';
$string['context_updated'] = 'CAT Context updated';
$string['update_context_description'] = 'CAT context {$a} updated.';
$string['logsafter'] = 'Logs after';
$string['logsbefore'] = 'Logs before';
$string['calculation_executed'] = 'Calculation executed.';
$string['executed_calculation_description'] = 'A calculation was executed of catscale {$a->catscalename} with id {$a->catscaleid} in context {$a->contextid} by {$a->user}. In the following models, items were recalculated: {$a->updatedmodels}';
$string['automaticallygeneratedbycron'] = 'Cron Job (automatically executed)';
$string['deletedcatscale'] = "catscale that doesn't exist anymore";
$string['attempt_completed'] = 'Attempt completed';
$string['complete_attempt_description'] = 'Attempt with id {$a->attemptid} in CAT scale {$a->catscalelink} completed by user {$a->userid}.';
$string['eventtime'] = 'Event time';
$string['eventname'] = 'Event name';
$string['testitem_imported'] = 'Testitem(s) imported';
$string['imported_testitem_description'] = '{$a} testitems were imported.';

// Message.
$string['messageprovider:catscaleupdate'] = 'Notification of CAT scale update';
$string['catscaleupdatedtitle'] = 'A CAT scale was updated';
$string['catscaleupdatedbody'] = 'A CAT scale was updated. TODO: more description.';
$string['messageprovider:updatecatscale'] = 'Is allowed to update catscale';

// Access.php.
$string['catquiz:canmanage'] = 'Is allowed to manage Catquiz plugin';
$string['catquiz:subscribecatscales'] = 'Is allowed to subscribe to Catquiz CAT scales';
$string['catquiz:manage_catscales'] = 'Is allowed to manage Catquiz CAT scales';

// Role.
$string['catquizroledescription'] = 'Catquiz Manager';

// Capabilities.
$string['catquiz:manage_catcontexts'] = 'Manage Cat contexts';
$string['catquiz:manage_testenvironments'] = 'Mange test environments';
$string['catquiz:view_teacher_feedback'] = 'Access teacher feedback';

// Navbar.
$string['managecatscales'] = 'Manage CAT scales';
$string['test'] = 'Test Subscription';

// Assign testitems to catscale page.
$string['assigntestitemstocatscales'] = "Assign testitem to CAT scale";
$string['assign'] = "Assign";
$string['questioncategories'] = 'Question category';
$string['questiontype'] = 'Question type';
$string['addtestitemtitle'] = 'Add test items to CAT scales';
$string['addtestitembody'] = 'Do you want to add the following test items to the current CAT scale?';
$string['addtestitemsubmit'] = 'Add';
$string['addtestitem'] = 'Add test items';
$string['usage'] = 'Usage';
$string['failedtoaddmultipleitems'] = '{$a->numadded} questions successfully added, failed with {$a->numfailed} questions: {$a->failedids}';
$string['testiteminrelatedscale'] = 'Test item is already assigned to a parent- or subscale';
$string['notyetcalculated'] = 'Not yet calculated';
$string['notyetattempted'] = 'No attempts';

$string['removetestitemtitle'] = 'Remove test item from CAT scale';
$string['removetestitembody'] = 'Do you want to remove the following test items from the current CAT scale? <br> {$a->data}';
$string['removetestitemsubmit'] = 'Remove';
$string['removetestitem'] = 'Remove test items';

$string['testitems'] = 'Test items';
$string['questioncontextattempts'] = '# Attempts in selected context';

// Students table.
$string['studentstats'] = 'Students';

// Email Templates.
$string['notificationcatscalechange'] = 'Hello {$a->firstname} {$a->lastname},
CAT scales have been changed on the Moodle platform {$a->instancename}.
This email informs you as the CAT Manager* responsible for those CAT scales of these changes . {$a->editorname} made the following changes to the CAT scale "{$a->catscalename}":
    {$a->changedescription}
You can review the current state here: {$a->linkonscale}';

// Catscale Dashboard.
$string['statistics'] = "Stats";
$string['models'] = "Models";
$string['previewquestion'] = "Preview question";
$string['personability'] = "Person ability";
$string['personabilities'] = "Person abilities";
$string['personabilitiesnodata'] = "No person abilities were calculated";
$string['itemdifficulties'] = "Item difficulties";
$string['itemdifficultiesnodata'] = "No item difficulties were calculated";
$string['somethingwentwrong'] = 'Something went wrong. Please contact your admin.';
$string['recalculationscheduled'] = 'Recalculation of the context parameters has been scheduled';
$string['scaledetailviewheading'] = 'Detailview of catscale {$a}';

// Table.
$string['label'] = "Label";
$string['name'] = "Name";
$string['questiontext'] = "Question text";
$string['selectitem'] = "No items selected";

// Testitem Dashboard.
$string['testitemdashboard'] = "Testitem Dashboard";
$string['itemdifficulty'] = "Item difficulty";
$string['likelihood'] = "Likelihood";

$string['difficulty'] = "Difficulty";
$string['discrimination'] = "Discrimination";
$string['lastattempttime'] = "Last attempt";
$string['guessing'] = "Guessing";

$string['numberofanswers'] = "Answers total";
$string['numberofusagesintests'] = "In tests";
$string['numberofpersonsanswered'] = "By different persons";
$string['numberofanswerscorrect'] = "Correct";
$string['numberofanswersincorrect'] = "Wrong";
$string['numberofanswerspartlycorrect'] = "Partly correct";
$string['averageofallanswers'] = "Average";

$string['itemstatus_-5'] = "Manually excluded"; // LOCAL_CATQUIZ_STATUS_EXCLUDED_MANUALLY.
$string['itemstatus_0'] = "Not yet calculated"; // LOCAL_CATQUIZ_STATUS_NOT_CALCULATED.
$string['itemstatus_1'] = "Calculated"; // LOCAL_CATQUIZ_STATUS_CALCULATED.
$string['itemstatus_4'] = "Manually updated"; // LOCAL_CATQUIZ_STATUS_UPDATED_MANUALLY.
$string['itemstatus_5'] = "Manually confirmed"; // LOCAL_CATQUIZ_STATUS_CONFIRMED_MANUALLY.

// Student Details.
$string['studentdetails'] = "Student details";
$string['enroled_courses'] = "Enroled courses";
$string['questionresults'] = "Question results";
$string['daysago'] = '{$a} days ago';
$string['hoursago'] = '{$a} hours ago';
$string['noaccessyet'] = 'No access yet';

// Tasks.
$string['task_recalculate_cat_model_params'] = "Recalculate CAT parameters";

// CAT Manager.
$string['catmanager'] = "CAT-Manager";
$string['summary'] = "Summary";
$string['questions'] = "Questions";
$string['testsandtemplates'] = "Tests & Templates";
$string['calculations'] = "Calculations";
$string['versioning'] = "Versioning";
$string['catscalesheading'] = "CAT scales";
$string['subscribedcatscalesheading'] = "Subscribed CAT scales";
$string['summarygeneral'] = "General";
$string['summarynumberofassignedcatscales'] = "Number of assigned CAT scales";
$string['summarynumberoftests'] = "Number of assigned tests";
$string['summarytotalnumberofquestions'] = "Number of questions (total)";
$string['summarylastcalculation'] = "Last complete calculation";
$string['recentevents'] = "Recent Events";
$string['aria:catscaleimage'] = "Background pattern for this CAT scale";
$string['healthstatus'] = "Health status";
$string['catmanagernumberofsubscales'] = "Number of subscales";
$string['catmanagernumberofquestions'] = "Number of questions";
$string['integratequestions'] = "Integrate questions from subscales";
$string['noscaleselected'] = "No scale selected";
$string['norecordsfound'] = "There are no questions in this scale";
$string['selectsubscale'] = "Select a subscale";
$string['selectcatscale'] = "Scale:";
$string['versionchosen'] = 'Version chosen:';
$string['pleasechoose'] = 'please choose';
$string['quizattempts'] = 'Quiz Attempts';
$string['calculate'] = 'Calculate';
$string['noedit'] = 'End Editing';
$string['undefined'] = 'undefined';

// CAT Manager Questions Table.
$string['type'] = 'Type';
$string['attempts'] = 'Attempts';
$string['addquestion'] = 'Add question from catalogue';
$string['addtest'] = 'Add existing test';
$string['checklinking'] = 'Check linking';
$string['confirmdeletion'] = 'You are about to delete the following item: <br> "{$a->data}"';
$string['confirmactivitychange'] = 'You are about to change the activity status of the following item: <br> "{$a->data}"';
$string['genericsubmit'] = 'Confirm';
$string['deletedatatitle'] = 'Delete';
$string['toggleactivity'] = 'Activity status';
$string['errorrecordnotfound'] = 'There was an error with the database query. The record was not found.';
$string['trashbintitle'] = 'Delete item';
$string['cogwheeltitle'] = 'Display details';
$string['eyeicontitle'] = 'Activate/Disable';
$string['edititemparams'] = 'Edit item params';

// Testitem Detail View.
$string['questionpreview'] = 'Question preview';
$string['backtotable'] = 'Back to overview table';
$string['local_catquiz_toggle_testitemstatus_message'] = 'Testitem status was updated';
$string['togglestatus'] = 'Toggle status';

// CAT Quiz handler.
$string['noremainingquestions'] = "You ran out of questions";
$string['errorfetchnextquestion'] = "There was an error while selecting the next question";
$string['reachedmaximumquestions'] = "Reached maximum number of questions";
$string['error'] = "An error occured";
$string['id'] = "ID";
$string['abortpersonabilitynotchanged'] = "Person parameter did not change";
$string['emptyfirstquestionlist'] = "Can't select a start question because the list is empty";
$string['feedbackcomparetoaverage'] = 'You performed better than {$a}% of your fellow students.';
$string['feedbackneedsimprovement'] = "Don't you think that you can do better?";

// Quiz Feedback.
$string['attemptfeedbacknotavailable'] = "No feedback available";
$string['allquestionsincorrect'] = "Not available - all questions were answered incorrectly";
$string['allquestionscorrect'] = "Not available- all questions were answered correctly";
$string['questionssummary'] = "Summary";
$string['currentability'] = "Your current skill level";
$string['currentabilityfellowstudents'] = "Current skill level of your fellow students";
$string['feedbackbarlegend'] = "Color code";
$string['feedbackbarlegend_region_1'] = "Your future instructors consider this level of knowledge to be insufficient to keep up with the studies.";
$string['feedbackbarlegend_region_2'] = "With this level of knowledge, one can expect to encounter regular difficulties during the studies.";
$string['feedbackbarlegend_region_3'] = "Experience has shown that it is typically possible to complete the program within the standard study period with knowledge at this level.";
$string['feedbackbarlegend_region_4'] = "This domain suggests a prior knowledge that even exceeds the requirements of the subject studies.";
$string['teacherfeedback'] = "Feedback for teachers";
$string['catquiz_feedbackheader'] = "Feedback";
$string['catquizfeedbackheader'] = 'Feedback for "{$a}"';
$string['feedbacknumber'] = 'Feedback for range {$a}';
$string['noselection'] = "No selection";
$string['lowerlimit'] = "Lower limit";
$string['upperlimit'] = "Upper limit";
$string['setcoursesforscaletext'] = 'For catscale {$a}, determine the ability for the individual feedback, the written feedback and the respective enrollments in courses or groups.';
$string['limitrange'] = 'Limit range';
$string['catcatscaleprime'] = 'Content/Scale';
$string['catcatscaleprime_help'] = 'Select the content area that is relevant to you. Content areas are created and managed as a so-called scale by a CAT manager. If you would like your own content and sub-areas, please contact the CAT manager or the administrator of your Moodle instance.';
$string['catcatscales_selectall'] = 'Select all subscales';
$string['selectcatcontext_help'] = 'Contexts differentiate the data in terms of target group, purpose or time/cohort. The deployment context is managed by the CAT manager. If you would like your own context of use for your purpose, please contact the CAT manager or the administrator of your Moodle instance.';
$string['includepilotquestions_help'] = 'In the pilot mode, questions are added to the tests whose parameters (e.g. difficulty, guessing) are not determined yet. These do not contribute to the test result. The data generated by the processing can later be statistically evaluated by a CAT manager to determine the question parameters.';
$string['catquiz_selectfirstquestion_help'] = 'During a test attempt, the algorithm decides based on this setting which criterion will be used to select the first question to be played.';
$string['numberoffeedbackoptionpersubscale'] = 'Anzahl an Feedback-Optionen pro Subskala';
$string['numberoffeedbackoptionpersubscale_help'] = 'Select how many options of feedback you need per subscale. Using the feedback options, you can provide graded, written feedback depending on the ability identified and enroll in different courses or groups.';
$string['choosesubscaleforfeedback'] = 'Select a subscale';
$string['feedbackcompletedpartially'] = '{$a} feedbacks of this scale completed.';
$string['feedbackcompletedentirely'] = 'All feedbacks completed for this scale.';
$string['feedbacklegend'] = 'Feedback to be displayed in color bar legend';
$string['disclaimer:numberoffeedbackchange'] = 'Changes may require an adjustment of feedback content.';
$string['feedback_table_questionnumber'] = '#';
$string['feedback_table_answercorrect'] = "correct";
$string['feedback_table_answerincorrect'] = "incorrect";
$string['feedback_table_answerpartlycorrect'] = "partly correct";

// Check display line breaks etc.
$string['choosesubscaleforfeedback_help'] = 'You can now store <number of options> feedback informations for the subscales displayed. Select a (sub-)scale to enter your feedback. The colored symbols indicate the current status of processing, measured by the number of feedback options you entered:
    gray - no feedback stored in the sub-scale yet
    yellow - some feedback options still unfilled
    green - feedback fully deposited';
$string['choosesubscaleforfeedback_text'] = '';
$string['setfeedbackforscale'] = 'written feedback';
// For setfeedbackforscale_help: Param =  <Name der Subskala>.
$string['setfeedbackforscale_help'] = 'This text will be displayed to the test participants after completion of the test, provided the result for the subscale <subscale name> falls within the defined ability range.';
$string['setgrouprenrolmentforscale'] = 'Enrole to a group';
$string['groupselection'] = 'Select group';
$string['courseselection'] = 'Select course';
// For setgroupenrolmentforscale_help: Param =  <Name der Subskala>.
$string['setgrouprenrolmentforscale_help'] = 'Test participants are enrolled in this group of the course after completing the test, provided the result falls within the set ability range. If you do not wish to be enrolled in a group, please leave this field blank.';
$string['setcourseenrolmentforscale'] = 'Subscription to a course';
// For setcourseenrolmentforscale_help: Param =  <Name der Subskala>.
$string['setcourseenrolmentforscale_help'] = 'Test participants are enrolled in this (external) course after completing the test, provided the result falls within the set ability range. You can only select courses for which you have the right to enroll or which have been approved for enrollment by a CAT manager. If you do not wish to enroll in an external course, please leave this field blank.';
$string['setautonitificationonenrolmentforscale'] = 'Inform participants about group or course enrollment using the standard text.';
// Check Params for setautonitificationonenrolmentforscale_help text. Group and courselink.
$string['setautonitificationonenrolmentforscale_help'] = '
In addition to their written feedback, participants will receive the following note: "You have been automatically enrolled in the group <group name> / the course <course name as a link>."';
$string['copysettingsforallsubscales'] = 'Apply values for all subscales';
$string['quizgraphicalsummary'] = 'Quiz progress summary';
$string['score'] = 'Weighted score';
$string['response'] = 'Response';
$string['abilityintestedscale'] = 'Ability in top-most parent scale';
$string['abilityintestedscale_before'] = 'Ability in top-most parent scale - before';
$string['abilityintestedscale_after'] = 'Ability in top-most parent scale - after';
$string['fisherinformation'] = 'Fisherinformation';
$string['difficulty_next_easier'] = 'Next more difficult question';
$string['difficulty_next_more_difficult'] = 'Next easier question';

// Quiz attempts.
$string['catcontext'] = 'CAT Context';
$string['totalnumberoftestitems'] = "Total number of questions";
$string['numberoftestitemsused'] = "Number of displayed questions";
$string['personabilitybeforeattempt'] = "Ability before attempt";
$string['personabilityafterattempt'] = "Ability after attempt";
$string['instance'] = "Test";
$string['teststrategy'] = "Teststrategy";
$string['starttime'] = "Start";
$string['endtime'] = "End";
$string['feedbacksheader'] = 'Attempt {$a}';
$string['attemptscollapsableheading'] = 'Feedback for your attempts:';

// CSV Import Form.
$string['importcsv'] = 'Import CSV';
$string['importsuccess'] = 'Import was successful. {$a} record(s) treated.';
$string['importfailed'] = 'Import failed';
$string['dateparseformat'] = 'Date parse format';
$string['dateparseformat_help'] = 'Please, use date format like specified in CSV file. Help with <a href="http://php.net/manual/en/function.date.php">this</a> resource for options.';
$string['defaultdateformat'] = 'j.n.Y H:i:s';
$string['importcolumnsinfos'] = 'Informations about columns to be imported:';
$string['mandatory'] = 'mandatory';
$string['optional'] = 'optional';
$string['format'] = 'format';
$string['openformat'] = 'open format';
$string['downloaddemofile'] = 'Download demofile';
$string['labelidnotunique'] = 'Label {$a} is not unique.';
$string['labelidnotfound'] = 'Label {$a} not found.';
$string['updatedrecords'] = '{$a} record(s) updated.';
$string['addedrecords'] = '{$a} record(s) added.';
$string['itemassignedtosecondscale'] = 'Record with componentid {$a->componentid} is already assigned to scale {$a->scalelink}, now also assigned to {$a->newscalename}.';
$string['itemassignedtoparentorsubscale'] = 'Record with componentid {$a->componentid} is already assigned to a parent or child scale of {$a->newscalename} and was not imported.';
$string['callbackfunctionnotdefined'] = 'Callback function is not defined.';
$string['callbackfunctionnotapplied'] = 'Callback function could not be applied.';
$string['canbesetto0iflabelgiven'] = 'Can be 0 if matching of testitem is via label.';
$string['ifdefinedusedtomatch'] = 'If defined, will be used to match.';
$string['fieldnamesdontmatch'] = "The imported fieldnames don't match the defined fieldnames.";
$string['checkdelimiteroremptycontent'] = 'Check if data is given and separated via the selected symbol.';
$string['wronglabels'] = 'Imported CSV not containing the right labels. Column {$a} can not be imported.';
$string['missinglabel'] = 'Imported CSV does not contain mandatory column {$a}. Data can not be imported.';
$string['nolabels'] = 'No column labels defined in settings object.';
$string['checkdelimiter'] = 'Check if data is separated via the selected symbol.';
$string['scaleinformation'] = 'The id of the CAT scale the item should be assigned to.';
$string['scalenameinformation'] = 'The name of the CAT scale the item should be assigned to. If no catscale id given, matching is done via name.';
$string['dataincomplete'] = 'Record with componentid {$a->id} is incomplete and could not be treated entirely. Check field "{$a->field}".';
$string['modelinformation'] = 'This field is necessary to entirely treat the record. If it is empty, item can only be assigned to CAT scale.';
$string['parentscalenamesinformation'] = 'You can enter parent scales for the defined scale, in order to create the correct scale strucutre on the fly. Start with the highest parent and separate all children with "|" (vertical line unicode U+007C - do not mistake for slash "/").';

// Testenvironments table.
$string['notifyallteachers'] = 'Notify all teachers';
$string['notifyteachersofselectedcourses'] = 'Notify teachers of selected courses';

$string['close'] = 'Close';

// Shortcodes.
$string['shortcodeslistofquizattempts'] = 'Returns a table of quiz attempts.';
$string['catquizfeedback'] = 'Returns an overview of the last quiz attempts.';
$string['shortcodescatquizfeedback'] = 'Display feedback for quiz attempts';

// Validation.
$string['valuemustbegreaterzero'] = 'Value must be greater than zero.';

// Breakinfo.
$string['breakinfo_title'] = 'Test paused';
$string['breakinfo_description'] = 'Test was paused';
$string['breakinfo_continue'] = 'You can continue the test at {$a}';
$string['breakinfo_backtotest'] = 'Back to the test';

// CAT Colors.
$string['feedback_colorrange'] = 'Colorrange of a feedbackscale';

$string['colorpicker_color_red'] = 'Red';
$string['colorpicker_color_black'] = 'Black';
$string['colorpicker_color_darkred'] = 'Darkred';
$string['colorpicker_color_orange'] = 'Orange';
$string['colorpicker_color_yellow'] = 'Yellow';
$string['colorpicker_color_lightgreen'] = 'Lightgreen';
$string['colorpicker_color_darkgreen'] = 'Darkgreen';
$string['colorpicker_color_white'] = 'White';

$string['colorvalue_red'] = '#ff0000';
$string['colorvalue_black'] = '#000000';
$string['colorvalue_darkred'] = '#8b0000';
$string['colorvalue_orange'] = '#ffa500';
$string['colorvalue_yellow'] = '#ffff00';
$string['colorvalue_lightgreen'] = '#90ee90';
$string['colorvalue_darkgreen'] = '#006400';
$string['colorvalue_white'] = '#e8e9eb';

$string['#ff0000'] = 'Red';
$string['#000000'] = 'Black';
$string['#8b0000'] = 'Darkred';
$string['#ffa500'] = 'Orange';
$string['#ffff00'] = 'Yellow';
$string['#90ee90'] = 'Lightgreen';
$string['#006400'] = 'Darkgreen';
$string['#e8e9eb'] = 'White';
