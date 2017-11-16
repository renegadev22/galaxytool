<?php

@include_once "english_probes.inc.php";

$moon_name = "Mond";

$report_when = "am";

$top_array = array(
"Rohstoffe auf" => R_RESOURCES,
"Flotten" => F_FLEET,
"Verteidigung" => D_DEFENCE,
"Gebäude" => B_BUILDINGS,
"Forschung" => RS_RESEARCH
);

$probe_array = array(
/*********************************************************************/
/***************************  Resources  *****************************/
/*********************************************************************/
"Metall" => R_METAL,
"Kristall" => R_CRYSTAL,
"Deuterium" => R_DEUTERIUM,
"Energie" => R_ENERGY,

/*********************************************************************/
/*****************************  Fleet   ******************************/
/*********************************************************************/
"Kleiner Transporter" => F_SMALLCARGOSHIP,
"Großer Transporter" => F_LARGECARGOSHIP,
"Leichter Jäger" => F_LIGHFIGHTER,
"Schwerer Jäger" => F_HEAVYFIGHTER,
"Kreuzer" => F_CRUISER,
"Schlachtschiff" => F_BATTLESHIP,
"Kolonieschiff" => F_COLONYSHIP,
"Recycler" => F_RECYCLER,
"Spionagesonde" => F_ESPIONAGEPROBE,
"Bomber" => F_BOMBER,
"Zerstörer" => F_DESTROYER,
"Todesstern" => F_DEATHSTAR,
"Schlachtkreuzer" => F_BATTLECRUISER,
"Solarsatellit" => F_SOLARSATELLITE,

/*********************************************************************/
/**************************  Defense  ********************************/
/*********************************************************************/
"Raketenwerfer" => D_MISSILELAUNCHER,
"Leichtes Lasergeschütz" => D_SMALLLASER,
"Schweres Lasergeschütz" => D_HEAVYLASER,
"Ionengeschütz" => D_IONCANNON,
"Gaußkanone" => D_GAUSSCANNON,
"Plasmawerfer" => D_PLASMACANNON,
"Kleine Schildkuppel" => D_SMALLSHIELDDOME,
"Große Schildkuppel" => D_LARGESHILDDOME,
"Abfangrakete" => D_ANTIBALLISTICMISSILE,
"Interplanetarrakete" => D_INTERPLANETARYMISSILE,
 

/*********************************************************************/
/*****************************  Buildings  ***************************/
/*********************************************************************/
"Metallmine" => B_METALMINE,
"Kristallmine" => B_CRYSTALMINE,
"Deuterium-Synthetisierer" => B_DEUTERIUMSYNTHESIZER,
"Solarkraftwerk" => B_SOLARPLANT,
"Fusionskraftwerk" => B_FUSIONPLANT,
"Roboterfabrik" => B_ROBOTFACTORY,
"Nanitenfabrik" => B_NANITEFACTORY,
"Raumschiffwerft" => B_SHIPYARD,
"Raumschiffswerft" => B_SHIPYARD,
"Metallspeicher" => B_METALSTORAGE,
"Kristallspeicher" => B_CRYSTALSTORAGE,
"Deuteriumtank" => B_DEUTERIUMTANK,
"Forschungslabor" =>B_RESAERCHLAB,
"Terraformer" => B_TERRAFORMER,
"Allianzdepot" => B_ALLIANCEDEPOT,
"Raketensilo" => B_ROCKETSILO,
"Mondbasis" => B_LUNARBASE,
"Sensorphalanx" => B_SENSORPHALANX,
"Sprungtor" => B_JUMPGATE,

/*********************************************************************/
/*****************************  Research   ***************************/
/*********************************************************************/
"Spionagetechnik" => RS_ESPIONAGE,
"Computertechnik" => RS_COMPUTER,
"Waffentechnik" => RS_WEAPON,
"Schildtechnik" => RS_SHIELDING,
"Raumschiffpanzerung" => RS_ARMOUR,
"Energietechnik" => RS_ENERGY,
"Hyperraumtechnik" => RS_HYPERSPACE,
"Verbrennungstriebwerk" => RS_COMBUSTIONENGINE,
"Impulstriebwerk" => RS_IMPULSEENGINE,
"Hyperraumantrieb" => RS_HYPERSPACEENGINE,
"Lasertechnik" => RS_LASER,
"Ionentechnik" => RS_ION,
"Plasmatechnik" => RS_PLASMA,
"Intergalaktisches Forschungsnetzwerk" => RS_IRNETWORK,
"Astrophysik" => RS_EXPEDITION,
"Gravitonforschung" => RS_GRAVITON
);


?>