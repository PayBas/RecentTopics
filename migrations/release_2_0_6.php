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

namespace paybas\recenttopics\migrations;

class release_2_0_6 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return $this->db_tools->sql_column_exists($this->table_prefix . 'users', 'user_rt____');
	}

	static public function depends_on()
	{
		return array(
			'\paybas\recenttopics\migrations\release_2_0_5',
		);
	}

	public function update_schema()
	{
		return array(
			'add_columns'	=> array(
				$this->table_prefix . 'users' => array(
					'user_rt_enable'          => array('BOOL', 1),
					'user_rt_alt_location'    => array('BOOL', 0),
					'user_rt_sort_start_time' => array('BOOL', 0),
					'user_rt_unread_only'     => array('BOOL', 0),
				),
			),
		);
	}

	public function revert_schema()
	{
		return array(
			'drop_columns'	=> array(
				$this->table_prefix . 'users' => array(
					'user_rt_enable',
					'user_rt_alt_location',
					'user_rt_sort_start_time',
					'user_rt_unread_only',
				),
			),
		);
	}

	public function update_data()
	{
		return array(
			array('config.remove', array('rt_unreadonly')),
			array('config.add', array('rt_unread_only', 0)),
			array('config.add', array('rt_alt_location', 0)),
			array('config.update', array('rt_version', '2.0.6')),

			array('permission.add', array('u_rt_view')),
			array('permission.add', array('u_rt_enable')),
			array('permission.add', array('u_rt_alt_location')),
			array('permission.add', array('u_rt_sort_start_time')),
			array('permission.add', array('u_rt_unread_only')),

			array('permission.permission_set', array('ROLE_USER_FULL', 'u_rt_view')),
			array('permission.permission_set', array('ROLE_USER_FULL', 'u_rt_enable')),
			array('permission.permission_set', array('ROLE_USER_FULL', 'u_rt_alt_location')),
			array('permission.permission_set', array('ROLE_USER_FULL', 'u_rt_sort_start_time')),
			array('permission.permission_set', array('ROLE_USER_FULL', 'u_rt_unread_only')),
			array('permission.permission_set', array('ROLE_USER_STANDARD', 'u_rt_view')),
			array('permission.permission_set', array('ROLE_USER_NOPM', 'u_rt_view')),
			array('permission.permission_set', array('ROLE_USER_NOAVATAR', 'u_rt_view')),
			array('permission.permission_set', array('ROLE_USER_NEW_MEMBER', 'u_rt_view')),
			array('permission.permission_set', array('ROLE_USER_NOAVATAR', 'u_rt_view')),
			array('permission.permission_set', array('GUESTS', 'u_rt_view', 'group')),
		);
	}

	public function revert_data()
	{
		return array(
			array('config.adde', array('rt_unreadonly', 0)),
			array('config.remove', array('rt_unread_only')),
			array('config.remove', array('rt_alt_location')),
			array('config.update', array('rt_version', '2.0.5')),

			array('permission.remove', array('u_rt_view')),
			array('permission.remove', array('u_rt_enable')),
			array('permission.remove', array('u_rt_alt_location')),
			array('permission.remove', array('u_rt_sort_start_time')),
			array('permission.remove', array('u_rt_unread_only')),
		);
	}
}
