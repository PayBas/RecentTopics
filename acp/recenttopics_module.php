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
		global $config, $request, $template, $user;

		$user->add_lang('acp/common');
		$this->tpl_name = 'acp_recenttopics';
		$this->page_title = $user->lang('RECENT_TOPICS');

		$form_key = 'acp_recenttopics';
		add_form_key($form_key);

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key($form_key))
			{
				trigger_error($user->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
			}

			// variable should be '' as it is a string ("1, 2, 3928") here, not an integer.
			$rt_anti_topics = $request->variable('rt_anti_topics', '0');
			$config->set('rt_anti_topics', $rt_anti_topics);

			$rt_number = $request->variable('rt_number', 5);
			$config->set('rt_number', $rt_number);

			$rt_page_number = $request->variable('rt_page_number', 0);
			$config->set('rt_page_number', $rt_page_number);

			$rt_parents = $request->variable('rt_parents', false);
			$config->set('rt_parents', $rt_parents);

			$rt_unreadonly = $request->variable('rt_unreadonly', false);
			$config->set('rt_unreadonly', $rt_unreadonly);

			$rt_index = $request->variable('rt_index', 0);
			$config->set('rt_index', $rt_index);

			trigger_error($user->lang['CONFIG_UPDATED'] . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'RT_ANTI_TOPICS' => isset($config['rt_anti_topics']) ? $config['rt_anti_topics'] : '',
			'RT_NUMBER'      => isset($config['rt_number']) ? $config['rt_number'] : '',
			'RT_PAGE_NUMBER' => isset($config['rt_page_number']) ? $config['rt_page_number'] : '',
			'RT_PARENTS'     => isset($config['rt_parents']) ? $config['rt_parents'] : false,
			'RT_UNREADONLY'  => isset($config['rt_unreadonly']) ? $config['rt_unreadonly'] : false,

			'RT_INDEX'       => isset($config['rt_index']) ? $config['rt_index'] : false,

			'U_ACTION'       => $this->u_action,
		));
	}
}

?>