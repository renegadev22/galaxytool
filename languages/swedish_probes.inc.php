<?php

@include_once "english_probes.inc.php";

$moon_name = "Måne";
$report_when = "";

$top_array = array(
"Resurser på" => R_RESOURCES,
"flottor" => F_FLEET,
"Försvar" => D_DEFENCE,
"Byggnader" => B_BUILDINGS,
"Forskning" => RS_RESEARCH
);


$probe_array = array(
/*********************************************************************/
/***************************** Resources *****************************/
/*********************************************************************/
"Metall" => R_METAL,
"Kristall" => R_CRYSTAL,
"Deuterium" => R_DEUTERIUM,
"Energi" => R_ENERGY,

/*********************************************************************/
/*****************************  Fleet   ******************************/
/*********************************************************************/
"Litet transportskepp" => F_SMALLCARGOSHIP,
"Stort transportskepp" => F_LARGECARGOSHIP,
"Litet jaktskepp" => F_LIGHFIGHTER,
"Stort jaktskepp" => F_HEAVYFIGHTER,
"Kryssare" => F_CRUISER,
"Slagskepp" => F_BATTLESHIP,
"Koloniskepp" => F_COLONYSHIP,
"Återvinnare" => F_RECYCLER,
"Spionsond" => F_ESPIONAGEPROBE,
"Bombare" => F_BOMBER,
"Flaggskepp" => F_DESTROYER,
"Dödsstjärna" => F_DEATHSTAR,
"Jagare" => F_BATTLECRUISER,
"Solsatellit" => F_SOLARSATELLITE,

/*********************************************************************/
/**************************  Defense  ********************************/
/*********************************************************************/
"Raketramp" => D_MISSILELAUNCHER,
"Litet lasertorn" => D_SMALLLASER,
"Stort lasertorn" => D_HEAVYLASER,
"Jonkanon" => D_IONCANNON,
"Gausskanon" => D_GAUSSCANNON,
"Plasmakanon" => D_PLASMACANNON,
"Liten sköldkupol" => D_SMALLSHIELDDOME,
"Stor sköldkupol" => D_LARGESHILDDOME,
"Antiballistiska missiler" => D_ANTIBALLISTICMISSILE,
"Interplanetära missiler" => D_INTERPLANETARYMISSILE,

/*********************************************************************/
/*****************************  Buildings  ***************************/
/*********************************************************************/
"Metallgruva" => B_METALMINE,
"Kristallgruva" => B_CRYSTALMINE,
"Deuteriumplattform" => B_DEUTERIUMSYNTHESIZER,
"Solkraftverk" => B_SOLARPLANT,
"Fusionskraftverk" => B_FUSIONPLANT,
"Robotfabrik" => B_ROBOTFACTORY,
"Nanofabrik" => B_NANITEFACTORY,
"Skeppsvarv" => B_SHIPYARD,
"Metallager" => B_METALSTORAGE,
"Kristallager" => B_CRYSTALSTORAGE,
"Deuteriumtank" => B_DEUTERIUMTANK,
"Forskningslabb" => B_RESAERCHLAB,
"Terraformare" => B_TERRAFORMER,
"Alliansdepå" => B_ALLIANCEDEPOT,
"Missilsilo" => B_ROCKETSILO,
"Månbas" => B_LUNARBASE,
"Radarstation" => B_SENSORPHALANX,
"Månportal" => B_JUMPGATE,

/*********************************************************************/
/*****************************  Research   ***************************/
/*********************************************************************/
"Spionageteknologi" => RS_ESPIONAGE,
"Datorteknologi" => RS_COMPUTER,
"Vapenteknologi" => RS_WEAPON,
"Sköldteknologi" => RS_SHIELDING,
"Pansarteknologi" => RS_ARMOUR,
"Energiteknologi" => RS_ENERGY,
"Hyperrymdteknologi" => RS_HYPERSPACE,
"Raketmotor" => RS_COMBUSTIONENGINE,
"Impulsmotor" => RS_IMPULSEENGINE,
"Hyperrymdmotor" => RS_HYPERSPACEENGINE,
"Laserteknologi" => RS_LASER,
"Jonteknologi" => RS_ION,
"Plasmateknologi" => RS_PLASMA,
"Intergalaktiskt forskningsnätverk" => RS_IRNETWORK,
"Astrofysik" => RS_EXPEDITION,
"Gravitonteknologi" => RS_GRAVITON
);

?>