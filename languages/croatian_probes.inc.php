<?php

@include_once "english_probes.inc.php";

$moon_name = "Mjesec";
$report_when = "dana";

$top_array = array(
"Resursi na" => R_RESOURCES,
"Slotovi" => F_FLEET,
"Obrana" => D_DEFENCE,
"Gradi se" => B_BUILDINGS,
"Istraživanje" => RS_RESEARCH
);

$probe_array = array(
/*********************************************************************/
/***************************  Resources  *****************************/
/*********************************************************************/
"Metal" => R_METAL,
"Kristal" => R_CRYSTAL,
"Deuterij" => R_DEUTERIUM,
"Energija" => R_ENERGY,

/*********************************************************************/
/*****************************  Fleet   ******************************/
/*********************************************************************/
"Mali transporter" => F_SMALLCARGOSHIP,
"Veliki transporter" => F_LARGECARGOSHIP,
"Mali lovac" => F_LIGHFIGHTER,
"Veliki lovac" => F_HEAVYFIGHTER,
"Krstarica" => F_CRUISER,
"Borbeni brod" => F_BATTLESHIP,
"Kolonijalni brod" => F_COLONYSHIP,
"Recikler" => F_RECYCLER,
"Sonde za špijunažu" => F_ESPIONAGEPROBE,
"Bombarder" => F_BOMBER,
"Razarač" => F_DESTROYER,
"Zvijezda smrti" => F_DEATHSTAR,
"Oklopna krstarica" => F_BATTLECRUISER,
"Solarni satelit" => F_SOLARSATELLITE,

/*********************************************************************/
/**************************  Defense  ********************************/
/*********************************************************************/
"Raketobacači" => D_MISSILELAUNCHER,
"Mali laser" => D_SMALLLASER,
"Veliki laser" => D_HEAVYLASER,
"Ionski top" => D_IONCANNON,
"Gaussov top" => D_GAUSSCANNON,
"Plazma top" => D_PLASMACANNON,
"Mala štitna kupola" => D_SMALLSHIELDDOME,
"Velika štitna kupola" => D_LARGESHILDDOME,
"Anti-balističke rakete" => D_ANTIBALLISTICMISSILE,
"Interplanetarne rakete" => D_INTERPLANETARYMISSILE,

/*********************************************************************/
/*****************************  Buildings  ***************************/
/*********************************************************************/
"Rudnik metala" => B_METALMINE,
"Rudnik kristala" => B_CRYSTALMINE,
"Sintizer deuterija" => B_DEUTERIUMSYNTHESIZER,
"Solarna elektrana" => B_SOLARPLANT,
"Fuzijska elektrana" => B_FUSIONPLANT,
"Tvornica robota" => B_ROBOTFACTORY,
"Tvornica nanita" => B_NANITEFACTORY,
"Brodogradilište" => B_SHIPYARD,
"Spremnik metala" => B_METALSTORAGE,
"Spremnik kristala" => B_CRYSTALSTORAGE,
"Spremnik deuterija" => B_DEUTERIUMTANK,
"Centar za istraživanje" => B_RESAERCHLAB,
"Terraformer" => B_TERRAFORMER,
"Depo saveza" => B_ALLIANCEDEPOT,
"Silos za rakete" => B_ROCKETSILO,
"Svemirska baza na mjesecu" => B_LUNARBASE,
"Senzorfalanga" => B_SENSORPHALANX,
"Odskočna vrata" => B_JUMPGATE,

/*********************************************************************/
/*****************************  Research   ***************************/
/*********************************************************************/
"Tehnologija za špijunažu" => RS_ESPIONAGE,
"Tehnologija za kompjutere" => RS_COMPUTER,
"Tehnologija za oružje" => RS_WEAPON,
"Tehnologija za štitove" => RS_SHIELDING,
"Tehnologija za oklop" => RS_ARMOUR,
"Tehnologija za energiju" => RS_ENERGY,
"Tehnologija za hiperzonu" => RS_HYPERSPACE,
"Mehanizam sagorjevanja" => RS_COMBUSTIONENGINE,
"Impulsni pogon" => RS_IMPULSEENGINE,
"Hyperspace pogon" => RS_HYPERSPACEENGINE,
"Tehnologija za lasere" => RS_LASER,
"Tehnologija za ione" => RS_ION,
"Tehnologija za plazmu" => RS_PLASMA,
"Intergalaktična znanstvena mreža" => RS_IRNETWORK,
"Astrofizika" => RS_EXPEDITION,
"Tehnologija za gravitone" => RS_GRAVITON
);

?>