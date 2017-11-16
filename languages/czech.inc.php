<?php
/*
 * defines the characters used in OGame to indicate player status
 */
define("PLAYER_BANNED","b");
define("PLAYER_VACATION_MODE","z");
define("PLAYER_NOOB","n");
define("PLAYER_INACTIVE","i");
define("PLAYER_LONG_INACTIVE","I");
define("PLAYER_OUTLAW","o");

/*********************************************************************/
/***************************** public ********************************/
/*********************************************************************/
//index.php
define("L_USERNAME","Uživatelské jméno");
define("L_PASSWORD","Heslo");
define("L_LOGINFAILURE","Uživatelské jméno nebo heslo je nesprávné, nebo nemáte dosud aktivován účet.");
define("L_TOKENFAILURE","Your logon key is wrong or your account is not activated yet.");
define("L_LOGINTEXT","Prosím, přihlašte se.");
define("L_LANGUAGE","Dostupné jazyky:");
define("L_TIMEOUT","Čas spojení vypršel!");
define("L_REGISTER","Registrace");
define("L_PWLOST","Zapomenuté heslo");
define("INDEX_TITLE","OGame Galaxietool - Přehled");
define("INDEX_INFO","Informace");
define("INDEX_ENTRIES","Počet všech systémů");
define("INDEX_ENTRIES_LASTWEEK","Nové systémy za minulý týden");
define("INDEX_ENTRIES_TO_OLD","Systémy starší než jeden měsíc");
define("INDEX_REGISTERED_USERS","Registrovaní uživatelé");
define("INDEX_PAGEFORWARD","Jestliže Váš prohlížeč nepodporuje přesměrovávání stránek, klikněte prosím zde.");
define("INDEX_NOTICES","Poznámky");
define("INDEX_PLAYERS","Statistika hráčů");
define("INDEX_ALLIES","Statistika spojenců");
define("INDEX_REPORTS","Špionážní zprávy");
define("INDEX_VERSION","Kontrola nové verze ke stažení");
define("INDEX_LATEST_VERSION","Novější verze není dostupná");
define("INDEX_SHOUTBOX","Shoutbox");
define("INDEX_NOENTRY","Žádný vzkaz");
define("INDEX_COMMENT","Váš vzkaz");
define("INDEX_INSERT","Vložit");
define("INDEX_UMOD","Hráčů se Zmraženým účtem");
define("INDEX_NO_MOONS","Počet Měsíců");
define("INDEX_NO_EMPTY_SYSTEMS","Počet prázdných systémů");
define("INDEX_NO_FULL_SYSTEMS","Počet zcela zaplněných systémů");
define("INDEX_NO_TARGETS","Počet možných cílů");
// 4.0
define("INDEX_USERINFO","Uživatelé");
define("INDEX_ONLINE","Nyní online");
define("INDEX_TODAY","Dnes online");
define("INDEX_ALL","Celkový počet přihlášení");
// 4.3.7
define("GENERAL_LOAD_FORM","Načíst formulář");
define("GENERAL_SAVE_FORM","Uložit formulář");
define("GENERAL_SAVE_AS_TEXT","Uložit jako");
define("GENERAL_SAVE","Uložit");
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
define("GENERAL_OPEN_IN_NEW_WINDOW","Otevřít odkaz v novém okně");
// 5.1
define("GENERAL_UNIT_OF_MEASURE_DAYS","Days");

/*********************************************************************/
/***************************** internal ******************************/
/*********************************************************************/
// index.php
define("PROGRAM_NAME","OGame Galaxytool");
define("SHORTNAME","Galaxytool");
define("BACK_INDEX","Zpět na hlavní stranu");
define("UNIVERSE","Vesmír");

// search
define("MENU_INFO_LINKS","Informace");
define("MENU_PAGE","Přehled");
define("MENU_DB_SEARCH","Vyhledat v databázi");
define("MENU_DB_NOTICES","Vyhledat v poznámkách");
define("MENU_DB_REPORTS","Vyhledat ve zprávách");
define("MENU_GALAXYVIEW","Prohlédnout Galaxie");
define("MENU_STATISTICS","Statistiky");
define("MENU_ALLYHISTORY","Historický přehled");
// 4.7
define("MENU_FLEET_MOVEMENTS","Pohyby letek");
define("MENU_COMBAT_REPORTS","Bitevní zprávy");
define("MENU_MESSAGES","Herní zprávy");

// insert / change
define("MENU_OPTION_LINKS","Možnosti");
define("MENU_DB_REFRESH","Vložit do databáze");
define("MENU_NOTICES","Poznámky");
define("MENU_DB_STATUS","Stav databáze");
define("MENU_USEROPTIONS","Správa uživatelů");
define("MENU_USEROPTIONS2","Uživatelské volby");
define("MENU_USEROPTIONS3","Informace o uživateli");
// 4.2
define("MENU_ADMIN","Administrace");
// 4.3.3
define("MENU_LOGOUT","Odhlášení");

// Stuff
define("MENU_STUFF","Různé");
define("MENU_FORUM_THREAD","Vývojářské fórum");
define("MENU_DOWNLOADPAGE","Download");
define("MENU_LANGUAGE","Jazyk");
define("MENU_HELP","Nápověda");
// 4.0
define("MENU_TOOLOPTIONS","Volby Galaxytool");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1"," bylo vloženo do databáze");
define("PARSER_ERROR1","Nepodařilo se vložit následující souřadnice:");
define("PARSER_ERROR2","Nelze nalézt v databázi!");
define("PARSER_ERROR3","Nelze nalézt databázový server!");
define("PARSER_WRONG_UNIVERSE","Špatný Vesmír - aktuální: \"&1\" očekávaný: \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","OGame Galaxytool - Vyhledánání");
define("SHOW_SEARCH","Vyhledat v databázi");
define("SHOW_ALLYSYMBOL","Alianční značka");
define("SHOW_PLAYERNAME","Jméno hráče");
define("SHOW_MOONS","Pouze planety s Měsícem");
define("SHOW_NOTICES","Pouze planety s poznámkami");
define("SHOW_COLONIES","Pouze planety vhodné ke kolonizaci");
define("SHOW_YES","Ano");
define("SHOW_NO","Ne");
define("SHOW_SEARCHRANGE","Vzdálenost");
define("SHOW_SEARCH_IN","Vyhledat v galaxii");
define("SHOW_FROM_SYSTEM","od systému");
define("SHOW_FROM_PLANET","od pozice planety");
define("SHOW_TO","do");
define("SHOW_DESCRIPTION","Můžete použít zástupné znaky pro jména aliancí a hráčů. Tak můžete vyhledat všechny hráče jejichž jméno obsahuje &quot;název&quot; .<br />Vyplňte pouze ta pole, která potřebujete.");
define("SHOW_SORT_BY","Seřadit podle");
define("SHOW_GALASYSTEM","Galaxie/Systému");
define("SHOW_ALLYNAME","Jména Aliance");
define("SHOW_SEARCHBUTTON","Vyhledat");
define("SHOW_ADDRESS","Adresa");
define("SHOW_ALLYSORT","Aliance");
define("SHOW_PLANET","Jméno planety");
define("SHOW_STATUS","Stav");
define("SHOW_CURRENTNESS","Poslední aktualizace");
define("SHOW_PLAYER_STATUS","Stav hráče");
define("SHOW_PLAYER_STATUS1","vše");
define("SHOW_PLAYER_STATUS2","možné cíle");
define("SHOW_PLAYER_STATUS3","neaktivní");
define("SHOW_HITS","Záznamů");
define("SHOW_OF","na");
define("SHOW_ASC","vzestupně");
define("SHOW_DESC","sestupně");
define("SHOW_RESULTS","záznamů na stránku");
define("SHOW_MOON","Měsíc");
define("SHOW_UKMOONSIZE","neznámo");
define("SHOW_DF","DF");
define("SHOW_DF_LONG","Pole trosek");
define("SHOW_METAL","M");
define("SHOW_METAL_LONG","Kov");
define("SHOW_CRYSTAL","C");
define("SHOW_CRYSTAL_LONG","Krystaly");
define("SHOW_BOTH","obojí dohromady");
define("SHOW_AT_LEAST","(nejméně)");
define("SHOW_DATE","Datum");
define("SHOW_DATE_0","nezáleží");
define("SHOW_DATE_1","starší než");
define("SHOW_DATE_2","novější než");
define("SHOW_RANK","Pořadí");
define("SHOW_FRANK","Pořadí letky");
define("SHOW_MEMBERS","Členové");
define("SHOW_NOTRANKED","Není mezi prvními 1500.");
define("SHOW_NOTICERES","Poznámky");
define("SHOW_REPORTS","Pouze planety se zprávami");
define("SHOW_REPORTS_SHORT","Zprávy");
define("SHOW_NOTHING","Nenalezen žádný záznam");
define("SHOW_ALLIANCE_STATUS","Stav Aliance");
define("SHOW_NO_STATUS","Stav není k dispozici");
define("SHOW_NAP","NAP");
define("SHOW_ALLIED","Spojenec");
define("SHOW_WAR","Válka");
define("SHOW_BOYCOTT","Bojkot");
define("SHOW_NEUTRAL","Neutrál");
define("SHOW_OWN","Vlastní Aliance");
define("SHOW_WING","Wing");
// obsolete with 5.0
define("SHOW_EXT_OPTIONS1","Ukázat více možností pro vyhledávání podle vzdálenosti, pořadí, data nebo pole trosek.");
define("SHOW_EXT_OPTIONS2","Ukázat více možností pro vyhledávání podle kolonií, Měsíců, zpráv, poznámek, stavu hráčů a diplomacie.");
define("SHOW_EXT_OPTIONS3","Ukázat více možností pro třídění nalezených výsledků.");
// new 5.0
define("SHOW_EXTENDED","advanced search");
define("SHOW_MOON_SELECTION","Planet with moon");
define("SHOW_REPORT_SELECTION","Planet with report");
define("SHOW_FILTER_BY","Exclude from the list");
define("SHOW_FILTER_NONE","nic");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Show players without score changes within the last few days");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","OGame Galaxytool - Stav");
define("STATUS_DB_STATUS","Stav databáze");
define("STATUS_COLOR","Barva");
define("STATUS_AGE1","Záznamy 1 den staré.");
define("STATUS_AGE2","Záznamy 2 - 4 dny staré.");
define("STATUS_AGE3","Záznamy 4 - 7 dní staré.");
define("STATUS_AGE4","Záznamy 1 - 2 týdny staré.");
define("STATUS_AGE5","Záznamy 2 - 4 týdny staré.");
define("STATUS_AGE6","Záznamy starší než 1 měsíc!");
define("STATUS_AGE7","Žádné dostupné záznamy.");
define("STATUS_ON","on");
define("STYLES_COLOR1","Barva 1");
define("STYLES_COLOR2","Barva 2");
define("STYLES_COLOR3","Barva 3");
define("STYLES_COLOR4","Barva 4");
define("STYLES_COLOR5","Barva 5");
define("STYLES_COLOR6","Barva 6");
define("STYLES_COLOR7","Barva 7");
// 4.8
define("STATUS_DB_LEGEND","Legend");
define("STATUS_GALAXY","Galaxy Overview");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","Správa uživatelů");
define("USER_NAMES","Uživatel");
define("USER_ERROR","Chyba");
define("USER_NEWUSER","Nový uživatel");
define("USER_OPTIONS","Volby");
define("USER_USERNAME","Uživatelské jméno");
define("USER_PASSWORD","Heslo");
define("USER_PASSWORD_CONFIRM","Potvrdit heslo");
define("USER_GALAXY","Galaxie");
define("USER_SEARCH","Vyhledat");
define("USER_INSERT","Vložit");
define("USER_DELETE","Smazat");
define("USER_DELETE_ENTRY","Chcete smazat tohoto uživatele: ");
define("USER_STATUS","Prohlédnout statistiky");
define("USER_STYLES","Upravit vzhled");
define("USER_SUBMIT","Odeslat");
define("USER_RESET","Resetovat");
define("USER_YES","Ano");
define("USER_NO","Ne");
define("USER_STYLEPATH","Cesta k styles.css");
define("USER_PROBES","Prohlédnout/Odeslat špionážní zprávy");
define("USER_EMAIL","Email");
define("USER_ERROR1","Chybné heslo nebo neplatný email.");
define("USER_ERROR2","Neplatný Email.");
define("USER_INGAME","Jméno ve hře");
define("USER_ALLYTAG","Alianční značka");
define("USER_ALLYHISTORY","Historický přehled");
define("USER_DIPLOMATIC","Změnit Diplomatický stav");
define("USER_STATSPAGE","počet záznamů na statistické stránce");
define("USER_LINKS","Odkazy");
define("USER_LINKS2","Format:<br>text;url<br>text2;url2<br>text3;url3");
define("USER_EXPORT_TITLE","Export barev (BB Codes)");
define("USER_BB_COORDINATES","Souřadnice");
define("USER_BB_MOON","Měsíc");
define("USER_BB_DEBRIS","Pole trosek");
define("USER_BB_ALLY","Alianční jméno");
define("USER_BB_ALLYDETAILS","Detaily Aliance");
define("USER_BB_PLAYERNAME","Jméno hráče");
define("USER_BB_BANNED","bann");
define("USER_BB_VACATION","zmrazený účet");
define("USER_BB_NOOB","noob");
define("USER_BB_INACTIVE","Neaktivní");
define("USER_BB_LONGINACTIVE","Dlouho neaktivní");
// new with 4.7
define("USER_DELETION","Smaž");
define("USER_FLEETINFO",MENU_FLEET_MOVEMENTS);
define("USER_ACTIVITIES","Aktivity hráče");
define("USER_MAINTENANCE","Údržba Galaxytoolu");
define("USER_MANAGEMENT",MENU_USEROPTIONS);
define("USER_DELETE_MY_COMBAT_REPORTS","Smazat mé bitevní zprávy");
define("USER_DELETE_MY_MESSAGES","Smazat mé zprávy");
define("USER_DELETE_MY_FLEETMOVES","Smazat mé pohyby letek");
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
define("VIEW_TITLE","OGame Galaxytool - Přehled Galaxie");
define("VIEW_NODATA","Data nejsou dostupná.");
define("VIEW_GALAXY","Galaxie");
define("VIEW_SYSTEM","Systém");
define("VIEW_POSITION","Poz.");
define("VIEW_PLANET","Planeta");
define("VIEW_MOON","Měsíc");
define("VIEW_TF","DF");
define("VIEW_PLAYER","Hráč");
define("VIEW_PLAYER_ADD","(Pořadí / Stav)");
define("VIEW_ALLY","Aliance");
define("VIEW_ALLY_ADD","(Pořadí / Člen)");
define("VIEW_METAL","M");
define("VIEW_CRYSTAL","C");
define("VIEW_COLONISED","Planet obsazeno");
define("VIEW_UKMOONSIZE","neznámo");
define("VIEW_BACK","zpět");
define("VIEW_NOTICE","Poznámky");
define("VIEW_REPORTS","Zprávy");
define("VIEW_MOONPHALANX","Následující měsíce mohou skenovat tento systém");
define("VIEW_NOMOONS","Žádný Měsíc nenalezen");
define("VIEW_IRAKS","Následující planety mohou být zasaženy meziplanetárními raketami");
define("VIEW_NOIRAKS","Nenalezeny žádné meziplanetární rakety");
// 4.0
define("VIEW_MOON_DESTROY_CHANCE","Šance na zničení Měsíce");
define("VIEW_CHANCE_WITH_ONE","Šance s jednou Hvězdou smrti");
define("VIEW_CHANCE_WITH_N","Šance s");
define("VIEW_DEATH_STARS","Hvězda smrti");
define("VIEW_DS_DESTROY_CHANCE","Šance na ztrátu Hvězdy smrti");
define("VIEW_TOP","Nahoru");
// new 4.3.5
define("VIEW_GO","go");
// new 5.0
define("VIEW_DIAMETER","Diameter");

/*********************************************************************
* change_password.php
**********************************************************************/
define("PW_TITLE","OGame Galaxytool - změna hesla");
define("OLD_PASSWORD","staré heslo");
define("NEW_PASSWORD","nové heslo");
define("CONFIRM_NEW_PASSWORD","potvrdit nové heslo");
define("PW_MISMATCH","Hesla se neshodují!");
define("PW_ERROR","Staré heslo bylo chybně zadané!");
define("UPDATE_DONE","Změna úspěšná.");
// new 4.2
define("TIMEZONE_OFFSET","Vyrovnat časové pásmo se serverem");
// new 4.3
define("DELETE_ACCOUNT","Smazat tento Galaxytool účet");
define("DELETE_ACCOUNT_SAFETY_REQUEST","Opravdu chcete smazat tento Galaxytool účet?");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","Autorizace");
define("CH_PASSWD_ADMIN","Admin");
// new 4.7
define("TIMEZONE_OGAME_OFFSET","Časové pásmo OGame serveru");
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
define("NOTICE_TITLE","OGame Galaxytool - Poznámky");
define("NOTICE_HEADER","upravit poznámky");
define("NOTICE_HEADER2","Upravit vlastní poznámky");
define("NOTICE_PUBLIC","Přístupné pro ostatní?");
define("NOTICE_YES","ano");
define("NOTICE_NO","ne");
define("NOTICE_TEXT","Text poznámky");
define("NOTICE_SAVE","Uložit");
define("NOTICE_DELETED","Záznam smazán");
define("NOTICE_SAVED","Záznam uložen.");
define("NOTICE_RESULTS","Všechny výsledky");
define("NOTICE_USER","Uživatel");
define("NOTICE_DATE","Datum");
define("NOTICE_EDIT","Upravit");
define("NOTICE_DELETE","Smazat");
define("NOTICE_NEW","Vytvořit vlastní záznam");
define("NOTICE_NOTPUBLIC","Poznámka není veřejná.");
define("NOTICE_ALL","vše");
define("NOTICE_NONE",SHOW_FILTER_NONE);
define("NOTICE_SEARCH","Vyhledat v Poznámkách");
define("NOTICE_SEARCH_SHORT","Vyhledat");
define("NOTICE_HITS","Záznamů");
define("NOTICE_SHOWRESULTS","záznamů na stránku");
define("NOTICE_OF","vyp");
define("NOTICE_NOTHING","Nenalezen žádný záznam");
// 4.0
define("NOTICE_CHARS","Characters");
define("NOTICE_PLAYERNAME","Hráč");
define("NOTICE_SHOWALL","Ukázat všechny poznámky");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","OGame Galaxytool - Špionážní zprávy");
define("REPORTS_RESOURCES","Suroviny");
define("REPORTS_FLEET","Letky");
define("REPORTS_DEFENCE","Obrana");
define("REPORTS_BUILDINGS","Budovy");
define("REPORTS_TECHNOLOGY","Výzkum");
define("REPORTS_MOON","Měsíc");
define("REPORTS_SEARCH","Vyhledat ve špionážních zprávách");
define("REPORTS_SEARCH_SHORT","Vyhledat");
define("REPORTS_HITS","Záznamů");
define("REPORTS_NOTHING","Nenalezen žádný záznam");
define("REPORTS_ADDRESS","Adresa");
define("REPORTS_CURRENTNESS","Currentness");
define("REPORTS_PLAYERNAME","Jméno hráče");
define("REPORTS_ALLY","Spojenec");
define("REPORTS_VIEW","Prohlédnout zprávu");
define("REPORTS_SEARCH_IN","Vyhledat v Galaxii");
define("REPORTS_FROM_SYSTEM","od Systému");
define("REPORTS_TO","do");
define("REPORTS_DELETE","smazat");
define("REPORTS_DELETED","Záznam smazán");
define("REPORTS_RESULTS","záznamů na stránku");
define("REPORTS_OF","z");
define("REPORTS_DATE","Datum");
define("REPORTS_DATE_0","nezáleží");
define("REPORTS_DATE_1","starší než");
define("REPORTS_DATE_2","novější než");
define("REPORTS_NOTICES","Poznámky");
define("REPORTS_AT_LEAST_RESOURCES","Suroviny (nejméně)");
define("REPORTS_SEARCH_EXTENDED","rozšířené vyhledávání");
define("REPORTS_FLEET_RESIS","Letka - skóre");
define("REPORTS_DEFENCE_RESIS","Obrana - skóre");
define("REPORTS_ALL_RESIS","celkem skóre");
define("REPORTS_TECHS","Technologie");
define("REPORTS_UNKNOWN_ENTRIES","neznámý záznam");
define("REPORTS_PARTLY_INSERTED","částečně vloženo");
define("REPORTS_FOR_ALL_RES","pro všechny suroviny");
define("REPORTS_FOR_TF","pro pole trosek");
define("REPORTS_KT","Malých transportérů");
define("REPORTS_GT","Velkých transportérů");
define("REPORTS_SS","Bitevních lodí");
define("REPORTS_REC","Recyklátorů");
define("REPORTS_RAIDABLE","poze cíle vhodné k útoku");
define("REPORTS_ALL_RESOURCES","všechny suroviny");
// 4.0
define("REPORTS_STUFF","Různé");
define("REPORTS_SPEEDSIM","Simulace pomocí Speedsim");
define("REPORTS_DRAGOSIM","Simulace pomocí Dragosim");
define("REPORTS_STATUS","Stav");
define("REPORTS_ERROR","Vyskytla se chyba");
// 4.2
define("REPORTS_OWN_REPORTS","Pouze mé zprávy");
// 4.3.3
define("REPORTS_UPLOAD_BY","Zprávy nahrál");
// 4.4
define("REPORTS_DEPTH","Podrobná zpráva");
define("REPORTS_FLEET_SCORE","Body letky");
define("REPORTS_DEFENCE_SCORE","Body obrany");
// 5.0
define("REPORTS_HOURS","hours");
define("REPORTS_MAX_RESULTS_HIT","Your query returned more than &1 hits. Only the first &1 results are show. Please adjust your search request to get less results.");
define("REPORTS_OSIMULATE","Simulate with OSimulate");
define("REPORTS_SHOW_ONLY","Show only");
define("REPORTS_SHOW_PLANETS","Planety");
define("REPORTS_SHOW_MOONS","Měsíce");
define("REPORTS_OWNER","Reports owned by");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","OGame Galaxytool - Statistiky");
define("STATS_TBLHEAD","Statistiky");
define("STATS_RANK","Pořadí");
define("STATS_PLAYERNAME","Jméno hráče");
define("STATS_ALLYNAME","Alianční značka Tag");
define("STATS_SCORE","Skóre");
define("STATS_FLEET","Letka");
define("STATS_RESEARCH","Výzkum");
define("STATS_MEMBERS","Členové");
define("STATS_STATUS","Stav");
define("STATS_NOTHING","Stav není k dispozici");
define("STATS_NAP","NAP");
define("STATS_ALLIED","Spojenec");
define("STATS_WAR","Válka");
define("STATS_BOYCOTT","Bojkot");
define("STATS_NEUTRAL","Neutrál");
define("STATS_OWN","Vlastní Aliance");
define("STATS_WING","Wing");
define("STATS_UPDATE","Záznam z");
define("STATS_PLAYERSTATS","Stav hráče");
define("STATS_ALLYSTATS","Stav Aliance");
// 4.0
define("STATS_DELETE","Chcete smazat tento záznam ?");
define("STATS_CONFIRM_DELETE","Opravdu chcete smazat tento záznam ?");
define("STATS_CHANGE_PLAYER_STATUS","Stav hráče");
define("STATS_CHANGE_ALLIANCE_STATUS","Stav Aliance");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","Všem členům této aliance byl vybrán stejný stav. Jakýkoli jiný předchozí stav bude změněn. Stav jednotlivých hráčů můžete měnit dodatečně.");
define("STATS_UNKNOWN","Zbytek");
define("STATS_DETAILS","Detaily pro");
// 4.4
define("STATS_PLAYERSTATUS",SHOW_PLAYER_STATUS);
define("STATS_IGNORE_STATUS",SHOW_PLAYER_STATUS1);
define("STATS_ACTIVE","aktivní");
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
define("REGISTER_REGISTRATE","Registrace");
define("REGISTER_LOGINNAME","Přihlašovací jméno");
define("REGISTER_PASSWORD","Heslo");
define("REGISTER_PASSWORD_CONFIRM","Potvrzení hesla");
define("REGISTER_EMAIL","Email");
define("REGISTER_INGAME","Jméno ve hře");
define("REGISTER_ALLYTAG","Alianční značka");
define("REGISTER_EMAILVERIFICATION","Kontrola Emailu");
define("REGISTER_EMAILTEXT","Prosím, klikněte na tento odkaz k potvrzení Vaší registrace do programu Galaxytool.");
define("REGISTER_ERROR1","Přihlašovací jméno již někdo používá.");
define("REGISTER_ERROR2","Chyba při zasílání emailu. Prosím, kontaktujte administrátora.");
define("REGISTER_ERROR3","Chyba při zasílání dat do databáze!");
define("REGISTER_INFO1","Váš účet byl vytvořen.");
define("REGISTER_INFO2","Prosím, klikněte na odkaz v emailu pro potvrzení Vaší registrace.");
define("REGISTER_INFO3","Zřízení účtu potvrzeno. Administrátor Vám ho nyní aktivuje.");
define("REGISTER_BUTTON","Zpět na hlavní stranu");
define("REGISTER_NEW_SUBJECT","Nový uživatel byl zaregistrován");
define("REGISTER_NEW_MAILTEXT","Nový uživatel se zaregistroval.");
// new 4.2
define("REGISTER_BACK","Zpět na první stránku");
// new 4.3.5
define("REGISTER_MISSING_FIELDS","Vyplňte všechna požadovaná pole");
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
define("LOSTPW_TITLE","Ztracené heslo");
define("LOSTPW_INFO2","Nové heslo bylo vygenerováno a bylo Vám zasláno na Váš email.");
define("LOSTPW_BUTTON1","dostat nové heslo");
define("LOSTPW_BUTTON2","Zpět na hlavní stranu");
define("LOSTPW_LOGINNAME","Přihlašovací jméno");
define("LOSTPW_EMAIL","Email");
define("LOSTPW_ERROR1","Chyba při zasílání dat do databáze!");
define("LOSTPW_ERROR2","Nenalezen žádný shodný záznam!");
define("LOSTPW_ERROR3","Chyba při zasílání emailu. Prosím, kontaktujte administrátora.");
define("LOSTPW_EMAIL_SUBJECT","Vyžadováno Vaše nové heslo");
define("LOSTPW_EMAIL_TEXT1","Zde jsou Vaše nové přihlašovací údaje do Galaxytool");
define("LOSTPW_EMAIL_TEXT2","Uživatelské jméno");
define("LOSTPW_EMAIL_TEXT3","Heslo");
// new 5.0
define("LOSTPW_INFO1","You will receive an email to verify your password reset request.");
define("LOSTPW_CONFIRM_RESET_SUBJECT","Lost password?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","Hello,\n\nyou requested a password reset for the Galaxytool. To generate a new password, click the following link:");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","OGame Galaxytool - Informace o uživateli");
define("USERINFO_NAMES","Všichni uživatelé tohoto nástroje");
define("USERINFO_DETAIL","detailní informace o");
define("USERINFO_ERROR1","Žádný uživatel s tímto ID!");
define("USERINFO_USERNAME","Přihlašovací jméno");
define("USERINFO_INGAME","Jméno ve hře");
define("USERINFO_EMAIL","Email");
define("USERINFO_ALLYTAG","Aliance");
define("USERINFO_STYLEPATH","Skin");
define("USERINFO_STATUS","Stav");
define("USERINFO_ACTIVATE","Aktivovat hráče");
define("USERINFO_LOGINS","Počet přihlášení");
define("USERINFO_LASTLOGIN","Poslední přihlášení");
define("USERINFO_DATA","Informace o zadaných Systémech");
define("USERINFO_NODATA","Tento uživatel zatím nevložil žádný Systém!");
define("USERINFO_GALAXY","Galaxie");
define("USERINFO_SYSTEMS","Počet Systémů");
define("USERINFO_IP","IP adresa");
define("USERINFO_LOGINTIME","přihlášení");
define("USERINFO_NOLOGIN","Uživatel se zatím nepřihlásil.");
define("USERINFO_LAST_GALAXYUPDATE","Poslední vložený Přehled Galaxie");
define("USERINFO_LAST_PUBLIC_NOTICE","Poslední veřejná poznámka");
define("USERINFO_LAST_PRIVATE_NOTICE","Poslední soukromá poznámka");
define("USERINFO_NUMBEROF_PUBLIC_NOTICE","Počet veřejných poznámek");
define("USERINFO_NUMBEROF_PRIVATE_NOTICE","Počet soukromých poznámek");
define("USERINFO_ACTIVATED","Aktivováno účtů");
define("USERINFO_ACTIVATIONTEXT","Administrátor Galaxytool aktivoval Váš účet.\n\nUžijte si nástroj Galaxytool!");
// new 4.8
define("USERINFO_LAST_SUBMIT","Inserted last data");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","OGame Galaxytool - Historie Aliance");
define("ALLYHISTORY_TBLHEAD","Historický přehled");
define("ALLYHISTORY_PLAYERNAME","Jméno hráče");
define("ALLYHISTORY_ALLYNAME","Aliance");
define("ALLYHISTORY_LASTMONTH","Minulý měsíc"); // changed at 4.0
define("ALLYHISTORY_ALL_DATA","Všechny dostupné informace"); // new 4.0
define("ALLYHISTORY_SHOW","Ukázat statistiky");
define("ALLYHISTORY_TIMESPAN","Období");
define("ALLYHISTORY_PROGESS","Vývoj");
define("ALLYHISTORY_SCORE","Body");
define("ALLYHISTORY_FSCORE","Bodů za letky"); // new 4.0
define("ALLYHISTORY_RSCORE","Bodů za výzkum"); // new 4.0
define("ALLYHISTORY_MEMBER","Členové"); // new 4.0
define("ALLYHISTORY_NOTHING","žádné záznamy");
define("ALLYHISTORY_DETAILS","Detaily");
define("ALLYHISTORY_SHOW_ADDRESS","Souřadnice");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","Informace o hráči");
define("DETAILEDINFO_ALLYINFO_TITLE","Informace o alianci");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","Detailní informace o hráči");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","Detailní informace o alianci");
define("DETAILEDINFO_NO_ALLIANCE","nic");
define("DETAILEDINFO_SCORE","Statistika bodů");
define("DETAILEDINFO_FLEET","Statistika letky");
define("DETAILEDINFO_RESEARCH","Statistika výzkumu");
define("DETAILEDINFO_RANK","Pořadí");
define("DETAILEDINFO_POINTS","Body");
define("DETAILEDINFO_KNOWN_PLANETS","známé planety");
define("DETAILEDINFO_MOONS","známých Měsíců");
define("DETAILEDINFO_PHALANX_AREA","Oblast Falangy");
define("DETAILEDINFO_NO_PHALANX_AREA","Senzor Falangy nenalezen");
define("DETAILEDINFO_NOTICES","Poznámky");
define("DETAILEDINFO_NO_NOTICES","Nenalezena žádná poznámka");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","předchozí Aliance");
define("DETAILEDINFO_RESOURCES_PER_HOUR","Surovin za hodinu");
define("DETAILEDINFO_RESOURCES_PER_DAY","Surovin za den");
define("DETAILEDINFO_RESOURCES_PER_WEEK","Surovin za týden");
define("DETAILEDINFO_RESOURCES_PER_MONTH","Surovin za měsíc (30 dní)");
define("DETAILEDINFO_METAL","Kov");
define("DETAILEDINFO_CRYSTAL","Krystaly");
define("DETAILEDINFO_DEUTERIUM","Deuterium");
define("DETAILEDINFO_UNKNOWN","neznámý");
define("DETAILEDINFO_SCORE_DISTRIBUTION","Rozdělení bodů");
// new 4.2
define("DETAILEDINFO_GENERAL","Detail");
define("DETAILEDINFO_MEMBERS","Člen");
define("DETAILEDINFO_GRAPHS","Grafy");
define("DETAILEDINFO_RESOURCES","Zdroje");
define("DETAILEDINFO_FLEET_TAB","Letka");
define("DETAILEDINFO_TECH","Výzkum");
define("DETAILEDINFO_FLEET_DETAIL","Součet / (hráči-průměr) ze všech dostupných zpráv");
define("DETAILEDINFO_TECH_DETAIL","Průměr všech dostupných informací o hráčích");
// new 4.3
define("DETAILEDINFO_PLANET_TAB",REPORTS_SHOW_PLANETS);
define("DETAILEDINFO_MOON_TAB",REPORTS_SHOW_MOONS);
// 4.7
define("DETAILEDINFO_ACTIVITIES","Aktivity");
define("DETAILEDINFO_NODATA",VIEW_NODATA); // reuse existing translations
define("DETAILEDINFO_ACTIVITY_DESCRIPTION","Ukaž aktivity o &1 shromážděné z:");
define("DETAILEDINFO_GALAXYVIEWS","Přehled Galaxie");
define("DETAILEDINFO_SCANS","Špionážní akce");
define("DETAILEDINFO_MESSAGES","Zprávy hráčů");
define("DETAILEDINFO_COMBATS","Bitevní zprávy");
define("DETAILEDINFO_ALLYPAGE","Přehled aliance");
define("DETAILEDINFO_MANUAL","Manuální vstupy");
define("DETAILEDINFO_START","Začátek");
define("DETAILEDINFO_TO","do");
define("DETAILEDINFO_TODAY","Dnes");
define("DETAILEDINFO_DATA_RESTRICTION","zakázáno pro:");
define("DETAILEDINFO_WEEKDAY_WEEKEND","Víkend");
define("DETAILEDINFO_WEEKDAY_WORKINGDAY","Všední den");
define("DETAILEDINFO_WEEKDAY_MONDAY","Pondělí");
define("DETAILEDINFO_WEEKDAY_TUESDAY","Úterý");
define("DETAILEDINFO_WEEKDAY_WEDNESDAY","Středa");
define("DETAILEDINFO_WEEKDAY_THURSDAY","Čtvrtek");
define("DETAILEDINFO_WEEKDAY_FRIDAY","Pátek");
define("DETAILEDINFO_WEEKDAY_SATURDAY","Sobota");
define("DETAILEDINFO_WEEKDAY_SUNDAY","Neděle");
define("DETAILEDINFO_WEEKDAY_SHORTLENGTH",3); // number of characters to shorten week day
define("DETAILEDINFO_PLAYER_CURRENTLY_ACTIVE","Hráč je momentálně aktivní");
define("DETAILEDINFO_PLAYER_MESSAGES","dostupné zprávy hráčů");
define("DETAILEDINFO_SHOW","ukaž");
define("DETAILEDINFO_NONE","žádný k dispozici");
define("DETAILEDINFO_ENTER_MANUALLY","Zadejte aktivity tohoto hráče");
define("DETAILEDINFO_PLAYER_SEEN_ON","Hráč byl online v");
define("DETAILEDINFO_INSERT","Vlož");
define("DETAILEDINFO_OGAME_SERVERTIMES","Upozornění: Všechna data a časy se týkají času OGame serveru !");
define("DETAILEDINFO_DAY_VIEW","24-hodinový přehled");
define("DETAILEDINFO_WEEK_VIEW","týdenní přehled");
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
define("ADMIN_TITLE","Administrace Galaxytoolu");
define("ADMIN_DISCLAMER","Pozor:Spuštění jakéhokoliv z těchto skriptů na vlastní nebezpečí! Většina z nich maže data.");
define("ADMIN_INCONSISTENCIES","Nesrovnalosti v databázi");
define("ADMIN_PLANETS","Planety na pozici 0 nebo větší než 15");
define("ADMIN_GALAXIES","Smazat přehled galaxií od &1 ");
define("ADMIN_PLAYERS","Odstranit hráče bez OGame playerid- vede k duplicitní záměně hráčů");
define("ADMIN_REPORTS","Odstranit zpávy, ve kterých už planety neexistují");
define("ADMIN_MISC","Různé");
define("ADMIN_RESET","Resetovat Galaxytool (uživatel a IP se neodstraní)");
define("ADMIN_OLD_PLAYERS","Odstranit hráče starší než &1 dny");
define("ADMIN_OLD_REPORTS","Odstranit zprávy starší než &1 dny");
define("ADMIN_LOADING","Nezavírejte toto okno zatímco se stránka načítá.");
define("ADMIN_STATUS","Stav vašeho požadavku");
define("ADMIN_SELECTION","Nejméně jedna položka musí být vybrána");
define("ADMIN_SAFETY","Jste si opravdu jistý, že chcete pustit tento skript?");
define("ADMIN_DONE","hotovo");
define("ADMIN_NOTBD","nic co by mělo být uděláno");
// new 4.3
define("ADMIN_OLD_GALAXIES","Odstranit předledy galaxií starší než &1 dny");
define("ADMIN_UNUSED_PLAYERS","Odstranit hráče, kteří se nevyskytují v žádném přehledu galaxie");
// new 4.7
define("ADMIN_OLD_ACTIVITIES","Odstraň aktivity hráče starší než &1 dnů");
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
define("ERRORPAGE_PAGEFORWARD","Klikněte zde, pokud váš prohlížeč stránku ještě nepřesměroval");
define("ERRORPAGE_PERMISSION_DENIED","Nemáte povolení ke vstupu na tuto stránku. Klikněte pro návrat zpět.");

// new 4.7
/*********************************************************************
* fleet_movements.php
**********************************************************************/
define("FLEETS_TITLE","OGame Galaxytool - Pohyby letek");
define("FLEETS_ACTUAL_FLEETS","Probíhající pohyby letek");
define("FLEETS_YES",SHOW_YES);
define("FLEETS_NO",SHOW_NO);
define("FLEETS_DETAILS","Detaily");
define("FLEETS_MISSION_EXPEDITION","Expedice");
define("FLEETS_MISSION_COLONIZATION","Kolonizace");
define("FLEETS_MISSION_RECYCLE","Těžba");
define("FLEETS_MISSION_TRANSPORT","Transport");
define("FLEETS_MISSION_DEPLOYMENT","Rozmístění");
define("FLEETS_MISSION_ESPIONAGE","Špionáž");
define("FLEETS_MISSION_ACS_DEFEND","APP obrana");
define("FLEETS_MISSION_ATTACK","Útok");
define("FLEETS_MISSION_ACS_ATTACK","APP útok");
define("FLEETS_MISSION_MOON_DESTRUCTION","Zničení měsíce");
define("FLEETS_MISSION_MISSILE_ATTACK","Raketový útok");
define("FLEETS_NO_DATA","Data nenalezena");
// new 5.0
define("FLEETS_FLEET","Fleet");
define("FLEETS_ALL_FLEETS","Show all fleet movements");

/*********************************************************************
* parser_combat_reports.inc.php
**********************************************************************/
define("COMBAT_REPORT_OUDATED_GALAXYVIEW","Vaše data o galaxii jsou zastaralá. Prosím navštivte nejdřív výchozí a cílový systém!");

/*********************************************************************
* messages.php
**********************************************************************/
define("MESSAGES_TITLE","OGame Galaxytool - OGame Zprávy");
define("MESSAGES_PLAYERNAME","Jméno hráče");
define("MESSAGES_SUBJECT","Předmět");
define("MESSAGES_DATE","Datum");
define("MESSAGES_FILTER","Filtr");
define("MESSAGES_DELETE","Smazat zprávu");
define("MESSAGES_PUBLISH_DETAIL","Publikuj zprávu přidáním obsahu zprávy do upozornění pro hráče.");
define("MESSAGES_PUBLISH_HEADER","&sender poslal zprávu &recipient v &date:\n\n &message"); // &sender, &recipient, &date, &message replaced at runtime
define("MESSAGES_PLAYER_FILTER","Zprávy pro hráče");
// new 5.0
define("MESSAGES_CONTENT","Content");

/*********************************************************************
* combat_reports.php
**********************************************************************/
define("COMBATS_TITLE","OGame Galaxytool - Bitevní zprávy");
define("COMBATS_ATTACKER","Útočník");
define("COMBATS_DEFENDER","Obránce");
define("COMBATS_DATE","Datum");
define("COMBATS_OWNER","Vlastník");
define("COMBATS_WINNER","Vítěž");
define("COMBATS_COMBATREPORT","Bitevní zpráva");
define("COMBATS_COMBAT_AT","Bitva na");
define("COMBATS_LOST_UNITS","Ztracené jednotky");
define("COMBATS_LOOT","Kořist");
define("COMBATS_DEBRIS","Trosky");
define("COMBATS_AND","a");
define("COMBATS_PUBLISH","Zveřejnit zprávu");
define("COMBATS_UNPUBLISH","Odveřejnit zprávu (opět soukromá)");
define("COMBATS_DELETE","Smazat zprávu");
define("COMBATS_CHECK_ALL","Označit vše");
define("COMBATS_UNCHECK_ALL","Odznačit vše");
define("COMBATS_WITH_SELECTED","S vybranými");
define("COMBATS_PUBLIC_REPORTS","Veřejné zprávy");
define("COMBATS_YES",SHOW_YES); // no need for translation!
define("COMBATS_NO",SHOW_NO); // no need for translation!
define("COMBATS_SEARCH_OPTIONS","Možnosti hledání");
define("COMBATS_SEARCH","Hledej");
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