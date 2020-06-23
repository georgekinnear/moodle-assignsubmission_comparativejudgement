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

namespace assignsubmission_comparativejudgement;

require_once($CFG->libdir.'/formslib.php');

use moodleform;

class judgerequestemaildeleteform extends moodleform {
    protected function definition() {
        list($assign, $emailid) = $this->_customdata;

        $mform = $this->_form;

        $elems = [
                'action'        => 'viewpluginpage',
                'plugin'        => 'comparativejudgement',
                'pluginsubtype' => 'assignsubmission',
                'pluginaction'  => 'deletejudgerequestemail'
        ];

        foreach ($elems as $key => $val) {
            $mform->addElement('hidden', $key, $val);
            $mform->setType($key, PARAM_ALPHA);
        }

        $elems = [
                'id'            => $assign->get_course_module()->id,
                'emailid'        => $emailid,
                'assignmentid'        => $assign->get_instance()->id
        ];

        foreach ($elems as $key => $val) {
            $mform->addElement('hidden', $key, $val);
            $mform->setType($key, PARAM_INT);
        }

        $this->add_action_buttons(true, get_string('delete', 'moodle'));
    }
}