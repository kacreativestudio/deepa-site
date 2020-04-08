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
define('DB_NAME', 'deepa_db1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9,8w.qU1$r ZD0r*FS]6UC9TQcX;/,e(n9nu.)+wivb:-@CPiiQ!l=bo!!*^f-0e');
define('SECURE_AUTH_KEY',  'b2tp[&7n=30gbOkK%p[2is=FIF09.Afa9#z]fjRq.m2F-X6%{U~aU-=Giu,d4M z');
define('LOGGED_IN_KEY',    'tBAR:$X:y-{3[}T<Z[S/ V(cpbBIEQLXe#O&%9Wp}Od&W4_|8sVuZ9@: JJz7M?J');
define('NONCE_KEY',        '6lh))u29@I:#09,nTCP%tOb=v)e8lT+~>eFgj|pE;WYa*CGA!iP=he6`@!kck?CT');
define('AUTH_SALT',        '%7av=&3p9Sj/<O{`c[ qS/q0rne!w(~Y92_`E/.g}YlAOO ?xWW|bbk!PigmM@t5');
define('SECURE_AUTH_SALT', ' t!p-yW-^MAt&{JM&XK4+8K9je-1:;~wdcd)!0279cV{z8#eu+&QA_$1ljLtC!5.');
define('LOGGED_IN_SALT',   'V/r]9%8fd-D-M(v-bs]@+3VCdH<wE%m2N;z>oYUm.8C%h{?L$+osxk/<4?cC-l42');
define('NONCE_SALT',       'p:]0_opX:qyImJZ$n5J<n p6!!II<P:%mjf*3tw@bVG9,=7e@9PkIH*A6W:&!|Gp');

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
define('WP_DEBUG', false);
define( 'WP_MEMORY_LIMIT', '96M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
