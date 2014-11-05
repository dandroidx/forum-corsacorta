<?php
/**
*
* auto_backup [Italian]
*
* @package language
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @ Traduzione by - Rey - phpbb3world.com
*/

/**
* DO NOT CHANGE
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

$lang = array_merge($lang, array(
	'ACP_AUTO_BACKUP_INDEX_TITLE'		=> 'Auto Backup',
	'ACP_AUTO_BACKUP'					=> 'Auto Backup',
	'ACP_AUTO_BACKUP_SETTINGS'			=> 'Auto Backup impostazioni',
	'ACP_AUTO_BACKUP_SETTINGS_EXPLAIN'	=> 'Qui è possibile impostare tutte le impostazioni predefinite per il backup automatico.
Tutti i backup verranno memorizzati nella cartella <samp>store/</samp>. A seconda della configurazione del server è possibile comprimere il file in diversi formati. È possibile ripristinare il backup nel modulo di <em>Ripristino</em>.',
	'LOG_AUTO_BACKUP_SETTINGS_CHANGED'	=> '<strong>Parametri cambiati</strong>',
	'AUTO_BACKUP_SETTINGS_CHANGED'		=> 'Auto Backup Impostazioni cambiate.',
	'AUTO_BACKUP_ENABLE'				=> 'Abilita Auto Backup',
	'AUTO_BACKUP_ENABLE_EXPLAIN'		=> 'È possibile abilitare/disabilitare il backup automatico in qualsiasi momento.',
	'AUTO_BACKUP_FREQ'					=> 'Frequenza Backup',
	'AUTO_BACKUP_FREQ_EXPLAIN'			=> 'Impostare la frequenza del backup. Il valore deve essere maggiore di 0.',
	'AUTO_BACKUP_FREQ_ERROR'			=> 'Il valore immesso per la frequenza Auto Backup non è corretto.<br />Il valore deve essere maggiore di <strong>0</strong>.',
	'AUTO_BACKUP_COPIES'				=> 'Backup memorizzati',
	'AUTO_BACKUP_COPIES_EXPLAIN'		=> 'Quanti backup verranno memorizzati sul server. 0 significa disabilitato e tutti i backup verranno memorizzati sul server.',
	'AUTO_BACKUP_COPIES_ERROR'			=> 'Il valore immesso per il backup di Archivio non è corretto.<br />Il valore deve essere uguale o superiore a <strong>0</strong>.',
	'AUTO_BACKUP_FILETYPE'				=> 'Tipo di file',
	'AUTO_BACKUP_FILETYPE_EXPLAIN'		=> 'Scegliere il tipo di file per i backup.',
	'AUTO_BACKUP_GZIP'					=> 'gzip',
	'AUTO_BACKUP_BZIP2'					=> 'bzip2',
	'AUTO_BACKUP_TEXT'					=> 'text',
	'AUTO_BACKUP_NEXT'					=> 'Backup successivo',
	'AUTO_BACKUP_NEXT_EXPLAIN'			=> 'Il backup successivo sarà effettuato il',
	'AUTO_BACKUP_TIME'					=> 'Tempo per il backup',
	'AUTO_BACKUP_TIME_EXPLAIN'			=> 'Specificare quando il backup deve essere fatto (anno-mese-giorno-ora-minuto).<br />Nota: è ​​necessario specificare un particolare punto in futuro',
	'AUTO_BACKUP_TIME_ERROR'			=> 'Il valore immesso per il tempo Auto Backup non è corretto.<br />iL Valore ore deve essere inferiore a <strong>24</strong>.<br />È Il valore minuto deve essere inferiore a <strong>60</strong>.',
	'AUTO_BACKUP_DATE_TIME'				=> 'YYYY-MM-DD-hh-mm',
	'AUTO_BACKUP_OPTIMIZE'				=> 'Ottimizza il DB prima del backup',
	'AUTO_BACKUP_OPTIMIZE_EXPLAIN'		=> 'Ottimizzare solo le tabelle non ottimizzate prima del backup del DB.',
	
));

?>