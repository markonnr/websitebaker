<?php

// $Id: details.php,v 1.2 2005/04/02 06:25:53 rdjurovich Exp $

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

// Include the config file
require('../../config.php');

// Get template name
if(!isset($_POST['file']) OR $_POST['file'] == "") {
	header("Location: index.php");
} else {
	$file = $_POST['file'];
}

// Check if the template exists
if(!file_exists(WB_PATH.'/templates/'.$file)) {
	header("Location: index.php");
}

// Print admin header
require_once(WB_PATH.'/framework/class.admin.php');
$admin = new admin('Addons', 'templates_view');

// Setup template object
$template = new Template(ADMIN_PATH.'/templates');
$template->set_file('page', 'details.html');
$template->set_block('page', 'main_block', 'main');

// Insert values
require(WB_PATH.'/templates/'.$file.'/info.php');
$template->set_var(array(
								'NAME' => $template_name,
								'AUTHOR' => $template_author,
								'DESCRIPTION' => $template_description,
								'VERSION' => $template_version,
								'DESIGNED_FOR' => $template_designed_for
								)
						);

// Insert language headings
$template->set_var(array(
								'HEADING_TEMPLATE_DETAILS' => $HEADING['TEMPLATE_DETAILS']
								)
						);
// Insert language text and messages
$template->set_var(array(
								'TEXT_NAME' => $TEXT['NAME'],
								'TEXT_AUTHOR' => $TEXT['AUTHOR'],
								'TEXT_VERSION' => $TEXT['VERSION'],
								'TEXT_DESIGNED_FOR' => $TEXT['DESIGNED_FOR'],
								'TEXT_DESCRIPTION' => $TEXT['DESCRIPTION']
								)
						);

// Parse template object
$template->parse('main', 'main_block', false);
$template->pparse('output', 'page');

// Print admin footer
$admin->print_footer();

?>