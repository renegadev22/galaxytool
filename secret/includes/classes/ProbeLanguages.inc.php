<?php

/**
 * Provides functionality for report entity handling. Loads probe language file when contstructor is executed.
 * @author eX0du5
 *
 */
class ProbeLanguages {

	private $flipped_probe_array;
	private $flipped_top_array;
	public $report_when;

	// attention - this is a copy of the $db_array in parser_reports.inc.php! Always adjust both files if needed
	private $db_array = array( );

	function __construct() {
		switch ($_SESSION['lang']) {
		case "english":
			@require GALAXYTOOL_ROOT."/languages/english_probes.inc.php";
			break;
		case "german":
			@require GALAXYTOOL_ROOT."/languages/german_probes.inc.php";
			break;
		case "spanish":
			@require GALAXYTOOL_ROOT."/languages/spanish_probes.inc.php";
			break;
		case "dutch":
			@require GALAXYTOOL_ROOT."/languages/dutch_probes.inc.php";
			break;
		case "balkan":
			@require GALAXYTOOL_ROOT."/languages/balkan_probes.inc.php";
			break;
		case "french":
			@require GALAXYTOOL_ROOT."/languages/french_probes.inc.php";
			break;
		case "portugues":
			@require GALAXYTOOL_ROOT."/languages/portugues_probes.inc.php";
			break;
		case "polish":
			@require GALAXYTOOL_ROOT."/languages/polish_probes.inc.php";
			break;
		case "italian":
			@require GALAXYTOOL_ROOT."/languages/italian_probes.inc.php";
			break;
		case "turkish":
			@require GALAXYTOOL_ROOT."/languages/turkish_probes.inc.php";
			break;
		case "danish":
			@require GALAXYTOOL_ROOT."/languages/danish_probes.inc.php";
			break;
		case "brazilian":
			@require GALAXYTOOL_ROOT."/languages/brazilian_probes.inc.php";
			break;
		case "russian":
			@require GALAXYTOOL_ROOT."/languages/russian_probes.inc.php";
			break;
		case "swedish":
			@require GALAXYTOOL_ROOT."/languages/swedish_probes.inc.php";
			break;
		case "greek":
			@require GALAXYTOOL_ROOT."/languages/greek_probes.inc.php";
			break;
		case "romanian":
			@require GALAXYTOOL_ROOT."/languages/romanian_probes.inc.php";
			break;
		case "hungarian":
			@require GALAXYTOOL_ROOT."/languages/hungarian_probes.inc.php";
			break;
		case "czech":
			@require GALAXYTOOL_ROOT."/languages/czech_probes.inc.php";
			break;
		case "korean":
			@require GALAXYTOOL_ROOT."/languages/korean_probes.inc.php";
			break;
		case "norwegian":
			@require GALAXYTOOL_ROOT."/languages/norwegian_probes.inc.php";
			break;
		case "taiwan":
			@require GALAXYTOOL_ROOT."/languages/taiwan_probes.inc.php";
			break;
		case "japan":
			@require GALAXYTOOL_ROOT."/languages/japanese_probes.inc.php";
			break;
		case "chinese":
			@require GALAXYTOOL_ROOT."/languages/chinese_probes.inc.php";
			break;
		case "bulgarian":
			@require GALAXYTOOL_ROOT."/languages/bulgarian_probes.inc.php";
			break;
		case "lithuanian":
			@require GALAXYTOOL_ROOT."/languages/lithuanian_probes.inc.php";
			break;
		case "latvian":
			@require GALAXYTOOL_ROOT."/languages/latvian_probes.inc.php";
			break;
		case "finnish":
			@require GALAXYTOOL_ROOT."/languages/finnish_probes.inc.php";
			break;
		case "slovak":
			@require GALAXYTOOL_ROOT."/languages/slovak_probes.inc.php";
			break;
		case "croatian":
			@require GALAXYTOOL_ROOT."/languages/croatian_probes.inc.php";
			break;
		case "serbian":
			@require GALAXYTOOL_ROOT."/languages/serbian_probes.inc.php";
			break;
		case "slovenian":
			@require GALAXYTOOL_ROOT."/languages/slovenian_probes.inc.php";
			break;
		case "arabic":
			@require GALAXYTOOL_ROOT."/languages/arabic_probes.inc.php";
			break;
		default:
			@require GALAXYTOOL_ROOT."/languages/english_probes.inc.php";
			break;
		}

		if ($_SESSION['lang'] == "english") {
			// no need to flip
			$this->flipped_probe_array = $probe_array;
			$this->flipped_top_array = $top_array;
		} else {
			$this->flipped_probe_array = array_flip($probe_array);
			$this->flipped_top_array = array_flip($top_array);
		}
		$this->report_when = $report_when;

		$this->db_array = array(
			R_METAL => "metal",
			R_CRYSTAL => "crystal",
			R_DEUTERIUM => "deuterium",
			R_ENERGY => "energy",
			F_SMALLCARGOSHIP => "kt",
			F_LARGECARGOSHIP => "gt",
			F_LIGHFIGHTER => "lj",
			F_HEAVYFIGHTER => "sj",
			F_CRUISER => "krz",
			F_BATTLESHIP => "ss",
			F_COLONYSHIP => "kolo",
			F_RECYCLER => "rec",
			F_ESPIONAGEPROBE => "spio",
			F_BOMBER => "bomb",
			F_DESTROYER => "zerri",
			F_DEATHSTAR => "ds",
			F_BATTLECRUISER=>"skrz",
			F_SOLARSATELLITE => "sat",

			D_MISSILELAUNCHER => "rak",
			D_SMALLLASER => "ll",
			D_HEAVYLASER => "sl",
			D_IONCANNON => "ion",
			D_GAUSSCANNON => "gauss",
			D_PLASMACANNON => "plasma",
			D_SMALLSHIELDDOME => "ksk",
			D_LARGESHILDDOME => "gsk",
			D_ANTIBALLISTICMISSILE => "arak",
			D_INTERPLANETARYMISSILE => "irak",

			B_METALMINE => "memi",
			B_CRYSTALMINE => "krimi",
			B_DEUTERIUMSYNTHESIZER => "deutsyn",
			B_SOLARPLANT => "solar",
			B_FUSIONPLANT => "fusion",
			B_ROBOTFACTORY => "robo",
			B_NANITEFACTORY => "nani",
			B_SHIPYARD => "rawe",
			B_METALSTORAGE => "mesp",
			B_CRYSTALSTORAGE => "krissp",
			B_DEUTERIUMTANK => "deutsp",
			B_RESAERCHLAB => "folab",
			B_TERRAFORMER => "terra",
			B_ALLIANCEDEPOT => "allydep",
			B_ROCKETSILO => "raksilo",
			B_LUNARBASE => "mbase",
			B_SENSORPHALANX => "sensor",
			B_JUMPGATE => "sprungtor",

			RS_ESPIONAGE => "spiolvl",
			RS_COMPUTER => "computech",
			RS_WEAPON => "waffentech",
			RS_SHIELDING => "schildtech",
			RS_ARMOUR => "rpz",
			RS_ENERGY => "energytech",
			RS_HYPERSPACE => "hypertech",
			RS_COMBUSTIONENGINE => "vbt",
			RS_IMPULSEENGINE => "impulse",
			RS_HYPERSPACEENGINE => "hra",
			RS_LASER => "lasertech",
			RS_ION => "iontech",
			RS_PLASMA => "plasmatech",
			RS_IRNETWORK => "forschungsnetz",
			RS_EXPEDITION => "expedition",
				R_METAL => "metal",
			R_CRYSTAL => "crystal",
			R_DEUTERIUM => "deuterium",
			R_ENERGY => "energy",
			F_SMALLCARGOSHIP => "kt",
			F_LARGECARGOSHIP => "gt",
			F_LIGHFIGHTER => "lj",
			F_HEAVYFIGHTER => "sj",
			F_CRUISER => "krz",
			F_BATTLESHIP => "ss",
			F_COLONYSHIP => "kolo",
			F_RECYCLER => "rec",
			F_ESPIONAGEPROBE => "spio",
			F_BOMBER => "bomb",
			F_DESTROYER => "zerri",
			F_DEATHSTAR => "ds",
			F_BATTLECRUISER=>"skrz",
			F_SOLARSATELLITE => "sat",

			D_MISSILELAUNCHER => "rak",
			D_SMALLLASER => "ll",
			D_HEAVYLASER => "sl",
			D_IONCANNON => "ion",
			D_GAUSSCANNON => "gauss",
			D_PLASMACANNON => "plasma",
			D_SMALLSHIELDDOME => "ksk",
			D_LARGESHILDDOME => "gsk",
			D_ANTIBALLISTICMISSILE => "arak",
			D_INTERPLANETARYMISSILE => "irak",

			B_METALMINE => "memi",
			B_CRYSTALMINE => "krimi",
			B_DEUTERIUMSYNTHESIZER => "deutsyn",
			B_SOLARPLANT => "solar",
			B_FUSIONPLANT => "fusion",
			B_ROBOTFACTORY => "robo",
			B_NANITEFACTORY => "nani",
			B_SHIPYARD => "rawe",
			B_METALSTORAGE => "mesp",
			B_CRYSTALSTORAGE => "krissp",
			B_DEUTERIUMTANK => "deutsp",
			B_RESAERCHLAB => "folab",
			B_TERRAFORMER => "terra",
			B_ALLIANCEDEPOT => "allydep",
			B_ROCKETSILO => "raksilo",
			B_LUNARBASE => "mbase",
			B_SENSORPHALANX => "sensor",
			B_JUMPGATE => "sprungtor",

			RS_ESPIONAGE => "spiolvl",
			RS_COMPUTER => "computech",
			RS_WEAPON => "waffentech",
			RS_SHIELDING => "schildtech",
			RS_ARMOUR => "rpz",
			RS_ENERGY => "energytech",
			RS_HYPERSPACE => "hypertech",
			RS_COMBUSTIONENGINE => "vbt",
			RS_IMPULSEENGINE => "impulse",
			RS_HYPERSPACEENGINE => "hra",
			RS_LASER => "lasertech",
			RS_ION => "iontech",
			RS_PLASMA => "plasmatech",
			RS_IRNETWORK => "forschungsnetz",
			RS_EXPEDITION => "expedition",
			RS_GRAVITON => "gravi");

	}

	public function get_flipped_probe_array() {
		return $this->flipped_probe_array;
	}

	public function get_flipped_top_array() {
		return $this->flipped_top_array;
	}

	public function get_db_array() {
		return $this->db_array;
	}
}