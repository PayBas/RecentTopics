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

namespace paybas\recenttopics\acp;

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
    exit;
}

class recenttopics_info
{
	function module()
	{
		return array(
			'filename'	=> '\paybas\recenttopics\recenttopics_module',
			'title'		=> 'RECENT_TOPICS_EXT',
			'version'	=> '2.0.0',
			'modes'		=> array(
				'recenttopics_config' => array('title' => 'RT_CONFIG', 'auth' => 'ext_paybas/recenttopics && acl_a_board', 'cat' => array('RECENT_TOPICS_EXT')),
			),
		);
	}
}

?>