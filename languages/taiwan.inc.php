<?php
/**** traditional chinese ****
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
define("L_USERNAME","帳號");
define("L_PASSWORD","密碼");
define("L_LOGINFAILURE","帳號或密碼錯誤，或者你的帳號沒有啟動。");
define("L_TOKENFAILURE","Your logon key is wrong or your account is not activated yet.");
define("L_LOGINTEXT","請登入。");
define("L_LANGUAGE","允許的語言：");
define("L_TIMEOUT","等待時間過久！");
define("L_REGISTER","註冊");
define("L_PWLOST","密碼遺失");
define("INDEX_TITLE","OGame Galaxietool - 總覽");
define("INDEX_INFO","資料庫資訊");
define("INDEX_ENTRIES","太陽系數目");
define("INDEX_ENTRIES_LASTWEEK","最近一週更新的太陽系");
define("INDEX_ENTRIES_TO_OLD","一個月前更新的太陽系");
define("INDEX_REGISTERED_USERS","註冊的使用者數目");
define("INDEX_PAGEFORWARD","如果你的瀏覽器無法自動進入下一頁, 請按這裡！");
define("INDEX_NOTICES","訊息數目");
define("INDEX_PLAYERS","玩家數目");
define("INDEX_ALLIES","聯盟數目");
define("INDEX_REPORTS","間諜報告數目");
define("INDEX_VERSION","下載最新的版本！");
define("INDEX_LATEST_VERSION","你使用的已是最新版本！");
define("INDEX_SHOUTBOX","留言簿");
define("INDEX_NOENTRY","沒有留言！");
define("INDEX_COMMENT","輸入你的留言");
define("INDEX_INSERT","送出");
define("INDEX_UMOD","假期模式中的玩家");
define("INDEX_NO_MOONS","月球的數目");
define("INDEX_NO_EMPTY_SYSTEMS","空太陽系的數目");
define("INDEX_NO_FULL_SYSTEMS","滿太陽系的數目");
define("INDEX_NO_TARGETS","可以被攻擊的星球");
// 4.0
define("INDEX_USERINFO","使用者人數");
define("INDEX_ONLINE","線上人數");
define("INDEX_TODAY","今天登入的使用者");
define("INDEX_ALL","總登入次數");
// 4.3.7
define("GENERAL_LOAD_FORM","載入數據");
define("GENERAL_SAVE_FORM","保存數據");
define("GENERAL_SAVE_AS_TEXT","保存為");
define("GENERAL_SAVE","保存");
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
define("GENERAL_OPEN_IN_NEW_WINDOW","用新視窗開啟鏈結");
// 5.1
define("GENERAL_UNIT_OF_MEASURE_DAYS","Days");

/*********************************************************************/
/***************************** internal ******************************/
/*********************************************************************/
// index.php
define("PROGRAM_NAME","OGame Galaxytool");
define("SHORTNAME","Galaxytool");
define("BACK_INDEX","回到首頁");
define("UNIVERSE","宇宙");

// search
define("MENU_INFO_LINKS","資料");
define("MENU_PAGE","總覽");
define("MENU_DB_SEARCH","搜尋玩家或聯盟");
define("MENU_DB_NOTICES","搜尋訊息");
define("MENU_DB_REPORTS","搜尋間諜報告");
define("MENU_GALAXYVIEW","查看星系");
define("MENU_STATISTICS","統計");
define("MENU_ALLYHISTORY","歷史統計");
// 4.7
define("MENU_FLEET_MOVEMENTS","移動中艦隊");
define("MENU_COMBAT_REPORTS","戰鬥報告");
define("MENU_MESSAGES","遊戲訊息");

// insert / change
define("MENU_OPTION_LINKS","選項");
define("MENU_DB_REFRESH","匯入資料");
define("MENU_NOTICES","訊息");
define("MENU_DB_STATUS","資料庫狀況");
define("MENU_USEROPTIONS","管理使用者");
define("MENU_USEROPTIONS2","使用者資料");
define("MENU_USEROPTIONS3","帳號管理");
// 4.2
define("MENU_ADMIN","管理維護");
// 4.3.3
define("MENU_LOGOUT","登出");

// Stuff
define("MENU_STUFF","雜項");
define("MENU_FORUM_THREAD","GalaxyTool開發論譠");
define("MENU_DOWNLOADPAGE","下載點");
define("MENU_LANGUAGE","語言");
define("MENU_HELP","求助");
// 4.0
define("MENU_TOOLOPTIONS","Galaxytool 設置");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1"," 被匯入資料庫");
define("PARSER_ERROR1","試圖匯入以下坐標時產生錯誤:");
define("PARSER_ERROR2","無法找到資料庫！");
define("PARSER_ERROR3","無法找到資料庫伺服器！");
define("PARSER_WRONG_UNIVERSE","Wrong universe - actual: \"&1\"  expected: \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","OGame Galaxytool - Searchpage");
define("SHOW_SEARCH","搜尋玩家或聯盟");
define("SHOW_ALLYSYMBOL","聯盟");
define("SHOW_PLAYERNAME","玩家");
define("SHOW_MOONS","有月球的星球");
define("SHOW_NOTICES","有訊息的星球");
define("SHOW_COLONIES","依星球位置");
define("SHOW_YES","是");
define("SHOW_NO","否");
define("SHOW_SEARCHRANGE","範圍");
define("SHOW_SEARCH_IN","搜尋銀河系(1~9)");
define("SHOW_FROM_SYSTEM","從太陽系(1~499)");
define("SHOW_FROM_PLANET","從星球(1~15)");
define("SHOW_TO","到");
define("SHOW_DESCRIPTION","你可以在聯盟或玩家欄使用萬用字元&quot;*&quot;. 如此，你可以找到所有名字相似的玩家！<br />請僅填寫你想指定的區域.");
define("SHOW_SORT_BY","排列標準");
define("SHOW_GALASYSTEM","銀河系/太陽系");
define("SHOW_ALLYNAME","聯盟名");
define("SHOW_SEARCHBUTTON","開始搜尋");
define("SHOW_ADDRESS","位置");
define("SHOW_ALLYSORT","聯盟");
define("SHOW_PLANET","星球名");
define("SHOW_STATUS","狀況");
define("SHOW_CURRENTNESS","更新時間");
define("SHOW_PLAYER_STATUS","玩家狀況");
define("SHOW_PLAYER_STATUS1","全部");
define("SHOW_PLAYER_STATUS2","可被攻擊的");
define("SHOW_PLAYER_STATUS3","Ｉ羊");
define("SHOW_HITS","第");
define("SHOW_OF","of");
define("SHOW_ASC","升冪排列");
define("SHOW_DESC","降冪排列");
define("SHOW_RESULTS","一頁顯示幾筆資料");
define("SHOW_MOON","月球");
define("SHOW_UKMOONSIZE","大小未知");
define("SHOW_DF","殘骸");
define("SHOW_DF_LONG","殘骸");
define("SHOW_METAL","金屬");
define("SHOW_METAL_LONG","金屬");
define("SHOW_CRYSTAL","晶");
define("SHOW_CRYSTAL_LONG","晶體");
define("SHOW_BOTH","兩者一起");
define("SHOW_AT_LEAST","(至少)");
define("SHOW_DATE","日期");
define("SHOW_DATE_0","不介意");
define("SHOW_DATE_1","之後");
define("SHOW_DATE_2","之前");
define("SHOW_RANK","排名");
define("SHOW_FRANK","艦隊數排名");
define("SHOW_MEMBERS","盟員");
define("SHOW_NOTRANKED","不在前1500名內！.");
define("SHOW_NOTICERES","訊息");
define("SHOW_REPORTS","有間諜報告的星球");
define("SHOW_REPORTS_SHORT","間諜報告");
define("SHOW_NOTHING","沒有找到資料");
define("SHOW_ALLIANCE_STATUS","聯盟關係");
define("SHOW_NO_STATUS","無關係");
define("SHOW_NAP","互不侵犯");
define("SHOW_ALLIED","結盟");
define("SHOW_WAR","宣戰");
define("SHOW_BOYCOTT","抵制");
define("SHOW_NEUTRAL","中立");
define("SHOW_OWN","所在聯盟");
define("SHOW_WING","子盟");
// obsolete with 5.0
define("SHOW_EXT_OPTIONS1","顯示更多的搜尋選項（範圍、排名、日期或殘骸）");
define("SHOW_EXT_OPTIONS2","顯示更多的搜尋選項（位置、月球、間諜報告、訊息、玩家狀況或外交狀況）");
define("SHOW_EXT_OPTIONS3","顯示更多的搜尋選項（排列規則）");
// new 5.0
define("SHOW_EXTENDED","advanced search");
define("SHOW_MOON_SELECTION","Planet with moon");
define("SHOW_REPORT_SELECTION","Planet with report");
define("SHOW_FILTER_BY","Exclude from the list");
define("SHOW_FILTER_NONE","沒有");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Show players without score changes within the last few days");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","OGame Galaxytool - Statuspage");
define("STATUS_DB_STATUS","資料庫狀態");
define("STATUS_COLOR","顏色");
define("STATUS_AGE1","1 天內更新.");
define("STATUS_AGE2","2 - 4 天內更新.");
define("STATUS_AGE3","4 - 7 天內更新.");
define("STATUS_AGE4","1 - 2 星期內更新.");
define("STATUS_AGE5","2 - 4 星期內更新.");
define("STATUS_AGE6","1個月前更新的!");
define("STATUS_AGE7","未有記錄.");
define("STATUS_ON","開啟");
define("STYLES_COLOR1","顏色1");
define("STYLES_COLOR2","顏色2");
define("STYLES_COLOR3","顏色3");
define("STYLES_COLOR4","顏色4");
define("STYLES_COLOR5","顏色5");
define("STYLES_COLOR6","顏色6");
define("STYLES_COLOR7","顏色7");
// 4.8
define("STATUS_DB_LEGEND","Legend");
define("STATUS_GALAXY","Galaxy Overview");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","管理使用者");
define("USER_NAMES","帳號");
define("USER_ERROR","錯誤");
define("USER_NEWUSER","新使用者");
define("USER_OPTIONS","選項");
define("USER_USERNAME","帳號");
define("USER_PASSWORD","密碼");
define("USER_PASSWORD_CONFIRM","密碼確認");
define("USER_GALAXY","銀河系");
define("USER_SEARCH","搜尋權");
define("USER_INSERT","資料匯入權");
define("USER_DELETE","刪除");
define("USER_DELETE_ENTRY","你想要刪除使用者： ");
define("USER_STATUS","查看所有狀況權");
define("USER_STYLES","修改界面");
define("USER_SUBMIT","送出");
define("USER_RESET","重新輸入");
define("USER_YES","是");
define("USER_NO","否");
define("USER_STYLEPATH","styles.css的位置");
define("USER_PROBES","觀看/輸入間諜報告");
define("USER_EMAIL","E-mail");
define("USER_ERROR1","密碼錯誤 或 無效的E-mail！");
define("USER_ERROR2","無效的E-mail！");
define("USER_INGAME","OGame的帳號");
define("USER_ALLYTAG","聯盟");
define("USER_ALLYHISTORY","歷史統計");
define("USER_DIPLOMATIC","更改外交狀態");
define("USER_STATSPAGE","狀況頁資料數目設定");
define("USER_LINKS","Links");
define("USER_LINKS2","格式:<br>text;url<br>text2;url2<br>text3;url3");
define("USER_EXPORT_TITLE","顏色設定 (BB Codes)");
define("USER_BB_COORDINATES","座標");
define("USER_BB_MOON","月球");
define("USER_BB_DEBRIS","殘骸");
define("USER_BB_ALLY","聯盟");
define("USER_BB_ALLYDETAILS","聯盟詳細資料");
define("USER_BB_PLAYERNAME","玩家名稱");
define("USER_BB_BANNED","被封的玩家");
define("USER_BB_VACATION","假期模式");
define("USER_BB_NOOB","實力弱的玩家");
define("USER_BB_INACTIVE","Ｉ羊");
define("USER_BB_LONGINACTIVE","Ｉｉ羊");
// new with 4.7
define("USER_DELETION","刪除");
define("USER_FLEETINFO",MENU_FLEET_MOVEMENTS);
define("USER_ACTIVITIES","活動");
define("USER_MAINTENANCE","Galaxytool 管理維護");
define("USER_MANAGEMENT",MENU_USEROPTIONS);
define("USER_DELETE_MY_COMBAT_REPORTS","刪除我的戰鬥報告");
define("USER_DELETE_MY_MESSAGES","刪除我的訊息");
define("USER_DELETE_MY_FLEETMOVES","刪除我移動中的艦隊");
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
define("VIEW_NODATA","沒有資料登錄！");
define("VIEW_GALAXY","銀河系");
define("VIEW_SYSTEM","太陽系");
define("VIEW_POSITION","位置");
define("VIEW_PLANET","星球");
define("VIEW_MOON","月球");
define("VIEW_TF","殘骸");
define("VIEW_PLAYER","玩家");
define("VIEW_PLAYER_ADD","(排名 / 狀況)");
define("VIEW_ALLY","聯盟");
define("VIEW_ALLY_ADD","(排名 / 人數)");
define("VIEW_METAL","金屬");
define("VIEW_CRYSTAL","晶體");
define("VIEW_COLONISED","星球有人居住");
define("VIEW_UKMOONSIZE","未知");
define("VIEW_BACK","back");
define("VIEW_NOTICE","訊息");
define("VIEW_REPORTS","間諜報告");
define("VIEW_MOONPHALANX","下列 月球 可掃瞄到這個 太陽系");
define("VIEW_NOMOONS","未知");
define("VIEW_IRAKS","下列 星球 的導彈可攻擊到這個 太陽系");
define("VIEW_NOIRAKS","未知");
// 4.0
define("VIEW_MOON_DESTROY_CHANCE","毀滅月球的機率");
define("VIEW_CHANCE_WITH_ONE","當派一顆死星時");
define("VIEW_CHANCE_WITH_N","派 ");
define("VIEW_DEATH_STARS","死星時");
define("VIEW_DS_DESTROY_CHANCE","死星一起毀滅的機率");
define("VIEW_TOP","Top");
// new 4.3.5
define("VIEW_GO","go");
// new 5.0
define("VIEW_DIAMETER","Diameter");

/*********************************************************************
* change_password.php
**********************************************************************/
define("PW_TITLE","OGame Galaxytool - 修改密碼");
define("OLD_PASSWORD","目前密碼");
define("NEW_PASSWORD","新密碼");
define("CONFIRM_NEW_PASSWORD","確認新密碼");
define("PW_MISMATCH","兩次輸入的密碼不同！");
define("PW_ERROR","目前密碼不正確！");
define("UPDATE_DONE","修改成功！");
// new 4.2
define("TIMEZONE_OFFSET","設定系統時間");
// new 4.3
define("DELETE_ACCOUNT","刪除帳號");
define("DELETE_ACCOUNT_SAFETY_REQUEST","你確定要刪除帳號嗎？");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","授權");
define("CH_PASSWD_ADMIN","管理員");
// new 4.7
define("TIMEZONE_OGAME_OFFSET","OGame伺服器時差");
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
define("NOTICE_HEADER","編輯訊息");
define("NOTICE_HEADER2","編輯自己的訊息麼?");
define("NOTICE_PUBLIC","是否公開?");
define("NOTICE_YES","是");
define("NOTICE_NO","否");
define("NOTICE_TEXT","訊息內容");
define("NOTICE_SAVE","儲存");
define("NOTICE_DELETED","已刪除");
define("NOTICE_SAVED","已儲存.");
define("NOTICE_RESULTS","所有結果");
define("NOTICE_USER","使用者");
define("NOTICE_DATE","日期");
define("NOTICE_EDIT","編輯");
define("NOTICE_DELETE","刪除");
define("NOTICE_NEW","創建自己的條目");
define("NOTICE_NOTPUBLIC","此訊息不公開.");
define("NOTICE_ALL","所有");
define("NOTICE_NONE",SHOW_FILTER_NONE);
define("NOTICE_SEARCH","搜尋訊息");
define("NOTICE_SEARCH_SHORT","開始搜尋");
define("NOTICE_HITS","第");
define("NOTICE_SHOWRESULTS","顯示的資料筆數");
define("NOTICE_OF","的");
define("NOTICE_NOTHING","沒有找到符合的！");
// 4.0
define("NOTICE_CHARS","字元");
define("NOTICE_PLAYERNAME","玩家");
define("NOTICE_SHOWALL","顯示所有訊息");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","OGame Galaxytool - Espionage Reports");
define("REPORTS_RESOURCES","資源");
define("REPORTS_FLEET","艦隊");
define("REPORTS_DEFENCE","防禦");
define("REPORTS_BUILDINGS","建築");
define("REPORTS_TECHNOLOGY","研究");
define("REPORTS_MOON","月球");
define("REPORTS_SEARCH","搜尋間諜報告");
define("REPORTS_SEARCH_SHORT","開始搜尋");
define("REPORTS_HITS","第");
define("REPORTS_NOTHING","沒有找到符合的！");
define("REPORTS_ADDRESS","位置");
define("REPORTS_CURRENTNESS","更新時間");
define("REPORTS_PLAYERNAME","玩家名稱");
define("REPORTS_ALLY","聯盟");
define("REPORTS_VIEW","間諜報告");
define("REPORTS_SEARCH_IN","搜尋銀河系(1~9)");
define("REPORTS_FROM_SYSTEM","從太陽系");
define("REPORTS_TO","到");
define("REPORTS_DELETE","刪除");
define("REPORTS_DELETED","已刪除");
define("REPORTS_RESULTS","顯示的資料筆數");
define("REPORTS_OF","of");
define("REPORTS_DATE","日期");
define("REPORTS_DATE_0","不介意");
define("REPORTS_DATE_1","之前");
define("REPORTS_DATE_2","之後");
define("REPORTS_NOTICES","訊息");
define("REPORTS_AT_LEAST_RESOURCES","資源(至少)");
define("REPORTS_SEARCH_EXTENDED","搜尋後展開");
define("REPORTS_FLEET_RESIS","艦隊分");
define("REPORTS_DEFENCE_RESIS","防禦分");
define("REPORTS_ALL_RESIS","總積分");
define("REPORTS_TECHS","三圍");
define("REPORTS_UNKNOWN_ENTRIES","unknown entries");
define("REPORTS_PARTLY_INSERTED","部分匯入");
define("REPORTS_FOR_ALL_RES","所有資源需");
define("REPORTS_FOR_TF","殘骸需");
define("REPORTS_KT","小型運輸船");
define("REPORTS_GT","大型運輸船");
define("REPORTS_SS","戰列艦");
define("REPORTS_REC","回收船");
define("REPORTS_RAIDABLE","只有我的間諜報告");
define("REPORTS_ALL_RESOURCES","所有資源");
// 4.0
define("REPORTS_STUFF","範圍");
define("REPORTS_SPEEDSIM","Online 戰鬥模擬器 Speedsim");
define("REPORTS_DRAGOSIM","Online 戰鬥模擬器 Dragosim");
define("REPORTS_STATUS","狀態");
define("REPORTS_ERROR","有錯誤產生!");
// 4.2
define("REPORTS_OWN_REPORTS","自己的間諜報告");
// 4.3.3
define("REPORTS_UPLOAD_BY","間諜報告上傳者為");
// 4.4
define("REPORTS_DEPTH","報告深度");
define("REPORTS_FLEET_SCORE","艦隊分");
define("REPORTS_DEFENCE_SCORE","防御分");
// 5.0
define("REPORTS_HOURS","hours");
define("REPORTS_MAX_RESULTS_HIT","Your query returned more than &1 hits. Only the first &1 results are show. Please adjust your search request to get less results.");
define("REPORTS_OSIMULATE","Simulate with OSimulate");
define("REPORTS_SHOW_ONLY","Show only");
define("REPORTS_SHOW_PLANETS","星球");
define("REPORTS_SHOW_MOONS","月球");
define("REPORTS_OWNER","Reports owned by");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","OGame Galaxytool - Statistics");
define("STATS_TBLHEAD","統計");
define("STATS_RANK","排名");
define("STATS_PLAYERNAME","玩家名稱");
define("STATS_ALLYNAME","聯盟");
define("STATS_SCORE","分數");
define("STATS_FLEET","艦隊數");
define("STATS_RESEARCH","研究等級");
define("STATS_MEMBERS","盟員");
define("STATS_STATUS","Status");
define("STATS_NOTHING","no Status");
define("STATS_NAP","互不侵犯");
define("STATS_ALLIED","結盟");
define("STATS_WAR","宣戰");
define("STATS_BOYCOTT","抵制");
define("STATS_NEUTRAL","中立");
define("STATS_OWN","自己所在的聯盟");
define("STATS_WING","子盟");
define("STATS_UPDATE","資料由");
define("STATS_PLAYERSTATS","玩家積分");
define("STATS_ALLYSTATS","聯盟積分");
// 4.0
define("STATS_DELETE","你要刪除這設定嗎？");
define("STATS_CONFIRM_DELETE","你確定要刪除嗎？");
define("STATS_CHANGE_PLAYER_STATUS","玩家的外交");
define("STATS_CHANGE_ALLIANCE_STATUS","聯盟的外交");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","該聯盟的所有成員將使用這個關係設定！任何個人的關係設定將會被覆蓋！之後你必需去更改其他玩家的關係設定！");
define("STATS_UNKNOWN","其他的");
define("STATS_DETAILS","細節 關於");
// 4.4
define("STATS_PLAYERSTATUS",SHOW_PLAYER_STATUS);
define("STATS_IGNORE_STATUS",SHOW_PLAYER_STATUS1);
define("STATS_ACTIVE","活躍");
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
define("REGISTER_REGISTRATE","註冊");
define("REGISTER_LOGINNAME","帳號");
define("REGISTER_PASSWORD","密碼");
define("REGISTER_PASSWORD_CONFIRM","確認密碼");
define("REGISTER_EMAIL","E-mail");
define("REGISTER_INGAME","OGame的帳號");
define("REGISTER_ALLYTAG","聯盟");
define("REGISTER_EMAILVERIFICATION","E-mail查詢");
define("REGISTER_EMAILTEXT","請點擊這個鏈結來確認你在 GalaxyTool 的註冊！");
define("REGISTER_ERROR1","註冊的帳號已被使用。");
define("REGISTER_ERROR2","傳送E-mail時發生錯誤！請連絡管理者！");
define("REGISTER_ERROR3","資料傳送到資料庫時發生錯誤！");
define("REGISTER_INFO1","你的帳號已經建立。");
define("REGISTER_INFO2","請查看你的E-mai並點擊鏈結來確認你的申請。");
define("REGISTER_INFO3","帳號已被確認！但你仍需等GalaxyTool的管理者幫你開通！");
define("REGISTER_BUTTON","回到首頁");
define("REGISTER_NEW_SUBJECT","一個新使用者註冊到GalaxyTool");
define("REGISTER_NEW_MAILTEXT","一個新使用者已經自己註冊");
// new 4.2
define("REGISTER_BACK","回到第一頁");
// new 4.3.5
define("REGISTER_MISSING_FIELDS","請填寫所有必須的項!");
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
define("LOSTPW_TITLE","密碼遺失");
define("LOSTPW_INFO2","新的密碼已產生，並已寄到你的E-mail！");
define("LOSTPW_BUTTON1","取得新密碼");
define("LOSTPW_BUTTON2","回首頁");
define("LOSTPW_LOGINNAME","帳號");
define("LOSTPW_EMAIL","E-mail");
define("LOSTPW_ERROR1","資料傳送到資料庫時發生錯誤！");
define("LOSTPW_ERROR2","沒有找到符答的資料！");
define("LOSTPW_ERROR3","傳送E-mail時發生錯誤！請連絡管理者！");
define("LOSTPW_EMAIL_SUBJECT","你申請的新密碼");
define("LOSTPW_EMAIL_TEXT1","這是 GalaxyTool 新的登入資料");
define("LOSTPW_EMAIL_TEXT2","帳號");
define("LOSTPW_EMAIL_TEXT3","密碼");
// new 5.0
define("LOSTPW_INFO1","You will receive an email to verify your password reset request.");
define("LOSTPW_CONFIRM_RESET_SUBJECT","Lost password?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","Hello,\n\nyou requested a password reset for the Galaxytool. To generate a new password, click the following link:");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","OGame Galaxytool - User information");
define("USERINFO_NAMES","GalaxyTool的所有使用者");
define("USERINFO_DETAIL","使用者詳細資料");
define("USERINFO_ERROR1","沒有這個ID的使用者!");
define("USERINFO_USERNAME","帳號");
define("USERINFO_INGAME","OGame的帳號");
define("USERINFO_EMAIL","E-mail");
define("USERINFO_ALLYTAG","聯盟");
define("USERINFO_STYLEPATH","使用的面版");
define("USERINFO_STATUS","狀態");
define("USERINFO_ACTIVATE","開通");
define("USERINFO_LOGINS","登入次數");
define("USERINFO_LASTLOGIN","最近一次的登入時間");
define("USERINFO_DATA","匯入的資料");
define("USERINFO_NODATA","該使用者沒有匯入任何資料！");
define("USERINFO_GALAXY","銀河系");
define("USERINFO_SYSTEMS","資料數");
define("USERINFO_IP","IP 位置");
define("USERINFO_LOGINTIME","登入時間");
define("USERINFO_NOLOGIN","這個使用者重未登入！");
define("USERINFO_LAST_GALAXYUPDATE","最後匯入資料的時間");
define("USERINFO_LAST_PUBLIC_NOTICE","最後的公共訊息");
define("USERINFO_LAST_PRIVATE_NOTICE","最後的私人訊息");
define("USERINFO_NUMBEROF_PUBLIC_NOTICE","公共訊息數目");
define("USERINFO_NUMBEROF_PRIVATE_NOTICE","私人訊息數目");
define("USERINFO_ACTIVATED","註冊的帳號已被啟用");
define("USERINFO_ACTIVATIONTEXT","Galaxytool的管理者已開通你的帳號！\n\n祝你（妳）使用Galaxytool愉快 !");
// new 4.8
define("USERINFO_LAST_SUBMIT","Inserted last data");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","OGame Galaxytool - Alliance History");
define("ALLYHISTORY_TBLHEAD","歷史統計");
define("ALLYHISTORY_PLAYERNAME","玩家");
define("ALLYHISTORY_ALLYNAME","聯盟");
define("ALLYHISTORY_LASTMONTH","上個月"); // changed at 4.0
define("ALLYHISTORY_ALL_DATA","所有有效的資訊"); // new 4.0
define("ALLYHISTORY_SHOW","顯示統計數值");
define("ALLYHISTORY_TIMESPAN","時間跨度");
define("ALLYHISTORY_PROGESS","發展狀況");
define("ALLYHISTORY_SCORE","分數");
define("ALLYHISTORY_FSCORE","艦隊數"); // new 4.0
define("ALLYHISTORY_RSCORE","研究等級"); // new 4.0
define("ALLYHISTORY_MEMBER","盟員"); // new 4.0
define("ALLYHISTORY_NOTHING","未找到符合的");
define("ALLYHISTORY_DETAILS","詳情");
define("ALLYHISTORY_SHOW_ADDRESS","座標");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","玩家資訊");
define("DETAILEDINFO_ALLYINFO_TITLE","聯盟咨詢");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","玩家詳細資訊");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","聯盟詳細資訊");
define("DETAILEDINFO_NO_ALLIANCE","none");
define("DETAILEDINFO_SCORE","分數");
define("DETAILEDINFO_FLEET","艦隊數");
define("DETAILEDINFO_RESEARCH","研究等級");
define("DETAILEDINFO_RANK","排名");
define("DETAILEDINFO_POINTS","分數");
define("DETAILEDINFO_KNOWN_PLANETS","已知的星球");
define("DETAILEDINFO_MOONS","已知的月球");
define("DETAILEDINFO_PHALANX_AREA","感應範圍");
define("DETAILEDINFO_NO_PHALANX_AREA","未知或沒有感應範圍");
define("DETAILEDINFO_NOTICES","訊息");
define("DETAILEDINFO_NO_NOTICES","沒有訊息");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","先前的聯盟");
define("DETAILEDINFO_RESOURCES_PER_HOUR","每小時的資源量");
define("DETAILEDINFO_RESOURCES_PER_DAY","每天的資源量");
define("DETAILEDINFO_RESOURCES_PER_WEEK","每週的資源量");
define("DETAILEDINFO_RESOURCES_PER_MONTH","每30天的資源量");
define("DETAILEDINFO_METAL","金屬");
define("DETAILEDINFO_CRYSTAL","晶體");
define("DETAILEDINFO_DEUTERIUM","重氫");
define("DETAILEDINFO_UNKNOWN","未知");
define("DETAILEDINFO_SCORE_DISTRIBUTION","分數分佈圖");
// new 4.2
define("DETAILEDINFO_GENERAL","詳情");
define("DETAILEDINFO_MEMBERS","盟員");
define("DETAILEDINFO_GRAPHS","圖表");
define("DETAILEDINFO_RESOURCES","資源");
define("DETAILEDINFO_FLEET_TAB","艦隊");
define("DETAILEDINFO_TECH","研究");
define("DETAILEDINFO_FLEET_DETAIL","加總 / (盟員平均數) 所有可用的間諜報告");
define("DETAILEDINFO_TECH_DETAIL","平均所有可用的玩家資訊");
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
define("ADMIN_TITLE","Administration of the Galaxytool");
define("ADMIN_DISCLAMER","注意: 運行腳本的風險自己承擔, 大多數腳本都會刪除數據.");
define("ADMIN_INCONSISTENCIES","數據庫裡的不一致");
define("ADMIN_PLANETS","在0號或者大於15號位的星球");
define("ADMIN_GALAXIES","刪除大於 &1 的銀河系 ");
define("ADMIN_PLAYERS","刪除沒有OGame ID的使用者-導致復數的登錄者");
define("ADMIN_REPORTS","刪除不存在的星球的間諜報告");
define("ADMIN_MISC","雜項");
define("ADMIN_RESET","重置 Galaxytool (只有使用者與ip表不被刪除)");
define("ADMIN_OLD_PLAYERS","刪除匯入大於 &1 天的玩家信息");
define("ADMIN_OLD_REPORTS","刪除匯入大於 &1 天的間諜報告");
define("ADMIN_LOADING","加載頁面的時候不要關閉窗口.");
define("ADMIN_STATUS","你的請求的狀態");
define("ADMIN_SELECTION","至少要選中一項!");
define("ADMIN_SAFETY","確定要運行所選腳本麼?");
define("ADMIN_DONE","完成");
define("ADMIN_NOTBD","沒有執行操作");
// new 4.3
define("ADMIN_OLD_GALAXIES","刪除匯入大於 &1 天的銀河系");
define("ADMIN_UNUSED_PLAYERS","刪除在銀河系視圖中未出現的玩家");
// new 4.7
define("ADMIN_OLD_ACTIVITIES","刪除匯入大於 &1 天未活動的玩家");
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
define("ERRORPAGE_PAGEFORWARD","如果你的瀏覽器沒有自動跳轉請點擊這裡");
define("ERRORPAGE_PERMISSION_DENIED","你沒有權限查看此頁 點擊返回.");

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
define("COMBAT_REPORT_OUDATED_GALAXYVIEW","您的銀河資料已經過期，請優先瀏覽戰報來源和目標座標!");

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