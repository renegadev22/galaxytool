<?php
/*
 * defines the characters used in OGame to indicate player status
 */
define("PLAYER_BANNED","s");
define("PLAYER_VACATION_MODE","v");
define("PLAYER_NOOB","d");
define("PLAYER_INACTIVE","i");
define("PLAYER_LONG_INACTIVE","I");
define("PLAYER_OUTLAW","o");

/*********************************************************************/
/***************************** public ********************************/
/*********************************************************************/
//index.php
define("L_USERNAME","Usuario");
define("L_PASSWORD","Contraseña");
define("L_LOGINFAILURE","Su nombre de usuario o contraseña son incorrectos o su cuenta no ha sido activada aún.");
define("L_TOKENFAILURE","Su llave de Login es errónea o aún no está activado.");
define("L_LOGINTEXT","Por favor introduzca sus datos de acceso:");
define("L_LANGUAGE","Idiomas disponibles:");
define("L_TIMEOUT","¡Su sesión ha expirado!");
define("L_REGISTER","Registrarse");
define("L_PWLOST","Contraseña olvidada");
define("INDEX_TITLE","Visión General");
define("INDEX_INFO","Información");
define("INDEX_ENTRIES","Sistemas en total");
define("INDEX_ENTRIES_LASTWEEK","Nuevos sistemas en la última semana");
define("INDEX_ENTRIES_TO_OLD","Sistemas con antigüedad superior al mes");
define("INDEX_REGISTERED_USERS","Usuarios registrados");
define("INDEX_PAGEFORWARD","Si su navegador no soporta la redirección automática haga clic aquí.");
define("INDEX_NOTICES","Notas");
define("INDEX_PLAYERS","Estadísticas de Jugadores");
define("INDEX_ALLIES","Estadísticas de Alianzas");
define("INDEX_REPORTS","Informes de Espionaje");
define("INDEX_VERSION","Última versión para descargar");
define("INDEX_LATEST_VERSION","No hay una nueva versión disponible");
define("INDEX_SHOUTBOX","Mensajes actuales");
define("INDEX_NOENTRY","Sin mensajes");
define("INDEX_COMMENT","Tu comentario");
define("INDEX_INSERT","Introducir");
define("INDEX_UMOD","Jugadores en modo vacaciones");
define("INDEX_NO_MOONS","Cantidad de Lunas");
define("INDEX_NO_EMPTY_SYSTEMS","Cantidad de sistemas vacíos");
define("INDEX_NO_FULL_SYSTEMS","Cantidad de sistemas llenos");
define("INDEX_NO_TARGETS","Cantidad de planetas atacables");
// 4.0
define("INDEX_USERINFO","Usuarios");
define("INDEX_ONLINE","Ahora conectados");
define("INDEX_TODAY","Hoy conectados");
define("INDEX_ALL","Entradas totales");
// 4.3.7
define("GENERAL_LOAD_FORM","Cargar datos formulario");
define("GENERAL_SAVE_FORM","Guardar datos formulario");
define("GENERAL_SAVE_AS_TEXT","Guardar como");
define("GENERAL_SAVE","Guardar");
// 4.8
define("INDEX_USERMANAGEMENT","Visión de Activación");
define("INDEX_NEEDADMIN","Cuentas para activar");
define("INDEX_NEEDEMAIL","Cuentas aún no validadas");
define("INDEX_TOOLBAR_INFO","Informaciones sobre el Plugin Galaxytool");
define("INDEX_TOOLBAR_URL","URL Galaxytool");
define("INDEX_TOOLBAR_VERSION_REQUIRED","Versión mínima del Plugin de Galaxytool");
define("INDEX_TOOLBAR_INSTALL_GUIDE","Instrucciones de Instalación para el Plugin");
define("INDEX_TOOLBAR_TOKEN","Llave Login");
define("INDEX_TOOLBAR_NEW_TOKEN","Generar nueva Llave");
define("INDEX_PLAYERS_WITH_N_PLANETS","Jugador con más de &1 planetas");
define("INDEX_GETTING_STARTED","Primeros pasos con el Galaxytool");
define("INDEX_GETTING_STARTED1","¡Bienvenido en el Galaxytool!");
define("INDEX_GETTING_STARTED2","El Galaxytool te ayudará a averiguar lo que ocurre en tu Universo &1.");
define("INDEX_GETTING_STARTED3","Para poder analizar los datos, es preciso integrar estos en el Tool. Para ello necesitas de un Plugin como el &1 para Firefox.");
define("INDEX_GETTING_STARTED4","Tras instalar y configurar el Plugin navegas por las distintas páginas de OGame como de costumbre. Aparecerá una pequeña ventana de status adicional, cada vez que se transmitan datos al Galaxytool.");
define("INDEX_GETTING_STARTED5","Una vez que haya suficientes datos en el Galaxytool, puede comenzar el análisis. Así se puede mirar, donde los Jugadores tienen sus Colonias, de cuántas disponen, los informes de espionaje que existen de ellos y cuándo se encuentran conectados.");
define("INDEX_GETTING_STARTED6","El Galaxytool también puede servir para analizar tu propio progreso, comparándote con otros jugadores y analizando tus propios informes de batalla para ver lo que has capturado en los últimos días/semanas");
define("INDEX_GETTING_WIKIPAGE","Esto sólo eran unos ejemplos de las funciones del Galaxytool.");
define("INDEX_GETTING_WIKIPAGE2","En nuestra página de Wiki encontrarás recogidas todas las funciones.");
define("INDEX_GETTING_BOARD","En nuestro Foro puedes plantear consultas o sugerencias:");
define("INDEX_GETTING_CHAT1","O visítanos directamente en el canal de chat:");
define("INDEX_GETTING_CHAT2","No estamos las 24 horas / 7 días a la semana conectados, pero sí que nos puedes encontrar la mayor parte del tiempo allí. Por favor, no seas impaciente si tras 30 segundos no respondemos.");
// new 5.0
define("INDEX_CLOSE","Cerrar");
define("INDEX_LOGIN","Login");
define("GENERAL_REQUIRED_FIELDS","Por favor rellena todos los campos");
define("INDEX_MESSAGES","Mensajes");
define("INDEX_EXAMPLE","Ejemplo");
define("INDEX_INVALID_DATA","Entrada inválida");
define("GENERAL_COLUMN_HIDE_TITLE","Gestion columnas");
define("GENERAL_COLUMN_HIDE_INFO","Aquí puedes elegir qué columnas mostrar en la tabla.");
define("GENERAL_ENTRIES_DELETED","&1 Entradas borradas");
define("GENERAL_APPLY","Aplicar");
define("STARTPAGE_GALAXYTOOL_DESCR","<em>Galaxytool</em> es una herramienta para el conocido Juego OGame.");
define("GENERAL_OVERWRITE","Sobreescribir entrada");
define("GENERAL_OVERWRITE_QUESTION","¿Sobreescribir?");
define("INDEX_OWN_LOGINS","Cantidad de tus logins");
define("GENERAL_OPEN_IN_NEW_WINDOW","Abrir enlace en una ventana nueva");
// 5.1
define("GENERAL_UNIT_OF_MEASURE_DAYS","Days");

/*********************************************************************/
/***************************** internal ******************************/
/*********************************************************************/
// index.php
define("PROGRAM_NAME","OGame Galaxytool");
define("SHORTNAME","Galaxytool");
define("BACK_INDEX","Volver a la página principal");
define("UNIVERSE","Universo");

// search
define("MENU_INFO_LINKS","Información");
define("MENU_PAGE","Visión General");
define("MENU_DB_SEARCH","Buscar en la base de datos");
define("MENU_DB_NOTICES","Buscar Notas");
define("MENU_DB_REPORTS","Buscar informes de espionaje");
define("MENU_GALAXYVIEW","Galaxia");
define("MENU_STATISTICS","Estadísticas");
define("MENU_ALLYHISTORY","Estadísticas temporales");
// 4.7
define("MENU_FLEET_MOVEMENTS","Movimientos de flotas");
define("MENU_COMBAT_REPORTS","Informes de Batalla");
define("MENU_MESSAGES","Mensajes de Jugador");

// insert / change
define("MENU_OPTION_LINKS","Opciones");
define("MENU_DB_REFRESH","Actualizar la base de datos");
define("MENU_NOTICES","Notas");
define("MENU_DB_STATUS","Estado de la base de datos");
define("MENU_USEROPTIONS","Gestión usuarios");
define("MENU_USEROPTIONS2","Opciones de usuario");
define("MENU_USEROPTIONS3","Información de usuarios");
// 4.2
define("MENU_ADMIN","Administración");
// 4.3.3
define("MENU_LOGOUT","Desconectarse");

// Stuff
define("MENU_STUFF","Otros");
define("MENU_FORUM_THREAD","Foro desarrolladores");
define("MENU_DOWNLOADPAGE","Página de descarga");
define("MENU_LANGUAGE","Elegir idioma");
define("MENU_HELP","Ayuda");
// 4.0
define("MENU_TOOLOPTIONS","Opciones del Galaxytool");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1","ha sido añadido a la base de datos");
define("PARSER_ERROR1","Error al intentar añadir las siguientes coordenadas:");
define("PARSER_ERROR2","¡Error al seleccionar la base de datos!");
define("PARSER_ERROR3","¡No se ha podido encontrar el servidor de la base de datos!");
define("PARSER_WRONG_UNIVERSE","Universo incorrecto - actual: \"&1\" esperado: \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","OGame Galaxietool - Página de consulta");
define("SHOW_SEARCH","Búsqueda en la base de datos");
define("SHOW_ALLYSYMBOL","Etiqueta de Alianza");
define("SHOW_PLAYERNAME","Nombre del Jugador");
define("SHOW_MOONS","Sólo buscar Lunas");
define("SHOW_NOTICES","Sólo buscar planetas con Notas");
define("SHOW_COLONIES","Sólo planetas Colonizables");
define("SHOW_YES","Sí");
define("SHOW_NO","No");
define("SHOW_SEARCHRANGE","Rango de Búsqueda");
define("SHOW_SEARCH_IN","Búsqueda en la Galaxia");
define("SHOW_FROM_SYSTEM","del sistema");
define("SHOW_FROM_PLANET","de la posición");
define("SHOW_TO","hasta el");
define("SHOW_DESCRIPTION","En el caso de jugadores y etiquetas de alianza se pueden utilizar * como comodines, de tal forma que *Jugador* busca a todos los jugadores cuyo nombre incluya &quot;Jugador&quot;.<br />No hay que rellenar todos los campos, de forma que se pueden buscar las coordenadas de una alianza, o de todas las lunas de una alianza.");
define("SHOW_SORT_BY","Ordenar por");
define("SHOW_GALASYSTEM","Galaxia/Sistemas");
define("SHOW_ALLYNAME","Nombre de la Alianza");
define("SHOW_SEARCHBUTTON","Buscar");
define("SHOW_ADDRESS","Coordenadas");
define("SHOW_ALLYSORT","Alianza");
define("SHOW_PLANET","Nombre planeta");
define("SHOW_STATUS","Estado");
define("SHOW_CURRENTNESS","Actualizado");
define("SHOW_PLAYER_STATUS","Estado jugador");
define("SHOW_PLAYER_STATUS1","todos");
define("SHOW_PLAYER_STATUS2","atacable");
define("SHOW_PLAYER_STATUS3","inactivo");
define("SHOW_HITS","Resultados");
define("SHOW_OF","de");
define("SHOW_ASC","ascendente");
define("SHOW_DESC","descendente");
define("SHOW_RESULTS","Coincidencias a mostrar");
define("SHOW_MOON","Luna");
define("SHOW_UKMOONSIZE","desconocido");
define("SHOW_DF","Escombros");
define("SHOW_DF_LONG","Escombros");
define("SHOW_METAL","M");
define("SHOW_METAL_LONG","Metal");
define("SHOW_CRYSTAL","C");
define("SHOW_CRYSTAL_LONG","Cristal");
define("SHOW_BOTH","Juntos");
define("SHOW_AT_LEAST","(min.)");
define("SHOW_DATE","Fecha");
define("SHOW_DATE_0","igual");
define("SHOW_DATE_1","más antiguo que");
define("SHOW_DATE_2","más nuevo que");
define("SHOW_RANK","Rank en Puntos");
define("SHOW_FRANK","Rank en Flotas");
define("SHOW_MEMBERS","Miembros");
define("SHOW_NOTRANKED","Fuera del Top 1500.");
define("SHOW_NOTICERES","Notas");
define("SHOW_REPORTS","Sólo planetas con informes");
define("SHOW_REPORTS_SHORT","Espionaje");
define("SHOW_NOTHING","No se han encontrado coincidencias");
define("SHOW_ALLIANCE_STATUS","Estado Alianza");
define("SHOW_NO_STATUS","Sin Estado");
define("SHOW_NAP","PNA");
define("SHOW_ALLIED","Aliado");
define("SHOW_WAR","Guerra");
define("SHOW_BOYCOTT","Boikot");
define("SHOW_NEUTRAL","Neutral");
define("SHOW_OWN","Propia Alianza");
define("SHOW_WING","Cantera");
// obsolete with 5.0
define("SHOW_EXT_OPTIONS1","Muestra opciones de búsqueda avanzadas para búsquedas de alcance, de rangos, fechas así como de campos de escombros.");
define("SHOW_EXT_OPTIONS2","Muestra opciones de búsqueda avanzadas para búsquedas de sitios colonizables, Lunas, Informes, Notas, Estado de jugadores o diplomacia.");
define("SHOW_EXT_OPTIONS3","Muestra opciones de búsqueda avanzadas para ordenar los resultados de la búsqueda.");
// new 5.0
define("SHOW_EXTENDED","Búsqueda ampliada");
define("SHOW_MOON_SELECTION","Planeta con Luna");
define("SHOW_REPORT_SELECTION","Planeta con Informe de Espionaje");
define("SHOW_FILTER_BY","excluir de los filtros de búsqueda");
define("SHOW_FILTER_NONE","ninguno");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Show players without score changes within the last few days");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","OGame Galaxietool - Página Estado");
define("STATUS_DB_STATUS","Estado de la base de datos");
define("STATUS_COLOR","Color");
define("STATUS_AGE1","Entrada con un día de antigüedad.");
define("STATUS_AGE2","Entrada con 2-4 días de antigüedad.");
define("STATUS_AGE3","Entrada con 4-7 días de antigüedad.");
define("STATUS_AGE4","Entrada con 1-2 semanas de antigüedad.");
define("STATUS_AGE5","Entrada con 2-4 semanas de antigüedad.");
define("STATUS_AGE6","¡Entrada con antigüedad superior a un mes!");
define("STATUS_AGE7","Sin entradas existentes.");
define("STATUS_ON","Activo");
define("STYLES_COLOR1","Color1");
define("STYLES_COLOR2","Color2");
define("STYLES_COLOR3","Color3");
define("STYLES_COLOR4","Color4");
define("STYLES_COLOR5","Color5");
define("STYLES_COLOR6","Color6");
define("STYLES_COLOR7","Color7");
// 4.8
define("STATUS_DB_LEGEND","Leyenda");
define("STATUS_GALAXY","Visión de Galaxia");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","OGame Galaxietool - Gestión de usuarios");
define("USER_NAMES","Usuarios");
define("USER_ERROR","Error");
define("USER_NEWUSER","Nuevo usuario");
define("USER_OPTIONS","Opciones");
define("USER_USERNAME","Nombre del usuario");
define("USER_PASSWORD","Contraseña");
define("USER_PASSWORD_CONFIRM","Repetir contraseña");
define("USER_GALAXY","Galaxia");
define("USER_SEARCH","Buscar");
define("USER_INSERT","Añadir");
define("USER_DELETE","Borrar");
define("USER_DELETE_ENTRY","Realmente quiere borrar al jugador: "); // new 3.6
define("USER_STATUS","Visión Estado");
define("USER_STYLES","Adaptar Estilos");
define("USER_SUBMIT","Enviar");
define("USER_RESET","Resetear");
define("USER_YES","Sí");
define("USER_NO","No");
define("USER_STYLEPATH","Ruta hacia el styles.css");
define("USER_PROBES","Informe de espionaje");
define("USER_EMAIL","Email");
define("USER_ERROR1","Contraseña incorrecta o Email inválido.");
define("USER_ERROR2","Dirección Email inválida.");
define("USER_INGAME","Nombre en OGame");
define("USER_ALLYTAG","Etiqueta de la Alianza");
define("USER_ALLYHISTORY","Historia de la Alianza");
define("USER_DIPLOMATIC","Diplomático");
define("USER_STATSPAGE","Cantidad de entradas en las estadísticas");
define("USER_LINKS","Enlaces");
define("USER_LINKS2","Formato:<br>texto;url<br>texto2;url2<br>texto3;url3");
define("USER_EXPORT_TITLE","Colores (BB Codes)");
define("USER_BB_COORDINATES","Coordenadas");
define("USER_BB_MOON","Luna");
define("USER_BB_DEBRIS","Escombros");
define("USER_BB_ALLY","Nombre de la Alianza");
define("USER_BB_ALLYDETAILS","Detalles de la Alianza");
define("USER_BB_PLAYERNAME","Nombre del jugador");
define("USER_BB_BANNED","Baneado");
define("USER_BB_VACATION","Modo vacaciones");
define("USER_BB_NOOB","Protección de novatos");
define("USER_BB_INACTIVE","Inactivo");
define("USER_BB_LONGINACTIVE","Inactivo");
// new with 4.7
define("USER_DELETION","Borrar");
define("USER_FLEETINFO",MENU_FLEET_MOVEMENTS);
define("USER_ACTIVITIES","Actividades Jugador");
define("USER_MAINTENANCE","Mantenimiento");
define("USER_MANAGEMENT",MENU_USEROPTIONS);
define("USER_DELETE_MY_COMBAT_REPORTS","Borrar mis Informes de Batalla");
define("USER_DELETE_MY_MESSAGES","Borrar mis Mensajes de Jugador");
define("USER_DELETE_MY_FLEETMOVES","Borrar mis Movimientos de Flotas");
// 4.8
define("USER_DELETE_MY_COMBAT_REPORTS_LIMITED","Borrar mis informes de batalla que sean más antiguos que &1 días");
define("USER_DELETE_MY_MESSAGES_LIMITED","Borrar mis mensajes de jugadores que sean más antiguos que &1 días");
define("USER_TABLE_ENTRIES","Cantidad de resultados de búsqueda por página");
// 5.0
define("USER_EXISTS","Ya existe un usuario con este nombre");
define("USER_BB_OUTLAW","proscrito");
define("USER_INVALID_URL","La dirección &1 no parece ser válida. Por favor modifícala o será ignorada.");

/*********************************************************************
* galaxyview.php
*********************************************************************/
define("VIEW_TITLE","OGame Galaxietool - Vista detallada");
define("VIEW_NODATA","No hay datos disponibles.");
define("VIEW_GALAXY","Galaxia");
define("VIEW_SYSTEM","Sistema");
define("VIEW_POSITION","Pos.");
define("VIEW_PLANET","Planeta");
define("VIEW_MOON","Luna");
define("VIEW_TF","Escombros");
define("VIEW_PLAYER","Jugador");
define("VIEW_PLAYER_ADD","(Estado)"); // shortened at 3.6
define("VIEW_ALLY","Alianza");
define("VIEW_ALLY_ADD",""); // cleared at 3.6
define("VIEW_METAL","M");
define("VIEW_CRYSTAL","C");
define("VIEW_COLONISED","Planeta colonizado");
define("VIEW_UKMOONSIZE","desconocido");
define("VIEW_BACK","atrás");
define("VIEW_NOTICE","Notas");
define("VIEW_REPORTS","Espionaje");
define("VIEW_MOONPHALANX","Las siguientes lunas tienen este sistema en el Phalanx");
define("VIEW_NOMOONS","No se han encontrado Lunas");
define("VIEW_IRAKS","Los siguientes planetas tienen estos sistemas al alcance de sus misiles interplanetarios");
define("VIEW_NOIRAKS","No se han encontrado misiles");
// 4,0
define("VIEW_MOON_DESTROY_CHANCE","Probabilidad destrucción Luna");
define("VIEW_CHANCE_WITH_ONE","Probabilidad con una EDLM");
define("VIEW_CHANCE_WITH_N","Probabilidad con ");
define("VIEW_DEATH_STARS","EDLM");
define("VIEW_DS_DESTROY_CHANCE","Probabilidad pérdida de EDLM");
define("VIEW_TOP","Top");
// new 4.3.5
define("VIEW_GO","go");
// new 5.0
define("VIEW_DIAMETER","Diámetro");

/*********************************************************************
* change_password.php
**********************************************************************/
define("PW_TITLE","OGame Galaxietool - Cambiar contraseña");
define("OLD_PASSWORD","Contraseña anterior");
define("NEW_PASSWORD","Nueva contraseña");
define("CONFIRM_NEW_PASSWORD","Repetir contraseña nueva");
define("PW_MISMATCH","¡Las contraseñas no coinciden!");
define("PW_ERROR","¡La contraseña anterior es incorrecta!");
define("UPDATE_DONE","Contraseña cambiada.");
// new 4.2
define("TIMEZONE_OFFSET","Diferencia horaria con el servidor");
// new 4.3
define("DELETE_ACCOUNT","Borrar esta cuenta Galaxytool");
define("DELETE_ACCOUNT_SAFETY_REQUEST","¿Estas seguro de querer borrar esta cuenta?");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","Permisos");
define("CH_PASSWD_ADMIN","Admin");
// new 4.7
define("TIMEZONE_OGAME_OFFSET","Diferencia horaria al Servidor OGame");
// new 4.8
define("CH_PASSWD_USER_LANGUAGE","Cambiar a este idioma tras el Login");
define("CH_PASSWD_USER_LANGUAGE_NO_CHANGE","Sin cambio");
define("CH_PASSWD_EXPAND","Visible");
define("CH_PASSWD_COLLAPSE","Colapsado");
define("CH_PASSWD_HIDDEN","No visible");
define("CH_PASSWD_GETTING_STARTED","Mostrar Información de entrada en la Página Inicial");
define("CH_PASSWD_PLUGIN","Mostrar Información de Plugin en la Página Inicial");

/*********************************************************************
* notices.php
**********************************************************************/
define("NOTICE_TITLE","OGame Galaxietool - Notas");
define("NOTICE_HEADER","Editar Notas");
define("NOTICE_HEADER2","Editar notas propias");
define("NOTICE_PUBLIC","¿Visible para otros?");
define("NOTICE_YES","Sí");
define("NOTICE_NO","No");
define("NOTICE_TEXT","Nota Texto");
define("NOTICE_SAVE","Guardar");
define("NOTICE_DELETED","Entrada borrada");
define("NOTICE_SAVED","Entrada guardada.");
define("NOTICE_RESULTS","Todas las entradas");
define("NOTICE_USER","Usuario");
define("NOTICE_DATE","Fecha");
define("NOTICE_EDIT","Editar");
define("NOTICE_DELETE","Borrar");
define("NOTICE_NEW","Crear nota");
define("NOTICE_NOTPUBLIC","Nota no pública.");
define("NOTICE_ALL","todas");
define("NOTICE_NONE",SHOW_FILTER_NONE);
define("NOTICE_SEARCH","Buscar nota");
define("NOTICE_SEARCH_SHORT","Buscar");
define("NOTICE_HITS","Resultados");
define("NOTICE_SHOWRESULTS","Coincidencias por página");
define("NOTICE_OF","de");
define("NOTICE_NOTHING","No se han encontrado entradas");
// 4.0
define("NOTICE_CHARS","Carácter");
define("NOTICE_PLAYERNAME","Jugador");
define("NOTICE_SHOWALL","Mostrar todas las notas.");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","OGame Galaxietool - Informes de Espionaje");
define("REPORTS_RESOURCES","Recursos");
define("REPORTS_FLEET","Flotas");
define("REPORTS_DEFENCE","Defensas");
define("REPORTS_BUILDINGS","Edificios");
define("REPORTS_TECHNOLOGY","Investigaciones");
define("REPORTS_MOON","Luna");
define("REPORTS_SEARCH","Buscar informe");
define("REPORTS_SEARCH_SHORT","Buscar");
define("REPORTS_HITS","Resultados");
define("REPORTS_NOTHING","No se han encontrado entradas");
define("REPORTS_ADDRESS","Coordenadas");
define("REPORTS_CURRENTNESS","Antigüedad");
define("REPORTS_PLAYERNAME","Nombre del jugador");
define("REPORTS_ALLY","Alianza");
define("REPORTS_VIEW","Ver Informe");
define("REPORTS_SEARCH_IN","Búsqueda en Galaxia");
define("REPORTS_FROM_SYSTEM","del sistema");
define("REPORTS_TO","hasta el");
define("REPORTS_DELETE","borrar");
define("REPORTS_DELETED","Entrada borrada");
define("REPORTS_RESULTS","Coincidencias por página");
define("REPORTS_OF","de");
define("REPORTS_DATE","Fecha");
define("REPORTS_DATE_0","igual");
define("REPORTS_DATE_1","más antiguo que");
define("REPORTS_DATE_2","más nuevo que");
define("REPORTS_NOTICES","Notas");
define("REPORTS_AT_LEAST_RESOURCES","Recursos totales (min.)");
define("REPORTS_SEARCH_EXTENDED","Búsqueda avanzada");
define("REPORTS_FLEET_RESIS","Flotas- puntos");
define("REPORTS_DEFENCE_RESIS","Defensas- puntos");
define("REPORTS_ALL_RESIS","Pérdida puntos totales");
define("REPORTS_TECHS","Tecnologías");
define("REPORTS_UNKNOWN_ENTRIES","entradas desconocidas");
define("REPORTS_PARTLY_INSERTED","introducir parcialmente");
define("REPORTS_FOR_ALL_RES","para todos los recursos");
define("REPORTS_FOR_TF","Para los escombros");
define("REPORTS_KT","Nave pequeña de carga");
define("REPORTS_GT","Nave grande de carga");
define("REPORTS_SS","Nave de Batalla");
define("REPORTS_REC","Reciclador");
define("REPORTS_RAIDABLE","Sólo objetivos atacables");
define("REPORTS_ALL_RESOURCES","Recursos Totales");
// 4.0
define("REPORTS_STUFF","Otros");
define("REPORTS_SPEEDSIM","Simular con Speedsim");
define("REPORTS_DRAGOSIM","Simular con Dragosim");
define("REPORTS_STATUS","Estado");
define("REPORTS_ERROR","Ha ocurrido un error");
// 4.2
define("REPORTS_OWN_REPORTS","Sólo mis informes");
// 4.3.3
define("REPORTS_UPLOAD_BY","Informe introducido por");
// 4.4
define("REPORTS_DEPTH","Profundidad Informe");
define("REPORTS_FLEET_SCORE","Puntos Flota");
define("REPORTS_DEFENCE_SCORE","Puntos Defensa");
// 5.0
define("REPORTS_HOURS","Horas");
define("REPORTS_MAX_RESULTS_HIT","La búsqueda obtuvo más de &1 resultados. Sólo se muestran los primeros &1. Ajusta los parámetros de búsqueda para obtener menos resultados.");
define("REPORTS_OSIMULATE","Simular con OSimulate");
define("REPORTS_SHOW_ONLY","Mostrar sólo");
define("REPORTS_SHOW_PLANETS","Planetas");
define("REPORTS_SHOW_MOONS","Lunas");
define("REPORTS_OWNER","Informe de Espionaje de");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","OGame Galaxietool - Estadísticas");
define("STATS_TBLHEAD","Estadísticas");
define("STATS_RANK","Posición");
define("STATS_PLAYERNAME","Jugador");
define("STATS_SCORE","Puntos");
define("STATS_FLEET","Flota");
define("STATS_RESEARCH","Investigación");
define("STATS_ALLYNAME","Alianza");
define("STATS_MEMBERS","Miembros");
define("STATS_STATUS","Estado");
define("STATS_NOTHING","Sin Estado");
define("STATS_NAP","PNA");
define("STATS_ALLIED","Aliado");
define("STATS_WAR","Guerra");
define("STATS_BOYCOTT","Boikot");
define("STATS_NEUTRAL","Neutral");
define("STATS_OWN","Propia Alianza");
define("STATS_WING","Cantera");
define("STATS_UPDATE","datos del");
define("STATS_PLAYERSTATS","Estadística jugadores");
define("STATS_ALLYSTATS","Estadística alianza");
// 4.0
define("STATS_DELETE","borrar entrada");
define("STATS_CONFIRM_DELETE","¿Realmente desear borrar la entrada?");
define("STATS_CHANGE_PLAYER_STATUS","Status Jugador");
define("STATS_CHANGE_ALLIANCE_STATUS","Status Alianza");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","Todos los jugadores de la alianza reciben el estado elegido. Los estados existentes son reemplazados, aunque es posible darle a jugadores concretos después otro estados.");
define("STATS_UNKNOWN","Desconocido");
define("STATS_DETAILS","Detalles para");
// 4.4
define("STATS_PLAYERSTATUS",SHOW_PLAYER_STATUS);
define("STATS_IGNORE_STATUS",SHOW_PLAYER_STATUS1);
define("STATS_ACTIVE","activo");
define("STATS_INACTIVE",USER_BB_INACTIVE);
define("STATS_BANNED",USER_BB_BANNED);
define("STATS_VACATION",USER_BB_VACATION);
define("STATS_NOOB",USER_BB_NOOB);
// 4.8
define("STATS_YES",SHOW_YES); // reuse SHOW definitions if applicable
define("STATS_NO",SHOW_NO);
define("STATS_SEARCH",USER_SEARCH);
define("STATS_SHOW_GRAPH","Detalles sobre el reparto de puntos");
define("STATS_LONG_INACTIVE",USER_BB_LONGINACTIVE);
// 4.9
define("STATS_STANDARD","Puntos estándar");
define("STATS_MILITARY","Puntos militares");
define("STATS_ECONOMY","Economía");
define("STATS_HONOUR","Puntos honor");
define("STATS_MILITARY_BUILD","Puntos militares construidos");
define("STATS_MILITARY_DESTROYED","Puntos militares destruidos");
define("STATS_MILITARY_LOST","Puntos militares perdidos");

/*********************************************************************
* register.php
**********************************************************************/
define("REGISTER_REGISTRATE","Registrarse");
define("REGISTER_LOGINNAME","Nombre");
define("REGISTER_PASSWORD","Contraseña");
define("REGISTER_PASSWORD_CONFIRM","Repetir contraseña");
define("REGISTER_EMAIL","Email");
define("REGISTER_INGAME","Nombre en el Juego");
define("REGISTER_ALLYTAG","Etiqueta de Alianza");
define("REGISTER_EMAILVERIFICATION","Repetir Email");
define("REGISTER_EMAILTEXT","Haga clic en el siguiente enlace para completar el registro en Galaxietool.");
define("REGISTER_ERROR1","El nombre ya está siendo utilizado por otra persona.");
define("REGISTER_ERROR2","¡Error al intentar enviar el email! Contacte al administrador.");
define("REGISTER_ERROR3","Error al consultar la base de datos!");
define("REGISTER_INFO1","La cuenta ha sido creada.");
define("REGISTER_INFO2","Haga clic en el enlace que viene junto al Email para completar el proceso de registro.");
define("REGISTER_INFO3","Cuenta confirmada. Ahora el administrador debe de validar su cuenta.");
define("REGISTER_BUTTON","Hacia la página principal");
define("REGISTER_NEW_SUBJECT","Nuevo usuario en Galaxietool registrado");
define("REGISTER_NEW_MAILTEXT","Un nuevo usuario se ha registrado en el Galaxietool.");
// new 4.2
define("REGISTER_BACK","Volver a primera página");
// new 4.3.5
define("REGISTER_MISSING_FIELDS","Rellena todos los campos requeridos");
// new 4.8
define("REGISTER_ERROR4","Dirección email no válida.");
define("REGISTER_ERROR5","Las contraseñas no coinciden.");
define("REGISTER_PWS","Seguridad contraseña");
define("REGISTER_PWS0","muy débil");
define("REGISTER_PWS1","débil");
define("REGISTER_PWS2","buena");
define("REGISTER_PWS3","fuerte");
define("REGISTER_PWS4","muy fuerte");
// new 5.0
define("REGISTER_EMAIL_USED","Dirección email ya en uso");

/*********************************************************************
* lost_password.php
**********************************************************************/
define("LOSTPW_TITLE","Contraseña olvidada");
define("LOSTPW_INFO2","La nueva contraseña ha sido creada y enviada al email correspondiente.");
define("LOSTPW_BUTTON1","Pedir contraseña");
define("LOSTPW_BUTTON2","Hacia la página principal");
define("LOSTPW_LOGINNAME","Usuario");
define("LOSTPW_EMAIL","Email");
define("LOSTPW_ERROR1","¡Error al consultar la base de datos!");
define("LOSTPW_ERROR2","¡No se ha encontrado una entrada que corresponda!");
define("LOSTPW_ERROR3","¡Error al intentar enviar el Email! Contacte con el administrador.");
define("LOSTPW_EMAIL_SUBJECT","Petición de Contraseña");
define("LOSTPW_EMAIL_TEXT1","Datos de acceso para el Galaxietool");
define("LOSTPW_EMAIL_TEXT2","Usuario");
define("LOSTPW_EMAIL_TEXT3","Contraseña");
// new 5.0
define("LOSTPW_INFO1","Vas a recibir un Email de confirmación para restablecer la contraseña.");
define("LOSTPW_CONFIRM_RESET_SUBJECT","¿Contraseña olvidada?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","Hola,\n\ntú has solicitado restablecer tu contraseña de Galaxytool. Para generar una nueva contraseña haz clic en el siguiente enlace:");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","OGame Galaxietool - Información de usuario");
define("USERINFO_NAMES","Todos los usuarios del tool");
define("USERINFO_DETAIL","Información detallada acerca de");
define("USERINFO_ERROR1","¡Ningun usuario bajo esta ID!");
define("USERINFO_USERNAME","Usuario");
define("USERINFO_INGAME","Nombre Juego");
define("USERINFO_EMAIL","Email");
define("USERINFO_ALLYTAG","Alianza");
define("USERINFO_STYLEPATH","Skin");
define("USERINFO_STATUS","Estado");
define("USERINFO_ACTIVATE","Activar al jugador");
define("USERINFO_LOGINS","Cantidad Accesos");
define("USERINFO_LASTLOGIN","Último Acceso");
define("USERINFO_DATA","Información acerca de sistemas introducidos");
define("USERINFO_NODATA","¡El usuario nunca ha introducido datos!");
define("USERINFO_GALAXY","Galaxia");
define("USERINFO_SYSTEMS","Cantidad sistemas");
define("USERINFO_IP","IP");
define("USERINFO_LOGINTIME","Hora Acceso");
define("USERINFO_NOLOGIN","El usuario nunca se ha logado.");
define("USERINFO_LAST_GALAXYUPDATE","Última visión de galaxia introducida el");
define("USERINFO_LAST_PUBLIC_NOTICE","Última nota pública el");
define("USERINFO_LAST_PRIVATE_NOTICE","Última nota privada el");
define("USERINFO_NUMBEROF_PUBLIC_NOTICE","Cantidad de notas públicas");
define("USERINFO_NUMBEROF_PRIVATE_NOTICE","Cantidad notas privadas");
define("USERINFO_ACTIVATED","Cuenta activada");
define("USERINFO_ACTIVATIONTEXT","El administrador ha activado tu cuenta.\n\n¡Que disfrutes del Galaxietool!");
// new 4.8
define("USERINFO_LAST_SUBMIT","Última transmisión de datos");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","OGame Galaxietool - Historia de la Alianza"); // changed at 4.0
define("ALLYHISTORY_TBLHEAD","Visión General");
define("ALLYHISTORY_PLAYERNAME","Nombre");
define("ALLYHISTORY_ALLYNAME","Alianza");
define("ALLYHISTORY_LASTMONTH","Mes actual"); // changed at 4.0
define("ALLYHISTORY_ALL_DATA","todos los datos disponibles"); // new 4.0
define("ALLYHISTORY_SHOW","mostrar estadística");
define("ALLYHISTORY_TIMESPAN","espacio de tiempo");
define("ALLYHISTORY_PROGESS","Avance");
define("ALLYHISTORY_SCORE","Puntos");
define("ALLYHISTORY_FSCORE","Puntos Flotas"); // new 4.0
define("ALLYHISTORY_RSCORE","Puntos investigación"); // new 4.0
define("ALLYHISTORY_MEMBER","Miembros"); // new 4.0
define("ALLYHISTORY_NOTHING","No se han encontrado entradas");
define("ALLYHISTORY_DETAILS","Detalles");
define("ALLYHISTORY_SHOW_ADDRESS","Coordenadas");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","Información Jugador");
define("DETAILEDINFO_ALLYINFO_TITLE","Información Alianza");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","Información detallada del Jugador");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","Información detallada de la Alianza");
define("DETAILEDINFO_NO_ALLIANCE","ninguna");
define("DETAILEDINFO_SCORE","Estadísticas Puntos");
define("DETAILEDINFO_FLEET","Estadísticas Flota");
define("DETAILEDINFO_RESEARCH","Estadísticas investigaciones");
define("DETAILEDINFO_RANK","Posición");
define("DETAILEDINFO_POINTS","Puntos");
define("DETAILEDINFO_KNOWN_PLANETS","Planetas conocidos");
define("DETAILEDINFO_MOONS","Lunas conocidas");
define("DETAILEDINFO_PHALANX_AREA","Área del Phalanx");
define("DETAILEDINFO_NO_PHALANX_AREA","No se han encontrado Phalanx");
define("DETAILEDINFO_NOTICES","Notas");
define("DETAILEDINFO_NO_NOTICES","No hay notas");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","Alianzas Previas");
define("DETAILEDINFO_RESOURCES_PER_HOUR","Recursos por hora");
define("DETAILEDINFO_RESOURCES_PER_DAY","Recursos por día");
define("DETAILEDINFO_RESOURCES_PER_WEEK","Recursos por semana");
define("DETAILEDINFO_RESOURCES_PER_MONTH","Recursos por mes (30 días)");
define("DETAILEDINFO_METAL","Metal");
define("DETAILEDINFO_CRYSTAL","Cristal");
define("DETAILEDINFO_DEUTERIUM","Deuterio");
define("DETAILEDINFO_UNKNOWN","desconocido");
define("DETAILEDINFO_SCORE_DISTRIBUTION","Distribución Puntos");
// new 4.2
define("DETAILEDINFO_GENERAL","Detalles");
define("DETAILEDINFO_MEMBERS","Miembros");
define("DETAILEDINFO_GRAPHS","Gráficos");
define("DETAILEDINFO_RESOURCES","Recursos");
define("DETAILEDINFO_FLEET_TAB","Flota");
define("DETAILEDINFO_TECH","Investigación");
define("DETAILEDINFO_FLEET_DETAIL","Suma / (Media por jugador) entre todos los informes disponibles");
define("DETAILEDINFO_TECH_DETAIL","Media de toda la información de jugadores disponible");
// new 4.3
define("DETAILEDINFO_PLANET_TAB",REPORTS_SHOW_PLANETS);
define("DETAILEDINFO_MOON_TAB",REPORTS_SHOW_MOONS);
// 4.7
define("DETAILEDINFO_ACTIVITIES","Actividades");
define("DETAILEDINFO_NODATA",VIEW_NODATA); // reuse existing translations
define("DETAILEDINFO_ACTIVITY_DESCRIPTION","Mostrar actividades de &1 en el espacio de tiempo:");
define("DETAILEDINFO_GALAXYVIEWS","Visiones de Galaxia");
define("DETAILEDINFO_SCANS","Acciones de espionaje");
define("DETAILEDINFO_MESSAGES","Mensajes de jugadores");
define("DETAILEDINFO_COMBATS","Informes de Batalla");
define("DETAILEDINFO_ALLYPAGE","Visión Alianza");
define("DETAILEDINFO_MANUAL","Entradas manuales");
define("DETAILEDINFO_START","Comienzo");
define("DETAILEDINFO_TO","hasta");
define("DETAILEDINFO_TODAY","Hoy");
define("DETAILEDINFO_DATA_RESTRICTION","restringido a:");
define("DETAILEDINFO_WEEKDAY_WEEKEND","Fin de semana");
define("DETAILEDINFO_WEEKDAY_WORKINGDAY","Día semanal");
define("DETAILEDINFO_WEEKDAY_MONDAY","Lunes");
define("DETAILEDINFO_WEEKDAY_TUESDAY","Martes");
define("DETAILEDINFO_WEEKDAY_WEDNESDAY","Miércoles");
define("DETAILEDINFO_WEEKDAY_THURSDAY","Jueves");
define("DETAILEDINFO_WEEKDAY_FRIDAY","Viernes");
define("DETAILEDINFO_WEEKDAY_SATURDAY","Sábado");
define("DETAILEDINFO_WEEKDAY_SUNDAY","Domingo");
define("DETAILEDINFO_WEEKDAY_SHORTLENGTH",2); // number of characters to shorten week day
define("DETAILEDINFO_PLAYER_CURRENTLY_ACTIVE","El jugador está activo ahora mismo");
define("DETAILEDINFO_PLAYER_MESSAGES","Mensajes de jugadores disponibles");
define("DETAILEDINFO_SHOW","Mostrar");
define("DETAILEDINFO_NONE","no existen disponibles");
define("DETAILEDINFO_ENTER_MANUALLY","Recoger más tiempos online de este Jugador");
define("DETAILEDINFO_PLAYER_SEEN_ON","Jugador estuvo Online el");
define("DETAILEDINFO_INSERT","Insertar");
define("DETAILEDINFO_OGAME_SERVERTIMES","Nota: ¡Todos los tiempos recogidos aquí se refieren al horario servidor !");
define("DETAILEDINFO_DAY_VIEW","Visión 24 horas");
define("DETAILEDINFO_WEEK_VIEW","Visión semanal");
// new 4.8
define("DETAILEDINFO_HOME_PLANET","Planeta Principal");
// new 5.0
define("DETAILEDINFO_PLANETNAME","Nombre"); // also used for moons!
define("DETAILEDINFO_DEFENCE_SCORE","Puntos de defensa");
define("DETAILEDINFO_DEFENCE_SCORE_TOOLTIP","Los puntos de defensa se componen de Puntos de flota - Puntos totales+ Economía + Investigación<br/>¡Todas esas estadísticas deben ser actuales para obtener una búsqueda fiable!");
define("DETAILEDINFO_SCORE_PER_SHIP","Puntos por nave");
define("DETAILEDINFO_SHIPS","Cantidad naves");
define("DETAILEDINFO_DATE_IN_FUTURE","No recoger datos en el futuro");

// new 4.2
/*********************************************************************
* administration.php
**********************************************************************/
define("ADMIN_TITLE","Administración del Galaxytool");
define("ADMIN_DISCLAMER","Atención: ¡La ejecucion de cualquiera de estos scrpts es bajo vuestro propio riesgo! Muchos de ellos borran datos.");
define("ADMIN_INCONSISTENCIES","Inconsistencias en la Base de datos");
define("ADMIN_PLANETS","Planetas en posición 0 o mayor que 15");
define("ADMIN_GALAXIES","Borrado de galaxias mayor que &1 ");
define("ADMIN_PLAYERS","Borrado jugadores sin OGame playerid - Permitir entradas duplicadas de jugador");
define("ADMIN_REPORTS","Borrado de informes de planetas que ya no existen");
define("ADMIN_MISC","Varios");
define("ADMIN_RESET","Reiniciar Galaxytool (solo las tablas usertable e iptable no serán borradas)");
define("ADMIN_OLD_PLAYERS","Borrado de entradas de jugadores con más de &1 días");
define("ADMIN_OLD_REPORTS","Borrado de informes con más de &1 días");
define("ADMIN_LOADING","No cerrar esta ventana mientras se carga la página.");
define("ADMIN_STATUS","Estado de sus peticiones");
define("ADMIN_SELECTION","debe seleccionar una entrada al menos");
define("ADMIN_SAFETY","¿Está seguro de querer ejecutar este(os) script(s)?");
define("ADMIN_DONE","Hecho");
define("ADMIN_NOTBD","Nada que hacer");
// new 4.3
define("ADMIN_OLD_GALAXIES","Borrar visión de galaxia más antiguas que &1 días");
define("ADMIN_UNUSED_PLAYERS","Borrar jugadores que no aparezcan en ninguna visión de galaxia");
// new 4.7
define("ADMIN_OLD_ACTIVITIES","Eliminar actividades de jugador más antiguas que &1 días");
// new 4.8
define("ADMIN_OLD_COMBATS","Eliminar informes de batalla que sean más antiguos que &1 días");
define("ADMIN_OLD_INGAME_MSG","Eliminar mensajes de jugadores que sean más antiguos que &1 días");
// new 5.0
define("ADMIN_OGAME_API","Cargando datos disponibles de OGame en el Galaxytool");
define("ADMIN_OGAME_ALL_DATA",ALLYHISTORY_ALL_DATA);
define("ADMIN_OGAME_GALAXY_DATA",MENU_GALAXYVIEW);
define("ADMIN_OGAME_STATISTICS_DATA",MENU_STATISTICS);

// new 4.3.5
/*********************************************************************
* errorpage.php
**********************************************************************/
define("ERRORPAGE_PAGEFORWARD","Haz clic aquí si tu navegador no soporta la redirección de páginas");
define("ERRORPAGE_PERMISSION_DENIED","No tienes permiso para entrar a esta página. Haz clic para volver.");

// new 4.7
/*********************************************************************
* fleet_movements.php
**********************************************************************/
define("FLEETS_TITLE","Movimientos de flotas");
define("FLEETS_ACTUAL_FLEETS","Movimientos de flotas actuales");
define("FLEETS_YES",SHOW_YES);
define("FLEETS_NO",SHOW_NO);
define("FLEETS_DETAILS","Detalles Flota");
define("FLEETS_MISSION_EXPEDITION","Expedición");
define("FLEETS_MISSION_COLONIZATION","Colonización");
define("FLEETS_MISSION_RECYCLE","Reciclar");
define("FLEETS_MISSION_TRANSPORT","Transporte");
define("FLEETS_MISSION_DEPLOYMENT","Estacionar");
define("FLEETS_MISSION_ESPIONAGE","Espionaje");
define("FLEETS_MISSION_ACS_DEFEND","Defensa SAC");
define("FLEETS_MISSION_ATTACK","Ataque");
define("FLEETS_MISSION_ACS_ATTACK","Ataque SAC");
define("FLEETS_MISSION_MOON_DESTRUCTION","Destrucción Luna");
define("FLEETS_MISSION_MISSILE_ATTACK","Ataque Misiles");
define("FLEETS_NO_DATA","Sin información");
// new 5.0
define("FLEETS_FLEET","Flota");
define("FLEETS_ALL_FLEETS","mostrar todos los movimientos de flota");

/*********************************************************************
* parser_combat_reports.inc.php
**********************************************************************/
define("COMBAT_REPORT_OUDATED_GALAXYVIEW","Las visiones de galaxia están anticuadas. Por favor visitar primero las visiones de galaxia de los atacantes y defensores.");

/*********************************************************************
* messages.php
**********************************************************************/
define("MESSAGES_TITLE","OGame Galaxytool - OGame Mensajes");
define("MESSAGES_PLAYERNAME","Nombre Jugador");
define("MESSAGES_SUBJECT","Asunto");
define("MESSAGES_DATE","Fecha");
define("MESSAGES_FILTER","Filtro");
define("MESSAGES_DELETE","Borrar mensaje");
define("MESSAGES_PUBLISH_DETAIL","Publicar el mensaje, añadiendo el contenido del mensaje a las notas del jugador.");
define("MESSAGES_PUBLISH_HEADER","&sender ha enviado a &recipient el &date el siguiente mensaje:\n\n &message"); // &sender, &recipient, &date, &message replaced at runtime
define("MESSAGES_PLAYER_FILTER","Mensajes de Jugador:");
// new 5.0
define("MESSAGES_CONTENT","Contenido");

/*********************************************************************
* combat_reports.php
**********************************************************************/
define("COMBATS_TITLE","OGame Galaxytool - Informes Batalla");
define("COMBATS_ATTACKER","Atacante");
define("COMBATS_DEFENDER","Defensor");
define("COMBATS_DATE","Fecha");
define("COMBATS_OWNER","Dueño");
define("COMBATS_WINNER","Ganador");
define("COMBATS_COMBATREPORT","Informe Batalla");
define("COMBATS_COMBAT_AT","Batalla el");
define("COMBATS_LOST_UNITS","Unidades perdidas");
define("COMBATS_LOOT","Recompensa");
define("COMBATS_DEBRIS","Campo escombros");
define("COMBATS_AND","y");
define("COMBATS_PUBLISH","Publicar Informe Batalla");
define("COMBATS_UNPUBLISH","Retirar publicación Informe de Batalla (volver a poner como privado)");
define("COMBATS_DELETE","Borrar Informe de Batalla");
define("COMBATS_CHECK_ALL","Marcar todos");
define("COMBATS_UNCHECK_ALL","Desmarcar todos");
define("COMBATS_WITH_SELECTED","Con selección");
define("COMBATS_PUBLIC_REPORTS","Informes Públicos");
define("COMBATS_YES",SHOW_YES); // no need for translation!
define("COMBATS_NO",SHOW_NO); // no need for translation!
define("COMBATS_SEARCH_OPTIONS","Parámetros de búsqueda");
define("COMBATS_SEARCH","Buscar");
define("COMBATS_RESET","Restablecer");
// 4.8
define("COMBATS_COORDINATES",USER_BB_COORDINATES);
define("COMBATS_INVALID_GALAXY_ENTERED","Introducida galaxia no válida");
define("COMBATS_INVALID_SYSTEM_ENTERED","Introducido sistema no válido");
define("COMBATS_INVALID_PLANET_ENTERED","Introducidos planetas no válidos");
define("COMBATS_GALAXY_FROM_TO","Galaxia");
define("COMBATS_SYSTEM_FROM_TO","Sistema");
define("COMBATS_PLANET_FROM_TO","Planeta");
define("COMBATS_APPLY",GENERAL_APPLY);
define("COMBATS_COMBAT_SUMMARY","Resumen Informes de Batalla");
define("COMBATS_DOWNLOAD_CSV","Descargar como fichero CSV");

/*********************************************************************
* report_archive.php
**********************************************************************/
define("REPORT_ARCHIVE_TITLE","Archivo Informes Scan");
define("REPORT_ARCHIVE_COORDINATES","Coordenadas");
define("REPORT_ARCHIVE_SCANTIME","Hora de Scan");
define("REPORT_ARCHIVE_DELETE","Eliminar Registros");
define("REPORT_ARCHIVE_CONFIRM_DELETE","¿Realmente eliminar registros?");
define("REPORT_ARCHIVE_GALAXY","Galaxia");
define("REPORT_ARCHIVE_SYSTEM","Sistema");
define("REPORT_ARCHIVE_PLANET","Planeta");
define("REPORT_ARCHIVE_MOON","Luna");
define("REPORT_ARCHIVE_DETAILS","Detalles");
define("REPORT_ARCHIVE_RESOURCES",DETAILEDINFO_RESOURCES);
define("REPORT_ARCHIVE_HEADER_RESOURCES",REPORTS_RESOURCES);
define("REPORT_ARCHIVE_DETAILS_FOR","Archivo Informes Scan para &1 [&2] (&3)"); // &1 = planetname; &2 = coordinates; &3 = playername
define("REPORT_ARCHIVE_FLEET_CARGO","Capacidad de carga de la Flota");
define("REPORT_ARCHIVE_IRAK_RANGE","Alcance misiles interplanetarios");
define("REPORT_ARCHIVE_CHART_TYPE","Tipo Diagrama");

/*********************************************************************
* install.php
**********************************************************************/
define("INSTALL_TITLE", "Instalación de la Version de Galaxytool");
define("INSTALL_PROGRESS", "Progreso de Instalación");
define("INSTALL_STEP", "Paso");
define("INSTALL_CONTINUE", "Continuar");
define("INSTALL_VALIDATE", "Comprobar");
define("INSTALL_STEP1", "Bienvenido");
define("INSTALL_STEP2", "Comprobación escritura");
define("INSTALL_STEP3", "Configuración Base de datos");
define("INSTALL_STEP4", "Opciones OGame");
define("INSTALL_STEP5", "Opciones Galaxytool");
define("INSTALL_STEP6", "Contraseña Admin");
define("INSTALL_STEP7", "Instalación del Galaxytool");
define("INSTALL_STEP8", "Fin de la Instalación"); // check writable; delete install and update.php and redirect to index.php
define("INSTALL_FILE_DELETE_CHECK","Por favor elimina el install.php y update.php del servidor.");

define("INSTALL_STEP1_PHP_FAILED", "Tu version PHP &1 no es compatible con esta version de Galaxytool");
define("INSTALL_STEP1_FOPEN_FAILED", "Tu version de PHP no admite abrir páginas webs con el comando FOPEN(). Esta funcionalidad es requerida para usar el API de OGame.");
define("INSTALL_STEP1_WELCOME", "Bienvenido a la instalación del Galaxytool. Serás guíado paso a paso durante la instalación y en cada paso tendrás enlaces con información adicional.");

define("INSTALL_STEP2_DESCRIPTION","Por favor, asegúrate que los archivos config.php y attributes.php no estén protegidos contra escritura en el servidor.");
define("INSTALL_STEP2_DESCRIPTION2","Si no sabes como modificar la protección de escritura de estos archivos o carpetas haz clic aquí: &1");
define("INSTALL_STEP2_FILE_NOT_WRITEABLE", "El archivo no es editable");

define("INSTALL_STEP3_SERVER", "Servidor base de datos");
define("INSTALL_STEP3_USERNAME", L_USERNAME);
define("INSTALL_STEP3_PASSWORD", L_PASSWORD);
define("INSTALL_STEP3_DBNAME", "Nombre Base de datos");
define("INSTALL_STEP3_PREFIX", "Prefijo para nombre de las tablas");
define("INSTALL_STEP3_ENTER_PREFIX", "ejemplo. MiTool_");
define("INSTALL_STEP3_ENTER_SERVER", "Dirección del servidor, si tienes dudas pregunta al administrador del servidor. Normalmente el valor por defecto será localhost.");
define("INSTALL_STEP3_ENTER_USERNAME", "Usuario para el acceso a la base de datos");
define("INSTALL_STEP3_ENTER_PASSWORD", "Contraseña para acceder a la base de datos");
define("INSTALL_STEP3_ENTER_DBNAME", "Nombre de la base de datos en la que debe instalarse Galaxytool. (La base de datos debe existir)");
define("INSTALL_STEP3_CONNECT_FAILED", "No ha sido posible establecer una conexión con el servidor de la base de datos.");
define("INSTALL_STEP3_DB_FAILED", "Base de datos &1 no encontrada");
define("INSTALL_STEP3_MYSQL_VERSION_FAILED", "La version de MySQL &1 no es compatible con esta version de Galaxytool");

define("INSTALL_STEP4_URL","URL OGame");
define("OGAME_URL_DETAILS","Introduce aquí la dirección de tu servidor de OGame. Puedes usar la dirección de cualquier página de OGame, una vez que estés logueado. El Galaxytool obtendrá a partir de esa dirección la dirección API de OGame. El API fue introducido con la version 4.1 de OGame.");
define("INSTALL_STEP4_UNIVERSE","Universo de OGame");
define("INSTALL_STEP4_DEF_TO_DEBRIS","Defensa a los escombros");
define("INSTALL_STEP4_DEBRIS_RATE","Tasa defensa a escombros");
define("INSTALL_STEP4_SPEED_RATE","Velocidad");
define("INSTALL_STEP4_ENTER_UNIVERSE","Introduce aquí el nombre del Universo. En Universos antiguos es un número. (Atención a mayúsculas y minúsculas)");
define("INSTALL_STEP4_UNIVERSE_MISSING","Falta el Universo");
define("INSTALL_STEP4_ENTER_URL","Introduce la URL de tu servidor de OGame");
define("INSTALL_STEP4_URL_MISSING","Falta la URL de OGame");
define("INSTALL_STEP4_URL_CHECK_FAILED","No se ha podido encontrar el API de OGame en &1");
// 5.1
define("INSTALL_STEP4_GETSETTINGS","Fetch settings");

define("INSTALL_STEP5_TOOLNAME","Nombre Galaxytool");
define("INSTALL_STEP5_ENTER_TOOLNAME","Este nombre será visible en la página inicial de tu Galaxytool.");
define("INSTALL_STEP5_LANGUAGE","Idioma estándar");
define("INSTALL_STEP5_EMAIL_TO","Destinatario Email");
define("INSTALL_STEP5_ENTER_EMAIL_TO","A esta dirección de email se enviarán los emails de los nuevos usuarios que se registren.");
define("INSTALL_STEP5_EMAIL_FROM","Remitente Email");
define("INSTALL_STEP5_ENTER_EMAIL_FROM","Esta dirección de Email será el Remitente de los emails enviados por parte del Galaxytool");
define("INSTALL_STEP5_USE_PHPMAILER","Usar PHPMailer");
define("INSTALL_STEP5_MAXSHOUTS","Cantidad máxima de entradas en la Bandeja");
define("INSTALL_STEP5_ENTER_USE_PHPMAILER","Usa el PHPMailer si tu servidor no soporta enviar emails via PHP.");
define("INSTALL_PHPMAILER_HOST","Host SMPT");
define("INSTALL_PHPMAILER_HOST_EXAMPLE","ejemplo: smtp.proveedor.es");
define("INSTALL_PHPMAILER_USER","Usuario SMPT");
define("INSTALL_PHPMAILER_USER_EXAMPLE","ejemplo. usuario@proveedor.es");
define("INSTALL_PHPMAILER_PASS","Contraseña SMPT");
define("INSTALL_PHPMAILER_SECURE","Método identificación, ejemplo. ssl");
define("INSTALL_PHPMAILER_PORT","Puerto SMTP");

define("INSTALL_STEP6_INTRO","Por favor establece la contraseña de la cuenta <strong>admin</strong> para loguearte después de la instalación en Galaxytool.");

define("INSTALL_STEP7_CONFIG","Archivo de configuración generado");
define("INSTALL_STEP7_CONFIG_FAILED","El archivo de configuración no fue creado");
define("INSTALL_STEP7_ATTRIBUTES","Archivo de atributos generado");
define("INSTALL_STEP7_ATTRIBUTES_FAILED","Archivo de atributos no creado");
define("INSTALL_STEP7_CREATED_TABLES","Creadas las tablas de la base de datos");

define("INSTALL_STEP8_INTRO","¡Has finalizado la instalación del Galaxytool con éxito!");
define("INSTALL_STEP8_LOAD_DATA","Importando los datos de OGame a través de OGame API ...");
define("INSTALL_STEP8_LOAD_DATA_FINISHED","Finalizado la importación de los datos de OGame");
define("INSTALL_STEP8_DELETE_FILE","Ahora debes eliminar los archivos install.php y update.php del servidor.");
define("INSTALL_STEP8_LOGON","Ahora identifícate con el usuario <strong>admin</strong> y la contraseña que has creado antes.");

/*********************************************************************
* update.php
**********************************************************************/
define("UPDATE_START","Iniciando Update a la version &1");
define("UPDATE_STEP_DONE","Finalizado");
define("UPDATE_TITLE", "Update de Galaxytool para version");
define("UPDATE_STEP1_WELCOME", "Bienvenido al asistente de actualización de Galaxytool. Serás guíado paso a paso durante la actualización.");
define("UPDATE_STEP1_BACKUP_FILES", "En primer lugar crea una copia de seguridad de la carpeta <strong>config</strong>. En caso de error, debes restaurar esa copia de seguridad.");
define("UPDATE_STEP1_BACKUP_DB", "Después crea una <a href=\"http://www.ehow.com/how_2036600_create-database-php.html\">Copia de Seguridad</a>  de la Base de datos.");
define("UPDATE_STEP1_PROCEED", "Una vez creadas las copias de seguridad ya puedes comenzar el Update.");
define("UPDATE_STEP1", INSTALL_STEP1);
define("UPDATE_STEP2", INSTALL_STEP5);
define("UPDATE_STEP2_OLD_VERSION", "Version de Galaxytool anterior");
define("UPDATE_STEP3", "Update del Galaxytool");
define("UPDATE_STEP3_UPDATE_RUNNING", "Ejecutando Update. Por favor espera...");
define("UPDATE_STEP4", "Finalizar Update");
define("UPDATE_STEP4_INTRO","¡Has finalizado el Update con éxito!");
define("UPDATE_STEP4_UPDATE_DONE","Finalizados todos los pasos del Update.");
define("UPDATE_FAILED","Update fallado.");

?>