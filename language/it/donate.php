<?php
/**
 *
 * PayPal Donation extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2015 Skouat
 * @license GNU General Public License, version 2 (GPL-2.0)
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


// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	// Header
	'PPDE_HEADER_LINK_TITLE'      => 'Donazioni',

	// Index page
	'PPDE_INDEX_STATISTICS_TITLE' => 'Statistiche donazioni',

	// Image alternative text
	'IMG_LOADER'                  => 'loading',

	// Pages
	'PPDE_DONATION_BUTTON_TITLE'  => 'Dona',
	'PPDE_DONATION_TITLE'         => 'Fai una Donazione',
	'PPDE_DONATION_TITLE_HEAD'    => 'Fai una Donazione a',
	'PPDE_CANCEL_TITLE'           => 'Donazione Cancellata',
	'PPDE_SUCCESS_TITLE'          => 'Donazione Effettuata',
	'PPDE_CONTACT_PAYPAL'         => 'Collegamento a PayPal - Attendere prego ...',
	'PPDE_SANDBOX_TITLE'          => 'Prova Donazione PayPal con PayPal Sandbox',

	// Statistics
	'DONATE_RECEIVED'             => 'Abbiamo ricevuto <strong>%s</strong> in donazioni.',
	'DONATE_NOT_RECEIVED'         => 'Non abbiamo ricevuto nessuna donazione.',

	'DONATE_GOAL_RAISE'           => 'Il nostro obiettivo è quello di raggiungere <strong>%s</strong>.',
	'DONATE_GOAL_REACHED'         => 'Il nostro obiettivo è stato raggiunto.',
	'DONATE_NO_GOAL'              => 'Non abbiamo definito un obiettivo donazione.',

	'DONATE_USED'                 => 'Abbiamo usato <strong>%1$s</strong> delle vostre donazioni su <strong>%2$s</strong>%2$s già ricevute.',
	'DONATE_USED_EXCEEDED'        => 'Abbiamo usato <strong>%s</strong>. Sono state utilizzate tutte le vostre donazioni.',
	'DONATE_NOT_USED'             => 'Non abbiamo usato nessuna donazione.',

	// Viewonline
	'PPDE_VIEWONLINE'             => 'Visualizza pagina Donazione',
));

$lang = array_merge($lang, array(
	// Error
	'CURL_ERROR'                 => 'cURL errore: ',
	'FSOCK_ERROR'                => 'fsockopen errore: ',
	'NO_CONNECTION_DETECTED'     => 'cURL e fsockopen() Non sono stati rilevati. Si prega di contattare l\'amministratore del Web server.',
	'INVALID_TRANSACTION_RECORD' => 'Documento Transazione Non Valido: Nessun ID transazione trovato',
	'INVALID_RESPONSE_STATUS'    => 'Stato della risposta non valida: ',
	'UNEXPECTED_RESPONSE'        => 'Risposta inattesa da PayPal.',
));
