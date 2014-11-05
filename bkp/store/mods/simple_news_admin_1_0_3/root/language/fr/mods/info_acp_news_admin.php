<?php
/**
*
* Simple News Admin
* ACP language file [French]
*
* @package language
* @version $Id: info_acp_news_admin.php 2013-03-24 11:51:42 Galandas $
* @copyright (c) 2013 Galandas (Rey) - http://phpbb3world.com
* @copyright (c) French translation by Geolim4 2013 - http://geolim4.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » „ “ — …
//

$lang = array_merge($lang, array(
	'NEWS_MESSAGE_ERROR'			=> 'Vous devez entrer un message',
	'ACP_NEWS_VERSION'				=> 'Version',
	'ACP_NEWS_TITLE'				=> 'Annonce Admin simplifiée',
	'ACP_NEWS_ADMIN' 				=> 'Gérer l’annonce Admin simplifiée',
	'ACP_NEWS_CONFIG'				=> 'Configuration de l’annonce Admin simplifiée',
	'ACP_NEWS_CONFIG_EXPLAIN'		=> 'Ici vous pouvez éditer votre annonce Admin simplifiée, Mod par Galandas (Rey)',
	'ACP_NEWS_ENABLED'				=> 'Réglages',
	'ACP_NEWS_ENABLE'				=> 'Activer l’annonce Admin simplifiée',
	'ACP_NEWS_ENABLE_EXPLAIN'		=> 'Si Annonce simplifiée habilite les utilisateurs verront verront le message dans le forum.',
	'ACP_NEWS_MESSAGE'				=> 'Annonce Admin',
	'ACP_NEWS_MESSAGE_EXPLAIN'		=> 'Ci-dessous vous pouvez configurer l’annonce Admin simplifiée que vous souaitez afficher aux utilisateurs.',
	'ACP_NEWS_CONFIG_SUCCESS'		=> 'L’annonce Admin simplifié à été mis à jour avec succès',
	'ACP_NEWS_CONFIG_ALL_SUCCESS'	=> 'Mise à jour de tout les paramètres de l’annonce Admin simplifié terminée avec succès',
	'LOG_NEWS_ADMIN_UPDATED'		=> 'Mise à jour des paramètres de l’annonce Admin simplifiée',
	'NEWS_ASPECT'					=> 'Apparence du Template',
	'NEWS_ASPECT_EXPLAIN'			=> 'Choisissez le template à utiliser entre les deux mis à disposition, le défaut Forabg ou l’autre Forabg2',
	'ASPECT_A'						=> 'Forabg1',
	'ASPECT_B'						=> 'Forabg2',

	'ACP_MOD_VERSION_CHECK'				=> 'Vérifier les mises à jour de MOD',
	'ANNOUNCEMENT_TOPIC'				=> 'Annonce de publication',
	'CURRENT_VERSION'					=> 'Version actuelle',
	'DOWNLOAD_LATEST'					=> 'Télécharger la dernière version',
	'LATEST_VERSION'					=> 'Dernière Version',
	'NO_ACCESS_MODS_DIRECTORY'			=> 'Impossible d’ouvrir adm/mods, assurez-vous que ce répertoire existe et que vous avez la permission de lecture sur ce répertoire',
	'NO_INFO'							=> 'Serveur de version n’a pas pu être contacté',
	'NOT_UP_TO_DATE'					=> '%s est mis à jour',
	'RELEASE_ANNOUNCEMENT'				=> 'Annoucement Topic',
	'UP_TO_DATE'						=> '%s est à jour',
	'VERSION_CHECK'						=> 'MOD Vérification de la version',
	'VERSION_CHECK_EXPLAIN'				=> 'Vérifie si les mods sont à jour',

	'ACP_NEWS_ADMIN_COPYRIGHT'			=> '<span style="padding-left: 260px;">Simple Nouvelles Admin MOD by <a href="http://phpbb3world.com">phpBB3 World</a></span>',

	'acl_a_news'		=> array('lang' => 'Peut utiliser simplifiée Nouvelles Admin', 'cat' => 'misc'),

));

// Install
$lang = array_merge($lang, array(
	'INSTALL_NEWS_ADMIN'				=> 'Installez Simple Nouvelles Admin',
	'INSTALL_NEWS_ADMIN_CONFIRM'		=> 'Êtes-vous prêt à installer le simple Nouvelles admin?',
    'NEWS_ADMIN_TITLE'					=> 'Simple Nouvelles Admin MOD',
	'NEWS_ADMIN_TITLE_EXPLAIN'			=> 'Installez Actualités base de données simple admin changements à la méthode auto Umil.',
    'UMIL_NEWS_INSERT_MESS'				=> 'Message inséré correctement',
	'UNINSTALL_NEWS_ADMIN'				=> 'Désinstaller Simple Nouvelles Admin',
	'UNINSTALL_NEWS_ADMIN_CONFIRM'		=> 'Êtes-vous prêt pour désinstaller le simple Nouvelles admin. Tous les paramètres et les données enregistrées par ce mod seront supprimées!',
	'UPDATE_NEWS_ADMIN'					=> 'Mise à jour simple Nouvelles Admin',
	'UPDATE_NEWS_ADMIN_CONFIRM'			=> 'Êtes-vous prêt à mettre à jour le Simple Nouvelles admin?',
));

?>