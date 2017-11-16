<?php
/* OGame.ba only - there is also rs, si and  hr */

@include_once "english_probes.inc.php";

$moon_name = "Mjesec";
$report_when = "";

$top_array = array(
"Resursi na" => R_RESOURCES,
"Slotovi" => F_FLEET,
"Obrana" => D_DEFENCE,
"Zgrade" => B_BUILDINGS,
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
"Krstarice" => F_CRUISER,
"Borbeni brodovi" => F_BATTLESHIP,
"Kolonijalni brod" => F_COLONYSHIP,
"Recikler" => F_RECYCLER,
"Sonde za spijunazu" => F_ESPIONAGEPROBE,
"Bombarder" => F_BOMBER,
"Razaraci" => F_DESTROYER,
"Zvijezda smrti" => F_DEATHSTAR,
"Oklopna krstarica" => F_BATTLECRUISER,
"Solarni satelit" => F_SOLARSATELLITE,

/*********************************************************************/
/**************************  Defense  ********************************/
/*********************************************************************/
"Raketobacaci" => D_MISSILELAUNCHER,
"Mali laser" => D_SMALLLASER,
"Veliki laser" => D_HEAVYLASER,
"Ionski top" => D_IONCANNON,
"Gausov top" => D_GAUSSCANNON,
"Plazma top" => D_PLASMACANNON,
"Mala stitna kupola" => D_SMALLSHIELDDOME,
"Velika stitna kupola" => D_LARGESHILDDOME,
"Anti-balisticke rakete" => D_ANTIBALLISTICMISSILE,
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
"Tvornica brodova" => B_SHIPYARD,
"Spremnik metala" => B_METALSTORAGE,
"Spremnik kristala" => B_CRYSTALSTORAGE,
"Spremnik deuterija" => B_DEUTERIUMTANK,
"Centar za istrazivanje" => B_RESAERCHLAB,
"Terraformer" => B_TERRAFORMER,
"Depo saveza" => B_ALLIANCEDEPOT,
"Silos za rakete" => B_ROCKETSILO,
"Svemirska baza na mjesecu" => B_LUNARBASE,
"Senzorfalanga" => B_SENSORPHALANX,
"Odskocna vrata" => B_JUMPGATE,

/*********************************************************************/
/*****************************  Research   ***************************/
/*********************************************************************/
"Tehnologija za spijunazu" => RS_ESPIONAGE,
"Tehnologija za kompjutere" => RS_COMPUTER,
"Tehnologija za oruzje" => RS_WEAPON,
"Tehnologija za stitove" => RS_SHIELDING,
"Tehnologija za oklop" => RS_ARMOUR,
"Tehnologija za energiju" => RS_ENERGY,
"Tehnologija za hiperzonu" => RS_HYPERSPACE,
"Mehanizam sagorjevanja" => RS_COMBUSTIONENGINE,
"Impulsni pogon" => RS_IMPULSEENGINE,
"Hyperspace pogon" => RS_HYPERSPACEENGINE,
"Tehnologija za lasere" => RS_LASER,
"Tehnologija za ione" => RS_ION,
"Tehnologija za plazmu" => RS_PLASMA,
"Intergalakticna znanstvena mreza" => RS_IRNETWORK,
"Astrofizika" => RS_EXPEDITION,
"Tehnologija za gravitone" => RS_GRAVITON
);


?>
