<?php
/**
 *
 * @package Recent Topics Extension
 * Russian translation by rxu
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
	'RECENT_TOPICS'					=> 'Последние темы',
	'RECENT_TOPICS_LIST'			=> 'Показывать последние темы',
	'RECENT_TOPICS_LIST_EXPLAIN'	=> 'Если включено, то темы этого форума будут отображаться в списке последних тем.',

	'RT_CONFIG'						=> 'Настройка',
	'RT_ANTI_TOPICS'				=> 'Исключённые темы',
	'RT_ANTI_TOPICS_EXP'			=> 'Разделённый запятыми список идентификаторов тем, которые не должны отображаться в списке последних тем (например: 7, 9)<br />Установите 0 для отключения данной функции.',
	'RT_MIN_TOPIC_LEVEL'			=> 'Minimum topic type level',
	'RT_MIN_TOPIC_LEVEL_EXP'		=> 'Determines the minimum level of the topic type to display. It will display topics of the set level, and higher.<br />(0 = normal, 1 = sticky, 2 = announcement, 3 = global announcement)',
	'RT_NUMBER'						=> 'Число тем в списке',
	'RT_NUMBER_EXP'					=> 'Количество тем, отображаемых на главной странице.',
	'RT_PAGE_NUMBER'				=> 'Число страниц в списке',
	'RT_PAGE_NUMBER_EXP'			=> 'Можно отображать большее число тем в списке при использовании страниц. Установите 1 для отключения данной функции. Если установлено значение 0, список будет иметь столько страниц, сколько необходимо для отображения всех тем на конференции (не рекомендуется).',
	'RT_PARENTS'					=> 'Показывать родительские форумы',
	'RT_PARENTS_EXP'				=> 'Если включено, будут отображены названия родительских подфорумов и форумов для тем в списке.',
	'RT_SORT_START_TIME'			=> 'Sort by topic start time',
	'RT_SORT_START_TIME_EXP'		=> 'Enable to sort recent topics by the starting time of the topic, instead of the last post time.',
	'RT_UNREADONLY'					=> 'Только непрочтённые',
	'RT_UNREADONLY_EXP'				=> 'Если включено, в списке последних тем будут отображены только темы с непрочтёнными сообщениями, независимо от того, являются они последними или нет. Список исключённых тем будет учтён. Данная функция работает только для зарегистрированных пользователей. Гостям будет отображён обычный список.',

	'RT_VIEW_ON'					=> 'Размещение списка последних тем:',
));
