<?php
/**
 *
 * @package Recent Topics Extension
 * Greek translation by MakisH
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
	'RECENT_TOPICS'					=> 'Πρόσφατα Θέματα',
	'RECENT_TOPICS_EXPLAIN'			=> 'On this page you can change the settings specific for the Recent Topics extension.<br /><br />Specific forums can be included or excluded by editing the respective forums in your ACP.<br />Also be sure to check your user permissions, which allow users to change some of the settings found below for themselves.',

	'RECENT_TOPICS_LIST'			=> 'Εμφάνιση στα "πρόσφατα θέματα"',
	'RECENT_TOPICS_LIST_EXPLAIN'	=> 'Να εμφανίζονται τα θέματα αυτής της συζήτησης στα "πρόσφατα θέματα".',

	'RT_CONFIG'						=> 'Ρυθμίσεις',
	'RT_ALT_LOCATION'				=> 'Display in alternative location',
	'RT_ALT_LOCATION_EXP'			=> 'Use alternative location to display recent topics.<br />Not all styles will support this, for prosilver it will be moved to the bottom of the page.',
	'RT_ANTI_TOPICS'				=> 'Εξαιρούμενα θέματα',
	'RT_ANTI_TOPICS_EXP'			=> 'Χωρισμένα με ", " (Παράδειγμα: 7, 9)<br />Εάν δεν θέλετε να εξαιρέσετε κάποιο θέμα, απλώς εισάγετε 0.',
	'RT_MIN_TOPIC_LEVEL'			=> 'Ελάχιστο επίπεδο τύπου θέματος',
	'RT_MIN_TOPIC_LEVEL_EXP'		=> 'Καθορίζει το ελάχιστο επίπεδο του τύπου θεμάτων που θα εμφανίζονται. Θα εμφανίζονται θέματα από το ορισμένο επίπεδο και πάνω.<br />(0 = κανονικό, 1 = σημείωση, 2 = ανακοίνωση, 3 = γενική ανακοίνωση)',
	'RT_NUMBER'						=> 'Πρόσφατα θέματα',
	'RT_NUMBER_EXP'					=> 'Πλήθος θεμάτων εμφανιζόμενα στο ευρετήριο.',
	'RT_PAGE_NUMBER'				=> 'Σελίδες προσφάτων θεμάτων',
	'RT_PAGE_NUMBER_EXP'			=> 'Μπορείτε να εμφανίσετε μερικά ακόμα πρόσφατα θέματα μοιράζοντάς τα σε σελίδες. Απλώς εισάγετε 1 για να απενεργοποιήσετε αυτή τη λειτουργία. Εάν εισάγετε 0 θα υπάρχουν τόσες σελίδες όσες χρειάζονται για να εμφανίζονται όλα τα θέματα.',
	'RT_PARENTS'					=> 'Εμφάνιση μητρικών συζητήσεων',
	'RT_PARENTS_EXP'				=> 'Εμφάνιση των μητρικών συζητήσεων (parent forums) στη γραμμή κάθε θέματος στα πρόσφατα θέματα.',
	'RT_SORT_START_TIME'			=> 'Ταξινόμηση ανά χρόνο δημιουργίας των θεμάτων',
	'RT_SORT_START_TIME_EXP'		=> 'Ενεργοποιήστε για να ταξινομούνται τα θέματα με βάση τον χρόνο δημιουργίας τους, αντί για τον χρόνο της τελευταίας δημοσίευσης.',
	'RT_UNREAD_ONLY'				=> 'Εμφάνιση μόνο μη-αναγνωσμένων θεμάτων',
	'RT_UNREAD_ONLY_EXP'			=> 'Αυτή η λειτουργία θα εμφανίζει μόνο μη-αναγνωσμένα θέματα (είτε είναι "πρόσφατα" είτε όχι). Αυτή η λειτουργία χρησιμοποιεί τις ίδιες ρυθμίσεις (εξαιρούμενες συζητήσεις/θέματα κτλ.) με την κανονική. Σημείωση: αυτό λειτουργεί μονάχα για συνδεδεμένους χρήστες. Οι επισκέπτες θα βλέπουν την κανονική λίστα.',

	'RT_VIEW_ON'					=> 'Εμφάνιση προσφάτων θεμάτων σε:',
));
