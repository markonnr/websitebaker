<?php

// $Id: preferences.php,v 1.4 2005/04/02 06:25:37 rdjurovich Exp $

/*

 Website Baker Project <http://www.websitebaker.org/>
 Copyright (C) 2004-2005, Ryan Djurovich

 Website Baker is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 Website Baker is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with Website Baker; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

*/

require('../config.php');

// Start a session
if(!defined('SESSION_STARTED')) {
	session_name(APP_NAME.'_session_id');
	session_start();
	define('SESSION_STARTED', true);
}

// Get users language if it is not already set
if(!defined('LANGUAGE')) {
	if(isset($_SESSION['LANGUAGE']) AND $_SESSION['LANGUAGE'] != '') {
		define('LANGUAGE', $_SESSION['LANGUAGE']);
	} else {
		define('LANGUAGE', DEFAULT_LANGUAGE);
	}
}

// Load the language file
if(!file_exists(WB_PATH.'/languages/'.LANGUAGE.'.php')) {
	exit('Error loading language file '.LANGUAGE.', please check configuration');
} else {
	require_once(WB_PATH.'/languages/'.LANGUAGE.'.php');
}

// Required page details
$page_id = 0;
$page_description = '';
$page_keywords = '';
define('PAGE_ID', 0);
define('ROOT_PARENT', 0);
define('PARENT', 0);
define('LEVEL', 0);
define('PAGE_TITLE', $MENU['PREFERENCES']);
define('MENU_TITLE', $MENU['PREFERENCES']);
define('MODULE', '');
define('VISIBILITY', 'public');

// Set the page content include file
if(isset($_POST['current_password']) AND isset($_POST['new_password'])) {
	define('PAGE_CONTENT', WB_PATH.'/account/password.php');
} elseif(isset($_POST['current_password']) AND isset($_POST['email'])) {
	define('PAGE_CONTENT', WB_PATH.'/account/email.php');
} elseif(isset($_POST['display_name'])) {
	define('PAGE_CONTENT', WB_PATH.'/account/details.php');
} else {
	define('PAGE_CONTENT', WB_PATH.'/account/preferences_form.php');
}

// Include the index (wrapper) file
require(WB_PATH.'/index.php');

?>