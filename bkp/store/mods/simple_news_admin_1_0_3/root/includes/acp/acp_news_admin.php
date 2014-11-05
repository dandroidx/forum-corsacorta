<?php
/**
*
* @package Simple News Admin
* @version $Id: acp_news_admin.php 2013-03-24 11:51:42 Galandas $
* @copyright (c) 2013 Galandas (Rey) - http://phpbb3world.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* @package acp
*/
class acp_news_admin
{
	var $u_action;

	function main( $id, $mode )
	{
		global $db, $user, $auth, $template, $cache;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx, $u_action;

		include($phpbb_root_path . 'includes/functions_posting.' . $phpEx);
		include($phpbb_root_path . 'includes/functions_display.' . $phpEx);
		include($phpbb_root_path . 'includes/message_parser.' . $phpEx);

		$action = request_var('action', '');
		$id		= request_var('id', 0);

		// Form key
		add_form_key('acp_news_admin');

		$template->assign_vars(array(
			'BASE'		=> $this->u_action,
		    'NEWS_ADMIN_VERSION'	=> $config['news_admin_version'],
		));

		switch ($mode)
		{
			case 'config':
				$this->page_title = 'ACP_NEWS_TITLE';
				$this->tpl_name = 'acp_news_admin';
		        $user->add_lang(array('posting', 'ucp', 'acp/users'));

				$form_action = '';

				$sql = 'SELECT *
					FROM ' . NEWS_ADMIN_TABLE;
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				$db->sql_freeresult($result);
		       /* Preview Simple News Admin */
               $preview = generate_text_for_display($row['news_message'], $row['bbcode_uid'], $row['bbcode_bitfield'], $row['bbcode_options']);
			   
				decode_message($row['news_message'], $row['bbcode_uid']);

				$set_config = (isset($_POST['action_set_config'])) ? true : false;

				if ( $set_config )
				{
					$news_breaker		= request_var('news_breaker', 0);
					$news_aspect		= request_var('news_aspect', 0);
					$news_message		= utf8_normalize_nfc(request_var('news_message', '', true));

					$uid = $bitfield = $options = '';
					$allow_bbcode = $allow_urls = $allow_smilies = true;
					generate_text_for_storage($news_message, $uid, $bitfield, $options, $allow_bbcode, $allow_urls, $allow_smilies);

					if ( empty($news_message) )
					{
						trigger_error($user->lang['NEWS_MESSAGE_ERROR'] . adm_back_link($this->u_action), E_USER_WARNING);
					}

					$sql_ary = array(
						'news_breaker'		=> $news_breaker,
						'news_aspect'		=> $news_aspect,
						'news_message'		=> $news_message,
						'bbcode_bitfield'	=> $bitfield,
						'bbcode_uid'		=> $uid,
						'bbcode_options'	=> $options,
					);

					$db->sql_query('UPDATE ' . NEWS_ADMIN_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_ary));

					add_log('admin', 'LOG_NEWS_ADMIN_UPDATED');

					if ( $news_breaker )
					{
						trigger_error($user->lang['ACP_NEWS_CONFIG_ALL_SUCCESS'] . adm_back_link($this->u_action));
					}
					else
					{
						trigger_error($user->lang['ACP_NEWS_CONFIG_SUCCESS'] . adm_back_link($this->u_action));
					}
				}
					$template->assign_vars(array(
						'NEWS_BREAKER'		=> $row['news_breaker'],
						'NEWS_MESSAGE'		=> $row['news_message'],
						'NEWS_ASPECT'		=> $row['news_aspect'],
						'SMILEY_BLOCK'		=> generate_smilies('inline', '#'),
						'PREVIEW'	        => $preview,						
						'U_ACTION'			=> $this->u_action,
					));
			break;
		}
		// Get current and latest version
		$errstr = '';
		$errno = 0;

		$mod_version = $user->lang['NO_INFO'];
		$data = array(
			'title'				=> $user->lang['NO_INFO'],
			'download'			=> $user->lang['NO_INFO'],
			'announcement'		=> $user->lang['NO_INFO'],
		);

		// Load Version File From Host
		$file = get_remote_file('phpbb3world.com', '/modversione/', 'sna.xml', $errstr, $errno);

		if ($file)
		{

     		// next feature release
			$mod = @simplexml_load_string(str_replace('&', '&amp;', $file));
			if (isset($mod->version_check))
				{
					$row = $mod->version_check;
					$mod_version = $row->mod_version->major . '.' . $row->mod_version->minor . '.' . $row->mod_version->revision . $row->mod_version->release;

					$data = array(
						'title'				=> $row->title,
						'download'			=> $row->download,
						'announcement'		=> $row->announcement,
					);
				}

			// Determine automatic update...
			$version = str_replace(' ', '', $config['news_admin_version']);
			$version_compare = (version_compare($config['news_admin_version'], $mod_version, '<')) ? false : true;

			$template->assign_block_vars('mods', array(
				'ANNOUNCEMENT'		=> $data['announcement'],
				'CURRENT_VERSION'	=> $config['news_admin_version'],
				'DOWNLOAD'			=> $data['download'],
				'LATEST_VERSION'	=> $mod_version,
				'TITLE'				=> $data['title'],
				'UP_TO_DATE'		=> sprintf((!$version_compare) ? $user->lang['NOT_UP_TO_DATE'] : $user->lang['UP_TO_DATE'], $data['title']),
				'S_UP_TO_DATE'		=> $version_compare,
			));
		}
	}
}

?>