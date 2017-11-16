<?php

@include_once "english_probes.inc.php";

$moon_name = "Księżyc";
$report_when = "z dnia"; //redesign

$top_array = array(
"Surowce na" => R_RESOURCES,
"Floty" => F_FLEET,
"Obrona" => D_DEFENCE,
"Budynek" => B_BUILDINGS, //redesign
"Badania" => RS_RESEARCH
);

$probe_array = array(
/*********************************************************************/
/*****************************  Resources  ***************************/
/*********************************************************************/
"Metal" => R_METAL,
"Kryształ" => R_CRYSTAL,
"Deuter" => R_DEUTERIUM,
"Energia" => R_ENERGY,

/*********************************************************************/
/*****************************  Fleet   ******************************/
/*********************************************************************/
"Mały transporter" => F_SMALLCARGOSHIP,
"Duży transporter" => F_LARGECARGOSHIP,
"Lekki myśliwiec" => F_LIGHFIGHTER,
"Ciężki myśliwiec" => F_HEAVYFIGHTER,
"Krążownik" => F_CRUISER,
"Okręt wojenny" => F_BATTLESHIP,
"Statek kolonizacyjny" => F_COLONYSHIP,
"Recykler" => F_RECYCLER,
"Sonda szpiegowska" => F_ESPIONAGEPROBE,
"Bombowiec" => F_BOMBER,
"Niszczyciel" => F_DESTROYER,
"Gwiazda Śmierci" => F_DEATHSTAR,
"Pancernik" => F_BATTLECRUISER,
"Satelita słoneczny" => F_SOLARSATELLITE,

/*********************************************************************/
/**************************  Defense  ********************************/
/*********************************************************************/
"Wyrzutnia rakiet" => D_MISSILELAUNCHER,
"Lekkie działo laserowe" => D_SMALLLASER,
"Ciężkie działo laserowe" => D_HEAVYLASER,
"Działo jonowe" => D_IONCANNON,
"Działo Gaussa" => D_GAUSSCANNON,
"Wyrzutnia plazmy" => D_PLASMACANNON,
"Mała powłoka ochronna" => D_SMALLSHIELDDOME,
"Duża powłoka ochronna" => D_LARGESHILDDOME,
"Przeciwrakieta" => D_ANTIBALLISTICMISSILE,
"Rakieta międzyplanetarna" => D_INTERPLANETARYMISSILE,

/*********************************************************************/
/*****************************  Buildings  ***************************/
/*********************************************************************/
"Kopalnia metalu" => B_METALMINE,
"Kopalnia kryształu" => B_CRYSTALMINE,
"Ekstraktor deuteru" => B_DEUTERIUMSYNTHESIZER,
"Elektrownia słoneczna" => B_SOLARPLANT,
"Elektrownia fuzyjna" => B_FUSIONPLANT,
"Fabryka robotów" => B_ROBOTFACTORY,
"Fabryka nanitów" => B_NANITEFACTORY,
"Stocznia" => B_SHIPYARD,
"Magazyn metalu" => B_METALSTORAGE,
"Magazyn kryształu" => B_CRYSTALSTORAGE,
"Zbiornik deuteru" => B_DEUTERIUMTANK,
"Laboratorium badawcze" => B_RESAERCHLAB,
"Terraformer" => B_TERRAFORMER,
"Depozyt sojuszniczy" => B_ALLIANCEDEPOT,
"Silos rakietowy" => B_ROCKETSILO,
"Stacja księżycowa" => B_LUNARBASE,
"Falanga czujników" => B_SENSORPHALANX,
"Teleporter" => B_JUMPGATE,

/*********************************************************************/
/*****************************  Research   ***************************/
/*********************************************************************/
"Technologia szpiegowska" => RS_ESPIONAGE,
"Technologia komputerowa" => RS_COMPUTER,
"Technologia bojowa" => RS_WEAPON,
"Technologia ochronna" => RS_SHIELDING,
"Opancerzenie" => RS_ARMOUR,
"Technologia energetyczna" => RS_ENERGY,
"Technologia nadprzestrzenna" => RS_HYPERSPACE,
"Napęd spalinowy" => RS_COMBUSTIONENGINE,
"Napęd impulsowy" => RS_IMPULSEENGINE,
"Napęd nadprzestrzenny" => RS_HYPERSPACEENGINE,
"Technologia laserowa" => RS_LASER,
"Technologia jonowa" => RS_ION,
"Technologia plazmowa" => RS_PLASMA,
"Międzygalaktyczna Sieć Badań Naukowych" => RS_IRNETWORK,
"Astrofizyka" => RS_EXPEDITION,
"Rozwój grawitonów" => RS_GRAVITON
);

?>