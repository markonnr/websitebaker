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

// Define that this file is loaded
if(!defined('LANGUAGE_LOADED')) {
	define('LANGUAGE_LOADED', true);
}

// Set the language information
$language_code = 'TR';
$language_name = 'Turkish';
$language_version = '2.7';
$language_platform = '2.7.x';
$language_author = 'Atakan KO&Ccdil;';
$language_license = 'GNU General Public License';

// Menu titles
$MENU['START'] = 'Ba&thorn;lat';
$MENU['PAGES'] = 'Sayfalar';
$MENU['MEDIA'] = 'Resimler';
$MENU['ADDONS'] = 'Eklentiler';
$MENU['MODULES'] = 'Mod&uuml;ller';
$MENU['TEMPLATES'] = 'Kal&yacute;plar';
$MENU['LANGUAGES'] = 'Diller';
$MENU['PREFERENCES'] = 'Tercihler';
$MENU['SETTINGS'] = 'Ayarlar';
$MENU['ADMINTOOLS'] = 'Admin-Tools'; //needs to be translated
$MENU['ACCESS'] = 'Giri&thorn;';
$MENU['USERS'] = 'Kullan&yacute;c&yacute;lar';
$MENU['GROUPS'] = 'Gruplar';
$MENU['HELP'] = 'Yard&yacute;m';
$MENU['VIEW'] = 'G&ouml;r&uuml;nt&uuml;le';
$MENU['LOGOUT'] = '&Ccdil;&yacute;k&yacute;&thorn;';
$MENU['LOGIN'] = 'Giri&thorn;';
$MENU['FORGOT'] = 'Giri&thorn; Bilgilerini Gerial';

// Section overviews
$OVERVIEW['START'] = 'Y&ouml;netici G&ouml;r&uuml;n&uuml;m&uuml;';
$OVERVIEW['PAGES'] = 'Website Sayfalar&yacute;n&yacute; Y&ouml;netme...';
$OVERVIEW['MEDIA'] = 'Resim Deposundaki Dosyalar&yacute; Y&ouml;netme...';
$OVERVIEW['MODULES'] = 'Website Baker Mod&uuml;llerini Y&ouml;netme...';
$OVERVIEW['TEMPLATES'] = 'Websitenizdeki Kal&yacute;plar&yacute; De&eth;i&thorn;tirme Ve D&uuml;zenleme...';
$OVERVIEW['LANGUAGES'] = 'Website Baker Dilleri D&uuml;zenleme...';
$OVERVIEW['PREFERENCES'] = 'Email, &THORN;ifre gibi ayarlar&yacute; d&uuml;zenleme... ';
$OVERVIEW['SETTINGS'] = 'Website Baker i&ccdil;in ayarlar&yacute; d&uuml;zenleme...';
$OVERVIEW['USERS'] = 'Website Baker kullan&yacute;c&yacute;lar&yacute;n&yacute; d&uuml;zenleme...';
$OVERVIEW['GROUPS'] = 'Kullan&yacute;c&yacute; Gruplar&yacute;n&yacute;n &Yacute;zinlerini D&uuml;zenleme...';
$OVERVIEW['HELP'] = 'Sorular&yacute;n&yacute;z? Cevaplar&yacute;...';
$OVERVIEW['VIEW'] = 'Yeni bir pencerede sitenizin &ouml;ng&ouml;r&uuml;n&uuml;m&uuml;...';
$OVERVIEW['ADMINTOOLS'] = 'Access the Website Baker administration tools...'; //needs to be translated

// Headings
$HEADING['MODIFY_DELETE_PAGE'] = 'De&eth;i&thorn;tir/Sil Sayfa';
$HEADING['DELETED_PAGES'] = 'Sayfay&yacute; Sil';
$HEADING['ADD_PAGE'] = 'Sayfa Ekle';
$HEADING['ADD_HEADING'] = 'Ba&thorn;l&yacute;k Ekle';
$HEADING['MODIFY_PAGE'] = 'Sayfay&yacute; De&eth;i&thorn;tir';
$HEADING['MODIFY_PAGE_SETTINGS'] = 'Sayfa Ayarlar&yacute;n&yacute; De&eth;i&thorn;tir';
$HEADING['MODIFY_ADVANCED_PAGE_SETTINGS'] = 'Geli&thorn;tirilmi&thorn; Sayfa Ayarlar&yacute;n&yacute; De&eth;i&thorn;tir';
$HEADING['MANAGE_SECTIONS'] = 'K&yacute;s&yacute;mlar&yacute; Y&ouml;net';
$HEADING['MODIFY_INTRO_PAGE'] = 'Ba&thorn;lang&yacute;&ccdil; Sayfas&yacute;n&yacute; D&uuml;zenle';

$HEADING['BROWSE_MEDIA'] = 'Resimleri Y&ouml;netme';
$HEADING['CREATE_FOLDER'] = 'Dizin Yarat';
$HEADING['UPLOAD_FILES'] = 'Dosya Y&uuml;kle';

$HEADING['INSTALL_MODULE'] = 'Mod&uuml;l Y&uuml;kle';
$HEADING['UNINSTALL_MODULE'] = 'Mod&uuml;l Kald&yacute;r';
$HEADING['MODULE_DETAILS'] = 'Mod&uuml;l A&ccdil;&yacute;klamas&yacute;';

$HEADING['INSTALL_TEMPLATE'] = 'Kal&yacute;p Y&uuml;kle';
$HEADING['UNINSTALL_TEMPLATE'] = 'Kal&yacute;p Kald&yacute;r';
$HEADING['TEMPLATE_DETAILS'] = 'Kal&yacute;p A&ccdil;&yacute;klamas&yacute;';

$HEADING['INSTALL_LANGUAGE'] = 'Dil Y&uuml;kle';
$HEADING['UNINSTALL_LANGUAGE'] = 'Dil Kald&yacute;r';
$HEADING['LANGUAGE_DETAILS'] = 'Dil A&ccdil;&yacute;klamas&yacute;';

$HEADING['MY_SETTINGS'] = 'Ayarlar&yacute;m';
$HEADING['MY_EMAIL'] = 'Emailim';
$HEADING['MY_PASSWORD'] = '&THORN;ifrem';

$HEADING['GENERAL_SETTINGS'] = 'Genel Ayarlar';
$HEADING['DEFAULT_SETTINGS'] = 'Varsay&yacute;lan Ayarlar';
$HEADING['SEARCH_SETTINGS'] = 'Arama Ayarlar&yacute;';
$HEADING['FILESYSTEM_SETTINGS'] = 'Dosya Sistemi Ayarlar&yacute;';
$HEADING['SERVER_SETTINGS'] = 'Server Ayarlar&yacute;';
$HEADING['WBMAILER_SETTINGS'] = 'Mailer Settings'; //needs to be translated
$HEADING['ADMINISTRATION_TOOLS'] = 'Administration Ara&ccdil;lar&yacute;';

$HEADING['MODIFY_DELETE_USER'] = 'De&eth;i&thorn;tir/Sil kullan&yacute;c&yacute;';
$HEADING['ADD_USER'] = 'Kullan&yacute;c&yacute; Ekle';
$HEADING['MODIFY_USER'] = 'Kullan&yacute;c&yacute; D&uuml;zenle';

$HEADING['MODIFY_DELETE_GROUP'] = 'De&eth;i&thorn;tir/Sil Grup';
$HEADING['ADD_GROUP'] = 'Grup Ekle';
$HEADING['MODIFY_GROUP'] = 'Grup D&uuml;zenle';

// Other text
$TEXT['OPEN'] = 'Open'; //needs to be translated
$TEXT['ADD'] = 'Ekle';
$TEXT['MODIFY'] = 'D&uuml;zenle';
$TEXT['SETTINGS'] = 'Ayarlar';
$TEXT['DELETE'] = 'Sil';
$TEXT['SAVE'] = 'Kay&yacute;t et';
$TEXT['RESET'] = 'S&yacute;f&yacute;rla';
$TEXT['LOGIN'] = 'Giri&thorn;';
$TEXT['RELOAD'] = 'Tekrarla';
$TEXT['CANCEL'] = '&Yacute;ptal';
$TEXT['NAME'] = '&Yacute;sim';
$TEXT['PLEASE_SELECT'] = 'L&uuml;tfen Se&ccdil;in';
$TEXT['TITLE'] = 'Ba&thorn;l&yacute;k';
$TEXT['PARENT'] = 'Ana Grup';
$TEXT['TYPE'] = 'Tip';
$TEXT['VISIBILITY'] = 'G&ouml;r&uuml;n&uuml;rl&uuml;k';
$TEXT['PRIVATE'] = '&Ouml;zel';
$TEXT['PUBLIC'] = 'Herkez';
$TEXT['NONE'] = 'Yok';
$TEXT['NONE_FOUND'] = 'Hi&ccdil;biri bulmad&yacute;';
$TEXT['CURRENT'] = 'Kullan&yacute;lan';
$TEXT['CHANGE'] = 'De&eth;i&thorn;tir';
$TEXT['WINDOW'] = 'Pencere';
$TEXT['DESCRIPTION'] = 'A&ccdil;&yacute;klama';
$TEXT['KEYWORDS'] = 'Keywords'; //needs to be translated
$TEXT['ADMINISTRATORS'] = 'Y&ouml;nerici';
$TEXT['PRIVATE_VIEWERS'] = '&Ouml;zel izleyiciler';
$TEXT['EXPAND'] = 'Geni&thorn;let';
$TEXT['COLLAPSE'] = 'Daralt';
$TEXT['MOVE_UP'] = 'Yukar&yacute; Ta&thorn;&yacute;';
$TEXT['MOVE_DOWN'] = 'A&thorn;a&eth;&yacute; Ta&thorn;&yacute;';
$TEXT['RENAME'] = 'Yeni isim ver';
$TEXT['MODIFY_SETTINGS'] = 'Ayarlar&yacute; De&eth;i&thorn;tir';
$TEXT['MODIFY_CONTENT'] = 'D&uuml;zeni De&eth;i&thorn;tir';
$TEXT['VIEW'] = 'G&ouml;r&uuml;n&uuml;&thorn;';
$TEXT['UP'] = 'Yukar&yacute;';
$TEXT['FORGOTTEN_DETAILS'] = 'Sizin Ayr&yacute;nt&yacute;l&yacute; Detaylar&yacute;n&yacute;z?';
$TEXT['NEED_TO_LOGIN'] = 'Need to log-in?'; //needs to be translated
$TEXT['SEND_DETAILS'] = 'Detaylar&yacute; G&ouml;nder';
$TEXT['USERNAME'] = 'Kullan&yacute;c&yacute; Ad&yacute;';
$TEXT['PASSWORD'] = '&THORN;ifre';
$TEXT['HOME'] = 'Ana Sayfa';
$TEXT['TARGET_FOLDER'] = 'Hedef Dizin';
$TEXT['OVERWRITE_EXISTING'] = '&Uuml;st&uuml;ne Yaz';
$TEXT['FILE'] = 'Dosya';
$TEXT['FILES'] = 'Dosyalar';
$TEXT['FOLDER'] = 'Dizin';
$TEXT['FOLDERS'] = 'Dizinler';
$TEXT['CREATE_FOLDER'] = 'Dizin Yarat';
$TEXT['UPLOAD_FILES'] = 'Dosya Y&uuml;kle';
$TEXT['CURRENT_FOLDER'] = 'Kullan&yacute;lan Dizin';
$TEXT['TO'] = 'To'; //needs to be translated
$TEXT['FROM'] = 'From'; //needs to be translated
$TEXT['INSTALL'] = 'Y&uuml;kle';
$TEXT['UNINSTALL'] = 'Kald&yacute;r';
$TEXT['VIEW_DETAILS'] = 'Detaylar';
$TEXT['DISPLAY_NAME'] = 'G&ouml;r&uuml;n&uuml;m Ad&yacute;';
$TEXT['AUTHOR'] = 'Yazar';
$TEXT['VERSION'] = 'Versiyon';
$TEXT['DESIGNED_FOR'] = 'D&uuml;zenleyen';
$TEXT['DESCRIPTION'] = 'A&ccdil;&yacute;klama';
$TEXT['EMAIL'] = 'Email'; //needs to be translated
$TEXT['LANGUAGE'] = 'Dil';
$TEXT['TIMEZONE'] = 'Zaman Dilimi';
$TEXT['CURRENT_PASSWORD'] = 'Kullan&yacute;lan &THORN;ifre';
$TEXT['NEW_PASSWORD'] = 'Yeni &THORN;ifre';
$TEXT['RETYPE_NEW_PASSWORD'] = 'Tekrarla Yeni &THORN;ifre';
$TEXT['ACTIVE'] = 'Aktif';
$TEXT['DISABLED'] = '&Yacute;ptal';
$TEXT['ENABLED'] = '&Yacute;zin Ver';
$TEXT['RETYPE_PASSWORD'] = '&THORN;ifreyi Tekrarla';
$TEXT['GROUP'] = 'Grup';
$TEXT['SYSTEM_PERMISSIONS'] = 'Sistem &Yacute;zinleri';
$TEXT['MODULE_PERMISSIONS'] = 'Mod&uuml;l &Yacute;zinleri';
$TEXT['SHOW_ADVANCED'] = '&Yacute;leri Se&ccdil;enekleri G&ouml;ster';
$TEXT['HIDE_ADVANCED'] = '&Yacute;leri Se&ccdil;enekleri Gizle';
$TEXT['BASIC'] = 'Ba&thorn;lang&yacute;&ccdil;';
$TEXT['ADVANCED'] = '&Yacute;leri';
$TEXT['WEBSITE'] = 'Website'; //needs to be translated
$TEXT['DEFAULT'] = 'Varsay&yacute;lan';
$TEXT['KEYWORDS'] = 'Keywords'; //needs to be translated
$TEXT['TEXT'] = 'Yaz&yacute;';
$TEXT['HEADER'] = '&Uuml;st K&yacute;s&yacute;m';
$TEXT['FOOTER'] = 'Alt K&yacute;s&yacute;m';
$TEXT['TEMPLATE'] = 'Kal&yacute;p';
$TEXT['INSTALLATION'] = 'Y&uuml;kle';
$TEXT['DATABASE'] = 'Database'; //needs to be translated
$TEXT['HOST'] = 'Host'; //needs to be translated
$TEXT['INTRO'] = 'Demo';
$TEXT['PAGE'] = 'Sayfa';
$TEXT['SIGNUP'] = 'Kay&yacute;t Ol';
$TEXT['PHP_ERROR_LEVEL'] = 'PHP Hata Rapor D&uuml;zeyi';
$TEXT['ADMIN'] = 'Admin'; //needs to be translated
$TEXT['PATH'] = 'Yol';
$TEXT['URL'] = 'URL'; //needs to be translated
$TEXT['FRONTEND'] = 'Son Kullan&yacute;c&yacute;';
$TEXT['EXTENSION'] = 'Uzatma';
$TEXT['TABLE_PREFIX'] = 'Table D&uuml;zen Ad&yacute;';
$TEXT['CHANGES'] = 'De&eth;i&thorn;iklikler';
$TEXT['ADMINISTRATION'] = 'Y&ouml;netici';
$TEXT['FORGOT_DETAILS'] = 'Detay Hat&yacute;rlat?';
$TEXT['LOGGED_IN'] = 'Giri&thorn; Kaydet';
$TEXT['WELCOME_BACK'] = 'Ho&thorn;geldiniz';
$TEXT['FULL_NAME'] = 'Tam Ad&yacute;n&yacute;z';
$TEXT['ACCOUNT_SIGNUP'] = 'Kull&yacute;c&yacute; Kay&yacute;t Ol';
$TEXT['LINK'] = 'Link'; //needs to be translated
$TEXT['ANCHOR'] = 'Anchor'; //needs to be translated
$TEXT['TARGET'] = 'Hedef';
$TEXT['NEW_WINDOW'] = 'Yeni Pencere';
$TEXT['SAME_WINDOW'] = 'Ayn&yacute; Pencere';
$TEXT['TOP_FRAME'] = 'Top Frame'; //needs to be translated
$TEXT['PAGE_LEVEL_LIMIT'] = 'Sayfa Alt Limiti';
$TEXT['SUCCESS'] = '&Yacute;&thorn;lem Ba&thorn;ar&yacute;ld&yacute;';
$TEXT['ERROR'] = 'Hata';
$TEXT['ARE_YOU_SURE'] = 'eminmisin?';
$TEXT['YES'] = 'Evet';
$TEXT['NO'] = 'Hay&yacute;r';
$TEXT['SYSTEM_DEFAULT'] = 'Sistem Varsay&yacute;lan&yacute;';
$TEXT['PAGE_TITLE'] = 'Sayfa Ba&thorn;l&yacute;&eth;&yacute;';
$TEXT['MENU_TITLE'] = 'Menu Ba&thorn;l&yacute;&eth;&yacute;';
$TEXT['ACTIONS'] = 'Hareketler';
$TEXT['UNKNOWN'] = 'Bilinmeyen';
$TEXT['BLOCK'] = 'Blok';
$TEXT['SEARCH'] = 'Ara';
$TEXT['SEARCHING'] = 'Arama';
$TEXT['POST'] = 'Mesaj';
$TEXT['COMMENT'] = 'Yorum';
$TEXT['COMMENTS'] = 'Yorumlar';
$TEXT['COMMENTING'] = 'Yorum yapan';
$TEXT['SHORT'] = 'K&yacute;sa';
$TEXT['LONG'] = 'Uzun';
$TEXT['LOOP'] = 'S&uuml;rekli';
$TEXT['FIELD'] = 'Alan';
$TEXT['REQUIRED'] = 'Gerekli';
$TEXT['LENGTH'] = 'Uzunluk';
$TEXT['MESSAGE'] = 'Mesaj';
$TEXT['SUBJECT'] = 'Konu';
$TEXT['MATCH'] = 'Bul';
$TEXT['ALL_WORDS'] = 'B&uuml;t&uuml;n Kelimeler';
$TEXT['ANY_WORDS'] = 'Herhangi bir s&ouml;zc&uuml;k';
$TEXT['EXACT_MATCH'] = 'Tam Bul';
$TEXT['SHOW'] = 'G&ouml;ster';
$TEXT['HIDE'] = 'Gizle';
$TEXT['START_PUBLISHING'] = 'Yay&yacute;na Ba&thorn;la';
$TEXT['FINISH_PUBLISHING'] = 'Yay&yacute;n&yacute; Bitir';
$TEXT['DATE'] = 'Tarih';
$TEXT['START'] = 'Ba&thorn;la';
$TEXT['END'] = 'Son';
$TEXT['IMAGE'] = 'Resim';
$TEXT['ICON'] = 'Ikon';
$TEXT['SECTION'] = 'K&yacute;s&yacute;m';
$TEXT['DATE_FORMAT'] = 'Tarih Format&yacute;';
$TEXT['TIME_FORMAT'] = 'Saat Format&yacute;';
$TEXT['RESULTS'] = 'Sonu&ccdil;lar';
$TEXT['RESIZE'] = 'Tekrar Boyutland&yacute;r';
$TEXT['MANAGE'] = 'Y&ouml;net';
$TEXT['CODE'] = 'Kod';
$TEXT['WIDTH'] = 'Geni&thorn;lik';
$TEXT['HEIGHT'] = 'Y&uuml;kseklik';
$TEXT['MORE'] = 'Daha &Ccdil;ok';
$TEXT['READ_MORE'] = 'Oku';
$TEXT['CHANGE_SETTINGS'] = 'Ayarlar&yacute; De&eth;i&thorn;tir';
$TEXT['CURRENT_PAGE'] = 'Kullan&yacute;lan Sayfa';
$TEXT['CLOSE'] = 'Kapat';
$TEXT['INTRO_PAGE'] = 'Demo Sayfas&yacute;';
$TEXT['INSTALLATION_URL'] = 'Y&uuml;keleme URL';
$TEXT['INSTALLATION_PATH'] = 'Y&uuml;kleme Yolu';
$TEXT['PAGE_EXTENSION'] = 'Sayfa Uzant&yacute;s&yacute;';
$TEXT['NO_RESULTS'] = 'Bulunamad&yacute;';
$TEXT['WEBSITE_TITLE'] = 'Website Ba&thorn;l&yacute;&eth;&yacute;';
$TEXT['WEBSITE_DESCRIPTION'] = 'Website A&ccdil;&yacute;klamas&yacute;';
$TEXT['WEBSITE_KEYWORDS'] = 'Website Keywords'; //needs to be translated
$TEXT['WEBSITE_HEADER'] = 'Website &Uuml;st K&yacute;s&yacute;m';
$TEXT['WEBSITE_FOOTER'] = 'Website Alt K&yacute;s&yacute;m';
$TEXT['RESULTS_HEADER'] = 'Bulundu&eth;unda &Uuml;st K&yacute;s&yacute;m';
$TEXT['RESULTS_LOOP'] = 'Bulundu&eth;unda D&ouml;ng&uuml;';
$TEXT['RESULTS_FOOTER'] = 'Bulundu&eth;unda Alt K&yacute;s&yacute;m';
$TEXT['LEVEL'] = 'Limit';
$TEXT['NOT_FOUND'] = 'Bulunamad&yacute;';
$TEXT['PAGE_SPACER'] = 'Sayfa Bo&thorn;lu&eth;u';
$TEXT['MATCHING'] = 'Bulunanlar';
$TEXT['TEMPLATE_PERMISSIONS'] = 'Kal&yacute;p &Yacute;zinleri';
$TEXT['PAGES_DIRECTORY'] = 'Sayfa Dizini';
$TEXT['MEDIA_DIRECTORY'] = 'Resim Dizini';
$TEXT['FILE_MODE'] = 'Dosya &Yacute;zini';
$TEXT['USER'] = 'Kullan&yacute;c&yacute;';
$TEXT['OTHERS'] = 'Di&eth;erleri';
$TEXT['READ'] = 'Oku';
$TEXT['WRITE'] = 'Yaz';
$TEXT['EXECUTE'] = '&Ccdil;al&yacute;&thorn;t&yacute;r';
$TEXT['SMART_LOGIN'] = 'G&uuml;venli Giri&thorn;';
$TEXT['REMEMBER_ME'] = 'Haz&yacute;rla';
$TEXT['FILESYSTEM_PERMISSIONS'] = 'Dosya Sistemi &Yacute;zinleri';
$TEXT['DIRECTORIES'] = 'Dizinler';
$TEXT['DIRECTORY_MODE'] = 'Dizin Modu';
$TEXT['LIST_OPTIONS'] = 'Liste se&ccdil;enekleri';
$TEXT['OPTION'] = 'Se&ccdil;enekler';
$TEXT['ALLOW_MULTIPLE_SELECTIONS'] = '&Ccdil;oklu se&ccdil;imlere izin ver';
$TEXT['TEXTFIELD'] = 'Textfield'; //needs to be translated
$TEXT['TEXTAREA'] = 'Textarea'; //needs to be translated
$TEXT['SELECT_BOX'] = 'Se&ccdil;meli Men&uuml;';
$TEXT['CHECKBOX_GROUP'] = 'T&yacute;klamal&yacute; Se&ccdil;im';
$TEXT['RADIO_BUTTON_GROUP'] = 'Radyo D&uuml;&eth;meleri';
$TEXT['SIZE'] = 'Boyut';
$TEXT['DEFAULT_TEXT'] = 'Varsay&yacute;lan Yaz&yacute;';
$TEXT['SEPERATOR'] = 'B&ouml;l&uuml;c&uuml;';
$TEXT['BACK'] = 'Geri';
$TEXT['UNDER_CONSTRUCTION'] = 'Yap&yacute;m A&thorn;amas&yacute;nda';
$TEXT['MULTISELECT'] = '&Ccdil;oklu Se&ccdil;im';
$TEXT['SHORT_TEXT'] = 'K&yacute;sa Yaz&yacute;';
$TEXT['LONG_TEXT'] = 'Uzun Yaz&yacute;';
$TEXT['HOMEPAGE_REDIRECTION'] = 'Ana sayfa y&ouml;nlendir';
$TEXT['HEADING'] = 'Ba&thorn;l&yacute;k';
$TEXT['MULTIPLE_MENUS'] = '&Ccdil;oklu men&uuml;ler';
$TEXT['REGISTERED'] = 'Kay&yacute;tl&yacute; Kullan&yacute;c&yacute;';
$TEXT['START'] = 'Ba&thorn;lat';
$TEXT['SECTION_BLOCKS'] = 'K&yacute;s&yacute;m bloklar&yacute;';
$TEXT['REGISTERED_VIEWERS'] = '&Yacute;zleyiciler kaydetti';
$TEXT['ALLOWED_VIEWERS'] = 'Allowed Viewers'; //needs to be translated
$TEXT['SUBMISSION_ID'] = 'Sunu&thorn;lar ID';
$TEXT['SUBMISSIONS'] = 'Sunu&thorn;lar';
$TEXT['SUBMITTED'] = 'G&ouml;nderildi';
$TEXT['MAX_SUBMISSIONS_PER_HOUR'] = 'Maksimum Saat Ba&thorn;&yacute; Sunum';
$TEXT['SUBMISSIONS_STORED_IN_DATABASE'] = 'Sunu&thorn;lar, veritaban&yacute;nda depolad&yacute;';
$TEXT['EMAIL_ADDRESS'] = 'Email Adresi';
$TEXT['CUSTOM'] = 'Custom'; //needs to be translated
$TEXT['ANONYMOUS'] = 'Bilinmeyen';
$TEXT['SERVER_OPERATING_SYSTEM'] = 'Server &Yacute;&thorn;letim Sistemi';
$TEXT['WORLD_WRITEABLE_FILE_PERMISSIONS'] = 'Yaz&yacute;labilir dosya izinleri';
$TEXT['LINUX_UNIX_BASED'] = 'Linux/Unix tabanl&yacute;';
$TEXT['WINDOWS'] = 'Windows'; //needs to be translated
$TEXT['HOME_FOLDER'] = 'Ana Dizin';
$TEXT['HOME_FOLDERS'] = 'Ana Dizinler';
$TEXT['PAGE_TRASH'] = 'Sayfay&yacute; Sil';
$TEXT['INLINE'] = 'In-line'; //needs to be translated
$TEXT['SEPARATE'] = 'Ay&yacute;r&yacute;c&yacute;';
$TEXT['DELETED'] = 'Silindi';
$TEXT['VIEW_DELETED_PAGES'] = 'Silinen Sayfay&yacute; G&ouml;ster';
$TEXT['EMPTY_TRASH'] = '&Ccdil;&ouml;p kutusu bo&thorn;';
$TEXT['TRASH_EMPTIED'] = '&Ccdil;&ouml;p kutusu bo&thorn;alt&yacute;ld&yacute;';
$TEXT['ADD_SECTION'] = 'K&yacute;s&yacute;m Ekle';
$TEXT['POST_HEADER'] = '&Uuml;st Mesaj&yacute;';
$TEXT['POST_FOOTER'] = 'Alt Mesaj';
$TEXT['POSTS_PER_PAGE'] = 'Sayfa ba&thorn;&yacute;na mesajlar';
$TEXT['RESIZE_IMAGE_TO'] = 'Boyutland&yacute;r resimi';
$TEXT['UNLIMITED'] = 'S&yacute;n&yacute;rs&yacute;z';
$TEXT['OF'] = 'Of'; //needs to be translated
$TEXT['OUT_OF'] = 'D&yacute;&thorn;ar&yacute;';
$TEXT['NEXT'] = 'Sonraki';
$TEXT['PREVIOUS'] = '&Ouml;nceki';
$TEXT['NEXT_PAGE'] = 'Sonraki Sayfa';
$TEXT['PREVIOUS_PAGE'] = '&Ouml;nceki Sayfa';
$TEXT['ON'] = 'On'; //needs to be translated
$TEXT['LAST_UPDATED_BY'] = 'Son G&uuml;ncelleyen';
$TEXT['RESULTS_FOR'] = 'Sonu&ccdil;lar';
$TEXT['TIME'] = 'Saat';
$TEXT['WYSIWYG_STYLE'] = 'WYSIWYG Style'; //needs to be translated
$TEXT['WYSIWYG_EDITOR'] = 'WYSIWYG Editor'; //needs to be translated
$TEXT['SERVER_EMAIL'] = 'Server Email'; //needs to be translated
$TEXT['MENU'] = 'Menu'; //needs to be translated
$TEXT['MANAGE_GROUPS'] = 'Grup Y&ouml;netimi';
$TEXT['MANAGE_USERS'] = 'Kullan&yacute;c&yacute; Y&ouml;netimi';
$TEXT['PAGE_LANGUAGES'] = 'Sayfa Dili';
$TEXT['HIDDEN'] = 'Gizli';
$TEXT['MAIN'] = 'Ana';
$TEXT['RENAME_FILES_ON_UPLOAD'] = 'Y&uuml;klenen dosyan&yacute;n ad&yacute;n&yacute; de&eth;i&thorn;tir';
$TEXT['APP_NAME'] = 'Application Ad&yacute;';
$TEXT['SESSION_IDENTIFIER'] = 'Session Identifier'; //needs to be translated
$TEXT['BACKUP'] = 'Yedek Al';
$TEXT['RESTORE'] = 'Yede&eth;i y&uuml;kle';
$TEXT['BACKUP_DATABASE'] = 'Database Yedekle';
$TEXT['RESTORE_DATABASE'] = 'Database Geri Y&uuml;kle';
$TEXT['BACKUP_ALL_TABLES'] = 'Backup all tables in database'; //needs to be translated
$TEXT['BACKUP_WB_SPECIFIC'] = 'Backup only WB-specific tables'; //needs to be translated
$TEXT['BACKUP_MEDIA'] = 'Media Yedekle';
$TEXT['RESTORE_MEDIA'] = 'Media Geri Y&uuml;kle';
$TEXT['ADMINISTRATION_TOOL'] = 'Administration tool'; //needs to be translated
$TEXT['CAPTCHA_VERIFICATION'] = 'Captcha Verification'; //needs to be translated
$TEXT['VERIFICATION'] = 'Verification'; //needs to be translated
$TEXT['DEFAULT_CHARSET'] = 'Default Charset'; //needs to be translated
$TEXT['CHARSET'] = 'Charset'; //needs to be translated
$TEXT['MODULE_ORDER'] = 'Module-order for searching'; //needs to be translated
$TEXT['MAX_EXCERPT'] = 'Max lines of excerpt'; //needs to be translated
$TEXT['TIME_LIMIT'] = 'Max time to gather excerpts per module'; //needs to be translated
$TEXT['PUBL_START_DATE'] = 'Start date'; //needs to be translated
$TEXT['PUBL_END_DATE'] = 'End date'; //needs to be translated
$TEXT['CALENDAR'] = 'Calender'; //needs to be translated
$TEXT['DELETE_DATE'] = 'Delete date'; //needs to be translated
$TEXT['WBMAILER_DEFAULT_SETTINGS_NOTICE'] = 'Please specify a default "FROM" address and "SENDER" name below. It is recommended to use a FROM address like: <strong>admin@yourdomain.com</strong>. Some mail provider (e.g. <em>mail.com</em>) may reject mails with a FROM: address like <em>name@mail.com</em> sent via a foreign relay to avoid spam.<br /><br />The default values are only used if no other values are specified by Website Baker. If your server supports <acronym title="Simple mail transfer protocol">SMTP</acronym>, you may want use this option for outgoing mails.'; //needs to be translated
$TEXT['WBMAILER_DEFAULT_SENDER_MAIL'] = 'Default From Mail'; //needs to be translated
$TEXT['WBMAILER_DEFAULT_SENDER_NAME'] = 'Default Sender Name'; //needs to be translated
$TEXT['WBMAILER_NOTICE'] = '<strong>SMTP Mailer Settings:</strong><br />The settings below are only required if you want to send mails via <acronym title="Simple mail transfer protocol">SMTP</acronym>. If you do not know your SMTP host or you are not sure about the required settings, simply stay with the default mail routine: PHP MAIL.'; //needs to be translated
$TEXT['WBMAILER_FUNCTION'] = 'Mail Routine'; //needs to be translated
$TEXT['WBMAILER_SMTP_HOST'] = 'SMTP Host'; //needs to be translated
$TEXT['WBMAILER_PHP'] = 'PHP MAIL'; //needs to be translated
$TEXT['WBMAILER_SMTP'] = 'SMTP'; //needs to be translated
$TEXT['WBMAILER_SMTP_AUTH'] = 'SMTP Authentification'; //needs to be translated
$TEXT['WBMAILER_SMTP_AUTH_NOTICE'] = 'only activate if your SMTP host requires authentification'; //needs to be translated
$TEXT['WBMAILER_SMTP_USERNAME'] = 'SMTP Username'; //needs to be translated
$TEXT['WBMAILER_SMTP_PASSWORD'] = 'SMTP Password'; //needs to be translated
$TEXT['PLEASE_LOGIN'] = 'Please login'; //needs to be translated
$TEXT['CAP_EDIT_CSS'] = 'Edit CSS'; //needs to be translated
$TEXT['HEADING_CSS_FILE'] = 'Actual module file: '; //needs to be translated
$TEXT['TXT_EDIT_CSS_FILE'] = 'Edit the CSS definitions in the textarea below.'; //needs to be translated 

// Success/error messages
$MESSAGE['FRONTEND']['SORRY_NO_VIEWING_PERMISSIONS'] = '&Uuml;zg&uuml;n&uuml;m, bu sayfay&yacute; g&ouml;r&uuml;nt&uuml;lemeye yetkiniz yok';
$MESSAGE['FRONTEND']['SORRY_NO_ACTIVE_SECTIONS'] = 'Sorry, no active content to display'; //needs to be translated

$MESSAGE['ADMIN']['INSUFFICIENT_PRIVELLIGES'] = 'Insufficient privelliges to be here'; //needs to be translated

$MESSAGE['LOGIN']['BOTH_BLANK'] = 'Kullan&yacute;c&yacute; ad&yacute; ve &thorn;ifre giriniz';
$MESSAGE['LOGIN']['USERNAME_BLANK'] = 'L&uuml;tfen kullanc&yacute; ad&yacute; girin';
$MESSAGE['LOGIN']['PASSWORD_BLANK'] = 'L&uuml;tfen &thorn;ifre girin';
$MESSAGE['LOGIN']['USERNAME_TOO_SHORT'] = 'Kullan&yacute;c&yacute; ad&yacute; &ccdil;ok k&yacute;sa';
$MESSAGE['LOGIN']['PASSWORD_TOO_SHORT'] = '&THORN;ifreniz &ccdil;ok k&yacute;sa';
$MESSAGE['LOGIN']['USERNAME_TOO_LONG'] = 'Kullan&yacute;c&yacute; ad&yacute;n&yacute;z &ccdil;ok uzun';
$MESSAGE['LOGIN']['PASSWORD_TOO_LONG'] = '&THORN;ifreniz &ccdil;ok uzun';
$MESSAGE['LOGIN']['AUTHENTICATION_FAILED'] = 'Kullan&yacute;c&yacute; ad&yacute; ve &thorn;ifreniz yanl&yacute;&thorn;';

$MESSAGE['SIGNUP']['NO_EMAIL'] = 'Bir email adresi girmelisiniz.';

$MESSAGE['FORGOT_PASS']['NO_DATA'] = 'L&uuml;tfen email adresini girin';
$MESSAGE['FORGOT_PASS']['EMAIL_NOT_FOUND'] = 'Bu email adresi veritaban&yacute;nda bulunamad&yacute;';
$MESSAGE['FORGOT_PASS']['CANNOT_EMAIL'] = 'Uygunsuz email &thorn;ifresi, L&uuml;tfen Y&ouml;netici ile Kontak kurun';
$MESSAGE['FORGOT_PASS']['PASSWORD_RESET'] = 'Sizin kullan&yacute;c&yacute; ad&yacute;n&yacute;z ve &thorn;ifreniz email adresinize g&ouml;nderildi';
$MESSAGE['FORGOT_PASS']['ALREADY_RESET'] = 'Paralonuzu 1 saat aral&yacute;klarla de&eth;i&thorn;tirebilirsiniz.';

$MESSAGE['START']['WELCOME_MESSAGE'] = 'Ho&thorn;geldiniz Website Baker Y&ouml;netimine';
$MESSAGE['START']['INSTALL_DIR_EXISTS'] = 'Uyar&yacute;! Y&uuml;kleme dizini halen duruyor!';
$MESSAGE['START']['CURRENT_USER'] = 'Sizin kulland&yacute;&eth;&yacute;n&yacute;z giri&thorn; ismi:';

$MESSAGE['SETTINGS']['UNABLE_OPEN_CONFIG'] = 'Unable to open the configuration file'; //needs to be translated
$MESSAGE['SETTINGS']['UNABLE_WRITE_CONFIG'] = 'Cannot write to configuration file'; //needs to be translated
$MESSAGE['SETTINGS']['SAVED'] = 'Ayarlar ba&thorn;ar&yacute;l&yacute; bir &thorn;ekilde kay&yacute;t edildi';
$MESSAGE['SETTINGS']['MODE_SWITCH_WARNING'] = 'Not Edin: Bu buton b&uuml;t&uuml;n de&eth;i&thorn;iklikleri ilk haline geri getirir';
$MESSAGE['SETTINGS']['WORLD_WRITEABLE_WARNING'] = 'Please note: this is only recommended for testing environments'; //needs to be translated

$MESSAGE['USERS']['ADDED'] = 'Kullan&yacute;c&yacute;, ba&thorn;ar&yacute;l&yacute; bir &thorn;ekilde ekledi';
$MESSAGE['USERS']['SAVED'] = 'Kullan&yacute;c&yacute;, ba&thorn;ar&yacute;l&yacute; bir &thorn;ekilde kay&yacute;t edildi';
$MESSAGE['USERS']['DELETED'] = 'Kullan&yacute;c&yacute;, ba&thorn;ar&yacute;l&yacute; bir &thorn;ekilde silindi';
$MESSAGE['USERS']['NO_GROUP'] = 'Hi&ccdil;bir grup se&ccdil;ilmedi';
$MESSAGE['USERS']['USERNAME_TOO_SHORT'] = 'Girdi&eth;iniz kullan&yacute;c&yacute; ad&yacute; k&yacute;sa';
$MESSAGE['USERS']['PASSWORD_TOO_SHORT'] = 'Girdi&eth;iniz &thorn;ifre k&yacute;sa';
$MESSAGE['USERS']['PASSWORD_MISMATCH'] = 'Girdi&eth;iniz &thorn;ifre bulunamad&yacute;';
$MESSAGE['USERS']['INVALID_EMAIL'] = 'Girdi&eth;iniz email adresi ge&ccdil;ersiz';
$MESSAGE['USERS']['EMAIL_TAKEN'] = 'Girdi&eth;iniz email ba&thorn;kas&yacute; taraf&yacute;ndan kullan&yacute;l&yacute;yor';
$MESSAGE['USERS']['USERNAME_TAKEN'] = 'Girdi&eth;iniz kullan&yacute;c&yacute; ad&yacute; ba&thorn;kas&yacute; taraf&yacute;ndan kullan&yacute;l&yacute;yor';
$MESSAGE['USERS']['CHANGING_PASSWORD'] = 'Not Edin: Sen sadece yukar&yacute;daki alanlara de&eth;erleri gir. E&eth;er bu kullan&yacute;c&yacute;lar&yacute; dile de&eth;i&thorn;tirseydin.';
$MESSAGE['USERS']['CONFIRM_DELETE'] = 'Se&ccdil;ti&eth;iniz kullan&yacute;c&yacute;lar&yacute; silmek istedi&eth;inizden eminmisiniz?';

$MESSAGE['GROUPS']['ADDED'] = 'Grup, ba&thorn;ar&yacute;l&yacute; bir &thorn;ekilde ekledi';
$MESSAGE['GROUPS']['SAVED'] = 'Grup, ba&thorn;ar&yacute;l&yacute; bir &thorn;ekilde kay&yacute;t edildi';
$MESSAGE['GROUPS']['DELETED'] = 'Grup, ba&thorn;ar&yacute;l&yacute; bir &thorn;ekilde silindi';
$MESSAGE['GROUPS']['GROUP_NAME_BLANK'] = 'Grup ad&yacute; bo&thorn;';
$MESSAGE['GROUPS']['CONFIRM_DELETE'] = 'Se&ccdil;ti&eth;iniz grubu silmek istedi&eth;inizden eminmisiniz? (ve bu gruba ekli kullan&yacute;c&yacute;lar&yacute;)?';
$MESSAGE['GROUPS']['NO_GROUPS_FOUND'] = 'Hi&ccdil;bir grup bulmad&yacute;';
$MESSAGE['GROUPS']['GROUP_NAME_EXISTS'] = 'Bu grup ad&yacute; zaten var';

$MESSAGE['PREFERENCES']['DETAILS_SAVED'] = 'Ayr&yacute;nt&yacute;lar, ba&thorn;ar&yacute;l&yacute; bir &thorn;ekilde kay&yacute;t edildi';
$MESSAGE['PREFERENCES']['EMAIL_UPDATED'] = 'Email, ba&thorn;ar&yacute;l&yacute; bir &thorn;ekilde g&uuml;ncelle&thorn;tirdi';
$MESSAGE['PREFERENCES']['CURRENT_PASSWORD_INCORRECT'] = 'Girdi&eth;iniz &thorn;ifre yanl&yacute;&thorn;';
$MESSAGE['PREFERENCES']['PASSWORD_CHANGED'] = 'Parola, ba&thorn;ar&yacute;l&yacute; bir &thorn;ekilde de&eth;i&thorn;tirdi';

$MESSAGE['TEMPLATES']['CHANGE_TEMPLATE_NOTICE'] = 'Please note: to change the template you must go to the Settings section'; //needs to be translated

$MESSAGE['MEDIA']['DIR_DOT_DOT_SLASH'] = 'Giremezsiniz ../ i&ccdil;indeki dizin ad&yacute;';
$MESSAGE['MEDIA']['DIR_DOES_NOT_EXIST'] = 'Directory does not exist'; //needs to be translated
$MESSAGE['MEDIA']['TARGET_DOT_DOT_SLASH'] = 'Cannot have ../ in the folder target'; //needs to be translated
$MESSAGE['MEDIA']['NAME_DOT_DOT_SLASH'] = 'Giremezsiniz ../ ismine';
$MESSAGE['MEDIA']['NAME_INDEX_PHP'] = 'index.php isimini kullanamazs&yacute;n&yacute;z';
$MESSAGE['MEDIA']['NONE_FOUND'] = 'No media found in the current folder'; //needs to be translated
$MESSAGE['MEDIA']['FILE_NOT_FOUND'] = 'Dosya Bulunamad&yacute;';
$MESSAGE['MEDIA']['DELETED_FILE'] = 'Dosya, ba&thorn;ar&yacute;l&yacute; bir &thorn;ekilde silindi';
$MESSAGE['MEDIA']['DELETED_DIR'] = 'Dizin, ba&thorn;ar&yacute;l&yacute; bir &thorn;ekilde silindi';
$MESSAGE['MEDIA']['CONFIRM_DELETE'] = 'Dosya ve dizinleri silmek istedi&eth;inizden eminmisiniz?';
$MESSAGE['MEDIA']['CANNOT_DELETE_FILE'] = 'Se&ccdil;ti&eth;iniz dosya silinemiyor';
$MESSAGE['MEDIA']['CANNOT_DELETE_DIR'] = 'Se&ccdil;ti&eth;iniz dizin silinemiyor';
$MESSAGE['MEDIA']['BLANK_NAME'] = 'Mutlaka bir isim girmelisiniz';
$MESSAGE['MEDIA']['BLANK_EXTENSION'] = 'Mutlaka bir uzant&yacute; girmelisinz';
$MESSAGE['MEDIA']['RENAMED'] = 'Yeni isim ver ba&thorn;ar&yacute;l&yacute;.';
$MESSAGE['MEDIA']['CANNOT_RENAME'] = 'Yeni isim ver ba&thorn;ar&yacute;s&yacute;z';
$MESSAGE['MEDIA']['FILE_EXISTS'] = 'Girmi&thorn; oldu&eth;unuz dosya zaten var';
$MESSAGE['MEDIA']['DIR_EXISTS'] = 'Girmi&thorn; oldu&eth;unuz dizin zaten var';
$MESSAGE['MEDIA']['DIR_MADE'] = 'Dizin, ba&thorn;ar&yacute;l&yacute; bir &thorn;ekilde yaratt&yacute;';
$MESSAGE['MEDIA']['DIR_NOT_MADE'] = 'Dizin yaratma ba&thorn;ar&yacute;s&yacute;z';
$MESSAGE['MEDIA']['SINGLE_UPLOADED'] = ' Dosya ba&thorn;ar&yacute;l&yacute; bir &thorn;ekilde y&uuml;klendi';
$MESSAGE['MEDIA']['UPLOADED'] = ' Dosyalar ba&thorn;ar&yacute;l&yacute; bir &thorn;ekilde y&uuml;klendi';

$MESSAGE['PAGES']['ADDED'] = 'Sayfa, ba&thorn;ar&yacute;l&yacute; bir &thorn;ekilde ekledi';
$MESSAGE['PAGES']['ADDED_HEADING'] = '&Uuml;st sayfa, ba&thorn;ar&yacute;l&yacute; bir &thorn;ekilde ekledi';
$MESSAGE['PAGES']['PAGE_EXISTS'] = 'Bu sayfa veya dosya zaten var.';
$MESSAGE['PAGES']['CANNOT_CREATE_ACCESS_FILE'] = 'Yarat&yacute;rken hatal&yacute; giri&thorn; /pages dizini i&ccdil;in (Yetersiz yetki)';
$MESSAGE['PAGES']['CANNOT_DELETE_ACCESS_FILE'] = 'Silinirken hatal&yacute; giri&thorn; /pages dizini i&ccdil;in (Yetersiz yetki)';
$MESSAGE['PAGES']['NOT_FOUND'] = 'Sayfa bulunamad&yacute;';
$MESSAGE['PAGES']['SAVED'] = 'Sayfa, ba&thorn;ar&yacute;l&yacute; bir &thorn;ekilde kay&yacute;t edildi';
$MESSAGE['PAGES']['SAVED_SETTINGS'] = 'Sayfa ayarlar&yacute; ba&thorn;ar&yacute;l&yacute; bir &thorn;ekilde kay&yacute;t edildi';
$MESSAGE['PAGES']['NOT_SAVED'] = 'Kay&yacute;t edilen sayfa hatal&yacute;';
$MESSAGE['PAGES']['DELETE_CONFIRM'] = 'Se&ccdil;ti&eth;iniz sayfay&yacute; silmek istedi&eth;inizden eminmisiniz (B&uuml;t&uuml;n alt sayfalar silinecektir)';
$MESSAGE['PAGES']['DELETED'] = 'Sayfa, ba&thorn;ar&yacute;l&yacute; bir &thorn;ekilde silindi';
$MESSAGE['PAGES']['RESTORED'] = 'Sayfa, ba&thorn;ar&yacute;l&yacute; bir &thorn;ekilde kurtar&yacute;ld&yacute;';
$MESSAGE['PAGES']['BLANK_PAGE_TITLE'] = 'L&uuml;tfen sayfa ba&thorn;l&yacute;&eth;&yacute;n&yacute; girin';
$MESSAGE['PAGES']['BLANK_MENU_TITLE'] = 'L&uuml;tfen men&uuml; ba&thorn;l&yacute;&eth;&yacute;n&yacute; girin';
$MESSAGE['PAGES']['REORDERED'] = 'Ba&thorn;ar&yacute;l&yacute; bi&ccdil;imde yenilendi';
$MESSAGE['PAGES']['CANNOT_REORDER'] = 'Yenilenen sayfada hata var';
$MESSAGE['PAGES']['INSUFFICIENT_PERMISSIONS'] = 'Sizin bu sayfay&yacute; de&eth;i&thorn;tirme izininiz yok';
$MESSAGE['PAGES']['INTRO_NOT_WRITABLE'] = 'Dosyaya yaz&yacute;lam&yacute;yor /pages/intro.php (Yetersiz yetki)';
$MESSAGE['PAGES']['INTRO_SAVED'] = 'Giri&thorn; sayfas&yacute; ba&thorn;ar&yacute;l&yacute; bir &thorn;ekilde kay&yacute;t edildi';
$MESSAGE['PAGES']['LAST_MODIFIED'] = 'Son de&eth;i&thorn;iklik yapan';
$MESSAGE['PAGES']['INTRO_LINK'] = 'Buraya t&yacute;klayarak Giri&thorn; Sayfas&yacute;n&yacute; D&uuml;zenleye Bilirsiniz.';
$MESSAGE['PAGES']['SECTIONS_PROPERTIES_SAVED'] = 'Section properties saved successfully'; //needs to be translated
$MESSAGE['PAGES']['RETURN_TO_PAGES'] = 'Sayfaya Git';

$MESSAGE['GENERIC']['FILL_IN_ALL'] = 'L&uuml;tfen geri d&ouml;n&uuml;p b&uuml;t&uuml;n alanlar&yacute; doldurunuz';
$MESSAGE['GENERIC']['FILE_TYPE'] = 'Y&uuml;kledi&eth;in dosyan&yacute;n izin verilen dosya olmas&yacute;na dikkat edin:';
$MESSAGE['GENERIC']['FILE_TYPES'] = 'Y&uuml;kledi&eth;in dosyalar&yacute;n izin verilen dosya olmas&yacute;na dikkat edin:';
$MESSAGE['GENERIC']['CANNOT_UPLOAD'] = 'Dosya Y&uuml;klenemiyor';
$MESSAGE['GENERIC']['ALREADY_INSTALLED'] = 'Daha &ouml;nce y&uuml;klenmi&thorn;ti';
$MESSAGE['GENERIC']['NOT_INSTALLED'] = 'Y&uuml;klenemiyor';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL'] = 'Kald&yacute;r&yacute;lam&yacute;yor';
$MESSAGE['GENERIC']['CANNOT_UNZIP'] = 'Dosya unzip edilemiyor';
$MESSAGE['GENERIC']['INSTALLED'] = 'Ba&thorn;ar&yacute;l&yacute; bir &thorn;ekilde yerle&thorn;tirildi';
$MESSAGE['GENERIC']['UPGRADED'] = 'G&uuml;ncelleme ba&thorn;ar&yacute;l&yacute; bir&thorn;ekilde yap&yacute;ld&yacute;';
$MESSAGE['GENERIC']['UNINSTALLED'] = 'Ba&thorn;ar&yacute;l&yacute; bir &thorn;ekilde kald&yacute;r&yacute;ld&yacute;';
$MESSAGE['GENERIC']['BAD_PERMISSIONS'] = 'Uygunsuz, hedef dizin yaz&yacute;lam&yacute;yor';
$MESSAGE['GENERIC']['INVALID'] = 'Senin y&uuml;kledi&eth;in dosya, ge&ccdil;ersizdir';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE'] = 'Kald&yacute;rama: Se&ccdil;ilen dosya, kullan&yacute;mdad&yacute;r';
$MESSAGE['GENERIC']['WEBSITE_UNDER_CONTRUCTION'] = 'Website Yap&yacute;m A&thorn;amas&yacute;nda';
$MESSAGE['GENERIC']['PLEASE_CHECK_BACK_SOON'] = 'L&uuml;tfen daha sonra kontrol edin...';
$MESSAGE['GENERIC']['PLEASE_BE_PATIENT'] = 'Ol hasta memnun et, bu, bir anda alabilirdi.';
$MESSAGE['GENERIC']['ERROR_OPENING_FILE'] = 'Dosya a&ccdil;arken hata.';

$MESSAGE['MOD_FORM']['REQUIRED_FIELDS'] = 'You must enter details for the following fields'; //needs to be translated
$MESSAGE['MOD_FORM']['EXCESS_SUBMISSIONS'] = 'Sorry, this form has been submitted too many times so far this hour. Please retry in the next hour.'; //needs to be translated
$MESSAGE['MOD_FORM']['INCORRECT_CAPTCHA'] = 'The verification number (also known as Captcha) that you entered is incorrect. If you are having problems reading the Captcha, please email: '.SERVER_EMAIL; //needs to be translated

$MESSAGE['MOD_RELOAD']['PLEASE_SELECT'] = 'Please selected which add-ons you would like to have reloaded'; //needs to be translated
$MESSAGE['MOD_RELOAD']['MODULES_RELOADED'] = 'Mod&uuml;l, ba&thorn;ar&yacute;l&yacute; bir &thorn;ekildeninkini tekrar y&uuml;klendi';
$MESSAGE['MOD_RELOAD']['TEMPLATES_RELOADED'] = 'Kal&yacute;plar, ba&thorn;ar&yacute;l&yacute; bir &thorn;ekildeninkini tekrar y&uuml;klendi';
$MESSAGE['MOD_RELOAD']['LANGUAGES_RELOADED'] = 'Diller, ba&thorn;ar&yacute;l&yacute; bir &thorn;ekildeninkini tekrar y&uuml;klendi';

?>