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
define('DB_NAME', 'ammiiorg_dbj');

/** MySQL database username */
define('DB_USER', 'ammiiorg_dbj');

/** MySQL database password */
define('DB_PASSWORD', ';bLkr6j,fo9iu');

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
define('AUTH_KEY',         '%r2uGlpszf<lS5PFtO~0kn==}J*vb qu0mrCD=q1!A)geMtg:j}#FDPEF*:DAqth');
define('SECURE_AUTH_KEY',  ';IK~q`pE7M2A(tP~&#M^{&6,vh[8qqtw/|. ;Ljbn/8N`>MU)hRo5UY?HklF9lx4');
define('LOGGED_IN_KEY',    '2VcAXP9qy(V6LK:TW~?m7ueuz*5gJ7}`3|J+1[~Nw|{&GJ|gq[Tf=k!8)|.vv9b+');
define('NONCE_KEY',        'l15Z% P2URR_8H$sl]-F8[~,nT)C z)QYcM_ty9SfInz)D?%]i@ugq!DDfe.6bD|');
define('AUTH_SALT',        ';(&1fFXXYr^r)*H|W/&x qZ?Gl.cG`wxpJG{|dRX%-q;+u02oOu3r)Fj%c:2V1,3');
define('SECURE_AUTH_SALT', ']9Jy2BM<z;Y6L-.ARLhPM{wh4Ghs(.-?U<wV+~Cg:_|Z*0i7zt|)%4&2c}a-hEJ#');
define('LOGGED_IN_SALT',   'i#==esh4Tj|o=o7Z2%_<a<k=GbQ!CONC>]rUZlDCMyA@K)uV`ortfeM_g{{g5Lus');
define('NONCE_SALT',       ',bG8En@&]&jEF~3#G>nl6o)GN:kfAEH._ 4s^bHep&z>Jie]Yf@sD+X-g9mzcHnY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbjvp_';

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
define('CUSTOM_USER_TABLE', 'wp_users');
define('CUSTOM_USERMETA_TABLE', 'wp_usermeta');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
