<?php
/**
 *
 * @package Recent Topics Extension
 * English translation by PayBas
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
	'ACL_U_RT_VIEW'            => 'Recent Topics: view (master)',
	'ACL_U_RT_ENABLE'          => 'Recent Topics: enable or disable',
	'ACL_U_RT_ALT_LOCATION'    => 'Recent Topics: use alternative display location',
	'ACL_U_RT_SORT_START_TIME' => 'Recent Topics: change sort order',
	'ACL_U_RT_UNREAD_ONLY'     => 'Recent Topics: use unread-only mode',
));
