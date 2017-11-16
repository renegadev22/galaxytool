<?php
/*
 * defines the characters used in OGame to indicate player status
 */
define("PLAYER_BANNED","s");
define("PLAYER_VACATION_MODE","f");
define("PLAYER_NOOB","n");
define("PLAYER_INACTIVE","i");
define("PLAYER_LONG_INACTIVE","I");
define("PLAYER_OUTLAW","o");

/*********************************************************************/
/***************************** public ********************************/
/*********************************************************************/
//index.php
define("L_USERNAME","Brugernavn");
define("L_PASSWORD","Kodeord");
define("L_LOGINFAILURE","Brugernavn eller kodeord er forkert eller din konto er ikke blevet aktiveret endnu.");
define("L_TOKENFAILURE","Din Logon Key er forkert eller din konto er ikke aktiveret endnu.");
define("L_LOGINTEXT","Log venligst ind");
define("L_LANGUAGE","Tilgængelige sprog:");
define("L_TIMEOUT","Session er løbet ud!");
define("L_REGISTER","Registrer");
define("L_PWLOST","Glemt kodeord");
define("INDEX_TITLE","Oversigt");
define("INDEX_INFO","Information");
define("INDEX_ENTRIES","Antal af hele systemer");
define("INDEX_ENTRIES_LASTWEEK","Nye systemer i sidste uge");
define("INDEX_ENTRIES_TO_OLD","Systemer ældre end en uge");
define("INDEX_REGISTERED_USERS","Registrerede bruger");
define("INDEX_PAGEFORWARD","Klik her, hvis din browser ikke fortsætter automatisk!");
define("INDEX_NOTICES","Notitser");
define("INDEX_PLAYERS","Spiller statistikker");
define("INDEX_ALLIES","Alliance statistikker");
define("INDEX_REPORTS","Spionrapporter");
define("INDEX_VERSION","Sidste ny version til download");
define("INDEX_LATEST_VERSION","Ingen nyere version tilgængelig");
define("INDEX_SHOUTBOX","Beskedboks");
define("INDEX_NOENTRY","Ingen beskeder!");
define("INDEX_COMMENT","Din besked");
define("INDEX_INSERT","Send");
define("INDEX_UMOD","Spillere i feriemodus");
define("INDEX_NO_MOONS","Antal måner");
define("INDEX_NO_EMPTY_SYSTEMS","Antal tomme systemer");
define("INDEX_NO_FULL_SYSTEMS","Antal fyldte systemer");
define("INDEX_NO_TARGETS","Antal mulige mål");
// 4.0
define("INDEX_USERINFO","Brugerstats");
define("INDEX_ONLINE","Online");
define("INDEX_TODAY","Online idag");
define("INDEX_ALL","Antal logins i alt");
// 4.3.7
define("GENERAL_LOAD_FORM","Hent form data");
define("GENERAL_SAVE_FORM","Gem form data");
define("GENERAL_SAVE_AS_TEXT","Gem som");
define("GENERAL_SAVE","Gem");
// 4.8
define("INDEX_USERMANAGEMENT","Aktiverings Oversigt");
define("INDEX_NEEDADMIN","Kontoer til oplåsning");
define("INDEX_NEEDEMAIL","Ikke-Validerede Kontoer");
define("INDEX_TOOLBAR_INFO","Galaxytool plugin information");
define("INDEX_TOOLBAR_URL","Galaxytool URL");
define("INDEX_TOOLBAR_VERSION_REQUIRED","Kræver mindst Galaxytool plugin version");
define("INDEX_TOOLBAR_INSTALL_GUIDE","Installation instruktioner for plugin");
define("INDEX_TOOLBAR_TOKEN","Logon Key");
define("INDEX_TOOLBAR_NEW_TOKEN","Hent ny Logon Key");
define("INDEX_PLAYERS_WITH_N_PLANETS","Spillere der har mere end &1 planeter");
define("INDEX_GETTING_STARTED","Kom godt i gang med Galaxytool");
define("INDEX_GETTING_STARTED1","Velkommen til Galaxytool!");
define("INDEX_GETTING_STARTED2","Galaxytool vil hjælpe dig med at analysere, hvad der foregår i dit OGame univers &1");
define("INDEX_GETTING_STARTED3","Før du rent faktisk kan analysere data, er du nød til at indsætte det først. Til dette har du brug for et browser-plugin som denne &1 til Firefox.");
define("INDEX_GETTING_STARTED4","Når du har installeret et plugin, kan du navigere gennem dine OGame sider, som du plejer, og du vil se et lille status vindue, når noget bliver sendt til din Galaxytool.");
define("INDEX_GETTING_STARTED5","Når pluginet har indsat data i din Galaxytool, kan du begynde at analysere, hvor spillerne har deres kolonier, hvor mange kolonier de har, hvilke rapporter eksisterer, eller hvornår de er mest aktive.");
define("INDEX_GETTING_STARTED6","Men det vil også hjælpe dig med at analysere, hvordan din konto udvikler sig, hvis du sammenligner dig med dine konkurrenter eller ved at analysere dine kamprapporter for at se, hvor meget du har raided i løbet af de sidste dage eller uger.");
define("INDEX_GETTING_WIKIPAGE","Der er mange flere funktioner i Galaxytool.");
define("INDEX_GETTING_WIKIPAGE2","Tjek dem ud på vores wiki-side.");
define("INDEX_GETTING_BOARD","For feedback eller ideer, du kan bruge vores board:");
define("INDEX_GETTING_CHAT1","Eller besøg os på vores chatroom:");
define("INDEX_GETTING_CHAT2","Vi er ikke online 24/7, men bruger en masse af vores fritid der, så vær tålmodig.");
// new 5.0
define("INDEX_CLOSE","Luk");
define("INDEX_LOGIN","Login");
define("GENERAL_REQUIRED_FIELDS","Venligs udfyld alle nødvendige felter");
define("INDEX_MESSAGES","Beskeder");
define("INDEX_EXAMPLE","Eksempel");
define("INDEX_INVALID_DATA","Invalid data");
define("GENERAL_COLUMN_HIDE_TITLE","Administrer kolonner");
define("GENERAL_COLUMN_HIDE_INFO","Vælg hvilke kolonner du ønsker at se i tabellen.");
define("GENERAL_ENTRIES_DELETED","&1 poster slettet");
define("GENERAL_APPLY","Anvend");
define("STARTPAGE_GALAXYTOOL_DESCR","<em>Galaxytool</em> er et værktøj til browser spillet OGame.");
define("GENERAL_OVERWRITE","Overskriv kopi af posten");
define("GENERAL_OVERWRITE_QUESTION","Overskriv?");
define("INDEX_OWN_LOGINS","Dine logins");
define("GENERAL_OPEN_IN_NEW_WINDOW","Åbn link i nyt vindue");
// 5.1
define("GENERAL_UNIT_OF_MEASURE_DAYS","Days");

/*********************************************************************/
/***************************** internal ******************************/
/*********************************************************************/
// index.php
define("PROGRAM_NAME","OGame Galaxytool");
define("SHORTNAME","Galaxytool");
define("BACK_INDEX","Tilbage til hovedsiden");
define("UNIVERSE","Univers");

// search
define("MENU_INFO_LINKS","Information");
define("MENU_PAGE","Oversigt");
define("MENU_DB_SEARCH","Søg i Databse");
define("MENU_DB_NOTICES","Søg i Notitser");
define("MENU_DB_REPORTS","Søg i Rapporter");
define("MENU_GALAXYVIEW","Galakse");
define("MENU_STATISTICS","Statistikker");
define("MENU_ALLYHISTORY","Alliance historie");
// 4.7
define("MENU_FLEET_MOVEMENTS","Flåde bevægelser");
define("MENU_COMBAT_REPORTS","Kamprapporter");
define("MENU_MESSAGES","Ingame beskeder");

// insert / change
define("MENU_OPTION_LINKS","Indstillinger");
define("MENU_DB_REFRESH","Indsæt i Database");
define("MENU_NOTICES","Notitser");
define("MENU_DB_STATUS","Databasens status");
define("MENU_USEROPTIONS","Brugerkontrol");
define("MENU_USEROPTIONS2","Brugerindstillinger");
define("MENU_USEROPTIONS3","Brugerinformation");
// 4.2
define("MENU_ADMIN","Administration");
// 4.3.3
define("MENU_LOGOUT","Logout");

// Stuff
define("MENU_STUFF","Blandet");
define("MENU_FORUM_THREAD","Udviklerforum");
define("MENU_DOWNLOADPAGE","Downloadside");
define("MENU_LANGUAGE","Sprog");
define("MENU_HELP","Hjælp");
// 4.0
define("MENU_TOOLOPTIONS","Galaxytool Indstillinger");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1"," er indsat i databasen");
define("PARSER_ERROR1","Fejl under indførslen af de følgende koordinater:");
define("PARSER_ERROR2","Kunne ikke finde databasen!");
define("PARSER_ERROR3","Kunne ikke finde databaseserveren!");
define("PARSER_WRONG_UNIVERSE","Forkert univers - Faktisk: \"&1\" Forventet: \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","OGame Galaxytool - Søgeside");
define("SHOW_SEARCH","Søg i database");
define("SHOW_ALLYSYMBOL","Alliance Tag");
define("SHOW_PLAYERNAME","Spiller");
define("SHOW_MOONS","Kun planeter med måne");
define("SHOW_NOTICES","Kun planeter med Notitser");
define("SHOW_COLONIES","Kun planeter til kolonisering");
define("SHOW_YES","Ja");
define("SHOW_NO","Nej");
define("SHOW_SEARCHRANGE","Rækkevidde");
define("SHOW_SEARCH_IN","Søg i galakse");
define("SHOW_FROM_SYSTEM","fra solsystem");
define("SHOW_FROM_PLANET","fra planet position");
define("SHOW_TO","til");
define("SHOW_DESCRIPTION","Du kan bruge * som joker for spiller- eller alliancenavne. Så du kan finde alle spillere med \"navn\" i deres navn.<br />Udfyld kun de felter, du ønsker specificeret.");
define("SHOW_SORT_BY","Sorter efter");
define("SHOW_GALASYSTEM","Galakse/System");
define("SHOW_ALLYNAME","Alliancenavn");
define("SHOW_SEARCHBUTTON","Søg");
define("SHOW_ADDRESS","Adresse");
define("SHOW_ALLYSORT","Alliance");
define("SHOW_PLANET","Spillernavn");
define("SHOW_STATUS","Status");
define("SHOW_CURRENTNESS","Sidst opdateret");
define("SHOW_PLAYER_STATUS","Spillerstatus");
define("SHOW_PLAYER_STATUS1","alle");
define("SHOW_PLAYER_STATUS2","mulige mål");
define("SHOW_PLAYER_STATUS3","inaktive");
define("SHOW_HITS","Hits");
define("SHOW_OF","of");
define("SHOW_ASC","stigende");
define("SHOW_DESC","faldende");
define("SHOW_RESULTS","Resultater pr. side");
define("SHOW_MOON","Måne");
define("SHOW_UKMOONSIZE","ukendt");
define("SHOW_DF","RM");
define("SHOW_DF_LONG","Ruinmark");
define("SHOW_METAL","M");
define("SHOW_METAL_LONG","Metal");
define("SHOW_CRYSTAL","K");
define("SHOW_CRYSTAL_LONG","Krystal");
define("SHOW_BOTH","Tilsammen");
define("SHOW_AT_LEAST","(mindst)");
define("SHOW_DATE","Dato");
define("SHOW_DATE_0","ingen betydning");
define("SHOW_DATE_1","ældre end");
define("SHOW_DATE_2","nyere end");
define("SHOW_RANK","Rang");
define("SHOW_FRANK","Flåderang");
define("SHOW_MEMBERS","Medlemmer");
define("SHOW_NOTRANKED","Ikke indenfor top 1500.");
define("SHOW_NOTICERES","Notitser");
define("SHOW_REPORTS","Kun planeter med rapporter");
define("SHOW_REPORTS_SHORT","Rapporter");
define("SHOW_NOTHING","Ingen data fundet");
define("SHOW_ALLIANCE_STATUS","Alliancestatus");
define("SHOW_NO_STATUS","ingen status");
define("SHOW_NAP","IAP");
define("SHOW_ALLIED","Allierede");
define("SHOW_WAR","Krig");
define("SHOW_BOYCOTT","Boycott");
define("SHOW_NEUTRAL","Neutral");
define("SHOW_OWN","Egen alliance");
define("SHOW_WING","Wing");
// obsolete with 5.0
define("SHOW_EXT_OPTIONS1","Vis flere søgemuligheder for søgning på rækkevidde, rang, dato eller Ruinmark.");
define("SHOW_EXT_OPTIONS2","Vis flere muligheder for søgning på kolonier, måner, rapporter, notitser, spillerstatus eller diplomatisk status.");
define("SHOW_EXT_OPTIONS3","Vis flere søgemuligheder for sortering af søgeresultater.");
// new 5.0
define("SHOW_EXTENDED","avanceret søgning");
define("SHOW_MOON_SELECTION","Planet med måne");
define("SHOW_REPORT_SELECTION","Planet med rapport");
define("SHOW_FILTER_BY","Udeluk fra listen");
define("SHOW_FILTER_NONE","ingen");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Show players without score changes within the last few days");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","OGame Galaxytool - Statusside");
define("STATUS_DB_STATUS","Status på database");
define("STATUS_COLOR","Farve");
define("STATUS_AGE1","Data 1 dag gammel.");
define("STATUS_AGE2","Data 2 - 4 dage gammelt.");
define("STATUS_AGE3","Data 4 - 7 dage gammelt.");
define("STATUS_AGE4","Data 1 - 2 uger gammelt.");
define("STATUS_AGE5","Data 2 - 4 uger gammelt.");
define("STATUS_AGE6","Data ældre end 1 måned!");
define("STATUS_AGE7","Ingen data tilgængelig.");
define("STATUS_ON","on");
define("STYLES_COLOR1","Farve1");
define("STYLES_COLOR2","Farve2");
define("STYLES_COLOR3","Farve3");
define("STYLES_COLOR4","Farve4");
define("STYLES_COLOR5","Farve5");
define("STYLES_COLOR6","Farve6");
define("STYLES_COLOR7","Farve7");
// 4.8
define("STATUS_DB_LEGEND","Farvekoder"); // Har ikke kunnet finde ud af hvordan dette bruges / betydningen af det.
define("STATUS_GALAXY","Galaxy Oversigt");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","Brugerkontrol");
define("USER_NAMES","Bruger");
define("USER_ERROR","Fejl");
define("USER_NEWUSER","Ny bruger");
define("USER_OPTIONS","Indstillinger");
define("USER_USERNAME","Brugernavn");
define("USER_PASSWORD","Kodeord");
define("USER_PASSWORD_CONFIRM","Bekræft kodeord");
define("USER_GALAXY","Galakse");
define("USER_SEARCH","Søg");
define("USER_INSERT","Indsæt");
define("USER_DELETE","Slet");
define("USER_DELETE_ENTRY","Vil du slette bruger: ");
define("USER_STATUS","Se statistik");
define("USER_STYLES","Modificer layout");
define("USER_SUBMIT","Send");
define("USER_RESET","Nulstil");
define("USER_YES","Ja");
define("USER_NO","Nej");
define("USER_STYLEPATH","Stil til styles.css");
define("USER_PROBES","Se/Send spionrapporter");
define("USER_EMAIL","Email");
define("USER_ERROR1","Kodeordet eller emailadressen er forkert.");
define("USER_ERROR2","Emailadressen er forkert.");
define("USER_INGAME","In-game navn");
define("USER_ALLYTAG","Alliance Tag");
define("USER_ALLYHISTORY","Se/Send Alliance Historie");
define("USER_DIPLOMATIC","Ændr Diplomatisk Status");
define("USER_STATSPAGE","Antal datapakker tilføjet ved statistiksiden");
define("USER_LINKS","Links");
define("USER_LINKS2","Format:<br>tekst;url<br>tekst2;url2<br>tekst3;url3");
define("USER_EXPORT_TITLE","Eksporter farver (BB Codes)");
define("USER_BB_COORDINATES","Koordinater");
define("USER_BB_MOON","Måne");
define("USER_BB_DEBRIS","Ruinmark");
define("USER_BB_ALLY","Alliancenavn");
define("USER_BB_ALLYDETAILS","Alliance detaljer");
define("USER_BB_PLAYERNAME","Spillernavn");
define("USER_BB_BANNED","spærret");
define("USER_BB_VACATION","feriemodus");
define("USER_BB_NOOB","noob");
define("USER_BB_INACTIVE","Inaktiv");
define("USER_BB_LONGINACTIVE","Langtids inaktiv");
// new with 4.7
define("USER_DELETION","Slet");
define("USER_FLEETINFO",MENU_FLEET_MOVEMENTS);
define("USER_ACTIVITIES","Spiller aktiviteter");
define("USER_MAINTENANCE","Galaxytool vedligeholdelse");
define("USER_MANAGEMENT",MENU_USEROPTIONS);
define("USER_DELETE_MY_COMBAT_REPORTS","Slet mine kamprapporter");
define("USER_DELETE_MY_MESSAGES","Slet mine beskeder");
define("USER_DELETE_MY_FLEETMOVES","Slet mine flådebevægelser");
// 4.8
define("USER_DELETE_MY_COMBAT_REPORTS_LIMITED","Slet mine kamprapporter ældre end &1 dage");
define("USER_DELETE_MY_MESSAGES_LIMITED","Slet mine beskeder ældre end &1 dage");
define("USER_TABLE_ENTRIES","Antal søgeresultater pr. side");
// 5.0
define("USER_EXISTS","Bruger eksisterer allerede");
define("USER_BB_OUTLAW","Slyngel");
define("USER_INVALID_URL","URL &1 synes at være ugyldig - URL vil blive ignoreret");

/*********************************************************************
* galaxyview.php
*********************************************************************/
define("VIEW_TITLE","OGame Galaxytool - Detaljer");
define("VIEW_NODATA","Ingen data tilgængelig.");
define("VIEW_GALAXY","Galakse");
define("VIEW_SYSTEM","Solsystem");
define("VIEW_POSITION","Pos.");
define("VIEW_PLANET","Planet");
define("VIEW_MOON","Måne");
define("VIEW_TF","RM");
define("VIEW_PLAYER","Spiller");
define("VIEW_PLAYER_ADD","(Rang / Status)");
define("VIEW_ALLY","Alliance");
define("VIEW_ALLY_ADD","(Rang / Medlem)");
define("VIEW_METAL","M");
define("VIEW_CRYSTAL","K");
define("VIEW_COLONISED","Ikke-koloniserede planeter");
define("VIEW_UKMOONSIZE","ukendt");
define("VIEW_BACK","tilbage");
define("VIEW_NOTICE","Notitser");
define("VIEW_REPORTS","Rapporter");
define("VIEW_MOONPHALANX","De følgende måner kan skanne dette system");
define("VIEW_NOMOONS","Ingen måner fundet");
define("VIEW_IRAKS","De følgende planeter kan nå dette system med IPR");
define("VIEW_NOIRAKS","Ingen IPR fundet");
// 4.0
define("VIEW_MOON_DESTROY_CHANCE","Chance for at ødelægge en måne");
define("VIEW_CHANCE_WITH_ONE","Chance med én dødsstjerne");
define("VIEW_CHANCE_WITH_N","Chance med ");
define("VIEW_DEATH_STARS","dødsstjerner");
define("VIEW_DS_DESTROY_CHANCE","Chance for at miste dødsstjerne(rne)");
define("VIEW_TOP","Top");
// new 4.3.5
define("VIEW_GO","go");
// new 5.0
define("VIEW_DIAMETER","Diameter");

/*********************************************************************
* change_password.php
**********************************************************************/
define("PW_TITLE","OGame Galaxytool - skift kodeord");
define("OLD_PASSWORD","gammelt kodeord");
define("NEW_PASSWORD","nyt kodeord");
define("CONFIRM_NEW_PASSWORD","bekræft nyt kodeord");
define("PW_MISMATCH","Kodeordene passede ikke sammen!");
define("PW_ERROR","Gammelt kodeord var ikke korrekt!");
define("PW_DONE","Opdateret!.");
// new 4.2
define("TIMEZONE_OFFSET","Tidszone forskel til server");
// new 4.3
define("DELETE_ACCOUNT","Slet denne Galaxytool konto");
define("DELETE_ACCOUNT_SAFETY_REQUEST","Vil du virkelig slette denne Galaxytool konto?");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","Godkendelse");
define("CH_PASSWD_ADMIN","Admin");
// new 4.7
define("TIMEZONE_OGAME_OFFSET","Tidszone forskel til OGame server");
// new 4.8
define("CH_PASSWD_USER_LANGUAGE","Skift til dette sprog efter logon");
define("CH_PASSWD_USER_LANGUAGE_NO_CHANGE","Ingen ændring");
define("CH_PASSWD_EXPAND","Udvidet");
define("CH_PASSWD_COLLAPSE","Kollapset");
define("CH_PASSWD_HIDDEN","Skjult");
define("CH_PASSWD_GETTING_STARTED","Vis Kom godt i gang info efter logon");
define("CH_PASSWD_PLUGIN","Vis Plugin Info efter logon");

/*********************************************************************
* notices.php
**********************************************************************/
define("NOTICE_TITLE","OGame Galaxytool - Notitser");
define("NOTICE_HEADER","rediger notits");
define("NOTICE_HEADER2","Rediger egen notits");
define("NOTICE_PUBLIC","Tilgængelig for andre ?");
define("NOTICE_YES","ja");
define("NOTICE_NO","nej");
define("NOTICE_TEXT","Notits tekst");
define("NOTICE_SAVE","Gem");
define("NOTICE_DELETED","Data slettet");
define("NOTICE_SAVED","Data gemt.");
define("NOTICE_RESULTS","Alle resultater");
define("NOTICE_USER","Bruger");
define("NOTICE_DATE","Dato");
define("NOTICE_EDIT","Rediger");
define("NOTICE_DELETE","Slet");
define("NOTICE_NEW","Lav egen notits");
define("NOTICE_NOTPUBLIC","Notits ikke offentlig.");
define("NOTICE_ALL","alle");
define("NOTICE_NONE",SHOW_FILTER_NONE);
define("NOTICE_SEARCH","Søg i notitser");
define("NOTICE_SEARCH_SHORT","Søg");
define("NOTICE_HITS","Resultater");
define("NOTICE_SHOWRESULTS","resultater pr. side");
define("NOTICE_OF","af");
define("NOTICE_NOTHING","Ingen data fundet");
// 4.0
define("NOTICE_CHARS","Karakterer");
define("NOTICE_PLAYERNAME","Spiller");
define("NOTICE_SHOWALL","Vis alle notitser");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","OGame Galaxytool - Spionagerapporter");
define("REPORTS_RESOURCES","Ressourcer");
define("REPORTS_FLEET","Flåder");
define("REPORTS_DEFENCE","Forsvar");
define("REPORTS_BUILDINGS","Bygninger");
define("REPORTS_TECHNOLOGY","Forskning");
define("REPORTS_MOON","Måne");
define("REPORTS_SEARCH","Søg i spionagerapporter");
define("REPORTS_SEARCH_SHORT","Søg");
define("REPORTS_HITS","Resultater");
define("REPORTS_NOTHING","Ingen data fundet");
define("REPORTS_ADDRESS","Adresse");
define("REPORTS_CURRENTNESS","Currentness");
define("REPORTS_PLAYERNAME","Spillernavn");
define("REPORTS_ALLY","Ally");
define("REPORTS_VIEW","se rapport");
define("REPORTS_SEARCH_IN","Søg i galakse");
define("REPORTS_FROM_SYSTEM","fra system");
define("REPORTS_TO","til");
define("REPORTS_DELETE","slet");
define("REPORTS_DELETED","Data slettet");
define("REPORTS_RESULTS","resultater pr. side");
define("REPORTS_OF","af");
define("REPORTS_DATE","Dato");
define("REPORTS_DATE_0","ingen betydning");
define("REPORTS_DATE_1","ældre end");
define("REPORTS_DATE_2","nyere end");
define("REPORTS_NOTICES","Notitser");
define("REPORTS_AT_LEAST_RESOURCES","Ressourcer (mindst)");
define("REPORTS_SEARCH_EXTENDED","Se alle");
define("REPORTS_FLEET_RESIS","Flåde - score");
define("REPORTS_DEFENCE_RESIS","Forsvar - score");
define("REPORTS_ALL_RESIS","sum scores");
define("REPORTS_TECHS","Teknologier");
define("REPORTS_UNKNOWN_ENTRIES","ukendt data");
define("REPORTS_PARTLY_INSERTED","delvist indsat");
define("REPORTS_FOR_ALL_RES","for alle ressourcer");
define("REPORTS_FOR_TF","for ruinmarken");
define("REPORTS_KT","Små Transportere");
define("REPORTS_GT","Store Transportere");
define("REPORTS_SS","Slagskibe");
define("REPORTS_REC","Recycler");
define("REPORTS_RAIDABLE","Kun mål der kan raides");
define("REPORTS_ALL_RESOURCES","alle ressourcer");
// 4.0
define("REPORTS_STUFF","Blandet");
define("REPORTS_SPEEDSIM","Simuler med SpeedSim");
define("REPORTS_DRAGOSIM","Simuler med Dragosim");
define("REPORTS_STATUS","Status");
define("REPORTS_ERROR","En fejl er opstået");
// 4.2
define("REPORTS_OWN_REPORTS","Kun mine rapporter");
// 4.3.3
define("REPORTS_UPLOAD_BY","Report uploaded by");
// 4.4
define("REPORTS_DEPTH","Report depth");
define("REPORTS_FLEET_SCORE","Fleet score");
define("REPORTS_DEFENCE_SCORE","Defence score");
// 5.0
define("REPORTS_HOURS","timer");
define("REPORTS_MAX_RESULTS_HIT","Din forespørgsel returnerede mere end &1 hits. Kun de første &1 resultater er viste. Juster din søgning for at få færre resultater.");
define("REPORTS_OSIMULATE","Simuler med OSimulate");
define("REPORTS_SHOW_ONLY","Vis kun");
define("REPORTS_SHOW_PLANETS","Planeter");
define("REPORTS_SHOW_MOONS","Måner");
define("REPORTS_OWNER","Rapporter ejes af");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","OGame Galaxytool - Statistik");
define("STATS_TBLHEAD","Statistiks");
define("STATS_RANK","Rang");
define("STATS_PLAYERNAME","Spillernavn");
define("STATS_ALLYNAME","Alliance Tag");
define("STATS_SCORE","Score");
define("STATS_FLEET","Flåde");
define("STATS_RESEARCH","Forskning");
define("STATS_MEMBERS","Medlemmer");
define("STATS_STATUS","Status");
define("STATS_NOTHING","ingen Status");
define("STATS_NAP","NAP");
define("STATS_ALLIED","Allierede ");
define("STATS_WAR","Krig");
define("STATS_BOYCOTT","Boycott");
define("STATS_NEUTRAL","Neutral");
define("STATS_OWN","Egen Alliance");
define("STATS_WING","Wing");
define("STATS_UPDATE","Data fra");
define("STATS_PLAYERSTATS","Spiller statistikker");
define("STATS_ALLYSTATS","Alliance statistikker");
// 4.0
define("STATS_DELETE","Vil du slette denne datapakke ?");
define("STATS_CONFIRM_DELETE","Er du sikker på at du vil slette informationen om denne spiller ?");
define("STATS_CHANGE_PLAYER_STATUS","Spiller status");
define("STATS_CHANGE_ALLIANCE_STATUS","Alliance status");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","Alle medlemmer i denne alliance får tildelt den valgte status. Enhver tidligere status vil blive overskrevet. Du kan ændre status på nogle af spillerne bagefter.");
define("STATS_UNKNOWN","Rest");
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
define("STATS_SHOW_GRAPH","Vis detaljer for score fordeling");
define("STATS_LONG_INACTIVE",USER_BB_LONGINACTIVE);
// 4.9
define("STATS_STANDARD","Points");
define("STATS_MILITARY","Militær points");
define("STATS_ECONOMY","Økonomi points");
define("STATS_HONOUR","Honour points");
define("STATS_MILITARY_BUILD","Militær points bygget");
define("STATS_MILITARY_DESTROYED","Militær point ødelagt");
define("STATS_MILITARY_LOST","Militær points tabt");

/*********************************************************************
* register.php
**********************************************************************/
define("REGISTER_REGISTRATE","Registrer");
define("REGISTER_LOGINNAME","Login-Navn");
define("REGISTER_PASSWORD","Kodeord");
define("REGISTER_PASSWORD_CONFIRM","Bekræft kodeord");
define("REGISTER_EMAIL","Email");
define("REGISTER_INGAME","Ingame-Navn");
define("REGISTER_ALLYTAG","Alliancetag");
define("REGISTER_EMAILVERIFICATION","Emailcheck");
define("REGISTER_EMAILTEXT","Tryk venligst på linket for at bekræfte din registrering i GalaxyTool'et.");
define("REGISTER_ERROR1","Brugernavnet er allerede i brug.");
define("REGISTER_ERROR2","Fejl ved afsendelse af email. Kontakt venligst din administrator.");
define("REGISTER_ERROR3","Fejl ved afsendelse af data til databasen!");
define("REGISTER_INFO1","Din bruger er oprettet.");
define("REGISTER_INFO2","Tryk venligst på linket i mailen, der er sendt til dig, for at bekræfte din registrering.");
define("REGISTER_INFO3","Bruger bekræftet. Din administrator skal aktivere den.");
define("REGISTER_BUTTON","Tilbage til hovedsiden");
define("REGISTER_NEW_SUBJECT","En ny bruger i GalaxyTool'et");
define("REGISTER_NEW_MAILTEXT","En ny bruger har registreret sig selv.");
// new 4.2
define("REGISTER_BACK","Tilbage til side 1");
// new 4.3.5
define("REGISTER_MISSING_FIELDS","Indtast alle obligatoriske felter");
// new 4.8
define("REGISTER_ERROR4","E-mail-adresse er ikke gyldig.");
define("REGISTER_ERROR5","Passwords stemmer ikke overens.");
define("REGISTER_PWS","Password styrke");
define("REGISTER_PWS0","meget svag");
define("REGISTER_PWS1","svag");
define("REGISTER_PWS2","god");
define("REGISTER_PWS3","stærk");
define("REGISTER_PWS4","meget stærk");
// new 5.0
define("REGISTER_EMAIL_USED","Email er allerede brugt");

/*********************************************************************
* lost_password.php
**********************************************************************/
define("LOSTPW_TITLE","Glemt kodeord?");
define("LOSTPW_INFO2","Et nyt kodeord er genereret og sendt til din mailadresse.");
define("LOSTPW_BUTTON1","send nyt kodeord");
define("LOSTPW_BUTTON2","Tilbage til hovedsiden");
define("LOSTPW_LOGINNAME","Login-Navn");
define("LOSTPW_EMAIL","Mail");
define("LOSTPW_ERROR1","Fejl ved afsendelse af data til databasen!");
define("LOSTPW_ERROR2","Ingen match fundet!");
define("LOSTPW_ERROR3","Fejl ved afsendelse af mail. Kontakt venligst din administrator.");
define("LOSTPW_EMAIL_SUBJECT","Dit nye kodeord, du bestilte");
define("LOSTPW_EMAIL_TEXT1","Her er dit nye login for GalaxyTool'et");
define("LOSTPW_EMAIL_TEXT2","Brugernavn");
define("LOSTPW_EMAIL_TEXT3","Kodeord");
// new 5.0
define("LOSTPW_INFO1","Du vil modtage en e-mail for at bekræfte nulstilling af din adgangskode.");
define("LOSTPW_CONFIRM_RESET_SUBJECT","Glemt adgangskode?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","Hej,\n\ndu har anmodet om en nulstilling af adgangskoden til Galaxytool. For at generere en ny adgangskode, skal du klikke på følgende link:");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","OGame Galaxytool - Bruger Information");
define("USERINFO_NAMES","Alle brugere af dette tool");
define("USERINFO_DETAIL","detaljeret information om");
define("USERINFO_ERROR1","Ingen bruger med dette ID!");
define("USERINFO_USERNAME","Login navn");
define("USERINFO_INGAME","Ingame navn");
define("USERINFO_EMAIL","Mail");
define("USERINFO_ALLYTAG","Alliance");
define("USERINFO_STYLEPATH","Skin");
define("USERINFO_STATUS","Status");
define("USERINFO_ACTIVATE","Aktiver spiller");
define("USERINFO_LOGINS","Antal logins");
define("USERINFO_LASTLOGIN","Sidste login");
define("USERINFO_DATA","Information om indsatte systemer");
define("USERINFO_NODATA","Denne bruger har ikke indsat nogle systemer endnu!");
define("USERINFO_GALAXY","Galakse");
define("USERINFO_SYSTEMS","Antal systemer");
define("USERINFO_IP","IP-adresse");
define("USERINFO_LOGINTIME","Login");
define("USERINFO_NOLOGIN","Denne bruger har aldrig logget ind.");
define("USERINFO_LAST_GALAXYUPDATE","Indsatte sidste galakseoversigt");
define("USERINFO_LAST_PUBLIC_NOTICE","Sidste offentlige notits");
define("USERINFO_LAST_PRIVATE_NOTICE","Sidste private notits");
define("USERINFO_NUMBEROF_PUBLIC_NOTICE","Antal offentlige notitser");
define("USERINFO_NUMBEROF_PRIVATE_NOTICE","Antal private notitser");
define("USERINFO_ACTIVATED","Konto aktiveret");
define("USERINFO_ACTIVATIONTEXT","Administratoren af dette Galaxytool har aktiveret din konto.\n\nHa' det sjovt med Galaxytool!");
// new 4.8
define("USERINFO_LAST_SUBMIT","Indsat sidste data");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","OGame Galaxytool - Alliance Historie");
define("ALLYHISTORY_TBLHEAD","Historisk oversigt");
define("ALLYHISTORY_PLAYERNAME","Spillernavn");
define("ALLYHISTORY_ALLYNAME","Alliance");
define("ALLYHISTORY_LASTMONTH","Sidste måned"); // changed at 4.0
define("ALLYHISTORY_ALL_DATA","alt tilgængelig information"); // new 4.0
define("ALLYHISTORY_SHOW","vis statistik");
define("ALLYHISTORY_TIMESPAN","Timespan");
define("ALLYHISTORY_PROGESS","Process");
define("ALLYHISTORY_SCORE","Point");
define("ALLYHISTORY_FSCORE","Flådepoint"); // new 4.0
define("ALLYHISTORY_RSCORE","Forskningspoint"); // new 4.0
define("ALLYHISTORY_MEMBER","Medlemmer"); // new 4.0
define("ALLYHISTORY_NOTHING","ingen data fundet");
define("ALLYHISTORY_DETAILS","Detaljer");
define("ALLYHISTORY_SHOW_ADDRESS","Koordinater");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","Spillerinformation");
define("DETAILEDINFO_ALLYINFO_TITLE","Allianceinformation");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","Detaljeret information om spiller");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","Detaljeret information on alliance");
define("DETAILEDINFO_NO_ALLIANCE","ingen");
define("DETAILEDINFO_SCORE","Pointstatistik");
define("DETAILEDINFO_FLEET","Flådestatistik");
define("DETAILEDINFO_RESEARCH","Forskningsstatistik");
define("DETAILEDINFO_RANK","Rang");
define("DETAILEDINFO_POINTS","Point");
define("DETAILEDINFO_KNOWN_PLANETS","kendte planeter");
define("DETAILEDINFO_MOONS","kendte måner");
define("DETAILEDINFO_PHALANX_AREA","Phalanxområde");
define("DETAILEDINFO_NO_PHALANX_AREA","ingen Phalanx fundet");
define("DETAILEDINFO_NOTICES","Notitser");
define("DETAILEDINFO_NO_NOTICES","Ingen notitser fundet");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","forrige Alliancer");
define("DETAILEDINFO_RESOURCES_PER_HOUR","Ressourcer pr. time");
define("DETAILEDINFO_RESOURCES_PER_DAY","Ressourcer pr. dag");
define("DETAILEDINFO_RESOURCES_PER_WEEK","Ressourcer pr. uge");
define("DETAILEDINFO_RESOURCES_PER_MONTH","Ressourcer pr. måned (30 dage)");
define("DETAILEDINFO_METAL","Metal");
define("DETAILEDINFO_CRYSTAL","Krystal");
define("DETAILEDINFO_DEUTERIUM","Deuterium");
define("DETAILEDINFO_UNKNOWN","ukendt");
define("DETAILEDINFO_SCORE_DISTRIBUTION","Point fordeling");
// new 4.2
define("DETAILEDINFO_GENERAL","Detaljer");
define("DETAILEDINFO_MEMBERS","Medlem");
define("DETAILEDINFO_GRAPHS","Grafer");
define("DETAILEDINFO_RESOURCES","Resourcer");
define("DETAILEDINFO_FLEET_TAB","Flåde");
define("DETAILEDINFO_TECH","Forskning");
define("DETAILEDINFO_FLEET_DETAIL","Sum / (Spiller gennemsnit) I alle tilgængelige rapporter");
define("DETAILEDINFO_TECH_DETAIL","Gennemsnit af alle tilgængelige spiller informationer");
// new 4.3
define("DETAILEDINFO_PLANET_TAB",REPORTS_SHOW_PLANETS);
define("DETAILEDINFO_MOON_TAB",REPORTS_SHOW_MOONS);
// 4.7
define("DETAILEDINFO_ACTIVITIES","Aktiviteter");
define("DETAILEDINFO_NODATA",VIEW_NODATA); // reuse existing translations
define("DETAILEDINFO_ACTIVITY_DESCRIPTION","Vis aktiviteter &1 indsamlet fra:");
define("DETAILEDINFO_GALAXYVIEWS","Galakse visninger");
define("DETAILEDINFO_SCANS","Spionage handlinger");
define("DETAILEDINFO_MESSAGES","Spiller beskeder");
define("DETAILEDINFO_COMBATS","Kamprapporter");
define("DETAILEDINFO_ALLYPAGE","Alliance oversigt");
define("DETAILEDINFO_MANUAL","Mmanuele indsætninger");
define("DETAILEDINFO_START","Begyndelsen");
define("DETAILEDINFO_TO","til");
define("DETAILEDINFO_TODAY","Idag");
define("DETAILEDINFO_DATA_RESTRICTION","begrænset til:");
define("DETAILEDINFO_WEEKDAY_WEEKEND","Weekend");
define("DETAILEDINFO_WEEKDAY_WORKINGDAY","Hverdag");
define("DETAILEDINFO_WEEKDAY_MONDAY","Mandag");
define("DETAILEDINFO_WEEKDAY_TUESDAY","Tirsdag");
define("DETAILEDINFO_WEEKDAY_WEDNESDAY","Onsdag");
define("DETAILEDINFO_WEEKDAY_THURSDAY","Torsdag");
define("DETAILEDINFO_WEEKDAY_FRIDAY","Fredag");
define("DETAILEDINFO_WEEKDAY_SATURDAY","Lørdag");
define("DETAILEDINFO_WEEKDAY_SUNDAY","Søndag");
define("DETAILEDINFO_WEEKDAY_SHORTLENGTH",3); // number of characters to shorten week day
define("DETAILEDINFO_PLAYER_CURRENTLY_ACTIVE","Spilleren er i øjeblikket aktiv");
define("DETAILEDINFO_PLAYER_MESSAGES","tilgængelige spiller beskeder");
define("DETAILEDINFO_SHOW","vis");
define("DETAILEDINFO_NONE","ingen tilgængelige");
define("DETAILEDINFO_ENTER_MANUALLY","Indtast aktiviteter for denne spiller");
define("DETAILEDINFO_PLAYER_SEEN_ON","Spiller var online på");
define("DETAILEDINFO_INSERT","Indsæt");
define("DETAILEDINFO_OGAME_SERVERTIMES","Bemærk venligst: Alle datoer og tidspunkter henvises til OGame server tider!");
define("DETAILEDINFO_DAY_VIEW","24 timers oversigt");
define("DETAILEDINFO_WEEK_VIEW","uge oversigt");
// new 4.8
define("DETAILEDINFO_HOME_PLANET","Hjemmeplanet");
// new 5.0
define("DETAILEDINFO_PLANETNAME","Navn"); // also used for moons!
define("DETAILEDINFO_DEFENCE_SCORE","Forsvar score");
define("DETAILEDINFO_DEFENCE_SCORE_TOOLTIP","Forsvar score = Flåde - Score + Forskning + Økonomi.<br/>Alle disse statistikker skal være up to date for at få et meningsfuldt resultat!");
define("DETAILEDINFO_SCORE_PER_SHIP","Scores pr. skib");
define("DETAILEDINFO_SHIPS","Antal skibe");
define("DETAILEDINFO_DATE_IN_FUTURE","Vedligehold ikke tider som ikke er i fortiden.");

// new 4.2
/*********************************************************************
* administration.php
**********************************************************************/
define("ADMIN_TITLE","Administration af Galaxytool");
define("ADMIN_DISCLAMER","Bemærk: Kør scripts på eget ansvar ! De fleste sletter data.");
define("ADMIN_INCONSISTENCIES","Uoverensstemmelser i databasen");
define("ADMIN_PLANETS","Planetter på position 0 eller størrere end 15");
define("ADMIN_GALAXIES","Slet galaxer størrere end &1 ");
define("ADMIN_PLAYERS","Slet spillere uden OGame playerid - Som kan duplikere spillere");
define("ADMIN_REPORTS","Slet reporter om planetter der ikke længere findes");
define("ADMIN_MISC","Div.");
define("ADMIN_RESET","Nulstil Galaxytool (Kun brugere, ip table bliver ikke slettet)");
define("ADMIN_OLD_PLAYERS","Slet spiller entries older than &1 days");
define("ADMIN_OLD_REPORTS","Slet rapporter ældre end &1 days");
define("ADMIN_LOADING","Luk ikke vinduet mens siden loader.");
define("ADMIN_STATUS","Status på dine forespørgelser");
define("ADMIN_SELECTION","Mindst et valg skal vælges");
define("ADMIN_SAFETY","Er du sikker på du vil køre dette script(s) ?");
define("ADMIN_DONE","Udført");
define("ADMIN_NOTBD","Intet at gøre ");
// new 4.3
define("ADMIN_OLD_GALAXIES","Slet galaxa informationer ældre end &1 days");
define("ADMIN_UNUSED_PLAYERS","Slet spillere som ikke er i galaxe informationen");
// new 4.7
define("ADMIN_OLD_ACTIVITIES","Slet spiller aktiviteter ældre end &1 dage");
// new 4.8
define("ADMIN_OLD_COMBATS","Slet kamprapporter ældre end &1 dage");
define("ADMIN_OLD_INGAME_MSG","Slet ingame beskeder ældre end &1 dage");
// new 5.0
define("ADMIN_OGAME_API","Indlæs offentlige data fra OGame i Galaxytool");
define("ADMIN_OGAME_ALL_DATA",ALLYHISTORY_ALL_DATA);
define("ADMIN_OGAME_GALAXY_DATA",MENU_GALAXYVIEW);
define("ADMIN_OGAME_STATISTICS_DATA",MENU_STATISTICS);

// new 4.3.5
/*********************************************************************
* errorpage.php
**********************************************************************/
define("ERRORPAGE_PAGEFORWARD","Klik her, hvis din browser ikke understøtter videresendelse!");
define("ERRORPAGE_PERMISSION_DENIED","Du har ikke tilladelse til at gå ind på denne side. Klik for at gå tilbage.");

// new 4.7
/*********************************************************************
* fleet_movements.php
**********************************************************************/
define("FLEETS_TITLE","OGame Galaxytool - Flåde bevægelse");
define("FLEETS_ACTUAL_FLEETS","Nuværende flåde bevægelser");
define("FLEETS_YES",SHOW_YES);
define("FLEETS_NO",SHOW_NO);
define("FLEETS_DETAILS","Detailer");
define("FLEETS_MISSION_EXPEDITION","Ekspeditio");
define("FLEETS_MISSION_COLONIZATION","Kolonisere");
define("FLEETS_MISSION_RECYCLE","Recycle Ruinmark");
define("FLEETS_MISSION_TRANSPORT","Transport");
define("FLEETS_MISSION_DEPLOYMENT","Stationere");
define("FLEETS_MISSION_ESPIONAGE","Spionage");
define("FLEETS_MISSION_ACS_DEFEND","Holde");
define("FLEETS_MISSION_ATTACK","Angrib");
define("FLEETS_MISSION_ACS_ATTACK","AKS Angribe");
define("FLEETS_MISSION_MOON_DESTRUCTION","Måne ødelæggelse");
define("FLEETS_MISSION_MISSILE_ATTACK","Raket Angreb");
define("FLEETS_NO_DATA","Ingen tilgængelige data fundet");
// new 5.0
define("FLEETS_FLEET","Flåde");
define("FLEETS_ALL_FLEETS","Vis alle flåde bevægelser");

/*********************************************************************
* parser_combat_reports.inc.php
**********************************************************************/
define("COMBAT_REPORT_OUDATED_GALAXYVIEW","Din Galaxy data er forældet. Besøg mål koordinaterne først!");

/*********************************************************************
* messages.php
**********************************************************************/
define("MESSAGES_TITLE","OGame Galaxytool - OGame Beskeder");
define("MESSAGES_PLAYERNAME","Spillernavn");
define("MESSAGES_SUBJECT","Emne");
define("MESSAGES_DATE","Dato");
define("MESSAGES_FILTER","Filter");
define("MESSAGES_DELETE","Slet besked");
define("MESSAGES_PUBLISH_DETAIL","Offentliggør meddelelsen ved at tilføje meddelelsens indhold i notitser på den pågældende spiller.");
define("MESSAGES_PUBLISH_HEADER","&sender sendte en besked til &recipient den &date:\n\n &message"); // &sender, &recipient, &date, &message replaced at runtime
define("MESSAGES_PLAYER_FILTER","Besked til spiller:");
// new 5.0
define("MESSAGES_CONTENT","Indhold");

/*********************************************************************
* combat_reports.php
**********************************************************************/
define("COMBATS_TITLE","OGame Galaxytool - Kamprapporter");
define("COMBATS_ATTACKER","Angriber");
define("COMBATS_DEFENDER","Forsvarer");
define("COMBATS_DATE","Dato");
define("COMBATS_OWNER","Ejer");
define("COMBATS_WINNER","Vinner");
define("COMBATS_COMBATREPORT","Kamprapport");
define("COMBATS_COMBAT_AT","Kamp på");
define("COMBATS_LOST_UNITS","Mistede enheder");
define("COMBATS_LOOT","Bytte");
define("COMBATS_DEBRIS","Debris");
define("COMBATS_AND","og");
define("COMBATS_PUBLISH","Gør denne rapport offentlige");
define("COMBATS_UNPUBLISH","Stop delingen af denne rapport (gør det private igen)");
define("COMBATS_DELETE","Slet rapport");
define("COMBATS_CHECK_ALL","Vælg Alle");
define("COMBATS_UNCHECK_ALL","Fravælg Alle");
define("COMBATS_WITH_SELECTED","Med valgte");
define("COMBATS_PUBLIC_REPORTS","Offentlige rapporter");
define("COMBATS_YES",SHOW_YES); // no need for translation!
define("COMBATS_NO",SHOW_NO); // no need for translation!
define("COMBATS_SEARCH_OPTIONS","Søgemuligheder");
define("COMBATS_SEARCH","Go");
define("COMBATS_RESET","Reset");
// 4.8
define("COMBATS_COORDINATES",USER_BB_COORDINATES);
define("COMBATS_INVALID_GALAXY_ENTERED","Invalid Galaxy indtastet");
define("COMBATS_INVALID_SYSTEM_ENTERED","Invalid System indtastet");
define("COMBATS_INVALID_PLANET_ENTERED","Invalid Planet indtastet");
define("COMBATS_GALAXY_FROM_TO","Galaxy");
define("COMBATS_SYSTEM_FROM_TO","System");
define("COMBATS_PLANET_FROM_TO","Planet");
define("COMBATS_APPLY",GENERAL_APPLY);
define("COMBATS_COMBAT_SUMMARY","Kamprapport resum");
define("COMBATS_DOWNLOAD_CSV","Download som CSV fil");

/*********************************************************************
* report_archive.php
**********************************************************************/
define("REPORT_ARCHIVE_TITLE","Rapport arkiv");
define("REPORT_ARCHIVE_COORDINATES","Koordinater");
define("REPORT_ARCHIVE_SCANTIME","Scan tidspunkt");
define("REPORT_ARCHIVE_DELETE","Slet disse poster");
define("REPORT_ARCHIVE_CONFIRM_DELETE","Vil du virkelig slette disse poster?");
define("REPORT_ARCHIVE_GALAXY","Galaxy");
define("REPORT_ARCHIVE_SYSTEM","System");
define("REPORT_ARCHIVE_PLANET","Planet");
define("REPORT_ARCHIVE_MOON","Måne");
define("REPORT_ARCHIVE_DETAILS","Detaljer");
define("REPORT_ARCHIVE_RESOURCES",DETAILEDINFO_RESOURCES);
define("REPORT_ARCHIVE_HEADER_RESOURCES",REPORTS_RESOURCES);
define("REPORT_ARCHIVE_DETAILS_FOR","Rapport arkiv for &1 [&2] (&3)"); // &1 = planetname; &2 = coordinates; &3 = playername
define("REPORT_ARCHIVE_FLEET_CARGO","Flåde fragtkapacitet");
define("REPORT_ARCHIVE_IRAK_RANGE","IPR rækkevidden");
define("REPORT_ARCHIVE_CHART_TYPE","Chart type");

/*********************************************************************
* install.php
**********************************************************************/
define("INSTALL_TITLE", "Galaxytool installation af version");
define("INSTALL_PROGRESS", "Samlet fremgang");
define("INSTALL_STEP", "Trin");
define("INSTALL_CONTINUE", "Fortsæt");
define("INSTALL_VALIDATE", "Valider");
define("INSTALL_STEP1", "Velkommen");
define("INSTALL_STEP2", "Skriverettigheds kontrol");
define("INSTALL_STEP3", "Database indstillinger");
define("INSTALL_STEP4", "OGame indstillinger");
define("INSTALL_STEP5", "Galaxytool indstillinger");
define("INSTALL_STEP6", "Admin kodeord");
define("INSTALL_STEP7", "Installer Galaxytool");
define("INSTALL_STEP8", "Færdiggør installation"); // check writable; delete install and update.php and redirect to index.php
define("INSTALL_FILE_DELETE_CHECK","Venligst slet install.php og update.php fra din webserver.");

define("INSTALL_STEP1_PHP_FAILED", "Din PHP-version &1 fungerer ikke med denne Galaxytool udgave");
define("INSTALL_STEP1_FOPEN_FAILED", "Din PHP-version tillader ikke at åbne websider med FOPEN() kommando'en. Dette er nødvendigt for at bruge OGame API.");
define("INSTALL_STEP1_WELCOME", "Velkommen til installationsguiden af Galaxytool. Du vil blive guidet igennem installationen af ​​Galaxytool.");

define("INSTALL_STEP2_DESCRIPTION","Sørg for, at din config.php og attributes.php filer har skriverettigheder aktiveret.");
define("INSTALL_STEP2_DESCRIPTION2","Hvis du ikke ved, hvordan man kan opnå dette, skal du tage et kig her: &1");
define("INSTALL_STEP2_FILE_NOT_WRITEABLE", "Filen er ikke skrivbar");

define("INSTALL_STEP3_SERVER", "Database server");
define("INSTALL_STEP3_USERNAME", L_USERNAME);
define("INSTALL_STEP3_PASSWORD", L_PASSWORD);
define("INSTALL_STEP3_DBNAME", "Database navn");
define("INSTALL_STEP3_PREFIX", "Tabel prefix");
define("INSTALL_STEP3_ENTER_PREFIX", "Eks. mytool_");
define("INSTALL_STEP3_ENTER_SERVER", "Indtast serveradresse. Kontakt din system administrator hvis det er nødvendigt. Normalt er den korrekte værdi localhost.");
define("INSTALL_STEP3_ENTER_USERNAME", "Indtast brugernavn til databasen");
define("INSTALL_STEP3_ENTER_PASSWORD", "Indtast kodeord til databasen");
define("INSTALL_STEP3_ENTER_DBNAME", "Indtast databasen navn, der skal anvendes til installation (skal eksisterer)");
define("INSTALL_STEP3_CONNECT_FAILED", "Kunne ikke etablere forbindelse til databaseserveren");
define("INSTALL_STEP3_DB_FAILED", "Database &1 ikke fundet");
define("INSTALL_STEP3_MYSQL_VERSION_FAILED", "MySQL version &1 fungerer ikke med denne Galaxytool udgave");

define("INSTALL_STEP4_URL","OGame URL");
define("OGAME_URL_DETAILS","Indtast venligst den URL du ser, når du er logget på OGame. Baseret på denne URL vil værktøjet finde OGame API adressen, som kan anvendes til at fylde data i Galaxytool uden Galaxytoolbar. Denne API blev indført med OGame-version 4,1.");
define("INSTALL_STEP4_UNIVERSE","OGame Univers");
define("INSTALL_STEP4_DEF_TO_DEBRIS","Forsvar til ruinmark");
define("INSTALL_STEP4_DEBRIS_RATE","Flåde til ruinmark");
define("INSTALL_STEP4_SPEED_RATE","Speed rate");
define("INSTALL_STEP4_ENTER_UNIVERSE","Indtast dit OGame univers navn eller nummer (case sensitive).");
define("INSTALL_STEP4_UNIVERSE_MISSING","Du skal definere din univers");
define("INSTALL_STEP4_ENTER_URL","Indtast din OGame univers adresse");
define("INSTALL_STEP4_URL_MISSING","Du skal definere din OGame adresse");
define("INSTALL_STEP4_URL_CHECK_FAILED","Kunne ikke finde OGame API på &1");
// 5.1
define("INSTALL_STEP4_GETSETTINGS","Fetch settings");

define("INSTALL_STEP5_TOOLNAME","Galaxytool navn");
define("INSTALL_STEP5_ENTER_TOOLNAME","Dette er det navn, der vil blive vist på logon side for at identificere din Galaxytool");
define("INSTALL_STEP5_LANGUAGE","Default sprog");
define("INSTALL_STEP5_EMAIL_TO","Email til");
define("INSTALL_STEP5_ENTER_EMAIL_TO","Indtast den e-mail-adresse, hvor du gerne vil modtage meddelelser om registreringer");
define("INSTALL_STEP5_EMAIL_FROM","Email fra");
define("INSTALL_STEP5_ENTER_EMAIL_FROM","Denne e-mail-adresse vises som svar til alle mails sendt fra Galaxytool");
define("INSTALL_STEP5_USE_PHPMAILER","BrugPHPMailer");
define("INSTALL_STEP5_MAXSHOUTS","Maksimalt antal Shoutbox poster");
define("INSTALL_STEP5_ENTER_USE_PHPMAILER","Brug PHPMailer hvis din server ikke understøtter at sende e-mails som standard");
define("INSTALL_PHPMAILER_HOST","SMPT Host");
define("INSTALL_PHPMAILER_HOST_EXAMPLE","Eks. smtp.udbyder.dk");
define("INSTALL_PHPMAILER_USER","SMPT Brugernavn");
define("INSTALL_PHPMAILER_USER_EXAMPLE","Eks. bruger@udbyder.dk");
define("INSTALL_PHPMAILER_PASS","SMPT kodeord");
define("INSTALL_PHPMAILER_SECURE","Autentificering (eks. SSL)");
define("INSTALL_PHPMAILER_PORT","SMTP Port");

define("INSTALL_STEP6_INTRO","Angiv en adgangskode for <strong>admin</ strong> konto, som du skal bruge til din første logon til Galaxytool efter installationen.");

define("INSTALL_STEP7_CONFIG","Konfigurations fil oprettet");
define("INSTALL_STEP7_CONFIG_FAILED","Konfigurations fil ikke oprettet");
define("INSTALL_STEP7_ATTRIBUTES","Attributter fil oprettet");
define("INSTALL_STEP7_ATTRIBUTES_FAILED","Attributter fil ikke oprettet");
define("INSTALL_STEP7_CREATED_TABLES","Database tabeller oprettet");

define("INSTALL_STEP8_INTRO","Du har med succes installeret Galaxytool!");
define("INSTALL_STEP8_LOAD_DATA","Downloader OGame data ...");
define("INSTALL_STEP8_LOAD_DATA_FINISHED","Download af OGame data færdig");
define("INSTALL_STEP8_DELETE_FILE","Du skal nu slette installationsfilerne install.php og update.php fra din webserver.");
define("INSTALL_STEP8_LOGON","Venligst logon med <strong>admin</ strong> bruger og den adgangskode, du definerede tidligere.");

/*********************************************************************
* update.php
**********************************************************************/
define("UPDATE_START","Starter opdatering til version &1");
define("UPDATE_STEP_DONE","Færdig");
define("UPDATE_TITLE", "Galaxytool opdatering af version");
define("UPDATE_STEP1_WELCOME", "Velkommen til opdateringsguiden af Galaxytool. Du vil blive guidet igennem opdatering af Galaxytool.");
define("UPDATE_STEP1_BACKUP_FILES", "Som et første skridt, lave en backup af din <strong>config</ strong> mappe! Du bliver nødt til at erstatte den konfigurationen i tilfælde af fejl.");
define("UPDATE_STEP1_BACKUP_DB", "Lav en <a href=\"http://www.ehow.com/how_2036600_create-database-php.html\">backup</ a> af din database.");
define("UPDATE_STEP1_PROCEED", "Når backup er færdig, kan du gå videre med din opdatering.");
define("UPDATE_STEP1", INSTALL_STEP1);
define("UPDATE_STEP2", INSTALL_STEP5);
define("UPDATE_STEP2_OLD_VERSION", "Tidligere Galaxytool version");
define("UPDATE_STEP3", "Update Galaxytool");
define("UPDATE_STEP3_UPDATE_RUNNING", "Update kører, vent venligst...");
define("UPDATE_STEP4", "Færdiggør Update");
define("UPDATE_STEP4_INTRO","Du har opdateret Galaxytool!");
define("UPDATE_STEP4_UPDATE_DONE","Opdaterings trin udført.");
define("UPDATE_FAILED","Update fejlede.");

?>