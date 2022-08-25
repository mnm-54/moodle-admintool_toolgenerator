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
 * plugin callbacks
 *
 * @package    tool_toolgenerator
 * @copyright  2022 munem
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Callback allowing to add js to $PAGE->requires
 */
function tool_toolgenerator_before_http_headers()
{
    return null;
}

/**
 * Callback allowing to add contetnt inside the region-main, in the very end
 *
 * @return string
 */
function tool_toolgenerator_before_footer()
{
    return '';
}

// @codingStandardsIgnoreStart
/* More callbacks that can be implemented

function tool_toolgenerator_render_navbar_output() {
    // Added to the top navbar after messaging icon before the user picture/menu.
    return '';
}

function tool_toolgenerator_add_htmlattributes() {
    // <html {{{ output.htmlattributes }}}>
    return [];
}

function tool_toolgenerator_standard_after_main_region_html() {
    // Added in the very end of the page, must be floating element or otherwise it messes up layout
    return '';
}

function tool_toolgenerator_standard_footer_html() {
    // Added after the "Reset user tour on this page" link in the popup footer
    return '';
}

function tool_toolgenerator_before_standard_top_of_body_html() {
    // added before the <nav> element (top navbar)
    return '';
}

function tool_toolgenerator_before_standard_html_head() {
    // Can add meta tags here
    return '';
}

function tool_toolgenerator_after_config() {
    return null;
}

function tool_toolgenerator_after_require_login() {

}

function tool_toolgenerator_extend_navigation_user($usernode, $user, $usercontext, $course, $coursecontext) {

}

function tool_toolgenerator_extend_navigation_course($coursenode, $course, $coursecontext) {

}

function tool_toolgenerator_extend_navigation_user_settings($usersetting, $user, $usercontext, $course, $coursecontext) {

}

function tool_toolgenerator_extend_navigation_category_settings($categorynode, $catcontext) {

}

function tool_toolgenerator_extend_navigation_frontpage($frontpage, $course, $coursecontext) {

}

function tool_toolgenerator_user_preferences() {

}

function tool_toolgenerator_get_course_category_contents($coursecat) {
    // To display what this category contains (on category deletion)
    return '';
}
*/
// @codingStandardsIgnoreEnd