<?php
/**
 *
 * @category        modules
 * @package         news
 * @author          WebsiteBaker Project
 * @copyright       2009-2011, Website Baker Org. e.V.
 * @link			http://www.websitebaker2.org/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.8.x
 * @requirements    PHP 5.2.2 and higher
 * @version      	$Id$
 * @filesource		$HeadURL$
 * @lastmodified    $Date$
 *
 */
/* -------------------------------------------------------- */
// Must include code to stop this file being accessed directly
require_once( dirname(dirname(dirname(__FILE__))).'/framework/globalExceptionHandler.php');
if(!defined('WB_PATH')) { throw new IllegalFileException(); }
/* -------------------------------------------------------- */
	$sDefaultSql = dirname(__FILE__).'/install.sql';
	if (is_readable($sDefaultSql)) {
// create needet database tables and set default records
		if ($database->SqlImport($sDefaultSql, TABLE_PREFIX)) {
// Make news post access files dir
			require_once(WB_PATH.'/framework/functions.php');
			if(make_dir(WB_PATH.PAGES_DIRECTORY.'/posts')) {
				// Add a index.php file to prevent directory spoofing
				$sResponse  = $_SERVER['SERVER_PROTOCOL'].' 301 Moved Permanently';
				$sContent =
					'<?php'."\n".
					'// *** This file is generated by WebsiteBaker Ver.'.VERSION."\n".
					'// *** Creation date: '.date('c')."\n".
					'// *** Do not modify this file manually'."\n".
					'// *** WB will rebuild this file from time to time!!'."\n".
					'// *************************************************'."\n".
					"\t".'header(\''.$sResponse.'\');'."\n".
					"\t".'header(\'Location: ../index.php\');'."\n".
					'// *************************************************'."\n";
				$sFilename = WB_PATH.PAGES_DIRECTORY.'/posts/index.php';
				file_put_contents($sFilename, $sContent);
				change_mode($sFilename, 'file');
			}
		}
	}
/* **** END INSTALL ********************************************************* */