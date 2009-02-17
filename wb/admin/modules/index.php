<?php

// $Id$

/*

 Website Baker Project <http://www.websitebaker.org/>
 Copyright (C) 2004-2009, Ryan Djurovich

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

// Print admin header
require('../../config.php');
require_once(WB_PATH.'/framework/class.admin.php');
$admin = new admin('Addons', 'modules');

// Setup template object
$template = new Template(ADMIN_PATH.'/modules');
$template->set_file('page', 'template.html');
$template->set_block('page', 'main_block', 'main');

// Insert values into module list
$template->set_block('main_block', 'module_list_block', 'module_list');
$result = $database->query("SELECT * FROM ".TABLE_PREFIX."addons WHERE type = 'module' order by name");
if($result->numRows() > 0) {
	while ($addon = $result->fetchRow()) {
		$template->set_var('VALUE', $addon['directory']);
		$template->set_var('NAME', $addon['name']);
		$template->parse('module_list', 'module_list_block', true);
	}
}

// Insert modules which includes a install.php file to install list
$template->set_block('main_block', 'install_list_block', 'install_list');
$module_files = glob(WB_PATH . '/modules/*');
foreach ($module_files as $index => $path) {
	if (is_dir($path) && file_exists($path . '/install.php')) {
		$template->set_var('VALUE', basename($path));
		$template->set_var('NAME', basename($path));
		$template->parse('install_list', 'install_list_block', true);
	} else {
		unset($module_files[$index]);
	}
}

// Insert permissions values
if($admin->get_permission('modules_install') != true) {
	$template->set_var('DISPLAY_INSTALL', 'hide');
}
if($admin->get_permission('modules_uninstall') != true) {
	$template->set_var('DISPLAY_UNINSTALL', 'hide');
}
if($admin->get_permission('modules_view') != true) {
	$template->set_var('DISPLAY_LIST', 'hide');
}
// only show if at least one module folder contains a install.php file and permissions to admin section exists
if(count($module_files) == 0 || !isset($_GET['advanced']) || $admin->get_permission('admintools') != true) {
	$template->set_var('DISPLAY_MANUAL_INSTALL', 'hide');
}

// Insert language headings
$template->set_var(array(
								'HEADING_INSTALL_MODULE' => $HEADING['INSTALL_MODULE'],
								'HEADING_UNINSTALL_MODULE' => $HEADING['UNINSTALL_MODULE'],
								'HEADING_MODULE_DETAILS' => $HEADING['MODULE_DETAILS'],
								'HEADING_MANUAL_MODULE_INSTALLATION' => $HEADING['MANUAL_MODULE_INSTALLATION']
								)
						);
// Insert language text and messages
$template->set_var(array(
	'URL_TEMPLATES' => $admin->get_permission('templates') ? 
		'<a href="' . ADMIN_URL . '/templates/index.php">' . $MENU['TEMPLATES'] . '</a>' : '',
	'URL_LANGUAGES' => $admin->get_permission('languages') ? 
		'<a href="' . ADMIN_URL . '/languages/index.php">' . $MENU['LANGUAGES'] . '</a>' : '',
	'URL_ADVANCED' => $admin->get_permission('admintools') ? 
		'<a href="' . ADMIN_URL . '/modules/index.php?advanced">' . $TEXT['ADVANCED'] . '</a>' : '',
	'TEXT_INSTALL' => $TEXT['INSTALL'],
	'TEXT_UNINSTALL' => $TEXT['UNINSTALL'],
	'TEXT_VIEW_DETAILS' => $TEXT['VIEW_DETAILS'],
	'TEXT_PLEASE_SELECT' => $TEXT['PLEASE_SELECT'],
	'TEXT_MANUAL_INSTALLATION' => $MESSAGE['ADDON']['MANUAL_INSTALLATION'],
	'TEXT_MANUAL_INSTALLATION_WARNING' => $MESSAGE['ADDON']['MANUAL_INSTALLATION_WARNING'],
	'TEXT_RELOAD' => $TEXT['RELOAD']
	)
);

// Parse template object
$template->parse('main', 'main_block', false);
$template->pparse('output', 'page');

// Print admin footer
$admin->print_footer();

?>