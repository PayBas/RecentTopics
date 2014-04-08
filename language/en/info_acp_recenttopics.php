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
	'RECENT_TOPICS_EXT'				=> 'Recent Topics',
	'RECENT_TOPICS_LIST'			=> 'View on “recent topics”',
	'RECENT_TOPICS_LIST_EXPLAIN'	=> 'Shall topics of this forum be displayed on the index in “recent topics”?',

	'RT_CONFIG'						=> 'Configuration',
	'RT_ANTI_TOPICS'				=> 'Excluded topics',
	'RT_ANTI_TOPICS_EXP'			=> 'Seperated by “, ” (Example: “7, 9”)<br />If you don’t want to exclude a topic, just enter 0.',
	'RT_NUMBER'						=> 'Recent topics',
	'RT_NUMBER_EXP'					=> 'Number of topics displayed on the index.',
	'RT_PAGE_NUMBER'				=> 'Recent topics pages',
	'RT_PAGE_NUMBER_EXP'			=> 'You can display some more recent topics on a little pagination. Just enter 1 to disable this feature. If you enter 0 there will be so much pages as needed to display all topics.',
	'RT_PARENTS'					=> 'Display parent forums',
	'RT_PARENTS_EXP'				=> 'Display parent forums inside the topic row of recent topics.',
	'RT_UNREADONLY'					=> 'Only display unread topics',
	'RT_UNREADONLY_EXP'				=> 'Will display only the unread topics (whether they are "recent" or not). This function uses the same settings (excluding forums/topics etc.) as normal mode.',

	'RT_SAVED'						=> 'Saved adjustments.',

	'RT_VIEW_ON'		=> 'view recent topics on',
	'RT_MEMBERLIST'		=> 'Memberlist',
	'RT_INDEX'			=> 'Index',
	'RT_SEARCH'			=> 'Search',
	'RT_FAQ'			=> 'FAQ',
	'RT_MCP'			=> 'MCP (Moderator Control Panel)',
	'RT_UCP'			=> 'UCP (User Control Panel)',
	'RT_VIEWFORUM'		=> 'Viewforum',
	'RT_VIEWTOPIC'		=> 'Viewtopic',
	'RT_VIEWONLINE'		=> 'Viewonline',
	'RT_POSTING'		=> 'Posting',
	'RT_REPORT'			=> 'Reporting',
	'RT_OTHERS'			=> 'other Site',
));

?>