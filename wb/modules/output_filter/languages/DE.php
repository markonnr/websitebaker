<?php
/**
 *
 * @category        modules
 * @package         output_filter
 * @author          WebsiteBaker Project
 * @copyright       2004-2009, Ryan Djurovich
 * @copyright       2009-2011, Website Baker Org. e.V.
 * @link			http://www.websitebaker2.org/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.8.x
 * @requirements    PHP 5.2.2 and higher
 * @version         $Id$
 * @filesource		$HeadURL$
 * @lastmodified    $Date$
 *
 */

// Deutsche Modulbeschreibung
$module_description                  = 'Dieses Modul erlaubt die Filterung von Inhalten vor der Anzeige im Frontendbereich. Unterst&uuml;zt die Filterung von Emailadressen in mailto Links und Text.';

// Ueberschriften und Textausgaben
$MOD_MAIL_FILTER['HEADING']          = 'Optionen: Ausgabe Filterung';
$MOD_MAIL_FILTER['HOWTO']            = '&Uuml;ber nachfolgende Optionen kann die Ausgabefilterung konfiguriert werden.';
$MOD_MAIL_FILTER['HOWTOTIP']         = '<strong>Tipp: </strong>Mailto Links k&ouml;nnen mit einer Javascript Routine verschl&uuml;sselt werden. Um diese Option zu aktivieren muss der PHP Befehl <code style="background:#FFA;color:#900;">&lt;?php register_frontend_modfiles(\'js\');?&gt;</code> im &lt;head&gt; Bereich der index.php Ihres Templates eingebunden werden. Ohne diese &Auml;nderungen wird nur das @ Zeichen im mailto: Teil ersetzt.';
$MOD_MAIL_FILTER['WARNING']          = '';

// Text von Form Elementen
$MOD_MAIL_FILTER['BASIC_CONF']       = 'Grundeinstellungen';
$MOD_MAIL_FILTER['SYS_REL']          = 'Frontendausgabe mit relativen Urls';
$MOD_MAIL_FILTER['EMAIL_FILTER']     = 'Filtere E-Mail Adressen im Text';
$MOD_MAIL_FILTER['MAILTO_FILTER']    = 'Filtere E-Mail Adressen in mailto Links';
$MOD_MAIL_FILTER['ENABLED']          = 'Aktiviert';
$MOD_MAIL_FILTER['DISABLED']         = 'Ausgeschaltet';

$MOD_MAIL_FILTER['REPLACEMENT_CONF'] = 'E-Mail Ersetzungen';
$MOD_MAIL_FILTER['AT_REPLACEMENT']   = 'Ersetze "@" durch';
$MOD_MAIL_FILTER['DOT_REPLACEMENT']  = 'Ersetze "." durch';
