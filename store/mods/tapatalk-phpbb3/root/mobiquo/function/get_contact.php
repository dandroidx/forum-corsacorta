<?php
/**
*
* @copyright (c) 2009, 2010, 2011 Quoord Systems Limited
* @license http://opensource.org/licenses/gpl-2.0.php GNU Public License (GPLv2)
*
*/

defined('IN_MOBIQUO') or exit;
include_once TT_ROOT."include/classTTJson.php";
function get_contact_func($xmlrpc_params)
{
    global $db, $user, $auth, $template, $config, $phpbb_root_path, $phpEx,$table_prefix;
    
    $user->setup(array('memberlist', 'groups'));
    
    $params = php_xmlrpc_decode($xmlrpc_params);
    if (!empty($params[0]))
    {
        $user_id = intval($params[0]);
    }
    else
    {
        $user_id = $user->data['user_id'];
    }
    
    $user_id = intval($user_id);
    
    // Display a profile
    if (!$user_id) trigger_error('NO_USER');
    
	if (!$config['email_enable'])
	{
		trigger_error('EMAIL_DISABLED');
	}

	if (!$auth->acl_get('u_sendemail'))
	{
		trigger_error('NO_EMAIL');
	}

    // Get user...
    $sql = 'SELECT *
        FROM ' . USERS_TABLE . "
        WHERE user_id = '$user_id'";
    $result = $db->sql_query($sql);
    $member = $db->sql_fetchrow($result);
    $db->sql_freeresult($result);
    
    if (!$member) trigger_error('NO_USER');
    
    $user_info = array(
    	'result'             => new xmlrpcval(true, 'boolean'),
        'user_id'            => new xmlrpcval($member['user_id']),
        'display_name'       => new xmlrpcval(basic_clean($member['username']), 'base64'),
		'enc_email'          => new xmlrpcval(base64_encode(encrypt($member['user_email'], loadAPIKey()))),
    );
    
    $xmlrpc_user_info = new xmlrpcval($user_info, 'struct');
    return new xmlrpcresp($xmlrpc_user_info);
}

function sync_user_func()
{
	global $db;
	$start = intval(isset($_POST['start_uid']) ? $_POST['start_uid'] : 0);
    $limit = intval(isset($_POST['limit']) ? $_POST['limit'] : 1000);
    $api_key = trim($_POST['api_key']);
    $forum_api_key = loadAPIKey();
    if($api_key !== $forum_api_key)
    {
    	$data = array(
                'result' => false,
                'error' => 'Failed to load API key',
        );
    }
    else 
    {
	    $sql = 'SELECT COUNT(u.user_id) AS total_users,max(u.user_id) as maxid
			FROM ' . USERS_TABLE . " u
			WHERE u.user_type IN (" . USER_NORMAL . ', ' . USER_FOUNDER . ") AND u.user_id > $start";
		$result = $db->sql_query($sql);
		$arr = $db->sql_fetchrow($result);
		$total_users = $arr['total_users'];
		$maxid = $arr['maxid'];
		$db->sql_freeresult($result);
		
	    // Get users...
	    $users = array();
	    $sql = 'SELECT user_id as uid, username as display_name,user_email,user_allow_massemail as allow_admin_mails
	        FROM ' . USERS_TABLE . "
	        WHERE user_type IN (" . USER_NORMAL . ', ' . USER_FOUNDER . ") AND user_id > $start ORDER BY uid ASC LIMIT $limit";
	    $result = $db->sql_query($sql);    
	    
	    while ($member = $db->sql_fetchrow($result))
	    {
	    	$member['encrypt_email'] = base64_encode(encrypt($member['user_email'],$api_key));
	        unset($member['user_email']);
	        $users[] = $member;
	    }
	    $db->sql_freeresult($result);
	    $data = array(
	        'result' => true,
	        'total' => $total_users,
	        'maxid' => $maxid,
	        'users' => $users,
	    );
    }
    $response = function_exists('json_encode') ? json_encode($data) : serialize($data);
    echo $response;
    exit;
}

function keyED($txt,$encrypt_key)
{
    $encrypt_key = md5($encrypt_key);
    $ctr=0;
    $tmp = "";
    for ($i=0;$i<strlen($txt);$i++)
    {
        if ($ctr==strlen($encrypt_key)) $ctr=0;
        $tmp.= substr($txt,$i,1) ^ substr($encrypt_key,$ctr,1);
        $ctr++;
    }
    return $tmp;
}
 
function encrypt($txt,$key)
{
    srand((double)microtime()*1000000);
    $encrypt_key = md5(rand(0,32000));
    $ctr=0;
    $tmp = "";
    for ($i=0;$i<strlen($txt);$i++)
    {
        if ($ctr==strlen($encrypt_key)) $ctr=0;
        $tmp.= substr($encrypt_key,$ctr,1) .
        (substr($txt,$i,1) ^ substr($encrypt_key,$ctr,1));
        $ctr++;
    }
    return keyED($tmp,$key);
}

function loadAPIKey()
{
    global $config;
    $mobi_api_key = isset($config['tapatalk_push_key']) ? $config['tapatalk_push_key'] : '';
    if(empty($mobi_api_key))
    {   
        $boardurl = $mybb->settings['bburl'];
        $boardurl = urlencode($boardurl);
        $response = getContentFromRemoteServer("http://directory.tapatalk.com/au_reg_verify.php?url=$boardurl", 10, $error);
        if($response)
        {
            $result = TTJson::decode($response, true);
            if(isset($result) && isset($result['result']))
            {
                $mobi_api_key = $result['api_key'];
                return $mobi_api_key;
            }
        } 
        return false;    
    }
    return $mobi_api_key;
}