<?php
/*
 * defines the characters used in OGame to indicate player status
 */
define("PLAYER_BANNED","b");
define("PLAYER_VACATION_MODE","v");
define("PLAYER_NOOB","d");
define("PLAYER_INACTIVE","i");
define("PLAYER_LONG_INACTIVE","I");
define("PLAYER_OUTLAW","o");

/*********************************************************************/
/***************************** public ********************************/
/*********************************************************************/
//index.php
define("L_USERNAME","Username");
define("L_PASSWORD","Password");
define("L_LOGINFAILURE","L’username o la password sono errate oppure il tuo account non e’ stato ancora attivato.");
define("L_TOKENFAILURE","La tua logon key è errata o il tuo account non è ancora stato attivato");
define("L_LOGINTEXT","Per favore Logga.");
define("L_LANGUAGE","Lingue disponibili:");
define("L_TIMEOUT","Sessione in timed out!");
define("L_REGISTER","Registrati");
define("L_PWLOST","Password smarrita");
define("INDEX_TITLE","Anteprima");
define("INDEX_INFO","Informazioni");
define("INDEX_ENTRIES","Numero di tutti i Sistemi Solari");
define("INDEX_ENTRIES_LASTWEEK","Nuovi Sistemi Solari dell’ultima settimana");
define("INDEX_ENTRIES_TO_OLD","Sistemi vecchi di oltre un mese");
define("INDEX_REGISTERED_USERS","Utenti registrati");
define("INDEX_PAGEFORWARD","Se il tuo browser non supporta il reindirezionamento, clicca qui.");
define("INDEX_NOTICES","Note");
define("INDEX_PLAYERS","Statistiche Giocatore");
define("INDEX_ALLIES","Statistiche Alleanza");
define("INDEX_REPORTS","Rapporti di spionaggio");
define("INDEX_VERSION","Scarica l’ultima versione");
define("INDEX_LATEST_VERSION","Nessun aggiornamento disponibile");
define("INDEX_SHOUTBOX","Box messaggi");
define("INDEX_NOENTRY","Nessun mesaggio al momento");
define("INDEX_COMMENT","Tuoi messaggi");
define("INDEX_INSERT","Inserisci");
define("INDEX_UMOD","Utenti in modalita’ vacanza");
define("INDEX_NO_MOONS","Numero di Lune");
define("INDEX_NO_EMPTY_SYSTEMS","Numero di Sistemi vuoti");
define("INDEX_NO_FULL_SYSTEMS","Numero di Sistemi Completamente Pieni");
define("INDEX_NO_TARGETS","Numero di Possibili Obiettivi");
// 4.0
define("INDEX_USERINFO","Attivita’ utenti");
define("INDEX_ONLINE","Attivi ora");
define("INDEX_TODAY","Attivi oggi");
define("INDEX_ALL","Numero complessivo di login");
// 4.3.7
define("GENERAL_LOAD_FORM","Carica dati modulo");
define("GENERAL_SAVE_FORM","Salva dati modulo");
define("GENERAL_SAVE_AS_TEXT","Salva come");
define("GENERAL_SAVE","Salva");
// 4.8
define("INDEX_USERMANAGEMENT","Panoramica nuove registrazioni");
define("INDEX_NEEDADMIN","Accounts da sbloccare");
define("INDEX_NEEDEMAIL","Accounts da confermare");
define("INDEX_TOOLBAR_INFO","Informazioni per plugin di Galaxytool");
define("INDEX_TOOLBAR_URL","Galaxytool URL");
define("INDEX_TOOLBAR_VERSION_REQUIRED","Versione minima richiesta per Plugin di Galaxytool");
define("INDEX_TOOLBAR_INSTALL_GUIDE","Istruzioni per l'installazione del plugin");
define("INDEX_TOOLBAR_TOKEN","Chiave d'accesso");
define("INDEX_TOOLBAR_NEW_TOKEN","Genera una nuova chiave");
define("INDEX_PLAYERS_WITH_N_PLANETS","Giocatori con più di &1 pianeti");
define("INDEX_GETTING_STARTED","Introduzione a Galaxytool");
define("INDEX_GETTING_STARTED1","Benvenuti nel Galaxytool!");
define("INDEX_GETTING_STARTED2","Galaxytool vi aiuterà ad analizzare tutto ciò che succede nell'universo OGame nel quale giocate, ovvero l'universo &1 ");
define("INDEX_GETTING_STARTED3","Affinchè possiate analizzare dei dati, dovete prima di tutto averli inseriti. Per questa operazione è necessario usare un plugin quale ad esempio &1 per Firefox.");
define("INDEX_GETTING_STARTED4","Una volta completata l'installazione del plugin, vedrete apparire una piccola finestra di stato ogniqualvolta un dato viene inviato al vostro galaxytool. Voi dovete solo navigare per le pagine di OGame, e il plugin lavorerà in automatico.");
define("INDEX_GETTING_STARTED5","Dopo che il plugin avrà inserito tutti i dati, potrete vedere quante e quali colonie hanno i vari giocatori, dove sono situate, quali rapporti esistono, e quando sono più attivi.");
define("INDEX_GETTING_STARTED6","Vi aiuterà anche ad analizzare il vostro andamento se confrontate i vostri risultati con quelli dei vostri avversari, oppure con  l'analisi dei vostri rapporti di combattimento per vedere quanto avete razziato i giorni o le settimane precedenti.");
define("INDEX_GETTING_WIKIPAGE","Galaxytool contiene molti altri strumenti.");
define("INDEX_GETTING_WIKIPAGE2","Per sapere come usarli visita il nostro wiki.");
define("INDEX_GETTING_BOARD","Per darci dei riscontri o proporci nuove idee puoi usare il nostro forum:");
define("INDEX_GETTING_CHAT1","O visitare la nostra chatroom:");
define("INDEX_GETTING_CHAT2","Non saremo online 24 ore su 24, ma per molto del nostro tempo libero. Siate pazienti.");
// new 5.0
define("INDEX_CLOSE","Chiudi");
define("INDEX_LOGIN","Accedi");
define("GENERAL_REQUIRED_FIELDS","Per favore, compila tutti i campi");
define("INDEX_MESSAGES","Messaggi");
define("INDEX_EXAMPLE","Esempio");
define("INDEX_INVALID_DATA","Dato non valido");
define("GENERAL_COLUMN_HIDE_TITLE","Gestione Colonne");
define("GENERAL_COLUMN_HIDE_INFO","Per favore, selezione le colonne che vuoi vedere nella tabella");
define("GENERAL_ENTRIES_DELETED","&1 dati cancellati");
define("GENERAL_APPLY","Applica");
define("STARTPAGE_GALAXYTOOL_DESCR","<em>Galaxytool</em> è un tool per OGame.");
define("GENERAL_OVERWRITE","Sovrascrivi dati doppi");
define("GENERAL_OVERWRITE_QUESTION","Sovrascrivi?");
define("INDEX_OWN_LOGINS","Accessi Effettuati");
define("GENERAL_OPEN_IN_NEW_WINDOW","Apri in nuova finestra");
// 5.1
define("GENERAL_UNIT_OF_MEASURE_DAYS","Days");

/*********************************************************************/
/***************************** internal ******************************/
/*********************************************************************/
// index.php
define("PROGRAM_NAME","OGame Galaxytool");
define("SHORTNAME","Galaxytool");
define("BACK_INDEX","Torna alla pagina principale");
define("UNIVERSE","Universo");

// search
define("MENU_INFO_LINKS","Informazioni");
define("MENU_PAGE","Anteprima");
define("MENU_DB_SEARCH","Cerca nel Database");
define("MENU_DB_NOTICES","Cerca nelle Note");
define("MENU_DB_REPORTS","Cerca nei Rapporti");
define("MENU_GALAXYVIEW","Visione Galassia");
define("MENU_STATISTICS","Statistiche");
define("MENU_ALLYHISTORY","Storia Alleanza");
// 4.7
define("MENU_FLEET_MOVEMENTS","Movimenti Flotta");
define("MENU_COMBAT_REPORTS","Rapporti di combattimento");
define("MENU_MESSAGES","Messaggi gioco");

// insert / change
define("MENU_OPTION_LINKS","Opzioni");
define("MENU_DB_REFRESH","Inserisci nel Database");
define("MENU_NOTICES","Note");
define("MENU_DB_STATUS","Status del database");
define("MENU_USEROPTIONS","Gestione utente");
define("MENU_USEROPTIONS2","Opzioni utente");
define("MENU_USEROPTIONS3","Informazioni Utente");
// 4.2
define("MENU_ADMIN","Administration");
// 4.3.3
define("MENU_LOGOUT","Esci");

// Stuff
define("MENU_STUFF","Varie");
define("MENU_FORUM_THREAD","Forum Developer");
define("MENU_DOWNLOADPAGE","Pagina di Download");
define("MENU_LANGUAGE","Lingua");
define("MENU_HELP","Aiuto");
// 4.0
define("MENU_TOOLOPTIONS","Opzioni Galaxytool");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1","E’ stato gia’ inserito nel database");
define("PARSER_ERROR1","Errore mentre si tentava di inserire le seguenti cordinate.");
define("PARSER_ERROR2","Impossibile trovare il database!");
define("PARSER_ERROR3","Impossibile trovare il database server!");
define("PARSER_WRONG_UNIVERSE","Universo sbagliato - presente: \"&1\"  atteso: \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","OGame Galaxytool - Pagina di Ricerca");
define("SHOW_SEARCH","Ricerca nel database");
define("SHOW_ALLYSYMBOL","Tag Alleanza");
define("SHOW_PLAYERNAME","Nome Giocatore");
define("SHOW_MOONS","Solo pianeti con Luna");
define("SHOW_NOTICES","Solo pianeti con Note");
define("SHOW_COLONIES","Solo pianeti per colonizzazione");
define("SHOW_YES","Si");
define("SHOW_NO","No");
define("SHOW_SEARCHRANGE","Distanza");
define("SHOW_SEARCH_IN","Cerca nella galassia");
define("SHOW_FROM_SYSTEM","dal sistema");
define("SHOW_FROM_PLANET","dalla posizione del pianeta");
define("SHOW_TO","fino");
define("SHOW_DESCRIPTION","Puoi usare i * per i Giocatori o per le alleanze. Così puoi trovare tutti i Giocatori con &quot;name&quot; nel loro nome.<br/>Compila questo campo solo se lo vuoi specificare.");
define("SHOW_SORT_BY","Creato da");
define("SHOW_GALASYSTEM","Galassia/Sistema");
define("SHOW_ALLYNAME","Nome Alleanza");
define("SHOW_SEARCHBUTTON","Cerca");
define("SHOW_ADDRESS","Indirizzo");
define("SHOW_ALLYSORT","Alleanza");
define("SHOW_PLANET","Nome pianeta");
define("SHOW_STATUS","Status");
define("SHOW_CURRENTNESS","Ultimo Aggiornamento");
define("SHOW_PLAYER_STATUS","Status Giocatore");
define("SHOW_PLAYER_STATUS1","Tutto");
define("SHOW_PLAYER_STATUS2","Possibili Obiettivi");
define("SHOW_PLAYER_STATUS3","Inattivi");
define("SHOW_HITS","Risultati");
define("SHOW_OF","di");
define("SHOW_ASC","Salita");
define("SHOW_DESC","Discesa");
define("SHOW_RESULTS","Risultati per pagina");
define("SHOW_MOON","Luna");
define("SHOW_UKMOONSIZE","Sconosciuto");
define("SHOW_DF","DF");
define("SHOW_DF_LONG","Campo detriti");
define("SHOW_METAL","M");
define("SHOW_METAL_LONG","Metallo");
define("SHOW_CRYSTAL","C");
define("SHOW_CRYSTAL_LONG","Cristallo");
define("SHOW_BOTH","Entrambi");
define("SHOW_AT_LEAST","(Almeno)");
define("SHOW_DATE","Data");
define("SHOW_DATE_0","lascia perdere");
define("SHOW_DATE_1","più vecchio di ");
define("SHOW_DATE_2","più nuovo di");
define("SHOW_RANK","Rank");
define("SHOW_FRANK","Posizione Flotta");
define("SHOW_MEMBERS","Membri");
define("SHOW_NOTRANKED","Non dentro i top 1500.");
define("SHOW_NOTICERES","Note");
define("SHOW_REPORTS","Solo pianeti con Rapporto");
define("SHOW_REPORTS_SHORT","Rapporto");
define("SHOW_NOTHING","Nessuna voce immessa");
define("SHOW_ALLIANCE_STATUS","Status Alleanza");
define("SHOW_NO_STATUS","Nessuno Stato");
define("SHOW_NAP","NAP");
define("SHOW_ALLIED","Alleato");
define("SHOW_WAR","Guerra");
define("SHOW_BOYCOTT","Boicottato");
define("SHOW_NEUTRAL","Neutrale");
define("SHOW_OWN","Propria Alleanza");
define("SHOW_WING","Forte");
// obsolete with 5.0
define("SHOW_EXT_OPTIONS1","Visualizza altre opzioni di ricerca per range di sistemi, punteggio, data o campi detriti.");
define("SHOW_EXT_OPTIONS2","Visualizza altre opzioni di ricerca per colonie, lune, rapporti, note, stato del giocatore o situazione diplomatica.");
define("SHOW_EXT_OPTIONS3","Visualizza altre opzioni di ricerca per l’ordinamento dei risultati.");
// new 5.0
define("SHOW_EXTENDED","Ricerca Avanzata");
define("SHOW_MOON_SELECTION","Pianeti con luna");
define("SHOW_REPORT_SELECTION","Planeti con rapporti di spionaggio");
define("SHOW_FILTER_BY","Escludi dalla lista");
define("SHOW_FILTER_NONE","Nessuna");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Show players without score changes within the last few days");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","OGame Galaxytool - Pagina dello Status");
define("STATUS_DB_STATUS","Status del Database");
define("STATUS_COLOR","Colore");
define("STATUS_AGE1","Dati non più vecchi di 1 giorno.");
define("STATUS_AGE2","Dati vecchi 2/4 giorni.");
define("STATUS_AGE3","Dati vecchi 4/7 giorni.");
define("STATUS_AGE4","Dati vecchi 1/2 settimane.");
define("STATUS_AGE5","Dati vecchi 2/4 settimane.");
define("STATUS_AGE6","Dati più vecchi di un Mese!");
define("STATUS_AGE7","Dati non disponibili.");
define("STATUS_ON","Attivo");
define("STYLES_COLOR1","Colore 1");
define("STYLES_COLOR2","Colore 2");
define("STYLES_COLOR3","Colore 3");
define("STYLES_COLOR4","Colore 4");
define("STYLES_COLOR5","Colore 5");
define("STYLES_COLOR6","Colore 6");
define("STYLES_COLOR7","Colore 7");
// 4.8
define("STATUS_DB_LEGEND","Legenda");
define("STATUS_GALAXY","Visuale Galassie");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","OGame Galaxytool - Gestione Utente");
define("USER_NAMES","Utente");
define("USER_ERROR","Errore");
define("USER_NEWUSER","Nuovo Utente");
define("USER_OPTIONS","Opzioni");
define("USER_USERNAME","Username");
define("USER_PASSWORD","Password");
define("USER_PASSWORD_CONFIRM","Conferma password");
define("USER_GALAXY","Galassia");
define("USER_SEARCH","Ricerche");
define("USER_INSERT","Inserisci");
define("USER_DELETE","Cancella");
define("USER_DELETE_ENTRY","Do you want to delete user ");
define("USER_STATUS","Vedi le Statistiche");
define("USER_STYLES","Modifica layout");
define("USER_SUBMIT","Immetti");
define("USER_RESET","Resetta");
define("USER_YES","Si");
define("USER_NO","No");
define("USER_STYLEPATH","Incollato allo styles.css");
define("USER_PROBES","Rapporti di spionaggio");
define("USER_EMAIL","Email");
define("USER_ERROR1","Password non corretta o Email non valida.");
define("USER_ERROR2","Email non valida.");
define("USER_INGAME","Nome-In gioco");
define("USER_ALLYTAG","Tag Alleanza");
define("USER_ALLYHISTORY","Storia Alleanza");
define("USER_DIPLOMATIC","diplomatico");
define("USER_STATSPAGE","Numero di righe per la pagina statistiche"); //non mi piace molto ma rende l’idea
define("USER_LINKS","Collegamenti");
define("USER_LINKS2","Formato:<br>text;url<br>text2;url2<br>text3;url3");
define("USER_EXPORT_TITLE","Esporta colori (BB Codes)");
define("USER_BB_COORDINATES","Coordinate");
define("USER_BB_MOON","Luna");
define("USER_BB_DEBRIS","Campo detriti");
define("USER_BB_ALLY","Nome alleanza");
define("USER_BB_ALLYDETAILS","Dettagli alleanza");
define("USER_BB_PLAYERNAME","Nome giocatore");
define("USER_BB_BANNED","Bannato");
define("USER_BB_VACATION","Vacanza");
define("USER_BB_NOOB","Debole");
define("USER_BB_INACTIVE","Inattivo");
define("USER_BB_LONGINACTIVE","Inattivo da molto tempo");
// new with 4.7
define("USER_DELETION","Cancella");
define("USER_FLEETINFO",MENU_FLEET_MOVEMENTS);
define("USER_ACTIVITIES","Attività Giocatore");
define("USER_MAINTENANCE","Manutenzione Galaxytool");
define("USER_MANAGEMENT",MENU_USEROPTIONS);
define("USER_DELETE_MY_COMBAT_REPORTS","Cancella i miei rapporti di combattimento");
define("USER_DELETE_MY_MESSAGES","Cancella i miei messaggi");
define("USER_DELETE_MY_FLEETMOVES","Cancella i miei movimenti flotte");
// 4.8
define("USER_DELETE_MY_COMBAT_REPORTS_LIMITED","Cancella i miei rapporti di combattimento più vecchi di &1 giorni");
define("USER_DELETE_MY_MESSAGES_LIMITED","Cancella i miei messaggi più vecchi di &1 giorni");
define("USER_TABLE_ENTRIES","Numero di elementi per pagina");
// 5.0
define("USER_EXISTS","Utente già esistente");
define("USER_BB_OUTLAW","Bandito");
define("USER_INVALID_URL","L'indirizzo &1 sembra non essere valido - sarà ignorato");

/*********************************************************************
* galaxyview.php
*********************************************************************/
define("VIEW_TITLE","OGame Galaxytool - Dettagli");
define("VIEW_NODATA","Nessun dato disponibile.");
define("VIEW_GALAXY","Galassia");
define("VIEW_SYSTEM","Sistema solare");
define("VIEW_POSITION","Posizione");
define("VIEW_PLANET","Pianeta");
define("VIEW_MOON","Luna");
define("VIEW_TF","DF");
define("VIEW_PLAYER","Giocatore");
define("VIEW_PLAYER_ADD","(Rank / Status)");
define("VIEW_ALLY","Alleanza");
define("VIEW_ALLY_ADD","(Rank / Membro)");
define("VIEW_METAL","M");
define("VIEW_CRYSTAL","C");
define("VIEW_COLONISED","Pianeta/i Abitato/i");
define("VIEW_UKMOONSIZE","Sconosciuto");
define("VIEW_BACK","Indietro");
define("VIEW_NOTICE","Note");
define("VIEW_REPORTS","Rapporti");
define("VIEW_MOONPHALANX","La seguente Luna può scansionare questo Sistema Solare");
define("VIEW_NOMOONS","Nessuna Luna trovata");
define("VIEW_IRAKS","Il seguente pianeta può con i Missili Interplanetari arrivare a questo Sistema Solare");
define("VIEW_NOIRAKS","Nessun Missile Interplanetario trovato");
// 4.0
define("VIEW_MOON_DESTROY_CHANCE","Possibilita’ di distruggere la luna");
define("VIEW_CHANCE_WITH_ONE","Possibilita’ con una Morte Nera");
define("VIEW_CHANCE_WITH_N","Possibilita’ con ");
define("VIEW_DEATH_STARS","Morti Nere");
define("VIEW_DS_DESTROY_CHANCE","Possibilita’ di perdere la/le Morte/i Nera/e");
define("VIEW_TOP","Top");
// new 4.3.5
define("VIEW_GO","go");
// new 5.0
define("VIEW_DIAMETER","Diametro");

/*********************************************************************
* change_password.php
**********************************************************************/
define("PW_TITLE","OGame Galaxytool - Cambia Password");
define("OLD_PASSWORD","Vecchia password");
define("NEW_PASSWORD","Nuova password");
define("CONFIRM_NEW_PASSWORD","Conferma nuova password");
define("PW_MISMATCH","Password non collegata");
define("PW_ERROR","La vecchia passord non era corretta");
define("UPDATE_DONE","Update avvenuto con successo.");
// new 4.2
define("TIMEZONE_OFFSET","Imposta Timezone in base al server");
// new 4.3
define("DELETE_ACCOUNT","Cancella questo account Galaxytool");
define("DELETE_ACCOUNT_SAFETY_REQUEST","Vuoi davvero cancellare questo account Galaxytool?");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","Autorizzazioni");
define("CH_PASSWD_ADMIN","Amministratore");
// new 4.7
define("TIMEZONE_OGAME_OFFSET","Imposta timezone in base al server OGame");
// new 4.8
define("CH_PASSWD_USER_LANGUAGE","Imposta questa lingua all'accesso");
define("CH_PASSWD_USER_LANGUAGE_NO_CHANGE","Non cambiare");
define("CH_PASSWD_EXPAND","Espanso");
define("CH_PASSWD_COLLAPSE","Ridotto");
define("CH_PASSWD_HIDDEN","Nascosto");
define("CH_PASSWD_GETTING_STARTED","Mostra introduzione a galaxytool all'accesso");
define("CH_PASSWD_PLUGIN","Mostra informazioni plugin all'accesso");

/*********************************************************************
* notices.php
**********************************************************************/
define("NOTICE_TITLE","OGame Galaxytool - Note");
define("NOTICE_HEADER","Modifica Note");
define("NOTICE_HEADER2","Modifica le proprie note");
define("NOTICE_PUBLIC","Accessibile per gli altri?");
define("NOTICE_YES","si");
define("NOTICE_NO","no");
define("NOTICE_TEXT","Testo nota");
define("NOTICE_SAVE","Salva");
define("NOTICE_DELETED","Campo eliminato");
define("NOTICE_SAVED","Campo salvato.");
define("NOTICE_RESULTS","Tutti i risultati");
define("NOTICE_USER","Utente");
define("NOTICE_DATE","Data");
define("NOTICE_EDIT","Modifica");
define("NOTICE_DELETE","Cancella");
define("NOTICE_NEW","Crea una propria immissione");
define("NOTICE_NOTPUBLIC","Note non pubbliche.");
define("NOTICE_ALL","Tutte");
define("NOTICE_NONE",SHOW_FILTER_NONE);
define("NOTICE_SEARCH","Cerca nella note");
define("NOTICE_SEARCH_SHORT","Cerca");
define("NOTICE_HITS","Risultati");
define("NOTICE_SHOWRESULTS","Risultati per pagina");
define("NOTICE_OF","di");
define("NOTICE_NOTHING","Nessuna immissione trovata");
// 4.0
define("NOTICE_CHARS","Caratteristiche");
define("NOTICE_PLAYERNAME","Giocatore");
define("NOTICE_SHOWALL","Visualizza tutte le note");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","OGame Galaxytool - Rapporti di Spionaggio");
define("REPORTS_RESOURCES","Risorse");
define("REPORTS_FLEET","Flotta");
define("REPORTS_DEFENCE","Difese");
define("REPORTS_BUILDINGS","Strutture");
define("REPORTS_TECHNOLOGY","Ricerche");
define("REPORTS_MOON","Luna");
define("REPORTS_SEARCH","Cerca nei Rapporti di spionaggio");
define("REPORTS_SEARCH_SHORT","Cerca");
define("REPORTS_HITS","Risultati");
define("REPORTS_NOTHING","Nessuna immissione trovata");
define("REPORTS_ADDRESS","Indirizzo");
define("REPORTS_CURRENTNESS","Currentness");
define("REPORTS_PLAYERNAME","Nome Giocatore");
define("REPORTS_ALLY","Alleanza");
define("REPORTS_VIEW","Mostra Rapporto");
define("REPORTS_SEARCH_IN","Cerca nella Galassia");
define("REPORTS_FROM_SYSTEM","dal sistema");
define("REPORTS_TO","a");
define("REPORTS_DELETE","Cancella");
define("REPORTS_DELETED","Immissione cancellata");
define("REPORTS_RESULTS","Risultati per pagina");
define("REPORTS_OF","di");
define("REPORTS_DATE","Data");
define("REPORTS_DATE_0","lascia stare");
define("REPORTS_DATE_1","più vecchio di");
define("REPORTS_DATE_2","più nuovo di");
define("REPORTS_NOTICES","Avvisi");
define("REPORTS_AT_LEAST_RESOURCES","Risorse (almeno)");
define("REPORTS_SEARCH_EXTENDED","Ricerca Estesa");
define("REPORTS_FLEET_RESIS","Flotta- Punteggio");
define("REPORTS_DEFENCE_RESIS","Difesa- Punteggio");
define("REPORTS_ALL_RESIS","Somma Punteggi");
define("REPORTS_TECHS","Tecnologie");
define("REPORTS_UNKNOWN_ENTRIES","Immissioni sconosciute");
define("REPORTS_PARTLY_INSERTED","Parzialmente Inserito");
define("REPORTS_FOR_ALL_RES","per tutte le risorse");
define("REPORTS_FOR_TF","per il campo detriti");
define("REPORTS_KT","Carghi Leggeri");
define("REPORTS_GT","Carghi Pesanti");
define("REPORTS_SS","Navi da Guerra");
define("REPORTS_REC","Reciclatrici");
define("REPORTS_RAIDABLE","Solo obbiettivi per RAID");
define("REPORTS_ALL_RESOURCES","tutte le risorse");
// 4.0
define("REPORTS_STUFF","Varie");
define("REPORTS_SPEEDSIM","Simula con SpeedSim");
define("REPORTS_DRAGOSIM","Simula con Dragosim");
define("REPORTS_STATUS","Stato");
define("REPORTS_ERROR","Si e’ verificato un’errore");
// 4.2
define("REPORTS_OWN_REPORTS","Solo i miei Report");
// 4.3.3
define("REPORTS_UPLOAD_BY","Report inviati da");
// 4.4
define("REPORTS_DEPTH","Accuratezza Report");
define("REPORTS_FLEET_SCORE","Punti Flotte");
define("REPORTS_DEFENCE_SCORE","Punti Difese");
// 5.0
define("REPORTS_HOURS","Ore");
define("REPORTS_MAX_RESULTS_HIT","La tua ricerca mostra più di &1 risultati. Solo i primi &1 risultati saranno mostrati. Per favore, correggi le impostazioni di ricerca al fine di ridurre il numero di risultati ottenibili.");
define("REPORTS_OSIMULATE","Simula con OSimulate");
define("REPORTS_SHOW_ONLY","Visualizza");
define("REPORTS_SHOW_PLANETS","Pianeti");
define("REPORTS_SHOW_MOONS","Lune");
define("REPORTS_OWNER","Proprietario");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","OGame Galaxytool - Statistiche");
define("STATS_TBLHEAD","Statistiche");
define("STATS_RANK","Rank");
define("STATS_PLAYERNAME","Nome Giocatore");
define("STATS_ALLYNAME","Tag Alleanza");
define("STATS_SCORE","Punteggio");
define("STATS_FLEET","Flotta");
define("STATS_RESEARCH","Ricerca");
define("STATS_MEMBERS","Membri");
define("STATS_STATUS","Status");
define("STATS_NOTHING","Nessuno Status");
define("STATS_NAP","NAP");
define("STATS_ALLIED","Alleato");
define("STATS_WAR","Guerra");
define("STATS_BOYCOTT","Boicottato");
define("STATS_NEUTRAL","Neutrale");
define("STATS_OWN","Propria Alleanza");
define("STATS_WING","Forte");
define("STATS_UPDATE","Immesso da");
define("STATS_PLAYERSTATS","Stats Giocatore");
define("STATS_ALLYSTATS","Stats Alleanza");
// 4.0
define("STATS_DELETE","Vuoi cancellare questo inserimento?");
define("STATS_CONFIRM_DELETE","Vuoi davvero cancellare questo giocatore?");
define("STATS_CHANGE_PLAYER_STATUS","Stato del giocatore");
define("STATS_CHANGE_ALLIANCE_STATUS","Stato dell’alleanza");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","Tutti i membri dell'alleanza otterranno lo status selezionato. Qualsiasi status preesistente verrà sovrascritto. Sarà possibile in seguito modificare lo status dei giocatori.");
define("STATS_UNKNOWN","Rest");
define("STATS_DETAILS","Dettagli per");
// 4.4
define("STATS_PLAYERSTATUS",SHOW_PLAYER_STATUS);
define("STATS_IGNORE_STATUS",SHOW_PLAYER_STATUS1);
define("STATS_ACTIVE","attivo");
define("STATS_INACTIVE",USER_BB_INACTIVE);
define("STATS_BANNED",USER_BB_BANNED);
define("STATS_VACATION",USER_BB_VACATION);
define("STATS_NOOB",USER_BB_NOOB);
// 4.8
define("STATS_YES",SHOW_YES); // reuse SHOW definitions if applicable
define("STATS_NO",SHOW_NO);
define("STATS_SEARCH",USER_SEARCH);
define("STATS_SHOW_GRAPH","Mostra dettagli per categoria di punteggio");
define("STATS_LONG_INACTIVE",USER_BB_LONGINACTIVE);
// 4.9
define("STATS_STANDARD","Punteggio");
define("STATS_MILITARY","Punti Esercito");
define("STATS_ECONOMY","Economia");
define("STATS_HONOUR","Punti Onore");
define("STATS_MILITARY_BUILD","Punti Esercito Costruiti");
define("STATS_MILITARY_DESTROYED","Punti Esercito Distrutti");
define("STATS_MILITARY_LOST","Punti Esercito Persi");

/*********************************************************************
* register.php
**********************************************************************/
define("REGISTER_REGISTRATE","Registra");
define("REGISTER_LOGINNAME","Nome-Login");
define("REGISTER_PASSWORD","Password");
define("REGISTER_PASSWORD_CONFIRM","Conferma Password");
define("REGISTER_EMAIL","Email");
define("REGISTER_INGAME","Nome-In Gioco");
define("REGISTER_ALLYTAG","Tag Alleanza");
define("REGISTER_EMAILVERIFICATION","Controlla Email");
define("REGISTER_EMAILTEXT","Visita il seguente link per confermare la tua registrazione a Galaxytool.");
define("REGISTER_ERROR1","Login-Username gia’ usato.");
define("REGISTER_ERROR2","Errore mentre si tentava di inviare la mail. Contattare il tuo admin.");
define("REGISTER_ERROR3","Errore mentre si tentava di inviare dati al database");
define("REGISTER_INFO1","Il tuo account è stato creato.");
define("REGISTER_INFO2","Per favore, clicca sul link nella tua email per confermare la registrazione.");
define("REGISTER_INFO3","Account confermato. Il tuo admin deve attivare la registrazione.");
define("REGISTER_BUTTON","Torna alla main page");
define("REGISTER_NEW_SUBJECT","Nuovo Utente registrato a Galaxytool");
define("REGISTER_NEW_MAILTEXT","Nuovo Utente si e’ Registrato.");
// new 4.2
define("REGISTER_BACK","Torna indietro alla prima pagina");
// new 4.3.5
define("REGISTER_MISSING_FIELDS","Compila tutti i campi necessari!");
// new 4.8
define("REGISTER_ERROR4","Indirizzo email non valido");
define("REGISTER_ERROR5","Password errata");
define("REGISTER_PWS","Efficacia password");
define("REGISTER_PWS0","molto bassa");
define("REGISTER_PWS1","bassa");
define("REGISTER_PWS2","buona");
define("REGISTER_PWS3","alta");
define("REGISTER_PWS4","molto alta");
// new 5.0
define("REGISTER_EMAIL_USED","Questo indirizzo email è già in uso");

/*********************************************************************
* lost_password.php
**********************************************************************/
define("LOSTPW_TITLE","Ho perso la mia Password");
define("LOSTPW_INFO2","Una nuova password e’ stata generata e inviata al tuo indirizzo Email.");
define("LOSTPW_BUTTON1","Prendi la nuova password");
define("LOSTPW_BUTTON2","Torna alla Pagina Principale");
define("LOSTPW_LOGINNAME","Nome-Login");
define("LOSTPW_EMAIL","Email");
define("LOSTPW_ERROR1","Errore mentre tentava di inviare dati al database");
define("LOSTPW_ERROR2","Nessuna immissione corrispondente trovata!");
define("LOSTPW_ERROR3","Errore mentra tantava di inviare l’email. Contatta il tuo admin.");
define("LOSTPW_EMAIL_SUBJECT","La nuova password che hai richiesto");
define("LOSTPW_EMAIL_TEXT1","Qui il tuo nuovo login per Galaxytool");
define("LOSTPW_EMAIL_TEXT2","Username");
define("LOSTPW_EMAIL_TEXT3","Password");
// new 5.0
define("LOSTPW_INFO1","A breve riceverai un'email con un link di verifica della tua richiesta");
define("LOSTPW_CONFIRM_RESET_SUBJECT","Password smarrita?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","Ciao,\n\nqui puoi resettare la password del Galaxytool. Per generare una nuova password, clicca sul seguente link:");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","OGame Galaxytool - Informazioni Utente");
define("USERINFO_NAMES","Tutti gli utenti di questo tool");
define("USERINFO_DETAIL","Informazioni dettagliate di");
define("USERINFO_ERROR1","Nessun utente conosciuto con questo ID!");
define("USERINFO_USERNAME","Nome Login");
define("USERINFO_INGAME","Nome in Gioco");
define("USERINFO_EMAIL","Email");
define("USERINFO_ALLYTAG","Alleanza");
define("USERINFO_STYLEPATH","Skin");
define("USERINFO_STATUS","Status");
define("USERINFO_ACTIVATE","Attiva Account");
define("USERINFO_LOGINS","Numero di Login");
define("USERINFO_LASTLOGIN","Ultimo Login");
define("USERINFO_DATA","Informazioni sul sistema immesso");
define("USERINFO_NODATA","Questo utente non ha ancora inserito nessun Sistema!");
define("USERINFO_GALAXY","Galassia");
define("USERINFO_SYSTEMS","Numero di Sistemi");
define("USERINFO_IP","Indirizzo IP");
define("USERINFO_LOGINTIME","Login");
define("USERINFO_NOLOGIN","Il giocatore non ha mai loggato da solo.");
define("USERINFO_LAST_GALAXYUPDATE","Inserita l’ultima Visuale della Galassia");
define("USERINFO_LAST_PUBLIC_NOTICE","L’ultima Nota Pubblica");
define("USERINFO_LAST_PRIVATE_NOTICE","L’ultima Nota Privata");
define("USERINFO_NUMBEROF_PUBLIC_NOTICE","Numero di Note Pubbliche");
define("USERINFO_NUMBEROF_PRIVATE_NOTICE","Numero di Note Private");
define("USERINFO_ACTIVATED","Account attivato");
define("USERINFO_ACTIVATIONTEXT","L'Admin di GalaxyTool ha attivato il tuo account.\n\nBuon divertimento con GalaxyTool!");
// new 4.8
define("USERINFO_LAST_SUBMIT","Ultimo inserimento");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","OGame Galaxietool - Visione Storica dell’Alleanza");
define("ALLYHISTORY_TBLHEAD","Visione Storica");
define("ALLYHISTORY_PLAYERNAME","Nome Giocatore");
define("ALLYHISTORY_ALLYNAME","Alleanza");
define("ALLYHISTORY_LASTMONTH","Ultimo mese"); // changed at 4.0
define("ALLYHISTORY_ALL_DATA","tutte le informazioni disponibili"); // new 4.0
define("ALLYHISTORY_SHOW","visualizza statistica");
define("ALLYHISTORY_TIMESPAN","Timespan");
define("ALLYHISTORY_PROGESS","Progresso");
define("ALLYHISTORY_SCORE","Punteggi");
define("ALLYHISTORY_FSCORE","Punteggio Flotta"); // new 4.0
define("ALLYHISTORY_RSCORE","Punteggio Ricerca"); // new 4.0
define("ALLYHISTORY_MEMBER","Membri"); // new 4.0
define("ALLYHISTORY_NOTHING","nessuna immissione trovata");
define("ALLYHISTORY_DETAILS","Dettagli");
define("ALLYHISTORY_SHOW_ADDRESS","Coordinate");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","Informazioni giocatore");
define("DETAILEDINFO_ALLYINFO_TITLE","Informazioni alleanza");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","Informazioni dettagliate del giocatore");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","Informazioni dettagliate dell’alleanza");
define("DETAILEDINFO_NO_ALLIANCE","nessuna");
define("DETAILEDINFO_SCORE","Statistiche punteggio");
define("DETAILEDINFO_FLEET","Statistiche flotta");
define("DETAILEDINFO_RESEARCH","Statistiche ricerca");
define("DETAILEDINFO_RANK","Posizione");
define("DETAILEDINFO_POINTS","Punteggio");
define("DETAILEDINFO_KNOWN_PLANETS","Colonie conosciute");
define("DETAILEDINFO_MOONS","Lune conosciute");
define("DETAILEDINFO_PHALANX_AREA","Area della falange");
define("DETAILEDINFO_NO_PHALANX_AREA","Nessuna falange trovata");
define("DETAILEDINFO_NOTICES","Note");
define("DETAILEDINFO_NO_NOTICES","Nessuna nota trovata");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","Alleanza precedente");
define("DETAILEDINFO_RESOURCES_PER_HOUR","Risorse prodotte in un ora");
define("DETAILEDINFO_RESOURCES_PER_DAY","Risorse prodotte in 24h");
define("DETAILEDINFO_RESOURCES_PER_WEEK","Risorse prodotte in 7 giorni");
define("DETAILEDINFO_RESOURCES_PER_MONTH","Risorse prodotte in un mese (30 giorni)");
define("DETAILEDINFO_METAL","Metallo");
define("DETAILEDINFO_CRYSTAL","Cristallo");
define("DETAILEDINFO_DEUTERIUM","Deuterio");
define("DETAILEDINFO_UNKNOWN","sconosciuto");
define("DETAILEDINFO_SCORE_DISTRIBUTION","Distribuzione del punteggio");
// new 4.2
define("DETAILEDINFO_GENERAL","Dettagli");
define("DETAILEDINFO_MEMBERS","Membri");
define("DETAILEDINFO_GRAPHS","Grafici");
define("DETAILEDINFO_RESOURCES","Risorse");
define("DETAILEDINFO_FLEET_TAB","Flotta");
define("DETAILEDINFO_TECH","Ricerche");
define("DETAILEDINFO_FLEET_DETAIL","Somma / (Media Giocatori) fra tutti i Report disponibili");
define("DETAILEDINFO_TECH_DETAIL","Media di tutte le informazioni giocatore disponibili");
// new 4.3
define("DETAILEDINFO_PLANET_TAB",REPORTS_SHOW_PLANETS);
define("DETAILEDINFO_MOON_TAB",REPORTS_SHOW_MOONS);
// 4.7
define("DETAILEDINFO_ACTIVITIES","Attività");
define("DETAILEDINFO_NODATA",VIEW_NODATA); // reuse existing translations
define("DETAILEDINFO_ACTIVITY_DESCRIPTION","Mostra attività di &1 raccolta da:");
define("DETAILEDINFO_GALAXYVIEWS","Visione Galassia");
define("DETAILEDINFO_SCANS","Azioni di spionaggio");
define("DETAILEDINFO_MESSAGES","Messaggi giocatore");
define("DETAILEDINFO_COMBATS","Rapporti di combattimento");
define("DETAILEDINFO_ALLYPAGE","Visione Allenaza");
define("DETAILEDINFO_MANUAL","Inserimenti manuali");
define("DETAILEDINFO_START","Inizio");
define("DETAILEDINFO_TO","ad");
define("DETAILEDINFO_TODAY","Oggi");
define("DETAILEDINFO_DATA_RESTRICTION","ristretto da:");
define("DETAILEDINFO_WEEKDAY_WEEKEND","Weekend");
define("DETAILEDINFO_WEEKDAY_WORKINGDAY","Feriale");
define("DETAILEDINFO_WEEKDAY_MONDAY","Lunedì");
define("DETAILEDINFO_WEEKDAY_TUESDAY","Martedì");
define("DETAILEDINFO_WEEKDAY_WEDNESDAY","Mercoledì");
define("DETAILEDINFO_WEEKDAY_THURSDAY","Giovedì");
define("DETAILEDINFO_WEEKDAY_FRIDAY","Venerdì");
define("DETAILEDINFO_WEEKDAY_SATURDAY","Sabato");
define("DETAILEDINFO_WEEKDAY_SUNDAY","Domenica");
define("DETAILEDINFO_WEEKDAY_SHORTLENGTH",3); // number of characters to shorten week day
define("DETAILEDINFO_PLAYER_CURRENTLY_ACTIVE","Il giocatore è al momento attivo");
define("DETAILEDINFO_PLAYER_MESSAGES","messaggi giocatore disponibili");
define("DETAILEDINFO_SHOW","mostra");
define("DETAILEDINFO_NONE","non disponibile");
define("DETAILEDINFO_ENTER_MANUALLY","Immetti attività per questo giocatore");
define("DETAILEDINFO_PLAYER_SEEN_ON","Il player era online alle");
define("DETAILEDINFO_INSERT","Inserire");
define("DETAILEDINFO_OGAME_SERVERTIMES","Attenzione: tutte le date e gli orari fanno riferimento all'ora del server di OGame !");
define("DETAILEDINFO_DAY_VIEW","Visuale 24 ore");
define("DETAILEDINFO_WEEK_VIEW","Visuale Settimana");
// new 4.8
define("DETAILEDINFO_HOME_PLANET","Pianeta Madre");
// new 5.0
define("DETAILEDINFO_PLANETNAME","Nome"); // also used for moons!
define("DETAILEDINFO_DEFENCE_SCORE","Punteggio difesa");
define("DETAILEDINFO_DEFENCE_SCORE_TOOLTIP","Punteggio difesa = Flotta - Punteggio + Ricerca + Economia.<br/>Tutte queste classifiche devono essere sempre aggiornate per averre un risultato attendibile!");
define("DETAILEDINFO_SCORE_PER_SHIP","Punteggio per nave");
define("DETAILEDINFO_SHIPS","Numero di navi");
define("DETAILEDINFO_DATE_IN_FUTURE","Non inserire date o orari che non siano nel passato. Non verranno memorizzati.");

// new 4.2
/*********************************************************************
* administration.php
**********************************************************************/
define("ADMIN_TITLE","Gestione Galaxytool");
define("ADMIN_DISCLAMER","Attenzione: L'esecuzione della maggior parte di questi script comporta la cancellazione di dati");
define("ADMIN_INCONSISTENCIES","Incongruenze nel database");
define("ADMIN_PLANETS","Pianeti in pos 0 o maggiore di 15");
define("ADMIN_GALAXIES","Cancella galassie maggiori di &1 ");
define("ADMIN_PLAYERS","Cancella giocatori senza playerid OGame - Elimina i dati duplicati dei player ");
define("ADMIN_REPORTS","Cancella i report se un pianeta non esiste più");
define("ADMIN_MISC","Varie");
define("ADMIN_RESET","Reset Galaxytool (utenti e tabella ip non vengono cancellati)");
define("ADMIN_OLD_PLAYERS","Cancella i dati più vecchi di &1 giorni");
define("ADMIN_OLD_REPORTS","Cancella report più vecchi di &1 giorni");
define("ADMIN_LOADING","Non chiudere questa finestra durante il caricamento della pagina.");
define("ADMIN_STATUS","Status della richiesta");
define("ADMIN_SELECTION","Selezionare almeno una voce");
define("ADMIN_SAFETY","Sei sicuro di voler eseguire questi script ?");
define("ADMIN_DONE","Eseguito");
define("ADMIN_NOTBD","Niente da eseguire");
// new 4.3
define("ADMIN_OLD_GALAXIES","Rimuovi visioni galassia più vecchie di &1 giorni");
define("ADMIN_UNUSED_PLAYERS","Rimuovi players che non compaiono nella visione galassia");
// new 4.7
define("ADMIN_OLD_ACTIVITIES","Rimuovi le attività giocatore più vecchie di &1 giorni");
// new 4.8
define("ADMIN_OLD_COMBATS","Elimina i rapporti di combattimento più vecchi di &1 giorni");
define("ADMIN_OLD_INGAME_MSG","Elimina i messaggi più vecchi di &1 giorni");
// new 5.0
define("ADMIN_OGAME_API","Carica nel galaxytool i dati pubblici di OGame");
define("ADMIN_OGAME_ALL_DATA",ALLYHISTORY_ALL_DATA);
define("ADMIN_OGAME_GALAXY_DATA",MENU_GALAXYVIEW);
define("ADMIN_OGAME_STATISTICS_DATA",MENU_STATISTICS);

// new 4.3.5
/*********************************************************************
* errorpage.php
**********************************************************************/
define("ERRORPAGE_PAGEFORWARD","Clicca qui se il tuo browser non supporta il reindirizzamento");
define("ERRORPAGE_PERMISSION_DENIED","Non hai il permesso di accedere a questa pagina. Clicca qui per tornare indietro.");

// new 4.7
/*********************************************************************
* fleet_movements.php
**********************************************************************/
define("FLEETS_TITLE","OGame Galaxytool - Movimenti flotta");
define("FLEETS_ACTUAL_FLEETS","Movimenti di flotta correnti");
define("FLEETS_YES",SHOW_YES);
define("FLEETS_NO",SHOW_NO);
define("FLEETS_DETAILS","Dettagli");
define("FLEETS_MISSION_EXPEDITION","Spedizione");
define("FLEETS_MISSION_COLONIZATION","Colonizzazione");
define("FLEETS_MISSION_RECYCLE","Raccolta");
define("FLEETS_MISSION_TRANSPORT","Trasporto");
define("FLEETS_MISSION_DEPLOYMENT","Schieramento");
define("FLEETS_MISSION_ESPIONAGE","Spionaggio");
define("FLEETS_MISSION_ACS_DEFEND","ACS stazionamento");
define("FLEETS_MISSION_ATTACK","Attacco");
define("FLEETS_MISSION_ACS_ATTACK","ACS Attacco");
define("FLEETS_MISSION_MOON_DESTRUCTION","Distruzione Luna");
define("FLEETS_MISSION_MISSILE_ATTACK","Attacco missilistico");
define("FLEETS_NO_DATA","Nessun dato trovato");
// new 5.0
define("FLEETS_FLEET","Flotta");
define("FLEETS_ALL_FLEETS","Visualizza tutti i movimenti flotta");

/*********************************************************************
* parser_combat_reports.inc.php
**********************************************************************/
define("COMBAT_REPORT_OUDATED_GALAXYVIEW","I tuoi dati galassia sono vecchi. Aggiorna le coordinate del target!");

/*********************************************************************
* messages.php
**********************************************************************/
define("MESSAGES_TITLE","OGame Galaxytool - OGame Messaggi");
define("MESSAGES_PLAYERNAME","Nome");
define("MESSAGES_SUBJECT","Oggetto");
define("MESSAGES_DATE","Data");
define("MESSAGES_FILTER","Filtro");
define("MESSAGES_DELETE","Cancella messaggio");
define("MESSAGES_PUBLISH_DETAIL","Pubblica il messaggio aggiungendone il testo per evidenziare il testo del giocatore.");
define("MESSAGES_PUBLISH_HEADER","&mittente inviato un messaggio a &destinatario il &giorno:\n\n &messaggio"); // &sender, &recipient, &date, &message replaced at runtime
define("MESSAGES_PLAYER_FILTER","Messaggi al giocatore:");
// new 5.0
define("MESSAGES_CONTENT","Contenuto");

/*********************************************************************
* combat_reports.php
**********************************************************************/
define("COMBATS_TITLE","OGame Galaxytool - Rapporti di combattimento");
define("COMBATS_ATTACKER","Attaccante");
define("COMBATS_DEFENDER","Difensore");
define("COMBATS_DATE","Data");
define("COMBATS_OWNER","Proprietario");
define("COMBATS_WINNER","Vincitore");
define("COMBATS_COMBATREPORT","Rapporto di combattimento");
define("COMBATS_COMBAT_AT","Combattimento a");
define("COMBATS_LOST_UNITS","Unità perse");
define("COMBATS_LOOT","Bottino");
define("COMBATS_DEBRIS","Detriti");
define("COMBATS_AND","e");
define("COMBATS_PUBLISH","Rendi pubblico questo report");
define("COMBATS_UNPUBLISH","Ritira questo rapporto (lo rende di nuovo privato)");
define("COMBATS_DELETE","Cancella report");
define("COMBATS_CHECK_ALL","Seleziona tutti");
define("COMBATS_UNCHECK_ALL","Deseleziona All");
define("COMBATS_WITH_SELECTED","Selezionati");
define("COMBATS_PUBLIC_REPORTS","Report pubblici");
define("COMBATS_YES",SHOW_YES); // no need for translation!
define("COMBATS_NO",SHOW_NO); // no need for translation!
define("COMBATS_SEARCH_OPTIONS","Opzioni ricerca");
define("COMBATS_SEARCH","Vai");
define("COMBATS_RESET","Reset");
// 4.8
define("COMBATS_COORDINATES",USER_BB_COORDINATES);
define("COMBATS_INVALID_GALAXY_ENTERED","Dati galassia non validi");
define("COMBATS_INVALID_SYSTEM_ENTERED","Dati sistema non validi");
define("COMBATS_INVALID_PLANET_ENTERED","Dati pianeta non validi");
define("COMBATS_GALAXY_FROM_TO","Galassia");
define("COMBATS_SYSTEM_FROM_TO","Systema");
define("COMBATS_PLANET_FROM_TO","Pianeta");
define("COMBATS_APPLY",GENERAL_APPLY);
define("COMBATS_COMBAT_SUMMARY","Riassunto del combattimento");
define("COMBATS_DOWNLOAD_CSV","Scarica file CSV");

/*********************************************************************
* report_archive.php
**********************************************************************/
define("REPORT_ARCHIVE_TITLE","Archivio Rapporti");
define("REPORT_ARCHIVE_COORDINATES","Coordinate");
define("REPORT_ARCHIVE_SCANTIME","Orario analisi");
define("REPORT_ARCHIVE_DELETE","Cancella questi inserimenti");
define("REPORT_ARCHIVE_CONFIRM_DELETE","Sei sicuro di voler cancellare questi inserimenti?");
define("REPORT_ARCHIVE_GALAXY","Galassia");
define("REPORT_ARCHIVE_SYSTEM","Sistema Solare");
define("REPORT_ARCHIVE_PLANET","Pianeta");
define("REPORT_ARCHIVE_MOON","Luna");
define("REPORT_ARCHIVE_DETAILS","Dettagli");
define("REPORT_ARCHIVE_RESOURCES",DETAILEDINFO_RESOURCES);
define("REPORT_ARCHIVE_HEADER_RESOURCES",REPORTS_RESOURCES);
define("REPORT_ARCHIVE_DETAILS_FOR","Archivio rapporti per &1 [&2] (&3)"); // &1 = planetname; &2 = coordinates; &3 = playername
define("REPORT_ARCHIVE_FLEET_CARGO","Capienza navi cargo");
define("REPORT_ARCHIVE_IRAK_RANGE","Portata missili interplanetari");
define("REPORT_ARCHIVE_CHART_TYPE","Tipologia di grafico");

/*********************************************************************
* install.php
**********************************************************************/
define("INSTALL_TITLE", "Installazione Galaxytool versione");
define("INSTALL_PROGRESS", "Stato installazione");
define("INSTALL_STEP", "Passo");
define("INSTALL_CONTINUE", "Continua");
define("INSTALL_VALIDATE", "Convalida");
define("INSTALL_STEP1", "Benvenuto");
define("INSTALL_STEP2", "Permessi di scrittura");
define("INSTALL_STEP3", "Impostazioni Database");
define("INSTALL_STEP4", "Impostazioni OGame");
define("INSTALL_STEP5", "Impostazioni Galaxytool");
define("INSTALL_STEP6", "Password Admin");
define("INSTALL_STEP7", "Installa Galaxytool");
define("INSTALL_STEP8", "Concludi installazione"); // check writable; delete install and update.php and redirect to index.php
define("INSTALL_FILE_DELETE_CHECK","Per favore, cancella install.php e update.php da tuo server web");

define("INSTALL_STEP1_PHP_FAILED", "La versione &1 di php non è compatibile con questa versione di Galaxytool");
define("INSTALL_STEP1_FOPEN_FAILED", "La versione di php in uso non consentel'apertura delle pagine web con il comando FOPEN(), indispensabile per poter usufruire di OGame API.");
define("INSTALL_STEP1_WELCOME", "Benvenuto all'installazione guidata di Galaxytool. Sarai affiancato e aiutato ad installare Galaxytool.");

define("INSTALL_STEP2_DESCRIPTION","Assicurati di essere abilitato alla modifica dei file config.php and attributes.php");
define("INSTALL_STEP2_DESCRIPTION2","Se non sai come fare, dai un'occhiata qui: &1");
define("INSTALL_STEP2_FILE_NOT_WRITEABLE", "Il file è impostato come sola lettura");

define("INSTALL_STEP3_SERVER", "Server del Database");
define("INSTALL_STEP3_USERNAME", L_USERNAME);
define("INSTALL_STEP3_PASSWORD", L_PASSWORD);
define("INSTALL_STEP3_DBNAME", "Nome del Database");
define("INSTALL_STEP3_PREFIX", "Prefisso delle Tabelle");
define("INSTALL_STEP3_ENTER_PREFIX", "Es. miotool_");
define("INSTALL_STEP3_ENTER_SERVER", "Inserisci l'indirizzo del server del database. Se necessario contatta l'amministratore di sistema. Di solito l'impostazione corretta è localhost");
define("INSTALL_STEP3_ENTER_USERNAME", "Inserisci il nome utente del database");
define("INSTALL_STEP3_ENTER_PASSWORD", "Inserisci la password per l'accesso al database");
define("INSTALL_STEP3_ENTER_DBNAME", "Inserisci il nome del database che sarà usato per l'installazione (deve esistere)");
define("INSTALL_STEP3_CONNECT_FAILED", "Impossibile stabilire una connessione col server del database");
define("INSTALL_STEP3_DB_FAILED", "Database &1 non trovato");
define("INSTALL_STEP3_MYSQL_VERSION_FAILED", "La versione &1 di MySQL non è compatibile con questa versione di Galaxytool");

define("INSTALL_STEP4_URL","Indirizzo di OGame");
define("OGAME_URL_DETAILS","Per favore, dopo aver effettuato l'accesso a OGame, inserisci qui l'indirizzo che vedi nella barra. Quell'indirizzo servirà al galaxytool per ricavare l'indirizzo dell'API di OGame la quale serve a inserire alcuni dati nel Galaxytool senza avere bisogno della GalaxyToolbar. Questa API è stata introdotta dalla versione 4.1.0 di OGame");
define("INSTALL_STEP4_UNIVERSE","Universo OGame");
define("INSTALL_STEP4_DEF_TO_DEBRIS","Difese nei detriti");
define("INSTALL_STEP4_DEBRIS_RATE","Percentuale di detriti");
define("INSTALL_STEP4_SPEED_RATE","Velocità");
define("INSTALL_STEP4_ENTER_UNIVERSE","Inserisci il nome o il numero dell'universo OGame nel quale giochi (case sensitive).");
define("INSTALL_STEP4_UNIVERSE_MISSING","Devi definire l'universo in cui giochi");
define("INSTALL_STEP4_ENTER_URL","Inserisci l'indirizzo dell'universo OGame nel quale giochi");
define("INSTALL_STEP4_URL_MISSING","Devi definire l'indirizzo dell'universo in cui giochi");
define("INSTALL_STEP4_URL_CHECK_FAILED","Impossibile trovare l'indirizzo dell'API di OGame a &1");
// 5.1
define("INSTALL_STEP4_GETSETTINGS","Fetch settings");

define("INSTALL_STEP5_TOOLNAME","Nome del Galaxytool");
define("INSTALL_STEP5_ENTER_TOOLNAME","Questo è il nome che verrà mostrato nella pagina di accesso per identificare il tuo Galaxytool");
define("INSTALL_STEP5_LANGUAGE","Lingua di default");
define("INSTALL_STEP5_EMAIL_TO","Email a");
define("INSTALL_STEP5_ENTER_EMAIL_TO","Inserisci l'indirizzo email nel quale vuoi che siano inviate le notifiche riguardo le nuove registrazioni");
define("INSTALL_STEP5_EMAIL_FROM","Email Da");
define("INSTALL_STEP5_ENTER_EMAIL_FROM","Questo indirizzo email verrà indicato come indirizzo al quale rispondere alle email inviate dal galaxytool");
define("INSTALL_STEP5_USE_PHPMAILER","Usa il PHPMailer");
define("INSTALL_STEP5_MAXSHOUTS","Massimo numero di messaggi nel box dei messaggi");
define("INSTALL_STEP5_ENTER_USE_PHPMAILER","Usa il PHPMailer se il tuo server non è in grado di inviare email autonomamente");
define("INSTALL_PHPMAILER_HOST","SMPT");
define("INSTALL_PHPMAILER_HOST_EXAMPLE","es. smtp.provider.com");
define("INSTALL_PHPMAILER_USER","Nome utente dell'SMPT");
define("INSTALL_PHPMAILER_USER_EXAMPLE","es. user@provider.dcom");
define("INSTALL_PHPMAILER_PASS","Password per l'SMPT");
define("INSTALL_PHPMAILER_SECURE","Metodo di autenticazione (es. ssl)");
define("INSTALL_PHPMAILER_PORT","Porta SMTP");

define("INSTALL_STEP6_INTRO","Per favore, scegli una password per l'account <strong>admin</strong> la quale dovrà essere usata per il primo accesso al galaxytool");

define("INSTALL_STEP7_CONFIG","File config creato con successo");
define("INSTALL_STEP7_CONFIG_FAILED","Impossibile creare file config");
define("INSTALL_STEP7_ATTRIBUTES","File attributes creato con successo");
define("INSTALL_STEP7_ATTRIBUTES_FAILED","Impossibile creare file attributes");
define("INSTALL_STEP7_CREATED_TABLES","Tabelle del database create con successo");

define("INSTALL_STEP8_INTRO","L'installazione del Galaxytool è andata a buon fine!");
define("INSTALL_STEP8_LOAD_DATA","Caricamento dati da OGame ...");
define("INSTALL_STEP8_LOAD_DATA_FINISHED","Caricamento Completato");
define("INSTALL_STEP8_DELETE_FILE","Ora devi cancellare i file install.php e update.php dal tuo server web");
define("INSTALL_STEP8_LOGON","Per favore, accedi con il nome utente <strong>admin</strong> e la password che hai scelto poco fa");

/*********************************************************************
* update.php
**********************************************************************/
define("UPDATE_START","Inizio aggiornamento alla versione");
define("UPDATE_STEP_DONE","Fatto");
define("UPDATE_TITLE", "Aggiornamento Galaxytool per la versione");
define("UPDATE_STEP1_WELCOME", "Benvenuto all'aggiornamento guidato di Galaxytool. Sarai affiancato e aiutato ad aggiornare Galaxytool.");
define("UPDATE_STEP1_BACKUP_FILES", "Come prima cosa, fai un backup della cartella <strong>config</strong>! Dovrai ripristinarne il contenuto in caso di errori.");
define("UPDATE_STEP1_BACKUP_DB", "Poi esegui un <a href=\"http://www.ehow.com/how_2036600_create-database-php.html\">backup</a> del database.");
define("UPDATE_STEP1_PROCEED", "Una volta effettuato il backup puoi cominciare con la procedura di aggiornamento.");
define("UPDATE_STEP1", INSTALL_STEP1);
define("UPDATE_STEP2", INSTALL_STEP5);
define("UPDATE_STEP2_OLD_VERSION", "Precedente versione di Galaxytool");
define("UPDATE_STEP3", "Aggiorna Galaxytool");
define("UPDATE_STEP3_UPDATE_RUNNING", "Aggiornamento in corso, attendere...");
define("UPDATE_STEP4", "Concludi l'aggiornamento");
define("UPDATE_STEP4_INTRO","L'aggiornamento si è concluso con successo!");
define("UPDATE_STEP4_UPDATE_DONE","Aggiornamento effettuato.");
define("UPDATE_FAILED","Aggiornamento fallito.");

?>