<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'OW/qx!,.K980KByYN$:sCk/Y9<T<5O:*/TT2J.Daa&7kEbi,4Bh<5I*AVY})>ca>' );
define( 'SECURE_AUTH_KEY',  '5g$wB[aM@:OgF*MI@D*j!h/4u*M4}vQ()68xpD2.6^(|Y(PH0KvW558`g{3fPu*U' );
define( 'LOGGED_IN_KEY',    '/3ru*ZWeR}kE-|yDHOlX9_2UZEPY$=a<T*lA=Ns1um[,85L|<m$dJA]v*%0gueFu' );
define( 'NONCE_KEY',        '%wN:/@&,}mAMv?i53/=c!5+6}9^MYm5H$0*cBlqSF,d-FEsqX)iHbcdC(VX=BfmJ' );
define( 'AUTH_SALT',        'pbb#dOrAty?vL&UJ<mqlVo,T@7WoW]9Y0%D@c4wEnq~PP/$*+Ow4Dic=,DWL[IM<' );
define( 'SECURE_AUTH_SALT', 'dDEwAxuF_Wq;(`%9D_aZ>dr%].7^=gbXL-bVRs6i{A[V~vo;nb#NyA+YVX(DF(FJ' );
define( 'LOGGED_IN_SALT',   '8C~vWd}8RyCP/]:!gva78@~a[(9nK%?$DzzlbrIxkt8kZP8s |I7liv*^f/Ud}=Z' );
define( 'NONCE_SALT',       'e?dpFb7(kzL)_yOed>ylolF;a/8!12$GodX`kk{7V#$grEt%]^lIKoSB6`,]#bIq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';