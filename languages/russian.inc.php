<?php
/*
 * defines the characters used in OGame to indicate player status
 */
define("PLAYER_BANNED","з");
define("PLAYER_VACATION_MODE","РО");
define("PLAYER_NOOB","н");
define("PLAYER_INACTIVE","i");
define("PLAYER_LONG_INACTIVE","I");
define("PLAYER_OUTLAW","o");

/*********************************************************************/
/***************************** public ********************************/
/*********************************************************************/
//index.php
define("L_USERNAME","Логин");
define("L_PASSWORD","Пароль");
define("L_LOGINFAILURE","Твой логин или пароль введён неправильно или аккаунт ещё не активирован.");
define("L_TOKENFAILURE","Ваш ключ авторизации неверен или аккаунт не активирован");
define("L_LOGINTEXT","Введи пользовательские данные.");
define("L_LANGUAGE","Доступные языки:");
define("L_TIMEOUT","Время сессии истекло");
define("L_REGISTER","Регистрация");
define("L_PWLOST","Забыл пароль");
define("INDEX_TITLE","Обзор");
define("INDEX_INFO","Информация");
define("INDEX_ENTRIES","Всего систем");
define("INDEX_ENTRIES_LASTWEEK","Системы, добавленные в течение последней недели");
define("INDEX_ENTRIES_TO_OLD","Системы старше месяца");
define("INDEX_REGISTERED_USERS","Зарегистрированные пользователи");
define("INDEX_PAGEFORWARD","Нажмите здесь, если ваш браузер не поддерживает редирект.");
define("INDEX_NOTICES","Заметки");
define("INDEX_PLAYERS","Статистика игроков");
define("INDEX_ALLIES","Статистика альянсов");
define("INDEX_REPORTS","Шпионские доклады");
define("INDEX_VERSION","Скачать новую версию");
define("INDEX_LATEST_VERSION","У вас самая новая версия");
define("INDEX_SHOUTBOX","Последние сообщения");
define("INDEX_NOENTRY","Пока нет сообщений");
define("INDEX_COMMENT","Твоё сообщение");
define("INDEX_INSERT","Добавить");
define("INDEX_UMOD","Игроков в РО");
define("INDEX_NO_MOONS","Кол-во лун");
define("INDEX_NO_EMPTY_SYSTEMS","Кол-во пустых систем");
define("INDEX_NO_FULL_SYSTEMS","Кол-во полностью заполненных систем");
define("INDEX_NO_TARGETS","Кол-во планет, на которые можно напасть");
// 4.0
define("INDEX_USERINFO","Информация о пользователях");
define("INDEX_ONLINE","Сейчас онлайн");
define("INDEX_TODAY","Сегодня онлайн");
define("INDEX_ALL","Всего посещений");
// 4.3.7
define("GENERAL_LOAD_FORM","Форма загрузки данных");
define("GENERAL_SAVE_FORM","Форма сохранения данных");
define("GENERAL_SAVE_AS_TEXT","Сохранить как");
define("GENERAL_SAVE","Сохранить");
// 4.8
define("INDEX_USERMANAGEMENT","Обзор активации");
define("INDEX_NEEDADMIN","Аккаунты для разблокировки");
define("INDEX_NEEDEMAIL","Неактивированные аккаунты");
define("INDEX_TOOLBAR_INFO","Информация о плагине Galaxytool");
define("INDEX_TOOLBAR_URL","Ссылка на Galaxytool");
define("INDEX_TOOLBAR_VERSION_REQUIRED","Требуется хотя бы версия Galaxytool ");
define("INDEX_TOOLBAR_INSTALL_GUIDE","Инструкции установки для плагина");
define("INDEX_TOOLBAR_TOKEN","Ключ авторизации");
define("INDEX_TOOLBAR_NEW_TOKEN","Авторизуйтесь заново");
define("INDEX_PLAYERS_WITH_N_PLANETS","Игроки имеющие более чем &1 планет");
define("INDEX_GETTING_STARTED","Первые шаги с Galaxytool");
define("INDEX_GETTING_STARTED1","Добро пожаловать в Galaxytool!");
define("INDEX_GETTING_STARTED2","Galaxytool поможет Вам узнать, что происходит в Вашей ОГейм вселенной &1");
define("INDEX_GETTING_STARTED3","Перед тем как Вы сможете анализировать информацию, Вам сначала нужно добавить её. Для этого Вам нужен плагин браузера &1 для Firefox.");
define("INDEX_GETTING_STARTED4","После установки плагина, Вы проходите по страничкам ОГейма как обычно и сможете заметить небольшое окошко, которое появляется каждый раз когда какая-то информация отсылается в Ваш Galaxytool.");
define("INDEX_GETTING_STARTED5","Когда плагин отошлет информацию в Galaxytool, Вы сможете начать анализировать, где у игроков есть колонии, сколько колоний, какие есть шпионские доклады и в какое время суток игроки активны.");
define("INDEX_GETTING_STARTED6","Вы также сможете посмотреть, как быстро прогрессируете, сравнив свой рост с ростом оппонентов или проанализировав бои за последние дни и недели.");
define("INDEX_GETTING_WIKIPAGE","У Galaxytool много возможностей.");
define("INDEX_GETTING_WIKIPAGE2","Изучите их на нашей wiki странице.");
define("INDEX_GETTING_BOARD","Для предложений и замечаний используйте наш форум:");
define("INDEX_GETTING_CHAT1","Или посетите наш чат:");
define("INDEX_GETTING_CHAT2","Мы не онлайн 24/7, имейте терпение.");
// new 5.0
define("INDEX_CLOSE","Закрыть");
define("INDEX_LOGIN","Войти");
define("GENERAL_REQUIRED_FIELDS","Заполните все требуемые поля");
define("INDEX_MESSAGES","Сообщения");
define("INDEX_EXAMPLE","Пример");
define("INDEX_INVALID_DATA","Неверная информация");
define("GENERAL_COLUMN_HIDE_TITLE","Редактирование столбцов");
define("GENERAL_COLUMN_HIDE_INFO","Выберите, какие столбцы вы хотите поместить в таблицу");
define("GENERAL_ENTRIES_DELETED","&1 записей выбрано");
define("GENERAL_APPLY","Применить");
define("STARTPAGE_GALAXYTOOL_DESCR","<em>Galaxytool</em> - это утилита для игры OGame.");
define("GENERAL_OVERWRITE","Заменить повторяющуюся запись");
define("GENERAL_OVERWRITE_QUESTION","Заменить?");
define("INDEX_OWN_LOGINS","Ваши логины");
define("GENERAL_OPEN_IN_NEW_WINDOW","Открыть в новом окне");
// 5.1
define("GENERAL_UNIT_OF_MEASURE_DAYS","Days");

/*********************************************************************/
/***************************** internal ******************************/
/*********************************************************************/
// index.php
define("PROGRAM_NAME","OGame Galaxytool");
define("SHORTNAME","Galaxytool");
define("BACK_INDEX","Обратно на стартовую");
define("UNIVERSE","Вселенная");

// search
define("MENU_INFO_LINKS","Информация");
define("MENU_PAGE","Обзор");
define("MENU_DB_SEARCH","Искать в базе данных");
define("MENU_DB_NOTICES","Искать в заметках");
define("MENU_DB_REPORTS","Искать в шпионских докладах");
define("MENU_GALAXYVIEW","Обзор галактики");
define("MENU_STATISTICS","Статистика");
define("MENU_ALLYHISTORY","Статистика по времени");
// 4.7
define("MENU_FLEET_MOVEMENTS","Передвижения флотов");
define("MENU_COMBAT_REPORTS","Боевые доклады");
define("MENU_MESSAGES","Игровые сообщения");

// insert / change
define("MENU_OPTION_LINKS","Установки");
define("MENU_DB_REFRESH","Обновить базу данных");
define("MENU_NOTICES","заметки");
define("MENU_DB_STATUS","Статус базы данных");
define("MENU_USEROPTIONS","Управление пользователями");
define("MENU_USEROPTIONS2","Настройки аккаунта");
define("MENU_USEROPTIONS3","Информация об аккаунтах");
// 4.2
define("MENU_ADMIN","Администрирование");
// 4.3.3
define("MENU_LOGOUT","Выход");

// Stuff
define("MENU_STUFF","Прочее");
define("MENU_FORUM_THREAD","Форум разработчиков");
define("MENU_DOWNLOADPAGE","Скачать");
define("MENU_LANGUAGE","Выбор языка");
define("MENU_HELP","Справка");
// 4.0
define("MENU_TOOLOPTIONS","Установки Galaxytool");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1","Добавлено в базу данных");
define("PARSER_ERROR1","Ошибка при попытке добавить координаты:");
define("PARSER_ERROR2","Не удалось выбрать базу данных!");
define("PARSER_ERROR3","Не удалось найти базу данных!");
define("PARSER_WRONG_UNIVERSE","Неверная вселенная - отправлено: \"&1\", ожидалось: \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","OGame Galaxytool - Страница просмотра данных");
define("SHOW_SEARCH","Искать в базе данных");
define("SHOW_ALLYSYMBOL","Аббревиатура альянса");
define("SHOW_PLAYERNAME","Имя игрока");
define("SHOW_MOONS","Искать только луны");
define("SHOW_NOTICES","Искать только планеты с заметками");
define("SHOW_COLONIES","Только планеты под колонизацию");
define("SHOW_YES","Да");
define("SHOW_NO","Нет");
define("SHOW_SEARCHRANGE","Радиус поиска");
define("SHOW_SEARCH_IN","Искать в галактике");
define("SHOW_FROM_SYSTEM","от системы");
define("SHOW_FROM_PLANET","от номера планеты");
define("SHOW_TO","до");
define("SHOW_DESCRIPTION","При поиске игроков или альянсов допустимо использование символа *, например *nick* найдёт всех игроков, у которых в имени есть &quot;nick&quot;.<br />Не обязательно заполнять все поля, можно искать не только координаты планет альянса, но также и все луны того или иного альянса.");
define("SHOW_SORT_BY","Сортировать по");
define("SHOW_GALASYSTEM","Галактике/системе");
define("SHOW_ALLYNAME","Названию альянса");
define("SHOW_SEARCHBUTTON","Поиск");
define("SHOW_ADDRESS","Адрес");
define("SHOW_ALLYSORT","Альянс");
define("SHOW_PLANET","Название планеты");
define("SHOW_STATUS","Статус");
define("SHOW_CURRENTNESS","Актуальность");
define("SHOW_PLAYER_STATUS","Статус игрока");
define("SHOW_PLAYER_STATUS1","все");
define("SHOW_PLAYER_STATUS2","Можно нападать");
define("SHOW_PLAYER_STATUS3","Неактивный");
define("SHOW_HITS","Результаты");
define("SHOW_OF","от");
define("SHOW_ASC","по возрастанию");
define("SHOW_DESC","по убыванию");
define("SHOW_RESULTS","Результаты");
define("SHOW_MOON","Луна");
define("SHOW_UKMOONSIZE","неизвестно");
define("SHOW_DF","обломки");
define("SHOW_DF_LONG","Поле обломков");
define("SHOW_METAL","М");
define("SHOW_METAL_LONG","Металл");
define("SHOW_CRYSTAL","К");
define("SHOW_CRYSTAL_LONG","Кристалл");
define("SHOW_BOTH","всего");
define("SHOW_AT_LEAST","(мин.)");
define("SHOW_DATE","Дата");
define("SHOW_DATE_0","все");
define("SHOW_DATE_1","старше");
define("SHOW_DATE_2","новее");
define("SHOW_RANK","Место");
define("SHOW_FRANK","Место по флотам");
define("SHOW_MEMBERS","Члены");
define("SHOW_NOTRANKED","Не в топ-1500.");
define("SHOW_NOTICERES","Заметки");
define("SHOW_REPORTS","Показать только планеты с шп. докладами");
define("SHOW_REPORTS_SHORT","Шпионаж");
define("SHOW_NOTHING","Ничего не удалось найти");
define("SHOW_ALLIANCE_STATUS","Статус альянса");
define("SHOW_NO_STATUS","нет статуса");
define("SHOW_NAP","Пакт");
define("SHOW_ALLIED","Союзник");
define("SHOW_WAR","Война");
define("SHOW_BOYCOTT","Бойкот");
define("SHOW_NEUTRAL","Нейтрально");
define("SHOW_OWN","Свой альянс");
define("SHOW_WING","Крыло");
// new from 3.6
define("SHOW_EXT_OPTIONS1","Показать доп. опции для радиуса поиска, поиска по месту, дате и поиску обломков.");
define("SHOW_EXT_OPTIONS2","Показать доп. опции для поиска места для колонии, лун, докладов, заметок, статуса игрока или дипломатии.");
define("SHOW_EXT_OPTIONS3","Показать доп. опции для сортировки результатов поиска.");
// new 5.0
define("SHOW_EXTENDED","расширенный поиск");
define("SHOW_MOON_SELECTION","Планета с луной");
define("SHOW_REPORT_SELECTION","Планета с отчетом");
define("SHOW_FILTER_BY","Исключить из списка");
define("SHOW_FILTER_NONE","ничего");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Show players without score changes within the last few days");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","OGame Galaxytool - Страница статуса");
define("STATUS_DB_STATUS","Статус базы данных");
define("STATUS_COLOR","Цвет");
define("STATUS_AGE1","Возраст данных 1 день.");
define("STATUS_AGE2","Актуальность 2 - 4 дня.");
define("STATUS_AGE3","Актуальность 4 - 7 дней.");
define("STATUS_AGE4","Актуальность 1 - 2 недели.");
define("STATUS_AGE5","Актуальность 2 - 4 недели.");
define("STATUS_AGE6","Данные старше месяца!");
define("STATUS_AGE7","Ещё нет данных.");
define("STATUS_ON","");
define("STYLES_COLOR1","Цвет1");
define("STYLES_COLOR2","Цвет2");
define("STYLES_COLOR3","Цвет3");
define("STYLES_COLOR4","Цвет4");
define("STYLES_COLOR5","Цвет5");
define("STYLES_COLOR6","Цвет6");
define("STYLES_COLOR7","Цвет7");
// 4.8
define("STATUS_DB_LEGEND","Легенда");
define("STATUS_GALAXY","Обзор галактики");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","OGame Galaxytool - Управление пользователями");
define("USER_NAMES","Пользователь");
define("USER_ERROR","Ошибка");
define("USER_NEWUSER","Добавить пользователя");
define("USER_OPTIONS","Установки");
define("USER_USERNAME","Имя пользователя");
define("USER_PASSWORD","Пароль");
define("USER_PASSWORD_CONFIRM","Повторить пароль");
define("USER_GALAXY","Галактика");
define("USER_SEARCH","Искать");
define("USER_INSERT","Добавить");
define("USER_DELETE","Удалить");
define("USER_DELETE_ENTRY","Вы действительно хотите удалить этого игрока?: "); // new 3.6
define("USER_STATUS","Статус");
define("USER_STYLES","Настроить стиль");
define("USER_SUBMIT","Отправить");
define("USER_RESET","Отменить");
define("USER_YES","Да");
define("USER_NO","Нет");
define("USER_STYLEPATH","Путь к файлу styles.css");
define("USER_PROBES","Шпионские доклады");
define("USER_EMAIL","E-mail");
define("USER_ERROR1","Пароль неверный или адрес E-mail недействителен.");
define("USER_ERROR2","Адрес E-mail недействителен.");
define("USER_INGAME","Имя в игре");
define("USER_ALLYTAG","Аббревиатура альянса");
define("USER_ALLYHISTORY","История альянса");
define("USER_DIPLOMATIC","Дипломат");
define("USER_STATSPAGE","Кол-во записей на странице статистики");
define("USER_LINKS","Ссылки");
define("USER_LINKS2","Формат:<br>текст;url<br>текст2;url2<br>текст3;url3");
define("USER_EXPORT_TITLE","Экспортируемые цвета (BB Codes)");
define("USER_BB_COORDINATES","Координаты");
define("USER_BB_MOON","Луна");
define("USER_BB_DEBRIS","Поле обломков");
define("USER_BB_ALLY","Название альянса");
define("USER_BB_ALLYDETAILS","Подробности альянса");
define("USER_BB_PLAYERNAME","Имя игрока");
define("USER_BB_BANNED","Заблокирован");
define("USER_BB_VACATION","Режим отпуска");
define("USER_BB_NOOB","Защита новичков");
define("USER_BB_INACTIVE","неактивный");
define("USER_BB_LONGINACTIVE","неактивный 4 недели");
// new with 4.7
define("USER_DELETION","Удалить");
define("USER_FLEETINFO",MENU_FLEET_MOVEMENTS);
define("USER_ACTIVITIES","Активность игроков");
define("USER_MAINTENANCE","Поддержка Galaxytool");
define("USER_MANAGEMENT",MENU_USEROPTIONS);
define("USER_DELETE_MY_COMBAT_REPORTS","Удалить мои логи");
define("USER_DELETE_MY_MESSAGES","Удалить мои сообщения");
define("USER_DELETE_MY_FLEETMOVES","Удалить информацию о передвижении моих флотов");
// 4.8
define("USER_DELETE_MY_COMBAT_REPORTS_LIMITED","Удалить мои боевые доклады старше &1 дней");
define("USER_DELETE_MY_MESSAGES_LIMITED","Удалить мои сообщения старше &1 дней");
define("USER_TABLE_ENTRIES","Количество результатов поиска для каждой страницы.");
// 5.0
define("USER_EXISTS","Пользователь уже существует");
define("USER_BB_OUTLAW","Бандит");
define("USER_INVALID_URL","Указанный URL &1 неверный - он будет пропущен");

/*********************************************************************
* galaxyview.php
*********************************************************************/
define("VIEW_TITLE","OGame Galaxytool - Обзор подробностей");
define("VIEW_NODATA","Пока нет данных.");
define("VIEW_GALAXY","Галактика");
define("VIEW_SYSTEM","Солнечная система");
define("VIEW_POSITION","Поз.");
define("VIEW_PLANET","Планета");
define("VIEW_MOON","Луна");
define("VIEW_TF","Обломки");
define("VIEW_PLAYER","Игрок");
define("VIEW_PLAYER_ADD","(Статус)"); // shortened at 3.6
define("VIEW_ALLY","Альянс");
define("VIEW_ALLY_ADD",""); // cleared at 3.6
define("VIEW_METAL","М");
define("VIEW_CRYSTAL","К");
define("VIEW_COLONISED","Планет заселено");
define("VIEW_UKMOONSIZE","неизвестно");
define("VIEW_BACK","Назад");
define("VIEW_NOTICE","Заметки");
define("VIEW_REPORTS","Шпионаж");
define("VIEW_MOONPHALANX","Фаланги следующих лун достают до этой системы:");
define("VIEW_NOMOONS","Луны не найдены");
define("VIEW_IRAKS","Межпланетные ракеты следующих планет достают до этой системы");
define("VIEW_NOIRAKS","Не удалось найти МПР");
// 4,0
define("VIEW_MOON_DESTROY_CHANCE","Вероятности уничтожения луны");
define("VIEW_CHANCE_WITH_ONE","Вероятность с одной ЗС");
define("VIEW_CHANCE_WITH_N","Вероятность с ");
define("VIEW_DEATH_STARS","ЗС");
define("VIEW_DS_DESTROY_CHANCE","Вероятность потери ЗС");
define("VIEW_TOP","ТОП");
// new 4.3.5
define("VIEW_GO","перейти");
// new 5.0
define("VIEW_DIAMETER","Диаметр");

/*********************************************************************
* change_password.php
**********************************************************************/
define("PW_TITLE","OGame Galaxytool - Смена пароля");
define("OLD_PASSWORD","Старый пароль");
define("NEW_PASSWORD","Новый пароль");
define("CONFIRM_NEW_PASSWORD","Повторить новый пароль");
define("PW_MISMATCH","Введёные новые пароли не одинаковы!");
define("PW_ERROR","Старый пароль неверен!");
define("UPDATE_DONE","Готово.");
// new 4.2
define("TIMEZONE_OFFSET","Разница времени с сервером");
// new 4.3
define("DELETE_ACCOUNT","Удалить аккаунт в Galaxytool");
define("DELETE_ACCOUNT_SAFETY_REQUEST","Вы действительно хотите удалить данный аккаунт в Galaxytool?");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","Разрешения");
define("CH_PASSWD_ADMIN","Админ");
// new 4.7
define("TIMEZONE_OGAME_OFFSET","Часовой пояс для сервера OGame");
// new 4.8
define("CH_PASSWD_USER_LANGUAGE","Поменять на этот язык после нового логина");
define("CH_PASSWD_USER_LANGUAGE_NO_CHANGE","Оставить без изменений");
define("CH_PASSWD_EXPAND","Растянуть");
define("CH_PASSWD_COLLAPSE","Сжать");
define("CH_PASSWD_HIDDEN","Скрыто");
define("CH_PASSWD_GETTING_STARTED","Показывать \"Первые шаги\" после авторизации");
define("CH_PASSWD_PLUGIN","Показывать информацию о плагине после авторизации");

/*********************************************************************
* notices.php
**********************************************************************/
define("NOTICE_TITLE","OGame Galaxytool - Заметки");
define("NOTICE_HEADER","Редактировать заметку");
define("NOTICE_HEADER2","Редактировать свои заметки");
define("NOTICE_PUBLIC","Сделать видимым для всех?");
define("NOTICE_YES","да");
define("NOTICE_NO","нет");
define("NOTICE_TEXT","Текст заметки");
define("NOTICE_SAVE","Сохранить");
define("NOTICE_DELETED","Запись удалена.");
define("NOTICE_SAVED","Запись сохранена.");
define("NOTICE_RESULTS","Все заметки");
define("NOTICE_USER","Пользователь");
define("NOTICE_DATE","Дата");
define("NOTICE_EDIT","Редактировать");
define("NOTICE_DELETE","Удалить");
define("NOTICE_NEW","Удалить свою запись");
define("NOTICE_NOTPUBLIC","Заметка не общедоступна.");
define("NOTICE_ALL","все");
define("NOTICE_NONE",SHOW_FILTER_NONE);
define("NOTICE_SEARCH","Искать в заметках");
define("NOTICE_SEARCH_SHORT","Поиск");
define("NOTICE_HITS","Результаты");
define("NOTICE_SHOWRESULTS","Результатов на страницу");
define("NOTICE_OF","из");
define("NOTICE_NOTHING","Поиск не дал результатов.");
// 4.0
define("NOTICE_CHARS","Знаки");
define("NOTICE_PLAYERNAME","Игрок");
define("NOTICE_SHOWALL","Показать все заметки.");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","OGame Galaxytool - Шпионские доклады");
define("REPORTS_RESOURCES","Сырьё");
define("REPORTS_FLEET","Флоты");
define("REPORTS_DEFENCE","Оборона");
define("REPORTS_BUILDINGS","Постройки");
define("REPORTS_TECHNOLOGY","Исследования");
define("REPORTS_MOON","Луна");
define("REPORTS_SEARCH","Искать в докладах");
define("REPORTS_SEARCH_SHORT","Поиск");
define("REPORTS_HITS","Результаты");
define("REPORTS_NOTHING","Поиск не дал результатов.");
define("REPORTS_ADDRESS","Адрес");
define("REPORTS_CURRENTNESS","Актуальность");
define("REPORTS_PLAYERNAME","Имя игрока");
define("REPORTS_ALLY","Альянс");
define("REPORTS_VIEW","Просмотреть доклад");
define("REPORTS_SEARCH_IN","Искать в галактике");
define("REPORTS_FROM_SYSTEM","от системы");
define("REPORTS_TO","до");
define("REPORTS_DELETE","удалить");
define("REPORTS_DELETED","Запись удалена");
define("REPORTS_RESULTS","Результатов на страницу");
define("REPORTS_OF","из");
define("REPORTS_DATE","дата");
define("REPORTS_DATE_0","все");
define("REPORTS_DATE_1","старше чем");
define("REPORTS_DATE_2","новее чем");
define("REPORTS_NOTICES","заметки");
define("REPORTS_AT_LEAST_RESOURCES","Всего ресурсов (мин.)");
define("REPORTS_SEARCH_EXTENDED","расширенный поиск");
define("REPORTS_FLEET_RESIS","Очки во флоте");
define("REPORTS_DEFENCE_RESIS","Очки в защите");
define("REPORTS_ALL_RESIS","всего потеря очков");
define("REPORTS_TECHS","Технологии");
define("REPORTS_UNKNOWN_ENTRIES","неизвестные записи");
define("REPORTS_PARTLY_INSERTED","вставлено частично");
define("REPORTS_FOR_ALL_RES","Для всех ресурсов");
define("REPORTS_FOR_TF","Для обломков");
define("REPORTS_KT","Малый транспорт");
define("REPORTS_GT","Большой транспорт");
define("REPORTS_SS","Линкоры");
define("REPORTS_REC","Переработчики");
define("REPORTS_RAIDABLE","Только цели, которые можно грабить");
define("REPORTS_ALL_RESOURCES","Всего ресурсов");
// 4.0
define("REPORTS_STUFF","Другое");
define("REPORTS_SPEEDSIM","Симулировать в Websim");
define("REPORTS_DRAGOSIM","Симулировать в Dragosim");
define("REPORTS_STATUS","Статус");
define("REPORTS_ERROR","Возникла ошибка");
// 4.2
define("REPORTS_OWN_REPORTS","Только мои доклады");
// 4.3.3
define("REPORTS_UPLOAD_BY","Доклады, загруженные");
// 4.4
define("REPORTS_DEPTH","Глубина докладов");
define("REPORTS_FLEET_SCORE","Очки во флотах");
define("REPORTS_DEFENCE_SCORE","Очки в обороне");
// 5.0
define("REPORTS_HOURS","часов");
define("REPORTS_MAX_RESULTS_HIT","Ваш запрос вернул более &1 записей. Только первые &1 записей будут отображены. Измените ваш запрос, чтобы он вернул меньшее число записей.");
define("REPORTS_OSIMULATE","Симуляция с помощью OSimulate");
define("REPORTS_SHOW_ONLY"," Показать только");
define("REPORTS_SHOW_PLANETS","Планеты");
define("REPORTS_SHOW_MOONS","Луны");
define("REPORTS_OWNER","Отчеты принадлежат");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","OGame Galaxytool - Статистика");
define("STATS_TBLHEAD","Статистика");
define("STATS_RANK","Место");
define("STATS_PLAYERNAME","Игрок");
define("STATS_SCORE","Очки");
define("STATS_FLEET","Флот");
define("STATS_RESEARCH","Исследования");
define("STATS_ALLYNAME","Альянс");
define("STATS_MEMBERS","Члены");
define("STATS_STATUS","Статус");
define("STATS_NOTHING","без статуса");
define("STATS_NAP","Пакт");
define("STATS_ALLIED","Союзник");
define("STATS_WAR","Война");
define("STATS_BOYCOTT","Бойкот");
define("STATS_NEUTRAL","Нейтр. отношения");
define("STATS_OWN","Свой альянс");
define("STATS_WING","Крыло");
define("STATS_UPDATE","Данные от");
define("STATS_PLAYERSTATS","Статистика игроков");
define("STATS_ALLYSTATS","Статистика альянсов");
// 4.0
define("STATS_DELETE","удалить игрока");
define("STATS_CONFIRM_DELETE","Действительно удалить игрока из статистики?");
define("STATS_CHANGE_PLAYER_STATUS","Статус игрока");
define("STATS_CHANGE_ALLIANCE_STATUS","Статус альянса");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","Все игроки этого альянса получат выбранный статус. Предыдущий статус будет заменён. Но возможно после этого дать игрокам отдельный статус.");
define("STATS_UNKNOWN","Остальные");
define("STATS_DETAILS","Подробности для");
// 4.4
define("STATS_PLAYERSTATUS",SHOW_PLAYER_STATUS);
define("STATS_IGNORE_STATUS",SHOW_PLAYER_STATUS1);
define("STATS_ACTIVE","активный");
define("STATS_INACTIVE",USER_BB_INACTIVE);
define("STATS_BANNED",USER_BB_BANNED);
define("STATS_VACATION",USER_BB_VACATION);
define("STATS_NOOB",USER_BB_NOOB);
// 4.8
define("STATS_YES",SHOW_YES); // reuse SHOW definitions if applicable
define("STATS_NO",SHOW_NO);
define("STATS_SEARCH",USER_SEARCH);
define("STATS_SHOW_GRAPH","Отображать детали");
define("STATS_LONG_INACTIVE",USER_BB_LONGINACTIVE);
// 4.9
define("STATS_STANDARD","По очкам");
define("STATS_MILITARY","Боевой рейтинг");
define("STATS_ECONOMY","Экономика");
define("STATS_HONOUR","Очки чести");
define("STATS_MILITARY_BUILD","Боевых очков набрано");
define("STATS_MILITARY_DESTROYED","Боевых очков уничтожено");
define("STATS_MILITARY_LOST","Боевых очков потеряно");

/*********************************************************************
* register.php
**********************************************************************/
define("REGISTER_REGISTRATE","Регистрация");
define("REGISTER_LOGINNAME","Логин");
define("REGISTER_PASSWORD","Пароль");
define("REGISTER_PASSWORD_CONFIRM","Повторить пароль");
define("REGISTER_EMAIL","E-mail");
define("REGISTER_INGAME","Имя в игре");
define("REGISTER_ALLYTAG","Аббревиатура альянса");
define("REGISTER_EMAILVERIFICATION","Проверка адреса E-mail");
define("REGISTER_EMAILTEXT","Нажмите на эту ссылку, чтобы завершить регистрацию на Galaxytool:");
define("REGISTER_ERROR1","Этот логин уже занят.");
define("REGISTER_ERROR2","Ошибка при отправлении письма! Свяжитесь с администратором.");
define("REGISTER_ERROR3","Ошибка при связи с базой данных!");
define("REGISTER_INFO1","Аккаунт успешно создан.");
define("REGISTER_INFO2","Нажмите теперь на ссылку в регистрационном E-mail чтобы завершить регистрацию.");
define("REGISTER_INFO3","Адрес E-mail подтверждён, теперь только админ должен активировать аккаунт.");
define("REGISTER_BUTTON","Обратно на стартовую");
define("REGISTER_NEW_SUBJECT","Зарегистрирован новый пользователь");
define("REGISTER_NEW_MAILTEXT","Новый пользователь зарегистрировался в Galaxytool.");
// new 4.2
define("REGISTER_BACK","Вернуться на первую страницу");
// new 4.3.5
define("REGISTER_MISSING_FIELDS","Заполните все обязательные поля");
// new 4.8
define("REGISTER_ERROR4","Email адрес не действителен.");
define("REGISTER_ERROR5","Пароли не совпадают.");
define("REGISTER_PWS","Устойчивость пароля");
define("REGISTER_PWS0","Очень слабый");
define("REGISTER_PWS1","Слабый");
define("REGISTER_PWS2","Хороший");
define("REGISTER_PWS3","Сильный");
define("REGISTER_PWS4","Очень сильный");
// new 5.0
define("REGISTER_EMAIL_USED","Указанный E-mail уже используется");

/*********************************************************************
* lost_password.php
**********************************************************************/
define("LOSTPW_TITLE","Восстановление пароля");
define("LOSTPW_INFO2","Новый пароль был создан и выслан на указанный адрес.");
define("LOSTPW_BUTTON1","Запросить пароль");
define("LOSTPW_BUTTON2","Обратно на стартовую");
define("LOSTPW_LOGINNAME","Логин");
define("LOSTPW_EMAIL","E-mail");
define("LOSTPW_ERROR1","Ошибка при запросе базы данных!");
define("LOSTPW_ERROR2","Подходящая запись не найдена!");
define("LOSTPW_ERROR3","Ошибка при отправлении письма! Свяжитесь с администратором.");
define("LOSTPW_EMAIL_SUBJECT","Восстановление пароля");
define("LOSTPW_EMAIL_TEXT1","Запрошенные данные для логина в Galaxytool");
define("LOSTPW_EMAIL_TEXT2","Логин");
define("LOSTPW_EMAIL_TEXT3","Пароль");
// new 5.0
define("LOSTPW_INFO1","На ваш E-mail было отправлено письмо, для подтверждения сброса пароля.");
define("LOSTPW_CONFIRM_RESET_SUBJECT","Забыли пароль?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","Привет,\n\nвы запросили сброс пароля для Galaxytool. Чтобы получить новый пароль нажми на следующую ссылку:");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","OGame Galaxytool - Пользовательская информация");
define("USERINFO_NAMES","Все пользователи сайта");
define("USERINFO_DETAIL","Подробности о");
define("USERINFO_ERROR1","Пользователь с таким ID неизвестен!");
define("USERINFO_USERNAME","Логин");
define("USERINFO_INGAME","Ник в игре");
define("USERINFO_EMAIL","E-mail");
define("USERINFO_ALLYTAG","Альянс");
define("USERINFO_STYLEPATH","Скин");
define("USERINFO_STATUS","Статус");
define("USERINFO_ACTIVATE","Активировать пользователя");
define("USERINFO_LOGINS","Кол-во входов на сайт");
define("USERINFO_LASTLOGIN","Последний Вход в систему");
define("USERINFO_DATA","Информация о занесённых системах");
define("USERINFO_NODATA","Пользователь ещё не вносил данных!");
define("USERINFO_GALAXY","Галактика");
define("USERINFO_SYSTEMS","Кол-во систем");
define("USERINFO_IP","Адрес IP");
define("USERINFO_LOGINTIME","Время входа в систему");
define("USERINFO_NOLOGIN","Пользователь ещё не логинился.");
define("USERINFO_LAST_GALAXYUPDATE","Последний внос обзора галактики");
define("USERINFO_LAST_PUBLIC_NOTICE","Последняя общественная заметка");
define("USERINFO_LAST_PRIVATE_NOTICE","Последняя личная заметка");
define("USERINFO_NUMBEROF_PUBLIC_NOTICE","Кол-во общественных заметок");
define("USERINFO_NUMBEROF_PRIVATE_NOTICE","Кол-во личных заметок");
define("USERINFO_ACTIVATED","Аккаунт активирован");
define("USERINFO_ACTIVATIONTEXT","Администратор Galaxytools активировал твой аккаунт.\n\n Удачи при использовании Galaxytool!");
// new 4.8
define("USERINFO_LAST_SUBMIT","Добавлена последняя информация");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","OGame Galaxytool - Статистика по времени"); // changed at 4.0
define("ALLYHISTORY_TBLHEAD","Обзор");
define("ALLYHISTORY_PLAYERNAME","Игрок");
define("ALLYHISTORY_ALLYNAME","Альянс");
define("ALLYHISTORY_LASTMONTH","Актуальный месяц"); // changed at 4.0
define("ALLYHISTORY_ALL_DATA","Все имеющиеся данные"); // new 4.0
define("ALLYHISTORY_SHOW","показать статистику");
define("ALLYHISTORY_TIMESPAN","Продолжительность");
define("ALLYHISTORY_PROGESS","Прирост");
define("ALLYHISTORY_SCORE","Очки");
define("ALLYHISTORY_FSCORE","Очки по флотам"); // new 4.0
define("ALLYHISTORY_RSCORE","Очки по исследованиям"); // new 4.0
define("ALLYHISTORY_MEMBER","Члены"); // new 4.0
define("ALLYHISTORY_NOTHING","Не удалось ничего найти");
define("ALLYHISTORY_DETAILS","Подробности");
define("ALLYHISTORY_SHOW_ADDRESS","Координаты");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","Информация об игроках");
define("DETAILEDINFO_ALLYINFO_TITLE","Информация об альянсах");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","Подробная информация об игроке");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","Подробная информация об альянсе");
define("DETAILEDINFO_NO_ALLIANCE","нет");
define("DETAILEDINFO_SCORE","Статистика по очкам");
define("DETAILEDINFO_FLEET","Статистика по флотам");
define("DETAILEDINFO_RESEARCH","Статистика по исследованиям");
define("DETAILEDINFO_RANK","Место");
define("DETAILEDINFO_POINTS","Очки");
define("DETAILEDINFO_KNOWN_PLANETS","Известные планеты");
define("DETAILEDINFO_MOONS","Известные луны");
define("DETAILEDINFO_PHALANX_AREA","Доклады фаланг");
define("DETAILEDINFO_NO_PHALANX_AREA","Не удалось найти фалангу");
define("DETAILEDINFO_NOTICES","Заметки");
define("DETAILEDINFO_NO_NOTICES","Нет заметок");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","Известные альянсы игрока");
define("DETAILEDINFO_RESOURCES_PER_HOUR","Ресурсов в час");
define("DETAILEDINFO_RESOURCES_PER_DAY","Ресурсов в день");
define("DETAILEDINFO_RESOURCES_PER_WEEK","Ресурсов за неделю");
define("DETAILEDINFO_RESOURCES_PER_MONTH","Ресурсов за  месяц (30 дней)");
define("DETAILEDINFO_METAL","Металла");
define("DETAILEDINFO_CRYSTAL","Кристалла");
define("DETAILEDINFO_DEUTERIUM","Дейтерия");
define("DETAILEDINFO_UNKNOWN","неизвестно");
define("DETAILEDINFO_SCORE_DISTRIBUTION","Распределение очков");
// new 4.2
define("DETAILEDINFO_GENERAL","Подробно");
define("DETAILEDINFO_MEMBERS","Члены");
define("DETAILEDINFO_GRAPHS","Графики");
define("DETAILEDINFO_RESOURCES","Ресурсы");
define("DETAILEDINFO_FLEET_TAB","Флоты");
define("DETAILEDINFO_TECH","Исследования");
define("DETAILEDINFO_FLEET_DETAIL","Итог / (среднее по игрокам) среди всех доступных докладов");
define("DETAILEDINFO_TECH_DETAIL","Среднее по всей доступной информации по игрокам");
// new 4.3
define("DETAILEDINFO_PLANET_TAB",REPORTS_SHOW_PLANETS);
define("DETAILEDINFO_MOON_TAB",REPORTS_SHOW_MOONS);
// 4.7
define("DETAILEDINFO_ACTIVITIES","Активность");
define("DETAILEDINFO_NODATA",VIEW_NODATA);
define("DETAILEDINFO_ACTIVITY_DESCRIPTION","Показать активность &1 собранную с:");
define("DETAILEDINFO_GALAXYVIEWS","Просмотры галактики");
define("DETAILEDINFO_SCANS","Шпионаж");
define("DETAILEDINFO_MESSAGES","Сообщения");
define("DETAILEDINFO_COMBATS","Боевые доклады");
define("DETAILEDINFO_ALLYPAGE","Просмотры страницы альянса");
define("DETAILEDINFO_MANUAL","Информацию добавленную вручную");
define("DETAILEDINFO_START","Начало");
define("DETAILEDINFO_TO","до");
define("DETAILEDINFO_TODAY","Конец");
define("DETAILEDINFO_DATA_RESTRICTION","включая:");
define("DETAILEDINFO_WEEKDAY_WEEKEND","Выходной день");
define("DETAILEDINFO_WEEKDAY_WORKINGDAY","Рабочий день");
define("DETAILEDINFO_WEEKDAY_MONDAY","Пн.");
define("DETAILEDINFO_WEEKDAY_TUESDAY","Вт.");
define("DETAILEDINFO_WEEKDAY_WEDNESDAY","Ср.");
define("DETAILEDINFO_WEEKDAY_THURSDAY","Чт.");
define("DETAILEDINFO_WEEKDAY_FRIDAY","Пт.");
define("DETAILEDINFO_WEEKDAY_SATURDAY","Сб.");
define("DETAILEDINFO_WEEKDAY_SUNDAY","Вс.");
define("DETAILEDINFO_WEEKDAY_SHORTLENGTH",3);
define("DETAILEDINFO_PLAYER_CURRENTLY_ACTIVE","Игрок активен в данный момент");
define("DETAILEDINFO_PLAYER_MESSAGES","доступные сообщение игрока");
define("DETAILEDINFO_SHOW","показать");
define("DETAILEDINFO_NONE","недоступно");
define("DETAILEDINFO_ENTER_MANUALLY","Добавить информацию об активности этого игрока");
define("DETAILEDINFO_PLAYER_SEEN_ON","Игрок был онлайн во время");
define("DETAILEDINFO_INSERT","Вставить");
define("DETAILEDINFO_OGAME_SERVERTIMES","Внимание: Информация о дате и времени соответствует времени серверов OGame !");
define("DETAILEDINFO_DAY_VIEW","обзор за 24 часа");
define("DETAILEDINFO_WEEK_VIEW","недельный обзор");
// new 4.8
define("DETAILEDINFO_HOME_PLANET","Главная планета");
// new 5.0
define("DETAILEDINFO_PLANETNAME","Название"); // also used for moons!
define("DETAILEDINFO_DEFENCE_SCORE","Очки обороны");
define("DETAILEDINFO_DEFENCE_SCORE_TOOLTIP","Очки обороны = Флот - Очки + Исследования + Экономика.<br/>Вся указанная статистика должна быть свежей, чтобы иметь хоть какое-то значение!");
define("DETAILEDINFO_SCORE_PER_SHIP","Очков на единицу флота");
define("DETAILEDINFO_SHIPS","Количество флота");
define("DETAILEDINFO_DATE_IN_FUTURE","Укажите время из прошлого.");

// new 4.2
/*********************************************************************
* administration.php
**********************************************************************/
define("ADMIN_TITLE","Администрирование Galaxytool");
define("ADMIN_DISCLAMER","Внимание: Запускайте любой из этих скриптов крайне аккуратно! Почти все из них удаляют данные.");
define("ADMIN_INCONSISTENCIES","Несоответствие данных в базе данных");
define("ADMIN_PLANETS","Планеты на позициях 0 или больших 15");
define("ADMIN_GALAXIES","Удалить галактики с номером больше чем &1 ");
define("ADMIN_PLAYERS","Удалить игроков без игрового идентификатора, его отсутствие приводит к дублированию в списке игроков");
define("ADMIN_REPORTS","Удалить доклады для больше не существующих планет");
define("ADMIN_MISC","Разное");
define("ADMIN_RESET","Очистка Galaxytool (не удалятся только таблицы с пользователями и IP адресами)");
define("ADMIN_OLD_PLAYERS","Удалить записи игроков старше чем &1 дней");
define("ADMIN_OLD_REPORTS","Удалить доклады старше чем &1 дней");
define("ADMIN_LOADING","Не закрывайте данное окно, пока выполняется скрипт.");
define("ADMIN_STATUS","Состояние ваших запросов");
define("ADMIN_SELECTION","Хотя бы один пункт должен быть выбран");
define("ADMIN_SAFETY","Вы уверены, что хотите запустить данный(-е) скрипт(ы)?");
define("ADMIN_DONE","выполнено");
define("ADMIN_NOTBD","не выполнено");
// new 4.3
define("ADMIN_OLD_GALAXIES","Удалить обзоры галактик старше, чем &1 дней");
define("ADMIN_UNUSED_PLAYERS","Удалить игроков, не встречающихся ни в одном обзоре галактик");
// new 4.7
define("ADMIN_OLD_ACTIVITIES","Удалить информацию об активности старше, чем &1 дней");
// new 4.8
define("ADMIN_OLD_COMBATS","Удалить боевые доклады старше &1 дней");
define("ADMIN_OLD_INGAME_MSG","Удалить игровые сообщения старше &1 дней");
// new 5.0
define("ADMIN_OGAME_API","Загрузить информацию из OGame API в Galaxytool");
define("ADMIN_OGAME_ALL_DATA",ALLYHISTORY_ALL_DATA);
define("ADMIN_OGAME_GALAXY_DATA",MENU_GALAXYVIEW);
define("ADMIN_OGAME_STATISTICS_DATA",MENU_STATISTICS);

// new 4.3.5
/*********************************************************************
* errorpage.php
**********************************************************************/
define("ERRORPAGE_PAGEFORWARD","Нажмите здесь, если ваш браузер не поддерживает перенаправление");
define("ERRORPAGE_PERMISSION_DENIED","У вас нет прав перехода на эту страницу. Нажмите для перехода назад.");

// new 4.7
/*********************************************************************
* fleet_movements.php
**********************************************************************/
define("FLEETS_TITLE","OGame Galaxytool - Передвижения флотов");
define("FLEETS_ACTUAL_FLEETS","Текущие передвижения флотов");
define("FLEETS_YES",SHOW_YES);
define("FLEETS_NO",SHOW_NO);
define("FLEETS_DETAILS","Подробности");
define("FLEETS_MISSION_EXPEDITION","Экспедиция");
define("FLEETS_MISSION_COLONIZATION","Колонизировать");
define("FLEETS_MISSION_RECYCLE","Переработать");
define("FLEETS_MISSION_TRANSPORT","Транспорт");
define("FLEETS_MISSION_DEPLOYMENT","Оставить");
define("FLEETS_MISSION_ESPIONAGE","Шпионаж");
define("FLEETS_MISSION_ACS_DEFEND","САБ Защите");
define("FLEETS_MISSION_ATTACK","Атаковать");
define("FLEETS_MISSION_ACS_ATTACK","САБ Атака");
define("FLEETS_MISSION_MOON_DESTRUCTION","Уничтожить");
define("FLEETS_MISSION_MISSILE_ATTACK","Ракетная атака");
define("FLEETS_NO_DATA","Данные не найдены");
// new 5.0
define("FLEETS_FLEET","Флот");
define("FLEETS_ALL_FLEETS","Отобразить все передвижения флота");

/*********************************************************************
* parser_combat_reports.inc.php
**********************************************************************/
define("COMBAT_REPORT_OUDATED_GALAXYVIEW","Ваши данные о галактике устарели. Пожалуйста сначала откройте координаты боя и боевой доклад!");

/*********************************************************************
* messages.php
**********************************************************************/
define("MESSAGES_TITLE","OGame Galaxytool - OGame Сообщения");
define("MESSAGES_PLAYERNAME","Игрок");
define("MESSAGES_SUBJECT","Тема");
define("MESSAGES_DATE","Дата");
define("MESSAGES_FILTER","Фильтр");
define("MESSAGES_DELETE","Удалить сообщение");
define("MESSAGES_PUBLISH_DETAIL","Опубликовать сообщение, добавив его содержимое к заметкам об этом игроке.");
define("MESSAGES_PUBLISH_HEADER","&sender послал сообщение &recipient &date:\n\n &message");
define("MESSAGES_PLAYER_FILTER","Сообщение для игрока:");
// new 5.0
define("MESSAGES_CONTENT","Содержание");

/*********************************************************************
* combat_reports.php
**********************************************************************/
define("COMBATS_TITLE","OGame Galaxytool - Боевые доклады");
define("COMBATS_ATTACKER","Атакующий");
define("COMBATS_DEFENDER","Защитник");
define("COMBATS_DATE","Дата");
define("COMBATS_OWNER","Владелец");
define("COMBATS_WINNER","Победитель");
define("COMBATS_COMBATREPORT","Боевой доклад");
define("COMBATS_COMBAT_AT","Битва на");
define("COMBATS_LOST_UNITS","Потеряно кораблей");
define("COMBATS_LOOT","Получено");
define("COMBATS_DEBRIS","Поле обломков");
define("COMBATS_AND","и");
define("COMBATS_PUBLISH","Опубликовать этот доклад");
define("COMBATS_UNPUBLISH","Отменить публикацию");
define("COMBATS_DELETE","Удалить доклад");
define("COMBATS_CHECK_ALL","Выделить всё");
define("COMBATS_UNCHECK_ALL","Отменить выделение");
define("COMBATS_WITH_SELECTED","С выбранными");
define("COMBATS_PUBLIC_REPORTS","Опубликованные доклады");
define("COMBATS_YES",SHOW_YES); // no need for translation!
define("COMBATS_NO",SHOW_NO); // no need for translation!
define("COMBATS_SEARCH_OPTIONS","Опции поиска");
define("COMBATS_SEARCH","Вперёд");
define("COMBATS_RESET","Сбросить");
// 4.8
define("COMBATS_COORDINATES",USER_BB_COORDINATES);
define("COMBATS_INVALID_GALAXY_ENTERED","Выбрана неверная Галактика");
define("COMBATS_INVALID_SYSTEM_ENTERED","Выбрана неверная Система");
define("COMBATS_INVALID_PLANET_ENTERED","Выбрана неверная Планета");
define("COMBATS_GALAXY_FROM_TO","Галактика");
define("COMBATS_SYSTEM_FROM_TO","Система");
define("COMBATS_PLANET_FROM_TO","Планета");
define("COMBATS_APPLY",GENERAL_APPLY);
define("COMBATS_COMBAT_SUMMARY","Итог боевых докладов");
define("COMBATS_DOWNLOAD_CSV","Скачать в качестве CSV файла");

/*********************************************************************
* report_archive.php
**********************************************************************/
define("REPORT_ARCHIVE_TITLE","Архив сканов");
define("REPORT_ARCHIVE_COORDINATES","Координаты");
define("REPORT_ARCHIVE_SCANTIME","Время скана");
define("REPORT_ARCHIVE_DELETE","Удалить эти записи");
define("REPORT_ARCHIVE_CONFIRM_DELETE","Вы действительно ходите удалить эти записи?");
define("REPORT_ARCHIVE_GALAXY","Галактика");
define("REPORT_ARCHIVE_SYSTEM","Система");
define("REPORT_ARCHIVE_PLANET","Планета");
define("REPORT_ARCHIVE_MOON","Луна");
define("REPORT_ARCHIVE_DETAILS","Детали");
define("REPORT_ARCHIVE_RESOURCES",DETAILEDINFO_RESOURCES);
define("REPORT_ARCHIVE_HEADER_RESOURCES",REPORTS_RESOURCES);
define("REPORT_ARCHIVE_DETAILS_FOR","Архив сканов &1 [&2] (&3)"); // &1 = имя планеты; &2 = координаты; &3 = ник игрока
define("REPORT_ARCHIVE_FLEET_CARGO","Вместимость транспортов");
define("REPORT_ARCHIVE_IRAK_RANGE","Радиус МПР");
define("REPORT_ARCHIVE_CHART_TYPE","Тип Чарта");

/*********************************************************************
* install.php
**********************************************************************/
define("INSTALL_TITLE", "Установка Galaxytool версии");
define("INSTALL_PROGRESS", "Общий прогресс");
define("INSTALL_STEP", "Шаг");
define("INSTALL_CONTINUE", "Продолжить");
define("INSTALL_VALIDATE", "Проверка");
define("INSTALL_STEP1", "Добро пожаловать");
define("INSTALL_STEP2", "Проверка на запись");
define("INSTALL_STEP3", "Настройки базы данных");
define("INSTALL_STEP4", "Настройки OGame");
define("INSTALL_STEP5", "Настройки Galaxytool");
define("INSTALL_STEP6", "Пароль администратора");
define("INSTALL_STEP7", "Установка Galaxytool");
define("INSTALL_STEP8", "Завершение установки"); // check writable; delete install and update.php and redirect to index.php
define("INSTALL_FILE_DELETE_CHECK","Пожалуйста, удалите install.php и update.php с вашего веб-сервера.");

define("INSTALL_STEP1_PHP_FAILED", "Ваша версия PHP &1 не поддерживается Galaxytool");
define("INSTALL_STEP1_FOPEN_FAILED", "Ваша версия PHP не позволяет открывать страницу с помощью команды FOPEN(). Это требуется для работы с OGame API.");
define("INSTALL_STEP1_WELCOME", "Добро пожаловать в мастер установки Galaxytool. Сейчас вам надо будет выполнить все этапы установки Galaxytool. Мастер установки вам в этом поможет.");

define("INSTALL_STEP2_DESCRIPTION","Убедитесь, что файлы config.php и attributes.php имеют права на запись.");
define("INSTALL_STEP2_DESCRIPTION2","Если вы не знаете, как достичь этого, поищите здесь: &1");
define("INSTALL_STEP2_FILE_NOT_WRITEABLE", "Файл не записываем");

define("INSTALL_STEP3_SERVER", "Сервер баз данных");
define("INSTALL_STEP3_USERNAME", L_USERNAME);
define("INSTALL_STEP3_PASSWORD", L_PASSWORD);
define("INSTALL_STEP3_DBNAME", "Имя базы данных");
define("INSTALL_STEP3_PREFIX", "Префикс таблиц БД");
define("INSTALL_STEP3_ENTER_PREFIX", "Напр., mytool_");
define("INSTALL_STEP3_ENTER_SERVER", "Введите адрес сервера. Если потребуется, узнайте это у вашего системного администратора. Обычно эта настройка имеет значение localhost.");
define("INSTALL_STEP3_ENTER_USERNAME", "Введите имя пользователя БД");
define("INSTALL_STEP3_ENTER_PASSWORD", "Введите пароль пользователя БД");
define("INSTALL_STEP3_ENTER_DBNAME", "Введите имя базы данных, которая будет использована (должна существовать)");
define("INSTALL_STEP3_CONNECT_FAILED", "Не смог установить соединение с сервером баз данных!");
define("INSTALL_STEP3_DB_FAILED", "База данных &1 не найдена");
define("INSTALL_STEP3_MYSQL_VERSION_FAILED", "Версия MySQL &1 не поддерживается Galaxytool");

define("INSTALL_STEP4_URL","OGame URL");
define("OGAME_URL_DETAILS","Введите любой URL, который вы видите сразу после входа в OGame. Основываясь на этом URL Galaxytool найдет URL OGame API, который можно использовать для получения данных для Galaxytool без использования Galaxytoolbar. API было введено в OGame версии 4.1.");
define("INSTALL_STEP4_UNIVERSE","Вселенная OGame");
define("INSTALL_STEP4_DEF_TO_DEBRIS","Оборона в обломки");
define("INSTALL_STEP4_DEBRIS_RATE","Процент флота в обломки");
define("INSTALL_STEP4_SPEED_RATE","Множитель скорости");
define("INSTALL_STEP4_ENTER_UNIVERSE","Введите имя или номер вашей вселенной OGame (регистрозависимо).");
define("INSTALL_STEP4_UNIVERSE_MISSING","Вы должны указать вселенную");
define("INSTALL_STEP4_ENTER_URL","Введите адрес вашей вселенной OGame");
define("INSTALL_STEP4_URL_MISSING","Вы должны указать адрес вселенной OGame");
define("INSTALL_STEP4_URL_CHECK_FAILED","Не смог найти OGame API в &1");
// 5.1
define("INSTALL_STEP4_GETSETTINGS","Fetch settings");

define("INSTALL_STEP5_TOOLNAME","Название Galaxytool");
define("INSTALL_STEP5_ENTER_TOOLNAME","Это название будет отображено на главной странице вашей Galaxytool");
define("INSTALL_STEP5_LANGUAGE","Язык по-умолчанию");
define("INSTALL_STEP5_EMAIL_TO","Отправлять на");
define("INSTALL_STEP5_ENTER_EMAIL_TO","Введите E-mail адрес на который вы хотели бы получать уведомления о новых регистрация в вашей Galaxytool");
define("INSTALL_STEP5_EMAIL_FROM","Отправлять от");
define("INSTALL_STEP5_ENTER_EMAIL_FROM","Этот E-mail адрес используется в качестве отправителя, когда Galaxytool отправляет какие-либо письма.");
define("INSTALL_STEP5_USE_PHPMAILER","Использовать PHPMailer");
define("INSTALL_STEP5_MAXSHOUTS","Максимальное количество сообщений");
define("INSTALL_STEP5_ENTER_USE_PHPMAILER","Используйте PHPMailer, если ваш сервер не умеет отправлять письма сам.");
define("INSTALL_PHPMAILER_HOST","Сервер SMPT");
define("INSTALL_PHPMAILER_HOST_EXAMPLE","например, smtp.provider.com");
define("INSTALL_PHPMAILER_USER","Имя пользователя SMPT");
define("INSTALL_PHPMAILER_USER_EXAMPLE","например, user@provider.dcom");
define("INSTALL_PHPMAILER_PASS","Пароль пользователя SMPT");
define("INSTALL_PHPMAILER_SECURE","Способ авторизации (например, ssl)");
define("INSTALL_PHPMAILER_PORT","Порт SMPT");

define("INSTALL_STEP6_INTRO","Укажите пароль для аккаунта <strong>admin</strong>, который вам нужно будет использовать для первого входа в  Galaxytool, после установки.");

define("INSTALL_STEP7_CONFIG","Файл конфигурации создан");
define("INSTALL_STEP7_CONFIG_FAILED","Файл конфигурации не был создан");
define("INSTALL_STEP7_ATTRIBUTES","Файл параметров создан");
define("INSTALL_STEP7_ATTRIBUTES_FAILED","Файл параметров не был создан");
define("INSTALL_STEP7_CREATED_TABLES","Таблицы в базе данных созданы");

define("INSTALL_STEP8_INTRO","Вы успешно установили Galaxytool!");
define("INSTALL_STEP8_LOAD_DATA","Загрузка данных OGame ...");
define("INSTALL_STEP8_LOAD_DATA_FINISHED","Загрузка данных OGame завершена");
define("INSTALL_STEP8_DELETE_FILE","Теперь вам нужно удалить установочные файлы install.php и update.php с вашего веб-сервера.");
define("INSTALL_STEP8_LOGON","Войдите как <strong>admin</strong>, с помощью пароля, который вы указали при установке.");

/*********************************************************************
* update.php
**********************************************************************/
define("UPDATE_START","Начинаю обновление до версии &1");
define("UPDATE_STEP_DONE","Выполнено");
define("UPDATE_TITLE", "Обновление Galaxytool до версии");
define("UPDATE_STEP1_WELCOME", "Добро пожаловать в мастер обновления Galaxytool. Сейчас вам надо будет выполнить все этапы обновления Galaxytool. Мастер обновлени поможет вам в этом.");
define("UPDATE_STEP1_BACKUP_FILES", "В качестве первого шага, сделайте резервную копию папки <strong>config</strong>! Вам придется заменить настройки, в случае ошибок.");
define("UPDATE_STEP1_BACKUP_DB", "Затем сделайте <a href=\"http://www.ehow.com/how_2036600_create-database-php.html\">резервную копию</a> вашей базы данных.");
define("UPDATE_STEP1_PROCEED", "Как только резервные копии сделаны, вы можете продолжить обновление.");
define("UPDATE_STEP1", INSTALL_STEP1);
define("UPDATE_STEP2", INSTALL_STEP5);
define("UPDATE_STEP2_OLD_VERSION", "Предыдущая версия Galaxytoo");
define("UPDATE_STEP3", "Обновить Galaxytool");
define("UPDATE_STEP3_UPDATE_RUNNING", "Обновление, подождите...");
define("UPDATE_STEP4", "Завершить обновление");
define("UPDATE_STEP4_INTRO","Вы успешно обновили Galaxytool!");
define("UPDATE_STEP4_UPDATE_DONE","Все этапы обновления завершены.");
define("UPDATE_FAILED","Обновление не удалось.");

?>