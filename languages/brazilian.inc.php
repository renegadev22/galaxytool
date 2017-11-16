<?php
/*
 * defines the characters used in OGame to indicate player status
 */
define("PLAYER_BANNED","b");
define("PLAYER_VACATION_MODE","m");
define("PLAYER_NOOB","n");
define("PLAYER_INACTIVE","i");
define("PLAYER_LONG_INACTIVE","I");
define("PLAYER_OUTLAW","o");

/*********************************************************************/
/***************************** public ********************************/
/*********************************************************************/
//index.php
define("L_USERNAME","Usuário");
define("L_PASSWORD","Senha");
define("L_LOGINFAILURE","Nome de Usuário ou Senha incorretos ou conta ainda não ativada");
define("L_TOKENFAILURE","Sua Chave de Login está errada ou sua conta ainda não esta ativada.");
define("L_LOGINTEXT","Introduza o nome de Usuário e Senha por favor");
define("L_LANGUAGE","Idiomas disponíveis:");
define("L_TIMEOUT","A sessão expirou");
define("L_REGISTER","Registar-se");
define("L_PWLOST","Esqueceu a Senha?");
define("INDEX_TITLE","Visão Geral"); // renamed
define("INDEX_INFO","Informação");
define("INDEX_ENTRIES","Total de sistemas");
define("INDEX_ENTRIES_LASTWEEK","Novos sistemas na última semana");
define("INDEX_ENTRIES_TO_OLD","Sistemas com mais de um mês");
define("INDEX_REGISTERED_USERS","Usuários registados");
define("INDEX_PAGEFORWARD","Se o seu browser não suportar o redireccionamento de páginas, clique aqui.");
define("INDEX_NOTICES","Notas");
define("INDEX_PLAYERS","Estatísticas do Jogador");
define("INDEX_ALLIES","Estatísticas da Aliança");
define("INDEX_REPORTS","Relatórios de Espionagem");
define("INDEX_VERSION","Última versão disponivel para download");
define("INDEX_LATEST_VERSION","Nenhuma versão nova disponível");
define("INDEX_SHOUTBOX","Mensagens");
define("INDEX_NOENTRY","Sem mensagens");
define("INDEX_COMMENT","Escrever mensagem");
define("INDEX_INSERT","Inserir");
define("INDEX_UMOD","Jogadores em Modo de Férias");
define("INDEX_NO_MOONS","Número de luas");
define("INDEX_NO_EMPTY_SYSTEMS","Número de sistemas vazios");
define("INDEX_NO_FULL_SYSTEMS","Número de sistemas completamente cheios");
define("INDEX_NO_TARGETS","Número de possíveis alvos");
// 4.0
define("INDEX_USERINFO","Número de Usuários");
define("INDEX_ONLINE","Online agora");
define("INDEX_TODAY","Online hoje");
define("INDEX_ALL","Total de logins");
// 4.3.7
define("GENERAL_LOAD_FORM","Carregar parâmetros do formulário");
define("GENERAL_SAVE_FORM","Salvar parâmetros do formulário");
define("GENERAL_SAVE_AS_TEXT","Salvar como");
define("GENERAL_SAVE","Salvar");
// 4.8
define("INDEX_USERMANAGEMENT","Vista Geral de ativações");
define("INDEX_NEEDADMIN","Contas para Aprovar");
define("INDEX_NEEDEMAIL","Contas não Validadas");
define("INDEX_TOOLBAR_INFO","Informação do Galaxytool Plugin");
define("INDEX_TOOLBAR_URL","Galaxytool URL");
define("INDEX_TOOLBAR_VERSION_REQUIRED","Requer pelo menos Galaxytool plugin versão");
define("INDEX_TOOLBAR_INSTALL_GUIDE","Instruções de instalação para o plugin");
define("INDEX_TOOLBAR_TOKEN","Chave de Login");
define("INDEX_TOOLBAR_NEW_TOKEN","Obter nova chave");
define("INDEX_PLAYERS_WITH_N_PLANETS","Jogadores com mais de &1 planetas");
define("INDEX_GETTING_STARTED","Começando com o Galaxytool");
define("INDEX_GETTING_STARTED1","Benvindo ao Galaxytool!");
define("INDEX_GETTING_STARTED2","O Galaxytool vai ajudar você a analisar o que está acontecendo em seu OGame universo &1");
define("INDEX_GETTING_STARTED3","Antes de começar a analisar seus dados, você precisa coleta-los primeiro. Para isso você precisa de um plugin para seu navedaor, como &1 para o Firefox.");
define("INDEX_GETTING_STARTED4","Depois de instalado o plugin, você deve naveguer através de suas páginas no OGame como de costume e você verá uma janela de status pequena sempre que for enviado novos dados ao seu Galaxytool.");
define("INDEX_GETTING_STARTED5","Assim que o plugin enviar conteúdo para o seu Galaxytool, você pode começar a analizar jogadores e suas colonias, onde estão, como estão desenvolvidas, que relatórios tem sobre ele e até mesmo sua atividade.");
define("INDEX_GETTING_STARTED6","Mas você também vai poder acompanhar a sua evolução em relação a outros jogadores ou analisando seus relatórios de combate para ver o quanto Você acumulou nos últimos dias ou semanas.");
define("INDEX_GETTING_WIKIPAGE","Há muitos outros recursos dentro do Galaxytool.");
define("INDEX_GETTING_WIKIPAGE2","Venha vê-los em nossa página wiki.");
define("INDEX_GETTING_BOARD","Para feedback ou ideias você pode usar o nosso Forum:");
define("INDEX_GETTING_CHAT1","Ou visite-nos no nosso Chat:");
define("INDEX_GETTING_CHAT2","Nós não estamos no ar 24/7, mas sempre que podemos estamos lá para ajudar, por favor tenha paciência.");
// new 5.0
define("INDEX_CLOSE","Fechar");
define("INDEX_LOGIN","Login");
define("GENERAL_REQUIRED_FIELDS","Por favor, preencha todos os campos obrigatórios");
define("INDEX_MESSAGES","Mensagens");
define("INDEX_EXAMPLE","Exemplo");
define("INDEX_INVALID_DATA","Dados inválidos");
define("GENERAL_COLUMN_HIDE_TITLE","gerenciar colunas");
define("GENERAL_COLUMN_HIDE_INFO","Por favor, selecione as colunas que você quer ver na tabela.");
define("GENERAL_ENTRIES_DELETED","&1 dados deletados");
define("GENERAL_APPLY","Aplicar");
define("STARTPAGE_GALAXYTOOL_DESCR","<em>Galaxytool</em> é uma ferramenta para o jogo de browser OGame.");
define("GENERAL_OVERWRITE","Substituir entrada duplicada");
define("GENERAL_OVERWRITE_QUESTION","Substituir?");
define("INDEX_OWN_LOGINS","Seus logins");
define("GENERAL_OPEN_IN_NEW_WINDOW","Abrir em nova janela");
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
define("MENU_DB_SEARCH","Procurar no GalaxyTool");
define("MENU_DB_NOTICES","Procurar Notas");
define("MENU_DB_REPORTS","Procurar Rel. de Espi.");
define("MENU_GALAXYVIEW","Ver Sistema Solar");
define("MENU_STATISTICS","Estatísticas");
define("MENU_ALLYHISTORY","Histórico da Aliança");
// 4.7
define("MENU_FLEET_MOVEMENTS","Movimento de frota");
define("MENU_COMBAT_REPORTS","Relatório de combate");
define("MENU_MESSAGES","Mensagens no jogo");

// insert / change
define("MENU_OPTION_LINKS","Opções");
define("MENU_DB_REFRESH","Inserir no Banco de Dados");
define("MENU_NOTICES","Minhas Anotações");
define("MENU_DB_STATUS","Ver Universo");
define("MENU_USEROPTIONS","Gestão de Usuários");
define("MENU_USEROPTIONS2","Opções de Usuário");
define("MENU_USEROPTIONS3","Informação de Usuários");
// 4.2
define("MENU_ADMIN","Administração");
// 4.3.3
define("MENU_LOGOUT","Sair");

// Stuff
define("MENU_STUFF","Variados");
define("MENU_FORUM_THREAD","Fórum");
define("MENU_DOWNLOADPAGE","Página de download");
define("MENU_LANGUAGE","Idioma");
define("MENU_HELP","Ajuda");
// 4.0
define("MENU_TOOLOPTIONS","Opções do Galaxytool");

/*********************************************************************
* parser.inc.php
*********************************************************************/
define("PARSER_INFO1"," foi inserido com <b>sucesso</b> no Banco de Dados!");
define("PARSER_ERROR1","Erro ao tentar inserir as seguintes coordenadas:");
define("PARSER_ERROR2","Não foi possível encontrar o Banco de Dados!");
define("PARSER_ERROR3","Não foi possível encontrar o servidor do Banco de Dados!");
define("PARSER_WRONG_UNIVERSE","Universo errado - actuar: \"&1\" esperado: \"&2\""); // &1 and &2 will be replaced at runtime

/*********************************************************************
* show.php
*********************************************************************/
define("SHOW_TITLE","OGame Galaxytool - Procurar");
define("SHOW_SEARCH","Procurar no Banco de Dados");
define("SHOW_ALLYSYMBOL","TAG da Aliança");
define("SHOW_PLAYERNAME","Nome do Jogador");
define("SHOW_MOONS","Só entre Planetas com Lua");
define("SHOW_NOTICES","Só entre Planetas com Notas");
define("SHOW_COLONIES","Só entre Planetas possíveis de colonizar");
define("SHOW_YES","Sim");
define("SHOW_NO","Não");
define("SHOW_SEARCHRANGE","Intervalo");
define("SHOW_SEARCH_IN","Procurar na Galaxia");
define("SHOW_FROM_SYSTEM","do Sistema");
define("SHOW_FROM_PLANET","da posição");
define("SHOW_TO","até");
define("SHOW_DESCRIPTION","Pode-se usar o asterístico (*) nos campos TAG da Aliança e Nome do jogador. Assim poderás encontrar jogadores com *nome* em seu nome.<br /><br />Apenas preencha os campos que quer especificar.");
define("SHOW_SORT_BY","Ordenar por");
define("SHOW_GALASYSTEM","Galaxia/Sistema");
define("SHOW_ALLYNAME","Aliança");
define("SHOW_SEARCHBUTTON","Procurar");
define("SHOW_ADDRESS","Localização");
define("SHOW_ALLYSORT","Aliança");
define("SHOW_PLANET","Planeta");
define("SHOW_STATUS","Estado");
define("SHOW_CURRENTNESS","Última atualização");
define("SHOW_PLAYER_STATUS","Estado do Jogador");
define("SHOW_PLAYER_STATUS1","Todos");
define("SHOW_PLAYER_STATUS2","Possíveis alvos");
define("SHOW_PLAYER_STATUS3","Inativos");
define("SHOW_HITS","Resultados");
define("SHOW_OF","de");
define("SHOW_ASC","Ordem crescente");
define("SHOW_DESC","Ordem decrescente");
define("SHOW_RESULTS","Resultados por página");
define("SHOW_MOON","Lua");
define("SHOW_UKMOONSIZE","desconhecido");
define("SHOW_DF","Destroços"); // In english DF its an acronym of Debris Field but in PT Debris Field is "Destroços", one word only, there isnt an acronym.
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
define("SHOW_REPORTS","Só entre Planetas com Relatórios de Espionagem");
define("SHOW_REPORTS_SHORT","R. Esp.");
define("SHOW_NOTHING","Sem resultados.");
define("SHOW_ALLIANCE_STATUS","Status da Aliança");
define("SHOW_NO_STATUS","no Status");
define("SHOW_NAP","PNA");
define("SHOW_ALLIED","Aliado");
define("SHOW_WAR","Em Guerra");
define("SHOW_BOYCOTT","Boicote");
define("SHOW_NEUTRAL","Neutro");
define("SHOW_OWN","Própria Aliança");
define("SHOW_WING","Forte");
// obsolete with 5.0
define("SHOW_EXT_OPTIONS1","Mostrar opções de busca para rank, data ou pesquisa de destroços.");
define("SHOW_EXT_OPTIONS2","Mostrar opções de busca para colônias, luas, relatórios, notas, status do joagdor ou status diplomatico.");
define("SHOW_EXT_OPTIONS3","Mostrar opções de busca para classificar os resultados.");
// new 5.0
define("SHOW_EXTENDED","Busca avançada");
define("SHOW_MOON_SELECTION","Planeta com Lua");
define("SHOW_REPORT_SELECTION","Planeta com relatório");
define("SHOW_FILTER_BY","Excluir da lista");
define("SHOW_FILTER_NONE","Nenhuma");
// new 5.1
define("SHOW_PLAYERS_WITHOUT_PROGRESS","Show players without score changes within the last few days");

/*********************************************************************
* status.php
*********************************************************************/
define("STATUS_TITLE","OGame Galaxytool - Ver Universo");
define("STATUS_DB_STATUS","Informação de Galáxias/Sistemas Solares disponiveis no Banco de Dados");
define("STATUS_COLOR","Cor ");
define("STATUS_AGE1","Última atualização: < 1 dia.");
define("STATUS_AGE2","Última atualização: 2 - 4 dias.");
define("STATUS_AGE3","Última atualização: 4 - 7 dias.");
define("STATUS_AGE4","Última atualização: 1 - 2 semanas.");
define("STATUS_AGE5","Última atualização: 2 - 4 semanas.");
define("STATUS_AGE6","Última atualização: > 1 mês!");
define("STATUS_AGE7","Sem informação no Banco de Dados.");
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
define("STATUS_GALAXY","Vista Geral da Galaxia");

/*********************************************************************
* usermanagement.php
*********************************************************************/
define("USER_TITLE","Gestão de Usuários");
define("USER_NAMES","Usuário");
define("USER_ERROR","Erro");
define("USER_NEWUSER","Novo Usuário");
define("USER_OPTIONS","Opções");
define("USER_USERNAME","Nome de Usuario");
define("USER_PASSWORD","Senha");
define("USER_PASSWORD_CONFIRM","Confirmar Senha");
define("USER_GALAXY","Galáxia");
define("USER_SEARCH","Permitir Consultas");
define("USER_INSERT","Permitir Inserções");
define("USER_DELETE","Apagar");
define("USER_DELETE_ENTRY","Tem certeza que quer deletar o usuário: ");
define("USER_STATUS","Ver Estatísticas");
define("USER_STYLES","Modificar Skin");
define("USER_SUBMIT","Enviar");
define("USER_RESET","Limpar");
define("USER_YES","Sim");
define("USER_NO","Não");
define("USER_STYLEPATH","Caminho para styles.css");
define("USER_PROBES","Inserir Relatórios de Espionagem");
define("USER_EMAIL","E-mail");
define("USER_ERROR1","Senha errada ou e-mail inválido.");
define("USER_ERROR2","E-mail inválido.");
define("USER_INGAME","Nome dentro do OGame");
define("USER_ALLYTAG","TAG da Aliança");
define("USER_ALLYHISTORY","Histórico da Aliança");
define("USER_DIPLOMATIC","Diplomacia");
define("USER_STATSPAGE","Número de entradas na página de estatísticas");
define("USER_LINKS","Links");
define("USER_LINKS2","Formato:<br>texto;url<br>texto2;url2<br>texto3;url3");
define("USER_EXPORT_TITLE","Estilo de Exportação (BB Codes)");
define("USER_BB_COORDINATES","Coordenadas");
define("USER_BB_MOON","Lua");
define("USER_BB_DEBRIS","Destroços");
define("USER_BB_ALLY","Nome da aliança");
define("USER_BB_ALLYDETAILS","Detalhes da aliança");
define("USER_BB_PLAYERNAME","Nome do jogador");
define("USER_BB_BANNED","Jogador banido");
define("USER_BB_VACATION","Modo de Férias");
define("USER_BB_NOOB","Jogador Fraco (noob)");
define("USER_BB_INACTIVE","7 dias inativo");
define("USER_BB_LONGINACTIVE","28 dias inativo");
// new with 4.7
define("USER_DELETION","Apagar");
define("USER_FLEETINFO",MENU_FLEET_MOVEMENTS);
define("USER_ACTIVITIES","Atividade do jogador");
define("USER_MAINTENANCE","Manutenção do Galaxytool");
define("USER_MANAGEMENT",MENU_USEROPTIONS);
define("USER_DELETE_MY_COMBAT_REPORTS","Apagar meus relatórios de combate");
define("USER_DELETE_MY_MESSAGES","Apagar minhas mensagens");
define("USER_DELETE_MY_FLEETMOVES","Apagar meu movimento de frotas");
// 4.8
define("USER_DELETE_MY_COMBAT_REPORTS_LIMITED","Apagar meus relatórios de combate com mais de &1 dias");
define("USER_DELETE_MY_MESSAGES_LIMITED","Apagar minhas mensagens com mais de &1 dias");
define("USER_TABLE_ENTRIES","Quantidade de resultado de busca por página");
// 5.0
define("USER_EXISTS","Usuário já existente");
define("USER_BB_OUTLAW","Fora da Lei");
define("USER_INVALID_URL","URL &1 parece ser inválido - URL será ignorado");

/*********************************************************************
* galaxyview.php
*********************************************************************/
define("VIEW_TITLE","OGame Galaxytool - Ver Sistema Solar");
define("VIEW_NODATA","Sem informação");
define("VIEW_GALAXY","Galáxia");
define("VIEW_SYSTEM","Sistema Solar");
define("VIEW_POSITION","#");
define("VIEW_PLANET","Planeta");
define("VIEW_MOON","Lua");
define("VIEW_TF","Destroços");
define("VIEW_PLAYER","Jogador");
define("VIEW_PLAYER_ADD","(Rank/Estado)");
define("VIEW_ALLY_ADD","(Rank/Membros)");
define("VIEW_METAL","M");
define("VIEW_CRYSTAL","C");
define("VIEW_COLONISED","Planetas habitados");
define("VIEW_UKMOONSIZE","n/d");
define("VIEW_BACK","Voltar");
define("VIEW_NOTICE","Notas");
define("VIEW_REPORTS","R. Esp.");
define("VIEW_MOONPHALANX","A(s) seguinte(s) lua(s) pode(m) escanear este sistema");
define("VIEW_NOMOONS","Não foram encontradas luas");
define("VIEW_IRAKS","O(s)seguinte(s) planeta(s) pode(m) alcançar este sistema com mísseis interplanetários");
define("VIEW_NOIRAKS","Não foram encontrados mísseis interplanetários");
define("VIEW_ALLY","Aliança");
// 4.0
define("VIEW_MOON_DESTROY_CHANCE","Chance de destruir lua");
define("VIEW_CHANCE_WITH_ONE","Chance com uma estrela da morte");
define("VIEW_CHANCE_WITH_N","Chance com ");
define("VIEW_DEATH_STARS","estrelas da morte");
define("VIEW_DS_DESTROY_CHANCE","Chance de perder estrela(s) da morte");
define("VIEW_TOP","Top");
// new 4.3.5
define("VIEW_GO","go");
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
define("UPDATE_DONE","Atualizada com sucesso!");
// new 4.2
define("TIMEZONE_OFFSET","Diferença de horas para o servidor");
// new 4.3
define("DELETE_ACCOUNT","Apagar esta conta do Galaxytool");
define("DELETE_ACCOUNT_SAFETY_REQUEST","Tem certeza que quer apagar esta conta do Galaxytool?");
// new 4.3.3
define("CH_PASSWD_AUTHORIZATION","Autorizações");
define("CH_PASSWD_ADMIN","Admin");
// new 4.7
define("TIMEZONE_OGAME_OFFSET","Diferença de horas para o servidor do OGame");
// new 4.8
define("CH_PASSWD_USER_LANGUAGE","Mude para este idioma no próximo login");
define("CH_PASSWD_USER_LANGUAGE_NO_CHANGE","Sem mudança");
define("CH_PASSWD_EXPAND","Expandido");
define("CH_PASSWD_COLLAPSE","Fechado");
define("CH_PASSWD_HIDDEN","Escondido");
define("CH_PASSWD_GETTING_STARTED","Mostrar informações dos Primeiros passos depois de logar");
define("CH_PASSWD_PLUGIN","Mostrar informações do Plugin depois de logar");

/*********************************************************************
* notices.php
**********************************************************************/
define("NOTICE_TITLE","OGame Galaxytool - As minhas Notas");
define("NOTICE_HEADER","Editar Nota");
define("NOTICE_HEADER2","Editar Notas próprias");
define("NOTICE_PUBLIC","Visível aos outros?");
define("NOTICE_YES","Sim");
define("NOTICE_NO","Não");
define("NOTICE_TEXT","Texto");
define("NOTICE_SAVE","Salvar");
define("NOTICE_DELETED","Nota apagada.");
define("NOTICE_SAVED","Nota salva.");
define("NOTICE_RESULTS","Todos os resultados");
define("NOTICE_USER","Usuário");
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
define("NOTICE_PLAYERNAME","Jogador");
define("NOTICE_SHOWALL","Mostrar todas Anotações");

/*********************************************************************
* reports.php
**********************************************************************/
define("REPORTS_TITLE","OGame Galaxietool - Relatórios de Espionagem");
define("REPORTS_RESOURCES","Recursos");
define("REPORTS_FLEET","Frotas");
define("REPORTS_DEFENCE","Sistemas de defesas");
define("REPORTS_BUILDINGS","Edifícios");
define("REPORTS_TECHNOLOGY","Pesquisas");
define("REPORTS_MOON","Lua");
define("REPORTS_SEARCH","Procurar Relatórios de Espionagem");
define("REPORTS_SEARCH_SHORT","Procurar");
define("REPORTS_HITS","Resultados");
define("REPORTS_NOTHING","Sem resultados");
define("REPORTS_ADDRESS","Localização");
define("REPORTS_CURRENTNESS","Última atualização");
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
define("REPORTS_SEARCH_EXTENDED","Busca avançada");
define("REPORTS_FLEET_RESIS","Pontos da frota");
define("REPORTS_DEFENCE_RESIS","Pontos da defesa");
define("REPORTS_ALL_RESIS","Soma de pontos");
define("REPORTS_TECHS","Tecnologias");
define("REPORTS_UNKNOWN_ENTRIES","entradas desconhecidas");
define("REPORTS_PARTLY_INSERTED","parcialmente inserido");
define("REPORTS_FOR_ALL_RES","para todos os recursos");
define("REPORTS_FOR_TF","para o campo de destroços");
define("REPORTS_KT","Naves pequenas de carga");
define("REPORTS_GT","Naves grandes de carga");
define("REPORTS_SS","Naves de batalha");
define("REPORTS_REC","Reciclador");
define("REPORTS_RAIDABLE","Only Raidable targets"); //what does mean RAIDABLE?
define("REPORTS_ALL_RESOURCES","Recursos Totais");
// 4.0
define("REPORTS_STUFF","Variados");
define("REPORTS_SPEEDSIM","Simular com Speedsim");
define("REPORTS_DRAGOSIM","Simular com Dragosim");
define("REPORTS_STATUS","Status");
define("REPORTS_ERROR","Um erro ocorreu");
// 4.2
define("REPORTS_OWN_REPORTS","Somente meus relatórios");
// 4.3.3
define("REPORTS_UPLOAD_BY","Relatório enviado por");
// 4.4
define("REPORTS_DEPTH","Profundidade do relatório");
define("REPORTS_FLEET_SCORE","Custo da frota");
define("REPORTS_DEFENCE_SCORE","Custo da defesa");
// 5.0
define("REPORTS_HOURS","horas");
define("REPORTS_MAX_RESULTS_HIT","Sua consulta resultou mais de &1 . Somente os &1 resultados estão sendo mostrados. Por favor ajuste o seu pedido de busca para obter resultados mais preciso.");
define("REPORTS_OSIMULATE","Simular com OSimulate");
define("REPORTS_SHOW_ONLY","Mostrar só");
define("REPORTS_SHOW_PLANETS","Planetas");
define("REPORTS_SHOW_MOONS","Luas");
define("REPORTS_OWNER","Relatórios pertencentes a");

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
define("STATS_STATUS","Status");
define("STATS_NOTHING","Não definido");
define("STATS_NAP","PNA");
define("STATS_ALLIED","Aliança");
define("STATS_WAR","Em Guerra");
define("STATS_BOYCOTT","Boicote");
define("STATS_NEUTRAL","Neutro");
define("STATS_OWN","Própria Aliança");
define("STATS_WING","Ala da Aliança");
define("STATS_UPDATE","Entrada de");
define("STATS_PLAYERSTATS","Estatísticas do Jogador");
define("STATS_ALLYSTATS","Estatísticas da Aliança");
// 4.0
define("STATS_DELETE","Você deseja apagar este conteúdo?");
define("STATS_CONFIRM_DELETE","Tem certeza que quer deletar esta entrada?");
define("STATS_CHANGE_PLAYER_STATUS","Status do Jogador");
define("STATS_CHANGE_ALLIANCE_STATUS","Status da Aliança");
define("STATS_CHANGE_ALLIANCE_STATUS_HINT","Todos membros desta aliança recebem o Status escolhido. Qualquer status anterior será sobrescrito. Você poderá¡ mudar o status de alguns jogadores depois.");
define("STATS_UNKNOWN","Outros");
define("STATS_DETAILS","Detalhes para");
// 4.4
define("STATS_PLAYERSTATUS",SHOW_PLAYER_STATUS);
define("STATS_IGNORE_STATUS",SHOW_PLAYER_STATUS1);
define("STATS_ACTIVE","Ativo");
define("STATS_INACTIVE",USER_BB_INACTIVE);
define("STATS_BANNED",USER_BB_BANNED);
define("STATS_VACATION",USER_BB_VACATION);
define("STATS_NOOB",USER_BB_NOOB);
// 4.8
define("STATS_YES",SHOW_YES); // Reutilizar a definição MOSTRAR se possível
define("STATS_NO",SHOW_NO);
define("STATS_SEARCH",USER_SEARCH);
define("STATS_SHOW_GRAPH","Mostrar detalhes para a distribuição de pontuação");
define("STATS_LONG_INACTIVE",USER_BB_LONGINACTIVE);
// 4.9
define("STATS_STANDARD","Pontos");
define("STATS_MILITARY","Pontos Militares");
define("STATS_ECONOMY","Economia");
define("STATS_HONOUR","Pontos de Honra");
define("STATS_MILITARY_BUILD","Militares construídos");
define("STATS_MILITARY_DESTROYED","Militares destruídos");
define("STATS_MILITARY_LOST","Militares perdidos");

/*********************************************************************
* register.php
**********************************************************************/
define("REGISTER_REGISTRATE","Registar");
define("REGISTER_LOGINNAME","Usuário");
define("REGISTER_PASSWORD","Senha");
define("REGISTER_PASSWORD_CONFIRM","Confirme a Senha");
define("REGISTER_EMAIL","E-mail");
define("REGISTER_INGAME","Nome no OGame");
define("REGISTER_ALLYTAG","TAG da Aliança");
define("REGISTER_EMAILVERIFICATION","Verificação de E-mail");
define("REGISTER_EMAILTEXT","Por favor visite o seguinte link para confirmar o registo no GalaxyTool.");
define("REGISTER_ERROR1","Nome de Usuário já escolhido.");
define("REGISTER_ERROR2","Erro ao tentar enviar o e-mail. Por favor contacte o admin.");
define("REGISTER_ERROR3","Erro ao tentar enviar informação para o Banco de Dados!");
define("REGISTER_INFO1","A sua conta foi criada.");
define("REGISTER_INFO2","Por favor visite o link no seu e-mail para confirmar o registo.");
define("REGISTER_INFO3","Registo confirmado. Resta apenas a ativação que será feita pelo admin.");
define("REGISTER_BUTTON","Voltar à página principal");
define("REGISTER_NEW_SUBJECT","Um novo Usuário registou-se no galaxytool");
define("REGISTER_NEW_MAILTEXT","Um novo Usuário registrou-se.");
// new 4.2
define("REGISTER_BACK","Voltar para primeira página");
// new 4.3.5
define("REGISTER_MISSING_FIELDS","Preencha todos os campos solicitados");
// new 4.8
define("REGISTER_ERROR4","Este Email não é valido.");
define("REGISTER_ERROR5","Senha não confere.");
define("REGISTER_PWS","Qualidade da senha");
define("REGISTER_PWS0","Muito fraca");
define("REGISTER_PWS1","Fraca");
define("REGISTER_PWS2","Boa");
define("REGISTER_PWS3","Forte");
define("REGISTER_PWS4","Muito forte");
// new 5.0
define("REGISTER_EMAIL_USED","Este Email já esta sendo utilizado ");

/*********************************************************************
* lost_password.php
**********************************************************************/
define("LOSTPW_TITLE","Perdi a minha Senha");
define("LOSTPW_INFO2","Uma nova Senha foi gerada e enviada para o seu e-mail.");
define("LOSTPW_BUTTON1","Receber nova Senha");
define("LOSTPW_BUTTON2","Voltar à página principal");
define("LOSTPW_LOGINNAME","Nome de Usuário");
define("LOSTPW_EMAIL","E-mail");
define("LOSTPW_ERROR1","Erro ao tentar enviar informação para o Banco de Dados!");
define("LOSTPW_ERROR2","Nenhuma entrada encontrada!");
define("LOSTPW_ERROR3","Erro ao tentar enviar o e-mail. Por favor contacte o admin.");
define("LOSTPW_EMAIL_SUBJECT","Nova Senha Galaxytool");
define("LOSTPW_EMAIL_TEXT1","O seu novo login para o galaxytool é");
define("LOSTPW_EMAIL_TEXT2","Usuário");
define("LOSTPW_EMAIL_TEXT3","Senha");
// new 5.0
define("LOSTPW_INFO1","Você receberá um e-mail para confirmar o seu pedido de reposição de senha.");
define("LOSTPW_CONFIRM_RESET_SUBJECT","Esqueceu a senha?");
define("LOSTPW_CONFIRM_RESET_MESSAGE","Ola,\n\n você solicitou uma redefinição de senha para o Galaxytool. Para gerar uma nova senha, clique no seguinte link:");

/*********************************************************************
* userinfo.php
**********************************************************************/
define("USERINFO_TITLE","OGame Galaxytool - Informação de Usuários");
define("USERINFO_NAMES","Todos os Usuários");
define("USERINFO_DETAIL","Informação detalhada sobre");
define("USERINFO_ERROR1","Não existe nenhum Usuário com este ID!");
define("USERINFO_USERNAME","Usuário");
define("USERINFO_INGAME","Nome no OGame");
define("USERINFO_EMAIL","E-mail");
define("USERINFO_ALLYTAG","Aliança");
define("USERINFO_STYLEPATH","Skin");
define("USERINFO_STATUS","Estado");
define("USERINFO_ACTIVATE","Activar Jogador");
define("USERINFO_LOGINS","Número de Acessos");
define("USERINFO_LASTLOGIN","Último Acesso em");
define("USERINFO_DATA","Informação sobre os Sistemas Solares inseridos");
define("USERINFO_NODATA","<center>Nunca inseriu um Sistema Solar</center>");
define("USERINFO_GALAXY","Galáxia");
define("USERINFO_SYSTEMS","Número de Sistemas Solares");
define("USERINFO_IP","Endereço IP");
define("USERINFO_LOGINTIME","Acesso em");
define("USERINFO_NOLOGIN","O Usuário nunca se ligou.");
define("USERINFO_LAST_GALAXYUPDATE","Inseriu o último Sistema Solar em");
define("USERINFO_LAST_PUBLIC_NOTICE","Última Nota pública em");
define("USERINFO_LAST_PRIVATE_NOTICE","Última Nota privada em");
define("USERINFO_NUMBEROF_PUBLIC_NOTICE","Número de Notas públicas");
define("USERINFO_NUMBEROF_PRIVATE_NOTICE","Número de Notas privadas");
define("USERINFO_ACTIVATED","Conta activada");
define("USERINFO_ACTIVATIONTEXT","O administrador do Galaxytool ativou a sua conta.\n\Diverta-se com o Galaxytool!");
// new 4.8
define("USERINFO_LAST_SUBMIT","Inserido últimos dados");

/*********************************************************************
* allyhistory.php
**********************************************************************/
define("ALLYHISTORY_TITLE","OGame Galaxietool - Histórico da Aliança");
define("ALLYHISTORY_TBLHEAD","Histórico da Aliança");
define("ALLYHISTORY_PLAYERNAME","Jogador");
define("ALLYHISTORY_ALLYNAME","Aliança");
define("ALLYHISTORY_LASTMONTH","Ultimo Mês");
define("ALLYHISTORY_ALL_DATA","Todas as informações diponíveis");
define("ALLYHISTORY_SHOW","Mostrar Estatística");
define("ALLYHISTORY_TIMESPAN","Duração");
define("ALLYHISTORY_PROGESS","Progresso");
define("ALLYHISTORY_SCORE","Pontuação");
define("ALLYHISTORY_FSCORE","Frotas");
define("ALLYHISTORY_RSCORE","Pesquisas");
define("ALLYHISTORY_MEMBER","Membros");
define("ALLYHISTORY_NOTHING","nenhuma entrada encontrada");
define("ALLYHISTORY_DETAILS","Detalhes");
define("ALLYHISTORY_SHOW_ADDRESS","Localização");
// new 4.9
define("ALLYHISTORY_ESCORE",STATS_ECONOMY);
define("ALLYHISTORY_MSCORE",STATS_MILITARY);

// new 4.0
/*********************************************************************
* playerinformation.php + allyinformation.php
**********************************************************************/
define("DETAILEDINFO_PLAYERINFO_TITLE","Informação do Jogador");
define("DETAILEDINFO_ALLYINFO_TITLE","Informação da Aliança");
define("DETAILEDINFO_PLAYERINFO_TBLHEAD","Informação detalhada sobre o Jogador");
define("DETAILEDINFO_ALLYINFO_TBLHEAD","Informação detalhada sobre Aliança");
define("DETAILEDINFO_NO_ALLIANCE","nenhum");
define("DETAILEDINFO_SCORE","Estatísitca de Contagem"); //pontos
define("DETAILEDINFO_FLEET","Estatísitca de Frota");
define("DETAILEDINFO_RESEARCH","Estatísitca de Pesquisa");
define("DETAILEDINFO_RANK","Rank");
define("DETAILEDINFO_POINTS","Pontos");
define("DETAILEDINFO_KNOWN_PLANETS","Planetas conhecidos");
define("DETAILEDINFO_MOONS","Luas conhecidas");
define("DETAILEDINFO_PHALANX_AREA","Area da Phalanx");
define("DETAILEDINFO_NO_PHALANX_AREA","Phalanx não encontrada");
define("DETAILEDINFO_NOTICES","Notas");
define("DETAILEDINFO_NO_NOTICES","Sem anotações");
define("DETAILEDINFO_PREVIOUS_ALLIANCES","Alianças anteriores");
define("DETAILEDINFO_RESOURCES_PER_HOUR","Recursos por hora");
define("DETAILEDINFO_RESOURCES_PER_DAY","Recursos por dia");
define("DETAILEDINFO_RESOURCES_PER_WEEK","Recursos por semana");
define("DETAILEDINFO_RESOURCES_PER_MONTH","Resousos por mÃªs (30 dias)");
define("DETAILEDINFO_METAL","Metal");
define("DETAILEDINFO_CRYSTAL","Cristal");
define("DETAILEDINFO_DEUTERIUM","Deutério");
define("DETAILEDINFO_UNKNOWN","Desconhecido");
define("DETAILEDINFO_SCORE_DISTRIBUTION","Distribuição de pontos");
// new 4.2
define("DETAILEDINFO_GENERAL","Detalhes");
define("DETAILEDINFO_MEMBERS","Membros");
define("DETAILEDINFO_GRAPHS","Gráfico");
define("DETAILEDINFO_RESOURCES","Recursos");
define("DETAILEDINFO_FLEET_TAB","Frota");
define("DETAILEDINFO_TECH","Tecnologia");
define("DETAILEDINFO_FLEET_DETAIL","Soma / (média dos jogadores) junto com todos os relatórios disponíveis");
define("DETAILEDINFO_TECH_DETAIL","Média de toda informação disponível do jogador");
// new 4.3
define("DETAILEDINFO_PLANET_TAB",REPORTS_SHOW_PLANETS);
define("DETAILEDINFO_MOON_TAB",REPORTS_SHOW_MOONS);
// 4.7
define("DETAILEDINFO_ACTIVITIES","Atividades");
define("DETAILEDINFO_NODATA","VER_SEMDADOS"); // reuse existing translations
define("DETAILEDINFO_ACTIVITY_DESCRIPTION","Mostrar atividades em &1 coletadas de:");
define("DETAILEDINFO_GALAXYVIEWS","Visão da Galaxia");
define("DETAILEDINFO_SCANS","Ações de Espionagem");
define("DETAILEDINFO_MESSAGES","Mensagens de jogadores");
define("DETAILEDINFO_COMBATS","Relatório de combate");
define("DETAILEDINFO_ALLYPAGE","Overview da Aliança");
define("DETAILEDINFO_MANUAL","Inserido manualmente");
define("DETAILEDINFO_START","Começando");
define("DETAILEDINFO_TO","Para");
define("DETAILEDINFO_TODAY","Hoje");
define("DETAILEDINFO_DATA_RESTRICTION","Retrito para:");
define("DETAILEDINFO_WEEKDAY_WEEKEND","Final de semana");
define("DETAILEDINFO_WEEKDAY_WORKINGDAY","Dia da Semana");
define("DETAILEDINFO_WEEKDAY_MONDAY","Segunda");
define("DETAILEDINFO_WEEKDAY_TUESDAY","Terça");
define("DETAILEDINFO_WEEKDAY_WEDNESDAY","Quarta");
define("DETAILEDINFO_WEEKDAY_THURSDAY","Quinta");
define("DETAILEDINFO_WEEKDAY_FRIDAY","Sexta");
define("DETAILEDINFO_WEEKDAY_SATURDAY","Sábado");
define("DETAILEDINFO_WEEKDAY_SUNDAY","Domingo");
define("DETAILEDINFO_WEEKDAY_SHORTLENGTH",3); // number of characters to shorten week day
define("DETAILEDINFO_PLAYER_CURRENTLY_ACTIVE","O Jogador está ativo no momento");
define("DETAILEDINFO_PLAYER_MESSAGES","Mensagens de jogadores ativos");
define("DETAILEDINFO_SHOW","Mostrar");
define("DETAILEDINFO_NONE","nenhum disponível");
define("DETAILEDINFO_ENTER_MANUALLY","Inserir atividade para este jogador");
define("DETAILEDINFO_PLAYER_SEEN_ON","Jogador estava online em");
define("DETAILEDINFO_INSERT","Inserir");
define("DETAILEDINFO_OGAME_SERVERTIMES","Por favor note: Todas as datas e horários se referem ao servidor OGame!");
define("DETAILEDINFO_DAY_VIEW","visão 24 horas");
define("DETAILEDINFO_WEEK_VIEW","visão semanal");
// new 4.8
define("DETAILEDINFO_HOME_PLANET","Planeta Principal");
// new 5.0
define("DETAILEDINFO_PLANETNAME","Nome"); // also used for moons!
define("DETAILEDINFO_DEFENCE_SCORE","Pontos de Defesa");
define("DETAILEDINFO_DEFENCE_SCORE_TOOLTIP","Pontos de Defesa = Frota - Pontos + Pesquisa + Economia.<br/>Todas essas estatísticas devem ser atualizados para ter um resultado significativo!");
define("DETAILEDINFO_SCORE_PER_SHIP","Pontos por nave");
define("DETAILEDINFO_SHIPS","Numero de naves");
define("DETAILEDINFO_DATE_IN_FUTURE","Não insira atividades com datas passadas.");

// new 4.2
/*********************************************************************
* administration.php
**********************************************************************/
define("ADMIN_TITLE","Administração do Galaxytool");
define("ADMIN_DISCLAMER","Atenção: Execute qualquer um destes scripts sob o seu próprio risco! A maioria deles apaga dados.");
define("ADMIN_INCONSISTENCIES","Banco de dados inconsistente");
define("ADMIN_PLANETS","Planetas na posição 0 ou maior que 15");
define("ADMIN_GALAXIES","Apagar galaxias maiores que &1");
define("ADMIN_PLAYERS","Apagar jogadores sem OGame playerid - Leva a entrada duplicada de jogadores");
define("ADMIN_REPORTS","Apagar relatórios onde os planetas não existem mais");
define("ADMIN_MISC","Miscellania");
define("ADMIN_RESET","Reset Galaxytool (Somente usuário e tabela ip não são deletadas)");
define("ADMIN_OLD_PLAYERS","Apague entradas de jogador com mais de &1 dias");
define("ADMIN_OLD_REPORTS","Apagar relatórios com mais de &1 dias");
define("ADMIN_LOADING","Não feche esta pagina enquanto ela estive carregando.");
define("ADMIN_STATUS","Status da sua solicitação");
define("ADMIN_SELECTION","Pelo menos uma solicitação deve ser selecionada");
define("ADMIN_SAFETY","Você tem certeza que quer rodar este(s) script(s) ?");
define("ADMIN_DONE","Feito");
define("ADMIN_NOTBD","Nada para ser feito");
// new 4.3
define("ADMIN_OLD_GALAXIES","Remova vista de galaxias com mais de &1 dias");
define("ADMIN_UNUSED_PLAYERS","Remova jogadores que não estão em nenhuma vista de galaxia");
// new 4.7
define("ADMIN_OLD_ACTIVITIES","Remova atividades de jogadores com mais de &1 dias");
// new 4.8
define("ADMIN_OLD_COMBATS","Remover relatório de combate com mais de &1 dia/s");
define("ADMIN_OLD_INGAME_MSG","Remover mensagens ingane com mais de &1 dia/s");
// new 5.0
define("ADMIN_OGAME_API","Carregar dados públicos do OGame para a Galaxytool");
define("ADMIN_OGAME_ALL_DATA",ALLYHISTORY_ALL_DATA);
define("ADMIN_OGAME_GALAXY_DATA",MENU_GALAXYVIEW);
define("ADMIN_OGAME_STATISTICS_DATA",MENU_STATISTICS);

// new 4.3.5
/*********************************************************************
* errorpage.php
**********************************************************************/
define("ERRORPAGE_PAGEFORWARD","Click aqui caso seu navegador não suporte encaminhamento de página");
define("ERRORPAGE_PERMISSION_DENIED","Você não tem permissão para acessar esta página. Click em voltar.");

// new 4.7
/*********************************************************************
* fleet_movements.php
**********************************************************************/
define("FLEETS_TITLE","OGame Galaxytool - Movimento de frotas");
define("FLEETS_ACTUAL_FLEETS","Atual movimento de frotas");
define("FLEETS_YES",SHOW_YES);
define("FLEETS_NO",SHOW_NO);
define("FLEETS_DETAILS","Detalhes");
define("FLEETS_MISSION_EXPEDITION","Expedição");
define("FLEETS_MISSION_COLONIZATION","Colonizar");
define("FLEETS_MISSION_RECYCLE","Reciclar");
define("FLEETS_MISSION_TRANSPORT","Transportar");
define("FLEETS_MISSION_DEPLOYMENT","Transferir");
define("FLEETS_MISSION_ESPIONAGE","Espionar");
define("FLEETS_MISSION_ACS_DEFEND","Defender em ACS");
define("FLEETS_MISSION_ATTACK","Atacar");
define("FLEETS_MISSION_ACS_ATTACK","Atacar em ACS");
define("FLEETS_MISSION_MOON_DESTRUCTION","Destruir Lua");
define("FLEETS_MISSION_MISSILE_ATTACK","Ataque de míssil");
define("FLEETS_NO_DATA","Não foram encontrados dados");
// new 5.0
define("FLEETS_FLEET","Frota");
define("FLEETS_ALL_FLEETS","Mostrar todos os movimentos da frota");

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
define("MESSAGES_DELETE","Apagar mensagem");
define("MESSAGES_PUBLISH_DETAIL","Publicar o conteúdo da mensagem para o jogador.");
define("MESSAGES_PUBLISH_HEADER","&sender enviou mensagem para &recipient em &date:\n\n &message"); // &sender, &recipient, &date, &message replaced at runtime
define("MESSAGES_PLAYER_FILTER","Mensagens do jogador:");
// new 5.0
define("MESSAGES_CONTENT","Content");

/*********************************************************************
* combat_reports.php
**********************************************************************/
define("COMBATS_TITLE","OGame Galaxytool - Relatório de combate");
define("COMBATS_ATTACKER","Atacante");
define("COMBATS_DEFENDER","Defensor");
define("COMBATS_DATE","Data");
define("COMBATS_OWNER","Dono");
define("COMBATS_WINNER","Vencedor");
define("COMBATS_COMBATREPORT","Relatório de combate");
define("COMBATS_COMBAT_AT","Combate em");
define("COMBATS_LOST_UNITS","Unidades perdidas");
define("COMBATS_LOOT","Roubou");
define("COMBATS_DEBRIS","Campo de destroços");
define("COMBATS_AND","e");
define("COMBATS_PUBLISH","Marcar como publico este relatório");
define("COMBATS_UNPUBLISH","Marcar como privado (torna particular novamente)");
define("COMBATS_DELETE","Apagar relatório");
define("COMBATS_CHECK_ALL","Selecionar Todos");
define("COMBATS_UNCHECK_ALL","deselecionar Todos");
define("COMBATS_WITH_SELECTED","Com as selecionadas");
define("COMBATS_PUBLIC_REPORTS","Relatórios públicos");
define("COMBATS_YES",SHOW_YES); // no need for translation!
define("COMBATS_NO",SHOW_NO); // no need for translation!
define("COMBATS_SEARCH_OPTIONS","Opções de busca");
define("COMBATS_SEARCH","Ir");
define("COMBATS_RESET","Resetar");
// 4.8
define("COMBATS_COORDINATES",USER_BB_COORDINATES);
define("COMBATS_INVALID_GALAXY_ENTERED","Galaxy inválida");
define("COMBATS_INVALID_SYSTEM_ENTERED","Systema inválido");
define("COMBATS_INVALID_PLANET_ENTERED","Planeta inválido");
define("COMBATS_GALAXY_FROM_TO","Galaxia");
define("COMBATS_SYSTEM_FROM_TO","Systema");
define("COMBATS_PLANET_FROM_TO","Planeta");
define("COMBATS_APPLY",GENERAL_APPLY);
define("COMBATS_COMBAT_SUMMARY","Resumo do relatório de combate");
define("COMBATS_DOWNLOAD_CSV","Download do arquivo CSV");

/*********************************************************************
* report_archive.php
**********************************************************************/
define("REPORT_ARCHIVE_TITLE","Arquivar relatório");
define("REPORT_ARCHIVE_COORDINATES","Coordenadas");
define("REPORT_ARCHIVE_SCANTIME","Data do Scan");
define("REPORT_ARCHIVE_DELETE","Apagar estes dados");
define("REPORT_ARCHIVE_CONFIRM_DELETE","Você quer mesmo apagar estes dados?");
define("REPORT_ARCHIVE_GALAXY","Galaxia");
define("REPORT_ARCHIVE_SYSTEM","Systema");
define("REPORT_ARCHIVE_PLANET","Planeta");
define("REPORT_ARCHIVE_MOON","Lua");
define("REPORT_ARCHIVE_DETAILS","Detalhes");
define("REPORT_ARCHIVE_RESOURCES",DETAILEDINFO_RESOURCES);
define("REPORT_ARCHIVE_HEADER_RESOURCES",REPORTS_RESOURCES);
define("REPORT_ARCHIVE_DETAILS_FOR","Arquivar relatório por &1 [&2] (&3)"); // &1 = planetname; &2 = coordinates; &3 = playername
define("REPORT_ARCHIVE_FLEET_CARGO","Capacidade de transporte da frota");
define("REPORT_ARCHIVE_IRAK_RANGE","Alcance do Míssil Interplanetário");
define("REPORT_ARCHIVE_CHART_TYPE","Tipo de gráfico");

/*********************************************************************
* install.php
**********************************************************************/
define("INSTALL_TITLE", "Instalar o Galaxytool, versão");
define("INSTALL_PROGRESS", "Progresso");
define("INSTALL_STEP", "Passo");
define("INSTALL_CONTINUE", "Continue");
define("INSTALL_VALIDATE", "Validar");
define("INSTALL_STEP1", "Benvindo");
define("INSTALL_STEP2", "Gravável check");
define("INSTALL_STEP3", "Configurações do Banco de Dados");
define("INSTALL_STEP4", "Configurações  OGame");
define("INSTALL_STEP5", "Configurações  Galaxytool");
define("INSTALL_STEP6", "Admin senha");
define("INSTALL_STEP7", "Instalar Galaxytool");
define("INSTALL_STEP8", "Finalize instalar"); // check writable; delete install and update.php and redirect to index.php
define("INSTALL_FILE_DELETE_CHECK","Porfavor, apagueos arquivos install.php e update.php do seu servidor.");

define("INSTALL_STEP1_PHP_FAILED", "Seu PHP version &1 não esta funcionando com o Galaxytool versão");
define("INSTALL_STEP1_FOPEN_FAILED", "Seu PHP versão não permite abrir páginas da Web com o comando FOPEN(). Isto é necessário para consumir o OGame API.");
define("INSTALL_STEP1_WELCOME", "Bem-vindo ao assistente de instalação do Galaxytool. Você será guiado através da instalação do Galaxytool.");

define("INSTALL_STEP2_DESCRIPTION","Verifique se seus arquivos config.php e attributes.php tem permissões de gravação habilitado.");
define("INSTALL_STEP2_DESCRIPTION2","Se você não sabe, como conseguir isso, por favor dê uma olhada aqui: &1");
define("INSTALL_STEP2_FILE_NOT_WRITEABLE", "O arquivo não é gravável");

define("INSTALL_STEP3_SERVER", "Servidor de banco de dados");
define("INSTALL_STEP3_USERNAME", L_USERNAME);
define("INSTALL_STEP3_PASSWORD", L_PASSWORD);
define("INSTALL_STEP3_DBNAME", "Nome do Banco de dados");
define("INSTALL_STEP3_PREFIX", "Prefixo Tablename");
define("INSTALL_STEP3_ENTER_PREFIX", "E.x. meutool_");
define("INSTALL_STEP3_ENTER_SERVER", "Digite o endereço do servidor. Contacte o seu administrador do sistema, se necessário. Normalmente, o valor correto é localhost.");
define("INSTALL_STEP3_ENTER_USERNAME", "Digite o nome do usuário para acesso ao banco de dados");
define("INSTALL_STEP3_ENTER_PASSWORD", "Digite a senha do usuário para acesso ao bancos de dados");
define("INSTALL_STEP3_ENTER_DBNAME", "Digite o nome do banco que será utilizado para instalação (deve existir)");
define("INSTALL_STEP3_CONNECT_FAILED", "Não foi possível estabelecer conexão com o servidor de banco de dados");
define("INSTALL_STEP3_DB_FAILED", "Banco de dados &1 não encontrado");
define("INSTALL_STEP3_MYSQL_VERSION_FAILED", "MySQL versão &1 não esta funcionando com esta versão do Galaxytool");

define("INSTALL_STEP4_URL","OGame URL");
define("OGAME_URL_DETAILS","Porfavor entre qualquer URL que você ver quando logado no OGame. Com base nesta URL a ferramente irá derivar o endereço API OGame com o qual será possivel inserir dados no Galaxytool sem a nescessidade do Galaxytoolbar. Esta API foi introduzina no OGame versão 4.1.");
define("INSTALL_STEP4_UNIVERSE","OGame Universo");
define("INSTALL_STEP4_DEF_TO_DEBRIS","Defesa para detritos");
define("INSTALL_STEP4_DEBRIS_RATE","Taxa de Detritos");
define("INSTALL_STEP4_SPEED_RATE","Velocidade");
define("INSTALL_STEP4_ENTER_UNIVERSE","Digite o nome ou numero do seu Universo OGame (case sensitive).");
define("INSTALL_STEP4_UNIVERSE_MISSING","Você deve definir o seu universo");
define("INSTALL_STEP4_ENTER_URL","Entre com o endereço do universo OGame");
define("INSTALL_STEP4_URL_MISSING","Você deve definir o seu endereço de OGame");
define("INSTALL_STEP4_URL_CHECK_FAILED","Não foi possível encontrar OGame API em &1");
// 5.1
define("INSTALL_STEP4_GETSETTINGS","Fetch settings");

define("INSTALL_STEP5_TOOLNAME","Nome Galaxytool");
define("INSTALL_STEP5_ENTER_TOOLNAME","Este é o nome que será mostrado na página de logon para identificar o seu Galaxytool");
define("INSTALL_STEP5_LANGUAGE","Idioma padrão");
define("INSTALL_STEP5_EMAIL_TO","Email para");
define("INSTALL_STEP5_ENTER_EMAIL_TO","Digite o endereço de e-mail onde você gostaria de receber notificações sobre registros");
define("INSTALL_STEP5_EMAIL_FROM","Email De");
define("INSTALL_STEP5_ENTER_EMAIL_FROM","Este endereço de e-mail é mostrado como a resposta para todos os e-mails enviados a partir do Galaxytool");
define("INSTALL_STEP5_USE_PHPMAILER","Use PHPMailer");
define("INSTALL_STEP5_MAXSHOUTS","O número máximo de entradas shoutbox");
define("INSTALL_STEP5_ENTER_USE_PHPMAILER","Use PHPMailer se o servidor não suporta o envio e-mails por padrão");
define("INSTALL_PHPMAILER_HOST","SMPT Host");
define("INSTALL_PHPMAILER_HOST_EXAMPLE","e.x. smtp.provider.com");
define("INSTALL_PHPMAILER_USER","SMPT Username");
define("INSTALL_PHPMAILER_USER_EXAMPLE","e.x. user@provider.dcom");
define("INSTALL_PHPMAILER_PASS","SMPT senha");
define("INSTALL_PHPMAILER_SECURE","Método de autenticação (e.x. ssl)");
define("INSTALL_PHPMAILER_PORT","SMTP Port");

define("INSTALL_STEP6_INTRO","Por favor, defina uma senha para a conta <strong>admin</strong> que você tem que usar para o seu primeiro logon para o Galaxytool após a instalação.");

define("INSTALL_STEP7_CONFIG","Arquivo de configuração criado");
define("INSTALL_STEP7_CONFIG_FAILED","Arquivo de configuração não criado");
define("INSTALL_STEP7_ATTRIBUTES","Arquivo de Atributos criado");
define("INSTALL_STEP7_ATTRIBUTES_FAILED","Arquivo de Atributos Não criado");
define("INSTALL_STEP7_CREATED_TABLES","Tabelas de banco de dados criado");

define("INSTALL_STEP8_INTRO","Você instalou com sucesso o Galaxytool!");
define("INSTALL_STEP8_LOAD_DATA","Downloading dados do OGame ...");
define("INSTALL_STEP8_LOAD_DATA_FINISHED","Download dos dados do OGame terminou");
define("INSTALL_STEP8_DELETE_FILE","Você deve agora apagar os arquivos install.php e update.php do servidor.");
define("INSTALL_STEP8_LOGON","Porfavor logue com o usuário <strong>admin</strong> e senha que você definiu anteriormente.");

/*********************************************************************
* update.php
**********************************************************************/
define("UPDATE_START","Iniciando a atualização para a versão &1");
define("UPDATE_STEP_DONE","Feito");
define("UPDATE_TITLE", "Update da versão do Galaxytool");
define("UPDATE_STEP1_WELCOME", "Bem-vindo ao assistente de atualização do Galaxytool. Você será guiado através da atualização doGalaxytool.");
define("UPDATE_STEP1_BACKUP_FILES", "Como primeiro passo, faça um backup da sua pasta <strong>config</strong>! Você terá que substituir o conteúdo de configuração em caso de erros.");
define("UPDATE_STEP1_BACKUP_DB", "Então faça uma <a href=\"http://www.ehow.com/how_2036600_create-database-php.html\">backup</a> do seu banco de dados");
define("UPDATE_STEP1_PROCEED", "Uma vez que os backups foram feitos, você pode prosseguir com a sua atualização.");
define("UPDATE_STEP1", INSTALL_STEP1);
define("UPDATE_STEP2", INSTALL_STEP5);
define("UPDATE_STEP2_OLD_VERSION", "Versão antiga do Galaxytool");
define("UPDATE_STEP3", "Update Galaxytool");
define("UPDATE_STEP3_UPDATE_RUNNING", "Atualize execução, por favor aguarde ...");
define("UPDATE_STEP4", "Update finalizado");
define("UPDATE_STEP4_INTRO","Você atualizou com êxito o Galaxytool!");
define("UPDATE_STEP4_UPDATE_DONE","Etapas da atualização realizada.");
define("UPDATE_FAILED","Update não realizado.");

?>