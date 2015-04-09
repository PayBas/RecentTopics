<?php
/**
 *
 * @package Recent Topics Extension
 * Romanian translation by dorin www.phpbb.ro
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
	'RECENT_TOPICS'					=> 'Discuţii recente',
	'RECENT_TOPICS_EXPLAIN'			=> 'On this page you can change the settings specific for the Recent Topics extension.<br /><br />Specific forums can be included or excluded by editing the respective forums in your ACP.<br />Also be sure to check your user permissions, which allow users to change some of the settings found below for themselves.',

	'RECENT_TOPICS_LIST'			=> 'Afişare pe "subiecte recente"',
	'RECENT_TOPICS_LIST_EXPLAIN'	=> 'Activați pentru a afișa subiectele acestui forum în extensia "subiecte recente".',

	'RT_CONFIG'						=> 'Configurare',
	'RT_ALT_LOCATION'				=> 'Display in alternative location',
	'RT_ALT_LOCATION_EXP'			=> 'Use alternative location to display recent topics.<br />Not all styles will support this, for prosilver it will be moved to the bottom of the page.',
	'RT_ANTI_TOPICS'				=> 'Excludere subiecte',
	'RT_ANTI_TOPICS_EXP'			=> 'ID-ul subiectelor ce vor fi excluse, separate prin ", " (Exemplu: 7, 9)<br />Dacă nu vreţi să excludeţi subiecte, introduceţi 0.',
	'RT_MIN_TOPIC_LEVEL'			=> 'Nivel minim subiect',
	'RT_MIN_TOPIC_LEVEL_EXP'		=> 'Determină nivelul minim al tipurilor de subiecte afişate. Această opţiune va determina afişarea doar a subiectelor de nivelul introdus si mai mare.<br />(0 = normal, 1 = lipicios, 2 = anunţuri, 3 = anunţuri globale)',
	'RT_NUMBER'						=> 'Subiecte recente',
	'RT_NUMBER_EXP'					=> 'Număr de subiecte afişate.',
	'RT_PAGE_NUMBER'				=> 'Pagini cu subiecte recente',
	'RT_PAGE_NUMBER_EXP'			=> 'Puteţi afişa mai multe subiecte recente folosind paginarea. Introduceţi 1 pentru dezactivarea acestei facilităţi. Dacă introduceţi 0 vor fi afişate multe pagini pentru a se afişa toate subiectele din forum (nerecomandat).',
	'RT_PARENTS'					=> 'Afişare forum parinte',
	'RT_PARENTS_EXP'				=> 'Afişarea forumului parinte în interiorul rândului cu subiectul din discuţii recente.',
	'RT_SORT_START_TIME'			=> 'Sortare după data subiectului',
	'RT_SORT_START_TIME_EXP'		=> 'Activarea sortării subiectelor recente în funcţie de data creării acestora în loc de data ultimului mesaj.',
	'RT_UNREAD_ONLY'				=> 'Afişază doar subiecte necitite',
	'RT_UNREAD_ONLY_EXP'			=> 'Activarea afişării doar a subiectelor necitite (indiferent dacă acestea sunt "recente" sau nu). Această funcție utilizează aceleași setări (cu excepția forumuri / subiecte etc.) ca în mod normal. Notă: Aceasta funcționează doar pentru utilizatorii autentificați; vizitatorii vor vedea lista normală.',

	'RT_VIEW_ON'					=> 'Afişarea subiectelor recente pe:',
));
