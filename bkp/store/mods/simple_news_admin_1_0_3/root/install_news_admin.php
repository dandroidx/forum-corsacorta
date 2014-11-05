<?php
/**
 *
 * @author Galandas (Rey) 
 * @version $Id$
 * @copyright (c) 2013 phpbb3world.com
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 */

/**
 * @ignore
 */
define('UMIL_AUTO', true);
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);

include($phpbb_root_path . 'common.' . $phpEx);
$user->session_begin();
$auth->acl($user->data);
$user->setup();


if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
	trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

// The name of the mod to be displayed during installation.
$mod_name = 'ACP_NEWS_TITLE';

/*
* The name of the config variable which will hold the currently installed version
* UMIL will handle checking, setting, and updating the version itself.
*/
$version_config_name = 'news_admin_version';


// The language file which will be included when installing
$language_file = 'mods/info_acp_news_admin';


/*
* Optionally we may specify our own logo image to show in the upper corner instead of the default logo.
* $phpbb_root_path will get prepended to the path specified
* Image height should be 50px to prevent cut-off or stretching.
*/
//$logo_img = 'styles/prosilver/imageset/site_logo.gif';

/*
* The array of versions and actions within each.
* You do not need to order it a specific way (it will be sorted automatically), however, you must enter every version, even if no actions are done for it.
*
* You must use correct version numbering.  Unless you know exactly what you can use, only use X.X.X (replacing X with an integer).
* The version numbering must otherwise be compatible with the version_compare function - http://php.net/manual/en/function.version-compare.php
*/
$versions = array(
	// Version 1.0.0
	'1.0.0' => array(
		// Add the tables
		'table_add' => array(
			array($table_prefix . 'news_admin', array(
					'COLUMNS'		=> array(
						'news_breaker'			=> array('TINT:1', 0),
						'news_message'			=> array('MTEXT_UNI', ''),
						'bbcode_bitfield'		=> array('VCHAR', ''),
						'bbcode_uid'			=> array('VCHAR:8', ''),
						'bbcode_options'		=> array('UINT:4', 0),
					),
				),
			),
		),
		// add permission settings
		'permission_add' => array(
			array('a_news', true),
		),
		// Add the modules to the ACP
		'module_add' => array(
			// Add the ACP_CAT_DOT_MODS
			array('acp', 'ACP_CAT_DOT_MODS', 'ACP_NEWS_TITLE'),

			// Add the module
			array('acp', 'ACP_NEWS_TITLE', array(
					'module_basename'	=> 'news_admin',
					'module_langname'	=> 'ACP_NEWS_ADMIN',
					'module_mode'		=> 'config',
					'module_auth'		=> 'acl_a_news',
				),
			),
		),
		'custom' => 'early_vers_1_0_0',
		'cache_purge' => array('', 'template', 'theme'),	
	),
	// Version 1.0.1 No change
	'1.0.1'	=> array(),
	
	// Version 1.0.2 Added subsilver2 style
	'1.0.2'	=> array(),
	
	// Version 1.0.3 Added choice of template
	'1.0.3' => array(
		// Add the column table
		'table_column_add' => array(
			array(NEWS_ADMIN_TABLE,  'news_aspect',		array('TINT:1', 0)),
		),
	),	
);

// Include the UMIF Auto file and everything else will be handled automatically.
include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);

/*
* Function first time installation
*/
function early_vers_1_0_0($action, $version)
{
	global $db, $table_prefix, $umil;

	switch ($action)
	{
		case 'install' :    
			// Version 1.0.0
			if ($umil->table_exists($table_prefix . 'config'))
			{
				$sql_ary = array();

				$sql_ary[] = array('config_name' => 'news_admin_version',	'config_value' => '1.0.0',);
				$db->sql_multi_insert($table_prefix . 'config ', $sql_ary);
			}

			if ($umil->table_exists($table_prefix . 'news_admin'))
			{
				$sql_ary = array();

				$sql_ary[] = array(
					'news_breaker'		=> '1', 
					'news_message'		=> 'The mod was created by phpbb3world.com',
				);

				$db->sql_multi_insert($table_prefix . 'news_admin', $sql_ary);
			}  
		return 'UMIL_NEWS_INSERT_MESS';	
		break;

	}
}

?>