<?php

@include_once "english_probes.inc.php";

$moon_name = "Lua";
$report_when = "em"; //redesign

$top_array = array(
"Recursos em" => R_RESOURCES,
"Frotas" => F_FLEET,
"Defesas" => D_DEFENCE, //redesign
"Edifícios" => B_BUILDINGS,
"Pesquisas" => RS_RESEARCH
);

$probe_array = array(
/*********************************************************************/
/***************************  Resources  *****************************/
/*********************************************************************/
"Metal" => R_METAL,
"Cristal" => R_CRYSTAL,
"Deutério" => R_DEUTERIUM,
"Energia" => R_ENERGY,

/*********************************************************************/
/*****************************  Fleet   ******************************/
/*********************************************************************/
"Cargueiro Pequeno" => F_SMALLCARGOSHIP,
"Cargueiro Grande" => F_LARGECARGOSHIP,
"Caça Ligeiro" => F_LIGHFIGHTER,
"Caça Pesado" => F_HEAVYFIGHTER,
"Cruzador" => F_CRUISER,
"Nave de Batalha" => F_BATTLESHIP,
"Nave de Colonização" => F_COLONYSHIP,
"Reciclador" => F_RECYCLER,
"Sonda de Espionagem" => F_ESPIONAGEPROBE,
"Bombardeiro" => F_BOMBER,
"Destruidor" => F_DESTROYER,
"Estrela da Morte" => F_DEATHSTAR,
"Interceptor" => F_BATTLECRUISER,
"Satélite Solar" => F_SOLARSATELLITE,

/*********************************************************************/
/**************************  Defense  ********************************/
/*********************************************************************/
"Lançador de Mísseis" => D_MISSILELAUNCHER,
"Laser Ligeiro" => D_SMALLLASER,
"Laser Pesado" => D_HEAVYLASER,
"Canhão de Iões" => D_IONCANNON,
"Canhão de Gauss" => D_GAUSSCANNON,
"Canhão de Plasma" => D_PLASMACANNON,
"Pequeno Escudo Planetário" => D_SMALLSHIELDDOME,
"Grande Escudo Planetário" => D_LARGESHILDDOME,
"Míssil de Intercepção" => D_ANTIBALLISTICMISSILE,
"Míssil Interplanetário" => D_INTERPLANETARYMISSILE,

/*********************************************************************/
/*****************************  Buildings  ***************************/
/*********************************************************************/
"Mina de Metal" => B_METALMINE,
"Mina de Cristal" => B_CRYSTALMINE,
"Sintetizador de Deutério" => B_DEUTERIUMSYNTHESIZER,
"Planta de Energia Solar" => B_SOLARPLANT,
"Planta de Fusão" => B_FUSIONPLANT,
"Fábrica de Robots" => B_ROBOTFACTORY,
"Fábrica de Nanites" => B_NANITEFACTORY,
"Hangar" => B_SHIPYARD,
"Armazém de Metal" => B_METALSTORAGE,
"Armazém de Cristal" => B_CRYSTALSTORAGE,
"Tanque de Deutério" => B_DEUTERIUMTANK,
"Laboratório de Pesquisas" => B_RESAERCHLAB,
"Terra-Formador" => B_TERRAFORMER,
"Depósito da Aliança" => B_ALLIANCEDEPOT,
"Silo de Mísseis" => B_ROCKETSILO,
"Base Lunar" => B_LUNARBASE,
"Sensor Phalanx" => B_SENSORPHALANX,
"Portal de Salto Quântico" => B_JUMPGATE,

/*********************************************************************/
/*****************************  Research   ***************************/
/*********************************************************************/
"Tecnologia de Espionagem" => RS_ESPIONAGE,
"Tecnologia de Computadores" => RS_COMPUTER,
"Tecnologia de Armas" => RS_WEAPON,
"Tecnologia de Escudo" => RS_SHIELDING,
"Tecnologia de Blindagem" => RS_ARMOUR,
"Tecnologia de Energia" => RS_ENERGY,
"Tecnologia de Hiperespaço" => RS_HYPERSPACE,
"Motor de Combustão" => RS_COMBUSTIONENGINE,
"Motor de Impulsão" => RS_IMPULSEENGINE,
"Motor Propulsor de Hiperespaço" => RS_HYPERSPACEENGINE,
"Tecnologia Laser" => RS_LASER,
"Tecnologia de Iões" => RS_ION,
"Tecnologia de Plasma" => RS_PLASMA,
"Rede Intergaláctica de Pesquisas" => RS_IRNETWORK,
"Astrofísica" => RS_EXPEDITION,
"Tecnologia de Gravitação" => RS_GRAVITON
);


?>