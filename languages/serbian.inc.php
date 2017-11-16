<?php
/*
 * defines the characters used in OGame to indicate player status
 */
define("PLAYER_BANNED","б");
define("PLAYER_VACATION_MODE","о");
define("PLAYER_NOOB","с");
define("PLAYER_INACTIVE","и");
define("PLAYER_LONG_INACTIVE","И");
define("PLAYER_OUTLAW","o");

/*********************************************************************/
/***************************** public ********************************/
/*********************************************************************/
//index.php
define("L_USERNAME","Корисничко име");
define("L_PASSWORD","Шифра");
define("L_LOGINFAILURE","Корисничко име или Шифра су погрешни или Ваш налог није јос активиран.");
define("L_TOKENFAILURE","Your logon key is wrong or your account is not activated yet.");
define("L_LOGINTEXT","Улогујте се.");
define("L_LANGUAGE","Могући језици:");
define("L_TIMEOUT","Сесија истекла!");
define("L_REGISTER","Региструј се");
define("L_PWLOST","Заборављена шифра");
define("INDEX_TITLE","OGame Galaxietool - Преглед");
define("INDEX_INFO","Информације");
define("INDEX_ENTRIES","Укупан број система");
define("INDEX_ENTRIES_LASTWEEK","Системи стари 1 недељу");
define("INDEX_ENTRIES_TO_OLD","Системи старији од месец дана");
define("INDEX_REGISTERED_USERS","Регистровани корисници");
define("INDEX_PAGEFORWARD","Ако Ваш броусер не подржава page forwarding, кликните овде.");
define("INDEX_NOTICES","Напомене");
define("INDEX_PLAYERS","Статистике играча");
define("INDEX_ALLIES","Статистике Савеѕа");
define("INDEX_REPORTS","Шпијунски извештаји");
define("INDEX_VERSION","Последња верзија за download");
define("INDEX_LATEST_VERSION","Не постоји новија верзија");
define("INDEX_SHOUTBOX","Огласна табла");
define("INDEX_NOENTRY","No shouts yet");
define("INDEX_COMMENT","Your Shout");
define("INDEX_INSERT","Убаци");
define("INDEX_UMOD","Играч у статусу одсуства");
define("INDEX_NO_MOONS","Број месеца");
define("INDEX_NO_EMPTY_SYSTEMS","Број празних система");
define("INDEX_NO_FULL_SYSTEMS","Број комплетно попунјених система");
define("INDEX_NO_TARGETS","Број потенцијалних мета");
// 4.0
define("INDEX_USERINFO","Број корисника");
define("INDEX_ONLINE","Трнутно активних корисника");
define("INDEX_TODAY","Данас активни корисници");
define("INDEX_ALL","Укупан број приступа");
// 4.3.7
define("GENERAL_LOAD_FORM","Load form data");
define("GENERAL_SAVE_FORM","Сачувај форму");
define("GENERAL_SAVE_AS_TEXT","Сачувај као");
define("GENERAL_SAVE","Сачувај");
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
define("GENERAL_OPEN_IN_NEW_WINDOW","Open Link in New Window");
// 5.1
define("GENERAL_UNIT_OF_MEASURE_DAYS","Days");

/*********************************************************************/
/***************************** internal ******************************/
/*********************************************************************/
// index.php
define("PROGRAM_NAME","OGame Galaxytool");
define("SHORTNAME","Galaxytool");
define("BACK_INDEX","Повратак на главну страну");
define("UNIVERSE","Галаксија");

// search
define("MENU_INFO_LINKS","Информације");
define("MENU_PAGE","Преглед");
define("MENU_DB_SEARCH","Тражи у бази");
define("MENU_DB_NOTICES","Тражи у напоменама");
define("MENU_DB_REPORTS","Тражи у извештајима");
define("MENU_GALAXYVIEW","Преглед галаксије");
define("MENU_STATISTICS","Статистике");
define("MENU_ALLYHISTORY","Преглед претходних промена");
// 4.7
define("MENU_FLEET_MOVEMENTS","Fleet movements");
define("MENU_COMBAT_REPORTS","Combat reports");
define("MENU_MESSAGES","Ingame messages");

// insert / change
define("MENU_OPTION_LINKS","Опције");
define("MENU_DB_REFRESH","Унеси у базу");
define("MENU_NOTICES","Напомене");
define("MENU_DB_STATUS","Статус баѕе");
define("MENU_USEROPTIONS","Управљање корисницима");
define("MENU_USEROPTIONS2","Корисничке опције");
define("MENU_USEROPTIONS3","User information");
// 4.2
define("MENU_ADMIN","Администрација");
// 4.3.3
define("MENU_LOGOUT","Logout");

// Stuff
define("MENU_STUFF","Разно");
define("MENU_FORUM_THREAD","Форум развојног тима");
define("MENU_DOWNLOADPAGE","Страна за download ");
define("MENU_LANGUAGE","Избор језика");
define("MENU_HELP","Помоћ");
// 4.0
define("MENU_TOOLOPTIONS","Опције Galaxytool-а");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1"," убачено је у базу података.");
define("PARSER_ERROR1","Грешка при покушају уноса следећих координата:");
define("PARSER_ERROR2","Не може да пронађе баз података!");
define("PARSER_ERROR3","Не може да пронађе сервер базе података!");
define("PARSER_WRONG_UNIVERSE","Wrong universe - actual: \"&1\"  expected: \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","OGame Galaxytool - Страна ѕа претрагу");
define("SHOW_SEARCH","Тражи у бази");
define("SHOW_ALLYSYMBOL","Савеѕни Таг");
define("SHOW_PLAYERNAME","Име играча");
define("SHOW_MOONS","Планете које имају месец");
define("SHOW_NOTICES","Планете са напоменама");
define("SHOW_COLONIES","Планете ѕа колонизацију");
define("SHOW_YES","Да");
define("SHOW_NO","Не");
define("SHOW_SEARCHRANGE","Од-до");
define("SHOW_SEARCH_IN","Преглед галаксије");
define("SHOW_FROM_SYSTEM","од система");
define("SHOW_FROM_PLANET","од позиције планете");
define("SHOW_TO","до");
define("SHOW_DESCRIPTION","You can use wildcards * for player or alliance names. So you can find all players with &quot;name&quot; in their name.<br />Only fill those fields you want to specify.");
define("SHOW_SORT_BY","Групиши по");
define("SHOW_GALASYSTEM","Галаксија/Систем");
define("SHOW_ALLYNAME","Име Савеза");
define("SHOW_SEARCHBUTTON","Претражи");
define("SHOW_ADDRESS","Адреса");
define("SHOW_ALLYSORT","Савез");
define("SHOW_PLANET","Име Планете");
define("SHOW_STATUS","Статус");
define("SHOW_CURRENTNESS","Последнји пут ажурирано");
define("SHOW_PLAYER_STATUS","Статус Играча");
define("SHOW_PLAYER_STATUS1","сви");
define("SHOW_PLAYER_STATUS2","могуће мете");
define("SHOW_PLAYER_STATUS3","неактиван");
define("SHOW_HITS","Hits");
define("SHOW_OF","of");
define("SHOW_ASC","растући");
define("SHOW_DESC","опадајући");
define("SHOW_RESULTS","hits per page");
define("SHOW_MOON","Месецn");
define("SHOW_UKMOONSIZE","непознат");
define("SHOW_DF","DF");
define("SHOW_DF_LONG","Рушевине");
define("SHOW_METAL","M");
define("SHOW_METAL_LONG","Метал");
define("SHOW_CRYSTAL","К");
define("SHOW_CRYSTAL_LONG","Кристал");
define("SHOW_BOTH","заједно");
define("SHOW_AT_LEAST","(најманје)");
define("SHOW_DATE","Датум");
define("SHOW_DATE_0","небитно");
define("SHOW_DATE_1","старије од");
define("SHOW_DATE_2","није старије од");
define("SHOW_RANK","Ранк");
define("SHOW_FRANK","Ранк флоте");
define("SHOW_MEMBERS","Чланови");
define("SHOW_NOTRANKED","Подаци недоступни");
define("SHOW_NOTICERES","Напомене");
define("SHOW_REPORTS","Само планете са извештајима");
define("SHOW_REPORTS_SHORT","Извештаји");
define("SHOW_NOTHING","Нема пронађених података.");
define("SHOW_ALLIANCE_STATUS","Статус Савеза");
define("SHOW_NO_STATUS","без статуса");
define("SHOW_NAP","NAP");
define("SHOW_ALLIED","Савезник");
define("SHOW_WAR","Рат");
define("SHOW_BOYCOTT","Бојкот");
define("SHOW_NEUTRAL","Неутрални");
define("SHOW_OWN","твој савез");
define("SHOW_WING","твој винг");
// obsolete with 5.0
define("SHOW_EXT_OPTIONS1","Show more search options for range, rank, date or debrisfield search.");
define("SHOW_EXT_OPTIONS2","Show more search options for colonies, moons, reports, notices, playerstatus or diplomatic status.");
define("SHOW_EXT_OPTIONS3","Show more search options for sorting of search results.");
// new 5.0
define("SHOW_EXTENDED","advanced search");
define("SHOW_MOON_SELECTION","Planet with moon");
define("SHOW_REPORT_SELECTION","Planet with report");
define("SHOW_FILTER_BY","Exclude from the list");
define("SHOW_FILTER_NONE","нико");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Show players without score changes within the last few days");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","OGame Galaxytool - Statuspage");
define("STATUS_DB_STATUS","Status of Database");
define("STATUS_COLOR","Боја");
define("STATUS_AGE1","подаци 1 дан стари.");
define("STATUS_AGE2","подаци 2 - 4 дана стари.");
define("STATUS_AGE3","подаци 4 - 7 дана стари.");
define("STATUS_AGE4","подаци 1 - 2 недеље стари.");
define("STATUS_AGE5","подаци 2 - 4 недеље стари.");
define("STATUS_AGE6","подаци старији од 1 месеца!");
define("STATUS_AGE7","Нема доступних података.");
define("STATUS_ON","on");
define("STYLES_COLOR1","Боја1");
define("STYLES_COLOR2","Боја2");
define("STYLES_COLOR3","Боја3");
define("STYLES_COLOR4","Боја4");
define("STYLES_COLOR5","Боја5");
define("STYLES_COLOR6","Боја6");
define("STYLES_COLOR7","Боја7");
// 4.8
define("STATUS_DB_LEGEND","Legend");
define("STATUS_GALAXY","Galaxy Overview");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","Управљање корисницима");
define("USER_NAMES","Корисник");
define("USER_ERROR","Грешка");
define("USER_NEWUSER","Нови корисник");
define("USER_OPTIONS","Опције");
define("USER_USERNAME","Корисничко име");
define("USER_PASSWORD","Шифра");
define("USER_PASSWORD_CONFIRM","Потврди Шифру");
define("USER_GALAXY","Галаксија");
define("USER_SEARCH","Тражи");
define("USER_INSERT","Убаци");
define("USER_DELETE","Обриши");
define("USER_DELETE_ENTRY","Да ли желите да обришете корисника? ");
define("USER_STATUS","Погледај статистике");
define("USER_STYLES","Измени приказ");
define("USER_SUBMIT","Прихвати");
define("USER_RESET","Ресетуј");
define("USER_YES","Да");
define("USER_NO","Не");
define("USER_STYLEPATH","Адреса до styles.css");
define("USER_PROBES","Погледај/Додај извештаје о шпијунажи");
define("USER_EMAIL","Email");
define("USER_ERROR1","Погрешна шифра или погрешан email.");
define("USER_ERROR2","Email погрешан.");
define("USER_INGAME","In-game Име");
define("USER_ALLYTAG","Савезни таг");
define("USER_ALLYHISTORY","Преглед промена");
define("USER_DIPLOMATIC","Измени дипломатски статус");
define("USER_STATSPAGE","Број измена на статистичкој страници");
define("USER_LINKS","Линкови");
define("USER_LINKS2","Format:<br>text;url<br>text2;url2<br>text3;url3");
define("USER_EXPORT_TITLE","Експорт боја (BB Codes)");
define("USER_BB_COORDINATES","Координате");
define("USER_BB_MOON","Месец");
define("USER_BB_DEBRIS","Рушевине");
define("USER_BB_ALLY","Име Савеѕа");
define("USER_BB_ALLYDETAILS","Деталји савеза");
define("USER_BB_PLAYERNAME","Име Играча");
define("USER_BB_BANNED","banned");
define("USER_BB_VACATION","мод одсуства");
define("USER_BB_NOOB","noob");
define("USER_BB_INACTIVE","Неактиван");
define("USER_BB_LONGINACTIVE","Дуго неактиван");
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
define("VIEW_TITLE","OGame Galaxytool - Преглед Галаксије");
define("VIEW_NODATA","Подаци недоступни.");
define("VIEW_GALAXY","Галаксија");
define("VIEW_SYSTEM","Систем");
define("VIEW_POSITION","Поз.");
define("VIEW_PLANET","Планета");
define("VIEW_MOON","Месец");
define("VIEW_TF","DF");
define("VIEW_PLAYER","Играч");
define("VIEW_PLAYER_ADD","(Ранк / Статус)");
define("VIEW_ALLY","Савез");
define("VIEW_ALLY_ADD","(Ранк / Члан)");
define("VIEW_METAL","M");
define("VIEW_CRYSTAL","К");
define("VIEW_COLONISED","Насељене планете");
define("VIEW_UKMOONSIZE","непознато");
define("VIEW_BACK","назад");
define("VIEW_NOTICE","Напомене");
define("VIEW_REPORTS","Извештаји");
define("VIEW_MOONPHALANX","Ови месеци могу скенирати овај систем:");
define("VIEW_NOMOONS","Месеци не постоје.");
define("VIEW_IRAKS","Следећа планета може дохватити овај систем са Интерпланетарним ракетама:");
define("VIEW_NOIRAKS","Интерпланетарне ракете не постоје.");
// 4.0
define("VIEW_MOON_DESTROY_CHANCE","Шанса за уништење месеца");
define("VIEW_CHANCE_WITH_ONE","Шанса са једном звездом");
define("VIEW_CHANCE_WITH_N","Шанса са ");
define("VIEW_DEATH_STARS","звезда смрти");
define("VIEW_DS_DESTROY_CHANCE","Шанса за губтак звезде(а)");
define("VIEW_TOP","Врх");
// new 4.3.5
define("VIEW_GO","go");
// new 5.0
define("VIEW_DIAMETER","Diameter");

/*********************************************************************
* change_password.php
**********************************************************************/
define("PW_TITLE","OGame Galaxytool - Промена шифре");
define("OLD_PASSWORD","стара шифра");
define("NEW_PASSWORD","нова шифра");
define("CONFIRM_NEW_PASSWORD","потврди нову шифру");
define("PW_MISMATCH","Шифра се не слаже!");
define("PW_ERROR","Унета стара шифра се не слаже!");
define("UPDATE_DONE","Ажурирање успешно.");
// new 4.2
define("TIMEZONE_OFFSET","Временска зона сервера");
// new 4.3
define("DELETE_ACCOUNT","Обриши овај Galaxytool налог");
define("DELETE_ACCOUNT_SAFETY_REQUEST","Да ли заиста желите да обришете овај Galaxytool налог?");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","Ауторизација");
define("CH_PASSWD_ADMIN","Админ");
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
define("NOTICE_TITLE","OGame Galaxytool - Напомене");
define("NOTICE_HEADER","измени напомену");
define("NOTICE_HEADER2","Измени наше напомене");
define("NOTICE_PUBLIC","Доступно осталима ?");
define("NOTICE_YES","да");
define("NOTICE_NO","не");
define("NOTICE_TEXT","Текст напомене");
define("NOTICE_SAVE","Сачувај");
define("NOTICE_DELETED","Запис обрисан");
define("NOTICE_SAVED","Запис сачуван.");
define("NOTICE_RESULTS","Сви резултати");
define("NOTICE_USER","Корисник");
define("NOTICE_DATE","Датум");
define("NOTICE_EDIT","Измени");
define("NOTICE_DELETE","Обриши");
define("NOTICE_NEW","Креирај свој запис");
define("NOTICE_NOTPUBLIC","Напомена није за јавност .");
define("NOTICE_ALL","сви");
define("NOTICE_NONE",SHOW_FILTER_NONE);
define("NOTICE_SEARCH","Тражи у напоменама");
define("NOTICE_SEARCH_SHORT","Тражи");
define("NOTICE_HITS","Hits");
define("NOTICE_SHOWRESULTS","hits per page");
define("NOTICE_OF","of");
define("NOTICE_NOTHING","Нема записа");
// 4.0
define("NOTICE_CHARS","Карактери");
define("NOTICE_PLAYERNAME","Играч");
define("NOTICE_SHOWALL","Прикази све напомене");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","OGame Galaxytool - Итвештаји шпијунаже");
define("REPORTS_RESOURCES","Ресурси");
define("REPORTS_FLEET","Флота");
define("REPORTS_DEFENCE","Одбрана");
define("REPORTS_BUILDINGS","Зграде");
define("REPORTS_TECHNOLOGY","Истраживање");
define("REPORTS_MOON","Месец");
define("REPORTS_SEARCH","Тражу у извештајима шпијунаже");
define("REPORTS_SEARCH_SHORT","Тражи");
define("REPORTS_HITS","Hits");
define("REPORTS_NOTHING","Нема података");
define("REPORTS_ADDRESS","Адреса");
define("REPORTS_CURRENTNESS","Currentness");
define("REPORTS_PLAYERNAME","Име играча");
define("REPORTS_ALLY","Савезник");
define("REPORTS_VIEW","погледај Извештај");
define("REPORTS_SEARCH_IN","Тражи у галаксији");
define("REPORTS_FROM_SYSTEM","од Система");
define("REPORTS_TO","до");
define("REPORTS_DELETE","обриши");
define("REPORTS_DELETED","Запис обрисан");
define("REPORTS_RESULTS","hits per page");
define("REPORTS_OF","од");
define("REPORTS_DATE","Датум");
define("REPORTS_DATE_0","није битно");
define("REPORTS_DATE_1","старије од");
define("REPORTS_DATE_2","није старије од");
define("REPORTS_NOTICES","Напомене");
define("REPORTS_AT_LEAST_RESOURCES","Ресурси (најманје)");
define("REPORTS_SEARCH_EXTENDED","проширена претрага");
define("REPORTS_FLEET_RESIS","Флота- резултат");
define("REPORTS_DEFENCE_RESIS","Одбрана- резултат");
define("REPORTS_ALL_RESIS","ѕбир");
define("REPORTS_TECHS","Techs");
define("REPORTS_UNKNOWN_ENTRIES","непоѕнати уноси");
define("REPORTS_PARTLY_INSERTED","делимично унето");
define("REPORTS_FOR_ALL_RES","for all raidable resources");
define("REPORTS_FOR_TF","за све рушевине");
define("REPORTS_KT","Мали транспортери");
define("REPORTS_GT","Велики транспортери");
define("REPORTS_SS","Борбени брод");
define("REPORTS_REC","Рециклер");
define("REPORTS_RAIDABLE","Only raidable targets");
define("REPORTS_ALL_RESOURCES","Сви ресурси");
// 4.0
define("REPORTS_STUFF","Разно");
define("REPORTS_SPEEDSIM","Симулирај са Speedsim");
define("REPORTS_DRAGOSIM","Симулирај са Dragosim");
define("REPORTS_STATUS","Статус");
define("REPORTS_ERROR","Грешка");
// 4.2
define("REPORTS_OWN_REPORTS","Само моји извештаји");
// 4.3.3
define("REPORTS_UPLOAD_BY","Извештај убацио у базу:");
// 4.4
define("REPORTS_DEPTH","Report depth");
define("REPORTS_FLEET_SCORE","износ флоте");
define("REPORTS_DEFENCE_SCORE","износ одбране");
// 5.0
define("REPORTS_HOURS","hours");
define("REPORTS_MAX_RESULTS_HIT","Your query returned more than &1 hits. Only the first &1 results are show. Please adjust your search request to get less results.");
define("REPORTS_OSIMULATE","Simulate with OSimulate");
define("REPORTS_SHOW_ONLY","Show only");
define("REPORTS_SHOW_PLANETS","Планете");
define("REPORTS_SHOW_MOONS","Месеци");
define("REPORTS_OWNER","Reports owned by");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","OGame Galaxytool - Статистике");
define("STATS_TBLHEAD","Статистике");
define("STATS_RANK","Ранг");
define("STATS_PLAYERNAME","Име Играча");
define("STATS_ALLYNAME","Савезни Таг");
define("STATS_SCORE","Износ");
define("STATS_FLEET","Флота");
define("STATS_RESEARCH","Истраживанје");
define("STATS_MEMBERS","Чланови");
define("STATS_STATUS","Статус");
define("STATS_NOTHING","нема статус");
define("STATS_NAP","NAP");
define("STATS_ALLIED","Савезник");
define("STATS_WAR","Рат");
define("STATS_BOYCOTT","Бојкот");
define("STATS_NEUTRAL","Неутрални");
define("STATS_OWN","Твој савез");
define("STATS_WING","Твој wing");
define("STATS_UPDATE","Убаци податке са");
define("STATS_PLAYERSTATS","Статус играча");
define("STATS_ALLYSTATS","Статус савеза");
// 4.0
define("STATS_DELETE","Да ли желите да обришете овај запис ?");
define("STATS_CONFIRM_DELETE","Да ли заиста желите да обришете овај запис?");
define("STATS_CHANGE_PLAYER_STATUS","Статус играча");
define("STATS_CHANGE_ALLIANCE_STATUS","Статус савеза");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","Сви чланови овог савеза добијају изабрани статус. Any previous status will be overwritten. You may change the status of some players afterwards.");
define("STATS_UNKNOWN","Rest");
define("STATS_DETAILS","Details for");
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
define("REGISTER_REGISTRATE","Register");
define("REGISTER_LOGINNAME","Login-Name");
define("REGISTER_PASSWORD","Шифра");
define("REGISTER_PASSWORD_CONFIRM","Confirm Шифра");
define("REGISTER_EMAIL","Email");
define("REGISTER_INGAME","Ingame-Name");
define("REGISTER_ALLYTAG","Allytag");
define("REGISTER_EMAILVERIFICATION","Emailcheck");
define("REGISTER_EMAILTEXT","Please visit the following link to confirm your registration at the Galaxytool.");
define("REGISTER_ERROR1","Login-Корисничко име already used.");
define("REGISTER_ERROR2","Error while trying to send an email. Please contact your admin.");
define("REGISTER_ERROR3","Error while trying to send data to the database!");
define("REGISTER_INFO1","Your account was created.");
define("REGISTER_INFO2","Please visit the link in your email to confirm the registration.");
define("REGISTER_INFO3","Account confirmed. Your admin needs to activate it now.");
define("REGISTER_BUTTON","Back to main page");
define("REGISTER_NEW_SUBJECT","A new user registered at the Galaxytool");
define("REGISTER_NEW_MAILTEXT","A new user registered himself.");
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
define("LOSTPW_TITLE","Lost my Шифра");
define("LOSTPW_INFO2","A new Шифра was generated and send to your email address.");
define("LOSTPW_BUTTON1","get new Шифра");
define("LOSTPW_BUTTON2","Back to main page");
define("LOSTPW_LOGINNAME","Login-Name");
define("LOSTPW_EMAIL","Email");
define("LOSTPW_ERROR1","Error while trying to send data to the database!");
define("LOSTPW_ERROR2","No matching entry found!");
define("LOSTPW_ERROR3","Error while trying to send an email. Please contact your admin.");
define("LOSTPW_EMAIL_SUBJECT","Your new Шифра you requested");
define("LOSTPW_EMAIL_TEXT1","Here is your new login for the Galaxytool");
define("LOSTPW_EMAIL_TEXT2","Корисничко име");
define("LOSTPW_EMAIL_TEXT3","Шифра");
// new 5.0
define("LOSTPW_INFO1","You will receive an email to verify your password reset request.");
define("LOSTPW_CONFIRM_RESET_SUBJECT","Lost password?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","Hello,\n\nyou requested a password reset for the Galaxytool. To generate a new password, click the following link:");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","OGame Galaxytool - Корисничке информације");
define("USERINFO_NAMES","Сви корисници овог алата");
define("USERINFO_DETAIL","детаљне информације о");
define("USERINFO_ERROR1","Не постоји корисник са овим ID!");
define("USERINFO_USERNAME","Корисничко име");
define("USERINFO_INGAME","In-game име");
define("USERINFO_EMAIL","Email");
define("USERINFO_ALLYTAG","Савез");
define("USERINFO_STYLEPATH","Маска");
define("USERINFO_STATUS","Статус");
define("USERINFO_ACTIVATE","Активни играч");
define("USERINFO_LOGINS","Број приступа");
define("USERINFO_LASTLOGIN","Последнји Приступ");
define("USERINFO_DATA","Информације о унетим системима");
define("USERINFO_NODATA","Овај корисник још није унео ниједан систем!");
define("USERINFO_GALAXY","Галаксија");
define("USERINFO_SYSTEMS","Број система");
define("USERINFO_IP","ИП адреса");
define("USERINFO_LOGINTIME","Login");
define("USERINFO_NOLOGIN","Играч се није никада улоговао.");
define("USERINFO_LAST_GALAXYUPDATE","Последњи приказ галаксије убачен");
define("USERINFO_LAST_PUBLIC_NOTICE","Последња званичних напомена");
define("USERINFO_LAST_PRIVATE_NOTICE","Последња приватна напомена");
define("USERINFO_NUMBEROF_PUBLIC_NOTICE","Број званичних напомена");
define("USERINFO_NUMBEROF_PRIVATE_NOTICE","Број приватних напомена");
define("USERINFO_ACTIVATED","Налог активан");
define("USERINFO_ACTIVATIONTEXT","Galaxytool админ је активирао Ваш налог.\n\nУживајте са Galaxytool-ом!");
// new 4.8
define("USERINFO_LAST_SUBMIT","Inserted last data");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","OGame Galaxytool - Историја савеза");
define("ALLYHISTORY_TBLHEAD","Преглед претходних промена");
define("ALLYHISTORY_PLAYERNAME","Име играча");
define("ALLYHISTORY_ALLYNAME","Савез");
define("ALLYHISTORY_LASTMONTH","Последњи месец"); // changed at 4.0
define("ALLYHISTORY_ALL_DATA","све доступне информације"); // new 4.0
define("ALLYHISTORY_SHOW","прикази статистике");
define("ALLYHISTORY_TIMESPAN","Временски размак");
define("ALLYHISTORY_PROGESS","НАпредак");
define("ALLYHISTORY_SCORE","Поени");
define("ALLYHISTORY_FSCORE","Флота поени"); // new 4.0
define("ALLYHISTORY_RSCORE","Истраживање Поени"); // new 4.0
define("ALLYHISTORY_MEMBER","Чланови"); // new 4.0
define("ALLYHISTORY_NOTHING","нема пронађених података");
define("ALLYHISTORY_DETAILS","Детаљи");
define("ALLYHISTORY_SHOW_ADDRESS","Координате");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","Информације о играчу");
define("DETAILEDINFO_ALLYINFO_TITLE","Информације о савезу");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","Детаљне информације о играчу");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","Детаљнe информације о савезу");
define("DETAILEDINFO_NO_ALLIANCE","ништа");
define("DETAILEDINFO_SCORE","Позиција ранг");
define("DETAILEDINFO_FLEET","Статистика флоте");
define("DETAILEDINFO_RESEARCH","Статистика истраживања");
define("DETAILEDINFO_RANK","Ранг");
define("DETAILEDINFO_POINTS","Поени");
define("DETAILEDINFO_KNOWN_PLANETS"," познате планете");
define("DETAILEDINFO_MOONS","познати месеци");
define("DETAILEDINFO_PHALANX_AREA","Фаланга домет");
define("DETAILEDINFO_NO_PHALANX_AREA","Нема фаланге");
define("DETAILEDINFO_NOTICES","Напомене");
define("DETAILEDINFO_NO_NOTICES","Нема напомена");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","Претходни савези");
define("DETAILEDINFO_RESOURCES_PER_HOUR","Ресурси на сат");
define("DETAILEDINFO_RESOURCES_PER_DAY","Ресурси на дан");
define("DETAILEDINFO_RESOURCES_PER_WEEK","Ресурси недељно");
define("DETAILEDINFO_RESOURCES_PER_MONTH","Ресурси месечно (30 дана)");
define("DETAILEDINFO_METAL","Метал");
define("DETAILEDINFO_CRYSTAL","Кристал");
define("DETAILEDINFO_DEUTERIUM","Деутеријум");
define("DETAILEDINFO_UNKNOWN","непознато");
define("DETAILEDINFO_SCORE_DISTRIBUTION","Score distribution");
// new 4.2
define("DETAILEDINFO_GENERAL","Детаљи");
define("DETAILEDINFO_MEMBERS","Чланови");
define("DETAILEDINFO_GRAPHS","Graphs");
define("DETAILEDINFO_RESOURCES","Ресурси");
define("DETAILEDINFO_FLEET_TAB","Флота");
define("DETAILEDINFO_TECH","Истраживање");
define("DETAILEDINFO_FLEET_DETAIL","Збир / (просек играча) у свим доступним извештајима");
define("DETAILEDINFO_TECH_DETAIL"," Просек свих доступних информација о играчима");
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
define("ADMIN_TITLE","Администрација Galaxytool-а");
define("ADMIN_DISCLAMER","Упозорење: Покретање било које од ових скрипти на сопствену одговорност! Највећи број је намењен брисању података.");
define("ADMIN_INCONSISTENCIES","Неповезаност у бази");
define("ADMIN_PLANETS","Обрисати планете на позицији 0 или веће од 15");
define("ADMIN_GALAXIES","Обрисати галаксије веће од &1 ");
define("ADMIN_PLAYERS","Обрисати играче без огаме налога - води дуплиранима подацима о корисницима");
define("ADMIN_REPORTS","Обрисати извештаје тамо где планете више не постоје");
define("ADMIN_MISC","Разно");
define("ADMIN_RESET","РЕсетуј Galaxytool (само корисници и ИП адресе се не бришу)");
define("ADMIN_OLD_PLAYERS","Обриши податке које корисници уносе старије од  &1 дана");
define("ADMIN_OLD_REPORTS","Обриши извештаје старије од &1 дана");
define("ADMIN_LOADING","НЕ затварати овај прозор док се страна не учита.");
define("ADMIN_STATUS","Стаус Ваших захтева");
define("ADMIN_SELECTION","Најмање један податак мора бити обележен");
define("ADMIN_SAFETY","Да ли сте сигурни да желите да покренете ову скрипту(е) ?");
define("ADMIN_DONE","готово");
define("ADMIN_NOTBD","нема шта да се уради");
// new 4.3
define("ADMIN_OLD_GALAXIES","Уклони прегледе галаксија старије од &1 дана");
define("ADMIN_UNUSED_PLAYERS","Уклони играче који се не појављују ни у једном прегледу галаксије");
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
define("ERRORPAGE_PAGEFORWARD","Кликни овде уколико Ваш броусер не подржава page forwarding");
define("ERRORPAGE_PERMISSION_DENIED","Немате дозвољен приступ овој страници. Кликни овде да се вратите назад.");

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