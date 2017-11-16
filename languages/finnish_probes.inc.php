<?php

@include_once "english_probes.inc.php";

$moon_name = "Kuu";
$report_when = ":lla";


$top_array = array(
"Resurssit" => R_RESOURCES,
"laivueet" => F_FLEET,
"Puolustus" => D_DEFENCE,
"Rakennus" => B_BUILDINGS,
"Tutkimus" => RS_RESEARCH
);


$probe_array = array(
/*********************************************************************/
/***************************** Resources *****************************/
/*********************************************************************/
"Metalli" => R_METAL,
"Kristalli" => R_CRYSTAL,
"Deuterium" => R_DEUTERIUM,
"Energia" => R_ENERGY,

/*********************************************************************/
/*****************************  Fleet   ******************************/
/*********************************************************************/
"Pieni rahtialus" => F_SMALLCARGOSHIP,
"Suuri rahtialus" => F_LARGECARGOSHIP,
"Kevyt Hävittäjä" => F_LIGHFIGHTER,
"Raskas Hävittäjä" => F_HEAVYFIGHTER,
"Risteilijä" => F_CRUISER,
"Taistelualus" => F_BATTLESHIP,
"Siirtokunta-alus" => F_COLONYSHIP,
"Kierrättäjä" => F_RECYCLER,
"Vakoiluluotain" => F_ESPIONAGEPROBE,
"Pommittaja" => F_BOMBER,
"Tuhoaja" => F_DESTROYER,
"Kuolemantähti" => F_DEATHSTAR,
"Taisteluristeilijä" => F_BATTLECRUISER,
"Aurinkosatelliitti" => F_SOLARSATELLITE,

/*********************************************************************/
/**************************  Defense  ********************************/
/*********************************************************************/
"Raketinheitin" => D_MISSILELAUNCHER,
"Kevyt laser" => D_SMALLLASER,
"Raskas laser" => D_HEAVYLASER,
"Ionitykki" => D_IONCANNON,
"Gaussin tykki" => D_GAUSSCANNON,
"Plasmatorni" => D_PLASMACANNON,
"Pieni suojakupu" => D_SMALLSHIELDDOME,
"Suuri suojakupu" => D_LARGESHILDDOME,
"Torjuntaohjukset" => D_ANTIBALLISTICMISSILE,
"Planeettainväliset ohjukset" => D_INTERPLANETARYMISSILE,

/*********************************************************************/
/*****************************  Buildings  ***************************/
/*********************************************************************/
"Metallikaivos" => B_METALMINE,
"Kristallikaivos" => B_CRYSTALMINE,
"Deuteriumin syntetisoija" => B_DEUTERIUMSYNTHESIZER,
"Aurinkovoimala" => B_SOLARPLANT,
"Fuusioreaktori" => B_FUSIONPLANT,
"Robottitehdas" => B_ROBOTFACTORY,
"Nanokonetehdas" => B_NANITEFACTORY,
"Telakka" => B_SHIPYARD,
"Metallivarasto" => B_METALSTORAGE,
"Kristallivarasto" => B_CRYSTALSTORAGE,
"Deuterium-säiliö" => B_DEUTERIUMTANK,
"Tutkimuslaboratorio" => B_RESAERCHLAB,
"Terraformer" => B_TERRAFORMER,
"Liittoutuman varasto" => B_ALLIANCEDEPOT,
"Ohjussiilo" => B_ROCKETSILO,
"Kuutukikohta" => B_LUNARBASE,
"Sensoriryhmittymä" => B_SENSORPHALANX,
"Tähtiportti" => B_JUMPGATE,

/*********************************************************************/
/*****************************  Research   ***************************/
/*********************************************************************/
"Vakoiluteknologia" => RS_ESPIONAGE,
"Tietokoneteknologia" => RS_COMPUTER,
"Aseteknologia" => RS_WEAPON,
"Suojausteknologia" => RS_SHIELDING,
"Panssariteknologia" => RS_ARMOUR,
"Energiateknologia" => RS_ENERGY,
"Hyperavaruusteknologia" => RS_HYPERSPACE,
"Polttoajo" => RS_COMBUSTIONENGINE,
"Impulssiajo" => RS_IMPULSEENGINE,
"Hyperavaruusajo" => RS_HYPERSPACEENGINE,
"Laserteknologia" => RS_LASER,
"Ioniteknologia" => RS_ION,
"Plasmateknologia" => RS_PLASMA,
"Galaksienvälinen tutkimusverkko" => RS_IRNETWORK,
"Astrofysiikka" => RS_EXPEDITION,
"Gravitoniteknologia" => RS_GRAVITON
);

?>