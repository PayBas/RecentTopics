<?php

/**
*
* @package Recent Topics Extension
* @copyright (c) 2014 PayBas
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Based on the original NV Recent Topics by Joas Schilling (nickvergessen); Estonian translation by www.phpbbeesti.com 10/2014
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
	'RECENT_TOPICS'					=> 'Hiljutised teemad',
	'RECENT_TOPICS_LIST'			=> 'Näita “hiljutisi teemasi”',
	'RECENT_TOPICS_LIST_EXPLAIN'	=> 'Luba näidata teemasi selles foorumis “hiljutised teemad” laienduses.',

	'RT_CONFIG'						=> 'Seadistus',
	'RT_ANTI_TOPICS'				=> 'Välistatud teemad',
	'RT_ANTI_TOPICS_EXP'			=> 'Eraldatud “, ” (Näiteks: “7, 9”)<br />Kui sa aga ei soovi välistada teemat, siis sisesta väärtuseks 0',
	'RT_NUMBER'						=> 'Hiljutised teemad',
	'RT_NUMBER_EXP'					=> 'Esilehel näidatavate teemade arv.',
	'RT_PAGE_NUMBER'				=> 'Hiljutised teemad lehekülgede kaupa',
	'RT_PAGE_NUMBER_EXP'			=> 'Saad näidata rohkem teemasi kasutades lehekülgesi. Sisesta väärtuseks 1, et keelata antud funktsioon. Kui aga sisestad väärtuseks 0, siis kasutatakse nii palju lehekülgi, et näidata kõiki teemasi foorumis (ei ole soovitatav).',
	'RT_PARENTS'					=> 'Näita vanem foorumit',
	'RT_PARENTS_EXP'				=> 'Näitab vanem foorumit hiljutistes teemades.',
	'RT_UNREADONLY'					=> 'Näita ainult lugemata teemasi',
	'RT_UNREADONLY_EXP'				=> 'Lubades selle, näidatakse ainult lugemata teemasi (ükskõik kas nad on "hiljutised" või mitte). Antud funktsioon kasutab samu seadeid (va foorumid/teemad jne.) nagu tavaline vaadegi. Märkus: see töötab ainult registreeritud kasutajatel; külalised näevad ikka tavalist vaadet.',

	'RT_VIEW_ON'					=> 'Näita hiljutistes teemades:',
));
