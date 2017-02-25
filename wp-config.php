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
define('DB_NAME', 'uidoyen');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'uidoyen.dev');

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
define('AUTH_KEY',         'p]9g],&43MZx6$^N8/D)+!Y=.-Gm~Ul=Q57lBfySJ jl_*pL8AyS@9H6f>M0PPCh');
define('SECURE_AUTH_KEY',  '2* >~dSz@Nz.D?):fg{IbnwFO#@2aYTjpjbVXcEYx&lKuV/2 eZj(nb3u`toT3hZ');
define('LOGGED_IN_KEY',    'fOharWsNP(}U6??CTgFMKSgH@?qKSHp|8K-l.I$|M%$4@O7W7ac@i.KU.>)Bfo@q');
define('NONCE_KEY',        'oBwW/xmZlb,aM^`2bHh.iQ ;bB`Kf$54.e jLidi)Zozw!O~p0S|ZnVFNrKe:tb_');
define('AUTH_SALT',        'rLD_%dJ?t6Kr26z7kJ 2?]2=S55e=jSki DaT~NAEMJGE!qG)4%y,b}l En)$y5p');
define('SECURE_AUTH_SALT', '$@x=]u&oL?Caa=a-]dz4.A#thdQR1~G>:wfrTglqdg)[K@:WH;u,87fF&+4Yd}^q');
define('LOGGED_IN_SALT',   'z.`me2v|]bMgBV7u.m~s~/T633m/SP~,`5+!g@4W0o%CJVDyf>/DZbp x=d$skQ1');
define('NONCE_SALT',       'CqgfZI2W-]lFP9m (G Wm2?JMcLhyH3-K9,>`PYH&|uYJ^NY/T={80]x?gFsrW<a');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
