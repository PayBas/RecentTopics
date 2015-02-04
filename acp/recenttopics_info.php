<?php
/**
 *
 * @package Recent Topics Extension
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Based on the original NV Recent Topics by Joas Schilling (nickvergessen)
 *
 */

namespace paybas\recenttopics\acp;

class recenttopics_info
{
	function module()
	{
		return array(
			'filename'	=> '\paybas\recenttopics\recenttopics_module',
			'title'		=> 'RECENT_TOPICS',
			'modes'		=> array(
				'recenttopics_config' => array('title' => 'RT_CONFIG', 'auth' => 'ext_paybas/recenttopics && acl_a_board', 'cat' => array('RECENT_TOPICS')),
			),
		);
	}
}
