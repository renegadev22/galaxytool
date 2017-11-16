<?php
/*
 * defines the characters used in OGame to indicate player status
 */
define("PLAYER_BANNED","g");
define("PLAYER_VACATION_MODE","u");
define("PLAYER_NOOB","s");
define("PLAYER_INACTIVE","i");
define("PLAYER_LONG_INACTIVE","I");
define("PLAYER_OUTLAW","o");

/*********************************************************************/
/***************************** public ********************************/
/*********************************************************************/
//index.php
define("L_USERNAME","Nazwa użytkownika");
define("L_PASSWORD","Hasło");
define("L_LOGINFAILURE","Niepoprawna nazwa użytkownika lub hasło albo twoje konto nie zostało jeszcze aktywowane.");
define("L_TOKENFAILURE","Twój klucz logowania jest błędny albo twoje konto nie jest jeszcze aktywne.");
define("L_LOGINTEXT","Proszę się zalogować.");
define("L_LANGUAGE","Dostępne języki:");
define("L_TIMEOUT","Czas sesji przekroczony!");
define("L_REGISTER","Rejestracja");
define("L_PWLOST","Przypomnienie hasła");
define("INDEX_TITLE","OGame Galaxytool - Przegląd");
define("INDEX_INFO","Informacje");
define("INDEX_ENTRIES","Ilość wszystkich dodanych układów");
define("INDEX_ENTRIES_LASTWEEK","Nowe układy w ostatnim tygodniu");
define("INDEX_ENTRIES_TO_OLD","Układy starsze niż jeden miesiąc");
define("INDEX_REGISTERED_USERS","Zarejestrowani użytkownicy");
define("INDEX_PAGEFORWARD","Kliknij tutaj, jeśli twoja przeglądarka nie obsługuje przekierowań strony.");
define("INDEX_NOTICES","Notatki");
define("INDEX_PLAYERS","Statystyki graczy");
define("INDEX_ALLIES","Statystyki sojuszy");
define("INDEX_REPORTS","Raporty szpiegowskie");
define("INDEX_VERSION","Ostatnia wersja do pobrania");
define("INDEX_LATEST_VERSION","Brak nowszej wersji");
define("INDEX_SHOUTBOX","ShoutBox");
define("INDEX_NOENTRY","Brak wpisów");
define("INDEX_COMMENT","Twój wpis");
define("INDEX_INSERT","Wstaw");
define("INDEX_UMOD","Gracze na urlopie");
define("INDEX_NO_MOONS","Liczba Księżycy");
define("INDEX_NO_EMPTY_SYSTEMS","Liczba pustych systemów");
define("INDEX_NO_FULL_SYSTEMS","Liczba pełnych systemów");
define("INDEX_NO_TARGETS","Liczba potencjalnych celów");
// 4.0
define("INDEX_USERINFO","użytkownicy w liczbach");
define("INDEX_ONLINE","Aktualnie online");
define("INDEX_TODAY","Dziś online");
define("INDEX_ALL","Całkowita ilość logowań");
// 4.3.7
define("GENERAL_LOAD_FORM","Ładowanie danych formularza");
define("GENERAL_SAVE_FORM","Zapisywanie danych formularza");
define("GENERAL_SAVE_AS_TEXT","Zapisz jako...");
define("GENERAL_SAVE","Zapisz");
// 4.8
define("INDEX_USERMANAGEMENT","Aktywacje - Informacje");
define("INDEX_NEEDADMIN","Konta do odblokowania");
define("INDEX_NEEDEMAIL","Niezweryfikowane Konta");
define("INDEX_TOOLBAR_INFO","Informacje wtyczki Galaxytool");
define("INDEX_TOOLBAR_URL","Adres Galaxytool");
define("INDEX_TOOLBAR_VERSION_REQUIRED","Wymaga co najmniej wersji wtyczki Galaxytool");
define("INDEX_TOOLBAR_INSTALL_GUIDE","Instrukcje instalacji wtyczki");
define("INDEX_TOOLBAR_TOKEN","Klucz logowania");
define("INDEX_TOOLBAR_NEW_TOKEN","Pobierz nowy klucz");
define("INDEX_PLAYERS_WITH_N_PLANETS","Gracze z planetami powyżej &1");
define("INDEX_GETTING_STARTED","Wprowadzenie do Galaxytool");
define("INDEX_GETTING_STARTED1","Witamy w Galaxytool!");
define("INDEX_GETTING_STARTED2","Galaxytool pomoże Ci przeanalizować to, co dzieje się na twoim &1 uniwersum OGame");
define("INDEX_GETTING_STARTED3","Przed rozpoczęciem analizy, należy umieścić dane w bazie. Do tego potrzebujesz wtyczkę do przeglądarki, jak &1 dla Firefox.");
define("INDEX_GETTING_STARTED4","Po zainstalowaniu wtyczki, po stronach OGame można poruszać się jak zwykle, a po wysłaniu danych do Galaxytool pojawi się małe okno statusu.");
define("INDEX_GETTING_STARTED5","Po umieszczeniu przez wtyczkę danych w Galaxytool można rozpocząć analizowanie graczy. Można się dowiedzieć gdzie gracz ma kolonie, ile koloni ma, jakie raporty istnieją albo kiedy gracz jest najbardziej aktywny.");
define("INDEX_GETTING_STARTED6","Galaxytool również pomoże Ci przeanalizować jakie masz postępy w porównaniu z konkurencją albo po przez analizę raportów bojowych możesz zobaczyć ilu nalotów dokonałeś w ostatnich dniach lub ostatnim tygodniu.");
define("INDEX_GETTING_WIKIPAGE","W Galaxytool istnieje jeszcze wiele innych funkcji.");
define("INDEX_GETTING_WIKIPAGE2","Sprawdź je na naszej stronie wiki.");
define("INDEX_GETTING_BOARD","W razie pomysłów możesz skorzystać z naszego forum:");
define("INDEX_GETTING_CHAT1","Lub odwiedź nas na czacie:");
define("INDEX_GETTING_CHAT2","Nie jesteś online 24/7 ale spędzamy tam dużo naszego wolnego czasu, więc uzbroj się w cierpliwość.");
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
define("GENERAL_OPEN_IN_NEW_WINDOW","Otwórz odnośnik w nowym oknie");
// 5.1
define("GENERAL_UNIT_OF_MEASURE_DAYS","Days");

/*********************************************************************/
/***************************** internal ******************************/
/*********************************************************************/
// index.php
define("PROGRAM_NAME","OGame Galaxytool");
define("SHORTNAME","Galaxytool");
define("BACK_INDEX","Powrót do strony głównej");
define("UNIVERSE","Uniwersum");

// search
define("MENU_INFO_LINKS","Informacja");
define("MENU_PAGE","Podgląd");
define("MENU_DB_SEARCH","Szukaj w bazie danych");
define("MENU_DB_NOTICES","Szukaj w notatkach");
define("MENU_DB_REPORTS","Szukaj w raportach");
define("MENU_GALAXYVIEW","Przeglądaj galaktykę");
define("MENU_STATISTICS","Statystyki");
define("MENU_ALLYHISTORY","Historia sojuszu");
// 4.7
define("MENU_FLEET_MOVEMENTS","Ruchy flot");
define("MENU_COMBAT_REPORTS","Raporty wojenne");
define("MENU_MESSAGES","Wiadomości w grze");

// insert / change
define("MENU_OPTION_LINKS","Opcje");
define("MENU_DB_REFRESH","Wstaw do bazy danych");
define("MENU_NOTICES","Notatki");
define("MENU_DB_STATUS","Status bazy danych");
define("MENU_USEROPTIONS","Zarządzanie użytkownikami");
define("MENU_USEROPTIONS2","Ustawienia użytkowników");
define("MENU_USEROPTIONS3","Informacje o użytkownikach");
// 4.2
define("MENU_ADMIN","Zarządzanie");
// 4.3.3
define("MENU_LOGOUT","Wyloguj");

// Stuff
define("MENU_STUFF","Inne");
define("MENU_FORUM_THREAD","Forum developerów");
define("MENU_DOWNLOADPAGE","Do pobrania");
define("MENU_LANGUAGE","Język");
define("MENU_HELP","Pomoc");
// 4.0
define("MENU_TOOLOPTIONS","Ustawienia Galaxytool");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1"," dodano do bazy danych");
define("PARSER_ERROR1","Wystąpił błąd podczas próby dodania:");
define("PARSER_ERROR2","Nie znaleziono bazy danych!");
define("PARSER_ERROR3","Nie znaleziono serwera z bazą danych!");
define("PARSER_WRONG_UNIVERSE","Złe uniwersum- aktualne: \"&1\" oczekiwane: \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","OGame Galaxytool - Przeszukiwanie");
define("SHOW_SEARCH","Szukaj w bazie danych");
define("SHOW_ALLYSYMBOL","Tag sojuszu");
define("SHOW_PLAYERNAME","Nazwa gracza");
define("SHOW_MOONS","Tylko planety z księżycem");
define("SHOW_NOTICES","Tylko planety z notatkami");
define("SHOW_COLONIES","Tylko planety do kolonizacji");
define("SHOW_YES","Tak");
define("SHOW_NO","Nie");
define("SHOW_SEARCHRANGE","Zakres");
define("SHOW_SEARCH_IN","Przeszukaj galaktykę");
define("SHOW_FROM_SYSTEM","od układu");
define("SHOW_FROM_PLANET","od planety na pozycji");
define("SHOW_TO","do");
define("SHOW_DESCRIPTION","Możesz użyć gwiazdki * w polu z nazwą gracza lub tagiem sojuszu. W ten sposób znajdziesz wszystkie sojusze lub graczy z wybranymi &quot;znakami&quot; w nazwie.<br />Wypełnij wszystkie wymagane pola tylko jeśli chcesz zawężyć wyszukiwanie.");
define("SHOW_SORT_BY","Sortuj według");
define("SHOW_GALASYSTEM","Galaktyka/Układ");
define("SHOW_ALLYNAME","Nazwa sojuszu");
define("SHOW_SEARCHBUTTON","Szukaj");
define("SHOW_ADDRESS","Koordynaty");
define("SHOW_ALLYSORT","Sojusz");
define("SHOW_PLANET","Planeta");
define("SHOW_STATUS","Status");
define("SHOW_CURRENTNESS","ostatnio aktualizowany");
define("SHOW_PLAYER_STATUS","Status gracza");
define("SHOW_PLAYER_STATUS1","wszyscy");
define("SHOW_PLAYER_STATUS2","potencjalne cele");
define("SHOW_PLAYER_STATUS3","nieaktywni");
define("SHOW_HITS","Wyświetleń");
define("SHOW_OF","z");
define("SHOW_ASC","rosnąco");
define("SHOW_DESC","malejąco");
define("SHOW_RESULTS","Wyświetleń na stronę");
define("SHOW_MOON","Księżyc");
define("SHOW_UKMOONSIZE","brak danych");
define("SHOW_DF","PZ");
define("SHOW_DF_LONG","Pola zniszczeń");
define("SHOW_METAL","M");
define("SHOW_METAL_LONG","Metal");
define("SHOW_CRYSTAL","K");
define("SHOW_CRYSTAL_LONG","Kryształ");
define("SHOW_BOTH","W sumie");
define("SHOW_AT_LEAST","(conajmniej)");
define("SHOW_DATE","Data");
define("SHOW_DATE_0","nieistotne");
define("SHOW_DATE_1","starsze niż");
define("SHOW_DATE_2","nowsze niż");
define("SHOW_RANK","Miejsce");
define("SHOW_FRANK","Miejsce Floty");
define("SHOW_MEMBERS","Członków");
define("SHOW_NOTRANKED","Nie ma w top 1500.");
define("SHOW_NOTICERES","Notatki");
define("SHOW_REPORTS","Wyłącznie planety z raportami");
define("SHOW_REPORTS_SHORT","Raporty");
define("SHOW_NOTHING","Nie znaleziono wpisu");
define("SHOW_ALLIANCE_STATUS","Status sojuszu");
define("SHOW_NO_STATUS","brak");
define("SHOW_NAP","NAP");
define("SHOW_ALLIED","Sojusznik");
define("SHOW_WAR","Wojna");
define("SHOW_BOYCOTT","Bojkot");
define("SHOW_NEUTRAL","Neutralny");
define("SHOW_OWN","Własny sojusz");
define("SHOW_WING","Skrzydłowy");
// obsolete with 5.0
define("SHOW_EXT_OPTIONS1","Pokaż więcej opcji wyszukiwania dla zakresu, miejsca, daty lub pola zniszczeń.");
define("SHOW_EXT_OPTIONS2","Pokaż więcej opcji wyszukiwania dla kolonii, księżycy, raportów, notatek, statusu graczy lub statusu dyplomatycznego.");
define("SHOW_EXT_OPTIONS3","Pokaż więcej opcji wyszukiwania dla sortowania wyników.");
// new 5.0
define("SHOW_EXTENDED","advanced search");
define("SHOW_MOON_SELECTION","Planet with moon");
define("SHOW_REPORT_SELECTION","Planet with report");
define("SHOW_FILTER_BY","Exclude from the list");
define("SHOW_FILTER_NONE","Żadne");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Show players without score changes within the last few days");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","OGame Galaxytool - Statusy");
define("STATUS_DB_STATUS","Status bazy danych");
define("STATUS_COLOR","Kolor");
define("STATUS_AGE1","Wpis z ostatnich 24 godzin.");
define("STATUS_AGE2","Wpis 2-4 dniowy.");
define("STATUS_AGE3","Wpis 5-7 dniowy.");
define("STATUS_AGE4","Wpis 1-2 tygodniowy.");
define("STATUS_AGE5","Wpis 3-4 tygodniowy.");
define("STATUS_AGE6","Wpis starszy niż 1 miesiąc!");
define("STATUS_AGE7","Brak wpisów.");
define("STATUS_ON","w");
define("STYLES_COLOR1","Kolor1");
define("STYLES_COLOR2","Kolor2");
define("STYLES_COLOR3","Kolor3");
define("STYLES_COLOR4","Kolor4");
define("STYLES_COLOR5","Kolor5");
define("STYLES_COLOR6","Kolor6");
define("STYLES_COLOR7","Kolor7");
// 4.8
define("STATUS_DB_LEGEND","Legenda");
define("STATUS_GALAXY","Podgląd galaktyki");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","OGame Galaxytool - Zarządzanie użytkownikami");
define("USER_NAMES","Użytkownik");
define("USER_ERROR","Błąd");
define("USER_NEWUSER","Nowy użytkownik");
define("USER_OPTIONS","Opcje");
define("USER_USERNAME","Nazwa użytkownika");
define("USER_PASSWORD","Hasło");
define("USER_PASSWORD_CONFIRM","Potwierdź hasło");
define("USER_GALAXY","Galaktyka");
define("USER_SEARCH","Wyszukiwanie");
define("USER_INSERT","Dodawanie wpisów");
define("USER_DELETE","usuń");
define("USER_DELETE_ENTRY","Czy chcesz usunąć użytkownika: ");
define("USER_STATUS","Przeglądanie statystyk");
define("USER_STYLES","Zmień wygląd");
define("USER_SUBMIT","Zatwierdź");
define("USER_RESET","Reset");
define("USER_YES","Tak");
define("USER_NO","Nie");
define("USER_STYLEPATH","Ścieżka do styles.css");
define("USER_PROBES","Raporty szpiegowskie");
define("USER_EMAIL","Email");
define("USER_ERROR1","Niepoprawne hasło lub email.");
define("USER_ERROR2","Niepoprawny email.");
define("USER_INGAME","Nazwa w grze");
define("USER_ALLYTAG","Tag sojuszu");
define("USER_ALLYHISTORY","Pokaż/aktualizuj historię sojuszu");
define("USER_DIPLOMATIC","Zmień status dyplomatyczny");
define("USER_STATSPAGE","Ilość wpisów na stronie statystyk");
define("USER_LINKS","Linki");
define("USER_LINKS2","Format:<br>text;url<br>text2;url2<br>text3;url3");
define("USER_EXPORT_TITLE","Eksportuj kolory (BB Code)");
define("USER_BB_COORDINATES","Koordynaty");
define("USER_BB_MOON","Księżyc");
define("USER_BB_DEBRIS","Pole Zniszczeń");
define("USER_BB_ALLY","Nazwa sojuszu ");
define("USER_BB_ALLYDETAILS","Szczegóły sojuszu");
define("USER_BB_PLAYERNAME","Nazwa gracza");
define("USER_BB_BANNED","Zbanowany");
define("USER_BB_VACATION","Urlop");
define("USER_BB_NOOB","Noob");
define("USER_BB_INACTIVE","nieaktywny");
define("USER_BB_LONGINACTIVE","długo nieaktywny");
// new with 4.7
define("USER_DELETION","Skasuj");
define("USER_FLEETINFO",MENU_FLEET_MOVEMENTS);
define("USER_ACTIVITIES","Aktywność gracza");
define("USER_MAINTENANCE","Galaxytool konserwacja");
define("USER_MANAGEMENT",MENU_USEROPTIONS);
define("USER_DELETE_MY_COMBAT_REPORTS","Skasuj moje raporty wojenne");
define("USER_DELETE_MY_MESSAGES","Skasuj moje wiadomości");
define("USER_DELETE_MY_FLEETMOVES","Skasuj ruchy mojej floty");
// 4.8
define("USER_DELETE_MY_COMBAT_REPORTS_LIMITED","Skasuj moje raporty wojenne starsze niż &1 dni");
define("USER_DELETE_MY_MESSAGES_LIMITED","Skasuj moje wiadomości starsze niż &1 dni");
define("USER_TABLE_ENTRIES","Liczba wyników wyszukiwania dla każdej strony");
// 5.0
define("USER_EXISTS","User already exists");
define("USER_BB_OUTLAW","Outlaw");
define("USER_INVALID_URL","URL &1 seems to be invalid - URL will be ignored");

/*********************************************************************
* galaxyview.php
*********************************************************************/
define("VIEW_TITLE","OGame Galaxytool - Szczegóły");
define("VIEW_NODATA","Brak danych.");
define("VIEW_GALAXY","Galaktyka");
define("VIEW_SYSTEM","Układ słoneczny");
define("VIEW_POSITION","Pozycja");
define("VIEW_PLANET","Planeta");
define("VIEW_MOON","Księżyc");
define("VIEW_TF","PZ");
define("VIEW_PLAYER","Gracz");
define("VIEW_PLAYER_ADD","(Miejsce / Status)");
define("VIEW_ALLY","Sojusz");
define("VIEW_ALLY_ADD","(Miejsce / Członków)");
define("VIEW_METAL","M");
define("VIEW_CRYSTAL","K");
define("VIEW_COLONISED","zasiedlonych planet");
define("VIEW_UKMOONSIZE","brak danych");
define("VIEW_BACK","wstecz");
define("VIEW_NOTICE","Notatki");
define("VIEW_REPORTS","Raporty");
define("VIEW_MOONPHALANX","Nastepujacy księżyc moze zeskanowac ten system");
define("VIEW_NOMOONS","Nie znaleziono księżycy");
define("VIEW_IRAKS","Ta planeta jest w zasięgu rakiet międzyplanetarnych");
define("VIEW_NOIRAKS","Nie znaleziono rakiet międzyplanetarnych");
// 4.0
define("VIEW_MOON_DESTROY_CHANCE","Szansa na zniszczenie księżyca ");
define("VIEW_CHANCE_WITH_ONE","Szansa zniszczenia jedną Gwiazdą Śmierci ");
define("VIEW_CHANCE_WITH_N","Szansa zniszczenia ");
define("VIEW_DEATH_STARS","Gwiazdami Śmierci");
define("VIEW_DS_DESTROY_CHANCE","Szansa na zniszczenie Gwiazd(y) Śmierci");
define("VIEW_TOP","Top");
// new 4.3.5
define("VIEW_GO","go");
// new 5.0
define("VIEW_DIAMETER","Diameter");

/*********************************************************************
* change_password.php
**********************************************************************/
define("PW_TITLE","OGame Galaxytool - Zmiana hasła");
define("OLD_PASSWORD","Obecne hasło");
define("NEW_PASSWORD","Nowe hasło");
define("CONFIRM_NEW_PASSWORD","Powtórz nowe hasło");
define("PW_MISMATCH","Wpisane hasła różnią się!");
define("PW_ERROR","Obecne hasło nie zgadza się z zapisanym w bazie danych!");
define("UPDATE_DONE","Zaktualizowano.");
// new 4.2
define("TIMEZONE_OFFSET","Przesunięcie czasu względem serwera");
// new 4.3
define("DELETE_ACCOUNT","Skasuj to konto na Galaxytool");
define("DELETE_ACCOUNT_SAFETY_REQUEST","Czy na pewno chcesz skasować konto na Galaxytool?");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","Uprawnienia");
define("CH_PASSWD_ADMIN","Admin");
// new 4.7
define("TIMEZONE_OGAME_OFFSET","Strefa czasowa na serwerze OGame");
// new 4.8
define("CH_PASSWD_USER_LANGUAGE","Zmień na ten język po zalogowaniu");
define("CH_PASSWD_USER_LANGUAGE_NO_CHANGE","Bez zmian");
define("CH_PASSWD_EXPAND","Rozwiniętą");
define("CH_PASSWD_COLLAPSE","Zwiniętą");
define("CH_PASSWD_HIDDEN","Ukrytą");
define("CH_PASSWD_GETTING_STARTED","Pokaż informację powitalną po zalogowaniu");
define("CH_PASSWD_PLUGIN","Pokaż informację o wtyczce po zalogowaniu");

/*********************************************************************
* notices.php
**********************************************************************/
define("NOTICE_TITLE","OGame Galaxytool - Notatki");
define("NOTICE_HEADER","Edytuj notatkę");
define("NOTICE_HEADER2","Edytuj własne notatki");
define("NOTICE_PUBLIC","Dostępne dla wszystkich?");
define("NOTICE_YES","tak");
define("NOTICE_NO","nie");
define("NOTICE_TEXT","Treść notatki");
define("NOTICE_SAVE","Zapisz");
define("NOTICE_DELETED","Wpis usunięty");
define("NOTICE_SAVED","Wpis zachowany.");
define("NOTICE_RESULTS","Wszystkie wyniki");
define("NOTICE_USER","Użytkownik");
define("NOTICE_DATE","Data");
define("NOTICE_EDIT","Edytuj");
define("NOTICE_DELETE","Usuń");
define("NOTICE_NEW","Utwórz własny wpis");
define("NOTICE_NOTPUBLIC","Notaka prywatna.");
define("NOTICE_ALL","Wszystkie");
define("NOTICE_NONE",SHOW_FILTER_NONE);
define("NOTICE_SEARCH","Szukaj w notatkach");
define("NOTICE_SEARCH_SHORT","Szukaj");
define("NOTICE_HITS","Wyświetleń");
define("NOTICE_SHOWRESULTS","Wyświetleń na stronę");
define("NOTICE_OF","z");
define("NOTICE_NOTHING","Brak wpisów");
// 4.0
define("NOTICE_CHARS","znaki");
define("NOTICE_PLAYERNAME","Gracz");
define("NOTICE_SHOWALL","Pokaż wszystkie notatki");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","OGame Galaxytool - Raporty szpiegowskie");
define("REPORTS_RESOURCES","Surowce");
define("REPORTS_FLEET","Floty");
define("REPORTS_DEFENCE","Obrona");
define("REPORTS_BUILDINGS","Budynki");
define("REPORTS_TECHNOLOGY","Badania");
define("REPORTS_MOON","Księżyc");
define("REPORTS_SEARCH","Szukaj w raportach szpiegowskich");
define("REPORTS_SEARCH_SHORT","Szukaj");
define("REPORTS_HITS","Wyświetleń");
define("REPORTS_NOTHING","Nie znaleziono");
define("REPORTS_ADDRESS","Koordynaty");
define("REPORTS_CURRENTNESS","Aktualność");
define("REPORTS_PLAYERNAME","Nazwa gracza");
define("REPORTS_ALLY","Sojusz");
define("REPORTS_VIEW","Obejrzyj raport");
define("REPORTS_SEARCH_IN","Przeszukaj galaktykę");
define("REPORTS_FROM_SYSTEM","od układu");
define("REPORTS_TO","do");
define("REPORTS_DELETE","usuń");
define("REPORTS_DELETED","Wpis usunięty");
define("REPORTS_RESULTS","Wyświetleń na stronę");
define("REPORTS_OF","z");
define("REPORTS_DATE","Data");
define("REPORTS_DATE_0","nieistotne");
define("REPORTS_DATE_1","starsze niż");
define("REPORTS_DATE_2","nowsze niż");
define("REPORTS_NOTICES","Notatki");
define("REPORTS_AT_LEAST_RESOURCES","Surowce (co najmniej)");
define("REPORTS_SEARCH_EXTENDED","szukanie rozszerzone");
define("REPORTS_FLEET_RESIS","Flota - wynik");
define("REPORTS_DEFENCE_RESIS","Obrona - wynik");
define("REPORTS_ALL_RESIS","Ogólny wynik");
define("REPORTS_TECHS","Technologie");
define("REPORTS_UNKNOWN_ENTRIES","nieznane wpisy");
define("REPORTS_PARTLY_INSERTED","częściowo dodane");
define("REPORTS_FOR_ALL_RES","dla wszystkich surowców");
define("REPORTS_FOR_TF","dla pola zniszczeń");
define("REPORTS_KT","Mały Transporter");
define("REPORTS_GT","Duży Transporter");
define("REPORTS_SS","Okręt Wojenny");
define("REPORTS_REC","Recykler");
define("REPORTS_RAIDABLE","Tylko nadające się do ataku");
define("REPORTS_ALL_RESOURCES","wszystkie surowce");
// 4.0
define("REPORTS_STUFF","Inne");
define("REPORTS_SPEEDSIM","symulacja w Speedsim");
define("REPORTS_DRAGOSIM","symulacja w Dragosim");
define("REPORTS_STATUS","Status");
define("REPORTS_ERROR","Wystąpił błąd");
// 4.2
define("REPORTS_OWN_REPORTS","Tylko własne raporty");
// 4.3.3
define("REPORTS_UPLOAD_BY","Raport wysłany przez");
// 4.4
define("REPORTS_DEPTH","Szczegółowe sprawozdanie");
define("REPORTS_FLEET_SCORE","Punkty floty");
define("REPORTS_DEFENCE_SCORE","Punkty obrony");
// 5.0
define("REPORTS_HOURS","hours");
define("REPORTS_MAX_RESULTS_HIT","Your query returned more than &1 hits. Only the first &1 results are show. Please adjust your search request to get less results.");
define("REPORTS_OSIMULATE","Simulate with OSimulate");
define("REPORTS_SHOW_ONLY","Show only");
define("REPORTS_SHOW_PLANETS","Planety");
define("REPORTS_SHOW_MOONS","Księżyce");
define("REPORTS_OWNER","Reports owned by");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","OGame Galaxytool - Statystyki");
define("STATS_TBLHEAD","Statystyki");
define("STATS_RANK","Miejsce");
define("STATS_PLAYERNAME","Nazwa gracza");
define("STATS_ALLYNAME","Tag sojuszu");
define("STATS_SCORE","Punkty");
define("STATS_FLEET","Flota");
define("STATS_RESEARCH","Badania");
define("STATS_MEMBERS","Członków");
define("STATS_STATUS","Status");
define("STATS_NOTHING","Brak");
define("STATS_NAP","Pakt");
define("STATS_ALLIED","Sojusznik");
define("STATS_WAR","Wojna");
define("STATS_BOYCOTT","Bojkot");
define("STATS_NEUTRAL","Neutralni");
define("STATS_OWN","Własny sojusz");
define("STATS_WING","Akademia");
define("STATS_UPDATE","Wpisy z");
define("STATS_PLAYERSTATS","Statystyki graczy");
define("STATS_ALLYSTATS","Statystyki sojuszy");
// 4.0
define("STATS_DELETE","Czy chcesz usunąć ten wpis ?");
define("STATS_CONFIRM_DELETE","Na pewno chcesz usunąć ten wpis gracza?");
define("STATS_CHANGE_PLAYER_STATUS","Status gracza");
define("STATS_CHANGE_ALLIANCE_STATUS","Status sojuszu");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","Wszyscy członkowie tego sojuszu uzyskają wybrany status. Status poprzedni będzie zastąpiony. Możesz później ręcznie zmienić statusy poszczególnym graczom");
define("STATS_UNKNOWN","Reszta");
define("STATS_DETAILS","Szczegóły dla");
// 4.4
define("STATS_PLAYERSTATUS",SHOW_PLAYER_STATUS);
define("STATS_IGNORE_STATUS",SHOW_PLAYER_STATUS1);
define("STATS_ACTIVE","aktywny");
define("STATS_INACTIVE",USER_BB_INACTIVE);
define("STATS_BANNED",USER_BB_BANNED);
define("STATS_VACATION",USER_BB_VACATION);
define("STATS_NOOB",USER_BB_NOOB);
// 4.8
define("STATS_YES",SHOW_YES); // reuse SHOW definitions if applicable
define("STATS_NO",SHOW_NO);
define("STATS_SEARCH",USER_SEARCH);
define("STATS_SHOW_GRAPH","Szczegóły na temat punktów dystrybucji");
define("STATS_LONG_INACTIVE",USER_BB_LONGINACTIVE);
// 4.9
define("STATS_STANDARD","Punkty standardowe");
define("STATS_MILITARY","Punkty militarne");
define("STATS_ECONOMY","Ekonomia");
define("STATS_HONOUR","Punkty honoru");
define("STATS_MILITARY_BUILD","Zbudowane militarne");
define("STATS_MILITARY_DESTROYED","Zniszczone militarne");
define("STATS_MILITARY_LOST","Stracone militarne");

/*********************************************************************
* register.php
**********************************************************************/
define("REGISTER_REGISTRATE","Rejestracja");
define("REGISTER_LOGINNAME","Nazwa użytkownika");
define("REGISTER_PASSWORD","Hasło");
define("REGISTER_PASSWORD_CONFIRM","Potwierdź hasło");
define("REGISTER_EMAIL","Email");
define("REGISTER_INGAME","Nazwa w grze");
define("REGISTER_ALLYTAG","Tag sojuszu");
define("REGISTER_EMAILVERIFICATION","Weryfikacja adresu email");
define("REGISTER_EMAILTEXT","Odwiedź następujący link aby potwierdzić swoją rejestrację na Galaxytool.");
define("REGISTER_ERROR1","Wybrana nazwa użytkownika już istnieje.");
define("REGISTER_ERROR2","Nie powiodło się wysłanie emaila. Skontaktuj się z administratorem.");
define("REGISTER_ERROR3","Nie powiodło się przesyłanie informacji do bazy danych!");
define("REGISTER_INFO1","Twoje konto zostało utworzone.");
define("REGISTER_INFO2","Odwiedź link podany w emailu aby potwierdzić swoją rejestrację.");
define("REGISTER_INFO3","Rejestracja potwierdzona. Zaczekaj teraz na aktywację konta przez administratora.");
define("REGISTER_BUTTON","Wróć do strony głównej");
define("REGISTER_NEW_SUBJECT","Galaxytool - dołączył nowy użytkownik");
define("REGISTER_NEW_MAILTEXT","Zarejestrował się nowy użytkownik.");
// new 4.2
define("REGISTER_BACK","Wróć do pierwszej strony");
// new 4.3.5
define("REGISTER_MISSING_FIELDS","Wprowadź wszystkie wymagane pola");
// new 4.8
define("REGISTER_ERROR4","Adres e-mail nie jest prawidłowy.");
define("REGISTER_ERROR5","Hasła nie pasują.");
define("REGISTER_PWS","Siła hasła");
define("REGISTER_PWS0","bardzo słabe");
define("REGISTER_PWS1","słabe");
define("REGISTER_PWS2","średnie");
define("REGISTER_PWS3","mocne");
define("REGISTER_PWS4","bardzo mocne");
// new 5.0
define("REGISTER_EMAIL_USED","Email Address is already used");

/*********************************************************************
* lost_password.php
**********************************************************************/
define("LOSTPW_TITLE","Przypomnienie hasła");
define("LOSTPW_INFO2","Wygenerowano nowe hasło i wysłano je na twój adres email.");
define("LOSTPW_BUTTON1","Wygeneruj nowe hasło");
define("LOSTPW_BUTTON2","Wróć do strony głównej");
define("LOSTPW_LOGINNAME","Nazwa użytkownika");
define("LOSTPW_EMAIL","Email");
define("LOSTPW_ERROR1","Nie powiodło się przesyłanie informacji do bazy danych!");
define("LOSTPW_ERROR2","Nie znaleziono wpisu!");
define("LOSTPW_ERROR3","Nie powiodło się wysłanie emaila. Skontaktuj się z administratorem.");
define("LOSTPW_EMAIL_SUBJECT","Twoje nowe hasło o które prosiłeś");
define("LOSTPW_EMAIL_TEXT1","Twoja nazwa użytkownika do Galaxytool");
define("LOSTPW_EMAIL_TEXT2","Nazwa użytkownika");
define("LOSTPW_EMAIL_TEXT3","Hasło");
// new 5.0
define("LOSTPW_INFO1","You will receive an email to verify your password reset request.");
define("LOSTPW_CONFIRM_RESET_SUBJECT","Lost password?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","Hello,\n\nyou requested a password reset for the Galaxytool. To generate a new password, click the following link:");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","OGame Galaxytool - Informacja o użytkowniku");
define("USERINFO_NAMES","Wszyscy użytkownicy");
define("USERINFO_DETAIL","Szczegółowe informacje o");
define("USERINFO_ERROR1","Nie istnieje użytkownik z takim ID!");
define("USERINFO_USERNAME","Nazwa użytkownika");
define("USERINFO_INGAME","Nazwa w grze");
define("USERINFO_EMAIL","Email");
define("USERINFO_ALLYTAG","Sojusz");
define("USERINFO_STYLEPATH","Wygląd");
define("USERINFO_STATUS","Status");
define("USERINFO_ACTIVATE","Aktywuj użytkownika");
define("USERINFO_LOGINS","Ilość logowań");
define("USERINFO_LASTLOGIN","Ostatnie logowanie");
define("USERINFO_DATA","Informacja o dodanych układach");
define("USERINFO_NODATA","Użytkownik nie dodał żadnych układów!");
define("USERINFO_GALAXY","Galaktyka");
define("USERINFO_SYSTEMS","Ilość układów");
define("USERINFO_IP","Adres IP");
define("USERINFO_LOGINTIME","Nazwa użytkownika");
define("USERINFO_NOLOGIN","Użytkownik nie logował się.");
define("USERINFO_LAST_GALAXYUPDATE","Ostatni dodany podgląd galaktyki");
define("USERINFO_LAST_PUBLIC_NOTICE","Ostatnia publiczna notatka");
define("USERINFO_LAST_PRIVATE_NOTICE","Ostatnia prywatna notatka");
define("USERINFO_NUMBEROF_PUBLIC_NOTICE","Ilośc publicznych notatek");
define("USERINFO_NUMBEROF_PRIVATE_NOTICE","Ilość prywatnych notatek");
define("USERINFO_ACTIVATED","Konto Aktywne");
define("USERINFO_ACTIVATIONTEXT","Admin Galaxytool aktywowal Twoje konto.\n\nMiłej zabawy z Galaxytool");
// new 4.8
define("USERINFO_LAST_SUBMIT","Ostatnio wstawione dane");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","OGame Galaxytool - Historia sojuszu");
define("ALLYHISTORY_TBLHEAD","Przegląd historyczny");
define("ALLYHISTORY_PLAYERNAME","Nazwa gracza");
define("ALLYHISTORY_ALLYNAME","Sojusz");
define("ALLYHISTORY_LASTMONTH","ostatni miesiąc");
define("ALLYHISTORY_ALL_DATA","wszystkie dostępne iformacje"); // new 4.0
define("ALLYHISTORY_SHOW","pokaż statystykę");
define("ALLYHISTORY_TIMESPAN","Przedział czasowy");
define("ALLYHISTORY_PROGESS","Postęp");
define("ALLYHISTORY_SCORE","Punkty");
define("ALLYHISTORY_FSCORE","Floty"); // new 4.0
define("ALLYHISTORY_RSCORE","Badania"); // new 4.0
define("ALLYHISTORY_MEMBER","Członków"); // new 4.0
define("ALLYHISTORY_NOTHING","nie znaleziono wpisów");
define("ALLYHISTORY_DETAILS","Szczegóły");
define("ALLYHISTORY_SHOW_ADDRESS","Koordynaty");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","Informacje o graczu");
define("DETAILEDINFO_ALLYINFO_TITLE","Informacje o sojuszu");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","Szczegółowe informacje o graczu");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","Szczegółowe informacje o sojuszu");
define("DETAILEDINFO_NO_ALLIANCE","brak");
define("DETAILEDINFO_SCORE","Statystyki punktowe");
define("DETAILEDINFO_FLEET","Statystyki flot");
define("DETAILEDINFO_RESEARCH","Statystyki badań");
define("DETAILEDINFO_RANK","Miejsce");
define("DETAILEDINFO_POINTS","Punkty");
define("DETAILEDINFO_KNOWN_PLANETS","Znane planety");
define("DETAILEDINFO_MOONS","Znane księżyce");
define("DETAILEDINFO_PHALANX_AREA","Zasięg falangi");
define("DETAILEDINFO_NO_PHALANX_AREA","nie znaleziono falangi");
define("DETAILEDINFO_NOTICES","Notatki");
define("DETAILEDINFO_NO_NOTICES","nie znaleziono notatek");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","poprzednie sojusze");
define("DETAILEDINFO_RESOURCES_PER_HOUR","Surowce na godzinę");
define("DETAILEDINFO_RESOURCES_PER_DAY","Surowce na dobę");
define("DETAILEDINFO_RESOURCES_PER_WEEK","Surowce na tydzień");
define("DETAILEDINFO_RESOURCES_PER_MONTH","Surowce na miesiąc (30 dni)");
define("DETAILEDINFO_METAL","Metal");
define("DETAILEDINFO_CRYSTAL","Kryształ");
define("DETAILEDINFO_DEUTERIUM","Deuter");
define("DETAILEDINFO_UNKNOWN","nieznane");
define("DETAILEDINFO_SCORE_DISTRIBUTION","przyrost punktowy");
// new 4.2
define("DETAILEDINFO_GENERAL","Szczegóły");
define("DETAILEDINFO_MEMBERS","Członkowie");
define("DETAILEDINFO_GRAPHS","Wykresy");
define("DETAILEDINFO_RESOURCES","Wydobycie");
define("DETAILEDINFO_FLEET_TAB","Flota");
define("DETAILEDINFO_TECH","Badania");
define("DETAILEDINFO_FLEET_DETAIL","Suma / (średnio na gracza) z wszystkich dostępnych raportów");
define("DETAILEDINFO_TECH_DETAIL","Średnia ze wszystkich dostępnych informacji o graczach");
// new 4.3
define("DETAILEDINFO_PLANET_TAB",REPORTS_SHOW_PLANETS);
define("DETAILEDINFO_MOON_TAB",REPORTS_SHOW_MOONS);
// 4.7
define("DETAILEDINFO_ACTIVITIES","Aktywność");
define("DETAILEDINFO_NODATA",VIEW_NODATA); // reuse existing translations
define("DETAILEDINFO_ACTIVITY_DESCRIPTION","Pokaż aktywność &1 zaczynająć od:");
define("DETAILEDINFO_GALAXYVIEWS","Podgląd galaktyki");
define("DETAILEDINFO_SCANS","Działania szpiegowskie");
define("DETAILEDINFO_MESSAGES","Wiadomości gracza");
define("DETAILEDINFO_COMBATS","Raporty wojenne");
define("DETAILEDINFO_ALLYPAGE","Podgląd sojuszu");
define("DETAILEDINFO_MANUAL","Ręczne wstawienie");
define("DETAILEDINFO_START","Od");
define("DETAILEDINFO_TO","do");
define("DETAILEDINFO_TODAY","Dzisiaj");
define("DETAILEDINFO_DATA_RESTRICTION","ogranicz do:");
define("DETAILEDINFO_WEEKDAY_WEEKEND","Weekend");
define("DETAILEDINFO_WEEKDAY_WORKINGDAY","Dni robocze");
define("DETAILEDINFO_WEEKDAY_MONDAY","Poniedziałek");
define("DETAILEDINFO_WEEKDAY_TUESDAY","Wtorek");
define("DETAILEDINFO_WEEKDAY_WEDNESDAY","Środa");
define("DETAILEDINFO_WEEKDAY_THURSDAY","Czwartek");
define("DETAILEDINFO_WEEKDAY_FRIDAY","Piątek");
define("DETAILEDINFO_WEEKDAY_SATURDAY","Sobota");
define("DETAILEDINFO_WEEKDAY_SUNDAY","Niedziela");
define("DETAILEDINFO_WEEKDAY_SHORTLENGTH",3); // number of characters to shorten week day
define("DETAILEDINFO_PLAYER_CURRENTLY_ACTIVE","Gracz jest obecnie aktywny");
define("DETAILEDINFO_PLAYER_MESSAGES","dostępne wiadomości gracza");
define("DETAILEDINFO_SHOW","pokaż");
define("DETAILEDINFO_NONE","niedostępne");
define("DETAILEDINFO_ENTER_MANUALLY","Wprowadź aktywność dla tego gracza");
define("DETAILEDINFO_PLAYER_SEEN_ON","Gracz jest dostępny od");
define("DETAILEDINFO_INSERT","Wstaw");
define("DETAILEDINFO_OGAME_SERVERTIMES","Uwaga: Wszystkie daty i godziny odnoszą się do czasu serwera OGame !");
define("DETAILEDINFO_DAY_VIEW","24 godzinny podgląd");
define("DETAILEDINFO_WEEK_VIEW","tygodniowy podgląd");
// new 4.8
define("DETAILEDINFO_HOME_PLANET","Planeta główna");
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
define("ADMIN_TITLE","Zarządzanie Galaxytool");
define("ADMIN_DISCLAMER","Uwaga: Uruchamiasz skrypty na własne ryzyko ! Większość z nich usuwa dane.");
define("ADMIN_INCONSISTENCIES","Niespójność w bazie danych");
define("ADMIN_PLANETS","Planety na pozycji 0 lub większej niż 15");
define("ADMIN_GALAXIES","Usuń galaktyki większe niż &1 ");
define("ADMIN_PLAYERS","Usuń graczy bez OGame playerid - prowadzi do zdublowania graczy ");
define("ADMIN_REPORTS","Skasuj raporty powiązane z nieistniejącą planetą");
define("ADMIN_MISC","Różne");
define("ADMIN_RESET","Skasuj wszystkie dane (tylko użytkownicy oraz ip table nie zostaną skasowane)");
define("ADMIN_OLD_PLAYERS","Usuń informacje o graczach starsze niż &1 dni");
define("ADMIN_OLD_REPORTS","Usuń raporty starsze niż &1 dni");
define("ADMIN_LOADING","Nie zamykaj tego okna dopóki strona nie zostanie załadowana");
define("ADMIN_STATUS","Status Twoich próśb");
define("ADMIN_SELECTION","Co najmniej jedna opcja musi być wybrana");
define("ADMIN_SAFETY","Czy jesteś pewien, że chcesz uruchomić ten skrypt(y) ?");
define("ADMIN_DONE","zrobione");
define("ADMIN_NOTBD","nie ma nic do zrobienia");
// new 4.3
define("ADMIN_OLD_GALAXIES","Usuń widoki galaktyk, które są starsze niż &1 dni");
define("ADMIN_UNUSED_PLAYERS","Skasuj graczy, których nie ma w żadnym widoku galaktyki");
// new 4.7
define("ADMIN_OLD_ACTIVITIES","Usuń działania gracza starsze niż &1 dni");
// new 4.8
define("ADMIN_OLD_COMBATS","Usuń raporty wojenne starsze niż &1 dni");
define("ADMIN_OLD_INGAME_MSG","Usuń wiadomości w grze starsze niż &1 dni");
// new 5.0
define("ADMIN_OGAME_API","Load public data from OGame into the Galaxytool");
define("ADMIN_OGAME_ALL_DATA",ALLYHISTORY_ALL_DATA);
define("ADMIN_OGAME_GALAXY_DATA",MENU_GALAXYVIEW);
define("ADMIN_OGAME_STATISTICS_DATA",MENU_STATISTICS);

// new 4.3.5
/*********************************************************************
* errorpage.php
**********************************************************************/
define("ERRORPAGE_PAGEFORWARD","Kliknij tutaj jeśli Twoja przeglądarka nie obsługuje przekierowania strony");
define("ERRORPAGE_PERMISSION_DENIED","Nie masz uprawnień do wejścia na tą stronę. Kliknij na powrót.");

// new 4.7
/*********************************************************************
* fleet_movements.php
**********************************************************************/
define("FLEETS_TITLE","OGame Galaxytool - Ruchy flot");
define("FLEETS_ACTUAL_FLEETS","Obecne ruchy floty");
define("FLEETS_YES",SHOW_YES);
define("FLEETS_NO",SHOW_NO);
define("FLEETS_DETAILS","Szczegóły");
define("FLEETS_MISSION_EXPEDITION","Ekspedycja");
define("FLEETS_MISSION_COLONIZATION","Kolonizuj");
define("FLEETS_MISSION_RECYCLE","Zbieraj");
define("FLEETS_MISSION_TRANSPORT","Transportuj");
define("FLEETS_MISSION_DEPLOYMENT","Stacjonuj");
define("FLEETS_MISSION_ESPIONAGE","Szpieguj");
define("FLEETS_MISSION_ACS_DEFEND","Obrona związku");
define("FLEETS_MISSION_ATTACK","Atak");
define("FLEETS_MISSION_ACS_ATTACK","Atak związku");
define("FLEETS_MISSION_MOON_DESTRUCTION","Zniszcz księżyc");
define("FLEETS_MISSION_MISSILE_ATTACK","Atak rakietowy");
define("FLEETS_NO_DATA","Nie znaleziono odpowiednich danych");
// new 5.0
define("FLEETS_FLEET","Fleet");
define("FLEETS_ALL_FLEETS","Show all fleet movements");

/*********************************************************************
* parser_combat_reports.inc.php
**********************************************************************/
define("COMBAT_REPORT_OUDATED_GALAXYVIEW","Twoje dane galaktyki są nieaktualne. Proszę odwiedź najpierw koordynaty miejsca bitwy!");

/*********************************************************************
* messages.php
**********************************************************************/
define("MESSAGES_TITLE","OGame Galaxytool - OGame Wiadomości");
define("MESSAGES_PLAYERNAME","Nazwa gracza");
define("MESSAGES_SUBJECT","Temat");
define("MESSAGES_DATE","Data");
define("MESSAGES_FILTER","Filter");
define("MESSAGES_DELETE","Usuń wiadomość");
define("MESSAGES_PUBLISH_DETAIL","Publikuj wiadomość poprzez dodanie jej do notatek na temat tego gracza.");
define("MESSAGES_PUBLISH_HEADER","&sender wysłał wiadomość do &recipient &date:\n\n &message"); // &sender, &recipient, &date, &message replaced at runtime
define("MESSAGES_PLAYER_FILTER","Wiadomość od gracza:");
// new 5.0
define("MESSAGES_CONTENT","Content");

/*********************************************************************
* combat_reports.php
**********************************************************************/
define("COMBATS_TITLE","OGame Galaxytool - Raporty wojenne");
define("COMBATS_ATTACKER","Agresor");
define("COMBATS_DEFENDER","Obrońca");
define("COMBATS_DATE","Data");
define("COMBATS_OWNER","Właściciel");
define("COMBATS_WINNER","Zwycięzca");
define("COMBATS_COMBATREPORT","Raporty wojenne");
define("COMBATS_COMBAT_AT","Bitwa na");
define("COMBATS_LOST_UNITS","Stracone jednostki");
define("COMBATS_LOOT","Łup");
define("COMBATS_DEBRIS","Pole zniszczeń");
define("COMBATS_AND","i");
define("COMBATS_PUBLISH","Udostępnij raport");
define("COMBATS_UNPUBLISH","Ukryj raport (zrób z niego prywatny)");
define("COMBATS_DELETE","Usuń raport");
define("COMBATS_CHECK_ALL","Zaznacz wszystko");
define("COMBATS_UNCHECK_ALL","Odznacz wszystko");
define("COMBATS_WITH_SELECTED","Wykonaj dla zaznaczonych");
define("COMBATS_PUBLIC_REPORTS","Raporty publiczne");
define("COMBATS_YES",SHOW_YES); // no need for translation!
define("COMBATS_NO",SHOW_NO); // no need for translation!
define("COMBATS_SEARCH_OPTIONS","Opcje szukania");
define("COMBATS_SEARCH","Go");
define("COMBATS_RESET","Reset");
// 4.8
define("COMBATS_COORDINATES",USER_BB_COORDINATES);
define("COMBATS_INVALID_GALAXY_ENTERED","Wprowadzono niepoprawną galaktykę");
define("COMBATS_INVALID_SYSTEM_ENTERED","Wprowadzono niepoprawny system");
define("COMBATS_INVALID_PLANET_ENTERED","Wprowadzono niepoprawną planetę");
define("COMBATS_GALAXY_FROM_TO","Galaktyka");
define("COMBATS_SYSTEM_FROM_TO","Układ");
define("COMBATS_PLANET_FROM_TO","Planeta");
define("COMBATS_APPLY",GENERAL_APPLY);
define("COMBATS_COMBAT_SUMMARY","Podsumowanie raportów wojennych");
define("COMBATS_DOWNLOAD_CSV","Pobierz jako plik CSV");

/*********************************************************************
* report_archive.php
**********************************************************************/
define("REPORT_ARCHIVE_TITLE","Archiwum raportów");
define("REPORT_ARCHIVE_COORDINATES","Współrzędne ");
define("REPORT_ARCHIVE_SCANTIME","Czas skanowania");
define("REPORT_ARCHIVE_DELETE","Usuń te wpisy");
define("REPORT_ARCHIVE_CONFIRM_DELETE","Czy na pewno chcesz usunąć te wpisy?");
define("REPORT_ARCHIVE_GALAXY","Galaktyka");
define("REPORT_ARCHIVE_SYSTEM","Układ");
define("REPORT_ARCHIVE_PLANET","Planeta");
define("REPORT_ARCHIVE_MOON","Księżyc");
define("REPORT_ARCHIVE_DETAILS","Szczegóły");
define("REPORT_ARCHIVE_RESOURCES",DETAILEDINFO_RESOURCES);
define("REPORT_ARCHIVE_HEADER_RESOURCES",REPORTS_RESOURCES);
define("REPORT_ARCHIVE_DETAILS_FOR","Archiwum raportów dla &1 [&2] (&3)"); // &1 = planetname; &2 = coordinates; &3 = playername
define("REPORT_ARCHIVE_FLEET_CARGO","Pojemność ładunkowa floty");
define("REPORT_ARCHIVE_IRAK_RANGE","Zasięg rakiet Międzyplanetarnych");
define("REPORT_ARCHIVE_CHART_TYPE","Typ wykresu");

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