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
	'RT_ANTI_TOPICS_EXP'			=> 'Separados por “, ” (Por ejemplo: “7, 9”)<br />Si no quiere excluir un tema, simplemente introduzca 0.',
	'RT_NUMBER'						=> 'Temas recientes',
	'RT_NUMBER_EXP'					=> 'Número de temas mostrados en el índice.',
	'RT_PAGE_NUMBER'				=> 'Páginas de temas recientes',
	'RT_PAGE_NUMBER_EXP'			=> 'Puede mostrar más temas recientes usando una pequeña paginación. Solo tiene que introducir 1 para desactivar esta función. Si introduce 0, habrá tantas páginas como sean necesarias para mostrar todos los temas.',
	'RT_PARENTS'					=> 'Mostrar foros padre',
	'RT_PARENTS_EXP'				=> 'Mostrar foros padre dentro de la fila tema, de temas recientes.',
	'RT_UNREADONLY'					=> 'Mostrar sólo temas no leídos',
	'RT_UNREADONLY_EXP'				=> 'Esta opción sólo mostrará temas no leídos (tanto si son "recientes" o no). Esta función utiliza la misma configuración (excluyendo forums/topics etc.) que el modo normal. Nota: esto sólo funciona para usuarios registrados e identificados; los invitados podrán obtener la lista normal.',

	'RT_VIEW_ON'					=> 'Ver temas recientes en:',
));
