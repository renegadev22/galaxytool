<?php

$moon_name = "Moon";
$report_when = "on";

$top_array = array(
"Resources at" => "Resources at",
"Fleets" => "Fleets",
"Defense" => "Defense",
"Buildings" => "Buildings",
"Research" => "Research"
);

/*********************************************************************/
/***************************  Resources  *****************************/
/*********************************************************************/
define("R_RESOURCES", "Resources at");
define("R_METAL", "Metal");
define("R_CRYSTAL", "Crystal");
define("R_DEUTERIUM", "Deuterium");
define("R_ENERGY", "Energy");

/*********************************************************************/
/*****************************  Fleet   ******************************/
/*********************************************************************/
define("F_FLEET", "Fleets");
define("F_SMALLCARGOSHIP", "Small Cargo");
define("F_LARGECARGOSHIP", "Large Cargo");
define("F_LIGHFIGHTER", "Light Fighter");
define("F_HEAVYFIGHTER", "Heavy Fighter");
define("F_CRUISER", "Cruiser");
define("F_BATTLESHIP", "Battleship");
define("F_COLONYSHIP", "Colony Ship");
define("F_RECYCLER", "Recycler");
define("F_ESPIONAGEPROBE", "Espionage Probe");
define("F_BOMBER", "Bomber");
define("F_DESTROYER", "Destroyer");
define("F_DEATHSTAR", "Deathstar");
define("F_BATTLECRUISER","Battlecruiser");
define("F_SOLARSATELLITE", "Solar Satellite");

/*********************************************************************/
/**************************  Defense  ********************************/
/*********************************************************************/
define("D_DEFENCE", "Defense");
define("D_MISSILELAUNCHER", "Rocket Launcher");
define("D_SMALLLASER", "Light Laser");
define("D_HEAVYLASER", "Heavy Laser");
define("D_IONCANNON", "Ion Cannon");
define("D_GAUSSCANNON", "Gauss Cannon");
define("D_PLASMACANNON", "Plasma Turret");
define("D_SMALLSHIELDDOME", "Small Shield Dome");
define("D_LARGESHILDDOME", "Large Shield Dome");
define("D_ANTIBALLISTICMISSILE", "Anti-Ballistic Missiles");
define("D_INTERPLANETARYMISSILE", "Interplanetary Missiles");


/*********************************************************************/
/*****************************  Buildings  ***************************/
/*********************************************************************/
define("B_BUILDINGS", "Buildings");
define("B_METALMINE", "Metal Mine");
define("B_CRYSTALMINE", "Crystal Mine");
define("B_DEUTERIUMSYNTHESIZER", "Deuterium Synthesizer");
define("B_SOLARPLANT", "Solar Plant");
define("B_FUSIONPLANT", "Fusion Reactor");
define("B_ROBOTFACTORY", "Robotics Factory");
define("B_NANITEFACTORY", "Nanite Factory");
define("B_SHIPYARD", "Shipyard");
define("B_METALSTORAGE", "Metal Storage");
define("B_CRYSTALSTORAGE", "Crystal Storage");
define("B_DEUTERIUMTANK", "Deuterium Tank");
define("B_RESAERCHLAB", "Research Lab");
define("B_TERRAFORMER", "Terraformer");
define("B_ALLIANCEDEPOT", "Alliance Depot");
define("B_ROCKETSILO", "Missile Silo");
define("B_LUNARBASE", "Lunar Base");
define("B_SENSORPHALANX", "Sensor Phalanx");
define("B_JUMPGATE", "Jump Gate");

/*********************************************************************/
/***************************** Research ****************************/
/*********************************************************************/
define("RS_RESEARCH", "Research");
define("RS_ESPIONAGE", "Espionage Technology");
define("RS_COMPUTER", "Computer Technology");
define("RS_WEAPON", "Weapons Technology");
define("RS_SHIELDING", "Shielding Technology");
define("RS_ARMOUR", "Armour Technology"); // is spelled "Armor Technology" in .us
define("RS_ENERGY", "Energy Technology");
define("RS_HYPERSPACE", "Hyperspace Technology");
define("RS_COMBUSTIONENGINE", "Combustion Drive");
define("RS_IMPULSEENGINE", "Impulse Drive");
define("RS_HYPERSPACEENGINE", "Hyperspace Drive");
define("RS_LASER", "Laser Technology");
define("RS_ION", "Ion Technology");
define("RS_PLASMA", "Plasma Technology");
define("RS_IRNETWORK", "Intergalactic Research Network");
define("RS_EXPEDITION","Astrophysics");
define("RS_GRAVITON", "Graviton Technology");

/*********************************************************************/
/**************  Do not translate the stuff below ********************/
/*********************************************************************/
$probe_array = array(
R_METAL => R_METAL,
R_CRYSTAL => R_CRYSTAL,
R_DEUTERIUM => R_DEUTERIUM,
R_ENERGY => R_ENERGY,
F_SMALLCARGOSHIP => F_SMALLCARGOSHIP,
F_LARGECARGOSHIP => F_LARGECARGOSHIP,
F_LIGHFIGHTER => F_LIGHFIGHTER,
F_HEAVYFIGHTER => F_HEAVYFIGHTER,
F_CRUISER => F_CRUISER,
F_BATTLESHIP => F_BATTLESHIP,
F_COLONYSHIP => F_COLONYSHIP,
F_RECYCLER => F_RECYCLER,
F_ESPIONAGEPROBE => F_ESPIONAGEPROBE,
F_BOMBER => F_BOMBER,
F_DESTROYER => F_DESTROYER,
F_DEATHSTAR => F_DEATHSTAR,
F_BATTLECRUISER => F_BATTLECRUISER,
F_SOLARSATELLITE => F_SOLARSATELLITE,
D_MISSILELAUNCHER => D_MISSILELAUNCHER,
D_SMALLLASER => D_SMALLLASER,
D_HEAVYLASER => D_HEAVYLASER,
D_IONCANNON => D_IONCANNON,
D_GAUSSCANNON => D_GAUSSCANNON,
D_PLASMACANNON => D_PLASMACANNON,
D_SMALLSHIELDDOME => D_SMALLSHIELDDOME,
D_LARGESHILDDOME => D_LARGESHILDDOME,
D_ANTIBALLISTICMISSILE => D_ANTIBALLISTICMISSILE,
D_INTERPLANETARYMISSILE => D_INTERPLANETARYMISSILE,
B_METALMINE => B_METALMINE,
B_CRYSTALMINE => B_CRYSTALMINE,
B_DEUTERIUMSYNTHESIZER => B_DEUTERIUMSYNTHESIZER,
B_SOLARPLANT => B_SOLARPLANT,
B_FUSIONPLANT => B_FUSIONPLANT,
B_ROBOTFACTORY => B_ROBOTFACTORY,
B_NANITEFACTORY => B_NANITEFACTORY,
B_SHIPYARD => B_SHIPYARD,
B_METALSTORAGE => B_METALSTORAGE,
B_CRYSTALSTORAGE => B_CRYSTALSTORAGE,
B_DEUTERIUMTANK => B_DEUTERIUMTANK,
B_RESAERCHLAB => B_RESAERCHLAB,
B_TERRAFORMER => B_TERRAFORMER,
B_ALLIANCEDEPOT => B_ALLIANCEDEPOT,
B_ROCKETSILO => B_ROCKETSILO,
B_LUNARBASE => B_LUNARBASE,
B_SENSORPHALANX => B_SENSORPHALANX,
B_JUMPGATE => B_JUMPGATE,
RS_ESPIONAGE => RS_ESPIONAGE,
RS_COMPUTER => RS_COMPUTER,
RS_WEAPON => RS_WEAPON,
RS_SHIELDING => RS_SHIELDING,
RS_ARMOUR => RS_ARMOUR,
RS_ENERGY => RS_ENERGY,
RS_HYPERSPACE => RS_HYPERSPACE,
RS_COMBUSTIONENGINE => RS_COMBUSTIONENGINE,
RS_IMPULSEENGINE => RS_IMPULSEENGINE,
RS_HYPERSPACEENGINE => RS_HYPERSPACEENGINE,
RS_LASER => RS_LASER,
RS_ION => RS_ION,
RS_PLASMA => RS_PLASMA,
RS_IRNETWORK => RS_IRNETWORK,
RS_EXPEDITION => RS_EXPEDITION,
RS_GRAVITON => RS_GRAVITON
);
?>