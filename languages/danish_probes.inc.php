<?php

@include_once "english_probes.inc.php";

$moon_name = "Måne";
$report_when = "på";

$top_array = array(
"Ressurcer på" => R_RESOURCES,
"Flåder" => F_FLEET,
"Forsvar" => D_DEFENCE,
"Bygning" => B_BUILDINGS,
"Forskning" => RS_RESEARCH
);


$probe_array = array(
/*********************************************************************/
/***************************  Resources  *****************************/
/*********************************************************************/
"Metal" => R_METAL,
"Krystal" => R_CRYSTAL,
"Deuterium" => R_DEUTERIUM,
"Energi" => R_ENERGY,

/*********************************************************************/
/*****************************  Fleet   ******************************/
/*********************************************************************/
"Lille Transporter" => F_SMALLCARGOSHIP,
"Stor Transporter" => F_LARGECARGOSHIP,
"Lille Jæger" => F_LIGHFIGHTER,
"Stor Jæger" => F_HEAVYFIGHTER,
"Krydser" => F_CRUISER,
"Slagskib" => F_BATTLESHIP,
"Koloniskib" => F_COLONYSHIP,
"Recycler" => F_RECYCLER,
"Spionagesonde" => F_ESPIONAGEPROBE,
"Bomber" => F_BOMBER,
"Destroyer" => F_DESTROYER,
"Dødsstjerne" => F_DEATHSTAR,
"Interceptor" => F_BATTLECRUISER,
"Solarsatellit" => F_SOLARSATELLITE,

/*********************************************************************/
/**************************  Defense  ********************************/
/*********************************************************************/
"Raketkanon" => D_MISSILELAUNCHER,
"Lille Laserkanon" => D_SMALLLASER,
"Stor Laserkanon" => D_HEAVYLASER,
"Ionkanon" => D_IONCANNON,
"Gausskanon" => D_GAUSSCANNON,
"Plasmakanon" => D_PLASMACANNON,
"Lille Planetskjold" => D_SMALLSHIELDDOME,
"Stort Planetskjold" => D_LARGESHILDDOME,
"Forsvarsraket" => D_ANTIBALLISTICMISSILE,
"Interplanetarraket" => D_INTERPLANETARYMISSILE,

/*********************************************************************/
/*****************************  Buildings  ***************************/
/*********************************************************************/
"Metalmine" => B_METALMINE,
"Krystalmine" => B_CRYSTALMINE,
"Deuteriumsyntetiserer" => B_DEUTERIUMSYNTHESIZER,
"Solkraftværk" => B_SOLARPLANT,
"Fusionskraftværk" => B_FUSIONPLANT,
"Robotfabrik" => B_ROBOTFACTORY,
"Nanitfabrik" => B_NANITEFACTORY,
"Rumskibsværft" => B_SHIPYARD,
"Metallager" => B_METALSTORAGE,
"Krystallager" => B_CRYSTALSTORAGE,
"Deuteriumlager" => B_DEUTERIUMTANK,
"Forskningslaboratorium" => B_RESAERCHLAB,
"Terraformer" => B_TERRAFORMER,
"Alliancedepot" => B_ALLIANCEDEPOT,
"Raketsilo" => B_ROCKETSILO,
"Månebase" => B_LUNARBASE,
"Phalanxbygning" => B_SENSORPHALANX,
"Springportal" => B_JUMPGATE,

/*********************************************************************/
/*****************************  Research   ***************************/
/*********************************************************************/
"Spionageteknologi" => RS_ESPIONAGE,
"Computerteknologi" => RS_COMPUTER,
"Våbenteknologi" => RS_WEAPON,
"Skjoldteknologi" => RS_SHIELDING,
"Rumskibspansring" => RS_ARMOUR,
"Energiteknologi" => RS_ENERGY,
"Hyperrumteknologi" => RS_HYPERSPACE,
"Forbrændingssystem" => RS_COMBUSTIONENGINE,
"Impulssystem" => RS_IMPULSEENGINE,
"Hyperrumsystem" => RS_HYPERSPACEENGINE,
"Laserteknologi" => RS_LASER,
"Ionteknologi" => RS_ION,
"Plasmateknologi" => RS_PLASMA,
"Intergalaktisk Forskningsnetværk" => RS_IRNETWORK,
"Astrofysik" => RS_EXPEDITION,
"Gravitonforskning" => RS_GRAVITON
);


?>