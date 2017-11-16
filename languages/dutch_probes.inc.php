<?php

@include_once "english_probes.inc.php";

$moon_name = "Maan";
$report_when = "op";

$top_array = array(
"Grondstoffen op" => R_RESOURCES,
"vloten" => F_FLEET,  //redesign
"Verdediging" => D_DEFENCE,
"Gebouw" => B_BUILDINGS, //redesign
"Onderzoek" => RS_RESEARCH
);

$probe_array = array(
/*********************************************************************/
/***************************  Resources  *****************************/
/*********************************************************************/
"Metaal" => R_METAL,
"Kristal" => R_CRYSTAL,
"Deuterium" => R_DEUTERIUM,
"Energie" => R_ENERGY,

/*********************************************************************/
/*****************************  Fleet   ******************************/
/*********************************************************************/
"Klein vrachtschip" => F_SMALLCARGOSHIP,
"Groot vrachtschip" => F_LARGECARGOSHIP,
"Licht gevechtsschip" => F_LIGHFIGHTER,
"Zwaar gevechtsschip" => F_HEAVYFIGHTER,
"Kruiser" => F_CRUISER,
"Slagschip" => F_BATTLESHIP,
"Kolonisatieschip" => F_COLONYSHIP,
"Recycler" => F_RECYCLER,
"Spionagesonde" => F_ESPIONAGEPROBE,
"Bommenwerper" => F_BOMBER,
"Vernietiger" => F_DESTROYER,
"Ster des Doods" => F_DEATHSTAR,
"Interceptor" => F_BATTLECRUISER,
"Zonne-energiesatelliet" => F_SOLARSATELLITE,

/*********************************************************************/
/**************************  Defense  ********************************/
/*********************************************************************/
"Raketlanceerder" => D_MISSILELAUNCHER,
"Kleine laser" => D_SMALLLASER,
"Grote laser" => D_HEAVYLASER,
"Ionkanon" => D_IONCANNON,
"Gausskanon" => D_GAUSSCANNON,
"Plasmakanon" => D_PLASMACANNON,
"Kleine planetaire schildkoepel" => D_SMALLSHIELDDOME,
"Grote planetaire schildkoepel" => D_LARGESHILDDOME,
"Anti-ballistische raketten" => D_ANTIBALLISTICMISSILE,
"Interplanetaire raketten" => D_INTERPLANETARYMISSILE,

/*********************************************************************/
/*****************************  Buildings  ***************************/
/*********************************************************************/
"Metaalmijn" => B_METALMINE,
"Kristalmijn" => B_CRYSTALMINE,
"Deuteriumfabriek" => B_DEUTERIUMSYNTHESIZER,
"Zonne-energiecentrale" => B_SOLARPLANT,
"Fusiecentrale" => B_FUSIONPLANT,
"Robotfabriek" => B_ROBOTFACTORY,
"Nanorobotfabriek" => B_NANITEFACTORY,
"Werf" => B_SHIPYARD,
"Metaalopslag" => B_METALSTORAGE,
"Kristalopslag" => B_CRYSTALSTORAGE,
"Deuteriumtank" => B_DEUTERIUMTANK,
"Onderzoekslab" => B_RESAERCHLAB,
"Terravormer" => B_TERRAFORMER,
"Alliantiehangar" => B_ALLIANCEDEPOT,
"Raketsilo" => B_ROCKETSILO,
"Maanbasis" => B_LUNARBASE,
"Sensorphalanx" => B_SENSORPHALANX,
"Sprongpoort" => B_JUMPGATE,

/*********************************************************************/
/*****************************  Research   ***************************/
/*********************************************************************/
"Spionagetechniek" => RS_ESPIONAGE,
"Computertechniek" => RS_COMPUTER,
"Wapentechniek" => RS_WEAPON,
"Schildtechniek" => RS_SHIELDING,
"Pantsertechniek" => RS_ARMOUR,
"Energietechniek" => RS_ENERGY,
"Hyperruimtetechniek" => RS_HYPERSPACE,
"Verbrandingsmotor" => RS_COMBUSTIONENGINE,
"Impulsmotor" => RS_IMPULSEENGINE,
"Hyperruimtemotor" => RS_HYPERSPACEENGINE,
"Lasertechniek" => RS_LASER,
"Iontechniek" => RS_ION,
"Plasmatechniek" => RS_PLASMA,
"Intergalactisch Onderzoeksnetwerk" => RS_IRNETWORK,
"Astrofysica" => RS_EXPEDITION,
"Gravitontechniek" => RS_GRAVITON
);

?>
