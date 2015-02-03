<?php

/**
*
* @package Recent Topics Extension
* @copyright (c) 2014 PayBas
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Persian translation by php-bb.ir (Meis@M Noubari)
*
* Based on the original NV Recent Topics by Joas Schilling (nickvergessen)
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'RECENT_TOPICS'              => 'موضوعات اخیر',
	'RECENT_TOPICS_LIST'         => 'نمایش در " موضوعات اخیر"',
	'RECENT_TOPICS_LIST_EXPLAIN' => 'فعال سازی نمایش موضوعات این انجمن در افزونه " موضوعات اخیر"',

	'RT_CONFIG'                  => 'پیکربندی',
	'RT_ANTI_TOPICS'             => 'موضوعات چشم پوشی شده',
	'RT_ANTI_TOPICS_EXP'         => 'ج"اساز" توسط کاما ", ” (به عنوان مثال: “7, 9”)<br />اگر تمایل به چشم پوشی موضوعی ندارید عدد 0 را وارد کنید.',
	'RT_MIN_TOPIC_LEVEL'         => 'Minimum topic type level',
	'RT_MIN_TOPIC_LEVEL_EXP'     => 'Determines the minimum level of the topic type to display. It will display topics of the set level, and higher.<br />(0 = normal, 1 = sticky, 2 = announcement, 3 = global announcement)',
	'RT_NUMBER'                  => 'موضوعات اخیر',
	'RT_NUMBER_EXP'              => 'نمایش تعداد موضوعات در صفحه اصلی تالار',
	'RT_PAGE_NUMBER'             => 'صفحات موضوعات اخیر',
	'RT_PAGE_NUMBER_EXP'         => 'جهت نمایش موضوعات بیشتر می توانید از صفحه بندی استفاده کنید. جهت غیر فعال کردن ، کافیست عدد 1 را وارد کنید. چنانچه عدد 0 را وارد کنید تمامی موضوعات انجمن شامل آن خواهد بود که توصیه نمیشود.',
	'RT_PARENTS'                 => 'نمایش انجمن های والد',
	'RT_PARENTS_EXP'             => 'نمایش انجمن های والد در کنار موضوعات',
	'RT_SORT_START_TIME'			=> 'Sort by topic start time',
	'RT_SORT_START_TIME_EXP'		=> 'Enable to sort recent topics by the starting time of the topic, instead of the last post time.',
	'RT_UNREADONLY'              => 'تنها نمایش موضوعات خوانده نشده',
	'RT_UNREADONLY_EXP'          => 'فعال سازی جهت نمایش تنها موضوعات خوانده نشده (حتی اگر جدید یا اخیر هم نباشد). این عملکرد شامل تنظیمات مشابه نیز میباشد (چشم پوشی کردن از انجمن ها و موضوعات) در حالت معمولی. توجه: این امکان تنها برای کاربران وارد شده قابل استفاده میباشد; و مهمانان لیست معمولی را خواهند داشت',

	'RT_VIEW_ON'                 => 'نمایش موضوعات مشابه روی:',
));
