<?php
/**
 *
 * @package Recent Topics Extension
 * Italian translation by Mauron
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
	'RECENT_TOPICS'					=> 'Topic recenti',
	'RECENT_TOPICS_LIST'			=> 'Mostra in "Topic recenti"',
	'RECENT_TOPICS_LIST_EXPLAIN'	=> 'I topic di questo forum saranno mostrati nell’elenco "Topic recenti".',

	'RT_CONFIG'						=> 'Configurazione',
	'RT_ANTI_TOPICS'				=> 'Topic esclusi',
	'RT_ANTI_TOPICS_EXP'			=> 'Gli ID dei topic da escludere, separati da una virgola (es.: 7, 9)<br />Per non escudere alcun topic, digitare 0.',
	'RT_MIN_TOPIC_LEVEL'			=> 'Livello minimo topic',
	'RT_MIN_TOPIC_LEVEL_EXP'		=> 'Determina il livello minimo dei topic da mostrare: saranno mostrati i topic del livello specificato e superiori.<br />(0 = argomento semplice, 1 = importante, 2 = annuncio, 3 = annuncio globale)',
	'RT_NUMBER'						=> 'Topic recenti',
	'RT_NUMBER_EXP'					=> 'Numero di topic mostrati nella pagina principale.',
	'RT_PAGE_NUMBER'				=> 'Pagine di topic recenti',
	'RT_PAGE_NUMBER_EXP'			=> 'È possibile mostrare più pagine di topic recenti; per disabilitare questa funzione, digitare 1. Impostando il valore a 0, saranno create tante pagine quante ne servono per mostrare tutti i topic del forum (non consigliato).',
	'RT_PARENTS'					=> 'Mostra forum genitore',
	'RT_PARENTS_EXP'				=> 'Mostra il topic genitore nella riga del topic dell’elenco dei topic recenti',
	'RT_SORT_START_TIME'			=> 'Ordina per data d’apertura',
	'RT_SORT_START_TIME_EXP'		=> 'Abilitare per mostrare i topic in base alla loro data d’apertura e non per l’ultimo post.',
	'RT_UNREADONLY'					=> 'Mostra solo non letti',
	'RT_UNREADONLY_EXP'				=> 'Abilita per mostrare solo i topic non letti, recenti o meno; questa funzione usa le stesse impostazioni (esclusione di forum, topic eccetera) della modalità normale.<br />Nota: funziona solo per gli utenti registrati; gli ospiti vedranno l’elenco normale.',

	'RT_VIEW_ON'					=> 'Mostra i topic recenti in:',
));
