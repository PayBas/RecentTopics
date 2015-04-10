<?php
/**
 *
 * @package Recent Topics Extension
 * French translation by Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Based on the original NV Recent Topics by Joas Schilling (nickvergessen)
 *
 */

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'ACL_U_RT_VIEW'            => 'Peut voir les « sujets récents ».',
	'ACL_U_RT_ENABLE'          => 'Peut activer/désactiver les « sujets récents ».',
	'ACL_U_RT_ALT_LOCATION'    => 'Peut afficher les « sujets récents » sur un emplacement alternatif.',
	'ACL_U_RT_SORT_START_TIME' => 'Peut modifier le mode de tri des « sujets récents ».',
	'ACL_U_RT_UNREAD_ONLY'     => 'Peut afficher uniquement les sujets non lus dans les « sujets récents ».',
));
