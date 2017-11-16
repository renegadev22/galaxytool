<?php

@include_once "english_probes.inc.php";

$moon_name = "月";

$report_when = "更新日:";

$top_array = array(
"資力：" => R_RESOURCES,
"艦隊" => F_FLEET,
"防衛" => D_DEFENCE,
"建造物" => B_BUILDINGS,
"リサーチ" => RS_RESEARCH
);

$probe_array = array(
/*********************************************************************/
/***************************  Resources  *****************************/
/*********************************************************************/
"メタル" => R_METAL,
"クリスタル" => R_CRYSTAL,
"デューテリウム" => R_DEUTERIUM,
"エネルギー" => R_ENERGY,

/*********************************************************************/
/*****************************  Fleet   ******************************/
/*********************************************************************/
"小型輸送機" => F_SMALLCARGOSHIP,
"大型輸送機" => F_LARGECARGOSHIP,
"軽戦闘機" => F_LIGHFIGHTER,
"重戦闘機" => F_HEAVYFIGHTER,
"巡洋艦" => F_CRUISER,
"バトルシップ" => F_BATTLESHIP,
"コロニーシップ" => F_COLONYSHIP,
"残骸回収船" => F_RECYCLER,
"偵察機" => F_ESPIONAGEPROBE,
"爆撃機" => F_BOMBER,
"デストロイヤー" => F_DESTROYER,
"デススター" => F_DEATHSTAR,
"大型戦艦" => F_BATTLECRUISER,
"ソーラーサテライト" => F_SOLARSATELLITE,

/*********************************************************************/
/**************************  Defense  ********************************/
/*********************************************************************/
"ロケットランチャー" => D_MISSILELAUNCHER,
"ライトレーザー" => D_SMALLLASER,
"ヘビーレーザー" => D_HEAVYLASER,
"イオンキャノン" => D_IONCANNON,
"ガウスキャノン" => D_GAUSSCANNON,
"プラズマ砲" => D_PLASMACANNON,
"小型シールドドーム" => D_SMALLSHIELDDOME,
"大型シールドドーム" => D_LARGESHILDDOME,
"抗弾道ミサイル" => D_ANTIBALLISTICMISSILE,
"星間ミサイル" => D_INTERPLANETARYMISSILE,

/*********************************************************************/
/*****************************  Buildings  ***************************/
/*********************************************************************/
"メタル採掘所" => B_METALMINE,
"クリスタル採掘所" => B_CRYSTALMINE,
"デューテリウム シンセサイザー" => B_DEUTERIUMSYNTHESIZER,
"ソーラー プラント" => B_SOLARPLANT,
"フュージョン 反応炉" => B_FUSIONPLANT,
"ロボティクス 工場" => B_ROBOTFACTORY,
"ナノマシン工場" => B_NANITEFACTORY,
"造船所" => B_SHIPYARD,
"メタル貯蔵庫" => B_METALSTORAGE,
"クリスタル貯蔵庫" => B_CRYSTALSTORAGE,
"デューテリウム タンク" => B_DEUTERIUMTANK,
"リサーチセンター" => B_RESAERCHLAB,
"テラフォーマー" => B_TERRAFORMER,
"同盟格納庫" => B_ALLIANCEDEPOT,
"ミサイル塔" => B_ROCKETSILO,
"月面基地" => B_LUNARBASE,
"大型センサー群" => B_SENSORPHALANX,
"ジャンプゲート" => B_JUMPGATE,

/*********************************************************************/
/*****************************  Research   ***************************/
/*********************************************************************/
"スパイ活動技術" => RS_ESPIONAGE,
"コンピューター技術" => RS_COMPUTER,
"武器技術" => RS_WEAPON,
"シールド技術" => RS_SHIELDING,
"アーマー技術" => RS_ARMOUR,
"エネルギー技術" => RS_ENERGY,
"ハイパースペース技術" => RS_HYPERSPACE,
"燃焼ドライブ" => RS_COMBUSTIONENGINE,
"インパルスドライブ" => RS_IMPULSEENGINE,
"ハイパー スペース ドライブ" => RS_HYPERSPACEENGINE,
"レーザー技術" => RS_LASER,
"イオン技術" => RS_ION,
"プラズマ技術" => RS_PLASMA,
"星間 リサーチ ネットワーク" => RS_IRNETWORK,
"天体物理学" => RS_EXPEDITION,
"グラビトン技術" => RS_GRAVITON
);


?>
