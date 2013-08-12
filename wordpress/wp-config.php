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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|1|UVW]@hsldI~o0(UtM.eYOXsIz2_`|9em?[%NIQ%r)-B;&lE.Q$fVbg|t<$]ay');
define('SECURE_AUTH_KEY',  'fczzln,}= 3bA:3k`QDjl=S}IGOU:?80,?d<9XajqLWG| f^|tpDa^,!=c$kPy:i');
define('LOGGED_IN_KEY',    '@N$Z_7nx}dwd-HGeszpS8+`sgu1PVfHh*F@F#6nZb+YsI+gU60PXf^Q?C Q/|O-_');
define('NONCE_KEY',        'ik0e|nO=_p>z-N-K6,RASMND[d-gJ[9V+@{+ZKH(1W?wT#Pb,#)6Kaii8:T8~e`0');
define('AUTH_SALT',        'QQ4nmA0i8}l%Mor/ WMO+|n95R+<?*w.CQg=Vz0SThr2zA;80-`/0j-+_w2LPk=I');
define('SECURE_AUTH_SALT', 'pP@#E962WXI<sz[l|TbQzK^P3lA8[)XuZ5<Hqd-g[`9Bg]SU*f-C9<kpc7W$PiAl');
define('LOGGED_IN_SALT',   'P&pzBnb*$IQ+uV;}dKX!8gY7kbIR]+DqK%gKyG>)@AxZ4:QQ|_b R6c(CYZ *n 1');
define('NONCE_SALT',       'Q+Wjy5u&Nc_bx9%c<np97T,Ah<hPYImun3B_EfBT=zN{RE6xewD@wWu]>X@WX03q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
