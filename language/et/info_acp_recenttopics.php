<?php
/**
 *
 * @package Recent Topics Extension
 * Estonian translation by phpBBeesti (phpBBeesti.com)
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
	'RECENT_TOPICS'					=> 'Hiljutised Teemad',
	'RECENT_TOPICS_LIST'			=> 'Foorumi teemad "hiljutised teemad" laienduses',
	'RECENT_TOPICS_LIST_EXPLAIN'	=> 'Väärtus "Jah" näitab selle foorumi uusi postitusi laienduses "Hiljutised teemad".',

	'RT_CONFIG'						=> 'Seadistus',
	'RT_ANTI_TOPICS'				=> 'Välistatud teemad',
	'RT_ANTI_TOPICS_EXP'			=> 'Eraldatud "," (Näiteks: 7, 9)<br />Kui sa aga ei soovi mingit kindlat teemat välistada, siis sisesta väärtuseks 0',
	'RT_MIN_TOPIC_LEVEL'			=> 'Näita "Hiljutised teemad" laienduses ainult kindlat teema tüüpi',
	'RT_MIN_TOPIC_LEVEL_EXP'		=> 'Määra millist teemade tüüpi tuleks ainult näidata "Hiljutised teemad" laienduses. Antud seadistus näitab teemasi alates määratletud teematüübist, nt kleebis ja sellest kõrgema teema tüübiga teemad.<br />(0 = tavaline, 1 = kleebis, 2 = teadaanne, 3 = üldteadaanne)',
	'RT_NUMBER'						=> 'Hiljutiste teemade arv',
	'RT_NUMBER_EXP'					=> 'Teemade arv, mida näidatakse esilehel laienduse ühel leheküljel.',
	'RT_PAGE_NUMBER'				=> 'Lehekülgede arv',
	'RT_PAGE_NUMBER_EXP'			=> 'Saad näidata rohkem teemasi kasutades lehekülgesi laienduses. Sisesta väärtuseks 1, et keelata antud funktsioon. Kui aga sisestad väärtuseks 0, siis kasutatakse nii palju lehekülgi, et näidata kõiki teemasi foorumis (ei ole soovitatav).',
	'RT_PARENTS'					=> 'Näita vanem foorumit',
	'RT_PARENTS_EXP'				=> 'Näitab vanem foorumit hiljutistes teemades.',
	'RT_SORT_START_TIME'			=> 'Sort by topic start time',
	'RT_SORT_START_TIME_EXP'		=> 'Enable to sort recent topics by the starting time of the topic, instead of the last post time.',
	'RT_UNREADONLY'					=> 'Näita ainult lugemata teemasi',
	'RT_UNREADONLY_EXP'				=> 'Lubades selle, näidatakse ainult lugemata teemasi (ükskõik kas nad on "hiljutised" või mitte). Antud funktsioon kasutab samu seadeid (va foorumid/teemad jne.) nagu tavaline vaadegi. Märkus: see töötab ainult registreeritud kasutajatel; külalised näevad ikka tavalist vaadet.',

	'RT_VIEW_ON'					=> 'Näita "Hiljutised teemad" laiendust:',
));
