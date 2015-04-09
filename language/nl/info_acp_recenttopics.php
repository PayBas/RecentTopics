<?php
/**
 *
 * @package Recent Topics Extension
 * Dutch translation by PayBas
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
	'RECENT_TOPICS'					=> 'Recente Onderwerpen',
	'RECENT_TOPICS_EXPLAIN'			=> 'On this page you can change the settings specific for the Recent Topics extension.<br /><br />Specific forums can be included or excluded by editing the respective forums in your ACP.<br />Also be sure to check your user permissions, which allow users to change some of the settings found below for themselves.',

	'RECENT_TOPICS_LIST'			=> 'Weergeven in "recent onderwerpen" lijst',
	'RECENT_TOPICS_LIST_EXPLAIN'	=> 'Moeten onderwerpen uit dit forum worden weergegeven in de "recente onderwerpen" lijst?',

	'RT_CONFIG'						=> 'Configuratie',
	'RT_ALT_LOCATION'				=> 'Display in alternative location',
	'RT_ALT_LOCATION_EXP'			=> 'Use alternative location to display recent topics.<br />Not all styles will support this, for prosilver it will be moved to the bottom of the page.',
	'RT_ANTI_TOPICS'				=> 'Uitgesloten onderwerpen',
	'RT_ANTI_TOPICS_EXP'			=> 'Gescheiden door een ", " (Voorbeeld: 7, 9)<br />Als je geen onderwerpen wilt uitsluiten, vul een 0 in.',
	'RT_MIN_TOPIC_LEVEL'			=> 'Minimum topic type level',
	'RT_MIN_TOPIC_LEVEL_EXP'		=> 'Determines the minimum level of the topic type to display. It will display topics of the set level, and higher.<br />(0 = normal, 1 = sticky, 2 = announcement, 3 = global announcement)',
	'RT_NUMBER'						=> 'Aantal recente onderwerpen',
	'RT_NUMBER_EXP'					=> 'Aantal onderwerpen dat weergegeven wordt op de forumindex.',
	'RT_PAGE_NUMBER'				=> 'Aantal recente onderwerpen pagina&#39;s',
	'RT_PAGE_NUMBER_EXP'			=> 'Je kan bij het weergeven van meerdere pagina&#39;s aan recente onderwerpen aangeven hoeveel pagina&#39;s je dit wilt tonen. Vul 1 in om deze functie uit te schakelen. Als je een 0 invoert worden er net zoveel pagina&#39;s gebruikt als nodig om alle onderwerpen weer te geven.',
	'RT_PARENTS'					=> 'Weergeven van hoofdforums',
	'RT_PARENTS_EXP'				=> 'Geeft de hoofdforums weer in de onderwerpregel van de recente onderwerpen.',
	'RT_SORT_START_TIME'			=> 'Sorteer op start-tijd',
	'RT_SORT_START_TIME_EXP'		=> 'Met deze optie worden recente onderwerpen gesorteerd op tijd van plaatsing, in plaats van de tijd van het laatste bericht.',
	'RT_UNREAD_ONLY'				=> 'Alleen ongelezen onderwerpen weergeven',
	'RT_UNREAD_ONLY_EXP'			=> 'Deze optie zorgt ervoor dat alleen de ongelezen onderwerpen worden weergegeven (ongeacht of ze recent zijn). Deze functie gebruikt dezelfde instellingen (uitsluiting van forums/onderwerpen etc.) als in de normale situatie. NB: dit werkt alleen bij ingelogde gebruikers; gasten krijgen de normale lijst te zien.',

	'RT_VIEW_ON'					=> 'Geef recente onderwerpen weer bij:',
));
