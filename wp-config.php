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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mg-box' );

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
define( 'AUTH_KEY',         '^t<$NW@F8oA=+<oAq)wvZon_L;Ava-vOQdI:?6LsZWr?.i yT|hW,Z6bSa5S+%zD' );
define( 'SECURE_AUTH_KEY',  '%X|,Z,U,3p_%[GsUa7O$:bUf(au-pO{lJEeZ-9(,ZJV*FJE&vd~w/o2L,`X2XXB.' );
define( 'LOGGED_IN_KEY',    'Cw;q9<VnCQ)NiY}G&g aRL%TdF~l6bi.s*O&#!XfBtmjK[Xe.MBk)xwaaJ|onQ4C' );
define( 'NONCE_KEY',        'S#esA>W>Z2Oq<k1N} qJ?$i9<Tvpy;mtpGyk&(E_O`k%%Wz`@oSg#GVfq{qHVtJB' );
define( 'AUTH_SALT',        'q$]:E]A%#7kCSUsTH=o/+b4jIx=Lb_qPK1*I+)gBM[}>}:0Kn{g.jWgqzwf6$0V}' );
define( 'SECURE_AUTH_SALT', 'B<4Qke1+MYZ|PouPhDlo<FWlmZ:lqt12f? <>k{Uk-PGiA~;WNPEr4Oi@EUi6|V^' );
define( 'LOGGED_IN_SALT',   'se:dp6m}v(*-De<(YmS[16i^AJ,Bggi*f-F(Y3$XfTXL>^R;vy$DIoNP3;D; =,5' );
define( 'NONCE_SALT',       'x:aM7D+*uhgRp6XFrUgBX%|pXlME3[*i1Ez@R^J VTTCBu Cc5)+(`tst%x@{)8}' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
