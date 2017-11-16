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
define("L_USERNAME","Utilizator");
define("L_PASSWORD","Parola");
define("L_LOGINFAILURE","Username sau parola sunt gresitesau contul tau inca nu este activat.");
define("L_TOKENFAILURE","Cheia ta de logare e gresita sau contul nu este inca activat.");
define("L_LOGINTEXT","Te rog conecteaza-te.");
define("L_LANGUAGE","Limbi disponibile:");
define("L_TIMEOUT","Sesiunea ta a expirat!");
define("L_REGISTER","Inregistrare");
define("L_PWLOST","Parola pierduta");
define("INDEX_TITLE","OGame Galaxietool - General");
define("INDEX_INFO","Informatii");
define("INDEX_ENTRIES","Numarul de sisteme");
define("INDEX_ENTRIES_LASTWEEK","Sisteme noi introduse in ultima saptamana");
define("INDEX_ENTRIES_TO_OLD","Sisteme mai vechi de o luna");
define("INDEX_REGISTERED_USERS","Useri inregistrati");
define("INDEX_PAGEFORWARD","Daca browser-ul tau nu suporta redirectarea te rog apasa aici.");
define("INDEX_NOTICES","Notite");
define("INDEX_PLAYERS","Statisticile jucatorilor");
define("INDEX_ALLIES","Statisticile aliatilor");
define("INDEX_REPORTS","Rapoarte de spionare");
define("INDEX_VERSION","Ultima versiune pentru descarcare");
define("INDEX_LATEST_VERSION","Nici o veriune noua disponibila");
define("INDEX_SHOUTBOX","Casuta cu mesaje");
define("INDEX_NOENTRY","Nici un mesaj , inca");
define("INDEX_COMMENT","Mesajul tau ");
define("INDEX_INSERT","Introduce");
define("INDEX_UMOD","Jucator in modul vacanta");
define("INDEX_NO_MOONS","Numarul de luni");
define("INDEX_NO_EMPTY_SYSTEMS","Numarul de sisteme goale , virgine");
define("INDEX_NO_FULL_SYSTEMS","Numarul de sisteme pline");
define("INDEX_NO_TARGETS","Numarul de posibile tinte");
// 4.0
define("INDEX_USERINFO","Numarul de utilizatori");
define("INDEX_ONLINE","Acum conectati");
define("INDEX_TODAY","Azi conectati");
define("INDEX_ALL","Numarul total de conectari");
// 4.3.7
define("GENERAL_LOAD_FORM","Incarcare date");
define("GENERAL_SAVE_FORM","Salvare date");
define("GENERAL_SAVE_AS_TEXT","Salveaza ca");
define("GENERAL_SAVE","Salveaza");
// 4.8
define("INDEX_USERMANAGEMENT","Vederea Activarii");
define("INDEX_NEEDADMIN","Conturi de deblocat");
define("INDEX_NEEDEMAIL","Conturi Nevalidate");
define("INDEX_TOOLBAR_INFO","Informatiile pluginului Galaxytool");
define("INDEX_TOOLBAR_URL","Galaxytool URL");
define("INDEX_TOOLBAR_VERSION_REQUIRED","Necesita cel putin versiunea pluginului Galaxytool");
define("INDEX_TOOLBAR_INSTALL_GUIDE","Instructiuni de instalare pentru plugin");
define("INDEX_TOOLBAR_TOKEN","Cheie de Logare");
define("INDEX_TOOLBAR_NEW_TOKEN","Obtine noua cheie");
define("INDEX_PLAYERS_WITH_N_PLANETS","Jucatori cu mai mult de &1 planeta");
define("INDEX_GETTING_STARTED","Notiuni de baza despre Galaxytool");
define("INDEX_GETTING_STARTED1","Bun venit la Galaxytool!");
define("INDEX_GETTING_STARTED2","Galaxytool te va ajuta sa analizezi ce se intampla in universul tau &1 din OGame");
define("INDEX_GETTING_STARTED3","Inainte sa analizezi cu adevarat informatiile trebuie sa le inserezi mai intai. Pentru asta ai nevoie de un plugin pentru browser ca &1 pentru Firefox.");
define("INDEX_GETTING_STARTED4","Dupa ce ai instalat pluginul, navighezi prin paginile tale de OGame ca de obicei si vei vedea o mica fereastra de status de fiecare data cand ceva a fost trimis spre Galaxytool.");
define("INDEX_GETTING_STARTED5","Imediat ce informatiile au fost inserate in Galaxytool, poti incepe sa analizezi unde jucatorii isi au coloniile, cate colonii au, ce rapoarte exista sau cand is cel mai activi.");
define("INDEX_GETTING_STARTED6","Dar te ajuta deasemenea sa analizezi prograsul propriu si sa te compari impotriva altor jucatori sau prin analizarea rapoartelor de lupta sa vezi cate raiduri ai facut in ultimele zile sau saptamani");
define("INDEX_GETTING_WIKIPAGE","Sunt multe alte caracteristici in Galaxytool.");
define("INDEX_GETTING_WIKIPAGE2","Verifica-le pe pagina noastra wiki.");
define("INDEX_GETTING_BOARD","Pentru feedback sau idei puteti folosi board-ul nostru:");
define("INDEX_GETTING_CHAT1","Sau vizitatine pe chatroom-ul nostru:");
define("INDEX_GETTING_CHAT2","Nu suntem online 24/7 dar petrecem mult timp liber acolo, asa ca ai rabdare.");
// new 5.0
define("INDEX_CLOSE","Inchide");
define("INDEX_LOGIN","Conectare");
define("GENERAL_REQUIRED_FIELDS","Completati toate campurile necesare");
define("INDEX_MESSAGES","Mesaje");
define("INDEX_EXAMPLE","Exemplu");
define("INDEX_INVALID_DATA","Date invalide");
define("GENERAL_COLUMN_HIDE_TITLE","Administreaza coloanele");
define("GENERAL_COLUMN_HIDE_INFO","Selectati ce coloane doriti sa vedeti in tabel.");
define("GENERAL_ENTRIES_DELETED","&1 intrari sterse");
define("GENERAL_APPLY","Aplica");
define("STARTPAGE_GALAXYTOOL_DESCR","<em>Galaxytool</em> este o unealta pentru jocul in browser OGame.");
define("GENERAL_OVERWRITE","Suprascrie intrarea duplicata");
define("GENERAL_OVERWRITE_QUESTION","Suprascrie?");
define("INDEX_OWN_LOGINS","Conectarile dumneavoastra");
define("GENERAL_OPEN_IN_NEW_WINDOW","Deschide legătura în fereastră nouă");
// 5.1
define("GENERAL_UNIT_OF_MEASURE_DAYS","Days");

/*********************************************************************/
/***************************** internal ******************************/
/*********************************************************************/
// index.php
define("PROGRAM_NAME","OGame Galaxytool");
define("SHORTNAME","Galaxytool");
define("BACK_INDEX","Inapoi la pagina principala");
define("UNIVERSE","HUHA Universul");

// search
define("MENU_INFO_LINKS","Informatii");
define("MENU_PAGE","Vedere larga");
define("MENU_DB_SEARCH","Cautare in baza de date");
define("MENU_DB_NOTICES","Cautare in notite");
define("MENU_DB_REPORTS","Cautare in rapoarte de spionaj");
define("MENU_GALAXYVIEW","Vezi galaxia");
define("MENU_STATISTICS","Statistici");
define("MENU_ALLYHISTORY","Istoricul vederii largi");
// 4.7
define("MENU_FLEET_MOVEMENTS","Miscarile flotelor");
define("MENU_COMBAT_REPORTS","Rapoarte de lupta");
define("MENU_MESSAGES","Mesaje din joc");

// insert / change
define("MENU_OPTION_LINKS","Optiuni");
define("MENU_DB_REFRESH","Introdu in baza de date");
define("MENU_NOTICES","Notite");
define("MENU_DB_STATUS","Statusul bazei de date");
define("MENU_USEROPTIONS","Control utilizatori");
define("MENU_USEROPTIONS2","Optiunile utilizatorului");
define("MENU_USEROPTIONS3","Informatii despre utilizatori");
// 4.2
define("MENU_ADMIN","Administratia");
// 4.3.3
define("MENU_LOGOUT","Logout");

// Stuff
define("MENU_STUFF","Ajutator");
define("MENU_FORUM_THREAD","Pagina producatorului");
define("MENU_DOWNLOADPAGE","Pagina de download");
define("MENU_LANGUAGE","Limba");
define("MENU_HELP","Ajutor");
// 4.0
define("MENU_TOOLOPTIONS","Optiunile Galaxytool");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1"," a fost introdus in baza de date");
define("PARSER_ERROR1","A aparut o eroare incercand sa introduc datele pentru coordonatele :");
define("PARSER_ERROR2","Nu am gasit baza de date!");
define("PARSER_ERROR3","Nu am gasit serverul cu baza de date!");
define("PARSER_WRONG_UNIVERSE","Univers gresit - actual: \"&1\"  neasteptat: \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","OGame Galaxytool - Pagina de cautare");
define("SHOW_SEARCH","Cauta in baza de date");
define("SHOW_ALLYSYMBOL","Numele Aliantelor");
define("SHOW_PLAYERNAME","Numele Jucatorului");
define("SHOW_MOONS","Doar planete cu luni");
define("SHOW_NOTICES","Doar planete cu mesaje");
define("SHOW_COLONIES","Doar planete pentru colonizare");
define("SHOW_YES","DA");
define("SHOW_NO","NU");
define("SHOW_SEARCHRANGE","Intervalul");
define("SHOW_SEARCH_IN","Cauta in galaxia");
define("SHOW_FROM_SYSTEM","de la sistemul solar");
define("SHOW_FROM_PLANET","de la pozitia planetei");
define("SHOW_TO","la");
define("SHOW_DESCRIPTION","Poti folosi wildcards * pentru jucator sau numele aliatilor. Ca sa poti gasi toti jucatorii cu \"name\" in numele lor.<br />Scrie in campurile pe care vrei sa le specifici.");
define("SHOW_SORT_BY","Aranjare dupa");
define("SHOW_GALASYSTEM","Galaxie/Sistem");
define("SHOW_ALLYNAME","Numele aliantei");
define("SHOW_SEARCHBUTTON","Cauta");
define("SHOW_ADDRESS","Adresa");
define("SHOW_ALLYSORT","Alianta");
define("SHOW_PLANET","Numele planetei");
define("SHOW_STATUS","Status");
define("SHOW_CURRENTNESS","Ultima actualizare");
define("SHOW_PLAYER_STATUS","Statutul jucatorului");
define("SHOW_PLAYER_STATUS1","tot");
define("SHOW_PLAYER_STATUS2","posibile tinte");
define("SHOW_PLAYER_STATUS3","inactiv");
define("SHOW_HITS","Lovituri");
define("SHOW_OF","de");
define("SHOW_ASC","crescator");
define("SHOW_DESC","descrescator");
define("SHOW_RESULTS","afisari pe pagina");
define("SHOW_MOON","Luna");
define("SHOW_UKMOONSIZE","necunoscut");
define("SHOW_DF","CR");
define("SHOW_DF_LONG","Camp de ramasite");
define("SHOW_METAL","M");
define("SHOW_METAL_LONG","Metal");
define("SHOW_CRYSTAL","C");
define("SHOW_CRYSTAL_LONG","Cristal");
define("SHOW_BOTH","amandoua impreuna");
define("SHOW_AT_LEAST","(cel putin)");
define("SHOW_DATE","Data");
define("SHOW_DATE_0","nu conteaza");
define("SHOW_DATE_1","mai vechi de");
define("SHOW_DATE_2","mai nou de");
define("SHOW_RANK","Locul dupa puncte");
define("SHOW_FRANK","Locul flotei");
define("SHOW_MEMBERS","Membri");
define("SHOW_NOTRANKED","Nu este in top 1500.");
define("SHOW_NOTICERES","Mesaje");
define("SHOW_REPORTS","Doar planete cu rapoarte de spionare");
define("SHOW_REPORTS_SHORT","Rapoarte");
define("SHOW_NOTHING","Nu sa gasit nimica");
define("SHOW_ALLIANCE_STATUS","Statusul Aliantei");
define("SHOW_NO_STATUS","nici un status");
define("SHOW_NAP","NAP");
define("SHOW_ALLIED","Aliati");
define("SHOW_WAR","Razboi");
define("SHOW_BOYCOTT","Boicot");
define("SHOW_NEUTRAL","Neutrii");
define("SHOW_OWN","Alianta proprie");
define("SHOW_WING","Prieten");
// obsolete with 5.0
define("SHOW_EXT_OPTIONS1","Arata mai multe optiuni de cautari pentru raza , ranc , data sau campuri de ramasite.");
define("SHOW_EXT_OPTIONS2","Arata mai multe optiuni de cautari pentru colonii , luni , rapoarte de spionare , mesaje , statutul jucatorilor sau relatiile diplomatice.");
define("SHOW_EXT_OPTIONS3","Arata mai multe optiuni de cautari pentru sortarea rezultatelor cautarii.");
// new 5.0
define("SHOW_EXTENDED","cautare avansata");
define("SHOW_MOON_SELECTION","Planeta cu luna");
define("SHOW_REPORT_SELECTION","Planeta cu raport");
define("SHOW_FILTER_BY","Exclude din lista");
define("SHOW_FILTER_NONE","niciuna");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Show players without score changes within the last few days");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","OGame Galaxytool - pagina cu statistici");
define("STATUS_DB_STATUS","Starea bazei de date");
define("STATUS_COLOR","Culoare");
define("STATUS_AGE1","Date cu 1 zi vechime.");
define("STATUS_AGE2","Date cu 2 - 4 zile vechime.");
define("STATUS_AGE3","Date cu 4 - 7 zile vechime.");
define("STATUS_AGE4","Date cu 1 - 2 saptamani vechime.");
define("STATUS_AGE5","Date cu 2 - 4 saptamani vechime.");
define("STATUS_AGE6","Date mai vechi de 1 luna!");
define("STATUS_AGE7","Nici o data disponibila.");
define("STATUS_ON","Activ");
define("STYLES_COLOR1","Culoarea1");
define("STYLES_COLOR2","Culoarea2");
define("STYLES_COLOR3","Culoarea3");
define("STYLES_COLOR4","Culoarea4");
define("STYLES_COLOR5","Culoarea5");
define("STYLES_COLOR6","Culoarea6");
define("STYLES_COLOR7","Culoarea7");
// 4.8
define("STATUS_DB_LEGEND","Legenda");
define("STATUS_GALAXY","Vederea Galaxiei");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","Controlul Utilizatorilor");
define("USER_NAMES","Utilizator");
define("USER_ERROR","Eroare");
define("USER_NEWUSER","Utilizator nou");
define("USER_OPTIONS","Optiuni");
define("USER_USERNAME","Numele utilizatorului");
define("USER_PASSWORD","Parola");
define("USER_PASSWORD_CONFIRM","Confirma parola");
define("USER_GALAXY","Galaxia");
define("USER_SEARCH","Cauta");
define("USER_INSERT","Inserare");
define("USER_DELETE","Stergere");
define("USER_DELETE_ENTRY","Vrei sa stergi utilizatorul: ");
define("USER_STATUS","Vezi statistici");
define("USER_STYLES","Modificare in pagina");
define("USER_SUBMIT","Trimite");
define("USER_RESET","Reset");
define("USER_YES","DA");
define("USER_NO","NU");
define("USER_STYLEPATH","Calea catre styles.css");
define("USER_PROBES","Vezi/trimite rapoarte de spionare");
define("USER_EMAIL","Email");
define("USER_ERROR1","Parola gresita sau email invalid.");
define("USER_ERROR2","Email invalid.");
define("USER_INGAME","Numele in joc");
define("USER_ALLYTAG","Numele aliantei");
define("USER_ALLYHISTORY","Vedere istoric");
define("USER_DIPLOMATIC","Schimbare statut diplomatic");
define("USER_STATSPAGE","Numar de afisari pe pagina de statistica");
define("USER_LINKS","Links");
define("USER_LINKS2","Format:<br>text;url<br>text2;url2<br>text3;url3");
define("USER_EXPORT_TITLE","Export culori (BB Codes)");
define("USER_BB_COORDINATES","Coordonate");
define("USER_BB_MOON","Luna");
define("USER_BB_DEBRIS","Camp de ramasite");
define("USER_BB_ALLY","Numele Aliantei");
define("USER_BB_ALLYDETAILS","Detaliile aliantei");
define("USER_BB_PLAYERNAME","Numele jucatorului");
define("USER_BB_BANNED","banat");
define("USER_BB_VACATION","in mod vacanta");
define("USER_BB_NOOB","noob");
define("USER_BB_INACTIVE","Inactiv");
define("USER_BB_LONGINACTIVE","Inactiv lung");
// new with 4.7
define("USER_DELETION","Sterge");
define("USER_FLEETINFO",MENU_FLEET_MOVEMENTS);
define("USER_ACTIVITIES","Activitatile jucatorului");
define("USER_MAINTENANCE","Intretinerea Galaxytool");
define("USER_MANAGEMENT",MENU_USEROPTIONS);
define("USER_DELETE_MY_COMBAT_REPORTS","Sterge rapoartele mele de lupta");
define("USER_DELETE_MY_MESSAGES","Sterge mesajele mele");
define("USER_DELETE_MY_FLEETMOVES","Sterge miscarile flotei mele");
// 4.8
define("USER_DELETE_MY_COMBAT_REPORTS_LIMITED","Sterge rapoartele mele de lupta mai vechi de &1 zile");
define("USER_DELETE_MY_MESSAGES_LIMITED","Sterge mesajele mele mai vechi de &1 zile");
define("USER_TABLE_ENTRIES","Numarul de rezultate de cautare pe fiecare pagina");
// 5.0
define("USER_EXISTS","Utilizatorul deja exista");
define("USER_BB_OUTLAW","Proscris");
define("USER_INVALID_URL","URL &1 pare a fi invalid - URLva fi ignorat");

/*********************************************************************
* galaxyview.php
*********************************************************************/
define("VIEW_TITLE","OGame Galaxytool - Vederea galaxiei");
define("VIEW_NODATA","Nici o data disponibila.");
define("VIEW_GALAXY","Galaxie");
define("VIEW_SYSTEM","Sistemul solar");
define("VIEW_POSITION","Poz.");
define("VIEW_PLANET","Planeta");
define("VIEW_MOON","Luna");
define("VIEW_TF","CR");
define("VIEW_PLAYER","Jucator");
define("VIEW_PLAYER_ADD","(Rank / Status)");
define("VIEW_ALLY","Alianta");
define("VIEW_ALLY_ADD","(Rank / Membru)");
define("VIEW_METAL","M");
define("VIEW_CRYSTAL","C");
define("VIEW_COLONISED","Planete locuite");
define("VIEW_UKMOONSIZE","necunoscut");
define("VIEW_BACK","inapoi");
define("VIEW_NOTICE","Mesaje");
define("VIEW_REPORTS","Rapoarte");
define("VIEW_MOONPHALANX","Urmatoarele luni pot scana sistemul");
define("VIEW_NOMOONS","Nici o luna gasita");
define("VIEW_IRAKS","Urmatoarele planete pot lovi sistemul acesta cu rachete interpalnetare");
define("VIEW_NOIRAKS","Nici o racheta interplanetara gasita");
// 4.0
define("VIEW_MOON_DESTROY_CHANCE","Sanse de distrugere a lunii");
define("VIEW_CHANCE_WITH_ONE","Sanse cu un RIP");
define("VIEW_CHANCE_WITH_N","Sanse cu ");
define("VIEW_DEATH_STARS","RIP-uri");
define("VIEW_DS_DESTROY_CHANCE","Sanse de a pierde RIP");
define("VIEW_TOP","SUS");
// new 4.3.5
define("VIEW_GO","go");
// new 5.0
define("VIEW_DIAMETER","Diametru");

/*********************************************************************
* change_password.php
**********************************************************************/
define("PW_TITLE","OGame Galaxytool - schimbare parola");
define("OLD_PASSWORD","parola veche");
define("NEW_PASSWORD","parola noua");
define("CONFIRM_NEW_PASSWORD","confirmare parola noua");
define("PW_MISMATCH","parola noua nu este la fel cu confirmarea parolei noi!");
define("PW_ERROR","Parola veche incorecta!");
define("UPDATE_DONE","Schimbarea parolei cu succes.");
// new 4.2
define("TIMEZONE_OFFSET","Ora locala nu este setata in server");
// new 4.3
define("DELETE_ACCOUNT","Stergere cont Galaxytool");
define("DELETE_ACCOUNT_SAFETY_REQUEST","Sunteti siguri ca doriti sa stergeti contul Galaxytool?");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","Autorizare");
define("CH_PASSWD_ADMIN","Admin");
// new 4.7
define("TIMEZONE_OGAME_OFFSET","Compensarea fusului orar la serverul OGame");
// new 4.8
define("CH_PASSWD_USER_LANGUAGE","Schimba la aceasta limba dupa conectare");
define("CH_PASSWD_USER_LANGUAGE_NO_CHANGE","Nicio schimbare");
define("CH_PASSWD_EXPAND","Extins");
define("CH_PASSWD_COLLAPSE","Prabusit");
define("CH_PASSWD_HIDDEN","Ascuns");
define("CH_PASSWD_GETTING_STARTED","Arata Informatiile despre Notiunile de baza dupa conectare");
define("CH_PASSWD_PLUGIN","Arata Informatiile despre Plugin dupa conectare");

/*********************************************************************
* notices.php
**********************************************************************/
define("NOTICE_TITLE","OGame Galaxytool - Notite");
define("NOTICE_HEADER","editare notita");
define("NOTICE_HEADER2","editare notita proprie");
define("NOTICE_PUBLIC","Accesibil pentru altii ?");
define("NOTICE_YES","da");
define("NOTICE_NO","nu");
define("NOTICE_TEXT","textul notitei");
define("NOTICE_SAVE","Salvare");
define("NOTICE_DELETED","Intrare stearsa");
define("NOTICE_SAVED","Intrare salvata");
define("NOTICE_RESULTS","Toate rezultatele");
define("NOTICE_USER","Utilizator");
define("NOTICE_DATE","Data");
define("NOTICE_EDIT","Editeaza");
define("NOTICE_DELETE","Sterge");
define("NOTICE_NEW","Creare intrare proprie");
define("NOTICE_NOTPUBLIC","Notita privata.");
define("NOTICE_ALL","tot");
define("NOTICE_NONE",SHOW_FILTER_NONE);
define("NOTICE_SEARCH","Cautare in notite");
define("NOTICE_SEARCH_SHORT","Cautare");
define("NOTICE_HITS","Rezultate");
define("NOTICE_SHOWRESULTS","rezultate pe pagina");
define("NOTICE_OF","de");
define("NOTICE_NOTHING","Nici un rezultat gasit");
// 4.0
define("NOTICE_CHARS","Caractere");
define("NOTICE_PLAYERNAME","Jucator");
define("NOTICE_SHOWALL","Arata toate notitele");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","OGame Galaxytool - Rapoarte de Spionare");
define("REPORTS_RESOURCES","Resurse");
define("REPORTS_FLEET","Flote");
define("REPORTS_DEFENCE","Aparare");
define("REPORTS_BUILDINGS","Cladiri");
define("REPORTS_TECHNOLOGY","Cercetari");
define("REPORTS_MOON","Luna");
define("REPORTS_SEARCH","Cautare in rapoarte de spionare");
define("REPORTS_SEARCH_SHORT","Cauta");
define("REPORTS_HITS","Rezulate");
define("REPORTS_NOTHING","Nici o data gasita");
define("REPORTS_ADDRESS","Adresa");
define("REPORTS_CURRENTNESS","Currentness");
define("REPORTS_PLAYERNAME","Numele jucatorului");
define("REPORTS_ALLY","Aliat");
define("REPORTS_VIEW","vezi raport");
define("REPORTS_SEARCH_IN","Cauta in galaxia");
define("REPORTS_FROM_SYSTEM","de la sistemul");
define("REPORTS_TO","la");
define("REPORTS_DELETE","sterge");
define("REPORTS_DELETED","Intrare stearsa");
define("REPORTS_RESULTS","rezultate pe pagina");
define("REPORTS_OF","de");
define("REPORTS_DATE","data");
define("REPORTS_DATE_0","nu conteaza");
define("REPORTS_DATE_1","mai vechi de");
define("REPORTS_DATE_2","mai noi de");
define("REPORTS_NOTICES","Notite");
define("REPORTS_AT_LEAST_RESOURCES","Resurse (cel putin)");
define("REPORTS_SEARCH_EXTENDED","cautare extinsa");
define("REPORTS_FLEET_RESIS","Flota- scor");
define("REPORTS_DEFENCE_RESIS","Aparare- scor");
define("REPORTS_ALL_RESIS","suma scoruri");
define("REPORTS_TECHS","Tehnologii");
define("REPORTS_UNKNOWN_ENTRIES","introduceri necunoscute");
define("REPORTS_PARTLY_INSERTED","partial introdus");
define("REPORTS_FOR_ALL_RES","pentru toate resursele");
define("REPORTS_FOR_TF","pentru campul de ramasite");
define("REPORTS_KT","Transportoare mici");
define("REPORTS_GT","Transportoare mari");
define("REPORTS_SS","Nave de razboi");
define("REPORTS_REC","Reciclator");
define("REPORTS_RAIDABLE","Doar tinte pentru atac");
define("REPORTS_ALL_RESOURCES","toate Resursele");
// 4.0
define("REPORTS_STUFF","Altele");
define("REPORTS_SPEEDSIM","Simuleaza cu Speedsim");
define("REPORTS_DRAGOSIM","Simuleaza cu Dragosim");
define("REPORTS_STATUS","Status");
define("REPORTS_ERROR","o eroare sa produs");
// 4.2
define("REPORTS_OWN_REPORTS","Doar rapoartele mele");
// 4.3.3
define("REPORTS_UPLOAD_BY","Raport incarcat de");
// 4.4
define("REPORTS_DEPTH","Adancime raport");
define("REPORTS_FLEET_SCORE","Scor flota");
define("REPORTS_DEFENCE_SCORE","Scor aparare");
// 5.0
define("REPORTS_HOURS","ore");
define("REPORTS_MAX_RESULTS_HIT","Interogarea dumneavoastra cu mai mult de &1 hituri. Numai primele &1 rezultate sunt aratate. Ajustati cererea de cautare pentru a primii mai putine rezultate.");
define("REPORTS_OSIMULATE","Simuleaza cu OSimulate");
define("REPORTS_SHOW_ONLY","Arata doar");
define("REPORTS_SHOW_PLANETS","Planete");
define("REPORTS_SHOW_MOONS","Luni");
define("REPORTS_OWNER","Rapoarte detinute de catre");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","OGame Galaxytool - Statistici");
define("STATS_TBLHEAD","Statistici");
define("STATS_RANK","Rank");
define("STATS_PLAYERNAME","Numele Jucatorului");
define("STATS_ALLYNAME","Numele Aliantei");
define("STATS_SCORE","Scor");
define("STATS_FLEET","Flota");
define("STATS_RESEARCH","Cercetari");
define("STATS_MEMBERS","Membri");
define("STATS_STATUS","Status");
define("STATS_NOTHING","fara Status");
define("STATS_NAP","NAP");
define("STATS_ALLIED","Aliati");
define("STATS_WAR","Razboi");
define("STATS_BOYCOTT","Boicot");
define("STATS_NEUTRAL","Neutri");
define("STATS_OWN","Alianta Proprie");
define("STATS_WING","Ajutor");
define("STATS_UPDATE","Intrare de la");
define("STATS_PLAYERSTATS","Statisticile Jucatorului");
define("STATS_ALLYSTATS","Statisticile Aliantei");
// 4.0
define("STATS_DELETE","Vrei sa stergi intrarea aceasta ?");
define("STATS_CONFIRM_DELETE","Chiar vrei sa stergi intrarea aceasta?");
define("STATS_CHANGE_PLAYER_STATUS","Statistica Jucatorului");
define("STATS_CHANGE_ALLIANCE_STATUS","Statistica Aliantei");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","Toti membrii acestei aliantei primesc acelasi statut.Orice alt statut va fi sters.Poti schimba statutul unor jucatori dupa aceeea.");
define("STATS_UNKNOWN","Restul");
define("STATS_DETAILS","Detalii pentru");
// 4.4
define("STATS_PLAYERSTATUS",SHOW_PLAYER_STATUS);
define("STATS_IGNORE_STATUS",SHOW_PLAYER_STATUS1);
define("STATS_ACTIVE","activ");
define("STATS_INACTIVE",USER_BB_INACTIVE);
define("STATS_BANNED",USER_BB_BANNED);
define("STATS_VACATION",USER_BB_VACATION);
define("STATS_NOOB",USER_BB_NOOB);
// 4.8
define("STATS_YES",SHOW_YES); // reuse SHOW definitions if applicable
define("STATS_NO",SHOW_NO);
define("STATS_SEARCH",USER_SEARCH);
define("STATS_SHOW_GRAPH","Arata detalii pentru distribuirea punctajului");
define("STATS_LONG_INACTIVE",USER_BB_LONGINACTIVE);
// 4.9
define("STATS_STANDARD","Puncte Standard");
define("STATS_MILITARY","Puncte de armata");
define("STATS_ECONOMY","Economie");
define("STATS_HONOUR","Puncte de Onoare");
define("STATS_MILITARY_BUILD","Armata construita");
define("STATS_MILITARY_DESTROYED","Armata distrusa");
define("STATS_MILITARY_LOST","Armata pierduta");

/*********************************************************************
* register.php
**********************************************************************/
define("REGISTER_REGISTRATE","Inregistrare");
define("REGISTER_LOGINNAME","Nume utilizator");
define("REGISTER_PASSWORD","Parola");
define("REGISTER_PASSWORD_CONFIRM","Confirmare parola");
define("REGISTER_EMAIL","Email");
define("REGISTER_INGAME","Numele in joc");
define("REGISTER_ALLYTAG","Numele aliantei");
define("REGISTER_EMAILVERIFICATION","Verificare email");
define("REGISTER_EMAILTEXT","Te rog urmareste link-ul acesta pentru confirmarea inregistrarii la galaxytool.");
define("REGISTER_ERROR1","Numele de utilizator deja exista.");
define("REGISTER_ERROR2","Eroare incercand sa trimit email. Te rog contacteaza-l pe administrator.");
define("REGISTER_ERROR3","Eroare incercand sa trimit date catre baza de date!");
define("REGISTER_INFO1","Contul tau a fost creat.");
define("REGISTER_INFO2","Te rog viziteaza link-ul din email pentru a confirma inregistrarea .");
define("REGISTER_INFO3","Cont confirmat. Administratorul trebuie sa mai activeze contul tau.");
define("REGISTER_BUTTON","Inapoi la pagina principala");
define("REGISTER_NEW_SUBJECT","Un nou utilizator sa inregistrat la galaxytool");
define("REGISTER_NEW_MAILTEXT","Un nou utilizator sa inregistrat.");
// new 4.2
define("REGISTER_BACK","Inapoi pe prima pagina");
// new 4.3.5
define("REGISTER_MISSING_FIELDS","Completati toate casutele");
// new 4.8
define("REGISTER_ERROR4","Adresa de E-mail nu este valida.");
define("REGISTER_ERROR5","Parolele nu se potrivesc.");
define("REGISTER_PWS","Rezistenta parolei");
define("REGISTER_PWS0","foarte slaba");
define("REGISTER_PWS1","slaba");
define("REGISTER_PWS2","buna");
define("REGISTER_PWS3","tare");
define("REGISTER_PWS4","foarte tare");
// new 5.0
define("REGISTER_EMAIL_USED","Adresa de Email este deja folosita");

/*********************************************************************
* lost_password.php
**********************************************************************/
define("LOSTPW_TITLE","Parola pierduta");
define("LOSTPW_INFO2","O parola noua a fost generata si trimisa in email-ul tau.");
define("LOSTPW_BUTTON1","Obtine parola noua");
define("LOSTPW_BUTTON2","Inapoi la pagina principala");
define("LOSTPW_LOGINNAME","Nume Utilizator");
define("LOSTPW_EMAIL","Email");
define("LOSTPW_ERROR1","Eroare incercand sa trimit date la baza de date!");
define("LOSTPW_ERROR2","Nu sa gasit nimica!");
define("LOSTPW_ERROR3","Eroare incercand sa trimit email. Te rog contacteaza administratorul tau.");
define("LOSTPW_EMAIL_SUBJECT","Parola ta cea noua pe care ai cerut-o");
define("LOSTPW_EMAIL_TEXT1","Aici sunt datele noi pentru Galaxytool");
define("LOSTPW_EMAIL_TEXT2","Nume utilizator");
define("LOSTPW_EMAIL_TEXT3","Parola");
// new 5.0
define("LOSTPW_INFO1","Veti primit un email ca sa va verificati cererea deresetare a parolei.");
define("LOSTPW_CONFIRM_RESET_SUBJECT","A-ti pierdut parola?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","Buna,\n\na-ti cerut resetarea parolei pentru Galaxytool. Pentru a genera o noua parola, apasati pe urmatorul link:");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","OGame Galaxytool - Informatii Utilizator");
define("USERINFO_NAMES","Toti userii");
define("USERINFO_DETAIL","informatii detaliate despre");
define("USERINFO_ERROR1","Nici un user cunoscut cu acest ID!");
define("USERINFO_USERNAME","Nume Utilizator");
define("USERINFO_INGAME","Nume in joc");
define("USERINFO_EMAIL","Email");
define("USERINFO_ALLYTAG","Alianta");
define("USERINFO_STYLEPATH","Culoare imagine");
define("USERINFO_STATUS","Status");
define("USERINFO_ACTIVATE","Activeaza jucator");
define("USERINFO_LOGINS","Numarul de conectari");
define("USERINFO_LASTLOGIN","Ultima conectare");
define("USERINFO_DATA","Informatii despre sistemul introdus");
define("USERINFO_NODATA","Acel utilizator nu a introdus nici un sistem inca!");
define("USERINFO_GALAXY","Galaxie");
define("USERINFO_SYSTEMS","Numarul de sisteme");
define("USERINFO_IP","Adresa IP");
define("USERINFO_LOGINTIME","Conectare");
define("USERINFO_NOLOGIN","Jucatorul nu sa conectat niciodata.");
define("USERINFO_LAST_GALAXYUPDATE","Ultima introducere a unui sistem");
define("USERINFO_LAST_PUBLIC_NOTICE","Ultima notita publica");
define("USERINFO_LAST_PRIVATE_NOTICE","Last private notice");
define("USERINFO_NUMBEROF_PUBLIC_NOTICE","Numarul de notite publice");
define("USERINFO_NUMBEROF_PRIVATE_NOTICE","Numarul de notite private");
define("USERINFO_ACTIVATED","Cont activat");
define("USERINFO_ACTIVATIONTEXT","Administratorul The Galaxytool ti-a activat contul.nnDistractie placuta cu Galaxytool!");
// new 4.8
define("USERINFO_LAST_SUBMIT","Inserate ultimele informatii");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","OGame Galaxytool - Istoricul Aliantei");
define("ALLYHISTORY_TBLHEAD","Istoric");
define("ALLYHISTORY_PLAYERNAME","Numele Jucatorului");
define("ALLYHISTORY_ALLYNAME","Alianta");
define("ALLYHISTORY_LASTMONTH","Ultima luna"); // changed at 4.0
define("ALLYHISTORY_ALL_DATA","toate informatiile disponibile"); // new 4.0
define("ALLYHISTORY_SHOW","arata statistica");
define("ALLYHISTORY_TIMESPAN","Timpul"); //timespan ??
define("ALLYHISTORY_PROGESS","Progres");
define("ALLYHISTORY_SCORE","Scoruri");
define("ALLYHISTORY_FSCORE","Scorurile flotei"); // new 4.0
define("ALLYHISTORY_RSCORE","Scorurile Cercetarilor"); // new 4.0
define("ALLYHISTORY_MEMBER","Membrii"); // new 4.0
define("ALLYHISTORY_NOTHING","nu sa gasit nimic");
define("ALLYHISTORY_DETAILS","Detalii");
define("ALLYHISTORY_SHOW_ADDRESS","Coordonate");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","Informatiile jucatorului");
define("DETAILEDINFO_ALLYINFO_TITLE","Informatiile aliantei");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","Informatii detaliate despre jucator");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","Informatii detaliate despre alianta");
define("DETAILEDINFO_NO_ALLIANCE","niciuna");
define("DETAILEDINFO_SCORE","Statistici dupa scor");
define("DETAILEDINFO_FLEET","Statistici dupa flota");
define("DETAILEDINFO_RESEARCH","Statistici dupa cercetari");
define("DETAILEDINFO_RANK","Rank");
define("DETAILEDINFO_POINTS","Scor");
define("DETAILEDINFO_KNOWN_PLANETS","planete cunoscute");
define("DETAILEDINFO_MOONS","luni cunoscute");
define("DETAILEDINFO_PHALANX_AREA","Aria Phalanx");
define("DETAILEDINFO_NO_PHALANX_AREA","nici un Phalanx gasit");
define("DETAILEDINFO_NOTICES","Notite");
define("DETAILEDINFO_NO_NOTICES","Nici o notita gasita");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","Alianta dinainte");
define("DETAILEDINFO_RESOURCES_PER_HOUR","Resurse pe ora");
define("DETAILEDINFO_RESOURCES_PER_DAY","Resurse pe zi");
define("DETAILEDINFO_RESOURCES_PER_WEEK","Resurse pe saptamana");
define("DETAILEDINFO_RESOURCES_PER_MONTH","Resurse pe luna (30 zile)");
define("DETAILEDINFO_METAL","Metal");
define("DETAILEDINFO_CRYSTAL","Cristal");
define("DETAILEDINFO_DEUTERIUM","Deuteriu");
define("DETAILEDINFO_UNKNOWN","necunoscut");
define("DETAILEDINFO_SCORE_DISTRIBUTION","Distribuirea scorului");
// new 4.2
define("DETAILEDINFO_GENERAL","Detalii");
define("DETAILEDINFO_MEMBERS","Membru");
define("DETAILEDINFO_GRAPHS","Grafice");
define("DETAILEDINFO_RESOURCES","Resurse");
define("DETAILEDINFO_FLEET_TAB","Flota");
define("DETAILEDINFO_TECH","Cercetari");
define("DETAILEDINFO_FLEET_DETAIL","Suma / (media jucatorilor) provenit din toate rapoartele");
define("DETAILEDINFO_TECH_DETAIL","Media tuturor informatiilor despre jucator");
// new 4.3
define("DETAILEDINFO_PLANET_TAB",REPORTS_SHOW_PLANETS);
define("DETAILEDINFO_MOON_TAB",REPORTS_SHOW_MOONS);
// 4.7
define("DETAILEDINFO_ACTIVITIES","Activities");
define("DETAILEDINFO_NODATA",VIEW_NODATA); // reuse existing translations
define("DETAILEDINFO_ACTIVITY_DESCRIPTION","Arata activitatile din &1 colectate din:");
define("DETAILEDINFO_GALAXYVIEWS","Vizualizari Galaxie");
define("DETAILEDINFO_SCANS","Actiune de spionare");
define("DETAILEDINFO_MESSAGES","Mesajele jucatorului");
define("DETAILEDINFO_COMBATS","Rapoarte de lupta");
define("DETAILEDINFO_ALLYPAGE","Vizualizare alianta");
define("DETAILEDINFO_MANUAL","Insertii manuale");
define("DETAILEDINFO_START","Inceperea");
define("DETAILEDINFO_TO","la");
define("DETAILEDINFO_TODAY","Astazi");
define("DETAILEDINFO_DATA_RESTRICTION","restrictionat:");
define("DETAILEDINFO_WEEKDAY_WEEKEND","Weekend");
define("DETAILEDINFO_WEEKDAY_WORKINGDAY","Zile din saptamana");
define("DETAILEDINFO_WEEKDAY_MONDAY","Luni");
define("DETAILEDINFO_WEEKDAY_TUESDAY","Marti");
define("DETAILEDINFO_WEEKDAY_WEDNESDAY","Miercuri");
define("DETAILEDINFO_WEEKDAY_THURSDAY","Joi");
define("DETAILEDINFO_WEEKDAY_FRIDAY","Vineri");
define("DETAILEDINFO_WEEKDAY_SATURDAY","Sambata");
define("DETAILEDINFO_WEEKDAY_SUNDAY","Duminica");
define("DETAILEDINFO_WEEKDAY_SHORTLENGTH",3); // number of characters to shorten week day
define("DETAILEDINFO_PLAYER_CURRENTLY_ACTIVE","The player is currently active");
define("DETAILEDINFO_PLAYER_MESSAGES","mesajele valabile ale jucatorului");
define("DETAILEDINFO_SHOW","arata");
define("DETAILEDINFO_NONE","niciuna valabila");
define("DETAILEDINFO_ENTER_MANUALLY","Introdu activitati pentru acest jucator");
define("DETAILEDINFO_PLAYER_SEEN_ON","Jucatorul a fost online la");
define("DETAILEDINFO_INSERT","Introdu");
define("DETAILEDINFO_OGAME_SERVERTIMES","Nota: Toate datele si orele se refera la ora serverului OGame!");
define("DETAILEDINFO_DAY_VIEW","vizualizare de 24 de ore");
define("DETAILEDINFO_WEEK_VIEW","vizualizare saptamanala");
// new 4.8
define("DETAILEDINFO_HOME_PLANET","Planeta Principala");
// new 5.0
define("DETAILEDINFO_PLANETNAME","Nume"); // also used for moons!
define("DETAILEDINFO_DEFENCE_SCORE","Puncte de aparare");
define("DETAILEDINFO_DEFENCE_SCORE_TOOLTIP","Puncte de aparare = Puncte - Flota + Cercetari + Economie.<br/>Toate acele statistici trebuiesc actualizate pentru a avea un rezultat cu sens!");
define("DETAILEDINFO_SCORE_PER_SHIP","Puncte pe nava");
define("DETAILEDINFO_SHIPS","Numar de nave");
define("DETAILEDINFO_DATE_IN_FUTURE","Nu mentine datile care nu se afla in trecut.");

// new 4.2
/*********************************************************************
* administration.php
**********************************************************************/
define("ADMIN_TITLE","Administratia Galaxytool");
define("ADMIN_DISCLAMER","Atentie: Folositi aceste scripturi pe proprie raspundere! Multe dintre ele sterg date.");
define("ADMIN_INCONSISTENCIES","Neconcordante in date");
define("ADMIN_PLANETS","Planete pe pozitia 0 sau mai mare de 15");
define("ADMIN_GALAXIES","Stergere galaxii mai mari de &1 ");
define("ADMIN_PLAYERS","Sterge jucatori fara OGame playerid - rezulta intrari identice ale jucatorilor");
define("ADMIN_REPORTS","Stergere rapoarte daca nu mai exista planeta");
define("ADMIN_MISC","Amestecare");
define("ADMIN_RESET","Resetare Galaxytool (doar ip-urile si userii nu se sterg)");
define("ADMIN_OLD_PLAYERS","Sterge intrarile jucatorului mai vechi de &1 zile");
define("ADMIN_OLD_REPORTS","Sterge rapaorte mai vechi de");
define("ADMIN_LOADING","Nu inchide pagina in timp ce se incarca.");
define("ADMIN_STATUS","Stadiul in care se afla cererea ta");
define("ADMIN_SELECTION","Cel putin o intrare trebuie selectata");
define("ADMIN_SAFETY","Esti sigur ca vrei sa utilizezi acest/e script/uri ?");
define("ADMIN_DONE","Terminat");
define("ADMIN_NOTBD","Nimic de facut");
// new 4.3
define("ADMIN_OLD_GALAXIES","Sterge vizualizarea galaxiilor mai vechi de &1 zile");
define("ADMIN_UNUSED_PLAYERS","Stergere jucatorii ce nu mai exista in nicio vizualizare a galaxiei");
// new 4.7
define("ADMIN_OLD_ACTIVITIES","Inlatura activitatile mai vechi de &1 zile ale jucatorilor");
// new 4.8
define("ADMIN_OLD_COMBATS","Sterge rapoartele de lupta mai vechi de &1 zi");
define("ADMIN_OLD_INGAME_MSG","Sterge mesajele din joc mai vechi de &1 zile");
// new 5.0
define("ADMIN_OGAME_API","Incarca date publice din OGame in Galaxytool");
define("ADMIN_OGAME_ALL_DATA",ALLYHISTORY_ALL_DATA);
define("ADMIN_OGAME_GALAXY_DATA",MENU_GALAXYVIEW);
define("ADMIN_OGAME_STATISTICS_DATA",MENU_STATISTICS);

// new 4.3.5
/*********************************************************************
* errorpage.php
**********************************************************************/
define("ERRORPAGE_PAGEFORWARD","Apasa aici daca browser-ul tau nu suporta redirectionarea");
define("ERRORPAGE_PERMISSION_DENIED","Nu ai permisiunea de a intra pe aceasta pagina. Click pentru a te intoarce.");

// new 4.7
/*********************************************************************
* fleet_movements.php
**********************************************************************/
define("FLEETS_TITLE","Miscarile flotei");
define("FLEETS_ACTUAL_FLEETS","Miscarile curente ale flotei");
define("FLEETS_YES",SHOW_YES);
define("FLEETS_NO",SHOW_NO);
define("FLEETS_DETAILS","Details");
define("FLEETS_MISSION_EXPEDITION","Expeditie");
define("FLEETS_MISSION_COLONIZATION","Colonizare");
define("FLEETS_MISSION_RECYCLE","Recicleaza");
define("FLEETS_MISSION_TRANSPORT","Transport");
define("FLEETS_MISSION_DEPLOYMENT","Desfasurare");
define("FLEETS_MISSION_ESPIONAGE","Spionare");
define("FLEETS_MISSION_ACS_DEFEND","Aparare ACS");
define("FLEETS_MISSION_ATTACK","Atac");
define("FLEETS_MISSION_ACS_ATTACK","Atac ACS");
define("FLEETS_MISSION_MOON_DESTRUCTION","Distrugere luna");
define("FLEETS_MISSION_MISSILE_ATTACK","Atac cu Rachete");
define("FLEETS_NO_DATA","Nicio informatie aplicabila gasita");
// new 5.0
define("FLEETS_FLEET","Flota");
define("FLEETS_ALL_FLEETS","Arata toate miscarile flotei");

/*********************************************************************
* parser_combat_reports.inc.php
**********************************************************************/
define("COMBAT_REPORT_OUDATED_GALAXYVIEW","Informatiile galaxiei sunt invechite. Va rog vizitati prima data originea luptei si coordonatele tintei!");

/*********************************************************************
* messages.php
**********************************************************************/
define("MESSAGES_TITLE","OGame Galaxytool - Mesaje OGame");
define("MESSAGES_PLAYERNAME","Numele jucatorului");
define("MESSAGES_SUBJECT","Subiect");
define("MESSAGES_DATE","Data");
define("MESSAGES_FILTER","Filtru");
define("MESSAGES_DELETE","Sterge mesaj");
define("MESSAGES_PUBLISH_DETAIL","Publica mesajul adaugand mesajul la continutul textului notitei jucatorului.");
define("MESSAGES_PUBLISH_HEADER","&sender a trimis un mesaj lui &recipient pe &date:\n\n &message"); // &sender, &recipient, &date, &message replaced at runtime
define("MESSAGES_PLAYER_FILTER","Mesaje pentru jucatori:");
// new 5.0
define("MESSAGES_CONTENT","Continut");

/*********************************************************************
* combat_reports.php
**********************************************************************/
define("COMBATS_TITLE","OGame Galaxytool - Rapoarte de lupta");
define("COMBATS_ATTACKER","Atacator");
define("COMBATS_DEFENDER","Aparator");
define("COMBATS_DATE","Data");
define("COMBATS_OWNER","Detinator");
define("COMBATS_WINNER","Castigator");
define("COMBATS_COMBATREPORT","Raport de Lupta");
define("COMBATS_COMBAT_AT","Lupta la");
define("COMBATS_LOST_UNITS","Unitati pierdute");
define("COMBATS_LOOT","Prada");
define("COMBATS_DEBRIS","Camp de Ramasite");
define("COMBATS_AND","si");
define("COMBATS_PUBLISH","Partajeaza acest raport");
define("COMBATS_UNPUBLISH","Anulati partajarea acestui raport(fa-l din nou privat)");
define("COMBATS_DELETE","Sterge raportul");
define("COMBATS_CHECK_ALL","Bifeaza Tot");
define("COMBATS_UNCHECK_ALL","Debifeaza Tot");
define("COMBATS_WITH_SELECTED","Cu selectate");
define("COMBATS_PUBLIC_REPORTS","Rapoarte publice");
define("COMBATS_YES",SHOW_YES); // no need for translation!
define("COMBATS_NO",SHOW_NO); // no need for translation!
define("COMBATS_SEARCH_OPTIONS","Optiuni de cautare");
define("COMBATS_SEARCH","Du-te");
define("COMBATS_RESET","Reseteaza");
// 4.8
define("COMBATS_COORDINATES",USER_BB_COORDINATES);
define("COMBATS_INVALID_GALAXY_ENTERED","Galaxie invalida introdusa");
define("COMBATS_INVALID_SYSTEM_ENTERED","Sistem invalid introdus");
define("COMBATS_INVALID_PLANET_ENTERED","Planeta invalida introdusa");
define("COMBATS_GALAXY_FROM_TO","Galaxie");
define("COMBATS_SYSTEM_FROM_TO","Sistem");
define("COMBATS_PLANET_FROM_TO","Planeta");
define("COMBATS_APPLY",GENERAL_APPLY);
define("COMBATS_COMBAT_SUMMARY","Sumarul rapoartelor de lupta");
define("COMBATS_DOWNLOAD_CSV","Descarca ca fisiers CSV");

/*********************************************************************
* report_archive.php
**********************************************************************/
define("REPORT_ARCHIVE_TITLE","Arhiva Rapoartelor");
define("REPORT_ARCHIVE_COORDINATES","Coordonate");
define("REPORT_ARCHIVE_SCANTIME","Timp de Scanare");
define("REPORT_ARCHIVE_DELETE","Sterge aceste intrari");
define("REPORT_ARCHIVE_CONFIRM_DELETE","Esti sigur ca vrei sa stergi aceste intrari?");
define("REPORT_ARCHIVE_GALAXY","Galaxie");
define("REPORT_ARCHIVE_SYSTEM","Sistem");
define("REPORT_ARCHIVE_PLANET","Planeta");
define("REPORT_ARCHIVE_MOON","Luna");
define("REPORT_ARCHIVE_DETAILS","Detalii");
define("REPORT_ARCHIVE_RESOURCES",DETAILEDINFO_RESOURCES);
define("REPORT_ARCHIVE_HEADER_RESOURCES",REPORTS_RESOURCES);
define("REPORT_ARCHIVE_DETAILS_FOR","Arhiva rapoartelor pentru &1 [&2] (&3)"); // &1 = planetname; &2 = coordinates; &3 = playername
define("REPORT_ARCHIVE_FLEET_CARGO","Capacitatea de transporta flotei ");
define("REPORT_ARCHIVE_IRAK_RANGE","Raza Rachetelor Interplanetare");
define("REPORT_ARCHIVE_CHART_TYPE","Tipul graficului");

/*********************************************************************
* install.php
**********************************************************************/
define("INSTALL_TITLE", "Instalarea Galaxytool pentru versiunea");
define("INSTALL_PROGRESS", "Progres");
define("INSTALL_STEP", "Pas");
define("INSTALL_CONTINUE", "Continua");
define("INSTALL_VALIDATE", "Valideaza");
define("INSTALL_STEP1", "Bine ai venit");
define("INSTALL_STEP2", "Bifa inscriptibila");
define("INSTALL_STEP3", "Setarile bazi de date");
define("INSTALL_STEP4", "Setari OGame");
define("INSTALL_STEP5", "Setari Galaxytool");
define("INSTALL_STEP6", "Parola administratorului");
define("INSTALL_STEP7", "Instaleaza Galaxytool");
define("INSTALL_STEP8", "Finalizeaza instalarea"); // bifa inscriptibila; sterge install si update.php si redirectioneaza-ma spre index.php
define("INSTALL_FILE_DELETE_CHECK","Va rugam stergeti install.php si update.php de pe serverul dumneavoastra.");

define("INSTALL_STEP1_PHP_FAILED", "Versiunea dumneavoastra PHP &1 nu este compatibila cu aceasta versiunea de Galaxytool");
define("INSTALL_STEP1_FOPEN_FAILED", "Versiunea dumneavoastra PHP nu permite sa deschideti pagini web cu comanda FOPEN() . Aceasta este necesara pentru a consuma OGame API.");
define("INSTALL_STEP1_WELCOME", "Bun venit la vrajitorul de instalare Galaxytool. Veti fi ghidat prin instalarea Galaxytool.");

define("INSTALL_STEP2_DESCRIPTION","Asigurativa ca fisierele config.php si attributes.php au permisiunea de scriere activata.");
define("INSTALL_STEP2_DESCRIPTION2","Daca nu stiti cum sa reusiti acest lucru, va rog sa va uitati aici: &1");
define("INSTALL_STEP2_FILE_NOT_WRITEABLE", "Fisierul nu este inscriptionabil");

define("INSTALL_STEP3_SERVER", "Serverul bazei de date");
define("INSTALL_STEP3_USERNAME", L_USERNAME);
define("INSTALL_STEP3_PASSWORD", L_PASSWORD);
define("INSTALL_STEP3_DBNAME", "Numele bazei de date");
define("INSTALL_STEP3_PREFIX", "Prefixul numelui tabelului");
define("INSTALL_STEP3_ENTER_PREFIX", "Ex. mytool_");
define("INSTALL_STEP3_ENTER_SERVER", "Introduceti adresa serverului. Contactati administratorul dumneavoastra de sistem daca este necesar. In mod normal valoarea corecta este localhost..");
define("INSTALL_STEP3_ENTER_USERNAME", "Introduceti utilizatorul pentru acces la baza de date");
define("INSTALL_STEP3_ENTER_PASSWORD", "Introduceti parola pentru acces la baza de date");
define("INSTALL_STEP3_ENTER_DBNAME", "Introduceti numele bazei de date care va fi folosit pentru instalare ( trebuie sa existe )");
define("INSTALL_STEP3_CONNECT_FAILED", "Nu s-a putut realiza conectarea la serverul cu baza de date");
define("INSTALL_STEP3_DB_FAILED", "Baza de date &1 nu a fost gasita");
define("INSTALL_STEP3_MYSQL_VERSION_FAILED", "MySQL versiunea &1 nu este compatibila cu aceasta versiunea de Galaxytool");

define("INSTALL_STEP4_URL","OGame URL");
define("OGAME_URL_DETAILS","Introduceti orice URL vedeti cand va logati in OGame. Bazat pe acel URL Galaxytool va deriva adresa API OGame care care poate fi folosit la completarea datelor Galaxytool fara Galaxytoolbar. Acest API a fost introdus cu versiunea OGame 4.1");
define("INSTALL_STEP4_UNIVERSE","Universul OGame");
define("INSTALL_STEP4_DEF_TO_DEBRIS","Apararea la camp de ramasite");
define("INSTALL_STEP4_DEBRIS_RATE","Debris rate");
define("INSTALL_STEP4_SPEED_RATE","Viteza");
define("INSTALL_STEP4_ENTER_UNIVERSE","Introduceti numele sau numarul universului dumneavoastra OGame .");
define("INSTALL_STEP4_UNIVERSE_MISSING","Trebuie sa definiti universul dumneavoastra");
define("INSTALL_STEP4_ENTER_URL","Introduceti adresa universului dumneavoastra OGame");
define("INSTALL_STEP4_URL_MISSING","Trebuie sa definiti adresa dumneavoastra OGame");
define("INSTALL_STEP4_URL_CHECK_FAILED","Nu s-a putut gasi OGame API la &1");
// 5.1
define("INSTALL_STEP4_GETSETTINGS","Fetch settings");

define("INSTALL_STEP5_TOOLNAME","Nume Galaxytool");
define("INSTALL_STEP5_ENTER_TOOLNAME","Acesta este numele care va fi afisat pe pagina de conectare pentru a va putea identifica Galaxytool-ul");
define("INSTALL_STEP5_LANGUAGE","Limba implicita");
define("INSTALL_STEP5_EMAIL_TO","Email La");
define("INSTALL_STEP5_ENTER_EMAIL_TO","Introduceti adresa de Email unde a-ti dori sa primiti notificari in legatura cu noile inregistrari");
define("INSTALL_STEP5_EMAIL_FROM","Email de la");
define("INSTALL_STEP5_ENTER_EMAIL_FROM","Acest Email este aratat ca RASPUNS pentru toate email-urile trimise de Galaxytool");
define("INSTALL_STEP5_USE_PHPMAILER","Foloseste PHPMailer");
define("INSTALL_STEP5_MAXSHOUTS","Numarul maxim de intrari in shoutboxMaximum number of shoutbox entries");
define("INSTALL_STEP5_ENTER_USE_PHPMAILER","Folositi PHPMailer daca serverul nu suporta trimiterea emailurilor implicit");
define("INSTALL_PHPMAILER_HOST","SMPT Host");
define("INSTALL_PHPMAILER_HOST_EXAMPLE","ex. smtp.provider.com");
define("INSTALL_PHPMAILER_USER","SMPT Utilizator");
define("INSTALL_PHPMAILER_USER_EXAMPLE","ex. user@provider.dcom");
define("INSTALL_PHPMAILER_PASS","SMPT parola");
define("INSTALL_PHPMAILER_SECURE","Metoda de autentificare (ex. ssl)");
define("INSTALL_PHPMAILER_PORT","SMTP Port");

define("INSTALL_STEP6_INTRO","Definiti parola pentru contul <strong>admin</strong> care trebuie sa-l folositi pentru prima conectare la galaxytool dupa instalare.");

define("INSTALL_STEP7_CONFIG","Fisier de configurare creat");
define("INSTALL_STEP7_CONFIG_FAILED","Fisierul de configurare nu a fost creat");
define("INSTALL_STEP7_ATTRIBUTES","Fisierul de atribute creat");
define("INSTALL_STEP7_ATTRIBUTES_FAILED","Fisierul de atribute nu a fost creat");
define("INSTALL_STEP7_CREATED_TABLES","Tabelurile bazei de date create");

define("INSTALL_STEP8_INTRO","A-ti instalat cu succes Galaxytool!");
define("INSTALL_STEP8_LOAD_DATA","Descarcare date OGame...");
define("INSTALL_STEP8_LOAD_DATA_FINISHED","Descarcarea datelor OGame finalizata");
define("INSTALL_STEP8_DELETE_FILE","Acum ar trebui sa stergeti fisierele install.php si update.php de pe serverul dumneavoastra.");
define("INSTALL_STEP8_LOGON","Conectati-va cu utilizatorul <strong>admin</strong> si parola definita mai devreme.");

/*********************************************************************
* update.php
**********************************************************************/
define("UPDATE_START","Se porneste actualizarea la versiunea &1");
define("UPDATE_STEP_DONE","Terminat");
define("UPDATE_TITLE", "Galaxytool actualizare pentru versiune");
define("UPDATE_STEP1_WELCOME", "Bun venit la vrajitorul de actualizare Galaxytool. Veti fi ghidat prin actualizarea Galaxytool.");
define("UPDATE_STEP1_BACKUP_FILES", "Un prim pas este sa faceti o salvare de tip backup a fisierului  <strong>config</strong> ! Veti fi nevoit sa inlocuiti continutul configurarii in cazul unei erori.");
define("UPDATE_STEP1_BACKUP_DB", "Apoi faceti o salvare de tip <a href=\"http://www.ehow.com/how_2036600_create-database-php.html\">backup</a> a bazei de date.");
define("UPDATE_STEP1_PROCEED", "Dupa ce salvarile au fost reusite, puteti continua cu actualizarea dumneavoastra.");
define("UPDATE_STEP1", INSTALL_STEP1);
define("UPDATE_STEP2", INSTALL_STEP5);
define("UPDATE_STEP2_OLD_VERSION", "Versiunea precedenta de Galaxytool");
define("UPDATE_STEP3", "Update Galaxytool");
define("UPDATE_STEP3_UPDATE_RUNNING", "Actualizarea ruleaza, va rugam asteptati...");
define("UPDATE_STEP4", "Finalizeaza Actualizare");
define("UPDATE_STEP4_INTRO","A-ti actualizat cu succes Galaxytool!");
define("UPDATE_STEP4_UPDATE_DONE","Pasi de actualizare realizati.");
define("UPDATE_FAILED","Actualizarea a esuat.");

?>