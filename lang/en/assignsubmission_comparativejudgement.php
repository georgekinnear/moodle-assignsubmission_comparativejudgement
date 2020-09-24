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
 * @package    assignsubmission_comparativejudgement
 * @copyright 2020 Andrew Hancox at Open Source Learning <andrewdchancox@googlemail.com>
 * @copyright 2020 Ian Jones at Loughborough University <I.Jones@lboro.ac.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['addexemplar'] = 'Add exemplar';
$string['alwayssameside'] = 'User always picked the same side';
$string['avgtimetakencomparing'] = 'Average time spent';
$string['body'] = 'Body';
$string['bodydefault'] = '[fullname],
As part of the grading of assignment [assignname] you are required to compare other submissions, you can do this by going to [judgeurl].';
$string['body_help'] = 'Body of message to send to judges, available placeholders are:
       [firstname]
       [lastname]
       [fullname]
       [assignurl]
       [judgeurl]
       [assignname]';
$string['calculategrades'] = 'Calculate grades';
$string['comments'] = 'Comments';
$string['comment'] = 'Comment';
$string['commentpublished'] = 'Published';
$string['comparisonprogress'] = 'Comaprison {$a->number} of {$a->required}';
$string['comparativejudgement_enablecomments'] = 'Enable comparison comments';
$string['comparativejudgement_introduction'] = 'Introduction for judges';
$string['comparativejudgement_judgementswhileeditable'] = 'Allow user to judge while their submission is editable';
$string['comparativejudgement:manageemails'] = 'Manage emails';
$string['comparativejudgement:manageexemplars'] = 'Manage exemplars';
$string['copytogradebook'] = 'Copy grades to gradebook';
$string['delay'] = 'Delay';
$string['delaydetail'] = '{$a->delay} (currently {$a->current})';
$string['delaydetailnever'] = 'never';
$string['deleteemail'] = 'Delete email';
$string['deleteexemplar'] = 'Delete exemplar';
$string['docomparison'] = 'Do comparison';
$string['downloadrawjudgedata'] = 'Raw judgement data';
$string['editemail'] = 'Edit email';
$string['editexemplar'] = 'Edit exemplar';
$string['enabled_help'] = 'If enabled, submissions are graded through comparative judgement.';
$string['enabled'] = 'Comparative judgement';
$string['errorexecutingscript'] = 'Error executing RScript';
$string['exemplartitle'] = 'Title';
$string['fakerole_assignment_submitted'] = 'Users with completed submissions';
$string['fakerole_gradable_users'] = 'Gradable users';
$string['firstcomparison'] = 'First comparison';
$string['importcomments'] = 'Import comments';
$string['include'] = 'Include in grading';
$string['judgeid'] = 'Judge id';
$string['judgementstartdate'] = 'Start date for judgements';
$string['judge'] = 'Judge';
$string['judges'] = 'Judges';
$string['lastcalculation'] = 'Last calculation of grades at: {$a}';
$string['lastcomparison'] = 'Last comparison';
$string['lastreliability'] = 'Last reliability: {$a}';
$string['left'] = 'Choose Left';
$string['losses'] = 'Losses';
$string['managecomparisoncomments'] = 'Comparison comments';
$string['manageexemplars'] = 'Manage exemplars';
$string['managejudgerequestemail'] = 'Manage judgement request emails';
$string['managejudgerequestemailintro'] =
        'Reminder emails will be sent to all users elligible to make judgements, they will be sent out on a schedule starting from the judgement start date if set, otherwise the submission cut off date or due date. If cut off date or due date are used then any extensions applied to users will impact on the date they receive the reminder.';
$string['managejudges'] = 'Manage judges';
$string['managesubmissions'] = 'Manage submissions';
$string['maxjudgementsperuser'] = 'Maximum judgements per user';
$string['maxtimetakencomparing'] = 'Max. time spent';
$string['minjudgementspersubmission'] = 'Minimum judgements per submission';
$string['minjudgementsperuser'] = 'Minimum judgements per user';
$string['mintimetakencomparing'] = 'Min. time spent';
$string['newreminderemail'] = 'New reminder email';
$string['noofcomparisons'] = 'Comparisons made';
$string['noofcomparisonsreceived'] = 'Comparisons received';
$string['pluginname'] = 'Comparative judgement';
$string['privacy:metadata:assignmentid'] = 'Assignment ID';
$string['privacy:metadata:submissionpurpose'] = 'The submission ID that links to submissions for the user.';
$string['right'] = 'Choose Right';
$string['score'] = 'Score';
$string['sendjudgerequestemails'] = 'Send judgement request emails';
$string['sidespicked'] = 'Ratio of sides chosen';
$string['stopjudging'] = 'Finish judging';
$string['subject'] = 'Subject';
$string['submissionid'] = 'Submission id';
$string['subjectdefault'] = 'subjectdefault';
$string['submission'] = 'Submission';
$string['timetakencomparing'] = 'Time spent';
$string['userupload'] = 'Uploaded file';
$string['viewassignment'] = 'View';
$string['viewexemplar'] = 'View';
$string['wins'] = 'Wins';

$string['privacy:judgement'] = 'Judgement received';
$string['privacy:judgementmade'] = 'Judgement made';
$string['privacy:ranking'] = 'Ranking';
$string['privacy:metadata:assignsubmission_comparativejudgement:assignmentid'] = 'Assignment module id';
$string['privacy:metadata:assignsubmission_comparativejudgement:comments'] = 'Judgement comments';
$string['privacy:metadata:assignsubmission_comparativejudgement:judgementid'] = 'Related judgementid';
$string['privacy:metadata:assignsubmission_comparativejudgement:score'] = 'Auto-generated score for assignment submission';
$string['privacy:metadata:assignsubmission_comparativejudgement:submissionid'] = 'Related submissionid';
$string['privacy:metadata:assignsubmission_comparativejudgement:timetaken'] = 'Time taken';
$string['privacy:metadata:assignsubmission_comparativejudgement:usermodified'] = 'User who modified the record';
$string['privacy:metadata:assignsubmission_comparativejudgement:rankingid'] = 'Related ranking id';
$string['privacy:metadata:assignsubmission_comparativejudgement:winningsubmission'] = 'Winning submission chosen during judgement';
$string['privacy:metadata:assignsubmission_comparativejudgement:winningsubmissionposition'] = 'Position of winning submission chosen during judgement';

$string['privacy:metadata:assignsubmission_comparativejudgement:assignsubmission_comp:tablepurpose'] = 'Comparisons performed by users';
$string['privacy:metadata:assignsubmission_comparativejudgement:assignsubmission_compsubs:tablepurpose'] = 'Assignment submissions that have been compared and related comments';
$string['privacy:metadata:assignsubmission_comparativejudgement:assignsubmission_rankingsub:tablepurpose'] = 'Scores that have been automatically generated for a submission';

$string['event:commentsimported'] = 'Judgement comments imported';
$string['event:comparisonmade'] = '';
$string['event:gradescalculated'] = '';
$string['event:gradesimported'] = '';
$string['event:judgerequestemail_deleted'] = '';
$string['event:judgerequestemail_modified'] = '';
$string['event:judgerequestemail_sent'] = '';