<?php

@include_once "english_probes.inc.php";

$moon_name = "luna";
$report_when = "ob";

$top_array = array(
"Surovine na" => R_RESOURCES,
"flote" => F_FLEET,
"Obramba" => D_DEFENCE,
"Zgradbe" => B_BUILDINGS,
"Laboratorij" => RS_RESEARCH
);

$probe_array = array(
/*********************************************************************/
/***************************  Resources  *****************************/
/*********************************************************************/
"Metal" => R_METAL,
"Kristal" => R_CRYSTAL,
"Deuterium" => R_DEUTERIUM,
"Energija" => R_ENERGY,

/*********************************************************************/
/*****************************  Fleet   ******************************/
/*********************************************************************/
"Majhna tovorna ladja" => F_SMALLCARGOSHIP,
"Velika tovorna ladja" => F_LARGECARGOSHIP,
"Lahek lovec" => F_LIGHFIGHTER,
"Težki lovec" => F_HEAVYFIGHTER,
"Križarka" => F_CRUISER,
"Bojna ladja" => F_BATTLESHIP,
"Kolonizacijska ladja" => F_COLONYSHIP,
"Recikler" => F_RECYCLER,
"Vohunska sonda" => F_ESPIONAGEPROBE,
"Bombnik" => F_BOMBER,
"Uničevalec" => F_DESTROYER,
"Zvezda smrti" => F_DEATHSTAR,
"Bojna križarka" => F_BATTLECRUISER,
"Sončni satelit" => F_SOLARSATELLITE,

/*********************************************************************/
/**************************  Defense  ********************************/
/*********************************************************************/
"Raketnik" => D_MISSILELAUNCHER,
"Lahki laser" => D_SMALLLASER,
"Težek laser" => D_HEAVYLASER,
"Ionski top" => D_IONCANNON,
"Gaussov top" => D_GAUSSCANNON,
"Plazemski top" => D_PLASMACANNON,
"Majhen ščit" => D_SMALLSHIELDDOME,
"Velik ščit" => D_LARGESHILDDOME,
"Protibalistične rakete" => D_ANTIBALLISTICMISSILE,
"Medplanetarne rakete" => D_INTERPLANETARYMISSILE,

/*********************************************************************/
/*****************************  Buildings  ***************************/
/*********************************************************************/
"Rudnik metala" => B_METALMINE,
"Rudnik kristala" => B_CRYSTALMINE,
"Rafinerija Deuteriuma" => B_DEUTERIUMSYNTHESIZER,
"Sončna Elektrarna" => B_SOLARPLANT,
"Fuzijska elektrarna" => B_FUSIONPLANT,
"Tovarna Robotov" => B_ROBOTFACTORY,
"Tovarna Nanorobotov" => B_NANITEFACTORY,
"Ladjedelnica" => B_SHIPYARD,
"Skladišče Metala" => B_METALSTORAGE,
"Skladišče Kristala" => B_CRYSTALSTORAGE,
"Rezervoarji Deuteriuma" => B_DEUTERIUMTANK,
"Laboratorij" => B_RESAERCHLAB,
"Terraformer" => B_TERRAFORMER,
"Zavezniško skladišče" => B_ALLIANCEDEPOT,
"Izstrelišče" => B_ROCKETSILO,
"Lunarna baza" => B_LUNARBASE,
"Senzorska Falanga" => B_SENSORPHALANX,
"Odskočna Vrata" => B_JUMPGATE,

/*********************************************************************/
/*****************************  Research   ***************************/
/*********************************************************************/
"Vohunska tehnologija" => RS_ESPIONAGE,
"Računalniška tehnologija" => RS_COMPUTER,
"Tehnologija orožja" => RS_WEAPON,
"Tehnologija ščita" => RS_SHIELDING,
"Tehnologija oklepa" => RS_ARMOUR,
"Energijska tehnologija" => RS_ENERGY,
"Hiperprostorska tehnologija" => RS_HYPERSPACE,
"Pogon izgorevanja" => RS_COMBUSTIONENGINE,
"Impulzni pogon" => RS_IMPULSEENGINE,
"Hiperprostorski pogon" => RS_HYPERSPACEENGINE,
"Laserska tehnologija" => RS_LASER,
"Ionska tehnologija" => RS_ION,
"Plazemska tehnologija" => RS_PLASMA,
"Medgalaktična raziskovalna mreža" => RS_IRNETWORK,
"Astrofizika" => RS_EXPEDITION,
"Gravitonska tehnologija" => RS_GRAVITON
);

?>