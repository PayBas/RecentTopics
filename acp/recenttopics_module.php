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
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\request\request */
	protected $request;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	public $u_action;

	function main($id, $mode)
	{
		global $config, $request, $template, $user;

		$this->config = $config;
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;

		$this->user->add_lang('acp/common');
		$this->tpl_name = 'acp_recenttopics';
		$this->page_title = $this->user->lang('RECENT_TOPICS');

		$form_key = 'acp_recenttopics';
		add_form_key($form_key);

		if ($this->request->is_set_post('submit'))
		{
			if (!check_form_key($form_key))
			{
				trigger_error($user->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
			}

			// variable should be '' as it is a string ("1, 2, 3928") here, not an integer.
			$rt_anti_topics = $this->request->variable('rt_anti_topics', '0');
			$this->config->set('rt_anti_topics', $rt_anti_topics);

			$rt_number = $this->request->variable('rt_number', 5);
			$this->config->set('rt_number', $rt_number);

			$rt_page_number = $this->request->variable('rt_page_number', 0);
			$this->config->set('rt_page_number', $rt_page_number);

			$rt_parents = $this->request->variable('rt_parents', false);
			$this->config->set('rt_parents', $rt_parents);

			$rt_unreadonly = $this->request->variable('rt_unreadonly', false);
			$this->config->set('rt_unreadonly', $rt_unreadonly);

			$rt_index = $this->request->variable('rt_index', 0);
			$this->config->set('rt_index', $rt_index);

			trigger_error($user->lang['CONFIG_UPDATED'] . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'RT_ANTI_TOPICS' => isset($this->config['rt_anti_topics']) ? $this->config['rt_anti_topics'] : '',
			'RT_NUMBER'      => isset($this->config['rt_number']) ? $this->config['rt_number'] : '',
			'RT_PAGE_NUMBER' => isset($this->config['rt_page_number']) ? $this->config['rt_page_number'] : '',
			'RT_PARENTS'     => isset($this->config['rt_parents']) ? $this->config['rt_parents'] : false,
			'RT_UNREADONLY'  => isset($this->config['rt_unreadonly']) ? $this->config['rt_unreadonly'] : false,

			'U_ACTION'       => $this->u_action,
		));
	}
}

?>