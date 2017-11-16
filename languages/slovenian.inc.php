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
define("L_USERNAME","Uporabniško ime");
define("L_PASSWORD","Geslo");
define("L_LOGINFAILURE","Uporabniško ime ali geslo je napačno ali pa vaš račun še ni aktiven");
define("L_TOKENFAILURE","Vnesili ste napačno geslo, ali pa vaš račun še ni aktiviran");
define("L_LOGINTEXT","Prosimo prijavite se.");
define("L_LANGUAGE","Izberi jezik:");
define("L_TIMEOUT","Seja je potekla!");
define("L_REGISTER","Registracija");
define("L_PWLOST","Pozabljeno geslo");
define("INDEX_TITLE","Pregled");
define("INDEX_INFO","Informacije");
define("INDEX_ENTRIES","Število sistemov");
define("INDEX_ENTRIES_LASTWEEK","Novi sistemi od prejšnjega tedna");
define("INDEX_ENTRIES_TO_OLD","Stari sistem od prejšnjega meseca");
define("INDEX_REGISTERED_USERS","Registriranih uporabnikov");
define("INDEX_PAGEFORWARD","Če vas brskalnik ne podpira avtomatske preusmeritve, prosimo kliknite tukaj");
define("INDEX_NOTICES","Objave");
define("INDEX_PLAYERS","Znanih igralcev");
define("INDEX_ALLIES","Znanih alians");
define("INDEX_REPORTS","Vohunsko poročilo");
define("INDEX_VERSION","Zadnja verzija za download");
define("INDEX_SHOUTBOX","Kričač");
define("INDEX_NOENTRY","Trenutno ni sporočil");
define("INDEX_COMMENT","Vaše sporočilo");
define("INDEX_INSERT","Vnesi");
define("INDEX_UMOD","Igralci na dopustu");
define("INDEX_LATEST_VERSION","Ni novejše verzije"); // todo
define("INDEX_NO_MOONS","Število lun");
define("INDEX_NO_EMPTY_SYSTEMS","Število praznih sistemov");
define("INDEX_NO_FULL_SYSTEMS","Število popolnoma polnih sistemov");
define("INDEX_NO_TARGETS","Število možnih tarč");
// 4.0
define("INDEX_USERINFO","Uporabniki");
define("INDEX_ONLINE","Trenutno online");
define("INDEX_TODAY","Danes prisotni");
define("INDEX_ALL","Skupno število prijav");
// 4.3.7
define("GENERAL_LOAD_FORM","Naloži podatke");
define("GENERAL_SAVE_FORM","Shrani podatke");
define("GENERAL_SAVE_AS_TEXT","Shrani kot");
define("GENERAL_SAVE","Shrani");
// 4.8
define("INDEX_USERMANAGEMENT","Aktivacije");
define("INDEX_NEEDADMIN","Še neaktivirani računi");
define("INDEX_NEEDEMAIL","Zavrjeni računi");
define("INDEX_TOOLBAR_INFO","Galaxytool plugin informacije");
define("INDEX_TOOLBAR_URL","Galaxytool URL");
define("INDEX_TOOLBAR_VERSION_REQUIRED","Zahteva zadnjo verzijo Galaxytool plugin");
define("INDEX_TOOLBAR_INSTALL_GUIDE","Navodila za nameščaje plugin");
define("INDEX_TOOLBAR_TOKEN","Ključ");
define("INDEX_TOOLBAR_NEW_TOKEN","Naredi nov ključ");
define("INDEX_PLAYERS_WITH_N_PLANETS","Igralci z več kot &1 planetov");
define("INDEX_GETTING_STARTED","Začnimo");
define("INDEX_GETTING_STARTED1","Dobrodošli na Galaxytool strani");
define("INDEX_GETTING_STARTED2","Galaxytool vam bo pomagal nadzirati kaj se dogaja v vesolju &1");
define("INDEX_GETTING_STARTED3","Preden začnete z brskanjem informacij, morate vnesti le te. Za to potrebujete plugin &1 , vendar deluje le na brskalniku Firefox.");
define("INDEX_GETTING_STARTED4","Po namestitvi plugin-a, začnete brskati po galaksiji kot to delate ponavadi, z tem da boste videli majhen okvirček v katemem bo pisalo da je bilo nekaj poslano v GalaxyTool. Več galaksij ko boste pregledali, več in bolj točne informacije vam bo na voljo kasneje, zato je pripročeno da preisčete čim več menijev in sončnih sistemov");
define("INDEX_GETTING_STARTED5","Ko so podatki vnešeni, lahko začnete brskati po informacijah, kot so recimo na primer število in pozicija planetov od določenega igralca, prej vnešena  vohunska poročila, aktivnost igralcev in veliko drugih filtrov ter iskalnikov in grafov.");
define("INDEX_GETTING_STARTED6","Lahko pa boste tudi primerjali svoj napredek z drugimi igralci, in si iskali konkurenco, Med prijatelji tekmovali kdo naredi več bitk itd...");
define("INDEX_GETTING_WIKIPAGE","Galaxytool vsebuje vse to in zelo veliko več funkcij ter pripomočkov.");
define("INDEX_GETTING_WIKIPAGE2","Vsako funkcijo lahko posebej preverite kako deluje in čemu je navoljo, na uradni GalaxyTool wiki strani (stran za pomoč)");
define("INDEX_GETTING_BOARD","Za mnenja in ideje glede GalaxyTool-a lahko uporabite naš forum:");
define("INDEX_GETTING_CHAT1","Ali pa obiščete naš chatroom:");
define("INDEX_GETTING_CHAT2","Nismo online 24/7 ampak smo vseeno veliko prostega časa tam.");
// new 5.0
define("INDEX_CLOSE","Zapri");
define("INDEX_LOGIN","Vpis");
define("GENERAL_REQUIRED_FIELDS","Prosimo, izpolnite vsa polja");
define("INDEX_MESSAGES","Sporočila");
define("INDEX_EXAMPLE","Primer");
define("INDEX_INVALID_DATA","Neveljavni podatki");
define("GENERAL_COLUMN_HIDE_TITLE","Uredi stolpce");
define("GENERAL_COLUMN_HIDE_INFO","Prosimo izberite katere stolpce želite videti.");
define("GENERAL_ENTRIES_DELETED","&1 brisanih vnosov");
define("GENERAL_APPLY","Uporabi");
define("STARTPAGE_GALAXYTOOL_DESCR","<em>Galaxytool</em> je orodje za spletno igro OGame.");
define("GENERAL_OVERWRITE","OPrepiši podvojene vnose.");
define("GENERAL_OVERWRITE_QUESTION","Prepišem?");
define("INDEX_OWN_LOGINS","Vaše prijave");
define("GENERAL_OPEN_IN_NEW_WINDOW","Odpri povezavo v novem oknu");
// 5.1
define("GENERAL_UNIT_OF_MEASURE_DAYS","Days");

/*********************************************************************/
/***************************** internal ******************************/
/*********************************************************************/
// index.php
define("PROGRAM_NAME","OGame Galaxytool");
define("SHORTNAME","Galaxytool");
define("BACK_INDEX","Nazaj na začetno stran");
define("UNIVERSE","Galaksija");

// search
define("MENU_INFO_LINKS","Informacije");
define("MENU_PAGE","Pregled");
define("MENU_DB_SEARCH","Išči v bazi");
define("MENU_DB_NOTICES","Išči v objavi");
define("MENU_DB_REPORTS","Išči v poročilih");
define("MENU_GALAXYVIEW","Pregled Galaksije");
define("MENU_STATISTICS","Statistike");
define("MENU_ALLYHISTORY","Grafi napredkov");
// 4.7
define("MENU_FLEET_MOVEMENTS","Premiki flot");
define("MENU_COMBAT_REPORTS","Poročila bitk");
define("MENU_MESSAGES","Zasebna sporočila");

// insert / change
define("MENU_OPTION_LINKS","Možnosti");
define("MENU_DB_REFRESH","Dodaj v bazo");
define("MENU_NOTICES","Objave");
define("MENU_DB_STATUS","Stanje baze");
define("MENU_USEROPTIONS","Upravljanje uporabnikov");
define("MENU_USEROPTIONS2","Urejanje profila");
define("MENU_USEROPTIONS3","Seznam uporabnikov");
// 4.2
define("MENU_ADMIN","Administracija");
// 4.3.3
define("MENU_LOGOUT","Odjavi se");

// Stuff
define("MENU_STUFF","Ostalo");
define("MENU_FORUM_THREAD","Forum razvojne ekipe");
define("MENU_DOWNLOADPAGE","Stran za download");
define("MENU_LANGUAGE","Jezik");
define("MENU_HELP","Pomoč");
// 4.0
define("MENU_TOOLOPTIONS","Galaxytool Možnosti");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1"," je shranjeno v bazo");
define("PARSER_ERROR1","Napaka pri vnosu teh koordinat v bazo:");
define("PARSER_ERROR2","Baza ni najdena!");
define("PARSER_ERROR3","Strežnik ni najden!");
define("PARSER_WRONG_UNIVERSE","Napačno vesolje - actual: \"&1\"  pričakovano: \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","OGame Galaxytool - Stran za iskanje");
define("SHOW_SEARCH","Išči v bazi");
define("SHOW_ALLYSYMBOL","Tag alianse");
define("SHOW_PLAYERNAME","Ime igralca");
define("SHOW_MOONS","Samo planeti z luno");
define("SHOW_NOTICES","Samo planeti z opombo");
define("SHOW_COLONIES","Samo planeti za kolonizacijo");
define("SHOW_YES","Da");
define("SHOW_NO","Ne");
define("SHOW_SEARCHRANGE","Domet");
define("SHOW_SEARCH_IN","Išči v galaksiji");
define("SHOW_FROM_SYSTEM","od sistema");
define("SHOW_FROM_PLANET","od pozicija planeta");
define("SHOW_TO","do");
define("SHOW_DESCRIPTION","Lahko uporabljate * za imena igralcev in alianse. <br />Izpolnite samo tista polja ki ji želite specificirati.");
define("SHOW_SORT_BY","Razvrsti po ");
define("SHOW_GALASYSTEM","Galaksija/Sistem");
define("SHOW_ALLYNAME","Ime alians");
define("SHOW_SEARCHBUTTON","Išči");
define("SHOW_ADDRESS","Koordinate");
define("SHOW_ALLYSORT","Aliansa");
define("SHOW_PLANET","Ime planeta");
define("SHOW_STATUS","Status");
define("SHOW_CURRENTNESS","Starost");
define("SHOW_PLAYER_STATUS","Status igralca");
define("SHOW_PLAYER_STATUS1","vsi");
define("SHOW_PLAYER_STATUS2","možne tarče");
define("SHOW_PLAYER_STATUS3","neaktiven");
define("SHOW_HITS","Rezultatov");
define("SHOW_OF","od");
define("SHOW_ASC","abecedno zaporedje");
define("SHOW_DESC","obrnjeno abecedno zaporedje");
define("SHOW_RESULTS","Rezultati po straneh");
define("SHOW_MOON","Luna");
define("SHOW_UKMOONSIZE","nepoznano");
define("SHOW_DF","RU");
define("SHOW_DF_LONG","Ruševin");
define("SHOW_METAL","M");
define("SHOW_METAL_LONG","Metal");
define("SHOW_CRYSTAL","K");
define("SHOW_CRYSTAL_LONG","Kristal");
define("SHOW_BOTH","oboje skupaj");
define("SHOW_AT_LEAST","(najmanjše)");
define("SHOW_DATE","Datum");
define("SHOW_DATE_0","ni pomembno");
define("SHOW_DATE_1","starejše od");
define("SHOW_DATE_2","novejše od");
define("SHOW_RANK","Mesto");
define("SHOW_FRANK","Mesto Flote");
define("SHOW_MEMBERS","Člani");
define("SHOW_NOTRANKED","Ni v top 1500");
define("SHOW_NOTICERES","Objave");
define("SHOW_REPORTS","Samo planeti s poročilom");
define("SHOW_REPORTS_SHORT","Poročila");
define("SHOW_NOTHING","Ni rezultatov");
define("SHOW_ALLIANCE_STATUS","Status alians");
define("SHOW_NO_STATUS","brez Statusa");
define("SHOW_NAP","NAP");
define("SHOW_ALLIED","Aliansa");
define("SHOW_WAR","vojna");
define("SHOW_BOYCOTT","Bojkotirati");
define("SHOW_NEUTRAL","Neutralni");
define("SHOW_OWN","Lastna aliansa");
define("SHOW_WING","Krilo");
// obsolete with 5.0
define("SHOW_EXT_OPTIONS1","Prikaži več opcij za iskanje dometa, rang, datum ali ruševine.");
define("SHOW_EXT_OPTIONS2","Prikaži več opcij za iskanje kolonije, Lune, poročila, belježke, statistike igralcev ali diplomatski status.");
define("SHOW_EXT_OPTIONS3","Prikaži več opcij iskanja razvrščenih od preiskanih rezultatov.");
// new 5.0
define("SHOW_EXTENDED","Napredno iskanje");
define("SHOW_MOON_SELECTION","Planet z luno");
define("SHOW_REPORT_SELECTION","Planet z poročilom");
define("SHOW_FILTER_BY","Izkluči z seznama");
define("SHOW_FILTER_NONE","nihče");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Show players without score changes within the last few days");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","OGame Galaxytool - Statistična stran");
define("STATUS_DB_STATUS","Statistična baza");
define("STATUS_COLOR","Barva");
define("STATUS_AGE1","Vnos 1 dan star.");
define("STATUS_AGE2","Vnos 2 - 4 dni star.");
define("STATUS_AGE3","Vnos 4 - 7 dni star.");
define("STATUS_AGE4","Vnos 1 - 2 tedna star.");
define("STATUS_AGE5","Vnos 2 - 4 tednov star.");
define("STATUS_AGE6","Vnos starejši od 1 meseca!");
define("STATUS_AGE7","Ni vnosa.");
define("STATUS_ON","vključeno");
define("STYLES_COLOR1","Barva1");
define("STYLES_COLOR2","Barva2");
define("STYLES_COLOR3","Barva3");
define("STYLES_COLOR4","Barva4");
define("STYLES_COLOR5","Barva5");
define("STYLES_COLOR6","Barva6");
define("STYLES_COLOR7","Barva7");
// 4.8
define("STATUS_DB_LEGEND","Legenda");
define("STATUS_GALAXY","Pregled galaksije");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","OGame Galaxytool - Uporabljanje z uporabniki");
define("USER_NAMES","Uporabnik");
define("USER_ERROR","Napaka");
define("USER_NEWUSER","Nov uporabnik");
define("USER_GALAXY","Galaksija");
define("USER_OPTIONS","Možnosti");
define("USER_USERNAME","Uporabniško ime");
define("USER_PASSWORD","Geslo");
define("USER_PASSWORD_CONFIRM","Potrdi geslo");
define("USER_SEARCH","Išči");
define("USER_INSERT","Vnesi");
define("USER_DELETE","Briši");
define("USER_DELETE_ENTRY","Želite izbrisati uporabnika: ");
define("USER_STATUS","Poglej statistiko");
define("USER_STYLES","Spremeni pogled");
define("USER_SUBMIT","Pošlji");
define("USER_RESET","Uniči");
define("USER_YES","Da");
define("USER_NO","Ne");
define("USER_STYLEPATH","Pot do styles.css");
define("USER_PROBES","Preglej/Pošlji Vohunsko Poročilo");
define("USER_EMAIL","Email");
define("USER_ERROR1","Geslo ni pravo ali Email ne dela.");
define("USER_ERROR2","Email nepravilen.");
define("USER_INGAME","Ime v igri");
define("USER_ALLYTAG","Aliansa");
define("USER_ALLYHISTORY","Preglej/Pošlji Zgodovino Alians");
define("USER_DIPLOMATIC","Spremeni Diplomatski Status");
define("USER_STATSPAGE","Število vnosov na statistiko");
define("USER_LINKS","Linki");
define("USER_LINKS2","Format:<br>text;url<br>text2;url2<br>text3;url3");
define("USER_EXPORT_TITLE","Uporabi barve (BB Kode)");
define("USER_BB_COORDINATES","Koordinate");
define("USER_BB_MOON","Luna");
define("USER_BB_DEBRIS","Ruševine");
define("USER_BB_ALLY","Ime alianse");
define("USER_BB_ALLYDETAILS","Podrobnosti alianse");
define("USER_BB_PLAYERNAME","Igralec");
define("USER_BB_BANNED","Bannan");
define("USER_BB_VACATION","Čas dopusta");
define("USER_BB_NOOB","Začetnik");
define("USER_BB_INACTIVE","Neaktiven");
define("USER_BB_LONGINACTIVE","Dolgo neaktiven");
// new with 4.7
define("USER_DELETION","Izbriši");
define("USER_FLEETINFO",MENU_FLEET_MOVEMENTS);
define("USER_ACTIVITIES","Aktivnost igralca");
define("USER_MAINTENANCE","Galaxytool vzdrževanje");
define("USER_MANAGEMENT",MENU_USEROPTIONS);
define("USER_DELETE_MY_COMBAT_REPORTS","Izbriši moja poročila bitk");
define("USER_DELETE_MY_MESSAGES","Izbriši moja zasebna sporočila");
define("USER_DELETE_MY_FLEETMOVES","Izbriši moje premike flot");
// 4.8
define("USER_DELETE_MY_COMBAT_REPORTS_LIMITED","Izbriši moja poročila bitk starejša od &1 dni");
define("USER_DELETE_MY_MESSAGES_LIMITED","Izbriši moja sporočila starejša od &1 dni");
define("USER_TABLE_ENTRIES","Število zadetkov po strani");
// 5.0
define("USER_EXISTS","Uporabnik že obstaja");
define("USER_BB_OUTLAW","Prepovedano");
define("USER_INVALID_URL","Oblika URL &1 je neveljavna - URL nebo upoštevan");

/*********************************************************************
* galaxyview.php
*********************************************************************/
define("VIEW_TITLE","OGame Galaxytool - Podrobno");
define("VIEW_NODATA","Podatki niso dostopni.");
define("VIEW_GALAXY","Galaksija");
define("VIEW_SYSTEM","Solarni sistem");
define("VIEW_POSITION","Poz.");
define("VIEW_PLANET","Planet.");
define("VIEW_MOON","Luna");
define("VIEW_TF","RU");
define("VIEW_PLAYER","Igralec");
define("VIEW_PLAYER_ADD","(Mesto / Status)");
define("VIEW_ALLY","Aliansa");
define("VIEW_ALLY_ADD","(Mesto / Člani)");
define("VIEW_METAL","M");
define("VIEW_CRYSTAL","K");
define("VIEW_COLONISED","Planet naseljen");
define("VIEW_UKMOONSIZE","neznano");
define("VIEW_BACK","nazaj");
define("VIEW_NOTICE","Objave");
define("VIEW_REPORTS","Poročilo");
define("VIEW_MOONPHALANX","Naslednje lune lahko falangirajo ta sistem");
define("VIEW_NOMOONS","Ni najdenih falang");
define("VIEW_IRAKS","Naslednje Medplanetarne rakete lahko dosežejo ta sistem");
define("VIEW_NOIRAKS","Ni najdenih medplanetarnih raket");
// 4.0
define("VIEW_MOON_DESTROY_CHANCE","Možnost za uničenje lune");
define("VIEW_CHANCE_WITH_ONE","Možnost z eno zvezdo smrti");
define("VIEW_CHANCE_WITH_N","Možnost z ");
define("VIEW_DEATH_STARS","zvezdami smrti");
define("VIEW_DS_DESTROY_CHANCE","Možnost za uničenje zvezde smrti");
define("VIEW_TOP","Top");
// new 4.3.5
define("VIEW_GO","go");
// new 5.0
define("VIEW_DIAMETER","Premer");

/*********************************************************************
* change_password.php
**********************************************************************/
define("PW_TITLE","OGame Galaxytool - menjava gesla");
define("OLD_PASSWORD","staro geslo");
define("NEW_PASSWORD","novo geslo");
define("CONFIRM_NEW_PASSWORD","potrdi novo geslo");
define("PW_MISMATCH","Gesli se ne ujemata!");
define("PW_ERROR","Staro geslo ni pravilno!");
define("UPDATE_DONE","Geslo spremenjeno.");
// new 4.2
define("TIMEZONE_OFFSET","Časovni pas");
// new 4.3
define("DELETE_ACCOUNT","Izbriši račun");
define("DELETE_ACCOUNT_SAFETY_REQUEST","Ali res želite izbrisati ta račun?");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","Autorizacija");
define("CH_PASSWD_ADMIN","Admin");
// new 4.7
define("TIMEZONE_OGAME_OFFSET","Časovni pas OGame serverja");
// new 4.8
define("CH_PASSWD_USER_LANGUAGE","Spremeni na ta jezik po prijavi");
define("CH_PASSWD_USER_LANGUAGE_NO_CHANGE","Ne spremeni");
define("CH_PASSWD_EXPAND","Razširjeno");
define("CH_PASSWD_COLLAPSE","Zloženo");
define("CH_PASSWD_HIDDEN","Skrito");
define("CH_PASSWD_GETTING_STARTED","Pokaži meni Začnimo po prijavi");
define("CH_PASSWD_PLUGIN","Pokaži meni plugin informacije po prijavi");

/*********************************************************************
* notices.php
**********************************************************************/
define("NOTICE_TITLE","OGame Galaxytool - Poročilo");
define("NOTICE_HEADER","menjava poročila");
define("NOTICE_HEADER2","Zamenjaj svoje poročilo");
define("NOTICE_PUBLIC","Dostopno drugim ?");
define("NOTICE_YES","da");
define("NOTICE_NO","ne");
define("NOTICE_TEXT","Tekst objave");
define("NOTICE_SAVE","Shrani");
define("NOTICE_DELETED","Brisano");
define("NOTICE_SAVED","Uspešno shranjeno");
define("NOTICE_RESULTS","Vsi rezultati");
define("NOTICE_USER","Uporabnik");
define("NOTICE_DATE","Datum");
define("NOTICE_EDIT","Uredi");
define("NOTICE_DELETE","Briši");
define("NOTICE_NEW","Nov vnos");
define("NOTICE_NOTPUBLIC","Objava ni javna.");
define("NOTICE_ALL","vsi");
define("NOTICE_NONE",SHOW_FILTER_NONE);
define("NOTICE_SEARCH","Išči v poročilu");
define("NOTICE_SEARCH_SHORT","Išči");
define("NOTICE_HITS","Rezultati");
define("NOTICE_SHOWRESULTS","Rezultati po straneh");
define("NOTICE_OF","od");
define("NOTICE_NOTHING","Ni najdenih rezultatov");
// 4.0
define("NOTICE_CHARS","Znaki");
define("NOTICE_PLAYERNAME","Igralec");
define("NOTICE_SHOWALL","Prikaži vsa poročila");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","OGame Galaxytool - Vohunsko poročilo");
define("REPORTS_RESOURCES","Surovine");
define("REPORTS_FLEET","Flota");
define("REPORTS_DEFENCE","Obramba");
define("REPORTS_BUILDINGS","Zgradbe");
define("REPORTS_TECHNOLOGY","Laboratorij");
define("REPORTS_MOON","Luna");
define("REPORTS_SEARCH","Išči v poročilu vohunjenja");
define("REPORTS_SEARCH_SHORT","Išči");
define("REPORTS_HITS","Rezultati");
define("REPORTS_NOTHING","Vnos ni najden");
define("REPORTS_ADDRESS","Koordinati");
define("REPORTS_CURRENTNESS","Starost");
define("REPORTS_PLAYERNAME","Ime igralca");
define("REPORTS_ALLY","Aliansa");
define("REPORTS_VIEW","Poglej poročilo");
define("REPORTS_SEARCH_IN","Išči v galaskiji");
define("REPORTS_FROM_SYSTEM","od sistema");
define("REPORTS_TO","do");
define("REPORTS_DELETE","Briši");
define("REPORTS_DELETED","Vnos zbrisan");
define("REPORTS_RESULTS","Rezultati po straneh");
define("REPORTS_OF","od");
define("REPORTS_DATE","Datum");
define("REPORTS_DATE_0","ni pomembno");
define("REPORTS_DATE_1","starejši od");
define("REPORTS_DATE_2","novejši od");
define("REPORTS_NOTICES","Objave");
define("REPORTS_AT_LEAST_RESOURCES","Produkcija (vsaj)");
define("REPORTS_SEARCH_EXTENDED","Razširjeno iskanje");
define("REPORTS_FLEET_RESIS","Točke flote");
define("REPORTS_DEFENCE_RESIS","Točke obrambe");
define("REPORTS_ALL_RESIS","skupno točk");
define("REPORTS_TECHS","Tehnologije");
define("REPORTS_UNKNOWN_ENTRIES","neznani vnosi");
define("REPORTS_PARTLY_INSERTED","delno vneseno");
define("REPORTS_FOR_ALL_RES","za vse surovine");
define("REPORTS_FOR_TF","za ruševine");
define("REPORTS_KT","Mali transporter");
define("REPORTS_GT","Veliki transporter");
define("REPORTS_SS","Bojne ladje");
define("REPORTS_REC","Recikler");
define("REPORTS_RAIDABLE","Edina tarča za raid");
define("REPORTS_ALL_RESOURCES","vsa produkcija");
// 4.0
define("REPORTS_STUFF","Ostalo");
define("REPORTS_SPEEDSIM","Simuliraj z Speedsimom");
define("REPORTS_DRAGOSIM","Simuliraj z Dragosim");
define("REPORTS_STATUS","Status");
define("REPORTS_ERROR","Napaka");
// 4.2
define("REPORTS_OWN_REPORTS","Moja poročila");
// 4.3.3
define("REPORTS_UPLOAD_BY","Poročilo vnesel");
// 4.4
define("REPORTS_DEPTH","Pordobno poročilo");
define("REPORTS_FLEET_SCORE","Točke flote");
define("REPORTS_DEFENCE_SCORE","Točke obrambe");
// 5.0
define("REPORTS_HOURS","ure");
define("REPORTS_MAX_RESULTS_HIT","Vaša poizvedba ima več kot &1 zadetkov. Le prvih &1 rezultatov je pokazanih. Prosimo opišite iskalje bolj podrobno za manj rezultatov.");
define("REPORTS_OSIMULATE","Simuliraj v OSimulate");
define("REPORTS_SHOW_ONLY","Pokaži le");
define("REPORTS_SHOW_PLANETS","Planeti");
define("REPORTS_SHOW_MOONS","Lune");
define("REPORTS_OWNER","Poročila si lasti");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","OGame Galaxytool - Statistike");
define("STATS_TBLHEAD","Statistike");
define("STATS_RANK","Mesto");
define("STATS_PLAYERNAME","Ime igralca");
define("STATS_ALLYNAME","Tag alianse");
define("STATS_SCORE","Točke");
define("STATS_FLEET","Flota");
define("STATS_RESEARCH","Laboratorij");
define("STATS_MEMBERS","Člani");
define("STATS_STATUS","Status");
define("STATS_NOTHING","Ni Statusa");
define("STATS_NAP","NAP");
define("STATS_ALLIED","Zaveznik");
define("STATS_WAR","Vojna");
define("STATS_BOYCOTT","Bojkot");
define("STATS_NEUTRAL","Neutralen");
define("STATS_OWN","Lastna aliansa");
define("STATS_WING","Krilo");
define("STATS_UPDATE","Vnos od");
define("STATS_PLAYERSTATS","Statistika igralcev");
define("STATS_ALLYSTATS","Statistika alians");
// 4.0
define("STATS_DELETE","Ali želite zbrisati ta vnos?");
define("STATS_CONFIRM_DELETE","Ali res želite izbrisati ta vnos igralca?");
define("STATS_CHANGE_PLAYER_STATUS","Statistika igralca");
define("STATS_CHANGE_ALLIANCE_STATUS","Statistika Alianse");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","Vsi člani te alianse dobijo izbran status. Vsak prejšnji status bo spremenjen. lahko spremenite status igralcev naknadno.");
define("STATS_UNKNOWN","Preostanek");
define("STATS_DETAILS","Podrobno za");
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
define("STATS_SHOW_GRAPH","Pokaži podrobnosti proizvodnje točk");
define("STATS_LONG_INACTIVE",USER_BB_LONGINACTIVE);
// 4.9
define("STATS_STANDARD","Točke");
define("STATS_MILITARY","Vojaške točke");
define("STATS_ECONOMY","Ekonomija");
define("STATS_HONOUR","Častne točke");
define("STATS_MILITARY_BUILD","Zgrajene vojaške točke");
define("STATS_MILITARY_DESTROYED","Vojaške točke uničene");
define("STATS_MILITARY_LOST","Izgubljene vojaške točke");

/*********************************************************************
* register.php
**********************************************************************/
define("REGISTER_REGISTRATE","Registracija");
define("REGISTER_LOGINNAME","Ime Uporabnika");
define("REGISTER_PASSWORD","Geslo");
define("REGISTER_PASSWORD_CONFIRM","Potrdi geslo");
define("REGISTER_EMAIL","Email");
define("REGISTER_INGAME","Ime v igri");
define("REGISTER_ALLYTAG","Tag alianse");
define("REGISTER_EMAILVERIFICATION","Preverjanje Emaila");
define("REGISTER_EMAILTEXT","Prosimo vas da odprete to stran in s tem potrdite vaš Email naslov na Galaxietool-u.");
define("REGISTER_ERROR1","Uporabniško ime že obstaja!");
define("REGISTER_ERROR2","Napaka pri pošiljanju Emaila! Prosimo, kontaktirate administratorja.");
define("REGISTER_ERROR3","Napaka pri pošiljanju podatkov v bazo!");
define("REGISTER_INFO1","Vaš račun je uspešno ustvarjen.");
define("REGISTER_INFO2","Po elektronski pošti smo vam poslali podatke za aktivacijo računa. Prosimo preverite vašo elektronsko pošto.");
define("REGISTER_INFO3","Vaš račun je potrjen. Administrator ga mora še aktivirati!");
define("REGISTER_BUTTON","Nazaj na začetno stran");
define("REGISTER_NEW_SUBJECT","Nov uporabnik registriran na galaxytoolu");
define("REGISTER_NEW_MAILTEXT","Nov uporabnik se je registriral.");
// new 4.2
define("REGISTER_BACK","Nazaj na prvo stran");
// new 4.3.5
define("REGISTER_MISSING_FIELDS","Prosimo izpolnite vsa potrebna polja.");
// new 4.8
define("REGISTER_ERROR4","Email naslov ni veljaven.");
define("REGISTER_ERROR5","Gesli se ne ujemata.");
define("REGISTER_PWS","Moč gesla");
define("REGISTER_PWS0","zelo slabo");
define("REGISTER_PWS1","slabo");
define("REGISTER_PWS2","dobro");
define("REGISTER_PWS3","močno");
define("REGISTER_PWS4","zelo močno");
// new 5.0
define("REGISTER_EMAIL_USED","Email naslov je že v uporabi");

/*********************************************************************
* lost_password.php
**********************************************************************/
define("LOSTPW_TITLE","Geslo pozabljeno");
define("LOSTPW_INFO2","Novo geslo je obnovljeno in poslano na vaš mail!");
define("LOSTPW_BUTTON1","naredi novo geslo");
define("LOSTPW_BUTTON2","Nazaj na začetno stran");
define("LOSTPW_LOGINNAME","Uporabniško Ime");
define("LOSTPW_EMAIL","Email");
define("LOSTPW_ERROR1","Napaka pri pošiljanju podatkov v bazo!");
define("LOSTPW_ERROR2","Napačno vnešeni podatki!");
define("LOSTPW_ERROR3","Napaka pri pošiljanju Emaila! Prosimo vas da kontaktirate administratorja");
define("LOSTPW_EMAIL_SUBJECT","Vaše novo geslo ki ste ga zahtevali");
define("LOSTPW_EMAIL_TEXT1","Vaš novi login za Galaxytool");
define("LOSTPW_EMAIL_TEXT2","Uporabniško Ime");
define("LOSTPW_EMAIL_TEXT3","Geslo");
// new 5.0
define("LOSTPW_INFO1","Prejeli boste Email, da potrdite zahtevek novega gesla");
define("LOSTPW_CONFIRM_RESET_SUBJECT","Pozabljeno geslo?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","Pozdravljeni,\n\nyou je zahteval ponastavitev gesla za Galaxytool. Za generacijo novega gesla, kliknite na naslednjo povezavo:");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","OGame Galaxietool - Informacije o uporabniku");
define("USERINFO_NAMES","Vsi uporabniki");
define("USERINFO_DETAIL","podrobne informacije o");
define("USERINFO_ERROR1","Ni uporabnika z takim ID!");
define("USERINFO_USERNAME","Uporabniško Ime");
define("USERINFO_INGAME","Ime v igri");
define("USERINFO_EMAIL","Email");
define("USERINFO_ALLYTAG","Aliansa");
define("USERINFO_STYLEPATH","Skin");
define("USERINFO_STATUS","Status");
define("USERINFO_ACTIVATE","Aktiviraj igralca");
define("USERINFO_LOGINS","Število prijav");
define("USERINFO_LASTLOGIN","Zadnja prijava");
define("USERINFO_DATA","Informacije o sistemu , ki jih je vnesel uporabnik");
define("USERINFO_NODATA","Ta uporabnik ni vnesel še noben sistem");
define("USERINFO_GALAXY","Galaksija");
define("USERINFO_SYSTEMS","Število sistemov");
define("USERINFO_IP","IP naslov");
define("USERINFO_LOGINTIME","Prijava");
define("USERINFO_NOLOGIN","Ta uporabnik se do sedaj še ni prijavil");
define("USERINFO_LAST_GALAXYUPDATE","Zadnji vnos v izgled galaksije");
define("USERINFO_LAST_PUBLIC_NOTICE","Zadnja javna objava");
define("USERINFO_LAST_PRIVATE_NOTICE","Zadnja privatna objava");
define("USERINFO_NUMBEROF_PUBLIC_NOTICE","Število javnih objav");
define("USERINFO_NUMBEROF_PRIVATE_NOTICE","Število privatnih objav");
define("USERINFO_ACTIVATED","Uporabni račun aktiviran");
define("USERINFO_ACTIVATIONTEXT","Galaxytool administrator je aktiviral vaš uporabni račun. Uživajte u Galaxytool-u!");
// new 4.8
define("USERINFO_LAST_SUBMIT","Nazadnje vnešeni podatki");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","OGame Galaxytool - Grafi");
define("ALLYHISTORY_TBLHEAD","Grafi");
define("ALLYHISTORY_PLAYERNAME","Igralec");
define("ALLYHISTORY_ALLYNAME","Aliansa");
define("ALLYHISTORY_LASTMONTH","Prejšnji mesec"); // changed at 4.0
define("ALLYHISTORY_ALL_DATA","vse dostopne informacije"); // new 4.0
define("ALLYHISTORY_SHOW","prikaži statistiko");
define("ALLYHISTORY_TIMESPAN","Časovni interval");
define("ALLYHISTORY_PROGESS","Napredek");
define("ALLYHISTORY_SCORE","Točke");
define("ALLYHISTORY_FSCORE","Točke flote"); // new 4.0
define("ALLYHISTORY_RSCORE","Točke raziskav"); // new 4.0
define("ALLYHISTORY_MEMBER","Člani"); // new 4.0
define("ALLYHISTORY_NOTHING","nič ni najdeno");
define("ALLYHISTORY_DETAILS","Podrobno");
define("ALLYHISTORY_SHOW_ADDRESS","Koordinati");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","Informacija o igralcu");
define("DETAILEDINFO_ALLYINFO_TITLE","Informacije o aliansi");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","Natančne informacije o igralcu");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","Natančne informacije o aliansi");
define("DETAILEDINFO_NO_ALLIANCE","nič");
define("DETAILEDINFO_SCORE","Točke");
define("DETAILEDINFO_FLEET","Flota");
define("DETAILEDINFO_RESEARCH","Laboratorij");
define("DETAILEDINFO_RANK","Pozicija");
define("DETAILEDINFO_POINTS","Točke");
define("DETAILEDINFO_KNOWN_PLANETS","znani planeti");
define("DETAILEDINFO_MOONS","znane lune");
define("DETAILEDINFO_PHALANX_AREA","Področje za Falangiranje");
define("DETAILEDINFO_NO_PHALANX_AREA","Igralec nima falange");
define("DETAILEDINFO_NOTICES","Opombe");
define("DETAILEDINFO_NO_NOTICES","Ni opomb");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","prejšnje alianse");
define("DETAILEDINFO_RESOURCES_PER_HOUR","Produkcija na uro");
define("DETAILEDINFO_RESOURCES_PER_DAY","Produkcija na dan");
define("DETAILEDINFO_RESOURCES_PER_WEEK","Produkcija na teden");
define("DETAILEDINFO_RESOURCES_PER_MONTH","Produkcija na mesec (30 dni)");
define("DETAILEDINFO_METAL","Metal");
define("DETAILEDINFO_CRYSTAL","Kristal");
define("DETAILEDINFO_DEUTERIUM","Deuterij");
define("DETAILEDINFO_UNKNOWN","nepoznano");
define("DETAILEDINFO_SCORE_DISTRIBUTION","Razporeditev točk");
// new 4.2
define("DETAILEDINFO_GENERAL","Podrobnosti");
define("DETAILEDINFO_MEMBERS","Član");
define("DETAILEDINFO_GRAPHS","Graf");
define("DETAILEDINFO_RESOURCES","Surovine");
define("DETAILEDINFO_FLEET_TAB","Flota");
define("DETAILEDINFO_TECH","Laboratorij");
define("DETAILEDINFO_FLEET_DETAIL","Sum / (povprečno) število iz vseh poročil ki so na voljo");
define("DETAILEDINFO_TECH_DETAIL","Povprečje od vseh informacij igralca ki so na voljo");
// new 4.3
define("DETAILEDINFO_PLANET_TAB",REPORTS_SHOW_PLANETS);
define("DETAILEDINFO_MOON_TAB",REPORTS_SHOW_MOONS);
// 4.7
define("DETAILEDINFO_ACTIVITIES","Aktivnost");
define("DETAILEDINFO_NODATA",VIEW_NODATA); // reuse existing translations
define("DETAILEDINFO_ACTIVITY_DESCRIPTION","Pokaži aktivnost od &1 od:");
define("DETAILEDINFO_GALAXYVIEWS","Iz pogleda galaksije");
define("DETAILEDINFO_SCANS","Iz vohunskih poročil");
define("DETAILEDINFO_MESSAGES","Iz sporočil igralca");
define("DETAILEDINFO_COMBATS","Iz poročil bitk");
define("DETAILEDINFO_ALLYPAGE","Pregled Alianse");
define("DETAILEDINFO_MANUAL","Ročno vnešeno");
define("DETAILEDINFO_START","Začetek");
define("DETAILEDINFO_TO","za");
define("DETAILEDINFO_TODAY","Danes");
define("DETAILEDINFO_DATA_RESTRICTION","Omejeno na:");
define("DETAILEDINFO_WEEKDAY_WEEKEND","Vikend");
define("DETAILEDINFO_WEEKDAY_WORKINGDAY","Delavnik");
define("DETAILEDINFO_WEEKDAY_MONDAY","Ponedeljek");
define("DETAILEDINFO_WEEKDAY_TUESDAY","Torek");
define("DETAILEDINFO_WEEKDAY_WEDNESDAY","Sreda");
define("DETAILEDINFO_WEEKDAY_THURSDAY","Četrtek");
define("DETAILEDINFO_WEEKDAY_FRIDAY","Petek");
define("DETAILEDINFO_WEEKDAY_SATURDAY","Sobota");
define("DETAILEDINFO_WEEKDAY_SUNDAY","Nedelja");
define("DETAILEDINFO_WEEKDAY_SHORTLENGTH",3); // number of characters to shorten week day
define("DETAILEDINFO_PLAYER_CURRENTLY_ACTIVE","Igralec je trenutno aktiven");
define("DETAILEDINFO_PLAYER_MESSAGES","vnešena sporočila igralca");
define("DETAILEDINFO_SHOW","pokaži");
define("DETAILEDINFO_NONE","ni vnosa");
define("DETAILEDINFO_ENTER_MANUALLY","Vstavi aktivnost tega igralca");
define("DETAILEDINFO_PLAYER_SEEN_ON","Igralec je bil online");
define("DETAILEDINFO_INSERT","Vstavi");
define("DETAILEDINFO_OGAME_SERVERTIMES","Opozorilo: Vsi datumi in časi se nanašajo na čas OGame strežnika!");
define("DETAILEDINFO_DAY_VIEW","pogled 24 ur");
define("DETAILEDINFO_WEEK_VIEW","pogled tedna");
// new 4.8
define("DETAILEDINFO_HOME_PLANET","Glavni planet");
// new 5.0
define("DETAILEDINFO_PLANETNAME","Ime"); // also used for moons!
define("DETAILEDINFO_DEFENCE_SCORE","Toče obrambe");
define("DETAILEDINFO_DEFENCE_SCORE_TOOLTIP","Točke obrambe = Flota - Skupne točke + Raziskovanja + Ekonomija.<br/>Vsa statistika mora biti posodobljena za pravilne rezultate!");
define("DETAILEDINFO_SCORE_PER_SHIP","Točke na ladjo");
define("DETAILEDINFO_SHIPS","Število flote");
define("DETAILEDINFO_DATE_IN_FUTURE","Do not maintain times which are not in the past.");

// new 4.2
/*********************************************************************
* administration.php
**********************************************************************/
define("ADMIN_TITLE","Administracija GalaxyToola");
define("ADMIN_DISCLAMER","Opozorilo: Zaganjanje teh skript je na lastno odgovornost! Večina od njih brišejo podatke.");
define("ADMIN_INCONSISTENCIES","Napake v bazi");
define("ADMIN_PLANETS","Planete na poziciji 0 ali več kot 15");
define("ADMIN_GALAXIES","Izbriši galaksije naprej od &1 ");
define("ADMIN_PLAYERS","Izbriši igralce brez OGame playerid - Vodi do podvojenih igralcev");
define("ADMIN_REPORTS","Izbriši poročila kjer ni več planetov");
define("ADMIN_MISC","Drugo");
define("ADMIN_RESET","Reset Galaxytool (le uporabniki in IP zapisi nebojo izbrisani)");
define("ADMIN_OLD_PLAYERS","Izbriši vnose igralcev stare več kot &1 dni");
define("ADMIN_OLD_REPORTS","Izbriši poročila starejša od &1 dni");
define("ADMIN_LOADING","Ne zapirajte tega okna dokler se stran nalaga.");
define("ADMIN_STATUS","Status od vaših zahtev");
define("ADMIN_SELECTION","Vsaj en vnos mora biti izbran");
define("ADMIN_SAFETY","Ali ste prepričani da želite izvršiti skripte(s) ?");
define("ADMIN_DONE","končano");
define("ADMIN_NOTBD","Nič ni za izvršiti");
// new 4.3
define("ADMIN_OLD_GALAXIES","Izbriši sisteme, ki so starejše od &1 dni");
define("ADMIN_UNUSED_PLAYERS","Izbriši igralce, ki ne obstajajo v pogledu galaksije");
// new 4.7
define("ADMIN_OLD_ACTIVITIES","Izbriši aktivnosti igralcev ki so starejše od &1 dni");
// new 4.8
define("ADMIN_OLD_COMBATS","Odstrani poročila bitk starejše od &1 dni");
define("ADMIN_OLD_INGAME_MSG","Izbriši sporočila starejše od &1 dni");
// new 5.0
define("ADMIN_OGAME_API","Naloži javne podatke iz OGame v Galaxytool");
define("ADMIN_OGAME_ALL_DATA",ALLYHISTORY_ALL_DATA);
define("ADMIN_OGAME_GALAXY_DATA",MENU_GALAXYVIEW);
define("ADMIN_OGAME_STATISTICS_DATA",MENU_STATISTICS);

// new 4.3.5
/*********************************************************************
* errorpage.php
**********************************************************************/
define("ERRORPAGE_PAGEFORWARD","Kliknite tukaj, če vaš brskalnik ne podpira  samodejnega usmerjenja");
define("ERRORPAGE_PERMISSION_DENIED","Nimate dovoljenj za vstop na to stran. Kliknite za nazaj.");

// new 4.7
/*********************************************************************
* fleet_movements.php
**********************************************************************/
define("FLEETS_TITLE","Premiki flot");
define("FLEETS_ACTUAL_FLEETS","Trenutni premiki flot");
define("FLEETS_YES",SHOW_YES);
define("FLEETS_NO",SHOW_NO);
define("FLEETS_DETAILS","Podrobnosti");
define("FLEETS_MISSION_EXPEDITION","Ekspedicija");
define("FLEETS_MISSION_COLONIZATION","Koloniziraj");
define("FLEETS_MISSION_RECYCLE","Recikliraj");
define("FLEETS_MISSION_TRANSPORT","Transport");
define("FLEETS_MISSION_DEPLOYMENT","Premik");
define("FLEETS_MISSION_ESPIONAGE","Vohuni");
define("FLEETS_MISSION_ACS_DEFEND","ACS Obramba");
define("FLEETS_MISSION_ATTACK","Napad");
define("FLEETS_MISSION_ACS_ATTACK","ACS Napad");
define("FLEETS_MISSION_MOON_DESTRUCTION","Uničenje lune");
define("FLEETS_MISSION_MISSILE_ATTACK","Raketni napad");
define("FLEETS_NO_DATA","Noben uporaben podatek ni najden");
// new 5.0
define("FLEETS_FLEET","Flota");
define("FLEETS_ALL_FLEETS","Pokaži vse premike flot");

/*********************************************************************
* parser_combat_reports.inc.php
**********************************************************************/
define("COMBAT_REPORT_OUDATED_GALAXYVIEW","Baza GalaxyTool-a je zastarela. Prosimo ponovno pojdite čez galaksijo!");

/*********************************************************************
* messages.php
**********************************************************************/
define("MESSAGES_TITLE","OGame Galaxytool - OGame Sporočila");
define("MESSAGES_PLAYERNAME","Igralec");
define("MESSAGES_SUBJECT","Zadeva");
define("MESSAGES_DATE","Datum");
define("MESSAGES_FILTER","Filter");
define("MESSAGES_DELETE","Izbriši sporočilo");
define("MESSAGES_PUBLISH_DETAIL","Objavi vsebino sporočila, ki bo veljal kot opomba igralca.");
define("MESSAGES_PUBLISH_HEADER","&sender Poslano &recipient na &date:\n\n &message"); // &sender, &recipient, &date, &message replaced at runtime
define("MESSAGES_PLAYER_FILTER","Sporočila za igralca:");
// new 5.0
define("MESSAGES_CONTENT","Vsebina");

/*********************************************************************
* combat_reports.php
**********************************************************************/
define("COMBATS_TITLE","OGame Galaxytool - Poročila bitk");
define("COMBATS_ATTACKER","Napadalec");
define("COMBATS_DEFENDER","Branilec");
define("COMBATS_DATE","Datum");
define("COMBATS_OWNER","Lastnik");
define("COMBATS_WINNER","Zmagovalec");
define("COMBATS_COMBATREPORT","Poročilo bitke");
define("COMBATS_COMBAT_AT","Bitka na");
define("COMBATS_LOST_UNITS","Izgubljene enote");
define("COMBATS_LOOT","Plen");
define("COMBATS_DEBRIS","Ruševine");
define("COMBATS_AND","in");
define("COMBATS_PUBLISH","Označi kot javno");
define("COMBATS_UNPUBLISH","Označi kot zasebno (skrije sporočilo pred drugim)");
define("COMBATS_DELETE","Izbriši bitko");
define("COMBATS_CHECK_ALL","Izberi vse");
define("COMBATS_UNCHECK_ALL","Izberi nič");
define("COMBATS_WITH_SELECTED","Označi");
define("COMBATS_PUBLIC_REPORTS","Javna poročila");
define("COMBATS_YES",SHOW_YES); // no need for translation!
define("COMBATS_NO",SHOW_NO); // no need for translation!
define("COMBATS_SEARCH_OPTIONS","Možnosti iskanja");
define("COMBATS_SEARCH","Pojdi");
define("COMBATS_RESET","Reset");
// 4.8
define("COMBATS_COORDINATES",USER_BB_COORDINATES);
define("COMBATS_INVALID_GALAXY_ENTERED","Neveljavna galaksija");
define("COMBATS_INVALID_SYSTEM_ENTERED","Neveljavni sistem");
define("COMBATS_INVALID_PLANET_ENTERED","Neveljavni planet");
define("COMBATS_GALAXY_FROM_TO","Galaksija");
define("COMBATS_SYSTEM_FROM_TO","Sistem");
define("COMBATS_PLANET_FROM_TO","Planet");
define("COMBATS_APPLY",GENERAL_APPLY);
define("COMBATS_COMBAT_SUMMARY","Povzetek poročila bitke");
define("COMBATS_DOWNLOAD_CSV","Shrani kot CSV datoteko");

/*********************************************************************
* report_archive.php
**********************************************************************/
define("REPORT_ARCHIVE_TITLE","Arhiv poročil");
define("REPORT_ARCHIVE_COORDINATES","Koordinati");
define("REPORT_ARCHIVE_SCANTIME","Čas vohunjenja");
define("REPORT_ARCHIVE_DELETE","Izbriši vnose");
define("REPORT_ARCHIVE_CONFIRM_DELETE","Si res želite izbrisati vnose?");
define("REPORT_ARCHIVE_GALAXY","Galaksija");
define("REPORT_ARCHIVE_SYSTEM","Sistem");
define("REPORT_ARCHIVE_PLANET","Planet");
define("REPORT_ARCHIVE_MOON","Luna");
define("REPORT_ARCHIVE_DETAILS","Podrobnosti");
define("REPORT_ARCHIVE_RESOURCES",DETAILEDINFO_RESOURCES);
define("REPORT_ARCHIVE_HEADER_RESOURCES",REPORTS_RESOURCES);
define("REPORT_ARCHIVE_DETAILS_FOR","Arhiv poročil za &1 [&2] (&3)"); // &1 = planetname; &2 = coordinates; &3 = playername
define("REPORT_ARCHIVE_FLEET_CARGO","Prostor na floti");
define("REPORT_ARCHIVE_IRAK_RANGE","Doseg medplanetarnih planet");
define("REPORT_ARCHIVE_CHART_TYPE","Vrsta grafa");

/*********************************************************************
* install.php
**********************************************************************/
define("INSTALL_TITLE", "Galaxytool namestitev za verzijo");
define("INSTALL_PROGRESS", "Napredek");
define("INSTALL_STEP", "Korak");
define("INSTALL_CONTINUE", "Nadaljuj");
define("INSTALL_VALIDATE", "Potrditev");
define("INSTALL_STEP1", "Dobrodošli");
define("INSTALL_STEP2", "Writeable check");
define("INSTALL_STEP3", "Database settings");
define("INSTALL_STEP4", "OGame settings");
define("INSTALL_STEP5", "Galaxytool settings");
define("INSTALL_STEP6", "Admin password");
define("INSTALL_STEP7", "Install Galaxytool");
define("INSTALL_STEP8", "Zaključi namestitev"); // check writable; delete install and update.php and redirect to index.php
define("INSTALL_FILE_DELETE_CHECK","Prosimo, izbrišite datoteki install.php in update.php z strežnika.");

define("INSTALL_STEP1_PHP_FAILED", "Your PHP version &1 is not working with this Galaxytool version");
define("INSTALL_STEP1_FOPEN_FAILED", "Your PHP version does not allow to open webpages with FOPEN() command. This is required to consume the OGame API.");
define("INSTALL_STEP1_WELCOME", "Dobrodošli v namestitev Galaxytool-a. Vodeni boste po namestitvi Galaxytool-a.");

define("INSTALL_STEP2_DESCRIPTION","Prepričajte se da imata datoteki config.php in attributes.php pravico do pisanja.");
define("INSTALL_STEP2_DESCRIPTION2","Če neveste kako priti do tega, prosimo poglejte tukaj: &1");
define("INSTALL_STEP2_FILE_NOT_WRITEABLE", "Datoteka ni pisljiva");

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

define("INSTALL_STEP5_TOOLNAME","Ime Galaxytool-a");
define("INSTALL_STEP5_ENTER_TOOLNAME","To ime bo vidno na prijavni strani Galaxytool, kot identifikacija");
define("INSTALL_STEP5_LANGUAGE","Prevzeti jezik");
define("INSTALL_STEP5_EMAIL_TO","Email To");
define("INSTALL_STEP5_ENTER_EMAIL_TO","Vnesite Email naslov, kjer želite prejemati sporočila o novih registracijah");
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

define("INSTALL_STEP6_INTRO","Prosimo, izberite geslo za <strong>admin</strong> račun, katerega potrebujete za prvo prijavo v Galaxytool po namestitvi.");

define("INSTALL_STEP7_CONFIG","Configuration file created");
define("INSTALL_STEP7_CONFIG_FAILED","Configuration file not created");
define("INSTALL_STEP7_ATTRIBUTES","Attributes file created");
define("INSTALL_STEP7_ATTRIBUTES_FAILED","Attributes file not created");
define("INSTALL_STEP7_CREATED_TABLES","Database tables created");

define("INSTALL_STEP8_INTRO","You have successfully installed the Galaxytool!");
define("INSTALL_STEP8_LOAD_DATA","Downloading OGame data ...");
define("INSTALL_STEP8_LOAD_DATA_FINISHED","Download of OGame data finished");
define("INSTALL_STEP8_DELETE_FILE","Sedaj izbrišite datoteki install.php in update.php z strežnika.");
define("INSTALL_STEP8_LOGON","Prosimo, prijavite se z <strong>admin</strong> računom in izbranim geslom");

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