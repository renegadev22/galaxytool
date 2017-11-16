<?php
/**** Norsk bokmål ****
 * defines the characters used in OGame to indicate player status
 */
define("PLAYER_BANNED","b");
define("PLAYER_VACATION_MODE","v");
define("PLAYER_NOOB","n");
define("PLAYER_INACTIVE","i");
define("PLAYER_LONG_INACTIVE","I");
define("PLAYER_OUTLAW","o");

/*********************************************************************/
/***************************** public ********************************/
/*********************************************************************/
//index.php
define("L_USERNAME","Brukernavn");
define("L_PASSWORD","Passord");
define("L_LOGINFAILURE","Brukernavn eller passord var feil, din konto er ikke altivert ennå.");
define("L_TOKENFAILURE","Your logon key is wrong or your account is not activated yet.");
define("L_LOGINTEXT","Login.");
define("L_LANGUAGE","Språk:");
define("L_TIMEOUT","Session timed out!");
define("L_REGISTER","Registrer");
define("L_PWLOST","glemt passord");
define("INDEX_TITLE","OGame Galaxietool - Oversikt");
define("INDEX_INFO","Informasjon");
define("INDEX_ENTRIES","Antall Systemer");
define("INDEX_ENTRIES_LASTWEEK","Nye systemer sist uke");
define("INDEX_ENTRIES_TO_OLD","Systemer eldre enn en måned");
define("INDEX_REGISTERED_USERS","Registrer Bruker");
define("INDEX_PAGEFORWARD","Vist din nettleser ikke sender deg videre, klikk her.");
define("INDEX_NOTICES","Notater");
define("INDEX_PLAYERS","Spiller Statistikker");
define("INDEX_ALLIES","Allianse Statistikker");
define("INDEX_REPORTS","Spionasje Rapporter");
define("INDEX_VERSION","Siste versjon for nedlasting");
define("INDEX_LATEST_VERSION","Ingen nye versjoner tilgjenglig");
define("INDEX_SHOUTBOX","Meldingsboks");
define("INDEX_NOENTRY","Ingen meldinger ennå");
define("INDEX_COMMENT","Din melding");
define("INDEX_INSERT","Sett inn");
define("INDEX_UMOD","Spillere i ferie modus");
define("INDEX_NO_MOONS","Antall måner");
define("INDEX_NO_EMPTY_SYSTEMS","Antall tomme systemer");
define("INDEX_NO_FULL_SYSTEMS","Antall Fulle systemer");
define("INDEX_NO_TARGETS","Antall mulige mål");
// 4.0
define("INDEX_USERINFO","Antall brukere");
define("INDEX_ONLINE","Online nå");
define("INDEX_TODAY","Online i dag");
define("INDEX_ALL","Antall login");
// 4.3.7
define("GENERAL_LOAD_FORM","Åpne fra data");
define("GENERAL_SAVE_FORM","Lagre fra data");
define("GENERAL_SAVE_AS_TEXT","Lagre som");
define("GENERAL_SAVE","Lagre");
// 4.8
define("INDEX_USERMANAGEMENT","Activation Overview");
define("INDEX_NEEDADMIN","Accounts to unlock");
define("INDEX_NEEDEMAIL","Unvalidated Accounts");
define("INDEX_TOOLBAR_INFO","Galaxytool plugin information");
define("INDEX_TOOLBAR_URL","Galaxytool URL");
define("INDEX_TOOLBAR_VERSION_REQUIRED","Requires at least Galaxytool plugin version");
define("INDEX_TOOLBAR_INSTALL_GUIDE","Installation instructions for plugin");
define("INDEX_TOOLBAR_TOKEN","Logon key");
define("INDEX_TOOLBAR_NEW_TOKEN","Get new key");
define("INDEX_PLAYERS_WITH_N_PLANETS","Players with more than &1 planets");
define("INDEX_GETTING_STARTED","Getting started with the Galaxytool");
define("INDEX_GETTING_STARTED1","Welcome to the Galaxytool!");
define("INDEX_GETTING_STARTED2","The Galaxytool will help you to analyze what is going on in your OGame universe &1");
define("INDEX_GETTING_STARTED3","Before you can actually analyze data you have to insert it first. For this you require a browser plugin like the &1 for Firefox.");
define("INDEX_GETTING_STARTED4","After you installed the plugin, you navigate through your OGame pages as usual and you will see a small status window whenever something was sent to your Galaxytool.");
define("INDEX_GETTING_STARTED5","Once the plugin inserted data into the Galaxytool, you can start to analyze where the players have their colonies, how many colonies they have, what reports exist or when they are active the most.");
define("INDEX_GETTING_STARTED6","But it will also help you to analyze how you are progressing if you compare yourself against your competitors or by analyzing your combat reports to see how much you raided during the last days or weeks.");
define("INDEX_GETTING_WIKIPAGE","There are many more features within the Galaxytool.");
define("INDEX_GETTING_WIKIPAGE2","Check them out at our wiki page.");
define("INDEX_GETTING_BOARD","For feedback or ideas you can use our board:");
define("INDEX_GETTING_CHAT1","Or visit us at the chatroom:");
define("INDEX_GETTING_CHAT2","We are not online 24/7 but spare a lot of our free time there, so be patient.");
// new 5.0
define("INDEX_CLOSE","Close");
define("INDEX_LOGIN","Login");
define("GENERAL_REQUIRED_FIELDS","Please fill all required fields");
define("INDEX_MESSAGES","Messages");
define("INDEX_EXAMPLE","Example");
define("INDEX_INVALID_DATA","Invalid data");
define("GENERAL_COLUMN_HIDE_TITLE","Manage columns");
define("GENERAL_COLUMN_HIDE_INFO","Please select which columns you want to see in the table.");
define("GENERAL_ENTRIES_DELETED","&1 entries deleted");
define("GENERAL_APPLY","Apply");
define("STARTPAGE_GALAXYTOOL_DESCR","<em>Galaxytool</em> is a tool for the browser game OGame.");
define("GENERAL_OVERWRITE","Overwrite duplicate entry");
define("GENERAL_OVERWRITE_QUESTION","Overwrite?");
define("INDEX_OWN_LOGINS","Your logins");
define("GENERAL_OPEN_IN_NEW_WINDOW","Åpne lenke i nytt vindu");
// 5.1
define("GENERAL_UNIT_OF_MEASURE_DAYS","Days");

/*********************************************************************/
/***************************** internal ******************************/
/*********************************************************************/
// index.php
define("PROGRAM_NAME","OGame Galaxytool");
define("SHORTNAME","Galaxytool");
define("BACK_INDEX","Tilbake til hoved siden");
define("UNIVERSE","Univers");

// search
define("MENU_INFO_LINKS","Informasjon");
define("MENU_PAGE","Oversikt");
define("MENU_DB_SEARCH","Søk i database");
define("MENU_DB_NOTICES","Søk i notater");
define("MENU_DB_REPORTS","Søk i rapporter");
define("MENU_GALAXYVIEW","se galakse");
define("MENU_STATISTICS","Statistikk");
define("MENU_ALLYHISTORY","Historisk Oversikt");
// 4.7
define("MENU_FLEET_MOVEMENTS","Fleet movements");
define("MENU_COMBAT_REPORTS","Combat reports");
define("MENU_MESSAGES","Ingame messages");

// insert / change
define("MENU_OPTION_LINKS","Valg");
define("MENU_DB_REFRESH","Sett inn i database");
define("MENU_NOTICES","Notater");
define("MENU_DB_STATUS","Status av Database");
define("MENU_USEROPTIONS","Bruker Admin");
define("MENU_USEROPTIONS2","Bruker instillinger");
define("MENU_USEROPTIONS3","Bruker Informasjon");
// 4.2
define("MENU_ADMIN","Administrasjon");
// 4.3.3
define("MENU_LOGOUT","Logout");

// Stuff
define("MENU_STUFF","Forskjellig");
define("MENU_FORUM_THREAD","Utvikler Forum");
define("MENU_DOWNLOADPAGE","Nedlastings side");
define("MENU_LANGUAGE","Språk");
define("MENU_HELP","Hjelp");
// 4.0
define("MENU_TOOLOPTIONS","Galaxytool Instillinger");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1","Var lagt til i databasen");
define("PARSER_ERROR1","Feil oppstod når de følgende kordinatene skulle lastes opp: ");
define("PARSER_ERROR2","Fant ikke databasen!");
define("PARSER_ERROR3","Fant ikke serveren til databasen!");
define("PARSER_WRONG_UNIVERSE","Feil univers -nåværende: \"&1\" forventet: \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","OGame Galaxytool - Searchpage");
define("SHOW_SEARCH","Søk i database");
define("SHOW_ALLYSYMBOL","Allianse Navn");
define("SHOW_PLAYERNAME","Spiller Navn");
define("SHOW_MOONS","Kun planeter med måne");
define("SHOW_NOTICES","Kun planeter med notater");
define("SHOW_COLONIES","Kun planeter som kan koloniseres");
define("SHOW_YES","Ja");
define("SHOW_NO","Nei");
define("SHOW_SEARCHRANGE","Avstand");
define("SHOW_SEARCH_IN","Søk i galakse");
define("SHOW_FROM_SYSTEM","fra solsystem");
define("SHOW_FROM_PLANET","fra Planet Posisjon");
define("SHOW_TO","til");
define("SHOW_DESCRIPTION","You can use wildcards * for player or alliance names. So you can find all players with &quot;name&quot; in their name.<br />Only fill those fields you want to specify.");
define("SHOW_SORT_BY","Sorter Etter");
define("SHOW_GALASYSTEM","Galakse/System");
define("SHOW_ALLYNAME","Allianse Navn");
define("SHOW_SEARCHBUTTON","Søk");
define("SHOW_ADDRESS","Adresse");
define("SHOW_ALLYSORT","Allianse");
define("SHOW_PLANET","Planet Navn");
define("SHOW_STATUS","Status");
define("SHOW_CURRENTNESS","Sist Oppdatert");
define("SHOW_PLAYER_STATUS","Spiller Status");
define("SHOW_PLAYER_STATUS1","alle");
define("SHOW_PLAYER_STATUS2","mulige mål");
define("SHOW_PLAYER_STATUS3","inaktive");
define("SHOW_HITS","Treff");
define("SHOW_OF","av");
define("SHOW_ASC","økende");
define("SHOW_DESC","minkende");
define("SHOW_RESULTS","treff pr. side");
define("SHOW_MOON","Måne");
define("SHOW_UKMOONSIZE","ukjent");
define("SHOW_DF","DF");
define("SHOW_DF_LONG","Skrapfelt");
define("SHOW_METAL","M");
define("SHOW_METAL_LONG","Metall");
define("SHOW_CRYSTAL","K");
define("SHOW_CRYSTAL_LONG","Krystall");
define("SHOW_BOTH","begge tilsammen");
define("SHOW_AT_LEAST","(minst)");
define("SHOW_DATE","Dato");
define("SHOW_DATE_0","glem det");
define("SHOW_DATE_1","eldre enn");
define("SHOW_DATE_2","nyere enn");
define("SHOW_RANK","Rang");
define("SHOW_FRANK","Flåte rang");
define("SHOW_MEMBERS","Medlemmer");
define("SHOW_NOTRANKED","ingen data");
define("SHOW_NOTICERES","Notater");
define("SHOW_REPORTS","kun planeter med notater");
define("SHOW_REPORTS_SHORT","Rapporter");
define("SHOW_NOTHING","Ingen funnet");
define("SHOW_ALLIANCE_STATUS","Allianse status");
define("SHOW_NO_STATUS","ingen Status");
define("SHOW_NAP","NAP");
define("SHOW_ALLIED","Alliert");
define("SHOW_WAR","Krig");
define("SHOW_BOYCOTT","Boykott");
define("SHOW_NEUTRAL","Nøytral");
define("SHOW_OWN","Egen Allianse");
define("SHOW_WING","Wing");
// obsolete with 5.0
define("SHOW_EXT_OPTIONS1","Vis flere instillinger for rekkevidde, rank dato eller DF søk.");
define("SHOW_EXT_OPTIONS2","Vis flere instillinger kolonier, måner, raporter, notater, spillerstatus og diplomatisk status.");
define("SHOW_EXT_OPTIONS3","Vis flere instillinger for sortering av resultatene.");
// new 5.0
define("SHOW_EXTENDED","advanced search");
define("SHOW_MOON_SELECTION","Planet with moon");
define("SHOW_REPORT_SELECTION","Planet with report");
define("SHOW_FILTER_BY","Exclude from the list");
define("SHOW_FILTER_NONE","ingen");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Show players without score changes within the last few days");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","OGame Galaxytool - Statuspage");
define("STATUS_DB_STATUS","Status for Databasen");
define("STATUS_COLOR","Farge");
define("STATUS_AGE1","Innlegg 1 dag gammel.");
define("STATUS_AGE2","Innlegg 2 - 4 dager gammel.");
define("STATUS_AGE3","Innlegg 4 - 7 dager gammel.");
define("STATUS_AGE4","Innlegg 1 - 2 uker gammel.");
define("STATUS_AGE5","Innlegg 2 - 4 uker gammel.");
define("STATUS_AGE6","Innlegg eldre enn 1 måned!");
define("STATUS_AGE7","ingen innlegg tilgjenglig.");
define("STATUS_ON","på");
define("STYLES_COLOR1","Farge1");
define("STYLES_COLOR2","Farge2");
define("STYLES_COLOR3","Farge3");
define("STYLES_COLOR4","Farge4");
define("STYLES_COLOR5","Farge5");
define("STYLES_COLOR6","Farge6");
define("STYLES_COLOR7","Farge7");
// 4.8
define("STATUS_DB_LEGEND","Legend");
define("STATUS_GALAXY","Galaxy Overview");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","Bruker administrasjon");
define("USER_NAMES","Bruker");
define("USER_ERROR","Feil");
define("USER_NEWUSER","Ny Bruker");
define("USER_OPTIONS","Valg");
define("USER_USERNAME","Brukernavn");
define("USER_PASSWORD","Passord");
define("USER_PASSWORD_CONFIRM","Bekreft Passord");
define("USER_GALAXY","Galaxe");
define("USER_SEARCH","Søk");
define("USER_INSERT","Sett Inn");
define("USER_DELETE","Slett");
define("USER_DELETE_ENTRY","Vil du slette bruker: ");
define("USER_STATUS","Se Status");
define("USER_STYLES","modifiser utseende");
define("USER_SUBMIT","Legg til");
define("USER_RESET","Nullstill");
define("USER_YES","Ja");
define("USER_NO","Nei");
define("USER_STYLEPATH","Path to styles.css");
define("USER_PROBES","Legg til Espionage Reports");
define("USER_EMAIL","Epost");
define("USER_ERROR1","Feil Passord eller ugyldig epost.");
define("USER_ERROR2","Epost Ugyldig.");
define("USER_INGAME","OGame Brukernavn");
define("USER_ALLYTAG","Allianse Navn");
define("USER_ALLYHISTORY","Historisk Oversikt");
define("USER_DIPLOMATIC","Forandre diplomatisk status");
define("USER_STATSPAGE","Antall innlegg på statistikk siden");
define("USER_LINKS","Linker");
define("USER_LINKS2","Format:<br>text;url<br>text2;url2<br>text3;url3");
define("USER_EXPORT_TITLE","Eksporter Farger(BB Codes)");
define("USER_BB_COORDINATES","Koordinater");
define("USER_BB_MOON","Måne");
define("USER_BB_DEBRIS","Skrap felt");
define("USER_BB_ALLY","Allianse navn");
define("USER_BB_ALLYDETAILS","Allianse detaljer");
define("USER_BB_PLAYERNAME","Spiller navn");
define("USER_BB_BANNED","ban");
define("USER_BB_VACATION","ferie modus");
define("USER_BB_NOOB","nybegynner");
define("USER_BB_INACTIVE","Inaktiv");
define("USER_BB_LONGINACTIVE","Iang Inaktiv");
// new with 4.7
define("USER_DELETION","Delete");
define("USER_FLEETINFO",MENU_FLEET_MOVEMENTS);
define("USER_ACTIVITIES","Player activities");
define("USER_MAINTENANCE","Galaxytool maintenance");
define("USER_MANAGEMENT",MENU_USEROPTIONS);
define("USER_DELETE_MY_COMBAT_REPORTS","Delete my combat reports");
define("USER_DELETE_MY_MESSAGES","Delete my messages");
define("USER_DELETE_MY_FLEETMOVES","Delete my fleet movements");
// 4.8
define("USER_DELETE_MY_COMBAT_REPORTS_LIMITED","Delete my combat reports older than &1 days");
define("USER_DELETE_MY_MESSAGES_LIMITED","Delete my messages older than &1 days");
define("USER_TABLE_ENTRIES","Number of search results for each page");
// 5.0
define("USER_EXISTS","User already exists");
define("USER_BB_OUTLAW","Outlaw");
define("USER_INVALID_URL","URL &1 seems to be invalid - URL will be ignored");

/*********************************************************************
* galaxyview.php
*********************************************************************/
define("VIEW_TITLE","OGame Galaxytool - Galaxyview");
define("VIEW_NODATA","Ingen data tilgjenglig.");
define("VIEW_GALAXY","Galakse");
define("VIEW_SYSTEM","Sol system");
define("VIEW_POSITION","Posisjon.");
define("VIEW_PLANET","Planet");
define("VIEW_MOON","Måne");
define("VIEW_TF","Deb");
define("VIEW_PLAYER","Spiller");
define("VIEW_PLAYER_ADD","(Rang / Status)");
define("VIEW_ALLY","Allianse");
define("VIEW_ALLY_ADD","(Rang / Medlem)");
define("VIEW_METAL","M");
define("VIEW_CRYSTAL","K");
define("VIEW_COLONISED","Ubebodde Planeter");
define("VIEW_UKMOONSIZE","ukjent");
define("VIEW_BACK","tilbake");
define("VIEW_NOTICE","Notater");
define("VIEW_REPORTS","Reporter");
define("VIEW_MOONPHALANX","Følgende Måner kan skanne galakse");
define("VIEW_NOMOONS","Ingen måner funnet");
define("VIEW_IRAKS","Følgende planeter kan bli truffet med interplanetarisk Missil");
define("VIEW_NOIRAKS","Ingen Interplanetarisk Missil Funnet");
// 4.0
define("VIEW_MOON_DESTROY_CHANCE","Mulighet for å ødelegge måne");
define("VIEW_CHANCE_WITH_ONE","Mulighet med 1 dødsstjerne");
define("VIEW_CHANCE_WITH_N","Mulighet med ");
define("VIEW_DEATH_STARS","dødsstjerne");
define("VIEW_DS_DESTROY_CHANCE","Mulighet for å miste dødsstjerne(s)");
define("VIEW_TOP","Toppen");
// new 4.3.5
define("VIEW_GO","Go");
// new 5.0
define("VIEW_DIAMETER","Diameter");

/*********************************************************************
* change_password.php
**********************************************************************/
define("PW_TITLE","OGame Galaxytool - skifte passord");
define("OLD_PASSWORD","gammelt passord");
define("NEW_PASSWORD","nytt passord");
define("CONFIRM_NEW_PASSWORD","bekreft nytt passord");
define("PW_MISMATCH","Passords er ikke likt!");
define("PW_ERROR","Old passord er ikke korrekt!");
define("UPDATE_DONE","Oppdatering suksess.");
// new 4.2
define("TIMEZONE_OFFSET","Tids-sone forsjeld fra server");
// new 4.3
define("DELETE_ACCOUNT","Slett denne Galaxytool kontoen");
define("DELETE_ACCOUNT_SAFETY_REQUEST","Er du sikker på du vil slette denne Galaxytool kontoen?");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","Autoritet");
define("CH_PASSWD_ADMIN","Admin");
// new 4.7
define("TIMEZONE_OGAME_OFFSET","Timezone offset to OGame server");
// new 4.8
define("CH_PASSWD_USER_LANGUAGE","Change to this language after logon");
define("CH_PASSWD_USER_LANGUAGE_NO_CHANGE","No change");
define("CH_PASSWD_EXPAND","Expanded");
define("CH_PASSWD_COLLAPSE","Collapsed");
define("CH_PASSWD_HIDDEN","Hidden");
define("CH_PASSWD_GETTING_STARTED","Show Getting Started Info after logon");
define("CH_PASSWD_PLUGIN","Show Plugin Info after logon");

/*********************************************************************
* notices.php
**********************************************************************/
define("NOTICE_TITLE","OGame Galaxytool - Notater");
define("NOTICE_HEADER","editer notater");
define("NOTICE_HEADER2","Editer egne notater");
define("NOTICE_PUBLIC","Tilgjenglig for andre ?");
define("NOTICE_YES","Ja");
define("NOTICE_NO","nei");
define("NOTICE_TEXT","Notat Tekst");
define("NOTICE_SAVE","Lagre");
define("NOTICE_DELETED","Innlegg slettet");
define("NOTICE_SAVED","Innlegg lagret.");
define("NOTICE_RESULTS","Alle resultat");
define("NOTICE_USER","Bruker");
define("NOTICE_DATE","Dato");
define("NOTICE_EDIT","Editer");
define("NOTICE_DELETE","slett");
define("NOTICE_NEW","Lag eget innlegg");
define("NOTICE_NOTPUBLIC","Notat ikke publisert.");
define("NOTICE_ALL","alle");
define("NOTICE_NONE",SHOW_FILTER_NONE);
define("NOTICE_SEARCH","Søk i notater");
define("NOTICE_SEARCH_SHORT","Søk");
define("NOTICE_HITS","Treff");
define("NOTICE_SHOWRESULTS","treff per side");
define("NOTICE_OF","av");
define("NOTICE_NOTHING","ingen innlegg funnet");
// 4.0
define("NOTICE_CHARS","Karakter");
define("NOTICE_PLAYERNAME","Spiller");
define("NOTICE_SHOWALL","Vis alle notater");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","OGame Galaxytool - Spionasje  Rapporter");
define("REPORTS_RESOURCES","Resursser");
define("REPORTS_FLEET","Flåte");
define("REPORTS_DEFENCE","Forsvar");
define("REPORTS_BUILDINGS","Byggninger");
define("REPORTS_TECHNOLOGY","Forskning");
define("REPORTS_MOON","Måne");
define("REPORTS_SEARCH","Søk i spionajse rapport");
define("REPORTS_SEARCH_SHORT","Søk");
define("REPORTS_HITS","Treff");
define("REPORTS_NOTHING","Ingen treff");
define("REPORTS_ADDRESS","Adresse");
define("REPORTS_CURRENTNESS","Tilgjenglighet");
define("REPORTS_PLAYERNAME","Spillernavn");
define("REPORTS_ALLY","Allianse");
define("REPORTS_VIEW","se Raporter");
define("REPORTS_SEARCH_IN","Søk i galakse");
define("REPORTS_FROM_SYSTEM","fra System");
define("REPORTS_TO","til");
define("REPORTS_DELETE","slett");
define("REPORTS_DELETED","innlegg slettet");
define("REPORTS_RESULTS","treff per side");
define("REPORTS_OF","av");
define("REPORTS_DATE","Dato");
define("REPORTS_DATE_0","glem");
define("REPORTS_DATE_1","eldre enn");
define("REPORTS_DATE_2","nyere enn");
define("REPORTS_NOTICES","Notater");
define("REPORTS_AT_LEAST_RESOURCES","Resursser (minimum)");
define("REPORTS_SEARCH_EXTENDED","utvid søk");
define("REPORTS_FLEET_RESIS","Flåte- poeng");
define("REPORTS_DEFENCE_RESIS","Forsvar- poeng");
define("REPORTS_ALL_RESIS","sum poeng");
define("REPORTS_TECHS","Teknologi");
define("REPORTS_UNKNOWN_ENTRIES","ukjent");
define("REPORTS_PARTLY_INSERTED","delvis innlegg");
define("REPORTS_FOR_ALL_RES","alle resursser");
define("REPORTS_FOR_TF","for skrapfelt");
define("REPORTS_KT","Lite Lasteskip");
define("REPORTS_GT","Stort Lasteskip");
define("REPORTS_SS","Slagskip");
define("REPORTS_REC","Resirkulerer");
define("REPORTS_RAIDABLE","kun mål jeg kan ta");
define("REPORTS_ALL_RESOURCES","alle Resursser");
// 4.0
define("REPORTS_STUFF","Forskjellig");
define("REPORTS_SPEEDSIM","Simuler med Speedsim");
define("REPORTS_DRAGOSIM","Simuler med Dragosim");
define("REPORTS_STATUS","Status");
define("REPORTS_ERROR","En feil har oppstått");
// 4.2
define("REPORTS_OWN_REPORTS","kun mine rapporter");
// 4.3.3
define("REPORTS_UPLOAD_BY","Raport lastet opp av");
// 4.4
define("REPORTS_DEPTH","Raport dybde");
define("REPORTS_FLEET_SCORE","Flåte score");
define("REPORTS_DEFENCE_SCORE","Forsvar score");
// 5.0
define("REPORTS_HOURS","hours");
define("REPORTS_MAX_RESULTS_HIT","Your query returned more than &1 hits. Only the first &1 results are show. Please adjust your search request to get less results.");
define("REPORTS_OSIMULATE","Simulate with OSimulate");
define("REPORTS_SHOW_ONLY","Show only");
define("REPORTS_SHOW_PLANETS","Planets");
define("REPORTS_SHOW_MOONS","Moons");
define("REPORTS_OWNER","Reports owned by");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","OGame Galaxytool - Statistikk");
define("STATS_TBLHEAD","Statistikk");
define("STATS_RANK","Rang");
define("STATS_PLAYERNAME","Spiller Navn");
define("STATS_ALLYNAME","Allianse Navn");
define("STATS_SCORE","Poeng");
define("STATS_FLEET","Flåte");
define("STATS_RESEARCH","Forskning");
define("STATS_MEMBERS","Medlem");
define("STATS_STATUS","Status");
define("STATS_NOTHING","Ingen Status");
define("STATS_NAP","NAP");
define("STATS_ALLIED","Allierte");
define("STATS_WAR","Krig");
define("STATS_BOYCOTT","Boykott");
define("STATS_NEUTRAL","Nøytral");
define("STATS_OWN","Egen Allianse");
define("STATS_WING","Wing");
define("STATS_UPDATE","Innlegg fra");
define("STATS_PLAYERSTATS","Spiller status");
define("STATS_ALLYSTATS","Allianse Status");
// 4.0
define("STATS_DELETE","Vil du slette dette innlegg ?");
define("STATS_CONFIRM_DELETE","Vil du virkelig slette dette innlegg?");
define("STATS_CHANGE_PLAYER_STATUS","Spiler status");
define("STATS_CHANGE_ALLIANCE_STATUS","Allianse status");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","Alle medlemmer av denne alliansen vil få denne status. Tidligere status vil bli overskrevet. Du kan skifte status på spillere senere.");
define("STATS_UNKNOWN","Reset");
define("STATS_DETAILS","Detaljer for");
// 4.4
define("STATS_PLAYERSTATUS",SHOW_PLAYER_STATUS);
define("STATS_IGNORE_STATUS",SHOW_PLAYER_STATUS1);
define("STATS_ACTIVE","active");
define("STATS_INACTIVE",USER_BB_INACTIVE);
define("STATS_BANNED",USER_BB_BANNED);
define("STATS_VACATION",USER_BB_VACATION);
define("STATS_NOOB",USER_BB_NOOB);
// 4.8
define("STATS_YES",SHOW_YES); // reuse SHOW definitions if applicable
define("STATS_NO",SHOW_NO);
define("STATS_SEARCH",USER_SEARCH);
define("STATS_SHOW_GRAPH","Show details for score distribution");
define("STATS_LONG_INACTIVE",USER_BB_LONGINACTIVE);
// 4.9
define("STATS_STANDARD","Standard Points");
define("STATS_MILITARY","Military Points");
define("STATS_ECONOMY","Economy");
define("STATS_HONOUR","Honour points");
define("STATS_MILITARY_BUILD","Military build");
define("STATS_MILITARY_DESTROYED","Military destroyed");
define("STATS_MILITARY_LOST","Military lost");

/*********************************************************************
* register.php
**********************************************************************/
define("REGISTER_REGISTRATE","Registrer");
define("REGISTER_LOGINNAME","Login-Navn");
define("REGISTER_PASSWORD","Passord");
define("REGISTER_PASSWORD_CONFIRM","Bekreft Passord");
define("REGISTER_EMAIL","Epostl");
define("REGISTER_INGAME","OGame navn");
define("REGISTER_ALLYTAG","Allianse Navn");
define("REGISTER_EMAILVERIFICATION","Epost sjekk");
define("REGISTER_EMAILTEXT","Vennligst følg denne link for å registrere din galaxytool.");
define("REGISTER_ERROR1","Login-navn allerede brukt already used.");
define("REGISTER_ERROR2","Feil ved forsøk på å sende epost. Kontakt din admin.");
define("REGISTER_ERROR3","Feil ved forsøk på å sende data til databsen!");
define("REGISTER_INFO1","Din konto er opprettet.");
define("REGISTER_INFO2","Følg denne link for å fullføre di registrering.");
define("REGISTER_INFO3","Konto Registrert. Din admin må nå godkjenne din registrering.");
define("REGISTER_BUTTON","Tilbake til hovedsiden");
define("REGISTER_NEW_SUBJECT","En ny bruker har registrert konto");
define("REGISTER_NEW_MAILTEXT","En ny bruker er registrert.");
// new 4.2
define("REGISTER_BACK","Tilbake til førstesiden");
// new 4.3.5
define("REGISTER_MISSING_FIELDS","Fyll alle feltene som er krav");
// new 4.8
define("REGISTER_ERROR4","Email address is not valid.");
define("REGISTER_ERROR5","Passwords don't match.");
define("REGISTER_PWS","Password strength");
define("REGISTER_PWS0","very weak");
define("REGISTER_PWS1","weak");
define("REGISTER_PWS2","good");
define("REGISTER_PWS3","strong");
define("REGISTER_PWS4","very strong");
// new 5.0
define("REGISTER_EMAIL_USED","Email Address is already used");

/*********************************************************************
* lost_password.php
**********************************************************************/
define("LOSTPW_TITLE","Glemt passord");
define("LOSTPW_INFO2","Et nytt passord ble sendt til din epost.");
define("LOSTPW_BUTTON1","Få nytt passord");
define("LOSTPW_BUTTON2","Tilbake til hovedsiden");
define("LOSTPW_LOGINNAME","Brukernavn");
define("LOSTPW_EMAIL","Epost");
define("LOSTPW_ERROR1","Feil ved forsøk på å sende data til databasen!");
define("LOSTPW_ERROR2","Feil!");
define("LOSTPW_ERROR3","Feil ved forsøk på å sende epost. Kontakt din admin.");
define("LOSTPW_EMAIL_SUBJECT","Ditt nye passord som du bestillte");
define("LOSTPW_EMAIL_TEXT1","Her er din nye login til Galaxytool");
define("LOSTPW_EMAIL_TEXT2","Brukernavn");
define("LOSTPW_EMAIL_TEXT3","Passord");
// new 5.0
define("LOSTPW_INFO1","You will receive an email to verify your password reset request.");
define("LOSTPW_CONFIRM_RESET_SUBJECT","Lost password?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","Hello,\n\nyou requested a password reset for the Galaxytool. To generate a new password, click the following link:");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","OGame Galaxytool - User information");
define("USERINFO_NAMES","Alle brukere av dette verktøy");
define("USERINFO_DETAIL","detaljert informasjon");
define("USERINFO_ERROR1","Ingen bruker med denne ID!");
define("USERINFO_USERNAME","Brukernavn");
define("USERINFO_INGAME","Spillernavn");
define("USERINFO_EMAIL","Epost");
define("USERINFO_ALLYTAG","Allianse");
define("USERINFO_STYLEPATH","Skin");
define("USERINFO_STATUS","Status");
define("USERINFO_ACTIVATE","Aktiv spiller");
define("USERINFO_LOGINS","Antall login");
define("USERINFO_LASTLOGIN","Sist Login");
define("USERINFO_DATA","Informasjon om systemer");
define("USERINFO_NODATA","Denne bruker har ikke lagt til noen system!");
define("USERINFO_GALAXY","Galakse");
define("USERINFO_SYSTEMS","Antall systemer");
define("USERINFO_IP","IP adresse");
define("USERINFO_LOGINTIME","Login");
define("USERINFO_NOLOGIN","Spiller har aldri logget inn.");
define("USERINFO_LAST_GALAXYUPDATE","lagt til sist i galakse oversikt");
define("USERINFO_LAST_PUBLIC_NOTICE","Siste publiserte notat");
define("USERINFO_LAST_PRIVATE_NOTICE","Siste private notat");
define("USERINFO_NUMBEROF_PUBLIC_NOTICE","Antall publiserte notater");
define("USERINFO_NUMBEROF_PRIVATE_NOTICE","Antall private notater");
define("USERINFO_ACTIVATED","konto Aktivert");
define("USERINFO_ACTIVATIONTEXT","Admin har aktivert din konto.\n\nHa det gøy med Galaxytool!");
// new 4.8
define("USERINFO_LAST_SUBMIT","Inserted last data");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","OGame Galaxytool - Allianse Historie");
define("ALLYHISTORY_TBLHEAD","Historisk Oversikt");
define("ALLYHISTORY_PLAYERNAME","Spiller navn");
define("ALLYHISTORY_ALLYNAME","Allianse");
define("ALLYHISTORY_LASTMONTH","Sist måned"); // changed at 4.0
define("ALLYHISTORY_ALL_DATA","All tilgjenglig informasjon"); // new 4.0
define("ALLYHISTORY_SHOW","vis statistikk");
define("ALLYHISTORY_TIMESPAN","Tidsperspektiv");
define("ALLYHISTORY_PROGESS","Fremskritt");
define("ALLYHISTORY_SCORE","Poeng");
define("ALLYHISTORY_FSCORE","Flåte poeng"); // new 4.0
define("ALLYHISTORY_RSCORE","Forsknings  poeng"); // new 4.0
define("ALLYHISTORY_MEMBER","Medlemmer"); // new 4.0
define("ALLYHISTORY_NOTHING","ingen data funnet");
define("ALLYHISTORY_DETAILS","Detaljer");
define("ALLYHISTORY_SHOW_ADDRESS","koordinater");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","Spiller Informasjon");
define("DETAILEDINFO_ALLYINFO_TITLE","Allianse informasjon");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","Detaljert info om spiller");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","Detaljert info om Allianse");
define("DETAILEDINFO_NO_ALLIANCE","ingen");
define("DETAILEDINFO_SCORE","Poeng Statistikk");
define("DETAILEDINFO_FLEET","Flåte Statistikk");
define("DETAILEDINFO_RESEARCH","Forsknings Statistikk");
define("DETAILEDINFO_RANK","Rang");
define("DETAILEDINFO_POINTS","Poeng");
define("DETAILEDINFO_KNOWN_PLANETS","Kjente planeter");
define("DETAILEDINFO_MOONS","Kjente måner");
define("DETAILEDINFO_PHALANX_AREA","Phalanx område");
define("DETAILEDINFO_NO_PHALANX_AREA","Ingen Phalanx funnet");
define("DETAILEDINFO_NOTICES","Notater");
define("DETAILEDINFO_NO_NOTICES","Ingen Notater funnet");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","Tidligere Allianse");
define("DETAILEDINFO_RESOURCES_PER_HOUR","Resursser per time");
define("DETAILEDINFO_RESOURCES_PER_DAY","Resursser per dag per day");
define("DETAILEDINFO_RESOURCES_PER_WEEK","resursser per uke");
define("DETAILEDINFO_RESOURCES_PER_MONTH","Resursser per måned (30 dager)");
define("DETAILEDINFO_METAL","Metall");
define("DETAILEDINFO_CRYSTAL","Krystall");
define("DETAILEDINFO_DEUTERIUM","Deuterium");
define("DETAILEDINFO_UNKNOWN","ukjent");
define("DETAILEDINFO_SCORE_DISTRIBUTION","Poeng distribusjon");
// new 4.2
define("DETAILEDINFO_GENERAL","Detaljer");
define("DETAILEDINFO_MEMBERS","Medlemmer");
define("DETAILEDINFO_GRAPHS","Grafikk");
define("DETAILEDINFO_RESOURCES","Resursser");
define("DETAILEDINFO_FLEET_TAB","Flåte");
define("DETAILEDINFO_TECH","Forskning");
define("DETAILEDINFO_FLEET_DETAIL","Sum / (spiller gjennomsnitt) av alle tilgjenglige detaljer");
define("DETAILEDINFO_TECH_DETAIL","gjennomsnitt av all tilgjenglig informasjon");
// new 4.3
define("DETAILEDINFO_PLANET_TAB",REPORTS_SHOW_PLANETS);
define("DETAILEDINFO_MOON_TAB",REPORTS_SHOW_MOONS);
// 4.7
define("DETAILEDINFO_ACTIVITIES","Activities");
define("DETAILEDINFO_NODATA",VIEW_NODATA); // reuse existing translations
define("DETAILEDINFO_ACTIVITY_DESCRIPTION","Show activities of &1 collected from:");
define("DETAILEDINFO_GALAXYVIEWS","Galaxy views");
define("DETAILEDINFO_SCANS","Espionage actions");
define("DETAILEDINFO_MESSAGES","Player messages");
define("DETAILEDINFO_COMBATS","Combat reports");
define("DETAILEDINFO_ALLYPAGE","Alliance overview");
define("DETAILEDINFO_MANUAL","Manual insertions");
define("DETAILEDINFO_START","Beginning");
define("DETAILEDINFO_TO","to");
define("DETAILEDINFO_TODAY","Today");
define("DETAILEDINFO_DATA_RESTRICTION","restricted to:");
define("DETAILEDINFO_WEEKDAY_WEEKEND","Weekend");
define("DETAILEDINFO_WEEKDAY_WORKINGDAY","Weekday");
define("DETAILEDINFO_WEEKDAY_MONDAY","Monday");
define("DETAILEDINFO_WEEKDAY_TUESDAY","Tuesday");
define("DETAILEDINFO_WEEKDAY_WEDNESDAY","Wednesday");
define("DETAILEDINFO_WEEKDAY_THURSDAY","Thursday");
define("DETAILEDINFO_WEEKDAY_FRIDAY","Friday");
define("DETAILEDINFO_WEEKDAY_SATURDAY","Saturday");
define("DETAILEDINFO_WEEKDAY_SUNDAY","Sunday");
define("DETAILEDINFO_WEEKDAY_SHORTLENGTH",3); // number of characters to shorten week day
define("DETAILEDINFO_PLAYER_CURRENTLY_ACTIVE","The player is currently active");
define("DETAILEDINFO_PLAYER_MESSAGES","available player messages");
define("DETAILEDINFO_SHOW","show");
define("DETAILEDINFO_NONE","none available");
define("DETAILEDINFO_ENTER_MANUALLY","Enter activities for this player");
define("DETAILEDINFO_PLAYER_SEEN_ON","Player was online on");
define("DETAILEDINFO_INSERT","Insert");
define("DETAILEDINFO_OGAME_SERVERTIMES","Please note: All dates and times refer to OGame server times !");
define("DETAILEDINFO_DAY_VIEW","24 hours view");
define("DETAILEDINFO_WEEK_VIEW","weekly view");
// new 4.8
define("DETAILEDINFO_HOME_PLANET","Homeworld");
// new 5.0
define("DETAILEDINFO_PLANETNAME","Name"); // also used for moons!
define("DETAILEDINFO_DEFENCE_SCORE","Defence score");
define("DETAILEDINFO_DEFENCE_SCORE_TOOLTIP","Defence score = Fleet - Score + Research + Economy.<br/>All those statistics must be up to date to have a meaningful result!");
define("DETAILEDINFO_SCORE_PER_SHIP","Scores per ship");
define("DETAILEDINFO_SHIPS","Number of ships");
define("DETAILEDINFO_DATE_IN_FUTURE","Do not maintain times which are not in the past.");

// new 4.2
/*********************************************************************
* administration.php
**********************************************************************/
define("ADMIN_TITLE","Administrasjon av Galaxytool");
define("ADMIN_DISCLAMER","Advarsel: Bruk av disse script er på egen risiko. De fleste av dem sletter data.");
define("ADMIN_INCONSISTENCIES","Uregelmentær data i databasen");
define("ADMIN_PLANETS","Plantetr ved posisjon 0 or eller mer enn 15");
define("ADMIN_GALAXIES","Slett galakser større enn &1 ");
define("ADMIN_PLAYERS","Slett spillere uten OGame spillerid - fører til duplikate spiller kontoer");
define("ADMIN_REPORTS","Slett rapporter når det ikke eksisterer planeter lenger");
define("ADMIN_MISC","Diverse");
define("ADMIN_RESET","Null still Galaxytool (Kun bruker og ip tabeller som ikke blir slettet)");
define("ADMIN_OLD_PLAYERS","Slett spiller rapporter eldre enn &1 dag");
define("ADMIN_OLD_REPORTS","Slett rapporter eldre enn &1 dag");
define("ADMIN_LOADING","Ikke steng dette vindu menst side laster.");
define("ADMIN_STATUS","Status på din forespørsel");
define("ADMIN_SELECTION","Minimum et valg må bli valgt");
define("ADMIN_SAFETY","Er du sikker på at du vil kjøre dette scriptet(s) ?");
define("ADMIN_DONE","ferdig");
define("ADMIN_NOTBD","ingenting må gjøres");
// new 4.3
define("ADMIN_OLD_GALAXIES","Fjerner galaxy views som er eldre enn &1 dag");
define("ADMIN_UNUSED_PLAYERS","Fjerner spillere som ikke er i galaxy view");
// new 4.7
define("ADMIN_OLD_ACTIVITIES","Remove player activities older than &1 days");
// new 4.8
define("ADMIN_OLD_COMBATS","Remove combat reports older than &1 days");
define("ADMIN_OLD_INGAME_MSG","Remove ingame messages older than &1 days");
// new 5.0
define("ADMIN_OGAME_API","Load public data from OGame into the Galaxytool");
define("ADMIN_OGAME_ALL_DATA",ALLYHISTORY_ALL_DATA);
define("ADMIN_OGAME_GALAXY_DATA",MENU_GALAXYVIEW);
define("ADMIN_OGAME_STATISTICS_DATA",MENU_STATISTICS);

// new 4.3.5
/*********************************************************************
* errorpage.php
**********************************************************************/
define("ERRORPAGE_PAGEFORWARD","Trykk here vis browseren ikke støtter videre sending av siden");
define("ERRORPAGE_PERMISSION_DENIED","Du har ikke tilatelse til å åpne denne siden, trykk for å gå tilbake.");

// new 4.7
/*********************************************************************
* fleet_movements.php
**********************************************************************/
define("FLEETS_TITLE","OGame Galaxytool - Fleet movements");
define("FLEETS_ACTUAL_FLEETS","Current fleet movements");
define("FLEETS_YES",SHOW_YES);
define("FLEETS_NO",SHOW_NO);
define("FLEETS_DETAILS","Details");
define("FLEETS_MISSION_EXPEDITION","Expedition");
define("FLEETS_MISSION_COLONIZATION","Colonize");
define("FLEETS_MISSION_RECYCLE","Harvest");
define("FLEETS_MISSION_TRANSPORT","Transport");
define("FLEETS_MISSION_DEPLOYMENT","Deploy");
define("FLEETS_MISSION_ESPIONAGE","Espionage");
define("FLEETS_MISSION_ACS_DEFEND","ACS Defend");
define("FLEETS_MISSION_ATTACK","Attack");
define("FLEETS_MISSION_ACS_ATTACK","ACS Attack");
define("FLEETS_MISSION_MOON_DESTRUCTION","Moon Destruction");
define("FLEETS_MISSION_MISSILE_ATTACK","Missile Attack");
define("FLEETS_NO_DATA","No applicable data found");
// new 5.0
define("FLEETS_FLEET","Fleet");
define("FLEETS_ALL_FLEETS","Show all fleet movements");

/*********************************************************************
* parser_combat_reports.inc.php
**********************************************************************/
define("COMBAT_REPORT_OUDATED_GALAXYVIEW","Your galaxy data is outdated. Please visit combat origin and target coordinates first!");

/*********************************************************************
* messages.php
**********************************************************************/
define("MESSAGES_TITLE","OGame Galaxytool - OGame Messages");
define("MESSAGES_PLAYERNAME","Playername");
define("MESSAGES_SUBJECT","Subject");
define("MESSAGES_DATE","Date");
define("MESSAGES_FILTER","Filter");
define("MESSAGES_DELETE","Delete message");
define("MESSAGES_PUBLISH_DETAIL","Publish message by adding the message content to notice text of that player.");
define("MESSAGES_PUBLISH_HEADER","&sender sent a message to &recipient on &date:\n\n &message"); // &sender, &recipient, &date, &message replaced at runtime
define("MESSAGES_PLAYER_FILTER","Messages for player:");
// new 5.0
define("MESSAGES_CONTENT","Content");

/*********************************************************************
* combat_reports.php
**********************************************************************/
define("COMBATS_TITLE","OGame Galaxytool - Combat reports");
define("COMBATS_ATTACKER","Attacker");
define("COMBATS_DEFENDER","Defender");
define("COMBATS_DATE","Date");
define("COMBATS_OWNER","Owner");
define("COMBATS_WINNER","Winner");
define("COMBATS_COMBATREPORT","Combat Report");
define("COMBATS_COMBAT_AT","Combat at");
define("COMBATS_LOST_UNITS","Lost units");
define("COMBATS_LOOT","Loot");
define("COMBATS_DEBRIS","Debris");
define("COMBATS_AND","and");
define("COMBATS_PUBLISH","Make this report public");
define("COMBATS_UNPUBLISH","Unshare this report (makes it private again)");
define("COMBATS_DELETE","Delete report");
define("COMBATS_CHECK_ALL","Check All");
define("COMBATS_UNCHECK_ALL","Uncheck All");
define("COMBATS_WITH_SELECTED","With selected");
define("COMBATS_PUBLIC_REPORTS","Public reports");
define("COMBATS_YES",SHOW_YES); // no need for translation!
define("COMBATS_NO",SHOW_NO); // no need for translation!
define("COMBATS_SEARCH_OPTIONS","Search options");
define("COMBATS_SEARCH","Go");
define("COMBATS_RESET","Reset");
// 4.8
define("COMBATS_COORDINATES",USER_BB_COORDINATES);
define("COMBATS_INVALID_GALAXY_ENTERED","Invalid Galaxy entered");
define("COMBATS_INVALID_SYSTEM_ENTERED","Invalid System entered");
define("COMBATS_INVALID_PLANET_ENTERED","Invalid Planet entered");
define("COMBATS_GALAXY_FROM_TO","Galaxy");
define("COMBATS_SYSTEM_FROM_TO","System");
define("COMBATS_PLANET_FROM_TO","Planet");
define("COMBATS_APPLY",GENERAL_APPLY);
define("COMBATS_COMBAT_SUMMARY","Combat report summary");
define("COMBATS_DOWNLOAD_CSV","Download as CSV file");

/*********************************************************************
* report_archive.php
**********************************************************************/
define("REPORT_ARCHIVE_TITLE","Report archive");
define("REPORT_ARCHIVE_COORDINATES","Coordinates");
define("REPORT_ARCHIVE_SCANTIME","Scan time");
define("REPORT_ARCHIVE_DELETE","Delete these entries");
define("REPORT_ARCHIVE_CONFIRM_DELETE","Do you really want to delete these entries?");
define("REPORT_ARCHIVE_GALAXY","Galaxy");
define("REPORT_ARCHIVE_SYSTEM","System");
define("REPORT_ARCHIVE_PLANET","Planet");
define("REPORT_ARCHIVE_MOON","Moon");
define("REPORT_ARCHIVE_DETAILS","Details");
define("REPORT_ARCHIVE_RESOURCES",DETAILEDINFO_RESOURCES);
define("REPORT_ARCHIVE_HEADER_RESOURCES",REPORTS_RESOURCES);
define("REPORT_ARCHIVE_DETAILS_FOR","Report archive for &1 [&2] (&3)"); // &1 = planetname; &2 = coordinates; &3 = playername
define("REPORT_ARCHIVE_FLEET_CARGO","Fleet cargo capacity");
define("REPORT_ARCHIVE_IRAK_RANGE","Interplanetary Missiles range");
define("REPORT_ARCHIVE_CHART_TYPE","Chart type");

/*********************************************************************
* install.php
**********************************************************************/
define("INSTALL_TITLE", "Galaxytool installation for version");
define("INSTALL_PROGRESS", "Overall progress");
define("INSTALL_STEP", "Step");
define("INSTALL_CONTINUE", "Continue");
define("INSTALL_VALIDATE", "Validate");
define("INSTALL_STEP1", "Welcome");
define("INSTALL_STEP2", "Writeable check");
define("INSTALL_STEP3", "Database settings");
define("INSTALL_STEP4", "OGame settings");
define("INSTALL_STEP5", "Galaxytool settings");
define("INSTALL_STEP6", "Admin password");
define("INSTALL_STEP7", "Install Galaxytool");
define("INSTALL_STEP8", "Finalize install"); // check writable; delete install and update.php and redirect to index.php
define("INSTALL_FILE_DELETE_CHECK","Please delete install.php and update.php from your webserver.");

define("INSTALL_STEP1_PHP_FAILED", "Your PHP version &1 is not working with this Galaxytool version");
define("INSTALL_STEP1_FOPEN_FAILED", "Your PHP version does not allow to open webpages with FOPEN() command. This is required to consume the OGame API.");
define("INSTALL_STEP1_WELCOME", "Welcome to the installation wizard of the Galaxytool. You will be guided through the installation of the Galaxytool.");

define("INSTALL_STEP2_DESCRIPTION","Make sure your config.php and attributes.php files have write permissions enabled.");
define("INSTALL_STEP2_DESCRIPTION2","If you don't know, how to achieve this, please take a look here: &1");
define("INSTALL_STEP2_FILE_NOT_WRITEABLE", "File is not writeable");

define("INSTALL_STEP3_SERVER", "Database server");
define("INSTALL_STEP3_USERNAME", L_USERNAME);
define("INSTALL_STEP3_PASSWORD", L_PASSWORD);
define("INSTALL_STEP3_DBNAME", "Database name");
define("INSTALL_STEP3_PREFIX", "Tablename prefix");
define("INSTALL_STEP3_ENTER_PREFIX", "E.g. mytool_");
define("INSTALL_STEP3_ENTER_SERVER", "Enter the server address. Contact your system admin if necessary. Usually the correct value is localhost.");
define("INSTALL_STEP3_ENTER_USERNAME", "Enter the username for database access");
define("INSTALL_STEP3_ENTER_PASSWORD", "Enter the password for database access");
define("INSTALL_STEP3_ENTER_DBNAME", "Enter the database name which shall be used for installation (must exist)");
define("INSTALL_STEP3_CONNECT_FAILED", "Could not establish connection to database server");
define("INSTALL_STEP3_DB_FAILED", "Database &1 not found");
define("INSTALL_STEP3_MYSQL_VERSION_FAILED", "MySQL version &1 is not working with this Galaxytool version");

define("INSTALL_STEP4_URL","OGame URL");
define("OGAME_URL_DETAILS","Please enter any URL you see when you are logged on to OGame. Based on that URL the tool will derive the OGame API address which can be used to fill data into the Galaxytool without the Galaxytoolbar. This API was introduced with OGame version 4.1.");
define("INSTALL_STEP4_UNIVERSE","OGame Universe");
define("INSTALL_STEP4_DEF_TO_DEBRIS","Defense to debris");
define("INSTALL_STEP4_DEBRIS_RATE","Debris rate");
define("INSTALL_STEP4_SPEED_RATE","Speed rate");
define("INSTALL_STEP4_ENTER_UNIVERSE","Enter your OGame universe name or number (case sensitive).");
define("INSTALL_STEP4_UNIVERSE_MISSING","You must define your universe");
define("INSTALL_STEP4_ENTER_URL","Enter your OGame universe address");
define("INSTALL_STEP4_URL_MISSING","You must define your OGame address");
define("INSTALL_STEP4_URL_CHECK_FAILED","Could not find OGame API at &1");
// 5.1
define("INSTALL_STEP4_GETSETTINGS","Fetch settings");

define("INSTALL_STEP5_TOOLNAME","Galaxytool name");
define("INSTALL_STEP5_ENTER_TOOLNAME","This is the name which will be shown at logon page to identify your Galaxytool");
define("INSTALL_STEP5_LANGUAGE","Default language");
define("INSTALL_STEP5_EMAIL_TO","Email To");
define("INSTALL_STEP5_ENTER_EMAIL_TO","Enter the email address where you would like to receive notifications about registrations");
define("INSTALL_STEP5_EMAIL_FROM","Email From");
define("INSTALL_STEP5_ENTER_EMAIL_FROM","This email address is shown as REPLY for all mails sent from the Galaxytool");
define("INSTALL_STEP5_USE_PHPMAILER","Use PHPMailer");
define("INSTALL_STEP5_MAXSHOUTS","Maximum number of shoutbox entries");
define("INSTALL_STEP5_ENTER_USE_PHPMAILER","Use PHPMailer if your server does not support sending emails by default");
define("INSTALL_PHPMAILER_HOST","SMPT Host");
define("INSTALL_PHPMAILER_HOST_EXAMPLE","e.g. smtp.provider.com");
define("INSTALL_PHPMAILER_USER","SMPT Username");
define("INSTALL_PHPMAILER_USER_EXAMPLE","e.g. user@provider.dcom");
define("INSTALL_PHPMAILER_PASS","SMPT password");
define("INSTALL_PHPMAILER_SECURE","Authentification method (e.g. ssl)");
define("INSTALL_PHPMAILER_PORT","SMTP Port");

define("INSTALL_STEP6_INTRO","Please define a password for the <strong>admin</strong> account which you have to use for your first logon to the Galaxytool after the installation.");

define("INSTALL_STEP7_CONFIG","Configuration file created");
define("INSTALL_STEP7_CONFIG_FAILED","Configuration file not created");
define("INSTALL_STEP7_ATTRIBUTES","Attributes file created");
define("INSTALL_STEP7_ATTRIBUTES_FAILED","Attributes file not created");
define("INSTALL_STEP7_CREATED_TABLES","Database tables created");

define("INSTALL_STEP8_INTRO","You have successfully installed the Galaxytool!");
define("INSTALL_STEP8_LOAD_DATA","Downloading OGame data ...");
define("INSTALL_STEP8_LOAD_DATA_FINISHED","Download of OGame data finished");
define("INSTALL_STEP8_DELETE_FILE","You should now delete the installation files install.php and update.php from your webserver.");
define("INSTALL_STEP8_LOGON","Please logon with the <strong>admin</strong> user and the password you defined earlier.");

/*********************************************************************
* update.php
**********************************************************************/
define("UPDATE_START","Starting update to version &1");
define("UPDATE_STEP_DONE","Done");
define("UPDATE_TITLE", "Galaxytool update for version");
define("UPDATE_STEP1_WELCOME", "Welcome to the update wizard of the Galaxytool. You will be guided through the update of the Galaxytool.");
define("UPDATE_STEP1_BACKUP_FILES", "As a first step, make a backup of your <strong>config</strong> folder! You will have to replace the configuration content in case of errors.");
define("UPDATE_STEP1_BACKUP_DB", "Then make a <a href=\"http://www.ehow.com/how_2036600_create-database-php.html\">backup</a> of your database.");
define("UPDATE_STEP1_PROCEED", "Once the backups have been done, you can proceed with your update.");
define("UPDATE_STEP1", INSTALL_STEP1);
define("UPDATE_STEP2", INSTALL_STEP5);
define("UPDATE_STEP2_OLD_VERSION", "Previous Galaxytool version");
define("UPDATE_STEP3", "Update Galaxytool");
define("UPDATE_STEP3_UPDATE_RUNNING", "Update running, please wait...");
define("UPDATE_STEP4", "Finalize Update");
define("UPDATE_STEP4_INTRO","You have successfully updated the Galaxytool!");
define("UPDATE_STEP4_UPDATE_DONE","Update steps performed.");
define("UPDATE_FAILED","Update failed.");

?>