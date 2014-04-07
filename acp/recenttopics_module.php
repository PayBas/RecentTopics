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

/**
* @package acp
*/
class recenttopics_module
{
	public $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		$user->add_lang('acp/common');
		$this->tpl_name = 'acp_recenttopics';
		$this->page_title = $user->lang['RECENT_TOPICS_EXT'];
		add_form_key('acp_recenttopics');

		if (isset($_POST['submit']))
		{
			if (!check_form_key('acp_recenttopics'))
			{
				trigger_error('FORM_INVALID');
			}

			// request_var should be '' as it is a string ("1, 2, 3928") here, not an integer.
			set_config('rt_anti_topics', request_var('rt_anti_topics', '0'));

			set_config('rt_number', request_var('rt_number', 5));
			set_config('rt_page_number', request_var('rt_page_number', 0));
			set_config('rt_parents', request_var('rt_parents', false));
			set_config('rt_index', request_var('rt_index', 0));

			trigger_error($user->lang['RT_SAVED'] . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'RT_VERSION'			=> 'v' . $config['rt_version'],
			'RT_ANTI_TOPICS'		=> $config['rt_anti_topics'],
			'RT_NUMBER'				=> $config['rt_number'],
			'RT_PAGE_NUMBER'		=> $config['rt_page_number'],
			'RT_PARENTS'			=> $config['rt_parents'],
			'RT_INDEX'				=> $config['rt_index'],
			'U_ACTION'				=> $this->u_action,
		));
	}
}

?>