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
if(!defined('WB_PATH')) die(header('Location: ../index.php'));

// function to read the current filter settings
if (!function_exists('get_output_filter_settings')) {
	function get_output_filter_settings() {
		global $database, $admin;
		// connect to database and read out filter settings
		$result = $database->query("SELECT * FROM " .TABLE_PREFIX ."mod_output_filter");
		if($result->numRows() > 0) {
			// get all data
			$data = $result->fetchRow();
			$filter_settings['email_filter'] = $admin->strip_slashes($data['email_filter']);
			$filter_settings['mailto_filter'] = $admin->strip_slashes($data['mailto_filter']);
			$filter_settings['at_replacement'] = $admin->strip_slashes($data['at_replacement']);
			$filter_settings['dot_replacement'] = $admin->strip_slashes($data['dot_replacement']);
		} else {
			// something went wrong, use default values
			$filter_settings['email_filter'] = '0';
			$filter_settings['mailto_filter'] = '0';
			$filter_settings['at_replacement'] = '(at)';
			$filter_settings['dot_replacement'] = '(dot)';
		}
		
		// return array with filter settings
		return $filter_settings;
	}
}

// function to filter the output before displaying it on the frontend
if (!function_exists('filter_frontend_output')) {
	function filter_frontend_output($content) {
		// get output filter settings from database
		$filter_settings = get_output_filter_settings();
		
		// work out the defined output filter mode: possible output filter modes: [0], 1, 2, 3, 6, 7
		// 2^0 * (0.. disable, 1.. enable) filtering of mail addresses in text
		// 2^1 * (0.. disable, 1.. enable) filtering of mail addresses in mailto links
		// 2^2 * (0.. disable, 1.. enable) Javascript mailto encryption (only if mailto filtering enabled)

		// only filter output if we are supposed to
		if($filter_settings['email_filter'] != '1' && $filter_settings['mailto_filter'] != '1'){
			// nothing to do ...
			return $content;
		}

		// check if non mailto mail addresses needs to be filtered
		$output_filter_mode = ($filter_settings['email_filter'] == '1') ? 1 : 0;		// 0|1
		
		// check if mailto mail addresses needs to be filtered
		if($filter_settings['mailto_filter'] == '1') {
			$output_filter_mode = $output_filter_mode + 2;														// 0|2
						
			// check if Javascript mailto encryption is enabled (call register_frontend_functions in the template)
			$search = '<script type="text/javascript" src="' .WB_URL .'/modules/output_filter/js/mdcr.js"></script>';
			if(strpos($content, $search) !== false) { 
				$output_filter_mode = $output_filter_mode + 4;													// 0|4
			}
		}
		
		// define some constants so we do not call the database in the callback function again
		define('OUTPUT_FILTER_MODE', (int) $output_filter_mode);
		define('OUTPUT_FILTER_AT_REPLACEMENT', $filter_settings['at_replacement']);
		define('OUTPUT_FILTER_DOT_REPLACEMENT', $filter_settings['dot_replacement']);
		
		// first search part to find all mailto email addresses
		$pattern = '#(<a[^<]*href\s*?=\s*?"\s*?mailto\s*?:\s*?)([A-Z0-9._%+-]+@(?:[A-Z0-9-]+\.)+[A-Z]{2,4})([^"]*?)"([^>]*>)(.*?)</a>';
		// second part to find all non mailto email addresses
		$pattern .= '|\b([A-Z0-9._%+-]+@(?:[A-Z0-9-]+\.)+[A-Z]{2,4})\b#i';
		/*
		Sub 1:\b(<a.[^<]*href\s*?=\s*?"\s*?mailto\s*?:\s*?)			-->	"<a id="yyy" class="xxx" href = " mailto :" ignoring white spaces
		Sub 2:([A-Z0-9._%+-]+@(?:[A-Z0-9-]+\.)+[A-Z]{2,4})			-->	the email address in the mailto: part of the mail link
		Sub 3:([^"]*?)"																					--> possible ?Subject&cc... stuff attached to the mail address
		Sub 4:([^>]*>)																					--> all class or id statements after the mailto but before closing ..>
		Sub 5:(.*?)</a>\b																				--> the mailto text; all characters between >xxxxx</a>
		Sub 6:|\b([A-Z0-9._%+-]+@(?:[A-Z0-9-]+\.)+[A-Z]{2,4})\b	--> email addresses which may appear in the text (require word boundaries)
		*/
			
		// find all email addresses embedded in the content and filter them using a callback function
		$content = preg_replace_callback($pattern, 'filter_mail_addresses', $content);
		return $content;
	}
}		


// function to filter mail addresses embedded in text or mailto links before outputing them on the frontend
if (!function_exists('filter_mail_addresses')) {
	function filter_mail_addresses($match) { 
		
		// check if required output filter mode is defined
		if(!(defined('OUTPUT_FILTER_MODE') && defined('OUTPUT_FILTER_MODE') && defined('OUTPUT_FILTER_MODE'))) {
			return $match[0];
		}
		
		$search = array('@', '.');
		$replace = array(OUTPUT_FILTER_AT_REPLACEMENT ,OUTPUT_FILTER_DOT_REPLACEMENT);
		
		// check if the match contains the expected number of subpatterns (6|7)
		if(count($match) == 7) {
			/**
				OUTPUT FILTER FOR EMAIL ADDRESSES EMBEDDED IN TEXT
			**/
			
			// 1.. text mails only, 3.. text mails + mailto (no JS), 7 text mails + mailto (JS)
			if(!in_array(OUTPUT_FILTER_MODE, array(1,3,7))) return $match[0];
			
			// filtering of non mailto email addresses enabled
			return str_replace($search, $replace, $match[0]);
				
		} elseif(count($match) == 6) {
			/**
				OUTPUT FILTER FOR EMAIL ADDRESSES EMBEDDED IN MAILTO LINKS
			**/

			// 2.. mailto only (no JS), 3.. text mails + mailto (no JS), 6.. mailto only (JS), 7.. all filters active
			if(!in_array(OUTPUT_FILTER_MODE, array(2,3,6,7))) return $match[0];
			
			// check if last part of the a href link: >xxxx</a> contains a email address we need to filter
			$pattern = '#\b[A-Z0-9._%+-]+@(?:[A-Z0-9-]+\.)+[A-Z]{2,4}\b#i';
			if(preg_match($pattern, $match[5])) {
				$match[5] = str_replace($search, $replace, $match[5]);
			}

			// check if Javascript encryption routine is enabled
			if(in_array(OUTPUT_FILTER_MODE, array(6,7))) {
				/** USE JAVASCRIPT ENCRYPTION FOR MAILTO LINKS **/

				// create random encryption key
				mt_srand((double)microtime()*1000000);						// initialize the randomizer (PHP < 4.2.0)
				$char_shift = mt_rand(1, 5);											// shift:=1; a->b, shift:=5; a-->f
				$decryption_key = chr($char_shift+97);						// ASCII a:=97
		
				// prepare mailto string for encryption (mail protocol, decryption key, mail address)
				$email_address = "mailto:" .$decryption_key .$match[2] .$match[3];
		
				// encrypt email address by shifting characters
		  	$encrypted_email = "";
				for($i=0; $i<strlen($email_address); $i++) {
					$encrypted_email .= chr(ord($email_address[$i]) + $char_shift);
				}
				$encrypted_email[7] = $decryption_key;						// replace first character after mailto: with decryption key 
				$encrypted_email = rawurlencode($encrypted_email);

				// return encrypted javascript mailto link
				$mailto_link  = "<a href=\"javascript:mdcr('";		// a href part with javascript function to decrypt the email address
				$mailto_link .= "$encrypted_email')\">";					// add encrypted email address as paramter to JS function mdcr
				$mailto_link .= $match[5] ."</a>";								// add email link text and closing </a> tag
				return $mailto_link;	

			} else {
				/** DO NOT USE JAVASCRIPT ENCRYPTION FOR MAILTO LINKS **/

				// as minimum protection, replace replace @ in the mailto part by (at)
				// dots are not transformed as this would required as my.name@domain.com would look like: my(dot)name(at)domain(dot)com
				
				// rebuild the mailto link from the subpatterns (at the missing characters " and </a>")
				return $match[1] .str_replace('@', OUTPUT_FILTER_AT_REPLACEMENT, $match[2]) .$match[3] .'"' .$match[4] .$match[5] .'</a>';
				// if you want to protect both, @ and dots, comment out the line above and remove the comment from the line below
				// return $match[1] .str_replace($search, $replace, $match[2]) .$match[3] .'"' .$match[4] .$match[5] .'</a>';
			}
		
		}
		
		// number of subpatterns do not match the requirements ... do nothing
		return $match[0];
	}		
}

?>
