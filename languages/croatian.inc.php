<?php
/*
 * defines the characters used in OGame to indicate player status
 */
define("PLAYER_BANNED","k");
define("PLAYER_VACATION_MODE","o");
define("PLAYER_NOOB","s");
define("PLAYER_INACTIVE","i");
define("PLAYER_LONG_INACTIVE","I");
define("PLAYER_OUTLAW","o");

/*********************************************************************/
/***************************** public ********************************/
/*********************************************************************/
//index.php
define("L_USERNAME","Korisničko ime");
define("L_PASSWORD","Šifra");
define("L_LOGINFAILURE","Korisničko ime ili šifra su pogrešni ili vaš račun nije još aktiviran.");
define("L_TOKENFAILURE","Your logon key is wrong or your account is not activated yet.");
define("L_LOGINTEXT","Molimo vas prijavite se.");
define("L_LANGUAGE","Dostupni jezici:");
define("L_TIMEOUT","Sesija je istekla!");
define("L_REGISTER","Registracija");
define("L_PWLOST","Zaboravljena šifra");
define("INDEX_TITLE","Pregled");
define("INDEX_INFO","Informacije");
define("INDEX_ENTRIES","Broj svih sistema");
define("INDEX_ENTRIES_LASTWEEK","Novi sistemi od prošlog tjedna");
define("INDEX_ENTRIES_TO_OLD","Sistemi stariji od mjesec dana");
define("INDEX_REGISTERED_USERS","Registrirani korisnici");
define("INDEX_PAGEFORWARD","Ako vaš preglednik ne podržava automatsko preusmjeravanje stranica molim vas kliknite ovdje.");
define("INDEX_NOTICES","Objave");
define("INDEX_PLAYERS","Statistike igrača");
define("INDEX_ALLIES","Statistike saveza");
define("INDEX_REPORTS","Izvještaji špijunaže");
define("INDEX_VERSION","Zadnja dostupna verzija za download");
define("INDEX_SHOUTBOX","Shoutbox");
define("INDEX_NOENTRY","Trenutno nema poruka");
define("INDEX_COMMENT","Vaša poruka");
define("INDEX_INSERT","Unesi");
define("INDEX_UMOD","Igrač u modusu odsustva");
define("INDEX_LATEST_VERSION","Nema novije dostupne verzije"); // todo
define("INDEX_NO_MOONS","Broj mjeseci");
define("INDEX_NO_EMPTY_SYSTEMS","Broj praznih sistema");
define("INDEX_NO_FULL_SYSTEMS","Broj potpuno punih sistema");
define("INDEX_NO_TARGETS","Broj mogućih meta");
// 4.0
define("INDEX_USERINFO","Broj korisnika");
define("INDEX_ONLINE","Trenutno online");
define("INDEX_TODAY","Danas online");
define("INDEX_ALL","Ukupan broj prijava");
// 4.3.7
define("GENERAL_LOAD_FORM","Učitaj podatke");
define("GENERAL_SAVE_FORM","Spremi podatke");
define("GENERAL_SAVE_AS_TEXT","Spremi kao");
define("GENERAL_SAVE","Spremi");
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
define("GENERAL_OPEN_IN_NEW_WINDOW","Otvori poveznicu u novom prozoru");
// 5.1
define("GENERAL_UNIT_OF_MEASURE_DAYS","Days");

/*********************************************************************/
/***************************** internal ******************************/
/*********************************************************************/
// index.php
define("PROGRAM_NAME","OGame Galaxytool");
define("SHORTNAME","Galaxytool");
define("BACK_INDEX","Nazad na početnu stranicu");
define("UNIVERSE","Univerzum");

// search
define("MENU_INFO_LINKS","Informacije");
define("MENU_PAGE","Pregled");
define("MENU_DB_SEARCH","Traži u bazi");
define("MENU_DB_NOTICES","Traži u objavama");
define("MENU_DB_REPORTS","Traži u izvještajima");
define("MENU_GALAXYVIEW","Pregled galaksije");
define("MENU_STATISTICS","Statistike");
define("MENU_ALLYHISTORY","Povijest saveza");
// 4.7
define("MENU_FLEET_MOVEMENTS","Fleet movements");
define("MENU_COMBAT_REPORTS","Combat reports");
define("MENU_MESSAGES","Ingame messages");

// insert / change
define("MENU_OPTION_LINKS","Opcije");
define("MENU_DB_REFRESH","Ubaci u bazu");
define("MENU_NOTICES","Objave");
define("MENU_DB_STATUS","Stanje baze");
define("MENU_USEROPTIONS","Upravljanje korisnicima");
define("MENU_USEROPTIONS2","Opcije korisnika");
define("MENU_USEROPTIONS3","Informacije o korisniku");
// 4.2
define("MENU_ADMIN","Administracija");
// 4.3.3
define("MENU_LOGOUT","Odjava");

// Stuff
define("MENU_STUFF","Ostalo");
define("MENU_FORUM_THREAD","Forum razvojnog tima");
define("MENU_DOWNLOADPAGE","Stranica za download");
define("MENU_LANGUAGE","Jezik");
define("MENU_HELP","Pomoć");
// 4.0
define("MENU_TOOLOPTIONS","Galaxytool opcije");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1"," je ubačeno u bazu");
define("PARSER_ERROR1","Greška prilikom ubacivanja ovih koordinata u bazu:");
define("PARSER_ERROR2","Baza nije pronađena!");
define("PARSER_ERROR3","Server baze nije pronađen!");
define("PARSER_WRONG_UNIVERSE","Wrong universe - actual: \"&1\"  expected: \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","OGame Galaxytool - Stranica za pretragu");
define("SHOW_SEARCH","Traži u bazi");
define("SHOW_ALLYSYMBOL","Tag saveza");
define("SHOW_PLAYERNAME","Ime igrača");
define("SHOW_MOONS","Samo planete sa mjesecom");
define("SHOW_NOTICES","Samo planete sa objavama");
define("SHOW_COLONIES","Samo planete za kolonizaciju");
define("SHOW_YES","Da");
define("SHOW_NO","Ne");
define("SHOW_SEARCHRANGE","Domet");
define("SHOW_SEARCH_IN","Traži u galaksiji");
define("SHOW_FROM_SYSTEM","od sistema");
define("SHOW_FROM_PLANET","od pozicije planete");
define("SHOW_TO","do");
define("SHOW_DESCRIPTION","Možete koristiti * za imena igrača i saveza. <br />Popunite samo ona polja koja želite specifirati.");
define("SHOW_SORT_BY","Sortiraj po ");
define("SHOW_GALASYSTEM","Galaksija/Sistem");
define("SHOW_ALLYNAME","Ime saveza");
define("SHOW_SEARCHBUTTON","Traži");
define("SHOW_ADDRESS","Koordiante");
define("SHOW_ALLYSORT","Savez");
define("SHOW_PLANET","Ime planete");
define("SHOW_STATUS","Status");
define("SHOW_CURRENTNESS","Starost");
define("SHOW_PLAYER_STATUS","Status igrača");
define("SHOW_PLAYER_STATUS1","svi");
define("SHOW_PLAYER_STATUS2","moguće mete");
define("SHOW_PLAYER_STATUS3","inaktivni");
define("SHOW_HITS","Rezultata");
define("SHOW_OF","od");
define("SHOW_ASC","abecedni poredak");
define("SHOW_DESC","obrnuti abecedni poredak");
define("SHOW_RESULTS","Rezultata po stranici");
define("SHOW_MOON","Mjesec");
define("SHOW_UKMOONSIZE","nepoznato");
define("SHOW_DF","RU");
define("SHOW_DF_LONG","Ruševina");
define("SHOW_METAL","M");
define("SHOW_METAL_LONG","Metal");
define("SHOW_CRYSTAL","K");
define("SHOW_CRYSTAL_LONG","Kristal");
define("SHOW_BOTH","oboje zajedno");
define("SHOW_AT_LEAST","(najmanje)");
define("SHOW_DATE","Datum");
define("SHOW_DATE_0","nije važno");
define("SHOW_DATE_1","starije od");
define("SHOW_DATE_2","novije od");
define("SHOW_RANK","Mjesto");
define("SHOW_FRANK","Mjesto Flote");
define("SHOW_MEMBERS","Članovi");
define("SHOW_NOTRANKED","Nije u top 1500");
define("SHOW_NOTICERES","Objave");
define("SHOW_REPORTS","Samo planete sa izvještajima");
define("SHOW_REPORTS_SHORT","Izvještaji");
define("SHOW_NOTHING","Nema rezultata");
define("SHOW_ALLIANCE_STATUS","Status saveza");
define("SHOW_NO_STATUS","bez Statusa");
define("SHOW_NAP","NAP");
define("SHOW_ALLIED","Savezni");
define("SHOW_WAR","Rat");
define("SHOW_BOYCOTT","Bojkotirati");
define("SHOW_NEUTRAL","Neutralni");
define("SHOW_OWN","Vlastiti Savez");
define("SHOW_WING","Wing");
// obsolete with 5.0
define("SHOW_EXT_OPTIONS1","Prikaži više opcija za tražiti domet, rang, datum ili ruševine.");
define("SHOW_EXT_OPTIONS2","Prikaži više opcija za tražiti kolonije, mjesece, izvještaje, bilješke, statistike igrača ili diplomatski status.");
define("SHOW_EXT_OPTIONS3","Prikaži više opcija za tražiti sortirano od pretraživanih rezultata.");
// new 5.0
define("SHOW_EXTENDED","advanced search");
define("SHOW_MOON_SELECTION","Planet with moon");
define("SHOW_REPORT_SELECTION","Planet with report");
define("SHOW_FILTER_BY","Exclude from the list");
define("SHOW_FILTER_NONE","nijedna");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Show players without score changes within the last few days");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","OGame Galaxytool - statusna stranica");
define("STATUS_DB_STATUS","Status baze");
define("STATUS_COLOR","Boja");
define("STATUS_AGE1","Unos 1 dan star.");
define("STATUS_AGE2","Unos 2 - 4 dana star.");
define("STATUS_AGE3","Unos 4 - 7 dana star.");
define("STATUS_AGE4","Unos 1 - 2 tjedna star.");
define("STATUS_AGE5","Unos 2 - 4 tjedna star.");
define("STATUS_AGE6","Unos stariji od 1 mjeseca!");
define("STATUS_AGE7","Unos nije dostupan.");
define("STATUS_ON","uključeno");
define("STYLES_COLOR1","Boja1");
define("STYLES_COLOR2","Boja2");
define("STYLES_COLOR3","Boja3");
define("STYLES_COLOR4","Boja4");
define("STYLES_COLOR5","Boja5");
define("STYLES_COLOR6","Boja6");
define("STYLES_COLOR7","Boja7");
// 4.8
define("STATUS_DB_LEGEND","Legend");
define("STATUS_GALAXY","Galaxy Overview");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","OGame Galaxytool - upravljanje korisnicima");
define("USER_NAMES","Korisnik");
define("USER_ERROR","Greška");
define("USER_NEWUSER","Novi korisnik");
define("USER_GALAXY","Galaksija");
define("USER_OPTIONS","Opcije");
define("USER_USERNAME","Korisničko ime");
define("USER_PASSWORD","Šifra");
define("USER_PASSWORD_CONFIRM","Potvrdi šifru");
define("USER_SEARCH","Pretraga");
define("USER_INSERT","Unosi");
define("USER_DELETE","obriši");
define("USER_DELETE_Unos","Da li želite izbrisati korisnika: ");
define("USER_STATUS","Vidi statistiku");
define("USER_STYLES","Izmjeni izgled");
define("USER_SUBMIT","Pošalji");
define("USER_RESET","Poništi");
define("USER_YES","Da");
define("USER_NO","Ne");
define("USER_STYLEPATH","Putanja do styles.css");
define("USER_PROBES","Pregledaj/Pošalji izvještaj špijunaže");
define("USER_EMAIL","Email");
define("USER_ERROR1","Šifra netočna ili je Email neispravan.");
define("USER_ERROR2","Email neispravan.");
define("USER_INGAME","Ime u igri");
define("USER_ALLYTAG","Savez");
define("USER_ALLYHISTORY","Pregledaj/Pošalji povijest saveza");
define("USER_DIPLOMATIC","Promijeni diplomatski status");
define("USER_STATSPAGE","Broj unosa na statistici");
define("USER_LINKS","Linkovi");
define("USER_LINKS2","Format:<br>text;url<br>text2;url2<br>text3;url3");
define("USER_EXPORT_TITLE","Izvezi boje (BB Kodove)");
define("USER_BB_COORDINATES","Koordinate");
define("USER_BB_MOON","Mjesec");
define("USER_BB_DEBRIS","Ruševine");
define("USER_BB_ALLY","Ime saveza");
define("USER_BB_ALLYDETAILS","Detalji saveza");
define("USER_BB_PLAYERNAME","Igrač");
define("USER_BB_BANNED","kažnjen");
define("USER_BB_VACATION","modus odsustva");
define("USER_BB_NOOB","noob");
define("USER_BB_INACTIVE","Inaktivan");
define("USER_BB_LONGINACTIVE","Dugo inaktivan");
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
define("VIEW_TITLE","OGame Galaxytool - detalji");
define("VIEW_NODATA","Podaci nisu dostupni.");
define("VIEW_GALAXY","Galaksija");
define("VIEW_SYSTEM","Solarni sistem");
define("VIEW_POSITION","Pozicija");
define("VIEW_PLANET","Planeta");
define("VIEW_MOON","Mjesec");
define("VIEW_TF","RU");
define("VIEW_PLAYER","Igrač");
define("VIEW_PLAYER_ADD","(Mjesto / Status)");
define("VIEW_ALLY","Savez");
define("VIEW_ALLY_ADD","(Mjesto / Članova)");
define("VIEW_METAL","M");
define("VIEW_CRYSTAL","K");
define("VIEW_COLONISED","Planeta naseljena");
define("VIEW_UKMOONSIZE","nepoznato");
define("VIEW_BACK","nazad");
define("VIEW_NOTICE","Objave");
define("VIEW_REPORTS","Izvještaji");
define("VIEW_MOONPHALANX","Slijedeći mjeseci mogu skenirati ovaj sistem");
define("VIEW_NOMOONS","Nema mjeseca");
define("VIEW_IRAKS","Slijdeće planete mogu dosegnuti ovaj sistem sa Interplanetarnim raketama");
define("VIEW_NOIRAKS","Nije pronađena ni jedna Interplanetarna raketa");
// 4.0
define("VIEW_MOON_DESTROY_CHANCE","Šansa za uništiti mjesec");
define("VIEW_CHANCE_WITH_ONE","Šansa sa jednom zvijezdom smrti");
define("VIEW_CHANCE_WITH_N","Šansa sa ");
define("VIEW_DEATH_STARS","zvijezda smrti");
define("VIEW_DS_DESTROY_CHANCE","Šanse za izgubiti zvijezdu(e) smrti");
define("VIEW_TOP","Top");
// new 4.3.5
define("VIEW_GO","go");
// new 5.0
define("VIEW_DIAMETER","Diameter");

/*********************************************************************
* change_password.php
**********************************************************************/
define("PW_TITLE","OGame Galaxytool - promjena šifre");
define("OLD_PASSWORD","stara šifra");
define("NEW_PASSWORD","nova šifra");
define("CONFIRM_NEW_PASSWORD","potvrdi novu šifru");
define("PW_MISMATCH","Šifre se ne poklapaju!");
define("PW_ERROR","Stara šifra nije točna!");
define("UPDATE_DONE","Update uspješan.");
// new 4.2
define("TIMEZONE_OFFSET","Pomak vremenske zone na server");
// new 4.3
define("DELETE_ACCOUNT","Izbriši ovaj Galaxytool račun");
define("DELETE_ACCOUNT_SAFETY_REQUEST","Dali zaista želite izbrisati ovaj Galaxytool račun?");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","Autorizacija");
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
define("NOTICE_TITLE","OGame Galaxytool - objave");
define("NOTICE_HEADER","izmjena objava");
define("NOTICE_HEADER2","Izmjeni svoje objave");
define("NOTICE_PUBLIC","Dostupno drugima ?");
define("NOTICE_YES","da");
define("NOTICE_NO","ne");
define("NOTICE_TEXT","Tekst objave");
define("NOTICE_SAVE","Spremi");
define("NOTICE_DELETED","Unos obrisan");
define("NOTICE_SAVED","Unos spremljen");
define("NOTICE_RESULTS","Svi rezultati");
define("NOTICE_USER","Korisnik");
define("NOTICE_DATE","Datum");
define("NOTICE_EDIT","Izmjeni");
define("NOTICE_DELETE","Obriši");
define("NOTICE_NEW","Kreiraj novi unos");
define("NOTICE_NOTPUBLIC","Objava nije javna.");
define("NOTICE_ALL","sve");
define("NOTICE_NONE",SHOW_FILTER_NONE);
define("NOTICE_SEARCH","Traži u objavama");
define("NOTICE_SEARCH_SHORT","Traži");
define("NOTICE_HITS","Rezultati");
define("NOTICE_SHOWRESULTS","Rezultata po stranici");
define("NOTICE_OF","od");
define("NOTICE_NOTHING","Ni jedan rezultat nije pronađen");
// 4.0
define("NOTICE_CHARS","Znakovi");
define("NOTICE_PLAYERNAME","Igrač");
define("NOTICE_SHOWALL","Prikaži sve objave");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","OGame Galaxytool - Izvještaj špijunaže");
define("REPORTS_RESOURCES","Resursi");
define("REPORTS_FLEET","Flote");
define("REPORTS_DEFENCE","Obrana");
define("REPORTS_BUILDINGS","Zgrade");
define("REPORTS_TECHNOLOGY","Istraživanje");
define("REPORTS_MOON","Mjesec");
define("REPORTS_SEARCH","Traži u izvještajima špijunaže");
define("REPORTS_SEARCH_SHORT","Traži");
define("REPORTS_HITS","Rezultata");
define("REPORTS_NOTHING","Unos nije pronađen");
define("REPORTS_ADDRESS","Adresa");
define("REPORTS_CURRENTNESS","Starost");
define("REPORTS_PLAYERNAME","Ime igrača");
define("REPORTS_ALLY","Savez");
define("REPORTS_VIEW","Pogledaj izvještaj");
define("REPORTS_SEARCH_IN","Traži u galaksiji");
define("REPORTS_FROM_SYSTEM","od sistema");
define("REPORTS_TO","do");
define("REPORTS_DELETE","obriši");
define("REPORTS_DELETED","Unos izbrisan");
define("REPORTS_RESULTS","Rezultata po stranici");
define("REPORTS_OF","od");
define("REPORTS_DATE","Datum");
define("REPORTS_DATE_0","nije važno");
define("REPORTS_DATE_1","starije od");
define("REPORTS_DATE_2","novije od");
define("REPORTS_NOTICES","Objave");
define("REPORTS_AT_LEAST_RESOURCES","Resursi (barem)");
define("REPORTS_SEARCH_EXTENDED","Prošireno pretraživanje");
define("REPORTS_FLEET_RESIS","Bodovi flote");
define("REPORTS_DEFENCE_RESIS","Bodovi obrane");
define("REPORTS_ALL_RESIS","ukupno bodova");
define("REPORTS_TECHS","Tehnologije");
define("REPORTS_UNKNOWN_ENTRIES","nepoznati unosi");
define("REPORTS_PARTLY_INSERTED","djelomično unešeno");
define("REPORTS_FOR_ALL_RES","za sve resurse");
define("REPORTS_FOR_TF","za ruševine");
define("REPORTS_KT","Mali transporter");
define("REPORTS_GT","Veliki transporter");
define("REPORTS_SS","Borbeni brodovi");
define("REPORTS_REC","Recikler");
define("REPORTS_RAIDABLE","Jedino mete za raid");
define("REPORTS_ALL_RESOURCES","svi resursi");
// 4.0
define("REPORTS_STUFF","Ostalo");
define("REPORTS_SPEEDSIM","Simuliraj sa Speedsimom");
define("REPORTS_DRAGOSIM","Simuliraj sa Dragosim");
define("REPORTS_STATUS","Status");
define("REPORTS_ERROR","Greška");
// 4.2
define("REPORTS_OWN_REPORTS","Samo moji izvještaji");
// 4.3.3
define("REPORTS_UPLOAD_BY","Izvještaj unio");
// 4.4
define("REPORTS_DEPTH","Detaljnost izvještaja");
define("REPORTS_FLEET_SCORE","Bodovi flote");
define("REPORTS_DEFENCE_SCORE","Bodovi obrane");
// 5.0
define("REPORTS_HOURS","hours");
define("REPORTS_MAX_RESULTS_HIT","Your query returned more than &1 hits. Only the first &1 results are show. Please adjust your search request to get less results.");
define("REPORTS_OSIMULATE","Simulate with OSimulate");
define("REPORTS_SHOW_ONLY","Show only");
define("REPORTS_SHOW_PLANETS","Planeta");
define("REPORTS_SHOW_MOONS","Mjesec");
define("REPORTS_OWNER","Reports owned by");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","OGame Galaxytool - Statistike");
define("STATS_TBLHEAD","Statistike");
define("STATS_RANK","Mjesto");
define("STATS_PLAYERNAME","Ime igrača");
define("STATS_ALLYNAME","Tag saveza");
define("STATS_SCORE","Bodovi");
define("STATS_FLEET","Flota");
define("STATS_RESEARCH","Istraživanje");
define("STATS_MEMBERS","Članovi");
define("STATS_STATUS","Status");
define("STATS_NOTHING","Nema statusa");
define("STATS_NAP","NAP");
define("STATS_ALLIED","Saveznik");
define("STATS_WAR","Rat");
define("STATS_BOYCOTT","Bojkot");
define("STATS_NEUTRAL","Neutralan");
define("STATS_OWN","Vlastiti Savez");
define("STATS_WING","Wing");
define("STATS_UPDATE","Unos od");
define("STATS_PLAYERSTATS","Statistika igrača");
define("STATS_ALLYSTATS","Statistika saveza");
// 4.0
define("STATS_DELETE","Da li želite izbrisati ovaj unos?");
define("STATS_CONFIRM_DELETE","Da li stvarno želite izbrisati ovaj igračev unos?");
define("STATS_CHANGE_PLAYER_STATUS","Statistika igrača");
define("STATS_CHANGE_ALLIANCE_STATUS","Statistika saveza");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","Svi članovi ovog saveza dobivaju izabrani status. Svaki prijašnji status će biti promijenjen. Možete promijeniti status nekih igrača naknadno.");
define("STATS_UNKNOWN","Ostatak");
define("STATS_DETAILS","Detalji za");
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
define("REGISTER_REGISTRATE","Registracija");
define("REGISTER_LOGINNAME","Korisničko Ime");
define("REGISTER_PASSWORD","Šifra");
define("REGISTER_PASSWORD_CONFIRM","Potvrdi šifru");
define("REGISTER_EMAIL","Email");
define("REGISTER_INGAME","Ime u igri");
define("REGISTER_ALLYTAG","Tag saveza");
define("REGISTER_EMAILVERIFICATION","Provjera emaila");
define("REGISTER_EMAILTEXT","Molimo vas da otvorite ovu stranicu kako bi potvrdili vaš Email na Galaxietool-u.");
define("REGISTER_ERROR1","Korisničko ime se već koristi!");
define("REGISTER_ERROR2","Greška prilikom slanja Emaila! Molimo vas da kontaktirate administratora.");
define("REGISTER_ERROR3","Greška prilikom slanja podataka u bazu!");
define("REGISTER_INFO1","Vaš račun je uspješno kreiran.");
define("REGISTER_INFO2","Molimo vas otvorite link u vašem mailu da završite registraciju.");
define("REGISTER_INFO3","Account je potvrđen, vaš administrator ga sada mora aktivirati!");
define("REGISTER_BUTTON","Nazad na početnu stranicu");
define("REGISTER_NEW_SUBJECT","Novi korisnik registriran na galaxytoolu");
define("REGISTER_NEW_MAILTEXT","Novi korisnik se registrirao.");
// new 4.2
define("REGISTER_BACK","Nazad na prvu stranicu");
// new 4.3.5
define("REGISTER_MISSING_FIELDS","Ispuni sva tražena polja");
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
define("LOSTPW_TITLE","Šifra zaboravljena");
define("LOSTPW_INFO2","Nova šifra je generirana i poslana na vaš mail!");
define("LOSTPW_BUTTON1","napravi novu šifru");
define("LOSTPW_BUTTON2","Nazad na početnu stranicu");
define("LOSTPW_LOGINNAME","Korisničko ime");
define("LOSTPW_EMAIL","Email");
define("LOSTPW_ERROR1","Greška prilikom slanja podataka u bazu!");
define("LOSTPW_ERROR2","Krivo uneseni podaci!");
define("LOSTPW_ERROR3","Greška prilikom slanja Emaila! Molimo vas da kontaktirate administratora");
define("LOSTPW_EMAIL_SUBJECT","Vaša nova šifra koju ste zatražili");
define("LOSTPW_EMAIL_TEXT1","Vaš novi login za Galaxytool");
define("LOSTPW_EMAIL_TEXT2","Korisničko ime");
define("LOSTPW_EMAIL_TEXT3","Šifra");
// new 5.0
define("LOSTPW_INFO1","You will receive an email to verify your password reset request.");
define("LOSTPW_CONFIRM_RESET_SUBJECT","Lost password?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","Hello,\n\nyou requested a password reset for the Galaxytool. To generate a new password, click the following link:");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","OGame Galaxietool - informacije o korisniku");
define("USERINFO_NAMES","Svi korisnici");
define("USERINFO_DETAIL","detaljne informacije o");
define("USERINFO_ERROR1","Ne postoji korisnik sa ovim ID!");
define("USERINFO_USERNAME","Korisničko ime");
define("USERINFO_INGAME","Ime u igri");
define("USERINFO_EMAIL","Email");
define("USERINFO_ALLYTAG","Savez");
define("USERINFO_STYLEPATH","Skin");
define("USERINFO_STATUS","Status");
define("USERINFO_ACTIVATE","Aktiviraj igrača");
define("USERINFO_LOGINS","Broj prijava");
define("USERINFO_LASTLOGIN","Zadnja prijava");
define("USERINFO_DATA","Informacije o sistemima koje je korisnik unio");
define("USERINFO_NODATA","Ovaj korisnik još uvjek nije unio niti jedan sistem!");
define("USERINFO_GALAXY","Galaksija");
define("USERINFO_SYSTEMS","Broj sistema");
define("USERINFO_IP","IP adresa");
define("USERINFO_LOGINTIME","Prijava");
define("USERINFO_NOLOGIN","Ovaj korisnik se do sada nije nikada prijavio.");
define("USERINFO_LAST_GALAXYUPDATE","Zadnji unos u izgled galaksije");
define("USERINFO_LAST_PUBLIC_NOTICE","Zadnja javna objava");
define("USERINFO_LAST_PRIVATE_NOTICE","Zadnja privatna objava");
define("USERINFO_NUMBEROF_PUBLIC_NOTICE","Broj javnih objava");
define("USERINFO_NUMBEROF_PRIVATE_NOTICE","Broj privatnih objava");
define("USERINFO_ACTIVATED","Korisnički račun aktiviran");
define("USERINFO_ACTIVATIONTEXT","Galaxytool administrator je aktivirao vaš korisnički račun. Uživajte u Galaxytool-u!");
// new 4.8
define("USERINFO_LAST_SUBMIT","Inserted last data");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","OGame Galaxytool - povijest Saveza");
define("ALLYHISTORY_TBLHEAD","Povijesni pregled");
define("ALLYHISTORY_PLAYERNAME","Igrač");
define("ALLYHISTORY_ALLYNAME","Savez");
define("ALLYHISTORY_LASTMONTH","Prošli mjesec"); // changed at 4.0
define("ALLYHISTORY_ALL_DATA","sve dostupne informacije"); // new 4.0
define("ALLYHISTORY_SHOW","prikaži statistiku");
define("ALLYHISTORY_TIMESPAN","Vremenski Interval");
define("ALLYHISTORY_PROGESS","Napredak");
define("ALLYHISTORY_SCORE","Bodovi");
define("ALLYHISTORY_FSCORE","Bodovi Flote"); // new 4.0
define("ALLYHISTORY_RSCORE","Bodovi Istraživanja"); // new 4.0
define("ALLYHISTORY_MEMBER","Članovi"); // new 4.0
define("ALLYHISTORY_NOTHING","ništa nije pronađeno");
define("ALLYHISTORY_DETAILS","Detalji");
define("ALLYHISTORY_SHOW_ADDRESS","Koordinate");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","Informacije igrača");
define("DETAILEDINFO_ALLYINFO_TITLE","Informacije saveza");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","Detaljne informacije o igraču");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","Detaljne informacije o savezu");
define("DETAILEDINFO_NO_ALLIANCE","ništa");
define("DETAILEDINFO_SCORE","Statistike bodova");
define("DETAILEDINFO_FLEET","Statistike flote");
define("DETAILEDINFO_RESEARCH","Statistike istraživanja");
define("DETAILEDINFO_RANK","Pozicija");
define("DETAILEDINFO_POINTS","Bodovi");
define("DETAILEDINFO_KNOWN_PLANETS","poznate planete");
define("DETAILEDINFO_MOONS","poznati mjeseci");
define("DETAILEDINFO_PHALANX_AREA","Područje za falangiranje");
define("DETAILEDINFO_NO_PHALANX_AREA","Falanga nije pronađena");
define("DETAILEDINFO_NOTICES","Objave");
define("DETAILEDINFO_NO_NOTICES","Nema pronađenih objava");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","prošli savez");
define("DETAILEDINFO_RESOURCES_PER_HOUR","Resursa po satu");
define("DETAILEDINFO_RESOURCES_PER_DAY","Resursa na dan");
define("DETAILEDINFO_RESOURCES_PER_WEEK","Resursa na tjedan");
define("DETAILEDINFO_RESOURCES_PER_MONTH","Resursa na mjesec (30 dana)");
define("DETAILEDINFO_METAL","Metal");
define("DETAILEDINFO_CRYSTAL","Kristal");
define("DETAILEDINFO_DEUTERIUM","Deuterij");
define("DETAILEDINFO_UNKNOWN","nepoznato");
define("DETAILEDINFO_SCORE_DISTRIBUTION","Raspodjela Bodova");
// new 4.2
define("DETAILEDINFO_GENERAL","Detalji");
define("DETAILEDINFO_MEMBERS","Članovi");
define("DETAILEDINFO_GRAPHS","Grafovi");
define("DETAILEDINFO_RESOURCES","Resursi");
define("DETAILEDINFO_FLEET_TAB","Flote");
define("DETAILEDINFO_TECH","Istraživanja");
define("DETAILEDINFO_FLEET_DETAIL","Suma / (prosječan igrač) kroz sve dostupne izvještaje");
define("DETAILEDINFO_TECH_DETAIL","Prosjek svih dostupnih informacija o igračima");
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
define("ADMIN_TITLE","Administracija Galaxytool-a");
define("ADMIN_DISCLAMER","Upozorenje: Pokrenite ove skripte na vlastiti rizik! Večina od njih briše podatke.");
define("ADMIN_INCONSISTENCIES","Nekonzistentnost baze");
define("ADMIN_PLANETS","Planeti na poziciji 0 ili većoj od 15");
define("ADMIN_GALAXIES","Izbriši galaksije veće od &1 ");
define("ADMIN_PLAYERS","Izbriši igrače bez OGame oznake igrača - dovodi do dupih unosa igrača");
define("ADMIN_REPORTS","Izbriši izvještaje za planete koji više ne postoje");
define("ADMIN_MISC","Razno");
define("ADMIN_RESET","Reset Galaxytool (samo se korisnici i ip tablica neće izbrisati)");
define("ADMIN_OLD_PLAYERS","Izbriši unose igrača starije od &1 dana");
define("ADMIN_OLD_REPORTS","Izbriši izvještaje starije od &1 dana");
define("ADMIN_LOADING","Ne zatvaraj ovaj prozor dok se stranica ne učita.");
define("ADMIN_STATUS","Status vaših zahtjeva");
define("ADMIN_SELECTION","Najmanje jedan unos mora biti označen");
define("ADMIN_SAFETY","Dali ste sigurni da želite pokrenuti ove skripte?");
define("ADMIN_DONE","Izvršeno");
define("ADMIN_NOTBD","Ništa za izvršiti");
// new 4.3
define("ADMIN_OLD_GALAXIES","Odstrani preglede galaksije starije od &1 dana");
define("ADMIN_UNUSED_PLAYERS","Odstrani igrače koji se ne pojavljuju u nijednom pregledu galaksije");
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