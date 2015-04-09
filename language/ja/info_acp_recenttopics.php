<?php
/**
 *
 * @package Recent Topics Extension
 * Japanese translation by momo-i
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
	'RECENT_TOPICS'					=> '新着トピック',
	'RECENT_TOPICS_EXPLAIN'			=> 'On this page you can change the settings specific for the Recent Topics extension.<br /><br />Specific forums can be included or excluded by editing the respective forums in your ACP.<br />Also be sure to check your user permissions, which allow users to change some of the settings found below for themselves.',

	'RECENT_TOPICS_LIST'			=> '"新着トピック" に表示',
	'RECENT_TOPICS_LIST_EXPLAIN'	=> '"新着トピック"拡張機能でこのフォーラム内にトピックを表示することを許可します。',

	'RT_CONFIG'						=> '設定',
	'RT_ALT_LOCATION'				=> 'Display in alternative location',
	'RT_ALT_LOCATION_EXP'			=> 'Use alternative location to display recent topics.<br />Not all styles will support this, for prosilver it will be moved to the bottom of the page.',
	'RT_ANTI_TOPICS'				=> '除外するトピック',
	'RT_ANTI_TOPICS_EXP'			=> '除外するトピックのIDをカンマ", "で区切ります (例: 7, 9)<br />トピックを除外したくない場合、0を入力します。',
	'RT_MIN_TOPIC_LEVEL'			=> 'トピックタイプの最大レベル',
	'RT_MIN_TOPIC_LEVEL_EXP'		=> '表示するトピックタイプの最大レベルを決定します。それだけで設定されたレベル以上のトピックが表示されます。<br />(0 = 通常, 1 = 注目, 2 = 告知, 3 = 全体告知)',
	'RT_NUMBER'						=> '新着トピック数',
	'RT_NUMBER_EXP'					=> '表示するトピック数です。',
	'RT_PAGE_NUMBER'				=> '新着トピックページ数',
	'RT_PAGE_NUMBER_EXP'			=> 'ページネーションを使用して多くの新着トピックを表示できます。この機能を無効にするには 1 を入力します。0 を入力した場合、掲示板の全てのトピックを表示するために必要なだけのページが存在するでしょう。(お勧めしません)',
	'RT_PARENTS'					=> '上位フォーラムを表示',
	'RT_PARENTS_EXP'				=> '新着トピック行の中に上位フォーラムを表示します。',
	'RT_SORT_START_TIME'			=> 'トピック開始時間でソート',
	'RT_SORT_START_TIME_EXP'		=> 'トピックの最新投稿時間の代わりに開始時間で新着トピックのソートを可能にします。',
	'RT_UNREAD_ONLY'				=> '未読トピックのみ表示',
	'RT_UNREAD_ONLY_EXP'			=> '未読トピックのみの表示を有効にします。(それらが"新着"であるか否か)この機能は通常モードとして同じ設定(フォーラム/トピックなどを除いて)を使用します。注: これはログイン済みユーザーにのみ動作し、ゲストは通常のリストを取得します。',

	'RT_VIEW_ON'					=> '新着トピックを表示:',
));
