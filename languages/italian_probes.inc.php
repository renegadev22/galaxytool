<?php

@include_once "english_probes.inc.php";

$moon_name = "Luna";
$report_when = "il";

$top_array = array(
"Risorse su" => R_RESOURCES,
"Flotte" => F_FLEET,
"Difesa" => D_DEFENCE,
"Edifici" => B_BUILDINGS,
"Ricerca" => RS_RESEARCH
);

$probe_array = array(
/*********************************************************************/
/*****************************  Resources  ***************************/
/*********************************************************************/
"Metallo" => R_METAL,
"Cristallo" => R_CRYSTAL,
"Deuterio" => R_DEUTERIUM,
"Energia" => R_ENERGY,

/*********************************************************************/
/*****************************  Fleet   ******************************/
/*********************************************************************/
"Cargo Leggero" => F_SMALLCARGOSHIP,
"Cargo Pesante" => F_LARGECARGOSHIP,
"Caccia Leggero" => F_LIGHFIGHTER,
"Caccia Pesante" => F_HEAVYFIGHTER,
"Incrociatore" => F_CRUISER,
"Nave da Battaglia" => F_BATTLESHIP,
"Colonizzatrice" => F_COLONYSHIP,
"Riciclatrice" => F_RECYCLER,
"Sonda spia" => F_ESPIONAGEPROBE,
"Bombardiere" => F_BOMBER,
"Corazzata" => F_DESTROYER,
"Morte Nera" => F_DEATHSTAR,
"Incrociatore da Battaglia" => F_BATTLECRUISER,
"Satellite Solare" => F_SOLARSATELLITE,

/*********************************************************************/
/**************************  Defense  ********************************/
/*********************************************************************/
"Lanciamissili" => D_MISSILELAUNCHER,
"Laser Leggero" => D_SMALLLASER,
"Laser Pesante" => D_HEAVYLASER,
"Cannone Ionico" => D_IONCANNON,
"Cannone Gauss" => D_GAUSSCANNON,
"Cannone al Plasma" => D_PLASMACANNON,
"Cupola Scudo" => D_SMALLSHIELDDOME,
"Cupola Scudo Potenziata" => D_LARGESHILDDOME,
"Missili Anti Balistici" => D_ANTIBALLISTICMISSILE,
"Missili Interplanetari" => D_INTERPLANETARYMISSILE,

/*********************************************************************/
/*****************************  Buildings  ***************************/
/*********************************************************************/
"Miniera di Metallo" => B_METALMINE,
"Miniera di Cristalli" => B_CRYSTALMINE,
"Sintetizzatore di Deuterio" => B_DEUTERIUMSYNTHESIZER,
"Centrale Solare" => B_SOLARPLANT,
"Centrale a Fusione" => B_FUSIONPLANT,
"Fabbrica dei Robots" => B_ROBOTFACTORY,
"Fabbrica dei Naniti" => B_NANITEFACTORY,
"Cantiere Spaziale" => B_SHIPYARD,
"Deposito di Metallo" => B_METALSTORAGE,
"Deposito di Cristalli" => B_CRYSTALSTORAGE,
"Cisterna di deuterio" => B_DEUTERIUMTANK,
"Laboratorio di Ricerca" => B_RESAERCHLAB,
"Terraformer" => B_TERRAFORMER,
"Base di appoggio" => B_ALLIANCEDEPOT,
"Base Missilistica" => B_ROCKETSILO,
"Avamposto Lunare" => B_LUNARBASE,
"Falange di Sensori" => B_SENSORPHALANX,
"Portale Iperspaziale" => B_JUMPGATE,

/*********************************************************************/
/*****************************  Research   ***************************/
/*********************************************************************/
"Tecnologie per lo spionaggio" => RS_ESPIONAGE,
"Tecnologia informatica" => RS_COMPUTER,
"Tecnologia delle Armi" => RS_WEAPON,
"Tecnologia degli Scudi" => RS_SHIELDING,
"Tecnologia delle Corazze" => RS_ARMOUR,
"Tecnologia Energetica" => RS_ENERGY,
"Tecnologia Iperspaziale" => RS_HYPERSPACE,
"Propulsore a Combustione" => RS_COMBUSTIONENGINE,
"Propulsore a Impulso" => RS_IMPULSEENGINE,
"Propulsore Iperspaziale" => RS_HYPERSPACEENGINE,
"Tecnologia dei Laser" => RS_LASER,
"Tecnologia Ionica" => RS_ION,
"Tecnologia dei Plasmi" => RS_PLASMA,
"Rete Interplanetaria di Ricerca" => RS_IRNETWORK,
"Astrofisica" => RS_EXPEDITION,
"Tecnologia Gravitonica" => RS_GRAVITON
);

?>
