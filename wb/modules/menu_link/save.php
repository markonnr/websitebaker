<?php

// $Id$

/*

 Website Baker Project <http://www.websitebaker.org/>
 Copyright (C) 2004-2008, Ryan Djurovich

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

require('../../config.php');

// Include WB admin wrapper script
$update_when_modified = true; // Tells script to update when this page was last updated
require(WB_PATH.'/modules/admin.php');

// Update the mod_menu_links table with the link
if(isset($_POST['link']) && isset($_POST['target'])) {
	// Update id and target
	$foreign_page_id = $_POST['link']; // foreign-page_id
	$url_target = $_POST['target'];
	$table_pages = TABLE_PREFIX.'pages';
	$table_mod = TABLE_PREFIX.'mod_menu_link';
	$database->query("UPDATE $table_pages SET target = '$url_target' WHERE page_id = '$page_id'");
	$database->query("UPDATE $table_mod SET target_page_id = '$foreign_page_id' WHERE page_id = '$page_id'");
} else {
	$admin->print_error('Error in wb/modules/menu_link/save.php at line 35', true);
}

// Check if there is a database error, otherwise say successful
if($database->is_error()) {
	$admin->print_error($database->get_error(), $js_back);
} else {
	$admin->print_success($MESSAGE['PAGES']['SAVED'], ADMIN_URL.'/pages/modify.php?page_id='.$page_id);
}

// Print admin footer
$admin->print_footer();

?>
