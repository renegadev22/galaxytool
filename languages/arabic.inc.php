<?php
/*
 * defines the characters used in OGame to indicate player status
 */
define("PLAYER_BANNED","م");
define("PLAYER_VACATION_MODE","ع");
define("PLAYER_NOOB","ض");
define("PLAYER_INACTIVE","خ");
define("PLAYER_LONG_INACTIVE","خا");
define("PLAYER_OUTLAW","ق");

/*********************************************************************/
/***************************** public ********************************/
/*********************************************************************/
//index.php
define("L_USERNAME","اسم التسجيل");
define("L_PASSWORD","كلمة السر");
define("L_LOGINFAILURE",".اسم التسجيل أو كلمة السر خطأ أو لم يتم تفعيل حسابك ");
define("L_TOKENFAILURE","مفتاح التسجيل خطأ أو لم يتم تفعيل حسابك");
define("L_LOGINTEXT","الرجاء التسجيل");
define("L_LANGUAGE",": اللغات المتوفرة");
define("L_TIMEOUT","! تم تسجيل الخروج");
define("L_REGISTER","تسجيل لاول مرة");
define("L_PWLOST","كلمة السر مفقودة");
define("INDEX_TITLE","أوجيم جالكسيتول - النظرة العامة");
define("INDEX_INFO","معلومات");
define("INDEX_ENTRIES","مجموع الأنظمة");
define("INDEX_ENTRIES_LASTWEEK","أنظمة جديدة الأسبوع السابق");
define("INDEX_ENTRIES_TO_OLD","أنظمة قديمة أكثر من شهر");
define("INDEX_REGISTERED_USERS","اللاعبين المسجلين");
define("INDEX_PAGEFORWARD","إذا كان المتصفح لا يقبل تغير الصفحة التلقائي الرجاء استعمال هذا الرابط");
define("INDEX_NOTICES","ملاحظات");
define("INDEX_PLAYERS","احصائيات اللاعبين");
define("INDEX_ALLIES","احصائيات التحالفات");
define("INDEX_REPORTS","تقارير التجسس");
define("INDEX_VERSION","أحدث نسخة للتحميل");
define("INDEX_LATEST_VERSION","لا توجد نسخة أحدث");
define("INDEX_SHOUTBOX","صندوق الدردشة");
define("INDEX_NOENTRY","لا توجد محادثات حتى الآن");
define("INDEX_COMMENT","Chat");
define("INDEX_INSERT","أضافة بيانات");
define("INDEX_UMOD","لاعب في عطلة");
define("INDEX_NO_MOONS","عدد الأقمار");
define("INDEX_NO_EMPTY_SYSTEMS","عدد الأنظمة الفارغة");
define("INDEX_NO_FULL_SYSTEMS","عدد الأنظمة المكتملة");
define("INDEX_NO_TARGETS","عدد الأهداف المحتملة");
// 4.0
define("INDEX_USERINFO","أرقام المستخدمين");
define("INDEX_ONLINE","متصل الآن");
define("INDEX_TODAY","أتصل اليوم");
define("INDEX_ALL","مجموع الاتصال");
// 4.3.7
define("GENERAL_LOAD_FORM","تحميل البيانات");
define("GENERAL_SAVE_FORM","تسجيل البيانات");
define("GENERAL_SAVE_AS_TEXT","سجل بإسم");
define("GENERAL_SAVE","سجل");
// 4.8
define("INDEX_USERMANAGEMENT","النظرة العامة للتفعيل");
define("INDEX_NEEDADMIN","حسابات لم يتم قبولها");
define("INDEX_NEEDEMAIL","حسابات لم يتم تفعيلها");
define("INDEX_TOOLBAR_INFO","معلومات عن جالكسيتول");
define("INDEX_TOOLBAR_URL","رابط جالكسيتول");
define("INDEX_TOOLBAR_VERSION_REQUIRED","يتطلب نسخة جالكسيتول");
define("INDEX_TOOLBAR_INSTALL_GUIDE","ارشادات تنصيب الأداة");
define("INDEX_TOOLBAR_TOKEN","مفتاح التسجيل");
define("INDEX_TOOLBAR_NEW_TOKEN","أحصل على مفتاح تسجيل جديد");
define("INDEX_PLAYERS_WITH_N_PLANETS","لاعبون يمتلكون أكثر من  &1 كوكب");
define("INDEX_GETTING_STARTED","التعرف على الأداة");
define("INDEX_GETTING_STARTED1","مرحبا بك في الأداة جالكسيتول");
define("INDEX_GETTING_STARTED2","الأداة ستساعدك على تحليل كل ما يجري في عالمك  &1");
define("INDEX_GETTING_STARTED3","قبل البدء فعلا في تحليل المعلومات يجب اضافتها أولا لقاعدة البيانات . حتى يتم ذلك أنت تحتاج بلجين لمتصفحك مثل &1 لفيرفوكس .");
define("INDEX_GETTING_STARTED4","بعد تنصيب البلجين، يمكنك تصفح اللعبة كالعادة عندها سترى نافذة صغيرة تخبرك أنه تم تقل البيانات و ارسالها لجالكسيتول ");
define("INDEX_GETTING_STARTED5","عندما يتم أرسل البيانات بنجاح يمكنك البدء بتحليل معلومات اللاعبين ، أين تقع كواكبهم ، كم عددها ، تقارير التجسس لكواكبهم ، يمكنك أيضا متابعة أوقات اتصالهم");
define("INDEX_GETTING_STARTED6",".كما يمكنك أيضا متابعة تطورك عندما تقارن نفسك مع منافسيك أو بمراقبة تقارير هجماتك لتعرف ما تحصلت عليه من الموارد في فترة معينة");
define("INDEX_GETTING_WIKIPAGE","هناك العديد من المميزات الأخرى لأداة جالكسيتول.");
define("INDEX_GETTING_WIKIPAGE2","يمكنك التعرف عليهم في صفحة ويكي .");
define("INDEX_GETTING_BOARD",": لأي أفكار أو أقتراحات تفضل بزيارة منتدانا");
define("INDEX_GETTING_CHAT1","أو زرنا على غرفة الشات");
define("INDEX_GETTING_CHAT2","لا يمكننا التواجد على مدار اليوم لكننا نقضي معظم أوقات فرغنا هناك");
// new 5.0
define("INDEX_CLOSE","أغلق");
define("INDEX_LOGIN","تسجيل الدخول");
define("GENERAL_REQUIRED_FIELDS","الرجاء ملء جميع الخانات المطلوبة");
define("INDEX_MESSAGES","الرسائل");
define("INDEX_EXAMPLE","مثال");
define("INDEX_INVALID_DATA","خطأ في البيانات");
define("GENERAL_COLUMN_HIDE_TITLE","التحكم بالأعمدة");
define("GENERAL_COLUMN_HIDE_INFO","الرجاء اختيار الأعمدة التي تود أن تراها في الجدول");
define("GENERAL_ENTRIES_DELETED","&1 تم حذف المعلومات");
define("GENERAL_APPLY","تفعيل");
define("STARTPAGE_GALAXYTOOL_DESCR","<em>جالكسيتول</em> هي أداة للعبة المتصفح الشهيرة أوجيم.");
define("GENERAL_OVERWRITE","إعادة ادخال البيانات المكررة ؟");
define("GENERAL_OVERWRITE_QUESTION","أهل أنت متأكد ؟");
define("INDEX_OWN_LOGINS","عدد مرات دخولك");
define("GENERAL_OPEN_IN_NEW_WINDOW","افتح الرابط في نافذة جديدة");
// 5.1
define("GENERAL_UNIT_OF_MEASURE_DAYS","Days");

/*********************************************************************/
/***************************** internal ******************************/
/*********************************************************************/
// index.php
define("PROGRAM_NAME","أداة جالكسيتول أوجيم");
define("SHORTNAME","جالكسيتول");
define("BACK_INDEX","العودة للصفحة الأساسية");
define("UNIVERSE","عالم");

// search
define("MENU_INFO_LINKS","معلومات");
define("MENU_PAGE","النظرة العامة");
define("MENU_DB_SEARCH","البحث في قاعدة البيانات");
define("MENU_DB_NOTICES","البحث في الملاحظات");
define("MENU_DB_REPORTS","البحث في التقارير");
define("MENU_GALAXYVIEW","المجره");
define("MENU_STATISTICS","ترتيب اللاعبين");
define("MENU_ALLYHISTORY","متابعة التطور");
// 4.7
define("MENU_FLEET_MOVEMENTS","تحركات الأساطيل");
define("MENU_COMBAT_REPORTS","تقارير المعارك");
define("MENU_MESSAGES","الرسائل الخاصة");

// insert / change
define("MENU_OPTION_LINKS","خيارات");
define("MENU_DB_REFRESH","أضف لقاعدة البيانات");
define("MENU_NOTICES","ملاحظات");
define("MENU_DB_STATUS","حالة قاعدة البيانات");
define("MENU_USEROPTIONS","التصرف بالمستخدمين");
define("MENU_USEROPTIONS2","اختيارات المستخدمين");
define("MENU_USEROPTIONS3","معلومات المستخدم");
// 4.2
define("MENU_ADMIN","قسم الادارة");
// 4.3.3
define("MENU_LOGOUT","الخروج من الموقع");

// Stuff
define("MENU_STUFF","متنوعات");
define("MENU_FORUM_THREAD","منتدى المصممين");
define("MENU_DOWNLOADPAGE","صفحة تحميل البرنامج");
define("MENU_LANGUAGE","اللغة");
define("MENU_HELP","المساعدة");
// 4.0
define("MENU_TOOLOPTIONS","خيارات جالكسيتول");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1","تم أضافته لقاعدة البيانات");
define("PARSER_ERROR1","خطأ في محاولة ادخال الاحداثيات التاليه:");
define("PARSER_ERROR2","لا يمكن ايجاد قاعدة البيانات !");
define("PARSER_ERROR3","لا يمكن التواصل مع السرفر !");
define("PARSER_WRONG_UNIVERSE","عالم خاطيء - حاليا: \"&1\"  المتوقع: \"&2\"");

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","صفحة البحث لجالكسيتول");
define("SHOW_SEARCH","البحث في قاعدة البيانات");
define("SHOW_ALLYSYMBOL","رمز التحالف");
define("SHOW_PLAYERNAME","اسم اللاعب");
define("SHOW_MOONS","فقط الكواكب بالاقمار");
define("SHOW_NOTICES","فقط الكواكب بملاحظات");
define("SHOW_COLONIES","فقط الكواكب الصالحة للاستعمار");
define("SHOW_YES","نعم");
define("SHOW_NO","لا");
define("SHOW_SEARCHRANGE","المدى");
define("SHOW_SEARCH_IN","البحث في المجرة");
define("SHOW_FROM_SYSTEM","من النظام");
define("SHOW_FROM_PLANET","من الكوكب خانة");
define("SHOW_TO","الى");
define("SHOW_DESCRIPTION","You can use wildcards * for player or alliance names. So you can find all players with &quot;name&quot; in their name.<br />Only fill those fields you want to specify.");
define("SHOW_SORT_BY","رتب حسب");
define("SHOW_GALASYSTEM","مجرة / نظام");
define("SHOW_ALLYNAME","اسم التحالف");
define("SHOW_SEARCHBUTTON","ابحث");
define("SHOW_ADDRESS","العنوان");
define("SHOW_ALLYSORT","تحالف");
define("SHOW_PLANET","اسم الكوكب");
define("SHOW_STATUS","حالة");
define("SHOW_CURRENTNESS","حدث لاخر مرة");
define("SHOW_PLAYER_STATUS","حالة اللاعب");
define("SHOW_PLAYER_STATUS1","الكل");
define("SHOW_PLAYER_STATUS2","أهداف محتملة");
define("SHOW_PLAYER_STATUS3","خامل");
define("SHOW_HITS","النتائج");
define("SHOW_OF","ل ");
define("SHOW_ASC","تصاعديا");
define("SHOW_DESC","تنازليا");
define("SHOW_RESULTS","عدد النتائج في الصفحة");
define("SHOW_MOON","قمر");
define("SHOW_UKMOONSIZE","مجهول");
define("SHOW_DF","أنقاض");
define("SHOW_DF_LONG","ميدان أنقاض");
define("SHOW_METAL","م");
define("SHOW_METAL_LONG","معدن");
define("SHOW_CRYSTAL","ب");
define("SHOW_CRYSTAL_LONG","بلور");
define("SHOW_BOTH","الأثنين معا");
define("SHOW_AT_LEAST","(على الأقل)");
define("SHOW_DATE","تاريخ");
define("SHOW_DATE_0","غير مهم");
define("SHOW_DATE_1","أقدم من");
define("SHOW_DATE_2","أجدد من");
define("SHOW_RANK","ترتيب");
define("SHOW_FRANK","ترتيب الأسطول");
define("SHOW_MEMBERS","الأعضاء");
define("SHOW_NOTRANKED","معلومات غير موجودة");
define("SHOW_NOTICERES","ملاحظات");
define("SHOW_REPORTS","فقط كوكب باقمار");
define("SHOW_REPORTS_SHORT","تقارير التجسس");
define("SHOW_NOTHING","لا نتائج موجودة");
define("SHOW_ALLIANCE_STATUS","حالة التحالف");
define("SHOW_NO_STATUS","بدون حالة");
define("SHOW_NAP","لا هجوم");
define("SHOW_ALLIED","حليف");
define("SHOW_WAR","في حرب");
define("SHOW_BOYCOTT","مقاطع");
define("SHOW_NEUTRAL","محايد");
define("SHOW_OWN","تحالفك");
define("SHOW_WING","جناح");
// obsolete with 5.0
define("SHOW_EXT_OPTIONS1","المزيد من الخيارات للمدى، الترتيب ، التاريخ ، أو ميدان الأنقاض");
define("SHOW_EXT_OPTIONS2","المزيد من الخيارات للمستعمرات ، الأقمار، التقارير ، الملاحظات ، حالة اللاعبين أو الحالة الدبلوماسية");
define("SHOW_EXT_OPTIONS3","المزيد من الخيارات لتنظيم النتائج");
// new 5.0
define("SHOW_EXTENDED","بحث متقدم");
define("SHOW_MOON_SELECTION","كوكب بقمر");
define("SHOW_REPORT_SELECTION","كوكب بتقرير تجسس");
define("SHOW_FILTER_BY","اقصاء من القائمة");
define("SHOW_FILTER_NONE","لا أحد");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Show players without score changes within the last few days");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","أوجيم جالكسيتول - الحالة العامة");
define("STATUS_DB_STATUS","حالة القاعدة");
define("STATUS_COLOR","الألوان");
define("STATUS_AGE1","بيانات من يوم");
define("STATUS_AGE2","بيانات من يومين");
define("STATUS_AGE3","بيانات من ٤ لسبعة أيام");
define("STATUS_AGE4","بيانات من أسبوع لأسبوعين");
define("STATUS_AGE5","بيانات من أسبوعين لشهر");
define("STATUS_AGE6","بيانات قديمة أكثر من شهر");
define("STATUS_AGE7","بدون بيانات");
define("STATUS_ON","مفعل");
define("STYLES_COLOR1","لون ١");
define("STYLES_COLOR2","لون ٢");
define("STYLES_COLOR3","لون ٣");
define("STYLES_COLOR4","لون ٤");
define("STYLES_COLOR5","لون ٥");
define("STYLES_COLOR6","لون ٦");
define("STYLES_COLOR7","لون ٧");
// 4.8
define("STATUS_DB_LEGEND","معلومات");
define("STATUS_GALAXY","نظرة المجرة");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","التصرف بالأعضاء");
define("USER_NAMES","عضو");
define("USER_ERROR","خطأ");
define("USER_NEWUSER","عضو جديد");
define("USER_OPTIONS","خيارات");
define("USER_USERNAME","اسم العضو");
define("USER_PASSWORD","كلمة السر");
define("USER_PASSWORD_CONFIRM","تأكيد كلمة السر");
define("USER_GALAXY","مجرة");
define("USER_SEARCH","بحث");
define("USER_INSERT","أضف");
define("USER_DELETE","حذف");
define("USER_DELETE_ENTRY","هل تريد حذف العضو");
define("USER_STATUS","رؤية الحالة");
define("USER_STYLES","تعديل التصميم");
define("USER_SUBMIT","تفعيل");
define("USER_RESET","أفرغ الخانات");
define("USER_YES","نعم");
define("USER_NO","لا");
define("USER_STYLEPATH","رابط styles.css");
define("USER_PROBES","شاهد أو أضف تقرير التجسس");
define("USER_EMAIL","بريد إلكتروني");
define("USER_ERROR1","خطأ في كلمة السر أو بريد خاطيء");
define("USER_ERROR2","بريد ألكتوني خاطيء");
define("USER_INGAME","الأسم في اللعبة");
define("USER_ALLYTAG","رمز التحالف");
define("USER_ALLYHISTORY","متابعة التطور");
define("USER_DIPLOMATIC","تغير الحالة الدبلوماسية");
define("USER_STATSPAGE","عدد البيانات في صفحة الترتيب"); // deprecated with 4.8
define("USER_LINKS","روابط");
define("USER_LINKS2","شكل:<br>text;url<br>text2;url2<br>text3;url3");
define("USER_EXPORT_TITLE","استعمال ألوان (BB Codes)");
define("USER_BB_COORDINATES","احداثيات");
define("USER_BB_MOON","قمر");
define("USER_BB_DEBRIS","ميدان أنقاض");
define("USER_BB_ALLY","اسم التحالف");
define("USER_BB_ALLYDETAILS","تفاصيل التحالف");
define("USER_BB_PLAYERNAME","اسم اللاعب");
define("USER_BB_BANNED","محظور");
define("USER_BB_VACATION","وضع عطله");
define("USER_BB_NOOB","ضعيف");
define("USER_BB_INACTIVE","خامل");
define("USER_BB_LONGINACTIVE","خامل لمدة طويلة");
// new with 4.7
define("USER_DELETION","حذف");
define("USER_FLEETINFO","معلومات الأسطول");
define("USER_ACTIVITIES","نشاطات اللاعب");
define("USER_MAINTENANCE","صيانة الأداة");
define("USER_MANAGEMENT",MENU_USEROPTIONS);
define("USER_DELETE_MY_COMBAT_REPORTS","حذف تقارير هجومك");
define("USER_DELETE_MY_MESSAGES","حذف رسائلك الخاصة");
define("USER_DELETE_MY_FLEETMOVES","حذف حركات أسطولك");
// 4.8
define("USER_DELETE_MY_COMBAT_REPORTS_LIMITED","حذف تقارير هجومك القديمة لاكثر من &1 يوم");
define("USER_DELETE_MY_MESSAGES_LIMITED","حذف رسائلك القديمة لاكثر من &1 يوم");
define("USER_TABLE_ENTRIES","عدد النتائج بالصفحة");
// 5.0
define("USER_EXISTS","العضو موجود");
define("USER_BB_OUTLAW","قطع طريق");
define("USER_INVALID_URL","الرابط &1 لايعمل  - سيتم اهماله");

/*********************************************************************
* galaxyview.php
*********************************************************************/
define("VIEW_TITLE","أوجيم جالكسيتول - رؤية المجرة");
define("VIEW_NODATA","لا تواجد أي بيانات");
define("VIEW_GALAXY","Galaxy");
define("VIEW_SYSTEM","النظام الشمسي");
define("VIEW_POSITION","الخانة");
define("VIEW_PLANET","كوكب");
define("VIEW_MOON","قمر");
define("VIEW_TF","أنقاض");
define("VIEW_PLAYER","اللاعب");
define("VIEW_PLAYER_ADD","(ترتيب/حالة)");
define("VIEW_ALLY","تحالف");
define("VIEW_ALLY_ADD","(ترتيب/عضو)");
define("VIEW_METAL","م");
define("VIEW_CRYSTAL","ب");
define("VIEW_COLONISED","كواكب غير مستعمرة");
define("VIEW_UKMOONSIZE","مجهول");
define("VIEW_BACK","عودة");
define("VIEW_NOTICE","ملاحظات");
define("VIEW_REPORTS","تقارير");
define("VIEW_MOONPHALANX","هذا النظام مكشوف من الأقمار التالية");
define("VIEW_NOMOONS","لا توجد أقمار");
define("VIEW_IRAKS","الكواكب التالية تصل صواريخها العابرة لهذا النظام");
define("VIEW_NOIRAKS","لا توجد صواريخ عابرة");
// 4.0
define("VIEW_MOON_DESTROY_CHANCE","احتمال تدمير القمر");
define("VIEW_CHANCE_WITH_ONE","احتمال التدمير بنجمة واحدة");
define("VIEW_CHANCE_WITH_N","الاحتمال ب");
define("VIEW_DEATH_STARS","نجوم الموت");
define("VIEW_DS_DESTROY_CHANCE","احتمال تدمر نجمات الموت");
define("VIEW_TOP","الاعلى");
// new 4.3.5
define("VIEW_GO","انطلق");
// new 5.0
define("VIEW_DIAMETER","قطر");

/*********************************************************************
* change_password.php
**********************************************************************/
define("PW_TITLE"," أوجيم جالكسيتول - تبديل كلمة السر");
define("OLD_PASSWORD","كلمة السر القديمة");
define("NEW_PASSWORD","كلمة السر الجديدة");
define("CONFIRM_NEW_PASSWORD","أكد كلمة السر");
define("PW_MISMATCH","كلمتي السر مختلفتين");
define("PW_ERROR","كلمة السر القديمة خاطئه");
define("PW_DONE","تم التحديث بنجاح");
// new 4.2
define("TIMEZONE_OFFSET","طابق التوقيت مع السرفر");
// new 4.3
define("DELETE_ACCOUNT","حذف حساب جالكسيتول");
define("DELETE_ACCOUNT_SAFETY_REQUEST","هل تود فعلا حذف هذا الحساب?");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","صلاحيات");
define("CH_PASSWD_ADMIN","أدمين");
// new 4.7
define("TIMEZONE_OGAME_OFFSET","طابق التوقيت العالمي مع السرفر");
// new 4.8
define("CH_PASSWD_USER_LANGUAGE","تبديل اللغة بعد تسجيل الدخول");
define("CH_PASSWD_USER_LANGUAGE_NO_CHANGE","لا تغيير");
define("CH_PASSWD_EXPAND","مدد");
define("CH_PASSWD_COLLAPSE","أختصر");
define("CH_PASSWD_HIDDEN","مختفي");
define("CH_PASSWD_GETTING_STARTED","اظهار المساعدة بعد الاتصال");
define("CH_PASSWD_PLUGIN","اظهار معلومات الأداة بعد الاتصال");

/*********************************************************************
* notices.php
**********************************************************************/
define("NOTICE_TITLE","أوجيم جالكسيتول - الملاحظات");
define("NOTICE_HEADER","تعديل الملاحظة");
define("NOTICE_HEADER2","عدل ملاحظاتك");
define("NOTICE_PUBLIC","يمكن للأعضاء تعديلها ؟");
define("NOTICE_YES","نعم");
define("NOTICE_NO","لا");
define("NOTICE_TEXT","نص الملاحظة");
define("NOTICE_SAVE","سجل");
define("NOTICE_DELETED","تم حذف الملاحظة");
define("NOTICE_SAVED","تم تسجيل أ الملاحظة");
define("NOTICE_RESULTS","جميع النتائج");
define("NOTICE_USER","أسم العضو");
define("NOTICE_DATE","التاريخ");
define("NOTICE_EDIT","عدل");
define("NOTICE_DELETE","حذف");
define("NOTICE_NEW","أضف ملاحظتك");
define("NOTICE_NOTPUBLIC","ملاحظة خفية");
define("NOTICE_ALL","الجميع");
define("NOTICE_NONE","لا أحد");
define("NOTICE_SEARCH","البحث في الملاحظات");
define("NOTICE_SEARCH_SHORT","ابحث");
define("NOTICE_HITS","النتائج");
define("NOTICE_SHOWRESULTS","عدد النتائج في الصفحة");
define("NOTICE_OF","على");
define("NOTICE_NOTHING","البحث لم يعطي نتيجة");
// 4.0
define("NOTICE_CHARS","الحروف");
define("NOTICE_PLAYERNAME","أسم اللاعب");
define("NOTICE_SHOWALL","أظهر كل الملاحظات");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","أوجيم جالكسيتول - تقارير التجسس");
define("REPORTS_RESOURCES","الموارد");
define("REPORTS_FLEET","الأساطيل");
define("REPORTS_DEFENCE","الدفاع");
define("REPORTS_BUILDINGS","المباني");
define("REPORTS_TECHNOLOGY","الأبحاث");
define("REPORTS_MOON","قمر");
define("REPORTS_SEARCH","ابحث في تقارير التجسس");
define("REPORTS_SEARCH_SHORT","ابحث");
define("REPORTS_HITS","النتائج");
define("REPORTS_NOTHING","البحث لم يعطي نتيجة");
define("REPORTS_ADDRESS","عنوان");
define("REPORTS_CURRENTNESS","النشاط");
define("REPORTS_PLAYERNAME","أسم اللاعب");
define("REPORTS_ALLY","تحالف");
define("REPORTS_VIEW","أطلع على التقرير");
define("REPORTS_SEARCH_IN","ابحث في المجرة");
define("REPORTS_FROM_SYSTEM","من نظام");
define("REPORTS_TO","الى");
define("REPORTS_DELETE","احذف");
define("REPORTS_DELETED","تم حذف التقرير");
define("REPORTS_RESULTS","عدد النتائج بالصفحة");
define("REPORTS_OF","على");
define("REPORTS_DATE","التاريخ");
define("REPORTS_DATE_0","غير مهم");
define("REPORTS_DATE_1","أقدم من");
define("REPORTS_DATE_2","أحدث من");
define("REPORTS_NOTICES","ملاحظات");
define("REPORTS_AT_LEAST_RESOURCES","(موارد (على الأقل");
define("REPORTS_SEARCH_EXTENDED","بحث معمق");
define("REPORTS_FLEET_RESIS","أسطول - ترتيب");
define("REPORTS_DEFENCE_RESIS","دفاع - ترتيب");
define("REPORTS_ALL_RESIS","مجموع الترتيب");
define("REPORTS_TECHS","أبحاث");
define("REPORTS_UNKNOWN_ENTRIES","نتيجة غير معروفة");
define("REPORTS_PARTLY_INSERTED","أضيف جزئيا");
define("REPORTS_FOR_ALL_RES","لكل الموارد الممكن نهبها");
define("REPORTS_FOR_TF","لميدان الأنقاض");
define("REPORTS_KT","نواقل صغيرة");
define("REPORTS_GT","نواقل كبيرة");
define("REPORTS_SS","مركبة الحرب");
define("REPORTS_REC","تدوير");
define("REPORTS_RAIDABLE","فقط أهداف يمكن نهبها");
define("REPORTS_ALL_RESOURCES","كل الموارد");
// 4.0
define("REPORTS_STUFF","متفرقات");
define("REPORTS_SPEEDSIM","حاكي باستخدام Speedsim");
define("REPORTS_DRAGOSIM","حاكي باستخدام Dragosim");
define("REPORTS_STATUS","حالة اللاعب");
define("REPORTS_ERROR","حدث خطأ");
// 4.2
define("REPORTS_OWN_REPORTS","تقاريري فقط");
// 4.3.3
define("REPORTS_UPLOAD_BY","تقرير مرسل من");
// 4.4
define("REPORTS_DEPTH","عمق التقرير");
define("REPORTS_FLEET_SCORE","نقاط الأسطول");
define("REPORTS_DEFENCE_SCORE","نقاط الدفاع");
// 5.0
define("REPORTS_HOURS","ساعات");
define("REPORTS_MAX_RESULTS_HIT","البحث أعطى أكثر من &1 نتيجة . لايمكن اظهار أكثر من  &1 نتيجة الأولى . الرجاء تعديل البحث للحصول على نتائج أدق.");
define("REPORTS_OSIMULATE","حاكي باستخدام OSimulate");
define("REPORTS_SHOW_ONLY","أظهر فقط");
define("REPORTS_SHOW_PLANETS","كواكب");
define("REPORTS_SHOW_MOONS","أقمار");
define("REPORTS_OWNER","تقارير مرسلة من");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","أوجيم جالكسيتول - الترتيب العا م");
define("STATS_TBLHEAD","الترتيب العام");
define("STATS_RANK","ترتيب");
define("STATS_PLAYERNAME","أسم اللاعب");
define("STATS_ALLYNAME","رمز التحالف");
define("STATS_SCORE","نقاط");
define("STATS_FLEET","أسطول");
define("STATS_RESEARCH","أبحاث");
define("STATS_MEMBERS","أعضاء");
define("STATS_STATUS","حالة");
define("STATS_NOTHING","بدون حالة");
define("STATS_NAP","لا هجوم");
define("STATS_ALLIED","حليف");
define("STATS_WAR","حرب");
define("STATS_BOYCOTT","مقاطع");
define("STATS_NEUTRAL","محايد");
define("STATS_OWN","تحالفك");
define("STATS_WING","جناح");
define("STATS_UPDATE","بيانات من طرف");
define("STATS_PLAYERSTATS","حالة اللاعبين");
define("STATS_ALLYSTATS","حالة التحالف");
// 4.0
define("STATS_DELETE","هل تود حذف هذه البيانات");
define("STATS_CONFIRM_DELETE","هل تود فعلا حذف هذه البيانات");
define("STATS_CHANGE_PLAYER_STATUS","حالة اللاعب");
define("STATS_CHANGE_ALLIANCE_STATUS","حالة التحالف");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","  سيتم تغير حالة جميع أعضاء التحالف ، أي حالة سابقة سيتم تعديلها . بعد ذلك يمكن تعديل كل لاعب على حدة.");
define("STATS_UNKNOWN","متبقي");
define("STATS_DETAILS","التفاصيل ل");
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
define("STATS_SHOW_GRAPH","أظهر تفاصيل النقاط");
define("STATS_LONG_INACTIVE",USER_BB_LONGINACTIVE);
// 4.9
define("STATS_STANDARD","نقاط الترتيب العام");
define("STATS_MILITARY","نقاط عسكرية");
define("STATS_ECONOMY","اقتصاد");
define("STATS_HONOUR","نقاط الشرف");
define("STATS_MILITARY_BUILD","انتاج عسكري");
define("STATS_MILITARY_DESTROYED","نقاط التدمير");
define("STATS_MILITARY_LOST","مجموع الخسائر");

/*********************************************************************
* register.php
**********************************************************************/
define("REGISTER_REGISTRATE","تسجيل");
define("REGISTER_LOGINNAME","أسم الدخول");
define("REGISTER_PASSWORD","كلمة السر");
define("REGISTER_PASSWORD_CONFIRM","أعد كلمة السر");
define("REGISTER_EMAIL","البريد الأكتروني");
define("REGISTER_INGAME","الأسم في اللعبة");
define("REGISTER_ALLYTAG","رمز التحالف");
define("REGISTER_EMAILVERIFICATION","تأكيد البريد الأكتروني");
define("REGISTER_EMAILTEXT","الرجاء زيارة الرابط التالي لتأكيد عمل البريد الأكتروني");
define("REGISTER_ERROR1","أسم الدخول مستعمل لعضو آخر");
define("REGISTER_ERROR2","حدث خلل عند الأرسال . الرجاء الاتصال بادمين الصفحة");
define("REGISTER_ERROR3","حدث خلل في ارسال البيانات لموقع");
define("REGISTER_INFO1","لم يتم إنشاء حسابك");
define("REGISTER_INFO2"," لتفعيل حسابك الرجاء زيارة الرابط الموجود في الرسالة على بريدك الأكتروني");
define("REGISTER_INFO3","تم التسجيل بنجاح . أتصل بمدير الصفحة لتفعيل حسابك و اعطائك صلاحيات الاستعمال");
define("REGISTER_BUTTON","العودة للصفحة الرئيسية");
define("REGISTER_NEW_SUBJECT","مستخدم جديد قام بالتسجيل في الصفحة");
define("REGISTER_NEW_MAILTEXT","مستخدم جديد قام بالتسجيل في الصفحة");
// new 4.2
define("REGISTER_BACK","عد إلى الصفحة الأولى");
// new 4.3.5
define("REGISTER_MISSING_FIELDS","أكمل جميع الخانات ألمتوبت");
// new 4.8
define("REGISTER_ERROR4","خطأ في عنوان البريد الأكتروني");
define("REGISTER_ERROR5","كلمات السر لم تتطابق");
define("REGISTER_PWS","قوة كلمة السر");
define("REGISTER_PWS0","ضعيفة جدا");
define("REGISTER_PWS1","ضعيفة");
define("REGISTER_PWS2","جيدة");
define("REGISTER_PWS3","قوية");
define("REGISTER_PWS4","قوية جدا");
// new 5.0
define("REGISTER_EMAIL_USED","البريد الأكتروني مستخدم من قبل");

/*********************************************************************
* lost_password.php
**********************************************************************/
define("LOSTPW_TITLE","نسيت كلمة السر");
define("LOSTPW_INFO2","تم منحك كلمة سر جديدة. راجع بريدك الأكتروني");
define("LOSTPW_BUTTON1","الحصول على كلمة سر جديدة");
define("LOSTPW_BUTTON2","العودة للصفحة الرئيسية");
define("LOSTPW_LOGINNAME","أسم الدخول");
define("LOSTPW_EMAIL","البريد الأكتروني");
define("LOSTPW_ERROR1","حدث خلل عند محاولة ارسال البيانات");
define("LOSTPW_ERROR2","لا توجد نتائج");
define("LOSTPW_ERROR3","خلل في الارسال لبريدك . الرجاء الاتصال بمدير الصفحة");
define("LOSTPW_EMAIL_SUBJECT","طلب كلمة سر جديدة");
define("LOSTPW_EMAIL_TEXT1","إليك معلومات الدخول الجديدة لموقع جالكسيتول");
define("LOSTPW_EMAIL_TEXT2","أسم الدخول");
define("LOSTPW_EMAIL_TEXT3","كلمة السر");
// new 5.0
define("LOSTPW_INFO1","راجع بريدك لتأكيد طلب الحصول على كلمة سر جديدة");
define("LOSTPW_CONFIRM_RESET_SUBJECT","نسيت كلمة السر ؟");
define("LOSTPW_CONFIRM_RESET_MESSAGE","مرحبا,\n\n لقد طلبت تجديد كلمة السر . للحصول على كلمة سر جديدة الرجاء زيارة الرابط التالي:");

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