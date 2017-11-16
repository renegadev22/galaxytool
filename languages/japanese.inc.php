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
define("L_USERNAME","ユーザ名");
define("L_PASSWORD","パスワード");
define("L_LOGINFAILURE","ユーザ名あるいはパスワードがが間違っているか，そのアカウントは有効化されていません．");
define("L_TOKENFAILURE","あなたのログオンキーが間違っているか、そのアカウントは有効化されていません.");
define("L_LOGINTEXT","ログインして下さい．");
define("L_LANGUAGE","利用可能な言語:");
define("L_TIMEOUT","セッションがタイムアウトしました．");
define("L_REGISTER","登録");
define("L_PWLOST","パスワード忘れ");
define("INDEX_TITLE","OGame Galaxytool - 概要");
define("INDEX_INFO","インフォメーション");
define("INDEX_ENTRIES","全システム数");
define("INDEX_ENTRIES_LASTWEEK","先週更新されたシステム数");
define("INDEX_ENTRIES_TO_OLD","一カ月以上更新されていないシステム数");
define("INDEX_REGISTERED_USERS","登録ユーザ数");
define("INDEX_PAGEFORWARD","自動的にジャンプできなければ，ここをクリックして下さい．");
define("INDEX_NOTICES","メモ");
define("INDEX_PLAYERS","ランキング（プレーヤー）");
define("INDEX_ALLIES","ランキング（同盟）");
define("INDEX_REPORTS","スパイレポート");
define("INDEX_VERSION","最新版ダウンロード");
define("INDEX_LATEST_VERSION","最新のバージョンをお使いです");
define("INDEX_SHOUTBOX","メッセージボックス");
define("INDEX_NOENTRY","まだメッセージはありません");
define("INDEX_COMMENT","メッセージ入力");
define("INDEX_INSERT","追加");
define("INDEX_UMOD","休暇モード中のユーザ数");
define("INDEX_NO_MOONS","月の数");
define("INDEX_NO_EMPTY_SYSTEMS","空いているシステム数");
define("INDEX_NO_FULL_SYSTEMS","全て埋まったシステム数");
define("INDEX_NO_TARGETS","攻撃可能な惑星数");
// 4.0
define("INDEX_USERINFO","ユーザ数");
define("INDEX_ONLINE","オンライン中のユーザ数");
define("INDEX_TODAY","本日ログインしたユーザ数");
define("INDEX_ALL","ログインした全ユーザ数の合計");
// 4.3.7
define("GENERAL_LOAD_FORM","フォームデータを開く");
define("GENERAL_SAVE_FORM","フォームデータを保存");
define("GENERAL_SAVE_AS_TEXT","ファイル名");
define("GENERAL_SAVE","保存");
// 4.8
define("INDEX_USERMANAGEMENT","アクティベーション概要");
define("INDEX_NEEDADMIN","アカウントロック解除");
define("INDEX_NEEDEMAIL","アカウント未検証");
define("INDEX_TOOLBAR_INFO","Galaxytool プラグイン情報");
define("INDEX_TOOLBAR_URL","Galaxytool URL");
define("INDEX_TOOLBAR_VERSION_REQUIRED","プラグインは右記のバージョン以降が必要.");
define("INDEX_TOOLBAR_INSTALL_GUIDE","プラグインのインストール手順");
define("INDEX_TOOLBAR_TOKEN","ログオンキー");
define("INDEX_TOOLBAR_NEW_TOKEN","新しいキーを取得");
define("INDEX_PLAYERS_WITH_N_PLANETS","&1 以上の惑星を持つプレーヤー");
define("INDEX_GETTING_STARTED","Galaxytoolの入門");
define("INDEX_GETTING_STARTED1","Galaxytoolへようこそ!");
define("INDEX_GETTING_STARTED2","GalaxytoolはあなたのOGameの宇宙 &1 で何が起こっているかを分析するのに役に立つでしょう.");
define("INDEX_GETTING_STARTED3","あなたが実際にデータを分析する前に、まずデータを挿入する必要があります。このためには、Firefox用の &1 のようなブラウザプラグインが必要となります.");
define("INDEX_GETTING_STARTED4","あなたがプラグインをインストールしたら、通常どおりOGameページ内を移動し、何かがあなたのGalaxytoolに送信されるたびに、小さなステータスウィンドウが表示されます.");
define("INDEX_GETTING_STARTED5","いったんプラグインが、Galaxytoolにデータを挿入すると、彼らのコロニーがある場所、彼らが所持しているコロニーの数、彼らが最もアクティブな時間帯の分析を開始することができます.");
define("INDEX_GETTING_STARTED6","それはまた、過去数日または数週間の間、あなたと競争相手に対してコンバットリポートを確認し分析することによりあなたがどのようなプロセスをとればいいか？を助けます.");
define("INDEX_GETTING_WIKIPAGE","Galaxytoolの中にはより多くのさまざまな機能があります.");
define("INDEX_GETTING_WIKIPAGE2","それらは私たちのwikiページでチェックしてください.");
define("INDEX_GETTING_BOARD","フィードバックやアイデアは私たちの掲示板を御利用ください.:");
define("INDEX_GETTING_CHAT1","またはチャットルームをご参照ください.:");
define("INDEX_GETTING_CHAT2","我々開発者は24時間/7日オンラインではありませんが、そこに私たちの自由時間の多くを割くので、辛抱強く待ってください.");
// new 5.0
define("INDEX_CLOSE","閉じる");
define("INDEX_LOGIN","ログイン");
define("GENERAL_REQUIRED_FIELDS","すべての必須フィールドを入力してください");
define("INDEX_MESSAGES","メッセージ");
define("INDEX_EXAMPLE","例");
define("INDEX_INVALID_DATA","データ無効");
define("GENERAL_COLUMN_HIDE_TITLE","列の管理");
define("GENERAL_COLUMN_HIDE_INFO","あなたがテーブルに表示する列を選択してください.");
define("GENERAL_ENTRIES_DELETED","&1 エントリが削除");
define("GENERAL_APPLY","適用");
define("STARTPAGE_GALAXYTOOL_DESCR","<em>Galaxytool</em> は、ブラウザゲームOGameのためのツールです");
define("GENERAL_OVERWRITE","エントリが重複し上書きされます");
define("GENERAL_OVERWRITE_QUESTION","上書きしますか?");
define("INDEX_OWN_LOGINS","あなたのログイン名");
define("GENERAL_OPEN_IN_NEW_WINDOW","リンクを新しいウィンドウで開く");
// 5.1
define("GENERAL_UNIT_OF_MEASURE_DAYS","Days");

/*********************************************************************/
/***************************** internal ******************************/
/*********************************************************************/
// index.php
define("PROGRAM_NAME","OGame Galaxytool");
define("SHORTNAME","Galaxytool");
define("BACK_INDEX","メインページに戻ります");
define("UNIVERSE","宇宙");

// search
define("MENU_INFO_LINKS","インフォメーション");
define("MENU_PAGE","概要");
define("MENU_DB_SEARCH","データベースの検索");
define("MENU_DB_NOTICES","メモの検索");
define("MENU_DB_REPORTS","スパイレポートの検索");
define("MENU_GALAXYVIEW","銀河の閲覧");
define("MENU_STATISTICS","ランキング");
define("MENU_ALLYHISTORY","過去の概要");
// 4.7
define("MENU_FLEET_MOVEMENTS","艦隊動向");
define("MENU_COMBAT_REPORTS","コンバットレポート");
define("MENU_MESSAGES","ゲーム内メッセージ");

// insert / change
define("MENU_OPTION_LINKS","オプション");
define("MENU_DB_REFRESH","データベースに追加");
define("MENU_NOTICES","メモ");
define("MENU_DB_STATUS","データベースステータス");
define("MENU_USEROPTIONS","ユーザ管理");
define("MENU_USEROPTIONS2","ユーザオプション");
define("MENU_USEROPTIONS3","ユーザ情報");
// 4.2
define("MENU_ADMIN","管理用");
// 4.3.3
define("MENU_LOGOUT","ログアウト");

// Stuff
define("MENU_STUFF","その他");
define("MENU_FORUM_THREAD","開発者用フォーラム");
define("MENU_DOWNLOADPAGE","ダウンロードページ");
define("MENU_LANGUAGE","言語");
define("MENU_HELP","ヘルプ");
// 4.0
define("MENU_TOOLOPTIONS","Galaxytoolオプション");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1","をデータベースに追加");
define("PARSER_ERROR1","下記の座標を追加中にエラーが発生:");
define("PARSER_ERROR2","データベースが見つかりません！");
define("PARSER_ERROR3","データベースサーバが見つかりません！");
define("PARSER_WRONG_UNIVERSE","宇宙が違います。 - 入力値: \"&1\" 予想: \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","OGame Galaxytool - 検索ページ");
define("SHOW_SEARCH","データベースを検索");
define("SHOW_ALLYSYMBOL","同盟タグ");
define("SHOW_PLAYERNAME","プレーヤー名");
define("SHOW_MOONS","月がある惑星のみ表示");
define("SHOW_NOTICES","メモ付きの惑星のみ表示");
define("SHOW_COLONIES","コロニーのみ表示");
define("SHOW_YES","はい");
define("SHOW_NO","いいえ");
define("SHOW_SEARCHRANGE","範囲");
define("SHOW_SEARCH_IN","銀河を検索");
define("SHOW_FROM_SYSTEM","システムから");
define("SHOW_FROM_PLANET","惑星の位置から");
define("SHOW_TO","へ");
define("SHOW_DESCRIPTION","プレーヤー名または同盟名に対し，ワイルドカードとして*を使うことができます．つまり，&quot;name&quot;を名前に含む全てのプレーヤーを検索できます．<br />以下の項目のうち指定したい項目のみ埋めて下さい");
define("SHOW_SORT_BY","並び替え");
define("SHOW_GALASYSTEM","銀河/システム");
define("SHOW_ALLYNAME","同盟名");
define("SHOW_SEARCHBUTTON","検索");
define("SHOW_ADDRESS","座標");
define("SHOW_ALLYSORT","同盟");
define("SHOW_PLANET","惑星名");
define("SHOW_STATUS","ステータス");
define("SHOW_CURRENTNESS","更新時間");
define("SHOW_PLAYER_STATUS","プレーヤーステータス");
define("SHOW_PLAYER_STATUS1","全て");
define("SHOW_PLAYER_STATUS2","攻撃可能");
define("SHOW_PLAYER_STATUS3","7日以上不在");
define("SHOW_HITS","検索結果");
define("SHOW_OF","/");
define("SHOW_ASC","昇順");
define("SHOW_DESC","降順");
define("SHOW_RESULTS","件（ページ当たり）");
define("SHOW_MOON","月");
define("SHOW_UKMOONSIZE","不明");
define("SHOW_DF","DF");
define("SHOW_DF_LONG","デブリフィールド");
define("SHOW_METAL","M");
define("SHOW_METAL_LONG","メタル");
define("SHOW_CRYSTAL","C");
define("SHOW_CRYSTAL_LONG","クリスタル");
define("SHOW_BOTH","合計");
define("SHOW_AT_LEAST","(最少)");
define("SHOW_DATE","日付");
define("SHOW_DATE_0","設定しない");
define("SHOW_DATE_1","より古い");
define("SHOW_DATE_2","より新しい");
define("SHOW_RANK","ランク");
define("SHOW_FRANK","艦隊ランク");
define("SHOW_MEMBERS","メンバー");
define("SHOW_NOTRANKED","利用可能なデータはありません");
define("SHOW_NOTICERES","メモ");
define("SHOW_REPORTS","レポートのある惑星のみ表示");
define("SHOW_REPORTS_SHORT","レポート");
define("SHOW_NOTHING","該当するエントリは見つかりませんでした");
define("SHOW_ALLIANCE_STATUS","対外同盟情報");
define("SHOW_NO_STATUS","対外同盟情報はありません");
define("SHOW_NAP","不戦同盟");
define("SHOW_ALLIED","攻守協力同盟");
define("SHOW_WAR","敵対同盟");
define("SHOW_BOYCOTT","不干渉同盟");
define("SHOW_NEUTRAL","中立同盟");
define("SHOW_OWN","所属同盟");
define("SHOW_WING","下部同盟");
// obsolete with 5.0
define("SHOW_EXT_OPTIONS1","範囲，ランク，日付またはデブリフィールドに関するより詳細な検索オプションを表示．");
define("SHOW_EXT_OPTIONS2","コロニー，月，スパイレポート，メモ，プレーヤーステータスまたは対外同盟情報に関するより詳細な検索オプションを表示．");
define("SHOW_EXT_OPTIONS3","検索結果の並び替えに関するより詳細な検索オプションを表示．");
// new 5.0
define("SHOW_EXTENDED","高度な検索");
define("SHOW_MOON_SELECTION","月をもつ惑星");
define("SHOW_REPORT_SELECTION","レポートのある惑星");
define("SHOW_FILTER_BY","リストから除外");
define("SHOW_FILTER_NONE","無し");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Show players without score changes within the last few days");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","OGame Galaxytool - ステータスページ");
define("STATUS_DB_STATUS","データベースステータス");
define("STATUS_COLOR","カラー");
define("STATUS_AGE1","1日前のエントリ．");
define("STATUS_AGE2","2-4日前のエントリ．");
define("STATUS_AGE3","4-7日前のエントリ．");
define("STATUS_AGE4","1-2週間前のエントリ．");
define("STATUS_AGE5","2-4週間前のエントリ．");
define("STATUS_AGE6","1ヶ月以上前のエントリ！");
define("STATUS_AGE7","利用可能なエントリはありません．");
define("STATUS_ON","オン");
define("STYLES_COLOR1","カラー1");
define("STYLES_COLOR2","カラー2");
define("STYLES_COLOR3","カラー3");
define("STYLES_COLOR4","カラー4");
define("STYLES_COLOR5","カラー5");
define("STYLES_COLOR6","カラー6");
define("STYLES_COLOR7","カラー7");
// 4.8
define("STATUS_DB_LEGEND","凡例");
define("STATUS_GALAXY","銀河の概要");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","ユーザ管理");
define("USER_NAMES","ユーザ");
define("USER_ERROR","エラー");
define("USER_NEWUSER","新ユーザ");
define("USER_OPTIONS","オプション");
define("USER_USERNAME","ユーザ名");
define("USER_PASSWORD","パスワード");
define("USER_PASSWORD_CONFIRM","パスワード（確認用）");
define("USER_GALAXY","銀河");
define("USER_SEARCH","検索");
define("USER_INSERT","追加");
define("USER_DELETE","消去");
define("USER_DELETE_ENTRY","ユーザを消去しますか: ");
define("USER_STATUS","ユーザステータス");
define("USER_STYLES","レイアウト変更");
define("USER_SUBMIT","登録");
define("USER_RESET","リセット");
define("USER_YES","はい");
define("USER_NO","いいえ");
define("USER_STYLEPATH","styles.cssのパス");
define("USER_PROBES","スパイレポートを見る／登録する");
define("USER_EMAIL","Eメール");
define("USER_ERROR1","パスワードが間違っているか有効なEメールアドレスではありません．");
define("USER_ERROR2","無効なEメールアドレスです．");
define("USER_INGAME","ゲーム内のユーザ名");
define("USER_ALLYTAG","同盟タグ");
define("USER_ALLYHISTORY","過去の概要");
define("USER_DIPLOMATIC","外交関係を変更");
define("USER_STATSPAGE","ランキングのエントリ数");
define("USER_LINKS","リンク");
define("USER_LINKS2","フォーマット:<br>テキスト;url<br>テキスト2;url2<br>テキスト3;url3");
define("USER_EXPORT_TITLE","カラー情報をエクスポート（BBコード）");
define("USER_BB_COORDINATES","座標");
define("USER_BB_MOON","月");
define("USER_BB_DEBRIS","デブリフィールド");
define("USER_BB_ALLY","同盟名");
define("USER_BB_ALLYDETAILS","同盟の詳細");
define("USER_BB_PLAYERNAME","プレーヤー名");
define("USER_BB_BANNED","アカウント停止");
define("USER_BB_VACATION","休暇モード");
define("USER_BB_NOOB","初心者");
define("USER_BB_INACTIVE","7日間不在");
define("USER_BB_LONGINACTIVE","28日間不在");
// new with 4.7
define("USER_DELETION","削除");
define("USER_FLEETINFO",MENU_FLEET_MOVEMENTS);
define("USER_ACTIVITIES","プレイヤーの活動");
define("USER_MAINTENANCE","Galaxytoolのメンテナンス");
define("USER_MANAGEMENT",MENU_USEROPTIONS);
define("USER_DELETE_MY_COMBAT_REPORTS","自分のコンバットレポートを削除");
define("USER_DELETE_MY_MESSAGES","自分のメッセージを削除");
define("USER_DELETE_MY_FLEETMOVES","自分の艦隊動向を削除");
// 4.8
define("USER_DELETE_MY_COMBAT_REPORTS_LIMITED","自分のコンバットレポートの &1 日以上経過したものを削除");
define("USER_DELETE_MY_MESSAGES_LIMITED","自分のメッセージの &1 日以上経過したものを削除");
define("USER_TABLE_ENTRIES","各ページの検索結果の数");
// 5.0
define("USER_EXISTS","ユーザーはすでに存在しています");
define("USER_BB_OUTLAW","アウトロー");
define("USER_INVALID_URL","URL &1 が無効であると思われる - URLは無視されます");

/*********************************************************************
* galaxyview.php
*********************************************************************/
define("VIEW_TITLE","OGame Galaxytool - 銀河ビュー");
define("VIEW_NODATA","利用可能なデータはありません．");
define("VIEW_GALAXY","銀河");
define("VIEW_SYSTEM","システム");
define("VIEW_POSITION","位置");
define("VIEW_PLANET","惑星");
define("VIEW_MOON","月");
define("VIEW_TF","DF");
define("VIEW_PLAYER","プレーヤー");
define("VIEW_PLAYER_ADD","（ランク / ステータス）");
define("VIEW_ALLY","同盟");
define("VIEW_ALLY_ADD","（ランク / メンバー数）");
define("VIEW_METAL","M");
define("VIEW_CRYSTAL","C");
define("VIEW_COLONISED","植民地化されたスロット数");
define("VIEW_UKMOONSIZE","不明");
define("VIEW_BACK","戻る");
define("VIEW_NOTICE","メモ");
define("VIEW_REPORTS","レポート");
define("VIEW_MOONPHALANX","以下に挙げる月はこのシステムをスキャン可能です");
define("VIEW_NOMOONS","月は一つも見つかりませんでした");
define("VIEW_IRAKS","以下に挙げる惑星はこのシステムまで星間ミサイルが到達可能です");
define("VIEW_NOIRAKS","星間ミサイルは一つも見つかりませんでした");
// 4.0
define("VIEW_MOON_DESTROY_CHANCE","月を破壊できる確率");
define("VIEW_CHANCE_WITH_ONE","デススター一機での確率");
define("VIEW_CHANCE_WITH_N","次の確率");
define("VIEW_DEATH_STARS","デススター");
define("VIEW_DS_DESTROY_CHANCE","デススターが負ける確率");
define("VIEW_TOP","トップ");
// new 4.3.5
define("VIEW_GO","go");
// new 5.0
define("VIEW_DIAMETER","直径");

/*********************************************************************
* change_password.php
**********************************************************************/
define("PW_TITLE","OGame Galaxytool - パスワード変更");
define("OLD_PASSWORD","古いパスワード");
define("NEW_PASSWORD","新しいパスワード");
define("CONFIRM_NEW_PASSWORD","新しいパスワード（確認用）");
define("PW_MISMATCH","パスワードが一致しません！");
define("PW_ERROR","古いパスワードが正しくありません！");
define("UPDATE_DONE","パスワードは変更されました．");
// new 4.2
define("TIMEZONE_OFFSET","サーバとの時差");
// new 4.3
define("DELETE_ACCOUNT","Galaxytoolのアカウントを削除");
define("DELETE_ACCOUNT_SAFETY_REQUEST","本当にアカウントを削除しますか？");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","承認");
define("CH_PASSWD_ADMIN","管理者");
// new 4.7
define("TIMEZONE_OGAME_OFFSET","OGameサーバとの時差");
// new 4.8
define("CH_PASSWD_USER_LANGUAGE","ログオン後にこの言語に変更");
define("CH_PASSWD_USER_LANGUAGE_NO_CHANGE","変更なし");
define("CH_PASSWD_EXPAND","拡張版");
define("CH_PASSWD_COLLAPSE","簡易版");
define("CH_PASSWD_HIDDEN","非表示");
define("CH_PASSWD_GETTING_STARTED","ログオン後にスタートアップ情報を表示");
define("CH_PASSWD_PLUGIN","ログオン後にプラグイン情報を表示");

/*********************************************************************
* notices.php
**********************************************************************/
define("NOTICE_TITLE","OGame Galaxytool - メモ");
define("NOTICE_HEADER","メモの編集");
define("NOTICE_HEADER2","自分のメモを編集");
define("NOTICE_PUBLIC","公開しますか？");
define("NOTICE_YES","はい");
define("NOTICE_NO","いいえ");
define("NOTICE_TEXT","メモ");
define("NOTICE_SAVE","保存");
define("NOTICE_DELETED","エントリは消去されました");
define("NOTICE_SAVED","エントリは保存されました．");
define("NOTICE_RESULTS","全ての結果");
define("NOTICE_USER","ユーザ");
define("NOTICE_DATE","日付");
define("NOTICE_EDIT","編集");
define("NOTICE_DELETE","消去");
define("NOTICE_NEW","自分のエントリを作成");
define("NOTICE_NOTPUBLIC","メモは非公開．");
define("NOTICE_ALL","全て");
define("NOTICE_NONE",SHOW_FILTER_NONE);
define("NOTICE_SEARCH","メモを検索");
define("NOTICE_SEARCH_SHORT","検索");
define("NOTICE_HITS","検索結果");
define("NOTICE_SHOWRESULTS","件（ページ当たり）");
define("NOTICE_OF","/");
define("NOTICE_NOTHING","該当するエントリは見つかりませんでした");
// 4.0
define("NOTICE_CHARS","キャラクタ");
define("NOTICE_PLAYERNAME","プレーヤー");
define("NOTICE_SHOWALL","全てのメモを表示");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","OGame Galaxytool - スパイレポート");
define("REPORTS_RESOURCES","資源");
define("REPORTS_FLEET","艦隊");
define("REPORTS_DEFENCE","防衛");
define("REPORTS_BUILDINGS","建造物");
define("REPORTS_TECHNOLOGY","リサーチ");
define("REPORTS_MOON","月");
define("REPORTS_SEARCH","スパイレポートを検索");
define("REPORTS_SEARCH_SHORT","検索");
define("REPORTS_HITS","検索結果");
define("REPORTS_NOTHING","該当するエントリは見つかりませんでした");
define("REPORTS_ADDRESS","座標");
define("REPORTS_CURRENTNESS","最新");
define("REPORTS_PLAYERNAME","プレーヤー名");
define("REPORTS_ALLY","同盟");
define("REPORTS_VIEW","レポートを見る");
define("REPORTS_SEARCH_IN","検索: 銀河");
define("REPORTS_FROM_SYSTEM","システム");
define("REPORTS_TO","-");
define("REPORTS_DELETE","消去");
define("REPORTS_DELETED","エントリは消去されました");
define("REPORTS_RESULTS","件（ページ当たり）");
define("REPORTS_OF","/");
define("REPORTS_DATE","日付");
define("REPORTS_DATE_0","設定しない");
define("REPORTS_DATE_1","より古い");
define("REPORTS_DATE_2","より新しい");
define("REPORTS_NOTICES","メモ");
define("REPORTS_AT_LEAST_RESOURCES","資源（最少）");
define("REPORTS_SEARCH_EXTENDED","詳細検索");
define("REPORTS_FLEET_RESIS","艦隊- スコア");
define("REPORTS_DEFENCE_RESIS","防衛- スコア");
define("REPORTS_ALL_RESIS","スコア合計");
define("REPORTS_TECHS","武/シ/ア");
define("REPORTS_UNKNOWN_ENTRIES","不明なエントリ");
define("REPORTS_PARTLY_INSERTED","一部のみ追加");
define("REPORTS_FOR_ALL_RES","全資源に対する");
define("REPORTS_FOR_TF","デブリフィールドに対する");
define("REPORTS_KT","小型輸送機");
define("REPORTS_GT","大型輸送機");
define("REPORTS_SS","バトルシップ");
define("REPORTS_REC","残骸回収船");
define("REPORTS_RAIDABLE","攻撃可能な惑星のみ表示");
define("REPORTS_ALL_RESOURCES","全ての資源");
// 4.0
define("REPORTS_STUFF","その他");
define("REPORTS_SPEEDSIM","Speedsim を使ってシミュレート");
define("REPORTS_DRAGOSIM","Dragosim を使ってシミュレート");
define("REPORTS_STATUS","ステータス");
define("REPORTS_ERROR","エラー発生");
// 4.2
define("REPORTS_OWN_REPORTS","自分のレポートのみ");
// 4.3.3
define("REPORTS_UPLOAD_BY","レポートアップロード");
// 4.4
define("REPORTS_DEPTH","レポートの深度");
define("REPORTS_FLEET_SCORE","艦隊ポイント");
define("REPORTS_DEFENCE_SCORE","防衛ポイント");
// 5.0
define("REPORTS_HOURS","時間");
define("REPORTS_MAX_RESULTS_HIT","クエリが &1 以上のヒットを返しました 最初の &1 の結果のみ表示 以下の結果を得るために検索要求を調整してください");
define("REPORTS_OSIMULATE","OSimulateでシミュレート");
define("REPORTS_SHOW_ONLY","絞込み対象");
define("REPORTS_SHOW_PLANETS","惑星");
define("REPORTS_SHOW_MOONS","月");
define("REPORTS_OWNER","レポート所有者");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","OGame Galaxytool - ランキング");
define("STATS_TBLHEAD","ランキング");
define("STATS_RANK","ランク");
define("STATS_PLAYERNAME","プレーヤー名");
define("STATS_ALLYNAME","同盟タグ");
define("STATS_SCORE","ポイント");
define("STATS_FLEET","艦隊");
define("STATS_RESEARCH","リサーチ");
define("STATS_MEMBERS","メンバー");
define("STATS_STATUS","ステータス");
define("STATS_NOTHING","ステータスはありません");
define("STATS_NAP","不戦同盟");
define("STATS_ALLIED","攻守協力同盟");
define("STATS_WAR","敵対同盟");
define("STATS_BOYCOTT","不干渉同盟");
define("STATS_NEUTRAL","中立同盟");
define("STATS_OWN","所属同盟");
define("STATS_WING","下部同盟");
define("STATS_UPDATE","エントリから");
define("STATS_PLAYERSTATS","プレーヤーランキング");
define("STATS_ALLYSTATS","同盟ランキング");
// 4.0
define("STATS_DELETE","このエントリを消去しますか？");
define("STATS_CONFIRM_DELETE","このエントリを本当に消去しますか？");
define("STATS_CHANGE_PLAYER_STATUS","プレーヤーステータス");
define("STATS_CHANGE_ALLIANCE_STATUS","同盟ステータス");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","この同盟の全てのメンバに選択したステータスを設定します．以前に設定されたステータスは上書きされます．プレーヤーのステータスはあとで変更可能です．");
define("STATS_UNKNOWN","その他");
define("STATS_DETAILS","詳細");
// 4.4
define("STATS_PLAYERSTATUS",SHOW_PLAYER_STATUS);
define("STATS_IGNORE_STATUS",SHOW_PLAYER_STATUS1);
define("STATS_ACTIVE","アクティブ");
define("STATS_INACTIVE",USER_BB_INACTIVE);
define("STATS_BANNED",USER_BB_BANNED);
define("STATS_VACATION",USER_BB_VACATION);
define("STATS_NOOB",USER_BB_NOOB);
// 4.8
define("STATS_YES",SHOW_YES); // reuse SHOW definitions if applicable
define("STATS_NO",SHOW_NO);
define("STATS_SEARCH",USER_SEARCH);
define("STATS_SHOW_GRAPH","スコアの分布詳細を表示");
define("STATS_LONG_INACTIVE",USER_BB_LONGINACTIVE);
// 4.9
define("STATS_STANDARD","ポイント");
define("STATS_MILITARY","ミリタリーポイント ");
define("STATS_ECONOMY","エコノミーポイント");
define("STATS_HONOUR","名誉ポイント");
define("STATS_MILITARY_BUILD","総合ミリタリーポイント");
define("STATS_MILITARY_DESTROYED","破壊した分のミリタリーポイント ");
define("STATS_MILITARY_LOST","喪失した分のミリタリーポイント ");

/*********************************************************************
* register.php
**********************************************************************/
define("REGISTER_REGISTRATE","登録");
define("REGISTER_LOGINNAME","ログイン名");
define("REGISTER_PASSWORD","パスワード");
define("REGISTER_PASSWORD_CONFIRM","パスワード（確認用）");
define("REGISTER_EMAIL","Eメール");
define("REGISTER_INGAME","ゲーム内のユーザ名");
define("REGISTER_ALLYTAG","同盟タグ");
define("REGISTER_EMAILVERIFICATION","Eメールアドレス確認");
define("REGISTER_EMAILTEXT","以下のリンクをクリックし，galaxytoolへの登録を確認して下さい．");
define("REGISTER_ERROR1","そのログイン名は既に使われています．");
define("REGISTER_ERROR2","Eメールの送付中にエラーが発生しました．管理者に連絡して下さい．");
define("REGISTER_ERROR3","データベースにデータを送ろうとする最中にエラーが発生しました！");
define("REGISTER_INFO1","アカウントが生成されました．");
define("REGISTER_INFO2","登録確認のため，Eメール中のリンクをクリックして下さい．");
define("REGISTER_INFO3","アカウント確認．管理者は今すぐ有効化して下さい．");
define("REGISTER_BUTTON","メインページに戻る");
define("REGISTER_NEW_SUBJECT","galaxytoolに新ユーザが登録されました");
define("REGISTER_NEW_MAILTEXT","新ユーザが自分自身で登録しました．");
// new 4.2
define("REGISTER_BACK","最初のページに戻る");
// new 4.3.5
define("REGISTER_MISSING_FIELDS","全ての項目を入力してください.");
// new 4.8
define("REGISTER_ERROR4","電子メールアドレスが有効ではありません.");
define("REGISTER_ERROR5","パスワードが一致しません.");
define("REGISTER_PWS","パスワードの複雑性");
define("REGISTER_PWS0","非常に弱い");
define("REGISTER_PWS1","弱い");
define("REGISTER_PWS2","良い");
define("REGISTER_PWS3","強い");
define("REGISTER_PWS4","非常に強い");
// new 5.0
define("REGISTER_EMAIL_USED","メールアドレスは既に使用されています");
/*********************************************************************
* lost_password.php
**********************************************************************/
define("LOSTPW_TITLE","パスワード忘れ");
define("LOSTPW_INFO2","新しいパスワードを生成し，Eメールアドレスに送付しました．");
define("LOSTPW_BUTTON1","新パスワード発行");
define("LOSTPW_BUTTON2","メインページに戻る");
define("LOSTPW_LOGINNAME","ログイン名");
define("LOSTPW_EMAIL","Eメール");
define("LOSTPW_ERROR1","データベースにデータを送ろうとする最中にエラーが発生しました！");
define("LOSTPW_ERROR2","条件に合うエントリは見つかりませんでした！");
define("LOSTPW_ERROR3","Eメールの送付中にエラーが発生しました．管理者に連絡して下さい．");
define("LOSTPW_EMAIL_SUBJECT","新しいパスワード");
define("LOSTPW_EMAIL_TEXT1","Galaxytoolの新しいアカウント");
define("LOSTPW_EMAIL_TEXT2","ユーザ名");
define("LOSTPW_EMAIL_TEXT3","パスワード");
// new 5.0
define("LOSTPW_INFO1","あなたのパスワードの再設定リクエストを確認するには電子メールを受信してください.");
define("LOSTPW_CONFIRM_RESET_SUBJECT","パスワードをお忘れですか?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","こんにちわ,\n\nあなたはGalaxytoolのパスワードのリセットをリクエストされた. 新しいパスワードを生成するには次のリンクをクリックしてください:");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","OGame Galaxytool - ユーザ情報");
define("USERINFO_NAMES","全ユーザ");
define("USERINFO_DETAIL","詳細な情報");
define("USERINFO_ERROR1","そのIDのユーザは存在しません！");
define("USERINFO_USERNAME","ログイン名");
define("USERINFO_INGAME","ゲーム内のユーザ名");
define("USERINFO_EMAIL","Eメール");
define("USERINFO_ALLYTAG","同盟");
define("USERINFO_STYLEPATH","スキン");
define("USERINFO_STATUS","ステータス");
define("USERINFO_ACTIVATE","プレーヤーを有効化");
define("USERINFO_LOGINS","ログイン者数");
define("USERINFO_LASTLOGIN","最後のログイン");
define("USERINFO_DATA","入力されたシステムの情報");
define("USERINFO_NODATA","そのユーザはどのシステムにも入っていません！");
define("USERINFO_GALAXY","銀河");
define("USERINFO_SYSTEMS","システム数");
define("USERINFO_IP","IPアドレス");
define("USERINFO_LOGINTIME","ログイン");
define("USERINFO_NOLOGIN","そのプレーヤーは一度もログインしていません");
define("USERINFO_LAST_GALAXYUPDATE","最近の銀河ビューを更新");
define("USERINFO_LAST_PUBLIC_NOTICE","最近の公開メモ");
define("USERINFO_LAST_PRIVATE_NOTICE","最近の非公開メモ");
define("USERINFO_NUMBEROF_PUBLIC_NOTICE","公開メモ数");
define("USERINFO_NUMBEROF_PRIVATE_NOTICE","非公開メモ数");
define("USERINFO_ACTIVATED","有効アカウント数");
define("USERINFO_ACTIVATIONTEXT","Galaxytoolの管理者があなたのアカウントを有効化しました．\n\nGalaxytoolで楽しんでね！");
// new 4.8
define("USERINFO_LAST_SUBMIT","最後のデータを挿入");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","OGame Galaxytool - 同盟の歴史");
define("ALLYHISTORY_TBLHEAD","過去の概要");
define("ALLYHISTORY_PLAYERNAME","プレーヤー名");
define("ALLYHISTORY_ALLYNAME","同盟");
define("ALLYHISTORY_LASTMONTH","先月"); // changed at 4.0
define("ALLYHISTORY_ALL_DATA","全ての利用可能な情報"); // new 4.0
define("ALLYHISTORY_SHOW","ランキングを表示");
define("ALLYHISTORY_TIMESPAN","タイムスパン");
define("ALLYHISTORY_PROGESS","進捗");
define("ALLYHISTORY_SCORE","ポイント");
define("ALLYHISTORY_FSCORE","艦隊ポイント"); // new 4.0
define("ALLYHISTORY_RSCORE","リサーチポイント"); // new 4.0
define("ALLYHISTORY_MEMBER","メンバ"); // new 4.0
define("ALLYHISTORY_NOTHING","該当するエントリは見つかりませんでした");
define("ALLYHISTORY_DETAILS","詳細");
define("ALLYHISTORY_SHOW_ADDRESS","座標");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","プレーヤー情報");
define("DETAILEDINFO_ALLYINFO_TITLE","同盟情報");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","プレーヤー詳細情報");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","同盟詳細情報");
define("DETAILEDINFO_NO_ALLIANCE","なし");
define("DETAILEDINFO_SCORE","ポイント");
define("DETAILEDINFO_FLEET","艦隊ポイント");
define("DETAILEDINFO_RESEARCH","リサーチポイント");
define("DETAILEDINFO_RANK","ランク");
define("DETAILEDINFO_POINTS","ポイント");
define("DETAILEDINFO_KNOWN_PLANETS","判明しているコロニー");
define("DETAILEDINFO_MOONS","判明している月");
define("DETAILEDINFO_PHALANX_AREA","センサー軍団スキャンエリア");
define("DETAILEDINFO_NO_PHALANX_AREA","センサー軍団は一つも見つかりませんでした");
define("DETAILEDINFO_NOTICES","メモ");
define("DETAILEDINFO_NO_NOTICES","メモは一つも見つかりませんでした");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","前の同盟");
define("DETAILEDINFO_RESOURCES_PER_HOUR","1時間の生産量");
define("DETAILEDINFO_RESOURCES_PER_DAY","1日の生産量");
define("DETAILEDINFO_RESOURCES_PER_WEEK","1週間の生産量");
define("DETAILEDINFO_RESOURCES_PER_MONTH","1ヶ月(30日)の生産量");
define("DETAILEDINFO_METAL","メタル");
define("DETAILEDINFO_CRYSTAL","クリスタル");
define("DETAILEDINFO_DEUTERIUM","デューテリウム");
define("DETAILEDINFO_UNKNOWN","不明");
define("DETAILEDINFO_SCORE_DISTRIBUTION","ポイント分配");
// new 4.2
define("DETAILEDINFO_GENERAL","詳細");
define("DETAILEDINFO_MEMBERS","メンバ");
define("DETAILEDINFO_GRAPHS","グラフ");
define("DETAILEDINFO_RESOURCES","資源");
define("DETAILEDINFO_FLEET_TAB","艦隊");
define("DETAILEDINFO_TECH","リサーチ");
define("DETAILEDINFO_FLEET_DETAIL","合計値 / 利用可能な全てのレポートにおける（プレーヤーの平均値）");
define("DETAILEDINFO_TECH_DETAIL","全ての利用可能なプレーヤー情報の平均");
// new 4.3
define("DETAILEDINFO_PLANET_TAB",REPORTS_SHOW_PLANETS);
define("DETAILEDINFO_MOON_TAB",REPORTS_SHOW_MOONS);
// 4.7
define("DETAILEDINFO_ACTIVITIES","アクティビティ");
define("DETAILEDINFO_NODATA",VIEW_NODATA); // reuse existing translations
define("DETAILEDINFO_ACTIVITY_DESCRIPTION","&1 のアクティビティを表示　集計範囲:");
define("DETAILEDINFO_GALAXYVIEWS","銀河ビュー");
define("DETAILEDINFO_SCANS","スパイ調査");
define("DETAILEDINFO_MESSAGES","プレイヤーメッセージ");
define("DETAILEDINFO_COMBATS","コンバットレポート");
define("DETAILEDINFO_ALLYPAGE","同盟一般情報");
define("DETAILEDINFO_MANUAL","手動挿入");
define("DETAILEDINFO_START","開始日");
define("DETAILEDINFO_TO","から");
define("DETAILEDINFO_TODAY","本日");
define("DETAILEDINFO_DATA_RESTRICTION","まで");
define("DETAILEDINFO_WEEKDAY_WEEKEND","週末");
define("DETAILEDINFO_WEEKDAY_WORKINGDAY","平日");
define("DETAILEDINFO_WEEKDAY_MONDAY","月曜日");
define("DETAILEDINFO_WEEKDAY_TUESDAY","火曜日");
define("DETAILEDINFO_WEEKDAY_WEDNESDAY","水曜日");
define("DETAILEDINFO_WEEKDAY_THURSDAY","木曜日");
define("DETAILEDINFO_WEEKDAY_FRIDAY","金曜日");
define("DETAILEDINFO_WEEKDAY_SATURDAY","土曜日");
define("DETAILEDINFO_WEEKDAY_SUNDAY","日曜日");
define("DETAILEDINFO_WEEKDAY_SHORTLENGTH",3); // number of characters to shorten week day
define("DETAILEDINFO_PLAYER_CURRENTLY_ACTIVE","プレーヤーが現在アクティブです");
define("DETAILEDINFO_PLAYER_MESSAGES","利用可能なプレイヤーのメッセージ");
define("DETAILEDINFO_SHOW","表示");
define("DETAILEDINFO_NONE","使用不可能");
define("DETAILEDINFO_ENTER_MANUALLY","このプレーヤーのアクティビティを入力してください");
define("DETAILEDINFO_PLAYER_SEEN_ON","プレーヤーはオンラインです");
define("DETAILEDINFO_INSERT","挿入");
define("DETAILEDINFO_OGAME_SERVERTIMES","ご注意：すべての日付と時刻は、OGame Serverの時間（GMT+1）を参照してください!");
define("DETAILEDINFO_DAY_VIEW","24時間表示");
define("DETAILEDINFO_WEEK_VIEW","週単位表示");
// new 4.8
define("DETAILEDINFO_HOME_PLANET","ホームワールド");
// new 5.0
define("DETAILEDINFO_PLANETNAME","名前"); // also used for moons!
define("DETAILEDINFO_DEFENCE_SCORE","防衛スコア");
define("DETAILEDINFO_DEFENCE_SCORE_TOOLTIP","防衛スコア = 艦隊 - スコア + リサーチ + エコノミー.<br/>すべてのこれらの統計は、意味のある結果を得るために最新の状態になければなりません!");
define("DETAILEDINFO_SCORE_PER_SHIP","スコア/艦隊");
define("DETAILEDINFO_SHIPS","艦隊の数");
define("DETAILEDINFO_DATE_IN_FUTURE","過去に存在しない時間を維持しない");

// new 4.2
/*********************************************************************
* administration.php
**********************************************************************/
define("ADMIN_TITLE","Galaxytoolの管理");
define("ADMIN_DISCLAMER","注意: これらのスクリプトは全て自己責任で動かして下さい！大半のスクリプトはデータの消去を行ないます．");
define("ADMIN_INCONSISTENCIES","データベース上に不整合が発生");
define("ADMIN_PLANETS","スロット0または16以上に惑星が存在");
define("ADMIN_GALAXIES","&1よりも大きい銀河を削除");
define("ADMIN_PLAYERS","OGameのプレーヤーIDを持たないプレーヤーを削除 - これはプレーヤーエントリの重複を引き起こします");
define("ADMIN_REPORTS","既に惑星が存在しない座標のスパイレポートを削除");
define("ADMIN_MISC","その他");
define("ADMIN_RESET","Galaxytoolをリセット（ユーザおよびIPテーブル以外は削除されます）");
define("ADMIN_OLD_PLAYERS","&1日よりも古いプレーヤーのエントリを削除");
define("ADMIN_OLD_REPORTS","&1日よりも古いスパイレポートを削除");
define("ADMIN_LOADING","ページがロードされるまでこのウィンドウを閉じないで下さい．");
define("ADMIN_STATUS","リクエストステータス");
define("ADMIN_SELECTION","最低限一つのエントリを選択して下さい");
define("ADMIN_SAFETY","本当にこれらのスクリプトを動かしますか？");
define("ADMIN_DONE","完了");
define("ADMIN_NOTBD","何も行なわれません");
// new 4.3
define("ADMIN_OLD_GALAXIES","&1日よりも古い銀河ビューを削除");
define("ADMIN_UNUSED_PLAYERS","一つも銀河ビューを生成しないプレーヤーを削除");
// new 4.7
define("ADMIN_OLD_ACTIVITIES","&1 日よりも古いプレーヤーのアクティビティを削除");
// new 4.8
define("ADMIN_OLD_COMBATS","&1 日よりも古いコンバットレポートを削除");
define("ADMIN_OLD_INGAME_MSG","&1 日よりも古いゲーム内メッセージを削除");
// new 5.0
define("ADMIN_OGAME_API","GalaxytoolにOGameから公開データをロードします");
define("ADMIN_OGAME_ALL_DATA",ALLYHISTORY_ALL_DATA);
define("ADMIN_OGAME_GALAXY_DATA",MENU_GALAXYVIEW);
define("ADMIN_OGAME_STATISTICS_DATA",MENU_STATISTICS);

// new 4.3.5
/*********************************************************************
* errorpage.php
**********************************************************************/
define("ERRORPAGE_PAGEFORWARD","自動的にジャンプできなければ，ここをクリックして下さい．");
define("ERRORPAGE_PERMISSION_DENIED","このページに入る権限がありません。ここをクリックして戻ってください。");

// new 4.7
/*********************************************************************
* fleet_movements.php
**********************************************************************/
define("FLEETS_TITLE","OGame Galaxytool - 艦隊動向");
define("FLEETS_ACTUAL_FLEETS","現在の艦隊動向");
define("FLEETS_YES",SHOW_YES);
define("FLEETS_NO",SHOW_NO);
define("FLEETS_DETAILS","詳細");
define("FLEETS_MISSION_EXPEDITION","探索");
define("FLEETS_MISSION_COLONIZATION","植民地化");
define("FLEETS_MISSION_RECYCLE","回収");
define("FLEETS_MISSION_TRANSPORT","輸送");
define("FLEETS_MISSION_DEPLOYMENT","配備");
define("FLEETS_MISSION_ESPIONAGE","スパイ活動");
define("FLEETS_MISSION_ACS_DEFEND","ACS防御");
define("FLEETS_MISSION_ATTACK","攻撃");
define("FLEETS_MISSION_ACS_ATTACK","ACS攻撃");
define("FLEETS_MISSION_MOON_DESTRUCTION","月破壊");
define("FLEETS_MISSION_MISSILE_ATTACK","ミサイル攻撃");
define("FLEETS_NO_DATA","該当するデータは見つかりませんでした.");
// new 5.0
define("FLEETS_FLEET","艦隊");
define("FLEETS_ALL_FLEETS","すべての艦隊動向を表示");

/*********************************************************************
* parser_combat_reports.inc.php
**********************************************************************/
define("COMBAT_REPORT_OUDATED_GALAXYVIEW","あなたの銀河データは古いです. 戦闘の起点と目標は、最初の座標をアクセスしてください!");

/*********************************************************************
* messages.php
**********************************************************************/
define("MESSAGES_TITLE","OGame Galaxytool - OGameメッセージ");
define("MESSAGES_PLAYERNAME","プレーヤーの名前");
define("MESSAGES_SUBJECT","件名");
define("MESSAGES_DATE","日付");
define("MESSAGES_FILTER","フィルタ");
define("MESSAGES_DELETE","メッセージを削除");
define("MESSAGES_PUBLISH_DETAIL","そのプレイヤーの注意事項を追加して、メッセージを公開する.");
define("MESSAGES_PUBLISH_HEADER","&sender は、&date に &recipient へメッセージを送信します：\n\n &message "); // &sender, &recipient, &date, &message replaced at runtime
define("MESSAGES_PLAYER_FILTER","プレイヤーのためのメッセージ:");
// new 5.0
define("MESSAGES_CONTENT","コンテンツ");

/*********************************************************************
* combat_reports.php
**********************************************************************/
define("COMBATS_TITLE","OGame Galaxytool - コンバットレポート");
define("COMBATS_ATTACKER","攻撃側");
define("COMBATS_DEFENDER","防御側");
define("COMBATS_DATE","日付");
define("COMBATS_OWNER","所有者");
define("COMBATS_WINNER","勝者");
define("COMBATS_COMBATREPORT","コンバットレポート");
define("COMBATS_COMBAT_AT","戦闘で対戦しました");
define("COMBATS_LOST_UNITS","消失ユニット");
define("COMBATS_LOOT","略奪");
define("COMBATS_DEBRIS","残骸フィールド");
define("COMBATS_AND","と");
define("COMBATS_PUBLISH","このレポートを公開する");
define("COMBATS_UNPUBLISH","この報告書の共有解除（再びそれは非公開になります）");
define("COMBATS_DELETE","レポートの削除");
define("COMBATS_CHECK_ALL","すべて選択");
define("COMBATS_UNCHECK_ALL","すべて解除");
define("COMBATS_WITH_SELECTED","選択された状態");
define("COMBATS_PUBLIC_REPORTS","公開レポート");
define("COMBATS_YES",SHOW_YES); // no need for translation!
define("COMBATS_NO",SHOW_NO); // no need for translation!
define("COMBATS_SEARCH_OPTIONS","検索オプション");
define("COMBATS_SEARCH","実行");
define("COMBATS_RESET","リセット");
// 4.8
define("COMBATS_COORDINATES",USER_BB_COORDINATES);
define("COMBATS_INVALID_GALAXY_ENTERED","無効な銀河が入力されました");
define("COMBATS_INVALID_SYSTEM_ENTERED","無効なシステムが入力されました");
define("COMBATS_INVALID_PLANET_ENTERED","無効な惑星が入力されました");
define("COMBATS_GALAXY_FROM_TO","銀河");
define("COMBATS_SYSTEM_FROM_TO","システム");
define("COMBATS_PLANET_FROM_TO","惑星");
define("COMBATS_APPLY",GENERAL_APPLY);
define("COMBATS_COMBAT_SUMMARY","コンバットレポートの要約");
define("COMBATS_DOWNLOAD_CSV","CSVファイルとしてダウンロード");

/*********************************************************************
* report_archive.php
**********************************************************************/
define("REPORT_ARCHIVE_TITLE","レポートアーカイブ");
define("REPORT_ARCHIVE_COORDINATES","座標");
define("REPORT_ARCHIVE_SCANTIME","時間をスキャン");
define("REPORT_ARCHIVE_DELETE","これらのエントリを削除");
define("REPORT_ARCHIVE_CONFIRM_DELETE","あなたは本当にこれらのエントリを削除しますか?");
define("REPORT_ARCHIVE_GALAXY","銀河");
define("REPORT_ARCHIVE_SYSTEM","システム");
define("REPORT_ARCHIVE_PLANET","惑星");
define("REPORT_ARCHIVE_MOON","月");
define("REPORT_ARCHIVE_DETAILS","詳細");
define("REPORT_ARCHIVE_RESOURCES",DETAILEDINFO_RESOURCES);
define("REPORT_ARCHIVE_HEADER_RESOURCES",REPORTS_RESOURCES);
define("REPORT_ARCHIVE_DETAILS_FOR","&1 [&2] (&3) に対するレポートアーカイブ"); // &1 = planetname; &2 = coordinates; &3 = playername
define("REPORT_ARCHIVE_FLEET_CARGO","艦隊の貨物輸送能力");
define("REPORT_ARCHIVE_IRAK_RANGE","星間ミサイルの範囲");
define("REPORT_ARCHIVE_CHART_TYPE","グラフの種類");

/*********************************************************************
* install.php
**********************************************************************/
define("INSTALL_TITLE", "インストールを行うGalaxytoolのバージョン");
define("INSTALL_PROGRESS", "全体の進行状況");
define("INSTALL_STEP", "手順");
define("INSTALL_CONTINUE", "続ける");
define("INSTALL_VALIDATE", "検証");
define("INSTALL_STEP1", "ようこそ");
define("INSTALL_STEP2", "書き込み可能チェック");
define("INSTALL_STEP3", "データベースの設定");
define("INSTALL_STEP4", "OGameの設定");
define("INSTALL_STEP5", "Galaxytoolの設定");
define("INSTALL_STEP6", "管理者パスワード");
define("INSTALL_STEP7", "Galaxytoolをインストールします");
define("INSTALL_STEP8", "インストール完了"); // check writable; delete install and update.php and redirect to index.php
define("INSTALL_FILE_DELETE_CHECK","あなたのウェブサーバからinstall.phpとupdate.phpを削除してください");

define("INSTALL_STEP1_PHP_FAILED", "あなたのPHPバージョン &1は、このGalaxytoolバージョンで動作しません");
define("INSTALL_STEP1_FOPEN_FAILED", "あなたのPHPのバージョンは、FOPEN() コマンドを使用してWebページを開くことはできません これはOGame APIには必須となります");
define("INSTALL_STEP1_WELCOME", "Galaxytoolのインストールウィザードへようこそ あなたにはGalaxytoolのインストールに関する案内が提供されます");

define("INSTALL_STEP2_DESCRIPTION","あなたのconfig.phpとattributes.phpファイルは書き込み権限が有効になっていることを確認してください");
define("INSTALL_STEP2_DESCRIPTION2","あなたがわからない場合は、実現する方法をここで見てご確認ください: &1");
define("INSTALL_STEP2_FILE_NOT_WRITEABLE", "ファイルが書込み不可能");

define("INSTALL_STEP3_SERVER", "データベースサーバ");
define("INSTALL_STEP3_USERNAME", L_USERNAME);
define("INSTALL_STEP3_PASSWORD", L_PASSWORD);
define("INSTALL_STEP3_DBNAME", "データベース名");
define("INSTALL_STEP3_PREFIX", "テーブル名 prefix");
define("INSTALL_STEP3_ENTER_PREFIX", "例 mytool_");

define("INSTALL_STEP3_ENTER_SERVER", "サーバのアドレスを入力します システム管理者を必要に応じてお問い合わせください 通常正しい値はlocalhostです");
define("INSTALL_STEP3_ENTER_USERNAME", "データベースアクセス用のユーザ名を入力してください");
define("INSTALL_STEP3_ENTER_PASSWORD", "データベースアクセス用のパスワードを入力してください");
define("INSTALL_STEP3_ENTER_DBNAME", "インストールに使用されなければならないデータベース名(存在しなければなりません)を入力してください");
define("INSTALL_STEP3_CONNECT_FAILED", "データベースサーバーへの接続を確立できませんでした");
define("INSTALL_STEP3_DB_FAILED", "データベース &1 がみつかりません");
define("INSTALL_STEP3_MYSQL_VERSION_FAILED", "MySQL バージョン &1 は、このGalaxytoolバージョンで動作しません");

define("INSTALL_STEP4_URL","OGameのURL");
define("OGAME_URL_DETAILS","あなたがOGameにログオンしているときに表示される任意のURLを入力してください そのURLに基づいてツールがGalaxytoolbarなしにGalaxytoolにデータを埋めるために使用することができますOGame APIのアドレスを取得します このAPIはOGameのバージョン4.1で導入されました");
define("INSTALL_STEP4_UNIVERSE","OGameの宇宙");
define("INSTALL_STEP4_DEF_TO_DEBRIS","防衛のデブリ化");
define("INSTALL_STEP4_DEBRIS_RATE","デブリレート");
define("INSTALL_STEP4_SPEED_RATE","速度レート");
define("INSTALL_STEP4_ENTER_UNIVERSE","あなたのOGameの宇宙の名前または番号を(大文字小文字を区別)を入力します");
define("INSTALL_STEP4_UNIVERSE_MISSING","あなたの宇宙を定義する必要があります");
define("INSTALL_STEP4_ENTER_URL","あなたのOGame宇宙アドレスを入力してください");
define("INSTALL_STEP4_URL_MISSING","あなたのOGameアドレスを定義する必要があります");
define("INSTALL_STEP4_URL_CHECK_FAILED","&1 でOGame APIを見つけることができませんでした");
// 5.1
define("INSTALL_STEP4_GETSETTINGS","Fetch settings");

define("INSTALL_STEP5_TOOLNAME","Galaxytool名");
define("INSTALL_STEP5_ENTER_TOOLNAME","これはあなたのGalaxytoolを識別するためのログオンページで表示される名前です");
define("INSTALL_STEP5_LANGUAGE","既定の言語");
define("INSTALL_STEP5_EMAIL_TO","Emailの送信先");
define("INSTALL_STEP5_ENTER_EMAIL_TO","あなたが登録に関する通知を受信したいメールアドレスを入力します");
define("INSTALL_STEP5_EMAIL_FROM","Emailの送信元");
define("INSTALL_STEP5_ENTER_EMAIL_FROM","このメールアドレスはGalaxytoolから送信されるすべてのメールに返信として表示されます");
define("INSTALL_STEP5_USE_PHPMAILER","PHPMailerを使用する");
define("INSTALL_STEP5_MAXSHOUTS","シャウトボックスの最大エントリ数");
define("INSTALL_STEP5_ENTER_USE_PHPMAILER","サーバは、デフォルトで電子メールを送信するサポートされていない場合はPHPMailerを使用します");
define("INSTALL_PHPMAILER_HOST","SMPTホスト");
define("INSTALL_PHPMAILER_HOST_EXAMPLE","例 smtp.provider.com");
define("INSTALL_PHPMAILER_USER","SMPTユーザー名");
define("INSTALL_PHPMAILER_USER_EXAMPLE","例 user@provider.dcom");
define("INSTALL_PHPMAILER_PASS","SMPTパスワード");
define("INSTALL_PHPMAILER_SECURE","認証方法 (例 ssl)");
define("INSTALL_PHPMAILER_PORT","SMTPポート");

define("INSTALL_STEP6_INTRO","インストール後Galaxytoolに最初のログオンに使用する必要があります<strong>admin</strong> アカウントのパスワードを定義してくださいい");

define("INSTALL_STEP7_CONFIG","Configuration fileが作成されました");
define("INSTALL_STEP7_CONFIG_FAILED","Configuration fileが作成できません");
define("INSTALL_STEP7_ATTRIBUTES","Attributes fileが作成されました");
define("INSTALL_STEP7_ATTRIBUTES_FAILED","Attributes fileが作成できません");
define("INSTALL_STEP7_CREATED_TABLES","データーベーステーブルが作成されました");

define("INSTALL_STEP8_INTRO","あなたは正常にGalaxytoolをインストールしました!");
define("INSTALL_STEP8_LOAD_DATA","OGameデータをダウンロード中...");
define("INSTALL_STEP8_LOAD_DATA_FINISHED","OGameデータのダウンロードが終了しました");
define("INSTALL_STEP8_DELETE_FILE","今、あなたのWebサーバからインストールファイル install.php と update.phpを削除する必要があります");
define("INSTALL_STEP8_LOGON","<strong>admin</strong>ユーザーは、以前に定義したパスワードでログインしてください");

/*********************************************************************
* update.php
**********************************************************************/
define("UPDATE_START","バージョン &1へのアップデートの開始");
define("UPDATE_STEP_DONE","完了");
define("UPDATE_TITLE", "Galaxytoolの更新 バージョン");
define("UPDATE_STEP1_WELCOME", "Galaxytoolの更新ウィザードへようこそ あなたにはGalaxytoolアップデートの案内が提供されます");
define("UPDATE_STEP1_BACKUP_FILES", "最初のステップとして、あなたの <strong>config</strong> フォルダーのバックアップを作成! あなたはエラーの場合には設定内容を入れなおす必要があります");
define("UPDATE_STEP1_BACKUP_DB", "次に、データベースの <a href=\"http://www.ehow.com/how_2036600_create-database-php.html\">backup</a> を作成");
define("UPDATE_STEP1_PROCEED", "バックアップが行われたら、アップデートを続行することができます");
define("UPDATE_STEP1", INSTALL_STEP1);
define("UPDATE_STEP2", INSTALL_STEP5);
define("UPDATE_STEP2_OLD_VERSION", "以前のGalaxytoolバージョン");
define("UPDATE_STEP3", "Galaxytoolを更新");
define("UPDATE_STEP3_UPDATE_RUNNING", "実行を更新中 しばらくお待ちください...");
define("UPDATE_STEP4", "アップデート完了");
define("UPDATE_STEP4_INTRO","Galaxytoolが正常に更新されました!");
define("UPDATE_STEP4_UPDATE_DONE","アップデートの手順が行われました");
define("UPDATE_FAILED","更新に失敗");

?>