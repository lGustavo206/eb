<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
// Use these settings on the local server
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
  include( dirname( __FILE__ ) . '/wp-config-local.php' );
  
// Otherwise use the below settings (on live server)
} else {

define('DB_NAME', 'eb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

}
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.R,cUrFZ$>ZsE^u*91vK@ #3e^x`skv[j[^|8ZZ][:4>I<ij*-Txv89%N?v<(!-}');
define('SECURE_AUTH_KEY',  'W7jG59>RHvXFDnH136yg3k+T.{%`X}L5QNt~_[K4?-0n%#O)@/E4*S-qeS:V|s+|');
define('LOGGED_IN_KEY',    '+{<giA2{z>`utR!S4IyHr>@<O3PH1#::Wchd}1WOsh~eQ& kq[x<sEv&I8GKxTa3');
define('NONCE_KEY',        'N+S3xJ>fZejHxBi=`&X#|Ne(@FsWxaL~|s)1&e=kh5|OCfA&H*Kbp~5`)e;N?vxy');
define('AUTH_SALT',        'y{zW@,V%*]~+:(C0<An,,]qoEV1qO?D,=68Zv9;&Qms5muQn(qEw<kZuO+A-pHIY');
define('SECURE_AUTH_SALT', 'E8sN([wSe5,Bw4.A%f4-tHIwJ>U,o+LW_/ii6(D=ur0YKKxdmyc*kqH1_^U1C5za');
define('LOGGED_IN_SALT',   ' 8,;322P+izne^]<u^/vGRe`FPdcF?Sj+YyN+89_Cj#ISM2MrkKnkPFBTF+H<</C');
define('NONCE_SALT',       '2XA8r. .w?o=, ,$[%H>_+j:~V$RF23jq-=2`7I*H#I`r6/)hB<5Q<+$s582!T%2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'eb_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
