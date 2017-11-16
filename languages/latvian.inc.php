<?php
/*
 * defines the characters used in OGame to indicate player status
 */
define("PLAYER_BANNED","b");
define("PLAYER_VACATION_MODE","a");
define("PLAYER_NOOB","n");
define("PLAYER_INACTIVE","i");
define("PLAYER_LONG_INACTIVE","I");
define("PLAYER_OUTLAW","o");

/*********************************************************************/
/***************************** public ********************************/
/*********************************************************************/
//index.php
define("L_USERNAME","Lietotājvārds");
define("L_PASSWORD","Parole");
define("L_LOGINFAILURE","Tavs lietotājvārds vai parole ievadīti nepareizi, vai arī tavs konts nav aktivizēts.");
define("L_TOKENFAILURE","Your logon key is wrong or your account is not activated yet.");
define("L_LOGINTEXT","Ievadiet lietotāja datus.");
define("L_LANGUAGE","Pieejamās valodas:");
define("L_TIMEOUT","Sesijas laiks ir beidzies");
define("L_REGISTER","Reģistrācija");
define("L_PWLOST","Aizmirsi paroli?");
define("INDEX_TITLE","Pārskats");
define("INDEX_INFO","Informācija");
define("INDEX_ENTRIES","Pavisam sistēmas");
define("INDEX_ENTRIES_LASTWEEK","Sistēmas, kas pievienotas nedēļas laikā ");
define("INDEX_ENTRIES_TO_OLD","Sistēmas kas vecākas par mēnesi");
define("INDEX_REGISTERED_USERS","Reģistrēts lietotājs");
define("INDEX_PAGEFORWARD","Spied šeit, ja tavs brauzeris nepārvieto tevi automātiski!.");
define("INDEX_NOTICES","Piezīmes");
define("INDEX_PLAYERS","Spēlētāju statistika");
define("INDEX_ALLIES","Alianšu statistika");
define("INDEX_REPORTS","Spiegošanas atskaites");
define("INDEX_VERSION","Lejuplādēt jauno versiju");
define("INDEX_LATEST_VERSION","Jums ir janākā versija");
define("INDEX_SHOUTBOX","Pēdējais paziņojums");
define("INDEX_NOENTRY","Pašlaik nav paziņojumu");
define("INDEX_COMMENT","Tavs paziņojums:");
define("INDEX_INSERT","Pievienot");
define("INDEX_UMOD","Spēlētājs ir a");
define("INDEX_NO_MOONS","Mēness skaits");
define("INDEX_NO_EMPTY_SYSTEMS","Tukšās sistēmas");
define("INDEX_NO_FULL_SYSTEMS","Pilnībā aizpildītās sistēmas");
define("INDEX_NO_TARGETS","Iespējamo mērķu skaits");
// 4.0
define("INDEX_USERINFO","Info par lietotājiem");
define("INDEX_ONLINE","Pašlaik OnLine");
define("INDEX_TODAY","Šodien OnLine");
define("INDEX_ALL","Apmeklējumi kopā");
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
define("GENERAL_OPEN_IN_NEW_WINDOW","Atvērt saiti jaunā logā");
// 5.1
define("GENERAL_UNIT_OF_MEASURE_DAYS","Days");

/*********************************************************************/
/***************************** internal ******************************/
/*********************************************************************/
// index.php
define("PROGRAM_NAME","OGame Galaxytool");
define("SHORTNAME","Galaxytool");
define("BACK_INDEX","Uz sākumu");
define("UNIVERSE","Visums");

// search
define("MENU_INFO_LINKS","INFO");
define("MENU_PAGE","Pārskats");
define("MENU_DB_SEARCH","Meklēt datu bāzē");
define("MENU_DB_NOTICES","Meklēt piezīmēs");
define("MENU_DB_REPORTS","Meklēt spiegošanas atskaitēs");
define("MENU_GALAXYVIEW","Galaktikas pārskats");
define("MENU_STATISTICS","Statistika");
define("MENU_ALLYHISTORY","Vēstures statistika");
// 4.7
define("MENU_FLEET_MOVEMENTS","Fleet movements");
define("MENU_COMBAT_REPORTS","Combat reports");
define("MENU_MESSAGES","Ingame messages");

// insert / change
define("MENU_OPTION_LINKS","Opcijas");
define("MENU_DB_REFRESH","Atjaunot datu bāzi");
define("MENU_NOTICES","Piezīmes");
define("MENU_DB_STATUS","Datu bāzes status");
define("MENU_USEROPTIONS","Lietotāju pārskats");
define("MENU_USEROPTIONS2","Akounta opcijas");
define("MENU_USEROPTIONS3","Info par akountiem");
// 4.2
define("MENU_ADMIN","Administrācija");
// 4.3.3
define("MENU_LOGOUT","Iziet");

// Stuff
define("MENU_STUFF","Pārējais");
define("MENU_FORUM_THREAD","Izstrādātāju forums");
define("MENU_DOWNLOADPAGE","Lejuplādēt");
define("MENU_LANGUAGE","Valodas izvēle");
define("MENU_HELP","Palidzība");
// 4.0
define("MENU_TOOLOPTIONS"," Galaxietool uzstādīšana");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1","Pievienots datubāzei");
define("PARSER_ERROR1","Kļūda mēģinot pievienot datu bāzi:");
define("PARSER_ERROR2","Neizdevās izvēlēties datu bāzi!");
define("PARSER_ERROR3","Neizdevās atrast datu bāzi!");
define("PARSER_WRONG_UNIVERSE","Nepareizs visums - faktiskais: \"&1\" gaidītais: \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","OGame Galaxietool - Datu apskates lapa");
define("SHOW_SEARCH","Meklēt datu bāzē");
define("SHOW_ALLYSYMBOL","Alianses abreviatūra");
define("SHOW_PLAYERNAME","Spēlētāja vārds");
define("SHOW_MOONS","Meklēt tikai mēnešus");
define("SHOW_NOTICES","Meklēt tikai planētas ar piezīmēm");
define("SHOW_COLONIES","Tikai planētas kolonizēšanai");
define("SHOW_YES","Jā");
define("SHOW_NO","Nē");
define("SHOW_SEARCHRANGE","Meklēšanas rādiuss");
define("SHOW_SEARCH_IN","Meklēt galaktikā");
define("SHOW_FROM_SYSTEM","No sistēmas");
define("SHOW_FROM_PLANET","No planētas Nr");
define("SHOW_TO","Līdz");
define("SHOW_DESCRIPTION","Meklējot spēlētājus vai alianses ir pieļaujams izmantot simbolu *, piemēram *nick* - atradīs visus spēlētājus, kam vārdā ir &quot;nick&quot;.<br />Nav nepieciešams aizpildīt visus laukus, var meklēt tikai alianses koordinātes, kā ārī visus mēnēšus kādai noteiktai aliansei.");
define("SHOW_SORT_BY","Šķirot pēc");
define("SHOW_GALASYSTEM","Galaktikas/Sistēmas");
define("SHOW_ALLYNAME","Alianses nosaukuma");
define("SHOW_SEARCHBUTTON","Meklēt");
define("SHOW_ADDRESS","Adrese");
define("SHOW_ALLYSORT","Alianse");
define("SHOW_PLANET","Planētas nosaukums");
define("SHOW_STATUS","Status");
define("SHOW_CURRENTNESS","Aktualitāte");
define("SHOW_PLAYER_STATUS","Spēlētāja status");
define("SHOW_PLAYER_STATUS1","Viss");
define("SHOW_PLAYER_STATUS2","Var uzbrukt");
define("SHOW_PLAYER_STATUS3","Neaktīvs");
define("SHOW_HITS","Rezultāti");
define("SHOW_OF","No");
define("SHOW_ASC","Augšanas kārtībā");
define("SHOW_DESC","Dilšanas kārtībā");
define("SHOW_RESULTS","Rezultāti");
define("SHOW_MOON","Mēness");
define("SHOW_UKMOONSIZE","Nezināms");
define("SHOW_DF","Atlūzas");
define("SHOW_DF_LONG","Atkritumu lauks");
define("SHOW_METAL","M");
define("SHOW_METAL_LONG","Metāls");
define("SHOW_CRYSTAL","K");
define("SHOW_CRYSTAL_LONG","Kristāls");
define("SHOW_BOTH","Kopā");
define("SHOW_AT_LEAST","(min.)");
define("SHOW_DATE","Datums");
define("SHOW_DATE_0","Visi");
define("SHOW_DATE_1","Vecs");
define("SHOW_DATE_2","Jauns");
define("SHOW_RANK","Vieta");
define("SHOW_FRANK","Vieta pēc flotēm");
define("SHOW_MEMBERS","Biedri");
define("SHOW_NOTRANKED","Nav top - 1500.");
define("SHOW_NOTICERES","Piezīmes");
define("SHOW_REPORTS","Rādīt tikai planētas ar spiegošanas atskaitēm");
define("SHOW_REPORTS_SHORT","Spiegošana");
define("SHOW_NOTHING","Neizdevās neko atrast");
define("SHOW_ALLIANCE_STATUS","Alianses status");
define("SHOW_NO_STATUS","Nav statusa");
define("SHOW_NAP","NAP");
define("SHOW_ALLIED","Sabiedrotie");
define("SHOW_WAR","Karš");
define("SHOW_BOYCOTT","Boikots");
define("SHOW_NEUTRAL","Neitrals");
define("SHOW_OWN","Sava alianse");
define("SHOW_WING","Spārns");
// obsolete with 5.0
define("SHOW_EXT_OPTIONS1","Rādīt papildus opcijas - meklēšanai pēc vietas, laika un atlūzu meklēšanas.");
define("SHOW_EXT_OPTIONS2","Rādīt papildus opcijas - Jaunas kolonijas meklēšanai, mēnešu, atskaišu, piezīmju, spēlētāju statusa un diplomātijas.");
define("SHOW_EXT_OPTIONS3","Rādīt papildus opcijas - atrasto meklējumu kārtošanas veids.");
// new 5.0
define("SHOW_EXTENDED","advanced search");
define("SHOW_MOON_SELECTION","Planet with moon");
define("SHOW_REPORT_SELECTION","Planet with report");
define("SHOW_FILTER_BY","Exclude from the list");
define("SHOW_FILTER_NONE","Nekas");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Show players without score changes within the last few days");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","OGame Galaxietool - Statusa lappuse");
define("STATUS_DB_STATUS","Datu bāzes status");
define("STATUS_COLOR","Krāsa");
define("STATUS_AGE1","Datu pieaugums pa 1 dienu.");
define("STATUS_AGE2","Aktualitāte 2 - 4 dienas.");
define("STATUS_AGE3","Aktualitāte 4 - 7 dienas.");
define("STATUS_AGE4","Aktualitāte 1 - 2 nedēļas.");
define("STATUS_AGE5","Aktualitāte 2 - 4 nedēļas.");
define("STATUS_AGE6","Dati ir vecāki par mēnesi!");
define("STATUS_AGE7","Vēl nav datu.");
define("STATUS_ON","Iekšā");
define("STYLES_COLOR1","Krāsa1");
define("STYLES_COLOR2","Krāsa1");
define("STYLES_COLOR3","Krāsa3");
define("STYLES_COLOR4","Krāsa4");
define("STYLES_COLOR5","Krāsa5");
define("STYLES_COLOR6","Krāsa6");
define("STYLES_COLOR7","Krāsa7");
// 4.8
define("STATUS_DB_LEGEND","Legend");
define("STATUS_GALAXY","Galaxy Overview");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","OGame Galaxietool - Lietotāju vadība");
define("USER_NAMES","Lietotājs");
define("USER_ERROR","Kļūda");
define("USER_NEWUSER","Pievienot lietotāju");
define("USER_OPTIONS","Opcijas");
define("USER_USERNAME","Lietotāja vārds");
define("USER_PASSWORD","Parole");
define("USER_PASSWORD_CONFIRM","Atkārtot paroli");
define("USER_GALAXY","Galaktika");
define("USER_SEARCH","Meklēt");
define("USER_INSERT","Pievienot");
define("USER_DELETE","Dzēst");
define("USER_DELETE_ENTRY","Jūs tiešam vēlaties dzēst šo lietotāju: "); // new 3.6
define("USER_STATUS","Status");
define("USER_STYLES","Stila opcijas");
define("USER_SUBMIT","Nosūtīt");
define("USER_RESET","Atcelt");
define("USER_YES","Jā");
define("USER_NO","Nē");
define("USER_STYLEPATH","Uz failu  styles.css");
define("USER_PROBES","Spiegošanas atskaite");
define("USER_EMAIL","E-pasts");
define("USER_ERROR1","Nepareiza parole vai nederīgs e-past.");
define("USER_ERROR2","E-pasta adrese ir nederīga.");
define("USER_INGAME","Niks spēlē");
define("USER_ALLYTAG","Alianses abreviatūra");
define("USER_ALLYHISTORY","Vēstures statistika");
define("USER_DIPLOMATIC","Diplomātija");
define("USER_STATSPAGE","Ierakstu skaits statistikā");
define("USER_LINKS","Links");
define("USER_LINKS2","Formats:<br>teksts;url<br>teksts2;url2<br>teksts3;url3");
define("USER_EXPORT_TITLE","Krāsu eksportēšana (BB Codes)");
define("USER_BB_COORDINATES","Koordinātes");
define("USER_BB_MOON","Mēness");
define("USER_BB_DEBRIS","Atlūzu lauki");
define("USER_BB_ALLY","Alianses nosaukums");
define("USER_BB_ALLYDETAILS","Alianses detaļas");
define("USER_BB_PLAYERNAME","Spēlētāja vārds");
define("USER_BB_BANNED","Bloķēts");
define("USER_BB_VACATION","Atvaļinājuma režīms");
define("USER_BB_NOOB","Iesācēju aizsardzība");
define("USER_BB_INACTIVE","Neaktīvs");
define("USER_BB_LONGINACTIVE","Neaktīvie 4 nedēļas");
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
define("VIEW_TITLE","OGame Galaxietool - Sīkāks apskats");
define("VIEW_NODATA","Pagaidām nav datu.");
define("VIEW_GALAXY","Galaktika");
define("VIEW_SYSTEM","Saules sistēma");
define("VIEW_POSITION","Poz.");
define("VIEW_PLANET","Planēta");
define("VIEW_MOON","Mēness");
define("VIEW_TF","Atlūzas");
define("VIEW_PLAYER","Spēlētājs");
define("VIEW_PLAYER_ADD","(Ranks/Status)"); // shortened at 3.6
define("VIEW_ALLY","Alianse");
define("VIEW_ALLY_ADD","Ranks/Biedri"); // cleared at 3.6
define("VIEW_METAL","M");
define("VIEW_CRYSTAL","K");
define("VIEW_COLONISED","Kolonizētas planētas");
define("VIEW_UKMOONSIZE","Nav zināms");
define("VIEW_BACK","Atpakaļ");
define("VIEW_NOTICE","Piezīmes");
define("VIEW_REPORTS","Spiegošana");
define("VIEW_MOONPHALANX","Šī mēness falangas spēj noskanēt līdz šai sistēmai:");
define("VIEW_NOMOONS","Mēneši  netika atrasti");
define("VIEW_IRAKS","Šīs sistēmas planētu raķetes spēj aizlidot līdz šai sistēmai");
define("VIEW_NOIRAKS","netika atrastas Interplanetārās raķetes");
// 4.0
define("VIEW_MOON_DESTROY_CHANCE","Mēness iznīcināšanas iespēja");
define("VIEW_CHANCE_WITH_ONE","Iespēja ar vienu Nāves Zvaigzn");
define("VIEW_CHANCE_WITH_N","Iespēja ar ");
define("VIEW_DEATH_STARS","Nāves zvaigznes");
define("VIEW_DS_DESTROY_CHANCE","Iespēja zaudēt Nāves Zvaigzni");
define("VIEW_TOP","Top");
// new 4.3.5
define("VIEW_GO","Parādīt");
// new 5.0
define("VIEW_DIAMETER","Diameter");

/*********************************************************************
* change_password.php
**********************************************************************/
define("PW_TITLE","OGame Galaxietool - Nomainīt paroli");
define("OLD_PASSWORD","Vecā parole");
define("NEW_PASSWORD","Jaunā parole");
define("CONFIRM_NEW_PASSWORD","Apstiprināt jauno paroli");
define("PW_MISMATCH","Ievadītās jaunās paroles nav vienādas!");
define("PW_ERROR","Vecā parole nav derīga!");
define("UPDATE_DONE","Gatavs.");
// new 4.2
define("TIMEZONE_OFFSET","Laika zonas nobīde ar serveri");
// new 4.3
define("DELETE_ACCOUNT","Dzēst šo Galaxytool lietotāju");
define("DELETE_ACCOUNT_SAFETY_REQUEST","Vai tu tiešām vēlaties dzēt šo Galaxytool akountu?");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","Autorizācija");
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
define("NOTICE_TITLE","OGame Galaxietool - Piezīmes");
define("NOTICE_HEADER","Rediģēt piezīmi");
define("NOTICE_HEADER2","Rediģēt savas piezīmes");
define("NOTICE_PUBLIC","Vai ļaut visiem redzēt tavas piezīmes?");
define("NOTICE_YES","Jā");
define("NOTICE_NO","Nē");
define("NOTICE_TEXT","Piezīmes teksts");
define("NOTICE_SAVE","Saglabāt");
define("NOTICE_DELETED","Ieraksts dzēsts.");
define("NOTICE_SAVED","Ieraksts saglabāts.");
define("NOTICE_RESULTS","Visas piezīmes");
define("NOTICE_USER","Lietotājs");
define("NOTICE_DATE","Datums");
define("NOTICE_EDIT","Rediģēt");
define("NOTICE_DELETE","Dzēst");
define("NOTICE_NEW","Dzēst savu ierakstu");
define("NOTICE_NOTPUBLIC","Piezīme nav visiem pieejama.");
define("NOTICE_ALL","Viss");
define("NOTICE_NONE",SHOW_FILTER_NONE);
define("NOTICE_SEARCH","Meklēt Piezīmēs");
define("NOTICE_SEARCH_SHORT","Meklēt");
define("NOTICE_HITS","Rezultāti");
define("NOTICE_SHOWRESULTS","Rezultāti vienā lapā");
define("NOTICE_OF","No");
define("NOTICE_NOTHING","Meklēšana neko nedeva.");
// 4.0
define("NOTICE_CHARS","Zīmes");
define("NOTICE_PLAYERNAME","Spēlētājs");
define("NOTICE_SHOWALL","Parādīt visas piezīmes.");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","OGame Galaxietool - Spiegošanas atskaites");
define("REPORTS_RESOURCES","Resursi");
define("REPORTS_FLEET","Flotes");
define("REPORTS_DEFENCE","Aizsardzība");
define("REPORTS_BUILDINGS","Celtnes");
define("REPORTS_TECHNOLOGY","Pētniecība");
define("REPORTS_MOON","Mēness");
define("REPORTS_SEARCH","Meklēt atskaitēs");
define("REPORTS_SEARCH_SHORT","Meklēt");
define("REPORTS_HITS","Rezultāti");
define("REPORTS_NOTHING","Meklēšana ne priekš rezultātiem.");
define("REPORTS_ADDRESS","Adrese");
define("REPORTS_CURRENTNESS","Aktualitātes");
define("REPORTS_PLAYERNAME","Spēlētāja vārds");
define("REPORTS_ALLY","Alianse");
define("REPORTS_VIEW","Apskatīt atskaiti");
define("REPORTS_SEARCH_IN","Meklēt galaktikā");
define("REPORTS_FROM_SYSTEM","No sistēmas");
define("REPORTS_TO","Līdz");
define("REPORTS_DELETE","Dzēst");
define("REPORTS_DELETED","Ieraksts dzēsts");
define("REPORTS_RESULTS","Rezultāti lappusē");
define("REPORTS_OF","No");
define("REPORTS_DATE","Datums");
define("REPORTS_DATE_0","Visi");
define("REPORTS_DATE_1","Vecāki par");
define("REPORTS_DATE_2","Jaunāki par");
define("REPORTS_NOTICES","Piezīmes");
define("REPORTS_AT_LEAST_RESOURCES","Pavisam resursi (min.)");
define("REPORTS_SEARCH_EXTENDED","Advancētā meklēšana");
define("REPORTS_FLEET_RESIS","Punkti par floti");
define("REPORTS_DEFENCE_RESIS","Punkti par aizsardzību");
define("REPORTS_ALL_RESIS","Kopējais punktu zaudējums");
define("REPORTS_TECHS","Tehnoloģijas");
define("REPORTS_UNKNOWN_ENTRIES","Nezināmie ieraksti");
define("REPORTS_PARTLY_INSERTED","Ievietots daļēji");
define("REPORTS_FOR_ALL_RES","Visiem resursiem");
define("REPORTS_FOR_TF","Atlūzām");
define("REPORTS_KT","Mazais kravas kuģis");
define("REPORTS_GT","Lielais kravas kuģis ");
define("REPORTS_SS","Kaujas kuģis");
define("REPORTS_REC","Pārstrādātājs");
define("REPORTS_RAIDABLE","Tikai mērķus kurus var aplaupīt");
define("REPORTS_ALL_RESOURCES","Kopā resursi");
// 4.0
define("REPORTS_STUFF","Cits");
define("REPORTS_SPEEDSIM","Izskaitļot Speedsim");
define("REPORTS_DRAGOSIM","Izskaitļot Dragosim");
define("REPORTS_STATUS","Status");
define("REPORTS_ERROR","Radusies kļūda");
// 4.2
define("REPORTS_OWN_REPORTS","Tikai mani pārskati");
 // 4.3.3
define("REPORTS_UPLOAD_BY","Pārskatu atjaunoja");
// 4.4
define("REPORTS_DEPTH","Ziņojuma platums");
define("REPORTS_FLEET_SCORE","Flotes punkti");
define("REPORTS_DEFENCE_SCORE","Aizsardzības punkti");
// 5.0
define("REPORTS_HOURS","hours");
define("REPORTS_MAX_RESULTS_HIT","Your query returned more than &1 hits. Only the first &1 results are show. Please adjust your search request to get less results.");
define("REPORTS_OSIMULATE","Simulate with OSimulate");
define("REPORTS_SHOW_ONLY","Show only");
define("REPORTS_SHOW_PLANETS","Planētas");
define("REPORTS_SHOW_MOONS","Mēneši");
define("REPORTS_OWNER","Reports owned by");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","OGame Galaxietool - Statistika");
define("STATS_TBLHEAD","Statistika");
define("STATS_RANK","Vieta");
define("STATS_PLAYERNAME","Spēlētājs");
define("STATS_SCORE","Punkti");
define("STATS_FLEET","Flote");
define("STATS_RESEARCH","Pētniecība");
define("STATS_ALLYNAME","Alianse");
define("STATS_MEMBERS","Biedri");
define("STATS_STATUS","Status");
define("STATS_NOTHING","Bez statusa");
define("STATS_NAP","Pakts");
define("STATS_ALLIED","Sabiedrotie");
define("STATS_WAR","Karš");
define("STATS_BOYCOTT","Boikots");
define("STATS_NEUTRAL","Neitr. attiecības");
define("STATS_OWN","Mana alianse");
define("STATS_WING","Spārns");
define("STATS_UPDATE","Dati no");
define("STATS_PLAYERSTATS","Spēlētāju statistika");
define("STATS_ALLYSTATS","Alianšu statistika");
// 4.0
define("STATS_DELETE","Dzēs spēlētāju");
define("STATS_CONFIRM_DELETE","Vai jūs tiešām vēlaties dzēst spēlētāju no statistikas?");
define("STATS_CHANGE_PLAYER_STATUS","Spēlētāja statistika");
define("STATS_CHANGE_ALLIANCE_STATUS","Alianses statistika");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","Visi šis alianses biedri saņem izvēlēto statusu. Iepriekšējais status tiksizmainīts. ir iespējams spēlētājam pēc tam piešķirt atsevišķu statusu.");
define("STATS_UNKNOWN","Pārējie");
define("STATS_DETAILS","Sīkāk priekš");
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
define("REGISTER_REGISTRATE","Reģistrācija");
define("REGISTER_LOGINNAME","Logins");
define("REGISTER_PASSWORD","Parole");
define("REGISTER_PASSWORD_CONFIRM","Atkārtot paroli");
define("REGISTER_EMAIL","E-pasts");
define("REGISTER_INGAME","Vārds spēlē");
define("REGISTER_ALLYTAG","Alianses abreviatūra");
define("REGISTER_EMAILVERIFICATION","E-pasta pārbaude");
define("REGISTER_EMAILTEXT","Spied uz šī linka lai beigtu reģistrāciju Galaxietool:");
define("REGISTER_ERROR1","Šis logins ir jau aizņemts.");
define("REGISTER_ERROR2","Kļūda nosūtot vēstuli! Sazinieties ar administratoru.");
define("REGISTER_ERROR3","Kļūda savienojoties ar datu bāzi!");
define("REGISTER_INFO1","Akounts veiksmīgi izveidots.");
define("REGISTER_INFO2","Lai pabeigtu reģistrāciju nospiediet uz saites kas tika nosūtīts uz jūsu e - pastu.");
define("REGISTER_INFO3","E-pasta adrese apstiprināta.Tagad jāgaida kad admins Jūs apstiprinās.");
define("REGISTER_BUTTON","Atpakaļ uz sākumlapu");
define("REGISTER_NEW_SUBJECT","Reģistrēts jauns spēlētājs");
define("REGISTER_NEW_MAILTEXT","Jauns lietotājs piereģistrēts Galaxietool.");
// new 4.2
define("REGISTER_BACK","Back to first page");
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
define("LOSTPW_TITLE","Paroles atjaunošana");
define("LOSTPW_INFO2","Jaunā parole tika izveidota un nosūtīta uz norādīto e-pastu.");
define("LOSTPW_BUTTON1","Pieprasīt paroli");
define("LOSTPW_BUTTON2","Atpakaļ uz sākumlapu");
define("LOSTPW_LOGINNAME","Logins");
define("LOSTPW_EMAIL","E-pasts");
define("LOSTPW_ERROR1","Kļūda pieprasot datus!");
define("LOSTPW_ERROR2","Piemērots ieraksts netika atrasts!");
define("LOSTPW_ERROR3","Kļūda nosūtot vēstuli! Sazinieties ar administratoru.");
define("LOSTPW_EMAIL_SUBJECT","Paroles atjaunošana");
define("LOSTPW_EMAIL_TEXT1","Pieprasītie dati lai ieietu Galaxietool");
define("LOSTPW_EMAIL_TEXT2","Logins");
define("LOSTPW_EMAIL_TEXT3","Parole");
// new 5.0
define("LOSTPW_INFO1","You will receive an email to verify your password reset request.");
define("LOSTPW_CONFIRM_RESET_SUBJECT","Lost password?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","Hello,\n\nyou requested a password reset for the Galaxytool. To generate a new password, click the following link:");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","OGame Galaxietool - Lietotāja informācija");
define("USERINFO_NAMES","Visi lapas lietotāji");
define("USERINFO_DETAIL","Sīkāk par");
define("USERINFO_ERROR1","Lietotājs ar tādu ID nav!");
define("USERINFO_USERNAME","Logins");
define("USERINFO_INGAME","Niks spēlē");
define("USERINFO_EMAIL","E-pasts");
define("USERINFO_ALLYTAG","Alianse");
define("USERINFO_STYLEPATH","Skins");
define("USERINFO_STATUS","Status");
define("USERINFO_ACTIVATE","Aktivizēt lietotāju");
define("USERINFO_LOGINS","Ieiešanu skaits lapā");
define("USERINFO_LASTLOGIN","Pēdējā ieiešana lapā");
define("USERINFO_DATA","Info par ievadītajām sistēmām");
define("USERINFO_NODATA","Lietotājs vēl nav ievadījis datus!");
define("USERINFO_GALAXY","Galaktika");
define("USERINFO_SYSTEMS","Sistēmu skaits");
define("USERINFO_IP","IP adrese");
define("USERINFO_LOGINTIME","Ieiešanas laiks sistēmā");
define("USERINFO_NOLOGIN","Lietotājs vēl nav iegājis.");
define("USERINFO_LAST_GALAXYUPDATE","Pēdējais ievadītais galaktikas pārskats");
define("USERINFO_LAST_PUBLIC_NOTICE","Pēdējā publiskā piezīme");
define("USERINFO_LAST_PRIVATE_NOTICE","Pēdējā personīgā piezīme");
define("USERINFO_NUMBEROF_PUBLIC_NOTICE","Publisko piezīmju skaits");
define("USERINFO_NUMBEROF_PRIVATE_NOTICE","Personīgo piezīmju skaits");
define("USERINFO_ACTIVATED","Akaunts aktivizēts");
define("USERINFO_ACTIVATIONTEXT","Galaxietools aktivizēja tavu akauntu.\n\n Veiksmi izmantojot Galaxietool!");
// new 4.8
define("USERINFO_LAST_SUBMIT","Inserted last data");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","OGame Galaxietool - Online statistika"); // changed at 4.0
define("ALLYHISTORY_TBLHEAD","Pārskats");
define("ALLYHISTORY_PLAYERNAME","Spēlētājs");
define("ALLYHISTORY_ALLYNAME","Alianse");
define("ALLYHISTORY_LASTMONTH","Pēdējā mēneša laikā"); // changed at 4.0
define("ALLYHISTORY_ALL_DATA","Visi esošie dati"); // new 4.0
define("ALLYHISTORY_SHOW","Parādīt statistiku");
define("ALLYHISTORY_TIMESPAN","Ilgums");
define("ALLYHISTORY_PROGESS","Pieaugums");
define("ALLYHISTORY_SCORE","Punkti");
define("ALLYHISTORY_FSCORE","Punkti par flotēm"); // new 4.0
define("ALLYHISTORY_RSCORE","Punkti par pētniecību"); // new 4.0
define("ALLYHISTORY_MEMBER","Biedri"); // new 4.0
define("ALLYHISTORY_NOTHING","Neko neizdevās atrast");
define("ALLYHISTORY_DETAILS","Detaļas");
define("ALLYHISTORY_SHOW_ADDRESS","Kordinātes");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","Info par spēlētājiem");
define("DETAILEDINFO_ALLYINFO_TITLE","Info par aliansēm");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","Sīkāka informācija par spēlētāju");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","Sīkāka informācija par aliansi");
define("DETAILEDINFO_NO_ALLIANCE","Nav");
define("DETAILEDINFO_SCORE","Statistika pa punktiem");
define("DETAILEDINFO_FLEET","Statistika pa flotēm");
define("DETAILEDINFO_RESEARCH","Statistika pa pētniecībām");
define("DETAILEDINFO_RANK","Vieta");
define("DETAILEDINFO_POINTS","Punkti");
define("DETAILEDINFO_KNOWN_PLANETS","Zināmās planētas");
define("DETAILEDINFO_MOONS","Zināmie mēneši");
define("DETAILEDINFO_PHALANX_AREA","Falangas atskaite");
define("DETAILEDINFO_NO_PHALANX_AREA","Neizdevās atrast falangu");
define("DETAILEDINFO_NOTICES","Piezīmes");
define("DETAILEDINFO_NO_NOTICES","Nav piezīmju");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","Zināmās iepriekšējās spēlētāja alianses");
define("DETAILEDINFO_RESOURCES_PER_HOUR","Resusrsi stundā");
define("DETAILEDINFO_RESOURCES_PER_DAY","Resursi dienā");
define("DETAILEDINFO_RESOURCES_PER_WEEK","Resursi nedēļā");
define("DETAILEDINFO_RESOURCES_PER_MONTH","resursi mēnesī (30 dienās)");
define("DETAILEDINFO_METAL","Metāls");
define("DETAILEDINFO_CRYSTAL","Kristāls");
define("DETAILEDINFO_DEUTERIUM","Deitērijs");
define("DETAILEDINFO_UNKNOWN","Nezināms");
define("DETAILEDINFO_SCORE_DISTRIBUTION","Punktu sadalījums");
// new 4.2
define("DETAILEDINFO_GENERAL","Detaļas");
define("DETAILEDINFO_MEMBERS","Biedri");
define("DETAILEDINFO_GRAPHS","Grafiks");
define("DETAILEDINFO_RESOURCES","Resursi");
define("DETAILEDINFO_FLEET_TAB","Flotes");
define("DETAILEDINFO_TECH","Pētniecība");
define("DETAILEDINFO_FLEET_DETAIL","Sum / (spēlētāji vidēji) starp visām pieejamajamajām atskaitēm");
define("DETAILEDINFO_TECH_DETAIL","Vidēji no visas pieejamās lietotajinformācijas");
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
define("ADMIN_TITLE","Galaxytool administrēšana");
define("ADMIN_DISCLAMER","Uzmanību: Lietot jebkuru no šiem scriptiem ir uz Jūsu atbildību! Vairums no tiem dzēš datus.");
define("ADMIN_INCONSISTENCIES","Neatbilstība datubāzē");
define("ADMIN_PLANETS","Planētas 0 slotā vai planētas slotos kas lielāki par 15");
define("ADMIN_GALAXIES","Dzēst galaktikas lielākas par &1 ");
define("ADMIN_PLAYERS","Dzēst spēlētājus bez OGame playerid - kopēt spēlētāja ievadītos datus");
define("ADMIN_REPORTS","Dzēst ziņojumus kuros vaira nav planētas");
define("ADMIN_MISC","Dažādi");
define("ADMIN_RESET","Reset Galaxytool (Tikai lietotāji un Iptabulas netiks dzēstas)");
define("ADMIN_OLD_PLAYERS","Dzēst spēlētāju ievades kas vecākas par &1 dienām");
define("ADMIN_OLD_REPORTS","Dzēst atskaites kas vecākas par &1 dienām");
define("ADMIN_LOADING","Neaizve šo lapu kamēr lapa pārlādējas.");
define("ADMIN_STATUS","Tavu pieprasījumu status");
define("ADMIN_SELECTION","Vsimaz vienai ievadei jābut aktivizētai");
define("ADMIN_SAFETY","Vai esi pārliecināts ka vēlies palaist  scriptu(us) ?");
define("ADMIN_DONE","Darīts");
define("ADMIN_NOTBD","Nekas netika izdarīts");
// new 4.3
define("ADMIN_OLD_GALAXIES","Dzēst galaktikas pārskatus kas vecākas par &1 dienām");
define("ADMIN_UNUSED_PLAYERS","Dzēst spēlētāju kurš neatjauno galaktikas pārskatus");
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