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
define("L_USERNAME","Käyttäjänimi");
define("L_PASSWORD","Salasana");
define("L_LOGINFAILURE","Käyttäjänimi tai salasana väärin tai tiliäsi ei ole aktivoitu!");
define("L_TOKENFAILURE","Väärät käyttäjätiedot tai tiliäsi ei ole vielä aktivoitu.");
define("L_LOGINTEXT","Kirjaudu.");
define("L_LANGUAGE","Kielet:");
define("L_TIMEOUT","Yhteys aikakatkaistu!");
define("L_REGISTER","Rekisteröidy");
define("L_PWLOST","Kadonnut salasana");
define("INDEX_TITLE","OGame Galaxytool - Yleiskuva");
define("INDEX_INFO","Tiedot");
define("INDEX_ENTRIES","Aurinkokuntien määrä");
define("INDEX_ENTRIES_LASTWEEK","Alle viikon vanhat aurinkokunnat");
define("INDEX_ENTRIES_TO_OLD","Kuukautta vanhemmat aurinkokunnat");
define("INDEX_REGISTERED_USERS","Rekisteröityneet käyttäjät");
define("INDEX_PAGEFORWARD","Jos selaimesi ei tue sivun uudelleenohjausta, klikkaa tästä.");
define("INDEX_NOTICES","Merkinnät");
define("INDEX_PLAYERS","Pelaajatilastot");
define("INDEX_ALLIES","Liittoumatilastot");
define("INDEX_REPORTS","Vakoiluraportit");
define("INDEX_VERSION","Uusin ladattava versio");
define("INDEX_LATEST_VERSION","Ei uudempaa versiota saatavilla.");
define("INDEX_SHOUTBOX","Hölinäboxi");
define("INDEX_NOENTRY","Ei hölinöitä");
define("INDEX_COMMENT","Hölinäsi");
define("INDEX_INSERT","Lähetä");
define("INDEX_UMOD","Pelaajia lomamuodossa");
define("INDEX_NO_MOONS","Kuita");
define("INDEX_NO_EMPTY_SYSTEMS","Tyhjät aurinkokunnat");
define("INDEX_NO_FULL_SYSTEMS","Täydet aurinkokunnat");
define("INDEX_NO_TARGETS","Mahdollisten kohteiden määrä");
// 4.0
define("INDEX_USERINFO","Käyttäjät");
define("INDEX_ONLINE","Nyt paikalla");
define("INDEX_TODAY","Tänään paikalla");
define("INDEX_ALL","Kirjautumisia kaikkiaan");
// 4.3.7
define("GENERAL_LOAD_FORM","Avaa tallennettu lomake");
define("GENERAL_SAVE_FORM","Tallenna lomakkeen tiedot");
define("GENERAL_SAVE_AS_TEXT","Tallenna nimellä");
define("GENERAL_SAVE","Tallenna");
// 4.8
define("INDEX_USERMANAGEMENT","Aktivoinnin yleiskatsaus");
define("INDEX_NEEDADMIN","Aktivoitavat tilit");
define("INDEX_NEEDEMAIL","Tarkastamattomat tilit");
define("INDEX_TOOLBAR_INFO","Galaxytoolin lisäosan tiedot");
define("INDEX_TOOLBAR_URL","Galaxytoolin URL");
define("INDEX_TOOLBAR_VERSION_REQUIRED","Vaatii vähintään Galaxytool lisäosan versio");
define("INDEX_TOOLBAR_INSTALL_GUIDE","Asennusohjeet lisäosalle");
define("INDEX_TOOLBAR_TOKEN","Kirjautumisavain");
define("INDEX_TOOLBAR_NEW_TOKEN","Hanki uusi avain");
define("INDEX_PLAYERS_WITH_N_PLANETS","Pelaajat, joilla on enemmän kuin &1 planeettaa");
define("INDEX_GETTING_STARTED","Opas Galaxytoolin käyttöön");
define("INDEX_GETTING_STARTED1","Tervetuloa Galaxytooliin!");
define("INDEX_GETTING_STARTED2","Galaxytool auttaa sinua analysoimaan tapahtumia universumissa &1");
define("INDEX_GETTING_STARTED3","Sinun täytyy syöttää dataa ennen kun voit analysoida sitä. Tätä varten tarvitset lisäosan selaimeesi kuten &1 Firerefoxille.");
define("INDEX_GETTING_STARTED4","Lisäosan asennuksen jälkeen, selatessasi OGamen sivuja, huomaat aina pienen status-ikkunan, kun tietoa siirtyy Galaxytooliin.");
define("INDEX_GETTING_STARTED5","Kun lisäosa on lähettänyt tietoa Galaxytooliin, pystyt analysoimaan missä pelaajilla on siirtokuntia, kuinka monta siirtokuntaa heillä on, mitä raportteja heistä löytyy tai mihin aikaan he ovat aktiivisimmillaan.");
define("INDEX_GETTING_STARTED6","Sinua auttaa myös, kun seuraat omaa kehitystäsi ja vertaat itseäsi vastustajiisi, tai kun analysoit kuinka taisteluraporteista kuinka paljon olet ryöstellyt saaliita viimeisimpien päivien tai viikkojen aikana.");
define("INDEX_GETTING_WIKIPAGE","Galaxytoolissa on myös monia muita ominaisuuksia.");
define("INDEX_GETTING_WIKIPAGE2","Ota niistä selvää wiki-sivultamme.");
define("INDEX_GETTING_BOARD","Palautteet ja ehdotukset keskustelupastalle:");
define("INDEX_GETTING_CHAT1","Tai vieraile luonamme chat-huoneessamme:");
define("INDEX_GETTING_CHAT2","Emme ole paikalla 24/7, mutta käytämme kuitenkin paljon vapaa-aikaamme siellä, joten olkaa kärsivällisiä.");
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
define("GENERAL_APPLY","Käytä");
define("STARTPAGE_GALAXYTOOL_DESCR","<em>Galaxytool</em> is a tool for the browser game OGame.");
define("GENERAL_OVERWRITE","Overwrite duplicate entry");
define("GENERAL_OVERWRITE_QUESTION","Overwrite?");
define("INDEX_OWN_LOGINS","Your logins");
define("GENERAL_OPEN_IN_NEW_WINDOW","Koppeling openen in nieuw venster");
// 5.1
define("GENERAL_UNIT_OF_MEASURE_DAYS","Days");

/*********************************************************************/
/***************************** internal ******************************/
/*********************************************************************/
// index.php
define("PROGRAM_NAME","OGame Galaxytool");
define("SHORTNAME","Galaxytool");
define("BACK_INDEX","Takaisin pääsivulle");
define("UNIVERSE","Universumi");

// search
define("MENU_INFO_LINKS","Informaatio");
define("MENU_PAGE","Yleiskuva");
define("MENU_DB_SEARCH","Etsi tietokannasta");
define("MENU_DB_NOTICES","Etsi merkinnöistä");
define("MENU_DB_REPORTS","Etsi raporteista");
define("MENU_GALAXYVIEW","Näytä galaksi");
define("MENU_STATISTICS","Tilastot");
define("MENU_ALLYHISTORY","Historia");
// 4.7
define("MENU_FLEET_MOVEMENTS","Laivueliikenteet");
define("MENU_COMBAT_REPORTS","Taisteluraportit");
define("MENU_MESSAGES","Pelin sisäiset viestit");

// insert / change
define("MENU_OPTION_LINKS","Työkalut");
define("MENU_DB_REFRESH","Lisää tietokantaan");
define("MENU_NOTICES","Huomiot");
define("MENU_DB_STATUS","Tietokannan tila");
define("MENU_USEROPTIONS","Käyttäjien hallinta");
define("MENU_USEROPTIONS2","Käyttäjän asetukset");
define("MENU_USEROPTIONS3","Käyttäjätiedot");
// 4.2
define("MENU_ADMIN","Pääkäyttäjä");
// 4.3.3
define("MENU_LOGOUT","Kirjaudu ulos");

// Stuff
define("MENU_STUFF","Linkit");
define("MENU_FORUM_THREAD","Developer forum");
define("MENU_DOWNLOADPAGE","Download page");
define("MENU_LANGUAGE","Kieli");
define("MENU_HELP","Help!");
// 4.0
define("MENU_TOOLOPTIONS","Galaxytool asetukset");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1"," lisättiin tietokantaan");
define("PARSER_ERROR1","Virhe yritettäessä lisätä seuraavia koordinaatteja:");
define("PARSER_ERROR2","Tietokantaa ei löydetty!");
define("PARSER_ERROR3","Tietokantaserveriä ei löydy!");
define("PARSER_WRONG_UNIVERSE","Väärä universumi - nykyinen: \"&1\" odotettu: \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","OGame Galaxytool - Etsintäsivu");
define("SHOW_SEARCH","Etsi tietokannasta");
define("SHOW_ALLYSYMBOL","Liittouma");
define("SHOW_PLAYERNAME","Pelaajan nimi");
define("SHOW_MOONS","Ainoastaan planeetat missä kuu");
define("SHOW_NOTICES","Ainoastaan planeetat missä huomioita");
define("SHOW_COLONIES","Kolonisaation paikkoja");
define("SHOW_YES","Kyllä");
define("SHOW_NO","Ei");
define("SHOW_SEARCHRANGE","Väliltä");
define("SHOW_SEARCH_IN","Etsi galaksista");
define("SHOW_FROM_SYSTEM","Aurinkokunta");
define("SHOW_FROM_PLANET","Planeetta paikasta");
define("SHOW_TO","-");
define("SHOW_DESCRIPTION","Muuttujat ovat sallittuja. Täytä vain ne kentät, jotka näet tarpeelliseksi.");
define("SHOW_SORT_BY","Järjestä");
define("SHOW_GALASYSTEM","Aurinkokunta");
define("SHOW_ALLYNAME","Liittouman nimi");
define("SHOW_SEARCHBUTTON","Etsi");
define("SHOW_ADDRESS","Koordinaatit");
define("SHOW_ALLYSORT","Liittouma");
define("SHOW_PLANET","Planeetta");
define("SHOW_STATUS","Status");
define("SHOW_CURRENTNESS","Päivitetty");
define("SHOW_PLAYER_STATUS","Pelaajan status");
define("SHOW_PLAYER_STATUS1","kaikki");
define("SHOW_PLAYER_STATUS2","mahdolliset kohteet");
define("SHOW_PLAYER_STATUS3","inaktiivinen");
define("SHOW_HITS","Löydetyt");
define("SHOW_OF",",");
define("SHOW_ASC","nouseva");
define("SHOW_DESC","laskeva");
define("SHOW_RESULTS","Tuloksia sivulla");
define("SHOW_MOON","Kuu");
define("SHOW_UKMOONSIZE","tuntematon");
define("SHOW_DF","RK");
define("SHOW_DF_LONG","Rauniokenttä");
define("SHOW_METAL","M");
define("SHOW_METAL_LONG","Metalli");
define("SHOW_CRYSTAL","K");
define("SHOW_CRYSTAL_LONG","Kristalli");
define("SHOW_BOTH","Molemmat yhdessä");
define("SHOW_AT_LEAST","(vähintään)");
define("SHOW_DATE","Päiväys");
define("SHOW_DATE_0","ei haussa");
define("SHOW_DATE_1","vanhempi kuin");
define("SHOW_DATE_2","uudempi kuin");
define("SHOW_RANK","Arvoasteikko");
define("SHOW_FRANK","Laivueen arvo");
define("SHOW_MEMBERS","Jäsenet");
define("SHOW_NOTRANKED","Ei tietoa saatavilla");
define("SHOW_NOTICERES","Huomiot");
define("SHOW_REPORTS","Ainoastaan planeetat joissa raportteja");
define("SHOW_REPORTS_SHORT","Raportit");
define("SHOW_NOTHING","Ei löytynyt mitään");
define("SHOW_ALLIANCE_STATUS","Liittouman status");
define("SHOW_NO_STATUS","ei statusta");
define("SHOW_NAP","Ei saa hyökätä");
define("SHOW_ALLIED","Liitossa");
define("SHOW_WAR","SOTA");
define("SHOW_BOYCOTT","Boikotissa");
define("SHOW_NEUTRAL","Neutraali");
define("SHOW_OWN","Oma liittouma");
define("SHOW_WING","Siipi");
// obsolete with 5.0
define("SHOW_EXT_OPTIONS1","Lisää hakuvaihtoehtoja: kantama, arvo, päiväys ja rauniokenttä.");
define("SHOW_EXT_OPTIONS2","Lisää hakuvaihtoehtoja: siirtokunnat, kuut, raportit, huomiot, pelaaja- ja diplomatiastatukset.");
define("SHOW_EXT_OPTIONS3","Lisää vaihtoehtoja hakutulosten järjestämiseen.");
// new 5.0
define("SHOW_EXTENDED","advanced search");
define("SHOW_MOON_SELECTION","Planet with moon");
define("SHOW_REPORT_SELECTION","Planet with report");
define("SHOW_FILTER_BY","Exclude from the list");
define("SHOW_FILTER_NONE","ei yhtään");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Show players without score changes within the last few days");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","OGame Galaxytool - Status-sivu");
define("STATUS_DB_STATUS","Tietokannan tila ");
define("STATUS_COLOR","Väri ");
define("STATUS_AGE1","Lisäys 1 vrk vanha.");
define("STATUS_AGE2","Lisäys 2 - 4 vrk vanha.");
define("STATUS_AGE3","Lisäys 4 - 7 vrk vanha.");
define("STATUS_AGE4","Lisäys 1 - 2 viikkoa vanha.");
define("STATUS_AGE5","Lisäys 2 - 4 viikkoa vanha.");
define("STATUS_AGE6","Lisäys vanhempi kuin 1 kuukauden!");
define("STATUS_AGE7","Ei saatavilla olevaa tietoa.");
define("STATUS_ON","päivitti");
define("STYLES_COLOR1","Color1");
define("STYLES_COLOR2","Color2");
define("STYLES_COLOR3","Color3");
define("STYLES_COLOR4","Color4");
define("STYLES_COLOR5","Color5");
define("STYLES_COLOR6","Color6");
define("STYLES_COLOR7","Color7");
// 4.8
define("STATUS_DB_LEGEND","Värien merkitys");
define("STATUS_GALAXY","Galaksin yleiskatsaus");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","Käyttäjien hallinta");
define("USER_NAMES","Käyttäjä");
define("USER_ERROR","Virhe");
define("USER_NEWUSER","Uusi käyttäjä");
define("USER_OPTIONS","Asetukset");
define("USER_USERNAME","Käyttäjänimi");
define("USER_PASSWORD","Salasana");
define("USER_PASSWORD_CONFIRM","Salasanan varmistus");
define("USER_GALAXY","Galaksi");
define("USER_SEARCH","Etsi");
define("USER_INSERT","Lisää");
define("USER_DELETE","Poista");
define("USER_DELETE_ENTRY","Haluatko poistaa käyttäjän?: ");
define("USER_STATUS","Näytä tiedot");
define("USER_STYLES","Muunna ulkoasua");
define("USER_SUBMIT","Tallenna");
define("USER_RESET","Peruuta");
define("USER_YES","Kyllä");
define("USER_NO","Ei");
define("USER_STYLEPATH","Ulkoasu \"styles.css\"");
define("USER_PROBES","Näytä/Lisää vakoiluraportteja");
define("USER_EMAIL","Sähköposti");
define("USER_ERROR1","Salasana tai sähköpostiosoite väärin.");
define("USER_ERROR2","Väärä sähköpostiosoite.");
define("USER_INGAME","Nimi pelissä");
define("USER_ALLYTAG","Liittouma");
define("USER_ALLYHISTORY","Historianäkymä");
define("USER_DIPLOMATIC","Vaihda diplomaatti-statusta");
define("USER_STATSPAGE","Lisäysten määrä tilastosivulla");
define("USER_LINKS","Linkit");
define("USER_LINKS2","Muoto:<br>teksti;url<br>teksti2;url2<br>teksti3;url3");
define("USER_EXPORT_TITLE","Värit (BB Codes)");
define("USER_BB_COORDINATES","Koordinaatit");
define("USER_BB_MOON","Kuu");
define("USER_BB_DEBRIS","Romukenttä");
define("USER_BB_ALLY","Liitouman nimi");
define("USER_BB_ALLYDETAILS","Liittouman lisätiedot");
define("USER_BB_PLAYERNAME","Pelaaja");
define("USER_BB_BANNED","Estetty");
define("USER_BB_VACATION","Lomamuoto");
define("USER_BB_NOOB","(Heikompi pelaaja)");
define("USER_BB_INACTIVE","7 päivää inaktiivinen");
define("USER_BB_LONGINACTIVE","28 päivää inaktiivinen");
// new with 4.7
define("USER_DELETION","Poista");
define("USER_FLEETINFO",MENU_FLEET_MOVEMENTS);
define("USER_ACTIVITIES","Pelaajan aktiivisuus");
define("USER_MAINTENANCE","Galaxytoolin huolto");
define("USER_MANAGEMENT",MENU_USEROPTIONS);
define("USER_DELETE_MY_COMBAT_REPORTS","Poista omat taisteluraportit");
define("USER_DELETE_MY_MESSAGES","Poista omat viestit");
define("USER_DELETE_MY_FLEETMOVES","Poista omat laivueliikenteet");
// 4.8
define("USER_DELETE_MY_COMBAT_REPORTS_LIMITED","Poista taisteluraportit, jotka ovat vanhempia kuin &1 päivää");
define("USER_DELETE_MY_MESSAGES_LIMITED","Poista viestit, jotka ovat vanhempia kuin &1 päivää");
define("USER_TABLE_ENTRIES","Hakutulosten määrä per sivu");
// 5.0
define("USER_EXISTS","User already exists");
define("USER_BB_OUTLAW","Outlaw");
define("USER_INVALID_URL","URL &1 seems to be invalid - URL will be ignored");

/*********************************************************************
* galaxyview.php
*********************************************************************/
define("VIEW_TITLE","OGame Galaxytool - Galaksi");
define("VIEW_NODATA","Ei tietoa saatavilla!");
define("VIEW_GALAXY","Galaksi");
define("VIEW_SYSTEM","Aurinkokunta");
define("VIEW_POSITION","Paikka");
define("VIEW_PLANET","Planeetta");
define("VIEW_MOON","Kuu");
define("VIEW_TF","RK");
define("VIEW_PLAYER","Pelaaja");
define("VIEW_PLAYER_ADD","(Status)");
define("VIEW_ALLY","Liittouma");
define("VIEW_ALLY_ADD","(Arvoasteikko / Jäseniä)");
define("VIEW_METAL","M");
define("VIEW_CRYSTAL","K");
define("VIEW_COLONISED","planeettaa vallattu");
define("VIEW_UKMOONSIZE","ei tiedossa");
define("VIEW_BACK","Takaisin");
define("VIEW_NOTICE","Merkinnät");
define("VIEW_REPORTS","Raportit");
define("VIEW_MOONPHALANX","Kuut, jotka voivat skannata tämän aurinkokunnan");
define("VIEW_NOMOONS","Kuita ei löydetty");
define("VIEW_IRAKS","Planeetat, joista voidaan ampua ohjuksia tähän aurinkokuntaan");
define("VIEW_NOIRAKS","Ohjuksia ei löydetty");
// 4.0
define("VIEW_MOON_DESTROY_CHANCE","Mahdollisuus tuhota kuu");
define("VIEW_CHANCE_WITH_ONE","Mahdollisuus yhdellä RIP:llä");
define("VIEW_CHANCE_WITH_N","Mahdollisuus ");
define("VIEW_DEATH_STARS",":lla RIP:llä");
define("VIEW_DS_DESTROY_CHANCE","Mahdollisuus menettää RIP ");
define("VIEW_TOP","Ylös");
// new 4.3.5
define("VIEW_GO","Siirry");
// new 5.0
define("VIEW_DIAMETER","Diameter");

/*********************************************************************
* change_password.php
**********************************************************************/
define("PW_TITLE","OGame Galaxytool - vaihda salasana");
define("OLD_PASSWORD","Vanha salasana");
define("NEW_PASSWORD","Uusi salasana");
define("CONFIRM_NEW_PASSWORD","Vahvista uusi salasana");
define("PW_MISMATCH","Salasanat eivät olleet samoja");
define("PW_ERROR","Vanha salasana oli väärin!");
define("UPDATE_DONE","Vaihto onnistui");
// new 4.2
define("TIMEZONE_OFFSET","Aikaero palvelimeen");
// new 4.3
define("DELETE_ACCOUNT","Poista tämä käyttäjä");
define("DELETE_ACCOUNT_SAFETY_REQUEST","Haluatko varmasti poistaa Galaxytool käyttäjän?");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","Oikeudet");
define("CH_PASSWD_ADMIN","Pääkäyttäjä");
// new 4.7
define("TIMEZONE_OGAME_OFFSET","Aikahyöhykkeen poikkeama OGame palvelimeen");
// new 4.8
define("CH_PASSWD_USER_LANGUAGE","Vaihda tähän kieleen kirjautumisen jälkeen");
define("CH_PASSWD_USER_LANGUAGE_NO_CHANGE","Ei vaihtoa");
define("CH_PASSWD_EXPAND","Laajennettu");
define("CH_PASSWD_COLLAPSE","Supistettu");
define("CH_PASSWD_HIDDEN","Piilotettu");
define("CH_PASSWD_GETTING_STARTED","Näytä Galaxytoolin opas kirjautumisen jälkeen");
define("CH_PASSWD_PLUGIN","Näytä lisäosan tiedot kirjautumisen jälkeen");

/*********************************************************************
* notices.php
**********************************************************************/
define("NOTICE_TITLE","OGame Galaxytool - Merkinnät");
define("NOTICE_HEADER","editoi merkintöjä");
define("NOTICE_HEADER2","Editoi omaa merkintää");
define("NOTICE_PUBLIC","Muiden käyttäjien muokattavissa?");
define("NOTICE_YES","Kyllä");
define("NOTICE_NO","Ei");
define("NOTICE_TEXT","Teksti");
define("NOTICE_SAVE","Tallenna");
define("NOTICE_DELETED","Teksti poistettu");
define("NOTICE_SAVED","Teksti tallennettu.");
define("NOTICE_RESULTS","Kaikki tulokset");
define("NOTICE_USER","Käyttäjä");
define("NOTICE_DATE","Päivämäärä");
define("NOTICE_EDIT","Editoi");
define("NOTICE_DELETE","Poista");
define("NOTICE_NEW","Lisää oma merkintä");
define("NOTICE_NOTPUBLIC","Merkintä ei muiden saatavilla.");
define("NOTICE_ALL","kaikki");
define("NOTICE_NONE",SHOW_FILTER_NONE);
define("NOTICE_SEARCH","Etsi merkinnöistä");
define("NOTICE_SEARCH_SHORT","Etsi");
define("NOTICE_HITS","Löydettyjä");
define("NOTICE_SHOWRESULTS","Listaa sivulle");
define("NOTICE_OF",",");
define("NOTICE_NOTHING","Ei merkintöjä");
// 4.0
define("NOTICE_CHARS","Merkit");
define("NOTICE_PLAYERNAME","Pelaaja");
define("NOTICE_SHOWALL","näytä kaikki merkinnät");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","OGame Galaxytool - Vakoiluraportit");
define("REPORTS_RESOURCES","Resurssit");
define("REPORTS_FLEET","Laivueet");
define("REPORTS_DEFENCE","Puolustus");
define("REPORTS_BUILDINGS","Rakennukset");
define("REPORTS_TECHNOLOGY","Tutkimus");
define("REPORTS_MOON","Kuu");
define("REPORTS_SEARCH","Etsi vakoiluraporteista");
define("REPORTS_SEARCH_SHORT","Etsi");
define("REPORTS_HITS","Löydetyt");
define("REPORTS_NOTHING","Ei löytynyt mitään");
define("REPORTS_ADDRESS","Osoite");
define("REPORTS_CURRENTNESS","Päivitetty");
define("REPORTS_PLAYERNAME","Pelaaja");
define("REPORTS_ALLY","Liitto");
define("REPORTS_VIEW","Näytä raportti");
define("REPORTS_SEARCH_IN","Etsi galaksista");
define("REPORTS_FROM_SYSTEM","Aurinkokunta");
define("REPORTS_TO","-");
define("REPORTS_DELETE","Poista");
define("REPORTS_DELETED","Poistettu");
define("REPORTS_RESULTS","Tuloksia sivulla");
define("REPORTS_OF",",");
define("REPORTS_DATE","Päivämäärä");
define("REPORTS_DATE_0","älä huomioi");
define("REPORTS_DATE_1","Vanhempi kuin");
define("REPORTS_DATE_2","Uudempi kuin");
define("REPORTS_NOTICES","Merkinnät");
define("REPORTS_AT_LEAST_RESOURCES","Resursseja (vähintään)");
define("REPORTS_SEARCH_EXTENDED","Laajennettu haku");
define("REPORTS_FLEET_RESIS","Laivueen arvo");
define("REPORTS_DEFENCE_RESIS","Puolustuksen arvo");
define("REPORTS_ALL_RESIS","Arvo yhteens&auml;");
define("REPORTS_TECHS","Tutkimus");
define("REPORTS_UNKNOWN_ENTRIES","Tuntematon tietue");
define("REPORTS_PARTLY_INSERTED","Osittain lisätty");
define("REPORTS_FOR_ALL_RES","Kaikkien resurssien ryöstö");
define("REPORTS_FOR_TF","Romukenttä");
define("REPORTS_KT","Pienet Rahtialukset");
define("REPORTS_GT","Suuret Rahtialukset");
define("REPORTS_SS","Taistelualukset");
define("REPORTS_REC","Kierrättäjä");
define("REPORTS_RAIDABLE","Ainoastaan raidattavat kohteet");
define("REPORTS_ALL_RESOURCES","Kaikki resurssit");
// 4.0
define("REPORTS_STUFF","Muut");
define("REPORTS_SPEEDSIM","Simuloi SpeedSimillä");
define("REPORTS_DRAGOSIM","Simuloi Dragosim");
define("REPORTS_STATUS","Status");
define("REPORTS_ERROR","Virhe");
// 4.2
define("REPORTS_OWN_REPORTS","Ainoastaan omat raportit");
// 4.3.3
define("REPORTS_UPLOAD_BY","Raportin lähetti");
// 4.4
define("REPORTS_DEPTH","Raportin laajuus");
define("REPORTS_FLEET_SCORE","Laivueiden määrä");
define("REPORTS_DEFENCE_SCORE","Puolustuksen määrä");
// 5.0
define("REPORTS_HOURS","hours");
define("REPORTS_MAX_RESULTS_HIT","Your query returned more than &1 hits. Only the first &1 results are show. Please adjust your search request to get less results.");
define("REPORTS_OSIMULATE","Simulate with OSimulate");
define("REPORTS_SHOW_ONLY","Show only");
define("REPORTS_SHOW_PLANETS","Planeetat");
define("REPORTS_SHOW_MOONS","Kuut");
define("REPORTS_OWNER","Reports owned by");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","OGame Galaxytool - Tilastot");
define("STATS_TBLHEAD","Tilastot");
define("STATS_RANK","Arvoasteikko");
define("STATS_PLAYERNAME","Pelaaja");
define("STATS_ALLYNAME","Liittouma");
define("STATS_SCORE","Pisteet");
define("STATS_FLEET","Laivue");
define("STATS_RESEARCH","Tutkimus");
define("STATS_MEMBERS","Jäsenet");
define("STATS_STATUS","Status");
define("STATS_NOTHING","Ei statusta");
define("STATS_NAP","Ei saa hyökätä");
define("STATS_ALLIED","Liitossa");
define("STATS_WAR","Sodassa");
define("STATS_BOYCOTT","Boikotissa");
define("STATS_NEUTRAL","Neutraali");
define("STATS_OWN","Oma liitto");
define("STATS_WING","Siipi");
define("STATS_UPDATE","Lisätty");
define("STATS_PLAYERSTATS","Pelaajatilastot");
define("STATS_ALLYSTATS","Liittoumatilastot");
// 4.0
define("STATS_DELETE","Haluatko poistaa tämän lisäyksen?");
define("STATS_CONFIRM_DELETE","Haluatko VARMASTI poistaa tämän lisäyksen?");
define("STATS_CHANGE_PLAYER_STATUS","Pelaajan status");
define("STATS_CHANGE_ALLIANCE_STATUS","Liittouman status");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","Kaikki tämän liiton jäsenet saavat tämän statuksen. Kaikki edelliset statukset korvataan.");
define("STATS_UNKNOWN","Loput");
define("STATS_DETAILS","Lisätiedot");
// 4.4
define("STATS_PLAYERSTATUS",SHOW_PLAYER_STATUS);
define("STATS_IGNORE_STATUS",SHOW_PLAYER_STATUS1);
define("STATS_ACTIVE","aktiivinen");
define("STATS_INACTIVE",USER_BB_INACTIVE);
define("STATS_BANNED",USER_BB_BANNED);
define("STATS_VACATION",USER_BB_VACATION);
define("STATS_NOOB",USER_BB_NOOB);
// 4.8
define("STATS_YES",SHOW_YES); // reuse SHOW definitions if applicable
define("STATS_NO",SHOW_NO);
define("STATS_SEARCH",USER_SEARCH);
define("STATS_SHOW_GRAPH","Näytä tiedot pisteiden jakautumiseen");
define("STATS_LONG_INACTIVE",USER_BB_LONGINACTIVE);
// 4.9
define("STATS_STANDARD","Pisteet");
define("STATS_MILITARY","Sotilaspisteet");
define("STATS_ECONOMY","Taloudellisuus");
define("STATS_HONOUR","Kunniapisteet");
define("STATS_MILITARY_BUILD","Sotilaspisteiden rakentuminen");
define("STATS_MILITARY_DESTROYED","Sotilaspisteiden tuhoaminen");
define("STATS_MILITARY_LOST","Sotilaspisteiden häviäminen");

/*********************************************************************
* register.php
**********************************************************************/
define("REGISTER_REGISTRATE","Rekisteröidy");
define("REGISTER_LOGINNAME","Käyttäjänimi");
define("REGISTER_PASSWORD","Salasana");
define("REGISTER_PASSWORD_CONFIRM","Varmista salasana");
define("REGISTER_EMAIL","Email");
define("REGISTER_INGAME","Pelinimi");
define("REGISTER_ALLYTAG","Liittouma");
define("REGISTER_EMAILVERIFICATION","Galaxytool - rekisteröinti");
define("REGISTER_EMAILTEXT","Varmista rekisteröinti käymällä seuraavassa osoitteessa:");
define("REGISTER_ERROR1","käyttäjänimi jo varattu");
define("REGISTER_ERROR2","Virhe sähköpostin lähetyksessä. Ota yhteys adminiin.");
define("REGISTER_ERROR3","Virhe tietojen tallennuksessa tietokantaan!");
define("REGISTER_INFO1","Tilisi on luotu.");
define("REGISTER_INFO2","Aktivoi tilisi sähköpostistasi löytyvällä linkillä.");
define("REGISTER_INFO3","Rekisteröinti on varmistettu. Adminin täytyy vielä hyväksyä se ennen kun saat sen käyttöösi.");
define("REGISTER_BUTTON","Takaisin aloitussivulle");
define("REGISTER_NEW_SUBJECT","Uusi käyttäjä on rekisteröitynyt");
define("REGISTER_NEW_MAILTEXT","Uusi käyttäjä on rekisteröitynyt.");
// new 4.2
define("REGISTER_BACK","Takaisin edelliselle sivulle");
// new 4.3.5
define("REGISTER_MISSING_FIELDS","Täytä kaikki kentät");
// new 4.8
define("REGISTER_ERROR4","Sähköpostia ei ole tarkistettu.");
define("REGISTER_ERROR5","Salasanat eivät ole samat.");
define("REGISTER_PWS","Salasanan vahvuus");
define("REGISTER_PWS0","erittäin heikko");
define("REGISTER_PWS1","heikko");
define("REGISTER_PWS2","hyvä");
define("REGISTER_PWS3","vahva");
define("REGISTER_PWS4","erittäin vahva");
// new 5.0
define("REGISTER_EMAIL_USED","Email Address is already used");

/*********************************************************************
* lost_password.php
**********************************************************************/
define("LOSTPW_TITLE","Kadotin salasanani");
define("LOSTPW_INFO2","Uusi salasana luotu ja lähetetty sähköpostiisi.");
define("LOSTPW_BUTTON1","Uusi salasana");
define("LOSTPW_BUTTON2","Takaisin pääsivulle");
define("LOSTPW_LOGINNAME","Login-Name");
define("LOSTPW_EMAIL","Email");
define("LOSTPW_ERROR1","Virhe tiedon tallentamisessa tietokantaan!");
define("LOSTPW_ERROR2","Haettuja käyttäjätietoja ei löydy!");
define("LOSTPW_ERROR3","Virhe sähköpostin lähettämisessä. Ota yhteys adminiin.");
define("LOSTPW_EMAIL_SUBJECT","Tilaamasi salasana");
define("LOSTPW_EMAIL_TEXT1","Tässä on uusi salasanasi Galaxytooliin");
define("LOSTPW_EMAIL_TEXT2","Käyttäjänimi");
define("LOSTPW_EMAIL_TEXT3","Salasana");
// new 5.0
define("LOSTPW_INFO1","You will receive an email to verify your password reset request.");
define("LOSTPW_CONFIRM_RESET_SUBJECT","Lost password?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","Hello,\n\nyou requested a password reset for the Galaxytool. To generate a new password, click the following link:");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","OGame Galaxytool - Käyttäjätiedot");
define("USERINFO_NAMES","Kaikki käyttäjät tässä työkalussa");
define("USERINFO_DETAIL","tarkempi informaatio");
define("USERINFO_ERROR1","Ei tunnettua käyttäjää tällä tunnuksella!");
define("USERINFO_USERNAME","Käyttäjänimi");
define("USERINFO_INGAME","Nimi pelissä");
define("USERINFO_EMAIL","Email");
define("USERINFO_ALLYTAG","Liittouma");
define("USERINFO_STYLEPATH","Ulkoasu");
define("USERINFO_STATUS","Status");
define("USERINFO_ACTIVATE","Aktivoi pelaaja");
define("USERINFO_LOGINS","Kirjautumisten määrä");
define("USERINFO_LASTLOGIN","Viimeisin kirjautuminen");
define("USERINFO_DATA","Informaatio lisätyistä aurinkokunnista");
define("USERINFO_NODATA","Tämä käyttäjä ei ole vielä lisännyt aurinkokuntia");
define("USERINFO_GALAXY","Galaksi");
define("USERINFO_SYSTEMS","Aurinkokuntien määrä");
define("USERINFO_IP","IP-osoite");
define("USERINFO_LOGINTIME","Kirjautuneena");
define("USERINFO_NOLOGIN","Pelaaja ei ole koskaan kirjautunut!");
define("USERINFO_LAST_GALAXYUPDATE","Viimeksi lisätty galaksinäkymä");
define("USERINFO_LAST_PUBLIC_NOTICE","Viimeisin yleinen merkintä");
define("USERINFO_LAST_PRIVATE_NOTICE","Viimeisin yksityinen merkintä");
define("USERINFO_NUMBEROF_PUBLIC_NOTICE","Yleisten merkintöjen määrä");
define("USERINFO_NUMBEROF_PRIVATE_NOTICE","Yksityisten merkintöjen määrä");
define("USERINFO_ACTIVATED","Tili aktivoitu");
define("USERINFO_ACTIVATIONTEXT","Galaxytoolin admin on aktivoinut tunnuksesi.\n\nPidä hauskaa Galaxytoolilla!");
// new 4.8
define("USERINFO_LAST_SUBMIT","Viimeisin syöttö");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","OGame Galaxytool - Historia");
define("ALLYHISTORY_TBLHEAD","Historia");
define("ALLYHISTORY_PLAYERNAME","Pelaaja");
define("ALLYHISTORY_ALLYNAME","Liittouma");
define("ALLYHISTORY_LASTMONTH","Viime kuussa"); // changed at 4.0
define("ALLYHISTORY_ALL_DATA","Kaikki saatava tieto"); // new 4.0
define("ALLYHISTORY_SHOW","Luo historia");
define("ALLYHISTORY_TIMESPAN","Aikaväli");
define("ALLYHISTORY_PROGESS","Kehitys");
define("ALLYHISTORY_SCORE","Pisteet");
define("ALLYHISTORY_FSCORE","Laivuepisteet"); // new 4.0
define("ALLYHISTORY_RSCORE","Tutkimuspisteet"); // new 4.0
define("ALLYHISTORY_MEMBER","Jäsenet"); // new 4.0
define("ALLYHISTORY_NOTHING","Tietoja ei löytynyt");
define("ALLYHISTORY_DETAILS","Lisätiedot");
define("ALLYHISTORY_SHOW_ADDRESS","Koordinaatit");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","Pelaajatiedot");
define("DETAILEDINFO_ALLYINFO_TITLE","Liittoumatiedot");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","Lisätiedot pelaajasta");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","Lisätiedot liittoumasta");
define("DETAILEDINFO_NO_ALLIANCE","ei liittoumaa");
define("DETAILEDINFO_SCORE","Pistetilastot");
define("DETAILEDINFO_FLEET","Laivuetilastot");
define("DETAILEDINFO_RESEARCH","Tutkimustilastot");
define("DETAILEDINFO_RANK","Arvoasteikko");
define("DETAILEDINFO_POINTS","Pisteet");
define("DETAILEDINFO_KNOWN_PLANETS","Tiedossa olevat planeetat");
define("DETAILEDINFO_MOONS","Tiedossa olevat kuut");
define("DETAILEDINFO_PHALANX_AREA","Sensorialue");
define("DETAILEDINFO_NO_PHALANX_AREA","Sensoriryhmittymää ei löydetty");
define("DETAILEDINFO_NOTICES","Merkinnät");
define("DETAILEDINFO_NO_NOTICES","Ei löydettyjä merkintojä");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","Edellinen liittouma");
define("DETAILEDINFO_RESOURCES_PER_HOUR","Resursseja tunnissa");
define("DETAILEDINFO_RESOURCES_PER_DAY","Resursseja vuorokaudessa");
define("DETAILEDINFO_RESOURCES_PER_WEEK","Resursseja viikossa");
define("DETAILEDINFO_RESOURCES_PER_MONTH","Resursseja kuukaudessa");
define("DETAILEDINFO_METAL","Metalli");
define("DETAILEDINFO_CRYSTAL","Kristalli");
define("DETAILEDINFO_DEUTERIUM","Deuterium");
define("DETAILEDINFO_UNKNOWN","Tuntematon");
define("DETAILEDINFO_SCORE_DISTRIBUTION","Pisteiden julkaisu");
// new 4.2
define("DETAILEDINFO_GENERAL","Lisätiedot");
define("DETAILEDINFO_MEMBERS","Jäsenet");
define("DETAILEDINFO_GRAPHS","Kuvaajat");
define("DETAILEDINFO_RESOURCES","Resurssit");
define("DETAILEDINFO_FLEET_TAB","Alukset");
define("DETAILEDINFO_TECH","Tutkimus");
define("DETAILEDINFO_FLEET_DETAIL","Yhteens&auml; / (pelaajan keskiarvo) kaikista saatavista raporteista");
define("DETAILEDINFO_TECH_DETAIL","Keskiarvo kaikista saatavilla olevasta pelaajatiedoista");
 // new 4.3
define("DETAILEDINFO_PLANET_TAB",REPORTS_SHOW_PLANETS);
define("DETAILEDINFO_MOON_TAB",REPORTS_SHOW_MOONS);
// 4.7
define("DETAILEDINFO_ACTIVITIES","Aktiivisuus");
define("DETAILEDINFO_NODATA",VIEW_NODATA); // reuse existing translations
define("DETAILEDINFO_ACTIVITY_DESCRIPTION","Näytä aktiivisuus &1 ajalta:");
define("DETAILEDINFO_GALAXYVIEWS","Galaksinäkymät");
define("DETAILEDINFO_SCANS","Vakoilutoiminnat");
define("DETAILEDINFO_MESSAGES","Viestit");
define("DETAILEDINFO_COMBATS","Taisteluraportit");
define("DETAILEDINFO_ALLYPAGE","Liittouman yleisnäkymä");
define("DETAILEDINFO_MANUAL","Manuaalinen syöttö");
define("DETAILEDINFO_START","Aloitus");
define("DETAILEDINFO_TO","");
define("DETAILEDINFO_TODAY","Lopetus");
define("DETAILEDINFO_DATA_RESTRICTION","Rajoitettu:");
define("DETAILEDINFO_WEEKDAY_WEEKEND","Viikonloppu");
define("DETAILEDINFO_WEEKDAY_WORKINGDAY","Arkipäivä");
define("DETAILEDINFO_WEEKDAY_MONDAY","Maanantai");
define("DETAILEDINFO_WEEKDAY_TUESDAY","Tiistai");
define("DETAILEDINFO_WEEKDAY_WEDNESDAY","Keskiviikko");
define("DETAILEDINFO_WEEKDAY_THURSDAY","Torstai");
define("DETAILEDINFO_WEEKDAY_FRIDAY","Perjantai");
define("DETAILEDINFO_WEEKDAY_SATURDAY","Lauantai");
define("DETAILEDINFO_WEEKDAY_SUNDAY","Sunnuntai");
define("DETAILEDINFO_WEEKDAY_SHORTLENGTH",2); // number of characters to shorten week day
define("DETAILEDINFO_PLAYER_CURRENTLY_ACTIVE","Pelaaja on tällä hetkellä aktiivinen");
define("DETAILEDINFO_PLAYER_MESSAGES","saatavilla olevat pelaajan viestit");
define("DETAILEDINFO_SHOW","näytä");
define("DETAILEDINFO_NONE","ei saatavilla");
define("DETAILEDINFO_ENTER_MANUALLY","Syötä aktiivisuus pelaajalle");
define("DETAILEDINFO_PLAYER_SEEN_ON","Pelaaja oli aktiivinen");
define("DETAILEDINFO_INSERT","Syötä");
define("DETAILEDINFO_OGAME_SERVERTIMES","Huomio: Kaikki päiväykset ja ajat viittaavat OGamen palvelimen aikoihin!");
define("DETAILEDINFO_DAY_VIEW","päivittäinen näkymä");
define("DETAILEDINFO_WEEK_VIEW","viikottainen näkymä");
// new 4.8
define("DETAILEDINFO_HOME_PLANET","Kotimaailma");
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
define("ADMIN_TITLE","Galaxytoolin hallinta");
define("ADMIN_DISCLAMER","Huom! Skriptien suoritus omalla vastuulla. Suurin osa poistaa tietoa tietokannasta.");
define("ADMIN_INCONSISTENCIES","Ristiriidat tietokannassa");
define("ADMIN_PLANETS","Poista planeetat sijainnissa 0 tai suuremmassa kuin 15");
define("ADMIN_GALAXIES","Poista yli &1 olevat galaksit");
define("ADMIN_PLAYERS","Poista pelaajat ilman OGamen playerid:tä - aiheuttaa päällekkäisyyksiä pelaajatiedoissa");
define("ADMIN_REPORTS","Poista raportit sijainneista, joissa ei ole enää planeettaa");
define("ADMIN_MISC","Sekalaiset");
define("ADMIN_RESET","Nollaa Galaxytool (vain käyttäjä- ja ip-taulut jäävät entiselleen)");
define("ADMIN_OLD_PLAYERS","Poista yli &1 päivää vanhat pelaajatiedot");
define("ADMIN_OLD_REPORTS","Poista yli &1 päivää vanhat raportit");
define("ADMIN_LOADING","Älä sulje tätä ikkunaa kun sivua ladataan.");
define("ADMIN_STATUS","Pyyntöjesi tila");
define("ADMIN_SELECTION","Valitse ainakin yksi kohta");
define("ADMIN_SAFETY","Haluatko varmasti suorittaa nämä skriptit?");
define("ADMIN_DONE","Valmis");
define("ADMIN_NOTBD","Ei mitään tehtävää");
 // new 4.3
define("ADMIN_OLD_GALAXIES","Poista yli &1 päivää vanhat galaksinäkymät");
define("ADMIN_UNUSED_PLAYERS","Poista pelaajat, jotka eivät esiinny missään galaksinäkymässä");
// new 4.7
define("ADMIN_OLD_ACTIVITIES","Poista pelaajien aktiivisuus, joka on vanhempaa kuin &1 päivää");
// new 4.8
define("ADMIN_OLD_COMBATS","Poista taisteluraportit, jotka ovat vanhempia kuin &1 päivää");
define("ADMIN_OLD_INGAME_MSG","Poista pelin sisäiset viestit, jotka ovat vanhempia kuin &1 päivää");
// new 5.0
define("ADMIN_OGAME_API","Load public data from OGame into the Galaxytool");
define("ADMIN_OGAME_ALL_DATA",ALLYHISTORY_ALL_DATA);
define("ADMIN_OGAME_GALAXY_DATA",MENU_GALAXYVIEW);
define("ADMIN_OGAME_STATISTICS_DATA",MENU_STATISTICS);

// new 4.3.5
/*********************************************************************
* errorpage.php
**********************************************************************/
define("ERRORPAGE_PAGEFORWARD","Jos selaimesi ei tue sivun uudelleenohjausta, klikkaa tästä.");
define("ERRORPAGE_PERMISSION_DENIED","Sinulla ei ole oikeutta tarkastella tätä sivua. Klikkaa tästä päästäksesi takaisin.");

// new 4.7
/*********************************************************************
* fleet_movements.php
**********************************************************************/
define("FLEETS_TITLE","Laivueliikenteet");
define("FLEETS_ACTUAL_FLEETS","Nykyiset laivueliikenteet");
define("FLEETS_YES",SHOW_YES);
define("FLEETS_NO",SHOW_NO);
define("FLEETS_DETAILS","Tiedot");
define("FLEETS_MISSION_EXPEDITION","Retkikunta");
define("FLEETS_MISSION_COLONIZATION","Kolonisaatio");
define("FLEETS_MISSION_RECYCLE","Kierrätys");
define("FLEETS_MISSION_TRANSPORT","Kuljetus");
define("FLEETS_MISSION_DEPLOYMENT","Siirto");
define("FLEETS_MISSION_ESPIONAGE","Vakoilu");
define("FLEETS_MISSION_ACS_DEFEND","LTS puolustus");
define("FLEETS_MISSION_ATTACK","Hyökkäys");
define("FLEETS_MISSION_ACS_ATTACK","LTS hyökkäys");
define("FLEETS_MISSION_MOON_DESTRUCTION","Kuun tuhoaminen");
define("FLEETS_MISSION_MISSILE_ATTACK","Ohjushyökkäys");
define("FLEETS_NO_DATA","Sopivaa tietoa ei löydy");
// new 5.0
define("FLEETS_FLEET","Fleet");
define("FLEETS_ALL_FLEETS","Show all fleet movements");

/*********************************************************************
* parser_combat_reports.inc.php
**********************************************************************/
define("COMBAT_REPORT_OUDATED_GALAXYVIEW","Galaksin tieto on vanhentunutta. Ole hyvä ja ensin vieraile hyökkäyksen lähtöpaikan ja hyökkäyskohteen koordinaateissa!");

/*********************************************************************
* messages.php
**********************************************************************/
define("MESSAGES_TITLE","OGame Galaxytool - OGame Viestit");
define("MESSAGES_PLAYERNAME","Pelaaja");
define("MESSAGES_SUBJECT","Aihe");
define("MESSAGES_DATE","Päiväys");
define("MESSAGES_FILTER","Suodatin");
define("MESSAGES_DELETE","Poista viesti");
define("MESSAGES_PUBLISH_DETAIL","Julkaise viesti lisäämällä sisältö ko. pelaajan merkintöihin.");
define("MESSAGES_PUBLISH_HEADER","&sender lähetä viesti &recipient &date:\n\n &message"); // &sender, &recipient, &date, &message replaced at runtime
define("MESSAGES_PLAYER_FILTER","Pelaajan viestit:");
// new 5.0
define("MESSAGES_CONTENT","Content");

/*********************************************************************
* combat_reports.php
**********************************************************************/
define("COMBATS_TITLE","OGame Galaxytool - Taisteluraportit");
define("COMBATS_ATTACKER","Hyökkääjä");
define("COMBATS_DEFENDER","Puolustaja");
define("COMBATS_DATE","Päiväys");
define("COMBATS_OWNER","Omistaja");
define("COMBATS_WINNER","Voittaja");
define("COMBATS_COMBATREPORT","Taisteluraportti");
define("COMBATS_COMBAT_AT","Taistelu koordinaateissa");
define("COMBATS_LOST_UNITS","Menetetyt yksiköt");
define("COMBATS_LOOT","Saalis");
define("COMBATS_DEBRIS","Romukenttä");
define("COMBATS_AND","ja");
define("COMBATS_PUBLISH","Julkaise raportti");
define("COMBATS_UNPUBLISH","Poista julkisista raporteista (muuttaa yksityiseksi)");
define("COMBATS_DELETE","Poista raportti");
define("COMBATS_CHECK_ALL","Valitse kaikki");
define("COMBATS_UNCHECK_ALL","Poista valinnat");
define("COMBATS_WITH_SELECTED","Valituilla");
define("COMBATS_PUBLIC_REPORTS","Julkiset raportit");
define("COMBATS_YES",SHOW_YES); // no need for translation!
define("COMBATS_NO",SHOW_NO); // no need for translation!
define("COMBATS_SEARCH_OPTIONS","Hakuasetukset");
define("COMBATS_SEARCH","Etsi");
define("COMBATS_RESET","Resetoi");
// 4.8
define("COMBATS_COORDINATES",USER_BB_COORDINATES);
define("COMBATS_INVALID_GALAXY_ENTERED","Virheellinen galaksi syötetty");
define("COMBATS_INVALID_SYSTEM_ENTERED","Virheellinen aurinkokunta syötetty");
define("COMBATS_INVALID_PLANET_ENTERED","Virheellinen planeetta syötetty");
define("COMBATS_GALAXY_FROM_TO","Galaksi");
define("COMBATS_SYSTEM_FROM_TO","Aurinkokunta");
define("COMBATS_PLANET_FROM_TO","Planeetta");
define("COMBATS_APPLY",GENERAL_APPLY);
define("COMBATS_COMBAT_SUMMARY","Lyhyt taisteluraportti");
define("COMBATS_DOWNLOAD_CSV","Lataa CSV-tiedostona");

/*********************************************************************
* report_archive.php
**********************************************************************/
define("REPORT_ARCHIVE_TITLE","Raporttiarkisto");
define("REPORT_ARCHIVE_COORDINATES","Koordinaatit");
define("REPORT_ARCHIVE_SCANTIME","Päiväys");
define("REPORT_ARCHIVE_DELETE","Poista merkinnät");
define("REPORT_ARCHIVE_CONFIRM_DELETE","Haluatko varmasti poistaa nämä merkinnät?");
define("REPORT_ARCHIVE_GALAXY","Galaksi");
define("REPORT_ARCHIVE_SYSTEM","Aurinkokunta");
define("REPORT_ARCHIVE_PLANET","Planeetta");
define("REPORT_ARCHIVE_MOON","Kuu");
define("REPORT_ARCHIVE_DETAILS","Tiedot");
define("REPORT_ARCHIVE_RESOURCES",DETAILEDINFO_RESOURCES);
define("REPORT_ARCHIVE_HEADER_RESOURCES",REPORTS_RESOURCES);
define("REPORT_ARCHIVE_DETAILS_FOR","Raporttiarkisto kohteesta &1 [&2] (&3)"); // &1 = planetname; &2 = coordinates; &3 = playername
define("REPORT_ARCHIVE_FLEET_CARGO","Laivueen lastiruuman kapasiteetti");
define("REPORT_ARCHIVE_IRAK_RANGE","Planeettojen välisten ohjusten kantama");
define("REPORT_ARCHIVE_CHART_TYPE","Taulukon tyyppi");

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