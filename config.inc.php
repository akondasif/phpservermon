<?php

/*
 * PHP Server Monitor v2.0.0
 * Monitor your servers with error notification
 * http://phpservermon.sourceforge.net/
 *
 * Copyright (c) 2008-2009 Pepijn Over (ipdope@users.sourceforge.net)
 *
 * This file is part of PHP Server Monitor.
 * PHP Server Monitor is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * PHP Server Monitor is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with PHP Server Monitor.  If not, see <http://www.gnu.org/licenses/>.
 */

########################################
#
# START SERVER MONITOR CONFIGURATION
#
########################################

// Database information
// Prefix used for tables
define('SM_DB_PREFIX', 'monitor_');
// Database username
define('SM_DB_USER', 'db_user');
// Database password
define('SM_DB_PASS', 'db_pass');
// Database name
define('SM_DB_NAME', 'db_name');
// Database host
define('SM_DB_HOST', 'localhost');

########################################
#
# END SERVER MONITOR CONFIGURATION
#
########################################

// Include paths
// Tell the script where to find the templates, css files and javascript files.
// If you haven't changed anything to the structure you should leave these unchanged
define('SM_PATH_TPL', 'tpl/');
define('SM_PATH_CSS', 'inc/');
define('SM_PATH_JS', 'inc/');

error_reporting(0);
ini_set('display_errors', '0');

require 'functions.inc.php';
$db = new smDatabase();

sm_load_conf();

$lang = sm_get_conf('language');

if(!$lang) {
	$lang = 'en';
}
sm_load_lang($lang);

?>