 <?php

@include_once "english_probes.inc.php";

$moon_name = "달";

$report_when = "정보:";

$top_array = array(
"의 자원" => R_RESOURCES,
"함대" => F_FLEET,
"방어" => D_DEFENCE,
"건물" => B_BUILDINGS,
"연구" => RS_RESEARCH
);

$probe_array = array(
/*********************************************************************/
/***************************** Resources ***************************/
/*********************************************************************/
"메탈" => R_METAL,
"크리스탈" => R_CRYSTAL,
"듀테륨" => R_DEUTERIUM,
"에너지" => R_ENERGY,

/*********************************************************************/
/***************************** Fleet *******************************/
/*********************************************************************/
"소형 화물선" => F_SMALLCARGOSHIP,
"대형 화물선" => F_LARGECARGOSHIP,
"전투기" => F_LIGHFIGHTER,
"공격기" => F_HEAVYFIGHTER,
"구축함" => F_CRUISER,
"순양함" => F_BATTLESHIP,
"이민선" => F_COLONYSHIP,
"수확선" => F_RECYCLER,
"무인 정찰기" => F_ESPIONAGEPROBE,
"폭격기" => F_BOMBER,
"전함" => F_DESTROYER,
"죽음의 별" => F_DEATHSTAR,
"순양전함" => F_BATTLECRUISER,
"태양광 인공위성" => F_SOLARSATELLITE,

/*********************************************************************/
/**************************** Defense ******************************/
/*********************************************************************/
"로켓 발사기" => D_MISSILELAUNCHER,
"레이저 약" => D_SMALLLASER,
"레이저 강" => D_HEAVYLASER,
"이온 캐논" => D_IONCANNON,
"가우스 캐논" => D_GAUSSCANNON,
"플라스마 포탑" => D_PLASMACANNON,
"소형 보호막" => D_SMALLSHIELDDOME,
"대형 보호막" => D_LARGESHILDDOME,
"탄도 요격 미사일(ABM)" => D_ANTIBALLISTICMISSILE,
"행성간 미사일(IPM)" => D_INTERPLANETARYMISSILE,

/*********************************************************************/
/***************************** Buildings ***************************/
/*********************************************************************/
"메탈 광업소" => B_METALMINE,
"크리스탈 광업소" => B_CRYSTALMINE,
"듀테륨 정제소" => B_DEUTERIUMSYNTHESIZER,
"태양광 발전소" => B_SOLARPLANT,
"핵융합로" => B_FUSIONPLANT,
"로봇 공장" => B_ROBOTFACTORY,
"나노머신 공장" => B_NANITEFACTORY,
"군수공장" => B_SHIPYARD,
"메탈 탱크" => B_METALSTORAGE,
"크리스탈 탱크" => B_CRYSTALSTORAGE,
"듀테륨 탱크" => B_DEUTERIUMTANK,
"연구소" => B_RESAERCHLAB,
"테라포머" => B_TERRAFORMER,
"우군보급기지" => B_ALLIANCEDEPOT,
"미사일 사일로" => B_ROCKETSILO,
"달 기지" => B_LUNARBASE,
"밀집센서" => B_SENSORPHALANX,
"점프 게이트" => B_JUMPGATE,

/*********************************************************************/
/*****************************"Resaerch ****************************/
/*********************************************************************/
"연구" => RS_RESEARCH,
"정탐 기술" => RS_ESPIONAGE,
"컴퓨터 공학" => RS_COMPUTER,
"무기 공학" => RS_WEAPON,
"보호막 기술" => RS_SHIELDING,
"장갑 기술" => RS_ARMOUR,
"에너지 공학" => RS_ENERGY,
"초공간 기술" => RS_HYPERSPACE,
"연소 엔진" => RS_COMBUSTIONENGINE,
"핵추진 엔진" => RS_IMPULSEENGINE,
"초공간 엔진" => RS_HYPERSPACEENGINE,
"레이저 공학" => RS_LASER,
"이온 공학" => RS_ION,
"플라스마 공학" => RS_PLASMA,
"은하간 연구망" => RS_IRNETWORK,
"원정 기술" => RS_EXPEDITION,
"중력자 기술" => RS_GRAVITON
);
?>
