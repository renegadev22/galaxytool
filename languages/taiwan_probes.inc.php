 <?php
@include_once "english_probes.inc.php";

$moon_name = "月球";
$report_when = "在";

$top_array = array(
"資源在" => R_RESOURCES,
"艦隊" => F_FLEET,
"防禦" => D_DEFENCE,
"建築物" => B_BUILDINGS,
"研究" => RS_RESEARCH
);

$probe_array = array(
/*********************************************************************/
/***************************** Resources *****************************/
/*********************************************************************/
"金屬" => R_METAL,
"晶體" => R_CRYSTAL,
"重氫" => R_DEUTERIUM,
"能源" => R_ENERGY, //redesign

/*********************************************************************/
/*****************************  Fleet   ******************************/
/*********************************************************************/
"小型運輸艦" => F_SMALLCARGOSHIP,
"大型運輸艦" => F_LARGECARGOSHIP,
"輕型戰鬥機" => F_LIGHFIGHTER,
"重型戰鬥機" => F_HEAVYFIGHTER,
"巡洋艦" => F_CRUISER,
"戰列艦" => F_BATTLESHIP,
"殖民船" => F_COLONYSHIP,
"回收船" => F_RECYCLER,
"間諜衛星" => F_ESPIONAGEPROBE,
"導彈艦" => F_BOMBER,
"驅逐艦" => F_DESTROYER,
"死星" => F_DEATHSTAR,
"戰鬥巡洋艦" => F_BATTLECRUISER,
"太陽能衛星" => F_SOLARSATELLITE,

/*********************************************************************/
/**************************  Defense  ********************************/
/*********************************************************************/
"飛彈發射器" => D_MISSILELAUNCHER,
"輕型鐳射炮" => D_SMALLLASER,
"重型鐳射炮" => D_HEAVYLASER,
"離子加農炮" => D_IONCANNON,
"高斯炮" => D_GAUSSCANNON,
"等離子炮塔" => D_PLASMACANNON,
"小型防護罩" => D_SMALLSHIELDDOME,
"大型防護罩" => D_LARGESHILDDOME,
"反彈道導彈" => D_ANTIBALLISTICMISSILE,
"星際導彈" => D_INTERPLANETARYMISSILE,

/*********************************************************************/
/*****************************  Buildings  ***************************/
/*********************************************************************/
"金屬礦" => B_METALMINE,
"晶體礦" => B_CRYSTALMINE,
"重氫合成器" => B_DEUTERIUMSYNTHESIZER,
"太陽能發電廠" => B_SOLARPLANT,
"核融合反應器" => B_FUSIONPLANT,
"機器人工廠" => B_ROBOTFACTORY,
"奈米機器人工廠" => B_NANITEFACTORY,
"造船廠" => B_SHIPYARD,
"金屬儲存器" => B_METALSTORAGE,
"晶體儲存器" => B_CRYSTALSTORAGE,
"重氫儲存槽" => B_DEUTERIUMTANK,
"研究實驗室" => B_RESAERCHLAB,
"地形改造器" => B_TERRAFORMER,
"聯盟太空站" => B_ALLIANCEDEPOT,
"導彈發射井" => B_ROCKETSILO,
"月球基地" => B_LUNARBASE,
"感應陣列" => B_SENSORPHALANX,
"空間跳躍門" => B_JUMPGATE,

/*********************************************************************/
/*****************************  Research   ***************************/
/*********************************************************************/
"間諜偵察技術" => RS_ESPIONAGE,
"電腦技術" => RS_COMPUTER,
"武器技術" => RS_WEAPON,
"防禦盾技術" => RS_SHIELDING,
"裝甲技術" => RS_ARMOUR,
"能源技術" => RS_ENERGY,
"超空間科技" => RS_HYPERSPACE,
"燃燒引擎" => RS_COMBUSTIONENGINE,
"脈衝引擎" => RS_IMPULSEENGINE,
"超空間引擎" => RS_HYPERSPACEENGINE,
"鐳射技術" => RS_LASER,
"離子技術" => RS_ION,
"等離子技術" => RS_PLASMA,
"星際研究網路" => RS_IRNETWORK,
"天體物理學" => RS_EXPEDITION,
"重子技術" => RS_GRAVITON
);

?>
