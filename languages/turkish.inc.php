<?php
/*
 * defines the characters used in OGame to indicate player status
 */
define("PLAYER_BANNED","c");
define("PLAYER_VACATION_MODE","t");
define("PLAYER_NOOB","z");
define("PLAYER_INACTIVE","i");
define("PLAYER_LONG_INACTIVE","I");
define("PLAYER_OUTLAW","k");

/*********************************************************************/
/***************************** public ********************************/
/*********************************************************************/
//index.php
define("L_USERNAME","Kullanıcı Adı");
define("L_PASSWORD","Şifre");
define("L_LOGINFAILURE","Kullanıcı Adı ya da Şifreniz yanlış veya hesabınız henüz etkinleştirilmemiş.");
define("L_TOKENFAILURE","Your logon key is wrong or your account is not activated yet.");
define("L_LOGINTEXT","Lütfen sisteme giriş yapın.");
define("L_LANGUAGE","Mevcut diller:");
define("L_TIMEOUT","Oturum süresi doldu!");
define("L_REGISTER","Kayıt");
define("L_PWLOST","Şifremi Unuttum");
define("INDEX_TITLE","Genel Durum");
define("INDEX_INFO","Bilgi");
define("INDEX_ENTRIES","Toplam Kayıtlı Sistem");
define("INDEX_ENTRIES_LASTWEEK","Geçen Hafta Güncellenen Sistemler");
define("INDEX_ENTRIES_TO_OLD","Güncel Olmayan Sistemler (1 aydan daha eski)");
define("INDEX_REGISTERED_USERS","Kayıtlı Kullanıcılar");
define("INDEX_PAGEFORWARD","Tarayıcınız yönlendirmeyi desteklemiyorsa lütfen burayı tıklayın.");
define("INDEX_NOTICES","Notlar");
define("INDEX_PLAYERS","Oyuncu İstatistikleri");
define("INDEX_ALLIES","İttifak İstatistikleri");
define("INDEX_REPORTS","Casusluk Raporları");
define("INDEX_VERSION","İndirilebilir en son sürüm");
define("INDEX_LATEST_VERSION","Daha yeni bir sürüm bulunmamaktadır.");
define("INDEX_SHOUTBOX","Duyurular");
define("INDEX_NOENTRY","Henüz duyuru yapılmamış.");
define("INDEX_COMMENT","Duyuru Mesajınız");
define("INDEX_INSERT","Ekle");
define("INDEX_UMOD","Tatildeki Oyuncular");
define("INDEX_NO_MOONS","Toplam AY");
define("INDEX_NO_EMPTY_SYSTEMS","Boş Güneş Sistemleri");
define("INDEX_NO_FULL_SYSTEMS","Tamamen Dolu Güneş Sistemleri");
define("INDEX_NO_TARGETS","Olası Hedefler");
// 4.0
define("INDEX_USERINFO","Kullanıcı Sayısı");
define("INDEX_ONLINE","Çevrimiçi Kullanıcı(lar)");
define("INDEX_TODAY","Bugün Çevrimiçi Olan(lar)");
define("INDEX_ALL","Sisteme Giriş Toplamı");
// 4.3.7
define("GENERAL_LOAD_FORM","Form verisini yükle");
define("GENERAL_SAVE_FORM","Form verisini kaydet");
define("GENERAL_SAVE_AS_TEXT","farklı kaydet");
define("GENERAL_SAVE","Kaydet");
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
define("GENERAL_OPEN_IN_NEW_WINDOW","Yeni pencerede aç");
// 5.1
define("GENERAL_UNIT_OF_MEASURE_DAYS","Days");

/*********************************************************************/
/***************************** internal ******************************/
/*********************************************************************/
// index.php
define("PROGRAM_NAME","OGame Galaksi Veritabanı");
define("SHORTNAME","Galaksi Veritabanı");
define("BACK_INDEX","Ana Sayfaya Geri Dön");
define("UNIVERSE","Evren");

// search
define("MENU_INFO_LINKS","Bilgi");
define("MENU_PAGE","Genel Durum");
define("MENU_DB_SEARCH","Veritabanında Ara");
define("MENU_DB_NOTICES","Notlarda Ara");
define("MENU_DB_REPORTS","Raporlarda Ara");
define("MENU_GALAXYVIEW","Galaksi İncele");
define("MENU_STATISTICS","İstatistikler");
define("MENU_ALLYHISTORY","İttifak Tarihçesi");
// 4.7
define("MENU_FLEET_MOVEMENTS","Filo Hareketleri");
define("MENU_COMBAT_REPORTS","Savaş raporları");
define("MENU_MESSAGES","Mesajlar");

// insert / change
define("MENU_OPTION_LINKS","Seçenekler");
define("MENU_DB_REFRESH","Veritabanına Ekle");
define("MENU_NOTICES","Notlar");
define("MENU_DB_STATUS","Veritabanı Durumu");
define("MENU_USEROPTIONS","Kullanıcı Yönetimi");
define("MENU_USEROPTIONS2","Kullanıcı Seçenekleri");
define("MENU_USEROPTIONS3","Kullanıcı Bilgileri");
// 4.2
define("MENU_ADMIN","Administration");
// 4.3.3
define("MENU_LOGOUT","Oturumu Kapat");

// Stuff
define("MENU_STUFF","Diğer");
define("MENU_FORUM_THREAD","Yazılımcı Forumu");
define("MENU_DOWNLOADPAGE","İndirme Sayfası");
define("MENU_LANGUAGE","Dil Seçenekleri");
define("MENU_HELP","Yardım");
// 4.0
define("MENU_TOOLOPTIONS","Galaksi Veritabanı Seçenekleri");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1"," Veritabanına eklendi.");
define("PARSER_ERROR1","Aşağıdaki koordinatlar veritabanına kaydedilirken hata oluştu:");
define("PARSER_ERROR2","Veritabanı bulunamadı!");
define("PARSER_ERROR3","Veritabanı sunucusu bulunamadı!");
define("PARSER_WRONG_UNIVERSE","Yanlış evren - şu anki: \"&1\"  beklendi: \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","OGame Galaksi Veritabanı - Arama Sayfası");
define("SHOW_SEARCH","Veritabanında Ara");
define("SHOW_ALLYSYMBOL","İttifak Etiketi");
define("SHOW_PLAYERNAME","Oyuncu Adı");
define("SHOW_MOONS","Yalnızca AY'ı bulunan gezegenler");
define("SHOW_NOTICES","Yalnızca not kaydedilmis gezegenler");
define("SHOW_COLONIES","Yalnızca sömürgeleştirilebilecek gezegenler");
define("SHOW_YES","Evet");
define("SHOW_NO","Hayır");
define("SHOW_SEARCHRANGE","Arama Menzili");
define("SHOW_SEARCH_IN","Galaksi");
define("SHOW_FROM_SYSTEM","Güneş Sistemi Aralığı");
define("SHOW_FROM_PLANET","Gezegen Pozisyonu Aralığı");
define("SHOW_TO","ile");
define("SHOW_DESCRIPTION","Oyuncu ve ittifak isimleri için * joker karakterini kullanabilirsiniz.<br />Böylece isminin içerisinde belli bir kelime bulunanları listeleyebilirsiniz.<br /><br />Yalnızca ihtiyacınız olan arama kriterlerini doldurun.");
define("SHOW_SORT_BY","Sıralama");
define("SHOW_GALASYSTEM","Galaksi/Sistem");
define("SHOW_ALLYNAME","İttifak Adı");
define("SHOW_SEARCHBUTTON","Ara");
define("SHOW_ADDRESS","Adres");
define("SHOW_ALLYSORT","İttifak");
define("SHOW_PLANET","Gezegen Adı");
define("SHOW_STATUS","Durum");
define("SHOW_CURRENTNESS","Güncellik");
define("SHOW_PLAYER_STATUS","Oyuncu Durumu");
define("SHOW_PLAYER_STATUS1","hepsi");
define("SHOW_PLAYER_STATUS2","olası hedefler");
define("SHOW_PLAYER_STATUS3","pasif");
define("SHOW_HITS","Listelenen Sonuçlar");
define("SHOW_OF"," Toplam Sonuç:");
define("SHOW_ASC","Dogrusal Sıralama");
define("SHOW_DESC","Tersten Sıralama");
define("SHOW_RESULTS","Sayfa Başına Sonuç");
define("SHOW_MOON","AY");
define("SHOW_UKMOONSIZE","Bilgi Yok");
define("SHOW_DF","HA");
define("SHOW_DF_LONG","Harabe Alanı");
define("SHOW_METAL","M");
define("SHOW_METAL_LONG","Metal");
define("SHOW_CRYSTAL","K");
define("SHOW_CRYSTAL_LONG","Kristal");
define("SHOW_BOTH","Toplam Harabe");
define("SHOW_AT_LEAST","(en az)");
define("SHOW_DATE","Tarih");
define("SHOW_DATE_0","herhangi");
define("SHOW_DATE_1","tarihinden önce");
define("SHOW_DATE_2","tarihinden sonra");
define("SHOW_RANK","Sıralama");
define("SHOW_FRANK","Filo Sıralaması");
define("SHOW_MEMBERS","Üye Sayısı");
define("SHOW_NOTRANKED","İlk 1500'de degil.");
define("SHOW_NOTICERES","Notlar");
define("SHOW_REPORTS","Yalnızca casusluk raporu olan gezegenler");
define("SHOW_REPORTS_SHORT","Raporlar");
define("SHOW_NOTHING","Kayıt Bulunamadı");
define("SHOW_ALLIANCE_STATUS","İttifak Durumu");
define("SHOW_NO_STATUS","Durum Bilgisi Yok");
define("SHOW_NAP","Saldırmazlık Antlaşması");
define("SHOW_ALLIED","Müttefik");
define("SHOW_WAR","Savaş");
define("SHOW_BOYCOTT","Boykot");
define("SHOW_NEUTRAL","Tarafsız");
define("SHOW_OWN","İttifakım");
define("SHOW_WING","Alt İttifak");
// obsolete with 5.0
define("SHOW_EXT_OPTIONS1","Aralık, sıralama, tarih veya harabe aramaları için daha fazla arama seçeneği göster.");
define("SHOW_EXT_OPTIONS2","Sömürgeler, AY'lar, raporlar, notlar ve diplomatik durumlar için daha fazla arama seçeneği göster.");
define("SHOW_EXT_OPTIONS3","Arama sonuçlarını sıralamak için daha fazla arama seçeneği göster.");
// new 5.0
define("SHOW_EXTENDED","advanced search");
define("SHOW_MOON_SELECTION","Planet with moon");
define("SHOW_REPORT_SELECTION","Planet with report");
define("SHOW_FILTER_BY","Exclude from the list");
define("SHOW_FILTER_NONE","Hiçbiri");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Show players without score changes within the last few days");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","OGame Galaksi Veritabanı - Durum Sayfası");
define("STATUS_DB_STATUS","Veritabanı Durumu");
define("STATUS_COLOR","Renk");
define("STATUS_AGE1","1 günlük bilgi");
define("STATUS_AGE2","2 - 4 günlük bilgi");
define("STATUS_AGE3","4 - 7 günlük bilgi");
define("STATUS_AGE4","1 - 2 haftalık bilgi");
define("STATUS_AGE5","2 - 4 haftalık bilgi");
define("STATUS_AGE6","4 haftadan daha eski bilgi");
define("STATUS_AGE7","Bilgi kaydı yok");
define("STATUS_ON","on");
define("STYLES_COLOR1","Renk1");
define("STYLES_COLOR2","Renk2");
define("STYLES_COLOR3","Renk3");
define("STYLES_COLOR4","Renk4");
define("STYLES_COLOR5","Renk5");
define("STYLES_COLOR6","Renk6");
define("STYLES_COLOR7","Renk7");
// 4.8
define("STATUS_DB_LEGEND","Legend");
define("STATUS_GALAXY","Galaxy Overview");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","Kullanıcı Yönetimi");
define("USER_NAMES","Kullanıcı");
define("USER_ERROR","Hata");
define("USER_NEWUSER","Yeni Kullanıcı");
define("USER_OPTIONS","Seçenekler");
define("USER_USERNAME","Kullanıcı Adı");
define("USER_PASSWORD","Şifre");
define("USER_PASSWORD_CONFIRM","Şifre (tekrar)");
define("USER_GALAXY","Galaksi");
define("USER_SEARCH","Arama Yetkisi");
define("USER_INSERT","Ekleme Yetkisi");
define("USER_DELETE","Sil");
define("USER_DELETE_ENTRY","Kullanıcıyı silmek istiyor musunuz ?");
define("USER_STATUS","İstatistikleri Görebilir");
define("USER_STYLES","Düzenle");
define("USER_SUBMIT","Gönder");
define("USER_RESET","Temizle");
define("USER_YES","Evet");
define("USER_NO","Hayır");
define("USER_STYLEPATH","Styles.css dosya yolu");
define("USER_PROBES","Rapor Okuma/Kaydetme Yetkisi");
define("USER_EMAIL","E-Posta");
define("USER_ERROR1","Şifre yanlış ya da e-posta geçersiz.");
define("USER_ERROR2","E-Posta geçersiz.");
define("USER_INGAME","Oyundaki Adı");
define("USER_ALLYTAG","İttifak Etiketi");
define("USER_ALLYHISTORY","İttifak Tarihçesi Okuma/Kaydetme Yetkisi");
define("USER_DIPLOMATIC","Diplomatik Durum Tanımlama Yetkisi");
define("USER_STATSPAGE","İstatistiklerde Sayfa Başına Sonuç");
define("USER_LINKS","Linkler");
define("USER_LINKS2","Format:<br>text;url<br>text2;url2<br>text3;url3");
define("USER_EXPORT_TITLE","Renklendirme (BB Kodları)");
define("USER_BB_COORDINATES","Koordinatlar");
define("USER_BB_MOON","AY");
define("USER_BB_DEBRIS","Harabe Alanı");
define("USER_BB_ALLY","İttifak Adı");
define("USER_BB_ALLYDETAILS","İttifak Detayları");
define("USER_BB_PLAYERNAME","Oyuncu Adı");
define("USER_BB_BANNED","Cezalı");
define("USER_BB_VACATION","Tatilde");
define("USER_BB_NOOB","Zayıf Oyuncu");
define("USER_BB_INACTIVE","Pasif Oyuncu");
define("USER_BB_LONGINACTIVE","Uzun Süreli Pasif Oyuncu");
// new with 4.7
define("USER_DELETION","Sil");
define("USER_FLEETINFO",MENU_FLEET_MOVEMENTS);
define("USER_ACTIVITIES","Oyuncu Aktivitesi");
define("USER_MAINTENANCE","Galaxytool Bakımı");
define("USER_MANAGEMENT",MENU_USEROPTIONS);
define("USER_DELETE_MY_COMBAT_REPORTS","Savaş raporlarını sil");
define("USER_DELETE_MY_MESSAGES","Kendi Mesajlarını Sil");
define("USER_DELETE_MY_FLEETMOVES","Kendi filo hareketlerini sil");
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
define("VIEW_TITLE","OGame Galaksi Veritabanı - Detaylar");
define("VIEW_NODATA","Veri bulunamadı.");
define("VIEW_GALAXY","Galaksi");
define("VIEW_SYSTEM","Güneş Sistemi");
define("VIEW_POSITION","Poz.");
define("VIEW_PLANET","Gezegen");
define("VIEW_MOON","AY");
define("VIEW_TF","HA");
define("VIEW_PLAYER","Oyuncu");
define("VIEW_PLAYER_ADD","(Sıra / Durum)");
define("VIEW_ALLY","İttifak");
define("VIEW_ALLY_ADD","(Sıra / Üye)");
define("VIEW_METAL","M");
define("VIEW_CRYSTAL","K");
define("VIEW_COLONISED","Yerleşilmiş Gezegenler");
define("VIEW_UKMOONSIZE","Bilgi Yok");
define("VIEW_BACK","Geri");
define("VIEW_NOTICE","Notlar");
define("VIEW_REPORTS","Raporlar");
define("VIEW_MOONPHALANX","Bu sistem şu koordinatlardaki AY'lar tarafından radarlanabilir");
define("VIEW_NOMOONS","AY tespit edilemedi");
define("VIEW_IRAKS","Bu sisteme şu gezegenler GAR atabilir");
define("VIEW_NOIRAKS","GAR tespit edilemedi");
// 4.0
define("VIEW_MOON_DESTROY_CHANCE","AY Yoketme İhtimali");
define("VIEW_CHANCE_WITH_ONE","Tek bir Ölüm Yıldızı ile ");
define("VIEW_CHANCE_WITH_N","");
define("VIEW_DEATH_STARS"," Ölüm Yıldızı ile ");
define("VIEW_DS_DESTROY_CHANCE","Ölüm Yıldız(lar)ını Kaybetme İhtimali");
define("VIEW_TOP","Aralık");
// new 4.3.5
define("VIEW_GO","Git");
// new 5.0
define("VIEW_DIAMETER","Diameter");

/*********************************************************************
* change_password.php
**********************************************************************/
define("PW_TITLE","OGame Galaksi Veritabanı - Şifre Değiştirme");
define("OLD_PASSWORD","Eski Şifre");
define("NEW_PASSWORD","Yeni Şifre");
define("CONFIRM_NEW_PASSWORD","Yeni Şifre (tekrar)");
define("PW_MISMATCH","Şifreler Uyumsuz!");
define("PW_ERROR","Eski Şifreniz Doğru Değil!");
define("UPDATE_DONE","Şifreniz Degiştirildi.");
// new 4.2
define("TIMEZONE_OFFSET","Saat Dilimi");
// new 4.3
define("DELETE_ACCOUNT","Kullanıcıyı Sil");
define("DELETE_ACCOUNT_SAFETY_REQUEST","Bu Kullanıcıyı Gerçekten Silmek istiyormusunuz?");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","Yetki Verme");
define("CH_PASSWD_ADMIN","Yönetici");
// new 4.7
define("TIMEZONE_OGAME_OFFSET","OGame server saat dilimi");
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
define("NOTICE_TITLE","OGame Galaksi Veritabanı - Notlar");
define("NOTICE_HEADER","Notu Düzenle");
define("NOTICE_HEADER2","Notlarınızı Düzenleyin");
define("NOTICE_PUBLIC","Diğer kullanıcılar okuyabilir mi ?");
define("NOTICE_YES","Evet");
define("NOTICE_NO","Hayır");
define("NOTICE_TEXT","Not Metni");
define("NOTICE_SAVE","Kaydet");
define("NOTICE_DELETED","Kayıt Silindi");
define("NOTICE_SAVED","Kaydedildi.");
define("NOTICE_RESULTS","Tüm Sonuçlar");
define("NOTICE_USER","Kullanıcı");
define("NOTICE_DATE","Tarih");
define("NOTICE_EDIT","Düzenle");
define("NOTICE_DELETE","Sil");
define("NOTICE_NEW","Özel Not Oluştur");
define("NOTICE_NOTPUBLIC","Özel Not");
define("NOTICE_ALL","Tümü");
define("NOTICE_NONE",SHOW_FILTER_NONE);
define("NOTICE_SEARCH","Notlarda Ara");
define("NOTICE_SEARCH_SHORT","Ara");
define("NOTICE_HITS","Sonuçlar");
define("NOTICE_SHOWRESULTS","Sayfa Başına Sonuç");
define("NOTICE_OF","Toplam Sonuç: ");
define("NOTICE_NOTHING","Kayıt Bulunamadı");
// 4.0
define("NOTICE_CHARS","Toplam Karakter");
define("NOTICE_PLAYERNAME","Oyuncu");
define("NOTICE_SHOWALL","Tüm Notları Göster");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","OGame Galaksi Veritabanı - Casusluk Raporları");
define("REPORTS_RESOURCES","Hammadde");
define("REPORTS_FLEET","Filolar");
define("REPORTS_DEFENCE","Savunma");
define("REPORTS_BUILDINGS","Bina");
define("REPORTS_TECHNOLOGY","Bilimsel Araştırma");
define("REPORTS_MOON","AY");
define("REPORTS_SEARCH","Casusluk Raporlarında Ara");
define("REPORTS_SEARCH_SHORT","Ara");
define("REPORTS_HITS","Sonuçlar");
define("REPORTS_NOTHING","Kayıt Bulunamadı");
define("REPORTS_ADDRESS","Adres");
define("REPORTS_CURRENTNESS","Güncellik");
define("REPORTS_PLAYERNAME","Oyuncu Adı");
define("REPORTS_ALLY","İttifak");
define("REPORTS_VIEW","Raporu İncele");
define("REPORTS_SEARCH_IN","Arama Menzili - Galaksi");
define("REPORTS_FROM_SYSTEM","Güneş Sistemi Aralığı");
define("REPORTS_TO","ile");
define("REPORTS_DELETE","Sil");
define("REPORTS_DELETED","Kayıt Silindi");
define("REPORTS_RESULTS","Sayfa Başına Sonuç");
define("REPORTS_OF","Toplam Sonuç: ");
define("REPORTS_DATE","Tarih");
define("REPORTS_DATE_0","herhangi");
define("REPORTS_DATE_1","tarihinden önce");
define("REPORTS_DATE_2","tarihinden sonra");
define("REPORTS_NOTICES","Notlar");
define("REPORTS_AT_LEAST_RESOURCES","Hammadde Toplamı (en az)");
define("REPORTS_SEARCH_EXTENDED","Genişletilmiş Arama");
define("REPORTS_FLEET_RESIS","Filo Puanı");
define("REPORTS_DEFENCE_RESIS","Savunma Puanı");
define("REPORTS_ALL_RESIS","Toplam Puan");
define("REPORTS_TECHS","Teknikler");
define("REPORTS_UNKNOWN_ENTRIES","Bilinmeyen Alan");
define("REPORTS_PARTLY_INSERTED","Kısmen Kaydedildi");
define("REPORTS_FOR_ALL_RES","tüm hammadde için");
define("REPORTS_FOR_TF","harabe alanı için");
define("REPORTS_KT","Küçük Nakliye Gemileri");
define("REPORTS_GT","Büyük Nakliye Gemileri");
define("REPORTS_SS","Savaş Gemileri");
define("REPORTS_REC","Geri Dönüşümcü");
define("REPORTS_RAIDABLE","Yalnızca hücum edilebilir hedefler");
define("REPORTS_ALL_RESOURCES","tum hammaddeler");
// 4.0
define("REPORTS_STUFF","Diğer");
define("REPORTS_SPEEDSIM","SpeedSim ile Hesapla");
define("REPORTS_DRAGOSIM","Dragosim ile Hesapla");
define("REPORTS_STATUS","Durum");
define("REPORTS_ERROR","Bir hata oluştu");
// 4.2
define("REPORTS_OWN_REPORTS","Casus Sondasi Raporlarım");
// 4.3.3
define("REPORTS_UPLOAD_BY","Raporu Yükleyen"); //Rapor <nick> Tarafından Yüklendi
// 4.4
define("REPORTS_DEPTH","Sonda Raporu Detayı");
define("REPORTS_FLEET_SCORE","Filo Puanı");
define("REPORTS_DEFENCE_SCORE","Savunma Puanı");
// 5.0
define("REPORTS_HOURS","hours");
define("REPORTS_MAX_RESULTS_HIT","Your query returned more than &1 hits. Only the first &1 results are show. Please adjust your search request to get less results.");
define("REPORTS_OSIMULATE","Simulate with OSimulate");
define("REPORTS_SHOW_ONLY","Show only");
define("REPORTS_SHOW_PLANETS","Gezegenler");
define("REPORTS_SHOW_MOONS","Aylar");
define("REPORTS_OWNER","Reports owned by");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","OGame Galaksi Veritabanı - İstatistikler");
define("STATS_TBLHEAD","İstatistikler");
define("STATS_RANK","Sıralama");
define("STATS_PLAYERNAME","Oyuncu Adı");
define("STATS_ALLYNAME","İttifak Etiketi");
define("STATS_SCORE","Puan");
define("STATS_FLEET","Filo");
define("STATS_RESEARCH","Araştırma");
define("STATS_MEMBERS","Üye Sayısı");
define("STATS_STATUS","Durum");
define("STATS_NOTHING","Belirsiz");
define("STATS_NAP","Saldırmazlık Antlaşması");
define("STATS_ALLIED","Müttefik");
define("STATS_WAR","Savaş");
define("STATS_BOYCOTT","Boykot");
define("STATS_NEUTRAL","Tarafsız");
define("STATS_OWN","İttifakım");
define("STATS_WING","Alt İttifak");
define("STATS_UPDATE","Güncelleme");
define("STATS_PLAYERSTATS","Oyuncu İstatistikleri");
define("STATS_ALLYSTATS","İttifak İstatistikleri");
// 4.0
define("STATS_DELETE","Bu kaydı silmek istiyor musunuz ?");
define("STATS_CONFIRM_DELETE","Bu kullanıcı kaydını gerçekten silmek istiyor musunuz ?");
define("STATS_CHANGE_PLAYER_STATUS","Oyuncu Durumu");
define("STATS_CHANGE_ALLIANCE_STATUS","İttifak Durumu");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","Bu ittifakin tüm üyeleri seçilen diplomatik durum ile tanımlanırlar. Önceden yapılan tanımlamaların üstüne kaydedilir. Oyuncu bazında diplomatik durum bilgisini (gerekiyorsa) tekrar tanımlamanız gerekmektedir.");
define("STATS_UNKNOWN","Diğerleri");
define("STATS_DETAILS","Detaylar");
// 4.4
define("STATS_PLAYERSTATUS",SHOW_PLAYER_STATUS);
define("STATS_IGNORE_STATUS",SHOW_PLAYER_STATUS1);
define("STATS_ACTIVE","Aktif");
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
define("REGISTER_REGISTRATE","Kayıt");
define("REGISTER_LOGINNAME","Kullanıcı Adı");
define("REGISTER_PASSWORD","Şifre");
define("REGISTER_PASSWORD_CONFIRM","Şifre (tekrar)");
define("REGISTER_EMAIL","E-Posta");
define("REGISTER_INGAME","Oyundaki Ad");
define("REGISTER_ALLYTAG","İttifak Etiketi");
define("REGISTER_EMAILVERIFICATION","E-Posta Doğrulama");
define("REGISTER_EMAILTEXT","Lütfen linki tıklayarak Galaksi Veritabanı kayıt işleminizi onaylayınız.");
define("REGISTER_ERROR1","Kullanıcı Adı daha önceden alınmış.");
define("REGISTER_ERROR2","E-Posta gönderilirken bir hata oluştu. Lütfen yöneticiniz ile irtibat kurun.");
define("REGISTER_ERROR3","Veritabanına bilgi gönderirken hata oluştu!");
define("REGISTER_INFO1","Hesabınız oluşturuldu.");
define("REGISTER_INFO2","Lütfen size gönderilen e-posta'da bulunan linki tıklayarak kayıt işleminizi tamamlayın..");
define("REGISTER_INFO3","E-Posta adresiniz doğrulandı. Hesabınızın yönetici tarafından etkinleştirilmesi gerekiyor.");
define("REGISTER_BUTTON","Ana Sayfaya Geri Dön");
define("REGISTER_NEW_SUBJECT","Galaksi Veritabanına yeni kullanıcı kaydedildi.");
define("REGISTER_NEW_MAILTEXT","Yeni kullanıcı kayıt işlemlerini tamamladı.");
// new 4.2
define("REGISTER_BACK","Ilk sayfaya dön");
// new 4.3.5
define("REGISTER_MISSING_FIELDS","Zorunlu alanları doldurun ");
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
define("LOSTPW_TITLE","Şifremi Unuttum");
define("LOSTPW_INFO2","Yeni şifreniz oluşturuldu ve e-posta adresinize gönderildi.");
define("LOSTPW_BUTTON1","Yeni Şifre Al");
define("LOSTPW_BUTTON2","Ana Sayfaya Geri Dön");
define("LOSTPW_LOGINNAME","Kullanıcı Adı");
define("LOSTPW_EMAIL","E-Posta");
define("LOSTPW_ERROR1","Veritabanına bilgi gönderirken hata oluştu!");
define("LOSTPW_ERROR2","Eslesen hicbir kayit bulunamadı!");
define("LOSTPW_ERROR3","E-Posta gönderilirken bir hata oluştu. Lütfen yöneticiniz ile irtibat kurun.");
define("LOSTPW_EMAIL_SUBJECT","Talep etmiş olduğunuz yeni şifreniz...");
define("LOSTPW_EMAIL_TEXT1","Galaksi Veritabanı için yeni giriş bilgileriniz");
define("LOSTPW_EMAIL_TEXT2","Kullanıcı Adı");
define("LOSTPW_EMAIL_TEXT3","Şifre");
// new 5.0
define("LOSTPW_INFO1","You will receive an email to verify your password reset request.");
define("LOSTPW_CONFIRM_RESET_SUBJECT","Lost password?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","Hello,\n\nyou requested a password reset for the Galaxytool. To generate a new password, click the following link:");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","OGame Galaksi Veritabanı - Kullanıcı Bilgisi");
define("USERINFO_NAMES","Sisteme Kayıtlı Tüm Kullanıcılar");
define("USERINFO_DETAIL","Ayrıntılı Bilgi");
define("USERINFO_ERROR1","Bu isimde kayıtlı bir kullanıcı yok!");
define("USERINFO_USERNAME","Kullanıcı Adı");
define("USERINFO_INGAME","Oyundaki Ad");
define("USERINFO_EMAIL","E-Posta");
define("USERINFO_ALLYTAG","İttifak");
define("USERINFO_STYLEPATH","Tema");
define("USERINFO_STATUS","Durum");
define("USERINFO_ACTIVATE","Hesabı Etkinleştir");
define("USERINFO_LOGINS","Sisteme Toplam Giriş Sayısı");
define("USERINFO_LASTLOGIN","Son Giriş Zamanı");
define("USERINFO_DATA","Kaydedilmiş Sistemler Hakkında Bilgi");
define("USERINFO_NODATA","Kullanıcı Henüz Hiçbir Sistem Kaydetmemiştir!");
define("USERINFO_GALAXY","Galaksi");
define("USERINFO_SYSTEMS","Güneş Sistemleri");
define("USERINFO_IP","IP Adresi");
define("USERINFO_LOGINTIME","Giriş Zamanı");
define("USERINFO_NOLOGIN","Oyuncu Sisteme Hiç Giriş Yapmadı.");
define("USERINFO_LAST_GALAXYUPDATE","En Son Kaydedilen Galaksi Ekranı");
define("USERINFO_LAST_PUBLIC_NOTICE","En Son Kaydedilen Genel Not");
define("USERINFO_LAST_PRIVATE_NOTICE","En Son Kaydedilen Özel Not");
define("USERINFO_NUMBEROF_PUBLIC_NOTICE","Toplam Genel Not");
define("USERINFO_NUMBEROF_PRIVATE_NOTICE","Toplam Özel Not");
define("USERINFO_ACTIVATED","Hesap Etkinleştirildi");
define("USERINFO_ACTIVATIONTEXT","Galaksi Veritabanı Yöneticisi hesabınızı etkinleştirdi.\n\nİyi eğlenceler!");
// new 4.8
define("USERINFO_LAST_SUBMIT","Inserted last data");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","OGame Galaksi Veritabanı - İttifak Tarihçesi");
define("ALLYHISTORY_TBLHEAD","İttifak Tarihçesi - Genel Durum");
define("ALLYHISTORY_PLAYERNAME","Oyuncu Adı");
define("ALLYHISTORY_ALLYNAME","İttifak");
define("ALLYHISTORY_LASTMONTH","Geçen Ay"); // changed at 4.0
define("ALLYHISTORY_ALL_DATA","Mevcut Tüm Bilgi"); // new 4.0
define("ALLYHISTORY_SHOW","İstatistikleri Göster");
define("ALLYHISTORY_TIMESPAN","Zaman Aralığı");
define("ALLYHISTORY_PROGESS","Süreç");
define("ALLYHISTORY_SCORE","Puanlar");
define("ALLYHISTORY_FSCORE","Filo Puanları"); // new 4.0
define("ALLYHISTORY_RSCORE","Araştırma Puanları"); // new 4.0
define("ALLYHISTORY_MEMBER","Üye Sayısı"); // new 4.0
define("ALLYHISTORY_NOTHING","Kayıt Bulunamadı");
define("ALLYHISTORY_DETAILS","Detaylar");
define("ALLYHISTORY_SHOW_ADDRESS","Koordinatlar");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","Kullanıcı Bilgisi");
define("DETAILEDINFO_ALLYINFO_TITLE","İttifak Bilgisi");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","Oyuncu Hakkında Ayrıntılı Bilgi");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","İttifak Hakkında Ayrıntılı Bilgi");
define("DETAILEDINFO_NO_ALLIANCE","İttifak Yok");
define("DETAILEDINFO_SCORE","Puan İstatistiği");
define("DETAILEDINFO_FLEET","Filo İstatistiği");
define("DETAILEDINFO_RESEARCH","Araştırma İstatistiği");
define("DETAILEDINFO_RANK","Sıralama");
define("DETAILEDINFO_POINTS","Puan");
define("DETAILEDINFO_KNOWN_PLANETS","Bilinen Gezegenler");
define("DETAILEDINFO_MOONS","Bilinen AY'lar");
define("DETAILEDINFO_PHALANX_AREA","Radar Menzil Alanı");
define("DETAILEDINFO_NO_PHALANX_AREA","Radar Tespit Edilemedi");
define("DETAILEDINFO_NOTICES","Notlar");
define("DETAILEDINFO_NO_NOTICES","Kayıtlı Not Bulunamadı");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","Önceki İttifak Üyelikleri");
define("DETAILEDINFO_RESOURCES_PER_HOUR","Saatlik Hammadde");
define("DETAILEDINFO_RESOURCES_PER_DAY","Günlük Hammadde");
define("DETAILEDINFO_RESOURCES_PER_WEEK","Haftalık Hammadde");
define("DETAILEDINFO_RESOURCES_PER_MONTH","Aylık Hammadde (30 gün)");
define("DETAILEDINFO_METAL","Metal");
define("DETAILEDINFO_CRYSTAL","Kristal");
define("DETAILEDINFO_DEUTERIUM","Deuterium");
define("DETAILEDINFO_UNKNOWN","Bilgi Yok");
define("DETAILEDINFO_SCORE_DISTRIBUTION","Puan Dağılımı");
// new 4.2
define("DETAILEDINFO_GENERAL","Ayrıntılar");
define("DETAILEDINFO_MEMBERS","üye");
define("DETAILEDINFO_GRAPHS","Grafikler");
define("DETAILEDINFO_RESOURCES","Kaynaklar");
define("DETAILEDINFO_FLEET_TAB","Filo");
define("DETAILEDINFO_TECH","Araştırma");
define("DETAILEDINFO_FLEET_DETAIL","Toplam / (oyuncu ortalaması) Mevcut Raporlardan");
define("DETAILEDINFO_TECH_DETAIL","Oyuncu bilgilerinin ortalaması");
// new 4.3
define("DETAILEDINFO_PLANET_TAB",REPORTS_SHOW_PLANETS);
define("DETAILEDINFO_MOON_TAB",REPORTS_SHOW_MOONS);
// 4.7
define("DETAILEDINFO_ACTIVITIES","Faaliyetler");
define("DETAILEDINFO_NODATA",VIEW_NODATA); // reuse existing translations
define("DETAILEDINFO_ACTIVITY_DESCRIPTION","Faaliyetleri göster &1 bu dönemde:");
define("DETAILEDINFO_GALAXYVIEWS","Galaxy izleme");
define("DETAILEDINFO_SCANS","Casusluk raporları");
define("DETAILEDINFO_MESSAGES","Oyuncu mesajları");
define("DETAILEDINFO_COMBATS","Savaş raporları");
define("DETAILEDINFO_ALLYPAGE","İttifak genel bakış");
define("DETAILEDINFO_MANUAL","Manual ekleme");
define("DETAILEDINFO_START","Başlangıç");
define("DETAILEDINFO_TO","kadar");
define("DETAILEDINFO_TODAY","Bugün");
define("DETAILEDINFO_DATA_RESTRICTION","ile sınırlıdır:");
define("DETAILEDINFO_WEEKDAY_WEEKEND","Haftalık");
define("DETAILEDINFO_WEEKDAY_WORKINGDAY","Bugün");
define("DETAILEDINFO_WEEKDAY_MONDAY","Pazartesi");
define("DETAILEDINFO_WEEKDAY_TUESDAY","Salı");
define("DETAILEDINFO_WEEKDAY_WEDNESDAY","Çarşamba");
define("DETAILEDINFO_WEEKDAY_THURSDAY","Perşembe");
define("DETAILEDINFO_WEEKDAY_FRIDAY","Cuma");
define("DETAILEDINFO_WEEKDAY_SATURDAY","Cumartesi");
define("DETAILEDINFO_WEEKDAY_SUNDAY","Pazar");
define("DETAILEDINFO_WEEKDAY_SHORTLENGTH",3); // number of characters to shorten week day
define("DETAILEDINFO_PLAYER_CURRENTLY_ACTIVE","Oyuncu şu anda etkin");
define("DETAILEDINFO_PLAYER_MESSAGES","Uygun oyuncu mesajları");
define("DETAILEDINFO_SHOW","göster");
define("DETAILEDINFO_NONE","Uygun değil");
define("DETAILEDINFO_ENTER_MANUALLY","Bu Oyuncu için faaliyetler girin");
define("DETAILEDINFO_PLAYER_SEEN_ON","Oyuncu online oldu");
define("DETAILEDINFO_INSERT","Eklemek");
define("DETAILEDINFO_OGAME_SERVERTIMES","Bilgi: Bütün burada gösterilken zamanlar OGame sunucu zamanlarıdır!");
define("DETAILEDINFO_DAY_VIEW","24 saat izle");
define("DETAILEDINFO_WEEK_VIEW","Haftalık izle");
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
define("ADMIN_TITLE","Galaxytool Yönetimi");
define("ADMIN_DISCLAMER","Dikkat: Herhangi bir sikripti calıştırmanız sizin sorumluluğunuzdadır. Bunların birçoğu verinizi silebilir.");
define("ADMIN_INCONSISTENCIES","Veri tabanınındaki tutarsızlıklar");
define("ADMIN_PLANETS","0 ve 15'den büyük konumlarda bulunan gezegenleri sil.");
define("ADMIN_GALAXIES","&1 'den büyük numaralı galaksileri sil");
define("ADMIN_PLAYERS","Silinen Oyuncu Hesaplarini Temizle - Veri tabanında oyuncu numarası olmayan kayıtları temizle");
define("ADMIN_REPORTS","Silinen gezegenlere ait sonda raporlarını temizle");
define("ADMIN_MISC","çeşitli");
define("ADMIN_RESET","Galaxytool'u Sıfırla (Sadece kullanıcı ve ip tabloları silinmez)");
define("ADMIN_OLD_PLAYERS","&1 Günden eski oyuncu girişlerini sil");
define("ADMIN_OLD_REPORTS","&1 Günden eski sonda raporlarını sil");
define("ADMIN_LOADING","Sayfa yüklenmeden pencereyi kapatmayınız.");
define("ADMIN_STATUS","Isteklerinizin Durumu");
define("ADMIN_SELECTION","En azından bir komut seçilmelidir.");
define("ADMIN_SAFETY","Bu sikriptleri çalıştırmak istediğinize emin misiniz?");
define("ADMIN_DONE","Işlem Tamamlandı.");
define("ADMIN_NOTBD","Yapılacak bir iş bulunamadı.");
// new 4.3
define("ADMIN_OLD_GALAXIES","&1 Günden eski olan galaksi verisini sil");
define("ADMIN_UNUSED_PLAYERS","Hesabı silinen oyuncuları veri tabanından temizle.");
// new 4.7
define("ADMIN_OLD_ACTIVITIES","&1 günden eski olan oyuncu faaliyetlerini sil");
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
define("ERRORPAGE_PAGEFORWARD","Tarayıcınız otomatik yönlendirmeyi desteklemiyorsa, Lütfen buraya tıklayın.");
define("ERRORPAGE_PERMISSION_DENIED","Bu sayfaya giriş izniniz yoktur. Buraya tıklayarak geri gidiniz.");

// new 4.7
/*********************************************************************
* fleet_movements.php
**********************************************************************/
define("FLEETS_TITLE","OGame Galaxytool – Filo Hareketleri");
define("FLEETS_ACTUAL_FLEETS","Mevcut filo hareketleri");
define("FLEETS_YES",SHOW_YES);
define("FLEETS_NO",SHOW_NO);
define("FLEETS_DETAILS","Detaylar");
define("FLEETS_MISSION_EXPEDITION","Kesif");
define("FLEETS_MISSION_COLONIZATION","Sömürgelestirmek");
define("FLEETS_MISSION_RECYCLE","Harabe alanını sök");
define("FLEETS_MISSION_TRANSPORT","Nakliye");
define("FLEETS_MISSION_DEPLOYMENT","Konuslandırmak");
define("FLEETS_MISSION_ESPIONAGE","Casusluk");
define("FLEETS_MISSION_ACS_DEFEND","Durmak");
define("FLEETS_MISSION_ATTACK","Saldirmak");
define("FLEETS_MISSION_ACS_ATTACK","İttifak saldırısı");
define("FLEETS_MISSION_MOON_DESTRUCTION","Yok etmek");
define("FLEETS_MISSION_MISSILE_ATTACK","Füze Saldırısı");
define("FLEETS_NO_DATA","Uygulana bilir veri bulunamadı");
// new 5.0
define("FLEETS_FLEET","Fleet");
define("FLEETS_ALL_FLEETS","Show all fleet movements");

/*********************************************************************
* parser_combat_reports.inc.php
**********************************************************************/
define("COMBAT_REPORT_OUDATED_GALAXYVIEW","Verileriniz eski tekrar inçeleyin! Lütfen önce saldıran ve savunanın galaksigörüntülerini  ziyaret ediniz.");

/*********************************************************************
* messages.php
**********************************************************************/
define("MESSAGES_TITLE","OGame Galaxytool - OGame Messages");
define("MESSAGES_PLAYERNAME","Oyuncu adı");
define("MESSAGES_SUBJECT","Konu");
define("MESSAGES_DATE","Tarih");
define("MESSAGES_FILTER","Filtre");
define("MESSAGES_DELETE","Mesajı sil");
define("MESSAGES_PUBLISH_DETAIL","Bu mesaji içeriğini oyuncu Notlarına ekleyerek yayınlanabilirsiniz.");
define("MESSAGES_PUBLISH_HEADER","&sender &recipient(alan) am &date bu mesajı yolladı:\n\n &message"); // &sender, &recipient, &date, &message replaced at runtime
define("MESSAGES_PLAYER_FILTER","Oyuncuda gelen mesajlar:");
// new 5.0
define("MESSAGES_CONTENT","Content");

/*********************************************************************
* combat_reports.php
**********************************************************************/
define("COMBATS_TITLE","OGame Galaxytool – Savaş raporu");
define("COMBATS_ATTACKER","Attack");
define("COMBATS_DEFENDER","Defans");
define("COMBATS_DATE","Tarih");
define("COMBATS_OWNER","Kullanıcı");
define("COMBATS_WINNER","Kazanan");
define("COMBATS_COMBATREPORT","Savaş raporu");
define("COMBATS_COMBAT_AT","Için savaş");
define("COMBATS_LOST_UNITS","Kaybedilen üniteler");
define("COMBATS_LOOT","Ele Geçirilen");
define("COMBATS_DEBRIS","Harabe");
define("COMBATS_AND","ve");
define("COMBATS_PUBLISH","Raporu paylaş");
define("COMBATS_UNPUBLISH","Raporu paylasma (tekrar özel kılar)");
define("COMBATS_DELETE","Raporu sil");
define("COMBATS_CHECK_ALL","hepsini seç");
define("COMBATS_UNCHECK_ALL","hepsini kaldır");
define("COMBATS_WITH_SELECTED","seçme ile");
define("COMBATS_PUBLIC_REPORTS","ortak SR´lar");
define("COMBATS_YES",SHOW_YES); // no need for translation!
define("COMBATS_NO",SHOW_NO); // no need for translation!
define("COMBATS_SEARCH_OPTIONS","Arama Parametreleri");
define("COMBATS_SEARCH","Aramak");
define("COMBATS_RESET","Sıfırlamak");
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