<?php
/*
 * defines the characters used in OGame to indicate player status
 */
define("PLAYER_BANNED","б");
define("PLAYER_VACATION_MODE","в");
define("PLAYER_NOOB","н");
define("PLAYER_INACTIVE","i");
define("PLAYER_LONG_INACTIVE","I");
define("PLAYER_OUTLAW","o");

/*********************************************************************/
/***************************** public ********************************/
/*********************************************************************/
//index.php
define("L_USERNAME","Потребителско име");
define("L_PASSWORD","Парола");
define("L_LOGINFAILURE","Потребителското име или паролата са погрешни, или акаунтът Ви още не е активиран.");
define("L_TOKENFAILURE","Ключът Ви за влизане е погрешен или акаунтът Ви още не е активиран.");
define("L_LOGINTEXT","Моля, регистрирайте се.");
define("L_LANGUAGE","Достъпни езици:");
define("L_TIMEOUT","Времето на сесията е изтекло!");
define("L_REGISTER","Регистриране");
define("L_PWLOST","Изгубена парола");
define("INDEX_TITLE","OGame Galaxietool - Изглед");
define("INDEX_INFO","Информация");
define("INDEX_ENTRIES","Общ брой звездни системи");
define("INDEX_ENTRIES_LASTWEEK","Нови звездни системи за тази седмица");
define("INDEX_ENTRIES_TO_OLD","Звездни системи по-стари от месец");
define("INDEX_REGISTERED_USERS","Регистрирани потребители");
define("INDEX_PAGEFORWARD","Ако броузерът Ви не поддържа пренасочване на страници, моля цъкнете тук.");
define("INDEX_NOTICES","Бележки");
define("INDEX_PLAYERS","Статистики за играчите");
define("INDEX_ALLIES","Статистики за съюзите");
define("INDEX_REPORTS","Шпионски доклади");
define("INDEX_VERSION","Най-нова версия за изтегляне");
define("INDEX_LATEST_VERSION","Няма по-нова версия");
define("INDEX_SHOUTBOX","Място за обявления");
define("INDEX_NOENTRY","Все още няма обявления");
define("INDEX_COMMENT","Вашето обявление");
define("INDEX_INSERT","Добави");
define("INDEX_UMOD","Играчи във ваканционен режим");
define("INDEX_NO_MOONS","Брой луни");
define("INDEX_NO_EMPTY_SYSTEMS","Брой празни звездни системи");
define("INDEX_NO_FULL_SYSTEMS","Брой напълно запълнени системи");
define("INDEX_NO_TARGETS","Брой възможни цели");
// 4.0
define("INDEX_USERINFO","Брой потребители");
define("INDEX_ONLINE","На линия в момента");
define("INDEX_TODAY","На линия днес");
define("INDEX_ALL","Общ брой влизания");
// 4.3.7
define("GENERAL_LOAD_FORM","Зареждане на данните за формата");
define("GENERAL_SAVE_FORM","Запазване на данните за формата");
define("GENERAL_SAVE_AS_TEXT","Запазване като");
define("GENERAL_SAVE","Запазване");
// 4.8
define("INDEX_USERMANAGEMENT","Активиране");
define("INDEX_NEEDADMIN","Акаунти за отключване");
define("INDEX_NEEDEMAIL","Невалидирани акаунти");
define("INDEX_TOOLBAR_INFO","Информация за плъгина за Galaxytool");
define("INDEX_TOOLBAR_URL","Galaxytool URL");
define("INDEX_TOOLBAR_VERSION_REQUIRED","Минимална изисквана версия на плъгина за Galaxytool");
define("INDEX_TOOLBAR_INSTALL_GUIDE","Инструкции за инсталиране на плъгина");
define("INDEX_TOOLBAR_TOKEN","Ключ за влизане");
define("INDEX_TOOLBAR_NEW_TOKEN","Получаване на нов ключ");
define("INDEX_PLAYERS_WITH_N_PLANETS","Играчи с повече от &1 планети");
define("INDEX_GETTING_STARTED","Започване на работа с Galaxytool");
define("INDEX_GETTING_STARTED1","Добре дошли в Galaxytool!");
define("INDEX_GETTING_STARTED2","Galaxytool ще Ви помогне да анализирате какво става във вашата OGame вселена &1");
define("INDEX_GETTING_STARTED3","Преди да можете да анализирате данните, първо трябва да ги въведете. За това Ви е необходим плъгин за броузера, като например &1 за Firefox.");
define("INDEX_GETTING_STARTED4","След като сте инсталирали плъгина, разглеждайте страниците на OGame както обикновено и ще виждате малко статус-прозорче всеки път, когато нещо бъде изпратено на Galaxytool.");
define("INDEX_GETTING_STARTED5","След като плъгинът е добавил данните в Galaxytool, можете да започнете да анализирате къде играчите имат планети, колко планети имат, какви шпионски доклади има за тях и кога са най-активни.");
define("INDEX_GETTING_STARTED6","Също така, Galaxytool ще Ви помогне да определите как се развивате, ако сравните себе си със своите конкуренти или като анализирате докладите си от битките, за да видите колко сте заграбили през последните дни или седмици.");
define("INDEX_GETTING_WIKIPAGE","Galaxytool има още много възможности.");
define("INDEX_GETTING_WIKIPAGE2","Разгледайте описанието му на нашата wiki страница.");
define("INDEX_GETTING_BOARD","За забележки и идеи можете да използвате нашия форум:");
define("INDEX_GETTING_CHAT1","Или ни посетете в стаята за разговори:");
define("INDEX_GETTING_CHAT2","Не сме на линия денонощно, но прекарваме голяма част от свободното си време там, така че бъдете търпеливи.");
// new 5.0
define("INDEX_CLOSE","Затваряне");
define("INDEX_LOGIN","Влизане");
define("GENERAL_REQUIRED_FIELDS","Моля, попълнете всички задължителни полета");
define("INDEX_MESSAGES","Съобщения");
define("INDEX_EXAMPLE","Пример");
define("INDEX_INVALID_DATA","Невалидни данни");
define("GENERAL_COLUMN_HIDE_TITLE","Управление видимостта на колонките");
define("GENERAL_COLUMN_HIDE_INFO","Моля, изберете кои колонки искате да се виждат в таблицата.");
define("GENERAL_ENTRIES_DELETED","&1 изтрити");
define("GENERAL_APPLY","Прилагане");
define("STARTPAGE_GALAXYTOOL_DESCR","<em>Galaxytool</em> е инструмент за броузерната игра OGame.");
define("GENERAL_OVERWRITE","Презапис върху дублирани данни");
define("GENERAL_OVERWRITE_QUESTION","Презапис?");
define("INDEX_OWN_LOGINS","Вашите влизания");
define("GENERAL_OPEN_IN_NEW_WINDOW","Отваряне в нов прозорец");
// 5.1
define("GENERAL_UNIT_OF_MEASURE_DAYS","Days");

/*********************************************************************/
/***************************** internal ******************************/
/*********************************************************************/
// index.php
define("PROGRAM_NAME","OGame Galaxytool");
define("SHORTNAME","Galaxytool");
define("BACK_INDEX","Към главната страница");
define("UNIVERSE","Вселена");

// search
define("MENU_INFO_LINKS","Информация");
define("MENU_PAGE","Изглед");
define("MENU_DB_SEARCH","Търсене в базата данни");
define("MENU_DB_NOTICES","Търсене в бележките");
define("MENU_DB_REPORTS","Търсене в шпионските доклади");
define("MENU_GALAXYVIEW","Преглед на галактиката");
define("MENU_STATISTICS","Статистика");
define("MENU_ALLYHISTORY","Исторически преглед");
// 4.7
define("MENU_FLEET_MOVEMENTS","Местене на флота");
define("MENU_COMBAT_REPORTS","Доклади от битките");
define("MENU_MESSAGES","Игрови съобщения");

// insert / change
define("MENU_OPTION_LINKS","Опции");
define("MENU_DB_REFRESH","Добавяне към базата данни");
define("MENU_NOTICES","Бележки");
define("MENU_DB_STATUS","Статус на базата данни");
define("MENU_USEROPTIONS","Управление на потребителите");
define("MENU_USEROPTIONS2","Опции на текущия потребител");
define("MENU_USEROPTIONS3","Информация за потребителите");
// 4.2
define("MENU_ADMIN","Администрация");
// 4.3.3
define("MENU_LOGOUT","Излизане");

// Stuff
define("MENU_STUFF","Разни");
define("MENU_FORUM_THREAD","Форум на разработчиците");
define("MENU_DOWNLOADPAGE","Страница за изтегляне на програмата");
define("MENU_LANGUAGE","Език");
define("MENU_HELP","Помощ");
// 4.0
define("MENU_TOOLOPTIONS","Опции за Galaxytool");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1"," беше добавен в базата данни");
define("PARSER_ERROR1","Грешка при опит за добавяне на следните координати:");
define("PARSER_ERROR2","Базата данни не може да бъде намерена!");
define("PARSER_ERROR3","Сърверът за базата данни не може да бъде намерен!");
define("PARSER_WRONG_UNIVERSE","Погрешна вселена - намерена: \"&1\" очаквана: \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","OGame Galaxytool - Търсене");
define("SHOW_SEARCH","Търсене в базата данни");
define("SHOW_ALLYSYMBOL","Таг на съюза");
define("SHOW_PLAYERNAME","Име на играч");
define("SHOW_MOONS","Само планети с луна");
define("SHOW_NOTICES","Само планети с бележки");
define("SHOW_COLONIES","Само планети, годни за колонизиране");
define("SHOW_YES","Да");
define("SHOW_NO","Не");
define("SHOW_SEARCHRANGE","Диапазон");
define("SHOW_SEARCH_IN","Търсене в галактиката");
define("SHOW_FROM_SYSTEM","от звездна система");
define("SHOW_FROM_PLANET","от позиция на планетата");
define("SHOW_TO","до");
define("SHOW_DESCRIPTION","Можете да използвате * в имената на играчите и съюзите. Така можете да намерите всички имена, съдържащи указания низ.<br />Попълнете само полетата, които искате да бъдат използвани.");
define("SHOW_SORT_BY","Подреждане според");
define("SHOW_GALASYSTEM","Галактика/Звездна система");
define("SHOW_ALLYNAME","Име на съюз");
define("SHOW_SEARCHBUTTON","Търсене");
define("SHOW_ADDRESS","Координати");
define("SHOW_ALLYSORT","Съюз");
define("SHOW_PLANET","Име на планета");
define("SHOW_STATUS","Статус");
define("SHOW_CURRENTNESS","Последно обновявано");
define("SHOW_PLAYER_STATUS","Статус на играча");
define("SHOW_PLAYER_STATUS1","всички");
define("SHOW_PLAYER_STATUS2","Възможни цели");
define("SHOW_PLAYER_STATUS3","Неактивни");
define("SHOW_HITS","Намерени");
define("SHOW_OF","от общо");
define("SHOW_ASC","нарастващо");
define("SHOW_DESC","намаляващо");
define("SHOW_RESULTS","Брой намерени на страница");
define("SHOW_MOON","Луна");
define("SHOW_UKMOONSIZE","неизвестен");
define("SHOW_DF","ПО");
define("SHOW_DF_LONG","Поле отломки");
define("SHOW_METAL","М");
define("SHOW_METAL_LONG","Метал");
define("SHOW_CRYSTAL","К");
define("SHOW_CRYSTAL_LONG","Кристали");
define("SHOW_BOTH","Общо");
define("SHOW_AT_LEAST","(поне)");
define("SHOW_DATE","Дата");
define("SHOW_DATE_0","без значение");
define("SHOW_DATE_1","по-стари от");
define("SHOW_DATE_2","по-нови от");
define("SHOW_RANK","Ранг");
define("SHOW_FRANK","Ранг флот");
define("SHOW_MEMBERS","Членове");
define("SHOW_NOTRANKED","няма данни");
define("SHOW_NOTICERES","Бележки");
define("SHOW_REPORTS","Само шпионирани планети");
define("SHOW_REPORTS_SHORT","Шпионски доклади");
define("SHOW_NOTHING","Не е намерено");
define("SHOW_ALLIANCE_STATUS","Статус на съюза");
define("SHOW_NO_STATUS","няма статус");
define("SHOW_NAP","ПНН");
define("SHOW_ALLIED","Съюзник");
define("SHOW_WAR","Война");
define("SHOW_BOYCOTT","Бойкот");
define("SHOW_NEUTRAL","Неутрален");
define("SHOW_OWN","Собствен съюз");
define("SHOW_WING","Помагач");
// obsolete with 5.0
define("SHOW_EXT_OPTIONS1","Показване на още опции за търсене според данните за диапазон, ранг, дата или поле отломки.");
define("SHOW_EXT_OPTIONS2","Показване на още опции за търсене на колонии, луни, шпионски доклади, бележки, статус на играча или дипломатически статус.");
define("SHOW_EXT_OPTIONS3","Показване на още опции за сортиране на резултатите от търсенето.");
// new 5.0
define("SHOW_EXTENDED","комплексно търсене");
define("SHOW_MOON_SELECTION","Планета с луна");
define("SHOW_REPORT_SELECTION","Планета с доклади");
define("SHOW_FILTER_BY","Изключване от списъка");
define("SHOW_FILTER_NONE","нито една");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Show players without score changes within the last few days");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","OGame Galaxytool - Статус");
define("STATUS_DB_STATUS","Статус на базата данни");
define("STATUS_COLOR","Цвят");
define("STATUS_AGE1","Данните са от преди 1 ден.");
define("STATUS_AGE2","Данните са от преди 2 - 4 дена.");
define("STATUS_AGE3","Данните са от преди 4 - 7 дена.");
define("STATUS_AGE4","Данните са от преди 1 - 2 седмици.");
define("STATUS_AGE5","Данните са от преди 2 - 4 седмици.");
define("STATUS_AGE6","Данните са по-стари от 1 месец!");
define("STATUS_AGE7","Няма данни.");
define("STATUS_ON","на");
define("STYLES_COLOR1","Цвят1");
define("STYLES_COLOR2","Цвят2");
define("STYLES_COLOR3","Цвят3");
define("STYLES_COLOR4","Цвят4");
define("STYLES_COLOR5","Цвят5");
define("STYLES_COLOR6","Цвят6");
define("STYLES_COLOR7","Цвят7");
// 4.8
define("STATUS_DB_LEGEND","Легенда");
define("STATUS_GALAXY","Статус на Галактиката");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","Управление на потребителите");
define("USER_NAMES","Потребител");
define("USER_ERROR","Грешка");
define("USER_NEWUSER","Нов потребител");
define("USER_OPTIONS","Опции");
define("USER_USERNAME","Потребителско име");
define("USER_PASSWORD","Парола");
define("USER_PASSWORD_CONFIRM","Потвърдете паролата");
define("USER_GALAXY","Галактика");
define("USER_SEARCH","Търсене");
define("USER_INSERT","Добавяне");
define("USER_DELETE","Изтриване");
define("USER_DELETE_ENTRY","Искате ли да изтриете потребителя: ");
define("USER_STATUS","Преглед на статистиката");
define("USER_STYLES","Промяна на подредбата");
define("USER_SUBMIT","Изпрати");
define("USER_RESET","Изчистване");
define("USER_YES","Да");
define("USER_NO","Не");
define("USER_STYLEPATH","Път до styles.css");
define("USER_PROBES","Разглеждане/Изпращане на шпионски доклади");
define("USER_EMAIL","Електронна поща");
define("USER_ERROR1","Паролата е прогрешна или адресът на електронната поща е невалиден.");
define("USER_ERROR2","Адресът на електронната поща е невалиден.");
define("USER_INGAME","Име в играта");
define("USER_ALLYTAG","Таг на съюза");
define("USER_ALLYHISTORY","Исторически преглед");
define("USER_DIPLOMATIC","Промяна на дипломатическия статус");
define("USER_STATSPAGE","Брой данни на страницата със статистиките");
define("USER_LINKS","Връзки");
define("USER_LINKS2","Формат:<br>текст1;url1<br>текст2;url2<br>текст3;url3");
define("USER_EXPORT_TITLE","Експорт на цветовете (BB код)");
define("USER_BB_COORDINATES","Координати");
define("USER_BB_MOON","Луна");
define("USER_BB_DEBRIS","Поле отломки");
define("USER_BB_ALLY","Име на съюз");
define("USER_BB_ALLYDETAILS","Данни за съюза");
define("USER_BB_PLAYERNAME","Име на играч");
define("USER_BB_BANNED","наказан");
define("USER_BB_VACATION","ваканционен режим");
define("USER_BB_NOOB","новак");
define("USER_BB_INACTIVE","Неактивен");
define("USER_BB_LONGINACTIVE","Неактивен отдавна");
// new with 4.7
define("USER_DELETION","Изтриване");
define("USER_FLEETINFO",MENU_FLEET_MOVEMENTS);
define("USER_ACTIVITIES","Активности на играча");
define("USER_MAINTENANCE","Поддръжка на Galaxytool");
define("USER_MANAGEMENT",MENU_USEROPTIONS);
define("USER_DELETE_MY_COMBAT_REPORTS","Изтриване на моите доклади от битки");
define("USER_DELETE_MY_MESSAGES","Изтриване на моите съобщения");
define("USER_DELETE_MY_FLEETMOVES","Изтриване на моите движения на флоти");
// 4.8
define("USER_DELETE_MY_COMBAT_REPORTS_LIMITED","Изтриване на бойните доклади, по-стари от &1 дена");
define("USER_DELETE_MY_MESSAGES_LIMITED","Изтриване на съобщенията, по-стари от &1 дена");
define("USER_TABLE_ENTRIES","Брой резултати (от търсенето) на страница");
// 5.0
define("USER_EXISTS","Потребителят вече съществува");
define("USER_BB_OUTLAW","Извън закона");
define("USER_INVALID_URL","Линкът &1 изглежда невалиден - ще бъде игнориран");

/*********************************************************************
* galaxyview.php
*********************************************************************/
define("VIEW_TITLE","OGame Galaxytool - Изглед на Галактиката");
define("VIEW_NODATA","Липсват данни.");
define("VIEW_GALAXY","Галактика");
define("VIEW_SYSTEM","Звездна система");
define("VIEW_POSITION","Поз.");
define("VIEW_PLANET","Планета");
define("VIEW_MOON","Луна");
define("VIEW_TF","ПО");
define("VIEW_PLAYER","Играч");
define("VIEW_PLAYER_ADD","(Ранг / Статус)");
define("VIEW_ALLY","Съюз");
define("VIEW_ALLY_ADD","(Ранг / Член)");
define("VIEW_METAL","М");
define("VIEW_CRYSTAL","К");
define("VIEW_COLONISED","Колонизирани планети");
define("VIEW_UKMOONSIZE","неизвестен");
define("VIEW_BACK","назад");
define("VIEW_NOTICE","Бележки");
define("VIEW_REPORTS","Доклади");
define("VIEW_MOONPHALANX","Следните луни могат да сканират тази система");
define("VIEW_NOMOONS","Не са намерени луни");
define("VIEW_IRAKS","Следните планети могат да достигнат тази система с междупланетни ракети");
define("VIEW_NOIRAKS","Не са намерени междупланетни ракети");
// 4.0
define("VIEW_MOON_DESTROY_CHANCE","Вероятност за разрушаване на луната");
define("VIEW_CHANCE_WITH_ONE","Вероятност с една Звезда на смъртта");
define("VIEW_CHANCE_WITH_N","Вероятност с ");
define("VIEW_DEATH_STARS","Звезди на смъртта");
define("VIEW_DS_DESTROY_CHANCE","Вероятност за загуба на звездите на смъртта");
define("VIEW_TOP","в горните");
// new 4.3.5
define("VIEW_GO","go");
// new 5.0
define("VIEW_DIAMETER","Диаметър");

/*********************************************************************
* change_password.php
**********************************************************************/
define("PW_TITLE","OGame Galaxytool - промяна на парола");
define("OLD_PASSWORD","Стара парола");
define("NEW_PASSWORD","Нова парола");
define("CONFIRM_NEW_PASSWORD","Потвърдете паролата");
define("PW_MISMATCH","Паролите не съвпадат!");
define("PW_ERROR","Старата парола беше неправилна!");
define("UPDATE_DONE","Промяната беше успешна.");
// new 4.2
define("TIMEZONE_OFFSET","Времева зона на сървера");
// new 4.3
define("DELETE_ACCOUNT","Изтриване на този Galaxytool акаунт");
define("DELETE_ACCOUNT_SAFETY_REQUEST","Наистина ли искате да изтриете този Galaxytool акаунт?");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","Права");
define("CH_PASSWD_ADMIN","Admin");
// new 4.7
define("TIMEZONE_OGAME_OFFSET","Часова разлика спрямо сървера на OGame");
// new 4.8
define("CH_PASSWD_USER_LANGUAGE","Преминаване на този език след влизане");
define("CH_PASSWD_USER_LANGUAGE_NO_CHANGE","Без промяна");
define("CH_PASSWD_EXPAND","Разширена");
define("CH_PASSWD_COLLAPSE","Свита");
define("CH_PASSWD_HIDDEN","Скрита");
define("CH_PASSWD_GETTING_STARTED","Показване на информацията за начинаещи при влизане");
define("CH_PASSWD_PLUGIN","Показване на информацията за плъгина при влизане");

/*********************************************************************
* notices.php
**********************************************************************/
define("NOTICE_TITLE","OGame Galaxytool - Бележки");
define("NOTICE_HEADER","редактиране на бележката");
define("NOTICE_HEADER2","Редактиране на собствените бележки");
define("NOTICE_PUBLIC","Достъпни за другите?");
define("NOTICE_YES","да");
define("NOTICE_NO","не");
define("NOTICE_TEXT","Текст на бележката");
define("NOTICE_SAVE","Сапази");
define("NOTICE_DELETED","Изтрито.");
define("NOTICE_SAVED","Запазено.");
define("NOTICE_RESULTS","Всички резултати");
define("NOTICE_USER","Потребител");
define("NOTICE_DATE","Дата");
define("NOTICE_EDIT","Редактиране");
define("NOTICE_DELETE","Изтриване");
define("NOTICE_NEW","Създаване на собствена бележка");
define("NOTICE_NOTPUBLIC","Бележката не е обществено достъпна.");
define("NOTICE_ALL","всички");
define("NOTICE_NONE",SHOW_FILTER_NONE);
define("NOTICE_SEARCH","Търсене сред бележките");
define("NOTICE_SEARCH_SHORT","Търсене");
define("NOTICE_HITS","Резултати");
define("NOTICE_SHOWRESULTS","Резултати на страница");
define("NOTICE_OF","от");
define("NOTICE_NOTHING","Нищо не е намерено");
// 4.0
define("NOTICE_CHARS","Знака");
define("NOTICE_PLAYERNAME","Играч");
define("NOTICE_SHOWALL","Покажи всички бележки");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","OGame Galaxytool - Шпионски доклади");
define("REPORTS_RESOURCES","Ресурси");
define("REPORTS_FLEET","Флоти");
define("REPORTS_DEFENCE","Защита");
define("REPORTS_BUILDINGS","Сгради");
define("REPORTS_TECHNOLOGY","Проучвания");
define("REPORTS_MOON","Луна");
define("REPORTS_SEARCH","Търсене в шпионските доклади");
define("REPORTS_SEARCH_SHORT","Търсене");
define("REPORTS_HITS","Намерени");
define("REPORTS_NOTHING","Нищо не е намерено");
define("REPORTS_ADDRESS","Адрес");
define("REPORTS_CURRENTNESS","Текущност");
define("REPORTS_PLAYERNAME","Име на играч");
define("REPORTS_ALLY","Съюз");
define("REPORTS_VIEW","виж доклада");
define("REPORTS_SEARCH_IN","Търсене в галактиката");
define("REPORTS_FROM_SYSTEM","от звездна система");
define("REPORTS_TO","до");
define("REPORTS_DELETE","Изтриване");
define("REPORTS_DELETED","Изтрито");
define("REPORTS_RESULTS","Резултати на страница");
define("REPORTS_OF","от");
define("REPORTS_DATE","Дата");
define("REPORTS_DATE_0","без значение");
define("REPORTS_DATE_1","по-стари от");
define("REPORTS_DATE_2","по-нови от");
define("REPORTS_NOTICES","Бележки");
define("REPORTS_AT_LEAST_RESOURCES","Ресурси (поне)");
define("REPORTS_SEARCH_EXTENDED","Разширено търсене");
define("REPORTS_FLEET_RESIS","Флоти - сума");
define("REPORTS_DEFENCE_RESIS","Защити - сума");
define("REPORTS_ALL_RESIS","Обща сума");
define("REPORTS_TECHS","Технологии");
define("REPORTS_UNKNOWN_ENTRIES","неизвестно");
define("REPORTS_PARTLY_INSERTED","частично добавено");
define("REPORTS_FOR_ALL_RES","За всички ресурси");
define("REPORTS_FOR_TF","за полето отломки");
define("REPORTS_KT","Малки транспортьори");
define("REPORTS_GT","Големи транспортьори");
define("REPORTS_SS","Бойни кораби");
define("REPORTS_REC","Рециклатор");
define("REPORTS_RAIDABLE","Само нападаеми цели");
define("REPORTS_ALL_RESOURCES","Всички ресурси");
// 4.0
define("REPORTS_STUFF","Разни");
define("REPORTS_SPEEDSIM","Симулиране със Speedsim");
define("REPORTS_DRAGOSIM","Симулиране със Dragosim");
define("REPORTS_STATUS","Статус");
define("REPORTS_ERROR","Възникна грешка");
// 4.2
define("REPORTS_OWN_REPORTS","Само моите доклади");
// 4.3.3
define("REPORTS_UPLOAD_BY","Докладът е изпратен от");
// 4.4
define("REPORTS_DEPTH","Пълнота на доклада");
define("REPORTS_FLEET_SCORE","Точки от флот (макс.)");
define("REPORTS_DEFENCE_SCORE","Точки от защити (макс.)");
// 5.0
define("REPORTS_HOURS","часове");
define("REPORTS_MAX_RESULTS_HIT","Заявката Ви върна повече от &1 резултата. Показани са само първите &1 резултата. Моля, настройте заяката си за търсене така, че да се получат по-малко резултати.");
define("REPORTS_OSIMULATE","Симулиране с OSimulate");
define("REPORTS_SHOW_ONLY","Показване само на");
define("REPORTS_SHOW_PLANETS","Планети");
define("REPORTS_SHOW_MOONS","Луни");
define("REPORTS_OWNER","Докладите качени от");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","OGame Galaxytool - Статистики");
define("STATS_TBLHEAD","Статистика");
define("STATS_RANK","Ранг");
define("STATS_PLAYERNAME","Име на играч");
define("STATS_ALLYNAME","Таг на съюз");
define("STATS_SCORE","Точки");
define("STATS_FLEET","Флоти");
define("STATS_RESEARCH","Проучвания");
define("STATS_MEMBERS","Членове");
define("STATS_STATUS","Статус");
define("STATS_NOTHING","няма статус");
define("STATS_NAP","ПНН");
define("STATS_ALLIED","Съюз");
define("STATS_WAR","Война");
define("STATS_BOYCOTT","Бойкот");
define("STATS_NEUTRAL","Неутрален");
define("STATS_OWN","Собствен съюз");
define("STATS_WING","Помагач");
define("STATS_UPDATE","От");
define("STATS_PLAYERSTATS","Статистика на играчите");
define("STATS_ALLYSTATS","Статистика на съюзите");
// 4.0
define("STATS_DELETE","Искате ли да изтриете това?");
define("STATS_CONFIRM_DELETE","Наистина ли искате да изтриете това?");
define("STATS_CHANGE_PLAYER_STATUS","Статус на играча");
define("STATS_CHANGE_ALLIANCE_STATUS","Статус на съюза");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","Всички членове на този съюз получават избрания статус. Предишният им статус ще бъде изгубен. По-късно можете да промените статуса само на някои играчи.");
define("STATS_UNKNOWN","Останалите");
define("STATS_DETAILS","Подробности за");
// 4.4
define("STATS_PLAYERSTATUS",SHOW_PLAYER_STATUS);
define("STATS_IGNORE_STATUS",SHOW_PLAYER_STATUS1);
define("STATS_ACTIVE","активен");
define("STATS_INACTIVE",USER_BB_INACTIVE);
define("STATS_BANNED",USER_BB_BANNED);
define("STATS_VACATION",USER_BB_VACATION);
define("STATS_NOOB",USER_BB_NOOB);
// 4.8
define("STATS_YES",SHOW_YES); // reuse SHOW definitions if applicable
define("STATS_NO",SHOW_NO);
define("STATS_SEARCH",USER_SEARCH);
define("STATS_SHOW_GRAPH","Показване на подробностите при разпределението на точките");
define("STATS_LONG_INACTIVE",USER_BB_LONGINACTIVE);
// 4.9
define("STATS_STANDARD","Стандартни точки");
define("STATS_MILITARY","Военни точки");
define("STATS_ECONOMY","Икономика");
define("STATS_HONOUR","Точки на честта");
define("STATS_MILITARY_BUILD","Построени военни точки");
define("STATS_MILITARY_DESTROYED","Унищожени военни точки");
define("STATS_MILITARY_LOST","Изгубени военни точки");

/*********************************************************************
* register.php
**********************************************************************/
define("REGISTER_REGISTRATE","Регистриране");
define("REGISTER_LOGINNAME","Потребителско име");
define("REGISTER_PASSWORD","Парола");
define("REGISTER_PASSWORD_CONFIRM","Потвърдете паролата");
define("REGISTER_EMAIL","Адрес на електронната поща");
define("REGISTER_INGAME","Име в играта");
define("REGISTER_ALLYTAG","Таг на съюза");
define("REGISTER_EMAILVERIFICATION","Провека на адреса на електронната поща");
define("REGISTER_EMAILTEXT","Моля, посетете следния URL за да потвърдите регистрацията си за GalaxyTool.");
define("REGISTER_ERROR1","Това потребителско име е вече заето.");
define("REGISTER_ERROR2","Възникна грешка при опита да се изпрати електронна поща. Моля, свържете се с администратора си.");
define("REGISTER_ERROR3","Възникна грешка при опита да се изпрати информация в базата данни!");
define("REGISTER_INFO1","Акаунтът Ви беше създаден.");
define("REGISTER_INFO2","Моля, посетете URL-а, получен по електронната пощам за да to потвърдите регистрацията си.");
define("REGISTER_INFO3","Акаунтът е потвърден. Сега администраторът Ви трябва да го активира.");
define("REGISTER_BUTTON","Назад към главната страница");
define("REGISTER_NEW_SUBJECT","Нов потребител се регистрира в GalaxyTool");
define("REGISTER_NEW_MAILTEXT","Нов потребител се регистрира.");
// new 4.2
define("REGISTER_BACK","Назад към първата страница");
// new 4.3.5
define("REGISTER_MISSING_FIELDS","Попълнете всички необходими полета");
// new 4.8
define("REGISTER_ERROR4","Адресът за електронна поща е невалиден.");
define("REGISTER_ERROR5","Паролите не съвпадат.");
define("REGISTER_PWS","Качество на паролата");
define("REGISTER_PWS0","много слабо");
define("REGISTER_PWS1","слабо");
define("REGISTER_PWS2","приемливо");
define("REGISTER_PWS3","добро");
define("REGISTER_PWS4","много добро");
// new 5.0
define("REGISTER_EMAIL_USED","Този адрес за електронна поща вече е използван");

/*********************************************************************
* lost_password.php
**********************************************************************/
define("LOSTPW_TITLE","Изгубена парола");
define("LOSTPW_INFO2","Нова парола беше генерирана и изпратена на адреса на електронната Ви поща.");
define("LOSTPW_BUTTON1","получаване на нова парола");
define("LOSTPW_BUTTON2","Назад към главната страница");
define("LOSTPW_LOGINNAME","Потребителско име");
define("LOSTPW_EMAIL","Адрес на електронната поща");
define("LOSTPW_ERROR1","Възникна грешка при опита да се изпратят данни в базата данни!");
define("LOSTPW_ERROR2","Не е намерено такова!");
define("LOSTPW_ERROR3","Възникна грешка при опита да се изпрати електронна поща. Моля, свържете се със системния си администратор.");
define("LOSTPW_EMAIL_SUBJECT","Новата парола, която поискахте");
define("LOSTPW_EMAIL_TEXT1","Ето новата Ви регистрация за Galaxytool");
define("LOSTPW_EMAIL_TEXT2","Потребителско име");
define("LOSTPW_EMAIL_TEXT3","Парола");
// new 5.0
define("LOSTPW_INFO1","Ще получите съобщение по електронната поща, за да потвърдите заявката си за нова парола.");
define("LOSTPW_CONFIRM_RESET_SUBJECT","Забравена парола?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","Здравейте,\n\nВие поискахте нова парола за Galaxytool. За да Ви бъде генерирана нова парола, цъкнете следния линк:");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","OGame Galaxytool - Информация за потребителите");
define("USERINFO_NAMES","Всички потребители");
define("USERINFO_DETAIL","Подробна информация за");
define("USERINFO_ERROR1","Няма такъв потребител!");
define("USERINFO_USERNAME","Потребителско име");
define("USERINFO_INGAME","Име в играта");
define("USERINFO_EMAIL","Електронна поща");
define("USERINFO_ALLYTAG","Съюз");
define("USERINFO_STYLEPATH","Скин");
define("USERINFO_STATUS","Статус");
define("USERINFO_ACTIVATE","Активиране на потребителя");
define("USERINFO_LOGINS","Брой влизания");
define("USERINFO_LASTLOGIN","Последно влизане");
define("USERINFO_DATA","Информация за въведените звездни системи");
define("USERINFO_NODATA","Този потребител още не е въвел никакви звездни системи!");
define("USERINFO_GALAXY","Галактика");
define("USERINFO_SYSTEMS","Брой звездни системи");
define("USERINFO_IP","IP адрес");
define("USERINFO_LOGINTIME","Време на влизане");
define("USERINFO_NOLOGIN","Този потребител никога не е влизал.");
define("USERINFO_LAST_GALAXYUPDATE","Последен добавен изглед Галактика");
define("USERINFO_LAST_PUBLIC_NOTICE","Последна общественодостъпна бележка");
define("USERINFO_LAST_PRIVATE_NOTICE","Последна лична бележка");
define("USERINFO_NUMBEROF_PUBLIC_NOTICE","Брой общественодостъпни бележки");
define("USERINFO_NUMBEROF_PRIVATE_NOTICE","Брой лични бележки");
define("USERINFO_ACTIVATED","Акаунтът е активиран");
define("USERINFO_ACTIVATIONTEXT","Администраторът на Galaxytool е активирал акаунта Ви.\n\nПриятно използване на Galaxytool!");
// new 4.8
define("USERINFO_LAST_SUBMIT","Последно въведени данни");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","OGame Galaxytool - История на съюза");
define("ALLYHISTORY_TBLHEAD","Преглед на историята");
define("ALLYHISTORY_PLAYERNAME","Име на играч");
define("ALLYHISTORY_ALLYNAME","Съюз");
define("ALLYHISTORY_LASTMONTH","Миналия месец"); // changed at 4.0
define("ALLYHISTORY_ALL_DATA","Цялата налична информация"); // new 4.0
define("ALLYHISTORY_SHOW","Показване на статистиката");
define("ALLYHISTORY_TIMESPAN","Времеви диапазон");
define("ALLYHISTORY_PROGESS","Развитие");
define("ALLYHISTORY_SCORE","Класация");
define("ALLYHISTORY_FSCORE","Флоти"); // new 4.0
define("ALLYHISTORY_RSCORE","Проучвания"); // new 4.0
define("ALLYHISTORY_MEMBER","Членове"); // new 4.0
define("ALLYHISTORY_NOTHING","Нищо не е намерено");
define("ALLYHISTORY_DETAILS","Подробности");
define("ALLYHISTORY_SHOW_ADDRESS","Координати");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","Информация за играча");
define("DETAILEDINFO_ALLYINFO_TITLE","Информация за съюза");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","Подробна информация за играча");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","Подробна информация за съюза");
define("DETAILEDINFO_NO_ALLIANCE","няма");
define("DETAILEDINFO_SCORE","Статистика точки");
define("DETAILEDINFO_FLEET","Статистика флот");
define("DETAILEDINFO_RESEARCH","Статистика проучвания");
define("DETAILEDINFO_RANK","Ранг");
define("DETAILEDINFO_POINTS","Точки");
define("DETAILEDINFO_KNOWN_PLANETS","Известни планети");
define("DETAILEDINFO_MOONS","Известни луни");
define("DETAILEDINFO_PHALANX_AREA","Обхват на фронталния сензор");
define("DETAILEDINFO_NO_PHALANX_AREA","Няма фронтален сензор");
define("DETAILEDINFO_NOTICES","Бележки");
define("DETAILEDINFO_NO_NOTICES","Няма бележки");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","Предишни съюзи");
define("DETAILEDINFO_RESOURCES_PER_HOUR","Ресурси на час");
define("DETAILEDINFO_RESOURCES_PER_DAY","Ресурси на ден");
define("DETAILEDINFO_RESOURCES_PER_WEEK","Ресурси на седмица");
define("DETAILEDINFO_RESOURCES_PER_MONTH","Ресурси на месец (30 дена)");
define("DETAILEDINFO_METAL","Метал");
define("DETAILEDINFO_CRYSTAL","Кристали");
define("DETAILEDINFO_DEUTERIUM","Деутериум");
define("DETAILEDINFO_UNKNOWN","неизвестно");
define("DETAILEDINFO_SCORE_DISTRIBUTION","Разпределение на точките");
// new 4.2
define("DETAILEDINFO_GENERAL","Подробности");
define("DETAILEDINFO_MEMBERS","Членове");
define("DETAILEDINFO_GRAPHS","Графики");
define("DETAILEDINFO_RESOURCES","Ресурси");
define("DETAILEDINFO_FLEET_TAB","Флоти");
define("DETAILEDINFO_TECH","Проучвания");
define("DETAILEDINFO_FLEET_DETAIL","Сума / (средното за играча) от всички налични доклади");
define("DETAILEDINFO_TECH_DETAIL","Средното от всичката налична информация за играча");
// new 4.3
define("DETAILEDINFO_PLANET_TAB",REPORTS_SHOW_PLANETS);
define("DETAILEDINFO_MOON_TAB",REPORTS_SHOW_MOONS);
// 4.7
define("DETAILEDINFO_ACTIVITIES","Активности");
define("DETAILEDINFO_NODATA",VIEW_NODATA); // reuse existing translations
define("DETAILEDINFO_ACTIVITY_DESCRIPTION","Показване на активностите за &1, събрани от:");
define("DETAILEDINFO_GALAXYVIEWS","Преглед на Галактиката");
define("DETAILEDINFO_SCANS","Шпионажна активност");
define("DETAILEDINFO_MESSAGES","Съобщения от играча");
define("DETAILEDINFO_COMBATS","Доклади от битки");
define("DETAILEDINFO_ALLYPAGE","Страница на съюза");
define("DETAILEDINFO_MANUAL","Ръчни добавяния");
define("DETAILEDINFO_START","От");
define("DETAILEDINFO_TO","до");
define("DETAILEDINFO_TODAY","Днес");
define("DETAILEDINFO_DATA_RESTRICTION","само от:");
define("DETAILEDINFO_WEEKDAY_WEEKEND","уикенда");
define("DETAILEDINFO_WEEKDAY_WORKINGDAY","работни дни");
define("DETAILEDINFO_WEEKDAY_MONDAY","понеделник");
define("DETAILEDINFO_WEEKDAY_TUESDAY","вторник");
define("DETAILEDINFO_WEEKDAY_WEDNESDAY","сряда");
define("DETAILEDINFO_WEEKDAY_THURSDAY","четвъртък");
define("DETAILEDINFO_WEEKDAY_FRIDAY","петък");
define("DETAILEDINFO_WEEKDAY_SATURDAY","събота");
define("DETAILEDINFO_WEEKDAY_SUNDAY","неделя");
define("DETAILEDINFO_WEEKDAY_SHORTLENGTH",3); // number of characters to shorten week day
define("DETAILEDINFO_PLAYER_CURRENTLY_ACTIVE","Играчът е активен в момента");
define("DETAILEDINFO_PLAYER_MESSAGES","Налични съобщения на играча");
define("DETAILEDINFO_SHOW","Показване");
define("DETAILEDINFO_NONE","Няма налични");
define("DETAILEDINFO_ENTER_MANUALLY","Въвеждане на активности за играча");
define("DETAILEDINFO_PLAYER_SEEN_ON","Играчът е бил на линия на");
define("DETAILEDINFO_INSERT","Добавяне");
define("DETAILEDINFO_OGAME_SERVERTIMES","Внимание: Всички дати и времена са по сърверно време !");
define("DETAILEDINFO_DAY_VIEW","24-часов изглед");
define("DETAILEDINFO_WEEK_VIEW","седмичен изглед");
// new 4.8
define("DETAILEDINFO_HOME_PLANET","Родна планета");
// new 5.0
define("DETAILEDINFO_PLANETNAME","Име"); // also used for moons!
define("DETAILEDINFO_DEFENCE_SCORE","Защитни точки");
define("DETAILEDINFO_DEFENCE_SCORE_TOOLTIP","Защитни точки = Флот - Точки + Изследвания + Икономика.<br/>Всички тези статистики трябва да са обновени, за да получите смислен резултат!");
define("DETAILEDINFO_SCORE_PER_SHIP","Точки на кораб");
define("DETAILEDINFO_SHIPS","Брой кораби");
define("DETAILEDINFO_DATE_IN_FUTURE","Не запазвай данни от миналото.");

// new 4.2
/*********************************************************************
* administration.php
**********************************************************************/
define("ADMIN_TITLE","Администриране на Galaxytool");
define("ADMIN_DISCLAMER","Внимание: Използването на тези програми е на Ваша отговорност! Повечето от тях изтриват данни.");
define("ADMIN_INCONSISTENCIES","Несъответствия в базата данни");
define("ADMIN_PLANETS","Планети на позиция 0 или по-голяма от 15");
define("ADMIN_GALAXIES","Изтриване на галактиките с номер по-голям от &1 ");
define("ADMIN_PLAYERS","Изтриване на играчите без име в OGame - води то дуплицирани имена на играчи");
define("ADMIN_REPORTS","Изтриване на докладите, ако планетата, за която се отнасят, вече не съществува");
define("ADMIN_MISC","Разни");
define("ADMIN_RESET","Изчистване на Galaxytool (само потребителите и таблицата на IP адреси няма да бъдат изтрити)");
define("ADMIN_OLD_PLAYERS","Изтриване на данните за играчи, ако са по-стари от &1 дена");
define("ADMIN_OLD_REPORTS","Изтриване на докладите, които са по-стари от &1 дена");
define("ADMIN_LOADING","Не затваряйте този прозорец докато страницата се зарежда.");
define("ADMIN_STATUS","Статус на заявките Ви");
define("ADMIN_SELECTION","Поне едно нещо трябва да бъде избрано");
define("ADMIN_SAFETY","Сигурен ли сте, че искате да изпълните това?");
define("ADMIN_DONE","готово");
define("ADMIN_NOTBD","няма нищо за правене");
// new 4.3
define("ADMIN_OLD_GALAXIES","Премахване на изгледи от режим Галактика, ако са по-стари от &1 дена");
define("ADMIN_UNUSED_PLAYERS","Премахване на играчите, които ги няма в никой изглед от режим Галактика");
// new 4.7
define("ADMIN_OLD_ACTIVITIES","Премахване на активности на играчите, по-стари от &1 дена");
// new 4.8
define("ADMIN_OLD_COMBATS","Изтриване на бойните доклади, по-стари от &1 дена");
define("ADMIN_OLD_INGAME_MSG","Изтриване на съобщенията, по-стари от &1 дена");
// new 5.0
define("ADMIN_OGAME_API","Зареждане на общодостъпните данни от OGame в Galaxytool");
define("ADMIN_OGAME_ALL_DATA",ALLYHISTORY_ALL_DATA);
define("ADMIN_OGAME_GALAXY_DATA",MENU_GALAXYVIEW);
define("ADMIN_OGAME_STATISTICS_DATA",MENU_STATISTICS);

// new 4.3.5
/*********************************************************************
* errorpage.php
**********************************************************************/
define("ERRORPAGE_PAGEFORWARD","Цъкнете тук, ако броузерът Ви не поддържа автоматично препращане към друга страница.");
define("ERRORPAGE_PERMISSION_DENIED","Нямате права за достъп до тази страница. Цъкнете тук, за да се върнете.");

// new 4.7
/*********************************************************************
* fleet_movements.php
**********************************************************************/
define("FLEETS_TITLE","OGame Galaxytool - местене на флота");
define("FLEETS_ACTUAL_FLEETS","Текущи движения на флоти");
define("FLEETS_YES",SHOW_YES);
define("FLEETS_NO",SHOW_NO);
define("FLEETS_DETAILS","Подробности");
define("FLEETS_MISSION_EXPEDITION","Експедиция");
define("FLEETS_MISSION_COLONIZATION","Колонизация");
define("FLEETS_MISSION_RECYCLE","Рециклирай");
define("FLEETS_MISSION_TRANSPORT","Транспортирай");
define("FLEETS_MISSION_DEPLOYMENT","Стационирай");
define("FLEETS_MISSION_ESPIONAGE","Шпионирай");
define("FLEETS_MISSION_ACS_DEFEND","СБС Защита");
define("FLEETS_MISSION_ATTACK","Атака");
define("FLEETS_MISSION_ACS_ATTACK","СБС Атака");
define("FLEETS_MISSION_MOON_DESTRUCTION","Разрушаване на луна");
define("FLEETS_MISSION_MISSILE_ATTACK","Ракетна атака");
define("FLEETS_NO_DATA","Няма данни");
// new 5.0
define("FLEETS_FLEET","Флот");
define("FLEETS_ALL_FLEETS","Показване на всички движения на флоти");

/*********************************************************************
* parser_combat_reports.inc.php
**********************************************************************/
define("COMBAT_REPORT_OUDATED_GALAXYVIEW","Данните Ви за Галактиката са остарели. Моля, погледнете първо координатите на началната точка и на целта на атаката!");

/*********************************************************************
* messages.php
**********************************************************************/
define("MESSAGES_TITLE","OGame Galaxytool - Игрови съобщения");
define("MESSAGES_PLAYERNAME","Име на играча");
define("MESSAGES_SUBJECT","Тема");
define("MESSAGES_DATE","Дата");
define("MESSAGES_FILTER","Филтър");
define("MESSAGES_DELETE","Изтриване на съобщението");
define("MESSAGES_PUBLISH_DETAIL","Публикуване на съобщението чрез добавяне на съдържанието му към текста на бележката за играча.");
define("MESSAGES_PUBLISH_HEADER","&sender изпрати съобщение на &recipient на &date:\n\n &message"); // &sender, &recipient, &date, &message replaced at runtime
define("MESSAGES_PLAYER_FILTER","Съобщения за играча:");
// new 5.0
define("MESSAGES_CONTENT","Съдържание");

/*********************************************************************
* combat_reports.php
**********************************************************************/
define("COMBATS_TITLE","OGame Galaxytool - Доклади от битките");
define("COMBATS_ATTACKER","Нападател");
define("COMBATS_DEFENDER","Защитник");
define("COMBATS_DATE","Дата");
define("COMBATS_OWNER","Собственик");
define("COMBATS_WINNER","Победител");
define("COMBATS_COMBATREPORT","Доклад от битката");
define("COMBATS_COMBAT_AT","Битка на координати");
define("COMBATS_LOST_UNITS","Общи загуби");
define("COMBATS_LOOT","Плячка");
define("COMBATS_DEBRIS","Рециклаж");
define("COMBATS_AND","и");
define("COMBATS_PUBLISH","Направи този доклад общодостъпен");
define("COMBATS_UNPUBLISH","Премахване на общодостъпния статус на доклада");
define("COMBATS_DELETE","Изтриване на доклада");
define("COMBATS_CHECK_ALL","Избор на всички");
define("COMBATS_UNCHECK_ALL","Избор на никои");
define("COMBATS_WITH_SELECTED","С избраните");
define("COMBATS_PUBLIC_REPORTS","Общодостъпни доклади");
define("COMBATS_YES",SHOW_YES); // no need for translation!
define("COMBATS_NO",SHOW_NO); // no need for translation!
define("COMBATS_SEARCH_OPTIONS","Опции на търсенето");
define("COMBATS_SEARCH","Изпълнение");
define("COMBATS_RESET","Изчистване");
// 4.8
define("COMBATS_COORDINATES",USER_BB_COORDINATES);
define("COMBATS_INVALID_GALAXY_ENTERED","Невалиден номер на Галактика");
define("COMBATS_INVALID_SYSTEM_ENTERED","Невалиден номер на Система");
define("COMBATS_INVALID_PLANET_ENTERED","Невалидна позиция на Планета");
define("COMBATS_GALAXY_FROM_TO","Галактика");
define("COMBATS_SYSTEM_FROM_TO","Система");
define("COMBATS_PLANET_FROM_TO","Планета");
define("COMBATS_APPLY",GENERAL_APPLY);
define("COMBATS_COMBAT_SUMMARY","Резюме на доклада от битката");
define("COMBATS_DOWNLOAD_CSV","Сваляне като CSV файл");

/*********************************************************************
* report_archive.php
**********************************************************************/
define("REPORT_ARCHIVE_TITLE","Архив доклади");
define("REPORT_ARCHIVE_COORDINATES","Координати");
define("REPORT_ARCHIVE_SCANTIME","Време на шпиониране");
define("REPORT_ARCHIVE_DELETE","Изтриване на тези доклади");
define("REPORT_ARCHIVE_CONFIRM_DELETE","Наистина ли искате да изтриете тези доклади?");
define("REPORT_ARCHIVE_GALAXY","Галактика");
define("REPORT_ARCHIVE_SYSTEM","Система");
define("REPORT_ARCHIVE_PLANET","Планета");
define("REPORT_ARCHIVE_MOON","Луна");
define("REPORT_ARCHIVE_DETAILS","Подробности");
define("REPORT_ARCHIVE_RESOURCES",DETAILEDINFO_RESOURCES);
define("REPORT_ARCHIVE_HEADER_RESOURCES",REPORTS_RESOURCES);
define("REPORT_ARCHIVE_DETAILS_FOR","Архив доклади за &1 [&2] (&3)"); // &1 = planetname; &2 = coordinates; &3 = playername
define("REPORT_ARCHIVE_FLEET_CARGO","Товароподемност на флота");
define("REPORT_ARCHIVE_IRAK_RANGE","Обхват на междупланетните ракети");
define("REPORT_ARCHIVE_CHART_TYPE","Вид на графиката");

/*********************************************************************
* install.php
**********************************************************************/
define("INSTALL_TITLE", "Инсталиране на Galaxytool версия");
define("INSTALL_PROGRESS", "Общ прогрес");
define("INSTALL_STEP", "Стъпка");
define("INSTALL_CONTINUE", "Продължение");
define("INSTALL_VALIDATE", "Валидиране");
define("INSTALL_STEP1", "Добре дошли");
define("INSTALL_STEP2", "Проверка за писане");
define("INSTALL_STEP3", "Настройки на базата данни");
define("INSTALL_STEP4", "Настройки за OGame");
define("INSTALL_STEP5", "Настройки за Galaxytool");
define("INSTALL_STEP6", "Парола на администратора");
define("INSTALL_STEP7", "Инсталиране на Galaxytool");
define("INSTALL_STEP8", "Завършване на инсталирането"); // check writable; delete install and update.php and redirect to index.php
define("INSTALL_FILE_DELETE_CHECK","Моля, изтрийте файловете install.php и update.php от сървера си.");

define("INSTALL_STEP1_PHP_FAILED", "Вашата версия на PHP (&1) не работи с тази версия на Galaxytool");
define("INSTALL_STEP1_FOPEN_FAILED", "Вашата версия на PHP не позволява отварянето на уеб страници чрез командата FOPEN(). А това е необходимо за използването на OGame API.");
define("INSTALL_STEP1_WELCOME", "Добре дошли в инсталирането на Galaxytool. Ще бъдете ръководени в процеса на инсталиране на Galaxytool.");

define("INSTALL_STEP2_DESCRIPTION","Погрижете се файловете ви config.php и attributes.php да са достъпни за запис.");
define("INSTALL_STEP2_DESCRIPTION2","Ако не знаете как да постигнете това, моля погледнете тук: &1");
define("INSTALL_STEP2_FILE_NOT_WRITEABLE", "Файлът не е достъпен за запис");

define("INSTALL_STEP3_SERVER", "Сървер за базата данни");
define("INSTALL_STEP3_USERNAME", L_USERNAME);
define("INSTALL_STEP3_PASSWORD", L_PASSWORD);
define("INSTALL_STEP3_DBNAME", "Име на базата данни");
define("INSTALL_STEP3_PREFIX", "Префикс за името на таблицата");
define("INSTALL_STEP3_ENTER_PREFIX", "Напр. mytool_");
define("INSTALL_STEP3_ENTER_SERVER", "Въведете адреса на сървера. Свържете се със системния си администратор, ако е необходимо. Обикновено правилната стойност е localhost.");
define("INSTALL_STEP3_ENTER_USERNAME", "Въведете името на потребителя за достъп до базата данни");
define("INSTALL_STEP3_ENTER_PASSWORD", "Въведете паролата за достъп до базата данни");
define("INSTALL_STEP3_ENTER_DBNAME", "Въведете името на базата данни, която да бъде използвана за инсталирането (трябва да съществува)");
define("INSTALL_STEP3_CONNECT_FAILED", "Не можах да установя връзка със сървера за базата данни");
define("INSTALL_STEP3_DB_FAILED", "Базата данни &1 не беше намерена");
define("INSTALL_STEP3_MYSQL_VERSION_FAILED", "MySQL версия &1 не работи с тази версия на Galaxytool");

define("INSTALL_STEP4_URL","Линк към OGame");
define("OGAME_URL_DETAILS","Моля, въведете кой да е линк, който виждате, когато сте влезли в OGame. Въз основата на този линк, Galaxytool ще установи адреса на OGame API, който може да се използва за обновяване на Galaxytool без Galaxytoolbar. Това API беше въведено в OGame версия 4.1.");
define("INSTALL_STEP4_UNIVERSE","OGame Вселена");
define("INSTALL_STEP4_DEF_TO_DEBRIS","Защитите дават отломки");
define("INSTALL_STEP4_DEBRIS_RATE","Процент на отломките");
define("INSTALL_STEP4_SPEED_RATE","Ускорение");
define("INSTALL_STEP4_ENTER_UNIVERSE","Въведете името или номера на вашата OGame вселена (големи или малки букви имат значение!).");
define("INSTALL_STEP4_UNIVERSE_MISSING","Трябва да определите вселената си");
define("INSTALL_STEP4_ENTER_URL","Въведете адреса на вашата OGame вселена");
define("INSTALL_STEP4_URL_MISSING","Трябва да определите адреса на вашата OGame вселена");
define("INSTALL_STEP4_URL_CHECK_FAILED","Не можах да намеря OGame API на &1");
// 5.1
define("INSTALL_STEP4_GETSETTINGS","Fetch settings");

define("INSTALL_STEP5_TOOLNAME","Име на Galaxytool");
define("INSTALL_STEP5_ENTER_TOOLNAME","Това е името, което ще се показва на страницата за влизане, за да идентифицира Вашия Galaxytool");
define("INSTALL_STEP5_LANGUAGE","Език по подразбиране");
define("INSTALL_STEP5_EMAIL_TO","Електронна поща до");
define("INSTALL_STEP5_ENTER_EMAIL_TO","Въведете адреса на електронната поща, където бихте искали да получавате нотификации за заявки за регистриране");
define("INSTALL_STEP5_EMAIL_FROM","Електронна поща от");
define("INSTALL_STEP5_ENTER_EMAIL_FROM","Този адрес на електронна поща се поставя като адрес за отговор на всички съобщения, изпратени от Galaxytool");
define("INSTALL_STEP5_USE_PHPMAILER","Използване на PHPMailer");
define("INSTALL_STEP5_MAXSHOUTS","Максимален брой съобшения на дъската за обявления");
define("INSTALL_STEP5_ENTER_USE_PHPMAILER","Използване на PHPMailer ако сърверът Ви не поддържа по подразбиране изпращане на съобщения по електронната поща");
define("INSTALL_PHPMAILER_HOST","SMPT хост");
define("INSTALL_PHPMAILER_HOST_EXAMPLE","напр. smtp.provider.com");
define("INSTALL_PHPMAILER_USER","SMPT потребителско име");
define("INSTALL_PHPMAILER_USER_EXAMPLE","напр. user@provider.dcom");
define("INSTALL_PHPMAILER_PASS","SMPT парола");
define("INSTALL_PHPMAILER_SECURE","Метод за аутентификация (напр. ssl)");
define("INSTALL_PHPMAILER_PORT","SMTP порт");

define("INSTALL_STEP6_INTRO","Моля, въведете парола за акаунта <strong>admin</strong>, който трябва да използвате при първо влизане в Galaxytool след инсталирането.");

define("INSTALL_STEP7_CONFIG","Конфигурационният файл е създаден");
define("INSTALL_STEP7_CONFIG_FAILED","Конфигурационният файл не беше създаден");
define("INSTALL_STEP7_ATTRIBUTES","Файлът с атрибутите беше създаден");
define("INSTALL_STEP7_ATTRIBUTES_FAILED","Файлът с атрибутите не беше създаден");
define("INSTALL_STEP7_CREATED_TABLES","Таблиците в базата данни бяха създадени");

define("INSTALL_STEP8_INTRO","Вие инсталирахте Galaxytool успешно!");
define("INSTALL_STEP8_LOAD_DATA","Сваляне на данните от OGame...");
define("INSTALL_STEP8_LOAD_DATA_FINISHED","Салянето на данните от OGame е завършено");
define("INSTALL_STEP8_DELETE_FILE","Сега би трябвало да изтриете инсталационните файлове install.php и update.php от уеб сървера си.");
define("INSTALL_STEP8_LOGON","Моля, влезте с потребителското име <strong>admin</strong> и с административната парола, която въведохте по-рано.");

/*********************************************************************
* update.php
**********************************************************************/
define("UPDATE_START","Започване на обновяване до версия &1");
define("UPDATE_STEP_DONE","Готово");
define("UPDATE_TITLE", "Galaxytool обновяване за версия");
define("UPDATE_STEP1_WELCOME", "Добре дошли в механизма за обновяване на Galaxytool. Ще бъдете насочван в процеса на обновяване на Galaxytool.");
define("UPDATE_STEP1_BACKUP_FILES", "Като първа стъпка, направете резервно копие на вашата директория <strong>config</strong>! Ще трябва да възстановите съдържанието на конфигурацията, в случай че възникнат грешки.");
define("UPDATE_STEP1_BACKUP_DB", "След това направете <a href=\"http://www.ehow.com/how_2036600_create-database-php.html\">резервно копие</a> на базата си данни.");
define("UPDATE_STEP1_PROCEED", "След като резервното копие е готово, можете да продължите с обновяването.");
define("UPDATE_STEP1", INSTALL_STEP1);
define("UPDATE_STEP2", INSTALL_STEP5);
define("UPDATE_STEP2_OLD_VERSION", "Предишна версия на Galaxytool");
define("UPDATE_STEP3", "Обновяване на Galaxytool");
define("UPDATE_STEP3_UPDATE_RUNNING", "Обновяване, моля изчакайте...");
define("UPDATE_STEP4", "Завършване на обновяването");
define("UPDATE_STEP4_INTRO","Galaxytool беше обновен успешно!");
define("UPDATE_STEP4_UPDATE_DONE","Етапите на обновяването бяха изпълнени.");
define("UPDATE_FAILED","Обновяването беше неуспешно.");

?>