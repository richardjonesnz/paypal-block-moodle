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
 * Newblock block caps.
 *
 * @package    block_cart
 * @copyright  Daniel Neis <danielneis@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
 
  if ($ADMIN->fulltree) {
	   
    $defaultemail='no email';
    $heading = new lang_string('headerconfig', 'block_cart');
    $description = new lang_string('desconfig', 'block_cart');

    $settings->add(new admin_setting_heading('cartsettings', $heading, $description));

    $settings->add(new admin_setting_configtext('block_cart/email',
				 get_string('email', 'block_cart'),
				 get_string('email_details', 'block_cart'), $defaultemail, PARAM_RAW));
  }