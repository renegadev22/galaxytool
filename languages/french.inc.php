<?php
/*
 * defines the characters used in OGame to indicate player status
 */
define("PLAYER_BANNED","b");
define("PLAYER_VACATION_MODE","v");
define("PLAYER_NOOB","d");
define("PLAYER_INACTIVE","i");
define("PLAYER_LONG_INACTIVE","I");
define("PLAYER_OUTLAW","o");

/*********************************************************************/
/***************************** public ********************************/
/*********************************************************************/
//index.php
define("L_USERNAME","Nom d'utilisateur");
define("L_PASSWORD","Mot de passe");
define("L_LOGINFAILURE","Le nom d'utilisateur ou le mot de passe est invalide, ou votre compte n'est pas encore activé.");
define("L_TOKENFAILURE","Votre logon key est invalide, ou votre compte n'est pas encore activé.");
define("L_LOGINTEXT","Veuillez vous identifier.");
define("L_LANGUAGE","langues disponibles:");
define("L_TIMEOUT","Votre session a expiré!");
define("L_REGISTER","S'enregistrer");
define("L_PWLOST","Mot de passe oublié ?");
define("INDEX_TITLE","Vue générale");
define("INDEX_INFO","Informations");
define("INDEX_ENTRIES","Nombre total de systèmes");
define("INDEX_ENTRIES_LASTWEEK","Nouveaux systèmes de la semaine dernière");
define("INDEX_ENTRIES_TO_OLD","Systèmes ayant plus d'un mois");
define("INDEX_REGISTERED_USERS","Utilisateurs enregistrés");
define("INDEX_PAGEFORWARD","Si votre navigateur ne vous redirige pas automatiquement, cliquez ici.");
define("INDEX_NOTICES","Notes");
define("INDEX_PLAYERS","Statistiques de Joueur");
define("INDEX_ALLIES","Statistiques de l'Alliance");
define("INDEX_REPORTS","Rapports");
define("INDEX_VERSION","Dernière version téléchargeable");
define("INDEX_LATEST_VERSION","Aucune nouvelle version disponible");
define("INDEX_SHOUTBOX","Messages");
define("INDEX_NOENTRY","Aucun message pour l'instant");
define("INDEX_COMMENT","Votre message");
define("INDEX_INSERT","Envoyer");
define("INDEX_UMOD","Joueur en Mode vacances");
define("INDEX_NO_MOONS","Nombre de lunes");
define("INDEX_NO_EMPTY_SYSTEMS","Nombre de systèmes vides");
define("INDEX_NO_FULL_SYSTEMS","Nombre de systèmes pleins");
define("INDEX_NO_TARGETS","Nombre de cibles possibles");
// 4.0
define("INDEX_USERINFO","Utilisateurs");
define("INDEX_ONLINE","En ligne actuellement");
define("INDEX_TODAY","Connectés aujourd'hui");
define("INDEX_ALL","Nombre total de connexions");
// 4.3.7
define("GENERAL_LOAD_FORM","Charger les données des formulaires");
define("GENERAL_SAVE_FORM","Enregistrer les données des formulaires");
define("GENERAL_SAVE_AS_TEXT","Enregistrer sous");
define("GENERAL_SAVE","Enregistrer");
// 4.8
define("INDEX_USERMANAGEMENT","Activation en attente");
define("INDEX_NEEDADMIN","Comptes à activer");
define("INDEX_NEEDEMAIL","Comptes invalides");
define("INDEX_TOOLBAR_INFO","Information du plugin Galaxytool");
define("INDEX_TOOLBAR_URL","URL Galaxytool");
define("INDEX_TOOLBAR_VERSION_REQUIRED","Version du plugin Galaxytool requise");
define("INDEX_TOOLBAR_INSTALL_GUIDE","Guide d'installation du plugin");
define("INDEX_TOOLBAR_TOKEN","Clé de connexion");
define("INDEX_TOOLBAR_NEW_TOKEN","Obtenir une nouvelle clé");
define("INDEX_PLAYERS_WITH_N_PLANETS","Joueur avec plus de &1 planètes");
define("INDEX_GETTING_STARTED","Premiers pas avec Galaxytool");
define("INDEX_GETTING_STARTED1","Bienvenu sur le serveur Galaxytool!");
define("INDEX_GETTING_STARTED2","Galaxytool va vous aider à analyser ce qui se passe sur votre univers &1");
define("INDEX_GETTING_STARTED3","Avant de pouvoir analyser des données, il faut les insérer à la base. Pour cela, vous devez utiliser un plugin pour votre navigateur internet comme &1 pour Firefox.");
define("INDEX_GETTING_STARTED4","Après l'installation, il vous suffit de naviguer sur vos pages Ogame. Une petite fenêtre apparaîtra dès qu'une information est envoyée vers le serveur.");
define("INDEX_GETTING_STARTED5","Une fois que le plugin aura inséré des données dans votre Galaxytool, vous pourrez chercher la position des colonies d'un joueur, combien il en possède, s'il existe des rapports les concernant ainsi que leurs activités.");
define("INDEX_GETTING_STARTED6","Mais Galaxytool vous permet aussi d'analyser votre progression en la comparant avec d'autres joueurs ou d'analyser vos rapports de combat et ainsi voir dans quelle mesure vous avez raidé ces derniers jours ou semaines.");
define("INDEX_GETTING_WIKIPAGE","Galaxytool possède bien d'autres fonctionnalités.");
define("INDEX_GETTING_WIKIPAGE2","Regardez sur le Wiki.");
define("INDEX_GETTING_BOARD","Vous pouvez utilisez le forum pour le feedback et les suggestions :");
define("INDEX_GETTING_CHAT1","Ou rejoignez nous sur le tchat :");
define("INDEX_GETTING_CHAT2","Nous ne sommes pas connectés 24/7 mais nous y passons la plupart de notre temps libre donc soyez patient.");
// new 5.0
define("INDEX_CLOSE","Fermer");
define("INDEX_LOGIN","Login");
define("GENERAL_REQUIRED_FIELDS","Vous devez remplir tous les champs");
define("INDEX_MESSAGES","Messages");
define("INDEX_EXAMPLE","Exemple");
define("INDEX_INVALID_DATA","Données invalides");
define("GENERAL_COLUMN_HIDE_TITLE","Gérer les colonnes");
define("GENERAL_COLUMN_HIDE_INFO","Selectionnez les colonnes que vous voulez voir dans le tableau.");
define("GENERAL_ENTRIES_DELETED","&1 entrées supprimées");
define("GENERAL_APPLY","Appliquer");
define("STARTPAGE_GALAXYTOOL_DESCR","<em>Galaxytool</em> est un outil pour le jeu par navigateur OGame.");
define("GENERAL_OVERWRITE","Supprimer les doublons");
define("GENERAL_OVERWRITE_QUESTION","Remplacer ?");
define("INDEX_OWN_LOGINS","Vos connexions");
define("GENERAL_OPEN_IN_NEW_WINDOW","Ouvrir le lien dans une nouvelle fenêtre");
// 5.1
define("GENERAL_UNIT_OF_MEASURE_DAYS","Days");

/*********************************************************************/
/***************************** internal ******************************/
/*********************************************************************/
// index.php
define("PROGRAM_NAME","OGame Galaxytool");
define("SHORTNAME","Galaxytool");
define("BACK_INDEX","Retour à la page principale");
define("UNIVERSE","Univers");

// search
define("MENU_INFO_LINKS","Information");
define("MENU_PAGE","Vue générale");
define("MENU_DB_SEARCH","Rechercher dans la BDD");
define("MENU_DB_NOTICES","Rechercher dans les Notes");
define("MENU_DB_REPORTS","Rechercher dans les Rapports");
define("MENU_GALAXYVIEW","Voir les Galaxies");
define("MENU_STATISTICS","Statistiques");
define("MENU_ALLYHISTORY","Historique d'alliance");
// 4.7
define("MENU_FLEET_MOVEMENTS","Activités de flotte");
define("MENU_COMBAT_REPORTS","Rapports de combat");
define("MENU_MESSAGES","Messages privés");

// insert / change
define("MENU_OPTION_LINKS","Options");
define("MENU_DB_REFRESH","Inssérer dans la BDD");
define("MENU_NOTICES","Notes");
define("MENU_DB_STATUS","État de la BDD");
define("MENU_USEROPTIONS","Gestion des Utilisateurs");
define("MENU_USEROPTIONS2","Options des Utilisateurs");
define("MENU_USEROPTIONS3","Informations sur les Utilisateurs");
// 4.2
define("MENU_ADMIN","Administration");
// 4.3.3
define("MENU_LOGOUT","Déconnexion");

// Stuff
define("MENU_STUFF","Divers");
define("MENU_FORUM_THREAD","Forum de Galaxytool");
define("MENU_DOWNLOADPAGE","Téléchargement");
define("MENU_LANGUAGE","Langue");
define("MENU_HELP","Aide");
// 4.0
define("MENU_TOOLOPTIONS","Galaxytool Options");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1"," a été inséré dans la BDD");
define("PARSER_ERROR1","Erreur pendant l'insertion des coordonnées suivantes:");
define("PARSER_ERROR2","Impossible de trouver la BDD!");
define("PARSER_ERROR3","Impossible de trouver le serveur de la BDD!");
define("PARSER_WRONG_UNIVERSE","Mauvais univers - actuel : \"&1\" attendu: \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","OGame Galaxytool - Rechercher dans la BDD");
define("SHOW_SEARCH","Rechercher dans la BDD");
define("SHOW_ALLYSYMBOL","TAG Alliance");
define("SHOW_PLAYERNAME","Nom du Joueur");
define("SHOW_MOONS","Seulement les Planètes avec une lune");
define("SHOW_NOTICES","Seulement les Planètes annotées");
define("SHOW_COLONIES","Seulement les Planètes à coloniser");
define("SHOW_YES","Oui");
define("SHOW_NO","Non");
define("SHOW_SEARCHRANGE","Portée");
define("SHOW_SEARCH_IN","Rechercher dans la Galaxie");
define("SHOW_FROM_SYSTEM","du Système");
define("SHOW_FROM_PLANET","de la Position");
define("SHOW_TO","à");
define("SHOW_DESCRIPTION","Vous pouvez utiliser le caractère joker * pour les noms de joueur ou d'alliance. Ainsi vous pourrez trouver tous les joueurs avec &quot;nom&quot; dans leur nom. Remplissez uniquement les champs que vous voulez spécifier.");
define("SHOW_SORT_BY","Ordre de tri");
define("SHOW_GALASYSTEM","Galaxie/Système");
define("SHOW_ALLYNAME","Alliance");
define("SHOW_SEARCHBUTTON","Rechercher");
define("SHOW_ADDRESS","Coordonnées");
define("SHOW_ALLYSORT","Alliance");
define("SHOW_PLANET","Planète");
define("SHOW_STATUS","Statut");
define("SHOW_CURRENTNESS","Actualisé le");
define("SHOW_PLAYER_STATUS","Statut");
define("SHOW_PLAYER_STATUS1","tout");
define("SHOW_PLAYER_STATUS2","cibles potentielles");
define("SHOW_PLAYER_STATUS3","inactif");
define("SHOW_HITS","Résultats");
define("SHOW_OF","sur");
define("SHOW_ASC","croissant");
define("SHOW_DESC","décroissant");
define("SHOW_RESULTS","Résultats par page");
define("SHOW_MOON","Lune");
define("SHOW_UKMOONSIZE","inconnue");
define("SHOW_DF","Débris");
define("SHOW_DF_LONG","Champ de débris");
define("SHOW_METAL","M");
define("SHOW_METAL_LONG","Métal");
define("SHOW_CRYSTAL","C");
define("SHOW_CRYSTAL_LONG","Cristal");
define("SHOW_BOTH","les deux");
define("SHOW_AT_LEAST","(au moins)");
define("SHOW_DATE","Date");
define("SHOW_DATE_0","peu importe");
define("SHOW_DATE_1","avant le");
define("SHOW_DATE_2","après le");
define("SHOW_RANK","Classement");
define("SHOW_FRANK","Classement des Flottes");
define("SHOW_MEMBERS","Membres");
define("SHOW_NOTRANKED","Pas dans le top 1500.");
define("SHOW_NOTICERES","Notes");
define("SHOW_REPORTS","Seulement les planètes avec rapport(s)");
define("SHOW_REPORTS_SHORT","Rapports");
define("SHOW_NOTHING","Aucun résultat n'a été trouvé");
define("SHOW_ALLIANCE_STATUS","Statut de l'alliance");
define("SHOW_NO_STATUS","Pas de statut");
define("SHOW_NAP","PNA");
define("SHOW_ALLIED","Allié");
define("SHOW_WAR","en Guerre");
define("SHOW_BOYCOTT","Boycott");
define("SHOW_NEUTRAL","Neutre");
define("SHOW_OWN","Propre Alliance");
define("SHOW_WING","Wing");
// obsolete with 5.0
define("SHOW_EXT_OPTIONS1","Afficher plus d'options sur la portée, le classement, la date ou les champs de débris.");
define("SHOW_EXT_OPTIONS2","Afficher plus d'options sur les colonies, les lunes, les rapports, les notes, les statuts de joueur ou diplomatiques.");
define("SHOW_EXT_OPTIONS3","Afficher plus d'options sur le tri des résultats.");
// new 5.0
define("SHOW_EXTENDED","Recherche avancée");
define("SHOW_MOON_SELECTION","Planète lunée");
define("SHOW_REPORT_SELECTION","Planète avec un rapport");
define("SHOW_FILTER_BY","Exclure de la liste");
define("SHOW_FILTER_NONE","aucune");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Show players without score changes within the last few days");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","OGame Galaxytool - État de la BDD");
define("STATUS_DB_STATUS","État de la BDD");
define("STATUS_COLOR","Couleur");
define("STATUS_AGE1","Donnée du jour.");
define("STATUS_AGE2","Donnée de 2 - 4 jours.");
define("STATUS_AGE3","Donnée de 4 - 7 jours.");
define("STATUS_AGE4","Donnée de 1 - 2 semaines.");
define("STATUS_AGE5","Donnée de 2 - 4 semaines.");
define("STATUS_AGE6","Donnée vieille d'un mois !");
define("STATUS_AGE7","Aucune donnée disponible.");
define("STATUS_ON","le");
define("STYLES_COLOR1","Couleur1");
define("STYLES_COLOR2","Couleur2");
define("STYLES_COLOR3","Couleur3");
define("STYLES_COLOR4","Couleur4");
define("STYLES_COLOR5","Couleur5");
define("STYLES_COLOR6","Couleur6");
define("STYLES_COLOR7","Couleur7");
// 4.8
define("STATUS_DB_LEGEND","Légende");
define("STATUS_GALAXY","Galaxie");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","OGame Galaxytool - Gestion des Utilisateurs");
define("USER_NAMES","Utilisateur");
define("USER_ERROR","Erreur");
define("USER_NEWUSER","Ajouter un Utilisateur");
define("USER_OPTIONS","Options");
define("USER_USERNAME","Nom d'utilisateur");
define("USER_PASSWORD","Mot de passe");
define("USER_PASSWORD_CONFIRM","Confirmer le mot de passe");
define("USER_GALAXY","Galaxie");
define("USER_SEARCH","Recherche");
define("USER_INSERT","Insertion");
define("USER_DELETE","Suppression");
define("USER_DELETE_ENTRY","Voulez-vous supprimer cet utilisateur: ");
define("USER_STATUS","Voir les stats");
define("USER_STYLES","Modifier disposition");
define("USER_SUBMIT","Envoyer");
define("USER_RESET","Réinitialiser");
define("USER_YES","Oui");
define("USER_NO","Non");
define("USER_STYLEPATH","Chemin vers styles.css");
define("USER_PROBES","Affichage/soumission de rapports d'espionnage");
define("USER_EMAIL","Email");
define("USER_ERROR1","Mauvais mot de passe ou email invalide.");
define("USER_ERROR2","Email invalide.");
define("USER_INGAME","Nom Ingame");
define("USER_ALLYTAG","TAG d'Alliance");
define("USER_ALLYHISTORY","Historique d'alliance");
define("USER_DIPLOMATIC","Diplomatie");
define("USER_STATSPAGE","Nombre d'entrées sur la page de statistiques");
define("USER_LINKS","Liens");
define("USER_LINKS2","Format:<br>texte;url<br>texte2;url2<br>texte3;url3");
define("USER_EXPORT_TITLE","Exporter les couleurs (BB Codes)");
define("USER_BB_COORDINATES","Coordonnées");
define("USER_BB_MOON","Lune");
define("USER_BB_DEBRIS","Champ de débris");
define("USER_BB_ALLY","Nom d'alliance");
define("USER_BB_ALLYDETAILS","Détails de l'alliance");
define("USER_BB_PLAYERNAME","Nom du joueur");
define("USER_BB_BANNED","Banni");
define("USER_BB_VACATION","Mmode vacances");
define("USER_BB_NOOB","Débutant");
define("USER_BB_INACTIVE","Inactif 7 jours");
define("USER_BB_LONGINACTIVE","Inactif 28 jours");
// new with 4.7
define("USER_DELETION","Suprimer");
define("USER_FLEETINFO",MENU_FLEET_MOVEMENTS);
define("USER_ACTIVITIES","Activités du joueur");
define("USER_MAINTENANCE","Entretien du Galaxytool");
define("USER_MANAGEMENT",MENU_USEROPTIONS);
define("USER_DELETE_MY_COMBAT_REPORTS","Supprimer mes rapports de combat");
define("USER_DELETE_MY_MESSAGES","Supprimer mes messages");
define("USER_DELETE_MY_FLEETMOVES","Supprimer mes mouvements de flottes");
// 4.8
define("USER_DELETE_MY_COMBAT_REPORTS_LIMITED","Supprimer mes rapports de combats vieux de &1 jours");
define("USER_DELETE_MY_MESSAGES_LIMITED","Supprimer mes messages vieux de &1 jours");
define("USER_TABLE_ENTRIES","Résultats par page");
// 5.0
define("USER_EXISTS","L'utilisateur existe déjà");
define("USER_BB_OUTLAW","Hors la loi");
define("USER_INVALID_URL","L'URL &1 semble invalide - L'URL sera ignoré");

/*********************************************************************
* galaxyview.php
*********************************************************************/
define("VIEW_TITLE","OGame Galaxytool - Détails des Galaxies");
define("VIEW_NODATA","Pas de données.");
define("VIEW_GALAXY","Galaxie");
define("VIEW_SYSTEM","Système solaire");
define("VIEW_POSITION","Pos.");
define("VIEW_PLANET","Planète");
define("VIEW_MOON","Lune");
define("VIEW_TF","Débris");
define("VIEW_PLAYER","Joueur");
define("VIEW_PLAYER_ADD","(Classement / Statut)");
define("VIEW_ALLY","Alliance");
define("VIEW_ALLY_ADD","(Classement / Membre)");
define("VIEW_METAL","M");
define("VIEW_CRYSTAL","C");
define("VIEW_COLONISED","planètes colonisées");
define("VIEW_UKMOONSIZE","inconnu");
define("VIEW_BACK","retour");
define("VIEW_NOTICE","Notes");
define("VIEW_REPORTS","Rapports");
define("VIEW_MOONPHALANX","Les lunes suivantes peuvent scanner ce système");
define("VIEW_NOMOONS","Pas de lune trouvée");
define("VIEW_IRAKS","Les planètes suivantes peuvent atteindre ce système avec des missiles interplanétaires");
define("VIEW_NOIRAKS","Pas de missile interplanétaire trouvé");
// 4.0
define("VIEW_MOON_DESTROY_CHANCE","Chances de détruire la lune");
define("VIEW_CHANCE_WITH_ONE","Chances avec une EDLM");
define("VIEW_CHANCE_WITH_N","Chances avec ");
define("VIEW_DEATH_STARS","EDLM");
define("VIEW_DS_DESTROY_CHANCE","Chances de perdre la/les EDLM");
define("VIEW_TOP","Top");
// new 4.3.5
define("VIEW_GO","go");
// new 5.0
define("VIEW_DIAMETER","Diamètre");

/*********************************************************************
* change_password.php
**********************************************************************/
define("PW_TITLE","OGame Galaxytool - Changement de mot de passe");
define("OLD_PASSWORD","Ancien mot de passe");
define("NEW_PASSWORD","Nouveau mot de passe");
define("CONFIRM_NEW_PASSWORD","Confirmer le mot de passe");
define("PW_MISMATCH","Les mots de passe que vous avez entrés sont différents!");
define("PW_ERROR","L'ancien mot de passe est incorrect!");
define("UPDATE_DONE","Changement effectué.");
// new 4.2
define("TIMEZONE_OFFSET","Différence d'horaire avec ce serveur");
// new 4.3
define("DELETE_ACCOUNT","Supprimer ce compte");
define("DELETE_ACCOUNT_SAFETY_REQUEST","Etes vous sûr de vouloir supprimer votre compte?");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","Autorisations");
define("CH_PASSWD_ADMIN","Administrateur");
// new 4.7
define("TIMEZONE_OGAME_OFFSET","Différence d'horaire avec le serveur OGame");
// new 4.8
define("CH_PASSWD_USER_LANGUAGE","Langue à la prochaine connexion");
define("CH_PASSWD_USER_LANGUAGE_NO_CHANGE","Pas de changement");
define("CH_PASSWD_EXPAND","Déplié");
define("CH_PASSWD_COLLAPSE","Réduit");
define("CH_PASSWD_HIDDEN","Caché");
define("CH_PASSWD_GETTING_STARTED","Premiers pas ");
define("CH_PASSWD_PLUGIN","Informations du plugin Galaxytool ");

/*********************************************************************
* notices.php
**********************************************************************/
define("NOTICE_TITLE","OGame Galaxytool - Notes");
define("NOTICE_HEADER","Éditer une note");
define("NOTICE_HEADER2","Éditer ses propres notes");
define("NOTICE_PUBLIC","Accessible aux autres ?");
define("NOTICE_YES","oui");
define("NOTICE_NO","non");
define("NOTICE_TEXT","Note");
define("NOTICE_SAVE","Sauvegarder");
define("NOTICE_DELETED","Note supprimée");
define("NOTICE_SAVED","Note sauvegardée");
define("NOTICE_RESULTS","Tous les résultats");
define("NOTICE_USER","Utilisateur");
define("NOTICE_DATE","Date");
define("NOTICE_EDIT","Éditer");
define("NOTICE_DELETE","Supprimer");
define("NOTICE_NEW","Créer une note");
define("NOTICE_NOTPUBLIC","Note non publique");
define("NOTICE_ALL","toutes");
define("NOTICE_NONE",SHOW_FILTER_NONE);
define("NOTICE_SEARCH","Rechercher dans les Notes");
define("NOTICE_SEARCH_SHORT","Rechercher");
define("NOTICE_HITS","Résultats");
define("NOTICE_SHOWRESULTS","Résultats par page");
define("NOTICE_OF","sur");
define("NOTICE_NOTHING","Aucun résultat n'a été trouvé");
// 4.0
define("NOTICE_CHARS","Caractères");
define("NOTICE_PLAYERNAME","Joueur");
define("NOTICE_SHOWALL","Afficher toutes les notes");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","OGame Galaxytool - Rapports d'espionnage");
define("REPORTS_RESOURCES","Ressources");
define("REPORTS_FLEET","Flottes");
define("REPORTS_DEFENCE","Défense");
define("REPORTS_BUILDINGS","Bâtiments");
define("REPORTS_TECHNOLOGY","Recherche");
define("REPORTS_MOON","Lune");
define("REPORTS_SEARCH","Rechercher dans les rapports d'espionnage");
define("REPORTS_SEARCH_SHORT","Rechercher");
define("REPORTS_HITS","Résultats");
define("REPORTS_NOTHING","Aucun résultat n'a été trouvé");
define("REPORTS_ADDRESS","Coordonnées");
define("REPORTS_CURRENTNESS","Actualisé le");
define("REPORTS_PLAYERNAME","Joueur");
define("REPORTS_ALLY","Alliance");
define("REPORTS_VIEW","voir le Rapport");
define("REPORTS_SEARCH_IN","Rechercher dans la Galaxie");
define("REPORTS_FROM_SYSTEM","du Système");
define("REPORTS_TO","à");
define("REPORTS_DELETE","supprimer");
define("REPORTS_DELETED","Rapport supprimé");
define("REPORTS_RESULTS","Résultats par page");
define("REPORTS_OF","sur");
define("REPORTS_DATE","Date");
define("REPORTS_DATE_0","peu importe");
define("REPORTS_DATE_1","moins récente que");
define("REPORTS_DATE_2","plus récente que");
define("REPORTS_NOTICES","Notes");
define("REPORTS_AT_LEAST_RESOURCES","Ressources ( au moins )");
define("REPORTS_SEARCH_EXTENDED","Recherche étendue");
define("REPORTS_FLEET_RESIS","Flotte - points");
define("REPORTS_DEFENCE_RESIS","Défense - points");
define("REPORTS_ALL_RESIS","Sommes des points");
define("REPORTS_TECHS","Technologies");
define("REPORTS_UNKNOWN_ENTRIES","Entrées inconnues");
define("REPORTS_PARTLY_INSERTED","Inséré partiellement");
define("REPORTS_FOR_ALL_RES","Pour toute les ressources");
define("REPORTS_FOR_TF","Pour le champs de débris");
define("REPORTS_KT","Petits transporteurs");
define("REPORTS_GT","Grands transporteurs");
define("REPORTS_SS","Vaisseaux de bataille");
define("REPORTS_REC","Recycleur");
define("REPORTS_RAIDABLE","Seulement des cibles attaquables");
define("REPORTS_ALL_RESOURCES","toutes les ressources");
// 4.0
define("REPORTS_STUFF","Divers");
define("REPORTS_SPEEDSIM","Simuler avec Speedsim");
define("REPORTS_DRAGOSIM","Simuler avec Dragosim");
define("REPORTS_STATUS","Statut");
define("REPORTS_ERROR","Une erreur s'est produite");
// 4.2
define("REPORTS_OWN_REPORTS","Seulement mes rapports");
// 4.3.3
define("REPORTS_UPLOAD_BY","Rapport téléchargé par");
// 4.4
define("REPORTS_DEPTH","Rapports d'espionnages approfondis");
define("REPORTS_FLEET_SCORE","Nombre de vaisseaux");
define("REPORTS_DEFENCE_SCORE","Nombre de défense");
// 5.0
define("REPORTS_HOURS","heures"); 
define("REPORTS_MAX_RESULTS_HIT","Plus de &1 entrées correspondent à votre demande. Seuls les &1 résultats sont affichés. Ajustez votre recherche pour avoir moins de réusltat.");
define("REPORTS_OSIMULATE","Simulater avec OSimulate");
define("REPORTS_SHOW_ONLY","Montrer uniquement ");
define("REPORTS_SHOW_PLANETS","Planètes");
define("REPORTS_SHOW_MOONS","Lunes");
define("REPORTS_OWNER","Rapports de ");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","OGame Galaxytool - Statistiques");
define("STATS_TBLHEAD","Statistiques");
define("STATS_RANK","Place");
define("STATS_PLAYERNAME","Joueur");
define("STATS_ALLYNAME","Alliance");
define("STATS_SCORE","Points");
define("STATS_FLEET","Vaisseaux");
define("STATS_RESEARCH","Recherche");
define("STATS_MEMBERS","Membres");
define("STATS_STATUS","Statut");
define("STATS_NOTHING","pas de Statut");
define("STATS_NAP","PNA");
define("STATS_ALLIED","Allié");
define("STATS_WAR","en Guerre");
define("STATS_BOYCOTT","Boycott");
define("STATS_NEUTRAL","Neutre");
define("STATS_OWN","Propre Allié");
define("STATS_WING","Wing");
define("STATS_UPDATE","Données de");
define("STATS_PLAYERSTATS","Joueurs");
define("STATS_ALLYSTATS","Alliances");
// 4.0
define("STATS_DELETE","Voulez-vous supprimer cette entrée?");
define("STATS_CONFIRM_DELETE","Voulez-vous vraiment supprimer ce joueur?");
define("STATS_CHANGE_PLAYER_STATUS","Statut du joueur");
define("STATS_CHANGE_ALLIANCE_STATUS","Statut");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","Tous les membres de cette alliance auront le statut choisi. Tous les statuts définis aupravant seront supprimés. Vous pourrez à nouveau changer les statuts individuels des joueurs après.");
define("STATS_UNKNOWN","Pas de Statut");
define("STATS_DETAILS","Details pour");
// 4.4
define("STATS_PLAYERSTATUS",SHOW_PLAYER_STATUS);
define("STATS_IGNORE_STATUS",SHOW_PLAYER_STATUS1);
define("STATS_ACTIVE","actif/active");
define("STATS_INACTIVE",USER_BB_INACTIVE);
define("STATS_BANNED",USER_BB_BANNED);
define("STATS_VACATION",USER_BB_VACATION);
define("STATS_NOOB",USER_BB_NOOB);
// 4.8
define("STATS_YES",SHOW_YES); // reuse SHOW definitions if applicable
define("STATS_NO",SHOW_NO);
define("STATS_SEARCH",USER_SEARCH);
define("STATS_SHOW_GRAPH","Montrer la distribution des points");
define("STATS_LONG_INACTIVE",USER_BB_LONGINACTIVE);
// 4.9
define("STATS_STANDARD","Classement général");
define("STATS_MILITARY","Points militaires");
define("STATS_ECONOMY","Points économiques");
define("STATS_HONOUR","Points honorifiques");
define("STATS_MILITARY_BUILD","Points militaires construits");
define("STATS_MILITARY_DESTROYED","Points militaires  détruits");
define("STATS_MILITARY_LOST","Points militaires perdus");

/*********************************************************************
* register.php
**********************************************************************/
define("REGISTER_REGISTRATE","S'enregistrer");
define("REGISTER_LOGINNAME","Nom d'utilisateur");
define("REGISTER_PASSWORD","Mot de passe");
define("REGISTER_PASSWORD_CONFIRM","Confirmer le mot de passe");
define("REGISTER_EMAIL","Email");
define("REGISTER_INGAME","Nom Ingame");
define("REGISTER_ALLYTAG","TAG Alliance");
define("REGISTER_EMAILVERIFICATION","Vérification de l'adresse email");
define("REGISTER_EMAILTEXT","Pour valider votre inscription à galaxytool, veuillez vous rendre à la page suivante.");
define("REGISTER_ERROR1","Ce nom d'utilisateur est déjà utilisé.");
define("REGISTER_ERROR2","Erreur lors de l'envoi de l'email. Veuillez contacter un administateur.");
define("REGISTER_ERROR3","Erreur lors de l'accès à la BDD!");
define("REGISTER_INFO1","Votre compte a été crée.");
define("REGISTER_INFO2","Veuillez utiliser le lien qui vous a été envoyé par email pour confirmer votre inscription.");
define("REGISTER_INFO3","Inscription confirmée. Votre administrateur doit maintenant activer votre compte.");
define("REGISTER_BUTTON","Retour à l'accueil");
define("REGISTER_NEW_SUBJECT","Un nouvel utilisateur s'est enregistré dans galaxytool");
define("REGISTER_NEW_MAILTEXT","Un nouvel utilisateur s'est enregistré.");
// new 4.2
define("REGISTER_BACK","Retour à la première page");
// new 4.3.5
define("REGISTER_MISSING_FIELDS","Entrer tous les champs exigés");
// new 4.8
define("REGISTER_ERROR4","E-mail invalide.");
define("REGISTER_ERROR5","Mots de passe différents.");
define("REGISTER_PWS","Sécurité");
define("REGISTER_PWS0","très faible");
define("REGISTER_PWS1","faible");
define("REGISTER_PWS2","bonne");
define("REGISTER_PWS3","forte");
define("REGISTER_PWS4","très forte");
// new 5.0
define("REGISTER_EMAIL_USED","E-mail déjà utilisé");

/*********************************************************************
* lost_password.php
**********************************************************************/
define("LOSTPW_TITLE","Mot de passe perdu");
define("LOSTPW_INFO2","Un nouveau mot de passe a été généré et envoyé à votre adresse email.");
define("LOSTPW_BUTTON1","recevoir nouveau mot de passe");
define("LOSTPW_BUTTON2","Retour à l'acceuil");
define("LOSTPW_LOGINNAME","Nom d'utilisateur");
define("LOSTPW_EMAIL","Email");
define("LOSTPW_ERROR1","Erreur lors de l'accès à la BDD!");
define("LOSTPW_ERROR2","Aucun compte ne correspond à votre demande!");
define("LOSTPW_ERROR3","Erreur lors de l'envoi de l'email. Veuillez contacter un administateur.");
define("LOSTPW_EMAIL_SUBJECT","Votre nouveau mot de passe");
define("LOSTPW_EMAIL_TEXT1","Voici vos nouvelles informations de connexion à galaxytool");
define("LOSTPW_EMAIL_TEXT2","Nom d'utilisateur");
define("LOSTPW_EMAIL_TEXT3","Mot de passe");
// new 5.0
define("LOSTPW_INFO1","Un message de confirmation de réinitialisation de mot de passe vous a été envoyé.");
define("LOSTPW_CONFIRM_RESET_SUBJECT","Mot de passe oublié ?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","Bonjour,\n\nVous avez demander à réinitialiser votre mot de passe. Pour créer un nouveau mot de passe, cliquez sur le lien suivant :");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","OGame Galaxytool - Informations sur les Utilisateurs");
define("USERINFO_NAMES","Tous les utilisateurs de cet outil");
define("USERINFO_DETAIL","Informations détaillées sur");
define("USERINFO_ERROR1","Pas d'utilisateur avec cet ID!");
define("USERINFO_USERNAME","Nom d'utilisateur");
define("USERINFO_INGAME","Nom Ingame");
define("USERINFO_EMAIL","Email");
define("USERINFO_ALLYTAG","Alliance");
define("USERINFO_STYLEPATH","Skin");
define("USERINFO_STATUS","État");
define("USERINFO_ACTIVATE","Activer le joueur");
define("USERINFO_LOGINS","Nombre de connexions");
define("USERINFO_LASTLOGIN","Dernière connexion");
define("USERINFO_DATA","Nombre de Systèmes ajoutés");
define("USERINFO_NODATA","Cet utilisateur n'a rien ajouté pour le moment!");
define("USERINFO_GALAXY","Galaxie");
define("USERINFO_SYSTEMS","Nombre de Systèmes");
define("USERINFO_IP","Adresse IP");
define("USERINFO_LOGINTIME","Connexion");
define("USERINFO_NOLOGIN","Le joueur ne s'est jamais connecté.");
define("USERINFO_LAST_GALAXYUPDATE","Dernier ajout à la BDD");
define("USERINFO_LAST_PUBLIC_NOTICE","Dernière note publique");
define("USERINFO_LAST_PRIVATE_NOTICE","Dernière note privée");
define("USERINFO_NUMBEROF_PUBLIC_NOTICE","Nombre de notes publiques");
define("USERINFO_NUMBEROF_PRIVATE_NOTICE","Nombre de notes privées");
define("USERINFO_ACTIVATED","Compte activé");
define("USERINFO_ACTIVATIONTEXT","L'administrateur galaxytool a activé votre compte.\n\nAmusez vous bien avec Galaxytool!");
// new 4.8
define("USERINFO_LAST_SUBMIT","Dernière insersion");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","OGame Galaxietool - Historique d'alliance");
define("ALLYHISTORY_TBLHEAD","Historique");
define("ALLYHISTORY_PLAYERNAME","Joueur");
define("ALLYHISTORY_ALLYNAME","Alliance");
define("ALLYHISTORY_LASTMONTH","Dernier mois"); // changed at 4.0
define("ALLYHISTORY_ALL_DATA","Toutes les informations disponibles"); // new 4.0
define("ALLYHISTORY_SHOW","Afficher les statistiques");
define("ALLYHISTORY_TIMESPAN","Période");
define("ALLYHISTORY_PROGESS","Progression");
define("ALLYHISTORY_SCORE","Points");
define("ALLYHISTORY_FSCORE","Points de vaisseaux"); // new 4.0
define("ALLYHISTORY_RSCORE","Points de recherche"); // new 4.0
define("ALLYHISTORY_MEMBER","Membres"); // new 4.0
define("ALLYHISTORY_NOTHING","Aucune entrée trouvée");
define("ALLYHISTORY_DETAILS","Détails");
define("ALLYHISTORY_SHOW_ADDRESS","Coordonnées");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","Informations sur le joueur");
define("DETAILEDINFO_ALLYINFO_TITLE","Informations sur l'alliance");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","Informations détaillées sur le joueur");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","Informations détaillées sur l'alliance");
define("DETAILEDINFO_NO_ALLIANCE","Aucune");
define("DETAILEDINFO_SCORE","Classement points");
define("DETAILEDINFO_FLEET","Classement vaisseaux");
define("DETAILEDINFO_RESEARCH","Classement recherche");
define("DETAILEDINFO_RANK","Place");
define("DETAILEDINFO_POINTS","Points");
define("DETAILEDINFO_KNOWN_PLANETS","Planètes connues");
define("DETAILEDINFO_MOONS","Lunes connues");
define("DETAILEDINFO_PHALANX_AREA","Zone de phalange");
define("DETAILEDINFO_NO_PHALANX_AREA","Aucune phalange trouvée");
define("DETAILEDINFO_NOTICES","Notes");
define("DETAILEDINFO_NO_NOTICES","Aucune note trouvée");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","Alliances précédentes");
define("DETAILEDINFO_RESOURCES_PER_HOUR","Ressources par heure");
define("DETAILEDINFO_RESOURCES_PER_DAY","Resources par jour");
define("DETAILEDINFO_RESOURCES_PER_WEEK","Resources par semaine");
define("DETAILEDINFO_RESOURCES_PER_MONTH","Resources par mois (30 jours)");
define("DETAILEDINFO_METAL","Métal");
define("DETAILEDINFO_CRYSTAL","Cristal");
define("DETAILEDINFO_DEUTERIUM","Deutérium");
define("DETAILEDINFO_UNKNOWN","inconnu");
define("DETAILEDINFO_SCORE_DISTRIBUTION","Distribution des points");
// new 4.2
define("DETAILEDINFO_GENERAL","Détails");
define("DETAILEDINFO_MEMBERS","Membres");
define("DETAILEDINFO_GRAPHS","Graphiques");
define("DETAILEDINFO_RESOURCES","Ressources");
define("DETAILEDINFO_FLEET_TAB","Flottes");
define("DETAILEDINFO_TECH","Recherche");
define("DETAILEDINFO_FLEET_DETAIL","Somme / (moyenne des joueurs) parmi tous les rapports disponibles");
define("DETAILEDINFO_TECH_DETAIL","Moyenne de tous les informations sur les joueurs disponibles");
// new 4.3
define("DETAILEDINFO_PLANET_TAB",REPORTS_SHOW_PLANETS);
define("DETAILEDINFO_MOON_TAB",REPORTS_SHOW_MOONS);
// 4.7
define("DETAILEDINFO_ACTIVITIES","Activités");
define("DETAILEDINFO_NODATA",VIEW_NODATA); // reuse existing translations
define("DETAILEDINFO_ACTIVITY_DESCRIPTION","Montrer activités de &1 trouvés pour:");
define("DETAILEDINFO_GALAXYVIEWS","Vues de galaxies");
define("DETAILEDINFO_SCANS","Action d'espionnage");
define("DETAILEDINFO_MESSAGES","Messages privés");
define("DETAILEDINFO_COMBATS","Rapports de combat");
define("DETAILEDINFO_ALLYPAGE","Vue Alliance");
define("DETAILEDINFO_MANUAL","Insertion manuelle");
define("DETAILEDINFO_START","Début");
define("DETAILEDINFO_TO","jusqu'a");
define("DETAILEDINFO_TODAY","Aujourd'hui");
define("DETAILEDINFO_DATA_RESTRICTION","Limité jusqu'a:");
define("DETAILEDINFO_WEEKDAY_WEEKEND","Weekend");
define("DETAILEDINFO_WEEKDAY_WORKINGDAY","Jour de la semaine");
define("DETAILEDINFO_WEEKDAY_MONDAY","Lundi");
define("DETAILEDINFO_WEEKDAY_TUESDAY","Mardi");
define("DETAILEDINFO_WEEKDAY_WEDNESDAY","Mercredi");
define("DETAILEDINFO_WEEKDAY_THURSDAY","Jeudi");
define("DETAILEDINFO_WEEKDAY_FRIDAY","Vendredi");
define("DETAILEDINFO_WEEKDAY_SATURDAY","Samedi");
define("DETAILEDINFO_WEEKDAY_SUNDAY","Dimanche");
define("DETAILEDINFO_WEEKDAY_SHORTLENGTH",3); // Nombre de lettres pour abréger le nom des jours
define("DETAILEDINFO_PLAYER_CURRENTLY_ACTIVE","Le joueur est active en ce moment");
define("DETAILEDINFO_PLAYER_MESSAGES","messages disponible du joueur");
define("DETAILEDINFO_SHOW","montrer");
define("DETAILEDINFO_NONE","aucun message disponibles");
define("DETAILEDINFO_ENTER_MANUALLY","Entrez l'activité de ce joueur");
define("DETAILEDINFO_PLAYER_SEEN_ON","Le joueur était connecté à");
define("DETAILEDINFO_INSERT","Insérer");
define("DETAILEDINFO_OGAME_SERVERTIMES","Remarque: Les dates et les temps sont relatives au serveur OGame !");
define("DETAILEDINFO_DAY_VIEW","Vue sur 24 heures");
define("DETAILEDINFO_WEEK_VIEW","Vue sur une semaine");
// new 4.8
define("DETAILEDINFO_HOME_PLANET","Planète mère");
// new 5.0
define("DETAILEDINFO_PLANETNAME","Nom"); // also used for moons!
define("DETAILEDINFO_DEFENCE_SCORE","Points dans la défense");
define("DETAILEDINFO_DEFENCE_SCORE_TOOLTIP","Défense = Militaire - Points totaux + Recherches + Economie.<br/>Ces statistiques doivent être à jour pour avoir un sens!");
define("DETAILEDINFO_SCORE_PER_SHIP","Points par vaisseau");
define("DETAILEDINFO_SHIPS","Vaisseaux");
define("DETAILEDINFO_DATE_IN_FUTURE","Ne proposez pas des dates futures!");

// new 4.2
/*********************************************************************
* administration.php
**********************************************************************/
define("ADMIN_TITLE","Administration du Galaxytool");
define("ADMIN_DISCLAMER","Attention: Utilisez ces scripts à vos propres risques! La plupart effacent les données.");
define("ADMIN_INCONSISTENCIES","Incohérences dans la base de données");
define("ADMIN_PLANETS","Planètes en position 0 ou supérieures à 15");
define("ADMIN_GALAXIES","Effacer galaxies supérieures à &1 ");
define("ADMIN_PLAYERS","Effacer joueurs sans OGame playerid - peut mener à dupliquer des entrées de joueurs");
define("ADMIN_REPORTS","Effacer des rapports où aucune planète n'existe");
define("ADMIN_MISC","Faits divers");
define("ADMIN_RESET","Remettre à zéro Galaxytool (seuls les utilisateurs et les tables d'ip ne sont pas effacés)");
define("ADMIN_OLD_PLAYERS","Effacer entrées de joueurs plus anciennes que &1 jours");
define("ADMIN_OLD_REPORTS","Effacer rapports plus anciens que &1 jours");
define("ADMIN_LOADING","Ne pas fermer cette fenêtre tant que la page se charge.");
define("ADMIN_STATUS","Status de vos requêtes");
define("ADMIN_SELECTION","Au moins une entrée doit être sélectionnée");
define("ADMIN_SAFETY","Etes-vous sûr de vouloir lancer ce(s) script(s) ");
define("ADMIN_DONE","fait");
define("ADMIN_NOTBD","rien à faire");
// new 4.3
define("ADMIN_OLD_GALAXIES","Effacer des vues de galaxie qui sont plus anciennes que &1 jours");
define("ADMIN_UNUSED_PLAYERS","Effacer les joueurs qui n'ont aucune entrée dans la partie galaxie");
// new 4.7
define("ADMIN_OLD_ACTIVITIES","Supprimer l'activité des joueurs de plus de &1 jours");
// new 4.8
define("ADMIN_OLD_COMBATS","Supprimer les rapports de combat vieux de &1 jours");
define("ADMIN_OLD_INGAME_MSG","Supprimer les messages vieux de &1 jours");
// new 5.0
define("ADMIN_OGAME_API","Charger les données public d'OGame sur le serveur Galaxytool");
define("ADMIN_OGAME_ALL_DATA",ALLYHISTORY_ALL_DATA);
define("ADMIN_OGAME_GALAXY_DATA",MENU_GALAXYVIEW);
define("ADMIN_OGAME_STATISTICS_DATA",MENU_STATISTICS);

// new 4.3.5
/*********************************************************************
* errorpage.php
**********************************************************************/
define("ERRORPAGE_PAGEFORWARD","Cliquer ici si votre navigateur ne soutient pas l'expédition de la page");
define("ERRORPAGE_PERMISSION_DENIED","Vous n'avez pas l'autorisation d'entrer sur cette page. Cliquer pour revenir en arrière");

// new 4.7
/*********************************************************************
* fleet_movements.php
**********************************************************************/
define("FLEETS_TITLE","Activités de flotte");
define("FLEETS_ACTUAL_FLEETS","Flottes en mouvement");
define("FLEETS_YES",SHOW_YES);
define("FLEETS_NO",SHOW_NO);
define("FLEETS_DETAILS","Détails");
define("FLEETS_MISSION_EXPEDITION","Expédition");
define("FLEETS_MISSION_COLONIZATION","Coloniser");
define("FLEETS_MISSION_RECYCLE","Exploitage");
define("FLEETS_MISSION_TRANSPORT","Transport");
define("FLEETS_MISSION_DEPLOYMENT","Déploiement");
define("FLEETS_MISSION_ESPIONAGE","Espionnage");
define("FLEETS_MISSION_ACS_DEFEND","Stationnement");
define("FLEETS_MISSION_ATTACK","Attaquer");
define("FLEETS_MISSION_ACS_ATTACK","Attaque groupée");
define("FLEETS_MISSION_MOON_DESTRUCTION","Destruction de lune");
define("FLEETS_MISSION_MISSILE_ATTACK","Attaque de missile");
define("FLEETS_NO_DATA","Pas d'informations utiles");
// new 5.0
define("FLEETS_FLEET","Flottes");
define("FLEETS_ALL_FLEETS","Montrer toutes les flottes");

/*********************************************************************
* parser_combat_reports.inc.php
**********************************************************************/
define("COMBAT_REPORT_OUDATED_GALAXYVIEW","Vos systèmes galaxies sont trop vieux. Veuillez revisiter les systèmes origine de l'attaque et de la cible!");

/*********************************************************************
* messages.php
**********************************************************************/
define("MESSAGES_TITLE","OGame Galaxytool - Messages OGame");
define("MESSAGES_PLAYERNAME","Nom joueur");
define("MESSAGES_SUBJECT","Objet");
define("MESSAGES_DATE","Date");
define("MESSAGES_FILTER","Filtre");
define("MESSAGES_DELETE","Effacer message");
define("MESSAGES_PUBLISH_DETAIL","Ajouter le contenu du message a la note du joueur..");
define("MESSAGES_PUBLISH_HEADER","&sender a envoyé un message à &recipient le &date:\n\n &message"); // &sender, &recipient, &date, &message replaced at runtime
define("MESSAGES_PLAYER_FILTER","Messages pour le joueur:");
// new 5.0
define("MESSAGES_CONTENT","Contenu");

/*********************************************************************
* combat_reports.php
**********************************************************************/
define("COMBATS_TITLE","OGame Galaxytool - Rapports de combat");
define("COMBATS_ATTACKER","Attaquant");
define("COMBATS_DEFENDER","Defenseur");
define("COMBATS_DATE","Date");
define("COMBATS_OWNER","Propriétaire");
define("COMBATS_WINNER","Gagnant");
define("COMBATS_COMBATREPORT","Rapport de combat");
define("COMBATS_COMBAT_AT","Combat sur"); //for a time or a planet?
define("COMBATS_LOST_UNITS","Unités perdues");
define("COMBATS_LOOT","Butin");
define("COMBATS_DEBRIS","Débris");
define("COMBATS_AND","et");
define("COMBATS_PUBLISH","Rendre ce rapport public");
define("COMBATS_UNPUBLISH","Rendre ce rapport privé");
define("COMBATS_DELETE","Supprimer le rapport");
define("COMBATS_CHECK_ALL","Sélectionner tout ");
define("COMBATS_UNCHECK_ALL","Désélectionner tout.");
define("COMBATS_WITH_SELECTED","Avec les sélectionnés");
define("COMBATS_PUBLIC_REPORTS","Rapports publics");
define("COMBATS_YES",SHOW_YES); // no need for translation!
define("COMBATS_NO",SHOW_NO); // no need for translation!
define("COMBATS_SEARCH_OPTIONS","Options de recherche");
define("COMBATS_SEARCH","Chercher");
define("COMBATS_RESET","Mise à zéro");
// 4.8
define("COMBATS_COORDINATES",USER_BB_COORDINATES);
define("COMBATS_INVALID_GALAXY_ENTERED","Galaxie invalide");
define("COMBATS_INVALID_SYSTEM_ENTERED","System invalide");
define("COMBATS_INVALID_PLANET_ENTERED","Planète invalide");
define("COMBATS_GALAXY_FROM_TO","Galaxie");
define("COMBATS_SYSTEM_FROM_TO","Système");
define("COMBATS_PLANET_FROM_TO","Planète");
define("COMBATS_APPLY","Appliquer");
define("COMBATS_COMBAT_SUMMARY","Rapport de combat réduit");
define("COMBATS_DOWNLOAD_CSV","Télécharger en CSV");

/*********************************************************************
* report_archive.php
**********************************************************************/
define("REPORT_ARCHIVE_TITLE","Rapports archivés");
define("REPORT_ARCHIVE_COORDINATES","Coordonnées");
define("REPORT_ARCHIVE_SCANTIME","Date");
define("REPORT_ARCHIVE_DELETE","Supprimer ces entrées");
define("REPORT_ARCHIVE_CONFIRM_DELETE","Êtes vous sûr de vouloir supprimer ces entrées ?");
define("REPORT_ARCHIVE_GALAXY","Galaxie");
define("REPORT_ARCHIVE_SYSTEM","Système");
define("REPORT_ARCHIVE_PLANET","Planète");
define("REPORT_ARCHIVE_MOON","Lune");
define("REPORT_ARCHIVE_DETAILS","Détails");
define("REPORT_ARCHIVE_RESOURCES",DETAILEDINFO_RESOURCES);
define("REPORT_ARCHIVE_HEADER_RESOURCES",REPORTS_RESOURCES);
define("REPORT_ARCHIVE_DETAILS_FOR","Rapport archivé de &1 [&2] (&3)"); // &1 = planetname; &2 = coordinates; &3 = playername
define("REPORT_ARCHIVE_FLEET_CARGO","Capacité de fret");
define("REPORT_ARCHIVE_IRAK_RANGE","Portée des missiles interplanétaires");
define("REPORT_ARCHIVE_CHART_TYPE","Diagramme");

/*********************************************************************
* install.php
**********************************************************************/
define("INSTALL_TITLE", "Version de Galaxytool");
define("INSTALL_PROGRESS", "Progression de l'installation");
define("INSTALL_STEP", "Etape");
define("INSTALL_CONTINUE", "Continuer");
define("INSTALL_VALIDATE", "Valider");
define("INSTALL_STEP1", "Bienvenu");
define("INSTALL_STEP2", "Test d'écriture");
define("INSTALL_STEP3", "Configuration de la base de données");
define("INSTALL_STEP4", "Paramètre d'Ogame");
define("INSTALL_STEP5", "Configuration de Galaxytool");
define("INSTALL_STEP6", "Mot de passe administrateur");
define("INSTALL_STEP7", "Installer Galaxytool");
define("INSTALL_STEP8", "Terminer l'installation"); // check writable; delete install and update.php and redirect to index.php
define("INSTALL_FILE_DELETE_CHECK","Veuillez supprimer install.php et update.php de votre serveur.");

define("INSTALL_STEP1_PHP_FAILED", "Votre version &1 de PHP ne fonctionne pas avec cette version de Galaxytool");
define("INSTALL_STEP1_FOPEN_FAILED", "Votre version de PHP ne permet pas l'utilisation de FOPEN(). Cette fonction est nécessaire pour utiliser l'API d'Ogame.");
define("INSTALL_STEP1_WELCOME", "Bienvenu sur l'assistant d'installation de Galaxytool. Vous allez être guidé tout le long de l'installation.");

define("INSTALL_STEP2_DESCRIPTION","Vérifiez que les fichiers config.php et attributes.php sont accessibles en écriture.");
define("INSTALL_STEP2_DESCRIPTION2","Si vous ne savez pas comment faire, suivez ce lien : &1");
define("INSTALL_STEP2_FILE_NOT_WRITEABLE", "Les fichiers ne sont pas accessible en écriture");

define("INSTALL_STEP3_SERVER", "Serveur BDD");
define("INSTALL_STEP3_USERNAME", L_USERNAME);
define("INSTALL_STEP3_PASSWORD", L_PASSWORD);
define("INSTALL_STEP3_DBNAME", "Nom de la BDD");
define("INSTALL_STEP3_PREFIX", "Préfixe");
define("INSTALL_STEP3_ENTER_PREFIX", "Ex: mytool_");
define("INSTALL_STEP3_ENTER_SERVER", "Entrez l'adresse du serveur. Contacter l'administrateur système si besoin. En général, la valeur correct est localhost.");
define("INSTALL_STEP3_ENTER_USERNAME", "Entrez le nom d'utilisateur de la BDD");
define("INSTALL_STEP3_ENTER_PASSWORD", "Entrez le mot de passe de la BD");
define("INSTALL_STEP3_ENTER_DBNAME", "Entrez le nom de la BDD qui sera utilisé pour l'installation (doit exister)");
define("INSTALL_STEP3_CONNECT_FAILED", "Echec de la connexion avec le serveur BDD");
define("INSTALL_STEP3_DB_FAILED", "La BDD $1 n'existe pas.");
define("INSTALL_STEP3_MYSQL_VERSION_FAILED", "MySQL version &1 ne fonctionne pas avec cette version de Galaxytool");

define("INSTALL_STEP4_URL","URL d'OGame");
define("OGAME_URL_DETAILS","Veuillez entrer l'URL d'une page Ogame quelconque après connexion. Galaxytool va utiliser cette url pour trouver l'URL de l'API d'Ogame afin de rajouter les informations publiques de votre serveur sans utiliser Galaxytoolbar. Cette API a été introduite avec la version 4.1 d'Ogame.");
define("INSTALL_STEP4_UNIVERSE","Univers d'OGame");
define("INSTALL_STEP4_DEF_TO_DEBRIS","Défense dans le champs de ruines");
define("INSTALL_STEP4_DEBRIS_RATE","Débris (%)");
define("INSTALL_STEP4_SPEED_RATE","Vitesse");
define("INSTALL_STEP4_ENTER_UNIVERSE","Entrez le nom ou numéro de votre univers Ogame (sensible à la casse).");
define("INSTALL_STEP4_UNIVERSE_MISSING","Vous devez définir l'univers");
define("INSTALL_STEP4_ENTER_URL","Entrez l'adresse de votre univers");
define("INSTALL_STEP4_URL_MISSING","Vous devez définir l'adresse de votre univers");
define("INSTALL_STEP4_URL_CHECK_FAILED","Impossible de trouver l'API à &1");
// 5.1
define("INSTALL_STEP4_GETSETTINGS","Fetch settings");

define("INSTALL_STEP5_TOOLNAME","Nom du Galaxytool");
define("INSTALL_STEP5_ENTER_TOOLNAME","Ceci est le nom qui sera affiché sur la page de connexion de Galaxytool");
define("INSTALL_STEP5_LANGUAGE","Langue par défaut");
define("INSTALL_STEP5_EMAIL_TO","Email à");
define("INSTALL_STEP5_ENTER_EMAIL_TO","Entrez l'adresse mail à laquelle vous souhaitez recevoir les notifications d'enregistrement");
define("INSTALL_STEP5_EMAIL_FROM","Email d'envoi");
define("INSTALL_STEP5_ENTER_EMAIL_FROM","Cette adresse sera considéré comme l'adresse émettrice pour tous les messages envoyés depuis Galaxytool");
define("INSTALL_STEP5_USE_PHPMAILER","Utiliser PHPMailer");
define("INSTALL_STEP5_MAXSHOUTS","Nombre maximal de messages dans la shoutbox");
define("INSTALL_STEP5_ENTER_USE_PHPMAILER","Utiliser PHPMailer si votre serveur ne supporte pas par défaut l'envoi de message ");
define("INSTALL_PHPMAILER_HOST","Hôte SMPT");
define("INSTALL_PHPMAILER_HOST_EXAMPLE","ex: smtp.provider.com");
define("INSTALL_PHPMAILER_USER","Utilisateur");
define("INSTALL_PHPMAILER_USER_EXAMPLE","ex: user@provider.dcom");
define("INSTALL_PHPMAILER_PASS","Mot de ");
define("INSTALL_PHPMAILER_SECURE","Authentification (ex: ssl)");
define("INSTALL_PHPMAILER_PORT","Port SMTP");

define("INSTALL_STEP6_INTRO","Veuillez définir un mot de passe pour le compte <strong>admin</strong> que vous devrez utiliser à la première connexion.");

define("INSTALL_STEP7_CONFIG","Fichier de configuration créé");
define("INSTALL_STEP7_CONFIG_FAILED","Fichier de configuration non créé");
define("INSTALL_STEP7_ATTRIBUTES","Fichier des attributs créé");
define("INSTALL_STEP7_ATTRIBUTES_FAILED","Fichier des attributs non créé");
define("INSTALL_STEP7_CREATED_TABLES","Tables de la BDD créées");

define("INSTALL_STEP8_INTRO","Vous avez installé Galaxytool!");
define("INSTALL_STEP8_LOAD_DATA","Téléchargement des données OGame ...");
define("INSTALL_STEP8_LOAD_DATA_FINISHED","Téléchargement des données OGame terminé");
define("INSTALL_STEP8_DELETE_FILE","Vous devriez supprimer les fichiers install.php et update.php de votre serveur.");
define("INSTALL_STEP8_LOGON","Veuillez vous connecter avec le compte <strong>admin</strong> et le mot de passe que vous avez défini plus tôt.");

/*********************************************************************
* update.php
**********************************************************************/
define("UPDATE_START","Mise à jour vers la version &1");
define("UPDATE_STEP_DONE","Fait");
define("UPDATE_TITLE", "Mise à jour de Galaxytool");
define("UPDATE_STEP1_WELCOME", "Bienvenu sur l'assistant de mise à jour de Galaxytool. Vous allez être guider tout le long de la mise à jour.");
define("UPDATE_STEP1_BACKUP_FILES", "Faites dans un premiers temps une sauvegarde de dossier <strong>config</strong>! Vous devrez restorer son contenu en cas d'erreur.");
define("UPDATE_STEP1_BACKUP_DB", "Puis faites un <a href=\"http://www.ehow.com/how_2036600_create-database-php.html\">backup</a> de votre base de données.");
define("UPDATE_STEP1_PROCEED", "Une fois ces sauvegardes réalisées, vous pouvez mettre à jour Galaxytool.");
define("UPDATE_STEP1", INSTALL_STEP1);
define("UPDATE_STEP2", INSTALL_STEP5);
define("UPDATE_STEP2_OLD_VERSION", "Version précédente de Galaxytool");
define("UPDATE_STEP3", "Mettre à jour Galaxytool");
define("UPDATE_STEP3_UPDATE_RUNNING", "Mise à jour en cours, veuillez patienter...");
define("UPDATE_STEP4", "Terminer la mise à jour");
define("UPDATE_STEP4_INTRO","Galaxytool a été mis à jour !");
define("UPDATE_STEP4_UPDATE_DONE","Etapes de mise à jour réussis.");
define("UPDATE_FAILED","Echec de la mise à jour.");

?>