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
define("L_USERNAME","Vartotojas");
define("L_PASSWORD","Slaptažodis");
define("L_LOGINFAILURE","Vartotojo vardas arba slaptažodis neteisingi arba vartotojas neaktyvuotas");
define("L_TOKENFAILURE","Your logon key is wrong or your account is not activated yet.");
define("L_LOGINTEXT","Prašome prisijungti.");
define("L_LANGUAGE","Galimos kalbos:");
define("L_TIMEOUT","Sesija pasibaigė!");
define("L_REGISTER","Registruotis");
define("L_PWLOST","prarastas slaptažodis");
define("INDEX_TITLE","OGame Galaxytool - Peržiūra");
define("INDEX_INFO","Informacija");
define("INDEX_ENTRIES","Iš viso sistemų");
define("INDEX_ENTRIES_LASTWEEK","Naujos sistemos iš praeitos savaitės");
define("INDEX_ENTRIES_TO_OLD","Sistemos senesnės nei mėnuo");
define("INDEX_REGISTERED_USERS","Užsiregistravę vartotojai");
define("INDEX_PAGEFORWARD","Jei jūsų naršyklė nepalaiko page forwarding, spauskite čia.");
define("INDEX_NOTICES","Žinutės");
define("INDEX_PLAYERS","Žaidėjų statistika");
define("INDEX_ALLIES","Aljansų statistika");
define("INDEX_REPORTS","Špionažo ataskaitos");
define("INDEX_VERSION","Atsisiųsti naujausią versiją");
define("INDEX_LATEST_VERSION","Nėra naujesnės versijos");
define("INDEX_SHOUTBOX","ShoutBox");
define("INDEX_NOENTRY","Nėra įrašų");
define("INDEX_COMMENT","Tavo įrašas");
define("INDEX_INSERT","Siųsti");
define("INDEX_UMOD","Žaidėjas atostogų režime");
define("INDEX_NO_MOONS","Mėnuliai");
define("INDEX_NO_EMPTY_SYSTEMS","Tuščios sistemos");
define("INDEX_NO_FULL_SYSTEMS","Pilnos sistemos");
define("INDEX_NO_TARGETS","Potencialiūs taikiniai	");
// 4.0
define("INDEX_USERINFO","Vartotojų statistika");
define("INDEX_ONLINE","Dabar online");
define("INDEX_TODAY","Šiandien online");
define("INDEX_ALL","Iš viso prisijungimų");
// 4.3.7
define("GENERAL_LOAD_FORM","Load form data");
define("GENERAL_SAVE_FORM","Save form data");
define("GENERAL_SAVE_AS_TEXT","Save as");
define("GENERAL_SAVE","Save");
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
define("GENERAL_OPEN_IN_NEW_WINDOW","Atverti saistomą objektą naujame lange");
// 5.1
define("GENERAL_UNIT_OF_MEASURE_DAYS","Days");

/*********************************************************************/
/***************************** internal ******************************/
/*********************************************************************/
// index.php
define("PROGRAM_NAME","OGame Galaxytool");
define("SHORTNAME","Galaxytool");
define("BACK_INDEX","Atgal į pagrindinį");
define("UNIVERSE","Visata");

// search
define("MENU_INFO_LINKS","Informacija");
define("MENU_PAGE","Peržiūra");
define("MENU_DB_SEARCH","Ieškoti duomenų bazėj");
define("MENU_DB_NOTICES","Ieškoti žinutėse");
define("MENU_DB_REPORTS","Ieškoti ataskaitose");
define("MENU_GALAXYVIEW","Žiūrėti sistemą");
define("MENU_STATISTICS","Statistika");
define("MENU_ALLYHISTORY","Istorinė peržiūra");
// 4.7
define("MENU_FLEET_MOVEMENTS","Fleet movements");
define("MENU_COMBAT_REPORTS","Combat reports");
define("MENU_MESSAGES","Ingame messages");

// insert / change
define("MENU_OPTION_LINKS","Nustatymai");
define("MENU_DB_REFRESH","Įrašyti į duomenų bazę");
define("MENU_NOTICES","Žinutės");
define("MENU_DB_STATUS","Duomenų bazės būklė");
define("MENU_USEROPTIONS","Vartotojų tvarkymas");
define("MENU_USEROPTIONS2","Vartotojų nustatymai");
define("MENU_USEROPTIONS3","Vartotojų informacija");
// 4.2
define("MENU_ADMIN","Valdymas");
// 4.3.3
define("MENU_LOGOUT","Logout");

// Stuff
define("MENU_STUFF","Įvairūs");
define("MENU_FORUM_THREAD","Kūrėjų forumas");
define("MENU_DOWNLOADPAGE","Parsisiuntimas");
define("MENU_LANGUAGE","Kalba");
define("MENU_HELP","Pagalba");
// 4.0
define("MENU_TOOLOPTIONS","Galaxytool nustatymai");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1"," įrašyta į duomenų bazę");
define("PARSER_ERROR1","Klaida bandant įrašyti šias koordinates");
define("PARSER_ERROR2","Nerasta duomenų bazės!");
define("PARSER_ERROR3","Nerastas duomenų bazės serveris!");
define("PARSER_WRONG_UNIVERSE","Wrong universe - actual: \"&1\"  expected: \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","OGame Galaxytool - Paieška");
define("SHOW_SEARCH","Ieškoti duomenų bazėj");
define("SHOW_ALLYSYMBOL","Aljanso etiketė");
define("SHOW_PLAYERNAME","Žaidėjas");
define("SHOW_MOONS","Tik planetos su palydovais");
define("SHOW_NOTICES","Tik planetos su žinutėm");
define("SHOW_COLONIES","Tik planetos kolonizacijai");
define("SHOW_YES","Taip");
define("SHOW_NO","Ne");
define("SHOW_SEARCHRANGE","Apimtis");
define("SHOW_SEARCH_IN","Ieškoti sistemoje");
define("SHOW_FROM_SYSTEM","nuo sistemos pozicijoje");
define("SHOW_FROM_PLANET","nuo planetos pozicijoje");
define("SHOW_TO","iki");
define("SHOW_DESCRIPTION","Galite naudoti <i>wildcards</i> * žaidėjų vardams arba aljansų pavadinimams. Pavyzdžiui, ieškant &quot;*vardas*&quot; bus surasti visi žaidėjai kurių varduose yra tekstas &quot;vardas&quot;<br />Nebūtina užpildyti visus laukelius");
define("SHOW_SORT_BY","Rikiuoti pagal");
define("SHOW_GALASYSTEM","Galaktiką/Sistemą");
define("SHOW_ALLYNAME","Aljanso pavadinimą");
define("SHOW_SEARCHBUTTON","Ieškoti");
define("SHOW_ADDRESS","Koordinatės");
define("SHOW_ALLYSORT","Aljansas");
define("SHOW_PLANET","Planeta");
define("SHOW_STATUS","Statusas");
define("SHOW_CURRENTNESS","Atnaujinta");
define("SHOW_PLAYER_STATUS","Žaidėjo statusas");
define("SHOW_PLAYER_STATUS1","visi");
define("SHOW_PLAYER_STATUS2","potencialūs taikiniai");
define("SHOW_PLAYER_STATUS3","neaktyvus");
define("SHOW_HITS","Rezultatai");
define("SHOW_OF","iš");
define("SHOW_ASC","didėjantys");
define("SHOW_DESC","mažėjantys");
define("SHOW_RESULTS","Rezultatų per puslapį");
define("SHOW_MOON","Palydovas");
define("SHOW_UKMOONSIZE","nežinoma");
define("SHOW_DF","DF");
define("SHOW_DF_LONG","Atliekos");
define("SHOW_METAL","M");
define("SHOW_METAL_LONG","Metalas");
define("SHOW_CRYSTAL","K");
define("SHOW_CRYSTAL_LONG","Kristalai");
define("SHOW_BOTH","kartu sudėjus");
define("SHOW_AT_LEAST","(bent)");
define("SHOW_DATE","Data");
define("SHOW_DATE_0","nesvarbu");
define("SHOW_DATE_1","senesni nei");
define("SHOW_DATE_2","naujesni nei");
define("SHOW_RANK","Rangas");
define("SHOW_FRANK","Flotilės rangas");
define("SHOW_MEMBERS","Nariai");
define("SHOW_NOTRANKED","Nėra duomenų");
define("SHOW_NOTICERES","Žinutės");
define("SHOW_REPORTS","Planetos tik su ataskaitom");
define("SHOW_REPORTS_SHORT","Ataskaitos");
define("SHOW_NOTHING","Nerasta įrašo");
define("SHOW_ALLIANCE_STATUS","Aljanso diplomatinis statusas");
define("SHOW_NO_STATUS","nėra");
define("SHOW_NAP","NAP");
define("SHOW_ALLIED","Sąjunga");
define("SHOW_WAR","Karas");
define("SHOW_BOYCOTT","Boikotas");
define("SHOW_NEUTRAL","Neutralus");
define("SHOW_OWN","Savas ");
define("SHOW_WING","Sparnas");
// obsolete with 5.0
define("SHOW_EXT_OPTIONS1","Patikslinti, rangą, datą arba nuolaužų lauką");
define("SHOW_EXT_OPTIONS2","Patikslinti kolonijas, palydovus, ataskaitas, žaidėjų statusą arba diplomatinį statusą");
define("SHOW_EXT_OPTIONS3","Keisti paieškos rezultatų rikiavimo nustatymus");
// new 5.0
define("SHOW_EXTENDED","advanced search");
define("SHOW_MOON_SELECTION","Planet with moon");
define("SHOW_REPORT_SELECTION","Planet with report");
define("SHOW_FILTER_BY","Exclude from the list");
define("SHOW_FILTER_NONE","jokių");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Show players without score changes within the last few days");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","OGame Galaxytool - Statusas");
define("STATUS_DB_STATUS","Duomenų bazės statusas");
define("STATUS_COLOR","Spalva");
define("STATUS_AGE1","Įrašas 1 dienos senumo.");
define("STATUS_AGE2","Įrašas 2-4 dienų senumo.");
define("STATUS_AGE3","Įrašas 4-7 dienų senumo.");
define("STATUS_AGE4","Įrašas 1-2 savaičių senumo.");
define("STATUS_AGE5","Įrašas 2-4 savaičių senumo.");
define("STATUS_AGE6","Įrašas senesnis nei 1 mėnuo!");
define("STATUS_AGE7","Nėra įrašų.");
define("STATUS_ON","w");
define("STYLES_COLOR1","Spalva1");
define("STYLES_COLOR2","Spalva2");
define("STYLES_COLOR3","Spalva3");
define("STYLES_COLOR4","Spalva4");
define("STYLES_COLOR5","Spalva5");
define("STYLES_COLOR6","Spalva6");
define("STYLES_COLOR7","Spalva7");
// 4.8
define("STATUS_DB_LEGEND","Legend");
define("STATUS_GALAXY","Galaxy Overview");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","Vartotojų tvarkymas");
define("USER_NAMES","Vartotojas");
define("USER_ERROR","Klaida");
define("USER_NEWUSER","Naujas vartotojas");
define("USER_OPTIONS","Nustatymai");
define("USER_USERNAME","Vartotojas");
define("USER_PASSWORD","Slaptažodis");
define("USER_PASSWORD_CONFIRM","Patvirtinkite slaptažodį");
define("USER_GALAXY","Galaktika");
define("USER_SEARCH","Ieškoti");
define("USER_INSERT","Pridėti įrašą");
define("USER_DELETE","Trinti");
define("USER_DELETE_ENTRY","Ar norite ištrinti vartotoją: ");
define("USER_STATUS","Žiūrėti statistiką");
define("USER_STYLES","Keisti išvaizdą");
define("USER_SUBMIT","Patvirtinti");
define("USER_RESET","Trinti");
define("USER_YES","Taip");
define("USER_NO","Ne");
define("USER_STYLEPATH","Kelias į styles.css");
define("USER_PROBES","Špionažo ataskaitos");
define("USER_EMAIL","Email");
define("USER_ERROR1","Neteisingas slaptažodis arba email");
define("USER_ERROR2","Neteisingas email.");
define("USER_INGAME","Vardas žaidime");
define("USER_ALLYTAG","Aljanso Etiketė");
define("USER_ALLYHISTORY","Istorijos peržiūra");
define("USER_DIPLOMATIC","Pakeisti diplomatinį statusą");
define("USER_STATSPAGE","Įrašų statistikos puslapyje");
define("USER_LINKS","Nuorodos");
define("USER_LINKS2","Formatas:<br>text;url<br>text2;url2<br>text3;url3");
define("USER_EXPORT_TITLE","Eksportuoti spalvas (BB Code)");
define("USER_BB_COORDINATES","Koordinatės");
define("USER_BB_MOON","Palydovas");
define("USER_BB_DEBRIS","Nuolaužos");
define("USER_BB_ALLY","Aljanso pavadinimas");
define("USER_BB_ALLYDETAILS","Aljanso informacija");
define("USER_BB_PLAYERNAME","Žaidėjas");
define("USER_BB_BANNED","pašalintas");
define("USER_BB_VACATION","atostogų režimas");
define("USER_BB_NOOB","Noob");
define("USER_BB_INACTIVE","neaktyvus 7d.");
define("USER_BB_LONGINACTIVE","neaktyvus 28d.");
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
define("VIEW_TITLE","OGame Galaxytool - Sistema");
define("VIEW_NODATA","Nėra duomenų	.");
define("VIEW_GALAXY","Galaktika");
define("VIEW_SYSTEM","Sistema");
define("VIEW_POSITION","Vieta");
define("VIEW_PLANET","Planeta");
define("VIEW_MOON","Palydovas");
define("VIEW_TF","DF");
define("VIEW_PLAYER","Žaidėjas");
define("VIEW_PLAYER_ADD","(Rangas / Statusas)");
define("VIEW_ALLY","Aljansas");
define("VIEW_ALLY_ADD","(Rangas / Statusas)");
define("VIEW_METAL","M");
define("VIEW_CRYSTAL","K");
define("VIEW_COLONISED","Užimos planetos");
define("VIEW_UKMOONSIZE","nežinoma");
define("VIEW_BACK","atgal");
define("VIEW_NOTICE","Žinutės");
define("VIEW_REPORTS","Ataskaitos");
define("VIEW_MOONPHALANX","Šie mėnuliai gali nuskaityti šią sistemą");
define("VIEW_NOMOONS","Nerasta mėnulių");
define("VIEW_IRAKS","Ši planeta gali pasiekti šią sistemą su Tarpplanetinėm Raketom");
define("VIEW_NOIRAKS","Nerasta tarpplanetinių Raketų");
// 4.0
define("VIEW_MOON_DESTROY_CHANCE","Tikimybė sunaikinti palydovą");
define("VIEW_CHANCE_WITH_ONE","Tikimybė sunaikinti su viena Mirties Žvaigde");
define("VIEW_CHANCE_WITH_N","Tikimybė su ");
define("VIEW_DEATH_STARS","Mirties Žvaigždėm");
define("VIEW_DS_DESTROY_CHANCE","Tikimybė prarasti Mirties Žvaigždė(es)");
define("VIEW_TOP","Top");
// new 4.3.5
define("VIEW_GO","go");
// new 5.0
define("VIEW_DIAMETER","Diameter");

/*********************************************************************
* change_password.php
**********************************************************************/
define("PW_TITLE","OGame Galaxytool - Keisti slaptažodį");
define("OLD_PASSWORD","senas slaptažodis");
define("NEW_PASSWORD","naujas slaptažodis");
define("CONFIRM_NEW_PASSWORD","Pakartokite naują slaptažodį");
define("PW_MISMATCH","Slaptažodžiai nesutampa");
define("PW_ERROR","Senas slaptažodis neteisingas!");
define("UPDATE_DONE","Pakeista.");
// new 4.2
define("TIMEZONE_OFFSET","Laiko skirtumas nuo serverio laiko");
// new 4.3
define("DELETE_ACCOUNT","Trinti šį vartotoją");
define("DELETE_ACCOUNT_SAFETY_REQUEST","Ar tikrai norite ištrinti šį vartotoją?");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","Authorizations");
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
define("NOTICE_TITLE","OGame Galaxytool - Žinutės");
define("NOTICE_HEADER","keisti žinutę");
define("NOTICE_HEADER2","keisti savo žinutes");
define("NOTICE_PUBLIC","Matoma kitų?");
define("NOTICE_YES","taip");
define("NOTICE_NO","ne");
define("NOTICE_TEXT","Žinutės tekstas");
define("NOTICE_SAVE","Saugoti");
define("NOTICE_DELETED","Įrašas ištrintas");
define("NOTICE_SAVED","Įrašas išsaugotas.");
define("NOTICE_RESULTS","Visi įrašai");
define("NOTICE_USER","Vartotojas");
define("NOTICE_DATE","Data");
define("NOTICE_EDIT","Keisti");
define("NOTICE_DELETE","Trinti");
define("NOTICE_NEW","Kurti naują");
define("NOTICE_NOTPUBLIC","Privati žinutė");
define("NOTICE_ALL","Visos");
define("NOTICE_NONE",SHOW_FILTER_NONE);
define("NOTICE_SEARCH","Ieškoti žinutėse");
define("NOTICE_SEARCH_SHORT","Ieškoti");
define("NOTICE_HITS","Rezultatų");
define("NOTICE_SHOWRESULTS","Rezultatų puslapyje");
define("NOTICE_OF","iš");
define("NOTICE_NOTHING","Nerasta įrašo");
// 4.0
define("NOTICE_CHARS","ženklai");
define("NOTICE_PLAYERNAME","Žaidėjas");
define("NOTICE_SHOWALL","Rodyti visas žinutes");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","OGame Galaxytool - Špionažo Ataskaitos");
define("REPORTS_RESOURCES","Resursai");
define("REPORTS_FLEET","Flotilės");
define("REPORTS_DEFENCE","Gynyba");
define("REPORTS_BUILDINGS","Pastatai");
define("REPORTS_TECHNOLOGY","Išradimai");
define("REPORTS_MOON","Palydovas");
define("REPORTS_SEARCH","Ieškoti špionažo ataskaitose");
define("REPORTS_SEARCH_SHORT","Ieškoti");
define("REPORTS_HITS","Rezultatų");
define("REPORTS_NOTHING","Nerasta įrašo");
define("REPORTS_ADDRESS","Koordinatės");
define("REPORTS_CURRENTNESS","Senumas");
define("REPORTS_PLAYERNAME","Žaidėjas");
define("REPORTS_ALLY","Aljansas");
define("REPORTS_VIEW","rodyti ataskaitą");
define("REPORTS_SEARCH_IN","Ieškoti galaktikoje");
define("REPORTS_FROM_SYSTEM","nuo sistemos");
define("REPORTS_TO","iki");
define("REPORTS_DELETE","trinti");
define("REPORTS_DELETED","Įrašas ištrintas");
define("REPORTS_RESULTS","Rezultatų puslapyje");
define("REPORTS_OF","iš");
define("REPORTS_DATE","Data");
define("REPORTS_DATE_0","nesvarbu");
define("REPORTS_DATE_1","senesni nei");
define("REPORTS_DATE_2","naujesni nei");
define("REPORTS_NOTICES","Žinutės");
define("REPORTS_AT_LEAST_RESOURCES","Resursai (mažiausiai)");
define("REPORTS_SEARCH_EXTENDED","išplėsta paieška");
define("REPORTS_FLEET_RESIS","Flotilė - taškai");
define("REPORTS_DEFENCE_RESIS","Gynyba - taškai");
define("REPORTS_ALL_RESIS","suma");
define("REPORTS_TECHS","Technologijos");
define("REPORTS_UNKNOWN_ENTRIES","nežinomi įrašai");
define("REPORTS_PARTLY_INSERTED","nepilnai įterpti");
define("REPORTS_FOR_ALL_RES","visiem resursam");
define("REPORTS_FOR_TF","nuolaužom");
define("REPORTS_KT","Maži Krovininiai Laivai");
define("REPORTS_GT","Dideli Krovininiai Laivai");
define("REPORTS_SS","Šarvuotlaiviai");
define("REPORTS_REC","Perdirbėjas");
define("REPORTS_RAIDABLE","Tik potencialūs taikiniai");
define("REPORTS_ALL_RESOURCES","visi resursai");
// 4.0
define("REPORTS_STUFF","Įvairūs");
define("REPORTS_SPEEDSIM","Simuliuoti su Speedsim");
define("REPORTS_DRAGOSIM","Simuliuoti su Dragosim");
define("REPORTS_STATUS","Statusas");
define("REPORTS_ERROR","Įvyko klaida");
// 4.2
define("REPORTS_OWN_REPORTS","Tik mano ataskaitos");
// 4.3.3
define("REPORTS_UPLOAD_BY","Report uploaded by");
// 4.4
define("REPORTS_DEPTH","Report depth");
define("REPORTS_FLEET_SCORE","Fleet score");
define("REPORTS_DEFENCE_SCORE","Defence score");
// 5.0
define("REPORTS_HOURS","hours");
define("REPORTS_MAX_RESULTS_HIT","Your query returned more than &1 hits. Only the first &1 results are show. Please adjust your search request to get less results.");
define("REPORTS_OSIMULATE","Simulate with OSimulate");
define("REPORTS_SHOW_ONLY","Show only");
define("REPORTS_SHOW_PLANETS","Planetos");
define("REPORTS_SHOW_MOONS","Palydovai");
define("REPORTS_OWNER","Reports owned by");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","OGame Galaxytool - Statistika");
define("STATS_TBLHEAD","Statistika");
define("STATS_RANK","Rangas");
define("STATS_PLAYERNAME","Žaidėjo vardas");
define("STATS_ALLYNAME","Aljanso Etiketė");
define("STATS_SCORE","Taškai");
define("STATS_FLEET","Flotilė");
define("STATS_RESEARCH","Išradimai");
define("STATS_MEMBERS","Nariai");
define("STATS_STATUS","Statusas");
define("STATS_NOTHING","nėra");
define("STATS_NAP","NAP");
define("STATS_ALLIED","Sąjunga");
define("STATS_WAR","Karas");
define("STATS_BOYCOTT","Boikotas");
define("STATS_NEUTRAL","Neutralus");
define("STATS_OWN","Savas");
define("STATS_WING","Sparnas");
define("STATS_UPDATE","Įrašas iš");
define("STATS_PLAYERSTATS","Žaidėjų statistika");
define("STATS_ALLYSTATS","Aljansų statistika");
// 4.0
define("STATS_DELETE","Ar norite ištrinti šį įrašą?");
define("STATS_CONFIRM_DELETE","Ar tikrai norite ištrinti šį įrašą?");
define("STATS_CHANGE_PLAYER_STATUS","Žaidėjo statusas");
define("STATS_CHANGE_ALLIANCE_STATUS","Aljanso statusas");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","Visi šio aljanso nariai gaus šį statusa. Paskui galite pakeisti individualių narių statusą.");
define("STATS_UNKNOWN","Kiti");
define("STATS_DETAILS","Informacija");
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
define("REGISTER_REGISTRATE","Registruotis");
define("REGISTER_LOGINNAME","Žaidėjas");
define("REGISTER_PASSWORD","Slaptažodis");
define("REGISTER_PASSWORD_CONFIRM","Pakartoti slaptažodį");
define("REGISTER_EMAIL","Email");
define("REGISTER_INGAME","Ingame-Name");
define("REGISTER_ALLYTAG","Aljanso etiketė");
define("REGISTER_EMAILVERIFICATION","El. pašto patikrinimas");
define("REGISTER_EMAILTEXT","Prašome paspausti ant šios nuorodos kad patvirtinti jūsų galaxytool registraciją.");
define("REGISTER_ERROR1","Šis prisijungimo vardas jau naudojamas.");
define("REGISTER_ERROR2","Error while trying to send an email. Please contact your admin.");
define("REGISTER_ERROR3","Error while trying to send data to the database!");
define("REGISTER_INFO1","Jūs užregistruotas.");
define("REGISTER_INFO2","Prašome paspausti ant nuorodos laiške kad patvirtinti jūsų galaxytool registraciją.");
define("REGISTER_INFO3","Registracija patvirtinta. Laukite kol administratorius jus aktyvuos.");
define("REGISTER_BUTTON","Atgal į pagrindinį");
define("REGISTER_NEW_SUBJECT","Vartotojas užregistruotas galaxytool");
define("REGISTER_NEW_MAILTEXT","Naujas vartotojas užregistruotas galaxytool sistemoje.");
// new 4.2
define("REGISTER_BACK","Atgal į pagrindinį");
// new 4.3.5
define("REGISTER_MISSING_FIELDS","Enter all required Fields");
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
define("LOSTPW_TITLE","Lost my Password");
define("LOSTPW_INFO2","A new password was generated and send to your email address.");
define("LOSTPW_BUTTON1","get new password");
define("LOSTPW_BUTTON2","Back to main page");
define("LOSTPW_LOGINNAME","Login-Name");
define("LOSTPW_EMAIL","Email");
define("LOSTPW_ERROR1","Error while trying to send data to the database!");
define("LOSTPW_ERROR2","No matching entry found!");
define("LOSTPW_ERROR3","Error while trying to send an email. Please contact your admin.");
define("LOSTPW_EMAIL_SUBJECT","Your new password you requested");
define("LOSTPW_EMAIL_TEXT1","Here is your new login for the Galaxytool");
define("LOSTPW_EMAIL_TEXT2","Username");
define("LOSTPW_EMAIL_TEXT3","Password");
// new 5.0
define("LOSTPW_INFO1","You will receive an email to verify your password reset request.");
define("LOSTPW_CONFIRM_RESET_SUBJECT","Lost password?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","Hello,\n\nyou requested a password reset for the Galaxytool. To generate a new password, click the following link:");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","OGame Galaxytool - Vartotojų informacija");
define("USERINFO_NAMES","Visi vartotojai");
define("USERINFO_DETAIL","detali informacija apie");
define("USERINFO_ERROR1","Nerasta žaidėjo su šiuo ID");
define("USERINFO_USERNAME","Nazwa użytkownika");
define("USERINFO_INGAME","Žaidėjas");
define("USERINFO_EMAIL","Email");
define("USERINFO_ALLYTAG","Aljansas");
define("USERINFO_STYLEPATH","Skin'as");
define("USERINFO_STATUS","Būsena");
define("USERINFO_ACTIVATE","Aktivuoti vartotoją");
define("USERINFO_LOGINS","Prisijungimų skaičius");
define("USERINFO_LASTLOGIN","Paskutinis prisijungimas");
define("USERINFO_DATA","Informacija apie įvestas sistemas");
define("USERINFO_NODATA","Šis žaidėjas dar neįrašė jokios informacijos!");
define("USERINFO_GALAXY","Sistema");
define("USERINFO_SYSTEMS","Sistemų");
define("USERINFO_IP","IP adresas");
define("USERINFO_LOGINTIME","Prisijungta");
define("USERINFO_NOLOGIN","Šis žaidėjas niekada neprisijungė.");
define("USERINFO_LAST_GALAXYUPDATE","Paskutinis įdėtas galaktikos puslapis");
define("USERINFO_LAST_PUBLIC_NOTICE","Paskutinė vieša žinutė");
define("USERINFO_LAST_PRIVATE_NOTICE","Paskutinė privati žinutė");
define("USERINFO_NUMBEROF_PUBLIC_NOTICE","Viešų žinučių:");
define("USERINFO_NUMBEROF_PRIVATE_NOTICE","Privačių žinučių");
define("USERINFO_ACTIVATED","Vartotojas sukurtas");
define("USERINFO_ACTIVATIONTEXT","Galaxytool administratorius aktyvavo jūsų vartotoją.</ br>sėkmės naudojant Galaxytool!");
// new 4.8
define("USERINFO_LAST_SUBMIT","Inserted last data");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","OGame Galaxytool - Aljanso istorija");
define("ALLYHISTORY_TBLHEAD","Istorinė peržiūra");
define("ALLYHISTORY_PLAYERNAME","Žaidėjas");
define("ALLYHISTORY_ALLYNAME","Aljansas");
define("ALLYHISTORY_LASTMONTH","Praeitas mėnuo");
define("ALLYHISTORY_ALL_DATA","visa įmanoma informacija"); // new 4.0
define("ALLYHISTORY_SHOW","rodyti statistiką");
define("ALLYHISTORY_TIMESPAN","Laikas");
define("ALLYHISTORY_PROGESS","Progresas");
define("ALLYHISTORY_SCORE","Taškai");
define("ALLYHISTORY_FSCORE","Flotilės"); // new 4.0
define("ALLYHISTORY_RSCORE","Išradimai"); // new 4.0
define("ALLYHISTORY_MEMBER","Nariai"); // new 4.0
define("ALLYHISTORY_NOTHING","nerasta įrašų");
define("ALLYHISTORY_DETAILS","Detalės");
define("ALLYHISTORY_SHOW_ADDRESS","Koordinatės");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","Informacija apie žaidėją");
define("DETAILEDINFO_ALLYINFO_TITLE","Informacija apie aljansą");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","Išsami informacija apie žaidėją");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","Išsami informacija apie aljansą");
define("DETAILEDINFO_NO_ALLIANCE","joks");
define("DETAILEDINFO_SCORE","Taškų statistika");
define("DETAILEDINFO_FLEET","Flotilių statistika");
define("DETAILEDINFO_RESEARCH","Išradimų statistika");
define("DETAILEDINFO_RANK","Rangas");
define("DETAILEDINFO_POINTS","Taškai");
define("DETAILEDINFO_KNOWN_PLANETS","žinomos planetos");
define("DETAILEDINFO_MOONS","žinomi palydovai");
define("DETAILEDINFO_PHALANX_AREA","Falangų zona");
define("DETAILEDINFO_NO_PHALANX_AREA","nerasta Falangų");
define("DETAILEDINFO_NOTICES","Žinutės");
define("DETAILEDINFO_NO_NOTICES","Nerasta žinučių");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","ankstesni Aljansai");
define("DETAILEDINFO_RESOURCES_PER_HOUR","Resursų per valandą");
define("DETAILEDINFO_RESOURCES_PER_DAY","Resursų per dieną");
define("DETAILEDINFO_RESOURCES_PER_WEEK","Resursų per savaitę");
define("DETAILEDINFO_RESOURCES_PER_MONTH","Resursų per mėnesį (30 dienų)");
define("DETAILEDINFO_METAL","Metalas");
define("DETAILEDINFO_CRYSTAL","Kristalai");
define("DETAILEDINFO_DEUTERIUM","Deuteris");
define("DETAILEDINFO_UNKNOWN","nežinomi");
define("DETAILEDINFO_SCORE_DISTRIBUTION","Taškų pasiskirstymas");
// new 4.2
define("DETAILEDINFO_GENERAL","Detalės");
define("DETAILEDINFO_MEMBERS","Nariai");
define("DETAILEDINFO_GRAPHS","Grafikai");
define("DETAILEDINFO_RESOURCES","Resursai");
define("DETAILEDINFO_FLEET_TAB","Flotilė");
define("DETAILEDINFO_TECH","Išradimai");
define("DETAILEDINFO_FLEET_DETAIL","Suma / (žaidėjų vidurkis) iš visų ataskaitų");
define("DETAILEDINFO_TECH_DETAIL","Visų žaidėjų informacijos vidurkis");
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
define("ADMIN_TITLE","Galaxytool administracija");
define("ADMIN_DISCLAMER","Dėmesio! Jūs atsakote už šių skriptų naudojimo pasekmes. Dauguma jų trina duomenis.");
define("ADMIN_INCONSISTENCIES","Duomenų bazės nesuderinamumas");
define("ADMIN_PLANETS","Planetos pozicijoj 0 arba didesnėj nei 15");
define("ADMIN_GALAXIES","Trinti galaktikas didesnes nei &1 ");
define("ADMIN_PLAYERS","Trinti žaidėjus be OGame playerid. Pasekmė - sudvejinti žaidėjų įrašai");
define("ADMIN_REPORTS","Ištrinti ataskaitas kuriuose yra nebeegzistuojančių planetų");
define("ADMIN_MISC","Įvairūs");
define("ADMIN_RESET","Ištrinti duomenis (liks tik vartotojų ir IP duomenys)");
define("ADMIN_OLD_PLAYERS","Ištrinti senesnę nei &1 dienos informaciją apie žaidėjus ");
define("ADMIN_OLD_REPORTS","Ištrinti senesnies nei &1 dienos ataskaitas");
define("ADMIN_LOADING","Neuždarykite šio lango kol nepasikrovė puslapis.");
define("ADMIN_STATUS","Tavo prašymų būsena");
define("ADMIN_SELECTION","Turi būti pasirinktas bent vienas įrašas");
define("ADMIN_SAFETY","Ar tikrai norite ištrinti šį(iuos) skriptą(us) ?");
define("ADMIN_DONE","atlikta");
define("ADMIN_NOTBD","nėra ką atlikti");
// new 4.3
define("ADMIN_OLD_GALAXIES","Ištrinti galaktikos puslapius senesnius nei &1 dienų");
define("ADMIN_UNUSED_PLAYERS","Ištrinti žaidėjus kurių nėra galaktikos puslapiuose");
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
define("ERRORPAGE_PAGEFORWARD","Click here if your browser does not support page forwarding");
define("ERRORPAGE_PERMISSION_DENIED","You don't have the permission to enter this page. Click to go back.");

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