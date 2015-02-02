<?php

/**
*
* @package Recent Topics Extension
* @copyright (c) 2014 PayBas
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Swedish translation by Holger (http://www.maskinisten.net)
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
	'RECENT_TOPICS'					=> 'Aktuella ämnen',
	'RECENT_TOPICS_LIST'			=> 'Visa i "Aktuella ämnen"',
	'RECENT_TOPICS_LIST_EXPLAIN'	=> 'Aktivera denna funktion för att visa ämnen i tillägget "Aktuella ämnen".',

	'RT_CONFIG'						=> 'Inställningar',
	'RT_ANTI_TOPICS'				=> 'Uteslutna ämnen',
	'RT_ANTI_TOPICS_EXP'			=> 'Separerade med ", " (exampel: 7, 9)<br />Ange 0 om du ej vill utesluta ämnen.',
	'RT_MIN_TOPIC_LEVEL'			=> 'Minimum topic type level',
	'RT_MIN_TOPIC_LEVEL_EXP'		=> 'Determines the minimum level of the topic type to display. It will display topics of the set level, and higher.<br />(0 = normal, 1 = sticky, 2 = announcement, 3 = global announcement)',
	'RT_NUMBER'						=> 'Antal ämnen',
	'RT_NUMBER_EXP'					=> 'Antalet aktuella ämnen som ska visas på forumets startsida.',
	'RT_PAGE_NUMBER'				=> 'Sidor med aktuella ämnen',
	'RT_PAGE_NUMBER_EXP'			=> 'Du kan visa fler aktuella ämnen genom att föredela dem på flera sidor. Ange 1 för att deaktivera denna funktion. Om du anger 0 så kommer antalet sidor att anpassas till antalet ämnen i ditt forum (rekommenderas ej).',
	'RT_PARENTS'					=> 'Visa överordnade forum',
	'RT_PARENTS_EXP'				=> 'Visa överordnade forum inom ämnesraden för aktuella ämnen.',
	'RT_UNREADONLY'					=> 'Visa endast olästa ämnen',
	'RT_UNREADONLY_EXP'				=> 'Aktivera denna funktion för att endast visa olästa ämnen (oavsett om de är "aktuella" eller ej). Denna funktion använder samma inställningar (uteslutna ämnen/forum osv.) som det normala läget. Notera: detta fungerar endast för inloggade användare; gäster kommer att se den normala listan.',

	'RT_VIEW_ON'					=> 'Visa aktuella ämnen på:',
));
