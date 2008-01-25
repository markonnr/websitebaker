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

// prevent this file from being accessed directly
if(!defined('WB_PATH')) { exit('Cannot access this file directly'); }

$table = TABLE_PREFIX .'mod_mail_filter';
$database->query("DROP TABLE IF EXISTS `$table`");

$database->query("CREATE TABLE `$table` (
	`email_filter` VARCHAR(1) NOT NULL DEFAULT '0',
	`mailto_filter` VARCHAR(1) NOT NULL DEFAULT '0',
	`at_replacement` VARCHAR(255) NOT NULL DEFAULT '(at)',
	`dot_replacement` VARCHAR(255) NOT NULL DEFAULT '(dot)'
	)"
);

// add new row using the table default values defined above
//$database->query("INSERT INTO ".TABLE_PREFIX."mod_mail_filter");
$database->query("INSERT INTO ".TABLE_PREFIX."mod_mail_filter (email_filter, mailto_filter, at_replacement, dot_replacement) VALUES ('0', '0', '(at)', '(dot)')");


?>