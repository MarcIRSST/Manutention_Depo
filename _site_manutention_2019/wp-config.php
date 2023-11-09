<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', "www2irs_manutention");

/** Utilisateur de la base de données MySQL. */
define('DB_USER', "www2irs_manuten");

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', "sh!pp!ngIRSST");

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', "localhost");

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':U+[lB2d~vm*P$X}2*>wb6$HLxj5At$t{3{9Y3I(-w?Z^d{cX.3M^FdBl- ]3^}4');
define('SECURE_AUTH_KEY',  '5nmHcgq0hkEQG|d:wy9}C.9{beat) @)|<M$/.NAzA0jz]A@rOb+]us/r/AQcrr:');
define('LOGGED_IN_KEY',    'f-5_+YC{qK~;~L0wR6+~1>X-yU9K3w@ZjWBj]%@ooOKm```3MIkDYJY,;{gi0ZrO');
define('NONCE_KEY',        '26+q7G-u2vo,L2b@47h_-cf4EPqAe}[v#7mi3!4|es>I[[;4zi+x;M?L2yL< [EU');
define('AUTH_SALT',        '1K(wbWX(|6Ww|>^/YsrBJ0d@aN>^d_jpXR)Oz>HYC18#o{x=n~[ L|4nr4WE8gx-');
define('SECURE_AUTH_SALT', 'fvAGl6{nv@s)Qf,x1g|sTkDi`|k=**|wL8DR4B l9GtefoV7hP|xb15;{$N`t32,');
define('LOGGED_IN_SALT',   '}&S+7mc91#;?.bmP)yJY&o/I7]HdjpPX~*e/l*W}M5Z#3NT`z=qlxihq+rjI..2^');
define('NONCE_SALT',       '+r+?bl*liA/4u+JQKvf_|f,e>7yV`x$A]kthmsTN24z-|{ou@Q<-A./QaMvIe646');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix = 'wpw08kdx0d_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

define('FS_METHOD','direct');


define('WP_SITEURL','https://manutention.irsst.qc.ca' );
define('WP_HOME','https://manutention.irsst.qc.ca' );

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');