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

// use languageedit-module to modify this file

// Define that this file is loaded
if(!defined('LANGUAGE_LOADED')) {
define('LANGUAGE_LOADED', true);
}

// Set the language information
$language_code = 'FR';
$language_name = 'Fran&ccedil;ais';
$language_version = '2.8';
$language_platform = '2.8.x';
$language_author = 'Marin Susac';
$language_license = 'GNU General Public License';

// Menu titles
$MENU['START'] = 'Accueil';
$MENU['PAGES'] = 'Contenu';
$MENU['MEDIA'] = 'Media';
$MENU['ADDONS'] = 'Ajouts';
$MENU['MODULES'] = 'Modules';
$MENU['TEMPLATES'] = 'Mod&egrave;les';
$MENU['LANGUAGES'] = 'Langages';
$MENU['PREFERENCES'] = 'Pr&eacute;f&eacute;rences';
$MENU['SETTINGS'] = 'R&eacute;glages';
$MENU['ADMINTOOLS'] = 'Admin-Tools';
$MENU['ACCESS'] = 'Acc&egrave;s';
$MENU['USERS'] = 'Utilisateurs';
$MENU['GROUPS'] = 'Groupes';
$MENU['HELP'] = 'Aide';
$MENU['VIEW'] = 'Voir le site';
$MENU['LOGOUT'] = 'D&eacute;connexion';
$MENU['LOGIN'] = 'Connexion';
$MENU['FORGOT'] = 'Retrouver vos identifiants de connexion';

// Section overviews
$OVERVIEW['START'] = 'Pr&eacute;sentation de l\'Administration';
$OVERVIEW['PAGES'] = 'Gestion du contenu du site';
$OVERVIEW['MEDIA'] = 'Gestion des fichiers media (images, t&eacute;l&eacute;chargements,...)';
$OVERVIEW['MODULES'] = 'Gestion des modules du site';
$OVERVIEW['TEMPLATES'] = 'Gestion des mod&egrave;les et modification de l\'apparence du site';
$OVERVIEW['LANGUAGES'] = 'Gestion des langages du site';
$OVERVIEW['PREFERENCES'] = 'Gestion de vos pr&eacute;f&eacute;rences (email, mot de passe, etc.) ';
$OVERVIEW['SETTINGS'] = 'Configuration du site';
$OVERVIEW['USERS'] = 'Gestion des acc&egrave;s au site';
$OVERVIEW['GROUPS'] = 'Gestions des groupes d\'utilisateurs et des permissions';
$OVERVIEW['HELP'] = 'Aide et FAQ sur l\'utilisation du site';
$OVERVIEW['VIEW'] = 'Aper&ccedil;u du site dans une nouvelle fen&ecirc;tre';
$OVERVIEW['ADMINTOOLS'] = 'Access the Website Baker administration tools...';

// Headings
$HEADING['MODIFY_DELETE_PAGE'] = 'Modifier/Supprimer une page';
$HEADING['DELETED_PAGES'] = 'Pages effac&eacute;e';
$HEADING['ADD_PAGE'] = 'Ajouter une page';
$HEADING['ADD_HEADING'] = 'Ajouter un ent&ecirc;te';
$HEADING['MODIFY_PAGE'] = 'Modifier une page';
$HEADING['MODIFY_PAGE_SETTINGS'] = 'Modifier les propri&eacute;t&eacute;s de la page';
$HEADING['MODIFY_ADVANCED_PAGE_SETTINGS'] = 'Modifier les propri&eacute;t&eacute;s avanc&eacute;es de la page';
$HEADING['MANAGE_SECTIONS'] = 'Gestion des rubriques';
$HEADING['MODIFY_INTRO_PAGE'] = 'Modifier la page d\'Accueil';

$HEADING['BROWSE_MEDIA'] = 'Parcourir le dossier Media';
$HEADING['CREATE_FOLDER'] = 'Cr&eacute;er un dossier';
$HEADING['UPLOAD_FILES'] = 'Chargement des fichiers';

$HEADING['INSTALL_MODULE'] = 'Installer un module';
$HEADING['UNINSTALL_MODULE'] = 'D&eacute;sinstaller un module';
$HEADING['MODULE_DETAILS'] = 'Propri&eacute;t&eacute;s du module';

$HEADING['INSTALL_TEMPLATE'] = 'Installer un mod&egrave;le';
$HEADING['UNINSTALL_TEMPLATE'] = 'D&eacute;sinstaller un mod&egrave;le';
$HEADING['TEMPLATE_DETAILS'] = 'Propri&eacute;t&eacute;s du mod&egrave;le';

$HEADING['INSTALL_LANGUAGE'] = 'Installer un langage';
$HEADING['UNINSTALL_LANGUAGE'] = 'D&eacute;sinstaller un langage';
$HEADING['LANGUAGE_DETAILS'] = 'Propri&eacute;t&eacute;s du langage';

$HEADING['MY_SETTINGS'] = 'Les pr&eacute;f&eacute;rences';
$HEADING['MY_EMAIL'] = 'Mon email';
$HEADING['MY_PASSWORD'] = 'Mon mot de passe';

$HEADING['GENERAL_SETTINGS'] = 'R&eacute;glages';
$HEADING['DEFAULT_SETTINGS'] = 'R&eacute;glages par d&eacute;faut';
$HEADING['SEARCH_SETTINGS'] = 'R&eacute;glages de recherche';
$HEADING['FILESYSTEM_SETTINGS'] = 'R&eacute;glages des fichiers syst&egrave;mes';
$HEADING['SERVER_SETTINGS'] = 'R&eacute;glages Serveur';
$HEADING['WBMAILER_SETTINGS'] = 'Mailer Settings';
$HEADING['ADMINISTRATION_TOOLS'] = 'Outils d\'Administration';

$HEADING['MODIFY_DELETE_USER'] = 'Modifier/Supprimer un utilisateur';
$HEADING['ADD_USER'] = 'Ajouter un utilisateur';
$HEADING['MODIFY_USER'] = 'Modifier un utilisateur';

$HEADING['MODIFY_DELETE_GROUP'] = 'Modifier/Supprimer un groupe';
$HEADING['ADD_GROUP'] = 'Ajouter un groupe';
$HEADING['MODIFY_GROUP'] = 'Modifier un groupe';

$HEADING['ADDON_PRECHECK_FAILED'] = 'Add-On requirements not met';
$HEADING['MANUAL_MODULE_INSTALLATION'] = 'Execute module "install.php" manually';

// Other text
$TEXT['OPEN'] = 'Open';
$TEXT['ADD'] = 'Ajouter';
$TEXT['MODIFY'] = 'Modifier';
$TEXT['SETTINGS'] = 'R&eacute;glages';
$TEXT['DELETE'] = 'Supprimer';
$TEXT['SAVE'] = 'Sauvegarder';
$TEXT['RESET'] = 'R&eacute;-initialiser';
$TEXT['LOGIN'] = 'Connexion';
$TEXT['RELOAD'] = 'Recharger';
$TEXT['CANCEL'] = 'Annuler';
$TEXT['NAME'] = 'Nom';
$TEXT['PLEASE_SELECT'] = 'S&eacute;lectionnez';
$TEXT['TITLE'] = 'Titre';
$TEXT['PARENT'] = 'Parent';
$TEXT['TYPE'] = 'Type';
$TEXT['VISIBILITY'] = 'Visibilit&eacute;';
$TEXT['PRIVATE'] = 'Priv&eacute;';
$TEXT['PUBLIC'] = 'Public';
$TEXT['NONE'] = 'Aucun';
$TEXT['NONE_FOUND'] = 'Introuvable';
$TEXT['CURRENT'] = 'Courant';
$TEXT['CHANGE'] = 'Changer';
$TEXT['WINDOW'] = 'Fen&ecirc;tre';
$TEXT['DESCRIPTION'] = 'Description';
$TEXT['KEYWORDS'] = 'Mots cl&eacute;s';
$TEXT['ADMINISTRATORS'] = 'Administrateurs';
$TEXT['PRIVATE_VIEWERS'] = 'Utilisateurs priv&eacute;s';
$TEXT['EXPAND'] = 'D&eacute;velopper';
$TEXT['COLLAPSE'] = 'R&eacute;sumer';
$TEXT['MOVE_UP'] = 'Au dessus';
$TEXT['MOVE_DOWN'] = 'Au dessous';
$TEXT['RENAME'] = 'Renommer';
$TEXT['MODIFY_SETTINGS'] = 'Modifier les r&eacute;glages';
$TEXT['MODIFY_CONTENT'] = 'Modifier le contenu';
$TEXT['VIEW'] = 'Aper&ccedil;u';
$TEXT['UP'] = 'Haut';
$TEXT['FORGOTTEN_DETAILS'] = 'Identifiants oubli&eacute;s ?';
$TEXT['NEED_TO_LOGIN'] = 'Obligatoire &agrave; la connexion';
$TEXT['SEND_DETAILS'] = 'Valider';
$TEXT['USERNAME'] = 'Identifiant';
$TEXT['PASSWORD'] = 'Mot de passe';
$TEXT['HOME'] = 'Accueil';
$TEXT['TARGET_FOLDER'] = 'Dossier de destination';
$TEXT['OVERWRITE_EXISTING'] = 'Ecraser les donn&eacute;es';
$TEXT['FILE'] = 'Fichier';
$TEXT['FILES'] = 'Fichiers';
$TEXT['FOLDER'] = 'Dossier';
$TEXT['FOLDERS'] = 'Dossiers';
$TEXT['CREATE_FOLDER'] = 'Cr&eacute;er un dossier';
$TEXT['UPLOAD_FILES'] = 'Charger un/des fichier(s)';
$TEXT['CURRENT_FOLDER'] = 'Dossier courant';
$TEXT['TO'] = 'vers';
$TEXT['FROM'] = 'de';
$TEXT['INSTALL'] = 'Installer';
$TEXT['UNINSTALL'] = 'D&eacute;sinstaller';
$TEXT['VIEW_DETAILS'] = 'Propri&eacute;t&eacute;s';
$TEXT['DISPLAY_NAME'] = 'Afficher le nom';
$TEXT['AUTHOR'] = 'Auteur';
$TEXT['VERSION'] = 'Version';
$TEXT['DESIGNED_FOR'] = 'Cr&eacute;&eacute; par';
$TEXT['DESCRIPTION'] = 'Description';
$TEXT['EMAIL'] = 'Email';
$TEXT['LANGUAGE'] = 'Langage';
$TEXT['TIMEZONE'] = 'Fuseau horaire';
$TEXT['CURRENT_PASSWORD'] = 'Mot de passe actuel';
$TEXT['NEW_PASSWORD'] = 'Nouveau mot de passe';
$TEXT['RETYPE_NEW_PASSWORD'] = 'Ressaisissez votre nouveau mot de passe';
$TEXT['ACTIVE'] = 'Actif';
$TEXT['DISABLED'] = 'D&eacute;sactiv&eacute;';
$TEXT['ENABLED'] = 'Activ&eacute;';
$TEXT['RETYPE_PASSWORD'] = 'Re-saisir le mot de passe';
$TEXT['GROUP'] = 'Groupe';
$TEXT['SYSTEM_PERMISSIONS'] = 'Autorisations Syst&egrave;me';
$TEXT['MODULE_PERMISSIONS'] = 'Autorisations Module';
$TEXT['SHOW_ADVANCED'] = 'Afficher les options avanc&eacute;es';
$TEXT['HIDE_ADVANCED'] = 'Cacher les options avanc&eacute;es';
$TEXT['BASIC'] = 'Classique';
$TEXT['ADVANCED'] = 'Avanc&eacute;';
$TEXT['WEBSITE'] = 'Site Internet';
$TEXT['DEFAULT'] = 'D&eacute;faut';
$TEXT['KEYWORDS'] = 'Mots cl&eacute;s';
$TEXT['TEXT'] = 'Texte';
$TEXT['HEADER'] = 'Ent&ecirc;te';
$TEXT['FOOTER'] = 'Pied de page';
$TEXT['TEMPLATE'] = 'Mod&egrave;le';
$TEXT['INSTALLATION'] = 'Installation';
$TEXT['DATABASE'] = 'Base de donn&eacute;es';
$TEXT['HOST'] = 'H&ocirc;te';
$TEXT['INTRO'] = 'Intro';
$TEXT['PAGE'] = 'Page';
$TEXT['SIGNUP'] = 'Cr&eacute;er un compte';
$TEXT['PHP_ERROR_LEVEL'] = 'Niveau d\'erreur PHP';
$TEXT['ADMIN'] = 'Admin';
$TEXT['PATH'] = 'Chemin';
$TEXT['URL'] = 'URL';
$TEXT['FRONTEND'] = 'Page d\'Accueil';
$TEXT['EXTENSION'] = 'Extension';
$TEXT['TABLE_PREFIX'] = 'Pr&eacute;fixe de la table';
$TEXT['CHANGES'] = 'Changements';
$TEXT['ADMINISTRATION'] = 'Administration';
$TEXT['FORGOT_DETAILS'] = 'Identifiants oubli&eacute;s ?';
$TEXT['LOGGED_IN'] = 'Connect&eacute;';
$TEXT['WELCOME_BACK'] = 'Re-Bienvenue';
$TEXT['FULL_NAME'] = 'Nom complet';
$TEXT['ACCOUNT_SIGNUP'] = 'Cr&eacute;er un compte';
$TEXT['LINK'] = 'Lien';
$TEXT['ANCHOR'] = 'Anchor';
$TEXT['TARGET'] = 'Cible';
$TEXT['NEW_WINDOW'] = 'Nouvelle fen&ecirc;tre';
$TEXT['SAME_WINDOW'] = 'M&ecirc;me fen&ecirc;tre';
$TEXT['TOP_FRAME'] = 'Top Frame';
$TEXT['PAGE_LEVEL_LIMIT'] = 'Limite de niveau de page';
$TEXT['SUCCESS'] = 'Op&eacute;ration r&eacute;ussie';
$TEXT['ERROR'] = 'Erreur';
$TEXT['ARE_YOU_SURE'] = 'Etes-vous s&ucirc;r ?';
$TEXT['YES'] = 'Oui';
$TEXT['NO'] = 'Non';
$TEXT['SYSTEM_DEFAULT'] = 'Syst&egrave;me par d&eacute;faut';
$TEXT['PAGE_TITLE'] = 'Titre de la page';
$TEXT['MENU_TITLE'] = 'Titre du menu';
$TEXT['ACTIONS'] = 'Actions';
$TEXT['UNKNOWN'] = 'Inconnu';
$TEXT['BLOCK'] = 'Bloc';
$TEXT['SEARCH'] = 'Rechercher';
$TEXT['SEARCHING'] = 'Recherche en cours';
$TEXT['POST'] = 'Poster';
$TEXT['COMMENT'] = 'Commentaire';
$TEXT['COMMENTS'] = 'Commentaires';
$TEXT['COMMENTING'] = 'Commentaire en cours';
$TEXT['SHORT'] = 'Court';
$TEXT['LONG'] = 'Long';
$TEXT['LOOP'] = 'Boucle';
$TEXT['FIELD'] = 'Champ';
$TEXT['REQUIRED'] = 'Obligatoire';
$TEXT['LENGTH'] = 'Longueur';
$TEXT['MESSAGE'] = 'Message';
$TEXT['SUBJECT'] = 'Sujet';
$TEXT['MATCH'] = 'montrer';
$TEXT['ALL_WORDS'] = 'Tous les mots';
$TEXT['ANY_WORDS'] = 'Chaque mot';
$TEXT['EXACT_MATCH'] = 'Terme exact';
$TEXT['SHOW'] = 'Montrer';
$TEXT['HIDE'] = 'Cacher';
$TEXT['START_PUBLISHING'] = 'D&eacute;but de publication';
$TEXT['FINISH_PUBLISHING'] = 'Fin de publication';
$TEXT['DATE'] = 'Date';
$TEXT['START'] = 'D&eacute;buter';
$TEXT['END'] = 'Fin';
$TEXT['IMAGE'] = 'Image';
$TEXT['ICON'] = 'Ic&ocirc;ne';
$TEXT['SECTION'] = 'Rubrique';
$TEXT['DATE_FORMAT'] = 'Format de la date';
$TEXT['TIME_FORMAT'] = 'Format de l\'heure';
$TEXT['RESULTS'] = 'R&eacute;sultats';
$TEXT['RESIZE'] = 'Redimensionner';
$TEXT['MANAGE'] = 'G&eacute;rer';
$TEXT['CODE'] = 'Code';
$TEXT['WIDTH'] = 'Largeur';
$TEXT['HEIGHT'] = 'Hauteur';
$TEXT['MORE'] = 'Plus';
$TEXT['READ_MORE'] = 'En savoir plus';
$TEXT['CHANGE_SETTINGS'] = 'Modifier les r&eacute;glages';
$TEXT['CURRENT_PAGE'] = 'Page courante';
$TEXT['CLOSE'] = 'Fermer';
$TEXT['INTRO_PAGE'] = 'Page d\'Intro';
$TEXT['INSTALLATION_URL'] = 'Adresse (URL) d\'installation';
$TEXT['INSTALLATION_PATH'] = 'Chemin d\'installation';
$TEXT['PAGE_EXTENSION'] = 'Extension des pages';
$TEXT['NO_RESULTS'] = 'Aucun r&eacute;sultat';
$TEXT['WEBSITE_TITLE'] = 'Titre du site';
$TEXT['WEBSITE_DESCRIPTION'] = 'Description du site';
$TEXT['WEBSITE_KEYWORDS'] = 'Mots cl&eacute;s du site';
$TEXT['WEBSITE_HEADER'] = 'Ent&ecirc;te du site';
$TEXT['WEBSITE_FOOTER'] = 'Pied de page du site';
$TEXT['RESULTS_HEADER'] = 'Ent&ecirc;te du mod&egrave;le de recherche';
$TEXT['RESULTS_LOOP'] = 'Mod&egrave;le d\'afichage de la boucle de recherche';
$TEXT['RESULTS_FOOTER'] = 'Pied de page du mod&egrave;le de recherche';
$TEXT['LEVEL'] = 'Niveau';
$TEXT['NOT_FOUND'] = 'Impossible de trouver';
$TEXT['PAGE_SPACER'] = 'Ecart de page';
$TEXT['MATCHING'] = 'Matching';
$TEXT['TEMPLATE_PERMISSIONS'] = 'Permissions sur les mod&egrave;les';
$TEXT['PAGES_DIRECTORY'] = 'R&eacute;pertoire des pages';
$TEXT['MEDIA_DIRECTORY'] = 'R&eacute;pertoire des fichiers media';
$TEXT['FILE_MODE'] = 'Propri&eacute;t&eacute;s fichiers';
$TEXT['USER'] = 'Utilisateur';
$TEXT['OTHERS'] = 'Autres';
$TEXT['READ'] = 'Lire';
$TEXT['WRITE'] = 'Ecrire';
$TEXT['EXECUTE'] = 'Executer';
$TEXT['SMART_LOGIN'] = 'Identification rapide';
$TEXT['REMEMBER_ME'] = 'Se souvenir de moi';
$TEXT['FILESYSTEM_PERMISSIONS'] = 'Permissions des fichiers syst&egrave;me';
$TEXT['DIRECTORIES'] = 'R&eacute;pertoires';
$TEXT['DIRECTORY_MODE'] = 'Propri&eacute;t&eacute;s r&eacute;pertoire';
$TEXT['LIST_OPTIONS'] = 'Liste des options';
$TEXT['OPTION'] = 'Option';
$TEXT['ALLOW_MULTIPLE_SELECTIONS'] = 'Autoriser la s&eacute;lection multiple';
$TEXT['TEXTFIELD'] = 'Champ de texte';
$TEXT['TEXTAREA'] = 'Zone de texte';
$TEXT['SELECT_BOX'] = 'S&eacute;lection des bo&icirc;tes';
$TEXT['CHECKBOX_GROUP'] = 'Groupe bouton Box';
$TEXT['RADIO_BUTTON_GROUP'] = 'Groupe bouton Radio';
$TEXT['SIZE'] = 'Taille';
$TEXT['DEFAULT_TEXT'] = 'Texte par d&eacute;faut';
$TEXT['SEPERATOR'] = 'S&eacute;parateur';
$TEXT['BACK'] = 'Retour';
$TEXT['UNDER_CONSTRUCTION'] = 'En construction';
$TEXT['MULTISELECT'] = 'Multi-s&eacute;lection';
$TEXT['SHORT_TEXT'] = 'Texte court';
$TEXT['LONG_TEXT'] = 'Texte long';
$TEXT['HOMEPAGE_REDIRECTION'] = 'Redirection de la page d\'Accueil';
$TEXT['HEADING'] = 'Haut de page';
$TEXT['MULTIPLE_MENUS'] = 'Menus multiples';
$TEXT['REGISTERED'] = 'Enregistr&eacute;';
$TEXT['SECTION_BLOCKS'] = 'Bloc de rubrique';
$TEXT['REGISTERED_VIEWERS'] = 'Utilisateurs enregistr&eacute;s';
$TEXT['ALLOWED_VIEWERS'] = 'Allowed Viewers';
$TEXT['SUBMISSION_ID'] = 'Soummission ID';
$TEXT['SUBMISSIONS'] = 'Soummissions';
$TEXT['SUBMITTED'] = 'Soumis';
$TEXT['MAX_SUBMISSIONS_PER_HOUR'] = 'Soummissions maximales par heure';
$TEXT['SUBMISSIONS_STORED_IN_DATABASE'] = 'Soumission dans la base de donn&eacute;es';
$TEXT['EMAIL_ADDRESS'] = 'Adresse email';
$TEXT['CUSTOM'] = 'Adapter';
$TEXT['ANONYMOUS'] = 'Anonyme';
$TEXT['SERVER_OPERATING_SYSTEM'] = 'Serveur sur lequel est bas&eacute; le syst&egrave;me';
$TEXT['WORLD_WRITEABLE_FILE_PERMISSIONS'] = 'Permissions d\'&eacute;criture sur fichier';
$TEXT['LINUX_UNIX_BASED'] = 'Bas&eacute; sur Linux/Unix';
$TEXT['WINDOWS'] = 'Windows';
$TEXT['HOME_FOLDER'] = 'Fichier d\'Accueil';
$TEXT['HOME_FOLDERS'] = 'Fichiers d\'Accueil';
$TEXT['PAGE_TRASH'] = 'Page &agrave; la corbeille';
$TEXT['INLINE'] = 'En ligne';
$TEXT['SEPARATE'] = 'S&eacute;parer';
$TEXT['DELETED'] = 'Supprim&eacute;';
$TEXT['VIEW_DELETED_PAGES'] = 'Voir les pages supprim&eacute;es';
$TEXT['EMPTY_TRASH'] = 'Corbeille vide';
$TEXT['TRASH_EMPTIED'] = 'Corbeille vid&eacute;e';
$TEXT['ADD_SECTION'] = 'Ajouter une rubrique';
$TEXT['POST_HEADER'] = 'Ajouter un ent&ecirc;te';
$TEXT['POST_FOOTER'] = 'Ajouter un pied de page';
$TEXT['POSTS_PER_PAGE'] = 'Envoi par page';
$TEXT['RESIZE_IMAGE_TO'] = 'Redimensionner l\'image';
$TEXT['UNLIMITED'] = 'Illimit&eacute;';
$TEXT['OF'] = 'De';
$TEXT['OUT_OF'] = 'Hors de';
$TEXT['NEXT'] = 'Suivant';
$TEXT['PREVIOUS'] = 'Pr&eacute;c&eacute;dent';
$TEXT['NEXT_PAGE'] = 'Pas suivante';
$TEXT['PREVIOUS_PAGE'] = 'Page pr&eacute;c&eacute;dente';
$TEXT['ON'] = 'Sur';
$TEXT['LAST_UPDATED_BY'] = 'Mis &agrave; jour par';
$TEXT['RESULTS_FOR'] = 'R&eacute;sultats';
$TEXT['TIME'] = 'Heure';
$TEXT['REDIRECT_AFTER'] = 'Redirect after';
$TEXT['WYSIWYG_STYLE'] = 'Style WYSIWYG';
$TEXT['WYSIWYG_EDITOR'] = 'Editeur WYSIWYG';
$TEXT['SERVER_EMAIL'] = 'Serveur email';
$TEXT['MENU'] = 'Menu';
$TEXT['MANAGE_GROUPS'] = 'Gestion des groupes';
$TEXT['MANAGE_USERS'] = 'Gestion des utilisateurs';
$TEXT['PAGE_LANGUAGES'] = 'Langages';
$TEXT['HIDDEN'] = 'Cach&eacute;';
$TEXT['MAIN'] = 'Principal';
$TEXT['RENAME_FILES_ON_UPLOAD'] = 'Renommer les fichiers au chargement';
$TEXT['APP_NAME'] = 'Nom de lapplication';
$TEXT['SESSION_IDENTIFIER'] = 'Identifiant de session';
$TEXT['SEC_ANCHOR'] = 'Section-Anchor text';
$TEXT['BACKUP'] = 'Sauvegarde';
$TEXT['RESTORE'] = 'Restaurer';
$TEXT['BACKUP_DATABASE'] = 'Sauvegarde de la base de donn&eacute;es';
$TEXT['RESTORE_DATABASE'] = 'Restauration de la base de donn&eacute;es';
$TEXT['BACKUP_ALL_TABLES'] = 'Backup all tables in database';
$TEXT['BACKUP_WB_SPECIFIC'] = 'Backup only WB-specific tables';
$TEXT['BACKUP_MEDIA'] = 'Sauvegarde des fichiers medias';
$TEXT['RESTORE_MEDIA'] = 'Restauration des fichiers medias';
$TEXT['ADMINISTRATION_TOOL'] = 'Outils d\'administration';
$TEXT['CAPTCHA_VERIFICATION'] = 'V&eacute;rification par Captcha ';
$TEXT['VERIFICATION'] = 'V&eacute;rification';
$TEXT['DEFAULT_CHARSET'] = 'Encodage par d&eacute;faut';
$TEXT['CHARSET'] = 'Encodage';
$TEXT['MODULE_ORDER'] = 'Module-order for searching';
$TEXT['MAX_EXCERPT'] = 'Max lines of excerpt';
$TEXT['TIME_LIMIT'] = 'Max time to gather excerpts per module';
$TEXT['PUBL_START_DATE'] = 'Start date';
$TEXT['PUBL_END_DATE'] = 'End date';
$TEXT['CALENDAR'] = 'Calender';
$TEXT['DELETE_DATE'] = 'Delete date';
$TEXT['WBMAILER_DEFAULT_SETTINGS_NOTICE'] = 'Please specify a default "FROM" address and "SENDER" name below. It is recommended to use a FROM address like: <strong>admin@yourdomain.com</strong>. Some mail provider (e.g. <em>mail.com</em>) may reject mails with a FROM: address like <em>name@mail.com</em> sent via a foreign relay to avoid spam.<br /><br />The default values are only used if no other values are specified by Website Baker. If your server supports <acronym title="Simple mail transfer protocol">SMTP</acronym>, you may want use this option for outgoing mails.';
$TEXT['WBMAILER_DEFAULT_SENDER_MAIL'] = 'Default From Mail';
$TEXT['WBMAILER_DEFAULT_SENDER_NAME'] = 'Default Sender Name';
$TEXT['WBMAILER_NOTICE'] = '<strong>SMTP Mailer Settings:</strong><br />The settings below are only required if you want to send mails via <acronym title="Simple mail transfer protocol">SMTP</acronym>. If you do not know your SMTP host or you are not sure about the required settings, simply stay with the default mail routine: PHP MAIL.';
$TEXT['WBMAILER_FUNCTION'] = 'Mail Routine';
$TEXT['WBMAILER_SMTP_HOST'] = 'SMTP Host';
$TEXT['WBMAILER_PHP'] = 'PHP MAIL';
$TEXT['WBMAILER_SMTP'] = 'SMTP';
$TEXT['WBMAILER_SMTP_AUTH'] = 'SMTP Authentification';
$TEXT['WBMAILER_SMTP_AUTH_NOTICE'] = 'only activate if your SMTP host requires authentification';
$TEXT['WBMAILER_SMTP_USERNAME'] = 'SMTP Username';
$TEXT['WBMAILER_SMTP_PASSWORD'] = 'SMTP Password';
$TEXT['PLEASE_LOGIN'] = 'Please login';
$TEXT['CAP_EDIT_CSS'] = 'Edit CSS';
$TEXT['HEADING_CSS_FILE'] = 'Actual module file: ';
$TEXT['TXT_EDIT_CSS_FILE'] = 'Edit the CSS definitions in the textarea below.';
$TEXT['CODE_SNIPPET'] = "Code-snippet";
$TEXT['REQUIREMENT'] = "Requirement";
$TEXT['INSTALLED'] = "installed";
$TEXT['NOT_INSTALLED'] = "not installed";
$TEXT['ADDON'] = "Add-On";
$TEXT['EXTENSION'] = "Extension";

// Success/error messages
$MESSAGE['FRONTEND']['SORRY_NO_VIEWING_PERMISSIONS'] = 'D&eacute;sol&eacute;, vous n\'avez pas les droits pour visualiser cette page';
$MESSAGE['FRONTEND']['SORRY_NO_ACTIVE_SECTIONS'] = 'Sorry, no active content to display';

$MESSAGE['ADMIN']['INSUFFICIENT_PRIVELLIGES'] = 'Droits insuffisants pour &ecirc;tre ici';

$MESSAGE['LOGIN']['BOTH_BLANK'] = 'Merci de saisir vos identifiants de connexion';
$MESSAGE['LOGIN']['USERNAME_BLANK'] = 'Merci de saisir votre nom d\'utilisateur';
$MESSAGE['LOGIN']['PASSWORD_BLANK'] = 'Merci de saisir votre mot de passe';
$MESSAGE['LOGIN']['USERNAME_TOO_SHORT'] = 'Votre nom d\'utilisateur est trop court';
$MESSAGE['LOGIN']['PASSWORD_TOO_SHORT'] = 'Votre mot de passe est trop court';
$MESSAGE['LOGIN']['USERNAME_TOO_LONG'] = 'Votre nom d\'utilisateur est trop long';
$MESSAGE['LOGIN']['PASSWORD_TOO_LONG'] = 'Votre mot de passe est trop long';
$MESSAGE['LOGIN']['AUTHENTICATION_FAILED'] = 'Votre nom d\'utilisateur ou votre mot de passe est incorrect';

$MESSAGE['SIGNUP']['NO_EMAIL'] = 'L\'adresse email est obligatoire';
$MESSAGE['SIGNUP2']['SUBJECT_LOGIN_INFO'] = 'Your login details...';
$MESSAGE['SIGNUP2']['BODY_LOGIN_INFO'] = <<< EOT
Hello {LOGIN_DISPLAY_NAME},

Your '{LOGIN_WEBSITE_TITLE}' login details are:
Username: {LOGIN_NAME}
Password: {LOGIN_PASSWORD}

Your password has been set to the one above.
This means that your old password will no longer work.

If you have received this message in error, please delete it immediately.
EOT;

$MESSAGE['FORGOT_PASS']['NO_DATA'] = 'Merci de saisir votre adresse email';
$MESSAGE['FORGOT_PASS']['EMAIL_NOT_FOUND'] = 'L\'adresse email que vous avez saisi est introuvable dans la base de donn&eacute;es';
$MESSAGE['FORGOT_PASS']['CANNOT_EMAIL'] = 'Impossible de trouver le mot de passe associ&eacute; &ccedil; votre adresse email, merci de contacter l\'administrateur du site';
$MESSAGE['FORGOT_PASS']['PASSWORD_RESET'] = 'Vos identifiants vous ont &eacute;t&eacute; envoy&eacute; par email';
$MESSAGE['FORGOT_PASS']['ALREADY_RESET'] = 'D&eacute;sol&eacute;, vous ne pouvez pas modifier votre mot de passe plus d\'une fois par heure';

$MESSAGE['START']['WELCOME_MESSAGE'] = 'Bienvenue dans la zone d\'administration';
$MESSAGE['START']['INSTALL_DIR_EXISTS'] = 'ATTENTION : le r&eacute;pertoire d\'installation existe toujours';
$MESSAGE['START']['CURRENT_USER'] = 'Vous &ecirc;tes connect&eacute; en tant que : ';

$MESSAGE['SETTINGS']['UNABLE_OPEN_CONFIG'] = 'Impossible d\'ouvrir le fichier de configuration';
$MESSAGE['SETTINGS']['UNABLE_WRITE_CONFIG'] = 'Impossible d\'&eacute;crire dans le fichier de configuration';
$MESSAGE['SETTINGS']['SAVED'] = 'Sauvegarde r&eacute;ussie avec succ&egrave;s';
$MESSAGE['SETTINGS']['MODE_SWITCH_WARNING'] = 'En cliquant sur ce bouton, vous r&eacute;initialiser tous les changement NON-sauvegard&eacute;s';
$MESSAGE['SETTINGS']['WORLD_WRITEABLE_WARNING'] = 'Recommand&eacute; uniquement pour les environnement de test';

$MESSAGE['USERS']['ADDED'] = 'Utilisateur ajout&eacute; avec succ&egrave;s';
$MESSAGE['USERS']['SAVED'] = 'Utilisateur sauvegard&eacute; avec succ&egrave;s';
$MESSAGE['USERS']['DELETED'] = 'Utilisateur supprim&eacute; avec succ&egrave;s';
$MESSAGE['USERS']['NO_GROUP'] = 'Aucun groupe n\'a &eacute;t&eacute; s&eacute;lectionn&eacute;';
$MESSAGE['USERS']['USERNAME_TOO_SHORT'] = 'Le nom d\'utilisateur est trop court';
$MESSAGE['USERS']['PASSWORD_TOO_SHORT'] = 'Le mot de passe est trop court';
$MESSAGE['USERS']['PASSWORD_MISMATCH'] = 'Le mot de passe est introuvable';
$MESSAGE['USERS']['INVALID_EMAIL'] = 'L\'adresse email n\'est pas valide';
$MESSAGE['USERS']['EMAIL_TAKEN'] = 'L\'adresse email est d&eacute;ja utilis&eacute;e';
$MESSAGE['USERS']['USERNAME_TAKEN'] = 'Le nom d\'utilisateur est d&eacute;ja utilis&eacute;';
$MESSAGE['USERS']['CHANGING_PASSWORD'] = 'Vous ne devez modifier les valeurs ci-dessus uniquement lors d\'une modification de mot de passe';
$MESSAGE['USERS']['CONFIRM_DELETE'] = 'Etes-vous s&ucirc;r de bien vouloir supprimer cet utilisateur ?';

$MESSAGE['GROUPS']['ADDED'] = 'Groupe ajout&eacute; avec succ&egrave;s';
$MESSAGE['GROUPS']['SAVED'] = 'Groupe sauvegard&eacute; avec succ&egrave;s';
$MESSAGE['GROUPS']['DELETED'] = 'Groupe supprim&eacute; avec succ&egrave;s';
$MESSAGE['GROUPS']['GROUP_NAME_BLANK'] = 'Le nom du groupe est vide';
$MESSAGE['GROUPS']['CONFIRM_DELETE'] = 'Etes-vous s&ucirc;r debien ouloir supprimer ce groupe (ainsi que tous les utilisateurs de ce groupe) ?';
$MESSAGE['GROUPS']['NO_GROUPS_FOUND'] = 'Groupe introuvable';
$MESSAGE['GROUPS']['GROUP_NAME_EXISTS'] = 'Le nom du groupe est d&eacute;ja existant';

$MESSAGE['PREFERENCES']['DETAILS_SAVED'] = 'Donn&eacute;es sauvegard&eacute;es avec succ&egrave;s';
$MESSAGE['PREFERENCES']['EMAIL_UPDATED'] = 'Adresse email sauvegard&eacute;e avec succ&egrave;s';
$MESSAGE['PREFERENCES']['CURRENT_PASSWORD_INCORRECT'] = 'le mot de passe entr&eacute; est incorrect';
$MESSAGE['PREFERENCES']['PASSWORD_CHANGED'] = 'Mot de passe modifi&eacute; avec succ&egrave;s';

$MESSAGE['TEMPLATES']['CHANGE_TEMPLATE_NOTICE'] = 'Pour modifier le mod&egrave;le du site, vous devez vous rendre dans la rubrique R&eacute;glages';

$MESSAGE['MEDIA']['DIR_DOT_DOT_SLASH'] = 'Impossible d\'inclure ../ dans le nom du dossier';
$MESSAGE['MEDIA']['DIR_DOES_NOT_EXIST'] = 'Le r&eacute;pertoire n\'existe pas';
$MESSAGE['MEDIA']['TARGET_DOT_DOT_SLASH'] = 'Impossible d\'avoir ../ dans le nom du dossier cible';
$MESSAGE['MEDIA']['NAME_DOT_DOT_SLASH'] = 'Impossible d\'inclure ../ dans le nom';
$MESSAGE['MEDIA']['NAME_INDEX_PHP'] = 'Vous ne pouvez pas utiliser INDEX.PHP comme nom';
$MESSAGE['MEDIA']['NONE_FOUND'] = 'Aucun media trouv&eacute; dans ce dossier';
$MESSAGE['MEDIA']['FILE_NOT_FOUND'] = 'Fichier introuvable';
$MESSAGE['MEDIA']['DELETED_FILE'] = 'Fichier supprim&eacute; avec succ&egrave;s';
$MESSAGE['MEDIA']['DELETED_DIR'] = 'Dossier supprim&eacute; avec succ&egrave;s';
$MESSAGE['MEDIA']['CONFIRM_DELETE'] = 'Etes-vous s&ucirc;r de bien vouloir supprimer ce fichier/dossier ?';
$MESSAGE['MEDIA']['CANNOT_DELETE_FILE'] = 'Impossible de supprimer le fichier s&eacute;lectionn&eacute;';
$MESSAGE['MEDIA']['CANNOT_DELETE_DIR'] = 'Impossible de supprimer le dossier s&eacute;lctionn&eacute;';
$MESSAGE['MEDIA']['BLANK_NAME'] = 'Vous n\'avezpas entr&eacute; de nouveau nom';
$MESSAGE['MEDIA']['BLANK_EXTENSION'] = 'Vous n\'avez pas entr&eacute; d\'extension';
$MESSAGE['MEDIA']['RENAMED'] = 'Renommage r&eacute;ussi avec succ&egrave;s';
$MESSAGE['MEDIA']['CANNOT_RENAME'] = 'Impossible de renommer';
$MESSAGE['MEDIA']['FILE_EXISTS'] = 'Un fichier portant ce nom est d&eacute;j&agrave; existant';
$MESSAGE['MEDIA']['DIR_EXISTS'] = 'Un dossier portant ce nom est d&eacute;j&agrave; existant';
$MESSAGE['MEDIA']['DIR_MADE'] = 'Cr&eacute;ation du dossier r&eacute;ussie avec succ&egrave;s';
$MESSAGE['MEDIA']['DIR_NOT_MADE'] = 'Impossible de cr&eacute;er le dossier';
$MESSAGE['MEDIA']['SINGLE_UPLOADED'] = 'Le fichier a &eacute;t&eacute; charg&eacute; avec succ&egrave;s';
$MESSAGE['MEDIA']['UPLOADED'] = 'Les fichiers ont &eacute;t&eacute; charg&eacute;s succ&egrave;s';

$MESSAGE['PAGES']['ADDED'] = 'Page ajout&eacute;e avec succ&egrave;s';
$MESSAGE['PAGES']['ADDED_HEADING'] = 'L\'ent&ecirc;te de la page a &eacute;t&eacute; ajout&eacute; avec succ&egrave;s';
$MESSAGE['PAGES']['PAGE_EXISTS'] = 'Une page avec le m&ecirc;me nom existe d&eacute;j&agrave;';
$MESSAGE['PAGES']['CANNOT_CREATE_ACCESS_FILE'] = 'Erreur lors de la cr&eacute;ation d\'un fichier dans le r&eacute;pertoire des pages (privil&egrave;ges insuffisants)';
$MESSAGE['PAGES']['CANNOT_DELETE_ACCESS_FILE'] = 'Erreur lors de la suppression d\'un fichier dans le r&eacute;pertoire des pages (privil&egrave;ges insuffisants)';
$MESSAGE['PAGES']['NOT_FOUND'] = 'Page introuvable';
$MESSAGE['PAGES']['SAVED'] = 'Page sauvegard&eacute;e avec succ&egrave;s';
$MESSAGE['PAGES']['SAVED_SETTINGS'] = 'Param&egrave;tres de la page sauvegard&eacute;s avec succ&egrave;s';
$MESSAGE['PAGES']['NOT_SAVED'] = 'Erreur lors de la sauvegarde de la page';
$MESSAGE['PAGES']['DELETE_CONFIRM'] = 'Etes-vous s&ucirc;r de bien vouloir supprimer la page s&eacute;lectionn&eacute;e (ainsi que ses sous-rubriques)';
$MESSAGE['PAGES']['DELETED'] = 'Page supprim&eacute;e avec succ&egrave;s';
$MESSAGE['PAGES']['RESTORED'] = 'Page restaur&eacute;e avec succ&egrave;s';
$MESSAGE['PAGES']['BLANK_PAGE_TITLE'] = 'Entrez un titre de page';
$MESSAGE['PAGES']['BLANK_MENU_TITLE'] = 'Entrez un titre de menu';
$MESSAGE['PAGES']['REORDERED'] = 'Page r&eacute;ordonn&eacute;e avec succ&egrave;s';
$MESSAGE['PAGES']['CANNOT_REORDER'] = 'Erreur lors du r&eacute;agencement des pages';
$MESSAGE['PAGES']['INSUFFICIENT_PERMISSIONS'] = 'Vous n\'avez pas les droits pour modifier cette pages';
$MESSAGE['PAGES']['INTRO_NOT_WRITABLE'] = 'Impossible d\'&eacute;crire dans le fichier d\'intro (privil&egrave;ges insuffisants)';
$MESSAGE['PAGES']['INTRO_SAVED'] = 'Page d\'intro sauvegard&eacute;e avec succ&egrave;s';
$MESSAGE['PAGES']['LAST_MODIFIED'] = 'Mis &agrave; jour par';
$MESSAGE['PAGES']['INTRO_LINK'] = 'Cliqiez ici pour modifier la page d\'intro';
$MESSAGE['PAGES']['SECTIONS_PROPERTIES_SAVED'] = 'Les propri&eacute;t&eacute;s de la rubrique ont &eacute;t&eacute; sauvegard&eacute;es avec succ&egrave;s';
$MESSAGE['PAGES']['RETURN_TO_PAGES'] = 'Retour au contenu';

$MESSAGE['GENERIC']['FILL_IN_ALL'] = 'Merci de remplir tous les champs';
$MESSAGE['GENERIC']['FILE_TYPE'] = 'Les fichiers charg&eacute;s doivent avoir les extensions suivantes : ';
$MESSAGE['GENERIC']['FILE_TYPES'] = 'Les fichiers charg&eacute;s doivent &ecirc;tre aux formats suivants : ';
$MESSAGE['GENERIC']['CANNOT_UPLOAD'] = 'Impossible de charger le fichier';
$MESSAGE['GENERIC']['ALREADY_INSTALLED'] = 'D&eacute;j&agrave; install&eacute;';
$MESSAGE['GENERIC']['NOT_INSTALLED'] = 'Not installed';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL'] = 'Impossible de d&eacute;sinstaller';
$MESSAGE['GENERIC']['CANNOT_UNZIP'] = 'Impossible de d&eacute;zipper le fichier';
$MESSAGE['GENERIC']['INSTALLED'] = 'Installation r&eacute;ussie avec succ&egrave;s';
$MESSAGE['GENERIC']['UPGRADED'] = 'Mise &agrave; jour r&eacute;ussie avec succ&egrave;s';
$MESSAGE['GENERIC']['UNINSTALLED'] = 'D&eacute;sinstallation r&eacute;ussie avec succ&egrave;s';
$MESSAGE['GENERIC']['BAD_PERMISSIONS'] = 'Impossible d\'&eacute;crire dans le r&eacute;pertoire cible';
$MESSAGE['GENERIC']['INVALID'] = 'Le fichier charg&eacute; est invalide';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE'] = 'D&eacute;sinstallation impossible : fichier en cours d\'utilisation';

$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE_TMPL'] = "<br /><br />Le {{type}} <b>{{type_name}}</b> ne sait pas &ecirc;tre supprim&eacute; comme il est en usage sur {{pages}}:<br /><br />";
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE_TMPL_PAGES'] = "page suivante;pages suivantes";
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IS_DEFAULT_TEMPLATE'] = "Le template <b>{{name}}</b> ne sait pas &ecirc;tre supprim� comme il s'agit d'un template standard!";

$MESSAGE['GENERIC']['WEBSITE_UNDER_CONSTRUCTION'] = 'Site en construction';
$MESSAGE['GENERIC']['PLEASE_CHECK_BACK_SOON'] = 'Merci de revenir plus tard';
$MESSAGE['GENERIC']['PLEASE_BE_PATIENT'] = 'Merci de patienter';
$MESSAGE['GENERIC']['ERROR_OPENING_FILE'] = 'Erreur lors de l\'ouverture du fichier';
$MESSAGE['GENERIC']['INVALID_ADDON_FILE'] = 'Invalid Website Baker installation file. Please check the *.zip format.';
$MESSAGE['GENERIC']['INVALID_LANGUAGE_FILE'] = 'Invalid Website Baker language file. Please check the text file.';

$MESSAGE['MOD_FORM']['REQUIRED_FIELDS'] = 'Vous devez renseigner les champs suivants';
$MESSAGE['MOD_FORM']['EXCESS_SUBMISSIONS'] = 'D&eacute;sol&eacute; mais vous avez utilis&eacute; ce formulaire trop de fois durant cette heure. Merci de r&eacute;essayer &agrave; l\'heure suivante';
$MESSAGE['MOD_FORM']['INCORRECT_CAPTCHA'] = 'Le num&eacute;ro de v&eacute;rification (Captcha) que vous avez entr&eacute; est incorrect. Si vous rencontrez des probl&egrave;mes quant &agrave; la lecture de ce num&eacute;ro, merci d\'envoyer un email &agrave; : '.SERVER_EMAIL.'';

$MESSAGE['ADDON']['RELOAD'] = 'Update database with information from Add-on files (e.g. after FTP upload).';
$MESSAGE['ADDON']['ERROR_RELOAD'] = 'Error while updating the Add-On information.';
$MESSAGE['ADDON']['MODULES_RELOADED'] = 'Modules r&eacute;install&eacute;s avec succ&egrave;s';
$MESSAGE['ADDON']['TEMPLATES_RELOADED'] = 'Mod&egrave;les r&eacute;install&eacute;s avec succ&egrave;s';
$MESSAGE['ADDON']['LANGUAGES_RELOADED'] = 'Langages r&eacute;install&eacute;s avec succ&egrave;s';
$MESSAGE['ADDON']['PRECHECK_FAILED'] = 'Add-on installation failed. Your system does not fulfill the requirements of this Add-on. To make this Add-on working on your system, please fix the issues summarized below.';
$MESSAGE['ADDON']['MANUAL_INSTALLATION'] = 'The module installation file "install.php" is not executed when modules are uploaded via FTP (not recommended). For those modules, you have to execute the "install.php" manually.';
$MESSAGE['ADDON']['MANUAL_INSTALLATION_WARNING'] = 'Warning: Existing module database entries will get lost. Only use this option if you experience problems with modules uploaded via FTP.';

?>