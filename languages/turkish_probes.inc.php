<?php

@include_once "english_probes.inc.php";

$moon_name = "Ay";
$report_when = "de";

$top_array = array(
"üzerinde bulunan hammaddeler" => R_RESOURCES,
"Filolar" => F_FLEET,
"Savunma" => D_DEFENCE,
"Bina" => B_BUILDINGS,
"Araştırma" => RS_RESEARCH
);

$probe_array = array(
/*********************************************************************/
/*****************************  Resources  ***************************/
/*********************************************************************/
"Metal" => R_METAL,
"Kristal" => R_CRYSTAL,
"Deuterium" => R_DEUTERIUM,
"Enerji" => R_ENERGY,

/*********************************************************************/
/*****************************  Fleet   ******************************/
/*********************************************************************/
"Küçük Nakliye Gemisi" => F_SMALLCARGOSHIP,
"Büyük Nakliye Gemisi" => F_LARGECARGOSHIP,
"Hafif Avci" => F_LIGHFIGHTER,
"Agir Avci" => F_HEAVYFIGHTER,
"Kruvazör" => F_CRUISER,
"Komuta Gemisi" => F_BATTLESHIP,
"Koloni Gemisi" => F_COLONYSHIP,
"Geri Dönüsümcü" => F_RECYCLER,
"Casus Sondasi" => F_ESPIONAGEPROBE,
"Bombardiman Gemisi" => F_BOMBER,
"Muhrip" => F_DESTROYER,
"Ölüm Yildizi" => F_DEATHSTAR,
"Firkateyn" => F_BATTLECRUISER,
"Solar Uydu" => F_SOLARSATELLITE,

/*********************************************************************/
/**************************  Defense  ********************************/
/*********************************************************************/
"Roketatar" => D_MISSILELAUNCHER,
"Hafif Lazer Topu" => D_SMALLLASER,
"Agir Lazer Topu" => D_HEAVYLASER,
"Iyon Topu" => D_IONCANNON,
"Gaus Topu" => D_GAUSSCANNON,
"Plazma Aticilar" => D_PLASMACANNON,
"Küçük Kalkan Kubbesi" => D_SMALLSHIELDDOME,
"Büyük Kalkan Kubbesi" => D_LARGESHILDDOME,
"Yakaliyici Roketler" => D_ANTIBALLISTICMISSILE,
"Gezegenlerarasi Roketler" => D_INTERPLANETARYMISSILE,

/*********************************************************************/
/*****************************  Buildings  ***************************/
/*********************************************************************/
"Metal Madeni" => B_METALMINE,
"Kristal Madeni" => B_CRYSTALMINE,
"Deuterium Sentezleyicisi" => B_DEUTERIUMSYNTHESIZER,
"Solar Enerji Santrali" => B_SOLARPLANT,
"Füzyoenerji Santrali" => B_FUSIONPLANT,
"Robot Fabrikasi" => B_ROBOTFACTORY,
"Nanit Fabrikasi" => B_NANITEFACTORY,
"Uzay Tersanesi" => B_SHIPYARD,
"Metal Deposu" => B_METALSTORAGE,
"Kristal Deposu" => B_CRYSTALSTORAGE,
"Deuterium Tankeri" => B_DEUTERIUMTANK,
"Bilimsel Arastirma Labarotuvari" => B_RESAERCHLAB,
"Terraformer" => B_TERRAFORMER,
"Ittifak Deposu" => B_ALLIANCEDEPOT,
"Roket Silosu" => B_ROCKETSILO,
"Ay Merkez Istasyonu" => B_LUNARBASE,
"Radar Istasyonu" => B_SENSORPHALANX,
"Siçrama Geçidi" => B_JUMPGATE,

/*********************************************************************/
/*****************************  Research   ***************************/
/*********************************************************************/
"Casusluk Teknigi" => RS_ESPIONAGE,
"Bilgisayar Teknigi" => RS_COMPUTER,
"Silah Teknigi" => RS_WEAPON,
"Koruyucu Kalkan Teknigi" => RS_SHIELDING,
"Uzay Gemilerinin Zirhlandirilmasi" => RS_ARMOUR,
"Enerji Teknigi" => RS_ENERGY,
"Hiperuzay Teknigi" => RS_HYPERSPACE,
"Yanmali Motor Takimi" => RS_COMBUSTIONENGINE,
"Impuls( Içtepi ) Motortakimi" => RS_IMPULSEENGINE,
"Hiperuzay Iticisi" => RS_HYPERSPACEENGINE,
"Lazer Teknigi" => RS_LASER,
"Iyon Teknigi" => RS_ION,
"Plazma Teknigi" => RS_PLASMA,
"Galaksiler arasi arastirma agi" => RS_IRNETWORK,
"Astrofizik" => RS_EXPEDITION,
"Gravitasyon Arastirmasi" => RS_GRAVITON
);

?>
