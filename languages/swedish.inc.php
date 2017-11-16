<?php
/*
 * defines the characters used in OGame to indicate player status
 */
define("PLAYER_BANNED","b");
define("PLAYER_VACATION_MODE","s");
define("PLAYER_NOOB","k");
define("PLAYER_INACTIVE","i");
define("PLAYER_LONG_INACTIVE","I");
define("PLAYER_OUTLAW","o");

/*********************************************************************/
/***************************** public ********************************/
/*********************************************************************/
//index.php
define("L_USERNAME","Användarnamn");
define("L_PASSWORD","Lösenord");
define("L_LOGINFAILURE","Felaktigt användarnamn eller lösenord eller så är ditt konto inte aktiverat än.");
define("L_TOKENFAILURE","Din inloggningsnyckel är felaktig eller så är dit konto inte aktiverat.");
define("L_LOGINTEXT","Vänligen logga in.");
define("L_LANGUAGE","Tillgängliga språk:");
define("L_TIMEOUT","Sessionen är ej längre giltig!");
define("L_REGISTER","Registrera");
define("L_PWLOST","glömt lösenord");
define("INDEX_TITLE","Översikt");
define("INDEX_INFO","Information");
define("INDEX_ENTRIES","Totalt antal system");
define("INDEX_ENTRIES_LASTWEEK","Nya system senaste veckan");
define("INDEX_ENTRIES_TO_OLD","System äldre än en månad");
define("INDEX_REGISTERED_USERS","Registrerade användare");
define("INDEX_PAGEFORWARD","Om din webbläsare inte stöder vidarebefordring, klicka här");
define("INDEX_NOTICES","Notiser");
define("INDEX_PLAYERS","Spelarstatistik");
define("INDEX_ALLIES","Alliansstatistik");
define("INDEX_REPORTS","Spionagerapporter");
define("INDEX_VERSION","Senaste version tillgänglig för nedladdning");
define("INDEX_LATEST_VERSION","Ingen nyare version tillgänglig");
define("INDEX_SHOUTBOX","Shoutbox");
define("INDEX_NOENTRY","Inga shouts än");
define("INDEX_COMMENT","Ditt Shout");
define("INDEX_INSERT","Lägg till");
define("INDEX_UMOD","Spelare i semesterläge");
define("INDEX_NO_MOONS","Antal månar");
define("INDEX_NO_EMPTY_SYSTEMS","Antal tomma system");
define("INDEX_NO_FULL_SYSTEMS","Antal fulla system");
define("INDEX_NO_TARGETS","Antal möjliga mål");
// 4.0
define("INDEX_USERINFO","Användarantal");
define("INDEX_ONLINE","Inloggade nu");
define("INDEX_TODAY","Inloggade idag");
define("INDEX_ALL","Totalt antal inloggningar");
// 4.3.7
define("GENERAL_LOAD_FORM","Ladda data");
define("GENERAL_SAVE_FORM","Spara data");
define("GENERAL_SAVE_AS_TEXT","Spara som");
define("GENERAL_SAVE","Spara");
// 4.8
define("INDEX_USERMANAGEMENT","Aktiveringsöversikt");
define("INDEX_NEEDADMIN","Konton att aktivera");
define("INDEX_NEEDEMAIL","Ej aktiverade konton");
define("INDEX_TOOLBAR_INFO","Galaxverktyg plugin information");
define("INDEX_TOOLBAR_URL","Galaxverktyg URL");
define("INDEX_TOOLBAR_VERSION_REQUIRED","Kräver lägst Galaxverktyg-plugin version ");
define("INDEX_TOOLBAR_INSTALL_GUIDE","Installationsguide för plugin");
define("INDEX_TOOLBAR_TOKEN","Login nyckel");
define("INDEX_TOOLBAR_NEW_TOKEN","Skapa ny nyckel");
define("INDEX_PLAYERS_WITH_N_PLANETS","Spelare med fler än &1 planeter");
define("INDEX_GETTING_STARTED","Kom igång med Galaxverktyget");
define("INDEX_GETTING_STARTED1","Välkommen till Galaxverktyget!");
define("INDEX_GETTING_STARTED2","Galaxverktyget hjälper dig analysera vad som händer i ditt OGame universum &1");
define("INDEX_GETTING_STARTED3","Innan du kan analysera data behöver du importera den. Det gör du med ett plugin &1 till webbläsaren FireFox.");
define("INDEX_GETTING_STARTED4","Efter pluginet installerats spelar du OGame som vanligt, du kommer att se ett litet fönster så fort data skickas till ditt Galaxverktyg.");
define("INDEX_GETTING_STARTED5","När pluginet skickat data till ditt Galaxverktyg kan du börja analysera informationen, till exempel var spelare har sina kolonier, hur många kolonier en spelare har, titta på rapporter eller när spelare är mest aktiva.");
define("INDEX_GETTING_STARTED6","Men det kommer också att hjälpa dig att analysera hur du utvecklas i jämförelse med dina konkurrenter eller genom att analysera dina krigsrapporter för att se hur mycket du plundrade under de senaste dagarna eller veckorna.");
define("INDEX_GETTING_WIKIPAGE","Det finns många fler funktioner i Galaxverktyget.");
define("INDEX_GETTING_WIKIPAGE2","Läs mer om dem på vår wiki.");
define("INDEX_GETTING_BOARD","För feedback eller idéer kan du använda vårt forum:");
define("INDEX_GETTING_CHAT1","Eller besök oss på chatten:");
define("INDEX_GETTING_CHAT2","Vi är inte online 24/7, så ha tålamod.");
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
define("GENERAL_APPLY","Tillämpa");
define("STARTPAGE_GALAXYTOOL_DESCR","<em>Galaxytool</em> is a tool for the browser game OGame.");
define("GENERAL_OVERWRITE","Overwrite duplicate entry");
define("GENERAL_OVERWRITE_QUESTION","Overwrite?");
define("INDEX_OWN_LOGINS","Your logins");
define("GENERAL_OPEN_IN_NEW_WINDOW","Öppna länk i nytt fönster");
// 5.1
define("GENERAL_UNIT_OF_MEASURE_DAYS","Days");

/*********************************************************************/
/***************************** internal ******************************/
/*********************************************************************/
// index.php
define("PROGRAM_NAME","OGame Galaxverktyg");
define("SHORTNAME","Galaxverktyg");
define("BACK_INDEX","Tillbaka till huvudsidan");
define("UNIVERSE","Universum");

// search
define("MENU_INFO_LINKS","Information");
define("MENU_PAGE","Översikt");
define("MENU_DB_SEARCH","Sök i databasen");
define("MENU_DB_NOTICES","Sök i notiser");
define("MENU_DB_REPORTS","Sök i rapporter");
define("MENU_GALAXYVIEW","Titta på galaxen");
define("MENU_STATISTICS","Statistik");
define("MENU_ALLYHISTORY","Allianshistoria");
// 4.7
define("MENU_FLEET_MOVEMENTS","Flottrörelser");
define("MENU_COMBAT_REPORTS","Krigsrapporter");
define("MENU_MESSAGES","Spelarmeddelanden");

// insert / change
define("MENU_OPTION_LINKS","Inställningar");
define("MENU_DB_REFRESH","Lägg till i databasen");
define("MENU_NOTICES","Notiser");
define("MENU_DB_STATUS","Status för Databasen");
define("MENU_USEROPTIONS","Hantera användare");
define("MENU_USEROPTIONS2","Användarinställningar");
define("MENU_USEROPTIONS3","Användarinformation");
// 4.2
define("MENU_ADMIN","Administration");
// 4.3.3
define("MENU_LOGOUT","Logout");

// Stuff
define("MENU_STUFF","Övrigt");
define("MENU_FORUM_THREAD","Utvecklarforum");
define("MENU_DOWNLOADPAGE","Nedladdningssida");
define("MENU_LANGUAGE","Språk");
define("MENU_HELP","Hjälp");
// 4.0
define("MENU_TOOLOPTIONS","Inställningar för Galaxverktyget");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1"," blev inlagd i databasen");
define("PARSER_ERROR1","Fel vid försök att införa följande koordinater:");
define("PARSER_ERROR2","Kan inte hitta databasen!");
define("PARSER_ERROR3","Kan inte hitta databasservern!");
define("PARSER_WRONG_UNIVERSE","Fel Universum - Aktuell: \"&1\" förväntad: \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","OGame Galaxverktyg - Söksida");
define("SHOW_SEARCH","Sök i databasen");
define("SHOW_ALLYSYMBOL","Allianstag");
define("SHOW_PLAYERNAME","Spelarnamn");
define("SHOW_MOONS","Endast planeter med måne");
define("SHOW_NOTICES","Endast planeter med notiser");
define("SHOW_COLONIES","Endast platser lediga för kolonisering");
define("SHOW_YES","Ja");
define("SHOW_NO","Nej");
define("SHOW_SEARCHRANGE","Spann");
define("SHOW_SEARCH_IN","Sök i galax");
define("SHOW_FROM_SYSTEM","Från system");
define("SHOW_FROM_PLANET","Från planetposition");
define("SHOW_TO","till");
define("SHOW_DESCRIPTION","Du kan använda wildcards * för spelare och alliansnamn så att du kan hitta alla spelare med &quot;namn&quot; i sitt namn.<br />Fyll endast i de fält du vill söka i.");
define("SHOW_SORT_BY","Sortera efter");
define("SHOW_GALASYSTEM","Galax/System");
define("SHOW_ALLYNAME","Alliansnamn");
define("SHOW_SEARCHBUTTON","Sök");
define("SHOW_ADDRESS","Koordinater");
define("SHOW_ALLYSORT","Allians");
define("SHOW_PLANET","Planetnamn");
define("SHOW_STATUS","Status");
define("SHOW_CURRENTNESS","Senast Uppdaterad");
define("SHOW_PLAYER_STATUS","Spelarstatus");
define("SHOW_PLAYER_STATUS1","Alla");
define("SHOW_PLAYER_STATUS2","Möjliga mål");
define("SHOW_PLAYER_STATUS3","Inaktiva");
define("SHOW_HITS","Träffar");
define("SHOW_OF","Av");
define("SHOW_ASC","Stigande");
define("SHOW_DESC","Fallande");
define("SHOW_RESULTS","Träffar per sida");
define("SHOW_MOON","Måne");
define("SHOW_UKMOONSIZE","Okänd");
define("SHOW_DF","VF");
define("SHOW_DF_LONG","Vrakfält");
define("SHOW_METAL","M");
define("SHOW_METAL_LONG","Metall");
define("SHOW_CRYSTAL","K");
define("SHOW_CRYSTAL_LONG","Kristall");
define("SHOW_BOTH","Båda tillsammans");
define("SHOW_AT_LEAST","(Minst)");
define("SHOW_DATE","Datum");
define("SHOW_DATE_0","ignorera");
define("SHOW_DATE_1","äldre än");
define("SHOW_DATE_2","nyare än");
define("SHOW_RANK","Rank");
define("SHOW_FRANK","Flottrank");
define("SHOW_MEMBERS","Medlemmar");
define("SHOW_NOTRANKED","Inte bland de första 1500.");
define("SHOW_NOTICERES","Notiser");
define("SHOW_REPORTS","Endast planeter med rapporter");
define("SHOW_REPORTS_SHORT","Rapporter");
define("SHOW_NOTHING","Hittade inga poster");
define("SHOW_ALLIANCE_STATUS","Alliansstatus");
define("SHOW_NO_STATUS","ingen Status");
define("SHOW_NAP","NAP");
define("SHOW_ALLIED","Allierad");
define("SHOW_WAR","Krig");
define("SHOW_BOYCOTT","Bojkott");
define("SHOW_NEUTRAL","Neutral");
define("SHOW_OWN","Egen Allians");
define("SHOW_WING","Vinge");
// obsolete with 5.0
define("SHOW_EXT_OPTIONS1","Visa fler sökalternativ för spann, rank, datum eller vrakfältssökning.");
define("SHOW_EXT_OPTIONS2","Visa fler sökalternativ för kolonier, månar, rapporter, notiser, spelarstatus eller diplomatisk status.");
define("SHOW_EXT_OPTIONS3","Visa fler sökalternativ för sortering av sökresultat.");
// new 5.0
define("SHOW_EXTENDED","advanced search");
define("SHOW_MOON_SELECTION","Planet with moon");
define("SHOW_REPORT_SELECTION","Planet with report");
define("SHOW_FILTER_BY","Exclude from the list");
define("SHOW_FILTER_NONE","inga");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Show players without score changes within the last few days");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","OGame Galaxverktyg - Statussida");
define("STATUS_DB_STATUS","Status för Databasen");
define("STATUS_COLOR","Färg");
define("STATUS_AGE1","Post 1 dag gammal.");
define("STATUS_AGE2","Post 2 - 4 dagar gammal.");
define("STATUS_AGE3","Post 4 - 7 dagar gammal.");
define("STATUS_AGE4","Post 1 - 2 veckor gammal.");
define("STATUS_AGE5","Post 2 - 4 veckor gammal.");
define("STATUS_AGE6","Post äldre än 1 månad!");
define("STATUS_AGE7","Inga poster tillgängliga.");
define("STATUS_ON","den");
define("STYLES_COLOR1","Färg1");
define("STYLES_COLOR2","Färg2");
define("STYLES_COLOR3","Färg3");
define("STYLES_COLOR4","Färg4");
define("STYLES_COLOR5","Färg5");
define("STYLES_COLOR6","Färg6");
define("STYLES_COLOR7","Färg7");
// 4.8
define("STATUS_DB_LEGEND","Förklaring");
define("STATUS_GALAXY","Galaxöversikt");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","Hantering av användare");
define("USER_NAMES","Användare");
define("USER_ERROR","Fel");
define("USER_NEWUSER","Ny Användare");
define("USER_OPTIONS","Alternativ");
define("USER_USERNAME","Användarnamn");
define("USER_PASSWORD","Lösenord");
define("USER_PASSWORD_CONFIRM","Bekräfta Lösenord");
define("USER_GALAXY","Galax");
define("USER_SEARCH","Söka");
define("USER_INSERT","Lägga till");
define("USER_DELETE","Radera");
define("USER_DELETE_ENTRY","Vill du radera användaren? ");
define("USER_STATUS","Se statistik");
define("USER_STYLES","Modifiera layout");
define("USER_SUBMIT","Skicka in");
define("USER_RESET","Återställ");
define("USER_YES","Ja");
define("USER_NO","Nej");
define("USER_STYLEPATH","Sökväg till styles.css");
define("USER_PROBES","Se/Skicka in spionagerapporter");
define("USER_EMAIL","Email");
define("USER_ERROR1","Fel lösenord eller ogiltig email.");
define("USER_ERROR2","Ogiltig email.");
define("USER_INGAME","Spelarnamn");
define("USER_ALLYTAG","Allianstag");
define("USER_ALLYHISTORY","Se/Skicka in Allianshistoria");
define("USER_DIPLOMATIC","Ändra diplomatisk status");
define("USER_STATSPAGE","Antal rader på statistiksidan");
define("USER_LINKS","Länkar");
define("USER_LINKS2","Format:<br>text;url<br>text2;url2<br>text3;url3");
define("USER_EXPORT_TITLE","Exportfärger (BB Koder)");
define("USER_BB_COORDINATES","Koordinater");
define("USER_BB_MOON","Måne");
define("USER_BB_DEBRIS","Vrakfält");
define("USER_BB_ALLY","Alliansnamn");
define("USER_BB_ALLYDETAILS","Alliansdetaljer");
define("USER_BB_PLAYERNAME","Spelarnamn");
define("USER_BB_BANNED","Bannad");
define("USER_BB_VACATION","Semesterläge");
define("USER_BB_NOOB","Nybörjare");
define("USER_BB_INACTIVE","Inaktiv");
define("USER_BB_LONGINACTIVE","Länge inaktiv");
// new with 4.7
define("USER_DELETION","Borttagning");
define("USER_FLEETINFO",MENU_FLEET_MOVEMENTS);
define("USER_ACTIVITIES","Spelar aktivitet");
define("USER_MAINTENANCE","Galaxverktyg underhåll");
define("USER_MANAGEMENT",MENU_USEROPTIONS);
define("USER_DELETE_MY_COMBAT_REPORTS","Radera mina krigsrapporter");
define("USER_DELETE_MY_MESSAGES","Radera mina meddelanden");
define("USER_DELETE_MY_FLEETMOVES","Radera mina flottrörelser");
// 4.8
define("USER_DELETE_MY_COMBAT_REPORTS_LIMITED","Radera mina krigsrapporter äldre än &1 dagar");
define("USER_DELETE_MY_MESSAGES_LIMITED","Radera mina meddelanden äldre än &1 dagar");
define("USER_TABLE_ENTRIES","Antalet sökresultat per sida");
// 5.0
define("USER_EXISTS","User already exists");
define("USER_BB_OUTLAW","Outlaw");
define("USER_INVALID_URL","URL &1 seems to be invalid - URL will be ignored");

/*********************************************************************
* galaxyview.php
*********************************************************************/
define("VIEW_TITLE","OGame Galaxverktyg - Detaljer");
define("VIEW_NODATA","Ingen data tillgänglig.");
define("VIEW_GALAXY","Galax");
define("VIEW_SYSTEM","System");
define("VIEW_POSITION","Pos.");
define("VIEW_PLANET","Planet");
define("VIEW_MOON","Måne");
define("VIEW_TF","VF");
define("VIEW_PLAYER","Spelare");
define("VIEW_PLAYER_ADD","(Rank / Status)");
define("VIEW_ALLY","Allians");
define("VIEW_ALLY_ADD","(Rank / Medlem)");
define("VIEW_METAL","M");
define("VIEW_CRYSTAL","K");
define("VIEW_COLONISED","Befolkade planeter");
define("VIEW_UKMOONSIZE","okänd");
define("VIEW_BACK","tillbaka");
define("VIEW_NOTICE","Notiser");
define("VIEW_REPORTS","Rapporter");
define("VIEW_MOONPHALANX","Följande månar kan skanna det här systemet");
define("VIEW_NOMOONS","Inga månar med radarstation hittade");
define("VIEW_IRAKS","Följande planeter kan nå det här systemet med interplanetära missiler");
define("VIEW_NOIRAKS","Inga interplanetära missiler hittade");
// 4.0
define("VIEW_MOON_DESTROY_CHANCE","Chans att förstöra en måne");
define("VIEW_CHANCE_WITH_ONE","Chans med en dödsstjärna");
define("VIEW_CHANCE_WITH_N","Chans med ");
define("VIEW_DEATH_STARS","dödsstjärnor");
define("VIEW_DS_DESTROY_CHANCE","Chans att förlora dödsstjärnan(orna)");
define("VIEW_TOP","Topp");
// new 4.3.5
define("VIEW_GO","Visa");
// new 5.0
define("VIEW_DIAMETER","Diameter");

/*********************************************************************
* change_password.php
**********************************************************************/
define("PW_TITLE","OGame Galaxverktyg - ändra lösenord");
define("OLD_PASSWORD","Gammalt lösenord");
define("NEW_PASSWORD","Nytt lösenord");
define("CONFIRM_NEW_PASSWORD","Bekräfta nytt lösenord");
define("PW_MISMATCH","Lösenorden matchade inte!");
define("PW_ERROR","Det gamla lösenordet var fel!");
define("UPDATE_DONE","Uppdatering lyckad.");
// new 4.2
define("TIMEZONE_OFFSET","Tidsskillnad mot server");
// new 4.3
define("DELETE_ACCOUNT","Radera kontot");
define("DELETE_ACCOUNT_SAFETY_REQUEST","Vill du verkligen radera kontot?");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","Rättigheter");
define("CH_PASSWD_ADMIN","Admin");
// new 4.7
define("TIMEZONE_OGAME_OFFSET","Tidszonen är ställd mot OGame server");
// new 4.8
define("CH_PASSWD_USER_LANGUAGE","Ändra språk efter inloggning");
define("CH_PASSWD_USER_LANGUAGE_NO_CHANGE","Ingen förändring");
define("CH_PASSWD_EXPAND","Expanderad");
define("CH_PASSWD_COLLAPSE","Komprimerad");
define("CH_PASSWD_HIDDEN","Gömd");
define("CH_PASSWD_GETTING_STARTED","Visa kom igång information efter inloggning");
define("CH_PASSWD_PLUGIN","Visa plugin information efter inloggning");

/*********************************************************************
* notices.php
**********************************************************************/
define("NOTICE_TITLE","OGame Galaxverktyg - Notiser");
define("NOTICE_HEADER","editera notis");
define("NOTICE_HEADER2","Editera egna notiser");
define("NOTICE_PUBLIC","Tillgänglig för andra?");
define("NOTICE_YES","ja");
define("NOTICE_NO","nej");
define("NOTICE_TEXT","Notistext");
define("NOTICE_SAVE","Spara");
define("NOTICE_DELETED","Post raderad");
define("NOTICE_SAVED","Post sparad.");
define("NOTICE_RESULTS","Alla resultat");
define("NOTICE_USER","Användare");
define("NOTICE_DATE","Datum");
define("NOTICE_EDIT","Editera");
define("NOTICE_DELETE","Radera");
define("NOTICE_NEW","Skapa en egen post");
define("NOTICE_NOTPUBLIC","Notis ej publik.");
define("NOTICE_ALL","alla");
define("NOTICE_NONE",SHOW_FILTER_NONE);
define("NOTICE_SEARCH","Sök i Notiser");
define("NOTICE_SEARCH_SHORT","Sök");
define("NOTICE_HITS","Träffar");
define("NOTICE_SHOWRESULTS","Träffar per sida");
define("NOTICE_OF","av");
define("NOTICE_NOTHING","Inga poster hittade");
// 4.0
define("NOTICE_CHARS","Tecken");
define("NOTICE_PLAYERNAME","Spelare");
define("NOTICE_SHOWALL","Visa alla notiser");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","OGame Galaxverktyg - Spionagerapporter");
define("REPORTS_RESOURCES","Resurser");
define("REPORTS_FLEET","Flottor");
define("REPORTS_DEFENCE","Försvar");
define("REPORTS_BUILDINGS","Byggnader");
define("REPORTS_TECHNOLOGY","Forskning");
define("REPORTS_MOON","Måne");
define("REPORTS_SEARCH","Sök i spionagerapporter");
define("REPORTS_SEARCH_SHORT","Sök");
define("REPORTS_HITS","Träffar");
define("REPORTS_NOTHING","Inga poster hittade");
define("REPORTS_ADDRESS","Adress");
define("REPORTS_CURRENTNESS","Aktuellhet");
define("REPORTS_PLAYERNAME","Spelarnamn");
define("REPORTS_ALLY","Allierad");
define("REPORTS_VIEW","Se Rapport");
define("REPORTS_SEARCH_IN","Sök i Galax");
define("REPORTS_FROM_SYSTEM","från System");
define("REPORTS_TO","till");
define("REPORTS_DELETE","Radera");
define("REPORTS_DELETED","Post raderad");
define("REPORTS_RESULTS","Träffar per sida");
define("REPORTS_OF","av");
define("REPORTS_DATE","Datum");
define("REPORTS_DATE_0","Ignorera");
define("REPORTS_DATE_1","Äldre än");
define("REPORTS_DATE_2","Nyare än");
define("REPORTS_NOTICES","Notiser");
define("REPORTS_AT_LEAST_RESOURCES","Resurser (minst)");
define("REPORTS_SEARCH_EXTENDED","Utökad sökning");
define("REPORTS_FLEET_RESIS","Flottpoäng");
define("REPORTS_DEFENCE_RESIS","Försvarspoäng");
define("REPORTS_ALL_RESIS","Summerade poäng");
define("REPORTS_TECHS","Teknologier");
define("REPORTS_UNKNOWN_ENTRIES","Okända poster");
define("REPORTS_PARTLY_INSERTED","Delvis inlagd");
define("REPORTS_FOR_ALL_RES","för alla resurser");
define("REPORTS_FOR_TF","för vrakfältet");
define("REPORTS_KT","Små transportskepp");
define("REPORTS_GT","Stora transportskepp");
define("REPORTS_SS","Slagskepp");
define("REPORTS_REC","Återvinnare");
define("REPORTS_RAIDABLE","Endast raidbara mål");
define("REPORTS_ALL_RESOURCES","Alla resurser");
// 4.0
define("REPORTS_STUFF","Övrigt");
define("REPORTS_SPEEDSIM","Simulera med Speedsim");
define("REPORTS_DRAGOSIM","Simulera med Dragosim");
define("REPORTS_STATUS","Status");
define("REPORTS_ERROR","Ett fel har inträffat");
// 4.2
define("REPORTS_OWN_REPORTS","Endast mina rapporter");
// 4.3.3
define("REPORTS_UPLOAD_BY","Rapport upladdad av");
// 4.4
define("REPORTS_DEPTH","Rapportdjup");
define("REPORTS_FLEET_SCORE","Flottpoäng");
define("REPORTS_DEFENCE_SCORE","Försvarspoäng");
// 5.0
define("REPORTS_HOURS","hours");
define("REPORTS_MAX_RESULTS_HIT","Your query returned more than &1 hits. Only the first &1 results are show. Please adjust your search request to get less results.");
define("REPORTS_OSIMULATE","Simulate with OSimulate");
define("REPORTS_SHOW_ONLY","Show only");
define("REPORTS_SHOW_PLANETS","Planeter");
define("REPORTS_SHOW_MOONS","Månar");
define("REPORTS_OWNER","Reports owned by");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","OGame Galaxverktyg - Statistik");
define("STATS_TBLHEAD","Statistik");
define("STATS_RANK","Rank");
define("STATS_PLAYERNAME","Spelarnamn");
define("STATS_ALLYNAME","Allianstag");
define("STATS_SCORE","Poäng");
define("STATS_FLEET","Flotta");
define("STATS_RESEARCH","Forskning");
define("STATS_MEMBERS","Medlemmar");
define("STATS_STATUS","Status");
define("STATS_NOTHING","ingen Status");
define("STATS_NAP","NAP");
define("STATS_ALLIED","Allierad");
define("STATS_WAR","Krig");
define("STATS_BOYCOTT","Bojkott");
define("STATS_NEUTRAL","Neutral");
define("STATS_OWN","Egen Allians");
define("STATS_WING","Vinge");
define("STATS_UPDATE","Post från");
define("STATS_PLAYERSTATS","Spelarstatistik");
define("STATS_ALLYSTATS","Alliansstatistik");
// 4.0
define("STATS_DELETE","Vill du ta bort den här posten?");
define("STATS_CONFIRM_DELETE","Vill du verkligen radera den här spelarposten?");
define("STATS_CHANGE_PLAYER_STATUS","Spelarstatus");
define("STATS_CHANGE_ALLIANCE_STATUS","Alliansstatus");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","Alla medlemmar av den här alliansen får den valda statusen. Tidigare status kommer att skrivas över. Du kan ändra status på enskilda spelare i efterhand.");
define("STATS_UNKNOWN","Resten");
define("STATS_DETAILS","Detaljer för");
// 4.4
define("STATS_PLAYERSTATUS",SHOW_PLAYER_STATUS);
define("STATS_IGNORE_STATUS",SHOW_PLAYER_STATUS1);
define("STATS_ACTIVE","Aktiva");
define("STATS_INACTIVE",USER_BB_INACTIVE);
define("STATS_BANNED",USER_BB_BANNED);
define("STATS_VACATION",USER_BB_VACATION);
define("STATS_NOOB",USER_BB_NOOB);
// 4.8
define("STATS_YES",SHOW_YES); // reuse SHOW definitions if applicable
define("STATS_NO",SHOW_NO);
define("STATS_SEARCH",USER_SEARCH);
define("STATS_SHOW_GRAPH","Visa detaljer för poängfördelning");
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
define("REGISTER_REGISTRATE","Registrera");
define("REGISTER_LOGINNAME","Inloggningsnamn");
define("REGISTER_PASSWORD","Lösenord");
define("REGISTER_PASSWORD_CONFIRM","Bekräfta Lösenord");
define("REGISTER_EMAIL","Email");
define("REGISTER_INGAME","Spelnamn");
define("REGISTER_ALLYTAG","Allianstag");
define("REGISTER_EMAILVERIFICATION","E-postkontroll");
define("REGISTER_EMAILTEXT","Vänligen klicka på länken för att bekräfta din registrering på Galaxverktyget.");
define("REGISTER_ERROR1","Inloggningsnamn upptaget.");
define("REGISTER_ERROR2","Fel vid försök att skicka e-post. Kontakta din administratör.");
define("REGISTER_ERROR3","Fel vid försök att skicka data till databasen!");
define("REGISTER_INFO1","Ditt konto är skapat.");
define("REGISTER_INFO2","Vänligen klicka på länken i ditt email för att bekräfta registreringen.");
define("REGISTER_INFO3","Konto bekräftat. Din admin måste bara aktivera det.");
define("REGISTER_BUTTON","Tillbaka till huvudsidan");
define("REGISTER_NEW_SUBJECT","En ny registrerad användare av Galaxverktyget");
define("REGISTER_NEW_MAILTEXT","En ny användare registrerade sig.");
// new 4.2
define("REGISTER_BACK","Tillbaka till förstasidan");
// new 4.3.5
define("REGISTER_MISSING_FIELDS","Fyll i alla begärda fält");
// new 4.8
define("REGISTER_ERROR4","E-postadress finns inte.");
define("REGISTER_ERROR5","Lösenord matchar inte.");
define("REGISTER_PWS","Lösenordsstyrka");
define("REGISTER_PWS0","Mycket svagt");
define("REGISTER_PWS1","Svagt");
define("REGISTER_PWS2","Bra");
define("REGISTER_PWS3","Starkt");
define("REGISTER_PWS4","Mycket starkt");
// new 5.0
define("REGISTER_EMAIL_USED","Email Address is already used");

/*********************************************************************
* lost_password.php
**********************************************************************/
define("LOSTPW_TITLE","Glömt mitt Lösenord");
define("LOSTPW_INFO2","Ett nytt lösenord har genererats och skickats till din emailadress.");
define("LOSTPW_BUTTON1","Hämta nytt lösenord");
define("LOSTPW_BUTTON2","Tillbaka till huvudsidan");
define("LOSTPW_LOGINNAME","Inloggningsnamn");
define("LOSTPW_EMAIL","Email");
define("LOSTPW_ERROR1","Fel vid försök att skicka data till databasen!");
define("LOSTPW_ERROR2","Ingen matchande post hittad!");
define("LOSTPW_ERROR3","Fel vid försök att skicka ett email. Kontakta din admin.");
define("LOSTPW_EMAIL_SUBJECT","Det nya lösenordet du begärde");
define("LOSTPW_EMAIL_TEXT1","Här är dina nya inloggningsuppgifter för Galaxverktyget");
define("LOSTPW_EMAIL_TEXT2","Användarnamn");
define("LOSTPW_EMAIL_TEXT3","Lösenord");
// new 5.0
define("LOSTPW_INFO1","You will receive an email to verify your password reset request.");
define("LOSTPW_CONFIRM_RESET_SUBJECT","Lost password?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","Hello,\n\nyou requested a password reset for the Galaxytool. To generate a new password, click the following link:");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","OGame Galaxverktyg - Användarinformation");
define("USERINFO_NAMES","Alla användare av verktyget");
define("USERINFO_DETAIL","detaljerad information om");
define("USERINFO_ERROR1","Ingen känd användare med detta ID!");
define("USERINFO_USERNAME","Inloggningsnamn");
define("USERINFO_INGAME","Spelarnamn");
define("USERINFO_EMAIL","Email");
define("USERINFO_ALLYTAG","Allians");
define("USERINFO_STYLEPATH","Tema");
define("USERINFO_STATUS","Status");
define("USERINFO_ACTIVATE","Aktivera Spelare");
define("USERINFO_LOGINS","Antal Inloggningar");
define("USERINFO_LASTLOGIN","Senaste Inloggning");
define("USERINFO_DATA","Information om inlagda system");
define("USERINFO_NODATA","Den användaren har inte lagt in några system än!");
define("USERINFO_GALAXY","Galax");
define("USERINFO_SYSTEMS","Antal System");
define("USERINFO_IP","IP-adress");
define("USERINFO_LOGINTIME","Loggade in");
define("USERINFO_NOLOGIN","Spelaren har aldrig loggat in.");
define("USERINFO_LAST_GALAXYUPDATE","Senast inlagda galaxvy");
define("USERINFO_LAST_PUBLIC_NOTICE","Senaste publika notis");
define("USERINFO_LAST_PRIVATE_NOTICE","Senaste privata notis");
define("USERINFO_NUMBEROF_PUBLIC_NOTICE","Antal publika notiser");
define("USERINFO_NUMBEROF_PRIVATE_NOTICE","Antal privata notiser");
define("USERINFO_ACTIVATED","Konto aktiverat");
define("USERINFO_ACTIVATIONTEXT","Galaxverktygets administratör har aktiverat ditt konto.\n\nHa det så kul med Galaxverktyget!");
// new 4.8
define("USERINFO_LAST_SUBMIT","Senast inlagda uppgifter");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","OGame Galaxverktyg - Allianshistoria");
define("ALLYHISTORY_TBLHEAD","Historisk Översikt");
define("ALLYHISTORY_PLAYERNAME","Spelarnamn");
define("ALLYHISTORY_ALLYNAME","Allians");
define("ALLYHISTORY_LASTMONTH","Senaste månaden"); // changed at 4.0
define("ALLYHISTORY_ALL_DATA","all tillgänglig information"); // new 4.0
define("ALLYHISTORY_SHOW","Visa statistik");
define("ALLYHISTORY_TIMESPAN","Tidsperiod");
define("ALLYHISTORY_PROGESS","Framsteg");
define("ALLYHISTORY_SCORE","Poäng");
define("ALLYHISTORY_FSCORE","Flottpoäng"); // new 4.0
define("ALLYHISTORY_RSCORE","Forskningspoäng"); // new 4.0
define("ALLYHISTORY_MEMBER","Medlemmar"); // new 4.0
define("ALLYHISTORY_NOTHING","no entries found");
define("ALLYHISTORY_DETAILS","Detaljer");
define("ALLYHISTORY_SHOW_ADDRESS","Koordinater");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","Spelarinformation");
define("DETAILEDINFO_ALLYINFO_TITLE","Alliansinformation");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","Detaljerad information om spelare");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","Detaljerad information om allians");
define("DETAILEDINFO_NO_ALLIANCE","ingen");
define("DETAILEDINFO_SCORE","Poängstatistik");
define("DETAILEDINFO_FLEET","Flottstatistik");
define("DETAILEDINFO_RESEARCH","Forskningsstatistik");
define("DETAILEDINFO_RANK","Rank");
define("DETAILEDINFO_POINTS","Poäng");
define("DETAILEDINFO_KNOWN_PLANETS","Kända planeter");
define("DETAILEDINFO_MOONS","Kända månar");
define("DETAILEDINFO_PHALANX_AREA","Radarstations-area");
define("DETAILEDINFO_NO_PHALANX_AREA","ingen Radarstation hittad");
define("DETAILEDINFO_NOTICES","Notiser");
define("DETAILEDINFO_NO_NOTICES","Inga Notiser hittade");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","Tidigare Allianser");
define("DETAILEDINFO_RESOURCES_PER_HOUR","Resurser per timme");
define("DETAILEDINFO_RESOURCES_PER_DAY","Resurser per dag");
define("DETAILEDINFO_RESOURCES_PER_WEEK","Resurser per vecka");
define("DETAILEDINFO_RESOURCES_PER_MONTH","Resurser per månad (30 dagar)");
define("DETAILEDINFO_METAL","Metall");
define("DETAILEDINFO_CRYSTAL","Kristall");
define("DETAILEDINFO_DEUTERIUM","Deuterium");
define("DETAILEDINFO_UNKNOWN","okänd");
define("DETAILEDINFO_SCORE_DISTRIBUTION","Poängfördelning");
// new 4.2
define("DETAILEDINFO_GENERAL","Detaljer");
define("DETAILEDINFO_MEMBERS","Medlemmar");
define("DETAILEDINFO_GRAPHS","Grafer");
define("DETAILEDINFO_RESOURCES","Resurser");
define("DETAILEDINFO_FLEET_TAB","Flotta");
define("DETAILEDINFO_TECH","Forskning");
define("DETAILEDINFO_FLEET_DETAIL","Total flotta i alla rapporter");
define("DETAILEDINFO_TECH_DETAIL","Känd forskning");
// new 4.3
define("DETAILEDINFO_PLANET_TAB",REPORTS_SHOW_PLANETS);
define("DETAILEDINFO_MOON_TAB",REPORTS_SHOW_MOONS);
// 4.7
define("DETAILEDINFO_ACTIVITIES","Aktiverades");
define("DETAILEDINFO_NODATA",VIEW_NODATA); // reuse existing translations
define("DETAILEDINFO_ACTIVITY_DESCRIPTION","Visa aktivitet av &1 mottagna från:");
define("DETAILEDINFO_GALAXYVIEWS","Galaxvy");
define("DETAILEDINFO_SCANS","Fientlig spionaktivitet");
define("DETAILEDINFO_MESSAGES","Spelarmedelande");
define("DETAILEDINFO_COMBATS","Krigsrapport");
define("DETAILEDINFO_ALLYPAGE","Alians överblick");
define("DETAILEDINFO_MANUAL","Manuella inställningar");
define("DETAILEDINFO_START","Början");
define("DETAILEDINFO_TO","Till");
define("DETAILEDINFO_TODAY","Idag");
define("DETAILEDINFO_DATA_RESTRICTION","Begränsad till");
define("DETAILEDINFO_WEEKDAY_WEEKEND","Helgen");
define("DETAILEDINFO_WEEKDAY_WORKINGDAY","Vardag");
define("DETAILEDINFO_WEEKDAY_MONDAY","Måndag");
define("DETAILEDINFO_WEEKDAY_TUESDAY","Tisdag");
define("DETAILEDINFO_WEEKDAY_WEDNESDAY","Onsdag");
define("DETAILEDINFO_WEEKDAY_THURSDAY","Torsdag");
define("DETAILEDINFO_WEEKDAY_FRIDAY","Fredag");
define("DETAILEDINFO_WEEKDAY_SATURDAY","Lördag");
define("DETAILEDINFO_WEEKDAY_SUNDAY","Söndag");
define("DETAILEDINFO_WEEKDAY_SHORTLENGTH",3); // number of characters to shorten week day
define("DETAILEDINFO_PLAYER_CURRENTLY_ACTIVE","Spelaren är nu aktiv");
define("DETAILEDINFO_PLAYER_MESSAGES","Tillgängliga spelarmeddelanden");
define("DETAILEDINFO_SHOW","Visa");
define("DETAILEDINFO_NONE","Inga tillgängliga");
define("DETAILEDINFO_ENTER_MANUALLY","Skriv in aktiviteter för den här spelaren manuellt");
define("DETAILEDINFO_PLAYER_SEEN_ON","Spelaren är aktiv");
define("DETAILEDINFO_INSERT","Infoga");
define("DETAILEDINFO_OGAME_SERVERTIMES","Snälla notera: Alla tider och datum refereras till OGame servertid!");
define("DETAILEDINFO_DAY_VIEW","24h visning");
define("DETAILEDINFO_WEEK_VIEW","Veckovis");
// new 4.8
define("DETAILEDINFO_HOME_PLANET","Hemplanet");
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
define("ADMIN_TITLE","Administrera Galaxytool");
define("ADMIN_DISCLAMER","Observera: Kör dessa scripts på egen risk! De flesta av dem raderar data.");
define("ADMIN_INCONSISTENCIES","Fel i databasen");
define("ADMIN_PLANETS","Planeter på position 0 eller högre än 15");
define("ADMIN_GALAXIES","Radera galaxer högre än &1 ");
define("ADMIN_PLAYERS","Radera spelare utan OGame användarid - leder till dubletter");
define("ADMIN_REPORTS","Radera rapporter där planeten saknas");
define("ADMIN_MISC","Övrigt");
define("ADMIN_RESET","Nollställ Galaxytool (Endast användar och IP behålls)");
define("ADMIN_OLD_PLAYERS","Radera spelarrapporter äldre än &1 dagar");
define("ADMIN_OLD_REPORTS","Radera rapporter äldre än &1 dagar");
define("ADMIN_LOADING","Stäng inte detta fönster medans sidan laddas.");
define("ADMIN_STATUS","Status för dina order");
define("ADMIN_SELECTION","Minst en uppgift måste väljas");
define("ADMIN_SAFETY","Är du säker att du vill köra dessa script(s) ?");
define("ADMIN_DONE","Klar");
define("ADMIN_NOTBD","Inget att utföra");
// new 4.3
define("ADMIN_OLD_GALAXIES","Ta bort galaxvyar äldre än &1 dagar");
define("ADMIN_UNUSED_PLAYERS","Radera spelare som inte förekommer i någon galaxvy");
// new 4.7
define("ADMIN_OLD_ACTIVITIES","Radera spelaraktiviter som är äldre än &1 dag(ar)");
// new 4.8
define("ADMIN_OLD_COMBATS","Radera krigsrapporter äldre än &1 dagar");
define("ADMIN_OLD_INGAME_MSG","Radera spelarmeddelanden äldre än &1 dagar");
// new 5.0
define("ADMIN_OGAME_API","Load public data from OGame into the Galaxytool");
define("ADMIN_OGAME_ALL_DATA",ALLYHISTORY_ALL_DATA);
define("ADMIN_OGAME_GALAXY_DATA",MENU_GALAXYVIEW);
define("ADMIN_OGAME_STATISTICS_DATA",MENU_STATISTICS);

// new 4.3.5
/*********************************************************************
* errorpage.php
**********************************************************************/
define("ERRORPAGE_PAGEFORWARD","Klicka här om din webläsare inte stödjer vidarebefordring");
define("ERRORPAGE_PERMISSION_DENIED","Du har inte tillstånd att gå in på denna sidan. Klicka för att gå tillbaka.");

// new 4.7
/*********************************************************************
* fleet_movements.php
**********************************************************************/
define("FLEETS_TITLE","OGame Galaxytool – Flottrörelser");
define("FLEETS_ACTUAL_FLEETS","Nuvarande flottrörelser");
define("FLEETS_YES",SHOW_YES);
define("FLEETS_NO",SHOW_NO);
define("FLEETS_DETAILS","Antal skepp");
define("FLEETS_MISSION_EXPEDITION","Expeditions uppdrag");
define("FLEETS_MISSION_COLONIZATION","Kolonisera");
define("FLEETS_MISSION_RECYCLE","Återvinna");
define("FLEETS_MISSION_TRANSPORT","Transportera");
define("FLEETS_MISSION_DEPLOYMENT","Utplacera");
define("FLEETS_MISSION_ESPIONAGE","Spionera");
define("FLEETS_MISSION_ACS_DEFEND","ACS Försvara");
define("FLEETS_MISSION_ATTACK","Attackera");
define("FLEETS_MISSION_ACS_ATTACK","ACS Attack");
define("FLEETS_MISSION_MOON_DESTRUCTION","Månförstörelse");
define("FLEETS_MISSION_MISSILE_ATTACK","Misil Attack");
define("FLEETS_NO_DATA","Ingen tillgänglig data hittades");
// new 5.0
define("FLEETS_FLEET","Fleet");
define("FLEETS_ALL_FLEETS","Show all fleet movements");

/*********************************************************************
* parser_combat_reports.inc.php
**********************************************************************/
define("COMBAT_REPORT_OUDATED_GALAXYVIEW","Galaxyvyns data är för gammal var god uppdatera källans kordinater och målets kordinater!");

/*********************************************************************
* messages.php
**********************************************************************/
define("MESSAGES_TITLE","OGame Galaxytool - OGame Meddelanden");
define("MESSAGES_PLAYERNAME","Spelar namn");
define("MESSAGES_SUBJECT","Ämne");
define("MESSAGES_DATE","Datum");
define("MESSAGES_FILTER","Filter");
define("MESSAGES_DELETE","Raderade medelanden");
define("MESSAGES_PUBLISH_DETAIL","Publicera meddelandet genom att lägga till meddelandets innehåll i spelarens notis.");
define("MESSAGES_PUBLISH_HEADER","&sender har skickat ett meddelande till &recipient på &date:\n\n &message"); // &sender, &recipient, &date, &message replaced at runtime
define("MESSAGES_PLAYER_FILTER","Meddelanden från spelare:");
// new 5.0
define("MESSAGES_CONTENT","Content");

/*********************************************************************
* combat_reports.php
**********************************************************************/
define("COMBATS_TITLE","OGame Galaxytool - Krigsrapport");
define("COMBATS_ATTACKER","Attakerande spelare");
define("COMBATS_DEFENDER","Försvarare");
define("COMBATS_DATE","Datum");
define("COMBATS_OWNER","Ägare");
define("COMBATS_WINNER","Vinnare");
define("COMBATS_COMBATREPORT","Krigsrapport");
define("COMBATS_COMBAT_AT","Attakerad på");
define("COMBATS_LOST_UNITS","Förlorade enheter");
define("COMBATS_LOOT","Byte");
define("COMBATS_DEBRIS","Vrakfält");
define("COMBATS_AND","och");
define("COMBATS_PUBLISH","Publisera denna rapport");
define("COMBATS_UNPUBLISH","Gör rapporten privat.");
define("COMBATS_DELETE","Raderad rapport");
define("COMBATS_CHECK_ALL","markera alla");
define("COMBATS_UNCHECK_ALL","avmarkera alla");
define("COMBATS_WITH_SELECTED","Valt slag");
define("COMBATS_PUBLIC_REPORTS","Offentlig rapport");
define("COMBATS_YES",SHOW_YES); // no need for translation!
define("COMBATS_NO",SHOW_NO); // no need for translation!
define("COMBATS_SEARCH_OPTIONS","Sök inställningar");
define("COMBATS_SEARCH","Gå");
define("COMBATS_RESET","Återställ");
// 4.8
define("COMBATS_COORDINATES",USER_BB_COORDINATES);
define("COMBATS_INVALID_GALAXY_ENTERED","Ogiltig Galax");
define("COMBATS_INVALID_SYSTEM_ENTERED","Ogiltigt System");
define("COMBATS_INVALID_PLANET_ENTERED","Ogiltig Planet");
define("COMBATS_GALAXY_FROM_TO","Galax");
define("COMBATS_SYSTEM_FROM_TO","System");
define("COMBATS_PLANET_FROM_TO","Planet");
define("COMBATS_APPLY",GENERAL_APPLY);
define("COMBATS_COMBAT_SUMMARY","Sammanfattning av krigsrapport");
define("COMBATS_DOWNLOAD_CSV","Ladda ned krigsrapport som CSV fil");

/*********************************************************************
* report_archive.php
**********************************************************************/
define("REPORT_ARCHIVE_TITLE","Rapportarkiv");
define("REPORT_ARCHIVE_COORDINATES","Koordinater");
define("REPORT_ARCHIVE_SCANTIME","Scannad klockan");
define("REPORT_ARCHIVE_DELETE","Radera dessa poster");
define("REPORT_ARCHIVE_CONFIRM_DELETE","Vill du verkligen radera dessa poster?");
define("REPORT_ARCHIVE_GALAXY","Galax");
define("REPORT_ARCHIVE_SYSTEM","System");
define("REPORT_ARCHIVE_PLANET","Planet");
define("REPORT_ARCHIVE_MOON","Måne");
define("REPORT_ARCHIVE_DETAILS","Detaljer");
define("REPORT_ARCHIVE_RESOURCES",DETAILEDINFO_RESOURCES);
define("REPORT_ARCHIVE_HEADER_RESOURCES",REPORTS_RESOURCES);
define("REPORT_ARCHIVE_DETAILS_FOR","Rapportarkiv för &1 [&2] (&3)"); // &1 = planetname; &2 = coordinates; &3 = playername
define("REPORT_ARCHIVE_FLEET_CARGO","Flottans lastkapacitet");
define("REPORT_ARCHIVE_IRAK_RANGE","Räckvidd för interplanetära missiler");
define("REPORT_ARCHIVE_CHART_TYPE","Tabelltyp");

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