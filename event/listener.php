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

namespace paybas\recenttopics\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	/* @var \paybas\recenttopics\core\recenttopics */
	protected $rt_functions;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\request\request */
	protected $request;

	public function __construct(\paybas\recenttopics\core\recenttopics $functions, \phpbb\config\config $config, \phpbb\request\request $request)
	{
		$this->rt_functions = $functions;
		$this->config = $config;
		$this->request = $request;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.index_modify_page_title'           => 'display_rt',
			'nickvergessen.newspage.newspage'        => 'display_rt_newspage',

			'core.acp_manage_forums_request_data'    => 'acp_manage_forums_request_data',
			'core.acp_manage_forums_initialise_data' => 'acp_manage_forums_initialise_data',
			'core.acp_manage_forums_display_form'    => 'acp_manage_forums_display_form',
		);
	}

	// The main magic
	public function display_rt()
	{
		if (isset($this->config['rt_index']) && $this->config['rt_index'])
		$this->rt_functions->display_recent_topics();
	}

	// nickvergessen's newspage ext
	public function display_rt_newspage()
	{
		if (isset($this->config['rt_on_newspage']) && $this->config['rt_on_newspage'])
		{
			$this->rt_functions->display_recent_topics();
		}
	}

	// Submit form (add/update)
	public function acp_manage_forums_request_data($event)
	{
		$array = $event['forum_data'];
		$array['forum_recent_topics'] = $this->request->variable('forum_recent_topics', 1);
		$event['forum_data'] = $array;
	}

	// Default settings for new forums
	public function acp_manage_forums_initialise_data($event)
	{
		if ($event['action'] == 'add')
		{
			$array = $event['forum_data'];
			$array['forum_recent_topics'] = '1';
			$event['forum_data'] = $array;
		}
	}

	// ACP forums template output
	public function acp_manage_forums_display_form($event)
	{
		$array = $event['template_data'];
		$array['RECENT_TOPICS'] = $event['forum_data']['forum_recent_topics'];
		$event['template_data'] = $array;
	}
}
