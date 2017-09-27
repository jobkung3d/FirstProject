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
define('DB_NAME', 'wp_project');

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
define('AUTH_KEY',         '%1W%BD b:L}dGhhtwJ#lXR^Ub^B4`{Vpi02oH:$4+V/LV7T<n~Z:LVCK8U|Ko|U:');
define('SECURE_AUTH_KEY',  'MuFU2Tm8NP8Ny[JHL7Yyu?i8]TqX9#H`#{bwBT3_yWRx`Y!Hn]A,1+_>fHcDbs;>');
define('LOGGED_IN_KEY',    'S-3)QEz?no%vQm@i^-~W}D2&Qzl%Ql#i_hDf+RGEObhF1.)y4a#q0pZ_)H-*G/#(');
define('NONCE_KEY',        '.[@)xP+4Hf.cX?e3]ZC!l#or7qNv%#`S*qYo.}+,Fb>eeot)LPWS1CHu/.os9K@}');
define('AUTH_SALT',        '`{$982p@nRQq:Dt0N6&w?4c2b:wR{4v8tPdLsnyS>h^jKs&T@x)h^~[)/S!`1}BH');
define('SECURE_AUTH_SALT', 'lE<hQb aab-`(JS[ ZA}ZB-|t|cteiqg{]2!L&c$gV=C0??BtNdBz[3SGdOrdpQN');
define('LOGGED_IN_SALT',   ']R-^2C,HC4Bd/4F)po7QXu!YTe<{,VEUt0a`gwa~_R|1`B$?IQc30+nPlQH?b:Es');
define('NONCE_SALT',       '8?ictQrDm[Rf{$QhrmfhlyFbbLKQai9hs59JRR%=u}BS)Ze7:FY~Q<H.`{N 8LA!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
