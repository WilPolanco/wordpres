<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define ('WP_MEMORY_LIMIT', '256M');

define('DB_NAME', 'cloudvps_sitioEISI');
/** MySQL database username */
define('DB_USER', 'eisi_wpadmin');

/** MySQL database password */
define('DB_PASSWORD', 'We1S1%8102P');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':bj.vYY83JK6zgMGWDXryPorN@-.l34qo8%jx!{f9VGT=`+e#8$39;:d&^#mRkU^');
define('SECURE_AUTH_KEY',  ',T5%&`DEeV,QkW{k]]x3$6l.@H6pPVT)-VN+VpiCMG<Bb.}w=Qh->b;vMObL_u!+');
define('LOGGED_IN_KEY',    '#dM-aHmMme?jh^Cgh{Gd&hw4<&aHFyJF8uh;jRl2bFmqJ;E:d2YtfGtQ<-Ll=!Ky');
define('NONCE_KEY',        'eE ;X+BUtx::XY#|3P=V:A&8e*>hiVG$[urJ<=sLU!6#*TdkqyPb$-$`!:bbSDrM');
define('AUTH_SALT',        '6M5l1Pg{m;!w}d#_f9~$7W8izwX,^7{v+n+xZMlnpM)%R/[`}Vs::X5-Vii<UxPc');
define('SECURE_AUTH_SALT', '1[aw$qJj/dH1*wtYHPj:oRkl%FNy)^ {-EiVYVDqtvIEh!/6@/N9Qk?YgI0%;lB3');
define('LOGGED_IN_SALT',   '3R0}DfE=j~z4{dx3T8QMOJe%lE>Zc3AsYp*NG0x0z )gR^P}sPL${Oi;i[660Ql&');
define('NONCE_SALT',       'XHajh%6e^OE7:2M-3Wj7eQm$?&_E9xAXJp9vn4o_>sR{r|Vn]%q1n&j tYA5<9D>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
/*define( 'WP_TEMP_DIR', ABSPATH . 'wp-content/uploads/') ;*/
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
