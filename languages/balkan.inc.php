<?php
/* Serbo-Croatian; 70% Croatian  30% Serbian
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
define("L_USERNAME","Korisnicko Ime");
define("L_PASSWORD","Šifra");
define("L_LOGINFAILURE","Korisnicko Ime ili šifra su pogrešni ili vaš account nije još aktiviran.");
define("L_TOKENFAILURE","Vaš pristupni ključ nije točan ili vaš račun još nije aktiviran");
define("L_LOGINTEXT","Molimo vas prijavite se.");
define("L_LANGUAGE","Dostupni jezici:");
define("L_TIMEOUT","Sesija je istekla!");
define("L_REGISTER","Registracija");
define("L_PWLOST","Zaboravljena Šifra");
define("INDEX_TITLE","Pregled");
define("INDEX_INFO","Informacije");
define("INDEX_ENTRIES","Broj svih sistema");
define("INDEX_ENTRIES_LASTWEEK","Novi sistemi od prošle sedmice");
define("INDEX_ENTRIES_TO_OLD","Sistemi stariji od mjesec dana");
define("INDEX_REGISTERED_USERS","Registrirani korisnici");
define("INDEX_PAGEFORWARD","Ako vaš browser ne podržava automatsko preusmjeravanje stranica molim vas kliknite ovdje.");
define("INDEX_NOTICES","Objave");
define("INDEX_PLAYERS","Statistike igraca");
define("INDEX_ALLIES","Statistike saveza");
define("INDEX_REPORTS","Izvještaji špijunaže");
define("INDEX_VERSION","Zadnja dostupna verzija za download");
define("INDEX_SHOUTBOX","Shoutbox");
define("INDEX_NOUnos","Nema trenutno poruka");
define("INDEX_COMMENT","Vaša poruka");
define("INDEX_INSERT","Unesi");
define("INDEX_UMOD","Igrac u modusu odustva");
define("INDEX_LATEST_VERSION","Nema novije dostupne verzije"); // todo
define("INDEX_NO_MOONS","Broj mjeseci");
define("INDEX_NO_EMPTY_SYSTEMS","Broj praznih sistema");
define("INDEX_NO_FULL_SYSTEMS","Broj potpuno punih sistema");
define("INDEX_NO_TARGETS","Broj mogucih meta");
// 4.0
define("INDEX_USERINFO","Broj Korisnika");
define("INDEX_ONLINE","Trenutno online");
define("INDEX_TODAY","Danas online");
define("INDEX_ALL","Ukupan broj prijava");
// 4.3.7
define("GENERAL_LOAD_FORM","Učitaj iz podataka");
define("GENERAL_SAVE_FORM","Spremi iz podataka");
define("GENERAL_SAVE_AS_TEXT","Spremi kao");
define("GENERAL_SAVE","Spremi");
// 4.8
define("INDEX_USERMANAGEMENT","Pregled aktivacije");
define("INDEX_NEEDADMIN","Otključaj račune");
define("INDEX_NEEDEMAIL","Nepotvrđeni računi");
define("INDEX_TOOLBAR_INFO","Informacije o Galaxytool pluginu");
define("INDEX_TOOLBAR_URL","Galaxytool URL");
define("INDEX_TOOLBAR_VERSION_REQUIRED","Zahtjeva Galaxytool plugin verziju najmanje ");
define("INDEX_TOOLBAR_INSTALL_GUIDE","Upute za instalaciju plugina");
define("INDEX_TOOLBAR_TOKEN","Pristupni ključ");
define("INDEX_TOOLBAR_NEW_TOKEN","Zatraži novi ključ");
define("INDEX_PLAYERS_WITH_N_PLANETS","Igrači sa više od &1 planeta");
define("INDEX_GETTING_STARTED","Započni sa korištenjem Galaxytoola");
define("INDEX_GETTING_STARTED1","Dobrodošli na Galaxytool!");
define("INDEX_GETTING_STARTED2","Galaxytool će vam pomoći da analizirate što se događa u vašem OGame univerzumu &1");
define("INDEX_GETTING_STARTED3","Prije nego što možete analizirati podatke, morate ih prvo unijeti. Za to vam treba dodatak za browser kao &1 za Firefox.");
define("INDEX_GETTING_STARTED4","Nakon instalacije plugina, prolazite kroz stranice OGamea kao i obično i vidjeti ćete mali statusni prozor kad god je nešto poslano na vaš Galaxytool.");
define("INDEX_GETTING_STARTED5","Kada je plugin ubacio podatke u Galaxytool, možete početi analizirati gdje igrači imaju svoje kolonije, koliko kolonija imaju, koji reporti postoje ili kada su najviše aktivni.");
define("INDEX_GETTING_STARTED6","Također će vam pomoći da analizirate vlastiti napredak kroz usporedbu sa drugin igračima ili kroz analizu vaših izvještaja o borbi možete pratiti koliko ste opljačkali zadnjih dana ili tjedana.");
define("INDEX_GETTING_WIKIPAGE","Postoji još mnogo mogućnosti unutar Galaxytoola.");
define("INDEX_GETTING_WIKIPAGE2","Pregledajte ih na našoj wiki stranici.");
define("INDEX_GETTING_BOARD","Za vaša zapažanja i ideje možete korisititi naš forum:");
define("INDEX_GETTING_CHAT1","Ili nas posjetiti na chatu:");
define("INDEX_GETTING_CHAT2","Mi nismo online 24/7 ali provodimo puno slobodnog vremena tamo, pa budite strpljivi.");
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
define("GENERAL_APPLY","potvrdi");
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
define("BACK_INDEX","Nazad na pocetnu stranicu");
define("UNIVERSE","Univerzum");

// search
define("MENU_INFO_LINKS","Informacije");
define("MENU_PAGE","Pregled");
define("MENU_DB_SEARCH","Traži u bazi");
define("MENU_DB_NOTICES","Traži u objavama");
define("MENU_DB_REPORTS","Traži u izvještajima");
define("MENU_GALAXYVIEW","Pregled galaksije");
define("MENU_STATISTICS","Statistike");
define("MENU_ALLYHISTORY","Povijest Saveza");
// 4.7
define("MENU_FLEET_MOVEMENTS","Kretanja flote");
define("MENU_COMBAT_REPORTS","Izvještaji borbe");
define("MENU_MESSAGES","Poruke u igri");

// insert / change
define("MENU_OPTION_LINKS","Opcije");
define("MENU_DB_REFRESH","Ubaci u bazu");
define("MENU_NOTICES","Objave");
define("MENU_DB_STATUS","Stanje Baze");
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
define("MENU_HELP","Pomoc");
// 4.0
define("MENU_TOOLOPTIONS","Galaxytool Opcije");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1"," je ubaceno u bazu");
define("PARSER_ERROR1","Greška prilikom ubacivanja ovih koordinata u bazu:");
define("PARSER_ERROR2","Baza nije pronadena!");
define("PARSER_ERROR3","Server baze nije pronaden!");
define("PARSER_WRONG_UNIVERSE","Krivi univerzum - stvarni: \"&1\"  očekivani: \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","OGame Galaxytool - Stranica za pretragu");
define("SHOW_SEARCH","Traži u bazi");
define("SHOW_ALLYSYMBOL","Tag saveza");
define("SHOW_PLAYERNAME","Ime igraca");
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
define("SHOW_DESCRIPTION","Možete koristiti * za imena igraca i saveza. <br />Popunite samo ona polja koja želite da specificarate.");
define("SHOW_SORT_BY","Sortiraj po ");
define("SHOW_GALASYSTEM","Galaksija/Sistem");
define("SHOW_ALLYNAME","Ime saveza");
define("SHOW_SEARCHBUTTON","Traži");
define("SHOW_ADDRESS","Koordiante");
define("SHOW_ALLYSORT","Savez");
define("SHOW_PLANET","Ime planete");
define("SHOW_STATUS","Status");
define("SHOW_CURRENTNESS","Starost");
define("SHOW_PLAYER_STATUS","Status igraca");
define("SHOW_PLAYER_STATUS1","svi");
define("SHOW_PLAYER_STATUS2","moguce mete");
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
define("SHOW_MEMBERS","Clanovi");
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
define("SHOW_EXT_OPTIONS1","Prikazi vise opcija za traziti domet, rang, datum ili rusevine.");
define("SHOW_EXT_OPTIONS2","Prikazi vise opcija za traziti kolonije, mjesece, izvjestaje, biljeske, statistike igraca ili diplomatski status.");
define("SHOW_EXT_OPTIONS3","Prikazi vise opcija za traziti sortirano od pretrazivanih rezultata.");
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
define("STATUS_TITLE","OGame Galaxytool - Statusna stranica");
define("STATUS_DB_STATUS","Status baze");
define("STATUS_COLOR","Boja");
define("STATUS_AGE1","Unos 1 dan star.");
define("STATUS_AGE2","Unos 2 - 4 dana star.");
define("STATUS_AGE3","Unos 4 - 7 dana star.");
define("STATUS_AGE4","Unos 1 - 2 tjedna star.");
define("STATUS_AGE5","Unos 2 - 4 tjedna star.");
define("STATUS_AGE6","Unos stariji od 1 mjeseca!");
define("STATUS_AGE7","Unos nije dostupan.");
define("STATUS_ON","ukljuceno");
define("STYLES_COLOR1","Boja1");
define("STYLES_COLOR2","Boja2");
define("STYLES_COLOR3","Boja3");
define("STYLES_COLOR4","Boja4");
define("STYLES_COLOR5","Boja5");
define("STYLES_COLOR6","Boja6");
define("STYLES_COLOR7","Boja7");
// 4.8
define("STATUS_DB_LEGEND","Legenda");
define("STATUS_GALAXY","Pregled galaksije");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","OGame Galaxytool - Upravljanje korisnicima");
define("USER_NAMES","Korisnik");
define("USER_ERROR","Greška");
define("USER_NEWUSER","Novi korisnik");
define("USER_GALAXY","Galaksija");
define("USER_OPTIONS","Opcije");
define("USER_USERNAME","Korisnicko Ime");
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
define("USER_PROBES","Pregledaj/Pošalji Izvještaj Špijunaže");
define("USER_EMAIL","Email");
define("USER_ERROR1","Šifra netocna ili je Email neispravan.");
define("USER_ERROR2","Email neispravan.");
define("USER_INGAME","Ime u igri");
define("USER_ALLYTAG","Savez");
define("USER_ALLYHISTORY","Pregledaj/Pošalji Povijest Saveza");
define("USER_DIPLOMATIC","Promijeni Diplomatski Status");
define("USER_STATSPAGE","Broj unosa na statistici");
define("USER_LINKS","Linkovi");
define("USER_LINKS2","Format:<br>text;url<br>text2;url2<br>text3;url3");
define("USER_EXPORT_TITLE","Izvezi boje (BB Kodove)");
define("USER_BB_COORDINATES","Koordinate");
define("USER_BB_MOON","Mjesec");
define("USER_BB_DEBRIS","Ruševine");
define("USER_BB_ALLY","Ime Saveza");
define("USER_BB_ALLYDETAILS","Detalji Saveza");
define("USER_BB_PLAYERNAME","Igrac");
define("USER_BB_BANNED","kažnjen");
define("USER_BB_VACATION","modus odsustva");
define("USER_BB_NOOB","noob");
define("USER_BB_INACTIVE","Inaktivan");
define("USER_BB_LONGINACTIVE","Dugo inaktivan");
// new with 4.7
define("USER_DELETION","Obriši");
define("USER_FLEETINFO",MENU_FLEET_MOVEMENTS);
define("USER_ACTIVITIES","Aktivnosti igrača");
define("USER_MAINTENANCE","Galaxytool održavanje");
define("USER_MANAGEMENT",MENU_USEROPTIONS);
define("USER_DELETE_MY_COMBAT_REPORTS","Obriši moje izvještaje o borbi");
define("USER_DELETE_MY_MESSAGES","Obriši moje poruke");
define("USER_DELETE_MY_FLEETMOVES","Obriši moja kretanja flote");
// 4.8
define("USER_DELETE_MY_COMBAT_REPORTS_LIMITED","Izbriši moje izvještaje o borbi starije od &1 dana");
define("USER_DELETE_MY_MESSAGES_LIMITED","Izbriši moje poruke starije od &1 dana");
define("USER_TABLE_ENTRIES","Broj rezultata po stranici");
// 5.0
define("USER_EXISTS","User already exists");
define("USER_BB_OUTLAW","Outlaw");
define("USER_INVALID_URL","URL &1 seems to be invalid - URL will be ignored");

/*********************************************************************
* galaxyview.php
*********************************************************************/
define("VIEW_TITLE","OGame Galaxytool - Detalji");
define("VIEW_NODATA","Podaci nisu dostupni.");
define("VIEW_GALAXY","Galaksija");
define("VIEW_SYSTEM","Solarni sistem");
define("VIEW_POSITION","Pos.");
define("VIEW_PLANET","Planeta.");
define("VIEW_MOON","Mjesec");
define("VIEW_TF","RU");
define("VIEW_PLAYER","Igrac");
define("VIEW_PLAYER_ADD","(Mjesto / Status)");
define("VIEW_ALLY","Savez");
define("VIEW_ALLY_ADD","(Mjesto / Clanova)");
define("VIEW_METAL","M");
define("VIEW_CRYSTAL","K");
define("VIEW_COLONISED","Planeta naseljena");
define("VIEW_UKMOONSIZE","nepoznato");
define("VIEW_BACK","nazad");
define("VIEW_NOTICE","Objave");
define("VIEW_REPORTS","Izvještaji");
define("VIEW_MOONPHALANX","Sljedeci mjeseci mogu skenirati ovaj sistem");
define("VIEW_NOMOONS","Nema Mjeseca");
define("VIEW_IRAKS","Sljdece planete mogu dosegnuti ovaj sistem sa Interplanetarnim Raketama");
define("VIEW_NOIRAKS","Nije pronadena ni jedna Interplanetarna raketa");
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
define("PW_ERROR","Stara šifra nije tocna!");
define("UPDATE_DONE","Update uspješan.");
// new 4.2
define("TIMEZONE_OFFSET","Odstupanje vremenske zone prema serveru");
// new 4.3
define("DELETE_ACCOUNT","Obriši ovaj Galaxytool račun");
define("DELETE_ACCOUNT_SAFETY_REQUEST","Želite li doista obrisati ovaj Galaxytool račun?");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","Dozvole");
define("CH_PASSWD_ADMIN","Admin");
// new 4.7
define("TIMEZONE_OGAME_OFFSET","Odstupanje vremenske zone prema OGame serveru");
// new 4.8
define("CH_PASSWD_USER_LANGUAGE","Promijeni na ovaj jezik nakon logiranja");
define("CH_PASSWD_USER_LANGUAGE_NO_CHANGE","Bez promijene");
define("CH_PASSWD_EXPAND","Prošireno");
define("CH_PASSWD_COLLAPSE","Stisnuto");
define("CH_PASSWD_HIDDEN","Skriveno");
define("CH_PASSWD_GETTING_STARTED","Pokaži upute nakon ulaska");
define("CH_PASSWD_PLUGIN","Pokaži informacije o pluginu nakon ulaska");

/*********************************************************************
* notices.php
**********************************************************************/
define("NOTICE_TITLE","OGame Galaxytool - Objave");
define("NOTICE_HEADER","izmjena objava");
define("NOTICE_HEADER2","Izmjeni svoje objave");
define("NOTICE_PUBLIC","Dostupno drugima ?");
define("NOTICE_YES","da");
define("NOTICE_NO","ne");
define("NOTICE_TEXT","Tekst objave");
define("NOTICE_SAVE","Spasi");
define("NOTICE_DELETED","Unos obrisan");
define("NOTICE_SAVED","Unos spašen.");
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
define("NOTICE_NOTHING","Ni jedan rezultat nije pronaden");
// 4.0
define("NOTICE_CHARS","Znakovi");
define("NOTICE_PLAYERNAME","Igrac");
define("NOTICE_SHOWALL","Prikaži sve objave");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","OGame Galaxytool - Izvještaj špijunaže");
define("REPORTS_RESOURCES","Resursi");
define("REPORTS_FLEET","Flote");
define("REPORTS_DEFENCE","Odbrana");
define("REPORTS_BUILDINGS","Zgrade");
define("REPORTS_TECHNOLOGY","Istraživanje");
define("REPORTS_MOON","Mjesec");
define("REPORTS_SEARCH","Traži u izvještajima špijunaže");
define("REPORTS_SEARCH_SHORT","Traži");
define("REPORTS_HITS","Rezultata");
define("REPORTS_NOTHING","Unos nije pronaden");
define("REPORTS_ADDRESS","Adresa");
define("REPORTS_CURRENTNESS","Starost");
define("REPORTS_PLAYERNAME","Ime igraca");
define("REPORTS_ALLY","Savez");
define("REPORTS_VIEW","Pogledaj Izvještaj");
define("REPORTS_SEARCH_IN","Traži u galaskiji");
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
define("REPORTS_SEARCH_EXTENDED","Prošireno Pretraživanje");
define("REPORTS_FLEET_RESIS","Bodovi flote");
define("REPORTS_DEFENCE_RESIS","Bodovi odbrane");
define("REPORTS_ALL_RESIS","ukupno bodova");
define("REPORTS_TECHS","Tehnologije");
define("REPORTS_UNKNOWN_ENTRIES","nepoznati unosi");
define("REPORTS_PARTLY_INSERTED","djelomicno uneseno");
define("REPORTS_FOR_ALL_RES","za sve resurse");
define("REPORTS_FOR_TF","za ruševine");
define("REPORTS_KT","Mali transporter");
define("REPORTS_GT","Veliki transporter");
define("REPORTS_SS","Borbeni brodovi");
define("REPORTS_REC","Recikler");
define("REPORTS_RAIDABLE","Jedino mete za raid");
define("REPORTS_ALL_RESOURCES","svi Resursi");
// 4.0
define("REPORTS_STUFF","Ostalo");
define("REPORTS_SPEEDSIM","Simuliraj sa Speedsimom");
define("REPORTS_DRAGOSIM","Simuliraj sa Dragosim");
define("REPORTS_STATUS","Status");
define("REPORTS_ERROR","Greška");
// 4.2
define("REPORTS_OWN_REPORTS","Samo moji izvještaji");
// 4.3.3
define("REPORTS_UPLOAD_BY","Izvještaji koje je učitao");
// 4.4
define("REPORTS_DEPTH","Dubina izvještaja");
define("REPORTS_FLEET_SCORE","Bodovi flote");
define("REPORTS_DEFENCE_SCORE","Bodovi obrane");
// 5.0
define("REPORTS_HOURS","hours");
define("REPORTS_MAX_RESULTS_HIT","Your query returned more than &1 hits. Only the first &1 results are show. Please adjust your search request to get less results.");
define("REPORTS_OSIMULATE","Simulate with OSimulate");
define("REPORTS_SHOW_ONLY","Show only");
define("REPORTS_SHOW_PLANETS","Planeti");
define("REPORTS_SHOW_MOONS","Mjeseci");
define("REPORTS_OWNER","Reports owned by");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","OGame Galaxytool - Statistike");
define("STATS_TBLHEAD","Statistike");
define("STATS_RANK","Mjesto");
define("STATS_PLAYERNAME","Ime igraca");
define("STATS_ALLYNAME","Tag Saveza");
define("STATS_SCORE","Bodovi");
define("STATS_FLEET","Flota");
define("STATS_RESEARCH","Istraživanje");
define("STATS_MEMBERS","Clanovi");
define("STATS_STATUS","Status");
define("STATS_NOTHING","nema Statusa");
define("STATS_NAP","NAP");
define("STATS_ALLIED","Saveznik");
define("STATS_WAR","Rat");
define("STATS_BOYCOTT","Bojkot");
define("STATS_NEUTRAL","Neutralan");
define("STATS_OWN","Vlastiti Savez");
define("STATS_WING","Wing");
define("STATS_UPDATE","Unos od");
define("STATS_PLAYERSTATS","Statistika igraca");
define("STATS_ALLYSTATS","Statistika Saveza");
// 4.0
define("STATS_DELETE","Da li želite izbrisati ovaj Unos?");
define("STATS_CONFIRM_DELETE","Da li stvarno želite izbrisati ovaj Igracev unos?");
define("STATS_CHANGE_PLAYER_STATUS","Statistika igraca");
define("STATS_CHANGE_ALLIANCE_STATUS","Statistika Saveza");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","Svi clanovi ovog saveza dobivaju izabrani status. Svaki prijašnji status ce biti promijenjen. Možete promijeniti status nekih igraca naknadno.");
define("STATS_UNKNOWN","Ostatak");
define("STATS_DETAILS","Detalji za");
// 4.4
define("STATS_PLAYERSTATUS",SHOW_PLAYER_STATUS);
define("STATS_IGNORE_STATUS",SHOW_PLAYER_STATUS1);
define("STATS_ACTIVE","aktivan");
define("STATS_INACTIVE",USER_BB_INACTIVE);
define("STATS_BANNED",USER_BB_BANNED);
define("STATS_VACATION",USER_BB_VACATION);
define("STATS_NOOB",USER_BB_NOOB);
// 4.8
define("STATS_YES",SHOW_YES); // reuse SHOW definitions if applicable
define("STATS_NO",SHOW_NO);
define("STATS_SEARCH",USER_SEARCH);
define("STATS_SHOW_GRAPH","Pokaži detalje o rasporedu bodova");
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
define("REGISTER_LOGINNAME","Korisnicko Ime");
define("REGISTER_PASSWORD","Šifra");
define("REGISTER_PASSWORD_CONFIRM","Potvrdi šifru");
define("REGISTER_EMAIL","Email");
define("REGISTER_INGAME","Ime u igri");
define("REGISTER_ALLYTAG","Tag saveza");
define("REGISTER_EMAILVERIFICATION","Provjera Emaila");
define("REGISTER_EMAILTEXT","Molimo vas da otvorite ovu stranicu kako bi potvrdili vaš Email na Galaxietool-u.");
define("REGISTER_ERROR1","Korisnicko Ime se vec koristi!");
define("REGISTER_ERROR2","Greška prilikom slanja Emaila! Molimo vas da kontaktirate administratora.");
define("REGISTER_ERROR3","Greška prilikom slanja podataka u bazu!");
define("REGISTER_INFO1","Vaš account je uspješno kreiran.");
define("REGISTER_INFO2","Molimo vas posjetite link u vašem mailu da završite registraciju.");
define("REGISTER_INFO3","Account je potrvden, vaš administrator ga sada mora aktivirati!");
define("REGISTER_BUTTON","Nazad na pocetnu stranicu");
define("REGISTER_NEW_SUBJECT","Novi korisnik registriran na galaxytoolu");
define("REGISTER_NEW_MAILTEXT","Novi korisnik se registrirao.");
// new 4.2
define("REGISTER_BACK","Natrag na prvu stranicu");
// new 4.3.5
define("REGISTER_MISSING_FIELDS","Unesite sva potrebna polja");
// new 4.8
define("REGISTER_ERROR4","Neispravna email adresa.");
define("REGISTER_ERROR5","Lozinke nisu jednake.");
define("REGISTER_PWS","Snaga lozinke");
define("REGISTER_PWS0","vrlo slaba");
define("REGISTER_PWS1","slaba");
define("REGISTER_PWS2","dobra");
define("REGISTER_PWS3","jaka");
define("REGISTER_PWS4","vrlo jaka");
// new 5.0
define("REGISTER_EMAIL_USED","Email Address is already used");

/*********************************************************************
* lost_password.php
**********************************************************************/
define("LOSTPW_TITLE","Šifra zaboravljena");
define("LOSTPW_INFO2","Nova šifra je generisana i poslana na vaš mail!");
define("LOSTPW_BUTTON1","napravi novu šifru");
define("LOSTPW_BUTTON2","Nazad na pocetnu stranicu");
define("LOSTPW_LOGINNAME","Korisnicko Ime");
define("LOSTPW_EMAIL","Email");
define("LOSTPW_ERROR1","Greška prilikom slanja podataka u bazu!");
define("LOSTPW_ERROR2","Krivo uneseni podaci!");
define("LOSTPW_ERROR3","Greška prilikom slanja Emaila! Molimo vas da kontaktirate administratora");
define("LOSTPW_EMAIL_SUBJECT","Vaša nova šifra koju ste zatražili");
define("LOSTPW_EMAIL_TEXT1","Vaš novi login za Galaxytool");
define("LOSTPW_EMAIL_TEXT2","Korisnicko Ime");
define("LOSTPW_EMAIL_TEXT3","Šifra");
// new 5.0
define("LOSTPW_INFO1","You will receive an email to verify your password reset request.");
define("LOSTPW_CONFIRM_RESET_SUBJECT","Lost password?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","Hello,\n\nyou requested a password reset for the Galaxytool. To generate a new password, click the following link:");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","OGame Galaxietool - Informacije o korisniku");
define("USERINFO_NAMES","Svi korisnici");
define("USERINFO_DETAIL","detaljne informacije o");
define("USERINFO_ERROR1","Ne postoji korisnik sa ovim ID!");
define("USERINFO_USERNAME","Korisnicko Ime");
define("USERINFO_INGAME","Ime u igri");
define("USERINFO_EMAIL","Email");
define("USERINFO_ALLYTAG","Savez");
define("USERINFO_STYLEPATH","Skin");
define("USERINFO_STATUS","Status");
define("USERINFO_ACTIVATE","Aktiviraj igraca");
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
define("USERINFO_ACTIVATED","Korisnicki racun aktiviran");
define("USERINFO_ACTIVATIONTEXT","Galaxytool administrator je aktivirao vaš korisnicki racun. Uživajte u Galaxytool-u!");
// new 4.8
define("USERINFO_LAST_SUBMIT","Zadnji uneseni podaci");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","OGame Galaxytool - Povijest Saveza");
define("ALLYHISTORY_TBLHEAD","Povijesni pregled");
define("ALLYHISTORY_PLAYERNAME","Igrac");
define("ALLYHISTORY_ALLYNAME","Savez");
define("ALLYHISTORY_LASTMONTH","Prošli mjesec"); // changed at 4.0
define("ALLYHISTORY_ALL_DATA","sve dostupne informacije"); // new 4.0
define("ALLYHISTORY_SHOW","prikaži statistiku");
define("ALLYHISTORY_TIMESPAN","Vremenski Interval");
define("ALLYHISTORY_PROGESS","Napredak");
define("ALLYHISTORY_SCORE","Bodovi");
define("ALLYHISTORY_FSCORE","Bodovi Flote"); // new 4.0
define("ALLYHISTORY_RSCORE","Bodovi Istraživanja"); // new 4.0
define("ALLYHISTORY_MEMBER","Clanovi"); // new 4.0
define("ALLYHISTORY_NOTHING","ništa nije pronadeno");
define("ALLYHISTORY_DETAILS","Detalji");
define("ALLYHISTORY_SHOW_ADDRESS","Koordinate");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","Informacije igraca");
define("DETAILEDINFO_ALLYINFO_TITLE","Informacije Saveza");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","Detaljne informacije o Igracu");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","Detaljne informacije o savezu");
define("DETAILEDINFO_NO_ALLIANCE","ništa");
define("DETAILEDINFO_SCORE","Statistike bodova");
define("DETAILEDINFO_FLEET","Statistike flote");
define("DETAILEDINFO_RESEARCH","Statistike istraživanja");
define("DETAILEDINFO_RANK","Pozicija");
define("DETAILEDINFO_POINTS","Bodovi");
define("DETAILEDINFO_KNOWN_PLANETS","poznate planete");
define("DETAILEDINFO_MOONS","poznati mjeseci");
define("DETAILEDINFO_PHALANX_AREA","Podrucje za Falangiranje");
define("DETAILEDINFO_NO_PHALANX_AREA","Falanga nije pronadena");
define("DETAILEDINFO_NOTICES","Objave");
define("DETAILEDINFO_NO_NOTICES","Nema pronadenih Objava");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","prošli Savez");
define("DETAILEDINFO_RESOURCES_PER_HOUR","Resursa po satu");
define("DETAILEDINFO_RESOURCES_PER_DAY","Resursa po danu");
define("DETAILEDINFO_RESOURCES_PER_WEEK","Resursa po tjednu");
define("DETAILEDINFO_RESOURCES_PER_MONTH","Resursa po mjesecu (30 dana)");
define("DETAILEDINFO_METAL","Metal");
define("DETAILEDINFO_CRYSTAL","Kristal");
define("DETAILEDINFO_DEUTERIUM","Deuterij");
define("DETAILEDINFO_UNKNOWN","nepoznato");
define("DETAILEDINFO_SCORE_DISTRIBUTION","Raspodjela Bodova");
// new 4.2
define("DETAILEDINFO_GENERAL","Detalji");
define("DETAILEDINFO_MEMBERS","Član");
define("DETAILEDINFO_GRAPHS","Grafovi");
define("DETAILEDINFO_RESOURCES","Resursi");
define("DETAILEDINFO_FLEET_TAB","Flota");
define("DETAILEDINFO_TECH","Istraživanja");
define("DETAILEDINFO_FLEET_DETAIL","Zbroj / (prosjek igrača) među svim dostupnim izvještajima");
define("DETAILEDINFO_TECH_DETAIL","Prosjek svih dostupnih informacija o igračima");
// new 4.3
define("DETAILEDINFO_PLANET_TAB",REPORTS_SHOW_PLANETS);
define("DETAILEDINFO_MOON_TAB",REPORTS_SHOW_MOONS);
// 4.7
define("DETAILEDINFO_ACTIVITIES","Aktivnosti");
define("DETAILEDINFO_NODATA",VIEW_NODATA); // reuse existing translations
define("DETAILEDINFO_ACTIVITY_DESCRIPTION","Pokaži aktivnosti od &1 učitane od:");
define("DETAILEDINFO_GALAXYVIEWS","Pogledi galaksije");
define("DETAILEDINFO_SCANS","Akcije špijunaže");
define("DETAILEDINFO_MESSAGES","Poruke igrača");
define("DETAILEDINFO_COMBATS","Izvještaji o borbi");
define("DETAILEDINFO_ALLYPAGE","Pregled saveza");
define("DETAILEDINFO_MANUAL","Ručni unosi");
define("DETAILEDINFO_START","Početak");
define("DETAILEDINFO_TO","prema");
define("DETAILEDINFO_TODAY","Danas");
define("DETAILEDINFO_DATA_RESTRICTION","ograničeno do:");
define("DETAILEDINFO_WEEKDAY_WEEKEND","Vikend");
define("DETAILEDINFO_WEEKDAY_WORKINGDAY","Radni dan");
define("DETAILEDINFO_WEEKDAY_MONDAY","Ponedjeljak");
define("DETAILEDINFO_WEEKDAY_TUESDAY","Utorak");
define("DETAILEDINFO_WEEKDAY_WEDNESDAY","Srijeda");
define("DETAILEDINFO_WEEKDAY_THURSDAY","Četvrtak");
define("DETAILEDINFO_WEEKDAY_FRIDAY","Petak");
define("DETAILEDINFO_WEEKDAY_SATURDAY","Subota");
define("DETAILEDINFO_WEEKDAY_SUNDAY","Nedjelja");
define("DETAILEDINFO_WEEKDAY_SHORTLENGTH",3); // number of characters to shorten week day
define("DETAILEDINFO_PLAYER_CURRENTLY_ACTIVE","Igrač je trenutno aktivan");
define("DETAILEDINFO_PLAYER_MESSAGES","dostupne poruke igrača");
define("DETAILEDINFO_SHOW","pokaži");
define("DETAILEDINFO_NONE","neije dostupno");
define("DETAILEDINFO_ENTER_MANUALLY","Unesi aktivnosti ovog igrača");
define("DETAILEDINFO_PLAYER_SEEN_ON","Igrač je bio online u");
define("DETAILEDINFO_INSERT","Unesi");
define("DETAILEDINFO_OGAME_SERVERTIMES","Molimo uočite: Svi datumi i vremena se odnose na vrijeme OGame servera !");
define("DETAILEDINFO_DAY_VIEW","Pregled 24h");
define("DETAILEDINFO_WEEK_VIEW","Tjedni pregled");
// new 4.8
define("DETAILEDINFO_HOME_PLANET","Matična planeta");
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
define("ADMIN_TITLE","Galaxytool administriranje");
define("ADMIN_DISCLAMER","Pažnja: Pokrečite bilo koju od ovih skripti na vlastitu odgovornost, većina ih briše podatke");
define("ADMIN_INCONSISTENCIES","Nedosljednosti u bazi podataka");
define("ADMIN_PLANETS","Planeti na poziciji 0 ili većoj od 15");
define("ADMIN_GALAXIES","Izbriši galaksije veće od &1 ");
define("ADMIN_PLAYERS","Obriši igrače bez OGame playerid - vodi do duplih unosa igrača");
define("ADMIN_REPORTS","Obriši izvještaje od planeta koji više ne postoje");
define("ADMIN_MISC","Različito");
define("ADMIN_RESET","Resetiraj Galaxytool (Samo tablice korisnika i IP adresa neće biti obrisane)");
define("ADMIN_OLD_PLAYERS","Obriši unose igrača starije od &1 dana");
define("ADMIN_OLD_REPORTS","Obriši izvještaje starije od &1 dana");
define("ADMIN_LOADING","Ne zatvarajte ovaj prozor dok se stranica ne učita.");
define("ADMIN_STATUS","Stanje tvojih zahtjeva");
define("ADMIN_SELECTION","Barem jedan unos mora biti označen");
define("ADMIN_SAFETY","Jeste li sigurni da želite pokrenuti ovu/e skriptu/e?");
define("ADMIN_DONE","gotovo");
define("ADMIN_NOTBD","nema ništa za napraviti");
// new 4.3
define("ADMIN_OLD_GALAXIES","Obrišite poglede galaksije starije od &1 dana");
define("ADMIN_UNUSED_PLAYERS","Uklonite igrače koji se ne pojavljuju niti u jednom pogledu galaksije");
// new 4.7
define("ADMIN_OLD_ACTIVITIES","Uklonite aktivnosti igrača statije od &1 dana");
// new 4.8
define("ADMIN_OLD_COMBATS","Obriši izvještaje o borbi starije od &1 dana");
define("ADMIN_OLD_INGAME_MSG","Obriši poruke u igri starije od &1 dana");
// new 5.0
define("ADMIN_OGAME_API","Load public data from OGame into the Galaxytool");
define("ADMIN_OGAME_ALL_DATA",ALLYHISTORY_ALL_DATA);
define("ADMIN_OGAME_GALAXY_DATA",MENU_GALAXYVIEW);
define("ADMIN_OGAME_STATISTICS_DATA",MENU_STATISTICS);

// new 4.3.5
/*********************************************************************
* errorpage.php
**********************************************************************/
define("ERRORPAGE_PAGEFORWARD","Kliknite ovdje ako vaš preglednik (browser) ne podržava automatsko prosljeđivanje.");
define("ERRORPAGE_PERMISSION_DENIED","Nemate dozvolu posjetiti ovu stranicu. Kliknite ovdje da se vratite natrag.");

// new 4.7
/*********************************************************************
* fleet_movements.php
**********************************************************************/
define("FLEETS_TITLE","OGame Galaxytool - Kretanja flote");
define("FLEETS_ACTUAL_FLEETS","Trenutna kretanja flote");
define("FLEETS_YES",SHOW_YES);
define("FLEETS_NO",SHOW_NO);
define("FLEETS_DETAILS","Detalji");
define("FLEETS_MISSION_EXPEDITION","Ekspedicija");
define("FLEETS_MISSION_COLONIZATION","Kolonizacija");
define("FLEETS_MISSION_RECYCLE","Vaditi");
define("FLEETS_MISSION_TRANSPORT","Transport");
define("FLEETS_MISSION_DEPLOYMENT","Stacionaža");
define("FLEETS_MISSION_ESPIONAGE","Špijunaža");
define("FLEETS_MISSION_ACS_DEFEND","Pauziraj");
define("FLEETS_MISSION_ATTACK","Napad");
define("FLEETS_MISSION_ACS_ATTACK","AkS Napad");
define("FLEETS_MISSION_MOON_DESTRUCTION","Uništenje mjeseca");
define("FLEETS_MISSION_MISSILE_ATTACK","Napad raketama");
define("FLEETS_NO_DATA","Nema primjenjivih podataka");
// new 5.0
define("FLEETS_FLEET","Fleet");
define("FLEETS_ALL_FLEETS","Show all fleet movements");

/*********************************************************************
* parser_combat_reports.inc.php
**********************************************************************/
define("COMBAT_REPORT_OUDATED_GALAXYVIEW","Podaci o galaksiji su vam zastarili. Molimo prvo posjetite izvornu planetu napada i metu napada!");

/*********************************************************************
* messages.php
**********************************************************************/
define("MESSAGES_TITLE","OGame Galaxytool - OGame Poruke");
define("MESSAGES_PLAYERNAME","Ime igrača");
define("MESSAGES_SUBJECT","Naslov");
define("MESSAGES_DATE","Datum");
define("MESSAGES_FILTER","Filter");
define("MESSAGES_DELETE","Obriši poruku");
define("MESSAGES_PUBLISH_DETAIL","Objavi poruku tako da ju dodaš u napomene o tom igraču.");
define("MESSAGES_PUBLISH_HEADER","&sender je poslao poruku igraču &recipient dana &date:\n\n &message"); // &sender, &recipient, &date, &message replaced at runtime
define("MESSAGES_PLAYER_FILTER","Poruke za igrača:");
// new 5.0
define("MESSAGES_CONTENT","Content");

/*********************************************************************
* combat_reports.php
**********************************************************************/
define("COMBATS_TITLE","OGame Galaxytool - Izvještaji o borbi");
define("COMBATS_ATTACKER","Napadač");
define("COMBATS_DEFENDER","Obranioc");
define("COMBATS_DATE","Datum");
define("COMBATS_OWNER","Vlasnik");
define("COMBATS_WINNER","Pobjednik");
define("COMBATS_COMBATREPORT","Izvještaj o borbi");
define("COMBATS_COMBAT_AT","Borba na");
define("COMBATS_LOST_UNITS","Izgubljene jedinice");
define("COMBATS_LOOT","Plijen");
define("COMBATS_DEBRIS","Ruševine");
define("COMBATS_AND","i");
define("COMBATS_PUBLISH","Označi izvještaj kao javni");
define("COMBATS_UNPUBLISH","Označi izvještaj ponovno kao privatni");
define("COMBATS_DELETE","Obriši izvještaj");
define("COMBATS_CHECK_ALL","Označi sve");
define("COMBATS_UNCHECK_ALL","Odznači sve");
define("COMBATS_WITH_SELECTED","Sa odabranima");
define("COMBATS_PUBLIC_REPORTS","Javni izvještaji");
define("COMBATS_YES",SHOW_YES); // no need for translation!
define("COMBATS_NO",SHOW_NO); // no need for translation!
define("COMBATS_SEARCH_OPTIONS","Opcije pretrage");
define("COMBATS_SEARCH","Napravi");
define("COMBATS_RESET","Ponovno postavi");
// 4.8
define("COMBATS_COORDINATES",USER_BB_COORDINATES);
define("COMBATS_INVALID_GALAXY_ENTERED","Unesena pogrešna galaksija");
define("COMBATS_INVALID_SYSTEM_ENTERED","Unesen pogrešan sistem");
define("COMBATS_INVALID_PLANET_ENTERED","Unesena pogrešna planeta");
define("COMBATS_GALAXY_FROM_TO","Galaksija");
define("COMBATS_SYSTEM_FROM_TO","Sistem");
define("COMBATS_PLANET_FROM_TO","Planeta");
define("COMBATS_APPLY",GENERAL_APPLY);
define("COMBATS_COMBAT_SUMMARY","Sažetak izvještaja o borbi");
define("COMBATS_DOWNLOAD_CSV","Preuzmi CSV datoteku");

/*********************************************************************
* report_archive.php
**********************************************************************/
define("REPORT_ARCHIVE_TITLE","Arhiva izvještaja");
define("REPORT_ARCHIVE_COORDINATES","Koordinate");
define("REPORT_ARCHIVE_SCANTIME","Vrijeme skeniranja");
define("REPORT_ARCHIVE_DELETE","Izbriši ove uonse");
define("REPORT_ARCHIVE_CONFIRM_DELETE","Da li zaista želite izbrisati ove unose?");
define("REPORT_ARCHIVE_GALAXY","Galaksija");
define("REPORT_ARCHIVE_SYSTEM","Sistem");
define("REPORT_ARCHIVE_PLANET","Planeta");
define("REPORT_ARCHIVE_MOON","Mjesec");
define("REPORT_ARCHIVE_DETAILS","Detalji");
define("REPORT_ARCHIVE_RESOURCES",DETAILEDINFO_RESOURCES);
define("REPORT_ARCHIVE_HEADER_RESOURCES",REPORTS_RESOURCES);
define("REPORT_ARCHIVE_DETAILS_FOR","Arhiva izvještaja za &1 [&2] (&3)"); // &1 = planetname; &2 = coordinates; &3 = playername
define("REPORT_ARCHIVE_FLEET_CARGO","Kapacitet tereta flote");
define("REPORT_ARCHIVE_IRAK_RANGE","Doseg interplanetarnih raketa");
define("REPORT_ARCHIVE_CHART_TYPE","Tip grafa");

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