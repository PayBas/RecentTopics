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

class recenttopics_module
{
	public $u_action;

	function main($id, $mode)
	{
		global $config, $phpbb_extension_manager, $request, $template, $user;

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

			$rt_min_topic_level = $request->variable('rt_min_topic_level', 0);
			$config->set('rt_min_topic_level', $rt_min_topic_level);

			$rt_number = $request->variable('rt_number', 5);
			$config->set('rt_number', $rt_number);

			$rt_page_number = $request->variable('rt_page_number', 0);
			$config->set('rt_page_number', $rt_page_number);

			$rt_parents = $request->variable('rt_parents', false);
			$config->set('rt_parents', $rt_parents);

			$rt_unreadonly = $request->variable('rt_unreadonly', false);
			$config->set('rt_unreadonly', $rt_unreadonly);

			$rt_sort_start_time = $request->variable('rt_sort_start_time', false);
			$config->set('rt_sort_start_time', $rt_sort_start_time);

			$rt_index = $request->variable('rt_index', 0);
			$config->set('rt_index', $rt_index);

			// Enable on other extension pages?
			$rt_on_newspage = $request->variable('rt_on_newspage', 0);
			$config->set('rt_on_newspage', $rt_on_newspage);

			trigger_error($user->lang['CONFIG_UPDATED'] . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'RT_ANTI_TOPICS'     => isset($config['rt_anti_topics']) ? $config['rt_anti_topics'] : '',
			'RT_MIN_TOPIC_LEVEL' => isset($config['rt_min_topic_level']) ? $config['rt_min_topic_level'] : '',
			'RT_NUMBER'          => isset($config['rt_number']) ? $config['rt_number'] : '',
			'RT_PAGE_NUMBER'     => isset($config['rt_page_number']) ? $config['rt_page_number'] : '',
			'RT_PARENTS'         => isset($config['rt_parents']) ? $config['rt_parents'] : false,
			'RT_UNREADONLY'      => isset($config['rt_unreadonly']) ? $config['rt_unreadonly'] : false,
			'RT_SORT_START_TIME' => isset($config['rt_sort_start_time']) ? $config['rt_sort_start_time'] : false,

			'RT_INDEX'           => isset($config['rt_index']) ? $config['rt_index'] : false,
			'RT_ON_NEWSPAGE'     => isset($config['rt_on_newspage']) ? $config['rt_on_newspage'] : false,
			'S_RT_NEWSPAGE'      => $phpbb_extension_manager->is_enabled('nickvergessen/newspage'),

			'U_ACTION'           => $this->u_action,
		));
	}
}
