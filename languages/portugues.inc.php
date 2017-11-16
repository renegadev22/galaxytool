<?php
/*
 * defines the characters used in OGame to indicate player status
 */
define("PLAYER_BANNED","b");
define("PLAYER_VACATION_MODE","m");
define("PLAYER_NOOB","f");
define("PLAYER_INACTIVE","i");
define("PLAYER_LONG_INACTIVE","I");
define("PLAYER_OUTLAW","o");

/*********************************************************************/
/***************************** public ********************************/
/*********************************************************************/
//index.php
define("L_USERNAME","Utilizador");
define("L_PASSWORD","Senha");
define("L_LOGINFAILURE","Nome de Utilizador ou Senha incorrectos ou a conta ainda não foi activada.");
define("L_TOKENFAILURE","Palavra passe incorrecta ou a conta ainda não está activada.");
define("L_LOGINTEXT","Introduza o nome de Utilizador e Senha por favor.");
define("L_LANGUAGE","Idiomas disponíveis:");
define("L_TIMEOUT","A sessão expirou!");
define("L_REGISTER","Registar-se");
define("L_PWLOST","Perdeste a Senha?");
define("INDEX_TITLE","Vista Geral");
define("INDEX_INFO","Informação");
define("INDEX_ENTRIES","Total de sistemas");
define("INDEX_ENTRIES_LASTWEEK","Novos sistemas na última semana");
define("INDEX_ENTRIES_TO_OLD","Sistemas com mais de um mês");
define("INDEX_REGISTERED_USERS","Utilizadores registados");
define("INDEX_PAGEFORWARD","Se o seu browser não suportar o redireccionamento de páginas, clique aqui.");
define("INDEX_NOTICES","Notas");
define("INDEX_PLAYERS","Estatísticas do Jogador");
define("INDEX_ALLIES","Estatísticas da Aliança");
define("INDEX_REPORTS","Relatórios de Espionagem");
define("INDEX_VERSION","Nova versão disponível para download");
define("INDEX_LATEST_VERSION","Versão em utilização actualizada");
define("INDEX_SHOUTBOX","Mensagens");
define("INDEX_NOENTRY","Sem entradas");
define("INDEX_COMMENT","Escrever mensagem");
define("INDEX_INSERT","Inserir");
define("INDEX_UMOD","Jogadores em Modo de Férias");
define("INDEX_NO_MOONS","Número de luas");
define("INDEX_NO_EMPTY_SYSTEMS","Número de sistemas vazios");
define("INDEX_NO_FULL_SYSTEMS","Número de sistemas completamente cheios");
define("INDEX_NO_TARGETS","Número de possíveis alvos");
// 4.0
define("INDEX_USERINFO","Estatísticas");
define("INDEX_ONLINE","Ligados");
define("INDEX_TODAY","Ligados Hoje");
define("INDEX_ALL","Número Total de Ligações");
// 4.3.7
define("GENERAL_LOAD_FORM","Carregar para o formulário");
define("GENERAL_SAVE_FORM","Guardar a partir do formulário");
define("GENERAL_SAVE_AS_TEXT","Guardar como");
define("GENERAL_SAVE","Guardar");
// 4.8
define("INDEX_USERMANAGEMENT","Activation Overview");
define("INDEX_NEEDADMIN","Contas a desbloquear");
define("INDEX_NEEDEMAIL","Contas não validadas");
define("INDEX_TOOLBAR_INFO","Informação do Galaxytool plugin");
define("INDEX_TOOLBAR_URL","Galaxytool URL");
define("INDEX_TOOLBAR_VERSION_REQUIRED","Requer pelo menos a versão do Galaxytool plugin ");
define("INDEX_TOOLBAR_INSTALL_GUIDE","Instrução de instalação para o plugin");
define("INDEX_TOOLBAR_TOKEN","Palavra Passe");
define("INDEX_TOOLBAR_NEW_TOKEN","Nova Palavra passe");
define("INDEX_PLAYERS_WITH_N_PLANETS","Jogadores com mais de &1 planetas");
define("INDEX_GETTING_STARTED","Iniciando com oGalaxytool");
define("INDEX_GETTING_STARTED1","Bem-Vindo ao Galaxytool!");
define("INDEX_GETTING_STARTED2","O Galaxytool ajudar te-á a analisar o que se passa com o teu universo de OGame &1");
define("INDEX_GETTING_STARTED3","Antes de conseguires analisar os dados terás de os inserir. Para isso é necessário um plugin para o &1 Firefox.");
define("INDEX_GETTING_STARTED4","Depois de instalares o plugin, deverás navegar normalmente pelas páginas de OGame e e verás uma pequena janela a enviar informações para o Galaxytool.");
define("INDEX_GETTING_STARTED5","Uma vez que o plugin inseriu os dados no Galaxytool, poderás começar a ver onde os jogadores têm as colónias, quantas colónias têm, que relatórios existem e ainda quando eles são mais activos.");
define("INDEX_GETTING_STARTED6","Também te ajudará a comparar com os teus adversários ou analisando os teus relatórios de combate de forma a ver quantos ataques fizestes nos ultimos dias ou semanas.");
define("INDEX_GETTING_WIKIPAGE","Existem muitas características no Galaxytool.");
define("INDEX_GETTING_WIKIPAGE2","Vê-as na nossa página wiki.");
define("INDEX_GETTING_BOARD","Para comentários ou sugestões utiliza o nosso fórum:");
define("INDEX_GETTING_CHAT1","Visita-nos na nossa sala de chat:");
define("INDEX_GETTING_CHAT2","Estamos online 24 horas por dia mas gastamos muito do nosso tempo livre lá, portanto sê paciente.");
// new 5.0
define("INDEX_CLOSE","Fechar");
define("INDEX_LOGIN","Login");
define("GENERAL_REQUIRED_FIELDS","Por favor preencha todos os espaços obrigatórios");
define("INDEX_MESSAGES","Mensagens");
define("INDEX_EXAMPLE","Exemplo");
define("INDEX_INVALID_DATA","Dados inválidos");
define("GENERAL_COLUMN_HIDE_TITLE","Gerir colunas");
define("GENERAL_COLUMN_HIDE_INFO","Por favor escolha as colunas que deseja ver na tabela.");
define("GENERAL_ENTRIES_DELETED","&1 entradas apagadas");
define("GENERAL_APPLY","Aplicar");
define("STARTPAGE_GALAXYTOOL_DESCR","<em>Galaxytool</em> é uma ferramenta para o jogo de browser OGame.");
define("GENERAL_OVERWRITE","Subistituir entrada dupla");
define("GENERAL_OVERWRITE_QUESTION","Substituir?");
define("INDEX_OWN_LOGINS","Os seus dados de login");
define("GENERAL_OPEN_IN_NEW_WINDOW","Abrir a ligação numa nova janela");
// 5.1
define("GENERAL_UNIT_OF_MEASURE_DAYS","Days");

/*********************************************************************/
/***************************** internal ******************************/
/*********************************************************************/
// index.php
define("PROGRAM_NAME","OGame Galaxytool");
define("SHORTNAME","Galaxytool");
define("BACK_INDEX","Voltar à página principal");
define("UNIVERSE","Universo");

// search
define("MENU_INFO_LINKS","Informações");
define("MENU_PAGE","Vista Geral");
define("MENU_DB_SEARCH","Procurar na Base de Dados");
define("MENU_DB_NOTICES","Procurar Notas");
define("MENU_DB_REPORTS","Procurar Rel. de Espionagem");
define("MENU_GALAXYVIEW","Ver Sistema Solar");
define("MENU_STATISTICS","Estatísticas");
define("MENU_ALLYHISTORY","Evolução");
// 4.7
define("MENU_FLEET_MOVEMENTS","Movimento de Frotas");
define("MENU_COMBAT_REPORTS","Relatórios de Combate");
define("MENU_MESSAGES","Mensagens Ingame");

// insert / change
define("MENU_OPTION_LINKS","Opções");
define("MENU_DB_REFRESH","Inserir na Base de Dados");
define("MENU_NOTICES","As minhas Notas");
define("MENU_DB_STATUS","Ver Universo");
define("MENU_USEROPTIONS","Gestão de Utilizadores");
define("MENU_USEROPTIONS2","Opções de Utilizador");
define("MENU_USEROPTIONS3","Informação de Utilizadores");
// 4.2
define("MENU_ADMIN","Administração");
// 4.3.3
define("MENU_LOGOUT","Sair");

// Stuff
define("MENU_STUFF","Vários");
define("MENU_FORUM_THREAD","Fórum Galaxytool");
define("MENU_DOWNLOADPAGE","Página de download");
define("MENU_LANGUAGE","Idioma");
define("MENU_HELP","Ajuda");
// 4.0
define("MENU_TOOLOPTIONS","Opções do Galaxytool");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1"," foi inserido com <b>sucesso</b> na Base de Dados!");
define("PARSER_ERROR1","Erro ao tentar inserir as seguintes coordenadas:");
define("PARSER_ERROR2","Não se encontrou a Base de Dados!");
define("PARSER_ERROR3","Não se encontrou o servidor da Base de Dados!");
define("PARSER_WRONG_UNIVERSE","Universo errado - actuar: \"&1\" esperado: \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","OGame Galaxytool - Procurar");
define("SHOW_SEARCH","Procurar na Base de Dados");
define("SHOW_ALLYSYMBOL","TAG da Aliança");
define("SHOW_PLAYERNAME","Nome do Jogador");
define("SHOW_MOONS","Só Planetas com Lua");
define("SHOW_NOTICES","Só Planetas com Notas");
define("SHOW_COLONIES","Só Planetas possíveis de colonizar");
define("SHOW_YES","Sim");
define("SHOW_NO","Não");
define("SHOW_SEARCHRANGE","Intervalo");
define("SHOW_SEARCH_IN","Procurar na Galáxia");
define("SHOW_FROM_SYSTEM","do Sistema");
define("SHOW_FROM_PLANET","da posição");
define("SHOW_TO","até");
define("SHOW_DESCRIPTION","Pode usar o asterisco (*) para os nomes de Jogadores ou Alianças. Asim poderá encontrar todos os Jogadores com &quot;nome&quot; no seu nome.<br />Apenas preencha os campos que quer especificar.");
define("SHOW_SORT_BY","Ordenar por");
define("SHOW_GALASYSTEM","Galáxia/Sistema");
define("SHOW_ALLYNAME","Aliança");
define("SHOW_SEARCHBUTTON","Procurar");
define("SHOW_ADDRESS","Coordenadas");
define("SHOW_ALLYSORT","Aliança");
define("SHOW_PLANET","Planeta");
define("SHOW_STATUS","Estado");
define("SHOW_CURRENTNESS","Última actualização");
define("SHOW_PLAYER_STATUS","Estado do Jogador");
define("SHOW_PLAYER_STATUS1","Todos");
define("SHOW_PLAYER_STATUS2","Possíveis alvos");
define("SHOW_PLAYER_STATUS3","Inactivos");
define("SHOW_HITS","Resultados");
define("SHOW_OF","de");
define("SHOW_ASC","Ordem crescente");
define("SHOW_DESC","Ordem decrescente");
define("SHOW_RESULTS","Resultados por página");
define("SHOW_MOON","Lua");
define("SHOW_UKMOONSIZE","desconhecido");
define("SHOW_DF","Destroços");
define("SHOW_DF_LONG","Campo de Destroços");
define("SHOW_METAL","M");
define("SHOW_METAL_LONG","Metal");
define("SHOW_CRYSTAL","C");
define("SHOW_CRYSTAL_LONG","Cristal");
define("SHOW_BOTH","Ambos");
define("SHOW_AT_LEAST","(pelo menos)");
define("SHOW_DATE","Data");
define("SHOW_DATE_0","Não interessa");
define("SHOW_DATE_1","Anteriores a");
define("SHOW_DATE_2","Posteriores a");
define("SHOW_RANK","Rank");
define("SHOW_FRANK","Rank da frota");
define("SHOW_MEMBERS","Membros");
define("SHOW_NOTRANKED","Fora do Top 1500.");
define("SHOW_NOTICERES","Notas");
define("SHOW_REPORTS","Só Planetas com Relatórios de Espionagem");
define("SHOW_REPORTS_SHORT","R. Esp.");
define("SHOW_NOTHING","Sem resultados.");
define("SHOW_ALLIANCE_STATUS","Estado da Aliança");
define("SHOW_NO_STATUS","Não definido");
define("SHOW_NAP","PNA");
define("SHOW_ALLIED","Aliança");
define("SHOW_WAR","Em Guerra");
define("SHOW_BOYCOTT","Boicote");
define("SHOW_NEUTRAL","Neutral");
define("SHOW_OWN","Própria Aliança");
define("SHOW_WING","Recruta");
// obsolete with 5.0
define("SHOW_EXT_OPTIONS1","Mostra mais opções para definir intervalos, estatísticas, data ou destroços.");
define("SHOW_EXT_OPTIONS2","Mostra mais opções para colónias, luas, rel. de espionagem, notas, estado do jogador ou estado da aliança.");
define("SHOW_EXT_OPTIONS3","Mostra mais opções para a ordenação dos resultados.");
// new 5.0
define("SHOW_EXTENDED","pesquisa avançada");
define("SHOW_MOON_SELECTION","Planeta com lua");
define("SHOW_REPORT_SELECTION","Planet com Relatório de Espionagem");
define("SHOW_FILTER_BY","Excluir dos resultados");
define("SHOW_FILTER_NONE","Nenhuma");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Show players without score changes within the last few days");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","OGame Galaxytool - Ver Universo");
define("STATUS_DB_STATUS","Informação de Galáxias/Sistemas Solares disponíveis na Base de Dados");
define("STATUS_COLOR","Cor");
define("STATUS_AGE1","Última actualização: < 1 dia.");
define("STATUS_AGE2","Última actualização: 2 - 4 dias.");
define("STATUS_AGE3","Última actualização: 4 - 7 dias.");
define("STATUS_AGE4","Última actualização: 1 - 2 semanas.");
define("STATUS_AGE5","Última actualização: 2 - 4 semanas.");
define("STATUS_AGE6","Última actualização: > 1 mês!");
define("STATUS_AGE7","Sem informação na Base de Dados.");
define("STATUS_ON","(ligado)");
define("STYLES_COLOR1","Verde claro");
define("STYLES_COLOR2","Verde");
define("STYLES_COLOR3","Verde escuro");
define("STYLES_COLOR4","Amarelo");
define("STYLES_COLOR5","Laranja");
define("STYLES_COLOR6","Vermelho");
define("STYLES_COLOR7","Azul");
// 4.8
define("STATUS_DB_LEGEND","Legenda");
define("STATUS_GALAXY","Vista da Galáxia");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","Gestão de Utilizadores");
define("USER_NAMES","Utilizador");
define("USER_ERROR","Erro");
define("USER_NEWUSER","Novo Utilizador");
define("USER_OPTIONS","Opções");
define("USER_USERNAME","Nome de Utilizador");
define("USER_PASSWORD","Senha");
define("USER_PASSWORD_CONFIRM","Confirmar Senha");
define("USER_GALAXY","Galáxia");
define("USER_SEARCH","Permitir Procuras");
define("USER_INSERT","Permitir Inserções");
define("USER_DELETE","Apagar");
define("USER_DELETE_ENTRY","Quer mesmo apagar o Utilizador: ");
define("USER_STATUS","Ver Estatísticas");
define("USER_STYLES","Modificar layout");
define("USER_SUBMIT","Enviar");
define("USER_RESET","Limpar");
define("USER_YES","Sim");
define("USER_NO","Não");
define("USER_STYLEPATH","Caminho para styles.css");
define("USER_PROBES","Ver/Inserir Relatórios de Espionagem");
define("USER_EMAIL","E-mail");
define("USER_ERROR1","Senha errada ou e-mail inválido.");
define("USER_ERROR2","E-mail inválido.");
define("USER_INGAME","Nome dentro do OGame");
define("USER_ALLYTAG","TAG da Aliança");
define("USER_ALLYHISTORY","Ver/Inserir Histórico de Alianças");
define("USER_DIPLOMATIC","Muda estado Diplomático das Alianças");
define("USER_STATSPAGE","Número de resultados na página das estatísticas");
define("USER_LINKS","Links");
define("USER_LINKS2","Format:<br>text;url<br>text2;url2<br>text3;url3");
define("USER_EXPORT_TITLE","Cores para exportação de dados (BB Codes)");
define("USER_BB_COORDINATES","Coordenadas");
define("USER_BB_MOON","Lua");
define("USER_BB_DEBRIS","Campo de Destroços");
define("USER_BB_ALLY","Nome da Aliança");
define("USER_BB_ALLYDETAILS","Detalhes da Aliança");
define("USER_BB_PLAYERNAME","Nome do Jogador");
define("USER_BB_BANNED","Banido");
define("USER_BB_VACATION","Modo de Férias");
define("USER_BB_NOOB","Fraco");
define("USER_BB_INACTIVE","Inactivo (i)");
define("USER_BB_LONGINACTIVE","Inactivo (I)");
// new with 4.7
define("USER_DELETION","Apagar");
define("USER_FLEETINFO",MENU_FLEET_MOVEMENTS);
define("USER_ACTIVITIES","Actividade do Jogador");
define("USER_MAINTENANCE","Manutenção do Galaxytool");
define("USER_MANAGEMENT",MENU_USEROPTIONS);
define("USER_DELETE_MY_COMBAT_REPORTS","Apagar os meus Relatórios de Combate");
define("USER_DELETE_MY_MESSAGES","Apagar as minhas mensagens");
define("USER_DELETE_MY_FLEETMOVES","Apagar os meus movimentos de frota");
// 4.8
define("USER_DELETE_MY_COMBAT_REPORTS_LIMITED","Apagar os meus relatórios de combate com mais de &1 dias");
define("USER_DELETE_MY_MESSAGES_LIMITED","Apagar as minhas mensagens com mais de &1 dias");
define("USER_TABLE_ENTRIES","Número de resultados de pesquisa por página");
// 5.0
define("USER_EXISTS","Utilizador já em uso");
define("USER_BB_OUTLAW","Fora-da-Lei");
define("USER_INVALID_URL","URL &1 não é válido - o URL será ignorado");

/*********************************************************************
* galaxyview.php
*********************************************************************/
define("VIEW_TITLE","OGame Galaxytool - Ver Sistema Solar");
define("VIEW_NODATA","Sem informação.");
define("VIEW_GALAXY","Galáxia");
define("VIEW_SYSTEM","Sistema Solar");
define("VIEW_POSITION","Pos");
define("VIEW_PLANET","Planeta");
define("VIEW_MOON","Lua");
define("VIEW_TF","Destroços");
define("VIEW_PLAYER","Jogador");
define("VIEW_PLAYER_ADD","(Rank / Estado)");
define("VIEW_ALLY","Aliança");
define("VIEW_ALLY_ADD","(Rank / Membros)");
define("VIEW_METAL","M");
define("VIEW_CRYSTAL","C");
define("VIEW_COLONISED","Planetas habitados");
define("VIEW_UKMOONSIZE","n/d");
define("VIEW_BACK","Voltar atrás");
define("VIEW_NOTICE","Notas");
define("VIEW_REPORTS","R. Esp.");
define("VIEW_MOONPHALANX","Luas que podem espiar este sistema");
define("VIEW_NOMOONS","Não existem Luas");
define("VIEW_IRAKS","Planetas que podem enviar mísseis interplanetários");
define("VIEW_NOIRAKS","Não foram encontrados Mísseis Interplanetários");
// 4.0
define("VIEW_MOON_DESTROY_CHANCE","Probabilidade de destruição da Lua");
define("VIEW_CHANCE_WITH_ONE","Probabilidade com apenas uma Estrela da Morte");
define("VIEW_CHANCE_WITH_N","Probabilidade com ");
define("VIEW_DEATH_STARS","Estrelas da Morte");
define("VIEW_DS_DESTROY_CHANCE","Probabilidade de perder a(s) Estrela(s) da Morte");
define("VIEW_TOP","Top");
// new 4.3.5
define("VIEW_GO","Ir");
// new 5.0
define("VIEW_DIAMETER","Diâmetro");

/*********************************************************************
* change_password.php
**********************************************************************/
define("PW_TITLE","OGame Galaxytool - Mudar a Senha");
define("OLD_PASSWORD","Senha antiga");
define("NEW_PASSWORD","Senha nova");
define("CONFIRM_NEW_PASSWORD","Confirmar a Senha nova");
define("PW_MISMATCH","As Senhas não coincidem!");
define("PW_ERROR","A Senha antiga não está correcta!");
define("UPDATE_DONE","Actualizada com sucesso!");
// new 4.2
define("TIMEZONE_OFFSET","Diferença do Fuso horário para o Servidor");
// new 4.3
define("DELETE_ACCOUNT","apagar esta conta do Galaxytool");
define("DELETE_ACCOUNT_SAFETY_REQUEST","quer mesmo apagar esta conta deste Galaxytool?");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","Autorizações");
define("CH_PASSWD_ADMIN","Admin");
// new 4.7
define("TIMEZONE_OGAME_OFFSET","Diferença do Fuso horário para o Servidor OGame");
// new 4.8
define("CH_PASSWD_USER_LANGUAGE","Mudar linguagem após entrada");
define("CH_PASSWD_USER_LANGUAGE_NO_CHANGE","Não mudar");
define("CH_PASSWD_EXPAND","Expandido");
define("CH_PASSWD_COLLAPSE","Minimizado");
define("CH_PASSWD_HIDDEN","Escondido");
define("CH_PASSWD_GETTING_STARTED","Mostrar informação sobre como iniciar após entrada");
define("CH_PASSWD_PLUGIN","Mostrar Informação de Plugin após entrada");

/*********************************************************************
* notices.php
**********************************************************************/
define("NOTICE_TITLE","OGame Galaxytool - Notas");
define("NOTICE_HEADER","Editar Nota");
define("NOTICE_HEADER2","Editar Notas próprias");
define("NOTICE_PUBLIC","Visível aos outros?");
define("NOTICE_YES","Sim");
define("NOTICE_NO","Não");
define("NOTICE_TEXT","Texto");
define("NOTICE_SAVE","Guardar");
define("NOTICE_DELETED","Nota apagada.");
define("NOTICE_SAVED","Nota guardada.");
define("NOTICE_RESULTS","Todos os resultados");
define("NOTICE_USER","Utilizador");
define("NOTICE_DATE","Data");
define("NOTICE_EDIT","Editar");
define("NOTICE_DELETE","[ Apagar ]");
define("NOTICE_NEW","Criar uma nota");
define("NOTICE_NOTPUBLIC","Nota privada.");
define("NOTICE_ALL","Todas");
define("NOTICE_NONE",SHOW_FILTER_NONE);
define("NOTICE_SEARCH","Procurar Notas");
define("NOTICE_SEARCH_SHORT","Procurar");
define("NOTICE_HITS","Resultados");
define("NOTICE_SHOWRESULTS","Resultados por página");
define("NOTICE_OF","de");
define("NOTICE_NOTHING","Sem resultados");
// 4.0
define("NOTICE_CHARS","Caracteres");
define("NOTICE_PLAYERNAME","Jogadores");
define("NOTICE_SHOWALL","Mostra todas as Notas");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","OGame Galaxytool - Relatórios de Espionagem");
define("REPORTS_RESOURCES","Recursos");
define("REPORTS_FLEET","Frotas");
define("REPORTS_DEFENCE","Sistemas de defesas");
define("REPORTS_BUILDINGS","Edifícios");
define("REPORTS_TECHNOLOGY","Pesquisas");
define("REPORTS_MOON","Lua");
define("REPORTS_SEARCH","Procurar Relatórios de Espionagem");
define("REPORTS_SEARCH_SHORT","Procurar");
define("REPORTS_HITS","Resultados");
define("REPORTS_NOTHING","Não existem resultados para a pesquisa efectuada");
define("REPORTS_ADDRESS","Coordenadas");
define("REPORTS_CURRENTNESS","Última actualização");
define("REPORTS_PLAYERNAME","Jogador");
define("REPORTS_ALLY","Aliança");
define("REPORTS_VIEW","Ver Relatório");
define("REPORTS_SEARCH_IN","Procurar na Galáxia");
define("REPORTS_FROM_SYSTEM","desde o Sistema");
define("REPORTS_TO","até ao");
define("REPORTS_DELETE","[ Apagar ]");
define("REPORTS_DELETED","Relatório apagado!");
define("REPORTS_RESULTS","Resultados por página");
define("REPORTS_OF","de");
define("REPORTS_DATE","Data");
define("REPORTS_DATE_0","Não interessa");
define("REPORTS_DATE_1","Desde");
define("REPORTS_DATE_2","até");
define("REPORTS_NOTICES","Notas");
define("REPORTS_AT_LEAST_RESOURCES","Recursos (pelo menos)");
define("REPORTS_SEARCH_EXTENDED","Procura Estendida");
define("REPORTS_FLEET_RESIS","Pontos da frota");
define("REPORTS_DEFENCE_RESIS","Pontos da defesa");
define("REPORTS_ALL_RESIS","Soma de pontos");
define("REPORTS_TECHS","Tecnologias");
define("REPORTS_UNKNOWN_ENTRIES","entradas desconhecidas");
define("REPORTS_PARTLY_INSERTED","parcialmente inserido");
define("REPORTS_FOR_ALL_RES","para todos os recursos");
define("REPORTS_FOR_TF","para o campo de destroços");
define("REPORTS_KT","Cargueiros Pequenos");
define("REPORTS_GT","Cargueiros Grandes");
define("REPORTS_SS","Naves de batalha");
define("REPORTS_REC","Reciclador");
define("REPORTS_RAIDABLE","Somente possíveis alvos");
define("REPORTS_ALL_RESOURCES","Todos Recursos");
// 4.0
define("REPORTS_STUFF","Vários");
define("REPORTS_SPEEDSIM","Simular com Speedsim");
define("REPORTS_DRAGOSIM","Simular com Dragosim");
define("REPORTS_STATUS","Estado");
define("REPORTS_ERROR","Ocorreu um erro");
// 4.2
define("REPORTS_OWN_REPORTS","So os meus relatórios");
// 4.3.3
define("REPORTS_UPLOAD_BY","Relatório enviado por");
// 4.4
define("REPORTS_DEPTH","profundidade do relatório");
define("REPORTS_FLEET_SCORE","Pontuação de Frotas");
define("REPORTS_DEFENCE_SCORE","Pontuação de Defesas");
// 5.0
define("REPORTS_HOURS","horas");
define("REPORTS_MAX_RESULTS_HIT","A sua pesquisa retornou mais do que &1 resultados. Somente os primeiros &1 resultados serão mostrados. Por favor ajuste as restrições da sua pesquisa para obeter menos resultados.");
define("REPORTS_OSIMULATE","Simule com OSimulate");
define("REPORTS_SHOW_ONLY","Apenas mostrar");
define("REPORTS_SHOW_PLANETS","Planetas");
define("REPORTS_SHOW_MOONS","Luas");
define("REPORTS_OWNER","Dono dos Relatórios");

/*********************************************************************
* stats.php
**********************************************************************/
define("STATS_TITLE","OGame Galaxytool - Estatísticas");
define("STATS_TBLHEAD","Estatísticas");
define("STATS_RANK","Rank");
define("STATS_PLAYERNAME","Jogador");
define("STATS_ALLYNAME","TAG da Aliança");
define("STATS_SCORE","Pontos");
define("STATS_FLEET","Frota");
define("STATS_RESEARCH","Pesquisas");
define("STATS_MEMBERS","Membros");
define("STATS_STATUS","Diplomacia");
define("STATS_NOTHING","Não definido");
define("STATS_NAP","PNA");
define("STATS_ALLIED","Aliada");
define("STATS_WAR","Em Guerra");
define("STATS_BOYCOTT","Boicote");
define("STATS_NEUTRAL","Neutral");
define("STATS_OWN","Própria Aliança");
define("STATS_WING","Recruta");
define("STATS_UPDATE","Entrada de");
define("STATS_PLAYERSTATS","Estatísticas do Jogador");
define("STATS_ALLYSTATS","Estatísticas da Aliança");
// 4.0
define("STATS_DELETE","Quer mesmo apagar este registo?");
define("STATS_CONFIRM_DELETE","Tem a certeza que quer apagar?");
define("STATS_CHANGE_PLAYER_STATUS","Estatísticas do Jogador");
define("STATS_CHANGE_ALLIANCE_STATUS","Estatísticas da Aliança");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","Todos os membros desta Aliança vão adquirir a situação Diplomática escolhida. Qualquer situação anterior vai ser anulada. Pode mudar o estado Diplomático de algum jogador à posteriori.");
define("STATS_UNKNOWN","Restante");
define("STATS_DETAILS","Detalhes para");
// 4.4
define("STATS_PLAYERSTATUS",SHOW_PLAYER_STATUS);
define("STATS_IGNORE_STATUS",SHOW_PLAYER_STATUS1);
define("STATS_ACTIVE","Activo");
define("STATS_INACTIVE",USER_BB_INACTIVE);
define("STATS_BANNED",USER_BB_BANNED);
define("STATS_VACATION",USER_BB_VACATION);
define("STATS_NOOB",USER_BB_NOOB);
// 4.8
define("STATS_YES",SHOW_YES); // reuse SHOW definitions if applicable
define("STATS_NO",SHOW_NO);
define("STATS_SEARCH",USER_SEARCH);
define("STATS_SHOW_GRAPH","Mostras detalhes oara resultados de distribuição");
define("STATS_LONG_INACTIVE",USER_BB_LONGINACTIVE);
// 4.9
define("STATS_STANDARD","Pontos");
define("STATS_MILITARY","Pontos Militares");
define("STATS_ECONOMY","Pontos da Economia");
define("STATS_HONOUR","Pontos de Honra");
define("STATS_MILITARY_BUILD","Pontos Militares construídos");
define("STATS_MILITARY_DESTROYED","Pontos Militares destruídos");
define("STATS_MILITARY_LOST","Pontos Militares perdidos");

/*********************************************************************
* register.php
**********************************************************************/
define("REGISTER_REGISTRATE","Registar");
define("REGISTER_LOGINNAME","Utilizador");
define("REGISTER_PASSWORD","Senha");
define("REGISTER_PASSWORD_CONFIRM","Confirme a Senha");
define("REGISTER_EMAIL","E-mail");
define("REGISTER_INGAME","Nome no OGame");
define("REGISTER_ALLYTAG","TAG da Aliança");
define("REGISTER_EMAILVERIFICATION","Verificação de E-mail");
define("REGISTER_EMAILTEXT","Por favor visite o seguinte link para confirmar o registo na Galaxytool.");
define("REGISTER_ERROR1","Nome de Utilizador já escolhido.");
define("REGISTER_ERROR2","Erro ao tentar enviar o e-mail. Por favor contacte o admin!");
define("REGISTER_ERROR3","Ocorreu um erro enquanto envia os dados!");
define("REGISTER_INFO1","A sua conta foi criada.");
define("REGISTER_INFO2","Por favor visite o link no seu e-mail para confirmar o registo.");
define("REGISTER_INFO3","Registo confirmado. Resta apenas a activação que será feita pelo admin.");
define("REGISTER_BUTTON","Voltar à página principal");
define("REGISTER_NEW_SUBJECT","Um novo Utilizador registou-se na Galaxytool");
define("REGISTER_NEW_MAILTEXT","Um novo Utilizador registou-se.");
// new 4.2
define("REGISTER_BACK","Voltar a primeira pagina");
// new 4.3.5
define("REGISTER_MISSING_FIELDS","preencher todos os campos obrigatórios");
// new 4.8
define("REGISTER_ERROR4","Endereço de Email não é válido.");
define("REGISTER_ERROR5","Palavras Passe não são iguais.");
define("REGISTER_PWS","Força da Palavra Passe");
define("REGISTER_PWS0","Muito Fraco");
define("REGISTER_PWS1","Fraco");
define("REGISTER_PWS2","Bom");
define("REGISTER_PWS3","Forte");
define("REGISTER_PWS4","Muito Forte");
// new 5.0
define("REGISTER_EMAIL_USED","Endereço de Email em uso");

/*********************************************************************
* lost_password.php
**********************************************************************/
define("LOSTPW_TITLE","Perdi a minha Senha");
define("LOSTPW_INFO2","Uma nova Senha foi gerada e enviada para o seu e-mail.");
define("LOSTPW_BUTTON1","Receber nova Senha");
define("LOSTPW_BUTTON2","Voltar à página principal");
define("LOSTPW_LOGINNAME","Nome de Utilizador");
define("LOSTPW_EMAIL","E-mail");
define("LOSTPW_ERROR1","Erro ao tentar enviar informação para a Base de Dados!");
define("LOSTPW_ERROR2","Nenhuma entrada encontrada!");
define("LOSTPW_ERROR3","Erro ao tentar enviar o e-mail. Por favor contacte o admin.");
define("LOSTPW_EMAIL_SUBJECT","Nova Senha Galaxytool");
define("LOSTPW_EMAIL_TEXT1","O seu novo login para o Galaxytool é");
define("LOSTPW_EMAIL_TEXT2","Utilizador");
define("LOSTPW_EMAIL_TEXT3","Senha");
// new 5.0
define("LOSTPW_INFO1","Receberá um email para verificar o seu pedido de nova Palavra-Passe.");
define("LOSTPW_CONFIRM_RESET_SUBJECT","Perdeu a Palavra-Passe?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","Olá,\n\nPediu uma palavra-passe nova. Para gerar uma palavra-passe nova, carregue no seguinte link:");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","OGame Galaxytool - Informação de Utilizadores");
define("USERINFO_NAMES","Todos os Utilizadores");
define("USERINFO_DETAIL","Informação detalhada sobre");
define("USERINFO_ERROR1","Não existe nenhum Utilizador com este ID!");
define("USERINFO_USERNAME","Utilizador");
define("USERINFO_INGAME","Nome no OGame");
define("USERINFO_EMAIL","E-mail");
define("USERINFO_ALLYTAG","Aliança");
define("USERINFO_STYLEPATH","Skin");
define("USERINFO_STATUS","Estado");
define("USERINFO_ACTIVATE","Activar Jogador");
define("USERINFO_LOGINS","Número de Acessos");
define("USERINFO_LASTLOGIN","Último Acesso em");
define("USERINFO_DATA","Informação sobre os Sistemas Solares inseridos");
define("USERINFO_NODATA","Nunca inseriu um Sistema Solar!</center>");
define("USERINFO_GALAXY","Galáxia");
define("USERINFO_SYSTEMS","Número de Sistemas Solares");
define("USERINFO_IP","Endereço IP");
define("USERINFO_LOGINTIME","Acesso em");
define("USERINFO_NOLOGIN","O Utilizador nunca se ligou.");
define("USERINFO_LAST_GALAXYUPDATE","Inseriu o último Sistema Solar em");
define("USERINFO_LAST_PUBLIC_NOTICE","Última Nota pública em");
define("USERINFO_LAST_PRIVATE_NOTICE","Última Nota privada em");
define("USERINFO_NUMBEROF_PUBLIC_NOTICE","Número de Notas públicas");
define("USERINFO_NUMBEROF_PRIVATE_NOTICE","Número de Notas privadas");
define("USERINFO_ACTIVATED","Conta activada- Deve dar as Permissões");
define("USERINFO_ACTIVATIONTEXT","O administrador do Galaxytool activou a tua conta.\n\nDivirta-se com o Galaxytool!");
// new 4.8
define("USERINFO_LAST_SUBMIT","Últimos dados inseridos");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","OGame Galaxytool - Evolução");
define("ALLYHISTORY_TBLHEAD","Evolução");
define("ALLYHISTORY_PLAYERNAME","Jogador");
define("ALLYHISTORY_ALLYNAME","Aliança");
define("ALLYHISTORY_LASTMONTH","Último mês"); // changed at 4.0
define("ALLYHISTORY_ALL_DATA","Toda a informação disponível"); // new 4.0
define("ALLYHISTORY_SHOW","Mostra Evolução");
define("ALLYHISTORY_TIMESPAN","Duração");
define("ALLYHISTORY_PROGESS","Progresso");
define("ALLYHISTORY_SCORE","Pontos");
define("ALLYHISTORY_FSCORE","Frota"); // new 4.0
define("ALLYHISTORY_RSCORE","Pesquisas"); // new 4.0
define("ALLYHISTORY_MEMBER","Membros"); // new 4.0
define("ALLYHISTORY_NOTHING","Não existem dados");
define("ALLYHISTORY_DETAILS","Detalhes");
define("ALLYHISTORY_SHOW_ADDRESS","Coordenadas");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","Informações de Jogador");
define("DETAILEDINFO_ALLYINFO_TITLE","Informações de Aliança");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","Informações detalhadas de Jogador");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","Informações detalhadas de Aliança");
define("DETAILEDINFO_NO_ALLIANCE","Nenhuma");
define("DETAILEDINFO_SCORE","Estatísticas por Pontos");
define("DETAILEDINFO_FLEET","Estatísticas Por Frota");
define("DETAILEDINFO_RESEARCH","Estatísticas por Pesquisas");
define("DETAILEDINFO_RANK","Rank");
define("DETAILEDINFO_POINTS","Pontos:");
define("DETAILEDINFO_KNOWN_PLANETS","Planetas conhecidos");
define("DETAILEDINFO_MOONS","Luas conhecidas");
define("DETAILEDINFO_PHALANX_AREA","Alcance Phalanx");
define("DETAILEDINFO_NO_PHALANX_AREA","Sem Phalanx ou não existem dados.");
define("DETAILEDINFO_NOTICES","Notas");
define("DETAILEDINFO_NO_NOTICES","Não existem Notas");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","Alianças anteriores");
define("DETAILEDINFO_RESOURCES_PER_HOUR","Produção Horária");
define("DETAILEDINFO_RESOURCES_PER_DAY","Produção Diária");
define("DETAILEDINFO_RESOURCES_PER_WEEK","Produção Semanal");
define("DETAILEDINFO_RESOURCES_PER_MONTH","Produção Mensal (30 dias)");
define("DETAILEDINFO_METAL","Metal");
define("DETAILEDINFO_CRYSTAL","Cristal");
define("DETAILEDINFO_DEUTERIUM","Deutério");
define("DETAILEDINFO_UNKNOWN","Sem Dados");
define("DETAILEDINFO_SCORE_DISTRIBUTION","Distribuição de Pontos");
// new 4.2
define("DETAILEDINFO_GENERAL","Detalhe");
define("DETAILEDINFO_MEMBERS","Membros");
define("DETAILEDINFO_GRAPHS","Gráficos");
define("DETAILEDINFO_RESOURCES","Recursos");
define("DETAILEDINFO_FLEET_TAB","Frota");
define("DETAILEDINFO_TECH","Pesquisas");
define("DETAILEDINFO_FLEET_DETAIL","Soma / (media de jogador) disponível nos relatórios");
define("DETAILEDINFO_TECH_DETAIL","Media de todos jogadores disponíveis");
// new 4.3
define("DETAILEDINFO_PLANET_TAB",REPORTS_SHOW_PLANETS);
define("DETAILEDINFO_MOON_TAB",REPORTS_SHOW_MOONS);
// 4.7
define("DETAILEDINFO_ACTIVITIES","Atividade");
define("DETAILEDINFO_NODATA",VIEW_NODATA); // reuse existing translations
define("DETAILEDINFO_ACTIVITY_DESCRIPTION","Ver atividade em &1 recolhidas de:");
define("DETAILEDINFO_GALAXYVIEWS","Vista de Galaxia");
define("DETAILEDINFO_SCANS","Acções de Espionagem");
define("DETAILEDINFO_MESSAGES","Mensagem de Jogadores");
define("DETAILEDINFO_COMBATS","Relatório de Combate");
define("DETAILEDINFO_ALLYPAGE","Vista Geral da Aliança");
define("DETAILEDINFO_MANUAL","Inserir Manualmente");
define("DETAILEDINFO_START","Iniciar");
define("DETAILEDINFO_TO","Para");
define("DETAILEDINFO_TODAY","Hoje");
define("DETAILEDINFO_DATA_RESTRICTION","Restrito para:");
define("DETAILEDINFO_WEEKDAY_WEEKEND","Fim de Semana");
define("DETAILEDINFO_WEEKDAY_WORKINGDAY","Dia de Semana");
define("DETAILEDINFO_WEEKDAY_MONDAY","Segunda");
define("DETAILEDINFO_WEEKDAY_TUESDAY","Terça");
define("DETAILEDINFO_WEEKDAY_WEDNESDAY","Quarta");
define("DETAILEDINFO_WEEKDAY_THURSDAY","Quinta");
define("DETAILEDINFO_WEEKDAY_FRIDAY","Sexta");
define("DETAILEDINFO_WEEKDAY_SATURDAY","Sabado");
define("DETAILEDINFO_WEEKDAY_SUNDAY","Domingo");
define("DETAILEDINFO_WEEKDAY_SHORTLENGTH",3); // number of characters to shorten week day
define("DETAILEDINFO_PLAYER_CURRENTLY_ACTIVE","O Jogador esta activo no momento");
define("DETAILEDINFO_PLAYER_MESSAGES","Memsagens de Jogadores disponiveis");
define("DETAILEDINFO_SHOW","Ver");
define("DETAILEDINFO_NONE","Nenhum disponivel");
define("DETAILEDINFO_ENTER_MANUALLY","inserir actividade para este jogador");
define("DETAILEDINFO_PLAYER_SEEN_ON","jogadores que estavam online em");
define("DETAILEDINFO_INSERT","Inserir");
define("DETAILEDINFO_OGAME_SERVERTIMES","Nota: todas as datas têm como referência a hora do servidor do OGame !");
define("DETAILEDINFO_DAY_VIEW","Vista de 24 horas");
define("DETAILEDINFO_WEEK_VIEW","Vista Semanal");
// new 4.8
define("DETAILEDINFO_HOME_PLANET","Planeta Principal");
// new 5.0
define("DETAILEDINFO_PLANETNAME","Nome"); // also used for moons!
define("DETAILEDINFO_DEFENCE_SCORE","Pontos de defesa");
define("DETAILEDINFO_DEFENCE_SCORE_TOOLTIP","Pontos de defesa = Pontos de frota - Pontos totais + Pontos de Pesquisa + Pontos de Economia.<br/>Todas as estatísticas devem estar actualizadas para obter resultados fiáveis!");
define("DETAILEDINFO_SCORE_PER_SHIP","Pontos por nave");
define("DETAILEDINFO_SHIPS","Número de naves");
define("DETAILEDINFO_DATE_IN_FUTURE","Não adicione actividades que ainda não aconteceram."); 

// new 4.2
/*********************************************************************
* administration.php
**********************************************************************/
define("ADMIN_TITLE","Administração do Galaxytool");
define("ADMIN_DISCLAMER","Atenção: Corre qualquer um destes scripts a teu risco! A maior parte deles vão apagar informação");
define("ADMIN_INCONSISTENCIES","inconsistências na base de dados");
define("ADMIN_PLANETS","Planetas na posição 0 ou mais do que 15");
define("ADMIN_GALAXIES","Apagar galáxias maiores que &1 ");
define("ADMIN_PLAYERS","Apagar jogadores sem (playerid)- causa os jogadores duplicados");
define("ADMIN_REPORTS","Apagar relatórios onde já não existe planetas ");
define("ADMIN_MISC","Miscellaneous");
define("ADMIN_RESET","Reset Galaxytool (Só utilizadores e tabela de ip’s não é apagada)");
define("ADMIN_OLD_PLAYERS"," Apagar dados inserido por jogadores com mais de &1 dias");
define("ADMIN_OLD_REPORTS","Apagar relatórios com mais de &1 dias");
define("ADMIN_LOADING","Não fechar esta janela ate a pagina estar carregada.");
define("ADMIN_STATUS","Estado do teu pedido ");
define("ADMIN_SELECTION","No mínimo 1 entrada tem de ser seleccionada");
define("ADMIN_SAFETY","Tem a certeza que quer correr este script(s) ?");
define("ADMIN_DONE","feito");
define("ADMIN_NOTBD","nada para fazer");
// new 4.3
define("ADMIN_OLD_GALAXIES","Remove vista da galáxias com mais de &1 dias");
define("ADMIN_UNUSED_PLAYERS","Remove jogadores que não estejam em nenhuma vista de galáxia");
// new 4.7
define("ADMIN_OLD_ACTIVITIES","Apagar Atividades de jogadores com mais de &1 dias");
// new 4.8
define("ADMIN_OLD_COMBATS","Remover relatórios de combate com mais de &1 dias");
define("ADMIN_OLD_INGAME_MSG","Remover mensagens do jogo com mais de &1 dias");
// new 5.0
define("ADMIN_OGAME_API","Carregar dados públicos do OGame para a Galaxytool"); 
define("ADMIN_OGAME_ALL_DATA",ALLYHISTORY_ALL_DATA);
define("ADMIN_OGAME_GALAXY_DATA",MENU_GALAXYVIEW);
define("ADMIN_OGAME_STATISTICS_DATA",MENU_STATISTICS);

// new 4.3.5
/*********************************************************************
* errorpage.php
**********************************************************************/
define("ERRORPAGE_PAGEFORWARD","Click aqui se o seu browser não suportar pagina seguinte");
define("ERRORPAGE_PERMISSION_DENIED","Tu não tens permissões para entrar nesta pagina. Click em voltar a traz.");

// new 4.7
/*********************************************************************
* fleet_movements.php
**********************************************************************/
define("FLEETS_TITLE","OGame Galaxytool - Movimento de Frotas");
define("FLEETS_ACTUAL_FLEETS","Movimento de Frotas atual");
define("FLEETS_YES",SHOW_YES);
define("FLEETS_NO",SHOW_NO);
define("FLEETS_DETAILS","Detalhe");
define("FLEETS_MISSION_EXPEDITION","Expedição");
define("FLEETS_MISSION_COLONIZATION","Colonizar");
define("FLEETS_MISSION_RECYCLE","Reciclar");
define("FLEETS_MISSION_TRANSPORT","Transportar");
define("FLEETS_MISSION_DEPLOYMENT","Transferir");
define("FLEETS_MISSION_ESPIONAGE","Espionar");
define("FLEETS_MISSION_ACS_DEFEND","Manter Possição");
define("FLEETS_MISSION_ATTACK","Atacar");
define("FLEETS_MISSION_ACS_ATTACK","Ataque em ACS");
define("FLEETS_MISSION_MOON_DESTRUCTION","Destruir Lua");
define("FLEETS_MISSION_MISSILE_ATTACK","Ataque de Misseis");
define("FLEETS_NO_DATA","Não foram encontrados dados");
// new 5.0
define("FLEETS_FLEET","Frota");
define("FLEETS_ALL_FLEETS","Mostrar todos os movimentos de frota");

/*********************************************************************
* parser_combat_reports.inc.php
**********************************************************************/
define("COMBAT_REPORT_OUDATED_GALAXYVIEW","Sua Galáxia está desatualizada. Por favor viste as coordenadas do atacante e do defensor primeiro!");

/*********************************************************************
* messages.php
**********************************************************************/
define("MESSAGES_TITLE","OGame Galaxytool - Mensagens do OGame");
define("MESSAGES_PLAYERNAME","Nome do Jogador");
define("MESSAGES_SUBJECT","Assunto");
define("MESSAGES_DATE","Data");
define("MESSAGES_FILTER","Filtro");
define("MESSAGES_DELETE","Apagar Mensagem");
define("MESSAGES_PUBLISH_DETAIL","Publicar o conteúdo da mensagem para o jogador.");
define("MESSAGES_PUBLISH_HEADER","&sender enviou mensagem para &recipient em &date:\n\n &message"); // &sender, &recipient, &date, &message replaced at runtime
define("MESSAGES_PLAYER_FILTER","Mensagens para o Jogador:");
// new 5.0
define("MESSAGES_CONTENT","Conteúdo das mensagens");

/*********************************************************************
* combat_reports.php
**********************************************************************/
define("COMBATS_TITLE","OGame Galaxytool - Relatórios de Combate");
define("COMBATS_ATTACKER","Atacante");
define("COMBATS_DEFENDER","Defensor");
define("COMBATS_DATE","Data");
define("COMBATS_OWNER","Dono");
define("COMBATS_WINNER","Vencedor");
define("COMBATS_COMBATREPORT","Relatório de Combate");
define("COMBATS_COMBAT_AT","Combat em:");
define("COMBATS_LOST_UNITS","Unidades Perdidas");
define("COMBATS_LOOT","Roubo");
define("COMBATS_DEBRIS","Campo de Destroços");
define("COMBATS_AND","e");
define("COMBATS_PUBLISH","Tornar este relatório publico");
define("COMBATS_UNPUBLISH","Despartilhar este relatório (torna-o privido novamente)");
define("COMBATS_DELETE","Apagar Relatório");
define("COMBATS_CHECK_ALL","Marcar todos");
define("COMBATS_UNCHECK_ALL","Desmarcar todos");
define("COMBATS_WITH_SELECTED","Com os Marcados");
define("COMBATS_PUBLIC_REPORTS","Relatórios Publicos");
define("COMBATS_YES",SHOW_YES); // no need for translation!
define("COMBATS_NO",SHOW_NO); // no need for translation!
define("COMBATS_SEARCH_OPTIONS","Opções de Busca");
define("COMBATS_SEARCH","IR");
define("COMBATS_RESET","Limpar");
// 4.8
define("COMBATS_COORDINATES",USER_BB_COORDINATES);
define("COMBATS_INVALID_GALAXY_ENTERED","Galáxia inserida inválida");
define("COMBATS_INVALID_SYSTEM_ENTERED","Sistema inserido invalido");
define("COMBATS_INVALID_PLANET_ENTERED","Planeta inserido inválido");
define("COMBATS_GALAXY_FROM_TO","Galáxia");
define("COMBATS_SYSTEM_FROM_TO","Sistema");
define("COMBATS_PLANET_FROM_TO","Planeta");
define("COMBATS_APPLY",GENERAL_APPLY);
define("COMBATS_COMBAT_SUMMARY","Resumo de relatório de combate");
define("COMBATS_DOWNLOAD_CSV","Fazer download como ficheiro CSV");

/*********************************************************************
* report_archive.php
**********************************************************************/
define("REPORT_ARCHIVE_TITLE","Arquivo de Relatório");
define("REPORT_ARCHIVE_COORDINATES","Coordenadas");
define("REPORT_ARCHIVE_SCANTIME","Tempo de pesquisa");
define("REPORT_ARCHIVE_DELETE","Apagar estas entradas");
define("REPORT_ARCHIVE_CONFIRM_DELETE","Quer mesmo apagar estas entradas??");
define("REPORT_ARCHIVE_GALAXY","Galáxia");
define("REPORT_ARCHIVE_SYSTEM","Sistema");
define("REPORT_ARCHIVE_PLANET","Planeta");
define("REPORT_ARCHIVE_MOON","Lua");
define("REPORT_ARCHIVE_DETAILS","Detalhes");
define("REPORT_ARCHIVE_RESOURCES",DETAILEDINFO_RESOURCES);
define("REPORT_ARCHIVE_HEADER_RESOURCES",REPORTS_RESOURCES);
define("REPORT_ARCHIVE_DETAILS_FOR","Arquivo de relatório para &1 [&2] (&3)"); // &1 = nome do planeta; &2 = coordenadas; &3 = nome do jogador
define("REPORT_ARCHIVE_FLEET_CARGO","Capacidade de carga da frota");
define("REPORT_ARCHIVE_IRAK_RANGE","Alcançe dos Misseis Interplanetários");
define("REPORT_ARCHIVE_CHART_TYPE","Tipo de gráfico");

/*********************************************************************
* install.php
**********************************************************************/
define("INSTALL_TITLE", "Instalação da Galaxytool para a versão");
define("INSTALL_PROGRESS", "Progresso total");
define("INSTALL_STEP", "Passo");
define("INSTALL_CONTINUE", "Continuar");
define("INSTALL_VALIDATE", "Validar");
define("INSTALL_STEP1", "Bem-vindo");
define("INSTALL_STEP2", "Confirmado como ficheiros de escrita");
define("INSTALL_STEP3", "Configuração da Base de dados");
define("INSTALL_STEP4", "Configurações do OGame");
define("INSTALL_STEP5", "Configurações da Galaxytool");
define("INSTALL_STEP6", "Palavra-Passe do Administrador");
define("INSTALL_STEP7", "Instalar Galaxytool");
define("INSTALL_STEP8", "Acabar a Instalação"); // check writable; delete install and update.php and redirect to index.php
define("INSTALL_FILE_DELETE_CHECK","Por favor elimine os ficheiros install.php e update.php do seu servidor.");

define("INSTALL_STEP1_PHP_FAILED", "A versão PHP &1 não funciona com esta versão da Galaxytool");
define("INSTALL_STEP1_FOPEN_FAILED", "A sua versão PHP não deixa abrir páginas com o comando FOPEN(). Isto é necessário para o OGame API.");
define("INSTALL_STEP1_WELCOME", "Bem-vindo ao guia de instalção da Galaxytool. Será guiado pela instalação da Galaxytool.");

define("INSTALL_STEP2_DESCRIPTION","Confirme que os seus ficheiros config.php e attributes.php tem permissões de escrita.");
define("INSTALL_STEP2_DESCRIPTION2","Se não sabe como conseguir isto por favor veja aqui como: &1");
define("INSTALL_STEP2_FILE_NOT_WRITEABLE", "Ficheiro sem permissão de escrita");

define("INSTALL_STEP3_SERVER", "Servidor da base de dados");
define("INSTALL_STEP3_USERNAME", L_USERNAME);
define("INSTALL_STEP3_PASSWORD", L_PASSWORD);
define("INSTALL_STEP3_DBNAME", "Nome da base de dados");
define("INSTALL_STEP3_PREFIX", "Prefixo do nome da tabela");
define("INSTALL_STEP3_ENTER_PREFIX", "Ex. aminhaferramenta_");
define("INSTALL_STEP3_ENTER_SERVER", "Insira o endereço de servidor. Contacte o administrador do servidor se neccesário. Normalmente o valor correcto é localhost.");
define("INSTALL_STEP3_ENTER_USERNAME", "Insira o nome de utilizador para acesso à base de dados");
define("INSTALL_STEP3_ENTER_PASSWORD", "Insira a palavra-passe para acesso à base de dados");
define("INSTALL_STEP3_ENTER_DBNAME", "Insira o nome da base dados, o qual será usado para a instalação (obrigatório)");
define("INSTALL_STEP3_CONNECT_FAILED", "Não foi possível contactar o sevidor da base de dados");
define("INSTALL_STEP3_DB_FAILED", "Base de dados &1 não encontrada");
define("INSTALL_STEP3_MYSQL_VERSION_FAILED", "Versão MySQL  &1 não funciona com esta versão da Galaxytool");

define("INSTALL_STEP4_URL","URL do OGame");
define("OGAME_URL_DETAILS","Por favor insira o URL que aparece quando está logado no OGame. Baseado no URL a ferramenta irá obter o endereço OGame API que pode ser usado para preencher os dados na Galaxytool sem usar a Galaxytoolbar. O API for introduzido com a versão 4.1 do OGame.");
define("INSTALL_STEP4_UNIVERSE","Universo do OGame");
define("INSTALL_STEP4_DEF_TO_DEBRIS","Defesa para destroços");
define("INSTALL_STEP4_DEBRIS_RATE","Taxa de destroços");
define("INSTALL_STEP4_SPEED_RATE","Velocidade");
define("INSTALL_STEP4_ENTER_UNIVERSE","Insira o nome ou número do seu Universo (sensível a Maiúsculas).");
define("INSTALL_STEP4_UNIVERSE_MISSING","Tem de definir o seu universo");
define("INSTALL_STEP4_ENTER_URL","Insira o endereço do Universo");
define("INSTALL_STEP4_URL_MISSING","Tem de inserir o enderço do Universo");
define("INSTALL_STEP4_URL_CHECK_FAILED","Não foi possível encontrar o OGame API em &1");
// 5.1
define("INSTALL_STEP4_GETSETTINGS","Fetch settings");

define("INSTALL_STEP5_TOOLNAME","Nome da Galaxytool");
define("INSTALL_STEP5_ENTER_TOOLNAME","Este é o nome na página de log in para identificar a sua Galaxytool");
define("INSTALL_STEP5_LANGUAGE","Língua por defeito");
define("INSTALL_STEP5_EMAIL_TO","Email para");
define("INSTALL_STEP5_ENTER_EMAIL_TO","Insira o endereço de email onde gostava de receber notificações sobre registos");
define("INSTALL_STEP5_EMAIL_FROM","Email de");
define("INSTALL_STEP5_ENTER_EMAIL_FROM","Este email será visto como o dono dos mails enviados da Galaxytool");
define("INSTALL_STEP5_USE_PHPMAILER","Use PHPMailer");
define("INSTALL_STEP5_MAXSHOUTS","Máximo número de mensagens na caixa de avisos");
define("INSTALL_STEP5_ENTER_USE_PHPMAILER","Use PHPMailer se o seu servidor não suportar enviar emails por defeito");
define("INSTALL_PHPMAILER_HOST","SMPT Host");
define("INSTALL_PHPMAILER_HOST_EXAMPLE","ex. smtp.provider.com");
define("INSTALL_PHPMAILER_USER","Nome de utilizador SMPT");
define("INSTALL_PHPMAILER_USER_EXAMPLE","ex. user@provider.dcom");
define("INSTALL_PHPMAILER_PASS","Palavra-Passe SMPT");
define("INSTALL_PHPMAILER_SECURE","Método de Autenticação (ex. ssl)");
define("INSTALL_PHPMAILER_PORT","Porta SMTP");

define("INSTALL_STEP6_INTRO","Por favor defina uma palavra-passe para o nome de utilizador <strong>admin</strong>  com o qual tem que fazer o seu primeiro acesso à Galaxytool a seguir à instalação.");

define("INSTALL_STEP7_CONFIG","Ficheiro configuration criado");
define("INSTALL_STEP7_CONFIG_FAILED","Ficheiro configuration nao criado");
define("INSTALL_STEP7_ATTRIBUTES","Ficheiro attributes criado");
define("INSTALL_STEP7_ATTRIBUTES_FAILED","Ficheiro attributes não criado");
define("INSTALL_STEP7_CREATED_TABLES","Tabelas da base de dados criadas");

define("INSTALL_STEP8_INTRO","Instalou com sucesso a Galaxytool!");
define("INSTALL_STEP8_LOAD_DATA","A fazer download dos dados do OGame ...");
define("INSTALL_STEP8_LOAD_DATA_FINISHED","O download dos dados do OGame terminou");
define("INSTALL_STEP8_DELETE_FILE","Agora deve apagar os ficheiros de instalção install.php e update.php do seu servidor.");
define("INSTALL_STEP8_LOGON","Por favor entre com o nome de utilizador <strong>admin</strong> e a palavra-passe que definiu anteriormente.");

/*********************************************************************
* update.php
**********************************************************************/
define("UPDATE_START","Iniciando actualização para a versão &1");
define("UPDATE_STEP_DONE","Concluído");
define("UPDATE_TITLE", "Actualizção da Galaxytool para a versão");
define("UPDATE_STEP1_WELCOME", "Bem-vindo ao guia de actualização da Galaxytool. Será guiado pela actualização da Galaxytool.");
define("UPDATE_STEP1_BACKUP_FILES", "Em primeiro, faça uma cópia de segurança da sua pasta <strong>config</strong>! Terá que substituir as configurações no caso de erros.");
define("UPDATE_STEP1_BACKUP_DB", "A seguir faça uma <a href=\"http://www.cybernetfx.com/clientes/knowledgebase.php?action=displayarticle&id=66/\">cópia de segurança</a> da sua base de dados.");
define("UPDATE_STEP1_PROCEED", "Assim que as suas cópias de segurança estejam feitas pode continuar com a actualização.");
define("UPDATE_STEP1", INSTALL_STEP1);
define("UPDATE_STEP2", INSTALL_STEP5);
define("UPDATE_STEP2_OLD_VERSION", "Versão anterior da Galaxytool");
define("UPDATE_STEP3", "Actualizar a Galaxytool");
define("UPDATE_STEP3_UPDATE_RUNNING", "Actualização a correr, por favor aguarde...");
define("UPDATE_STEP4", "Concluir Actualização");
define("UPDATE_STEP4_INTRO","Actualizou com sucesso a Galaxytool!");
define("UPDATE_STEP4_UPDATE_DONE","Passos de actualização realizados.");
define("UPDATE_FAILED","A actualização falhou.");

?>