<?php
# Database Configuration
define( 'DB_NAME', 'snapshot_manutention' );
define( 'DB_USER', 'manutention' );
define( 'DB_PASSWORD', 'XzxYBysplaGwrBdmNBIb' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wpw08kdx0d_';
//$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'OkdzL=4$4blp-$uiC6kwaB_c_FKvETG~/:~aK))NKoOckp %[:ZRw7a5q!TRBr%-');
define('SECURE_AUTH_KEY',  'zBe$d){ ^|zu~%EQ^F7|cMmA}ZwiP,Ku-4D~RRyK-MgP9E2nLApR2+-4h2(/-/M>');
define('LOGGED_IN_KEY',    '-jt{f7)b<PO?uZ3E:M]T*-Ns(&otJDqF~#&>R~_rePVG6|q;08#Ri|-M7RJzX(x8');
define('NONCE_KEY',        'k;.qGT$(BJ6 2=a7mni!bs!s:2pQ>DMG2,%>z^zBcTm1A<?<,0Yka`hVK&RNRKO6');
define('AUTH_SALT',        '=]FJ#*}bCm(y#-[5Z=bYR&O>=e$58Gzx#/PC(P%o<#9)uws:~wIOb=YY}&E;W#2(');
define('SECURE_AUTH_SALT', 'I!a^8+uCz0xv*p-3s2_K?3-REA75M.|Fq4IJKAsE|$P=4e+1B)25P[1v_1XK6tuE');
define('LOGGED_IN_SALT',   ':EF)Jk:WyK`+%_G/wm3/Lo]S+~Jx}B{yfeTaMz5^#r4J?+^O);zy2vbtlJ1g-fW,');
define('NONCE_SALT',       'dUo-k?1{d$ubI3wOlY7R6vp48R&bsp293|CB_9b]967JNnb_y<qWr)G%!81hy%9y');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'manutention' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'e88db87a6736f50c1de37b9cddf95516f499fda7' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '10265' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 22 );

define( 'WPE_LBMASTER_IP', '174.143.186.129' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'manutention.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-10265', );

$wpe_special_ips=array ( 0 => '23.253.71.213', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );

define( 'WP_SITEURL', 'http://manutention.staging.wpengine.com' );

define( 'WP_HOME', 'http://manutention.staging.wpengine.com' );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
