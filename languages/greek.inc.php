<?php
/*
 * defines the characters used in OGame to indicate player status
 */
define("PLAYER_BANNED","b");
define("PLAYER_VACATION_MODE","v");
define("PLAYER_NOOB","n");
define("PLAYER_INACTIVE","i");
define("PLAYER_LONG_INACTIVE","I");
define("PLAYER_OUTLAW","α");

/*********************************************************************/
/***************************** public ********************************/
/*********************************************************************/
//index.php
define("L_USERNAME","Όνομα Χρήστη");
define("L_PASSWORD","Κωδικός");
define("L_LOGINFAILURE","Το όνομα χρήστη ή ο κωδικός είναι λάθος, ή ο λογαριασμός σας δέν έχει ενεργοποιηθεί ακόμα.");
define("L_TOKENFAILURE","Το κλειδί εισόδου είναι λάθος ή ο λογαριασμός δεν έχει ενεργοποιηθεί ακόμα.");
define("L_LOGINTEXT","Είσοδος.");
define("L_LANGUAGE","Διαθέσιμες Γλώσσες:");
define("L_TIMEOUT","Τέλος χρόνου συνεδρίας!");
define("L_REGISTER","Εγγραφή");
define("L_PWLOST","Ξεχάσατε τον κωδικό σας?");
define("INDEX_TITLE","Περίληψη");
define("INDEX_INFO","Πληροφορίες");
define("INDEX_ENTRIES","Συνολικός Αριθμός Συστημάτων");
define("INDEX_ENTRIES_LASTWEEK","Νέα συστήματα την περασμένη εβδομάδα");
define("INDEX_ENTRIES_TO_OLD","Συστήματα παλιότερα απο 1 μήνα");
define("INDEX_REGISTERED_USERS","Εγγεγραμμένοι χρήστες");
define("INDEX_PAGEFORWARD","Αν ο browser σας δέν υποστηρίζει page forwarding πατήστε εδώ.");
define("INDEX_NOTICES","Σημειώσεις");
define("INDEX_PLAYERS","Στατιστικά Παικτών");
define("INDEX_ALLIES","Στατιστικά Συμμαχιών");
define("INDEX_REPORTS","Κατασκοπευτικές Αναφορές");
define("INDEX_VERSION","Νεότερη έκδοση για κατέβασμα");
define("INDEX_LATEST_VERSION","Καμία νεότερη έκδοση διαθέσιμη");
define("INDEX_SHOUTBOX","Shoutbox");
define("INDEX_NOENTRY","Κανένα κείμενο μέχρι στιγμής");
define("INDEX_COMMENT","Το δικό σου Shout");
define("INDEX_INSERT","Εισαγωγή");
define("INDEX_UMOD","Παίκτες σε κατάσταση διακοπών");
define("INDEX_NO_MOONS","Συνολικός αριθμός Φεγγαριών");
define("INDEX_NO_EMPTY_SYSTEMS","Συνολικός αριθμός ’δειων Συστημάτων");
define("INDEX_NO_FULL_SYSTEMS","Συνολικός αριθμός Γεμάτων Συστημάτων");
define("INDEX_NO_TARGETS","Συνολικός αριθμός πιθανών στόχων");
// 4.0
define("INDEX_USERINFO","Αριθμός Χρηστών");
define("INDEX_ONLINE","Συνδεδεμένοι τώρα");
define("INDEX_TODAY","Συνδέθηκαν Σήμερα");
define("INDEX_ALL","Συνολικός αριθμός συνδέσεων");
// 4.3.7
define("GENERAL_LOAD_FORM","Φόρτωσε από τα δεδομένα");
define("GENERAL_SAVE_FORM","Σώσε δεδομένα");
define("GENERAL_SAVE_AS_TEXT","Σώσε σαν");
define("GENERAL_SAVE","Σώσε");
// 4.8
define("INDEX_USERMANAGEMENT","Επισκόπηση ενεργοποίησης");
define("INDEX_NEEDADMIN","Λογαριασμοί για ξεκλείδωμα");
define("INDEX_NEEDEMAIL","Ανεπικύρωτοι Λογαριασμοί");
define("INDEX_TOOLBAR_INFO","Galaxytool plugin πληροφορίες");
define("INDEX_TOOLBAR_URL","Galaxytool URL");
define("INDEX_TOOLBAR_VERSION_REQUIRED","Απαραίτητη ή έκδοση του Galaxytool plugin");
define("INDEX_TOOLBAR_INSTALL_GUIDE","Οδηγίες εγκατάστασης του plugin");
define("INDEX_TOOLBAR_TOKEN","Κλειδί Εισόδου");
define("INDEX_TOOLBAR_NEW_TOKEN","Ζητήστε νέο κλειδί");
define("INDEX_PLAYERS_WITH_N_PLANETS","Παίκτες με περισσότερους από  &1 πλανήτες");
define("INDEX_GETTING_STARTED","Ξεκινήστε με το  Galaxytool");
define("INDEX_GETTING_STARTED1","Καλως ήλθατε στο Galaxytool!");
define("INDEX_GETTING_STARTED2","Το Galaxytool θα σας βοηθήσει να αναλύσετε τα γεγονότα στο OGame Σύμπαν &1");
define("INDEX_GETTING_STARTED3","Πριν αρχίσετε να αναλύετε δεδομένα πρεπει να τα εισάγετε πρώτα. Για αυτό σας χρειάζετε το plugin &1 για τον Firefox.");
define("INDEX_GETTING_STARTED4","Εφόσον εκγαταστήσετε το plugin, μπορείτε να πλοηγηθείτε στισ σελίδες του OGame ως συνήθως και θα παρατηρήσετε ένα μικρό παράθυρο κατάστασεων κάθε φορά που κάτι αποστέλεται στο Galaxytool.");
define("INDEX_GETTING_STARTED5","Απο την στιγμή που έχουν εισαχθεί δεδομένα στο Galaxytool, μπορείτε να αναλύσετε που έχουν οι παίκτες τις αποικίες τους, πόσες αποικίες κατέχουν, τι αναφορές υπάρχουν και κάθε πότε είναι ενεργοί.");
define("INDEX_GETTING_STARTED6","Αλλά θα σας βοηθήσει να αναλύσετε πως πορεύεστε συγκρινόμενος με τους ανταγωνιστές σας ή αναλύοντας τις αναφορές μάχης παρακολουθώντας την προόδό σας τις τελευταίες μέρες ή εβδομάδες.");
define("INDEX_GETTING_WIKIPAGE","Υπάχρουν περισσότερα χαρακτιριστικά εντός του Galaxytool.");
define("INDEX_GETTING_WIKIPAGE2","Ενημερωθείτε στην σελίδα wiki.");
define("INDEX_GETTING_BOARD","Γία τις απορίες και καινούργιες ιδέες μπορείτε να χρησιμοποιήσετε τον φόρουμ μας:");
define("INDEX_GETTING_CHAT1","Ή επισκευτείτε το  chatroom μας:");
define("INDEX_GETTING_CHAT2","Δεν είμαστε ενεργοί 24/7 αλλά περνάμε αρκετό απο τον ελεύθερο μας χρόνο εκεί, οπότε παραμείνετε υπομονετικοί.");
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
define("GENERAL_APPLY","Εφαρμογή");
define("STARTPAGE_GALAXYTOOL_DESCR","<em>Galaxytool</em> is a tool for the browser game OGame.");
define("GENERAL_OVERWRITE","Overwrite duplicate entry");
define("GENERAL_OVERWRITE_QUESTION","Overwrite?");
define("INDEX_OWN_LOGINS","Your logins");
define("GENERAL_OPEN_IN_NEW_WINDOW","Άνοιγμα δεσμού σε νέο παράθυρο");
// 5.1
define("GENERAL_UNIT_OF_MEASURE_DAYS","Days");

/*********************************************************************/
/***************************** internal ******************************/
/*********************************************************************/
// index.php
define("PROGRAM_NAME","OGame Galaxytool");
define("SHORTNAME","Galaxytool");
define("BACK_INDEX","Πίσω στην κεντρική σελίδα");
define("UNIVERSE","Γαλαξίας");

// search
define("MENU_INFO_LINKS","Πληροφορίες");
define("MENU_PAGE","Περίληψη");
define("MENU_DB_SEARCH","Έρευνα στην βάση δεδομένων");
define("MENU_DB_NOTICES","Έρευνα στις σημειώσεις");
define("MENU_DB_REPORTS","Έρευνα στις Αναφορές");
define("MENU_GALAXYVIEW","Προβολή Γαλαξία");
define("MENU_STATISTICS","Στατιστικά");
define("MENU_ALLYHISTORY","Ιστορικό Συμμαχίας");
// 4.7
define("MENU_FLEET_MOVEMENTS","Κινήσεις Στόλου");
define("MENU_COMBAT_REPORTS","Αναφορές μάχης");
define("MENU_MESSAGES","Μηνύματα παιχνιδιού");

// insert / change
define("MENU_OPTION_LINKS","Επιλογές");
define("MENU_DB_REFRESH","Εισαγωγή στη βάση δεδομένων");
define("MENU_NOTICES","Σημειώσεις");
define("MENU_DB_STATUS","Κατάσταση της βάσης δεδομένων");
define("MENU_USEROPTIONS","Διαχείρηση Χρηστών");
define("MENU_USEROPTIONS2","Επιλογές χρηστών");
define("MENU_USEROPTIONS3","Πληροφορίες Χρηστών");
// 4.2
define("MENU_ADMIN","Διαχείριση");
// 4.3.3
define("MENU_LOGOUT","Αποσύνδεση");

// Stuff
define("MENU_STUFF","Διάφορα");
define("MENU_FORUM_THREAD","Φορουμ Ανάπτυξης");
define("MENU_DOWNLOADPAGE","Σελίδα Download");
define("MENU_LANGUAGE","Γλώσσα");
define("MENU_HELP","Βοήθεια");
// 4.0
define("MENU_TOOLOPTIONS","Επιλογές Galaxytool");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1"," εισήχθη στην βάση δεδομένων");
define("PARSER_ERROR1","Λάθος προσπαθώντας να εισαχθούν οι παρακάτω συντεταγμένες:");
define("PARSER_ERROR2","Δέν βρέθηκε η βάση δεδομένων!");
define("PARSER_ERROR3","Δέν βρέθηκε ο server της βάσης δεδομένων!");
define("PARSER_WRONG_UNIVERSE","Λάθος Σύμπαν - πραγματικό: \"&1\" αναμενόμενο: \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","OGame Galaxytool - Σελίδα αναζήτησης");
define("SHOW_SEARCH","Αναζήτηση στη βάση δεδομένων");
define("SHOW_ALLYSYMBOL","Tag Συμμαχίας");
define("SHOW_PLAYERNAME","Όνομα Παίκτη");
define("SHOW_MOONS","Μόνο πλανήτες με φεγγάρι");
define("SHOW_NOTICES","Μόνο πλανήτες με σημειώσεις");
define("SHOW_COLONIES","Μόνο πλανήτες για Αποικιοποίηση");
define("SHOW_YES","Ναι");
define("SHOW_NO","Όχι");
define("SHOW_SEARCHRANGE","Περιοχή");
define("SHOW_SEARCH_IN","Αναζήτηση στον Γαλαξία");
define("SHOW_FROM_SYSTEM","απο το ηλιακό σύστημα");
define("SHOW_FROM_PLANET","απο την θέση πλανήτη");
define("SHOW_TO","ώς");
define("SHOW_DESCRIPTION","Μπορείτε να χρησιμοποιήσετε wildcards * για ονόματα παικτών ή συμμαχιών. Δηλαδή μπορείτε να βρείτε όλους τους παίκτες με &quot;όνομα&quot; στο όνομά τους.<br />Συμπληρώστε μόνο τα πεδία που θέλετε να καθορίσετε.");
define("SHOW_SORT_BY","Στοίχηση με");
define("SHOW_GALASYSTEM","Γαλαξίας/Σύστημα");
define("SHOW_ALLYNAME","Όνομα Συμμαχίας");
define("SHOW_SEARCHBUTTON","Αναζήτηση");
define("SHOW_ADDRESS","Διεύθυνση");
define("SHOW_ALLYSORT","Συμμαχία");
define("SHOW_PLANET","Όνομα Πλανήτη");
define("SHOW_STATUS","Κατάσταση");
define("SHOW_CURRENTNESS","Τελευταία ενημέρωση");
define("SHOW_PLAYER_STATUS","Κατάσταση Παίκτη");
define("SHOW_PLAYER_STATUS1","όλοι");
define("SHOW_PLAYER_STATUS2","πιθανοί στόχοι");
define("SHOW_PLAYER_STATUS3","ανενεργός");
define("SHOW_HITS","Hits");
define("SHOW_OF","του");
define("SHOW_ASC","ανοδικά");
define("SHOW_DESC","καθοδικά");
define("SHOW_RESULTS","χτυπήματα ανα σελίδα");
define("SHOW_MOON","Φεγγάρι");
define("SHOW_UKMOONSIZE","άγνωστο");
define("SHOW_DF","DF");
define("SHOW_DF_LONG","πεδίο συντρημιών");
define("SHOW_METAL","Μ");
define("SHOW_METAL_LONG","Μέταλλο");
define("SHOW_CRYSTAL","Κ");
define("SHOW_CRYSTAL_LONG","Κρύσταλλο");
define("SHOW_BOTH","όλα μαζί");
define("SHOW_AT_LEAST","(το λιγότερο)");
define("SHOW_DATE","Ημερομηνία");
define("SHOW_DATE_0","δεν με ενδιαφέρει");
define("SHOW_DATE_1","παλίοτερο απο");
define("SHOW_DATE_2","νεότερο απο");
define("SHOW_RANK","Βαθμολογία");
define("SHOW_FRANK","Βαθμολογία Στόλου");
define("SHOW_MEMBERS","Μέλη");
define("SHOW_NOTRANKED","Όχι μέσα στους πρώτους 1500.");
define("SHOW_NOTICERES","Σημειώσεις");
define("SHOW_REPORTS","Μόνο πλανήτες με αναφορές");
define("SHOW_REPORTS_SHORT","Αναφορές");
define("SHOW_NOTHING","Δεν βρέθηκε καμία καταχώρηση");
define("SHOW_ALLIANCE_STATUS","Θέση Συμμαχίας");
define("SHOW_NO_STATUS","Χωρίς κατάσταση");
define("SHOW_NAP","NAP");
define("SHOW_ALLIED","Συμμαχοι");
define("SHOW_WAR","Σε πόλεμο");
define("SHOW_BOYCOTT","Μποϊκοτάζ");
define("SHOW_NEUTRAL","Αδιάφορος");
define("SHOW_OWN","Δική μου Συμμαχία");
define("SHOW_WING","Wing");
// obsolete with 5.0
define("SHOW_EXT_OPTIONS1","Εμφάνιση περισσότερων επιλογών για  περιοχή, βαθμολογία, ημερομηνία ή πεδία συντριμιών στην αναζήτηση.");
define("SHOW_EXT_OPTIONS2","Εμφάνιση περισσότερων επιλογών για αποικίες, φεγγάρια, αναφορές, σημειώσεις, κατάσταση παίκτη ή διπλωματική κατάσταση.");
define("SHOW_EXT_OPTIONS3","Εμφάνιση περισσότερων επιλογών για ταξινόμηση των αποτελεσμάτων αναζήτησης.");
// new 5.0
define("SHOW_EXTENDED","advanced search");
define("SHOW_MOON_SELECTION","Planet with moon");
define("SHOW_REPORT_SELECTION","Planet with report");
define("SHOW_FILTER_BY","Exclude from the list");
define("SHOW_FILTER_NONE","κανένας");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Show players without score changes within the last few days");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","OGame Galaxytool - Σελίδα Κατάστασης");
define("STATUS_DB_STATUS","Κατάσταση Βάσης Δεδομένων");
define("STATUS_COLOR","Χρώμα");
define("STATUS_AGE1","Εισαγωγή 1 ημέρας.");
define("STATUS_AGE2","Εισαγωγή 2 - 4 ημερών.");
define("STATUS_AGE3","Εισαγωγή 4 - 7 ημερών.");
define("STATUS_AGE4","Εισαγωγή 1 - 2 εβδομάδων.");
define("STATUS_AGE5","Εισαγωγή 2 - 4 εβδομάδων.");
define("STATUS_AGE6","Εισαγωγή παλιότερη απο 1 μήνα!");
define("STATUS_AGE7","Καμία εισαγωγή διαθέσιμη.");
define("STATUS_ON","στις");
define("STYLES_COLOR1","Χρώμα 1");
define("STYLES_COLOR2","Χρώμα 2");
define("STYLES_COLOR3","Χρώμα 3");
define("STYLES_COLOR4","Χρώμα 4");
define("STYLES_COLOR5","Χρώμα 5");
define("STYLES_COLOR6","Χρώμα 6");
define("STYLES_COLOR7","Χρώμα 7");
// 4.8
define("STATUS_DB_LEGEND","Ήρωας");
define("STATUS_GALAXY","Επισκόπηση Γαλαξία");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","Διαχείρηση Χρηστών");
define("USER_NAMES","Χρήστης");
define("USER_ERROR","Λάθος");
define("USER_NEWUSER","Νέος Χρήστης");
define("USER_OPTIONS","Επιλογές");
define("USER_USERNAME","Όνομα Χρήστη");
define("USER_PASSWORD","Κωδικός");
define("USER_PASSWORD_CONFIRM","Επαλήθευση Κωδικού");
define("USER_GALAXY","Γαλαξίας");
define("USER_SEARCH","Αναζήτηση");
define("USER_INSERT","Εισαγωγή");
define("USER_DELETE","Διαγραφή");
define("USER_DELETE_ENTRY","Θέλετε να διαγράψετε τον χρήστη: ");
define("USER_STATUS","Προβολή κατάστασης");
define("USER_STYLES","Τροποποίηση διάταξης");
define("USER_SUBMIT","Υποβολή");
define("USER_RESET","Reset");
define("USER_YES","Ναί");
define("USER_NO","Όχι");
define("USER_STYLEPATH","Διαδρομή του styles.css");
define("USER_PROBES","Προβολή/Υποβολή Κατασκοπευτικής Αναφοράς");
define("USER_EMAIL","Email");
define("USER_ERROR1","Λάθος κωδικός ή άκυρο email.");
define("USER_ERROR2","’κυρο Email.");
define("USER_INGAME","Όνομα στο παιχνίδι");
define("USER_ALLYTAG","Tag Συμμαχίας");
define("USER_ALLYHISTORY","Προβολή/Υποβολή Ιστορικού Συμμαχίας");
define("USER_DIPLOMATIC","Αλλαγή Διπλοματικής Κατάστασης");
define("USER_STATSPAGE","Συνολικός αριθμός καταχωρήσεων στη σελίδα στατιστικών");
define("USER_LINKS","Σύνδεσμοι");
define("USER_LINKS2","Διάταξη:<br>text;url<br>text2;url2<br>text3;url3");
define("USER_EXPORT_TITLE","Εξαγωγή Χρωμάτων (BB Codes)");
define("USER_BB_COORDINATES","Συντεταγμένες");
define("USER_BB_MOON","Φεγγάρι");
define("USER_BB_DEBRIS","Πεδίο Συντρημιών");
define("USER_BB_ALLY","Όνομα Συμμαχίας");
define("USER_BB_ALLYDETAILS","Λεπτομέρειες Συμμαχίας");
define("USER_BB_PLAYERNAME","Όνομα Πάικτη");
define("USER_BB_BANNED","τιμορημένος");
define("USER_BB_VACATION","κατάσταση διακοπών");
define("USER_BB_NOOB","νέος παίκτης");
define("USER_BB_INACTIVE","ανενεργός");
define("USER_BB_LONGINACTIVE","ανενεργός για πολύ καιρό");
// new with 4.7
define("USER_DELETION","Διέγραψε");
define("USER_FLEETINFO",MENU_FLEET_MOVEMENTS);
define("USER_ACTIVITIES","Δραστηριότητες Παίκτη");
define("USER_MAINTENANCE","Συντήρηση Galaxytool");
define("USER_MANAGEMENT",MENU_USEROPTIONS);
define("USER_DELETE_MY_COMBAT_REPORTS","Διέγραψε τις αναφορές μάχης");
define("USER_DELETE_MY_MESSAGES","Διέγραψε τα μηνύματά μου");
define("USER_DELETE_MY_FLEETMOVES","Διέγραψε τις κινήσεις στόλου μου");
// 4.8
define("USER_DELETE_MY_COMBAT_REPORTS_LIMITED","Διαγραφή των δικών μου αναφορών μάχης, παλιοτέρων από &1 ημερών");
define("USER_DELETE_MY_MESSAGES_LIMITED","Διαγραφή των δικών μου μυνημάτων, παλιοτέρων από &1 ημερών");
define("USER_TABLE_ENTRIES","Αριθμός αποτελεσμάτων αναζήτησης ανά σελίδα");
// 5.0
define("USER_EXISTS","User already exists");
define("USER_BB_OUTLAW","Outlaw");
define("USER_INVALID_URL","URL &1 seems to be invalid - URL will be ignored");

/*********************************************************************
* galaxyview.php
*********************************************************************/
define("VIEW_TITLE","OGame Galaxytool - Λεπτομέρειες");
define("VIEW_NODATA","Χωρίς στοιχεία.");
define("VIEW_GALAXY","Γαλαξίας");
define("VIEW_SYSTEM","Ηλιακό σύστημα");
define("VIEW_POSITION","Θέση");
define("VIEW_PLANET","Πλανήτης");
define("VIEW_MOON","Φεγγάρι");
define("VIEW_TF","DF");
define("VIEW_PLAYER","Πάικτης");
define("VIEW_PLAYER_ADD","(βαθμολογία/ Κατάσταση)");
define("VIEW_ALLY","Συμμαχία");
define("VIEW_ALLY_ADD","(Βαθμολογία / Μέλος)");
define("VIEW_METAL","M");
define("VIEW_CRYSTAL","C");
define("VIEW_COLONISED","Κατοικημένοι πλανήτες");
define("VIEW_UKMOONSIZE","αγνωστο");
define("VIEW_BACK","πίσω");
define("VIEW_NOTICE","Σημειώσεις");
define("VIEW_REPORTS","Αναφορές");
define("VIEW_MOONPHALANX","Τα παρακάτω φεγγάρια μπορούν να σαρώσουν αυτό το σύστημα");
define("VIEW_NOMOONS","Δεν βρέθηκαν φεγγάρια");
define("VIEW_IRAKS","Ο παρακάτω πλανήτης μπορεί να φτάσει αυτό το σύστημα με Διαπλανητικούς πυραύλους");
define("VIEW_NOIRAKS","Δέν βρέθηκαν Διαπλανητικοί Πύραυλοι");
// 4.0
define("VIEW_MOON_DESTROY_CHANCE","Πιθανότητα για καταστροφή φεγγαριού");
define("VIEW_CHANCE_WITH_ONE","Πιθανότητα με ένα Deathstar");
define("VIEW_CHANCE_WITH_N","Πιθανότητα με ");
define("VIEW_DEATH_STARS","Deathstars");
define("VIEW_DS_DESTROY_CHANCE","Πιθανότητα να χαθεί το(τα) Death star(s)");
define("VIEW_TOP","Top");
// new 4.3.5
define("VIEW_GO","go");
// new 5.0
define("VIEW_DIAMETER","Diameter");

/*********************************************************************
* change_password.php
**********************************************************************/
define("PW_TITLE","OGame Galaxytool - αλλαγή κωδικού");
define("OLD_PASSWORD","παλιός κωδικός");
define("NEW_PASSWORD","νέος κωδικός");
define("CONFIRM_NEW_PASSWORD","επαλήθευση κωδικού");
define("PW_MISMATCH","Ο κωδικός δέν είναι ίδιος!");
define("PW_ERROR","Ο παλιός κωδικός δέν είναι σωστός!");
define("UPDATE_DONE","επιτυχήςενημέρωση.");
// new 4.2
define("TIMEZONE_OFFSET","Αντιστάθμιση ζώνης ώρας στον σερβερ");
// new 4.3
define("DELETE_ACCOUNT","Διέγραψε αυτόν το λογαριασμό Galaxytool");
define("DELETE_ACCOUNT_SAFETY_REQUEST","Θέλεις πραγματικά να διαγράψεις αυτόν το λογαριασμό Galaxytool?");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","Εγκρίσεις");
define("CH_PASSWD_ADMIN","Διαχείριση");
// new 4.7
define("TIMEZONE_OGAME_OFFSET","Αντιστάθμιση ζώνης ώρας στον OGame σερβερ");
// new 4.8
define("CH_PASSWD_USER_LANGUAGE","Αλαγή σε αυτή την γλώσσα μετά απο την σύνδεση");
define("CH_PASSWD_USER_LANGUAGE_NO_CHANGE","Καμία αλλαγή");
define("CH_PASSWD_EXPAND","Διευρυμένο");
define("CH_PASSWD_COLLAPSE","Ανεπτυγμένο");
define("CH_PASSWD_HIDDEN","Κρυφό");
define("CH_PASSWD_GETTING_STARTED","Εμφάνιση Ξεκινώντας μετά την σύνδεση");
define("CH_PASSWD_PLUGIN","Εμφάνιση πληροφορίες Plugin μετά απο την σύνδεση");

/*********************************************************************
* notices.php
**********************************************************************/
define("NOTICE_TITLE","OGame Galaxytool - Σημειώσεις");
define("NOTICE_HEADER","διόρθωση σημείωσης");
define("NOTICE_HEADER2","Διόρθωση των δικών μου σημειώσεων");
define("NOTICE_PUBLIC","Ανοιχτές σε άλλους ?");
define("NOTICE_YES","ναι");
define("NOTICE_NO","όχι");
define("NOTICE_TEXT","Κείμενο σημείωσης");
define("NOTICE_SAVE","Σώσιμο");
define("NOTICE_DELETED","Η Καταχώρηση διαγράφηκε");
define("NOTICE_SAVED","Η Καταχώρηση σώθηκε.");
define("NOTICE_RESULTS","Όλα τα αποτελέσματα");
define("NOTICE_USER","Χρήστης");
define("NOTICE_DATE","Ημερομηνία");
define("NOTICE_EDIT","Διόρθωση");
define("NOTICE_DELETE","Διαγραφή");
define("NOTICE_NEW","Δημιουργία καταχώρησης");
define("NOTICE_NOTPUBLIC","Σημείωση όχι ανοιχτη σε όλους.");
define("NOTICE_ALL","όλοι");
define("NOTICE_NONE",SHOW_FILTER_NONE);
define("NOTICE_SEARCH","Αναζήτηση στις Σημειώσεις");
define("NOTICE_SEARCH_SHORT","Αναζήτηση");
define("NOTICE_HITS","Hits");
define("NOTICE_SHOWRESULTS","hits ανα σελίδα");
define("NOTICE_OF","του");
define("NOTICE_NOTHING","Δέν βρέθηκε καταχώρηση");
// 4.0
define("NOTICE_CHARS","Χαρακτήρες");
define("NOTICE_PLAYERNAME","Παίκτης");
define("NOTICE_SHOWALL","Προβολή όλων των σημειώσεων");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","OGame Galaxytool - Κατασκοπευτικές Αναφορές");
define("REPORTS_RESOURCES","Πόροι");
define("REPORTS_FLEET","Στόλοι");
define("REPORTS_DEFENCE","’μυνα");
define("REPORTS_BUILDINGS","Κτίρια");
define("REPORTS_TECHNOLOGY","Έρευνα");
define("REPORTS_MOON","Φεγγάρι");
define("REPORTS_SEARCH","Αναζήτηση στις κατασκοπευτικές αναφορές");
define("REPORTS_SEARCH_SHORT","Αναζήτηση");
define("REPORTS_HITS","Hits");
define("REPORTS_NOTHING","Δέν βρέθηκε εισαγωγή");
define("REPORTS_ADDRESS","Διεύθυνση");
define("REPORTS_CURRENTNESS","Currentness");
define("REPORTS_PLAYERNAME","Όνομα Παίκτη");
define("REPORTS_ALLY","Συμμαχία");
define("REPORTS_VIEW","εμφάνιση Αναφοράς");
define("REPORTS_SEARCH_IN","Αναζήτηση στον Γαλαξία");
define("REPORTS_FROM_SYSTEM","απο το Σύστημα");
define("REPORTS_TO","έως");
define("REPORTS_DELETE","διαγραφή");
define("REPORTS_DELETED","Η εισαγωγή διαγράφηκε");
define("REPORTS_RESULTS","hits ανα σελίδα");
define("REPORTS_OF","του");
define("REPORTS_DATE","Ημερομηνία");
define("REPORTS_DATE_0","χωρίς κατάσταση");
define("REPORTS_DATE_1","παλιότερο απο");
define("REPORTS_DATE_2","νεότερο απο");
define("REPORTS_NOTICES","Σημειώσεις");
define("REPORTS_AT_LEAST_RESOURCES","Πόροι (το λιγότερο)");
define("REPORTS_SEARCH_EXTENDED","εκτεταμένη αναζήτηση");
define("REPORTS_FLEET_RESIS","Στόλος- σκόρ");
define("REPORTS_DEFENCE_RESIS","’μυνα- σκόρ");
define("REPORTS_ALL_RESIS","πρόσθεση σκόρ");
define("REPORTS_TECHS","Τεχνολογία");
define("REPORTS_UNKNOWN_ENTRIES","άγνωστες εισαγωγές");
define("REPORTS_PARTLY_INSERTED","εν μέρει εισαγώμενες");
define("REPORTS_FOR_ALL_RES","για όλους τους πόρους");
define("REPORTS_FOR_TF","για το πεδίο συντρημιών");
define("REPORTS_KT","Μικρά Μεταγωγικά");
define("REPORTS_GT","Μεγάλα Μεταγωγικά");
define("REPORTS_SS","Καταδιωκτικά");
define("REPORTS_REC","Ανακυκλωτής");
define("REPORTS_RAIDABLE","Μόνο στόχοι για επιδρομή");
define("REPORTS_ALL_RESOURCES","όλοι οι Ππόροι");
// 4.0
define("REPORTS_STUFF","Διάφορα");
define("REPORTS_SPEEDSIM","Εξομοίωση με το Speedsim");
define("REPORTS_DRAGOSIM","Εξομοίωση με το Dragosim");
define("REPORTS_STATUS","Κατάσταση");
define("REPORTS_ERROR","Συνέβη ένα λάθος");
// 4.2
define("REPORTS_OWN_REPORTS","Μονο οι αναφορές μου");
// 4.3.3
define("REPORTS_UPLOAD_BY","Αναφορά φορτώθηκε από");
// 4.4
define("REPORTS_DEPTH","Βάθος Αναφοράς");
define("REPORTS_FLEET_SCORE","Σκορ Στόλου");
define("REPORTS_DEFENCE_SCORE","Σκορ Άμυνας");
// 5.0
define("REPORTS_HOURS","hours");
define("REPORTS_MAX_RESULTS_HIT","Your query returned more than &1 hits. Only the first &1 results are show. Please adjust your search request to get less results.");
define("REPORTS_OSIMULATE","Simulate with OSimulate");
define("REPORTS_SHOW_ONLY","Show only");
define("REPORTS_SHOW_PLANETS","Πλανήτες");
define("REPORTS_SHOW_MOONS","Φεγγάρια");
define("REPORTS_OWNER","Reports owned by");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","OGame Galaxytool - Στατιστικά");
define("STATS_TBLHEAD","Στατιστικά");
define("STATS_RANK","Βαθμολογία");
define("STATS_PLAYERNAME","Όνομα Παίκτη");
define("STATS_ALLYNAME","Tag Συμμαχίας");
define("STATS_SCORE","Σκόρ");
define("STATS_FLEET","Στόλος");
define("STATS_RESEARCH","Έρευνα");
define("STATS_MEMBERS","Μέλη");
define("STATS_STATUS","Κατάσταση");
define("STATS_NOTHING","χωρίς Κατάσταση");
define("STATS_NAP","NAP");
define("STATS_ALLIED","Σύμμαχοι");
define("STATS_WAR","Σε πόλεμο");
define("STATS_BOYCOTT","Μποϊκοτάζ");
define("STATS_NEUTRAL","Αδιάφοροι");
define("STATS_OWN","Δική μου Συμμαχία");
define("STATS_WING","Wing");
define("STATS_UPDATE","Εισαγωγή απο");
define("STATS_PLAYERSTATS","Στατιστικά Παίκτη");
define("STATS_ALLYSTATS","Στατιστικά Συμμαχίας");
// 4.0
define("STATS_DELETE","Θέλετε να διαγράψετε αυτή την καταχώρηση ?");
define("STATS_CONFIRM_DELETE","Θέλετε σίγουρα να διαγραφεί αυτή η εισαγωγή Παίκτη?");
define("STATS_CHANGE_PLAYER_STATUS","Κατάσταση Παίκτη");
define("STATS_CHANGE_ALLIANCE_STATUS","Κατάσταση Συμμαχίας");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","Όλα τα μέλη αυτής της συμμαχίας παίρνουν αυτή την κατάσταση. Όλες οι προηγούμενες καταστάσεις θα διαγραφούν. Ωστόσο μπορείτε να αλλάξετε την κατάσταση κάποιων παικτών αργότερα.");
define("STATS_UNKNOWN","Υπόλοιποι");
define("STATS_DETAILS","Λεπτομέρειες για");
// 4.4
define("STATS_PLAYERSTATUS",SHOW_PLAYER_STATUS);
define("STATS_IGNORE_STATUS",SHOW_PLAYER_STATUS1);
define("STATS_ACTIVE","ενεργός");
define("STATS_INACTIVE",USER_BB_INACTIVE);
define("STATS_BANNED",USER_BB_BANNED);
define("STATS_VACATION",USER_BB_VACATION);
define("STATS_NOOB",USER_BB_NOOB);
// 4.8
define("STATS_YES",SHOW_YES); // reuse SHOW definitions if applicable
define("STATS_NO",SHOW_NO);
define("STATS_SEARCH",USER_SEARCH);
define("STATS_SHOW_GRAPH","Εμφάνισε λεπτομέρειες για την κατανομή Βαθμολογίας");
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
define("REGISTER_REGISTRATE","Εγγραφή");
define("REGISTER_LOGINNAME","Όνομα χρήστη");
define("REGISTER_PASSWORD","Κωδικός");
define("REGISTER_PASSWORD_CONFIRM","Επαλήθευση Κωδικού");
define("REGISTER_EMAIL","Email");
define("REGISTER_INGAME","Όνομα στο παιχνίδι");
define("REGISTER_ALLYTAG","Tag Συμμαχίας");
define("REGISTER_EMAILVERIFICATION","Έλεγχος Email");
define("REGISTER_EMAILTEXT","Παρακαλώ επισκεφθείτε το παρακάτω link για επλάθευσή της εγγραφής σας.");
define("REGISTER_ERROR1","Το όνομα χρήστη χρησιμοποιήται ήδη.");
define("REGISTER_ERROR2","Υπήρξε λάθος κατα την αποστολή του email. Παρακαλώ επικοινωνήστε με τον διαχειριστή.");
define("REGISTER_ERROR3","Υπήρξε λάθος κατα την αποστολή των δεδομένων στην βάση δεδομένων!");
define("REGISTER_INFO1","Ο λογαριασμός σας δημιουργήθηκε επιτυχώς.");
define("REGISTER_INFO2","Παρακαλώ επισκεφθείτε το link στο email σας για επαλήθευση της εγγραφής.");
define("REGISTER_INFO3","Ο λογαριασμός επαληθεύτηκε. Για να μπορείτε να τον χρησιμοποιήσετε πρέπει να ενεργοποιηθεί απο το διαχειριστή.");
define("REGISTER_BUTTON","Πίσω στην αρχική σελίδα");
define("REGISTER_NEW_SUBJECT","Υπάρχει μία νέα εγγραφή χρήστη.");
define("REGISTER_NEW_MAILTEXT","Ένας νέος χρήστης εγγράφηκε.");
// new 4.2
define("REGISTER_BACK","Πίσω στην πρώτη σελίδα");
// new 4.3.5
define("REGISTER_MISSING_FIELDS","Συμπλήρωσε όλα τα απαιτούμενα πεδία");
// new 4.8
define("REGISTER_ERROR4","Διεύθυνση Email address δεν είναι έγκυρη.");
define("REGISTER_ERROR5","Οι κωδικοί δεν ταιριάζουν");
define("REGISTER_PWS","Ισχυρότητα κωδικού");
define("REGISTER_PWS0","Πολύ αδύναμο ");
define("REGISTER_PWS1","Αδύναμο");
define("REGISTER_PWS2","Ικανοποιητικό");
define("REGISTER_PWS3","καλό");
define("REGISTER_PWS4","Εξαιρετικό");
// new 5.0
define("REGISTER_EMAIL_USED","Email Address is already used");

/*********************************************************************
* lost_password.php
**********************************************************************/
define("LOSTPW_TITLE","Χαμένο password");
define("LOSTPW_INFO2","Ένα νέο password στάλθηκε στην διεύθυνση email σας.");
define("LOSTPW_BUTTON1","νέο password");
define("LOSTPW_BUTTON2","Πίσω στην αρχική σελίδα");
define("LOSTPW_LOGINNAME","Όνομα χρήστη");
define("LOSTPW_EMAIL","Email");
define("LOSTPW_ERROR1","Υπήρξε λάθος κατα την αποστολή των δεδομένων στην βάση δεδομένων!");
define("LOSTPW_ERROR2","Δεν βρέθηκε ταιριαστή εισαγωγή !");
define("LOSTPW_ERROR3","Υπήρξε λάθος κατα την αποστολή του email. Παρακαλώ επικοινωνήστε με τον διαχειριστή.");
define("LOSTPW_EMAIL_SUBJECT","Το νέο password που ζητήσατε");
define("LOSTPW_EMAIL_TEXT1","Τα νέα στοιχεία εισόδου");
define("LOSTPW_EMAIL_TEXT2","Όνομα χρήστη");
define("LOSTPW_EMAIL_TEXT3","Κωδικός");
// new 5.0
define("LOSTPW_INFO1","You will receive an email to verify your password reset request.");
define("LOSTPW_CONFIRM_RESET_SUBJECT","Lost password?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","Hello,\n\nyou requested a password reset for the Galaxytool. To generate a new password, click the following link:");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","OGame Galaxytool - Πληροφορίες Χρήστη");
define("USERINFO_NAMES","Όλοι οι χρήστες");
define("USERINFO_DETAIL","Λεπτομερείς πληροφορίες για");
define("USERINFO_ERROR1","Κανένας χρήστης με αυτό το ID!");
define("USERINFO_USERNAME","Όνομα χρήστη");
define("USERINFO_INGAME","Όνομα στο παιχνίδι");
define("USERINFO_EMAIL","Email");
define("USERINFO_ALLYTAG","Συμμαχία");
define("USERINFO_STYLEPATH","Skin");
define("USERINFO_STATUS","Κατάσταση");
define("USERINFO_ACTIVATE","Ενεργοποίηση Παίκτη");
define("USERINFO_LOGINS","Συνολικός αριθμός εισόδων");
define("USERINFO_LASTLOGIN","Τελευταία είσοδος");
define("USERINFO_DATA","Πληροφορίες για τα εισαγώμενα συστήματα");
define("USERINFO_NODATA","Αυτός ο χρήστης δέν έχει εισάγει κανένα σύστημα μέχρι στιγμής!");
define("USERINFO_GALAXY","Γαλαξίας");
define("USERINFO_SYSTEMS","Αριθμός Συστημάτων");
define("USERINFO_IP","Διεύθυνση IP");
define("USERINFO_LOGINTIME","Είσοδος");
define("USERINFO_NOLOGIN","Ο παίκτης δέν έχει εισέλθει ποτέ.");
define("USERINFO_LAST_GALAXYUPDATE","Τελευταία εισαγώμενη προβολή Γαλαξία");
define("USERINFO_LAST_PUBLIC_NOTICE","Τελευταία δημόσια σημείωση");
define("USERINFO_LAST_PRIVATE_NOTICE","Τελευταία προσωπική σημείωση");
define("USERINFO_NUMBEROF_PUBLIC_NOTICE","Συνολικός αριθμός δημόσιων σημειώσεων");
define("USERINFO_NUMBEROF_PRIVATE_NOTICE","Συνολικός αριθμός προσωπικών σημειώσεων");
define("USERINFO_ACTIVATED","Ο λογαριασμός ενεργοποιήθηκε");
define("USERINFO_ACTIVATIONTEXT","Ο διαχειριστής ενεργοποίησε το λογαριασμό σας.\n\nΚαλή διασκέδαση!");
// new 4.8
define("USERINFO_LAST_SUBMIT","Τελευταία εισαγωγή δεδομένων");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","OGame Galaxytool - Ιστορικό Συμμαχίας");
define("ALLYHISTORY_TBLHEAD","Περίληψη Ιστορικού");
define("ALLYHISTORY_PLAYERNAME","Όνομα παίκτη");
define("ALLYHISTORY_ALLYNAME","Συμμαχία");
define("ALLYHISTORY_LASTMONTH","Τελευταίος Μήνας"); // changed at 4.0
define("ALLYHISTORY_ALL_DATA","Σύνολο διαθέσιμων πληροφοριών"); // new 4.0
define("ALLYHISTORY_SHOW","προβολή στατιστικών");
define("ALLYHISTORY_TIMESPAN","Διάστημα ημερομηνίας");
define("ALLYHISTORY_PROGESS","Εξέλιξη");
define("ALLYHISTORY_SCORE","Σκόρ");
define("ALLYHISTORY_FSCORE","Σκόρ Στόλου"); // new 4.0
define("ALLYHISTORY_RSCORE","Σκόρ Έρευνας"); // new 4.0
define("ALLYHISTORY_MEMBER","Μέλη"); // new 4.0
define("ALLYHISTORY_NOTHING","δέν βρέθηκαν καταχωρήσεις");
define("ALLYHISTORY_DETAILS","Λεπτομέρειες");
define("ALLYHISTORY_SHOW_ADDRESS","Συντεταγμένες");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","Πληροφορίες Παίκτη");
define("DETAILEDINFO_ALLYINFO_TITLE","Πληροφορίες Συμμαχίας");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","Λεπτομέρεις πληροφορίες για τον παίκτη");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","Λεπτομέρεις πληροφορίες για την συμμαχία");
define("DETAILEDINFO_NO_ALLIANCE","καμία");
define("DETAILEDINFO_SCORE","Στατιστικά Σκόρ");
define("DETAILEDINFO_FLEET","Στατιστικά Στόλου");
define("DETAILEDINFO_RESEARCH","Στατιστικά Έρευνας");
define("DETAILEDINFO_RANK","Βαθμολογία");
define("DETAILEDINFO_POINTS","Σκόρ");
define("DETAILEDINFO_KNOWN_PLANETS","γνωστοί πλανήτες");
define("DETAILEDINFO_MOONS","γνωστά φεγγάρια");
define("DETAILEDINFO_PHALANX_AREA","Πεδίο φάλαγγας");
define("DETAILEDINFO_NO_PHALANX_AREA","δέν βρέθηκε καμία φάλαγγα");
define("DETAILEDINFO_NOTICES","Σημειώσεις");
define("DETAILEDINFO_NO_NOTICES","Δέν βρέθηκαν σημειώσεις");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","προηγούμενες Συμμαχίες");
define("DETAILEDINFO_RESOURCES_PER_HOUR","Πόροι ανα ώρα");
define("DETAILEDINFO_RESOURCES_PER_DAY","Πόροι ανα ημέρα");
define("DETAILEDINFO_RESOURCES_PER_WEEK","Πόροι ανα εβδομάδα");
define("DETAILEDINFO_RESOURCES_PER_MONTH","Πόροι ανα μήνα (30 ημέρες)");
define("DETAILEDINFO_METAL","Μέταλλο");
define("DETAILEDINFO_CRYSTAL","Κρύσταλλο");
define("DETAILEDINFO_DEUTERIUM","Δευτέριο");
define("DETAILEDINFO_UNKNOWN","άγνωστο");
define("DETAILEDINFO_SCORE_DISTRIBUTION","Μοίρασμα σκόρ");
// new 4.2
define("DETAILEDINFO_GENERAL","Λεπτομέρειες");
define("DETAILEDINFO_MEMBERS","Μελος");
define("DETAILEDINFO_GRAPHS","Γραφικά");
define("DETAILEDINFO_RESOURCES","Πόροι");
define("DETAILEDINFO_FLEET_TAB","Στόλος");
define("DETAILEDINFO_TECH","Έρευνα");
define("DETAILEDINFO_FLEET_DETAIL","Ποσοστό / (Μέσος όροςπαικτών) ανάμεσα σε όλες τις διαθέσιμες αναφορές");
define("DETAILEDINFO_TECH_DETAIL"," Μέσος όρος από όλες τις πληροφορίες παικτών");
// new 4.3
define("DETAILEDINFO_PLANET_TAB",REPORTS_SHOW_PLANETS);
define("DETAILEDINFO_MOON_TAB",REPORTS_SHOW_MOONS);
// 4.7
define("DETAILEDINFO_ACTIVITIES","Δραστηριότητες");
define("DETAILEDINFO_NODATA",VIEW_NODATA); // reuse existing translations
define("DETAILEDINFO_ACTIVITY_DESCRIPTION","Δείξε δραστηριότητες &1 συλλέχθηκαν από:");
define("DETAILEDINFO_GALAXYVIEWS","Όψεις Γαλαξία");
define("DETAILEDINFO_SCANS","Δράσεις κατασκοπείας");
define("DETAILEDINFO_MESSAGES","Μηνύματα παίκτη");
define("DETAILEDINFO_COMBATS","Αναφορές Μάχης");
define("DETAILEDINFO_ALLYPAGE","Επισκόπηση Συμμαχίας");
define("DETAILEDINFO_MANUAL","Χειροκίνητες εισαγωγές");
define("DETAILEDINFO_START","Αρχή");
define("DETAILEDINFO_TO","στο");
define("DETAILEDINFO_TODAY","Σήμερα");
define("DETAILEDINFO_DATA_RESTRICTION","περιορίζετε στο:");
define("DETAILEDINFO_WEEKDAY_WEEKEND","Σαββατοκύριακο");
define("DETAILEDINFO_WEEKDAY_WORKINGDAY","Εργάσιμη μέρα");
define("DETAILEDINFO_WEEKDAY_MONDAY","Δευτέρα");
define("DETAILEDINFO_WEEKDAY_TUESDAY","Τρίτη");
define("DETAILEDINFO_WEEKDAY_WEDNESDAY","Τετάρτη");
define("DETAILEDINFO_WEEKDAY_THURSDAY","Πέμπτη");
define("DETAILEDINFO_WEEKDAY_FRIDAY","Παρασκευή");
define("DETAILEDINFO_WEEKDAY_SATURDAY","Σαββάτο");
define("DETAILEDINFO_WEEKDAY_SUNDAY","Κυριακή");
define("DETAILEDINFO_WEEKDAY_SHORTLENGTH",3); // number of characters to shorten week day
define("DETAILEDINFO_PLAYER_CURRENTLY_ACTIVE","Ο παίκτης είναι ενεργός");
define("DETAILEDINFO_PLAYER_MESSAGES","διαθέσιμα μηνύματα παίκτη");
define("DETAILEDINFO_SHOW","δείξε");
define("DETAILEDINFO_NONE","κανένα διαθέσιμο");
define("DETAILEDINFO_ENTER_MANUALLY","Δώστε δραστηριότητες για αυτόν τον παίκτη");
define("DETAILEDINFO_PLAYER_SEEN_ON","Ο παίκτης ήταν ενεργός στις");
define("DETAILEDINFO_INSERT","Τοποθέτησε");
define("DETAILEDINFO_OGAME_SERVERTIMES","Παρακαλώ σημειώστε: Όλες οι ημερομηνίες και οι χρόνοι αναφέρονται στους χρόνους OGame server!");
define("DETAILEDINFO_DAY_VIEW","όψη 24 ωρών");
define("DETAILEDINFO_WEEK_VIEW","εβδομαδιαία όψη");
// new 4.8
define("DETAILEDINFO_HOME_PLANET","Μητρικός Πλανήτης");
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
define("ADMIN_TITLE","Διαχείριση του Galaxytool");
define("ADMIN_DISCLAMER","Προσοχή: Τρέξτε οποιοδήποτε από αυτά τα σκριπτ με δικό σας ρίσκο! Τα περισσότερα από αυτά διαγράφουν δεδομένα.");
define("ADMIN_INCONSISTENCIES","Ασυνέπειες στη βάση δεδομένων");
define("ADMIN_PLANETS","Πλανήτες στη θέση 0 η περισσότερο απο 15");
define("ADMIN_GALAXIES","Διαγράψτε γαλαξίες μεγαλύτερους απο &1 ");
define("ADMIN_PLAYERS","Διαγράψτε παίκτες χωρίς OGame ID παίκτη - οδηγεί σε διπλές εγγραφές παικτών");
define("ADMIN_REPORTS","Διαγράψτε τις αναφορές από πλανήτες που δεν υπάρχουν πλέον");
define("ADMIN_MISC","Διάφορα");
define("ADMIN_RESET","Reset Galaxytool (μόνο οι καταστάσεις παικτών και IP δεν διαγράφονται)");
define("ADMIN_OLD_PLAYERS","Διαγράψτε εγγραφές παικτών μεγαλύτερες από &1 μέρες");
define("ADMIN_OLD_REPORTS","Διαγράψτε αναφορές μεγαλύτερες από &1 μέρες");
define("ADMIN_LOADING","Μην κλείσετε αυτό το παράθυρο ενώ η σελίδα φορτώνει.");
define("ADMIN_STATUS","Θέση των αιτημάτων σας");
define("ADMIN_SELECTION","Τουλάχιστον μια είσοδος πρέπει να επιλεχτεί");
define("ADMIN_SAFETY","Είστε βέβαιοι ότι θέλετε να τρέξετε αυτό(α) το(α) script(s) ?");
define("ADMIN_DONE","έγινε");
define("ADMIN_NOTBD","τίποτα να γίνει");
// new 4.3
define("ADMIN_OLD_GALAXIES","Διαγράψτε ενημερώσεις γαλαξία που είναι μεγαλύτερες από &1 μέρες");
define("ADMIN_UNUSED_PLAYERS","Διαγράψτε παίκτες που δεν εμφανίζονται σε κανένα γαλαξία");
// new 4.7
define("ADMIN_OLD_ACTIVITIES","Διαγράψτε δραστηριότητες παίκτη μεγαλύτερες από &1 μέρες");
// new 4.8
define("ADMIN_OLD_COMBATS","Αφαίρεση αναφορών μάχης παλαιότερες από &1 ημέρες");
define("ADMIN_OLD_INGAME_MSG","Αφαίρεση μυνήματα παιχνιδιού παλαιότερα από &1 ημέρες");
// new 5.0
define("ADMIN_OGAME_API","Load public data from OGame into the Galaxytool");
define("ADMIN_OGAME_ALL_DATA",ALLYHISTORY_ALL_DATA);
define("ADMIN_OGAME_GALAXY_DATA",MENU_GALAXYVIEW);
define("ADMIN_OGAME_STATISTICS_DATA",MENU_STATISTICS);

// new 4.3.5
/*********************************************************************
* errorpage.php
**********************************************************************/
define("ERRORPAGE_PAGEFORWARD","Πατήστε εδώ εάν ο φυλλομετρητής δεν υποστηρίζει page forwarding");
define("ERRORPAGE_PERMISSION_DENIED","Δεν έχετε άδεια να εισέλθετε σε αυτήν την σελίδα. Κάντε κλίκ για να επιστρέψετε.");

// new 4.7
/*********************************************************************
* fleet_movements.php
**********************************************************************/
define("FLEETS_TITLE","OGame Galaxytool - Κινήσεις Στόλου");
define("FLEETS_ACTUAL_FLEETS","Τρέχων κινήσεις στόλου");
define("FLEETS_YES",SHOW_YES);
define("FLEETS_NO",SHOW_NO);
define("FLEETS_DETAILS","Λεπτομέρειες");
define("FLEETS_MISSION_EXPEDITION","Αποστολή");
define("FLEETS_MISSION_COLONIZATION","Αποίκιση");
define("FLEETS_MISSION_RECYCLE","Ανακύκλωση Πεδίου Συντριμιών");
define("FLEETS_MISSION_TRANSPORT","Μεταφορά");
define("FLEETS_MISSION_DEPLOYMENT","Παράταξη");
define("FLEETS_MISSION_ESPIONAGE","Κατασκοπεία");
define("FLEETS_MISSION_ACS_DEFEND","Άμυνα ACS");
define("FLEETS_MISSION_ATTACK","Επίθεση");
define("FLEETS_MISSION_ACS_ATTACK","Επίθεση ACS");
define("FLEETS_MISSION_MOON_DESTRUCTION","Καταστροφή Φεγγαριού");
define("FLEETS_MISSION_MISSILE_ATTACK","Πυραυλική Επίθεση");
define("FLEETS_NO_DATA","Δεν βρέθηκαν δεδομένα");
// new 5.0
define("FLEETS_FLEET","Fleet");
define("FLEETS_ALL_FLEETS","Show all fleet movements");

/*********************************************************************
* parser_combat_reports.inc.php
**********************************************************************/
define("COMBAT_REPORT_OUDATED_GALAXYVIEW","Τα δεδομένα του Γαλαξία ειναι ετεροχρονισμένα. Παρακαλώ επισκεφτείτε την προέλευση της μάχης και συντεταγμένες στόχου πρώτα!");

/*********************************************************************
* messages.php
**********************************************************************/
define("MESSAGES_TITLE","OGame Galaxytool - OGame Μυνήματα");
define("MESSAGES_PLAYERNAME","Όνομα Παίκτη");
define("MESSAGES_SUBJECT","Θέμα");
define("MESSAGES_DATE","Ημερομηνία");
define("MESSAGES_FILTER","Φίλτρο");
define("MESSAGES_DELETE","Διαγραφή μυνήματος");
define("MESSAGES_PUBLISH_DETAIL","Δημοσιοποίηση μυνήματος προσθέτοντας το περιεχόμενο του μυνήματος στο κείμενο αναφοράς του παίκτη.");
define("MESSAGES_PUBLISH_HEADER","&sender έστειλε ένα μύνημα στον &recipient στίς &date:\n\n &message"); // &sender, &recipient, &date, &message replaced at runtime
define("MESSAGES_PLAYER_FILTER","Μυνήματα για τον παίκτη:");
// new 5.0
define("MESSAGES_CONTENT","Content");

/*********************************************************************
* combat_reports.php
**********************************************************************/
define("COMBATS_TITLE","OGame Galaxytool - Αναφορές μάχης");
define("COMBATS_ATTACKER","Επιτιθέμενος");
define("COMBATS_DEFENDER","Αμυνόμενος");
define("COMBATS_DATE","Ημερομηνία");
define("COMBATS_OWNER","Ιδιοκτήτης");
define("COMBATS_WINNER","Νικητής");
define("COMBATS_COMBATREPORT","Αναφορά Μάχης");
define("COMBATS_COMBAT_AT","Μάχη στο");
define("COMBATS_LOST_UNITS","Απώλειες");
define("COMBATS_LOOT","Λάφυρα");
define("COMBATS_DEBRIS","Πεδίο Συντριμιών");
define("COMBATS_AND","και");
define("COMBATS_PUBLISH","Κάνε αυτή την αναφορά Δημόσια");
define("COMBATS_UNPUBLISH","Απέσυρε την δημόσια αναφορά (γίνεται προσωπική και πάλι)");
define("COMBATS_DELETE","Διαγραφή αναφοράς");
define("COMBATS_CHECK_ALL","Επιλογή Όλων");
define("COMBATS_UNCHECK_ALL","Αποεπιλογή Όλων");
define("COMBATS_WITH_SELECTED","Με τις επιλεγμένες");
define("COMBATS_PUBLIC_REPORTS","Δημόσιες αναφορές");
define("COMBATS_YES",SHOW_YES); // no need for translation!
define("COMBATS_NO",SHOW_NO); // no need for translation!
define("COMBATS_SEARCH_OPTIONS","Ρυθμίσεις Αναζήτησης");
define("COMBATS_SEARCH","Αναζήτηση");
define("COMBATS_RESET","Καθαρισμός");
// 4.8
define("COMBATS_COORDINATES",USER_BB_COORDINATES);
define("COMBATS_INVALID_GALAXY_ENTERED","Εισάγατε Άκυρο Γαλαξία");
define("COMBATS_INVALID_SYSTEM_ENTERED","Εισάγατε Άκυρο Σύστημα");
define("COMBATS_INVALID_PLANET_ENTERED","Εισάγατε Άκυρο Πλανήτη");
define("COMBATS_GALAXY_FROM_TO","Γαλαξίας");
define("COMBATS_SYSTEM_FROM_TO","Σύστημα");
define("COMBATS_PLANET_FROM_TO","Πλανήτης");
define("COMBATS_APPLY",GENERAL_APPLY);
define("COMBATS_COMBAT_SUMMARY","Σύνοψη αναφοράς μάχης");
define("COMBATS_DOWNLOAD_CSV","Κατεβάστε σαν CSV αρχείο");

/*********************************************************************
* report_archive.php
**********************************************************************/
define("REPORT_ARCHIVE_TITLE","Κατάλογος αναφορών");
define("REPORT_ARCHIVE_COORDINATES","Συντεταγμένες");
define("REPORT_ARCHIVE_SCANTIME","Ώρα Σάρωσης");
define("REPORT_ARCHIVE_DELETE","Διαγραφή των καταχωρήσεων");
define("REPORT_ARCHIVE_CONFIRM_DELETE","Είστε σίγουροι ότι θέλετε να διαγράψετε τις καταχωρήσεις?");
define("REPORT_ARCHIVE_GALAXY","Γαλαξίας");
define("REPORT_ARCHIVE_SYSTEM","Σύστημα");
define("REPORT_ARCHIVE_PLANET","Πλανήτης");
define("REPORT_ARCHIVE_MOON","Φεγγάρι");
define("REPORT_ARCHIVE_DETAILS","Λεπτομέρειες");
define("REPORT_ARCHIVE_RESOURCES",DETAILEDINFO_RESOURCES);
define("REPORT_ARCHIVE_HEADER_RESOURCES",REPORTS_RESOURCES);
define("REPORT_ARCHIVE_DETAILS_FOR","Κατάλογος αναφορών για &1 [&2] (&3)"); // &1 = planetname; &2 = coordinates; &3 = playername
define("REPORT_ARCHIVE_FLEET_CARGO","Χωριτικότητα φορτίου του στόλου");
define("REPORT_ARCHIVE_IRAK_RANGE","Βεληνεκές Διαγαλαξιακών Πυραύλων");
define("REPORT_ARCHIVE_CHART_TYPE","Τύπος Γραφήματος");

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