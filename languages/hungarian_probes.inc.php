<?php
@include_once "english_probes.inc.php";

$moon_name = "Hold";
$report_when = "ekkor:";

$top_array = array(
"Nyersanyagok itt:" => R_RESOURCES,
"Flották" => F_FLEET,
"Védelem" => D_DEFENCE,
"Építés" => B_BUILDINGS,
"Kutatás" => RS_RESEARCH
);

$probe_array = array(
/*********************************************************************/
/***************************** Resources ***************************/
/*********************************************************************/
"Fém" => R_METAL,
"Kristály" => R_CRYSTAL,
"Deutérium" => R_DEUTERIUM,
"Energia" => R_ENERGY,

/*********************************************************************/
/*****************************  Fleet   ******************************/
/*********************************************************************/
"Kis szállító" => F_SMALLCARGOSHIP,
"Nagy Szállító" => F_LARGECARGOSHIP,
"Könnyű Harcos" => F_LIGHFIGHTER,
"Nehéz Harcos" => F_HEAVYFIGHTER,
"Cirkáló" => F_CRUISER,
"Csatahajó" => F_BATTLESHIP,
"Kolóniahajó" => F_COLONYSHIP,
"Szemetesek" => F_RECYCLER,
"Kém szonda" => F_ESPIONAGEPROBE,
"Bombázó" => F_BOMBER,
"Romboló" => F_DESTROYER,
"Deathstar" => F_DEATHSTAR,
"Csatacirkáló" => F_BATTLECRUISER,
"Nap Műhold" => F_SOLARSATELLITE,

/*********************************************************************/
/**************************  Defense  ********************************/
/*********************************************************************/
"Rakéta kilövő" => D_MISSILELAUNCHER,
"Könnyű lézer" => D_SMALLLASER,
"Nehéz lézer" => D_HEAVYLASER,
"Ion ágyú" => D_IONCANNON,
"Gauss ágyú" => D_GAUSSCANNON,
"Plazma torony" => D_PLASMACANNON,
"Kis Pajzs kupola" => D_SMALLSHIELDDOME,
"Nagy Pajzs kupola" => D_LARGESHILDDOME,
"Anti-Ballasztikus rakéták" => D_ANTIBALLISTICMISSILE,
"Bolygóközi rakéták" => D_INTERPLANETARYMISSILE,

/*********************************************************************/
/*****************************  Buildings  ***************************/
/*********************************************************************/
"Fém bánya" => B_METALMINE,
"Kristály bánya" => B_CRYSTALMINE,
"Deutérium Szűrőállomás" => B_DEUTERIUMSYNTHESIZER,
"Nap erőmű" => B_SOLARPLANT,
"Fúziós erőmű" => B_FUSIONPLANT,
"Robot Gyár" => B_ROBOTFACTORY,
"Nanite Gyár" => B_NANITEFACTORY,
"Hajógyár" => B_SHIPYARD,
"Fém raktár" => B_METALSTORAGE,
"Kristály Raktár" => B_CRYSTALSTORAGE,
"Deutérium Tartály" => B_DEUTERIUMTANK,
"Kutató laboratórium" => B_RESAERCHLAB,
"Terraformer" => B_TERRAFORMER,
"Szövetségi Állomás" => B_ALLIANCEDEPOT,
"Rakéta Siló" => B_ROCKETSILO,
"Hold Bázis" => B_LUNARBASE,
"Érzékelő Phalanx" => B_SENSORPHALANX,
"Ugró Kapu" => B_JUMPGATE,

/*********************************************************************/
/*****************************  Research   ***************************/
/*********************************************************************/
"Kém technológia" => RS_ESPIONAGE,
"Számítógép Technológia" => RS_COMPUTER,
"Fegyver technológia" => RS_WEAPON,
"Pajzs Technológia" => RS_SHIELDING,
"Páncél technológia" => RS_ARMOUR,
"Energia Technológia" => RS_ENERGY,
"Hiperűr Technológia" => RS_HYPERSPACE,
"Nagyégésű Hajtómű technológia" => RS_COMBUSTIONENGINE,
"Impulzus meghajtás" => RS_IMPULSEENGINE,
"Hiperűr meghajtás" => RS_HYPERSPACEENGINE,
"Lézer Technológia" => RS_LASER,
"Ion technológia" => RS_ION,
"Plazma Technológia" => RS_PLASMA,
"Bolygóközi Kutató Hálózat" => RS_IRNETWORK,
"Asztrofizika" => RS_EXPEDITION,
"Graviton Technológia" => RS_GRAVITON
);
?>
