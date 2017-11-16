<?php
@include_once "english_probes.inc.php";

$moon_name = "月球";
$report_when = "在";

$top_array = array(
"Resources on" => "资源",
"Fleets" => "舰队",
"Defence" => "防御",
"Buildings" => "建筑",
"Research" => "科技"
);

$probe_array = array(
/*********************************************************************/
/***************************  Resources  *****************************/
/*********************************************************************/
"金属" => R_METAL,
"晶体" => R_CRYSTAL,
"重氢" => R_DEUTERIUM,
"能源" => R_ENERGY,

/*********************************************************************/
/*****************************  Fleet   ******************************/
/*********************************************************************/


"小型运输舰" => F_SMALLCARGOSHIP,
"大型运输舰" => F_LARGECARGOSHIP,
"轻型战斗机" => F_LIGHFIGHTER,
"重型战斗机" => F_HEAVYFIGHTER,
"巡洋舰" => F_CRUISER,
"战列舰" => F_BATTLESHIP,
"殖民船" => F_COLONYSHIP,
"回收船" => F_RECYCLER,
"间谍卫星" => F_ESPIONAGEPROBE,
"导弹船(轰炸机)" => F_BOMBER,
"毁灭者" => F_DESTROYER,
"死星" => F_DEATHSTAR,
"战斗巡洋舰" => F_BATTLECRUISER,
"太阳能卫星" => F_SOLARSATELLITE,

/*********************************************************************/
/**************************  Defense  ********************************/
/*********************************************************************/

"火箭发射装置" => D_MISSILELAUNCHER,
"轻型激光炮" => D_SMALLLASER,
"重型激光炮" => D_HEAVYLASER,
"磁轨炮(中子)" => D_IONCANNON,
"离子加农炮(高斯)" => D_GAUSSCANNON,
"电浆炮塔(等离子)" => D_PLASMACANNON,
"小型防护罩" => D_SMALLSHIELDDOME,
"大型防护罩" => D_LARGESHILDDOME,
"拦截导弹" => D_ANTIBALLISTICMISSILE,
"星际导弹" => D_INTERPLANETARYMISSILE,

/*********************************************************************/
/*****************************  Buildings  ***************************/
/*********************************************************************/


"金属矿" => B_METALMINE,
"晶体矿" => B_CRYSTALMINE,
"重氢分离器" => B_DEUTERIUMSYNTHESIZER,
"太阳能发电厂" => B_SOLARPLANT,
"核电站" => B_FUSIONPLANT,
"机器人工厂" => B_ROBOTFACTORY,
"纳米机器人工厂" => B_NANITEFACTORY,
"造船厂" => B_SHIPYARD,
"金属仓库" => B_METALSTORAGE,
"晶体仓库" => B_CRYSTALSTORAGE,
"重氢槽" => B_DEUTERIUMTANK,
"研究实验室" => B_RESAERCHLAB,
"地型改造器" => B_TERRAFORMER,
"联盟太空站" => B_ALLIANCEDEPOT,
"导弹发射井" => B_ROCKETSILO,
"月球基地" => B_LUNARBASE,
"感应阵" => B_SENSORPHALANX,
"空间传送门" => B_JUMPGATE,

/*********************************************************************/
/***************************** Research ****************************/
/*********************************************************************/

"间谍技术" => RS_ESPIONAGE,
"电脑技术" => RS_COMPUTER,
"武器技术" => RS_WEAPON,
"防护罩技术" => RS_SHIELDING,
"护甲技术" => RS_ARMOUR, 
"能源技术" => RS_ENERGY,
"超空间技术" => RS_HYPERSPACE,
"燃烧引擎" => RS_COMBUSTIONENGINE,
"脉冲引擎" => RS_IMPULSEENGINE,
"超空间引擎" => RS_HYPERSPACEENGINE,
"镭射技术" => RS_LASER,
"离子技术" => RS_ION,
"电浆技术" => RS_PLASMA,
"星际研究网络" => RS_IRNETWORK,
"天体物理学" => RS_EXPEDITION,
"重子技术" => RS_GRAVITON,
);

?>