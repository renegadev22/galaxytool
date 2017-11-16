<?php
@include_once "english_probes.inc.php";

$moon_name = "Lune";
$report_when = "le";

$top_array = array(
"Ressources sur" => R_RESOURCES,
"Flottes" => F_FLEET,
"Défense" => D_DEFENCE,
"Bâtiment" => B_BUILDINGS,
"Recherche" => RS_RESEARCH
);

$probe_array = array(
/*********************************************************************/
/***************************  Resources  *****************************/
/*********************************************************************/
"Métal" => R_METAL,
"Cristal" => R_CRYSTAL,
"Deutérium" => R_DEUTERIUM,
"Energie" => R_ENERGY,

/*********************************************************************/
/*****************************  Fleet   ******************************/
/*********************************************************************/
"Petit transporteur" => F_SMALLCARGOSHIP,
"Grand transporteur" => F_LARGECARGOSHIP,
"Chasseur léger" => F_LIGHFIGHTER,
"Chasseur lourd" => F_HEAVYFIGHTER,
"Croiseur" => F_CRUISER,
"Vaisseau de bataille" => F_BATTLESHIP,
"Vaisseau de colonisation" => F_COLONYSHIP,
"Recycleur" => F_RECYCLER,
"Sonde d`espionnage" => F_ESPIONAGEPROBE,
"Bombardier" => F_BOMBER,
"Destructeur" => F_DESTROYER,
"Étoile de la mort" => F_DEATHSTAR,
"Traqueur" => F_BATTLECRUISER,
"Satellite solaire" => F_SOLARSATELLITE,

/*********************************************************************/
/**************************  Defense  ********************************/
/*********************************************************************/
"Lanceur de missiles" => D_MISSILELAUNCHER,
"Artillerie laser légère" => D_SMALLLASER,
"Artillerie laser lourde" => D_HEAVYLASER,
"Artillerie à ions" => D_IONCANNON,
"Canon de Gauss" => D_GAUSSCANNON,
"Lanceur de plasma" => D_PLASMACANNON,
"Petit bouclier" => D_SMALLSHIELDDOME,
"Grand bouclier" => D_LARGESHILDDOME,
"Missile d`interception" => D_ANTIBALLISTICMISSILE,
"Missile Interplanétaire" => D_INTERPLANETARYMISSILE,

/*********************************************************************/
/*****************************  Buildings  ***************************/
/*********************************************************************/
"Mine de métal" => B_METALMINE,
"Mine de cristal" => B_CRYSTALMINE,
"Synthétiseur de deutérium" => B_DEUTERIUMSYNTHESIZER,
"Centrale électrique solaire" => B_SOLARPLANT,
"Centrale électrique de fusion" => B_FUSIONPLANT,
"Usine de robots" => B_ROBOTFACTORY,
"Usine de nanites" => B_NANITEFACTORY,
"Chantier spatial" => B_SHIPYARD,
"Hangar de métal" => B_METALSTORAGE,
"Hangar de cristal" => B_CRYSTALSTORAGE,
"Réservoir de deutérium" => B_DEUTERIUMTANK,
"Laboratoire de recherche" => B_RESAERCHLAB,
"Terraformeur" => B_TERRAFORMER,
"Dépôt de ravitaillement" => B_ALLIANCEDEPOT,
"Silo de missiles" => B_ROCKETSILO,
"Base lunaire" => B_LUNARBASE,
"Phalange de capteur" => B_SENSORPHALANX,
"Porte de saut spatial" => B_JUMPGATE,

/*********************************************************************/
/*****************************  Research   ***************************/
/*********************************************************************/
"Technologie Espionnage" => RS_ESPIONAGE,
"Technologie Ordinateur" => RS_COMPUTER,
"Technologie Armes" => RS_WEAPON,
"Technologie Bouclier" => RS_SHIELDING,
"Technologie Protection des vaisseaux spatiaux" => RS_ARMOUR,
"Technologie Energie" => RS_ENERGY,
"Technologie Hyperespace" => RS_HYPERSPACE,
"Réacteur à combustion" => RS_COMBUSTIONENGINE,
"Réacteur à impulsion" => RS_IMPULSEENGINE,
"Propulsion hyperespace" => RS_HYPERSPACEENGINE,
"Technologie Laser" => RS_LASER,
"Technologie Ions" => RS_ION,
"Technologie Plasma" => RS_PLASMA,
"Réseau de recherche intergalactique" => RS_IRNETWORK,
"Astrophysique" => RS_EXPEDITION,
"Technologie Graviton" => RS_GRAVITON
);
?>
