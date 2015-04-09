/**
 *
 * @package Recent Topics Extension
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Based on the original NV Recent Topics by Joas Schilling (nickvergessen)
 *
 */
jQuery(function($) {
	var phpbbCallback = phpbb.ajaxCallbacks['mark_forums_read'];
	phpbb.addAjaxCallback('mark_forums_read', function(res) {
		phpbbCallback(res);
		phpbb.ajaxCallbacks.mark_topics_read.call(this, res, false);
	});
});
