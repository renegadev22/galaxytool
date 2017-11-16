<?php

@include_once "english_probes.inc.php";

$moon_name = "Luna";
$report_when = "in";

$top_array = array(
"Resurse la" => R_RESOURCES,
"Flote" => F_FLEET,
"Aparare" => D_DEFENCE,
"Cladire" => B_BUILDINGS,
"Cercetari" => RS_RESEARCH
);

$probe_array = array(
/*********************************************************************/
/***************************  Resources  *****************************/
/*********************************************************************/
"Metal" => R_METAL,
"Cristal" => R_CRYSTAL,
"Deuteriu" => R_DEUTERIUM,
"Energie" => R_ENERGY,

/*********************************************************************/
/*****************************  Fleet   ******************************/
/*********************************************************************/
"Transportor mic" => F_SMALLCARGOSHIP,
"Transportor mare" => F_LARGECARGOSHIP,
"Vanator usor" => F_LIGHFIGHTER,
"Vanator greu" => F_HEAVYFIGHTER,
"Crucisator" => F_CRUISER,
"Nava de razboi" => F_BATTLESHIP,
"Nava de Colonizare" => F_COLONYSHIP,
"Reciclator" => F_RECYCLER,
"Proba de spionaj" => F_ESPIONAGEPROBE,
"Bombardier" => F_BOMBER,
"Distrugator" => F_DESTROYER,
"RIP" => F_DEATHSTAR,
"Interceptor" => F_BATTLECRUISER,
"Satelit solar" => F_SOLARSATELLITE,

/*********************************************************************/
/**************************  Defense  ********************************/
/*********************************************************************/
"Lansator de Rachete" => D_MISSILELAUNCHER,
"Laser Usor" => D_SMALLLASER,
"Laser Greu" => D_HEAVYLASER,
"Tun Magnetic" => D_IONCANNON,
"Tun Gauss" => D_GAUSSCANNON,
"Turela cu Plasma" => D_PLASMACANNON,
"Scut Planetar Mic" => D_SMALLSHIELDDOME,
"Scut Planetar Mare" => D_LARGESHILDDOME,
"Racheta Anti-Balistica" => D_ANTIBALLISTICMISSILE,
"Rachete Interplanetare" => D_INTERPLANETARYMISSILE,

/*********************************************************************/
/*****************************  Buildings  ***************************/
/*********************************************************************/
"Mina de Metal" => B_METALMINE,
"Mina de Cristal" => B_CRYSTALMINE,
"Sintetizator de Deuteriu" => B_DEUTERIUMSYNTHESIZER,
"Uzina Solara" => B_SOLARPLANT,
"Reactor de Fuziune" => B_FUSIONPLANT,
"Uzina de Roboti" => B_ROBOTFACTORY,
"Uzina de Naniti" => B_NANITEFACTORY,
"Santier Naval" => B_SHIPYARD,
"Depozit de Metal" => B_METALSTORAGE,
"Depozit de Cristal" => B_CRYSTALSTORAGE,
"Bazin de Deuteriu" => B_DEUTERIUMTANK,
"Laborator de Cercetari" => B_RESAERCHLAB,
"Formator de Sol" => B_TERRAFORMER,
"Hangarul Aliantei" => B_ALLIANCEDEPOT,
"Siloz de Rachete" => B_ROCKETSILO,
"Baza Lunara" => B_LUNARBASE,
"Senzor Phalanx" => B_SENSORPHALANX,
"Portal de Teleportare" => B_JUMPGATE,

/*********************************************************************/
/*****************************  Research   ***************************/
/*********************************************************************/
"Tehnologia Spionajului" => RS_ESPIONAGE,
"Tehnologia Calculatoarelor" => RS_COMPUTER,
"Tehnologia Armelor" => RS_WEAPON,
"Tehnologia Scutului" => RS_SHIELDING,
"Tehnologia Armurilor" => RS_ARMOUR,
"Tehnologia Energiei" => RS_ENERGY,
"Tehnologia Hiperspatiala" => RS_HYPERSPACE,
"Motor pe Combustie" => RS_COMBUSTIONENGINE,
"Motor cu Impuls" => RS_IMPULSEENGINE,
"Motor Hiperspatial" => RS_HYPERSPACEENGINE,
"Tehnologia Laserelor" => RS_LASER,
"Tehnologia Ionilor" => RS_ION,
"Tehnologia Plasmei" => RS_PLASMA,
"Reteaua de Cercetare Intergalactica" => RS_IRNETWORK,
"Astrofizica" => RS_EXPEDITION,
"Tehnologia Graviton" => RS_GRAVITON
);

?>