<?php
/*
 * defines the characters used in OGame to indicate player status
 */
define("PLAYER_BANNED","g");
define("PLAYER_VACATION_MODE","v");
define("PLAYER_NOOB","z");
define("PLAYER_INACTIVE","i");
define("PLAYER_LONG_INACTIVE","I");
define("PLAYER_OUTLAW","o");

/*********************************************************************/
/***************************** public ********************************/
/*********************************************************************/
//index.php
define("L_USERNAME","Gebruikersnaam");
define("L_PASSWORD","Wachtwoord");
define("L_LOGINFAILURE","Incorrecte gebruikersnaam of wachtwoord!");
define("L_TOKENFAILURE","Je verificatie sleutel is fout of je account is nog niet geactiveerd.");
define("L_LOGINTEXT","Login aub.");
define("L_LANGUAGE","Beschikbare talen:");
define("L_TIMEOUT","Sessie afgelopen!");
define("L_REGISTER","Registreer");
define("L_PWLOST","Wachtwoord vergeten");
define("INDEX_TITLE","OGame Galaxytool - Database overzicht");
define("INDEX_INFO","Database overzicht");
define("INDEX_ENTRIES","Aantal zonnestelsels");
define("INDEX_ENTRIES_LASTWEEK","Nieuwe zonnestelsels deze week");
define("INDEX_ENTRIES_TO_OLD","Zonnestelsels ouder dan een maand");
define("INDEX_REGISTERED_USERS","Geregistreerde gebruikers");
define("INDEX_PAGEFORWARD","Als je browser je niet automatisch doorstuurt, klik dan hier.");
define("INDEX_NOTICES","Notities");
define("INDEX_PLAYERS","Speler statistieken");
define("INDEX_ALLIES","Alliantie statistieken");
define("INDEX_REPORTS","Spionage rapporten");
define("INDEX_VERSION","Download de nieuwste versie");
define("INDEX_LATEST_VERSION","Geen nieuwere versie beschikbaar");
define("INDEX_SHOUTBOX","Shoutbox");
define("INDEX_NOENTRY","Nog geen berichten");
define("INDEX_COMMENT","Jouw bericht");
define("INDEX_INSERT","Verzend");
define("INDEX_UMOD","Spelers in Vakantiemodus");
define("INDEX_NO_MOONS","Aantal manen");
define("INDEX_NO_EMPTY_SYSTEMS","Aantal lege zonnestelsels");
define("INDEX_NO_FULL_SYSTEMS","Aantal totaal gevulde zonnestelsels");
define("INDEX_NO_TARGETS","Aantal potentieele doelen");
// 4.0
define("INDEX_USERINFO","Gebruikers statistieken");
define("INDEX_ONLINE","Nu online");
define("INDEX_TODAY","Vandaag online");
define("INDEX_ALL","Totaal aantal logins");
// 4.3.7
define("GENERAL_LOAD_FORM","Laad data formulier");
define("GENERAL_SAVE_FORM","Opslaan data formulier");
define("GENERAL_SAVE_AS_TEXT","Opslaan als");
define("GENERAL_SAVE","Opslaan");
// 4.8
define("INDEX_USERMANAGEMENT","Activatie Overzicht");
define("INDEX_NEEDADMIN","Accounts om te activeren");
define("INDEX_NEEDEMAIL","Ongevalideerde Accounts");
define("INDEX_TOOLBAR_INFO","Galaxytool plugin informatie");
define("INDEX_TOOLBAR_URL","Galaxytool URL");
define("INDEX_TOOLBAR_VERSION_REQUIRED","Heeft tenminste deze versie van Galaxytool nodig");
define("INDEX_TOOLBAR_INSTALL_GUIDE","Installatie instructies voor de plugin");
define("INDEX_TOOLBAR_TOKEN","Verificatie sleutel");
define("INDEX_TOOLBAR_NEW_TOKEN","Ontvang een nieuwe sleutel");
define("INDEX_PLAYERS_WITH_N_PLANETS","Spelers met meer dan &1 planeten");
define("INDEX_GETTING_STARTED","Begin met Galaxytool");
define("INDEX_GETTING_STARTED1","Welkom op Galaxytool!");
define("INDEX_GETTING_STARTED2","Galaxytool helpt je met het analyseren van jou OGame universum &1");
define("INDEX_GETTING_STARTED3","Voordat je data kan analyzeren moet je het eerst toevoegen in de galaxytool. Voor dit is er een brouwser plugin &1 voor Firefox.");
define("INDEX_GETTING_STARTED4","Nadat je de plugin geinstaleerd hebt, navigeer je door de melkwegen zoals normaal en je zult status informatie zien waneer er iets verzonden is naar jouw Galaxytool.");
define("INDEX_GETTING_STARTED5","nadat de plugin data verzonden heeft naar Galaxytool, kan je zien waar mensen kolonies hebben, hoeveel koloniën ze hebben, welke spionage rapporten bestaan or of wanneer mensen actief zijn.");
define("INDEX_GETTING_STARTED6","Maar het helpt je ook om je progressie te zien ten opzichte van andere spelers, of met het analyzeren van gevechtsraporten om te zien hoeveel je de intotaal geraid hebt.");
define("INDEX_GETTING_WIKIPAGE","Er zijn veel meer functies in onze Galaxytool.");
define("INDEX_GETTING_WIKIPAGE2","Check ze uit op onze wiki pagina.");
define("INDEX_GETTING_BOARD","Voor feedback of ideeën kan je ons forum gebruiken:");
define("INDEX_GETTING_CHAT1","Of bezoek onze chatroom:");
define("INDEX_GETTING_CHAT2","We zijn niet 24/7 online maar we zijn er vaak in onze vrije tijd, dus wees geduldig.");
// new 5.0
define("INDEX_CLOSE","Sluiten");
define("INDEX_LOGIN","Inloggen");
define("GENERAL_REQUIRED_FIELDS","Vul aub alle benodigde velden in");
define("INDEX_MESSAGES","Berichten");
define("INDEX_EXAMPLE","Voorbeeld");
define("INDEX_INVALID_DATA","Ongeldige gegevens");
define("GENERAL_COLUMN_HIDE_TITLE","Beheer kolommen");
define("GENERAL_COLUMN_HIDE_INFO","Selecteer de kolommen die getoond moeten worden in de tabel.");
define("GENERAL_ENTRIES_DELETED","&1 items verwijderd.");
define("GENERAL_APPLY","Toepassen");
define("STARTPAGE_GALAXYTOOL_DESCR","<em>Galaxytool</em> is een tool voor het online spel OGame.");
define("GENERAL_OVERWRITE","Overschrijf dubbele invoer.");
define("GENERAL_OVERWRITE_QUESTION","Overschrijven?");
define("INDEX_OWN_LOGINS","Uw logins");
define("GENERAL_OPEN_IN_NEW_WINDOW","Koppeling openen in nieuw venster");
// 5.1
define("GENERAL_UNIT_OF_MEASURE_DAYS","Days");

/*********************************************************************/
/***************************** internal ******************************/
/*********************************************************************/
// index.php
define("PROGRAM_NAME","OGame Galaxytool");
define("SHORTNAME","Galaxytool");
define("BACK_INDEX","Terug naar hoofdpagina");
define("UNIVERSE","Universum");

// search
define("MENU_INFO_LINKS","Informatie");
define("MENU_PAGE","Overzicht");
define("MENU_DB_SEARCH","Zoek in database");
define("MENU_DB_NOTICES","Zoek in notities");
define("MENU_DB_REPORTS","Zoek in spionagerapporten");
define("MENU_GALAXYVIEW","Melkweg overzicht");
define("MENU_STATISTICS","Statistieken");
define("MENU_ALLYHISTORY","Alliantie historie");
// 4.7
define("MENU_FLEET_MOVEMENTS","Vlootbewegingen");
define("MENU_COMBAT_REPORTS","Gevechtsrapporten");
define("MENU_MESSAGES","Ingame berichten");

// insert / change
define("MENU_OPTION_LINKS","Opties");
define("MENU_DB_REFRESH","Gegevens toevoegen");
define("MENU_NOTICES","Notities");
define("MENU_DB_STATUS","Universum overzicht");
define("MENU_USEROPTIONS","Gebruikersbeheer");
define("MENU_USEROPTIONS2","Gebruikersopties");
define("MENU_USEROPTIONS3","Gebruikersinformatie");
// 4.2
define("MENU_ADMIN","Administratie");
// 4.3.3
define("MENU_LOGOUT","Uitloggen");

// Stuff
define("MENU_STUFF","Overige");
define("MENU_FORUM_THREAD","Ontwerpers forum");
define("MENU_DOWNLOADPAGE","Download pagina");
define("MENU_LANGUAGE","Taal");
define("MENU_HELP","Help");
// 4.0
define("MENU_TOOLOPTIONS","Galaxytool Opties");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1"," is toegevoegd aan de database");
define("PARSER_ERROR1","Probleem tijdens het toevoegen van de volgende co&ouml;rdinaten:");
define("PARSER_ERROR2","De database kan niet worden gevonden!");
define("PARSER_ERROR3","De database server kan niet worden gevonden!");
define("PARSER_WRONG_UNIVERSE", "Verkeerd universum - kreeg \"&1\"  maar verwachtte \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","OGame Galaxytool - Zoekpagina");
define("SHOW_SEARCH","Zoeken in Database");
define("SHOW_ALLYSYMBOL","Alliantie label");
define("SHOW_PLAYERNAME","Speler");
define("SHOW_MOONS","Alleen planeten met maan");
define("SHOW_NOTICES","Alleen planeten met een notitie");
define("SHOW_COLONIES","Alleen koloniseerbare planeten");
define("SHOW_YES","Ja");
define("SHOW_NO","Nee");
define("SHOW_SEARCHRANGE","Bereik");
define("SHOW_SEARCH_IN","Zoek in melkweg");
define("SHOW_FROM_SYSTEM","van zonnestelsel");
define("SHOW_FROM_PLANET","Van planeetpositie");
define("SHOW_TO","tot");
define("SHOW_DESCRIPTION","Je kan wildcards (*) gebruiken voor spelers en alliantie namen, bijvoorbeeld: &quot;naam*&quot; dan vind je alle spelers met &quot;naam&quot; in hun naam.<br />Alleen de velden invullen die je wilt specificeren");
define("SHOW_SORT_BY","Sorteren op");
define("SHOW_GALASYSTEM","Melkweg/zonnestelsel");
define("SHOW_ALLYNAME","Alliantienaam");
define("SHOW_SEARCHBUTTON","Zoeken");
define("SHOW_ADDRESS","Coords");
define("SHOW_ALLYSORT","Alliantie");
define("SHOW_PLANET","Planeetnaam");
define("SHOW_STATUS","Status");
define("SHOW_CURRENTNESS","Huidigheid");
define("SHOW_PLAYER_STATUS","Spelerstatus");
define("SHOW_PLAYER_STATUS1","iedereen");
define("SHOW_PLAYER_STATUS2","mogelijke doelwitten");
define("SHOW_PLAYER_STATUS3","inactief");
define("SHOW_HITS","Resultaten");
define("SHOW_OF","van");
define("SHOW_ASC","Oplopend");
define("SHOW_DESC","Aflopend");
define("SHOW_RESULTS","Aantal resultaten per pagina");
define("SHOW_MOON","Maan");
define("SHOW_UKMOONSIZE","onbekend");
define("SHOW_DF","PV");
define("SHOW_DF_LONG","Puin veld");
define("SHOW_METAL","M");
define("SHOW_METAL_LONG","Metaal");
define("SHOW_CRYSTAL","K");
define("SHOW_CRYSTAL_LONG","Kristal");
define("SHOW_BOTH","Metaal en kristal samen");
define("SHOW_AT_LEAST","(op z&#39;n minst)");
define("SHOW_DATE","Datum");
define("SHOW_DATE_0","alles");
define("SHOW_DATE_1","ouder dan");
define("SHOW_DATE_2","nieuwer dan");
define("SHOW_RANK","Rank");
define("SHOW_FRANK","Vloot rank");
define("SHOW_MEMBERS","Leden");
define("SHOW_NOTRANKED","Niet in de top 1500.");
define("SHOW_NOTICERES","Notities");
define("SHOW_REPORTS","Alleen planeten met rapport");
define("SHOW_REPORTS_SHORT","Rapporten");
define("SHOW_NOTHING","Geen resultaten");
define("SHOW_ALLIANCE_STATUS","Alliantie status");
define("SHOW_NO_STATUS","Geen status");
define("SHOW_NAP","NAP");
define("SHOW_ALLIED","Bondgenoot");
define("SHOW_WAR","Oorlog");
define("SHOW_BOYCOTT","Boycot");
define("SHOW_NEUTRAL","Neutraal");
define("SHOW_OWN","Eigen Alliantie");
define("SHOW_WING","Wing");
// obsolete with 5.0
define("SHOW_EXT_OPTIONS1","Laat meer zoek opties voor bereik, rank, datum of puinvelden zien.");
define("SHOW_EXT_OPTIONS2","Laat meer zoek opties voor kolonies, manen, rapporten, notities, spelerstatus of diplomatie status zien.");
define("SHOW_EXT_OPTIONS3","Laat meer opties voor het sorteren van zoek resultaten zien.");
// new 5.0
define("SHOW_EXTENDED","Uitgebreid zoeken");
define("SHOW_MOON_SELECTION","Planeet met een maan");
define("SHOW_REPORT_SELECTION","Planeet met een rapport");
define("SHOW_FILTER_BY","Uitsluiten van de lijst");
define("SHOW_FILTER_NONE","geen");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Show players without score changes within the last few days");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","OGame Galaxytool - Status pagina");
define("STATUS_DB_STATUS","Status van database");
define("STATUS_COLOR","Kleur");
define("STATUS_AGE1","Toevoeging 1 dag oud.");
define("STATUS_AGE2","Toevoeging 2 - 4 dagen oud.");
define("STATUS_AGE3","Toevoeging 4 - 7 dagen oud.");
define("STATUS_AGE4","Toevoeging 1 - 2 weken oud.");
define("STATUS_AGE5","Toevoeging 2 - 4 weken oud.");
define("STATUS_AGE6","Toevoeging ouder dan 1 maand!");
define("STATUS_AGE7","Geen gegevens beschikbaar.");
define("STATUS_ON","aan");
define("STYLES_COLOR1","Kleur1");
define("STYLES_COLOR2","Kleur2");
define("STYLES_COLOR3","Kleur3");
define("STYLES_COLOR4","Kleur4");
define("STYLES_COLOR5","Kleur5");
define("STYLES_COLOR6","Kleur6");
define("STYLES_COLOR7","Kleur7");
// 4.8
define("STATUS_DB_LEGEND","Legenda");
define("STATUS_GALAXY","Melkweg overzicht");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","OGame Galaxytool - Gebruikers beheer");
define("USER_NAMES","Gebruiker");
define("USER_ERROR","Fout");
define("USER_NEWUSER","Nieuwe gebruiker");
define("USER_OPTIONS","Opties");
define("USER_USERNAME","Gebruiker");
define("USER_PASSWORD","Wachtwoord");;
define("USER_PASSWORD_CONFIRM","Bevestig wachtwoord");
define("USER_GALAXY","Melkweg");
define("USER_SEARCH","Zoek");
define("USER_INSERT","Toevoegen");
define("USER_DELETE","Verwijderen");
define("USER_DELETE_ENTRY","Verwijder deze gebruiker: ");
define("USER_STATUS","Bekijk status");
define("USER_STYLES","Wijzig layout");
define("USER_SUBMIT","Verzenden");
define("USER_RESET","Terug naar standaard");
define("USER_YES","Ja");
define("USER_NO","Nee");
define("USER_STYLEPATH","Pad naar styles.css");
define("USER_PROBES","Spionage Raporten");
define("USER_EMAIL","E-mail");
define("USER_ERROR1","Wachtwoord of e-mail ongeldig.");
define("USER_ERROR2","E-mail ongeldig.");
define("USER_INGAME","In-game Naam");
define("USER_ALLYTAG","Alliantie label");
define("USER_ALLYHISTORY","Alliantie historie");
define("USER_DIPLOMATIC","Diplomaat");
define("USER_STATSPAGE","Aantal statistieken per pagina");
define("USER_LINKS","Links");
define("USER_LINKS2","Opmaak:<br>tekst;url<br>tekst2;url2<br>tekst3;url3");
define("USER_EXPORT_TITLE","Export kleuren (BB Codes)");
define("USER_BB_COORDINATES","Co&ouml;rdinaten");
define("USER_BB_MOON","Maan");
define("USER_BB_DEBRIS","Puin veld");
define("USER_BB_ALLY","Alliantie naam");
define("USER_BB_ALLYDETAILS","Alliantie informatie");
define("USER_BB_PLAYERNAME","Speler naam");
define("USER_BB_BANNED","geblokkeerd");
define("USER_BB_VACATION","vakatie mode");
define("USER_BB_NOOB","Zwak");
define("USER_BB_INACTIVE","Inactief");
define("USER_BB_LONGINACTIVE","Lang inactief");
// new with 4.7
define("USER_DELETION","Verwijderen");
define("USER_FLEETINFO",MENU_FLEET_MOVEMENTS);
define("USER_ACTIVITIES","Spelersactiviteiten");
define("USER_MAINTENANCE","Galaxytool onderhoud");
define("USER_MANAGEMENT",MENU_USEROPTIONS);
define("USER_DELETE_MY_COMBAT_REPORTS","Verwijder mijn evechtsrapporten");
define("USER_DELETE_MY_MESSAGES","Verwijder mijn berichten");
define("USER_DELETE_MY_FLEETMOVES","Verwijder mijn vloot bewegingen");
// 4.8
define("USER_DELETE_MY_COMBAT_REPORTS_LIMITED","Verwijder mijn gevechtsrapporten ouder dan &1 dagen");
define("USER_DELETE_MY_MESSAGES_LIMITED","Verwijder mijn berichten ouder dan &1 dagen");
define("USER_TABLE_ENTRIES","Aantal zoekresultaten per pagina");
// 5.0
define("USER_EXISTS","Gebruiker bestaat al!");
define("USER_BB_OUTLAW","Vogelvrij");
define("USER_INVALID_URL","De URL &1 lijkt ongeldig en zal worden genegeerd.");

/*********************************************************************
* galaxyview.php
*********************************************************************/
define("VIEW_TITLE","OGame Galaxytool - Details");
define("VIEW_NODATA","Geen gegevens beschikbaar.");
define("VIEW_GALAXY","Melkweg");
define("VIEW_SYSTEM","Zonnestelsel");
define("VIEW_POSITION","Pos.");
define("VIEW_PLANET","Planeet");
define("VIEW_MOON","Maan");
define("VIEW_TF","PV");
define("VIEW_PLAYER","Speler");
define("VIEW_PLAYER_ADD","(Rang / Status)");
define("VIEW_ALLY","Alliantie");
define("VIEW_ALLY_ADD","(Rank / Leden)");
define("VIEW_METAL","M");
define("VIEW_CRYSTAL","K");
define("VIEW_COLONISED","Planeten bewoond");
define("VIEW_UKMOONSIZE","onbekend");
define("VIEW_BACK","terug");
define("VIEW_NOTICE","Notities");
define("VIEW_REPORTS","Rapporten");
define("VIEW_MOONPHALANX","De volgende manen kunnen dit zonnestelsel scannen");
define("VIEW_NOMOONS","Geen manen gevonden");
define("VIEW_IRAKS","De volgende planeet kan dit zonnestelsel bereiken met Interplanetaire Raketten");
define("VIEW_NOIRAKS","Geen Interplanetaire Raketten gevonden");
// 4.0
define("VIEW_MOON_DESTROY_CHANCE","Kans op maan vernietiging");
define("VIEW_CHANCE_WITH_ONE","Kans met 1 Ster des Doods");
define("VIEW_CHANCE_WITH_N","Kans met ");
define("VIEW_DEATH_STARS"," Sterren des Doods");
define("VIEW_DS_DESTROY_CHANCE","Kans op ster vernietiging");
define("VIEW_TOP","Top");
// new 4.3.5
define("VIEW_GO","go");
// new 5.0
define("VIEW_DIAMETER","Diameter");

/*********************************************************************
* change_password.php
**********************************************************************/
define("PW_TITLE","OGame Galaxytool - wijzig wachtwoord");
define("OLD_PASSWORD","oud wachtwoord");
define("NEW_PASSWORD","nieuw wachtwoord");
define("CONFIRM_NEW_PASSWORD","bevestig nieuw wachtwoord");
define("PW_MISMATCH","Wachtwoorden zijn niet hetzelfde!");
define("PW_ERROR","Je oude wachtwoord was niet juist!");
define("UPDATE_DONE","Wachtwoord gewijzigd.");
// new 4.2
define("TIMEZONE_OFFSET","Verschil tijdszone met server");
// new 4.3
define("DELETE_ACCOUNT","Verwijder dit Galaxytool account");
define("DELETE_ACCOUNT_SAFETY_REQUEST","Weet u het zeker?");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","Authorizatie");
define("CH_PASSWD_ADMIN","Admin");
// new 4.7
define("TIMEZONE_OGAME_OFFSET","Verschil tijdszone met OGame server");
// new 4.8
define("CH_PASSWD_USER_LANGUAGE","Verander naar deze taal nadat je hebt ingelogd");
define("CH_PASSWD_USER_LANGUAGE_NO_CHANGE","Geen verandering");
define("CH_PASSWD_EXPAND","Uitgeklapt");
define("CH_PASSWD_COLLAPSE","Ingeklapt");
define("CH_PASSWD_HIDDEN","Verborgen");
define("CH_PASSWD_GETTING_STARTED","Toon de beginners instructies  na inlogen");
define("CH_PASSWD_PLUGIN","Toon Plugin Info na het inloggen");

/*********************************************************************
* notices.php
**********************************************************************/
define("NOTICE_TITLE","OGame Galaxytool - Notities");
define("NOTICE_HEADER","wijzig notitie");
define("NOTICE_HEADER2","Wijzig eigen notities");
define("NOTICE_PUBLIC","Beschikbaar voor publiek ?");
define("NOTICE_YES","Ja");
define("NOTICE_NO","Nee");
define("NOTICE_TEXT","Notitie");
define("NOTICE_SAVE","Bewaar");
define("NOTICE_DELETED","Gegevens verwijderd.");
define("NOTICE_SAVED","Gegevens opgeslagen.");
define("NOTICE_RESULTS","Alle resultaten");
define("NOTICE_USER","Gebruiker");
define("NOTICE_DATE","Datum");
define("NOTICE_EDIT","Wijzig");
define("NOTICE_DELETE","Verwijder");
define("NOTICE_NEW","Creeer een nieuwe toevoeging");
define("NOTICE_NOTPUBLIC","Notitie niet publiek");
define("NOTICE_ALL","alles");
define("NOTICE_NONE",SHOW_FILTER_NONE);
define("NOTICE_SEARCH","Zoek in notities");
define("NOTICE_SEARCH_SHORT","Zoek");
define("NOTICE_HITS","Resultaten");
define("NOTICE_SHOWRESULTS","Aantal resultaten per pagina");
define("NOTICE_OF","van");
define("NOTICE_NOTHING","Geen resultaten");
// 4.0
define("NOTICE_CHARS","Tekens");
define("NOTICE_PLAYERNAME","Speler");
define("NOTICE_SHOWALL","Laat alle notities zien");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","OGame Galaxytool - Spionage rapporten");
define("REPORTS_RESOURCES","Grondstoffen");
define("REPORTS_FLEET","Vloten");
define("REPORTS_DEFENCE","Verdediging");
define("REPORTS_BUILDINGS","Gebouwen");
define("REPORTS_TECHNOLOGY","Onderzoek");
define("REPORTS_MOON","Maan");
define("REPORTS_SEARCH","Zoek in spionage rapporten");
define("REPORTS_SEARCH_SHORT","Zoek");
define("REPORTS_HITS","Resultaten");
define("REPORTS_NOTHING","Geen Resultaten gevonden");
define("REPORTS_ADDRESS","Coords");
define("REPORTS_CURRENTNESS","Laatste scan");
define("REPORTS_PLAYERNAME","Speler");
define("REPORTS_ALLY","Alliantie");
define("REPORTS_VIEW","bekijk rapport");
define("REPORTS_SEARCH_IN","Zoek in melkweg");
define("REPORTS_FROM_SYSTEM","van zonnestelsel");
define("REPORTS_TO","naar");
define("REPORTS_DELETE","verwijder");
define("REPORTS_DELETED","Gegevens verwijdert");
define("REPORTS_RESULTS","Resultaten per pagina");
define("REPORTS_OF","van");
define("REPORTS_DATE","Datum");
define("REPORTS_DATE_0","alles");
define("REPORTS_DATE_1","ouder dan");
define("REPORTS_DATE_2","nieuwer dan");
define("REPORTS_NOTICES","Notities");
define("REPORTS_AT_LEAST_RESOURCES","Grondstoffen (op zijn minst)");
define("REPORTS_SEARCH_EXTENDED","uitgebreide zoekopdracht");
define("REPORTS_FLEET_RESIS","Vloot- score");
define("REPORTS_DEFENCE_RESIS","Verdediging- score");
define("REPORTS_ALL_RESIS","totale scores");
define("REPORTS_TECHS","Technologieën");
define("REPORTS_UNKNOWN_ENTRIES","onbekende rapporten");
define("REPORTS_PARTLY_INSERTED","gedeeltelijk toegevoegd");
define("REPORTS_FOR_ALL_RES","voor alle grondstoffen");
define("REPORTS_FOR_TF","voor het puin veld");
define("REPORTS_KT","Kleine vrachtschepen");
define("REPORTS_GT","Grote vrachtschepen");
define("REPORTS_SS","Slagschepen");
define("REPORTS_REC","Recycler");
define("REPORTS_RAIDABLE","Alleen raidbare doelwitten");
define("REPORTS_ALL_RESOURCES","Alle grondstoffen");
// 4.0
define("REPORTS_STUFF","Overige");
define("REPORTS_SPEEDSIM","Simuleer met Speedsim");
define("REPORTS_DRAGOSIM","Simuleer met Dragosim");
define("REPORTS_STATUS","Status");
define("REPORTS_ERROR","Er is een fout opgetreden");
// 4.2
define("REPORTS_OWN_REPORTS","Alleen mijn rapporten");
// 4.3.3
define("REPORTS_UPLOAD_BY","Rapport verzonden door");
// 4.4
define("REPORTS_DEPTH","Rapport bereik");
define("REPORTS_FLEET_SCORE","Vlootpunten");
define("REPORTS_DEFENCE_SCORE","Verdedigingspunten");
// 5.0
define("REPORTS_HOURS","uren");
define("REPORTS_MAX_RESULTS_HIT","Uw zoekopdracht bevatte meer dan &1 uitkomsten. Enkel de eerste &1 uitkomsten zullen worden getoond. Pas uw zoekopdracht aan om minder uitkomsten te krijgen.");
define("REPORTS_OSIMULATE","Simuleer met OSimulate");
define("REPORTS_SHOW_ONLY","Toon alleen");
define("REPORTS_SHOW_PLANETS","Planeten");
define("REPORTS_SHOW_MOONS","Manen");
define("REPORTS_OWNER","Rapporten beheerd door");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","OGame Galaxytool - Statistieken");
define("STATS_TBLHEAD","Statistieken");
define("STATS_RANK","Rank");
define("STATS_PLAYERNAME","Speler Naam");
define("STATS_ALLYNAME","Alliantie label");
define("STATS_SCORE","Score");
define("STATS_FLEET","Vloot");
define("STATS_RESEARCH","Onderzoek");
define("STATS_MEMBERS","Leden");
define("STATS_STATUS","Status");
define("STATS_NOTHING","geen Status");
define("STATS_NAP","NAP");
define("STATS_ALLIED","Allied");
define("STATS_WAR","Oorlog");
define("STATS_BOYCOTT","Boycot");
define("STATS_NEUTRAL","Neutraal");
define("STATS_OWN","Eigen Alliantie");
define("STATS_WING","Wing");
define("STATS_UPDATE","ingevuld op");
define("STATS_PLAYERSTATS","Speler Stats");
define("STATS_ALLYSTATS","Alliantie Stats");
// 4.0
define("STATS_DELETE","Wil je deze toevoeging verwijderen?");
define("STATS_CONFIRM_DELETE","Weet je zeker dat je deze toevoeging wilt verwijderen?");
define("STATS_CHANGE_PLAYER_STATUS","Speler status");
define("STATS_CHANGE_ALLIANCE_STATUS","Alliantie status");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","Alle leden van deze alliantie krijgen de gekozen status. Elke vorige status wordt overschreven. Je kan de status van spelers later veranderen.");
define("STATS_UNKNOWN","Rest");
define("STATS_DETAILS","Details voor");
// 4.4
define("STATS_PLAYERSTATUS",SHOW_PLAYER_STATUS);
define("STATS_IGNORE_STATUS",SHOW_PLAYER_STATUS1);
define("STATS_ACTIVE","Actief");
define("STATS_INACTIVE",USER_BB_INACTIVE);
define("STATS_BANNED",USER_BB_BANNED);
define("STATS_VACATION",USER_BB_VACATION);
define("STATS_NOOB",USER_BB_NOOB);
// 4.8
define("STATS_YES",SHOW_YES); // reuse SHOW definitions if applicable
define("STATS_NO",SHOW_NO);
define("STATS_SEARCH",USER_SEARCH);
define("STATS_SHOW_GRAPH","Toon details van score verdeling");
define("STATS_LONG_INACTIVE",USER_BB_LONGINACTIVE);
// 4.9
define("STATS_STANDARD","Standaard punten");
define("STATS_MILITARY","Militaire punten");
define("STATS_ECONOMY","Economie");
define("STATS_HONOUR","Erepunten");
define("STATS_MILITARY_BUILD","Militaire punten opgebouwd");
define("STATS_MILITARY_DESTROYED","Militaire punten vernietigd");
define("STATS_MILITARY_LOST","Militaire punten verloren");

/*********************************************************************
* register.php
**********************************************************************/
define("REGISTER_REGISTRATE","Registreer");
define("REGISTER_LOGINNAME","Login-Naam");
define("REGISTER_PASSWORD","Wachtwoord");
define("REGISTER_PASSWORD_CONFIRM","Bevestig wachtwoord");
define("REGISTER_EMAIL","E-mail");
define("REGISTER_INGAME","Ingame-Naam");
define("REGISTER_ALLYTAG","Alliantie label");
define("REGISTER_EMAILVERIFICATION","E-mailcheck");
define("REGISTER_EMAILTEXT","Klik op de volgende link om je registratie te bevestigingen.");
define("REGISTER_ERROR1","Login-gebruikersnaam bestaat al.");
define("REGISTER_ERROR2","Fout tijdens het verzenden. Neem contact op met een admin.");
define("REGISTER_ERROR3","Fout tijdens de communicatie met de database!");
define("REGISTER_INFO1","Je account is aangemaakt.");
define("REGISTER_INFO2","Klik op de link in de e-mail om je registratie te bevestigingen.");
define("REGISTER_INFO3","Account bevestigd. De admin zal hem nu activeren.");
define("REGISTER_BUTTON","Terug naar de beginpagina");
define("REGISTER_NEW_SUBJECT","Een nieuwe gebruiker heeft zich geregistreerd bij galaxytool.");
define("REGISTER_NEW_MAILTEXT","Een nieuwe gebruiker heeft zich geregistreed.");
// new 4.2
define("REGISTER_BACK","Terug naar de beginpagina");
// new 4.3.5
define("REGISTER_MISSING_FIELDS","Niet alle velden zijn ingevuld");
// new 4.8
define("REGISTER_ERROR4","ongeldig Email adres");
define("REGISTER_ERROR5","Wachtwoorden komen niet overeen.");
define("REGISTER_PWS","Wachtwoord sterkte");
define("REGISTER_PWS0","zeer zwak");
define("REGISTER_PWS1","zwak");
define("REGISTER_PWS2","goed");
define("REGISTER_PWS3","sterk");
define("REGISTER_PWS4","zeer sterk");
// new 5.0
define("REGISTER_EMAIL_USED","Het opgegeven e-mailadres wordt al gebruikt.");

/*********************************************************************
* lost_password.php
**********************************************************************/
define("LOSTPW_TITLE","Wachtwoord vergeten");
define("LOSTPW_INFO2","Een nieuw wachtwoord is aangemaakt en naar je e-mail adres gestuurd.");
define("LOSTPW_BUTTON1","nieuw wachtwoord");
define("LOSTPW_BUTTON2","Terug naar de beginpagina");
define("LOSTPW_LOGINNAME","Login-Naam");
define("LOSTPW_EMAIL","Email");
define("LOSTPW_ERROR1","Fout tijdens de communicatie met de database!");
define("LOSTPW_ERROR2","Niets gevonden!");
define("LOSTPW_ERROR3","Fout tijdens het verzenden. Neem contact op met een admin.");
define("LOSTPW_EMAIL_SUBJECT","Je nieuwe wachtwoord");
define("LOSTPW_EMAIL_TEXT1","Hier is je nieuwe login voor de Galaxytool");
define("LOSTPW_EMAIL_TEXT2","Gebruikersnaam");
define("LOSTPW_EMAIL_TEXT3","Wachtwoord");
// new 5.0
define("LOSTPW_INFO1","U zult een email ontvangen om te controleren of u daadwerkelijk een wachtwoordreset heeft aangevraagd.");
define("LOSTPW_CONFIRM_RESET_SUBJECT","Wachtwoord verloren?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","Hallo,\n\nu heeft een wachtwoordreset aangevraagd voor de Galaxytool. Om een nieuw wachtwoord te genereren, klikt u op de volgende link:");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","OGame Galaxytool - Gebruikers informatie");
define("USERINFO_NAMES","Alle gebruikers van deze tool");
define("USERINFO_DETAIL","gedetailleerde informatie over");
define("USERINFO_ERROR1","Geen gebruiker met dit ID!");
define("USERINFO_USERNAME","Login naam");
define("USERINFO_INGAME","In-game naam");
define("USERINFO_EMAIL","Email");
define("USERINFO_ALLYTAG","Alliantie");
define("USERINFO_STYLEPATH","Skin");
define("USERINFO_STATUS","Status");
define("USERINFO_ACTIVATE","Activeer speler");
define("USERINFO_LOGINS","Aantal keer ingelogd");
define("USERINFO_LASTLOGIN","Laatste Login");
define("USERINFO_DATA","Informatie over deze melkwegen");
define("USERINFO_NODATA","Deze gebruiker heeft nog geen melkwegen toegevoegd!");
define("USERINFO_GALAXY","Melkweg");
define("USERINFO_SYSTEMS","Aantal melkwegen");
define("USERINFO_IP","IP adres");
define("USERINFO_LOGINTIME","Login");
define("USERINFO_NOLOGIN","De speler is nog nooit ingelogd.");
define("USERINFO_LAST_GALAXYUPDATE","Laatste ingevoerde melkweg");
define("USERINFO_LAST_PUBLIC_NOTICE","Laatste publieke notitie");
define("USERINFO_LAST_PRIVATE_NOTICE","Laatste prive notitie");
define("USERINFO_NUMBEROF_PUBLIC_NOTICE","Aantal plublieke notities");
define("USERINFO_NUMBEROF_PRIVATE_NOTICE","Aantal prive notities");
define("USERINFO_ACTIVATED","Account geactiveerd");
define("USERINFO_ACTIVATIONTEXT","De Galaxytool admin je account geactiveerd.\n\nVeel plezier met de Galaxytool!");
// new 4.8
define("USERINFO_LAST_SUBMIT","Laatst toegevoegde data");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","OGame Galaxytool - Alliantie Geschiedenis");
define("ALLYHISTORY_TBLHEAD","Historisch overzicht");
define("ALLYHISTORY_PLAYERNAME","Speler Naam");
define("ALLYHISTORY_ALLYNAME","Alliantie");
define("ALLYHISTORY_LASTMONTH","Afgelopen maand"); // changed at 4.0
define("ALLYHISTORY_ALL_DATA","alle beschikbare informatie"); // new 4.0
define("ALLYHISTORY_SHOW","laat statistieken zien");
define("ALLYHISTORY_TIMESPAN","Tijdsbereik");
define("ALLYHISTORY_PROGESS","Voortgang");
define("ALLYHISTORY_SCORE","Scores");
define("ALLYHISTORY_FSCORE","Vloot scores"); // new 4.0
define("ALLYHISTORY_RSCORE","Onderzoeks scores"); // new 4.0
define("ALLYHISTORY_MEMBER","Leden"); // new 4.0
define("ALLYHISTORY_NOTHING","niets gevonden");
define("ALLYHISTORY_DETAILS","Details");
define("ALLYHISTORY_SHOW_ADDRESS","Coördinaten");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","Speler informatie");
define("DETAILEDINFO_ALLYINFO_TITLE","Alliantie informatie");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","Gedetailleerde speler informatie");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","Gedetailleerde alliantie informatie");
define("DETAILEDINFO_NO_ALLIANCE","geen");
define("DETAILEDINFO_SCORE","Score statistieken");
define("DETAILEDINFO_FLEET","Vloot statistieken");
define("DETAILEDINFO_RESEARCH","Onderzoeks statistieken");
define("DETAILEDINFO_RANK","Rank");
define("DETAILEDINFO_POINTS","Score");
define("DETAILEDINFO_KNOWN_PLANETS","bekende planeten");
define("DETAILEDINFO_MOONS","bekende manen");
define("DETAILEDINFO_PHALANX_AREA","Phalanx bereik");
define("DETAILEDINFO_NO_PHALANX_AREA","Geen Phalanx gevonden");
define("DETAILEDINFO_NOTICES","Notities");
define("DETAILEDINFO_NO_NOTICES","Geen notities gevonden");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","Vorige Allianties");
define("DETAILEDINFO_RESOURCES_PER_HOUR","Grondstoffen per uur");
define("DETAILEDINFO_RESOURCES_PER_DAY","Grondstoffen per dag");
define("DETAILEDINFO_RESOURCES_PER_WEEK","Grondstoffen per week");
define("DETAILEDINFO_RESOURCES_PER_MONTH","Grondstoffen per maand (30 dagen)");
define("DETAILEDINFO_METAL","Metaal");
define("DETAILEDINFO_CRYSTAL","Kristal");
define("DETAILEDINFO_DEUTERIUM","Deuterium");
define("DETAILEDINFO_UNKNOWN","onbekend");
define("DETAILEDINFO_SCORE_DISTRIBUTION","Punten verdeling");
// new 4.2
define("DETAILEDINFO_GENERAL","Informatie");
define("DETAILEDINFO_MEMBERS","lid"); //andere benaming.. kon het nergens vinden
define("DETAILEDINFO_GRAPHS","Grafieken");
define("DETAILEDINFO_RESOURCES","Grondstoffen");
define("DETAILEDINFO_FLEET_TAB","Vloot");
define("DETAILEDINFO_TECH","Onderzoek");
define("DETAILEDINFO_FLEET_DETAIL","Som / (Spelers gemiddelde) beschikbaar uit rapporten");
define("DETAILEDINFO_TECH_DETAIL","gemiddelde van alle beschikbare informatie v/d speler");
// new 4.3
define("DETAILEDINFO_PLANET_TAB",REPORTS_SHOW_PLANETS);
define("DETAILEDINFO_MOON_TAB",REPORTS_SHOW_MOONS);
// 4.7
define("DETAILEDINFO_ACTIVITIES","Activiteiten");
define("DETAILEDINFO_NODATA",VIEW_NODATA); // reuse existing translations
define("DETAILEDINFO_ACTIVITY_DESCRIPTION","Toon de activiteiten van &1 verzameld uit:");
define("DETAILEDINFO_GALAXYVIEWS","Melkweg bekijken");
define("DETAILEDINFO_SCANS","Spionage berichten");
define("DETAILEDINFO_MESSAGES","Privé berichten");
define("DETAILEDINFO_COMBATS","Gevechtsrapporten");
define("DETAILEDINFO_ALLYPAGE","Alliantie overzicht");
define("DETAILEDINFO_MANUAL","Handmatige invoer");
define("DETAILEDINFO_START","Begin");
define("DETAILEDINFO_TO","tot");
define("DETAILEDINFO_TODAY","Vandaag");
define("DETAILEDINFO_DATA_RESTRICTION","beperkt tot:");
define("DETAILEDINFO_WEEKDAY_WEEKEND","Weekend");
define("DETAILEDINFO_WEEKDAY_WORKINGDAY","Weekdag");
define("DETAILEDINFO_WEEKDAY_MONDAY","Maandag");
define("DETAILEDINFO_WEEKDAY_TUESDAY","Dinsdag");
define("DETAILEDINFO_WEEKDAY_WEDNESDAY","Woensdag");
define("DETAILEDINFO_WEEKDAY_THURSDAY","Donderdag");
define("DETAILEDINFO_WEEKDAY_FRIDAY","Vrijdag");
define("DETAILEDINFO_WEEKDAY_SATURDAY","Zaterdag");
define("DETAILEDINFO_WEEKDAY_SUNDAY","Zondag");
define("DETAILEDINFO_WEEKDAY_SHORTLENGTH",3); // Aantal letters om de dag af te korten
define("DETAILEDINFO_PLAYER_CURRENTLY_ACTIVE","De speler is momenteel actief");
define("DETAILEDINFO_PLAYER_MESSAGES","beschikbare privé berichten");
define("DETAILEDINFO_SHOW","tonen");
define("DETAILEDINFO_NONE","geen berichten beschikbaar");
define("DETAILEDINFO_ENTER_MANUALLY","Voer activiteiten voor deze speler in");
define("DETAILEDINFO_PLAYER_SEEN_ON","Speler was online op");
define("DETAILEDINFO_INSERT","invoeren");
define("DETAILEDINFO_OGAME_SERVERTIMES","Let op: Alle data en tijden verwijzen naar server de OGame server!");
define("DETAILEDINFO_DAY_VIEW","24 uurs overzicht");
define("DETAILEDINFO_WEEK_VIEW","weekoverzicht");
// new 4.8
define("DETAILEDINFO_HOME_PLANET","Thuis planeet");
// new 5.0
define("DETAILEDINFO_PLANETNAME","Naam"); // also used for moons!
define("DETAILEDINFO_DEFENCE_SCORE","Verdedigingsscore");
define("DETAILEDINFO_DEFENCE_SCORE_TOOLTIP","Verdedigingsscore = Vloot - Score + Onderzoek + Economie.<br/>Alle statistieken moeten up-to-date zijn en moeten geldige invoer bevatten!");
define("DETAILEDINFO_SCORE_PER_SHIP","Scores per schip");
define("DETAILEDINFO_SHIPS","Aantal schepen");
define("DETAILEDINFO_DATE_IN_FUTURE","Vul geen tijden in die zich in de toekomst afspelen.");

// new 4.2
/*********************************************************************
* administration.php
**********************************************************************/
define("ADMIN_TITLE","Administratie van de Galaxytool");
define("ADMIN_DISCLAMER","OPGELET: Het uitvoeren van deze scripts geschied op eigen risico! Het meeste van deze scripts verwijderdt gegevens.");
define("ADMIN_INCONSISTENCIES","Inconsistentie in de database");
define("ADMIN_PLANETS","Planeten bij positie 0 of groter dan 15");
define("ADMIN_GALAXIES","Verwijder galaxies groter dan &1 ");
define("ADMIN_PLAYERS","Verwijder spelers zonder een OGame playerID (Dit leidt tot dubbele records");
define("ADMIN_REPORTS","Verwijder rapporten van niet bestaande planeten");
define("ADMIN_MISC","Diversen");
define("ADMIN_RESET","Reset Galaxytool (Gebruiker en IP tabel blijven in tact)");
define("ADMIN_OLD_PLAYERS","Verwijder spelergegevens ouder dan &1 dagen");
define("ADMIN_OLD_REPORTS","Verwijder rapporten ouder dan &1 dagen");
define("ADMIN_LOADING","Het venster niet sluiten wanneer de pagina is geladen.");
define("ADMIN_STATUS","Status van je aanvraag");
define("ADMIN_SELECTION","Er moet op zijn minst 1 selectie worden gekozen");
define("ADMIN_SAFETY","Weet u het zeker?(voor het uitvoeren van de scripts)");
define("ADMIN_DONE","klaar");
define("ADMIN_NOTBD","niets uitgevoerd");
// new 4.3
define("ADMIN_OLD_GALAXIES","Verwijder galaxy bezichtigingen die ouder zijn dan &1 dagen");
define("ADMIN_UNUSED_PLAYERS","Verwijder spelers die niet bestaan in de galaxy overzicht");
// new 4.7
define("ADMIN_OLD_ACTIVITIES","Verwijder spelers activiteiten ouder dan &1 dag/dagen");
// new 4.8
define("ADMIN_OLD_COMBATS","Verwijder gevechtsrapporten ouder dan &1 dagen");
define("ADMIN_OLD_INGAME_MSG","Verwijder berichten ouder dan &1 dagen");
// new 5.0
define("ADMIN_OGAME_API","Laad publieke data van OGame in de Galaxytool");
define("ADMIN_OGAME_ALL_DATA",ALLYHISTORY_ALL_DATA);
define("ADMIN_OGAME_GALAXY_DATA",MENU_GALAXYVIEW);
define("ADMIN_OGAME_STATISTICS_DATA",MENU_STATISTICS);

// new 4.3.5
/*********************************************************************
* errorpage.php
**********************************************************************/
define("ERRORPAGE_PAGEFORWARD","Klik hier als uw browser page forwarding niet ondersteund");
define("ERRORPAGE_PERMISSION_DENIED","U heeft niet de juiste machtigingen om deze pagina te bezichtigen. Klik hier om terug te gaan.");

// new 4.7
/*********************************************************************
* fleet_movements.php
**********************************************************************/
define("FLEETS_TITLE","Vlootbeweging");
define("FLEETS_ACTUAL_FLEETS","Huidige vlootbeweging");
define("FLEETS_YES",SHOW_YES);
define("FLEETS_NO",SHOW_NO);
define("FLEETS_DETAILS","Details");
define("FLEETS_MISSION_EXPEDITION","Expeditie");
define("FLEETS_MISSION_COLONIZATION","Kolonisatie");
define("FLEETS_MISSION_RECYCLE","Puinruimen");
define("FLEETS_MISSION_TRANSPORT","Transporteren");
define("FLEETS_MISSION_DEPLOYMENT","Verplaatsing");
define("FLEETS_MISSION_ESPIONAGE","Spionage");
define("FLEETS_MISSION_ACS_DEFEND","AGS Verdediging");
define("FLEETS_MISSION_ATTACK","Aanval");
define("FLEETS_MISSION_ACS_ATTACK","AGS Aanval");
define("FLEETS_MISSION_MOON_DESTRUCTION","Vernietiging maan");
define("FLEETS_MISSION_MISSILE_ATTACK","Raket aanval");
define("FLEETS_NO_DATA","Geen relevante data gevonden");
// new 5.0
define("FLEETS_FLEET","Vloot");
define("FLEETS_ALL_FLEETS","Toon alle vlootbewegingen");

/*********************************************************************
* parser_combat_reports.inc.php
**********************************************************************/
define("COMBAT_REPORT_OUDATED_GALAXYVIEW","Uw galaxy data is verouderd. Gelieve de sytemen van de aanvalsoorsprong en het doel opnieuw te bekijken.");

/*********************************************************************
* messages.php
**********************************************************************/
define("MESSAGES_TITLE","OGame Galaxytool - OGame berichten");
define("MESSAGES_PLAYERNAME","Naam speler");
define("MESSAGES_SUBJECT","Onderwerp");
define("MESSAGES_DATE","Datum");
define("MESSAGES_FILTER","Filter");
define("MESSAGES_DELETE","Verwijder bericht");
define("MESSAGES_PUBLISH_DETAIL","Voeg inhoud bericht toe aan de notitie van die speler.");
define("MESSAGES_PUBLISH_HEADER","&sender verzond een bericht aan &recipient op &date:\n\n &message"); // &sender, &recipient, &date, &message replaced at runtime
define("MESSAGES_PLAYER_FILTER","Berichten voor speler:");
// new 5.0
define("MESSAGES_CONTENT","Inhoud");

/*********************************************************************
* combat_reports.php
**********************************************************************/
define("COMBATS_TITLE","OGame Galaxytool - gevechtsrapporten");
define("COMBATS_ATTACKER","Aanvaller");
define("COMBATS_DEFENDER","Verdediger");
define("COMBATS_DATE","Datum");
define("COMBATS_OWNER","Eigenaar");
define("COMBATS_WINNER","Winaar");
define("COMBATS_COMBATREPORT","Gevechtsrapport");
define("COMBATS_COMBAT_AT","Gevecht op");
define("COMBATS_LOST_UNITS","Verloren eenheden");
define("COMBATS_LOOT","Buit");
define("COMBATS_DEBRIS","Puin");
define("COMBATS_AND","en");
define("COMBATS_PUBLISH","Maak dit rapport openbaar");
define("COMBATS_UNPUBLISH","Stop met het delen van dit rapport (maak het weer privé)");
define("COMBATS_DELETE","Verwijder rapport");
define("COMBATS_CHECK_ALL","Selecteer alles");
define("COMBATS_UNCHECK_ALL","Deselecteer alles");
define("COMBATS_WITH_SELECTED","Met geselecteerde");
define("COMBATS_PUBLIC_REPORTS","Openbare rapporten");
define("COMBATS_YES",SHOW_YES); // no need for translation!
define("COMBATS_NO",SHOW_NO); // no need for translation!
define("COMBATS_SEARCH_OPTIONS","Zoek opties");
define("COMBATS_SEARCH","Zoeken");
define("COMBATS_RESET","Reset");
// 4.8
define("COMBATS_COORDINATES",USER_BB_COORDINATES);
define("COMBATS_INVALID_GALAXY_ENTERED","ongeldige Melkweg ingevoerd");
define("COMBATS_INVALID_SYSTEM_ENTERED","ongeldig Zonnestelsel ingevoerd");
define("COMBATS_INVALID_PLANET_ENTERED","ongeldig Planeet ingevoerd");
define("COMBATS_GALAXY_FROM_TO","Melkweg");
define("COMBATS_SYSTEM_FROM_TO","Zonne stelsel");
define("COMBATS_PLANET_FROM_TO","Planeet");
define("COMBATS_APPLY",GENERAL_APPLY);
define("COMBATS_COMBAT_SUMMARY","Gevechtsrapporten overzicht");
define("COMBATS_DOWNLOAD_CSV","Downloaden als CSV bestand");

/*********************************************************************
* report_archive.php
**********************************************************************/
define("REPORT_ARCHIVE_TITLE","Rapporten archief");
define("REPORT_ARCHIVE_COORDINATES","Coördinaten");
define("REPORT_ARCHIVE_SCANTIME","Scantijd");
define("REPORT_ARCHIVE_DELETE","Verwijder deze invoer");
define("REPORT_ARCHIVE_CONFIRM_DELETE","Weet je zeker dat je het wilt verwijderen?");
define("REPORT_ARCHIVE_GALAXY","Melkweg");
define("REPORT_ARCHIVE_SYSTEM","Zonnestelsel");
define("REPORT_ARCHIVE_PLANET","Planeet");
define("REPORT_ARCHIVE_MOON","Maan");
define("REPORT_ARCHIVE_DETAILS","Details");
define("REPORT_ARCHIVE_RESOURCES",DETAILEDINFO_RESOURCES);
define("REPORT_ARCHIVE_HEADER_RESOURCES",REPORTS_RESOURCES);
define("REPORT_ARCHIVE_DETAILS_FOR","Rapporten archief voor &1 [&2] (&3)"); // &1 = planetname; &2 = coordinates; &3 = playername
define("REPORT_ARCHIVE_FLEET_CARGO","Vloot laadruimte");
define("REPORT_ARCHIVE_IRAK_RANGE","interplanetaire raketten bereik");
define("REPORT_ARCHIVE_CHART_TYPE","Grafiektype");

/*********************************************************************
* install.php
**********************************************************************/
define("INSTALL_TITLE", "Galaxytool installatie voor versie");
define("INSTALL_PROGRESS", "Totale voortgang");
define("INSTALL_STEP", "Stap");
define("INSTALL_CONTINUE", "Doorgaan");
define("INSTALL_VALIDATE", "Controleer");
define("INSTALL_STEP1", "Welkom");
define("INSTALL_STEP2", "Schrijfbaarheidscontrolere");
define("INSTALL_STEP3", "Database instellingen");
define("INSTALL_STEP4", "OGame instellingen");
define("INSTALL_STEP5", "Galaxytool instellingen");
define("INSTALL_STEP6", "Administrator wachtwoord");
define("INSTALL_STEP7", "Galaxytool installeren");
define("INSTALL_STEP8", "Installatie afronden"); // check writable; delete install and update.php and redirect to index.php
define("INSTALL_FILE_DELETE_CHECK","Verwijderd aub install.php en update.php van uw webserver.");

define("INSTALL_STEP1_PHP_FAILED", "Uw PHP versie &1 werkt niet met deze Galaxytool versie");
define("INSTALL_STEP1_FOPEN_FAILED", "Uw PHP versie staat het gebruik van het FOPEN() commandniet toe. Dit is nodig om de OGame API te kunnen gebruiken.");
define("INSTALL_STEP1_WELCOME", "Welkom bij de installatie wizard van de Galaxytool. U zult worden begeleid door de installatie van de Galaxytool.");
 
define("INSTALL_STEP2_DESCRIPTION","Controleer dat config.php en attributes.php schrijfbaar zijn.");
define("INSTALL_STEP2_DESCRIPTION2","Indien u niet weet hoe dit moet, kijk dan op: &1");
define("INSTALL_STEP2_FILE_NOT_WRITEABLE", "Bestand is niet schrijfbaar");

define("INSTALL_STEP3_SERVER", "Database server");
define("INSTALL_STEP3_USERNAME", L_USERNAME);
define("INSTALL_STEP3_PASSWORD", L_PASSWORD);
define("INSTALL_STEP3_DBNAME", "Databasenaam");
define("INSTALL_STEP3_PREFIX", "Tabel voorvoegsel");
define("INSTALL_STEP3_ENTER_PREFIX", "b.v. mytool_");
define("INSTALL_STEP3_ENTER_SERVER", "Vul het server adres in. Neem indien contact op met uw serverbeheerder. Meestal is localhost de juiste waarde.");
define("INSTALL_STEP3_ENTER_USERNAME", "Vul de gebruikersnaam in voor databasetoegang (bijvoorbeeld root or galaxytool)");
define("INSTALL_STEP3_ENTER_PASSWORD", "Vul het wachtwoord in voor databasetoegang");
define("INSTALL_STEP3_ENTER_DBNAME", "Vul de database naam in die gebruikt moet worden voor de installatie (Deze database moet wel bestaan)");
define("INSTALL_STEP3_CONNECT_FAILED", "Kon geen verbinding maken met de database server");
define("INSTALL_STEP3_DB_FAILED", "Database &1 niet gevonden");
define("INSTALL_STEP3_MYSQL_VERSION_FAILED", "MySQL versie &1 werkt niet met deze Galaxytool versie");

define("INSTALL_STEP4_URL","OGame URL");
define("OGAME_URL_DETAILS","Vul een URL in die u ziet als u ingelogd bent op OGame. Gebasseerd op die URL zal de Galaxytool informatie ophalen vanuit de OGame API, die kan worden gebruikt om de database te vullen zonder gebruik van de Galaxytoolbar. Deze API is geïntroduceerd tijdens OGame versie 4.1.");
define("INSTALL_STEP4_UNIVERSE","OGame universum");
define("INSTALL_STEP4_DEF_TO_DEBRIS","Verdediging naar puin");
define("INSTALL_STEP4_DEBRIS_RATE","Puin ratio");
define("INSTALL_STEP4_SPEED_RATE","Snelheidsratio");
define("INSTALL_STEP4_ENTER_UNIVERSE","Vul de naam of nummer van uw OGame universum in (hoofdlettergevoelig).");
define("INSTALL_STEP4_UNIVERSE_MISSING","U moet uw universum invullen");
define("INSTALL_STEP4_ENTER_URL","Vul uw OGame universum adres in");
define("INSTALL_STEP4_URL_MISSING","U moet uw OGame adres invullen");
define("INSTALL_STEP4_URL_CHECK_FAILED","Kon geen OGame API vinden op &1");
// 5.1
define("INSTALL_STEP4_GETSETTINGS","Fetch settings");

define("INSTALL_STEP5_TOOLNAME","Galaxytool naam");
define("INSTALL_STEP5_ENTER_TOOLNAME","Dit is de naam die zal worden getoond op de login pagina van uw Galaxytool");
define("INSTALL_STEP5_LANGUAGE","Standaardtaal");
define("INSTALL_STEP5_EMAIL_TO","E-mail naar");
define("INSTALL_STEP5_ENTER_EMAIL_TO","Vul het e-mailadres in waar notificaties heen moeten worden heen gestuurd over registraties");
define("INSTALL_STEP5_EMAIL_FROM","E-mail van");
define("INSTALL_STEP5_ENTER_EMAIL_FROM","Dit e-mailadres wordt getoond als het adres waar je naar beantwoord in alle emails die worden gestuuurd door de GalaxyTool");
define("INSTALL_STEP5_USE_PHPMAILER","Gebruik PHPMailer");
define("INSTALL_STEP5_MAXSHOUTS","Maximaal aantal shoutbox berichten");
define("INSTALL_STEP5_ENTER_USE_PHPMAILER","Gebruik PHPMailer als uw server het versturen van e-mails niet ondersteund");
define("INSTALL_PHPMAILER_HOST","SMPT Host");
define("INSTALL_PHPMAILER_HOST_EXAMPLE","b.v. smtp.provider.com");
define("INSTALL_PHPMAILER_USER","SMPT Gebruikersnaam");
define("INSTALL_PHPMAILER_USER_EXAMPLE","b.v. user@provider.dcom");
define("INSTALL_PHPMAILER_PASS","SMPT Wachtwoord");
define("INSTALL_PHPMAILER_SECURE","Authenticatiemethode (b.v. ssl)");
define("INSTALL_PHPMAILER_PORT","SMTP Poort");

define("INSTALL_STEP6_INTRO","Vul hier een wachtwoord in voor het <strong>administrator</strong> account, waarmee je voor de eerste keer in kan loggen op de Galaxytool na de installatie.");

define("INSTALL_STEP7_CONFIG","Configuratiebestand aangemaakt");
define("INSTALL_STEP7_CONFIG_FAILED","Configuratiebestand niet aangemaakt");
define("INSTALL_STEP7_ATTRIBUTES","Attributen bestand aangemaakt");
define("INSTALL_STEP7_ATTRIBUTES_FAILED","Attributen bestand niet aangemaakt");
define("INSTALL_STEP7_CREATED_TABLES","Database tabellen aangemaakt");

define("INSTALL_STEP8_INTRO","U heeft de Galaxytool successvol geïnstalleerd!");
define("INSTALL_STEP8_LOAD_DATA","OGame data downloaden...");
define("INSTALL_STEP8_LOAD_DATA_FINISHED","Het downloaden van OGame data is voltooid");
define("INSTALL_STEP8_DELETE_FILE","U moet nu de installatiebestanden install.php en update.php van uw webserver verwijderen.");
define("INSTALL_STEP8_LOGON","Log nu in met de <strong>administrator</strong> en het daarbij horende wachtwoord die u eerder heeft opgegeven.");

/*********************************************************************
* update.php
**********************************************************************/
define("UPDATE_START","Update starten naar versie &1");
define("UPDATE_STEP_DONE","Gelukt");
define("UPDATE_TITLE", "Galaxytool update voor versie");
define("UPDATE_STEP1_WELCOME", "Wellkom bij de updatewizard van de Galaxytool. U zult begeleid worden door de update van de Galaxytool.");
define("UPDATE_STEP1_BACKUP_FILES", "Als eerste step moet u een backup maken van uw <strong>configuratie</strong> map! U zult mogelijk de configuratiebestanden moeten vervangen indien er fouten optreden.");
define("UPDATE_STEP1_BACKUP_DB", "Maak daarna een <a href=\"http://www.ehow.com/how_2036600_create-database-php.html\">backup</a> van uw database.");
define("UPDATE_STEP1_PROCEED", "Als de backups zijn gemaakt, kunt u doorgaan met de update.");
define("UPDATE_STEP1", INSTALL_STEP1);
define("UPDATE_STEP2", INSTALL_STEP5);
define("UPDATE_STEP2_OLD_VERSION", "Vorige Galaxytool versie");
define("UPDATE_STEP3", "Update Galaxytool");
define("UPDATE_STEP3_UPDATE_RUNNING", "Update in uitvoering, even geduld aub...");
define("UPDATE_STEP4", "Update afronden");
define("UPDATE_STEP4_INTRO","U heeft de Galaxytool met succes geüpdate!");
define("UPDATE_STEP4_UPDATE_DONE","Update uitgevoerd.");
define("UPDATE_FAILED","Update mislukt.");

?>