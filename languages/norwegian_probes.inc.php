<?php
/* Norsk bokmål */

@include_once "english_probes.inc.php";

$moon_name = "Måne";
$report_when = "den";

$top_array = array(
"Ressurser på" => R_RESOURCES,
"flåter" => F_FLEET,
"Forsvar" => D_DEFENCE,
"Bygning" => B_BUILDINGS,
"Forskning" => RS_RESEARCH
);

$probe_array = array(
/*********************************************************************/
/***************************  Resources  *****************************/
/*********************************************************************/
"Metall" => R_METAL,
"Krystall" => R_CRYSTAL,
"Deuterium" => R_DEUTERIUM,
"Energi" => R_ENERGY,

/*********************************************************************/
/*****************************  Fleet   ******************************/
/*********************************************************************/
"Lite Lasteskip" => F_SMALLCARGOSHIP,
"Stort Lasteskip" => F_LARGECARGOSHIP,
"Lett Jeger" => F_LIGHFIGHTER,
"Tung Jeger" => F_HEAVYFIGHTER,
"Krysser" => F_CRUISER,
"Slagskip" => F_BATTLESHIP,
"Koloni Skip" => F_COLONYSHIP,
"Resirkulerer" => F_RECYCLER,
"Spionasjesonde" => F_ESPIONAGEPROBE,
"Bomber" => F_BOMBER,
"Destroyer" => F_DESTROYER,
"Døds stjerne" => F_DEATHSTAR,
"Slagkrysser" => F_BATTLECRUISER,
"Solar Satelitt" => F_SOLARSATELLITE,

/*********************************************************************/
/**************************  Defense  ********************************/
/*********************************************************************/
"Rakettkaster" => D_MISSILELAUNCHER,
"Lett laser" => D_SMALLLASER,
"Tung Laser" => D_HEAVYLASER,
"Ion Kannon" => D_IONCANNON,
"Gauss Kannon" => D_GAUSSCANNON,
"Plasma Tårn" => D_PLASMACANNON,
"Liten Skjold-Kuppel" => D_SMALLSHIELDDOME,
"Stor Skjold-Kuppel" => D_LARGESHILDDOME,
"Anti-Ballistiske Missiler" => D_ANTIBALLISTICMISSILE,
"Interplanetariske Missiler" => D_INTERPLANETARYMISSILE,

/*********************************************************************/
/*****************************  Buildings  ***************************/
/*********************************************************************/
"Metallgruve" => B_METALMINE,
"Krystallgruve" => B_CRYSTALMINE,
"Deuteriumsfremstiller" => B_DEUTERIUMSYNTHESIZER,
"Solpanel" => B_SOLARPLANT,
"Fusjons Reaktor" => B_FUSIONPLANT,
"Robot Fabrikk" => B_ROBOTFACTORY,
"Nanitt Fabrikk" => B_NANITEFACTORY,
"Skipsverft" => B_SHIPYARD,
"Metall Lagring" => B_METALSTORAGE,
"Krystall Lagring" => B_CRYSTALSTORAGE,
"Deuterium Tank" => B_DEUTERIUMTANK,
"Forsknings Lab" => B_RESAERCHLAB,
"Terraformer" => B_TERRAFORMER,
"Allianse havn" => B_ALLIANCEDEPOT,
"Missil Silo" => B_ROCKETSILO,
"månebase" => B_LUNARBASE,
"Phalanx Sensor" => B_SENSORPHALANX,
"Sprangportal" => B_JUMPGATE,

/*********************************************************************/
/*****************************  Research   ***************************/
/*********************************************************************/
"Spionasjeteknologi" => RS_ESPIONAGE,
"Datateknologi" => RS_COMPUTER,
"Våpenteknologi" => RS_WEAPON,
"Skjoldteknologi" => RS_SHIELDING,
"Panserteknologi" => RS_ARMOUR,
"Energiteknologi" => RS_ENERGY,
"Hyperromfartsteknologi" => RS_HYPERSPACE,
"Forbrennings Driv" => RS_COMBUSTIONENGINE,
"Impuls Driv" => RS_IMPULSEENGINE,
"Hyperromfartsmotor" => RS_HYPERSPACEENGINE,
"Laser Teknologi" => RS_LASER,
"Ione Teknologi" => RS_ION,
"Plasma Teknologi" => RS_PLASMA,
"Intergalaktisk Forsknings Nettverk" => RS_IRNETWORK,
"Astrofysikk" => RS_EXPEDITION,
"Graviton Teknologi" => RS_GRAVITON
);


?>