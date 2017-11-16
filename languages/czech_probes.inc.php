<?php

@include_once "english_probes.inc.php";


$moon_name = "Měsíc";
$report_when = "v";

$top_array = array(
"Suroviny na" => R_RESOURCES,
"letek" => F_FLEET,
"Obrana" => D_DEFENCE,
"Budovy" => B_BUILDINGS,
"Výzkum" => RS_RESEARCH
);

$probe_array = array(
/*********************************************************************/
/***************************  Resources  *****************************/
/*********************************************************************/
"Kov" => R_METAL,
"Krystaly" => R_CRYSTAL,
"Deuterium" => R_DEUTERIUM,
"Energie" => R_ENERGY,

/*********************************************************************/
/*****************************  Fleet   ******************************/
/*********************************************************************/
"Malý transportér" => F_SMALLCARGOSHIP,
"Velký transportér" => F_LARGECARGOSHIP,
"Lehký stíhač" => F_LIGHFIGHTER,
"Těžký stíhač" => F_HEAVYFIGHTER,
"Křižník" => F_CRUISER,
"Bitevní loď" => F_BATTLESHIP,
"Kolonizační loď" => F_COLONYSHIP,
"Recyklátor" => F_RECYCLER,
"Špionážní sonda" => F_ESPIONAGEPROBE,
"Bombardér" => F_BOMBER,
"Destroyer" => F_DESTROYER,
"Hvězda smrti" => F_DEATHSTAR,
"Bitevní křižník" => F_BATTLECRUISER,
"Solární satelit" => F_SOLARSATELLITE,

/*********************************************************************/
/**************************  Defense  ********************************/
/*********************************************************************/
"Raketomet" => D_MISSILELAUNCHER,
"Lehký laser" => D_SMALLLASER,
"Těžký laser" => D_HEAVYLASER,
"Ion kanón" => D_IONCANNON,
"Gauss kanón" => D_GAUSSCANNON,
"Plasmová věž" => D_PLASMACANNON,
"Malý planetární štít" => D_SMALLSHIELDDOME,
"Velký planetární štít" => D_LARGESHILDDOME,
"Antibalistické rakety" => D_ANTIBALLISTICMISSILE,
"Meziplanetární rakety" => D_INTERPLANETARYMISSILE,

/*********************************************************************/
/*****************************  Buildings  ***************************/
/*********************************************************************/
"Důl na Kov" => B_METALMINE,
"Důl na Krystaly" => B_CRYSTALMINE,
"Syntetizér deuteria" => B_DEUTERIUMSYNTHESIZER,
"Solární elektrárna" => B_SOLARPLANT,
"Fůzní reaktor" => B_FUSIONPLANT,
"Továrna na roboty" => B_ROBOTFACTORY,
"Továrna s nanoboty" => B_NANITEFACTORY,
"Hangár" => B_SHIPYARD,
"Sklad kovu" => B_METALSTORAGE,
"Sklad krystalů" => B_CRYSTALSTORAGE,
"Nádrž na deuterium" => B_DEUTERIUMTANK,
"Výzkumná laboratoř" => B_RESAERCHLAB,
"Terraformer" => B_TERRAFORMER,
"Alianční sklad" => B_ALLIANCEDEPOT,
"Raketové Silo" => B_ROCKETSILO,
"Základna na Měsíci" => B_LUNARBASE,
"Sensor Falangy" => B_SENSORPHALANX,
"Hyperprostorová Brána" => B_JUMPGATE,

/*********************************************************************/
/*****************************  Research   ***************************/
/*********************************************************************/
"Špionážní technologie" => RS_ESPIONAGE,
"Počítačová technologie" => RS_COMPUTER,
"Zbraňové systémy" => RS_WEAPON,
"Technologie štítů" => RS_SHIELDING,
"Pancéřování" => RS_ARMOUR,
"Energetická technologie" => RS_ENERGY,
"Hyperprostorová technologie" => RS_HYPERSPACE,
"Spalovací pohon" => RS_COMBUSTIONENGINE,
"Impulzní pohon" => RS_IMPULSEENGINE,
"Hyperprostorový pohon" => RS_HYPERSPACEENGINE,
"Laserová technologie" => RS_LASER,
"Iontová technologie" => RS_ION,
"Plasmová technologie" => RS_PLASMA,
"Intergalaktická výzkumná síť" => RS_IRNETWORK,
"Astrofyzika" => RS_EXPEDITION,
"Gravitonová technologie" => RS_GRAVITON
);


?>
