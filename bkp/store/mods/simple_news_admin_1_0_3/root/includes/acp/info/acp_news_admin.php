<?php
/**
*
* @package Simple News Admin
* @version $Id: acp_news_admin.php 2013-03-24 11:51:42 Galandas $
* @copyright (c) 2013 Galandas (Rey) - http://phpbb3world.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package module_install
*/
class acp_news_admin_info
{
	function module()
	{		
		return array(
			'filename'		=> 'acp_news_admin',
			'title'			=> 'ACP_NEWS_TITLE',
			'version'		=> '1.0.2',
			'modes'			=> array(
			'config'	=> array('title' => 'ACP_NEWS_ADMIN', 'auth' => 'acl_a_news', 'cat' => array('ACP_NEWS_ADMIN')),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
	
}

?>