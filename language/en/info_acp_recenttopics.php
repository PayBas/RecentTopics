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
	'RECENT_TOPICS'					=> 'Recent Topics',
	'RECENT_TOPICS_LIST'			=> 'Display on "recent topics"',
	'RECENT_TOPICS_LIST_EXPLAIN'	=> 'Enable to display topics in this forum in the "recent topics" extension.',

	'RT_CONFIG'						=> 'Configuration',
	'RT_ANTI_TOPICS'				=> 'Excluded topics',
	'RT_ANTI_TOPICS_EXP'			=> 'The IDs of topics to exclude, seperated by ", " (Example: 7, 9)<br />If you don&#39;t want to exclude a topic, just enter 0.',
	'RT_MIN_TOPIC_LEVEL'			=> 'Minimum topic type level',
	'RT_MIN_TOPIC_LEVEL_EXP'		=> 'Determines the minimum level of the topic-type to display. It will only display topics of the set level, and higher.<br />(0 = normal, 1 = sticky, 2 = announcement, 3 = global announcement)',
	'RT_NUMBER'						=> 'Recent topics',
	'RT_NUMBER_EXP'					=> 'Number of topics to display.',
	'RT_PAGE_NUMBER'				=> 'Recent topics pages',
	'RT_PAGE_NUMBER_EXP'			=> 'You can display more recent topics using pagination. Just enter 1 to disable this feature. If you enter 0 there will be as much pages as needed to display all topics of your forum (not advised).',
	'RT_PARENTS'					=> 'Display parent forums',
	'RT_PARENTS_EXP'				=> 'Display parent forums inside the topic row of recent topics.',
	'RT_UNREADONLY'					=> 'Only display unread topics',
	'RT_UNREADONLY_EXP'				=> 'Enable to only display unread topics (whether they are "recent" or not). This function uses the same settings (excluding forums/topics etc.) as normal mode. Note: this only works for logged-in users; guests will get the normal list.',

	'RT_VIEW_ON'					=> 'Display recent topics on:',
));
