<?php
/**
 *
 * @package Recent Topics Extension
 * Turkish translation by golelcintolga
 *
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
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
	'RECENT_TOPICS'					=> 'Son Konular',
	'RECENT_TOPICS_EXPLAIN'			=> 'On this page you can change the settings specific for the Recent Topics extension.<br /><br />Specific forums can be included or excluded by editing the respective forums in your ACP.<br />Also be sure to check your user permissions, which allow users to change some of the settings found below for themselves.',

	'RECENT_TOPICS_LIST'			=> '"son konular" göster',
	'RECENT_TOPICS_LIST_EXPLAIN'	=> 'Eğer etkinleştirilmiş ise, bu forum da "son konular" eklentisi görüntülenir.',

	'RT_CONFIG'						=> 'Ayarlar',
	'RT_ALT_LOCATION'				=> 'Display in alternative location',
	'RT_ALT_LOCATION_EXP'			=> 'Use alternative location to display recent topics.<br />Not all styles will support this, for prosilver it will be moved to the bottom of the page.',
	'RT_ANTI_TOPICS'				=> 'Dışlanan konular',
	'RT_ANTI_TOPICS_EXP'			=> 'Ayraç ", " (Örnek: 7, 9)<br />Sıfır "0" değeri bu özelliği devre dışı bırakır.',
	'RT_MIN_TOPIC_LEVEL'			=> 'Konu türü',
	'RT_MIN_TOPIC_LEVEL_EXP'		=> 'Gösterilecek konu türünü belirler.<br />(0 = Normal, 1 = Sabit, 2 = Duyuru, 3 = Genel Duyuru)',
	'RT_NUMBER'						=> 'Son Konular',
	'RT_NUMBER_EXP'					=> 'Sayfada gösterilecek konu sayısı.',
	'RT_PAGE_NUMBER'				=> 'Son konular sayfalama',
	'RT_PAGE_NUMBER_EXP'			=> 'Daha fazla konu görüntülemek için sayfalama özelliğini kullanın. Bu özelliği kapatmak için "1" giriniz. Sıfır "0" gireseniz forumdaki tüm konular gösterilecektir (tavsiye edilmez).',
	'RT_PARENTS'					=> 'Ana forumu göster',
	'RT_PARENTS_EXP'				=> 'Son Konular listesisinde konunun ait olduğu ana forumu gösterir.',
	'RT_SORT_START_TIME'			=> 'Başlangıç tarihine göre sırala',
	'RT_SORT_START_TIME_EXP'		=> 'Son Konuları gönderilen son mesajın tarihi yerine, konunun başlangıç tarihine göre sıralamak için etkinleştirin.',
	'RT_UNREAD_ONLY'				=> 'Sadece okunmamış konuları göster',
	'RT_UNREAD_ONLY_EXP'			=> 'Bu seçeneğin etkinleştirilmesi sadece okunmamış konuların görüntülenmesini sağlar. Konu türü ayrımı olmayacaktır.<br /><strong>NOT:</strong> Bu özellik giriş yapmış kullanıcılar için geçerlidir; Misafirler normal "Son Konular" listesini görecektir.',

	'RT_VIEW_ON'					=> 'Son Konuları göster:',
));
