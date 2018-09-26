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
define('DB_NAME', 'numona');

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
define('AUTH_KEY',         '}f?[^AUp-N;<DrIr#M7.tUv4@_lMT^;GU|$umm(wN?iNTX_cPCvt*=DM#bxt47md');
define('SECURE_AUTH_KEY',  '%BU&m_Any@Lg-Se&oa!8UsqFd /pg7}{V2bud6pU81_nvued->-uas3jBY^NpKE;');
define('LOGGED_IN_KEY',    '-:#}yB<k*!XVo{3)q]q>[-HxcKr#k+^Uk.N6]v.Ex&y2)k<,3d1R0GrwgIPC=wn]');
define('NONCE_KEY',        '$:t+(ZWGvHqH=f.Mwe?rP!QPwx9GI1II_[w]mBqRam^KUi_*JUo5`P }~PT!aq/~');
define('AUTH_SALT',        ',b`[^u+X~<Za&HKITgo5-D,@(e[rj B.~nRc@P{k^vTHQREh/3c|]2U$b[@LCmC}');
define('SECURE_AUTH_SALT', 'ON)LN@3Fbl@m2^ip9@b2UY<=!y~!2ZLZzIt2ct(PIgTEK#DO!XZ885`AP/BXCr|M');
define('LOGGED_IN_SALT',   'FmhZ%%1N9`,W~v5DioS)bt?zYz1j{AT6A}WvS259>H}#@Z7l<yEsQDVBQn.(U7-t');
define('NONCE_SALT',       ')SHLOaIrTr*69=%z]SRyXrz)8rToDu[G[k_=k-[c/+?(gj-*Oy5#zFwL)zni|Dk_');

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
