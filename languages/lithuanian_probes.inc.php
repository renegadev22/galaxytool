<?php

@include_once "english_probes.inc.php";

$moon_name = "Palydovas";
$report_when = "";

$top_array = array(
"Resursų" => R_RESOURCES,
"Laivynai" => F_FLEET,
"Gynyba" => D_DEFENCE, 
"Pastatas" => B_BUILDINGS,
"Išradimai" => RS_RESEARCH
);

$probe_array = array(
/*********************************************************************/
/*****************************  Resources  ***************************/
/*********************************************************************/
"Metalas" => R_METAL,
"Kristalai" => R_CRYSTAL,
"Deuteris" => R_DEUTERIUM,
"Energija" => R_ENERGY,

/*********************************************************************/
/*****************************  Fleet   ******************************/
/*********************************************************************/
"Mažas Krovininis Laivas" => F_SMALLCARGOSHIP,
"Didelis Krovininis Laivas" => F_LARGECARGOSHIP,
"Lengvas Kovinis Laivas" => F_LIGHFIGHTER,
"Sunkus Kovinis Laivas" => F_HEAVYFIGHTER,
"Kreiseris" => F_CRUISER,
"Šarvuotis" => F_BATTLESHIP,
"Kolonijinis laivas" => F_COLONYSHIP,
"Perdirbėjas" => F_RECYCLER,
"Šnipinėjimo Zondas" => F_ESPIONAGEPROBE,
"Bombonešis" => F_BOMBER,
"Naikintojas" => F_DESTROYER,
"Mirties Žvaigždė" => F_DEATHSTAR,
"Linijinis Kreiseris" => F_BATTLECRUISER,
"Saulės Satelitas" => F_SOLARSATELLITE,

/*********************************************************************/
/**************************  Defense  ********************************/
/*********************************************************************/
"Raketsvaidis" => D_MISSILELAUNCHER,
"Lengvas Lazeris" => D_SMALLLASER,
"Sunkus Lazeris" => D_HEAVYLASER,
"Jonų Pabūklas" => D_IONCANNON,
"Gauso Pabūklas" => D_GAUSSCANNON,
"Plazmos pabūklas" => D_PLASMACANNON,
"Mažas Skydo Kupolas" => D_SMALLSHIELDDOME,
"Didelis Skydo Kupolas" => D_LARGESHILDDOME,
"Antibalistinės Raketos" => D_ANTIBALLISTICMISSILE,
"Tarpplanetinės Raketos" => D_INTERPLANETARYMISSILE,

/*********************************************************************/
/*****************************  Buildings  ***************************/
/*********************************************************************/
"Metalo Kasykla" => B_METALMINE,
"Kristalų Kasykla" => B_CRYSTALMINE,
"Deuterio Sintetintuvas" => B_DEUTERIUMSYNTHESIZER,
"Saulės Jėgainė" => B_SOLARPLANT,
"Jungimosi Reaktorius" => B_FUSIONPLANT,
"Robotų Gamykla" => B_ROBOTFACTORY,
"Nanitų Gamykla" => B_NANITEFACTORY,
"Laivų Statykla" => B_SHIPYARD,
"Metalo Saugykla" => B_METALSTORAGE,
"Kristalų Saugykla" => B_CRYSTALSTORAGE,
"Deuterio Saugykla" => B_DEUTERIUMTANK,
"Išradimų Laboratorija" => B_RESAERCHLAB,
"Teraformeris" => B_TERRAFORMER,
"Sąjungos Saugykla" => B_ALLIANCEDEPOT,
"Raketų Šachta" => B_ROCKETSILO,
"Palydovo Stotis" => B_LUNARBASE,
"Sensorių Falanga" => B_SENSORPHALANX,
"Šuoliniai Vartai" => B_JUMPGATE,

/*********************************************************************/
/*****************************  Research   ***************************/
/*********************************************************************/
"Šnipinėjimo Technologija" => RS_ESPIONAGE,
"Kompiuterių Technologija" => RS_COMPUTER,
"Ginklų Technologija" => RS_WEAPON,
"Skydų Technologija" => RS_SHIELDING,
"Šarvų Technologija" => RS_ARMOUR,
"Energijos Technologija" => RS_ENERGY,
"Hiperkosmoso Technologija" => RS_HYPERSPACE,
"Reaktyvinis Variklis" => RS_COMBUSTIONENGINE,
"Impulsinis Variklis" => RS_IMPULSEENGINE,
"Hiperkosminis Variklis" => RS_HYPERSPACEENGINE,
"Lazerių Technologija" => RS_LASER,
"Jonų Technologija" => RS_ION,
"Plazminė Technologija" => RS_PLASMA,
"Tarpgalaktinis Išradimų Tinklas" => RS_IRNETWORK,
"Astrofizika" => RS_EXPEDITION,
"Gravitonų Technologija" => RS_GRAVITON
);

?>