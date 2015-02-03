<?php

/**
*
* @package Recent Topics Extension
* @copyright (c) 2014 PayBas
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Based on the original NV Recent Topics by Joas Schilling (nickvergessen)
*
* Polish translation by INVENTEA (https://inventea.com).
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
	'RECENT_TOPICS'					=> 'Najnowsze Tematy',
	'RECENT_TOPICS_LIST'			=> 'Wyświetlaj najnowsze tematy',
	'RECENT_TOPICS_LIST_EXPLAIN'	=> 'Jeśli wybrano <samp>Tak</samp>, tematy zamieszczone na tym forum będą wyświetlane na liście najnowszych tematów.',

	'RT_CONFIG'						=> 'Ustawienia',
	'RT_ANTI_TOPICS'				=> 'Pomiń tematy',
	'RT_ANTI_TOPICS_EXP'			=> 'Podaj identyfikatory tematów do pominięcia, oddzielając je przecinkiem np. <samp>7, 9</samp>. Wartość zero (0) wyłącza tę funkcję.',
	'RT_MIN_TOPIC_LEVEL'			=> 'Minimalny typ tematu',
	'RT_MIN_TOPIC_LEVEL_EXP'		=> 'Tylko tematy o podanym i większym typie będą wyświetlane na liście najnowszych tematów (<samp>0</samp> – zwykły temat, <samp>1</samp> – przyklejony temat, <samp>2</samp> – ogłoszenie, <samp>3</samp> – ogłoszenie globalne).',
	'RT_NUMBER'						=> 'Liczba najnowszych tematów na stronie',
	'RT_NUMBER_EXP'					=> 'Limit najnowszych tematów wyświetlanych na każdej stronie.',
	'RT_PAGE_NUMBER'				=> 'Maksymalna liczba stron',
	'RT_PAGE_NUMBER_EXP'			=> 'Limit stron, na które podzielona zostanie lista najnowszych tematów. Wartość jeden (1) wyłącza tę funkcję. Wartość zero (0) spowoduje wyświetlenie tylu stron, ile potrzeba do wyświetlenia wszystkich tematów na forum (niezalecane).',
	'RT_PARENTS'					=> 'Wyświetlaj macierzyste fora',
	'RT_PARENTS_EXP'				=> 'Włączenie tej funkcji spowoduje wyświetlanie nazw macierzystych forów jako odnośników pod nazwą tematu.',
	'RT_SORT_START_TIME'			=> 'Sort by topic start time',
	'RT_SORT_START_TIME_EXP'		=> 'Enable to sort recent topics by the starting time of the topic, instead of the last post time.',
	'RT_UNREADONLY'					=> 'Wyświetlaj tylko nieprzeczytane tematy',
	'RT_UNREADONLY_EXP'				=> 'Włączenie tej funkcji spowoduje wyświetlanie na liście tylko nieprzeczytanych tematów. Ta opcja wykorzystuje te same ustawienia co tryb najnowszych tematów. Informacja: Opcja działa tylko dla zalogowanych użytkowników. Dla gości nadal jest wyświetlana lista najnowszych tematów.',

	'RT_VIEW_ON'					=> 'Wyświetlanie najnowszych tematów',
));
