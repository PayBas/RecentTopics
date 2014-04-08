<?php

/**
*
* @package Recent Topics Extension
* @copyright (c) 2014 PayBas
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Based on the original NV Recent Topics by Joas Schilling (nickvergessen)
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

$lang = array_merge($lang, array(
	'RECENT_TOPICS'					=> 'Aktuelle Themen',
	'RECENT_TOPICS_EXT'				=> 'Aktuelle Themen',
	'RECENT_TOPICS_LIST'			=> 'unter “aktuelle Themen” anzeigen',
	'RECENT_TOPICS_LIST_EXPLAIN'	=> 'Sollen Themen aus diesem Forum “aktuelle Themen” angezeigt werden?',

	'RT_CONFIG'						=> 'Konfiguration von aktuelle Themen',
	'RT_ANTI_TOPICS'				=> 'ausgeschlossene Themen',
	'RT_ANTI_TOPICS_EXP'			=> 'Mit “, ” trennen (Beispiel: “7, 9”)<br />Wenn kein Thema ausgeschlossen werden soll 1 eingeben. Wenn du 0 eingibst, werden soviele Seiten angezeigt, wie benötigt werden um alle Themen auszugeben.',
	'RT_NUMBER'						=> 'aktuelle Themen',
	'RT_NUMBER_EXP'					=> 'Anzahl der Themen die angezeigt werden',
	'RT_PAGE_NUMBER'				=> 'aktuelle Themen Seitenanzahl',
	'RT_PAGE_NUMBER_EXP'			=> 'Du kannst weiter aktuelle Themen mit einer kleinen Seitennavigation anzeigen lassen. Um das Feature zu deaktivieren einfach 0 eintragen.',
	'RT_PARENTS'					=> 'Übergeordnete Foren anzeigen',
	//'RT_PARENTS_EXP'				=> '',
	//'RT_UNREADONLY'					=> '',
	//'RT_UNREADONLY_EXP'				=> '',

	'RT_SAVED'						=> 'Einstellungen gespeichert.',

	'RT_VIEW_ON'		=> 'recent topics anzeigen',
	'RT_MEMBERLIST'		=> 'Mitgliederliste',
	'RT_INDEX'			=> 'Index',
	'RT_SEARCH'			=> 'Suche',
	'RT_FAQ'			=> 'FAQ',
	'RT_MCP'			=> 'MCP (Moderations-Bereich)',
	'RT_UCP'			=> 'UCP (Persönlicher-Bereich)',
	'RT_VIEWFORUM'		=> 'Forum',
	'RT_VIEWTOPIC'		=> 'Thema',
	'RT_VIEWONLINE'		=> 'Online-Anzeige',
	'RT_POSTING'		=> 'Posten',
	'RT_REPORT'			=> 'Beitrag melden',
	'RT_OTHERS'			=> 'andere Seiten',
));

?>