<?php

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
 * Kaltura media gallery version file.
 *
 * @package    local_kalturamediagallery
 * @author     Remote-Learner.net Inc
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @copyright  (C) 2014 Remote Learner.net Inc http://www.remote-learner.net
 */

if (!defined('MOODLE_INTERNAL')) {
    die('Direct access to this script is forbidden.');
}

$plugin->version = 2024042201;
$plugin->component = 'local_kalturamediagallery';
$plugin->release = 'Kaltura release 4.4.9';
$plugin->requires = 2024042200;
$plugin->maturity = MATURITY_STABLE;
$plugin->dependencies = array(
    'local_kaltura' => 2024042201
);
