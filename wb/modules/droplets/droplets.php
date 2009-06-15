<?php
/*
*	@version	1.0
*	@author		Ruud Eisinga (Ruud) John (PCWacht)
*	@date		June 2009
*
*	droplets are small codeblocks that are called from anywhere in the template. 
* 	To call a droplet just use [[dropletname]]. optional parameters for a droplet can be used like [[dropletname?parameter=value&parameter2=value]]
*/

function evalDroplets ($wb_page_data) {
	global $database;
	$parameter = array();
	preg_match_all('~\[\[(.*?)\]\]~', $wb_page_data, $matches);
	foreach ($matches[1] as $match) {
		if (strpos($match,"?")) {
			list ($droplet,$params) = explode("?",$match);
			if(!empty($params)) {
				$params = str_replace("&amp;", "&", $params); // replace &amp; to single &
				$paramarray = explode("&",$params); //create array of parms as parm=value
				foreach ($paramarray as $paramelement) {
					$parameterTemp = explode("=", $paramelement,2);
					if (count($parameterTemp) == 2)
						$parameter[$parameterTemp[0]] = $parameterTemp[1];
					else
						$parameter['parm'] = $parameterTemp[0];
				}
			}
		} else {
			$droplet = $match;
			$parameter = "";
		}
		$query_content = $database->query("SELECT * FROM ".TABLE_PREFIX."mod_droplets WHERE name = '$droplet' AND active = 1 ");
		if ($query_content && $query_content->numRows() > 0){
			$fetch_content = $query_content->fetchRow();
			$codedata = ($fetch_content['code']);
			if(is_array($parameter)) extract($parameter, EXTR_SKIP);
			$newvalue = eval($codedata);
			if ($newvalue == "" && !$newvalue === true) 
				$newvalue = "<font color=\"red\">Error in: $match, no correct returnvalue.</font>";
			if ($newvalue === true) 
				$newvalue = "";
			$wb_page_data = str_replace("[[".$match."]]", $newvalue, $wb_page_data);
		}
	}
	return $wb_page_data;
}
?>