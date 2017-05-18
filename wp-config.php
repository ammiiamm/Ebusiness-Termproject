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
define('AUTH_KEY',         'g M;o_5?+;1LlZN1C- N..LI@RkkxX-{|.AijJYKxK%PRB|J&M_JAF2(]3x;_s,F');
define('SECURE_AUTH_KEY',  'V(vv;=Y*By8R.Z~Ml_o[jw!II=qLXQc##Q4}_1swfhz:Gkvo^?l zq*5=jJ?,OP^');
define('LOGGED_IN_KEY',    'Z0=PbA&.qWFMJ F^>M$I*![d(FDmCv0_2IfR/-uV!`}~c>)F}T|0(0y@%9k5#K)b');
define('NONCE_KEY',        '`ZB<.=(^~OBA8^BU8.LT4+ml7;8qB|U6J-QYbO7R9XMpS*e:bV+2+mi0dBfdQt2F');
define('AUTH_SALT',        '^b,E`;DQ>RlAJ+p8LATQaErwEr&2;hNi<VM&Zn7+/{pXDn;ZiI|Hm}6CBElXe0_5');
define('SECURE_AUTH_SALT', '%k-@F~~-O#R^lq2EH8G8W&t=^-}#wQJFIrvK7UZzV3+^w79}4tSw*W0j$ /hCVgK');
define('LOGGED_IN_SALT',   'g( &sWfT-,%<?5/rpV1Qbsn/zFN;?@II}A].0f2:nBUL:V~VjB~]A&s(~,AuQl{D');
define('NONCE_SALT',       '7E]QlF,v6`tb^*wS(Cl_OSjt|-Zw|=3FUN:vd2yJ)47EpByxP~p::E@So#|/@ &1');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
