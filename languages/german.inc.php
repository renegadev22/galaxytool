<?php
/*
 * defines the characters used in OGame to indicate player status
 */
define("PLAYER_BANNED","g");
define("PLAYER_VACATION_MODE","u");
define("PLAYER_NOOB","n");
define("PLAYER_INACTIVE","i");
define("PLAYER_LONG_INACTIVE","I");
define("PLAYER_OUTLAW","o");

/*********************************************************************/
/***************************** public ********************************/
/*********************************************************************/
//index.php
define("L_USERNAME","Nutzername");
define("L_PASSWORD","Passwort");
define("L_LOGINFAILURE","Benutzername oder Passwort war falsch oder du bist noch nicht freigeschaltet.");
define("L_TOKENFAILURE","Dein Loginschlüssel war falsch oder du bist noch nicht freigeschaltet.");
define("L_LOGINTEXT","Bitte gib deine Nutzerdaten ein."); // deprecated
define("L_LANGUAGE","verfügbare Sprachen:");
define("L_TIMEOUT","Session Timeout!");
define("L_REGISTER","Registrieren");
define("L_PWLOST","Passwort vergessen");
define("INDEX_TITLE","OGame Galaxietool - Übersicht");
define("INDEX_INFO","Informationen");
define("INDEX_ENTRIES","Systeme insgesamt");
define("INDEX_ENTRIES_LASTWEEK","Neue Systeme in der letzten Woche");
define("INDEX_ENTRIES_TO_OLD","Systeme älter als ein Monat");
define("INDEX_REGISTERED_USERS","Registrierte Benutzer");
define("INDEX_PAGEFORWARD","Sollte dein Browser keine Weiterleitung unterstützen klicken bitte hier.");
define("INDEX_NOTICES","Notizen");
define("INDEX_PLAYERS","Spieler Statistiken");
define("INDEX_ALLIES","Allianz Statistiken");
define("INDEX_REPORTS","Spionageberichte");
define("INDEX_VERSION","Neueste Version zum Download");
define("INDEX_LATEST_VERSION","Keine neuere Version vorhanden");
define("INDEX_SHOUTBOX","Aktuelle Mitteilungen");
define("INDEX_NOENTRY","Bisher keine Einträge");
define("INDEX_COMMENT","Dein Beitrag");
define("INDEX_INSERT","Eintragen");
define("INDEX_UMOD","Spieler im Urlaubsmodus");
define("INDEX_NO_MOONS","Anzahl Monde");
define("INDEX_NO_EMPTY_SYSTEMS","Anzahl leerer Systeme");
define("INDEX_NO_FULL_SYSTEMS","Anzahl vollständig gefüllter Systeme");
define("INDEX_NO_TARGETS","Anzahl angreifbarer Planeten");
// 4.0
define("INDEX_USERINFO","Userzahlen");
define("INDEX_ONLINE","Jetzt Online");
define("INDEX_TODAY","Heute Online");
define("INDEX_ALL","Gesamtlogins");
// 4.3.7
define("GENERAL_LOAD_FORM","Formulardaten laden");
define("GENERAL_SAVE_FORM","Formulardaten speichern");
define("GENERAL_SAVE_AS_TEXT","Speichern unter");
define("GENERAL_SAVE","Speichern");
// 4.8
define("INDEX_USERMANAGEMENT","Aktivierungsübersicht");
define("INDEX_NEEDADMIN","Freizuschaltende Accounts");
define("INDEX_NEEDEMAIL","Noch nicht validierte Accounts");
define("INDEX_TOOLBAR_INFO","Informationen zum Galaxietool Plugin");
define("INDEX_TOOLBAR_URL","Galaxietool URL");
define("INDEX_TOOLBAR_VERSION_REQUIRED","Mindestversion des Galaxietool Plugin");
define("INDEX_TOOLBAR_INSTALL_GUIDE","Installationsanweisung für das Plugin");
define("INDEX_TOOLBAR_TOKEN","Loginschlüssel");
define("INDEX_TOOLBAR_NEW_TOKEN","Neuen Schlüssel erzeugen");
define("INDEX_PLAYERS_WITH_N_PLANETS","Spieler mit mehr als &1 Planeten");
define("INDEX_GETTING_STARTED","Erste Schritte mit dem Galaxietool");
define("INDEX_GETTING_STARTED1","Willkommen im Galaxietool!");
define("INDEX_GETTING_STARTED2","Das Galaxietool wird dich dabei unterstützen herauszufinden, was in deinem Universum &1 vorgeht.");
define("INDEX_GETTING_STARTED3","Um aber überhaupt Daten analysieren zu können, müssen diese erst in das Tool integriert werden. Dazu benötigst du ein Plugin wie die &1 für Firefox.");
define("INDEX_GETTING_STARTED4","Nachdem das Plugin installiert und eingerichtet wurde, surfst du durch die einzelnen OGameseiten wie sonst auch. Zusätzlich wird aber ein kleines Statusfenster erscheinen, wann immer Daten ins Galaxietool eingetragen wurden.");
define("INDEX_GETTING_STARTED5","Sobald genügend Daten im Galaxietool vorhanden sind, kann die Analyse beginnen. So kann geschaut werden, wo Mitspieler ihre Kolonien haben, wie viele Kolonien sie besitzen, welche Spionageberichte von ihnen existieren und wann sie am häufigsten online sind.");
define("INDEX_GETTING_STARTED6","Das Galaxietool kann aber auch zur Analyse des eigenen Fortschritts genutzt werden, indem Vergleiche mit anderen Mitspielern gezogen werden oder durch die Analyse der eigenen Kampfberichte um zu sehen was in den letzten Tagen / Wochen erbeutet wurde.");
define("INDEX_GETTING_WIKIPAGE","Das war aber nur ein kleiner Auszug der Features des Galaxietools.");
define("INDEX_GETTING_WIKIPAGE2","Sämtliche Features findest du auf unserer Wikiseite.");
define("INDEX_GETTING_BOARD","Über Feedback oder Ideen freuen wir uns in unserem Board:");
define("INDEX_GETTING_CHAT1","Oder besuche uns direkt in unserem Chatraum:");
define("INDEX_GETTING_CHAT2","Wir sind nicht 24 Stunden / 7 Tage die Woche online, verbringen aber sehr viel Freizeit dort. Seid also bitte nicht ungeduldig, wenn ihr nach 30 Sekunden noch keine Antwort erhalten habt.");
// 5.0
define("INDEX_CLOSE","Schließen");
define("INDEX_LOGIN","Einloggen");
define("GENERAL_REQUIRED_FIELDS","Bitte alle Pflichtangaben pflegen");
define("INDEX_MESSAGES","Meldungen");
define("INDEX_EXAMPLE","Beispiel");
define("INDEX_INVALID_DATA","Ungültige Eingabe");
define("GENERAL_COLUMN_HIDE_TITLE","Spaltenverwaltung");
define("GENERAL_COLUMN_HIDE_INFO","Hier kannst du auswählen welche Spalten in der Tabelle angezeigt werden sollen.");
define("GENERAL_ENTRIES_DELETED","&1 Einträge gelöscht");
define("GENERAL_APPLY","Übernehmen");
define("STARTPAGE_GALAXYTOOL_DESCR","<em>Galaxytool</em> ist ein Tool für das bekannte Browserspiel OGame.");
define("GENERAL_OVERWRITE","Identischen Eintrag überschreiben");
define("GENERAL_OVERWRITE_QUESTION","Überschreiben?");
define("INDEX_OWN_LOGINS","Anzahl deiner Logins");
define("GENERAL_OPEN_IN_NEW_WINDOW","Link in neuem Fenster öffnen");
// 5.1
define("GENERAL_UNIT_OF_MEASURE_DAYS","Tage");

/*********************************************************************/
/***************************** internal ******************************/
/*********************************************************************/
// index.php
define("PROGRAM_NAME","OGame Galaxietool");
define("SHORTNAME","Galaxietool");
define("BACK_INDEX","Zurück zur Hauptseite");
define("UNIVERSE","Universum");

// search
define("MENU_INFO_LINKS","Informationen");
define("MENU_PAGE","Übersicht");
define("MENU_DB_SEARCH","Datenbank durchsuchen");
define("MENU_DB_NOTICES","Notizen durchsuchen");
define("MENU_DB_REPORTS","SpioReports durchsuchen");
define("MENU_GALAXYVIEW","Galaxieansicht");
define("MENU_STATISTICS","Statistiken");
define("MENU_ALLYHISTORY","zeitliche Statistiken");
// 4.7
define("MENU_FLEET_MOVEMENTS","Flottenbewegungen");
define("MENU_COMBAT_REPORTS","Kampfberichte");
define("MENU_MESSAGES","Spielernachrichten");

// insert / change
define("MENU_OPTION_LINKS","Optionen");
define("MENU_DB_REFRESH","Datenbank aktualisieren");
define("MENU_NOTICES","Notizen");
define("MENU_DB_STATUS","Status der Datenbank");
define("MENU_USEROPTIONS","Benutzerverwaltung");
define("MENU_USEROPTIONS2","Benutzeroptionen");
define("MENU_USEROPTIONS3","Benutzerinformationen");
// 4.2
define("MENU_ADMIN","Verwaltung");
// 4.3.3
define("MENU_LOGOUT","Ausloggen");

// Stuff
define("MENU_STUFF","Sonstiges");
define("MENU_FORUM_THREAD","Entwicklerforum");
define("MENU_DOWNLOADPAGE","Downloadseite");
define("MENU_LANGUAGE","Sprachauswahl");
define("MENU_HELP","Hilfe");
// 4.0
define("MENU_TOOLOPTIONS","Galaxietool Optionen");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1"," wurde in die Datenbank eingetragen");
define("PARSER_ERROR1","Fehler beim Versuch die folgenden Koordinaten einzutragen:");
define("PARSER_ERROR2","Auswahl der Datenbank fehlgeschlagen!");
define("PARSER_ERROR3","Konnte den Datenbankserver nicht finden!");
define("PARSER_WRONG_UNIVERSE","Falsches Universum - aktuell: \"&1\"  erwartet: \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","OGame Galaxietool - Abfrageseite");
define("SHOW_SEARCH","Suche in der Datenbank");
define("SHOW_ALLYSYMBOL","Allytag");
define("SHOW_PLAYERNAME","Spielername");
define("SHOW_MOONS","Nur Monde suchen"); // obsolete with 5.0
define("SHOW_NOTICES","Nur Planeten mit Notizen suchen");
define("SHOW_COLONIES","nur besiedelbare Planeten");
define("SHOW_YES","Ja");
define("SHOW_NO","Nein");
define("SHOW_SEARCHRANGE","Suchreichweite");
define("SHOW_SEARCH_IN","Suche in Galaxie");
define("SHOW_FROM_SYSTEM","von System");
define("SHOW_FROM_PLANET","von Planetposition");
define("SHOW_TO","bis");
define("SHOW_DESCRIPTION","Bei den Spielernamen und Allytags sind * als Wildcards zulässig, so dass *name* alle Spieler findet die &quot;name&quot; in ihrem Spielernamen stehen haben.<br />Es müssen nicht alle Felder ausgefüllt werden, so ist eine Suche nur nach den Koordinaten einer Allianz möglich, aber ebenso eine Suche nach allen Monden der Allianz.");
define("SHOW_SORT_BY","Sortieren nach");
define("SHOW_GALASYSTEM","Galaxie/System");
define("SHOW_ALLYNAME","Allianzname");
define("SHOW_SEARCHBUTTON","Suchen");
define("SHOW_ADDRESS","Adresse");
define("SHOW_ALLYSORT","Allianz");
define("SHOW_PLANET","Planetname");
define("SHOW_STATUS","Status");
define("SHOW_CURRENTNESS","Aktualität");
define("SHOW_PLAYER_STATUS","Spielerstatus");
define("SHOW_PLAYER_STATUS1","egal");
define("SHOW_PLAYER_STATUS2","raidbar");
define("SHOW_PLAYER_STATUS3","inaktiv");
define("SHOW_HITS","Ergebnisse");
define("SHOW_OF","von");
define("SHOW_ASC","aufsteigend");
define("SHOW_DESC","absteigend");
define("SHOW_RESULTS","Trefferanzeige");
define("SHOW_MOON","Mond");
define("SHOW_UKMOONSIZE","unbekannt");
define("SHOW_DF","TF");
define("SHOW_DF_LONG","Trümmerfeld");
define("SHOW_METAL","M");
define("SHOW_METAL_LONG","Metall");
define("SHOW_CRYSTAL","K");
define("SHOW_CRYSTAL_LONG","Kristall");
define("SHOW_BOTH","zusammen");
define("SHOW_AT_LEAST","(mind.)");
define("SHOW_DATE","Datum");
define("SHOW_DATE_0","egal");
define("SHOW_DATE_1","älter als");
define("SHOW_DATE_2","neuer als");
define("SHOW_RANK","Platz");
define("SHOW_FRANK","Flottenplatz");
define("SHOW_MEMBERS","Mitglieder");
define("SHOW_NOTRANKED","Keine Daten vorhanden");
define("SHOW_NOTICERES","Notizen");
define("SHOW_REPORTS","Zeige nur Planeten mit Reports"); // obsolete with 5.0
define("SHOW_REPORTS_SHORT","Spionage");
define("SHOW_NOTHING","Keine Einträge gefunden");
define("SHOW_ALLIANCE_STATUS","Allianzstatus");
define("SHOW_NO_STATUS","kein Status");
define("SHOW_NAP","NAP");
define("SHOW_ALLIED","Verbündet");
define("SHOW_WAR","Krieg");
define("SHOW_BOYCOTT","Boykott");
define("SHOW_NEUTRAL","Neutral");
define("SHOW_OWN","Eigene Ally");
define("SHOW_WING","Wing");
// obsolete with 5.0
define("SHOW_EXT_OPTIONS1","Reichweitensuche, Rangsuche, Datumssuche sowie Trümmerfeldsuche.");
define("SHOW_EXT_OPTIONS2","Zeige die erweiterten Suchoptionen für die Suche nach Kolonieplätzen, Monden, Reports, Notizen, Spielerstatus oder Diplomatiestatus.");
define("SHOW_EXT_OPTIONS3","Zeige die erweiterten Optionen für die Sortierung der Suchergebnisse.");
// new 5.0
define("SHOW_EXTENDED","erweiterte Suche");
define("SHOW_MOON_SELECTION","Planet mit Mond");
define("SHOW_REPORT_SELECTION","Planet mit Spionagebericht");
define("SHOW_FILTER_BY","von den Suchergebnissen ausschließen");
define("SHOW_FILTER_NONE","keine");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Zeige Spieler ohne Punkteänderung innerhalb der letzten Tage");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","OGame Galaxietool - Statusseite");
define("STATUS_DB_STATUS","Status der Datenbank");
define("STATUS_COLOR","Farbe");
define("STATUS_AGE1","Eintrag ein Tag alt.");
define("STATUS_AGE2","Eintrag 2 - 4 Tage alt.");
define("STATUS_AGE3","Eintrag 4 - 7 Tage alt.");
define("STATUS_AGE4","Eintrag 1 - 2 Wochen alt.");
define("STATUS_AGE5","Eintrag 2 - 4 Wochen alt.");
define("STATUS_AGE6","Eintrag älter als 1 Monat!");
define("STATUS_AGE7","Noch kein Eintrag vorhanden.");
define("STATUS_ON","am");
define("STYLES_COLOR1","Farbe1");
define("STYLES_COLOR2","Farbe2");
define("STYLES_COLOR3","Farbe3");
define("STYLES_COLOR4","Farbe4");
define("STYLES_COLOR5","Farbe5");
define("STYLES_COLOR6","Farbe6");
define("STYLES_COLOR7","Farbe7");
// 4.8
define("STATUS_DB_LEGEND","Legende");
define("STATUS_GALAXY","Galaxieübersicht");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","OGame Galaxietool - Benutzerverwaltung");
define("USER_NAMES","Benutzer");
define("USER_ERROR","Fehler");
define("USER_NEWUSER","Neuer Benutzer");
define("USER_OPTIONS","Einstellungen");
define("USER_USERNAME","Nutzername");
define("USER_PASSWORD","Passwort");
define("USER_PASSWORD_CONFIRM","Passwort wiederholen");
define("USER_GALAXY","Galaxie");
define("USER_SEARCH","Suchen");
define("USER_INSERT","Eintragen");
define("USER_DELETE","löschen");
define("USER_DELETE_ENTRY","Willst du den folgenden Spieler wirklich löschen: "); // new 3.6
define("USER_STATUS","Statusansicht");
define("USER_STYLES","Layout anpassen");
define("USER_SUBMIT","Abschicken");
define("USER_RESET","Reset");
define("USER_YES","Ja");
define("USER_NO","Nein");
define("USER_STYLEPATH","Pfad zur styles.css");
define("USER_PROBES","Spioberichte");
define("USER_EMAIL","E-Mail");
define("USER_ERROR1","Passwort falsch oder E-Mail-Adresse ungültig.");
define("USER_ERROR2","E-Mail-Adresse ungültig.");
define("USER_INGAME","Ingame-Name");
define("USER_ALLYTAG","Allytag");
define("USER_ALLYHISTORY","zeitliche Übersichten");
define("USER_DIPLOMATIC","Diplomat");
define("USER_STATSPAGE","Anzahl Einträge auf der Statistikseite"); // deprecated with 4.8
define("USER_LINKS","Links");
define("USER_LINKS2","Format:<br>text;url<br>text2;url2<br>text3;url3");
define("USER_EXPORT_TITLE","Exportfarben (BB Codes)");
define("USER_BB_COORDINATES","Koordinaten");
define("USER_BB_MOON","Mond");
define("USER_BB_DEBRIS","Trümmerfeld");
define("USER_BB_ALLY","Allianzname");
define("USER_BB_ALLYDETAILS","Allianzdetails");
define("USER_BB_PLAYERNAME","Spielername");
define("USER_BB_BANNED","Gesperrt");
define("USER_BB_VACATION","Urlaubsmodus");
define("USER_BB_NOOB","Noobschutz");
define("USER_BB_INACTIVE","Inaktiv");
define("USER_BB_LONGINACTIVE","lange Inaktiv");
// new with 4.7
define("USER_DELETION","Löschen");
define("USER_FLEETINFO",MENU_FLEET_MOVEMENTS);
define("USER_ACTIVITIES","Spieleraktivitäten");
define("USER_MAINTENANCE","Wartungsmaßnahmen");
define("USER_MANAGEMENT",MENU_USEROPTIONS);
define("USER_DELETE_MY_COMBAT_REPORTS","Lösche meine Kampfberichte");
define("USER_DELETE_MY_MESSAGES","Lösche meine Spielernachrichten");
define("USER_DELETE_MY_FLEETMOVES","Lösche meine Flottenbewegungen");
// 4.8
define("USER_DELETE_MY_COMBAT_REPORTS_LIMITED","Lösche meine Kampfberichte die älter als &1 Tage sind");
define("USER_DELETE_MY_MESSAGES_LIMITED","Lösche meine Spielernachrichten die älter als &1 Tage sind");
define("USER_TABLE_ENTRIES","Anzahl von Suchergebnissen pro Seite");
// 5.0
define("USER_EXISTS","Es existiert bereits ein Benutzer mit diesem Namen");
define("USER_BB_OUTLAW","Vogelfrei");
define("USER_INVALID_URL","Die Adresse &1 scheint ungültig zu sein. Bitte anpassen, sonst wird sie ignoriert.");

/*********************************************************************
* galaxyview.php
*********************************************************************/
define("VIEW_TITLE","OGame Galaxietool - Galaxieansicht");
define("VIEW_NODATA","Keine Daten vorhanden.");
define("VIEW_GALAXY","Galaxie");
define("VIEW_SYSTEM","Sonnensystem");
define("VIEW_POSITION","Pos.");
define("VIEW_PLANET","Planet");
define("VIEW_MOON","Mond");
define("VIEW_TF","TF");
define("VIEW_PLAYER","Spieler");
define("VIEW_PLAYER_ADD","(Status)"); // shortened at 3.6
define("VIEW_ALLY","Allianz");
define("VIEW_ALLY_ADD",""); // cleared at 3.6
define("VIEW_METAL","M");
define("VIEW_CRYSTAL","K");
define("VIEW_COLONISED","Planeten besiedelt");
define("VIEW_UKMOONSIZE","unbekannt");
define("VIEW_BACK","zurück");
define("VIEW_NOTICE","Notizen");
define("VIEW_REPORTS","Spionage");
define("VIEW_MOONPHALANX","Folgende Monde haben dieses System in der Phalanx");
define("VIEW_NOMOONS","Keine Monde gefunden");
define("VIEW_IRAKS","Folgende Planeten haben dieses System in Reichweite ihrer Interplanetarraketen");
define("VIEW_NOIRAKS","Keine Iraks gefunden");
// 4,0
define("VIEW_MOON_DESTROY_CHANCE","Mondzerstörungschancen");
define("VIEW_CHANCE_WITH_ONE","Chance mit einem Todesstern");
define("VIEW_CHANCE_WITH_N","Chance mit ");
define("VIEW_DEATH_STARS","Todessternen");
define("VIEW_DS_DESTROY_CHANCE","Todesstern Verlustchance");
define("VIEW_TOP","Top");
// new 4.3.5
define("VIEW_GO","go");
// new 5.0
define("VIEW_DIAMETER","Durchmesser");

/*********************************************************************
* change_password.php
**********************************************************************/
define("PW_TITLE","OGame Galaxietool - Passwort ändern");
define("OLD_PASSWORD","Altes Passwort");
define("NEW_PASSWORD","Neues Passwort");
define("CONFIRM_NEW_PASSWORD","Neues Passwort wiederholen");
define("PW_MISMATCH","Die beiden Passwörter stimmten nicht überein!");
define("PW_ERROR","Das alte Passwort war nicht korrekt!");
define("UPDATE_DONE","Update erfolgt.");
// new 4.2
define("TIMEZONE_OFFSET","Zeitabweichung zum Server");
// new 4.3
define("DELETE_ACCOUNT","Diesen Galaxietoolaccount löschen");
define("DELETE_ACCOUNT_SAFETY_REQUEST","Den Account wirklich löschen?");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","Berechtigungen");
define("CH_PASSWD_ADMIN","Admin");
// new 4.7
define("TIMEZONE_OGAME_OFFSET","Zeitabweichung zum OGame Server");
// new 4.8
define("CH_PASSWD_USER_LANGUAGE","Wechsel zu dieser Sprache nach dem Logon");
define("CH_PASSWD_USER_LANGUAGE_NO_CHANGE","kein Wechsel");
define("CH_PASSWD_EXPAND","Sichtbar");
define("CH_PASSWD_COLLAPSE","Eingeklappt");
define("CH_PASSWD_HIDDEN","Nicht sichtbar");
define("CH_PASSWD_GETTING_STARTED","Zeige Einführungsinformationen auf der Startseite");
define("CH_PASSWD_PLUGIN","Zeige Plugininformationen auf der Startseite");

/*********************************************************************
* notices.php
**********************************************************************/
define("NOTICE_TITLE","OGame Galaxietool - Notizen");
define("NOTICE_HEADER","Notiz bearbeiten");
define("NOTICE_HEADER2","Eigene Notizen bearbeiten");
define("NOTICE_PUBLIC","Sichtbar für andere?");
define("NOTICE_YES","ja");
define("NOTICE_NO","nein");
define("NOTICE_TEXT","Notiz Text");
define("NOTICE_SAVE","Speichern");
define("NOTICE_DELETED","Eintrag gelöscht");
define("NOTICE_SAVED","Eintrag gespeichert.");
define("NOTICE_RESULTS","Alle Einträge");
define("NOTICE_USER","Benutzer");
define("NOTICE_DATE","Datum");
define("NOTICE_EDIT","Bearbeiten");
define("NOTICE_DELETE","Löschen");
define("NOTICE_NEW","Eigenen Eintrag erstellen");
define("NOTICE_NOTPUBLIC","Notiz nicht öffentlich.");
define("NOTICE_ALL","alle");
define("NOTICE_NONE",SHOW_FILTER_NONE);
define("NOTICE_SEARCH","Notizen durchsuchen");
define("NOTICE_SEARCH_SHORT","Suchen");
define("NOTICE_HITS","Ergebnisse");
define("NOTICE_SHOWRESULTS","Treffer pro Seite");
define("NOTICE_OF","von");
define("NOTICE_NOTHING","Keine Einträge gefunden.");
// 4.0
define("NOTICE_CHARS","Zeichen");
define("NOTICE_PLAYERNAME","Spieler");
define("NOTICE_SHOWALL","Zeige alle Notizen.");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","OGame Galaxietool - Spionageberichte");
define("REPORTS_RESOURCES","Rohstoffe");
define("REPORTS_FLEET","Flotten");
define("REPORTS_DEFENCE","Verteidigung");
define("REPORTS_BUILDINGS","Gebäude");
define("REPORTS_TECHNOLOGY","Forschung");
define("REPORTS_MOON","Mond");
define("REPORTS_SEARCH","Spionageberichte durchsuchen");
define("REPORTS_SEARCH_SHORT","Suchen");
define("REPORTS_HITS","Ergebnisse");
define("REPORTS_NOTHING","Keine Einträge gefunden.");
define("REPORTS_ADDRESS","Adresse");
define("REPORTS_CURRENTNESS","Aktualität");
define("REPORTS_PLAYERNAME","Spielername");
define("REPORTS_ALLY","Allianz");
define("REPORTS_VIEW","Report ansehen");
define("REPORTS_SEARCH_IN","Suche in Galaxie");
define("REPORTS_FROM_SYSTEM","von System");
define("REPORTS_TO","bis");
define("REPORTS_DELETE","löschen");
define("REPORTS_DELETED","Eintrag gelöscht.");
define("REPORTS_RESULTS","Treffer pro Seite");
define("REPORTS_OF","von");
define("REPORTS_DATE","Datum");
define("REPORTS_DATE_0","egal");
define("REPORTS_DATE_1","älter als");
define("REPORTS_DATE_2","neuer als");
define("REPORTS_NOTICES","Notizen");
define("REPORTS_AT_LEAST_RESOURCES","Gesamtressourcen (mind.)");
define("REPORTS_SEARCH_EXTENDED","erweiterte Suche");
define("REPORTS_FLEET_RESIS","Flotten- punkte");
define("REPORTS_DEFENCE_RESIS","Verteidigungs- punkte");
define("REPORTS_ALL_RESIS","gesamt Punktverlust");
define("REPORTS_TECHS","Techs");
define("REPORTS_UNKNOWN_ENTRIES","unbekannte Einträge");
define("REPORTS_PARTLY_INSERTED","teilweise eingetragen");
define("REPORTS_FOR_ALL_RES","Für alle raidbaren Ressourcen");
define("REPORTS_FOR_TF","Für das TF");
define("REPORTS_KT","Kleine Transporter");
define("REPORTS_GT","Große Transporter");
define("REPORTS_SS","Schlachtschiffe");
define("REPORTS_REC","Recycler");
define("REPORTS_RAIDABLE","Nur raidbare Ziele");
define("REPORTS_ALL_RESOURCES","gesamte Ressourcen");
// 4.0
define("REPORTS_STUFF","Sonstiges");
define("REPORTS_SPEEDSIM","Simulieren mit Speedsim");
define("REPORTS_DRAGOSIM","Simulieren mit Dragosim");
define("REPORTS_STATUS","Status");
define("REPORTS_ERROR","Es ist ein Fehler aufgetreten.");
// 4.2
define("REPORTS_OWN_REPORTS","Nur eigene Reports");
// 4.3.3
define("REPORTS_UPLOAD_BY","Report eingetragen durch");
// 4.4
define("REPORTS_DEPTH","Reporttiefe");
define("REPORTS_FLEET_SCORE","Flottenpunkte");
define("REPORTS_DEFENCE_SCORE","Verteidigungspunkte");
// 5.0
define("REPORTS_HOURS","Stunden");
define("REPORTS_MAX_RESULTS_HIT","Die Suchanfrage lieferte mehr als &1 Ergebnisse. Es werden nur die ersten &1 Ergebnisse dargstellt. Bitte Suchparameter anpassen um weniger Ergebnisse zu erhalten.");
define("REPORTS_OSIMULATE","Simulieren mit OSimulate");
define("REPORTS_SHOW_ONLY","Zeige nur");
define("REPORTS_SHOW_PLANETS","Planeten");
define("REPORTS_SHOW_MOONS","Monde");
define("REPORTS_OWNER","Spionageberichte von");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","OGame Galaxietool - Statistiken");
define("STATS_TBLHEAD","Statistiken");
define("STATS_RANK","Platz");
define("STATS_PLAYERNAME","Spielername");
define("STATS_SCORE","Punkte");
define("STATS_FLEET","Flotte");
define("STATS_RESEARCH","Forschung");
define("STATS_ALLYNAME","Allytag");
define("STATS_MEMBERS","Mitglieder");
define("STATS_STATUS","Status");
define("STATS_NOTHING","kein Status");
define("STATS_NAP","NAP");
define("STATS_ALLIED","Verbündet");
define("STATS_WAR","Krieg");
define("STATS_BOYCOTT","Boykott");
define("STATS_NEUTRAL","Neutral");
define("STATS_OWN","Eigene Ally");
define("STATS_WING","Wing");
define("STATS_UPDATE","Daten vom");
define("STATS_PLAYERSTATS","Spielerstatistik");
define("STATS_ALLYSTATS","Allianzstatistik");
// 4.0
define("STATS_DELETE","Eintrag entfernen");
define("STATS_CONFIRM_DELETE","Eintrag wirklich entfernen?");
define("STATS_CHANGE_PLAYER_STATUS","Spieler Status");
define("STATS_CHANGE_ALLIANCE_STATUS","Allianz Status");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","Alle Spieler der Allianz bekommen den ausgewählten Status. Ein eventuell vorhandener Status wird dabei überschrieben. Es ist aber möglich, einzelnen Spielern der Allianz danach einen anderen Status zuzuweisen.");
define("STATS_UNKNOWN","Rest");
define("STATS_DETAILS","Details für");
// 4.4
define("STATS_PLAYERSTATUS",SHOW_PLAYER_STATUS);
define("STATS_IGNORE_STATUS",SHOW_PLAYER_STATUS1);
define("STATS_ACTIVE","aktiv");
define("STATS_INACTIVE",USER_BB_INACTIVE);
define("STATS_BANNED",USER_BB_BANNED);
define("STATS_VACATION",USER_BB_VACATION);
define("STATS_NOOB",USER_BB_NOOB);
// 4.8
define("STATS_YES",SHOW_YES); // reuse SHOW definitions if applicable
define("STATS_NO",SHOW_NO);
define("STATS_SEARCH",USER_SEARCH);
define("STATS_SHOW_GRAPH","Details zur Punkteverteilung");
define("STATS_LONG_INACTIVE",USER_BB_LONGINACTIVE);
// 4.9
define("STATS_STANDARD","Standardpunkte");
define("STATS_MILITARY","Militärpunkte");
define("STATS_ECONOMY","Ökonomie");
define("STATS_HONOUR","Ehrenpunkte");
define("STATS_MILITARY_BUILD","gebautes Militär");
define("STATS_MILITARY_DESTROYED","zerstörtes Militär");
define("STATS_MILITARY_LOST","verlorenes Militär");

/*********************************************************************
* register.php
**********************************************************************/
define("REGISTER_REGISTRATE","Registrieren");
define("REGISTER_LOGINNAME","Login-Name");
define("REGISTER_PASSWORD","Passwort");
define("REGISTER_PASSWORD_CONFIRM","Passwort wiederholen");
define("REGISTER_EMAIL","E-Mail");
define("REGISTER_INGAME","Ingame-Name");
define("REGISTER_ALLYTAG","Allytag");
define("REGISTER_EMAILVERIFICATION","E-Mail-Check");
define("REGISTER_EMAILTEXT","Bitte klicke auf den folgenden Link um die Anmeldung am Galaxietool zu beenden.");
define("REGISTER_ERROR1","Der Login-Benutzername ist bereits vergeben!");
define("REGISTER_ERROR2","Fehler beim Versuch eine E-Mail abzuschicken! Bitte nimm Kontakt mit dem Serveradministrator auf.");
define("REGISTER_ERROR3","Fehler bei der Datenbankabfrage!");
define("REGISTER_INFO1","Der Account wurde erstellt.");
define("REGISTER_INFO2","Bitte klicke nun auf den Link in der E-Mail um die Anmeldung abzuschließen.");
define("REGISTER_INFO3","Account bestätigt. Jetzt muss nur noch der Admin den Account freischalten.");
define("REGISTER_BUTTON","Zurück zur Startseite");
define("REGISTER_NEW_SUBJECT","Neuer Benutzer am Galaxietool registriert");
define("REGISTER_NEW_MAILTEXT","Ein neuer Benutzer hat sich am Galaxietool registriert.");
// new 4.2
define("REGISTER_BACK","Zurück zur Startseite");
// new 4.3.5
define("REGISTER_MISSING_FIELDS","Bitte alle Felder füllen");
// new 4.8
define("REGISTER_ERROR4","E-Mail-Adresse ist nicht gültig.");
define("REGISTER_ERROR5","Passwörter stimmen nicht überein.");
define("REGISTER_PWS","Passwortstärke");
define("REGISTER_PWS0","sehr schwach");
define("REGISTER_PWS1","schwach");
define("REGISTER_PWS2","gut");
define("REGISTER_PWS3","stark");
define("REGISTER_PWS4","sehr stark");
// new 5.0
define("REGISTER_EMAIL_USED","E-Mail Adresse wird bereits verwendet");

/*********************************************************************
* lost_password.php
**********************************************************************/
define("LOSTPW_TITLE","Passwort vergessen");
define("LOSTPW_INFO2","Das neue Passwort wurde generiert und an die entsprechende E-Mail-Adresse veschickt.");
define("LOSTPW_BUTTON1","Passwort anfordern");
define("LOSTPW_BUTTON2","Zurück zur Startseite");
define("LOSTPW_LOGINNAME","Login-Name");
define("LOSTPW_EMAIL","E-Mail");
define("LOSTPW_ERROR1","Fehler bei der Datenbankabfrage!");
define("LOSTPW_ERROR2","Es wurde kein passender Eintrag gefunden!");
define("LOSTPW_ERROR3","Fehler beim Versuch eine E-Mail abzuschicken! Bitte nimm Kontakt mit dem Serveradministrator auf.");
define("LOSTPW_EMAIL_SUBJECT","Passwortanforderung");
define("LOSTPW_EMAIL_TEXT1","Hier die angeforderten Logindaten für das Galaxietool");
define("LOSTPW_EMAIL_TEXT2","Nutzername");
define("LOSTPW_EMAIL_TEXT3","Passwort");
// new 5.0
define("LOSTPW_INFO1","Du erhälst nun eine E-Mail zur Bestätigung um das Passwort zurückzusetzen.");
define("LOSTPW_CONFIRM_RESET_SUBJECT","Passwort vergessen?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","Hallo,\n\ndu hast das Zurücksetzen deines Passworts beim Galaxytool beantragt. Um ein neues Passwort zu generieren, klicke bitte auf folgenden Link:");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","OGame Galaxietool - Benutzerinformationen");
define("USERINFO_NAMES","Alle Benutzer des Tools");
define("USERINFO_DETAIL","Detaillierte Informationen über");
define("USERINFO_ERROR1","Kein Benutzer unter dieser ID bekannt!");
define("USERINFO_USERNAME","Loginname");
define("USERINFO_INGAME","Ingamename");
define("USERINFO_EMAIL","E-Mail");
define("USERINFO_ALLYTAG","Allianz");
define("USERINFO_STYLEPATH","Skin");
define("USERINFO_STATUS","Status");
define("USERINFO_ACTIVATE","Spieler freischalten");
define("USERINFO_LOGINS","Anzahl Logins");
define("USERINFO_LASTLOGIN","Letzter Login");
define("USERINFO_DATA","Informationen über eingebrachte Systeme");
define("USERINFO_NODATA","Der User hat bisher keine Daten hochgeladen!");
define("USERINFO_GALAXY","Galaxie");
define("USERINFO_SYSTEMS","Anzahl Systeme");
define("USERINFO_IP","IP Adresse");
define("USERINFO_LOGINTIME","Loginzeitpunkt");
define("USERINFO_NOLOGIN","Bisher nie eingeloggt.");
define("USERINFO_LAST_GALAXYUPDATE","Letzte Galaxieansicht eingebracht am");
define("USERINFO_LAST_PUBLIC_NOTICE","Letzte öffentliche Notiz am");
define("USERINFO_LAST_PRIVATE_NOTICE","Letzte private Notiz am");
define("USERINFO_NUMBEROF_PUBLIC_NOTICE","Anzahl öffentlicher Notizen");
define("USERINFO_NUMBEROF_PRIVATE_NOTICE","Anzahl privater Notizen");
define("USERINFO_ACTIVATED","Account aktiviert");
define("USERINFO_ACTIVATIONTEXT","Der Admin des Galaxietools hat deinen Account aktiviert.\n\nViel Spaß mit dem Galaxietool!");
// new 4.8
define("USERINFO_LAST_SUBMIT","Letzte Datenübertragung");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","OGame Galaxietool - zeitliche Statistiken"); // changed at 4.0
define("ALLYHISTORY_TBLHEAD","Zeitliche Übersicht");
define("ALLYHISTORY_PLAYERNAME","Spielername");
define("ALLYHISTORY_ALLYNAME","Allianz");
define("ALLYHISTORY_LASTMONTH","letzte 30 Tage"); // changed at 5.0
define("ALLYHISTORY_ALL_DATA","alle verfügbaren Daten"); // new 4.0
define("ALLYHISTORY_SHOW","zeige Statistik");
define("ALLYHISTORY_TIMESPAN","Zeitraum");
define("ALLYHISTORY_PROGESS","Fortschritt");
define("ALLYHISTORY_SCORE","Punkte");
define("ALLYHISTORY_FSCORE","Flottenpunkte"); // new 4.0 - osolete with 5.0
define("ALLYHISTORY_RSCORE","Forschungspunkte"); // new 4.0
define("ALLYHISTORY_MEMBER","Mitglieder"); // new 4.0
define("ALLYHISTORY_NOTHING","Keine Einträge gefunden");
define("ALLYHISTORY_DETAILS","Details");
define("ALLYHISTORY_SHOW_ADDRESS","Koordinaten");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","Spielerinformationen");
define("DETAILEDINFO_ALLYINFO_TITLE","Allianzinformationen");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","Detaillierte Informationen zum Spieler");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","Detaillierte Informationen zur Allianz");
define("DETAILEDINFO_NO_ALLIANCE","keine");
define("DETAILEDINFO_SCORE","Punktestatistik");
define("DETAILEDINFO_FLEET","Flottenstatistik");
define("DETAILEDINFO_RESEARCH","Forschungsstatistik");
define("DETAILEDINFO_RANK","Platz");
define("DETAILEDINFO_POINTS","Punkte");
define("DETAILEDINFO_KNOWN_PLANETS","bekannte Planeten");
define("DETAILEDINFO_MOONS","bekannte Monde");
define("DETAILEDINFO_PHALANX_AREA","Phalanxbereiche");
define("DETAILEDINFO_NO_PHALANX_AREA","keine Phalanxen gefunden");
define("DETAILEDINFO_NOTICES","Notizen");
define("DETAILEDINFO_NO_NOTICES","keine Notizen vorhanden");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","bekannte Allianzzugehörigkeiten");
define("DETAILEDINFO_RESOURCES_PER_HOUR","Ressourcen pro Stunde");
define("DETAILEDINFO_RESOURCES_PER_DAY","Ressourcen pro Tag");
define("DETAILEDINFO_RESOURCES_PER_WEEK","Ressourcen pro Woche");
define("DETAILEDINFO_RESOURCES_PER_MONTH","Ressourcen pro Monat (30 Tage)");
define("DETAILEDINFO_METAL","Metall");
define("DETAILEDINFO_CRYSTAL","Kristall");
define("DETAILEDINFO_DEUTERIUM","Deuterium");
define("DETAILEDINFO_UNKNOWN","unbekannt");
define("DETAILEDINFO_SCORE_DISTRIBUTION","Punkteverteilung");
// new 4.2
define("DETAILEDINFO_GENERAL","Details");
define("DETAILEDINFO_MEMBERS","Mitglieder");
define("DETAILEDINFO_GRAPHS","Diagramme");
define("DETAILEDINFO_RESOURCES","Ressourcen");
define("DETAILEDINFO_FLEET_TAB","Flotte");
define("DETAILEDINFO_TECH","Forschung");
define("DETAILEDINFO_FLEET_DETAIL","Entspricht der Summe / (Spielerdurchschnitt) aus allen verfügbaren Reports");
define("DETAILEDINFO_TECH_DETAIL","Entspricht dem Durchschnitt aller vefügbaren Spielerinformationen");
// new 4.3
define("DETAILEDINFO_PLANET_TAB",REPORTS_SHOW_PLANETS);
define("DETAILEDINFO_MOON_TAB",REPORTS_SHOW_MOONS);
// 4.7
define("DETAILEDINFO_ACTIVITIES","Aktivitäten");
define("DETAILEDINFO_NODATA",VIEW_NODATA); // reuse existing translations
define("DETAILEDINFO_ACTIVITY_DESCRIPTION","Zeige Aktivitäten von &1 im Zeitraum:");
define("DETAILEDINFO_GALAXYVIEWS","Galaxieansichten");
define("DETAILEDINFO_SCANS","Spionageaktionen");
define("DETAILEDINFO_MESSAGES","Spielernachrichten");
define("DETAILEDINFO_COMBATS","Kampfberichte");
define("DETAILEDINFO_ALLYPAGE","Allianzübersicht");
define("DETAILEDINFO_MANUAL","Manuelle Eingaben");
define("DETAILEDINFO_START","Anfang");
define("DETAILEDINFO_TO","bis");
define("DETAILEDINFO_TODAY","Heute");
define("DETAILEDINFO_DATA_RESTRICTION","eingeschränkt auf:");
define("DETAILEDINFO_WEEKDAY_WEEKEND","Wochenende");
define("DETAILEDINFO_WEEKDAY_WORKINGDAY","Wochentag");
define("DETAILEDINFO_WEEKDAY_MONDAY","Montag");
define("DETAILEDINFO_WEEKDAY_TUESDAY","Dienstag");
define("DETAILEDINFO_WEEKDAY_WEDNESDAY","Mittwoch");
define("DETAILEDINFO_WEEKDAY_THURSDAY","Donnerstag");
define("DETAILEDINFO_WEEKDAY_FRIDAY","Freitag");
define("DETAILEDINFO_WEEKDAY_SATURDAY","Samstag");
define("DETAILEDINFO_WEEKDAY_SUNDAY","Sonntag");
define("DETAILEDINFO_WEEKDAY_SHORTLENGTH",2); // number of characters to shorten week day
define("DETAILEDINFO_PLAYER_CURRENTLY_ACTIVE","Der Spieler ist derzeit aktiv");
define("DETAILEDINFO_PLAYER_MESSAGES","vorhandene Spielernachrichten");
define("DETAILEDINFO_SHOW","anzeigen");
define("DETAILEDINFO_NONE","keine vorhanden");
define("DETAILEDINFO_ENTER_MANUALLY","Erfasse weitere Onlinezeiten dieses Spielers");
define("DETAILEDINFO_PLAYER_SEEN_ON","Spieler war online am");
define("DETAILEDINFO_INSERT","Eintragen");
define("DETAILEDINFO_OGAME_SERVERTIMES","Hinweis: Alle hier erfassten Zeiten beziehen sich auf die OGame Serverzeiten!");
define("DETAILEDINFO_DAY_VIEW","24-Stunden-Ansicht");
define("DETAILEDINFO_WEEK_VIEW","Wochenansicht");
// new 4.8
define("DETAILEDINFO_HOME_PLANET","Heimatplanet");
// new 5.0
define("DETAILEDINFO_PLANETNAME","Name"); // also used for moons!
define("DETAILEDINFO_DEFENCE_SCORE","Verteidigungspunkte");
define("DETAILEDINFO_DEFENCE_SCORE_TOOLTIP","Verteidigungspunkte berechnen sich aus Flottenpunkten - Gesamtpunkte + Ökonomie + Forschung<br/>All diese Statistiken müssen aktuell sein um ein sinnvolles Ergebnis zu erhalten!");
define("DETAILEDINFO_SCORE_PER_SHIP","Punkte pro Schiff");
define("DETAILEDINFO_SHIPS","Anzahl Schiffe");
define("DETAILEDINFO_DATE_IN_FUTURE","Bitte keine Zeiten in der Zukunft erfassen.");

// new 4.2
/*********************************************************************
* administration.php
**********************************************************************/
define("ADMIN_TITLE","Administration des Galaxietools");
define("ADMIN_DISCLAMER","Achtung: Das Ausführen dieser Skripte erfolgt auf eigene Gefahr. Die meisten dieser Skripte löschen Daten unwiderruflich!");
define("ADMIN_INCONSISTENCIES","Inkonsistenzen im Galaxietool");
define("ADMIN_PLANETS","Planeten auf Position 0 oder größer als 15 löschen");
define("ADMIN_GALAXIES","Galaxien größer als &1 löschen");
define("ADMIN_PLAYERS","Entferne Spieler ohne OGame ID - führte häufig zu doppelten Spielereinträgen");
define("ADMIN_REPORTS","Spionageberichte löschen, zu denen kein Planet mehr existiert");
define("ADMIN_MISC","Sonstiges");
define("ADMIN_RESET","Reset des Galaxietools (nur Benutzertabelle und IP Tabelle bleiben erhalten!)");
define("ADMIN_OLD_PLAYERS","Spielereinträge älter als &1 Tage löschen");
define("ADMIN_OLD_REPORTS","Reports älter als &1 Tage löschen");
define("ADMIN_LOADING","Fenster erst schließen nachdem die Seite geladen wurde!");
define("ADMIN_STATUS","Status der einzelnen Anfragen");
define("ADMIN_SELECTION","Mindestens einen Eintrag auswählen");
define("ADMIN_SAFETY","Wirklich durchführen?");
define("ADMIN_DONE","fertig");
define("ADMIN_NOTBD","nichts zu tun");
// new 4.3
define("ADMIN_OLD_GALAXIES","Entferne Galaxieansichten, die älter als &1 Tage sind");
define("ADMIN_UNUSED_PLAYERS","Entferne Spieler, die in keiner Galaxieansicht mehr vorkommen");
// new 4.7
define("ADMIN_OLD_ACTIVITIES","Entferne Spieleraktivitäten, die älter als &1 Tage sind");
// new 4.8
define("ADMIN_OLD_COMBATS","Entferne Kampfberichte, die älter als &1 Tage sind");
define("ADMIN_OLD_INGAME_MSG","Entferne Spielernachrichten, die älter als &1 Tage sind");
// new 5.0
define("ADMIN_OGAME_API","Lade verfügbare Daten aus OGame ins Galaxietool");
define("ADMIN_OGAME_ALL_DATA",ALLYHISTORY_ALL_DATA);
define("ADMIN_OGAME_GALAXY_DATA",MENU_GALAXYVIEW);
define("ADMIN_OGAME_STATISTICS_DATA",MENU_STATISTICS);

// new 4.3.5
/*********************************************************************
* errorpage.php
**********************************************************************/
define("ERRORPAGE_PAGEFORWARD","Sollte der Browser keine Weiterleitung unterstützen, klicke bitte hier.");
define("ERRORPAGE_PERMISSION_DENIED","Du hast nicht die benötigten Rechte diese Seite zu betreten. Klicke hier um zurück zu gelangen.");

// new 4.7
/*********************************************************************
* fleet_movements.php
**********************************************************************/
define("FLEETS_TITLE","OGame Galaxietool - Flottenbewegungen");
define("FLEETS_ACTUAL_FLEETS","aktuelle Flottenbewegungen");
define("FLEETS_YES",SHOW_YES);
define("FLEETS_NO",SHOW_NO);
define("FLEETS_DETAILS","Flottendetails");
define("FLEETS_MISSION_EXPEDITION","Expedition");
define("FLEETS_MISSION_COLONIZATION","Kolonisieren");
define("FLEETS_MISSION_RECYCLE","Abbauen");
define("FLEETS_MISSION_TRANSPORT","Transport");
define("FLEETS_MISSION_DEPLOYMENT","Stationieren");
define("FLEETS_MISSION_ESPIONAGE","Spionage");
define("FLEETS_MISSION_ACS_DEFEND","AKS Verteidigung");
define("FLEETS_MISSION_ATTACK","Angriff");
define("FLEETS_MISSION_ACS_ATTACK","AKS Angriff");
define("FLEETS_MISSION_MOON_DESTRUCTION","Mondzerstörung");
define("FLEETS_MISSION_MISSILE_ATTACK","Raketenangriff");
define("FLEETS_NO_DATA","Keine Informationen vorhanden");
// new 5.0
define("FLEETS_FLEET","Flotte");
define("FLEETS_ALL_FLEETS","zeige alle Flottenbewegungen");

/*********************************************************************
* parser_combat_reports.inc.php
**********************************************************************/
define("COMBAT_REPORT_OUDATED_GALAXYVIEW","Die Galaxieansichten sind veraltet. Bitte zuerst die Galaxieansichten der Angreifer und Verteidiger besuchen.");

/*********************************************************************
* messages.php
**********************************************************************/
define("MESSAGES_TITLE","OGame Galaxietool - OGame Nachrichten");
define("MESSAGES_PLAYERNAME","Spielername");
define("MESSAGES_SUBJECT","Betreff");
define("MESSAGES_DATE","Datum");
define("MESSAGES_FILTER","Filter");
define("MESSAGES_DELETE","Nachricht löschen");
define("MESSAGES_PUBLISH_DETAIL","Die Nachricht veröffentlichen, indem der Nachrichteninhalt an die Notizen des Spielers angefügt wird.");
define("MESSAGES_PUBLISH_HEADER","&sender hat &recipient am &date folgende Nachricht gesendet:\n\n &message"); // &sender, &recipient, &date, &message replaced at runtime
define("MESSAGES_PLAYER_FILTER","Nachrichten von Spieler:");
// new 5.0
define("MESSAGES_CONTENT","Inhalt");

/*********************************************************************
* combat_reports.php
**********************************************************************/
define("COMBATS_TITLE","OGame Galaxietool - Kampfberichte");
define("COMBATS_ATTACKER","Angreifer");
define("COMBATS_DEFENDER","Verteidiger");
define("COMBATS_DATE","Datum");
define("COMBATS_OWNER","Besitzer");
define("COMBATS_WINNER","Gewinner");
define("COMBATS_COMBATREPORT","Kampfbericht");
define("COMBATS_COMBAT_AT","Schlacht um");
define("COMBATS_LOST_UNITS","Einheiten verloren");
define("COMBATS_LOOT","Beute");
define("COMBATS_DEBRIS","Trümmerfeld");
define("COMBATS_AND","und");
define("COMBATS_PUBLISH","Kampfbericht veröffentlichen");
define("COMBATS_UNPUBLISH","Kampfberichtveröffentlichung zurücknehmen (wieder auf privat stellen)");
define("COMBATS_DELETE","Kampfbericht löschen");
define("COMBATS_CHECK_ALL","Alle auswählen");
define("COMBATS_UNCHECK_ALL","Alle abwählen");
define("COMBATS_WITH_SELECTED","Mit Auswahl");
define("COMBATS_PUBLIC_REPORTS","Öffentliche KBs");
define("COMBATS_YES",SHOW_YES); // no need for translation!
define("COMBATS_NO",SHOW_NO); // no need for translation!
define("COMBATS_SEARCH_OPTIONS","Suchparameter");
define("COMBATS_SEARCH","Suchen");
define("COMBATS_RESET","Zurücksetzen");
// 4.8
define("COMBATS_COORDINATES",USER_BB_COORDINATES);
define("COMBATS_INVALID_GALAXY_ENTERED","Ungültige Galaxie angegeben");
define("COMBATS_INVALID_SYSTEM_ENTERED","Ungültiges System angegeben");
define("COMBATS_INVALID_PLANET_ENTERED","Ungültigen Planeten angegeben");
define("COMBATS_GALAXY_FROM_TO","Galaxie");
define("COMBATS_SYSTEM_FROM_TO","System");
define("COMBATS_PLANET_FROM_TO","Planet");
define("COMBATS_APPLY",GENERAL_APPLY);
define("COMBATS_COMBAT_SUMMARY","Kampfberichtszusammenfassung");
define("COMBATS_DOWNLOAD_CSV","Als CSV Datei herunterladen");

/*********************************************************************
* report_archive.php
**********************************************************************/
define("REPORT_ARCHIVE_TITLE","Scanberichtsarchiv");
define("REPORT_ARCHIVE_COORDINATES","Koordinaten");
define("REPORT_ARCHIVE_SCANTIME","Scanzeitpunkt");
define("REPORT_ARCHIVE_DELETE","Einträge entfernen");
define("REPORT_ARCHIVE_CONFIRM_DELETE","Einträge wirklich entfernen?");
define("REPORT_ARCHIVE_GALAXY","Galaxie");
define("REPORT_ARCHIVE_SYSTEM","System");
define("REPORT_ARCHIVE_PLANET","Planet");
define("REPORT_ARCHIVE_MOON","Mond");
define("REPORT_ARCHIVE_DETAILS","Details");
define("REPORT_ARCHIVE_RESOURCES",DETAILEDINFO_RESOURCES);
define("REPORT_ARCHIVE_HEADER_RESOURCES",REPORTS_RESOURCES);
define("REPORT_ARCHIVE_DETAILS_FOR","Scanberichtsarchiv für &1 [&2] (&3)"); // &1 = planetname; &2 = coordinates; &3 = playername
define("REPORT_ARCHIVE_FLEET_CARGO","Ladakapazität der Flotte");
define("REPORT_ARCHIVE_IRAK_RANGE","Interplanetarraketenreichweite");
define("REPORT_ARCHIVE_CHART_TYPE","Diagrammart");

/*********************************************************************
* install.php
**********************************************************************/
define("INSTALL_TITLE", "Installation der Galaxietool Version");
define("INSTALL_PROGRESS", "Installationsfortschritt");
define("INSTALL_STEP", "Schritt");
define("INSTALL_CONTINUE", "Weiter");
define("INSTALL_VALIDATE", "Prüfen");
define("INSTALL_STEP1", "Willkommen");
define("INSTALL_STEP2", "Schreibbarkeitsprüfung");
define("INSTALL_STEP3", "Datenbankeinstellungen");
define("INSTALL_STEP4", "OGame Einstellungen");
define("INSTALL_STEP5", "Galaxietool Einstellungen");
define("INSTALL_STEP6", "Admin Passwort");
define("INSTALL_STEP7", "Installation des Galaxietools");
define("INSTALL_STEP8", "Abschluss der Installation"); // check writable; delete install and update.php and redirect to index.php
define("INSTALL_FILE_DELETE_CHECK","Bitte lösche die install.php und update.php von deinem Webserver.");

define("INSTALL_STEP1_PHP_FAILED", "Deine PHP Version &1 ist nicht kompatibel zu dieser Galaxietoolversion");
define("INSTALL_STEP1_FOPEN_FAILED", "Deine PHP Version erlaubt nicht das Öffnen anderer Webseiten mit dem FOPEN() Befehl. Diese Funktionalität wird benötigt um das OGame API zu nutzen.");
define("INSTALL_STEP1_WELCOME", "Willkommen bei der Installation des Galaxietools. Du wirst schrittweise durch die Installation geführt werden und bei einzelnen Schritten gibt es Links zu weiterführenden Informationen.");

define("INSTALL_STEP2_DESCRIPTION","Bitte stell sicher, dass die config.php und attributes.php Dateien durch den Webserver beschreibbar sind.");
define("INSTALL_STEP2_DESCRIPTION2","Solltest du nicht genau wissen wie du die Dateien oder das Verzeichnis fürs Schreiben freigeben kannst, schau bitte hier: &1");
define("INSTALL_STEP2_FILE_NOT_WRITEABLE", "Datei ist nicht beschreibbar");

define("INSTALL_STEP3_SERVER", "Datenbankserver");
define("INSTALL_STEP3_USERNAME", L_USERNAME);
define("INSTALL_STEP3_PASSWORD", L_PASSWORD);
define("INSTALL_STEP3_DBNAME", "Datenbankname");
define("INSTALL_STEP3_PREFIX", "Prefix für Tabellennamen");
define("INSTALL_STEP3_ENTER_PREFIX", "z.B. MeinTool1_");
define("INSTALL_STEP3_ENTER_SERVER", "Server Adresse, frage deinen Systemadministrator falls nötig. Typischerweise ist localhost der korrekte Wert.");
define("INSTALL_STEP3_ENTER_USERNAME", "Nutzername für den Datenbankzugang");
define("INSTALL_STEP3_ENTER_PASSWORD", "Passwort für den Datenbankzugang");
define("INSTALL_STEP3_ENTER_DBNAME", "Name der Datenbank, in die das Galaxietool installiert werden soll. (muss existieren)");
define("INSTALL_STEP3_CONNECT_FAILED", "Verbindung zum Datenbankserver konnte nicht hergestellt werden.");
define("INSTALL_STEP3_DB_FAILED", "Datenbank &1 nicht gefunden");
define("INSTALL_STEP3_MYSQL_VERSION_FAILED", "MySQL Version &1 ist nicht kompatibel zu dieser Galaxietoolversion");

define("INSTALL_STEP4_URL","OGame URL");
define("OGAME_URL_DETAILS","Bitte füge hier eine Internetadresse deines OGame Servers ein. Dazu kannst du die Adresse einer beliebigen Seite verwenden, sobald du bei OGame eingeloggt bist. Basierend auf dieser Adresse wird das Galaxietool die OGame API Adresse ableiten, mit der das Galaxietool auch ohne die Galaxietoolbar gefüllt werden kann. Das API wurde mit OGame Version 4.1 eingeführt.");
define("INSTALL_STEP4_UNIVERSE","OGame Universum");
define("INSTALL_STEP4_DEF_TO_DEBRIS","Verteidigung geht ins Trümmerfeld");
define("INSTALL_STEP4_DEBRIS_RATE","Trümmerfeldrate");
define("INSTALL_STEP4_SPEED_RATE","Geschwindigkeitsfaktor");
define("INSTALL_STEP4_ENTER_UNIVERSE","Bitte trage hier den Namen es Universums ein. Bei älteren Unis ist das nur eine Zahl. (Achte auf Groß- und Kleinschreibung)");
define("INSTALL_STEP4_UNIVERSE_MISSING","Das Universum fehlt");
define("INSTALL_STEP4_ENTER_URL","Bitte trage die URL des deines OGame Servers ein");
define("INSTALL_STEP4_URL_MISSING","Die OGame URL fehlt");
define("INSTALL_STEP4_URL_CHECK_FAILED","Konnte die OGame APIs nicht finden unter &1");
// 5.1
define("INSTALL_STEP4_GETSETTINGS","Einstellungen laden");

define("INSTALL_STEP5_TOOLNAME","Galaxietool Name");
define("INSTALL_STEP5_ENTER_TOOLNAME","Dieser Name wird auf der Startseite deines Galaxietools zu sehen sein.");
define("INSTALL_STEP5_LANGUAGE","Standardsprache");
define("INSTALL_STEP5_EMAIL_TO","E-Mail-Empfänger");
define("INSTALL_STEP5_ENTER_EMAIL_TO","An diese E-Mail-Adresse werden Nachrichten über neu registrierte Mitglieder geschickt.");
define("INSTALL_STEP5_EMAIL_FROM","Emailabsender");
define("INSTALL_STEP5_ENTER_EMAIL_FROM","Diese E-Mail-Adresse wird als Absender aller E-Mails des Galaxietools angezeigt");
define("INSTALL_STEP5_USE_PHPMAILER","Nutze PHPMailer");
define("INSTALL_STEP5_MAXSHOUTS","Maximale Anzahl von Einträgen in der Nachrichtenbox");
define("INSTALL_STEP5_ENTER_USE_PHPMAILER","Nutze den PHPMailer falls dein Server keine Unterstützung für das Versenden von E-Mails via PHP hat.");
define("INSTALL_PHPMAILER_HOST","SMPT Host");
define("INSTALL_PHPMAILER_HOST_EXAMPLE","z.B. smtp.provider.de");
define("INSTALL_PHPMAILER_USER","SMPT Nutzername");
define("INSTALL_PHPMAILER_USER_EXAMPLE","z.B. user@provider.de");
define("INSTALL_PHPMAILER_PASS","SMPT Passwort");
define("INSTALL_PHPMAILER_SECURE","Authentifizierungsmethode, z.B. ssl");
define("INSTALL_PHPMAILER_PORT","SMTP Port");

define("INSTALL_STEP6_INTRO","Bitte lege ein Passwort für den <strong>admin</strong> Account fest, mit dem du dich nach der Installation am Galaxietool anmelden musst.");

define("INSTALL_STEP7_CONFIG","Konfigurationsdatei wurde erzeugt");
define("INSTALL_STEP7_CONFIG_FAILED","Konfigurationsdatei wurde nicht erzeugt");
define("INSTALL_STEP7_ATTRIBUTES","Attributdatei wurde erzeugt");
define("INSTALL_STEP7_ATTRIBUTES_FAILED","Attributdatei wurde nicht erzeugt");
define("INSTALL_STEP7_CREATED_TABLES","Datenbanktabellen wurde erzeugt");

define("INSTALL_STEP8_INTRO","Du hast die Installation des Galaxietools erfolgreich abgeschlossen!");
define("INSTALL_STEP8_LOAD_DATA","Importieren der OGame Daten via OGame API ...");
define("INSTALL_STEP8_LOAD_DATA_FINISHED","Import der OGame Daten abgeschlossen");
define("INSTALL_STEP8_DELETE_FILE","Du solltest jetzt die Installationsdateien install.php sowie update.php von deinem Webserver löschen.");
define("INSTALL_STEP8_LOGON","Bitte melde dich nun mit dem <strong>admin</strong> Nutzer und dem zuvor festgelegten Passwort an.");

/*********************************************************************
* update.php
**********************************************************************/
define("UPDATE_START","Beginne das Update auf Version &1");
define("UPDATE_STEP_DONE","Erledigt");
define("UPDATE_TITLE", "Galaxietoolupdate für Version");
define("UPDATE_STEP1_WELCOME", "Willkommen beim Updateassistenten für das Galaxietool. Du wirst ab hier durch das Update des Galaxietools geleitet.");
define("UPDATE_STEP1_BACKUP_FILES", "Erstelle als erstes eine Sicherheitskopie des <strong>config</strong> Verzeichnisses! Im Falle von Fehlern musst du diese jederzeit wiederherstellen können.");
define("UPDATE_STEP1_BACKUP_DB", "Danach erstelle eine <a href=\"http://doku.wpde.org/Backup_der_Datenbank/phpMyAdmin\">Sicherheitskopie</a> der Datenbankdaten.");
define("UPDATE_STEP1_PROCEED", "Nachdem alle Sicherheitskopien erzeugt wurden, kann das Update fortgesetzt werden.");
define("UPDATE_STEP1", INSTALL_STEP1);
define("UPDATE_STEP2", INSTALL_STEP5);
define("UPDATE_STEP2_OLD_VERSION", "Vorherige Galaxietool Version");
define("UPDATE_STEP3", "Update des Galaxietools");
define("UPDATE_STEP3_UPDATE_RUNNING", "Update läuft. Bitte warten...");
define("UPDATE_STEP4", "Update abschließen");
define("UPDATE_STEP4_INTRO","Du hast das Update erfolgreich abgeschlossen!");
define("UPDATE_STEP4_UPDATE_DONE","Alle Updateschritte abgeschlossen.");
define("UPDATE_FAILED","Update fehlgeschlagen.");

?>