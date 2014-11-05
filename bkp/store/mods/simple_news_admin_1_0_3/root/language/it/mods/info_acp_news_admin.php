<?php
/**
*
* Simple News Admin
* ACP language file [Italian]
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
	'NEWS_MESSAGE_ERROR'			=> 'Errore devi inserire un messaggio',
	'ACP_NEWS_VERSION'				=> 'Versione',
	'ACP_NEWS_TITLE'				=> 'Semplice Notizie Admin',
	'ACP_NEWS_ADMIN' 				=> 'Gestisci Semplice Notizie Admin',
	'ACP_NEWS_CONFIG'				=> 'Configurazione Semplice Notizie Admin',
	'ACP_NEWS_CONFIG_EXPLAIN'		=> 'Qui puoi modificare il tuo Semplice Notizie Admin, Mod by Galandas (Rey)',
	'ACP_NEWS_ENABLED'				=> 'Impostazioni',
	'ACP_NEWS_ENABLE'				=> 'Abilita Semplice Notizie Admin',
	'ACP_NEWS_ENABLE_EXPLAIN'		=> 'Se abiliti Semplice Notizie Admin, tutti gli utenti del forum potranno vederlo.',
	'ACP_NEWS_MESSAGE'				=> 'Notizie Admin',
	'ACP_NEWS_MESSAGE_EXPLAIN'		=> 'Qui di seguito devi configurare il messaggio Admin notizie che si desidera mostrare agli utenti.',
	'ACP_NEWS_CONFIG_SUCCESS'		=> 'Semplice Notizie Admin è stato aggiornato con successo',
	'ACP_NEWS_CONFIG_ALL_SUCCESS'	=> 'Il semplice Notizie Admin con messaggio abilitato, è stato aggiornato con successo',
	'LOG_NEWS_ADMIN_UPDATED'		=> 'Semplice Notizie Admin Aggiornato',
	'NEWS_ASPECT'					=> 'Aspetto del Template',
	'NEWS_ASPECT_EXPLAIN'			=> 'Scegli quale template utilizzare tra i due messi a disposizione, il Forabg di default oppure quello alternativo Forabg2',
	'ASPECT_A'						=> 'Forabg1',
	'ASPECT_B'						=> 'Forabg2',

	'ACP_MOD_VERSION_CHECK'				=> 'Controlla aggiornamenti MOD',
	'ANNOUNCEMENT_TOPIC'				=> 'Annuncio di rilascio',
	'CURRENT_VERSION'					=> 'Versione corrente',
	'DOWNLOAD_LATEST'					=> 'Scarica l’ultima versione',
	'LATEST_VERSION'					=> 'Ultima Versione',
	'NO_ACCESS_MODS_DIRECTORY'			=> 'Impossibile aprire adm/mods, Controllare per assicurarsi che la directory esista e di aver letto i permessi per quella directory',
	'NO_INFO'							=> 'Il Server della versione non può essere contattato',
	'NOT_UP_TO_DATE'					=> '%s non è aggiornato',
	'RELEASE_ANNOUNCEMENT'				=> 'Annuncio Topic',
	'UP_TO_DATE'						=> '%s è aggiornato',
	'VERSION_CHECK'						=> 'Controlla Versione MOD',
	'VERSION_CHECK_EXPLAIN'				=> 'Verifica se i tuoi mods sono aggiornate',

	'ACP_NEWS_ADMIN_COPYRIGHT'			=> '<span style="padding-left: 260px;">Semplice Notizie Admin MOD by <a href="http://phpbb3world.com">phpBB3 World</a></span>',

	'acl_a_news'		=> array('lang' => 'Può usare Semplice Notizie Admin', 'cat' => 'misc'),
));

// Install
$lang = array_merge($lang, array(
	'INSTALL_NEWS_ADMIN'				=> 'Installa Semplice Notizie Admin',
	'INSTALL_NEWS_ADMIN_CONFIRM'		=> 'Sei pronto per installare Semplice Notizie Admin?',
    'NEWS_ADMIN_TITLE'					=> 'Semplice Notizie Admin MOD',
	'NEWS_ADMIN_TITLE_EXPLAIN'			=> 'Installa Semplice Notizie Admin modifiche al database con il metodo automatico UMIL.',
    'UMIL_NEWS_INSERT_MESS'				=> 'Messaggio inserito correttamente',
	'UNINSTALL_NEWS_ADMIN'				=> 'Disinstalla Semplice Notizie Admin',
	'UNINSTALL_NEWS_ADMIN_CONFIRM'		=> 'Sei pronto a disinstallare Semplice Notizie Admin? Tutte le impostazioni e i dati salvati da questa mod saranno rimossi!',
	'UPDATE_NEWS_ADMIN'					=> 'Aggiornare Semplice Notizie Admin',
	'UPDATE_NEWS_ADMIN_CONFIRM'			=> 'Sei pronto ad aggiornare Semplice Notizie Admin?',
));

?>