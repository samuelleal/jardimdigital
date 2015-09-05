<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'jardimdigital');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'jardimdigital');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'jardimdigital');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'uj|4%Yu+Vxzu5>+Xl96f;D)yx1Qz]u%A~.LK<pE$4oWV-_=B<q*kX#-nO/2^u5Zc');
define('SECURE_AUTH_KEY',  '6#v*BUf=c#o^meW0BGUV5y&1RJ84]qI$[f%+xfY!4hJUG}]>M8;m_ I>x1%-b|{c');
define('LOGGED_IN_KEY',    '?;#@Rpnith0G|>qlql5~mSFE+ U-q}Eg5[1QD,L}-Xzlf2BlS}53+gO:lc<4I27~');
define('NONCE_KEY',        '+BkF4-6lIv!+^+7zv ,&t,E8xxxPCvU2O-|pO9eJ+7#/51VHF_Rbkc@w{Lqa??[Q');
define('AUTH_SALT',        ',mRF-MvU3w*ID{RVKnp0|O4mo4!Ll3IuQne2%;i#<ub4P0Bx{c|]Ky70K``AZR+O');
define('SECURE_AUTH_SALT', 'D}La+-yaX4@CIl,T-wj!0z-R#GNBipCGOzF 1mw@J/Y:.G&,u]CMY`=!X-63J2;8');
define('LOGGED_IN_SALT',   '!~yV7&tZs-2iF^NexinSp8GH?ViTvLIa12K& I%-L$d&1|0[Q>iInS`_%VaZJZR>');
define('NONCE_SALT',       '2a[f|24Z?UN|TtBL_MI&dGe~hL*&)8-~p}b+oIl&qzg=nI/z/{+j;,Y{pv+CY7<6');

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

define( 'FS_METHOD', 'direct' );
define( 'FTP_BASE', '/var/www/html/jardimdigital' );
define( 'FTP_CONTENT_DIR', '/var/www/html/jardimdigital/wp-content/' );
define( 'FTP_PLUGIN_DIR ', '/var/www/html/jardimdigital/wp-content/plugins/' );
//define( 'FTP_PUBKEY', '/home/username/.ssh/id_rsa.pub' );
//define( 'FTP_PRIKEY', '/home/username/.ssh/id_rsa' );
define( 'FTP_USER', 'samu' );
define( 'FTP_PASS', 'g0rdL1N!' );
define( 'FTP_HOST', 'localhost' );
//define( 'FTP_SSL', false );

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
