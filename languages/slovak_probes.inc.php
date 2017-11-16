<?php

@include_once "english_probes.inc.php";

$moon_name = "Mesiac";
$report_when = "dňa";

$top_array = array(
"Zdroje na" => R_RESOURCES,
"flotily" => F_FLEET,
"Obrana" => D_DEFENCE,
"Budovy" => B_BUILDINGS,
"Výskum" => RS_RESEARCH
);

$probe_array = array(
/*********************************************************************/
/***************************  Resources  *****************************/
/*********************************************************************/
"Kovy" => R_METAL,
"Kryštály" => R_CRYSTAL,
"Deutérium" => R_DEUTERIUM,
"Energia" => R_ENERGY,

/*********************************************************************/
/*****************************  Fleet   ******************************/
/*********************************************************************/
"Malý transportér" => F_SMALLCARGOSHIP,
"Veľký transportér" => F_LARGECARGOSHIP,
"Ľahký stíhač" => F_LIGHFIGHTER,
"Ťažký stíhač" => F_HEAVYFIGHTER,
"Krížnik" => F_CRUISER,
"Bojová loď" => F_BATTLESHIP,
"Kolonizačná loď" => F_COLONYSHIP,
"Recyklátor" => F_RECYCLER,
"Špionážna sonda" => F_ESPIONAGEPROBE,
"Bombardér" => F_BOMBER,
"Devastátor" => F_DESTROYER,
"Hviezda smrti" => F_DEATHSTAR,
"Bojový krížnik" => F_BATTLECRUISER,
"Solárny satelit" => F_SOLARSATELLITE,

/*********************************************************************/
/**************************  Defense  ********************************/
/*********************************************************************/
"Raketový komplet" => D_MISSILELAUNCHER,
"Ľahký laser" => D_SMALLLASER,
"Ťažký laser" => D_HEAVYLASER,
"Iónový kanón" => D_IONCANNON,
"Gaussov kanón" => D_GAUSSCANNON,
"Plazmová veža" => D_PLASMACANNON,
"Malý planetárny štít" => D_SMALLSHIELDDOME,
"Veľký planetárny štít" => D_LARGESHILDDOME,
"Protiraketové strely" => D_ANTIBALLISTICMISSILE,
"Medziplanetárne rakety" => D_INTERPLANETARYMISSILE,

/*********************************************************************/
/*****************************  Buildings  ***************************/
/*********************************************************************/
"Ťažobný komplex - kovy" => B_METALMINE,
"Ťažobný komplex - kryštály" => B_CRYSTALMINE,
"Syntetizéry deutéria" => B_DEUTERIUMSYNTHESIZER,
"Solárne elektrárne" => B_SOLARPLANT,
"Fúzne elektrárne" => B_FUSIONPLANT,
"Robotické továrne" => B_ROBOTFACTORY,
"Nanotechnologické továrne" => B_NANITEFACTORY,
"Lodenice" => B_SHIPYARD,
"Sklady kovov" => B_METALSTORAGE,
"Sklady kryštálov" => B_CRYSTALSTORAGE,
"Nádrže na deutérium" => B_DEUTERIUMTANK,
"Výskumné laboratóriá" => B_RESAERCHLAB,
"Terraformer" => B_TERRAFORMER,
"Aliančný sklad" => B_ALLIANCEDEPOT,
"Raketové silo" => B_ROCKETSILO,
"Mesačná základňa" => B_LUNARBASE,
"Parabolické teleskopy" => B_SENSORPHALANX,
"Hyperpriestorová brána" => B_JUMPGATE,

/*********************************************************************/
/*****************************  Research   ***************************/
/*********************************************************************/
"Špionážne technológie" => RS_ESPIONAGE,
"Počítačové technológie" => RS_COMPUTER,
"Zbrojárske technológie" => RS_WEAPON,
"Technológie štítov" => RS_SHIELDING,
"Pancierovanie" => RS_ARMOUR,
"Energetické technológie" => RS_ENERGY,
"Hyperpriestorové technológie" => RS_HYPERSPACE,
"Spaľovací pohon" => RS_COMBUSTIONENGINE,
"Impulzný pohon" => RS_IMPULSEENGINE,
"Hyperpriestorový pohon" => RS_HYPERSPACEENGINE,
"Laserové technológie" => RS_LASER,
"Iónové technológie" => RS_ION,
"Plazmové technológie" => RS_PLASMA,
"Intergalaktická výskumná sieť" => RS_IRNETWORK,
"Astrofyzika" => RS_EXPEDITION,
"Gravitonové technológie" => RS_GRAVITON
);


?>