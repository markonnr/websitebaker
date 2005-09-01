<?php

// $Id: modify.php,v 1.3 2005/06/21 09:11:10 rdjurovich Exp $

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



// Get page content
$query = "SELECT content FROM ".TABLE_PREFIX."mod_wysiwyg WHERE section_id = '$section_id'";
$get_content = $database->query($query);
$content = $get_content->fetchRow();
$content = stripslashes(htmlspecialchars($content['content']));

// Load HTMLArea
if(!isset($loaded_htmlarea)) {
	
	// Workout how many WYSIWYG sections are used on this page
	$query_wysiwyg_sections = $database->query("SELECT section_id,module FROM ".TABLE_PREFIX."sections WHERE page_id = '$page_id' AND module = 'wysiwyg' ORDER BY position ASC");
	$num_wysiwyg_sections = $query_wysiwyg_sections->numRows();
	
	echo '<script type="text/javascript">'
		. '  _editor_url = "'.WB_URL.'/include/htmlarea/";'
		. '  _editor_lang = "en";'
		. '</script>'
		. '<script type="text/javascript" src="'.WB_URL.'/include/htmlarea/htmlarea.js"></script>'
		. '<script type="text/javascript">
HTMLArea.loadPlugin("ContextMenu");
HTMLArea.loadPlugin("TableOperations");
function initEditor() {';
		
	
	$query_wysiwyg = $database->query("SELECT section_id FROM ".TABLE_PREFIX."sections WHERE page_id = '$page_id' AND module = 'wysiwyg'");
	if($query_wysiwyg->numRows() > 0) {
		while($wysiwyg_section = $query_wysiwyg->fetchRow()) {
		echo 'var editor = new HTMLArea("content'.$wysiwyg_section["section_id"].'");'
			. 'editor.registerPlugin(ContextMenu);'
			. 'editor.registerPlugin(TableOperations);'
			. 'editor.config.pageStyle = "body { '.stripslashes(WYSIWYG_STYLE).' }";'
			. 'editor.generate();';
		}
	}
	
	echo '} </script>';
	
	$loaded_htmlarea = true;
	
}

?>
<form name="wysiwyg<?php echo $section_id; ?>" action="<?php echo WB_URL; ?>/modules/wysiwyg/save.php" method="post">

<input type="hidden" name="page_id" value="<?php echo $page_id; ?>" />
<input type="hidden" name="section_id" value="<?php echo $section_id; ?>" />

<textarea id="content<?php echo $section_id; ?>" name="content" style="width: 725px; height: 350px;"><?php echo $content; ?></textarea>

<table cellpadding="0" cellspacing="0" border="0" width="100%" style="padding-bottom: 10px;">
<tr>
	<td align="left">
		<input type="submit" value="<?php echo $TEXT['SAVE']; ?>" style="width: 100px; margin-top: 5px;" />
	</td>
	<td align="right">
		</form>
		<input type="button" value="<?php echo $TEXT['CANCEL']; ?>" onclick="javascript: window.location = 'index.php';" style="width: 100px; margin-top: 5px;" />
	</td>
</tr>
</table>

</form>

<br />