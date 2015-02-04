<?php
/**
 *
 * @package Recent Topics Extension
 * French translation by ForumsFaciles (http://www.forumsfaciles.fr) &  Galixte (http://www.galixte.com)
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
	'RECENT_TOPICS'					=> 'Sujets Récents',
	'RECENT_TOPICS_LIST'			=> 'Afficher les “sujets récents”',
	'RECENT_TOPICS_LIST_EXPLAIN'	=> 'Activer pour afficher les sujets de ce forum dans l’extension “sujets récents”.',

	'RT_CONFIG'						=> 'Configuration',
	'RT_ANTI_TOPICS'				=> 'Sujets exclus',
	'RT_ANTI_TOPICS_EXP'			=> 'Saisissez les ID des sujets séparés par : “, ” (exemple : 7, 9).<br />Si vous ne souhaitez pas exclure de sujet saisissez simplement 0.',
	'RT_MIN_TOPIC_LEVEL'			=> 'Niveau minimum du type de sujet',
	'RT_MIN_TOPIC_LEVEL_EXP'		=> 'Détermine le niveau minimum du type de sujet à afficher. Cela affichera les sujets correspondant au niveau paramétré et de niveau supérieur.<br />(0 = Normal, 1 = Post-it, 2 = Annonce, 3 = Annonce globale)',
	'RT_NUMBER'						=> 'Sujets récents',
	'RT_NUMBER_EXP'					=> 'Nombre de sujets à afficher sur l’index.',
	'RT_PAGE_NUMBER'				=> 'Nombre de pages pour les sujets récents',
	'RT_PAGE_NUMBER_EXP'			=> 'Vous pouvez afficher davantage de sujets récents en utilisant la pagination. Saisissez seulement 1 pour désactiver cette option. Si vous saisissez 0, il y aura autant de pages que nécessaire pour afficher tous les sujets de votre forum (non recommandé).',
	'RT_PARENTS'					=> 'Afficher les forums parents',
	'RT_PARENTS_EXP'				=> 'Afficher les forums parents dans la liste des sujets récents.',
	'RT_SORT_START_TIME'			=> 'Classer selon la date de création du sujet',
	'RT_SORT_START_TIME_EXP'		=> 'Activer pour classer selon la date de création du sujet, en lieu et place de la date du dernier message.',
	'RT_UNREADONLY'					=> 'Afficher uniquement les sujets non lus',
	'RT_UNREADONLY_EXP'				=> 'Vous pouvez afficher uniquement les sujets non lus (qu’ils soient “récents” ou non). Cette fonctionnalité utilise les mêmes paramètres que le mode normal (en excluant les forums / sujets, etc…). Note : Cela fonctionne uniquement pour les utilisateurs connectés; les invités verront la liste normale.',

	'RT_VIEW_ON'					=> 'Afficher les sujets récents sur :',
));
