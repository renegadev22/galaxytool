<?php

@include_once "english_probes.inc.php";

$moon_name = "Mēness";

$report_when = "";

$top_array = array(
"Resursi uz" => R_RESOURCES,
"flote" => F_FLEET,
"Aizsardzība" => D_DEFENCE,
"Celtne" => B_BUILDINGS,
"Pētniecība" => RS_RESEARCH
);

$probe_array = array(
/*********************************************************************/
/***************************  Resources  *****************************/
/*********************************************************************/
"Metāls" => R_METAL,
"Kristāls" => R_CRYSTAL,
"Deitērijs" => R_DEUTERIUM,
"Enerģija" => R_ENERGY,

/*********************************************************************/
/*****************************  Fleet   ******************************/
/*********************************************************************/
"Mazais kravas kuģis" => F_SMALLCARGOSHIP,
"Lielais kravas kuģis" => F_LARGECARGOSHIP,
"Vieglais karotājs" => F_LIGHFIGHTER,
"Smagais karotājs" => F_HEAVYFIGHTER,
"Kreiseris" => F_CRUISER,
"Kaujas kuģis" => F_BATTLESHIP,
"Kolonizēšanas kuģis" => F_COLONYSHIP,
"Pārstrādātājs" => F_RECYCLER,
"Spiegošanas zonde" => F_ESPIONAGEPROBE,
"Bombardieris" => F_BOMBER,
"Iznīcinātājs" => F_DESTROYER,
"Nāves zvaigzne" => F_DEATHSTAR,
"Kaujas kreiseris" => F_BATTLECRUISER,
"Solārais satelīts" => F_SOLARSATELLITE,

/*********************************************************************/
/**************************  Defense  ********************************/
/*********************************************************************/
"Raķešu palaidējs" => D_MISSILELAUNCHER,
"Vieglais lāzeris" => D_SMALLLASER,
"Smagais lāzeris" => D_HEAVYLASER,
"Jona lielgabals" => D_IONCANNON,
"Gausa lielgabals" => D_GAUSSCANNON,
"Plazmas lielgabals" => D_PLASMACANNON,
"Mazais aizsargvairogs" => D_SMALLSHIELDDOME,
"Lielais aizsargvairogs" => D_LARGESHILDDOME,
"Anti ballistiskās raķetes" => D_ANTIBALLISTICMISSILE,
"Interplanetārās raķetes" => D_INTERPLANETARYMISSILE,

/*********************************************************************/
/*****************************  Buildings  ***************************/
/*********************************************************************/
"Metāla raktuve" => B_METALMINE,
"Kristāla raktuve" => B_CRYSTALMINE,
"Deitērija sintezators" => B_DEUTERIUMSYNTHESIZER,
"Solārā stacija" => B_SOLARPLANT,
"Atomelektrostacija" => B_FUSIONPLANT,
"Robottehnikas Rūpnīca" => B_ROBOTFACTORY,
"Nanīta rūpnīca" => B_NANITEFACTORY,
"Kuģu būvētava" => B_SHIPYARD,
"Metāla glabātuve" => B_METALSTORAGE,
"Kristāla glabātuve" => B_CRYSTALSTORAGE,
"Deitērija tanks" => B_DEUTERIUMTANK,
"Pētniecības laboratorija" => B_RESAERCHLAB,
"Zemes pārveidotājs" => B_TERRAFORMER,
"Alianses Noliktava" => B_ALLIANCEDEPOT,
"Raķešu novietnes" => B_ROCKETSILO,
"Mēness bāze" => B_LUNARBASE,
"Sensoru falanga" => B_SENSORPHALANX,
"Lēkšanas vārti" => B_JUMPGATE,

/*********************************************************************/
/*****************************  Research   ***************************/
/*********************************************************************/
"Spiegošanas tehnoloģija" => RS_ESPIONAGE,
"Datorsistēmas" => RS_COMPUTER,
"Ieroču tehnoloģija" => RS_WEAPON,
"Aizsargkupola tehnoloģija" => RS_SHIELDING,
"Aizsardzības tehnoloģija" => RS_ARMOUR,
"Enerģijas tehnoloģija" => RS_ENERGY,
"Hiperātruma tehnoloģija" => RS_HYPERSPACE,
"Oksidēšanās Dzinējs" => RS_COMBUSTIONENGINE,
"Impulsa Dzinējs" => RS_IMPULSEENGINE,
"Hiperātruma Dzinējs" => RS_HYPERSPACEENGINE,
"Lāzera tehnoloģija" => RS_LASER,
"Jonu tehnoloģija" => RS_ION,
"Plazmas tehnoloģija" => RS_PLASMA,
"Intergalaktiskais Pētniecības tīkls" => RS_IRNETWORK,
"Astrofizika" => RS_EXPEDITION,
"Gravitācijas tehnoloģija" => RS_GRAVITON


);


?>