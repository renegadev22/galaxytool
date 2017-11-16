<?php
/* simplified chinese
 * defines the characters used in OGame to indicate player status
 */
define("PLAYER_BANNED","b");
define("PLAYER_VACATION_MODE","u");
define("PLAYER_NOOB","n");
define("PLAYER_INACTIVE","i");
define("PLAYER_LONG_INACTIVE","I");
define("PLAYER_OUTLAW","o");

/*********************************************************************/
/***************************** public ********************************/
/*********************************************************************/
//index.php
define("L_USERNAME","账号");
define("L_PASSWORD","密码");
define("L_LOGINFAILURE","账号或密码错误，或者你的账号没有启用。");
define("L_TOKENFAILURE","登录密钥错误或者你的账号没有启用。");
define("L_LOGINTEXT","请登录。");
define("L_LANGUAGE","可选择的语言(Available languages)：");//keep english as fallback
define("L_TIMEOUT","等待时间过久！");
define("L_REGISTER","注册");
define("L_PWLOST","找回密码");
define("INDEX_TITLE","OGame Galaxietool - 概览");
define("INDEX_INFO","数据库信息");
define("INDEX_ENTRIES","太阳系数目");
define("INDEX_ENTRIES_LASTWEEK","最近一周更新的太阳系");
define("INDEX_ENTRIES_TO_OLD","一个月前更新的太阳系");
define("INDEX_REGISTERED_USERS","注册的用户数目");
define("INDEX_PAGEFORWARD","如果你的浏览器无法自动进入下一页, 请点击这里！");
define("INDEX_NOTICES","讯息数目");
define("INDEX_PLAYERS","玩家数目");
define("INDEX_ALLIES","联盟数目");
define("INDEX_REPORTS","间谍报告数目");
define("INDEX_VERSION","下载最新的版本！");
define("INDEX_LATEST_VERSION","你使用的已是最新版本！");
define("INDEX_SHOUTBOX","留言簿");
define("INDEX_NOENTRY","没有留言！");
define("INDEX_COMMENT","输入你的留言");
define("INDEX_INSERT","提交");
define("INDEX_UMOD","假期模式中的玩家");
define("INDEX_NO_MOONS","月球的数目");
define("INDEX_NO_EMPTY_SYSTEMS","空白太阳系数");
define("INDEX_NO_FULL_SYSTEMS","全部占满的太阳系数");
define("INDEX_NO_TARGETS","可以被攻击的星球");
// 4.0
define("INDEX_USERINFO","用户数量");
define("INDEX_ONLINE","在线人数");
define("INDEX_TODAY","今天登录的用户");
define("INDEX_ALL","总登录次数");
// 4.3.7
define("GENERAL_LOAD_FORM","从数据载入");
define("GENERAL_SAVE_FORM","保存到数据");
define("GENERAL_SAVE_AS_TEXT","另存为");
define("GENERAL_SAVE","保存");
// 4.8
define("INDEX_USERMANAGEMENT","活动概览");
define("INDEX_NEEDADMIN","需要解锁的账号");
define("INDEX_NEEDEMAIL","不可用的账号");
define("INDEX_TOOLBAR_INFO","Galaxytool 插件信息");
define("INDEX_TOOLBAR_URL","Galaxytool URL");//translation is the same
define("INDEX_TOOLBAR_VERSION_REQUIRED","Galaxytool插件至少需要版本");
define("INDEX_TOOLBAR_INSTALL_GUIDE","插件安装引导");
define("INDEX_TOOLBAR_TOKEN","登录密钥");
define("INDEX_TOOLBAR_NEW_TOKEN","获取新密钥");
define("INDEX_PLAYERS_WITH_N_PLANETS","至少有 &1 个球的玩家");
define("INDEX_GETTING_STARTED","Galaxytool 入门指南");
define("INDEX_GETTING_STARTED1","欢迎来到 Galaxytool!");
define("INDEX_GETTING_STARTED2","Galaxytool能帮助你分析在OGame 宇宙&1上正在发生的事");
define("INDEX_GETTING_STARTED3","你需要先插入数据，才能分析数据。适用于Firefox的请到这里 &1 下载");
define("INDEX_GETTING_STARTED4","安装完插件，你可以像平常一样在OGame浏览银河系，当有数据发送到Galaxytool时，你会看到一个小小的状态窗口");
define("INDEX_GETTING_STARTED5","一旦数据汇入了Galaxytool, 你就可以分析玩家在哪里有殖民地，有几个，间谍报告，以及他的在线纪录");
define("INDEX_GETTING_STARTED6","她还能帮助你分析你的战斗报告，看最近几天后几周抢劫了多少资源，或者如果你有一个竞争对手，可以看到你自己实力的进步。");
define("INDEX_GETTING_WIKIPAGE","还有更多Galaxytool功能等您体验");
define("INDEX_GETTING_WIKIPAGE2","去我们的wiki看看吧");
define("INDEX_GETTING_BOARD","反馈及新想法，可以发到论坛：");
define("INDEX_GETTING_CHAT1","或访问聊天室：");
define("INDEX_GETTING_CHAT2","我们不是7×24小时提供服务，只是腾出一些闲暇时间在线，所以请不要着急");
// new 5.0
define("INDEX_CLOSE","关闭");
define("INDEX_LOGIN","登录");
define("GENERAL_REQUIRED_FIELDS","请填写所有必填项");
define("INDEX_MESSAGES","消息");
define("INDEX_EXAMPLE","例子");
define("INDEX_INVALID_DATA","无效数据");
define("GENERAL_COLUMN_HIDE_TITLE","管理列");
define("GENERAL_COLUMN_HIDE_INFO","请选择你想在列表中看到的列");
define("GENERAL_ENTRIES_DELETED","已删除 &1 个项目");
define("GENERAL_APPLY","应用");
define("STARTPAGE_GALAXYTOOL_DESCR","<em>Galaxytool</em> 是网页游戏的 OGame 的一个浏览器。");
define("GENERAL_OVERWRITE","覆盖重复的项目");
define("GENERAL_OVERWRITE_QUESTION","覆盖？");
define("INDEX_OWN_LOGINS","你的登录");
define("GENERAL_OPEN_IN_NEW_WINDOW","在新窗口中打开");
//kamra edit start
define("INDEX_NO_REG","不开放注册");
//kamra edit end
// 5.1
define("GENERAL_UNIT_OF_MEASURE_DAYS","Days");

/*********************************************************************/
/***************************** internal ******************************/
/*********************************************************************/
// index.php
define("PROGRAM_NAME","OGame Galaxytool");
define("SHORTNAME","Galaxytool");
define("BACK_INDEX","回到首页");
define("UNIVERSE","宇宙");

// search
define("MENU_INFO_LINKS","信息");
define("MENU_PAGE","总览");
define("MENU_DB_SEARCH","查找玩家或联盟");
define("MENU_DB_NOTICES","查找讯息");
define("MENU_DB_REPORTS","查找间谍报告");
define("MENU_GALAXYVIEW","查看星系");
define("MENU_STATISTICS","排名统计");
define("MENU_ALLYHISTORY","历史总览");
// 4.7
define("MENU_FLEET_MOVEMENTS","舰队移动记录");
define("MENU_COMBAT_REPORTS","战斗报告");
define("MENU_MESSAGES","游戏内消息");

// insert / change
define("MENU_OPTION_LINKS","选项");
define("MENU_DB_REFRESH","汇入数据");
define("MENU_NOTICES","公告");
define("MENU_DB_STATUS","数据库状况");
define("MENU_USEROPTIONS","管理用户");
define("MENU_USEROPTIONS2","个人选项");
define("MENU_USEROPTIONS3","账号信息");
// 4.2
define("MENU_ADMIN","管理维护");
// 4.3.3
define("MENU_LOGOUT","登出");

// Stuff
define("MENU_STUFF","杂项");
define("MENU_FORUM_THREAD","GalaxyTool开发论坛");
define("MENU_DOWNLOADPAGE","下载点");
define("MENU_LANGUAGE","语言");
define("MENU_HELP","求助");
// 4.0
define("MENU_TOOLOPTIONS","Galaxytool 个人选项");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1"," 被汇入数据库");
define("PARSER_ERROR1","插入以下坐标时发生错误:");
define("PARSER_ERROR2","无法找到数据库！");
define("PARSER_ERROR3","无法找到数据库服务器！");
define("PARSER_WRONG_UNIVERSE","宇宙不匹配 - 当前: \"&1\"  预期: \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","OGame Galaxytool - 搜索页");
define("SHOW_SEARCH","查找玩家或联盟");
define("SHOW_ALLYSYMBOL","联盟");
define("SHOW_PLAYERNAME","玩家");
define("SHOW_MOONS","有月球的星球");
define("SHOW_NOTICES","有讯息的星球");
define("SHOW_COLONIES","依星球位置");
define("SHOW_YES","是");
define("SHOW_NO","否");
define("SHOW_SEARCHRANGE","范围");
define("SHOW_SEARCH_IN","查找银河系(1~9)");
define("SHOW_FROM_SYSTEM","从太阳系(1~499)");
define("SHOW_FROM_PLANET","从星球(1~15)");
define("SHOW_TO","到");
define("SHOW_DESCRIPTION","你可以在联盟或玩家栏使用通配符&quot;*&quot;. 这样你可以找到所有名字相似的玩家！<br />可以只填入你感兴趣的查询条件.");
define("SHOW_SORT_BY","排列标准");
define("SHOW_GALASYSTEM","银河系/太阳系");
define("SHOW_ALLYNAME","联盟名");
define("SHOW_SEARCHBUTTON","开始查找");
define("SHOW_ADDRESS","位置");
define("SHOW_ALLYSORT","联盟");
define("SHOW_PLANET","星球名");
define("SHOW_STATUS","状态");
define("SHOW_CURRENTNESS","更新时间");
define("SHOW_PLAYER_STATUS","玩家状态");
define("SHOW_PLAYER_STATUS1","全部");
define("SHOW_PLAYER_STATUS2","可被攻击的");
define("SHOW_PLAYER_STATUS3","Ｉ羊");
define("SHOW_HITS","共");
define("SHOW_OF","于");
define("SHOW_ASC","升序排列");
define("SHOW_DESC","降序排列");
define("SHOW_RESULTS","一页显示几笔数据");
define("SHOW_MOON","月球");
define("SHOW_UKMOONSIZE","大小未知");
define("SHOW_DF","残骸");
define("SHOW_DF_LONG","残骸");
define("SHOW_METAL","金属");
define("SHOW_METAL_LONG","金属");
define("SHOW_CRYSTAL","晶");
define("SHOW_CRYSTAL_LONG","晶体");
define("SHOW_BOTH","两者一起");
define("SHOW_AT_LEAST","(至少)");
define("SHOW_DATE","日期");
define("SHOW_DATE_0","不介意");
define("SHOW_DATE_1","之后");
define("SHOW_DATE_2","之前");
define("SHOW_RANK","排名");
define("SHOW_FRANK","舰队数排名");
define("SHOW_MEMBERS","盟员");
define("SHOW_NOTRANKED","没有找到数据");
define("SHOW_NOTICERES","公告");
define("SHOW_REPORTS","有间谍报告的星球");
define("SHOW_REPORTS_SHORT","间谍报告");
define("SHOW_NOTHING","没有找到数据");
define("SHOW_ALLIANCE_STATUS","联盟关系");
define("SHOW_NO_STATUS","无关系");
define("SHOW_NAP","互不侵犯");
define("SHOW_ALLIED","结盟");
define("SHOW_WAR","宣战");
define("SHOW_BOYCOTT","抵制");
define("SHOW_NEUTRAL","中立");
define("SHOW_OWN","所在联盟");
define("SHOW_WING","子盟");
// obsolete with 5.0
define("SHOW_EXT_OPTIONS1","显示更多的查找选项（范围、排名、日期或残骸）");
define("SHOW_EXT_OPTIONS2","显示更多的查找选项（位置、月球、间谍报告、讯息、玩家状况或外交状况）");
define("SHOW_EXT_OPTIONS3","显示更多的查找选项（排列规则）");
// new 5.0
define("SHOW_EXTENDED","高级搜索");
define("SHOW_MOON_SELECTION","有月的球");
define("SHOW_REPORT_SELECTION","有报告的球");
define("SHOW_FILTER_BY","从列表里排除");
define("SHOW_FILTER_NONE","无");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Show players without score changes within the last few days");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","OGame Galaxytool - 状态");
define("STATUS_DB_STATUS","数据库状态");
define("STATUS_COLOR","颜色");
define("STATUS_AGE1","1 天内更新.");
define("STATUS_AGE2","2 - 4 天内更新.");
define("STATUS_AGE3","4 - 7 天内更新.");
define("STATUS_AGE4","1 - 2 星期内更新.");
define("STATUS_AGE5","2 - 4 星期内更新.");
define("STATUS_AGE6","1个月前更新的!");
define("STATUS_AGE7","从未记录过.");
define("STATUS_ON","在线");
define("STYLES_COLOR1","颜色1");
define("STYLES_COLOR2","颜色2");
define("STYLES_COLOR3","颜色3");
define("STYLES_COLOR4","颜色4");
define("STYLES_COLOR5","颜色5");
define("STYLES_COLOR6","颜色6");
define("STYLES_COLOR7","颜色7");
// 4.8
define("STATUS_DB_LEGEND","图例");
define("STATUS_GALAXY","银河系总览");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","用户管理");
define("USER_NAMES","账号");
define("USER_ERROR","错误");
define("USER_NEWUSER","新用户");
define("USER_OPTIONS","个人设置");
define("USER_USERNAME","账号");
define("USER_PASSWORD","密码");
define("USER_PASSWORD_CONFIRM","密码确认");
define("USER_GALAXY","银河系");
define("USER_SEARCH","查找权");
define("USER_INSERT","数据汇入权");
define("USER_DELETE","删除");
define("USER_DELETE_ENTRY","你确定要删除用户： ");
define("USER_STATUS","查看所有状况权");
define("USER_STYLES","修改布局");
define("USER_SUBMIT","提交");
define("USER_RESET","重新输入");
define("USER_YES","是");
define("USER_NO","否");
define("USER_STYLEPATH","styles.css路径");
define("USER_PROBES","观看/输入间谍报告");
define("USER_EMAIL","E-mail");
define("USER_ERROR1","密码错误 或 无效的E-mail！");
define("USER_ERROR2","无效的E-mail！");
define("USER_INGAME","OGame的账号");
define("USER_ALLYTAG","联盟");
define("USER_ALLYHISTORY","历史概览");
define("USER_DIPLOMATIC","更改外交状态");
define("USER_STATSPAGE","状况页数据数目设定");
define("USER_LINKS","链接（将显示在左下方）");
define("USER_LINKS2","格式:<br>text;url<br>text2;url2<br>text3;url3");
define("USER_EXPORT_TITLE","颜色设定 (BB Codes)");
define("USER_BB_COORDINATES","坐标");
define("USER_BB_MOON","月球");
define("USER_BB_DEBRIS","残骸");
define("USER_BB_ALLY","联盟");
define("USER_BB_ALLYDETAILS","联盟详细资料");
define("USER_BB_PLAYERNAME","玩家名称");
define("USER_BB_BANNED","被封的玩家");
define("USER_BB_VACATION","假期模式");
define("USER_BB_NOOB","实力弱的玩家");
define("USER_BB_INACTIVE","Ｉ羊");
define("USER_BB_LONGINACTIVE","Ｉｉ羊");
// new with 4.7
define("USER_DELETION","删除");
define("USER_FLEETINFO",MENU_FLEET_MOVEMENTS);
define("USER_ACTIVITIES","玩家活跃纪录");
define("USER_MAINTENANCE","Galaxytool 维护");
define("USER_MANAGEMENT",MENU_USEROPTIONS);
define("USER_DELETE_MY_COMBAT_REPORTS","删除我的战斗报告");
define("USER_DELETE_MY_MESSAGES","删除我的消息");
define("USER_DELETE_MY_FLEETMOVES","删除我移动中的舰队");
// 4.8
define("USER_DELETE_MY_COMBAT_REPORTS_LIMITED","删除我 &1 天前的战斗报告");
define("USER_DELETE_MY_MESSAGES_LIMITED","删除我 &1 天前的消息");
define("USER_TABLE_ENTRIES","每页显示结果数");
// 5.0
define("USER_EXISTS","用户已存在");
define("USER_BB_OUTLAW","违纪");
define("USER_INVALID_URL","URL &1 似乎已经失效 - 此 URL 会被忽略");

/*********************************************************************
* galaxyview.php
*********************************************************************/
define("VIEW_TITLE","OGame Galaxytool - 银河系");
define("VIEW_NODATA","没有数据输入！");
define("VIEW_GALAXY","银河系");
define("VIEW_SYSTEM","太阳系");
define("VIEW_POSITION","位置");
define("VIEW_PLANET","星球");
define("VIEW_MOON","月球");
define("VIEW_TF","残骸");
define("VIEW_PLAYER","玩家");
define("VIEW_PLAYER_ADD","(排名 / 状况)");
define("VIEW_ALLY","联盟");
define("VIEW_ALLY_ADD","(排名 / 人数)");
define("VIEW_METAL","金属");
define("VIEW_CRYSTAL","晶体");
define("VIEW_COLONISED","星球有人居住");
define("VIEW_UKMOONSIZE","未知");
define("VIEW_BACK","返回");
define("VIEW_NOTICE","讯息");
define("VIEW_REPORTS","间谍报告");
define("VIEW_MOONPHALANX","下列的月能扫到这个太阳系");
define("VIEW_NOMOONS","暂未知晓");
define("VIEW_IRAKS","下列星球能用星级导弹打到这个太阳系");
define("VIEW_NOIRAKS","暂未知晓");
// 4.0
define("VIEW_MOON_DESTROY_CHANCE","毁灭月球的机率");
define("VIEW_CHANCE_WITH_ONE","当派一颗死星时");
define("VIEW_CHANCE_WITH_N","派 ");
define("VIEW_DEATH_STARS","死星时");
define("VIEW_DS_DESTROY_CHANCE","死星毁灭的机率");
define("VIEW_TOP","TOP");
// new 4.3.5
define("VIEW_GO","走你！");
// new 5.0
define("VIEW_DIAMETER","直径");

/*********************************************************************
* change_password.php
**********************************************************************/
define("PW_TITLE","OGame Galaxytool - 个人选项");
define("OLD_PASSWORD","目前密码");
define("NEW_PASSWORD","新密码");
define("CONFIRM_NEW_PASSWORD","确认新密码");
define("PW_MISMATCH","两次输入的密码不同！");
define("PW_ERROR","目前密码不正确！");
define("UPDATE_DONE","修改成功！");
// new 4.2
define("TIMEZONE_OFFSET","相对于服务器的时区偏移量");
// new 4.3
define("DELETE_ACCOUNT","删除这个Galaxytool账号");
define("DELETE_ACCOUNT_SAFETY_REQUEST","真的要删除这个Galaxytool账号吗?");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","已获得权限");
define("CH_PASSWD_ADMIN","管理员");
// new 4.7
define("TIMEZONE_OGAME_OFFSET","相对于OGame服务器的时区偏移量");
// new 4.8
define("CH_PASSWD_USER_LANGUAGE","登陆后切换到这个语言");
define("CH_PASSWD_USER_LANGUAGE_NO_CHANGE","不改变");
define("CH_PASSWD_EXPAND","展开");
define("CH_PASSWD_COLLAPSE","收起");
define("CH_PASSWD_HIDDEN","隐藏");
define("CH_PASSWD_GETTING_STARTED","登录后显示入门指南");
define("CH_PASSWD_PLUGIN","登录后显示插件信息");

/*********************************************************************
* notices.php
**********************************************************************/
define("NOTICE_TITLE","OGame Galaxytool - 注记");
define("NOTICE_HEADER","编辑注记");
define("NOTICE_HEADER2","编辑自己的注记");
define("NOTICE_PUBLIC","对别人公开 ?");
define("NOTICE_YES","是");
define("NOTICE_NO","否");
define("NOTICE_TEXT","注记文本");
define("NOTICE_SAVE","储存");
define("NOTICE_DELETED","已删除");
define("NOTICE_SAVED","已储存.");
define("NOTICE_RESULTS","所有结果");
define("NOTICE_USER","用户");
define("NOTICE_DATE","日期");
define("NOTICE_EDIT","编辑");
define("NOTICE_DELETE","删除");
define("NOTICE_NEW","创建我的项目");
define("NOTICE_NOTPUBLIC","注记未公开.");
define("NOTICE_ALL","所有");
define("NOTICE_NONE",SHOW_FILTER_NONE);
define("NOTICE_SEARCH","查找讯息");
define("NOTICE_SEARCH_SHORT","开始查找");
define("NOTICE_HITS","共");
define("NOTICE_SHOWRESULTS","显示的数据笔数");
define("NOTICE_OF","于");
define("NOTICE_NOTHING","没有找到符合的！");
// 4.0
define("NOTICE_CHARS","字符");
define("NOTICE_PLAYERNAME","玩家");
define("NOTICE_SHOWALL","显示所有注记");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","OGame Galaxytool - 间谍报告");
define("REPORTS_RESOURCES","资源");
define("REPORTS_FLEET","舰队");
define("REPORTS_DEFENCE","防御");
define("REPORTS_BUILDINGS","建筑");
define("REPORTS_TECHNOLOGY","科技");
define("REPORTS_MOON","月球");
define("REPORTS_SEARCH","查找间谍报告");
define("REPORTS_SEARCH_SHORT","开始查找");
define("REPORTS_HITS","共");
define("REPORTS_NOTHING","没有找到符合的！");
define("REPORTS_ADDRESS","位置");
define("REPORTS_CURRENTNESS","更新时间");
define("REPORTS_PLAYERNAME","玩家名称");
define("REPORTS_ALLY","联盟");
define("REPORTS_VIEW","间谍报告");
define("REPORTS_SEARCH_IN","查找银河系(1~9)");
define("REPORTS_FROM_SYSTEM","从太阳系");
define("REPORTS_TO","到");
define("REPORTS_DELETE","删除");
define("REPORTS_DELETED","已删除");
define("REPORTS_RESULTS","显示的数据笔数");
define("REPORTS_OF","于");
define("REPORTS_DATE","日期");
define("REPORTS_DATE_0","不介意");
define("REPORTS_DATE_1","之前");
define("REPORTS_DATE_2","之后");
define("REPORTS_NOTICES","讯息");
define("REPORTS_AT_LEAST_RESOURCES","资源(至少)");
define("REPORTS_SEARCH_EXTENDED","查找后展开");
define("REPORTS_FLEET_RESIS","舰队分");
define("REPORTS_DEFENCE_RESIS","防御分");
define("REPORTS_ALL_RESIS","总积分");
define("REPORTS_TECHS","三围");
define("REPORTS_UNKNOWN_ENTRIES","未知项");
define("REPORTS_PARTLY_INSERTED","数据不完整");
define("REPORTS_FOR_ALL_RES","所有资源需");
define("REPORTS_FOR_TF","残骸需");
define("REPORTS_KT","小型运输船");
define("REPORTS_GT","大型运输船");
define("REPORTS_SS","战列舰");
define("REPORTS_REC","回收船");
define("REPORTS_RAIDABLE","只显示能打劫的目标");
define("REPORTS_ALL_RESOURCES","所有资源");
// 4.0
define("REPORTS_STUFF","杂项");
define("REPORTS_SPEEDSIM","在线战斗模拟器 Speedsim");
define("REPORTS_DRAGOSIM","在线战斗模拟器 Dragosim");
define("REPORTS_STATUS","状态");
define("REPORTS_ERROR","发生了错误");
// 4.2
define("REPORTS_OWN_REPORTS","只看我的报告");
// 4.3.3
define("REPORTS_UPLOAD_BY","上报者");
// 4.4
define("REPORTS_DEPTH","报告精确度");
define("REPORTS_FLEET_SCORE","舰队分数");
define("REPORTS_DEFENCE_SCORE","防御分数");
// 5.0
define("REPORTS_HOURS","小时");
define("REPORTS_MAX_RESULTS_HIT","你的请求匹配多于 &1 个结果s. 只显示前 &1 个结果. 请调整搜索条件以得到更少数据.");
define("REPORTS_OSIMULATE","在线战斗模拟器 OSimulate");
define("REPORTS_SHOW_ONLY","只显示");
define("REPORTS_SHOW_PLANETS","星球");
define("REPORTS_SHOW_MOONS","月球");
define("REPORTS_OWNER","报告拥有者");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","OGame Galaxytool - 排名统计");
define("STATS_TBLHEAD","排名统计");
define("STATS_RANK","排名");
define("STATS_PLAYERNAME","玩家名称");
define("STATS_ALLYNAME","联盟");
define("STATS_SCORE","分数");
define("STATS_FLEET","舰队数");
define("STATS_RESEARCH","科技等级");
define("STATS_MEMBERS","盟员");
define("STATS_STATUS","状态");
define("STATS_NOTHING",SHOW_NO_STATUS);
define("STATS_NAP",SHOW_NAP);
define("STATS_ALLIED",SHOW_ALLIED);
define("STATS_WAR",SHOW_WAR);
define("STATS_BOYCOTT",SHOW_BOYCOTT);
define("STATS_NEUTRAL",SHOW_NEUTRAL);
define("STATS_OWN",SHOW_OWN);
define("STATS_WING",SHOW_WING);
define("STATS_UPDATE","资料由");
define("STATS_PLAYERSTATS","玩家积分");
define("STATS_ALLYSTATS","联盟积分");
// 4.0
define("STATS_DELETE","删除设定");
define("STATS_CONFIRM_DELETE","你确定要删除吗？");
define("STATS_CHANGE_PLAYER_STATUS","玩家的外交");
define("STATS_CHANGE_ALLIANCE_STATUS","联盟的外交");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","该联盟的所有成员将使用这个关系设定！任何个人的关系设定将会被覆盖！之后你必需去更改其它玩家的关系设定！");
define("STATS_UNKNOWN","其他");
define("STATS_DETAILS","详情");
// 4.4
define("STATS_PLAYERSTATUS",SHOW_PLAYER_STATUS);
define("STATS_IGNORE_STATUS",SHOW_PLAYER_STATUS1);
define("STATS_ACTIVE","活动");
define("STATS_INACTIVE",USER_BB_INACTIVE);
define("STATS_BANNED",USER_BB_BANNED);
define("STATS_VACATION",USER_BB_VACATION);
define("STATS_NOOB",USER_BB_NOOB);
// 4.8
define("STATS_YES",SHOW_YES); // reuse SHOW definitions if applicable
define("STATS_NO",SHOW_NO);
define("STATS_SEARCH","搜索");
define("STATS_SHOW_GRAPH","Show details for score distribution");
define("STATS_LONG_INACTIVE",USER_BB_LONGINACTIVE);
// 4.9
define("STATS_STANDARD","标准分数");
define("STATS_MILITARY","军事分数");
define("STATS_ECONOMY","经济");
define("STATS_HONOUR","荣誉分数");
define("STATS_MILITARY_BUILD","军事建造");
define("STATS_MILITARY_DESTROYED","军事摧毁");
define("STATS_MILITARY_LOST","军事损失");

/*********************************************************************
* register.php
**********************************************************************/
define("REGISTER_REGISTRATE","注册");
define("REGISTER_LOGINNAME","账号");
define("REGISTER_PASSWORD","密码");
define("REGISTER_PASSWORD_CONFIRM","确认密码");
define("REGISTER_EMAIL","E-mail");
define("REGISTER_INGAME","OGame的账号");
define("REGISTER_ALLYTAG","联盟");
define("REGISTER_EMAILVERIFICATION","E-mail查询");
define("REGISTER_EMAILTEXT","请点击这个链接来确认你在 GalaxyTool 的注册！");
define("REGISTER_ERROR1","注册的账号已被使用。");
define("REGISTER_ERROR2","传送E-mail时发生错误！请连络管理者！");
define("REGISTER_ERROR3","数据传送到数据库时发生错误！");
define("REGISTER_INFO1","你的账号已经建立。");
define("REGISTER_INFO2","请查看你的E-mai并点击链接来确认你的申请。");
define("REGISTER_INFO3","账号已被确认！但你仍需等GalaxyTool的管理者帮你开通！");
define("REGISTER_BUTTON","回到首页");
define("REGISTER_NEW_SUBJECT","一个新用户注册到GalaxyTool");
define("REGISTER_NEW_MAILTEXT","一个新用户已经自己注册");
// new 4.2
define("REGISTER_BACK","返回第一页");
// new 4.3.5
define("REGISTER_MISSING_FIELDS","输入所有必填项");
// new 4.8
define("REGISTER_ERROR4","Email地址无效.");
define("REGISTER_ERROR5","两次密码不匹配.");
define("REGISTER_PWS","密码强度");
define("REGISTER_PWS0","非常弱");
define("REGISTER_PWS1","若");
define("REGISTER_PWS2","一般");
define("REGISTER_PWS3","强");
define("REGISTER_PWS4","非常强");
// new 5.0
define("REGISTER_EMAIL_USED","Email地址已被占用");

/*********************************************************************
* lost_password.php
**********************************************************************/
define("LOSTPW_TITLE","密码遗失");
define("LOSTPW_INFO2","新的密码已产生，并已寄到你的E-mail！");
define("LOSTPW_BUTTON1","取得新密码");
define("LOSTPW_BUTTON2","回首页");
define("LOSTPW_LOGINNAME","账号");
define("LOSTPW_EMAIL","E-mail");
define("LOSTPW_ERROR1","数据传送到数据库时发生错误！");
define("LOSTPW_ERROR2","没有找到符答的数据！");
define("LOSTPW_ERROR3","传送E-mail时发生错误！请连络管理者！");
define("LOSTPW_EMAIL_SUBJECT","你申请的新密码");
define("LOSTPW_EMAIL_TEXT1","这是 GalaxyTool 新的登录资料");
define("LOSTPW_EMAIL_TEXT2","账号");
define("LOSTPW_EMAIL_TEXT3","密码");
// new 5.0
define("LOSTPW_INFO1","你会收到一封重置么吗的确认信.");
define("LOSTPW_CONFIRM_RESET_SUBJECT","找回密码?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","Hello,\n\n你请求重置Galaxytool密码. 点击下列连接重置:");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","OGame Galaxytool - 用户信息");
define("USERINFO_NAMES","GalaxyTool的所有用户");
define("USERINFO_DETAIL","用户详细数据");
define("USERINFO_ERROR1","用户ID不存在!");
define("USERINFO_USERNAME","账号");
define("USERINFO_INGAME","OGame的账号");
define("USERINFO_EMAIL","E-mail");
define("USERINFO_ALLYTAG","联盟");
define("USERINFO_STYLEPATH","使用的面版");
define("USERINFO_STATUS","状态");
define("USERINFO_ACTIVATE","开通");
define("USERINFO_LOGINS","登录次数");
define("USERINFO_LASTLOGIN","最近一次的登录时间");
define("USERINFO_DATA","汇入的数据");
define("USERINFO_NODATA","该用户没有汇入任何数据！");
define("USERINFO_GALAXY","银河系");
define("USERINFO_SYSTEMS","资料数");
define("USERINFO_IP","IP 位置");
define("USERINFO_LOGINTIME","登录时间");
define("USERINFO_NOLOGIN","这个用户重未登录！");
define("USERINFO_LAST_GALAXYUPDATE","最后汇入数据的时间");
define("USERINFO_LAST_PUBLIC_NOTICE","最后公共消息");
define("USERINFO_LAST_PRIVATE_NOTICE","最后私人消息");
define("USERINFO_NUMBEROF_PUBLIC_NOTICE","公共消息数目");
define("USERINFO_NUMBEROF_PRIVATE_NOTICE","私人消息数目");
define("USERINFO_ACTIVATED","注册的账号已被启用");
define("USERINFO_ACTIVATIONTEXT","Galaxytool的管理者已开通你的账号！\n\n祝你使用Galaxytool愉快 !");
// new 4.8
define("USERINFO_LAST_SUBMIT","最后插入数据");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","OGame Galaxytool - 联盟历史");
define("ALLYHISTORY_TBLHEAD","历史概览");
define("ALLYHISTORY_PLAYERNAME","玩家");
define("ALLYHISTORY_ALLYNAME","联盟");
define("ALLYHISTORY_LASTMONTH","上个月"); // changed at 4.0
define("ALLYHISTORY_ALL_DATA","全部信息"); // new 4.0
define("ALLYHISTORY_SHOW","查看排名统计");
define("ALLYHISTORY_TIMESPAN","Timespan");
define("ALLYHISTORY_PROGESS","进度");
define("ALLYHISTORY_SCORE","分数");
define("ALLYHISTORY_FSCORE","舰队数"); // new 4.0
define("ALLYHISTORY_RSCORE","科技等级"); // new 4.0
define("ALLYHISTORY_MEMBER","盟员"); // new 4.0
define("ALLYHISTORY_NOTHING","未找到符合的");
define("ALLYHISTORY_DETAILS","详情");
define("ALLYHISTORY_SHOW_ADDRESS","坐标");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","玩家信息");
define("DETAILEDINFO_ALLYINFO_TITLE","联盟信息");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","玩家详细信息");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","联盟详细信息");
define("DETAILEDINFO_NO_ALLIANCE","无");
define("DETAILEDINFO_SCORE","分数");
define("DETAILEDINFO_FLEET","舰队数");
define("DETAILEDINFO_RESEARCH","科技等级");
define("DETAILEDINFO_RANK","排名");
define("DETAILEDINFO_POINTS","分数");
define("DETAILEDINFO_KNOWN_PLANETS","已知的星球");
define("DETAILEDINFO_MOONS","已知的月球");
define("DETAILEDINFO_PHALANX_AREA","感应范围");
define("DETAILEDINFO_NO_PHALANX_AREA","未知或没有感应范围");
define("DETAILEDINFO_NOTICES","讯息");
define("DETAILEDINFO_NO_NOTICES","没有讯息");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","先前的联盟");
define("DETAILEDINFO_RESOURCES_PER_HOUR","每小时的资源量");
define("DETAILEDINFO_RESOURCES_PER_DAY","每天的资源量");
define("DETAILEDINFO_RESOURCES_PER_WEEK","每周的资源量");
define("DETAILEDINFO_RESOURCES_PER_MONTH","每30天的资源量");
define("DETAILEDINFO_METAL","金属");
define("DETAILEDINFO_CRYSTAL","晶体");
define("DETAILEDINFO_DEUTERIUM","重氢");
define("DETAILEDINFO_UNKNOWN","未知");
define("DETAILEDINFO_SCORE_DISTRIBUTION","分数分布图");
// new 4.2
define("DETAILEDINFO_GENERAL","详情");
define("DETAILEDINFO_MEMBERS","成员");
define("DETAILEDINFO_GRAPHS","图表");
define("DETAILEDINFO_RESOURCES","资源");
define("DETAILEDINFO_FLEET_TAB","舰队");
define("DETAILEDINFO_TECH","科技");
define("DETAILEDINFO_FLEET_DETAIL","总数 / 所有报告的平均值");
define("DETAILEDINFO_TECH_DETAIL","所有玩家的平均值");
// new 4.3
define("DETAILEDINFO_PLANET_TAB",REPORTS_SHOW_PLANETS);
define("DETAILEDINFO_MOON_TAB",REPORTS_SHOW_MOONS);
// 4.7
define("DETAILEDINFO_ACTIVITIES","活跃情况");
define("DETAILEDINFO_NODATA",VIEW_NODATA); // reuse existing translations
define("DETAILEDINFO_ACTIVITY_DESCRIPTION","从以下方面显示 &1 的活跃情况：");
define("DETAILEDINFO_GALAXYVIEWS","银河系视图");
define("DETAILEDINFO_SCANS","间谍活动");
define("DETAILEDINFO_MESSAGES","玩家消息");
define("DETAILEDINFO_COMBATS","战斗报告");
define("DETAILEDINFO_ALLYPAGE","联盟概览");
define("DETAILEDINFO_MANUAL","手工输入");
define("DETAILEDINFO_START","从");
define("DETAILEDINFO_TO","到");
define("DETAILEDINFO_TODAY","今天");
define("DETAILEDINFO_DATA_RESTRICTION","限制在:");
define("DETAILEDINFO_WEEKDAY_WEEKEND","周末");
define("DETAILEDINFO_WEEKDAY_WORKINGDAY","工作日");
define("DETAILEDINFO_WEEKDAY_MONDAY","周一");
define("DETAILEDINFO_WEEKDAY_TUESDAY","周二");
define("DETAILEDINFO_WEEKDAY_WEDNESDAY","周三");
define("DETAILEDINFO_WEEKDAY_THURSDAY","周四");
define("DETAILEDINFO_WEEKDAY_FRIDAY","周五");
define("DETAILEDINFO_WEEKDAY_SATURDAY","周六");
define("DETAILEDINFO_WEEKDAY_SUNDAY","周日");
define("DETAILEDINFO_WEEKDAY_SHORTLENGTH",4); // number of characters to shorten week day
define("DETAILEDINFO_PLAYER_CURRENTLY_ACTIVE","他现在在线");
define("DETAILEDINFO_PLAYER_MESSAGES","可用玩家消息");
define("DETAILEDINFO_SHOW","显示");
define("DETAILEDINFO_NONE","没有可用信息");
define("DETAILEDINFO_ENTER_MANUALLY","手工输入活跃情况");
define("DETAILEDINFO_PLAYER_SEEN_ON","玩家在线于");
define("DETAILEDINFO_INSERT","插入");
define("DETAILEDINFO_OGAME_SERVERTIMES","请留意: 所有数据和时间都来源于OGame服务器!");
define("DETAILEDINFO_DAY_VIEW","24小时视图");
define("DETAILEDINFO_WEEK_VIEW","周视图");
// new 4.8
define("DETAILEDINFO_HOME_PLANET","母星");
// new 5.0
define("DETAILEDINFO_PLANETNAME","名称"); // also used for moons!
define("DETAILEDINFO_DEFENCE_SCORE","防御分数");
define("DETAILEDINFO_DEFENCE_SCORE_TOOLTIP","防御分数 = 舰队 - 分数（？） + 科技 + 经济.<br/>所有统计排名信息数据需要最新的，才能反映真实状况!");
define("DETAILEDINFO_SCORE_PER_SHIP","单船分数");
define("DETAILEDINFO_SHIPS","舰队数量");
define("DETAILEDINFO_DATE_IN_FUTURE","Do not maintain times which are not in the past.");

// new 4.2
/*********************************************************************
* administration.php
**********************************************************************/
define("ADMIN_TITLE","Galaxytool系统管理");
define("ADMIN_DISCLAMER","注意:运行下列脚本后果自负! .");
define("ADMIN_INCONSISTENCIES","数据库不一致性");
define("ADMIN_PLANETS","删除非法位置（小于0或大于15）");
define("ADMIN_GALAXIES","删除比 &1 大的银河系");
define("ADMIN_PLAYERS","删除没有关联OGame游戏账号的用户 - 这会清除重复用户");
define("ADMIN_REPORTS","删除不再存在的星球的报告");
define("ADMIN_MISC","杂项");
define("ADMIN_RESET","重置Galaxytool (只保留用户表和ip表)");
define("ADMIN_OLD_PLAYERS","删除 &1 天前的玩家数据");
define("ADMIN_OLD_REPORTS","删除 &1 天前的间谍报告");
define("ADMIN_LOADING","正在载入，请不要关闭此窗口.");
define("ADMIN_STATUS","你请求的状态");
define("ADMIN_SELECTION","必须选择一项");
define("ADMIN_SAFETY","你确定要运行脚本吗 ?");
define("ADMIN_DONE","完成");
define("ADMIN_NOTBD","无事可做");
// new 4.3
define("ADMIN_OLD_GALAXIES","删除 &1 天前的星图");
define("ADMIN_UNUSED_PLAYERS","删除不在星图中的玩家（在游戏中已删号）");
// new 4.7
define("ADMIN_OLD_ACTIVITIES","删除 &1 天前的玩家活跃状况");
// new 4.8
define("ADMIN_OLD_COMBATS","删除 &1 天前的战斗报告");
define("ADMIN_OLD_INGAME_MSG","删除 &1 天前的游戏内信息");
// new 5.0
define("ADMIN_OGAME_API","从OGame载入公开数据到Galaxytool");
define("ADMIN_OGAME_ALL_DATA",ALLYHISTORY_ALL_DATA);
define("ADMIN_OGAME_GALAXY_DATA","更新银河系数据");
define("ADMIN_OGAME_STATISTICS_DATA","更新排名统计数据");

// new 4.3.5
/*********************************************************************
* errorpage.php
**********************************************************************/
define("ERRORPAGE_PAGEFORWARD","如果你的浏览器没有自动跳转功能，请点击这里");
define("ERRORPAGE_PERMISSION_DENIED","你没有权限访问这个功能.点击后退.");

// new 4.7
/*********************************************************************
* fleet_movements.php
**********************************************************************/
define("FLEETS_TITLE","OGame Galaxytool - 舰队移动");
define("FLEETS_ACTUAL_FLEETS","当前舰队移动");
define("FLEETS_YES",SHOW_YES);
define("FLEETS_NO",SHOW_NO);
define("FLEETS_DETAILS","详情");
define("FLEETS_MISSION_EXPEDITION","远征探索");
define("FLEETS_MISSION_COLONIZATION","殖民");
define("FLEETS_MISSION_RECYCLE","回收");
define("FLEETS_MISSION_TRANSPORT","运输");
define("FLEETS_MISSION_DEPLOYMENT","部署");
define("FLEETS_MISSION_ESPIONAGE","间谍");
define("FLEETS_MISSION_ACS_DEFEND","ACS防御");
define("FLEETS_MISSION_ATTACK","攻击");
define("FLEETS_MISSION_ACS_ATTACK","ACS攻击");
define("FLEETS_MISSION_MOON_DESTRUCTION","摧毁月球");
define("FLEETS_MISSION_MISSILE_ATTACK","星际导弹攻击");
define("FLEETS_NO_DATA","无可用数据");
// new 5.0
define("FLEETS_FLEET","舰队");
define("FLEETS_ALL_FLEETS","显示所有舰队移动");

/*********************************************************************
* parser_combat_reports.inc.php
**********************************************************************/
define("COMBAT_REPORT_OUDATED_GALAXYVIEW","你的星系资料凹凸了.请先访问战斗发起和目标坐标!");

/*********************************************************************
* messages.php
**********************************************************************/
define("MESSAGES_TITLE","OGame Galaxytool - OGame消息");
define("MESSAGES_PLAYERNAME","玩家姓名");
define("MESSAGES_SUBJECT","主题");
define("MESSAGES_DATE","数据");
define("MESSAGES_FILTER","过滤器");
define("MESSAGES_DELETE","删除消息");
define("MESSAGES_PUBLISH_DETAIL","Publish message by adding the message content to notice text of that player.");
define("MESSAGES_PUBLISH_HEADER","&sender 于 &date 发送了一条消息给 &recipient ：\n\n &message"); // &sender, &recipient, &date, &message replaced at runtime
define("MESSAGES_PLAYER_FILTER","来自玩家:");
// new 5.0
define("MESSAGES_CONTENT","内容");

/*********************************************************************
* combat_reports.php
**********************************************************************/
define("COMBATS_TITLE","OGame Galaxytool - 战斗报告");
define("COMBATS_ATTACKER","攻击方");
define("COMBATS_DEFENDER","防御方");
define("COMBATS_DATE","日期");
define("COMBATS_OWNER","所有者");
define("COMBATS_WINNER","获胜者");
define("COMBATS_COMBATREPORT","战斗报告");
define("COMBATS_COMBAT_AT","战斗地点");
define("COMBATS_LOST_UNITS","损失单位数");
define("COMBATS_LOOT","掠夺");
define("COMBATS_DEBRIS","废墟");
define("COMBATS_AND","和");
define("COMBATS_PUBLISH","公开这个报告");
define("COMBATS_UNPUBLISH","不共享这个报告(再次变为私有)");
define("COMBATS_DELETE","删除报告");
define("COMBATS_CHECK_ALL","全选");
define("COMBATS_UNCHECK_ALL","全不选");
define("COMBATS_WITH_SELECTED","With selected");
define("COMBATS_PUBLIC_REPORTS","公开的报告");
define("COMBATS_YES",SHOW_YES); // no need for translation!
define("COMBATS_NO",SHOW_NO); // no need for translation!
define("COMBATS_SEARCH_OPTIONS","搜索选项");
define("COMBATS_SEARCH","走你！");
define("COMBATS_RESET","清空");
// 4.8
define("COMBATS_COORDINATES",USER_BB_COORDINATES);
define("COMBATS_INVALID_GALAXY_ENTERED","银河系输入不正确");
define("COMBATS_INVALID_SYSTEM_ENTERED","太阳系输入不正确");
define("COMBATS_INVALID_PLANET_ENTERED","星球输入不正确");
define("COMBATS_GALAXY_FROM_TO","银河系");
define("COMBATS_SYSTEM_FROM_TO","太阳系");
define("COMBATS_PLANET_FROM_TO","星球");
define("COMBATS_APPLY",GENERAL_APPLY);
define("COMBATS_COMBAT_SUMMARY","战斗报告摘要");
define("COMBATS_DOWNLOAD_CSV","下载为CSV文件");

/*********************************************************************
* report_archive.php
**********************************************************************/
define("REPORT_ARCHIVE_TITLE","报告存档");
define("REPORT_ARCHIVE_COORDINATES","坐标");
define("REPORT_ARCHIVE_SCANTIME","扫描时间");
define("REPORT_ARCHIVE_DELETE","删除这些项");
define("REPORT_ARCHIVE_CONFIRM_DELETE","确定要删除这些项?");
define("REPORT_ARCHIVE_GALAXY",COMBATS_GALAXY_FROM_TO);
define("REPORT_ARCHIVE_SYSTEM",COMBATS_SYSTEM_FROM_TO);
define("REPORT_ARCHIVE_PLANET",COMBATS_PLANET_FROM_TO);
define("REPORT_ARCHIVE_MOON","月球");
define("REPORT_ARCHIVE_DETAILS","详情");
define("REPORT_ARCHIVE_RESOURCES",DETAILEDINFO_RESOURCES);
define("REPORT_ARCHIVE_HEADER_RESOURCES",REPORTS_RESOURCES);
define("REPORT_ARCHIVE_DETAILS_FOR"," &1 [&2] (&3)的报告存档"); // &1 = planetname; &2 = coordinates; &3 = playername
define("REPORT_ARCHIVE_FLEET_CARGO","运输船容量");
define("REPORT_ARCHIVE_IRAK_RANGE","星际导弹射程");
define("REPORT_ARCHIVE_CHART_TYPE","图表类型");

/*********************************************************************
* install.php
**********************************************************************/
define("INSTALL_TITLE", "Galaxytool 安装程序  版本");
define("INSTALL_PROGRESS", "总体进度");
define("INSTALL_STEP", "步骤");
define("INSTALL_CONTINUE", "继续");
define("INSTALL_VALIDATE", "验证");
define("INSTALL_STEP1", "欢迎");
define("INSTALL_STEP2", "写权限检测");
define("INSTALL_STEP3", "数据库设置");
define("INSTALL_STEP4", "OGame设置");
define("INSTALL_STEP5", "Galaxytool设置");
define("INSTALL_STEP6", "管理员密码");
define("INSTALL_STEP7", "安装Galaxytool");
define("INSTALL_STEP8", "正在结束安装"); // check writable; delete install and update.php and redirect to index.php
define("INSTALL_FILE_DELETE_CHECK","请在网页服务器上删除install.php和update.php.");

define("INSTALL_STEP1_PHP_FAILED", "您的PHP版本 &1  不适合安装 Galaxytool 的这个版本");
define("INSTALL_STEP1_FOPEN_FAILED", "您的PHP不允许使用 FOPEN() 命令. 这将不能访问 OGame API.");
define("INSTALL_STEP1_WELCOME", "欢迎来到 Galaxytool 安装向导.请跟随指引完成安装");//

define("INSTALL_STEP2_DESCRIPTION","请确认config目录下的文件config.php和attributes.php可以写入.");//add path
define("INSTALL_STEP2_DESCRIPTION2","如果你不知道怎样完成，请看这里: &1");
define("INSTALL_STEP2_FILE_NOT_WRITEABLE", "文件不可写入");

define("INSTALL_STEP3_SERVER", "数据库服务器");
define("INSTALL_STEP3_USERNAME", L_USERNAME);
define("INSTALL_STEP3_PASSWORD", L_PASSWORD);
define("INSTALL_STEP3_DBNAME", "数据库名称");
define("INSTALL_STEP3_PREFIX", "表明前缀");
define("INSTALL_STEP3_ENTER_PREFIX", "比如 mytool_");
define("INSTALL_STEP3_ENTER_SERVER", "输入服务器地址. 如果需要可以联系你的系统管理员. 通常正确的地址是 localhost.");
define("INSTALL_STEP3_ENTER_USERNAME", "输入访问数据库需要用到的用户名");
define("INSTALL_STEP3_ENTER_PASSWORD", "输入访问数据库需要用到的密码");
define("INSTALL_STEP3_ENTER_DBNAME", "输入将要安装到的数据库名 (必须已经存在。如果不存在，你可以去新建一个)");//add if not exist,you can create one
define("INSTALL_STEP3_CONNECT_FAILED", "连接到数据库服务器失败");
define("INSTALL_STEP3_DB_FAILED", "没有找到数据库 &1 ");
define("INSTALL_STEP3_MYSQL_VERSION_FAILED", "MySQL 版本 &1 不适合用于安装Galaxytool");

define("INSTALL_STEP4_URL","OGame URL");
define("OGAME_URL_DETAILS","你可以输入任何一个在你登录进游戏后看到的地址. 基于这个URL，可以得到OGame API的地址，这可以用于直接导入数据而不用 Galaxytoolbar. 这个 API 最低适用于OGame 4.1.");
define("INSTALL_STEP4_UNIVERSE","OGame 宇宙");
define("INSTALL_STEP4_DEF_TO_DEBRIS","防御产生废墟");
define("INSTALL_STEP4_DEBRIS_RATE","废墟比例");
define("INSTALL_STEP4_SPEED_RATE","宇宙速率");
define("INSTALL_STEP4_ENTER_UNIVERSE","请输入宇宙名称或(如果是数字命名的)宇宙编号.");
define("INSTALL_STEP4_UNIVERSE_MISSING","你必须定义宇宙名称");
define("INSTALL_STEP4_ENTER_URL","输入你的OGame宇宙地址");
define("INSTALL_STEP4_URL_MISSING","你必须定义OGame宇宙地址");
define("INSTALL_STEP4_URL_CHECK_FAILED","不能在 &1 找到 OGame API");
// 5.1
define("INSTALL_STEP4_GETSETTINGS","Fetch settings");

define("INSTALL_STEP5_TOOLNAME","Galaxytool 名称");
define("INSTALL_STEP5_ENTER_TOOLNAME","这个名字会显示在登录页面，一次可以分辨出你的 Galaxytool");
define("INSTALL_STEP5_LANGUAGE","默认语言");
define("INSTALL_STEP5_EMAIL_TO","Email 收件人");
define("INSTALL_STEP5_ENTER_EMAIL_TO","这个Email用来接收提醒和注册请求");
define("INSTALL_STEP5_EMAIL_FROM","Email 发件人");
define("INSTALL_STEP5_ENTER_EMAIL_FROM","这个Email被当做 Galaxytool 的默认发件人");
define("INSTALL_STEP5_USE_PHPMAILER","使用 PHPMailer");
define("INSTALL_STEP5_MAXSHOUTS","最大信箱容量");
define("INSTALL_STEP5_ENTER_USE_PHPMAILER","如果你的服务器默认不支持发送邮件，请使用PHPMailer");
define("INSTALL_PHPMAILER_HOST","SMPT 服务器");
define("INSTALL_PHPMAILER_HOST_EXAMPLE","比如 smtp.provider.com");
define("INSTALL_PHPMAILER_USER","SMPT 用户名");
define("INSTALL_PHPMAILER_USER_EXAMPLE","比如 user@provider.dcom");
define("INSTALL_PHPMAILER_PASS","SMPT 密码");
define("INSTALL_PHPMAILER_SECURE","身份验证方法 (比如 ssl)");
define("INSTALL_PHPMAILER_PORT","SMTP 端口");

define("INSTALL_STEP6_INTRO","请设置 <strong>admin</strong> 账号密码。这是你安装后第一次登陆用到的密码.");

define("INSTALL_STEP7_CONFIG","配置文件创建成功");
define("INSTALL_STEP7_CONFIG_FAILED","配置文件创建失败");
define("INSTALL_STEP7_ATTRIBUTES","属性文件创建成功");
define("INSTALL_STEP7_ATTRIBUTES_FAILED","属性文件创建失败");
define("INSTALL_STEP7_CREATED_TABLES","数据表创建成功");

define("INSTALL_STEP8_INTRO","你已经成功安装了 Galaxytool!");
define("INSTALL_STEP8_LOAD_DATA","正在下载OGame数据...（如果长时间没有反应，请进入系统管理再次导入数据）");//add how to import data if this step not finished after a long time
define("INSTALL_STEP8_LOAD_DATA_FINISHED","下载OGame数据完成");
define("INSTALL_STEP8_DELETE_FILE","你现在请从网页服务器删除文件 install.php和update.php.");
define("INSTALL_STEP8_LOGON","你可以使用 <strong>admin</strong> 和你刚才设置的密码登陆.");

/*********************************************************************
* update.php
**********************************************************************/
define("UPDATE_START","开始升级到版本 &1");
define("UPDATE_STEP_DONE","完成");
define("UPDATE_TITLE", "Galaxytool 升级到版本");
define("UPDATE_STEP1_WELCOME", "欢迎来到 Galaxytool 升级向导. 请跟随指引完成升级.");
define("UPDATE_STEP1_BACKUP_FILES", "首先，请备份<strong>config</strong>目录。一旦发生错误，可以以此恢复.");
define("UPDATE_STEP1_BACKUP_DB", "然后备份数据库。 <a href=\"http://www.ehow.com/how_2036600_create-database-php.html\">向导（英文）</a>.");
define("UPDATE_STEP1_PROCEED", "数据库备份完成后，你就可以开始升级流程.");
define("UPDATE_STEP1", INSTALL_STEP1);
define("UPDATE_STEP2", INSTALL_STEP5);
define("UPDATE_STEP2_OLD_VERSION", "现存Galaxytool版本");
define("UPDATE_STEP3", "升级 Galaxytool");
define("UPDATE_STEP3_UPDATE_RUNNING", "正在升级，请稍等...");
define("UPDATE_STEP4", "正在完成升级");
define("UPDATE_STEP4_INTRO","你成功升级了Galaxytool!");
define("UPDATE_STEP4_UPDATE_DONE","升级已完成.");
define("UPDATE_FAILED","升级失败.");

?>