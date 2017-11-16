<?php

@include_once "english_probes.inc.php";

$moon_name = "Luna";
$report_when = "a las"; //redesign

$top_array = array(
"Recursos en" => R_RESOURCES,
"Flotas" => F_FLEET,
"Defensa" => D_DEFENCE,
"Edificio" => B_BUILDINGS,
"Investigación" => RS_RESEARCH
);

$probe_array = array(
/*********************************************************************/
/***************************  Resources  *****************************/
/*********************************************************************/
"Metal" => R_METAL,
"Cristal" => R_CRYSTAL,
"Deuterio" => R_DEUTERIUM,
"Energía" => R_ENERGY,

/*********************************************************************/
/*****************************  Fleet   ******************************/
/*********************************************************************/
"Nave pequeña de carga" => F_SMALLCARGOSHIP,
"Nave grande de carga" => F_LARGECARGOSHIP,
"Cazador ligero" => F_LIGHFIGHTER,
"Cazador pesado" => F_HEAVYFIGHTER,
"Crucero" => F_CRUISER,
"Nave de batalla" => F_BATTLESHIP,
"Nave de la colonia" => F_COLONYSHIP,
"Reciclador" => F_RECYCLER,
"Sonda de espionaje" => F_ESPIONAGEPROBE,
"Bombardero" => F_BOMBER,
"Destructor" => F_DESTROYER,
"Estrella de la muerte" => F_DEATHSTAR,
"Acorazado" => F_BATTLECRUISER,
"Satélite solar" => F_SOLARSATELLITE,

/*********************************************************************/
/**************************  Defense  ********************************/
/*********************************************************************/
"Lanzamisiles" => D_MISSILELAUNCHER,
"Láser pequeño" => D_SMALLLASER,
"Láser grande" => D_HEAVYLASER,
"Cañón iónico" => D_IONCANNON,
"Cañón Gauss" => D_GAUSSCANNON,
"Cañón de plasma" => D_PLASMACANNON,
"Cúpula pequeña de protección" => D_SMALLSHIELDDOME,
"Cúpula grande de protección" => D_LARGESHILDDOME,
"Misiles antibalísticos" => D_ANTIBALLISTICMISSILE,
"Misil interplanetario" => D_INTERPLANETARYMISSILE,

/*********************************************************************/
/*****************************  Buildings  ***************************/
/*********************************************************************/
"Mina de metal" => B_METALMINE,
"Mina de cristal" => B_CRYSTALMINE,
"Sintetizador de deuterio" => B_DEUTERIUMSYNTHESIZER,
"Planta de energía solar" => B_SOLARPLANT,
"Planta de fusión" => B_FUSIONPLANT,
"Fábrica de Robots" => B_ROBOTFACTORY,
"Fábrica de Nanobots" => B_NANITEFACTORY,
"Hangar" => B_SHIPYARD,
"Almacén de metal" => B_METALSTORAGE,
"Almacén de cristal" => B_CRYSTALSTORAGE,
"Contenedor de deuterio" => B_DEUTERIUMTANK,
"Laboratorio de investigación" => B_RESAERCHLAB,
"Terraformer" => B_TERRAFORMER,
"Depósito de la alianza" => B_ALLIANCEDEPOT,
"Silo" => B_ROCKETSILO,
"Base lunar" => B_LUNARBASE,
"Sensor Phalanx" => B_SENSORPHALANX,
"Salto cuántico" => B_JUMPGATE,

/*********************************************************************/
/*****************************  Research   ***************************/
/*********************************************************************/
"Tecnología de espionaje" => RS_ESPIONAGE,
"Tecnología de computación" => RS_COMPUTER,
"Tecnología militar" => RS_WEAPON,
"Tecnología de defensa" => RS_SHIELDING,
"Tecnología de blindaje" => RS_ARMOUR,
"Tecnología de energía" => RS_ENERGY,
"Tecnología de hiperespacio" => RS_HYPERSPACE,
"Motor de combustión" => RS_COMBUSTIONENGINE,
"Motor de impulso" => RS_IMPULSEENGINE,
"Propulsor hiperespacial" => RS_HYPERSPACEENGINE,
"Tecnología láser" => RS_LASER,
"Tecnología iónica" => RS_ION,
"Tecnología de plasma" => RS_PLASMA,
"Red de investigación intergaláctica" => RS_IRNETWORK,
"Astrofísica" => RS_EXPEDITION,
"Tecnología de gravitón" => RS_GRAVITON
);


?>