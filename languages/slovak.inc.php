<?php
/*
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
define("L_USERNAME","Užívateľské meno");
define("L_PASSWORD","Heslo");
define("L_LOGINFAILURE","Užívateľské meno alebo heslo je nesprávne, alebo doposiaľ nemáte aktivovaný účet.");
define("L_TOKENFAILURE","Váš prihlasovací kľúč je nesprávny alebo Váš účet ešte nebol potvrdený.");
define("L_LOGINTEXT","Prihláste sa prosím.");
define("L_LANGUAGE","Dostupné jazyky:");
define("L_TIMEOUT","Čas spojenia vypršal!");
define("L_REGISTER","Registrácia");
define("L_PWLOST","Zabudnuté heslo");
define("INDEX_TITLE","OGame Galaxietool - Prehľad");
define("INDEX_INFO","Informácie");
define("INDEX_ENTRIES","Počet všetkých systémov");
define("INDEX_ENTRIES_LASTWEEK","Nové systémy za minulý týždeň");
define("INDEX_ENTRIES_TO_OLD","Systémy staršie ako jeden mesiac");
define("INDEX_REGISTERED_USERS","Registrovaní užívatelia");
define("INDEX_PAGEFORWARD","Ak Váš prehliadač nepodporuje presmerovanie, kliknite prosím sem.");
define("INDEX_NOTICES","Poznámky");
define("INDEX_PLAYERS","Štatistika hráčov");
define("INDEX_ALLIES","Štatistika spojencov");
define("INDEX_REPORTS","Špionážne správy");
define("INDEX_VERSION","Kontrola novej verzie na stiahnutie");
define("INDEX_LATEST_VERSION","Novšia verzia nie je dostupná");
define("INDEX_SHOUTBOX","Shoutbox");
define("INDEX_NOENTRY","Žiaden odkaz");
define("INDEX_COMMENT","Váš odkaz");
define("INDEX_INSERT","Vložiť");
define("INDEX_UMOD","Hráčov s zmrazeným účtom");
define("INDEX_NO_MOONS","Počet Mesiacov");
define("INDEX_NO_EMPTY_SYSTEMS","Počet prázdnych systémov");
define("INDEX_NO_FULL_SYSTEMS","Počet úplne zaplnených systémov");
define("INDEX_NO_TARGETS","Počet možných cieľov");
// 4.0
define("INDEX_USERINFO","Užívatelia");
define("INDEX_ONLINE","Momentálne online");
define("INDEX_TODAY","Dnes online");
define("INDEX_ALL","Celkový počet prihlásení");
// 4.3.7
define("GENERAL_LOAD_FORM","Načítať údaje formulára");
define("GENERAL_SAVE_FORM","Uložiť údaje formulára");
define("GENERAL_SAVE_AS_TEXT","Uložiť ako");
define("GENERAL_SAVE","Uložiť");
// 4.8
define("INDEX_USERMANAGEMENT","Prehľad aktivácie");
define("INDEX_NEEDADMIN","Účty na odomknutie");
define("INDEX_NEEDEMAIL","Nepotvrdené účty");
define("INDEX_TOOLBAR_INFO","Galaxytool plugin informácie");
define("INDEX_TOOLBAR_URL","Galaxytool URL adresa");
define("INDEX_TOOLBAR_VERSION_REQUIRED","Vyžaduje verziu Galaxytool pluginu aspoň");
define("INDEX_TOOLBAR_INSTALL_GUIDE","Inštrukcie pre inštaláciu pluginu");
define("INDEX_TOOLBAR_TOKEN","Prihlasovací kľúč");
define("INDEX_TOOLBAR_NEW_TOKEN","Získať nový kľúč");
define("INDEX_PLAYERS_WITH_N_PLANETS","Hráči s viac než &1 planétami");
define("INDEX_GETTING_STARTED","Začíname s Galaxytool");
define("INDEX_GETTING_STARTED1","Vitajte v Galaxytool!");
define("INDEX_GETTING_STARTED2","Galaxytool Vám pomôže analyzovať čo sa deje vo Vašom OGame vesmíre &1");
define("INDEX_GETTING_STARTED3","Predtým, ako môžete analyzovať dáta, ich musíte najskôr vložiť. Na to potrebujete plugin pre prehliadač ako &1 pre Firefox.");
define("INDEX_GETTING_STARTED4","Po nainštalovaní pluginu sa pohybujte v OGame stránkach ako zvyčajne a v ľavom hornom rohu uvidíte informačné okno vždy, keď sa posielajú dáta do Galaxytoolu.");
define("INDEX_GETTING_STARTED5","Akonáhle plugin vloží dáta do Galaxytoolu, môžete začať analyzovať, kde majú hráči kolónie, koľko ich majú, aké správy o nich existujú alebo kedy sú najčastejšie aktívne.");
define("INDEX_GETTING_STARTED6","Ale pomôže Vám to aj analyzovať ako postupujete ak sa porovnáte so svojími protivníkmi alebo analýzou Vaších bojových správ aby ste videli, koľko ste ulúpili za posledné dni alebo týždne.");
define("INDEX_GETTING_WIKIPAGE","Galaxytool poskytuje mnoho ďalších funkcií.");
define("INDEX_GETTING_WIKIPAGE2","Pozrite si ich na našej wiki stránke.");
define("INDEX_GETTING_BOARD","Pre spätnú väzbu alebo návrhy môžete použiť naše fórum:");
define("INDEX_GETTING_CHAT1","Alebo nás navštíviť v chatovacej miestnosti:");
define("INDEX_GETTING_CHAT2","Nie sme online 24/7 ale trávime tam veľa nášho voľného času, tak buďte trpezlivý.");
// new 5.0
define("INDEX_CLOSE","Zavrieť");
define("INDEX_LOGIN","Prihlásiť");
define("GENERAL_REQUIRED_FIELDS","Prosím, vyplňte všetky požadované polia");
define("INDEX_MESSAGES","Správy");
define("INDEX_EXAMPLE","Príklad");
define("INDEX_INVALID_DATA","Neplatné dáta");
define("GENERAL_COLUMN_HIDE_TITLE","Spravovať stĺpce");
define("GENERAL_COLUMN_HIDE_INFO","Prosím, vyberte, ktoré stĺpce chcete vidieť v tabuľke.");
define("GENERAL_ENTRIES_DELETED","&1 záznamov vymazaných");
define("GENERAL_APPLY","Použiť");
define("STARTPAGE_GALAXYTOOL_DESCR","<em>Galaxytool</em> je nástroj na prehliadačovú hru OGame.");
define("GENERAL_OVERWRITE","Prepísať duplicitný záznam");
define("GENERAL_OVERWRITE_QUESTION","Prepísať?");
define("INDEX_OWN_LOGINS","Vaše prihlásenia");
define("GENERAL_OPEN_IN_NEW_WINDOW","Otvoriť odkaz v novom okne");
// 5.1
define("GENERAL_UNIT_OF_MEASURE_DAYS","Days");

/*********************************************************************/
/***************************** internal ******************************/
/*********************************************************************/
// index.php
define("PROGRAM_NAME","OGame Galaxytool");
define("SHORTNAME","Galaxytool");
define("BACK_INDEX","Späť na hlavnú stranu");
define("UNIVERSE","Vesmír");

// search
define("MENU_INFO_LINKS","Informácie");
define("MENU_PAGE","Prehľad");
define("MENU_DB_SEARCH","Vyhľadať v databáze");
define("MENU_DB_NOTICES","Vyhľadať v poznámkach");
define("MENU_DB_REPORTS","Vyhľadať v správach");
define("MENU_GALAXYVIEW","Prezrieť Galaxiu");
define("MENU_STATISTICS","Štatistiky");
define("MENU_ALLYHISTORY","Historický prehľad");
// 4.7
define("MENU_FLEET_MOVEMENTS","Pohyby flotily");
define("MENU_COMBAT_REPORTS","Bojové správy");
define("MENU_MESSAGES","Správy z hry");

// insert / change
define("MENU_OPTION_LINKS","Možnosti");
define("MENU_DB_REFRESH","Vložiť do databázy");
define("MENU_NOTICES","Poznámky");
define("MENU_DB_STATUS","Stav databázy");
define("MENU_USEROPTIONS","Správa užívateľov");
define("MENU_USEROPTIONS2","Užívateľské voľby");
define("MENU_USEROPTIONS3","Informácie o užívateľovi");
// 4.2
define("MENU_ADMIN","Administrácia");
// 4.3.3
define("MENU_LOGOUT","Odhlásiť");

// Stuff
define("MENU_STUFF","Rôzne");
define("MENU_FORUM_THREAD","Vývojárske fórum");
define("MENU_DOWNLOADPAGE","Stiahnuť");
define("MENU_LANGUAGE","Jazyk");
define("MENU_HELP","Pomoc");
// 4.0
define("MENU_TOOLOPTIONS","Voľby Galaxytool");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1"," bolo vložené do databázy");
define("PARSER_ERROR1","Nepodarilo sa vložiť nasledujúce súradnice:");
define("PARSER_ERROR2","Nedá sa nájsť v databáze!");
define("PARSER_ERROR3","Nedá sa nájsť databázový server!");
define("PARSER_WRONG_UNIVERSE","Nesprávny vesmír - aktuálny: \"&1\"  očakávané: \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","OGame Galaxytool - Vyhľadávanie");
define("SHOW_SEARCH","Vyhľadať v databáze");
define("SHOW_ALLYSYMBOL","Aliančná značka");
define("SHOW_PLAYERNAME","Meno hráča");
define("SHOW_MOONS","Iba planéty s Mesiacom");
define("SHOW_NOTICES","Iba planéty s poznámkami");
define("SHOW_COLONIES","Iba planéty vhodné ku kolonizácii");
define("SHOW_YES","Áno");
define("SHOW_NO","Nie");
define("SHOW_SEARCHRANGE","Vzdialenosť");
define("SHOW_SEARCH_IN","Vyhľadať v galaxii");
define("SHOW_FROM_SYSTEM","od systému");
define("SHOW_FROM_PLANET","od pozície planéty");
define("SHOW_TO","do");
define("SHOW_DESCRIPTION","Môžete použiť zástupné znaky pre mená aliancií a hráčov. Tak môžete vyhľadať všetkých hráčov, ktorých meno obsahuje &quot;názov&quot; .<br />Vyplňte iba tie polia, ktoré potrebujete.");
define("SHOW_SORT_BY","Zotriediť podľa");
define("SHOW_GALASYSTEM","Galaxie/Systému");
define("SHOW_ALLYNAME","Názvov Aliancií");
define("SHOW_SEARCHBUTTON","Vyhľadať");
define("SHOW_ADDRESS","Adresa");
define("SHOW_ALLYSORT","Aliancie");
define("SHOW_PLANET","Meno planéty");
define("SHOW_STATUS","Stav");
define("SHOW_CURRENTNESS","Posledná aktualizácia");
define("SHOW_PLAYER_STATUS","Stav hráča");
define("SHOW_PLAYER_STATUS1","všetko");
define("SHOW_PLAYER_STATUS2","možné ciele");
define("SHOW_PLAYER_STATUS3","neaktívny");
define("SHOW_HITS","Záznamov");
define("SHOW_OF","z");
define("SHOW_ASC","vzostupne");
define("SHOW_DESC","zostupne");
define("SHOW_RESULTS","záznamov na stránku");
define("SHOW_MOON","Mesiac");
define("SHOW_UKMOONSIZE","neznáma");
define("SHOW_DF","DF");
define("SHOW_DF_LONG","Pole trosiek");
define("SHOW_METAL","M");
define("SHOW_METAL_LONG","Kov");
define("SHOW_CRYSTAL","C");
define("SHOW_CRYSTAL_LONG","Kryštály");
define("SHOW_BOTH","oboje dohromady");
define("SHOW_AT_LEAST","(najmenej)");
define("SHOW_DATE","Dátum");
define("SHOW_DATE_0","nezáleží");
define("SHOW_DATE_1","starší než");
define("SHOW_DATE_2","novší než");
define("SHOW_RANK","Poradie");
define("SHOW_FRANK","Poradie flotily");
define("SHOW_MEMBERS","Členovia");
define("SHOW_NOTRANKED","Nieje medzi prvými 1500.");
define("SHOW_NOTICERES","Poznámky");
define("SHOW_REPORTS","Iba planéty so správami");
define("SHOW_REPORTS_SHORT","Správy");
define("SHOW_NOTHING","Žiaden záznam nenájdený.");
define("SHOW_ALLIANCE_STATUS","Stav Aliancie");
define("SHOW_NO_STATUS","Stav nieje k dispozícii");
define("SHOW_NAP","NAP");
define("SHOW_ALLIED","Spojenec");
define("SHOW_WAR","Vojna");
define("SHOW_BOYCOTT","Bojkot");
define("SHOW_NEUTRAL","Neutrál");
define("SHOW_OWN","Vlastná Aliancia");
define("SHOW_WING","Wing");
// obsolete with 5.0
define("SHOW_EXT_OPTIONS1","Ukázať viac možností pre vyhľadávanie podľa vzdialenosti, poradia, dátumu alebo poľa trosiek.");
define("SHOW_EXT_OPTIONS2","Ukázať viac možností pre vyhľadávanie podľa kolónií, Mesiacov, správ, poznámok, stavu hráčov a diplomacie.");
define("SHOW_EXT_OPTIONS3","Ukázať viac možností pre triedenie nájdených výsledkov.");
// new 5.0
define("SHOW_EXTENDED","rozšírené vyhľadávanie");
define("SHOW_MOON_SELECTION","Planéta s mesiacom");
define("SHOW_REPORT_SELECTION","Planéta so správou");
define("SHOW_FILTER_BY","Vylúčiť zo zoznamu");
define("SHOW_FILTER_NONE","nič");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Show players without score changes within the last few days");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","OGame Galaxytool - Stav");
define("STATUS_DB_STATUS","Stav databázy");
define("STATUS_COLOR","Farba");
define("STATUS_AGE1","Záznamy 1 deň staré.");
define("STATUS_AGE2","Záznamy 2 - 4 dni staré.");
define("STATUS_AGE3","Záznamy 4 - 7 dní staré.");
define("STATUS_AGE4","Záznamy 1 - 2 týždne staré.");
define("STATUS_AGE5","Záznamy 2 - 4 týždne staré.");
define("STATUS_AGE6","Záznamy staršie než 1 mesiac!");
define("STATUS_AGE7","Žiadne dostupné záznamy.");
define("STATUS_ON","on");
define("STYLES_COLOR1","Farba 1");
define("STYLES_COLOR2","Farba 2");
define("STYLES_COLOR3","Farba 3");
define("STYLES_COLOR4","Farba 4");
define("STYLES_COLOR5","Farba 5");
define("STYLES_COLOR6","Farba 6");
define("STYLES_COLOR7","Farba 7");
// 4.8
define("STATUS_DB_LEGEND","Legenda");
define("STATUS_GALAXY","Prehľad galaxie");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","Správa užívateľov");
define("USER_NAMES","Užívateľ");
define("USER_ERROR","Chyba");
define("USER_NEWUSER","Nový užívateľ");
define("USER_OPTIONS","Voľby");
define("USER_USERNAME","Užívateľské meno");
define("USER_PASSWORD","Heslo");
define("USER_PASSWORD_CONFIRM","Potvrdiť heslo");
define("USER_GALAXY","Galaxia");
define("USER_SEARCH","Vyhľadať");
define("USER_INSERT","Vložiť");
define("USER_DELETE","Zmazať");
define("USER_DELETE_ENTRY","Chcete zmazať užívateľa: ");
define("USER_STATUS","Prezrieť štatistiky");
define("USER_STYLES","Upraviť vzhľad");
define("USER_SUBMIT","Odoslať");
define("USER_RESET","Resetovať");
define("USER_YES","Áno");
define("USER_NO","Nie");
define("USER_STYLEPATH","Cesta k styles.css");
define("USER_PROBES","Prezrieť/Odoslať špionážne správy");
define("USER_EMAIL","Email");
define("USER_ERROR1","Chybné heslo alebo neplatný email.");
define("USER_ERROR2","Neplatný Email.");
define("USER_INGAME","Meno v hre");
define("USER_ALLYTAG","Aliančná značka");
define("USER_ALLYHISTORY","Historický prehľad");
define("USER_DIPLOMATIC","Zmeniť Diplomatický stav");
define("USER_STATSPAGE","počet záznamov na štatistickej stránke");
define("USER_LINKS","Odkazy");
define("USER_LINKS2","Formát:<br>text;url<br>text2;url2<br>text3;url3");
define("USER_EXPORT_TITLE","Export farieb (BB Codes)");
define("USER_BB_COORDINATES","Súradnice");
define("USER_BB_MOON","Mesiac");
define("USER_BB_DEBRIS","Pole trosiek");
define("USER_BB_ALLY","Aliančné meno");
define("USER_BB_ALLYDETAILS","Detaily Aliancie");
define("USER_BB_PLAYERNAME","Meno hráča");
define("USER_BB_BANNED","bann");
define("USER_BB_VACATION","zmrazený účet");
define("USER_BB_NOOB","noob");
define("USER_BB_INACTIVE","Neaktívny");
define("USER_BB_LONGINACTIVE","Dlho neaktívny");
// new with 4.7
define("USER_DELETION","Vymazať");
define("USER_FLEETINFO",MENU_FLEET_MOVEMENTS);
define("USER_ACTIVITIES","Aktivity hráča");
define("USER_MAINTENANCE","Údržba Galaxytoolu");
define("USER_MANAGEMENT",MENU_USEROPTIONS);
define("USER_DELETE_MY_COMBAT_REPORTS","Vymazať moje bojové správy");
define("USER_DELETE_MY_MESSAGES","Vymazať moje správy");
define("USER_DELETE_MY_FLEETMOVES","Vymazať moje pohyby flotily");
// 4.8
define("USER_DELETE_MY_COMBAT_REPORTS_LIMITED","Vymazať moje bojové správy staršie ako &1 dní");
define("USER_DELETE_MY_MESSAGES_LIMITED","Vymazať moje správy staršie než &1 dní");
define("USER_TABLE_ENTRIES","Počet výsledkov vyhľadávania pre každú stranu");
// 5.0
define("USER_EXISTS","Používateľ už existuje");
define("USER_BB_OUTLAW","Bandita");
define("USER_INVALID_URL","URL adresa &1 za zdá byť neplatná - URL bude ignorovaná");

/*********************************************************************
* galaxyview.php
*********************************************************************/
define("VIEW_TITLE","OGame Galaxytool - Prehľad Galaxie");
define("VIEW_NODATA","Údaje nie sú dostupné.");
define("VIEW_GALAXY","Galaxia");
define("VIEW_SYSTEM","Systém");
define("VIEW_POSITION","Poz.");
define("VIEW_PLANET","Planéta");
define("VIEW_MOON","Mesiac");
define("VIEW_TF","DF");
define("VIEW_PLAYER","Hráč");
define("VIEW_PLAYER_ADD","(Poradie / Stav)");
define("VIEW_ALLY","Aliancia");
define("VIEW_ALLY_ADD","(Poradie / Člen)");
define("VIEW_METAL","M");
define("VIEW_CRYSTAL","C");
define("VIEW_COLONISED","Planét obsadených");
define("VIEW_UKMOONSIZE","neznáme");
define("VIEW_BACK","späť");
define("VIEW_NOTICE","Poznámky");
define("VIEW_REPORTS","Správy");
define("VIEW_MOONPHALANX","Nasledujúce mesiace môžu skenovať tento systém");
define("VIEW_NOMOONS","Žiaden mesiac nebol nájdený");
define("VIEW_IRAKS","Nasledujúce planéty môžu byť zasiahnuté medziplanetárnymi raketami");
define("VIEW_NOIRAKS","Žiadne medziplanetárne rakety neboli nájdené");
// 4.0
define("VIEW_MOON_DESTROY_CHANCE","Šanca na zničenie Mesiaca");
define("VIEW_CHANCE_WITH_ONE","Šanca s jednou Hviezdou smrti");
define("VIEW_CHANCE_WITH_N","Šanca s");
define("VIEW_DEATH_STARS","Hviezda smrti");
define("VIEW_DS_DESTROY_CHANCE","Šanca na stratu Hviezdy smrti");
define("VIEW_TOP","Nahor");
// new 4.3.5
define("VIEW_GO","go");
// new 5.0
define("VIEW_DIAMETER","Priemer");

/*********************************************************************
* change_password.php
**********************************************************************/
define("PW_TITLE","OGame Galaxytool - zmena hesla");
define("OLD_PASSWORD","staré heslo");
define("NEW_PASSWORD","nové heslo");
define("CONFIRM_NEW_PASSWORD","potvrdiť nové heslo");
define("PW_MISMATCH","Heslá sa nezhodujú!");
define("PW_ERROR","Staré heslo bolo chybne zadané!");
define("UPDATE_DONE","Zmena úspešná.");
// new 4.2
define("TIMEZONE_OFFSET","Posun časovej zóny voči serveru");
// new 4.3
define("DELETE_ACCOUNT","Zmaž tento Galaxytool účet");
define("DELETE_ACCOUNT_SAFETY_REQUEST","Skutočne si želáte zmazať tento Galaxytool účet?");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","Autorizácia");
define("CH_PASSWD_ADMIN","Admin");
// new 4.7
define("TIMEZONE_OGAME_OFFSET","Rozdiel od časovej zóny OGame servera");
// new 4.8
define("CH_PASSWD_USER_LANGUAGE","Zmeniť na tento jazyk po prihlásení");
define("CH_PASSWD_USER_LANGUAGE_NO_CHANGE","Žiadna zmena");
define("CH_PASSWD_EXPAND","Rozbalené");
define("CH_PASSWD_COLLAPSE","Zbalené");
define("CH_PASSWD_HIDDEN","Skryté");
define("CH_PASSWD_GETTING_STARTED","Zobraziť 'Začíname' informácie po prihlásení");
define("CH_PASSWD_PLUGIN","Zobraziť informácie o plugine po prihlásení");

/*********************************************************************
* notices.php
**********************************************************************/
define("NOTICE_TITLE","OGame Galaxytool - Poznámky");
define("NOTICE_HEADER","upraviť poznámky");
define("NOTICE_HEADER2","Upraviť vlastné poznámky");
define("NOTICE_PUBLIC","Prístupné pre ostatných?");
define("NOTICE_YES","áno");
define("NOTICE_NO","nie");
define("NOTICE_TEXT","Text poznámky");
define("NOTICE_SAVE","Uložiť");
define("NOTICE_DELETED","Záznam zmazaný");
define("NOTICE_SAVED","Záznam uložený.");
define("NOTICE_RESULTS","Všetky výsledky");
define("NOTICE_USER","Užívateľ");
define("NOTICE_DATE","Dátum");
define("NOTICE_EDIT","Upraviť");
define("NOTICE_DELETE","Zmazať");
define("NOTICE_NEW","Vytvoriť vlastný záznam");
define("NOTICE_NOTPUBLIC","Poznámka nie je verejná.");
define("NOTICE_ALL","vštko");
define("NOTICE_NONE",SHOW_FILTER_NONE);
define("NOTICE_SEARCH","Vyhľadať v Poznámkach");
define("NOTICE_SEARCH_SHORT","Vyhľadať");
define("NOTICE_HITS","Záznamov");
define("NOTICE_SHOWRESULTS","záznamov na stránku");
define("NOTICE_OF","vyp");
define("NOTICE_NOTHING","Žiadny záznam nebol nájdený");
// 4.0
define("NOTICE_CHARS","Znakov");
define("NOTICE_PLAYERNAME","Hráč");
define("NOTICE_SHOWALL","Zobraziť všetky poznámky");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","OGame Galaxytool - Špionážne správy");
define("REPORTS_RESOURCES","Suroviny");
define("REPORTS_FLEET","Flotily");
define("REPORTS_DEFENCE","Obrana");
define("REPORTS_BUILDINGS","Budovy");
define("REPORTS_TECHNOLOGY","Výskum");
define("REPORTS_MOON","Mesiac");
define("REPORTS_SEARCH","Vyhľadať v špionážnych správach");
define("REPORTS_SEARCH_SHORT","Vyhľadať");
define("REPORTS_HITS","Záznamov");
define("REPORTS_NOTHING","Žiadny záznam nebol nájdený");
define("REPORTS_ADDRESS","Adresa");
define("REPORTS_CURRENTNESS","Aktualizácia");
define("REPORTS_PLAYERNAME","Meno hráča");
define("REPORTS_ALLY","Aliancia");
define("REPORTS_VIEW","Prezrieť správu");
define("REPORTS_SEARCH_IN","Vyhľadať v Galaxii");
define("REPORTS_FROM_SYSTEM","od Systému");
define("REPORTS_TO","do");
define("REPORTS_DELETE","Zmazať");
define("REPORTS_DELETED","Záznam zmazaný");
define("REPORTS_RESULTS","záznamov na stránku");
define("REPORTS_OF","z");
define("REPORTS_DATE","Dátum");
define("REPORTS_DATE_0","nezáleží");
define("REPORTS_DATE_1","starší než");
define("REPORTS_DATE_2","novší než");
define("REPORTS_NOTICES","Poznámky");
define("REPORTS_AT_LEAST_RESOURCES","Suroviny (najmenej)");
define("REPORTS_SEARCH_EXTENDED","rozšírené vyhľadávanie");
define("REPORTS_FLEET_RESIS","Flotila - skóre");
define("REPORTS_DEFENCE_RESIS","Obrana - skóre");
define("REPORTS_ALL_RESIS","celkom skóre");
define("REPORTS_TECHS","Technológie");
define("REPORTS_UNKNOWN_ENTRIES","neznámý záznam");
define("REPORTS_PARTLY_INSERTED","čiastočně vložené");
define("REPORTS_FOR_ALL_RES","pre všetky suroviny");
define("REPORTS_FOR_TF","pre pole trosiek");
define("REPORTS_KT","Malých transportérov");
define("REPORTS_GT","Veľkých transportérov");
define("REPORTS_SS","Bojových lodí");
define("REPORTS_REC","Recyklátorov");
define("REPORTS_RAIDABLE","iba ciele vhodné na útok");
define("REPORTS_ALL_RESOURCES","všetky suroviny");
// 4.0
define("REPORTS_STUFF","Rôzne");
define("REPORTS_SPEEDSIM","Simulácia pomocou Speedsim");
define("REPORTS_DRAGOSIM","Simulácia pomocou Dragosim");
define("REPORTS_STATUS","Stav");
define("REPORTS_ERROR","Vyskytla sa chyba");
// 4.2
define("REPORTS_OWN_REPORTS","Iba moje správy");
// 4.3.3
define("REPORTS_UPLOAD_BY","Správu nahral");
// 4.4
define("REPORTS_DEPTH","Hĺbka správy");
define("REPORTS_FLEET_SCORE","Skóre flotily");
define("REPORTS_DEFENCE_SCORE","Skóre obrany");
// 5.0
define("REPORTS_HOURS","hodín");
define("REPORTS_MAX_RESULTS_HIT","Vaše hľadanie vrátilo viac, než &1 výsledkov. Zobrazuje sa iba prvých &1 výsledkov. Pre získanie menej výsledkov upravte Vašu vyhľadávaciu požiadavku.");
define("REPORTS_OSIMULATE","Simulovať s OSimulate");
define("REPORTS_SHOW_ONLY","Ukáazať iba");
define("REPORTS_SHOW_PLANETS","Planéty");
define("REPORTS_SHOW_MOONS","Mesiace");
define("REPORTS_OWNER","Správy, ktoré vlastní");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","OGame Galaxytool - Štatistiky");
define("STATS_TBLHEAD","Štatistiky");
define("STATS_RANK","Poradie");
define("STATS_PLAYERNAME","Meno hráča");
define("STATS_ALLYNAME","Aliančná značka");
define("STATS_SCORE","Skóre");
define("STATS_FLEET","Flotila");
define("STATS_RESEARCH","Výskum");
define("STATS_MEMBERS","Členovia");
define("STATS_STATUS","Stav");
define("STATS_NOTHING","Stav nie je k dispozícii");
define("STATS_NAP","NAP");
define("STATS_ALLIED","Spojenec");
define("STATS_WAR","Vojna");
define("STATS_BOYCOTT","Bojkot");
define("STATS_NEUTRAL","Neutrál");
define("STATS_OWN","Vlastná Aliancia");
define("STATS_WING","Wing");
define("STATS_UPDATE","Záznam z");
define("STATS_PLAYERSTATS","Stav hráča");
define("STATS_ALLYSTATS","Stav Aliancie");
// 4.0
define("STATS_DELETE","Chcete zmazať tento záznam?");
define("STATS_CONFIRM_DELETE","Skutočne chcete zmazať tento záznam?");
define("STATS_CHANGE_PLAYER_STATUS","Stav hráča");
define("STATS_CHANGE_ALLIANCE_STATUS","Stav Aliancie");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","Všetkým členom tejto alinacie bol vybraný rovnaký stav. Akýkoľvek predchodzí stav bude zmenený. Stav jednotlivých hráčov môžete meniť dodatočne.");
define("STATS_UNKNOWN","Zbytok");
define("STATS_DETAILS","Detaily pre");
// 4.4
define("STATS_PLAYERSTATUS",SHOW_PLAYER_STATUS);
define("STATS_IGNORE_STATUS",SHOW_PLAYER_STATUS1);
define("STATS_ACTIVE","aktívny");
define("STATS_INACTIVE",USER_BB_INACTIVE);
define("STATS_BANNED",USER_BB_BANNED);
define("STATS_VACATION",USER_BB_VACATION);
define("STATS_NOOB",USER_BB_NOOB);
// 4.8
define("STATS_YES",SHOW_YES); // reuse SHOW definitions if applicable
define("STATS_NO",SHOW_NO);
define("STATS_SEARCH",USER_SEARCH);
define("STATS_SHOW_GRAPH","Zobraziť detaily rozdelenia bodov");
define("STATS_LONG_INACTIVE",USER_BB_LONGINACTIVE);
// 4.9
define("STATS_STANDARD","Štandardné body");
define("STATS_MILITARY","Armádne body");
define("STATS_ECONOMY","Ekonomika");
define("STATS_HONOUR","Body cti");
define("STATS_MILITARY_BUILD","Získané vojenské body");
define("STATS_MILITARY_DESTROYED","Zničené vojenské body");
define("STATS_MILITARY_LOST","Stratené vojenské body");

/*********************************************************************
* register.php
**********************************************************************/
define("REGISTER_REGISTRATE","Registrácia");
define("REGISTER_LOGINNAME","Prihlasovacie meno");
define("REGISTER_PASSWORD","Heslo");
define("REGISTER_PASSWORD_CONFIRM","Potvrdenie hesla");
define("REGISTER_EMAIL","Email");
define("REGISTER_INGAME","Meno v hre");
define("REGISTER_ALLYTAG","Aliančná značka");
define("REGISTER_EMAILVERIFICATION","Kontrola Emailu");
define("REGISTER_EMAILTEXT","Prosím kliknite na tento odkaz k potvrdeniu Vašej registrácie do programu Galaxytool.");
define("REGISTER_ERROR1","Prihlasovacie meno už niekto používa.");
define("REGISTER_ERROR2","Chyba pri zasielaní emailu. Prosím, kontaktujte administrátora.");
define("REGISTER_ERROR3","Chyba pri zasielaní údajov do databázy!");
define("REGISTER_INFO1","Váš účet bol vytvorený.");
define("REGISTER_INFO2","Kliknite prosím na odkaz v emaili pre potvrdenie Vašej registríácie.");
define("REGISTER_INFO3","Zriadenie účtu potvrdené. Administrátor Vám ho v dohľadnej dobe aktivuje.");
define("REGISTER_BUTTON","Späť na hlavnú stranu");
define("REGISTER_NEW_SUBJECT","Bol zaregistrovaný nový užívateľ.");
define("REGISTER_NEW_MAILTEXT","Nový užívateľ sa zaregistroval.");
// new 4.2
define("REGISTER_BACK","Späť na prvú stranu");
// new 4.3.5
define("REGISTER_MISSING_FIELDS","Zadajte všetky požadované údaje");
// new 4.8
define("REGISTER_ERROR4","Emailová adresa je neplatná.");
define("REGISTER_ERROR5","Heslá sa nezhodujú.");
define("REGISTER_PWS","Sila hesla");
define("REGISTER_PWS0","veľmi slabé");
define("REGISTER_PWS1","slabé");
define("REGISTER_PWS2","dobré");
define("REGISTER_PWS3","silné");
define("REGISTER_PWS4","veľmi silné");
// new 5.0
define("REGISTER_EMAIL_USED","Emailová adresa sa už používa");

/*********************************************************************
* lost_password.php
**********************************************************************/
define("LOSTPW_TITLE","Zabudnuté heslo");
define("LOSTPW_INFO2","Nové heslo bolo vygenerované a zaslané na Váš email.");
define("LOSTPW_BUTTON1","dostať nové heslo");
define("LOSTPW_BUTTON2","Späť na hlavnú stranu");
define("LOSTPW_LOGINNAME","Prihlasovacie meno");
define("LOSTPW_EMAIL","Email");
define("LOSTPW_ERROR1","Chyba pri zasielaní údajov do databázy.");
define("LOSTPW_ERROR2","Nebol nájdený žiaden zhodný záznam.");
define("LOSTPW_ERROR3","Chyba pri zasielaní emailu. Prosím, kontaktujte administrátora.");
define("LOSTPW_EMAIL_SUBJECT","Vyžaduje sa Vaše nové heslo");
define("LOSTPW_EMAIL_TEXT1","Toto sú Vaše nové prihlasovacie údaje do Galaxytool");
define("LOSTPW_EMAIL_TEXT2","Užívateľské meno");
define("LOSTPW_EMAIL_TEXT3","Heslo");
// new 5.0
define("LOSTPW_INFO1","Obdržíte email na potvrdenie požiadavky o resetovanie hesla.");
define("LOSTPW_CONFIRM_RESET_SUBJECT","Stratené heslo?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","Ahoj,\n\nPožiadali ste o resetovanie hesla pre Galaxytool. Pre vygenerovanie nového hesla kliknite na následovný link:");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","OGame Galaxytool - Informácie o užívateľovi");
define("USERINFO_NAMES","Všetci užívatelia tohto nástroja");
define("USERINFO_DETAIL","detailné informácie o");
define("USERINFO_ERROR1","Žiaden užívateľ s týmto ID!");
define("USERINFO_USERNAME","Prihlasovacie meno");
define("USERINFO_INGAME","Meno v hre");
define("USERINFO_EMAIL","Email");
define("USERINFO_ALLYTAG","Aliancia");
define("USERINFO_STYLEPATH","Skin");
define("USERINFO_STATUS","Stav");
define("USERINFO_ACTIVATE","Aktivovať hráča");
define("USERINFO_LOGINS","Počet prihlásení");
define("USERINFO_LASTLOGIN","Posledné prihlásenie");
define("USERINFO_DATA","Informácie o zadaných Systémoch");
define("USERINFO_NODATA","Tento užívateľ zatiaľ nevložil žiadny Systém!");
define("USERINFO_GALAXY","Galaxia");
define("USERINFO_SYSTEMS","Počet Systémov");
define("USERINFO_IP","IP adresa");
define("USERINFO_LOGINTIME","prihlásenie");
define("USERINFO_NOLOGIN","Užívateľ sa zatiaľ neprihlásil.");
define("USERINFO_LAST_GALAXYUPDATE","Posledný vložený Prehľad Galaxie");
define("USERINFO_LAST_PUBLIC_NOTICE","Posledná verejná poznámka");
define("USERINFO_LAST_PRIVATE_NOTICE","Posledná súkromná poznámka");
define("USERINFO_NUMBEROF_PUBLIC_NOTICE","Počet verejných poznámok");
define("USERINFO_NUMBEROF_PRIVATE_NOTICE","Počet súkromných poznámok");
define("USERINFO_ACTIVATED","Aktivovaných účtov");
define("USERINFO_ACTIVATIONTEXT","Administrátor Galaxytool aktivoval Váš účet.\n\nUžijte si nástroj Galaxytool!");
// new 4.8
define("USERINFO_LAST_SUBMIT","Posledné vloženie informácie");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","OGame Galaxytool - História Aliancie");
define("ALLYHISTORY_TBLHEAD","Historický prehľad");
define("ALLYHISTORY_PLAYERNAME","Meno hráča");
define("ALLYHISTORY_ALLYNAME","Aliancia");
define("ALLYHISTORY_LASTMONTH","Posledný mesiac"); // changed at 4.0
define("ALLYHISTORY_ALL_DATA","Všetky dostupné informácie"); // new 4.0
define("ALLYHISTORY_SHOW","Zobraziť štatistiky");
define("ALLYHISTORY_TIMESPAN","Obdobie");
define("ALLYHISTORY_PROGESS","Vývoj");
define("ALLYHISTORY_SCORE","Body");
define("ALLYHISTORY_FSCORE","Bodov za flotily"); // new 4.0
define("ALLYHISTORY_RSCORE","Bodov za výzkum"); // new 4.0
define("ALLYHISTORY_MEMBER","Členovia"); // new 4.0
define("ALLYHISTORY_NOTHING","žiadne záznamy");
define("ALLYHISTORY_DETAILS","Detaily");
define("ALLYHISTORY_SHOW_ADDRESS","Súradnice");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","Informácie o hráčoch");
define("DETAILEDINFO_ALLYINFO_TITLE","Informácie o aliancii");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","Detailné informácie o hráčovi");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","Detailné informácie o aliancii");
define("DETAILEDINFO_NO_ALLIANCE","nič");
define("DETAILEDINFO_SCORE","Štatistika bodov");
define("DETAILEDINFO_FLEET","Štatistika flotily");
define("DETAILEDINFO_RESEARCH","Štatistika výskumu");
define("DETAILEDINFO_RANK","Poradie");
define("DETAILEDINFO_POINTS","Body");
define("DETAILEDINFO_KNOWN_PLANETS","známe planéty");
define("DETAILEDINFO_MOONS","známych Mesiacov");
define("DETAILEDINFO_PHALANX_AREA","Oblasť Falangy");
define("DETAILEDINFO_NO_PHALANX_AREA","Senzor Falangy nenájdený");
define("DETAILEDINFO_NOTICES","Poznámky");
define("DETAILEDINFO_NO_NOTICES","Žiadna poznámka nebola nájdená");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","predchádzajúca Aliancia");
define("DETAILEDINFO_RESOURCES_PER_HOUR","Surovín za hodinu");
define("DETAILEDINFO_RESOURCES_PER_DAY","Surovín za deň");
define("DETAILEDINFO_RESOURCES_PER_WEEK","Surovín za týždeň");
define("DETAILEDINFO_RESOURCES_PER_MONTH","Surovín za mesiac (30 dní)");
define("DETAILEDINFO_METAL","Kov");
define("DETAILEDINFO_CRYSTAL","Kryštály");
define("DETAILEDINFO_DEUTERIUM","Deutérium");
define("DETAILEDINFO_UNKNOWN","neznáme");
define("DETAILEDINFO_SCORE_DISTRIBUTION","Rozdelenie bodov");
// new 4.2
define("DETAILEDINFO_GENERAL","Detaily");
define("DETAILEDINFO_MEMBERS","Členovia");
define("DETAILEDINFO_GRAPHS","Grafy");
define("DETAILEDINFO_RESOURCES","Zdroje");
define("DETAILEDINFO_FLEET_TAB","Flotila");
define("DETAILEDINFO_TECH","Výskum");
define("DETAILEDINFO_FLEET_DETAIL","Spolu / (priemer hráčov) zo všetkých dostupných záznamov"); ////
define("DETAILEDINFO_TECH_DETAIL","Priemer zo všetkých dostupných informácií o hráčoch");
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
define("ADMIN_TITLE","Správa nástroja Glaxytool");
define("ADMIN_DISCLAMER","Upozornenie: Spustenie týchto skriptov je len na vlastné riziko! Väčšina z nich maže údaje.");
define("ADMIN_INCONSISTENCIES","Nezrovnalosti v databáze");
define("ADMIN_PLANETS","Planéty na pozícii 0 alebo väčšej ako 15");
define("ADMIN_GALAXIES","Vymaž galaxie väčšie ako &1 ");
define("ADMIN_PLAYERS","Vymaž hráčov bez OGame hráčskeho ID - vedie k duplikátnym hráčskym záznamom");
define("ADMIN_REPORTS","Zmaž reporty kde už viac neexistujú žiadne planéty");
define("ADMIN_MISC","Rôzne");
define("ADMIN_RESET","Reset Galaxytool (len tabuľky užívateľov a IP adries nebudú zmazané)");
define("ADMIN_OLD_PLAYERS","Zmaž záznamy hráča staršie ako &1 dní");
define("ADMIN_OLD_REPORTS","Zmaž správy staršie ako &1 dní");
define("ADMIN_LOADING","Nezatvárajte toto okno dokiaľ sa stránka nenačíta.");
define("ADMIN_STATUS","Stav Vaších požiadaviek");
define("ADMIN_SELECTION","Musí byť označený minimálne jeden záznam");
define("ADMIN_SAFETY","Ste si itý, že chcete spustiť tieto skripty?");
define("ADMIN_DONE","Hotovo");
define("ADMIN_NOTBD","Nie je čo vykonať");
// new 4.3
define("ADMIN_OLD_GALAXIES","Odstráň náhľady galaxie staršie ako &1 dní");
define("ADMIN_UNUSED_PLAYERS","Odstráň hráčov, ktorý sa neobjavili v žiadnom náhľade na galaxiu");
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
define("ERRORPAGE_PAGEFORWARD","Kliknite sem, pokiaľ tvoj prehliadač nepodporuje presmerovanie.");
define("ERRORPAGE_PERMISSION_DENIED","Nemáte oprávnenie vstúpiť na tútu stránku. kliknite späť.");

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