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
define("L_USERNAME","아이디");
define("L_PASSWORD","비밀번호");
define("L_LOGINFAILURE","아이디 또는 비밀번호가 틀리거나 등록하신 아이디가 아직 활성화 되지 않았습니다.");
define("L_TOKENFAILURE","인증 키가 틀렸거나 당신의 계정이 활성화되지 않았습니다.");
define("L_LOGINTEXT","로그인 해주세요.");
define("L_LANGUAGE","언어 선택:");
define("L_TIMEOUT","세션 유효시간이 경과했습니다!");
define("L_REGISTER","가입하기");
define("L_PWLOST","비밀번호 분실");
define("INDEX_TITLE","개요");
define("INDEX_INFO","정보");
define("INDEX_ENTRIES","등록된 총 행성계");
define("INDEX_ENTRIES_LASTWEEK","지난주에 새로 등록된 행성계");
define("INDEX_ENTRIES_TO_OLD","등록된지 한달 이상 된 행성계");
define("INDEX_REGISTERED_USERS","등록한 유저");
define("INDEX_PAGEFORWARD","브라우저가 페이지 변환을 지원하지 않을 경우, 여기를 클릭 하세요.");
define("INDEX_NOTICES","메모");
define("INDEX_PLAYERS","유저 통계");
define("INDEX_ALLIES","동맹 통계");
define("INDEX_REPORTS","정탐 보고서");
define("INDEX_VERSION","다운로드 가능한 최신 버전");
define("INDEX_LATEST_VERSION","새 버전 없음");
define("INDEX_SHOUTBOX","외침");
define("INDEX_NOENTRY","외침 없음");
define("INDEX_COMMENT","새 외침");
define("INDEX_INSERT","외치기");
define("INDEX_UMOD","휴가 모드인 유저");
define("INDEX_NO_MOONS","달");
define("INDEX_NO_EMPTY_SYSTEMS","아무도 없는 행성계");
define("INDEX_NO_FULL_SYSTEMS","빈 자리가 없는 행성계");
define("INDEX_NO_TARGETS","공격 가능한 목표");
// 4.0
define("INDEX_USERINFO","접속자 현황");
define("INDEX_ONLINE","현재 접속중"); // the user is logged in now?
define("INDEX_TODAY","오늘 접속함"); // the user has logged in today?
define("INDEX_ALL","총 로그인 수"); // overall of all users?
// 4.3.7
define("GENERAL_LOAD_FORM","검색 양식 불러오기");
define("GENERAL_SAVE_FORM","검색 양식 저장");
define("GENERAL_SAVE_AS_TEXT","다른 이름으로 저장");
define("GENERAL_SAVE","저장");
// 4.8
define("INDEX_USERMANAGEMENT","활동 내역");
define("INDEX_NEEDADMIN","계정 잠금 해제");
define("INDEX_NEEDEMAIL","확인되지 않은 계정");
define("INDEX_TOOLBAR_INFO","겔툴 플러그인 정보");
define("INDEX_TOOLBAR_URL","겔툴 URL");
define("INDEX_TOOLBAR_VERSION_REQUIRED","최신 겔럭시툴바 버전.");
define("INDEX_TOOLBAR_INSTALL_GUIDE","플러그인에 대한 설치 방법");
define("INDEX_TOOLBAR_TOKEN","인증 키");
define("INDEX_TOOLBAR_NEW_TOKEN","새로운 인증 키");
define("INDEX_PLAYERS_WITH_N_PLANETS","&1 개 이상 행성을 가진 플레이어 조회");
define("INDEX_GETTING_STARTED","겔럭시툴 시작하기");
define("INDEX_GETTING_STARTED1","겔럭시툴에 오신 것을 환영합니다!");
define("INDEX_GETTING_STARTED2","겔럭시 툴은 &1 은하에서 일어난 일을 분석하는데 도움을 줄 것입니다.");
define("INDEX_GETTING_STARTED3","분석을 위해서 정보를 입력해야 하며, 입력을 위해  Firefox 용 플러그인 &1 이 필요합니다.");
define("INDEX_GETTING_STARTED4","플러그인을 설치 후, 당신은 평소와 같이 오게임 페이지를 탐색하면 작은 윈도우창이 보이며 겔럭시툴로 정보가 보내집니다.");
define("INDEX_GETTING_STARTED5","갤럭시툴에 자료를 입력하면, 플레이어의 행성 좌표나 갯수, 행성의 정보나 가장 많이 활동한 시간대를 분석할 수 있습니다.");
define("INDEX_GETTING_STARTED6","뿐만 아니라, 당신의 경쟁자와 당신을 비교하고, 과거의 전투기록을 토대로 당신의 발전 방향을 분석하는데 도움을 줄 것입니다");
define("INDEX_GETTING_WIKIPAGE","겔럭시툴은 이외에도 더 많은 기능이 있습니다.");
define("INDEX_GETTING_WIKIPAGE2","위키백과를 참고해 보세요.");
define("INDEX_GETTING_BOARD","불편사항이나 새로운 아이디어가 있으면 게시판을 통해 알려주세요.:");
define("INDEX_GETTING_CHAT1","또는 우리의 대화방을 이용하실 수도 있습니다.:");
define("INDEX_GETTING_CHAT2","저희가 자릴 비울 경우도 있겠지만, 최대한의 빠른 답변을 드리겠습니다.");
// new 5.0
define("INDEX_CLOSE","닫기");
define("INDEX_LOGIN","로그인");
define("GENERAL_REQUIRED_FIELDS","모든 필수 입력란을 모두 채우세요.");
define("INDEX_MESSAGES","메시지");
define("INDEX_EXAMPLE","예");
define("INDEX_INVALID_DATA","잘못된 데이터");
define("GENERAL_COLUMN_HIDE_TITLE","칼럼 관리");
define("GENERAL_COLUMN_HIDE_INFO","테이블에 표시할 열을 선택합니다.");
define("GENERAL_ENTRIES_DELETED","&1 항목이 삭제됩니다.");
define("GENERAL_APPLY","허가");
define("STARTPAGE_GALAXYTOOL_DESCR","<em>겔럭시툴</em> 은 웹게임 오게임을 위한 툴입니다.");
define("GENERAL_OVERWRITE","항목을 중복 덮어쓰기");
define("GENERAL_OVERWRITE_QUESTION","덮어쓰시겠습니까?");
define("INDEX_OWN_LOGINS","귀하의 로그인 횟수");
define("GENERAL_OPEN_IN_NEW_WINDOW","새 창에 링크 열기");
// 5.1
define("GENERAL_UNIT_OF_MEASURE_DAYS","Days");

/*********************************************************************/
/***************************** internal ******************************/
/*********************************************************************/
// index.php
define("PROGRAM_NAME","오게임 은하 도구");
define("SHORTNAME","은하 도구");
define("BACK_INDEX","초기 화면으로");
define("UNIVERSE","우주");

// search
define("MENU_INFO_LINKS","정보");
define("MENU_PAGE","통계");
define("MENU_DB_SEARCH","DB 검색");
define("MENU_DB_NOTICES","메모 검색");
define("MENU_DB_REPORTS","보고서 검색");
define("MENU_GALAXYVIEW","은하");
define("MENU_STATISTICS","순위");
define("MENU_ALLYHISTORY","동맹 기록");
// 4.7
define("MENU_FLEET_MOVEMENTS","함대 현황");
define("MENU_COMBAT_REPORTS","전투 보고서");
define("MENU_MESSAGES","받은 메시지");

// insert / change
define("MENU_OPTION_LINKS","옵션");
define("MENU_DB_REFRESH","DB 추가");
define("MENU_NOTICES","메모");
define("MENU_DB_STATUS","DB 상태");
define("MENU_USEROPTIONS","유저 관리");
define("MENU_USEROPTIONS2","유저 옵션");
define("MENU_USEROPTIONS3","유저 정보");
// 4.2
define("MENU_ADMIN","관리자");
// 4.3.3
define("MENU_LOGOUT","로그아웃");

// Stuff
define("MENU_STUFF","기타");
define("MENU_FORUM_THREAD","개발자 포럼");
define("MENU_DOWNLOADPAGE","다운로드");
define("MENU_LANGUAGE","언어");
define("MENU_HELP","도움말");
// 4.0
define("MENU_TOOLOPTIONS","은하 도구 옵션");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1"," 가 DB에 입력되었습니다.");
define("PARSER_ERROR1","다음 좌표를 입력 중에 오류 발생:");
define("PARSER_ERROR2","DB를 찾을 수 없습니다!");
define("PARSER_ERROR3","DB 서버를 찾을 수 없습니다!");
define("PARSER_WRONG_UNIVERSE","잘못된 은하 설정 - 현재: \"&1\" 설정된 은하: \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","오게임 은하 도구 - 검색");
define("SHOW_SEARCH","DB 검색");
define("SHOW_ALLYSYMBOL","동맹 태그");
define("SHOW_PLAYERNAME","아이디");
define("SHOW_MOONS","달이 있는 행성만");
define("SHOW_NOTICES","메모가 있는 행성만");
define("SHOW_COLONIES","이민 할 수 있는 행성만");
define("SHOW_YES","예");
define("SHOW_NO","아니요");
define("SHOW_SEARCHRANGE","사정거리");
define("SHOW_SEARCH_IN","은하 검색");
define("SHOW_FROM_SYSTEM","행성계");
define("SHOW_FROM_PLANET","행성번호");
define("SHOW_TO","부터");
define("SHOW_DESCRIPTION","아이디나 동맹태그에서 와일드카드 * 를 사용 할 수 있습니다. 따라서 &quot;name&quot;이 아이디에 포함된 모든 유저를 찾을 수 있습니다.<br/>정확히 원하는 정보만 채우세요.");
define("SHOW_SORT_BY","정렬 방법");
define("SHOW_GALASYSTEM","은하/행성계");
define("SHOW_ALLYNAME","동맹 이름");
define("SHOW_SEARCHBUTTON","찾기");
define("SHOW_ADDRESS","좌표");
define("SHOW_ALLYSORT","동맹");
define("SHOW_PLANET","행성 이름");
define("SHOW_STATUS","상태");
define("SHOW_CURRENTNESS","마지막 수정");
define("SHOW_PLAYER_STATUS","유저 상태");
define("SHOW_PLAYER_STATUS1","모두");
define("SHOW_PLAYER_STATUS2","공격 가능");
define("SHOW_PLAYER_STATUS3","비접속");
define("SHOW_HITS","결과수");
define("SHOW_OF","/");
define("SHOW_ASC","오름차순");
define("SHOW_DESC","내림차순");
define("SHOW_RESULTS","페이지당 표시");
define("SHOW_MOON","달");
define("SHOW_UKMOONSIZE","알 수 없음");
define("SHOW_DF","파편");
define("SHOW_DF_LONG","파편지대");
define("SHOW_METAL","M");
define("SHOW_METAL_LONG","메탈");
define("SHOW_CRYSTAL","C");
define("SHOW_CRYSTAL_LONG","크리스탈");
define("SHOW_BOTH","메탈+크리스탈");
define("SHOW_AT_LEAST","(최소)");
define("SHOW_DATE","날짜");
define("SHOW_DATE_0","신경 안씀");
define("SHOW_DATE_1","다음 날짜 이전의");
define("SHOW_DATE_2","다음 날짜 이후의");
define("SHOW_RANK","순위");
define("SHOW_FRANK","함대 순위");
define("SHOW_MEMBERS","회원");
define("SHOW_NOTRANKED","상위1500위에 없음");
define("SHOW_NOTICERES","메모");
define("SHOW_REPORTS","메모가 있는 행성만");
define("SHOW_REPORTS_SHORT","보고서");
define("SHOW_NOTHING","검색 결과 없음");
define("SHOW_ALLIANCE_STATUS","동맹 상태");
define("SHOW_NO_STATUS","상태 없음");
define("SHOW_NAP","불가침");
define("SHOW_ALLIED","동맹");
define("SHOW_WAR","전쟁중");
define("SHOW_BOYCOTT","배척");
define("SHOW_NEUTRAL","중립");
define("SHOW_OWN","자치 동맹");
define("SHOW_WING","우군");
// obsolete with 5.0
define("SHOW_EXT_OPTIONS1","세부 검색 옵션, 범위, 순위, 날짜 또는 파편 필드를 참조를 표시합니다.");
define("SHOW_EXT_OPTIONS2","추가 검색 옵션 식민지, 달, 보고서, 메모, 플레이어 상태 또는 외교 상태를 표시합니다.");
define("SHOW_EXT_OPTIONS3","검색 결과 정렬에 대한 더 많은 옵션을 표시합니다.");
// new 5.0
define("SHOW_EXTENDED","고급 검색");
define("SHOW_MOON_SELECTION","달이 있는 행성");
define("SHOW_REPORT_SELECTION","보고서가 있는 행성");
define("SHOW_FILTER_BY","목록에서 제외");
define("SHOW_FILTER_NONE","모두 비선택");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Show players without score changes within the last few days");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","오게임 은하 도구 - 상태");
define("STATUS_DB_STATUS","DB 상태");
define("STATUS_COLOR","색깔");
define("STATUS_AGE1","1 일 경과");
define("STATUS_AGE2","2 - 4 일 경과");
define("STATUS_AGE3","4 - 7 일 경과");
define("STATUS_AGE4","1 - 2 주 경과");
define("STATUS_AGE5","2 - 4 주 경과");
define("STATUS_AGE6","1 달 이상 경과!");
define("STATUS_AGE7","정보 없음");
define("STATUS_ON","가<br>");
define("STYLES_COLOR1","색깔1");
define("STYLES_COLOR2","색깔2");
define("STYLES_COLOR3","색깔3");
define("STYLES_COLOR4","색깔4");
define("STYLES_COLOR5","색깔5");
define("STYLES_COLOR6","색깔6");
define("STYLES_COLOR7","색깔7");
// 4.8
define("STATUS_DB_LEGEND","DB 범례");
define("STATUS_GALAXY","은하계 개요");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","유저 관리");
define("USER_NAMES","유저");
define("USER_ERROR","오류");
define("USER_NEWUSER","새 유저");
define("USER_OPTIONS","옵션");
define("USER_USERNAME","아이디");
define("USER_PASSWORD","비밀번호");
define("USER_PASSWORD_CONFIRM","비밀번호 확인");
define("USER_GALAXY","은하");
define("USER_SEARCH","검색");
define("USER_INSERT","추가");
define("USER_DELETE","삭제");
define("USER_DELETE_ENTRY","삭제하시겠습니까: ");
define("USER_STATUS","상태 보기");
define("USER_STYLES","구성 변경");
define("USER_SUBMIT","확인");
define("USER_RESET","초기화");
define("USER_YES","예");
define("USER_NO","아니요");
define("USER_STYLEPATH","styles.css 경로");
define("USER_PROBES","정탐 보고서 보기/추가");
define("USER_EMAIL","이메일");
define("USER_ERROR1","비밀번호 또는 이메일 오류");
define("USER_ERROR2","이메일 오류");
define("USER_INGAME","게임 아이디");
define("USER_ALLYTAG","동맹 태그");
define("USER_ALLYHISTORY","동맹 정보 보기/추가");
define("USER_DIPLOMATIC","외교 상태 변경");
define("USER_STATSPAGE","통계에서 보여줄 항목 수");
define("USER_LINKS","링크");
define("USER_LINKS2","방식:<br>내용;url<br>내용2;url2<br>내용3;url3");
define("USER_EXPORT_TITLE","색 내보내기 (BB 코드)");
define("USER_BB_COORDINATES","주소");
define("USER_BB_MOON","달");
define("USER_BB_DEBRIS","암석지대");
define("USER_BB_ALLY","동맹 이름");
define("USER_BB_ALLYDETAILS","동맹 설명");
define("USER_BB_PLAYERNAME","유저");
define("USER_BB_BANNED","밴");
define("USER_BB_VACATION","휴가 모드");
define("USER_BB_NOOB","뉴비");
define("USER_BB_INACTIVE","비접속");
define("USER_BB_LONGINACTIVE","장기 비접속");
// new with 4.7
define("USER_DELETION","삭제");
define("USER_FLEETINFO","확인된 밀집 함대");
define("USER_ACTIVITIES","유저 활성화");
define("USER_MAINTENANCE","겔럭시툴 유지 보수");
define("USER_MANAGEMENT",MENU_USEROPTIONS);
define("USER_DELETE_MY_COMBAT_REPORTS","나의 전투기록 삭제");
define("USER_DELETE_MY_MESSAGES","나의 저장된 메시지 삭제");
define("USER_DELETE_MY_FLEETMOVES","나의 함대 현황 삭제");
// 4.8
define("USER_DELETE_MY_COMBAT_REPORTS_LIMITED","&1 일보다 오래된 내 전투 기록 삭제");
define("USER_DELETE_MY_MESSAGES_LIMITED","&1 일보다 오래된 내 메시지 삭제");
define("USER_TABLE_ENTRIES","각 페이지에 대한 검색 결과의 갯수");
// 5.0
define("USER_EXISTS","사용자가 이미 존재합니다.");
define("USER_BB_OUTLAW","뉴비해적"); 
define("USER_INVALID_URL","&1 URL은 잘못된 것입니다 - URL 은 무시됩니다.");

/*********************************************************************
* galaxyview.php
*********************************************************************/
define("VIEW_TITLE","오게임 은하 도구 - 상세정보");
define("VIEW_NODATA","정보가 없습니다.");
define("VIEW_GALAXY","은하계");
define("VIEW_SYSTEM","시스템");
define("VIEW_POSITION","위치");
define("VIEW_PLANET","행성");
define("VIEW_MOON","달");
define("VIEW_TF","암석");
define("VIEW_PLAYER","유저");
define("VIEW_PLAYER_ADD","(순위/멤버)");
define("VIEW_ALLY","동맹");
define("VIEW_ALLY_ADD","(순위/멤버)");
define("VIEW_METAL","M");
define("VIEW_CRYSTAL","C");
define("VIEW_COLONISED"," 개의 행성이 존재합니다.");
define("VIEW_UKMOONSIZE","알 수 없음");
define("VIEW_BACK","뒤로");
define("VIEW_NOTICE","메모");
define("VIEW_REPORTS","보고서");
define("VIEW_MOONPHALANX","이 행성계를 탐색할 수 있는 달");
define("VIEW_NOMOONS","검색된 달 없음");
define("VIEW_IRAKS","이 행성계가 IPM 사정거리에 있는 행성");
define("VIEW_NOIRAKS","검색된 IPM 없음");
// 4.0
define("VIEW_MOON_DESTROY_CHANCE","달 파괴 확율");
define("VIEW_CHANCE_WITH_ONE","죽음의 별 1기로 가능한 확율");
define("VIEW_CHANCE_WITH_N","죽음의 별 ");
define("VIEW_DEATH_STARS","기로 가능한 확율");
define("VIEW_DS_DESTROY_CHANCE","죽음의 별이 파괴될 확율");
define("VIEW_TOP","순위 제한");
// new 4.3.5
define("VIEW_GO","보기");
// new 5.0
define("VIEW_DIAMETER","지름");

/*********************************************************************
* change_password.php
**********************************************************************/
define("PW_TITLE","오게임 은하 도구 - 비밀번호 변경");
define("OLD_PASSWORD","기존 비밀번호");
define("NEW_PASSWORD","새 비밀번호");
define("CONFIRM_NEW_PASSWORD","새 비밀번호 확인");
define("PW_MISMATCH","비밀번호가 일치하지 않습니다!");
define("PW_ERROR","기존 비밀번호가 틀립니다!");
define("UPDATE_DONE","변경 완료");
// new 4.2
define("TIMEZONE_OFFSET","시간대를 서버에 맞춤");
// new 4.3
define("DELETE_ACCOUNT","이 겔럭시툴 계정을 삭제");
define("DELETE_ACCOUNT_SAFETY_REQUEST","당신의 겔럭시툴을 삭제하시겠습니가?");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","승인");
define("CH_PASSWD_ADMIN","운영자");
// new 4.7
define("TIMEZONE_OGAME_OFFSET","시간대를 오게임 서버에 맞춤");
// new 4.8
define("CH_PASSWD_USER_LANGUAGE","이 언어로 다음부터 로그온");
define("CH_PASSWD_USER_LANGUAGE_NO_CHANGE","바꾸지않기");
define("CH_PASSWD_EXPAND","항상 보기");
define("CH_PASSWD_COLLAPSE","접어놓기");
define("CH_PASSWD_HIDDEN","메뉴 숨김");
define("CH_PASSWD_GETTING_STARTED","로그인 후 시작정보 보기");
define("CH_PASSWD_PLUGIN","로그인 후 플러그인 메뉴보기");

/*********************************************************************
* notices.php
**********************************************************************/
define("NOTICE_TITLE","오게임 은하 도구 - 메모");
define("NOTICE_HEADER","메모 수정");
define("NOTICE_HEADER2","개인 메모 수정");
define("NOTICE_PUBLIC","공개?");
define("NOTICE_YES","예");
define("NOTICE_NO","아니요");
define("NOTICE_TEXT","메모");
define("NOTICE_SAVE","저장");
define("NOTICE_DELETED","삭제 완료");
define("NOTICE_SAVED","저장 완료");
define("NOTICE_RESULTS","모든 결과");
define("NOTICE_USER","유저");
define("NOTICE_DATE","날짜");
define("NOTICE_EDIT","수정");
define("NOTICE_DELETE","삭제");
define("NOTICE_NEW","새 메모 작성");
define("NOTICE_NOTPUBLIC","비공개 메모");
define("NOTICE_ALL","모두 선택");
define("NOTICE_NONE",SHOW_FILTER_NONE);
define("NOTICE_SEARCH","메모에서 검색");
define("NOTICE_SEARCH_SHORT","검색");
define("NOTICE_HITS","결과수");
define("NOTICE_SHOWRESULTS","화면에 표시할 결과수");
define("NOTICE_OF","of");
define("NOTICE_NOTHING","검색 결과 없음");
// 4.0
define("NOTICE_CHARS","기호");
define("NOTICE_PLAYERNAME","유저");
define("NOTICE_SHOWALL","모두 보기");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","오게임 은하 도구 - 정찰 보고서");
define("REPORTS_RESOURCES","자원");
define("REPORTS_FLEET","함대");
define("REPORTS_DEFENCE","방어");
define("REPORTS_BUILDINGS","건물");
define("REPORTS_TECHNOLOGY","연구");
define("REPORTS_MOON","달");
define("REPORTS_SEARCH","정찰 보고서에서 검색");
define("REPORTS_SEARCH_SHORT","검색");
define("REPORTS_HITS","결과수 ");
define("REPORTS_NOTHING","검색 결과 없음");
define("REPORTS_ADDRESS","좌표");
define("REPORTS_CURRENTNESS","갱신된 날짜");
define("REPORTS_PLAYERNAME","아이디");
define("REPORTS_ALLY","동맹");
define("REPORTS_VIEW","보고서 보기");
define("REPORTS_SEARCH_IN","은하:행성계");
define("REPORTS_FROM_SYSTEM",":");
define("REPORTS_TO","부터");
define("REPORTS_DELETE","삭제");
define("REPORTS_DELETED","삭제 완료");
define("REPORTS_RESULTS","화면에 표시할 결과수");
define("REPORTS_OF","/");
define("REPORTS_DATE","보고서 등록일");
define("REPORTS_DATE_0","신경 안씀");
define("REPORTS_DATE_1","부터");
define("REPORTS_DATE_2","까지");
define("REPORTS_NOTICES","메모");
define("REPORTS_AT_LEAST_RESOURCES","자원 (최소)");
define("REPORTS_SEARCH_EXTENDED","확장 검색");
define("REPORTS_FLEET_RESIS","함대");
define("REPORTS_DEFENCE_RESIS","방시");
define("REPORTS_ALL_RESIS","합계");
define("REPORTS_TECHS","무보장");
define("REPORTS_UNKNOWN_ENTRIES","알 수 없는 항목");
define("REPORTS_PARTLY_INSERTED","부분 입력");
define("REPORTS_FOR_ALL_RES","총 자원");
define("REPORTS_FOR_TF","파편 지대");
define("REPORTS_KT","소형 화물선");
define("REPORTS_GT","대형 화물선");
define("REPORTS_SS","순양함");
define("REPORTS_REC","수확선");
define("REPORTS_RAIDABLE","공격 가능한 행성만");
define("REPORTS_ALL_RESOURCES","모든 자원");
// 4.0
define("REPORTS_STUFF","기타");
define("REPORTS_SPEEDSIM","스피드심 돌리기");
define("REPORTS_DRAGOSIM","Dragosim");
define("REPORTS_STATUS","상태");
define("REPORTS_ERROR","오류 발생");
// 4.2
define("REPORTS_OWN_REPORTS","내 리포트");
// 4.3.3
define("REPORTS_UPLOAD_BY","정찰자");
// 4.4
define("REPORTS_DEPTH","상세한 리포트 ");
define("REPORTS_FLEET_SCORE","함대 스코어");
define("REPORTS_DEFENCE_SCORE","방어 점수");
// 5.0
define("REPORTS_HOURS","시간");
define("REPORTS_MAX_RESULTS_HIT","쿼리 & 1 이상의 조회수를 반환했습니다. 첫 번째 & 1의 결과에만 나타납니다. 다음과 같은 결과를 얻기 위해 검색 요청을 정렬하십시오.");
define("REPORTS_OSIMULATE","OSimulate 시뮬레이션");
define("REPORTS_SHOW_ONLY","이것만 표시");
define("REPORTS_SHOW_PLANETS","행성");
define("REPORTS_SHOW_MOONS","달");
define("REPORTS_OWNER","보고서 작성자");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","오게임 은하 도구 - 통계");
define("STATS_TBLHEAD","순위");
define("STATS_RANK","순위");
define("STATS_PLAYERNAME","아이디");
define("STATS_ALLYNAME","동맹 태그");
define("STATS_SCORE","점수");
define("STATS_FLEET","함대");
define("STATS_RESEARCH","연구");
define("STATS_MEMBERS","멤버");
define("STATS_STATUS","상태");
define("STATS_NOTHING","상태 없음");
define("STATS_NAP","뉴비");
define("STATS_ALLIED","동맹");
define("STATS_WAR","전쟁중");
define("STATS_BOYCOTT","배척");
define("STATS_NEUTRAL","중립");
define("STATS_OWN","자치 동맹");
define("STATS_WING","우군");
define("STATS_UPDATE","수정 날짜");
define("STATS_PLAYERSTATS","유저 통계");
define("STATS_ALLYSTATS","동맹 통계");
// 4.0
define("STATS_DELETE","이 항목을 지우겠습니까?");
define("STATS_CONFIRM_DELETE","이 유저를 지우겠습니까?");
define("STATS_CHANGE_PLAYER_STATUS","유저 상태");
define("STATS_CHANGE_ALLIANCE_STATUS","동맹 상태");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","이 동맹의 모든 동맹원의 상태가 변경됩니다. 기존의 상태는 지워집니다. 그 다음 개인의 상태를 변경하세요.");
define("STATS_UNKNOWN","정보 없음");
define("STATS_DETAILS","상세 정보");
// 4.4
define("STATS_PLAYERSTATUS",SHOW_PLAYER_STATUS);
define("STATS_IGNORE_STATUS",SHOW_PLAYER_STATUS1);
define("STATS_ACTIVE","활동");
define("STATS_INACTIVE",USER_BB_INACTIVE);
define("STATS_BANNED",USER_BB_BANNED);
define("STATS_VACATION",USER_BB_VACATION);
define("STATS_NOOB",USER_BB_NOOB);
// 4.8
define("STATS_YES",SHOW_YES); // reuse SHOW definitions if applicable
define("STATS_NO",SHOW_NO);
define("STATS_SEARCH",USER_SEARCH);
define("STATS_SHOW_GRAPH","점수 분포의 세부 정보로 표시");
define("STATS_LONG_INACTIVE",USER_BB_LONGINACTIVE);
// 4.9
define("STATS_STANDARD","표준 점수");
define("STATS_MILITARY","군사 점수");
define("STATS_ECONOMY","경제");
define("STATS_HONOUR","명예 점수");
define("STATS_MILITARY_BUILD","종합 군사 점수");
define("STATS_MILITARY_DESTROYED","군사 파괴 점수");
define("STATS_MILITARY_LOST","잃은 군사 점수");

/*********************************************************************
* register.php
**********************************************************************/
define("REGISTER_REGISTRATE","가입하기");
define("REGISTER_LOGINNAME","아이디");
define("REGISTER_PASSWORD","비밀번호");
define("REGISTER_PASSWORD_CONFIRM","비밀번호 확인");
define("REGISTER_EMAIL","이메일");
define("REGISTER_INGAME","게임 아이디");
define("REGISTER_ALLYTAG","동맹태그");
define("REGISTER_EMAILVERIFICATION","이메일 확인");
define("REGISTER_EMAILTEXT","은하 도구 가입을 완료하려면 링크를 클릭 해주세요.");
define("REGISTER_ERROR1","사용중인 아이디입니다.");
define("REGISTER_ERROR2","이메일을 보내는 중 오류 발생. 관리자에게 연락하세요.");
define("REGISTER_ERROR3","DB로 정보를 보내는 중 오류 발생!");
define("REGISTER_INFO1","아이디가 생성되었습니다.");
define("REGISTER_INFO2","가입을 완료하려면 이메일로 보내진 링크를 클릭 해주세요.");
define("REGISTER_INFO3","관리자의 확인 후 가입이 완료 됩니다.");
define("REGISTER_BUTTON","초기화면으로");
define("REGISTER_NEW_SUBJECT","은하 도구에 새 사용자가 가입 했습니다.");
define("REGISTER_NEW_MAILTEXT","새 사용자가 가입했습니다. 확인 필요.");
// new 4.2
define("REGISTER_BACK","첫페이지로 돌아가기");
// new 4.3.5
define("REGISTER_MISSING_FIELDS","모든 정보를 기입해주세요.");
// new 4.8
define("REGISTER_ERROR4","Email 주소가 올바르지 않습니다.");
define("REGISTER_ERROR5","비밀번호가 맞지 않습니다.");
define("REGISTER_PWS","비밀번호 안전성");
define("REGISTER_PWS0","매우 쉬움");
define("REGISTER_PWS1","쉬움");
define("REGISTER_PWS2","보통");
define("REGISTER_PWS3","안전함");
define("REGISTER_PWS4","매우 안전함");
// new 5.0
define("REGISTER_EMAIL_USED","이미 사용 중인 이메일입니다.");

/*********************************************************************
* lost_password.php
**********************************************************************/
define("LOSTPW_TITLE","비밀번호 분실");
define("LOSTPW_INFO2","새 비밀번호를 생성하여 해당 이메일 주소로 전송되었습니다.");
define("LOSTPW_BUTTON1","새 비밀번호 발급");
define("LOSTPW_BUTTON2","초기화면으로");
define("LOSTPW_LOGINNAME","아이디");
define("LOSTPW_EMAIL","이메일");
define("LOSTPW_ERROR1","DB로 정보를 보내는 중 오류 발생!");
define("LOSTPW_ERROR2","일치된 정보를 찾을 수 없음!");
define("LOSTPW_ERROR3","이메일을 보내는 중 오류 발생. 관리자에게 문의하세요.");
define("LOSTPW_EMAIL_SUBJECT","요청하신 새 비밀 번호입니다");
define("LOSTPW_EMAIL_TEXT1","다음 정보로 은하 툴에 로그인 하세요");
define("LOSTPW_EMAIL_TEXT2","아이디");
define("LOSTPW_EMAIL_TEXT3","비밀번호");
// new 5.0
define("LOSTPW_INFO1","당신이 가입한 이메일 주소로 재설정된 비밀번호를 받으실 수 있습니다.");
define("LOSTPW_CONFIRM_RESET_SUBJECT","비밀번호을 잊으셨습니까?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","안녕하세요,\n\n당신은 겔럭시툴에 대한 암호 재설정을 요청하였습니다. 새로운 암호를 생성하려면 다음 링크를 누르십시오:");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","오게임 은하 도구 - 유저 정보");
define("USERINFO_NAMES","등록된 모든 유저");
define("USERINFO_DETAIL","상세 정보");
define("USERINFO_ERROR1","이 아이디를 가진 유저가 없습니다!");
define("USERINFO_USERNAME","아이디");
define("USERINFO_INGAME","게임 아이디");
define("USERINFO_EMAIL","이메일");
define("USERINFO_ALLYTAG","동맹");
define("USERINFO_STYLEPATH","스킨");
define("USERINFO_STATUS","상태");
define("USERINFO_ACTIVATE","계정 활성화");
define("USERINFO_LOGINS","로그인 수");
define("USERINFO_LASTLOGIN","마지막 로그인");
define("USERINFO_DATA","추가한 행성계에 대한 정보");
define("USERINFO_NODATA","아직 행성계를 추가 하지 않았습니다!");
define("USERINFO_GALAXY","은하");
define("USERINFO_SYSTEMS","등록 갯수");
define("USERINFO_IP","IP 주소");
define("USERINFO_LOGINTIME","로그인 시간");
define("USERINFO_NOLOGIN","로그인 한적이 없습니다.");
define("USERINFO_LAST_GALAXYUPDATE","마지막 은하 등록");
define("USERINFO_LAST_PUBLIC_NOTICE","마지막 공개 메모");
define("USERINFO_LAST_PRIVATE_NOTICE","마지막 비공개 메모");
define("USERINFO_NUMBEROF_PUBLIC_NOTICE","공개 메모 수");
define("USERINFO_NUMBEROF_PRIVATE_NOTICE","비공개 메모 수");
define("USERINFO_ACTIVATED","계정 활성화 완료");
define("USERINFO_ACTIVATIONTEXT","은하 도구 관리자가 당신의 계정을 활성화 했습니다.\n\n마음껏 사용하세요!");
// new 4.8
define("USERINFO_LAST_SUBMIT","최근 등록일");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","오게임 은하 도구 - 동맹 기록");
define("ALLYHISTORY_TBLHEAD","전체 개요");
define("ALLYHISTORY_PLAYERNAME","유저");
define("ALLYHISTORY_ALLYNAME","동맹");
define("ALLYHISTORY_LASTMONTH","지난 달"); // changed at 4.0
define("ALLYHISTORY_ALL_DATA","모든 정보"); // new 4.0
define("ALLYHISTORY_SHOW","통계 보기");
define("ALLYHISTORY_TIMESPAN","기간");
define("ALLYHISTORY_PROGESS","변화");
define("ALLYHISTORY_SCORE","점수");
define("ALLYHISTORY_FSCORE","함대 점수"); // new 4.0
define("ALLYHISTORY_RSCORE","연구 점수"); // new 4.0
define("ALLYHISTORY_MEMBER","멤버"); // new 4.0
define("ALLYHISTORY_NOTHING","검색 결과 없음");
define("ALLYHISTORY_DETAILS","상세 정보");
define("ALLYHISTORY_SHOW_ADDRESS","주소");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","유저 정보");
define("DETAILEDINFO_ALLYINFO_TITLE","동맹 정보");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","유저 상세 정보");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","동맹 상세 정보");
define("DETAILEDINFO_NO_ALLIANCE","동맹 없음");
define("DETAILEDINFO_SCORE","점수 순위");
define("DETAILEDINFO_FLEET","함대 순위");
define("DETAILEDINFO_RESEARCH","연구 순위");
define("DETAILEDINFO_RANK","순위");
define("DETAILEDINFO_POINTS","점수");
define("DETAILEDINFO_KNOWN_PLANETS","알려진 행성");
define("DETAILEDINFO_MOONS","알려진 달");
define("DETAILEDINFO_PHALANX_AREA","밀집센서 지역");
define("DETAILEDINFO_NO_PHALANX_AREA","밀집센서 없음");
define("DETAILEDINFO_NOTICES","메모");
define("DETAILEDINFO_NO_NOTICES","메모 없음");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","이전 동맹");
define("DETAILEDINFO_RESOURCES_PER_HOUR","시간당 자원");
define("DETAILEDINFO_RESOURCES_PER_DAY","일일 자원");
define("DETAILEDINFO_RESOURCES_PER_WEEK","한주 자원");
define("DETAILEDINFO_RESOURCES_PER_MONTH","한달 자원(30일)");
define("DETAILEDINFO_METAL","메탈");
define("DETAILEDINFO_CRYSTAL","크리스탈");
define("DETAILEDINFO_DEUTERIUM","듀테륨");
define("DETAILEDINFO_UNKNOWN","정보 없음");
define("DETAILEDINFO_SCORE_DISTRIBUTION","점수 분포");
// new 4.2
define("DETAILEDINFO_GENERAL","세부사항");
define("DETAILEDINFO_MEMBERS","회원");
define("DETAILEDINFO_GRAPHS","그래프");
define("DETAILEDINFO_RESOURCES","자원");
define("DETAILEDINFO_FLEET_TAB","함대");
define("DETAILEDINFO_TECH","연구");
define("DETAILEDINFO_FLEET_DETAIL","합 / (유저 평균) 사용 가능한 모든 보고서");
define("DETAILEDINFO_TECH_DETAIL","사용 가능한 모든정보 중 플레이어의 평균에 해당");
// new 4.3
define("DETAILEDINFO_PLANET_TAB",REPORTS_SHOW_PLANETS);
define("DETAILEDINFO_MOON_TAB",REPORTS_SHOW_MOONS);
// 4.7
define("DETAILEDINFO_ACTIVITIES","접률 현황");
define("DETAILEDINFO_NODATA",VIEW_NODATA); // reuse existing translations
define("DETAILEDINFO_ACTIVITY_DESCRIPTION","&1 의 활동 시간대 수집 기록:");
define("DETAILEDINFO_GALAXYVIEWS","겔럭시 보기");
define("DETAILEDINFO_SCANS","정찰 활동");
define("DETAILEDINFO_MESSAGES","유저 메시지");
define("DETAILEDINFO_COMBATS","전투 기록");
define("DETAILEDINFO_ALLYPAGE","동맹 개요");
define("DETAILEDINFO_MANUAL","수동 항목");
define("DETAILEDINFO_START","시작");
define("DETAILEDINFO_TO","부터");
define("DETAILEDINFO_TODAY","오늘");
define("DETAILEDINFO_DATA_RESTRICTION","까지:");
define("DETAILEDINFO_WEEKDAY_WEEKEND","주말");
define("DETAILEDINFO_WEEKDAY_WORKINGDAY","평일");
define("DETAILEDINFO_WEEKDAY_MONDAY","월");
define("DETAILEDINFO_WEEKDAY_TUESDAY","화");
define("DETAILEDINFO_WEEKDAY_WEDNESDAY","수");
define("DETAILEDINFO_WEEKDAY_THURSDAY","목");
define("DETAILEDINFO_WEEKDAY_FRIDAY","금");
define("DETAILEDINFO_WEEKDAY_SATURDAY","토");
define("DETAILEDINFO_WEEKDAY_SUNDAY","일");
define("DETAILEDINFO_WEEKDAY_SHORTLENGTH",3); // number of characters to shorten week day
define("DETAILEDINFO_PLAYER_CURRENTLY_ACTIVE","현재 유저는 활동 중");
define("DETAILEDINFO_PLAYER_MESSAGES","유저 메시지");
define("DETAILEDINFO_SHOW","보기");
define("DETAILEDINFO_NONE","사용할 수 없음");
define("DETAILEDINFO_ENTER_MANUALLY","유저의 활동 시간을 입력하세요");
define("DETAILEDINFO_PLAYER_SEEN_ON","유저 활동 시간");
define("DETAILEDINFO_INSERT","기입");
define("DETAILEDINFO_OGAME_SERVERTIMES","참고 사항: 모든 날짜와 시간은 오게임 서버 시간으로 나타내시오.");
define("DETAILEDINFO_DAY_VIEW","24시간 활동");
define("DETAILEDINFO_WEEK_VIEW","주간 활동");
// new 4.8
define("DETAILEDINFO_HOME_PLANET","본성");
// new 5.0
define("DETAILEDINFO_PLANETNAME","이름"); // also used for moons!
define("DETAILEDINFO_DEFENCE_SCORE","방어시설 점수");
define("DETAILEDINFO_DEFENCE_SCORE_TOOLTIP","방어시설 점수 = 함대 - 점수 + 연구 + 경제.<br/>모든 통계가 최신이며, 유효한 정보가 포함되어야 합니다!");
define("DETAILEDINFO_SCORE_PER_SHIP","점수 / 함대");
define("DETAILEDINFO_SHIPS","함대의 수");
define("DETAILEDINFO_DATE_IN_FUTURE","과거에 존재하지 않는 시간을 유지하지 마십시오");

// new 4.2
/*********************************************************************
* administration.php
**********************************************************************/
define("ADMIN_TITLE","겔럭시툴 관리");
define("ADMIN_DISCLAMER","주의 :이 스크립트를 실행하는 것의 위험은 사용자 본인이 감수해야 합니다. 이러한 스크립트의 대부분은 영구적으로 데이터를 삭제합니다!");
define("ADMIN_INCONSISTENCIES","데이터베이스에서의 데이터 불일치");
define("ADMIN_PLANETS","0이나 15번 이상의 행성을 삭제");
define("ADMIN_GALAXIES","&1보다 큰 겔럭시 삭제");
define("ADMIN_PLAYERS","플레이한 적 없는 플레이어 삭제 - 중복된 플레이어 항목 읽기");
define("ADMIN_REPORTS","존재하지 않는 행성의 보고서를 삭제");
define("ADMIN_MISC","여러가지 잡다한 항목 삭제");
define("ADMIN_RESET","겔럭시툴 초기화 (사용자와 ip table 은 삭제되지 않습니다)");
define("ADMIN_OLD_PLAYERS","&1 일 보다 오래된 플레이어를 삭제.");
define("ADMIN_OLD_REPORTS","&1 일 보다 오래된 보고서를 삭제.");
define("ADMIN_LOADING","페이지가 로드되는 동안 이 창을 닫지 마십시오.");
define("ADMIN_STATUS","당신의 요청 사항 확인");
define("ADMIN_SELECTION","하나 이상의 항목이 선택되어야 합니다.");
define("ADMIN_SAFETY","당신은 정말로 이 스크립트를 실행하시겠습니까?");
define("ADMIN_DONE","완료");
define("ADMIN_NOTBD","처리 할 것이 없습니다.");
// new 4.3
define("ADMIN_OLD_GALAXIES","&1 일 보다 오래된 겔럭시를 삭제");
define("ADMIN_UNUSED_PLAYERS","겔럭시내 존재 하지 않는 플레이어 삭제");
// new 4.7
define("ADMIN_OLD_ACTIVITIES","&1 일 보다 오래된 유저를 삭제(겔럭시툴유저)");
// new 4.8
define("ADMIN_OLD_COMBATS","&1 일 보다 오래된 전투 보고서 삭제");
define("ADMIN_OLD_INGAME_MSG","&1 일 보다 오래된 게임내 메시지 삭제");
// new 5.0
define("ADMIN_OGAME_API","겔럭시툴로 오게임의 공개 데이터를 로드합니다.");
define("ADMIN_OGAME_ALL_DATA",ALLYHISTORY_ALL_DATA);
define("ADMIN_OGAME_GALAXY_DATA",MENU_GALAXYVIEW);
define("ADMIN_OGAME_STATISTICS_DATA",MENU_STATISTICS);

// new 4.3.5
/*********************************************************************
* errorpage.php
**********************************************************************/
define("ERRORPAGE_PAGEFORWARD","브라우저가 페이지 변환을 지원 하지 않는 경우, 여기를 클릭하세요.");
define("ERRORPAGE_PERMISSION_DENIED","당신은 이 페이지를 접근할 권한이 없습니다. 클릭하면 뒤로 이동합니다.");

// new 4.7
/*********************************************************************
* fleet_movements.php
**********************************************************************/
define("FLEETS_TITLE","오게임 겔럭시툴 - 함대 현황");
define("FLEETS_ACTUAL_FLEETS","현재 함대 현황");
define("FLEETS_YES",SHOW_YES);
define("FLEETS_NO",SHOW_NO);
define("FLEETS_DETAILS","자세히");
define("FLEETS_MISSION_EXPEDITION","원정");
define("FLEETS_MISSION_COLONIZATION","식민지");
define("FLEETS_MISSION_RECYCLE","수확선");
define("FLEETS_MISSION_TRANSPORT","운송");
define("FLEETS_MISSION_DEPLOYMENT","배치");
define("FLEETS_MISSION_ESPIONAGE","정찰");
define("FLEETS_MISSION_ACS_DEFEND","ACS 방어");
define("FLEETS_MISSION_ATTACK","공격");
define("FLEETS_MISSION_ACS_ATTACK","ACS 공격");
define("FLEETS_MISSION_MOON_DESTRUCTION","달 파괴");
define("FLEETS_MISSION_MISSILE_ATTACK","미사일 공격");
define("FLEETS_NO_DATA","해당 데이터를 찾을 수 없습니다.");
// new 5.0
define("FLEETS_FLEET","함대");
define("FLEETS_ALL_FLEETS","모든 함대의 움직임을 보이기");

/*********************************************************************
* parser_combat_reports.inc.php
**********************************************************************/
define("COMBAT_REPORT_OUDATED_GALAXYVIEW","당신의 겔툴 정보가 오래 되었다. 전투가 이뤄진 좌표와 대상을 업데이트 하라!");

/*********************************************************************
* messages.php
**********************************************************************/
define("MESSAGES_TITLE","오게임 겔럭시툴 - 오게임 메시지");
define("MESSAGES_PLAYERNAME","플레이어 이름");
define("MESSAGES_SUBJECT","제목");
define("MESSAGES_DATE","날짜");
define("MESSAGES_FILTER","필터");
define("MESSAGES_DELETE","메시지 삭제");
define("MESSAGES_PUBLISH_DETAIL","플레이어의 주의사항을 추가하여 메시지를 공개");
define("MESSAGES_PUBLISH_HEADER","&sender 님이 &recipient 에게 메시지 보내기 &date:\n\n &message"); // &sender, &recipient, &date, &message replaced at runtime
define("MESSAGES_PLAYER_FILTER","플레이어의 메시지:");
// new 5.0
define("MESSAGES_CONTENT","내용");

/*********************************************************************
* combat_reports.php
**********************************************************************/
define("COMBATS_TITLE","오게임 겔럭시툴 - 전투 보고서");
define("COMBATS_ATTACKER","공격자");
define("COMBATS_DEFENDER","방어자");
define("COMBATS_DATE","날짜");
define("COMBATS_OWNER","올린이");
define("COMBATS_WINNER","승리자");
define("COMBATS_COMBATREPORT","전투 보고서");
define("COMBATS_COMBAT_AT","전투에서");
define("COMBATS_LOST_UNITS","잃은 유닛수");
define("COMBATS_LOOT","약탈한 자원");
define("COMBATS_DEBRIS","잔해");
define("COMBATS_AND","과");
define("COMBATS_PUBLISH","보고서를 공개합니다.");
define("COMBATS_UNPUBLISH"," 보고서 공유 취소 (비공개로 전환)");
define("COMBATS_DELETE","보고서 삭제");
define("COMBATS_CHECK_ALL","모두 선택");
define("COMBATS_UNCHECK_ALL","모두 선택 취소");
define("COMBATS_WITH_SELECTED","공유 설정");
define("COMBATS_PUBLIC_REPORTS","공개 보고서");
define("COMBATS_YES",SHOW_YES); // no need for translation!
define("COMBATS_NO",SHOW_NO); // no need for translation!
define("COMBATS_SEARCH_OPTIONS","검색 옵션");
define("COMBATS_SEARCH","GO");
define("COMBATS_RESET","RESET");
// 4.8
define("COMBATS_COORDINATES",USER_BB_COORDINATES);
define("COMBATS_INVALID_GALAXY_ENTERED","잘못된 은하계 입력");
define("COMBATS_INVALID_SYSTEM_ENTERED","잘못된 시스텝 입력");
define("COMBATS_INVALID_PLANET_ENTERED","잘못된 행성 입력");
define("COMBATS_GALAXY_FROM_TO","은하계");
define("COMBATS_SYSTEM_FROM_TO","시스템");
define("COMBATS_PLANET_FROM_TO","행성");
define("COMBATS_APPLY",GENERAL_APPLY);
define("COMBATS_COMBAT_SUMMARY","전투 보고서 요약");
define("COMBATS_DOWNLOAD_CSV"," CSV 파일로 다운받기");

/*********************************************************************
* report_archive.php
**********************************************************************/
define("REPORT_ARCHIVE_TITLE","보고서 보관함");
define("REPORT_ARCHIVE_COORDINATES","좌표");
define("REPORT_ARCHIVE_SCANTIME","정탐 시간");
define("REPORT_ARCHIVE_DELETE","이 항목 삭제");
define("REPORT_ARCHIVE_CONFIRM_DELETE","정말로 이 항목을 삭제하시겠습니까?");
define("REPORT_ARCHIVE_GALAXY","은하계");
define("REPORT_ARCHIVE_SYSTEM","시스템");
define("REPORT_ARCHIVE_PLANET","행성");
define("REPORT_ARCHIVE_MOON","달");
define("REPORT_ARCHIVE_DETAILS","자세히");
define("REPORT_ARCHIVE_RESOURCES",DETAILEDINFO_RESOURCES);
define("REPORT_ARCHIVE_HEADER_RESOURCES",REPORTS_RESOURCES);
define("REPORT_ARCHIVE_DETAILS_FOR","(&3)의  &1 행성 [&2]정탐 보관함  "); // &1 = planetname; &2 = coordinates; &3 = playername
define("REPORT_ARCHIVE_FLEET_CARGO","함대 화물 용량");
define("REPORT_ARCHIVE_IRAK_RANGE","IPM 미사일 범위");
define("REPORT_ARCHIVE_CHART_TYPE","도표 유형");

/*********************************************************************
* install.php
**********************************************************************/
define("INSTALL_TITLE", "Galaxytool 버전 설치");
define("INSTALL_PROGRESS", "전체 진행");
define("INSTALL_STEP", "단계");
define("INSTALL_CONTINUE", "계속");
define("INSTALL_VALIDATE", "인증");
define("INSTALL_STEP1", "환영합니다");
define("INSTALL_STEP2", "쓰기 검사");
define("INSTALL_STEP3", "데이터베이스 설정");
define("INSTALL_STEP4", "오게임 설정");
define("INSTALL_STEP5", "겔럭시툴 설정");
define("INSTALL_STEP6", "관리자 비밀번호");
define("INSTALL_STEP7", "겔럭시툴 설치");
define("INSTALL_STEP8", "설치 완료"); //쓰기 권한 확인; install.php 와 update.php 을 삭제하고index.php 로 이동하세요.
define("INSTALL_FILE_DELETE_CHECK","웹 서버의 install.php 와 update.php를 삭제하시기 바랍니다.");

define("INSTALL_STEP1_PHP_FAILED", "귀하의 PHP &1 버전이 Galaxytool 버전에서 작동하지 않습니다.");
define("INSTALL_STEP1_FOPEN_FAILED", "당신의 PHP 버전이 FONPEN() 명령을 사용하여 웹 페이지를 열 수 없습니다. 이것은 OGAME API가 필요합니다.");
define("INSTALL_STEP1_WELCOME", "Galaxytool의 설치 마법사 시작, 당신에게 Galaxytool 설치에 대한 정보를 제공합니다.");

define("INSTALL_STEP2_DESCRIPTION","귀하의 config.php 및 attributes.php 파일은 쓰기 권한이 설정 되어 있는지 확인 하십시오.");
define("INSTALL_STEP2_DESCRIPTION2","당신이 모르는 경우, 여기서 보고 해결해보세요: &1");
define("INSTALL_STEP2_FILE_NOT_WRITEABLE", "파일을 쓰기 불가능합니다.");

define("INSTALL_STEP3_SERVER", "데이터베이스 서버");
define("INSTALL_STEP3_USERNAME", L_USERNAME);
define("INSTALL_STEP3_PASSWORD", L_PASSWORD);
define("INSTALL_STEP3_DBNAME", "데이터베이스 이름");
define("INSTALL_STEP3_PREFIX", "Tablename prefix");
define("INSTALL_STEP3_ENTER_PREFIX", "예를 들어 mytool_");
define("INSTALL_STEP3_ENTER_SERVER", "서버 주소를 입력하십시오. 필요에 따라 시스템 관리자에게 문의하십시오. 일반적으로 정상 값은 localhost입니다.");
define("INSTALL_STEP3_ENTER_USERNAME", "데이터베이스 액세스에 사용 할 사용자 이름을 입력하십시오.");
define("INSTALL_STEP3_ENTER_PASSWORD", "데이터베이스 액세스에 사용 할 사용자 암호를 입력하십시오.");
define("INSTALL_STEP3_ENTER_DBNAME", "Enter the database name which shall be used for installation (must exist)");
define("INSTALL_STEP3_CONNECT_FAILED", "데이터베이스 서버에 연결할 수 없습니다.");
define("INSTALL_STEP3_DB_FAILED", "데이터베이스 &1을 찾을 수 없습니다.");
define("INSTALL_STEP3_MYSQL_VERSION_FAILED", "MySQL version &1 이 겔럭시툴 버전에서 작동하지 않습니다.");

define("INSTALL_STEP4_URL","OGame의 URL");
define("OGAME_URL_DETAILS","당신 오게임 로그온했을 때 표시되는 URL을 입력합니다. 해당 URL을 바탕으로 오게임 API에서 겔럭시툴 정보를 검색합니다. 이것은 갤럭시 툴바 를 사용하지 않고 데이터베이스를 로드하는데 사용할 수 있습니다. 이 API는 오게임 4.1 버전부터 도입되었습니다.");
define("INSTALL_STEP4_UNIVERSE","OGame 은하");
define("INSTALL_STEP4_DEF_TO_DEBRIS","방어시설 데브리화");
define("INSTALL_STEP4_DEBRIS_RATE","데브리 비율");
define("INSTALL_STEP4_SPEED_RATE","서버 속도");
define("INSTALL_STEP4_ENTER_UNIVERSE","당신의 우주 이름(대소문자 구분) 또는 번호를 입력합니다.");
define("INSTALL_STEP4_UNIVERSE_MISSING","당신의 우주를 입력해야 합니다.");
define("INSTALL_STEP4_ENTER_URL","당신의 오게임 우주 URL을 입력하십시오.");
define("INSTALL_STEP4_URL_MISSING","오게임 URL를 입력해야 합니다.");
define("INSTALL_STEP4_URL_CHECK_FAILED","OGame API 를 찾을 수 없습니다. &1");
// 5.1
define("INSTALL_STEP4_GETSETTINGS","Fetch settings");

define("INSTALL_STEP5_TOOLNAME","겔럭시툴 이름");
define("INSTALL_STEP5_ENTER_TOOLNAME","이것은 겔럭시툴의 로그인 페이지에 표시되는 이름입니다.");
define("INSTALL_STEP5_LANGUAGE","기본 언어");
define("INSTALL_STEP5_EMAIL_TO","에게 이메일 보내기");
define("INSTALL_STEP5_ENTER_EMAIL_TO","당신의 등록에 대한 정보를 담은 메일을 수신할 이메일 주소를 입력하세요.");
define("INSTALL_STEP5_EMAIL_FROM","이메일의 보낸사람");
define("INSTALL_STEP5_ENTER_EMAIL_FROM","해당 이메일 주소가 Galaxytool에서 보내는 모든 메일들에 대한 회신메일로 표시됩니다");
define("INSTALL_STEP5_USE_PHPMAILER","PHPMailer 사용");
define("INSTALL_STEP5_MAXSHOUTS","외침박스 최대 항목 수");
define("INSTALL_STEP5_ENTER_USE_PHPMAILER","서버가 기본적으로 이메일을 보내기를 지원하지 않는 경우 PHPMailer를 사용하십시오.");
define("INSTALL_PHPMAILER_HOST","SMPT 호스트");
define("INSTALL_PHPMAILER_HOST_EXAMPLE","예: smtp.provider.com");
define("INSTALL_PHPMAILER_USER","SMPT 사용자명");
define("INSTALL_PHPMAILER_USER_EXAMPLE","예: user@provider.dcom");
define("INSTALL_PHPMAILER_PASS","SMPT 비밀번호");
define("INSTALL_PHPMAILER_SECURE","인증 방법 (예 : SSL)");
define("INSTALL_PHPMAILER_PORT","SMTP Port");

define("INSTALL_STEP6_INTRO","당신이 겔럭시툴을 설치한 후에 처음으로 로그온을 위해 사용해야하는 <strong>관리자<strong> 계정에 대한 암호를 설정하십시오.");

define("INSTALL_STEP7_CONFIG","Configuration 파일이 작성되었습니다.");
define("INSTALL_STEP7_CONFIG_FAILED","Configuration 파일을 만들 수 없습니다. ");
define("INSTALL_STEP7_ATTRIBUTES","Attributes 파일이 작성되었습니다.");
define("INSTALL_STEP7_ATTRIBUTES_FAILED","Attributes 파일을 만들 수 없습니다.");
define("INSTALL_STEP7_CREATED_TABLES","데이터베이스 테이블이 생성되었습니다.");

define("INSTALL_STEP8_INTRO","당신은 성공적으로 겔럭시툴을 설치하였습니다!");
define("INSTALL_STEP8_LOAD_DATA","오게임 데이터 다운로드 中...");
define("INSTALL_STEP8_LOAD_DATA_FINISHED","오게임 데이터 다운로드가 완료되었습니다.");
define("INSTALL_STEP8_DELETE_FILE","지금, 당신의 Web 서버에서 설치 파일 install.php와 update.php를 삭제해야합니다.");
define("INSTALL_STEP8_LOGON","<strong>admin</strong> 이전에 사용자가 설정한 비밀번호로 로그인하십시오.");

/*********************************************************************
* update.php
**********************************************************************/
define("UPDATE_START","&1 버전 업데이트 시작");
define("UPDATE_STEP_DONE","완료");
define("UPDATE_TITLE", "Galaxytool의 업데이트 버전");
define("UPDATE_STEP1_WELCOME", "겔럭시툴 업데이트 마법사에 오신 것을 환영합니다. 당신은 겔럭시툴의 안내에 따라 업데이트를 진행하게 됩니다.");
define("UPDATE_STEP1_BACKUP_FILES", "첫번째 단계로,당신의 <strong>config</strong> 폴더를 백업해야 합니다! 폴더 오류가 발생할 경우에 당신의 설정파일을 대체할 수 있 습니다.");
define("UPDATE_STEP1_BACKUP_DB", "다음 데이터베이스의 백업은 <a href=\"http://www.ehow.com/how_2036600_create-database-php.html\">에서</a> 백업을 만들수 있습니다.");
define("UPDATE_STEP1_PROCEED", "백업파일이 만들어 졌습니다. 업데이트를 진행할 수 있습니다.");
define("UPDATE_STEP1", INSTALL_STEP1);
define("UPDATE_STEP2", INSTALL_STEP5);
define("UPDATE_STEP2_OLD_VERSION", "겔럭시툴 구버전");
define("UPDATE_STEP3", "겔럭시툴을 업데이트");
define("UPDATE_STEP3_UPDATE_RUNNING", "업데이트 진행 중, 잠시 기다려 주십시오...");
define("UPDATE_STEP4", "업데이트 완료");
define("UPDATE_STEP4_INTRO","겔럭시툴이 성공적으로 업데이트 되었습니다!");
define("UPDATE_STEP4_UPDATE_DONE","업데이트를 실행합니다.");
define("UPDATE_FAILED","업데이트가 실패하였습니다.");

?>