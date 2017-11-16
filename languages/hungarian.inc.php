<?php
/*
 * defines the characters used in OGame to indicate player status
 */
define("PLAYER_BANNED","b");
define("PLAYER_VACATION_MODE","v");
define("PLAYER_NOOB","n");
define("PLAYER_INACTIVE","i");
define("PLAYER_LONG_INACTIVE","I");
define("PLAYER_OUTLAW","tk");

/*********************************************************************/
/***************************** public ********************************/
/*********************************************************************/
//index.php
define("L_USERNAME","Felhasználónév");
define("L_PASSWORD","Jelszó");
define("L_LOGINFAILURE","A felhasználónév vagy a jelszó hibás, vagy a felhasználóneved még nincs aktiválva.");
define("L_TOKENFAILURE","Your logon key is wrong or your account is not activated yet.");
define("L_LOGINTEXT","Kérlek jelentkezz be.");
define("L_LANGUAGE","Elérhető nyelvek:");
define("L_TIMEOUT","Időtúllépés!");
define("L_REGISTER","Regisztráció");
define("L_PWLOST","Elfelejtett jelszó");
define("INDEX_TITLE","OGame Galaxietool - Áttekintés");
define("INDEX_INFO","Információ");
define("INDEX_ENTRIES","Összes rendszer:");
define("INDEX_ENTRIES_LASTWEEK","Új rendszerek múlt héten");
define("INDEX_ENTRIES_TO_OLD","Egy hónapnál régebbi rendszerek");
define("INDEX_REGISTERED_USERS","Regisztrált felhasználók");
define("INDEX_PAGEFORWARD","Ha a böngésződ nem támogatja a továbbirányítást, kérlek kattints ide.");
define("INDEX_NOTICES","Megjegyzések");
define("INDEX_PLAYERS","Játékos statisztikák");
define("INDEX_ALLIES","Szövetség statisztikák");
define("INDEX_REPORTS","Kémjelentések");
define("INDEX_VERSION","Utolsó letölthető verzió");
define("INDEX_LATEST_VERSION","Nincs újabb verzió");
define("INDEX_SHOUTBOX","Üzenőfal");
define("INDEX_NOENTRY","Nincs még üzenet");
define("INDEX_COMMENT","Üzeneted");
define("INDEX_INSERT","Elküldés");
define("INDEX_UMOD","Játékos vakáció módban");
define("INDEX_NO_MOONS","Holdak száma");
define("INDEX_NO_EMPTY_SYSTEMS","Üres rendszerek száma");
define("INDEX_NO_FULL_SYSTEMS","Teljesen kolonizált rendszerek száma");
define("INDEX_NO_TARGETS","Lehetséges célpontok száma");
// 4.0
define("INDEX_USERINFO","Felhasználók");
define("INDEX_ONLINE","Most online");
define("INDEX_TODAY","Ma online");
define("INDEX_ALL","Összes bejelentkezés");
// 4.3.7
define("GENERAL_LOAD_FORM","Adatok betöltése");
define("GENERAL_SAVE_FORM","Adatok mentése");
define("GENERAL_SAVE_AS_TEXT","Mentés mint");
define("GENERAL_SAVE","Mentés");
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
define("GENERAL_OPEN_IN_NEW_WINDOW","Megnyitás új ablakban");
// 5.1
define("GENERAL_UNIT_OF_MEASURE_DAYS","Days");

/*********************************************************************/
/***************************** internal ******************************/
/*********************************************************************/
// index.php
define("PROGRAM_NAME","OGame Galaxytool");
define("SHORTNAME","Galaxytool");
define("BACK_INDEX","Vissza a főoldalra");
define("UNIVERSE","Univerzum");

// search
define("MENU_INFO_LINKS","Információ");
define("MENU_PAGE","Áttekintés");
define("MENU_DB_SEARCH","Keresés az adatbázisban");
define("MENU_DB_NOTICES","Keresés a megjegyzésekben");
define("MENU_DB_REPORTS","Keresés a jelentésekben");
define("MENU_GALAXYVIEW","Galaxis megtekintése");
define("MENU_STATISTICS","Statisztikák");
define("MENU_ALLYHISTORY","Történelmi áttekintés");
// 4.7
define("MENU_FLEET_MOVEMENTS","Fleet movements");
define("MENU_COMBAT_REPORTS","Combat reports");
define("MENU_MESSAGES","Ingame messages");

// insert / change
define("MENU_OPTION_LINKS","Beállítások");
define("MENU_DB_REFRESH","Adatbázisba beillesztés");
define("MENU_NOTICES","Megjegyzések");
define("MENU_DB_STATUS","Adatbázis állapota");
define("MENU_USEROPTIONS","Felhasználó menedzselése");
define("MENU_USEROPTIONS2","Felhasználói beállítások");
define("MENU_USEROPTIONS3","Felhasználói információ");
// 4.2
define("MENU_ADMIN","Adminisztráció");
// 4.3.3
define("MENU_LOGOUT","Kijelentkezés");

// Stuff
define("MENU_STUFF","Egyebek");
define("MENU_FORUM_THREAD","Fejlesztői fórum");
define("MENU_DOWNLOADPAGE","Letöltés");
define("MENU_LANGUAGE","Nyelv");
define("MENU_HELP","Segítség");
// 4.0
define("MENU_TOOLOPTIONS","Galaxytool beállítások");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1"," be volt illesztve az adatbázisba");
define("PARSER_ERROR1","Hiba a következő koordináták beillestésekor:");
define("PARSER_ERROR2","Nem található az adatbazis!");
define("PARSER_ERROR3","Nem található az adatbazis szerver!");
define("PARSER_WRONG_UNIVERSE","Rossz univerzum - aktuális: \"&1\" elvárt: \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","OGame Galaxytool - Keresés");
define("SHOW_SEARCH","Keresés az adatbázisban");
define("SHOW_ALLYSYMBOL","Szövetség rövidítése");
define("SHOW_PLAYERNAME","Felhasználónév");
define("SHOW_MOONS","Csak a holddal rendelkező bolygók");
define("SHOW_NOTICES","Csak a megjegyzéssel rendelkező bolygók");
define("SHOW_COLONIES","Csak kolonizálható bolygók");
define("SHOW_YES","Igen");
define("SHOW_NO","Nem");
define("SHOW_SEARCHRANGE","Hely");
define("SHOW_SEARCH_IN","Keresés a galaxisban");
define("SHOW_FROM_SYSTEM","kezdő naprendszer");
define("SHOW_FROM_PLANET","kezdő bolygóhely");
define("SHOW_TO","addig");
define("SHOW_DESCRIPTION","Használhatod a *-ot helyettesítésnek a felhasználó vagy szövetség nevekben. Tehát megtalálhatod a játékosokat a nevük töredékével is.<br />Azokat a mezőket tölsd ki, amelyekre szűkiteni akarod a keresést.");
define("SHOW_SORT_BY","Rendezés módja");
define("SHOW_GALASYSTEM","Galaxis/Rendszer");
define("SHOW_ALLYNAME","Szövetség név");
define("SHOW_SEARCHBUTTON","Keresés");
define("SHOW_ADDRESS","Koordináták");
define("SHOW_ALLYSORT","Szövetség");
define("SHOW_PLANET","Bolygónév");
define("SHOW_STATUS","Státusz");
define("SHOW_CURRENTNESS","Utolsó felfrissítés");
define("SHOW_PLAYER_STATUS","Játékos státusz");
define("SHOW_PLAYER_STATUS1","mind");
define("SHOW_PLAYER_STATUS2","lehetséges célpont");
define("SHOW_PLAYER_STATUS3","inaktív");
define("SHOW_HITS","Találatok");
define("SHOW_OF","az összesből");
define("SHOW_ASC","növekvő");
define("SHOW_DESC","csökkenő");
define("SHOW_RESULTS","Találatok oldalanként");
define("SHOW_MOON","Hold");
define("SHOW_UKMOONSIZE","ismeretlen");
define("SHOW_DF","DF");
define("SHOW_DF_LONG","Törmelékmező");
define("SHOW_METAL","F");
define("SHOW_METAL_LONG","Fém");
define("SHOW_CRYSTAL","K");
define("SHOW_CRYSTAL_LONG","Kristály");
define("SHOW_BOTH","a kettő együtt");
define("SHOW_AT_LEAST","(legalább)");
define("SHOW_DATE","Dátum");
define("SHOW_DATE_0","bármikor");
define("SHOW_DATE_1","régebbi mint");
define("SHOW_DATE_2","újabb mint");
define("SHOW_RANK","Helyezés");
define("SHOW_FRANK","Flotta helyezés");
define("SHOW_MEMBERS","Tagok");
define("SHOW_NOTRANKED","Nincs a ranglistán.");
define("SHOW_NOTICERES","Megjegyzések");
define("SHOW_REPORTS","Csak jelentéssel rendelkező bolygók");
define("SHOW_REPORTS_SHORT","Jelentések");
define("SHOW_NOTHING","Nincs találat");
define("SHOW_ALLIANCE_STATUS","Szövetség státusz");
define("SHOW_NO_STATUS","Nincs státusz");
define("SHOW_NAP","M.N.T");
define("SHOW_ALLIED","Szövetség");
define("SHOW_WAR","Háború");
define("SHOW_BOYCOTT","Bojkott");
define("SHOW_NEUTRAL","Semleges");
define("SHOW_OWN","Saját szövetség");
define("SHOW_WING","Al-szövetség");
// obsolete with 5.0
define("SHOW_EXT_OPTIONS1","Több opció mutatása helyezés, helyzet, dátum vagy törmelékmező szerint.");
define("SHOW_EXT_OPTIONS2","Több opció mutatása kolóniák, holdak, jelentések, megjegyzések, játékos vagy diplomáciai státusz szerint.");
define("SHOW_EXT_OPTIONS3","Több opció mutatása a találatok rendezésére.");
// new 5.0
define("SHOW_EXTENDED","advanced search");
define("SHOW_MOON_SELECTION","Planet with moon");
define("SHOW_REPORT_SELECTION","Planet with report");
define("SHOW_FILTER_BY","Exclude from the list");
define("SHOW_FILTER_NONE","egyik sem");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Show players without score changes within the last few days");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","OGame Galaxytool - Státusz");
define("STATUS_DB_STATUS","Adatbázis státusz");
define("STATUS_COLOR","Szín");
define("STATUS_AGE1","Adat 1 napos.");
define("STATUS_AGE2","Adat 2 - 4 napos.");
define("STATUS_AGE3","Adat 4 - 7 napos.");
define("STATUS_AGE4","Adat 1 - 2 hetes.");
define("STATUS_AGE5","Adat 2 - 4 hetes.");
define("STATUS_AGE6","Adat régebbi egy honapnál!");
define("STATUS_AGE7","Nincs adat.");
define("STATUS_ON","ideje");
define("STYLES_COLOR1","Szín1");
define("STYLES_COLOR2","Szín2");
define("STYLES_COLOR3","Szín3");
define("STYLES_COLOR4","Szín4");
define("STYLES_COLOR5","Szín5");
define("STYLES_COLOR6","Szín6");
define("STYLES_COLOR7","Szín7");
// 4.8
define("STATUS_DB_LEGEND","Legend");
define("STATUS_GALAXY","Galaxy Overview");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","Felhasználó menedzselés");
define("USER_NAMES","Felhazsnáló");
define("USER_ERROR","Hiba");
define("USER_NEWUSER","Új felhasználó");
define("USER_OPTIONS","Beállítások");
define("USER_USERNAME","Felhasználónév");
define("USER_PASSWORD","Jelszó");
define("USER_PASSWORD_CONFIRM","Jelszó megerősítése");
define("USER_GALAXY","Galaxis");
define("USER_SEARCH","Keresés");
define("USER_INSERT","Beillesztés");
define("USER_DELETE","Törlés");
define("USER_DELETE_ENTRY","Akarod törölni ezt a felhasználót?: ");
define("USER_STATUS","Statisztikák megtekintése");
define("USER_STYLES","Kinézet módosítása");
define("USER_SUBMIT","Elfogad");
define("USER_RESET","Nulláz");
define("USER_YES","Igen");
define("USER_NO","Nem");
define("USER_STYLEPATH","styles.css elérési útja");
define("USER_PROBES","Kémjelentés megtekintése/feltöltése");
define("USER_EMAIL","Email");
define("USER_ERROR1","A jelszó rossz vagy az email cím hibás.");
define("USER_ERROR2","Email-cím hibás.");
define("USER_INGAME","Játékbeli név");
define("USER_ALLYTAG","Szövetség rövidítése");
define("USER_ALLYHISTORY","Történelmi nézet megtekintése");
define("USER_DIPLOMATIC","Diplomáciai státusz megváltoztatása");
define("USER_STATSPAGE","Bejegyzések száma a statisztikák oldalán");
define("USER_LINKS","Linkek");
define("USER_LINKS2","Formátum:<br>szöveg;url<br>szöveg2;url2<br>szöveg3;url3");
define("USER_EXPORT_TITLE","Színek exportálása (BB kódok)");
define("USER_BB_COORDINATES","Koordináták");
define("USER_BB_MOON","Hold");
define("USER_BB_DEBRIS","Törmelékmező");
define("USER_BB_ALLY","Szövetség neve");
define("USER_BB_ALLYDETAILS","Szövetség részletei");
define("USER_BB_PLAYERNAME","Játékos neve");
define("USER_BB_BANNED","Bannolt");
define("USER_BB_VACATION","Vakáció mód");
define("USER_BB_NOOB","Kezdő");
define("USER_BB_INACTIVE","Inaktív");
define("USER_BB_LONGINACTIVE","Régóta inaktív");
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
define("VIEW_TITLE","OGame Galaxytool - Galaxis nézet");
define("VIEW_NODATA","Nincs elérhető adat.");
define("VIEW_GALAXY","Galaxis");
define("VIEW_SYSTEM","Naprendszer");
define("VIEW_POSITION","Poz.");
define("VIEW_PLANET","Bolygó");
define("VIEW_MOON","Hold");
define("VIEW_TF","DF");
define("VIEW_PLAYER","Játékos");
define("VIEW_PLAYER_ADD","(Rang / Státusz)");
define("VIEW_ALLY","Szövetség");
define("VIEW_ALLY_ADD","(Rank / Member)");
define("VIEW_METAL","F");
define("VIEW_CRYSTAL","K");
define("VIEW_COLONISED","kolonizált bolygó");
define("VIEW_UKMOONSIZE","ismeretlen");
define("VIEW_BACK","vissza");
define("VIEW_NOTICE","Megjegyzések");
define("VIEW_REPORTS","Jelentések");
define("VIEW_MOONPHALANX","A következő holdakról szkennelhető ez a naprendszer");
define("VIEW_NOMOONS","Nincs ilyen hold");
define("VIEW_IRAKS","Az alábbi bolygókról érhető el bolygóközi rakétákkal ez a naprendszer");
define("VIEW_NOIRAKS","Nincs ilyen bolygó");
// 4.0
define("VIEW_MOON_DESTROY_CHANCE","Esély a hold megsemmisítésére");
define("VIEW_CHANCE_WITH_ONE","Esély egy halálcsillaggal");
define("VIEW_CHANCE_WITH_N","Esély ");
define("VIEW_DEATH_STARS","halálcsillaggal");
define("VIEW_DS_DESTROY_CHANCE","Esély a halálcsillag(ok) elvesztésére");
define("VIEW_TOP","Fel");
// new 4.3.5
define("VIEW_GO","mehet");
// new 5.0
define("VIEW_DIAMETER","Diameter");

/*********************************************************************
* change_password.php
**********************************************************************/
define("PW_TITLE","OGame Galaxytool - Jelszó változtatás");
define("OLD_PASSWORD","Régi jelszó");
define("NEW_PASSWORD","Új jelszó");
define("CONFIRM_NEW_PASSWORD","Új jelszó megerősítése");
define("PW_MISMATCH","A jelszavak nem egyeznek!");
define("PW_ERROR","Régi jelszó hibás!");
define("UPDATE_DONE","Változtatás megtörtént.");
// new 4.2
define("TIMEZONE_OFFSET","Idoeltolódás a s szervertol");
// new 4.3
define("DELETE_ACCOUNT","Galaxytool felhasználó törlése");
define("DELETE_ACCOUNT_SAFETY_REQUEST","Tényleg törölni akarod a felhasználót?");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","Engedélyek");
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
define("NOTICE_TITLE","OGame Galaxytool - Megjegyzések");
define("NOTICE_HEADER","Megjegyzés módosítása");
define("NOTICE_HEADER2","Saját megjegyzések módosítása");
define("NOTICE_PUBLIC","Hozzáférhető másnak is?");
define("NOTICE_YES","igen");
define("NOTICE_NO","nem");
define("NOTICE_TEXT","Megjegyzés szövege");
define("NOTICE_SAVE","Mentés");
define("NOTICE_DELETED","Megjegyzés eltörölve");
define("NOTICE_SAVED","Megjegyzés elmentve");
define("NOTICE_RESULTS","Összes találat");
define("NOTICE_USER","Felhasználó");
define("NOTICE_DATE","Dátum");
define("NOTICE_EDIT","Módosítá");
define("NOTICE_DELETE","Törlés");
define("NOTICE_NEW","Saját megjegyzés létrehozása");
define("NOTICE_NOTPUBLIC","Megjegyzése nem nyilvános.");
define("NOTICE_ALL","mindegyik");
define("NOTICE_NONE",SHOW_FILTER_NONE);
define("NOTICE_SEARCH","Keresés a Megjegyzések között");
define("NOTICE_SEARCH_SHORT","Keresés");
define("NOTICE_HITS","Találatok");
define("NOTICE_SHOWRESULTS","Találatok oldalanként");
define("NOTICE_OF","az összesből");
define("NOTICE_NOTHING","Nincs találat");
// 4.0
define("NOTICE_CHARS","Karakterek");
define("NOTICE_PLAYERNAME","Játékos");
define("NOTICE_SHOWALL","Minden megjegyzés mutatása");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","OGame Galaxytool - Kémjelentések");
define("REPORTS_RESOURCES","Erőforrások");
define("REPORTS_FLEET","Flották");
define("REPORTS_DEFENCE","Védelem");
define("REPORTS_BUILDINGS","Épületek");
define("REPORTS_TECHNOLOGY","Kutatás");
define("REPORTS_MOON","Hold");
define("REPORTS_SEARCH","Keresés a kémjelentésekben");
define("REPORTS_SEARCH_SHORT","Keresés");
define("REPORTS_HITS","Találatok");
define("REPORTS_NOTHING","Nincs találat");
define("REPORTS_ADDRESS","Koordináták");
define("REPORTS_CURRENTNESS","Frissítés ideje");
define("REPORTS_PLAYERNAME","Játékos neve");
define("REPORTS_ALLY","Szövetség");
define("REPORTS_VIEW","Jelentés megtekintése");
define("REPORTS_SEARCH_IN","Keresés a Galaxisban");
define("REPORTS_FROM_SYSTEM","attól a naprendszertől");
define("REPORTS_TO","addig");
define("REPORTS_DELETE","törlés");
define("REPORTS_DELETED","Jelentés eltörölve");
define("REPORTS_RESULTS","találat oldalanként");
define("REPORTS_OF","az összesből");
define("REPORTS_DATE","Dátum");
define("REPORTS_DATE_0","bármikor");
define("REPORTS_DATE_1","régebbi mint");
define("REPORTS_DATE_2","újabb mint");
define("REPORTS_NOTICES","Megjegyzések");
define("REPORTS_AT_LEAST_RESOURCES","Erőforrások (legalább)");
define("REPORTS_SEARCH_EXTENDED","kiterjesztett keresés");
define("REPORTS_FLEET_RESIS","Flotta pontok");
define("REPORTS_DEFENCE_RESIS","Védelem pontok");
define("REPORTS_ALL_RESIS","összes pontok");
define("REPORTS_TECHS","Technológiák");
define("REPORTS_UNKNOWN_ENTRIES","ismeretlen bejegyzések");
define("REPORTS_PARTLY_INSERTED","részlegesen beillesztve");
define("REPORTS_FOR_ALL_RES","az összes erőforrásokra");
define("REPORTS_FOR_TF","a DF-re");
define("REPORTS_KT","Kis szállító");
define("REPORTS_GT","Nagy Szállító");
define("REPORTS_SS","Csatahajó");
define("REPORTS_REC","Szemetes");
define("REPORTS_RAIDABLE","Csak a támadható célok");
define("REPORTS_ALL_RESOURCES","összes erőforrások");
// 4.0
define("REPORTS_STUFF","Egyebek");
define("REPORTS_SPEEDSIM","Szimuláció Speedsim");
define("REPORTS_DRAGOSIM","Szimuláció Dragosim");
define("REPORTS_STATUS","Státusz");
define("REPORTS_ERROR","Hiba történt");
// 4.2
define("REPORTS_OWN_REPORTS","Csak a saját jelentéseimet");
// 4.3.3
define("REPORTS_UPLOAD_BY","Általa feltöltött jelentések");
// 4.4
define("REPORTS_DEPTH","Jelentés \"mélysége\"");
define("REPORTS_FLEET_SCORE","Flottapont");
define("REPORTS_DEFENCE_SCORE","Védelmi pont");
// 5.0
define("REPORTS_HOURS","hours");
define("REPORTS_MAX_RESULTS_HIT","Your query returned more than &1 hits. Only the first &1 results are show. Please adjust your search request to get less results.");
define("REPORTS_OSIMULATE","Simulate with OSimulate");
define("REPORTS_SHOW_ONLY","Show only");
define("REPORTS_SHOW_PLANETS","Bolygók");
define("REPORTS_SHOW_MOONS","Holdak");
define("REPORTS_OWNER","Reports owned by");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","OGame Galaxytool - Statisztikák");
define("STATS_TBLHEAD","Statisztikák");
define("STATS_RANK","Helyezés");
define("STATS_PLAYERNAME","Játékos neve");
define("STATS_ALLYNAME","Szövetség rövidítése");
define("STATS_SCORE","Pontok");
define("STATS_FLEET","Flotta");
define("STATS_RESEARCH","Kutatás");
define("STATS_MEMBERS","Tagok");
define("STATS_STATUS","Státusz");
define("STATS_NOTHING","nincs Státusz");
define("STATS_NAP","M.N.T");
define("STATS_ALLIED","Szövetség");
define("STATS_WAR","Háború");
define("STATS_BOYCOTT","Bojkott");
define("STATS_NEUTRAL","Neutral");
define("STATS_OWN","Saját Szövetség");
define("STATS_WING","Al-szövetség");
define("STATS_UPDATE","Bejegyzés dátuma");
define("STATS_PLAYERSTATS","Játékos statisztikák");
define("STATS_ALLYSTATS","Szövetség statiszikák");
// 4.0
define("STATS_DELETE","Akarod-e törölni ezt a bejegyzést?");
define("STATS_CONFIRM_DELETE","Valóban törölni akarod ezt a bejegyzést?");
define("STATS_CHANGE_PLAYER_STATUS","Játékos státusza");
define("STATS_CHANGE_ALLIANCE_STATUS","Szövetség státusza");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","A szövetségben az összes játékos kapja a kiválasztott státuszt. Bármilyen előbbi státusz felül van írva. Utána még mindig tudod módosítani a játékosok egyéni státuszát.");
define("STATS_UNKNOWN","Nincs státusz");
define("STATS_DETAILS","Részletek");
// 4.4
define("STATS_PLAYERSTATUS",SHOW_PLAYER_STATUS);
define("STATS_IGNORE_STATUS",SHOW_PLAYER_STATUS1);
define("STATS_ACTIVE","aktív");
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
define("REGISTER_REGISTRATE","Regisztráció");
define("REGISTER_LOGINNAME","Felhasználónév");
define("REGISTER_PASSWORD","Jelszó");
define("REGISTER_PASSWORD_CONFIRM","Jelszó megerősítése");
define("REGISTER_EMAIL","Email");
define("REGISTER_INGAME","Játékbeli név");
define("REGISTER_ALLYTAG","Szövetség rövidítése");
define("REGISTER_EMAILVERIFICATION","Email megerősítő");
define("REGISTER_EMAILTEXT","Kérlek kattints a következő linkre, hogy megerősítsd a regisztrációdat a galaxistoolban.");
define("REGISTER_ERROR1","Felhasználónév foglalt.");
define("REGISTER_ERROR2","Hiba az email küldése során. Kérlek lépj kapcsolatba az adminnal.");
define("REGISTER_ERROR3","Hiba az adatbázishoz valo csatlakozás során!");
define("REGISTER_INFO1","A felhasználóneved elkészült.");
define("REGISTER_INFO2","Kérlek kattints a linkre a kapott email-ben, hogy megerősítsd a regisztrációt.");
define("REGISTER_INFO3","Regisztráció megerősítve. Mostmár csak az adminnak kell aktiválnia.");
define("REGISTER_BUTTON","Vissza a főoldalra");
define("REGISTER_NEW_SUBJECT","Új felhasználó regisztrált a galaxytoolban");
define("REGISTER_NEW_MAILTEXT","Új felhasználó regisztrált.");
// new 4.2
define("REGISTER_BACK","Vissza az elso oldalra");
// new 4.3.5
define("REGISTER_MISSING_FIELDS","Tölts ki minden mezot");
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
define("LOSTPW_TITLE","Elvesztett jelszó");
define("LOSTPW_INFO2","Új jelszó létrehozva és elküldve az email címedre.");
define("LOSTPW_BUTTON1","új jelszó kérése");
define("LOSTPW_BUTTON2","Vissza a főoldalra");
define("LOSTPW_LOGINNAME","Felhasználónév");
define("LOSTPW_EMAIL","Email");
define("LOSTPW_ERROR1","Hiba az adatbázishoz való csatlakozáskor!");
define("LOSTPW_ERROR2","Nem található a kérésének megfelelő bejegyzés!");
define("LOSTPW_ERROR3","Hiba email küldésekor. Kérlek lépj kapcsolatba az adminnal.");
define("LOSTPW_EMAIL_SUBJECT","Új jelszavad");
define("LOSTPW_EMAIL_TEXT1","Itt az új bejelentkezési információ a Galaxytoolra");
define("LOSTPW_EMAIL_TEXT2","Felhasználóneved");
define("LOSTPW_EMAIL_TEXT3","Jelszavad");
// new 5.0
define("LOSTPW_INFO1","You will receive an email to verify your password reset request.");
define("LOSTPW_CONFIRM_RESET_SUBJECT","Lost password?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","Hello,\n\nyou requested a password reset for the Galaxytool. To generate a new password, click the following link:");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","OGame Galaxytool - Felhasználó információ");
define("USERINFO_NAMES","Az összes felhasználó");
define("USERINFO_DETAIL","Részletes adatok róla:");
define("USERINFO_ERROR1","Nincs ilyen azonosítójú felhasználó!");
define("USERINFO_USERNAME","Felhasználónév");
define("USERINFO_INGAME","Játékbeli név");
define("USERINFO_EMAIL","Email");
define("USERINFO_ALLYTAG","Szövetség");
define("USERINFO_STYLEPATH","Skin");
define("USERINFO_STATUS","Státusz");
define("USERINFO_ACTIVATE","Felhasználó aktiválása");
define("USERINFO_LOGINS","Bejelentkezések");
define("USERINFO_LASTLOGIN","Utolsó bejelentkezés");
define("USERINFO_DATA","Beillesztett naprendszerek");
define("USERINFO_NODATA","Ez a felhasználó még nem illesztett be naprendszereket!");
define("USERINFO_GALAXY","Galaxis");
define("USERINFO_SYSTEMS","Naprendszerek");
define("USERINFO_IP","IP cím");
define("USERINFO_LOGINTIME","Bejelentkezés");
define("USERINFO_NOLOGIN","Ez a felhasználó még soha sem lépett be.");
define("USERINFO_LAST_GALAXYUPDATE","Utolsó beillesztett galaxis");
define("USERINFO_LAST_PUBLIC_NOTICE","Utolsó nyilvános megjegyzés");
define("USERINFO_LAST_PRIVATE_NOTICE","Utolsó magán megjegyzés");
define("USERINFO_NUMBEROF_PUBLIC_NOTICE","Összes nyilvános megjegyzés");
define("USERINFO_NUMBEROF_PRIVATE_NOTICE","Összes magán megjegyzés");
define("USERINFO_ACTIVATED","Felhasználó aktiválva");
define("USERINFO_ACTIVATIONTEXT","A Galaxytool adminja aktiválta a felhasználóneved.\n\nHasználd egészséggel a Galaxytool-t!");
// new 4.8
define("USERINFO_LAST_SUBMIT","Inserted last data");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","OGame Galaxytool - Szövetség történelem");
define("ALLYHISTORY_TBLHEAD","Történelmi áttekintés");
define("ALLYHISTORY_PLAYERNAME","Játékos neve");
define("ALLYHISTORY_ALLYNAME","Szövetség");
define("ALLYHISTORY_LASTMONTH","Múlt hónap"); // changed at 4.0
define("ALLYHISTORY_ALL_DATA","Minden elérhető információ"); // new 4.0
define("ALLYHISTORY_SHOW","Statisztikák megjelenítése");
define("ALLYHISTORY_TIMESPAN","Időtartomány");
define("ALLYHISTORY_PROGESS","Haladás");
define("ALLYHISTORY_SCORE","Pontok");
define("ALLYHISTORY_FSCORE","Flotta pontok"); // new 4.0
define("ALLYHISTORY_RSCORE","Kutatás pontok"); // new 4.0
define("ALLYHISTORY_MEMBER","Tagok"); // new 4.0
define("ALLYHISTORY_NOTHING","Nem találhato bejegyzés");
define("ALLYHISTORY_DETAILS","Részletek");
define("ALLYHISTORY_SHOW_ADDRESS","Koordináták");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","Játékos információ");
define("DETAILEDINFO_ALLYINFO_TITLE","Szövetség információ");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","Részletes információ a jatékosról");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","Részletes információ a szövetségről");
define("DETAILEDINFO_NO_ALLIANCE","nincs");
define("DETAILEDINFO_SCORE","Pont helyezés");
define("DETAILEDINFO_FLEET","Flotta helyezés");
define("DETAILEDINFO_RESEARCH","Kutatás helyezés");
define("DETAILEDINFO_RANK","Rang");
define("DETAILEDINFO_POINTS","Pontok");
define("DETAILEDINFO_KNOWN_PLANETS","ismert bolygó");
define("DETAILEDINFO_MOONS","ismert hold");
define("DETAILEDINFO_PHALANX_AREA","Phalanx övezet");
define("DETAILEDINFO_NO_PHALANX_AREA","nem található Phalanx");
define("DETAILEDINFO_NOTICES","Megjegyzések");
define("DETAILEDINFO_NO_NOTICES","Nem találhato megjegyzés");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","előző Szövetségek");
define("DETAILEDINFO_RESOURCES_PER_HOUR","Erőforrások óránként");
define("DETAILEDINFO_RESOURCES_PER_DAY","Erőforrások naponként");
define("DETAILEDINFO_RESOURCES_PER_WEEK","Erőforrások hetenként");
define("DETAILEDINFO_RESOURCES_PER_MONTH","Erőforrások havonként (30 naponként)");
define("DETAILEDINFO_METAL","Fém");
define("DETAILEDINFO_CRYSTAL","Kristály");
define("DETAILEDINFO_DEUTERIUM","Deutérium");
define("DETAILEDINFO_UNKNOWN","ismeretlen");
define("DETAILEDINFO_SCORE_DISTRIBUTION","Pontok elosztása");
// new 4.2
define("DETAILEDINFO_GENERAL","Adatlap");
define("DETAILEDINFO_MEMBERS","Felhasználó");
define("DETAILEDINFO_GRAPHS","Grafikonok");
define("DETAILEDINFO_RESOURCES","Eroforrások");
define("DETAILEDINFO_FLEET_TAB","Flotta");
define("DETAILEDINFO_TECH","Kutatások");
define("DETAILEDINFO_FLEET_DETAIL","Összesen / (játékos átlagok) minden elérheto jelentés alapján");
define("DETAILEDINFO_TECH_DETAIL","Az összes információ átlaga");
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
define("ADMIN_TITLE","Galaxytool adminisztráció");
define("ADMIN_DISCLAMER","Figyelem: Csak saját felelosségre futtasd! Többségük adattörlésre való.");
define("ADMIN_INCONSISTENCIES","Adatbázis összeegyezhetetlenségek");
define("ADMIN_PLANETS","Bolygók a 0 vagy 15-nél nagyobb pozíciókon");
define("ADMIN_GALAXIES","Törölj e feletti galaxisokat &1");
define("ADMIN_PLAYERS","Törölj OGame felhasználónév nélküli felhasználókat - dupla felhasználói bejegyzésekhez vezethet");
define("ADMIN_REPORTS","Töröld a már nem létezo bolygók jelentéseit");
define("ADMIN_MISC","Egyebek");
define("ADMIN_RESET","Galaxytool ürítése (csak a felhasználók és az IP címek maradnak meg)");
define("ADMIN_OLD_PLAYERS","A &1 napnál régebbi felhasználók törlése");
define("ADMIN_OLD_REPORTS","A &1 napnál régebbi jelentések törlése");
define("ADMIN_LOADING","Ne zárd be ezt az ablakot míg be nem töltodik teljesen.");
define("ADMIN_STATUS","Lekérdezéseid státusza");
define("ADMIN_SELECTION","Legalább egy bejegyzést ki kell jelölnöd");
define("ADMIN_SAFETY","Biztos, hogy lefuttatod ezeket a scripteket?");
define("ADMIN_DONE","kész");
define("ADMIN_NOTBD","nem kellett semmit tenni");
// new 4.3
define("ADMIN_OLD_GALAXIES","Törölj &1 napnál régebbi galaxis nézeteket");
define("ADMIN_UNUSED_PLAYERS","Töröld azokat a felhasználókat melyek nem jelennek meg egy galaxis nézetben sem.");
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
define("ERRORPAGE_PAGEFORWARD","Kattints ide ha a böngésződ nem támogatja az átirányítást");
define("ERRORPAGE_PERMISSION_DENIED","Nincs jogosultságod megtekinteni ezt az oldalt. Kattints, hogy lépj vissza.");

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