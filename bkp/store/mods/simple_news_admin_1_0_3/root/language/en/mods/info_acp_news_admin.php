<?php
/**
*
* Simple News Admin
* ACP language file [English]
*
* @package language
* @version $Id: info_acp_news_admin.php 2013-03-24 11:51:42 Galandas $
* @copyright (c) 2013 Galandas (Rey) - http://phpbb3world.com
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
	'NEWS_MESSAGE_ERROR'			=> 'Error must enter a message',
	'ACP_NEWS_VERSION'				=> 'Version',
	'ACP_NEWS_TITLE'				=> 'Simple News Admin',
	'ACP_NEWS_ADMIN' 				=> 'Manage Simple News Admin',
	'ACP_NEWS_CONFIG'				=> 'Simple News Admin Configuration',
	'ACP_NEWS_CONFIG_EXPLAIN'		=> 'Here you can edit your Simple News Admin, Mod by Galandas (Rey)',
	'ACP_NEWS_ENABLED'				=> 'Settings',
	'ACP_NEWS_ENABLE'				=> 'Enable Simple News Admin',
	'ACP_NEWS_ENABLE_EXPLAIN'		=> 'If you enable Simple News Admin, all forum users will be able to see it.',
	'ACP_NEWS_MESSAGE'				=> 'News Admin',
	'ACP_NEWS_MESSAGE_EXPLAIN'		=> 'Below you configure the news admin message you want to show to users.',
	'ACP_NEWS_CONFIG_SUCCESS'		=> 'The Simple News Admin was successfully updated',
	'ACP_NEWS_CONFIG_ALL_SUCCESS'	=> 'The Simple News Admin and the message active switches were successfully updated',
	'LOG_NEWS_ADMIN_UPDATED'		=> 'Updated the Simple News Admin',
	'NEWS_ASPECT'					=> 'Appearance Template',
	'NEWS_ASPECT_EXPLAIN'			=> 'Choose which template to use between the two made ​​available, the Forabg default or the alternative Forabg2',
	'ASPECT_A'						=> 'Forabg1',
	'ASPECT_B'						=> 'Forabg2',

	'ACP_MOD_VERSION_CHECK'				=> 'Check for MOD updates',
	'ANNOUNCEMENT_TOPIC'				=> 'Release Announcement',
	'CURRENT_VERSION'					=> 'Current Version',
	'DOWNLOAD_LATEST'					=> 'Download Latest Version',
	'LATEST_VERSION'					=> 'Latest Version',
	'NO_ACCESS_MODS_DIRECTORY'			=> 'Unable to open adm/mods, check to make sure that directory exists and you have read permission on that directory',
	'NO_INFO'							=> 'Version server could not be contacted',
	'NOT_UP_TO_DATE'					=> '%s is not up to date',
	'RELEASE_ANNOUNCEMENT'				=> 'Annoucement Topic',
	'UP_TO_DATE'						=> '%s is up to date',
	'VERSION_CHECK'						=> 'MOD Version Check',
	'VERSION_CHECK_EXPLAIN'				=> 'Checks to see if your mods are up to date',

	'ACP_NEWS_ADMIN_COPYRIGHT'			=> '<span style="padding-left: 260px;">Simple News Admin MOD by <a href="http://phpbb3world.com">phpBB3 World</a></span>',

	'acl_a_news'		=> array('lang' => 'Can use Simple News Admin', 'cat' => 'misc'),

));

// Install
$lang = array_merge($lang, array(
	'INSTALL_NEWS_ADMIN'				=> 'Install Simple News Admin',
	'INSTALL_NEWS_ADMIN_CONFIRM'		=> 'Are you ready to install the Simple News Admin?',
    'NEWS_ADMIN_TITLE'					=> 'Simple News Admin MOD',
	'NEWS_ADMIN_TITLE_EXPLAIN'			=> 'Install Simple News Admin database changes with UMIL auto method.',
    'UMIL_NEWS_INSERT_MESS'				=> 'Message inserted correctly',
	'UNINSTALL_NEWS_ADMIN'				=> 'Uninstall Simple News Admin',
	'UNINSTALL_NEWS_ADMIN_CONFIRM'		=> 'Are you ready to uninstall the Simple News Admin. All settings and data saved by this mod will be removed!',
	'UPDATE_NEWS_ADMIN'					=> 'Update Simple News Admin',
	'UPDATE_NEWS_ADMIN_CONFIRM'			=> 'Are you ready to update the Simple News Admin?',
));

?>