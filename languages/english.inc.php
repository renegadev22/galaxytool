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
define("L_USERNAME","Username");
define("L_PASSWORD","Password");
define("L_LOGINFAILURE","Username or password was wrong or your account is not activated yet.");
define("L_TOKENFAILURE","Your logon key is wrong or your account is not activated yet.");
define("L_LOGINTEXT","Please login.");
define("L_LANGUAGE","Available languages:");
define("L_TIMEOUT","Session timed out!");
define("L_REGISTER","Register");
define("L_PWLOST","lost Password");
define("INDEX_TITLE","OGame Galaxietool - Overview");
define("INDEX_INFO","Information");
define("INDEX_ENTRIES","Number of all systems");
define("INDEX_ENTRIES_LASTWEEK","New systems last week");
define("INDEX_ENTRIES_TO_OLD","Systems older than one month");
define("INDEX_REGISTERED_USERS","Registered users");
define("INDEX_PAGEFORWARD","If your browser does not support page forwarding, please click here.");
define("INDEX_NOTICES","Notices");
define("INDEX_PLAYERS","Player statistics");
define("INDEX_ALLIES","Ally statistics");
define("INDEX_REPORTS","Espionage Reports");
define("INDEX_VERSION","Latest version for download");
define("INDEX_LATEST_VERSION","No newer version available");
define("INDEX_SHOUTBOX","Shoutbox");
define("INDEX_NOENTRY","No shouts yet");
define("INDEX_COMMENT","Your Shout");
define("INDEX_INSERT","Insert");
define("INDEX_UMOD","Player in Vacation mode");
define("INDEX_NO_MOONS","Number of moons");
define("INDEX_NO_EMPTY_SYSTEMS","Number of empty systems");
define("INDEX_NO_FULL_SYSTEMS","Number of completely filled systems");
define("INDEX_NO_TARGETS","Number of possible targets");
// 4.0
define("INDEX_USERINFO","Usernumbers");
define("INDEX_ONLINE","Now online");
define("INDEX_TODAY","Today online");
define("INDEX_ALL","Overall number of logins");
// 4.3.7
define("GENERAL_LOAD_FORM","Load form data");
define("GENERAL_SAVE_FORM","Save form data");
define("GENERAL_SAVE_AS_TEXT","Save as");
define("GENERAL_SAVE","Save");
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
define("GENERAL_OPEN_IN_NEW_WINDOW","Open Link in New Window");
// 5.1
define("GENERAL_UNIT_OF_MEASURE_DAYS","Days");

/*********************************************************************/
/***************************** internal ******************************/
/*********************************************************************/
// index.php
define("PROGRAM_NAME","OGame Galaxytool");
define("SHORTNAME","Galaxytool");
define("BACK_INDEX","Back to main page");
define("UNIVERSE","Universe");

// search
define("MENU_INFO_LINKS","Information");
define("MENU_PAGE","Overview");
define("MENU_DB_SEARCH","Search in Database");
define("MENU_DB_NOTICES","Search in Notices");
define("MENU_DB_REPORTS","Search in Reports");
define("MENU_GALAXYVIEW","View Galaxy");
define("MENU_STATISTICS","Statistics");
define("MENU_ALLYHISTORY","Historical Overview");
// 4.7
define("MENU_FLEET_MOVEMENTS","Fleet movements");
define("MENU_COMBAT_REPORTS","Combat reports");
define("MENU_MESSAGES","Ingame messages");

// insert / change
define("MENU_OPTION_LINKS","Options");
define("MENU_DB_REFRESH","Insert in Database");
define("MENU_NOTICES","Notices");
define("MENU_DB_STATUS","Status of Database");
define("MENU_USEROPTIONS","User management");
define("MENU_USEROPTIONS2","User options");
define("MENU_USEROPTIONS3","User information");
// 4.2
define("MENU_ADMIN","Administration");
// 4.3.3
define("MENU_LOGOUT","Logout");

// Stuff
define("MENU_STUFF","Miscellaneous");
define("MENU_FORUM_THREAD","Developer forum");
define("MENU_DOWNLOADPAGE","Download page");
define("MENU_LANGUAGE","Language");
define("MENU_HELP","Help");
// 4.0
define("MENU_TOOLOPTIONS","Galaxytool Options");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1"," was inserted into database.");
define("PARSER_ERROR1","Error while trying to insert the following coordinates:");
define("PARSER_ERROR2","Could not find the database!");
define("PARSER_ERROR3","Could not find the database server!");
define("PARSER_WRONG_UNIVERSE","Wrong universe - actual: \"&1\"  expected: \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","OGame Galaxytool - Searchpage");
define("SHOW_SEARCH","Search in Database");
define("SHOW_ALLYSYMBOL","Alliance Tag");
define("SHOW_PLAYERNAME","Player Name");
define("SHOW_MOONS","Only Planets with moon");
define("SHOW_NOTICES","Only planets with notices");
define("SHOW_COLONIES","Only Planets for colonization");
define("SHOW_YES","Yes");
define("SHOW_NO","No");
define("SHOW_SEARCHRANGE","Range");
define("SHOW_SEARCH_IN","Search in galaxy");
define("SHOW_FROM_SYSTEM","from solar system");
define("SHOW_FROM_PLANET","from planet Position");
define("SHOW_TO","to");
define("SHOW_DESCRIPTION","You can use wildcards * for player or alliance names. So you can find all players with &quot;name&quot; in their name.<br />Only fill those fields you want to specify.");
define("SHOW_SORT_BY","Arrange by");
define("SHOW_GALASYSTEM","Galaxy/System");
define("SHOW_ALLYNAME","Alliance Name");
define("SHOW_SEARCHBUTTON","Search");
define("SHOW_ADDRESS","Address");
define("SHOW_ALLYSORT","Alliance");
define("SHOW_PLANET","Planet Name");
define("SHOW_STATUS","Status");
define("SHOW_CURRENTNESS","Last Updated");
define("SHOW_PLAYER_STATUS","Player Status");
define("SHOW_PLAYER_STATUS1","all");
define("SHOW_PLAYER_STATUS2","possible targets");
define("SHOW_PLAYER_STATUS3","inactive");
define("SHOW_HITS","Hits");
define("SHOW_OF","of");
define("SHOW_ASC","ascending");
define("SHOW_DESC","descending");
define("SHOW_RESULTS","hits per page");
define("SHOW_MOON","Moon");
define("SHOW_UKMOONSIZE","unknown");
define("SHOW_DF","DF");
define("SHOW_DF_LONG","Debris field");
define("SHOW_METAL","M");
define("SHOW_METAL_LONG","Metal");
define("SHOW_CRYSTAL","C");
define("SHOW_CRYSTAL_LONG","Crystal");
define("SHOW_BOTH","both together");
define("SHOW_AT_LEAST","(at least)");
define("SHOW_DATE","Date");
define("SHOW_DATE_0","never mind");
define("SHOW_DATE_1","older than");
define("SHOW_DATE_2","newer than");
define("SHOW_RANK","Rank");
define("SHOW_FRANK","Fleet rank");
define("SHOW_MEMBERS","Members");
define("SHOW_NOTRANKED","No data available");
define("SHOW_NOTICERES","Notices");
define("SHOW_REPORTS","Only Planets with reports");
define("SHOW_REPORTS_SHORT","Reports");
define("SHOW_NOTHING","No Entry found.");
define("SHOW_ALLIANCE_STATUS","Alliance status");
define("SHOW_NO_STATUS","no Status");
define("SHOW_NAP","NAP");
define("SHOW_ALLIED","Allied");
define("SHOW_WAR","War");
define("SHOW_BOYCOTT","Boycott");
define("SHOW_NEUTRAL","Neutral");
define("SHOW_OWN","Own Alliance");
define("SHOW_WING","Wing");
// obsolete with 5.0
define("SHOW_EXT_OPTIONS1","Show more search options for range, rank, date or debrisfield search.");
define("SHOW_EXT_OPTIONS2","Show more search options for colonies, moons, reports, notices, playerstatus or diplomatic status.");
define("SHOW_EXT_OPTIONS3","Show more search options for sorting of search results.");
// new 5.0
define("SHOW_EXTENDED","advanced search");
define("SHOW_MOON_SELECTION","Planet with moon");
define("SHOW_REPORT_SELECTION","Planet with report");
define("SHOW_FILTER_BY","Exclude from the list");
define("SHOW_FILTER_NONE","none");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Show players without score changes within the last few days");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","OGame Galaxytool - Statuspage");
define("STATUS_DB_STATUS","Status of Database");
define("STATUS_COLOR","Color");
define("STATUS_AGE1","Entry 1 day old.");
define("STATUS_AGE2","Entry 2 - 4 days old.");
define("STATUS_AGE3","Entry 4 - 7 days old.");
define("STATUS_AGE4","Entry 1 - 2 weeks old.");
define("STATUS_AGE5","Entry 2 - 4 weeks old.");
define("STATUS_AGE6","Entry older than 1 month!");
define("STATUS_AGE7","No entry available.");
define("STATUS_ON","on");
define("STYLES_COLOR1","Color1");
define("STYLES_COLOR2","Color2");
define("STYLES_COLOR3","Color3");
define("STYLES_COLOR4","Color4");
define("STYLES_COLOR5","Color5");
define("STYLES_COLOR6","Color6");
define("STYLES_COLOR7","Color7");
// 4.8
define("STATUS_DB_LEGEND","Legend");
define("STATUS_GALAXY","Galaxy Overview");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","User Management");
define("USER_NAMES","User");
define("USER_ERROR","Error");
define("USER_NEWUSER","New user");
define("USER_OPTIONS","Options");
define("USER_USERNAME","Username");
define("USER_PASSWORD","Password");
define("USER_PASSWORD_CONFIRM","Confirm password");
define("USER_GALAXY","Galaxy");
define("USER_SEARCH","Search");
define("USER_INSERT","Insert");
define("USER_DELETE","Delete");
define("USER_DELETE_ENTRY","Do you want to delete user ");
define("USER_STATUS","View stats");
define("USER_STYLES","Modify layout");
define("USER_SUBMIT","Submit");
define("USER_RESET","Reset");
define("USER_YES","Yes");
define("USER_NO","No");
define("USER_STYLEPATH","Path to styles.css");
define("USER_PROBES","View/Submit Espionage Reports");
define("USER_EMAIL","Email");
define("USER_ERROR1","Password wrong or email invalid.");
define("USER_ERROR2","Email invalid.");
define("USER_INGAME","In-game Name");
define("USER_ALLYTAG","Alliance Tag");
define("USER_ALLYHISTORY","Historical Overview");
define("USER_DIPLOMATIC","Change Diplomatic Status");
define("USER_STATSPAGE","Number of entries on statistic page"); // deprecated with 4.8
define("USER_LINKS","Links");
define("USER_LINKS2","Format:<br>text;url<br>text2;url2<br>text3;url3");
define("USER_EXPORT_TITLE","Export colors (BB Codes)");
define("USER_BB_COORDINATES","Coordinates");
define("USER_BB_MOON","Moon");
define("USER_BB_DEBRIS","Debris field");
define("USER_BB_ALLY","Alliance name");
define("USER_BB_ALLYDETAILS","Alliance details");
define("USER_BB_PLAYERNAME","Player name");
define("USER_BB_BANNED","banned");
define("USER_BB_VACATION","vacation mode");
define("USER_BB_NOOB","noob");
define("USER_BB_INACTIVE","Inactive");
define("USER_BB_LONGINACTIVE","Long inactive");
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
define("VIEW_TITLE","OGame Galaxytool - Galaxyview");
define("VIEW_NODATA","No data available.");
define("VIEW_GALAXY","Galaxy");
define("VIEW_SYSTEM","Solar system");
define("VIEW_POSITION","Pos.");
define("VIEW_PLANET","Planet");
define("VIEW_MOON","Moon");
define("VIEW_TF","DF");
define("VIEW_PLAYER","Player");
define("VIEW_PLAYER_ADD","(Rank / Status)");
define("VIEW_ALLY","Alliance");
define("VIEW_ALLY_ADD","(Rank / Member)");
define("VIEW_METAL","M");
define("VIEW_CRYSTAL","C");
define("VIEW_COLONISED","Planets inhabited");
define("VIEW_UKMOONSIZE","unknown");
define("VIEW_BACK","back");
define("VIEW_NOTICE","Notices");
define("VIEW_REPORTS","Reports");
define("VIEW_MOONPHALANX","The following moons can scan this system:");
define("VIEW_NOMOONS","No Moons found.");
define("VIEW_IRAKS","The following planet can reach this system with Interplanetary Missiles:");
define("VIEW_NOIRAKS","No Interplanetary Missiles found.");
// 4.0
define("VIEW_MOON_DESTROY_CHANCE","Chance to destroy a moon");
define("VIEW_CHANCE_WITH_ONE","Chance with one death star");
define("VIEW_CHANCE_WITH_N","Chance with ");
define("VIEW_DEATH_STARS","death stars");
define("VIEW_DS_DESTROY_CHANCE","Chance to loose the death star(s)");
define("VIEW_TOP","Top");
// new 4.3.5
define("VIEW_GO","go");
// new 5.0
define("VIEW_DIAMETER","Diameter");

/*********************************************************************
* change_password.php
**********************************************************************/
define("PW_TITLE","OGame Galaxytool - change password");
define("OLD_PASSWORD","old password");
define("NEW_PASSWORD","new password");
define("CONFIRM_NEW_PASSWORD","confirm new password");
define("PW_MISMATCH","Passwords did not match!");
define("PW_ERROR","Old password was not correct!");
define("UPDATE_DONE","Update successful.");
// new 4.2
define("TIMEZONE_OFFSET","Timezone offset to server");
// new 4.3
define("DELETE_ACCOUNT","Delete this Galaxytool account");
define("DELETE_ACCOUNT_SAFETY_REQUEST","Do you really want to delete this Galaxytool account?");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","Authorizations");
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
define("NOTICE_TITLE","OGame Galaxytool - Notices");
define("NOTICE_HEADER","edit notice");
define("NOTICE_HEADER2","Edit own notices");
define("NOTICE_PUBLIC","Accessible for others ?");
define("NOTICE_YES","yes");
define("NOTICE_NO","no");
define("NOTICE_TEXT","Notice Text");
define("NOTICE_SAVE","Save");
define("NOTICE_DELETED","Entry deleted");
define("NOTICE_SAVED","Entry saved.");
define("NOTICE_RESULTS","All results");
define("NOTICE_USER","User");
define("NOTICE_DATE","Date");
define("NOTICE_EDIT","Edit");
define("NOTICE_DELETE","Delete");
define("NOTICE_NEW","Create an own entry");
define("NOTICE_NOTPUBLIC","Notice not public.");
define("NOTICE_ALL","all");
define("NOTICE_NONE",SHOW_FILTER_NONE);
define("NOTICE_SEARCH","Search in Notices");
define("NOTICE_SEARCH_SHORT","Search");
define("NOTICE_HITS","Hits");
define("NOTICE_SHOWRESULTS","hits per page");
define("NOTICE_OF","of");
define("NOTICE_NOTHING","No Entry found");
// 4.0
define("NOTICE_CHARS","Characters");
define("NOTICE_PLAYERNAME","Player");
define("NOTICE_SHOWALL","Show all notices");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","OGame Galaxytool - Espionage Reports");
define("REPORTS_RESOURCES","Resources");
define("REPORTS_FLEET","Fleets");
define("REPORTS_DEFENCE","Defence");
define("REPORTS_BUILDINGS","Buildings");
define("REPORTS_TECHNOLOGY","Research");
define("REPORTS_MOON","Moon");
define("REPORTS_SEARCH","Search in espionage reports");
define("REPORTS_SEARCH_SHORT","Search");
define("REPORTS_HITS","Hits");
define("REPORTS_NOTHING","No Entry found");
define("REPORTS_ADDRESS","Address");
define("REPORTS_CURRENTNESS","Currentness");
define("REPORTS_PLAYERNAME","Playername");
define("REPORTS_ALLY","Ally");
define("REPORTS_VIEW","view Report");
define("REPORTS_SEARCH_IN","Search in Galaxy");
define("REPORTS_FROM_SYSTEM","from System");
define("REPORTS_TO","to");
define("REPORTS_DELETE","delete");
define("REPORTS_DELETED","Entry deleted");
define("REPORTS_RESULTS","hits per page");
define("REPORTS_OF","of");
define("REPORTS_DATE","Date");
define("REPORTS_DATE_0","never mind");
define("REPORTS_DATE_1","older than");
define("REPORTS_DATE_2","newer than");
define("REPORTS_NOTICES","Notices");
define("REPORTS_AT_LEAST_RESOURCES","Resources (at least)");
define("REPORTS_SEARCH_EXTENDED","extended search");
define("REPORTS_FLEET_RESIS","Fleet- score");
define("REPORTS_DEFENCE_RESIS","Defense- score");
define("REPORTS_ALL_RESIS","sum scores");
define("REPORTS_TECHS","Techs");
define("REPORTS_UNKNOWN_ENTRIES","unknown entries");
define("REPORTS_PARTLY_INSERTED","partly inserted");
define("REPORTS_FOR_ALL_RES","for all raidable resources");
define("REPORTS_FOR_TF","for the debris field");
define("REPORTS_KT","Small Cargo ships");
define("REPORTS_GT","Large Cargo ships");
define("REPORTS_SS","Battleships");
define("REPORTS_REC","Recycler");
define("REPORTS_RAIDABLE","Only raidable targets");
define("REPORTS_ALL_RESOURCES","all Resources");
// 4.0
define("REPORTS_STUFF","Miscellaneous");
define("REPORTS_SPEEDSIM","Simulate with Speedsim");
define("REPORTS_DRAGOSIM","Simulate with Dragosim");
define("REPORTS_STATUS","Status");
define("REPORTS_ERROR","An error occured");
// 4.2
define("REPORTS_OWN_REPORTS","Only my reports");
// 4.3.3
define("REPORTS_UPLOAD_BY","Report uploaded by");
// 4.4
define("REPORTS_DEPTH","Report depth");
define("REPORTS_FLEET_SCORE","Fleet score");
define("REPORTS_DEFENCE_SCORE","Defence score");
// 5.0
define("REPORTS_HOURS","hours");
define("REPORTS_MAX_RESULTS_HIT","Your query returned more than &1 hits. Only the first &1 results are show. Please adjust your search request to get less results.");
define("REPORTS_OSIMULATE","Simulate with OSimulate");
define("REPORTS_SHOW_ONLY","Show only");
define("REPORTS_SHOW_PLANETS","Planets");
define("REPORTS_SHOW_MOONS","Moons");
define("REPORTS_OWNER","Reports owned by");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","OGame Galaxytool - Statistics");
define("STATS_TBLHEAD","Statistics");
define("STATS_RANK","Rank");
define("STATS_PLAYERNAME","Player Name");
define("STATS_ALLYNAME","Alliance Tag");
define("STATS_SCORE","Score");
define("STATS_FLEET","Fleet");
define("STATS_RESEARCH","Research");
define("STATS_MEMBERS","Members");
define("STATS_STATUS","Status");
define("STATS_NOTHING","no Status");
define("STATS_NAP","NAP");
define("STATS_ALLIED","Allied");
define("STATS_WAR","War");
define("STATS_BOYCOTT","Boycott");
define("STATS_NEUTRAL","Neutral");
define("STATS_OWN","Own Alliance");
define("STATS_WING","Wing");
define("STATS_UPDATE","Entry from");
define("STATS_PLAYERSTATS","Player Stats");
define("STATS_ALLYSTATS","Alliance Stats");
// 4.0
define("STATS_DELETE","Delete entry");
define("STATS_CONFIRM_DELETE","Do you realy want to delete this entry?");
define("STATS_CHANGE_PLAYER_STATUS","Player status");
define("STATS_CHANGE_ALLIANCE_STATUS","Alliance status");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","All members of this alliance get the choosen status. Any previous status will be overwritten. You may change the status of some players afterwards.");
define("STATS_UNKNOWN","Rest");
define("STATS_DETAILS","Details for");
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
define("REGISTER_REGISTRATE","Register");
define("REGISTER_LOGINNAME","Login-Name");
define("REGISTER_PASSWORD","Password");
define("REGISTER_PASSWORD_CONFIRM","Confirm Password");
define("REGISTER_EMAIL","Email");
define("REGISTER_INGAME","Ingame-Name");
define("REGISTER_ALLYTAG","Allytag");
define("REGISTER_EMAILVERIFICATION","Emailcheck");
define("REGISTER_EMAILTEXT","Please visit the following link to confirm your registration at the Galaxytool.");
define("REGISTER_ERROR1","Login-username already used.");
define("REGISTER_ERROR2","Error while trying to send an email. Please contact your admin.");
define("REGISTER_ERROR3","Error while trying to send data to the database!");
define("REGISTER_INFO1","Your account was created.");
define("REGISTER_INFO2","Please visit the link in your email to confirm the registration.");
define("REGISTER_INFO3","Account confirmed. Your admin needs to activate it now.");
define("REGISTER_BUTTON","Back to main page");
define("REGISTER_NEW_SUBJECT","A new user registered at the Galaxytool");
define("REGISTER_NEW_MAILTEXT","A new user registered himself.");
// new 4.2
define("REGISTER_BACK","Back to first page");
// new 4.3.5
define("REGISTER_MISSING_FIELDS","Enter all required fields");
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
define("LOSTPW_TITLE","Lost my Password");
define("LOSTPW_INFO2","A new password was generated and send to your email address.");
define("LOSTPW_BUTTON1","get new password");
define("LOSTPW_BUTTON2","Back to main page");
define("LOSTPW_LOGINNAME","Login-Name");
define("LOSTPW_EMAIL","Email");
define("LOSTPW_ERROR1","Error while trying to send data to the database!");
define("LOSTPW_ERROR2","No matching entry found!");
define("LOSTPW_ERROR3","Error while trying to send an email. Please contact your admin.");
define("LOSTPW_EMAIL_SUBJECT","Your new password you requested");
define("LOSTPW_EMAIL_TEXT1","Here is your new login for the Galaxytool");
define("LOSTPW_EMAIL_TEXT2","Username");
define("LOSTPW_EMAIL_TEXT3","Password");
// new 5.0
define("LOSTPW_INFO1","You will receive an email to verify your password reset request.");
define("LOSTPW_CONFIRM_RESET_SUBJECT","Lost password?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","Hello,\n\nyou requested a password reset for the Galaxytool. To generate a new password, click the following link:");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","OGame Galaxytool - User information");
define("USERINFO_NAMES","All users of this tool");
define("USERINFO_DETAIL","detailled information about");
define("USERINFO_ERROR1","No user known with this ID!");
define("USERINFO_USERNAME","Login name");
define("USERINFO_INGAME","In-game name");
define("USERINFO_EMAIL","Email");
define("USERINFO_ALLYTAG","Alliance");
define("USERINFO_STYLEPATH","Skin");
define("USERINFO_STATUS","Status");
define("USERINFO_ACTIVATE","Activate player");
define("USERINFO_LOGINS","Number of Logins");
define("USERINFO_LASTLOGIN","Last Login");
define("USERINFO_DATA","Information about entered systems");
define("USERINFO_NODATA","That user has entered no systems yet!");
define("USERINFO_GALAXY","Galaxy");
define("USERINFO_SYSTEMS","Number of Systems");
define("USERINFO_IP","IP address");
define("USERINFO_LOGINTIME","Login");
define("USERINFO_NOLOGIN","The player has never logged in.");
define("USERINFO_LAST_GALAXYUPDATE","Inserted last galaxy view");
define("USERINFO_LAST_PUBLIC_NOTICE","Last public notice");
define("USERINFO_LAST_PRIVATE_NOTICE","Last private notice");
define("USERINFO_NUMBEROF_PUBLIC_NOTICE","Number of public notices");
define("USERINFO_NUMBEROF_PRIVATE_NOTICE","Number of private notices");
define("USERINFO_ACTIVATED","Account activated");
define("USERINFO_ACTIVATIONTEXT","The Galaxytool admin has activated your account.\n\nHave fun with the Galaxytool!");
// new 4.8
define("USERINFO_LAST_SUBMIT","Inserted last data");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","OGame Galaxytool - Alliance History");
define("ALLYHISTORY_TBLHEAD","Historical overview");
define("ALLYHISTORY_PLAYERNAME","Player Name");
define("ALLYHISTORY_ALLYNAME","Alliance");
define("ALLYHISTORY_LASTMONTH","Last month"); // changed at 4.0
define("ALLYHISTORY_ALL_DATA","all data"); // new 4.0
define("ALLYHISTORY_SHOW","show statistic");
define("ALLYHISTORY_TIMESPAN","Timespan");
define("ALLYHISTORY_PROGESS","Progress");
define("ALLYHISTORY_SCORE","Scores");
define("ALLYHISTORY_FSCORE","Fleet scores"); // new 4.0 - osolete with 5.0
define("ALLYHISTORY_RSCORE","Research scores"); // new 4.0
define("ALLYHISTORY_MEMBER","Members"); // new 4.0
define("ALLYHISTORY_NOTHING","no entries found");
define("ALLYHISTORY_DETAILS","Details");
define("ALLYHISTORY_SHOW_ADDRESS","Coordinates");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","Player information");
define("DETAILEDINFO_ALLYINFO_TITLE","Alliance information");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","Detailed information about player");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","Detailed information about alliance");
define("DETAILEDINFO_NO_ALLIANCE","none");
define("DETAILEDINFO_SCORE","Score statistic");
define("DETAILEDINFO_FLEET","Fleet statistic");
define("DETAILEDINFO_RESEARCH","Research statistic");
define("DETAILEDINFO_RANK","Rank");
define("DETAILEDINFO_POINTS","Score");
define("DETAILEDINFO_KNOWN_PLANETS","known planets");
define("DETAILEDINFO_MOONS","known moons");
define("DETAILEDINFO_PHALANX_AREA","Phalanx area");
define("DETAILEDINFO_NO_PHALANX_AREA","no Phalanx found");
define("DETAILEDINFO_NOTICES","Notices");
define("DETAILEDINFO_NO_NOTICES","No Notices found");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","previous Alliances");
define("DETAILEDINFO_RESOURCES_PER_HOUR","Resources per hour");
define("DETAILEDINFO_RESOURCES_PER_DAY","Resources per day");
define("DETAILEDINFO_RESOURCES_PER_WEEK","Resources per week");
define("DETAILEDINFO_RESOURCES_PER_MONTH","Resourcen per month (30 days)");
define("DETAILEDINFO_METAL","Metal");
define("DETAILEDINFO_CRYSTAL","Crystal");
define("DETAILEDINFO_DEUTERIUM","Deuterium");
define("DETAILEDINFO_UNKNOWN","unknown");
define("DETAILEDINFO_SCORE_DISTRIBUTION","Score distribution");
// new 4.2
define("DETAILEDINFO_GENERAL","Details");
define("DETAILEDINFO_MEMBERS","Members");
define("DETAILEDINFO_GRAPHS","Graphs");
define("DETAILEDINFO_RESOURCES","Resources");
define("DETAILEDINFO_FLEET_TAB","Fleet");
define("DETAILEDINFO_TECH","Research");
define("DETAILEDINFO_FLEET_DETAIL","Sum / (players average) among all available reports");
define("DETAILEDINFO_TECH_DETAIL","Average of all available playerinformation");
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
define("DETAILEDINFO_TODAY","Today"); // also used at report search page
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
define("ADMIN_TITLE","Administration of the Galaxytool");
define("ADMIN_DISCLAMER","Attention: Run any of those scripts at your own risk! Most of them are deleting data.");
define("ADMIN_INCONSISTENCIES","Inconsistencies at the database");
define("ADMIN_PLANETS","Delete planets at position 0 or greater than 15");
define("ADMIN_GALAXIES","Delete galaxies greater than &1 ");
define("ADMIN_PLAYERS","Delete players without OGame playerid - this will remove duplicate player entries");
define("ADMIN_REPORTS","Delete reports where no planet exists anymore");
define("ADMIN_MISC","Miscellaneous");
define("ADMIN_RESET","Reset Galaxytool (only user and ip table are not deleted)");
define("ADMIN_OLD_PLAYERS","Delete player entries older than &1 days");
define("ADMIN_OLD_REPORTS","Delete reports older than &1 days");
define("ADMIN_LOADING","Do not close this window while the page is loaded.");
define("ADMIN_STATUS","Status of your requests");
define("ADMIN_SELECTION","At least one entry must be selected");
define("ADMIN_SAFETY","Are you sure that you want to run these script(s) ?");
define("ADMIN_DONE","done");
define("ADMIN_NOTBD","nothing to be done");
// new 4.3
define("ADMIN_OLD_GALAXIES","Remove galaxy views which are older than &1 days");
define("ADMIN_UNUSED_PLAYERS","Remove players who do not occur in any galaxy view");
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