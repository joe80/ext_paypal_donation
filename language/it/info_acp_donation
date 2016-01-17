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


/**
 * mode: main
 */
$lang = array_merge($lang, array(
	'PPDE_ACP_DONATION'       => 'PayPal Donation',
	'PPDE_ACP_OVERVIEW'       => 'Panoramica',
	'PPDE_ACP_SETTINGS'       => 'Impostazioni Generali',
	'PPDE_ACP_DONATION_PAGES' => 'Pagine donazione',
	'PPDE_ACP_CURRENCY'       => 'Gestione valuta',
	'PPDE_ACP_TRANSACTIONS'   => 'log Operazioni',
));

/**
 * mode: overview
 */
$lang = array_merge($lang, array(
	'PPDE_OVERVIEW'                          => 'Panoramica',

	'INFO_CURL'                              => 'cURL',
	'INFO_FSOCKOPEN'                         => 'Fsockopen',
	'INFO_DETECTED'                          => 'Rilevato',
	'INFO_NOT_DETECTED'                      => 'Non rilevato',

	'PPDE_INSTALL_DATE'                      => 'Data di Installazione <strong>%s</strong>',
	'PPDE_NO_VERSIONCHECK'                   => 'Nessuna informazione controllo versione ricevuta.',
	'PPDE_NOT_UP_TO_DATE'                    => '%s non è aggiornato',
	'PPDE_STATS'                             => 'Statistiche Donazione',
	'PPDE_VERSION'                           => '<strong>%s</strong> versione',

	'STAT_RESET_DATE'                        => 'Ripristina Data di installazione estensione',
	'STAT_RESET_DATE_EXPLAIN'                => 'Il ripristino della data di installazione influenzerà sul calcolo dell\'importo totale delle donazioni e alcune altre statistiche.',
	'STAT_RESET_DATE_CONFIRM'                => 'Sei sicuro di voler reimpostare la data di installazione di questa estensione?',
	'STAT_RESYNC_DONORSCOUNTS'               => 'Risincronizza Donazioni Ricevute',
	'STAT_RESYNC_DONORSCOUNTS_EXPLAIN'       => 'Risincronizza tutti i Pagamenti. Solo donatori anonimi e utenti connessi saranno presi in considerazione.',
	'STAT_RESYNC_DONORSCOUNTS_CONFIRM'       => 'Sei sicuro di voler risincronizzare Pagamenti donatori?',
	'STAT_RESYNC_TRANSACTIONSCOUNTS'         => 'Risincronizza Operazioni Pagamenti',
	'STAT_RESYNC_TRANSACTIONSCOUNTS_EXPLAIN' => 'Saranno prese in considerazione solo le operazioni dei registrati.',
	'STAT_RESYNC_TRANSACTIONSCOUNTS_CONFIRM' => 'Sei sicuro di voler risincronizzare Operazioni di Pagamenti?',
	'STAT_RETEST_CURL_FSOCK'                 => 'Rileva “cURL” e “fsockopen”',
	'STAT_RETEST_CURL_FSOCK_EXPLAIN'         => 'Permette nuovamente di rilevare queste caratteristiche della configurazione del web server se sono state modificate.',
	'STAT_RETEST_CURL_FSOCK_CONFIRM'         => 'Sei sicuro di voler rilevare nuovamente “cURL” e “fsockopen”?',

	'STATS_ANONYMOUS_DONORS_COUNT'           => 'Numero di donatori anonimi',
	'STATS_ANONYMOUS_DONORS_PER_DAY'         => 'Donatori anonimi al giorno',
	'STATS_KNOWN_DONORS_COUNT'               => 'Numero di donatori',
	'STATS_KNOWN_DONORS_PER_DAY'             => 'Donatori al giorno',
	'STATS_TRANSACTIONS_COUNT'               => 'Numero di operazioni',
	'STATS_TRANSACTIONS_PER_DAY'             => 'Operazioni al giorno',
));

/**
 * mode: settings
 */
$lang = array_merge($lang, array(
	'PPDE_SETTINGS'                        => 'Impostazioni Generali',
	'PPDE_SETTINGS_EXPLAIN'                => 'Qui è possibile configurare le impostazioni principali per PayPal Donation.',

	// Global settings
	'PPDE_LEGEND_GENERAL_SETTINGS'         => 'Impostazioni Generali',
	'PPDE_ENABLE'                          => 'Abilita Donazione PayPal',
	'PPDE_ENABLE_EXPLAIN'                  => 'Attivare o disattivare PayPal Donation MOD.',
	'PPDE_HEADER_LINK'                     => 'Visualizza il link "Donazioni" in alto',
	'PPDE_ACCOUNT_ID'                      => 'PayPal account ID',
	'PPDE_ACCOUNT_ID_EXPLAIN'              => 'Inserisci la tua E-Mail PayPal o un ID account Negoziante.',
	'PPDE_DEFAULT_CURRENCY'                => 'Valuta di Default',
	'PPDE_DEFAULT_CURRENCY_EXPLAIN'        => 'Definisci quale moneta sarà selezionata per impostazione predefinita.',
	'PPDE_DEFAULT_VALUE'                   => 'Valuta donazione di default',
	'PPDE_DEFAULT_VALUE_EXPLAIN'           => 'Definisci quale valuta di donazione verrà proposto di default.',
	'PPDE_DROPBOX_ENABLE'                  => 'Abilita menu a tendina',
	'PPDE_DROPBOX_ENABLE_EXPLAIN'          => 'Se abilitato, sostituirà la casella di testo con un menu a discesa.',
	'PPDE_DROPBOX_VALUE'                   => 'menu a tendina valore donazione',
	'PPDE_DROPBOX_VALUE_EXPLAIN'           => 'Imposta i numeri che si desiderano visualizzare nella lista a tendina.<br />Usa <strong>la virgola</strong> (",") <strong>senza spazio</strong> per separare ciascun valore.',

	// PayPal IPN settings
	'PPDE_LEGEND_IPN_SETTINGS'             => 'PayPal IPN settings',
	'PPDE_LEGEND_IPN_PPDE_IPN_AUTOGROUP'   => 'Auto-group',
	'PPDE_IPN_AG_ENABLE'                   => 'Abilita Auto Group',
	'PPDE_IPN_AG_ENABLE_EXPLAIN'           => 'Permette di aggiungere i donatori a un gruppo predefinito.',
	'PPDE_IPN_AG_DONORS_GROUP'             => 'Gruppo Donatori',
	'PPDE_IPN_AG_DONORS_GROUP_EXPLAIN'     => 'Selezionare il gruppo che ospiterà i membri donatori.',
	'PPDE_IPN_AG_GROUP_AS_DEFAULT'         => 'Imposta gruppo donatori come predefinito',
	'PPDE_IPN_AG_GROUP_AS_DEFAULT_EXPLAIN' => 'Abilitalo per impostare il gruppo donatori come gruppo predefinito per gli utenti che hanno fatto una donazione.',
	'PPDE_IPN_ENABLE'                      => 'Abilita IPN',
	'PPDE_IPN_ENABLE_EXPLAIN'              => 'Attivare questa opzione se si desidera utilizzare notifica immediata del pagamento dei servizi PayPal.<br />Se si abilita, tutte le caratteristiche che dipendono da PayPal IPN saranno disponibili sotto.',
	'PPDE_IPN_LOGGING'                     => 'Abilita log errori',
	'PPDE_IPN_LOGGING_EXPLAIN'             => 'Log errori e dati da PayPal IPN in <strong>/store/ppde_transactions.log</strong>.',

	// PayPal sandbox settings
	'PPDE_LEGEND_SANDBOX_SETTINGS'         => 'PayPal sandbox settings',
	'PPDE_SANDBOX_ENABLE'                  => 'Sandbox testing',
	'PPDE_SANDBOX_ENABLE_EXPLAIN'          => 'Attivare questa opzione se si desidera utilizzare PayPal Sandbox al posto dei servizi PayPal.<br />Utile per sviluppatori / tester. Tutte le operazioni sono fittizie.',
	'PPDE_SANDBOX_FOUNDER_ENABLE'          => 'Sandbox solo per i fondatori',
	'PPDE_SANDBOX_FOUNDER_ENABLE_EXPLAIN'  => 'Se abilitato, Sandbox PayPal verrà visualizzato solo dai fondatori della board.',
	'PPDE_SANDBOX_ADDRESS'                 => 'Indirizzo PayPal sandbox',
	'PPDE_SANDBOX_ADDRESS_EXPLAIN'         => 'Imposta qui il tuo indirizzo e-mail PayPal Sandbox.',

	// Stats Donation settings
	'PPDE_LEGEND_STATS_SETTINGS'           => 'Statistiche configurazione donazione',
	'PPDE_STATS_INDEX_ENABLE'              => 'Statistiche di visualizzazione donazione su in indice',
	'PPDE_STATS_INDEX_ENABLE_EXPLAIN'      => 'Attivare questa opzione se si desidera visualizzare le statistiche di donazione sull\'indice.',
	'PPDE_RAISED'                          => 'donazione in sospeso',
	'PPDE_RAISED_EXPLAIN'                  => 'Importo  corrente raccolto con le donazioni.',
	'PPDE_GOAL'                            => 'Obiettivo donazione',
	'PPDE_GOAL_EXPLAIN'                    => 'L\'importo totale che si desidera raggiungere.',
	'PPDE_USED'                            => 'donazione utilizzata',
	'PPDE_USED_EXPLAIN'                    => 'L\'importo della donazione che avete già utilizzato.',
	'PPDE_AMOUNT'                          => 'Importo',
	// Note for translator: do not translate the decimal symbol
	'PPDE_DECIMAL_EXPLAIN'                 => 'Usa “.” come simbolo decimale.',

	'PPDE_CURRENCY_ENABLE'                 => 'Abilita moneta donazione',
	'PPDE_CURRENCY_ENABLE_EXPLAIN'         => 'Attivare questa opzione se si desidera visualizzare il codice ISO 4217 della valuta predefinita in Statistiche.',
));

/**
 * mode: donation pages
 * Info: language keys are prefixed with 'PPDE_DP_' for 'PPDE_DONATION_PAGES_'
 */
$lang = array_merge($lang, array(
	// Donation Page settings
	'PPDE_DP_CONFIG'           => 'Pagine donazione',
	'PPDE_DP_CONFIG_EXPLAIN'   => 'Consente di migliorare il rendering delle pagine personalizzabili della estensione.',

	'PPDE_DP_PAGE'             => 'tipo di pagina',
	'PPDE_DP_LANG'             => 'Lingua',
	'PPDE_DP_LANG_SELECT'      => 'Seleziona una lingua',

	// Donation Page Body settings
	'DONATION_BODY'            => 'Pagina principale Donazione',
	'DONATION_BODY_EXPLAIN'    => 'Inserire il testo che si desidera visualizzare sulla pagina principale donazione.',

	// Donation Success settings
	'DONATION_SUCCESS'         => 'Donazione riuscita',
	'DONATION_SUCCESS_EXPLAIN' => 'Inserisci il testo che si desidera visualizzare nella pagina di donazione riuscita.',

	// Donation Cancel settings
	'DONATION_CANCEL'          => 'donazione annullata',
	'DONATION_CANCEL_EXPLAIN'  => 'Inserisci il testo che si desidera visualizzare nella pagina di annullamento.',

	// Donation Page Template vars
	'PPDE_DP_PREDEFINED_VARS'  => 'variabili predefinite',
	'PPDE_DP_VAR_EXAMPLE'      => 'Esempio',
	'PPDE_DP_VAR_NAME'         => 'Nome',
	'PPDE_DP_VAR_VAR'          => 'Variabile',

	'PPDE_DP_BOARD_CONTACT'    => 'Contatto Board',
	'PPDE_DP_BOARD_EMAIL'      => 'Board e-mail',
	'PPDE_DP_BOARD_SIG'        => 'Board’s Firma',
	'PPDE_DP_SITE_DESC'        => 'Descrizione Sito',
	'PPDE_DP_SITE_NAME'        => 'Nome Sito',
	'PPDE_DP_USER_ID'          => 'ID Utente',
	'PPDE_DP_USERNAME'         => 'Username',
));

/**
 * mode: currency
 * Info: language keys are prefixed with 'PPDE_DC_' for 'PPDE_DONATION_CURRENCY_'
 */
$lang = array_merge($lang, array(
	// Currency Management
	'PPDE_DC_CONFIG'           => 'Gestione della valuta',
	'PPDE_DC_CONFIG_EXPLAIN'   => 'Qui è possibile gestire la valuta.',
	'PPDE_DC_CREATE_CURRENCY'  => 'Aggiungi valuta',
	'PPDE_DC_ENABLE'           => 'Abilita valuta',
	'PPDE_DC_ENABLE_EXPLAIN'   => 'Se abilitata, la valuta sarà visualizzata nel dropbox.',
	'PPDE_DC_ISO_CODE'         => 'Codice ISO 4217',
	'PPDE_DC_ISO_CODE_EXPLAIN' => 'Codice alfabetico della moneta.<br />Ulteriori informazioni su ISO 4217… consultare la pagina <a href="http://www.phpbb.com/customise/db/mod/paypal_donation_mod/faq/f_746" title="PayPal Donation MOD FAQ">PayPal Donation MOD FAQ</a> (external link).',
	'PPDE_DC_NAME'             => 'Nome moneta',
	'PPDE_DC_NAME_EXPLAIN'     => 'Nome della moneta.<br />(i.e. Euro).',
	'PPDE_DC_POSITION'         => 'Posizione della moneta',
	'PPDE_DC_POSITION_EXPLAIN' => 'Definite dove il simbolo della valuta sarà posizionato rispetto alla somma visualizzata.<br />eg: <strong>$20</strong> o <strong>15€</strong>.',
	'PPDE_DC_POSITION_LEFT'    => 'Sinistra',
	'PPDE_DC_POSITION_RIGHT'   => 'Destra',
	'PPDE_DC_SYMBOL'           => 'simbolo della moneta',
	'PPDE_DC_SYMBOL_EXPLAIN'   => 'Definire il simbolo della valuta.<br />es: <strong>$</strong> per U.S. Dollar, <strong>€</strong> per Euro.',
));

/**
 * mode: transactions
 * Info: language keys are prefixed with 'PPDE_DT_' for 'PPDE_DONATION_TRANSACTION_'
 */
$lang = array_merge($lang, array(
	// Transactions log
	'PPDE_DT_CONFIG'                => 'Transazioni log',
	'PPDE_DT_CONFIG_EXPLAIN'        => 'Qui è possibile visualizzare i dettagli delle transazioni.',
	'PPDE_DT_IPN_STATUS'            => 'IPN Stato',
	'PPDE_DT_PAYMENT_STATUS'        => 'Stato pagamento',
	'PPDE_DT_TXN_ID'                => 'Transazione ID',
	'PPDE_DT_USERNAME'              => 'nome del donatore',

	/**
	 * TRANSLATORS PLEASE NOTE
	 * The line below has a special note.
	 * "## For translate:" followed by one "Don't" and one "Yes"
	 * "Don't" means do not change this column, and "Yes" means you can translate this column.
	 */

	## For translate:					Don't					Yes
	'PPDE_DT_PAYMENT_STATUS_VALUES' => array(
										'canceled_reversal' => 'revoca annullata',
										'completed'         => 'Completata',
										'created'           => 'Creata',
										'denied'            => 'negata',
										'expired'           => 'Scaduta',
										'failed'            => 'non riuscita',
										'pending'           => 'in attesa di',
										'refunded'          => 'rimborsata',
										'reversed'          => 'revocato',
										'processed'         => 'Processato',
										'voided'            => 'annullata',
	),

	// Display transactions
	'PPDE_DT_BOARD_USERNAME'        => 'Donatori',
	'PPDE_DT_CONVERT_FROM'          => 'Conversione da',
	'PPDE_DT_CONVERT_FROM_EXPLAIN'  => '',
	'PPDE_DT_DETAILS'               => 'dettagli della transazione',
	'PPDE_DT_EXCHANGE_RATE'         => 'Valuta cambio',
	'PPDE_DT_EXCHANGE_RATE_EXPLAIN' => '',
	'PPDE_DT_FEE_AMOUNT'            => 'Importo tassa',
	'PPDE_DT_FEE_AMOUNT_EXPLAIN'    => '',
	'PPDE_DT_ITEM_NAME'             => 'Nome oggetto',
	'PPDE_DT_ITEM_NUMBER'           => 'numero oggetto',
	'PPDE_DT_NAME'                  => 'Nome',
	'PPDE_DT_NET_AMOUNT'            => 'Importo netto',
	'PPDE_DT_NET_AMOUNT_EXPLAIN'    => '',
	'PPDE_DT_PAYER_ID'              => 'ID Donatore',
	'PPDE_DT_PAYER_EMAIL'           => 'e-mail',
	'PPDE_DT_PAYER_STATUS'          => 'Stato del pagamento',
	'PPDE_DT_PAYMENT_DATE'          => 'Data del pagamento',
	'PPDE_DT_RECEIVER_EMAIL'        => 'Pagamento inviato a',
	'PPDE_DT_RECEIVER_ID'           => 'ID ricevente',
	'PPDE_DT_SETTLE_AMOUNT'         => 'Conversione in',
	'PPDE_DT_SETTLE_AMOUNT_EXPLAIN' => '',
	'PPDE_DT_SORT_TXN_ID'           => 'ID Transazione',
	'PPDE_DT_SORT_DONORS'           => 'Donatori',
	'PPDE_DT_SORT_IPN_STATUS'       => 'IPN Stato',
	'PPDE_DT_SORT_PAYMENT_STATUS'   => 'Stato pagamento',
	'PPDE_DT_TOTAL_AMOUNT'          => 'Importo totale',
	'PPDE_DT_TOTAL_AMOUNT_EXPLAIN'  => '',
	'PPDE_DT_UNVERIFIED'            => 'Non verificato',
	'PPDE_DT_VERIFIED'              => 'Verificato',
));

/**
 * logs
 */
$lang = array_merge($lang, array(
	'LOG_PPDE_DC_ADDED'                       => '<strong>PayPal Donation: Nuova valuta aggiunta</strong><br />» %s',
	'LOG_PPDE_DC_DELETED'                     => '<strong>PayPal Donation: valuta cancellata</strong><br />» %s',
	'LOG_PPDE_DC_DISABLED'                    => '<strong>PayPal Donation: valuta disattivata</strong><br />» %s',
	'LOG_PPDE_DC_ENABLED'                     => '<strong>PayPal Donation: valuta abilitata</strong><br />» %s',
	'LOG_PPDE_DC_MOVE_DOWN'                   => '<strong>PayPal Donation: Sposta la valuta in basso</strong> “%s”',
	'LOG_PPDE_DC_MOVE_UP'                     => '<strong>PayPal Donation: Sposta la valuta in alto</strong> “%s”',
	'LOG_PPDE_DC_UPDATED'                     => '<strong>PayPal Donation: Moneta modificata</strong><br />» %s',
	'LOG_PPDE_DP_ADDED'                       => '<strong>PayPal Donation: Aggiunta nuova pagina donazione</strong><br />» “%1$s” per la lingua “%2$s”', // es: » “Donazione riuscita” per la lingua “Italiana”',
	'LOG_PPDE_DP_DELETED'                     => '<strong>PayPal Donation: Pagina donazione eliminata</strong><br />» “%1$s” per la lingua “%2$s”',
	'LOG_PPDE_DP_UPDATED'                     => '<strong>PayPal Donation: Pagina donazione aggiornata</strong><br />» “%1$s” per la lingua “%2$s”',
	'LOG_PPDE_DT_PURGED'                      => '<strong>PayPal Donation: Elimina log operazioni</strong>',
	'LOG_PPDE_SETTINGS_UPDATED'               => '<strong>PayPal Donation: Impostazioni aggiornate</strong>',
	'LOG_PPDE_STAT_RESET_DATE'                => '<strong>PayPal Donation: Azzeramento Data di installazione</strong>',
	'LOG_PPDE_STAT_RESYNC_DONORSCOUNTS'       => '<strong>PayPal Donation: Risincronizza pagamenti donatori</strong>',
	'LOG_PPDE_STAT_RESYNC_TRANSACTIONSCOUNTS' => '<strong>PayPal Donation: Risincronizza conteggio operazioni</strong>',
	'LOG_PPDE_STAT_RETEST_REMOTE'             => '<strong>PayPal Donation: Connesione remota rilevata</strong>',
));

/**
 * Confirm box
 */
$lang = array_merge($lang, array(
	'PPDE_DC_CONFIRM_DELETE' => 'Sei sicuro di voler cancellare la valuta selezionata?',
	'PPDE_DC_GO_TO_PAGE'     => '%sModifica valuta esistente%s',
	'PPDE_DC_ADDED'          => 'È stata aggiunta una moneta.',
	'PPDE_DC_UPDATED'        => 'Una moneta è stata aggiornata.',
	'PPDE_DC_DELETED'        => 'Una moneta è stata eliminata.',
	'PPDE_DP_CONFIRM_DELETE' => 'Sei sicuro di voler cancellare la pagina delle donazioni selezionata?',
	'PPDE_DP_GO_TO_PAGE'     => '%sModifica pagina donazione esistente%s',
	'PPDE_DP_ADDED'          => 'Una pagina di donazione per la lingua “%s” è stata aggiunta.',
	'PPDE_DP_DELETED'        => 'Una pagina di donazione per la lingua “%s” è stata rimossa.',
	'PPDE_DP_UPDATED'        => 'Una pagina di donazione per la lingua “%s” è stata aggiornata.',
	'PPDE_SETTINGS_SAVED'    => 'impostazioni donazione salvate.',
));

/**
 * Errors
 */
$lang = array_merge($lang, array(
	'EXCEPTION_INVALID_CONFIG_NAME'      => 'Il nome per la configurazione “%s” non esiste.',
	'PPDE_CANNOT_DISABLE_ALL_CURRENCIES' => 'Non è possibile disabilitare tutte le valute.',
	'PPDE_DC_EMPTY_NAME'                 => 'Inserire un nome per la moneta.',
	'PPDE_DC_EMPTY_ISO_CODE'             => 'Inserisci un codice ISO.',
	'PPDE_DC_EMPTY_SYMBOL'               => 'Inserisci un simbolo.',
	'PPDE_DC_EXISTS'                     => 'Questa moneta esiste già.',
	'PPDE_DC_NO_CURRENCY'                => 'Nessuna moneta trovata.',
	'PPDE_DP_EMPTY_LANG_ID'              => 'Nessuna lingua selezionata.',
	'PPDE_DP_EMPTY_NAME'                 => 'La pagina di donazione selezionata non esiste.',
	'PPDE_DP_EXISTS'                     => 'Questa pagina donazione esiste già.',
	'PPDE_DP_NO_DONATION_PAGES'          => 'Nessuna pagina di donazione trovata.',
	'PPDE_DT_NO_TRANSACTION'             => 'Nessuna transazione trovata.',
	'PPDE_DISABLE_BEFORE_DELETION'       => 'È necessario disattivare questa valuta prima di cancellarla.',
	'PPDE_SETTINGS_MISSING'              => 'Si prega di verificare "Account ID" o "indirizzo Sandbox”.',
));
