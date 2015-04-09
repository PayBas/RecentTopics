<?php
/**
 *
 * @package Recent Topics Extension
 * German translation by Joas Schilling (nickvergessen)
 *
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
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
	'RECENT_TOPICS_EXPLAIN'			=> 'On this page you can change the settings specific for the Recent Topics extension.<br /><br />Specific forums can be included or excluded by editing the respective forums in your ACP.<br />Also be sure to check your user permissions, which allow users to change some of the settings found below for themselves.',

	'RECENT_TOPICS_LIST'			=> 'In „aktuelle Themen“ anzeigen',
	'RECENT_TOPICS_LIST_EXPLAIN'	=> 'Sollen Themen aus diesem Forum in „aktuelle Themen“ angezeigt werden?',

	'RT_CONFIG'						=> 'Konfiguration von aktuelle Themen',
	'RT_ALT_LOCATION'				=> 'Display in alternative location',
	'RT_ALT_LOCATION_EXP'			=> 'Use alternative location to display recent topics.<br />Not all styles will support this, for prosilver it will be moved to the bottom of the page.',
	'RT_ANTI_TOPICS'				=> 'Ausgeschlossene Themen',
	'RT_ANTI_TOPICS_EXP'			=> 'Mit „, “ trennen (Beispiel: 7, 9)<br />Wenn kein Thema ausgeschlossen werden soll „1“ eingeben. Wenn du „0“ eingibst, werden so viele Seiten angezeigt, wie benötigt werden, um alle Themen auszugeben.',
	'RT_MIN_TOPIC_LEVEL'			=> 'Minimaler Thementyp',
	'RT_MIN_TOPIC_LEVEL_EXP'		=> 'Definiert das Minimum eines Thementyps, der angezeigt wird. Wenn du ein Thementyp angibst, werden nur Themen dieses oder eines höheren Typs angezeigt.<br />(0 = Normal, 1 = Wichtig, 2 = Ankündigung, 3 = Globale Ankündigung)',
	'RT_NUMBER'						=> 'Aktuelle Themen',
	'RT_NUMBER_EXP'					=> 'Anzahl der Themen, die angezeigt werden',
	'RT_PAGE_NUMBER'				=> 'Seitenanzahl „Aktuelle Themen“',
	'RT_PAGE_NUMBER_EXP'			=> 'Du kannst weitere aktuelle Themen mit einer kleinen Seitennavigation anzeigen lassen. Um das Feature zu deaktivieren einfach „0“ eintragen.',
	'RT_PARENTS'					=> 'Übergeordnete Foren anzeigen',
	'RT_PARENTS_EXP'				=> 'Übergeordnete Foren in der Liste der aktuellen Themen anzeigen.',
	'RT_SORT_START_TIME'			=> 'Nach Themen Startzeit sortieren',
	'RT_SORT_START_TIME_EXP'		=> 'Wenn diese Option aktiviert ist, werden die Themen nach dem Datum des ersten Beitrags anstelle des letzten Beitrags sortiert.',
	'RT_UNREAD_ONLY'				=> 'Nur ungelesene Themen anzeigen',
	'RT_UNREAD_ONLY_EXP'			=> 'Diese Option zeigt nur ungelesene Themen an (egal ob diese aktuell sind oder nicht). Diese Funktion nutzt die gleichen Einstellungen (Ausgeschlossene Foren / Themen, etc.) wie die normale Version. Hinweis: diese Funktion steht nur eingeloggten Benutzern zur Verfügung; Gäste sehen die normale „Aktuelle Themen“ Liste.',

	'RT_VIEW_ON'					=> 'Recent topics anzeigen:',
));
