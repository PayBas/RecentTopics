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

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'RECENT_TOPICS'					=> 'Temas Recientes',
	'RECENT_TOPICS_LIST'			=> 'Ver en “temas recientes”',
	'RECENT_TOPICS_LIST_EXPLAIN'	=> 'Serán los temas de este foro los que se mostrarán en el índice de “temas recientes”?',

	'RT_CONFIG'						=> 'Configuracón',
	'RT_ANTI_TOPICS'				=> 'Temas excluidos',
	'RT_ANTI_TOPICS_EXP'			=> 'Separados por “, ” (Por ejemplo: “7, 9”)<br />Si quiere excluir un tema, simplemente introduzca 0.',
	'RT_NUMBER'						=> 'Temas recientes',
	'RT_NUMBER_EXP'					=> 'Número de temas mostrados en el índice.',
	'RT_PAGE_NUMBER'				=> 'Páginas de temas recientes',
	'RT_PAGE_NUMBER_EXP'			=> 'Puede mostrar más temas recientes usando una pequeña paginación. Solo tiene que introducir 1 para desactivar esta función. Si introduce 0, habrá tantas páginas como sean necesarias para mostrar todos los temas.',
	'RT_PARENTS'					=> 'Mostrar foros padre',
	//'RT_PARENTS_EXP'				=> '',
	//'RT_UNREADONLY'					=> '',
	//'RT_UNREADONLY_EXP'				=> '',

	'RT_VIEW_ON'		=> 'Ver temas recientes en:',
	'RT_MEMBERLIST'		=> 'Lista de Usuarios',
	'RT_INDEX'			=> 'Índice',
	'RT_SEARCH'			=> 'Buscar',
	'RT_FAQ'			=> 'FAQ',
	'RT_MCP'			=> 'MCP (Panel de Control del Moderador)',
	'RT_UCP'			=> 'UCP (Panel de Control del Usuario)',
	'RT_VIEWFORUM'		=> 'Viendo un foro',
	'RT_VIEWTOPIC'		=> 'Viendo un tema',
	'RT_VIEWONLINE'		=> 'Viendo conectados',
	'RT_POSTING'		=> 'Escribiendo',
	'RT_REPORT'			=> 'Reportando',
	'RT_OTHERS'			=> 'otro sitio',
));
