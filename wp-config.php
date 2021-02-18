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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Rajan232_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'E3YGQ@ gpIlHL#3xa=d^?+.[NU`AY )u_*r/b^GARG.CI8UV[( Cc@mlixZ8[=}%' );
define( 'SECURE_AUTH_KEY',  'x;pkC~(+3{_k o<Yc5[`-K5b@/_x%p;`ivn^eP7P{8(iFPk/QJi0 NqkhQG,aG_1' );
define( 'LOGGED_IN_KEY',    'qh)n]k!1w;LndA?aeBBl}eqLC@1J#_w1cwj]4mV={EQ5hY}2<)Kd_!*LY]bS&;V8' );
define( 'NONCE_KEY',        'yHb{Iw3k]_;_HPXD<_x8v5%ugL=pfoAkqeL0kf*OuaQ_@w#44}G:L}Pxk^?-iX#q' );
define( 'AUTH_SALT',        '8nK-s]ROd~24:k-4ab;u4Kdu8c r 9B9-l<%G`GA}~mUOSiUQiXzo;<v1L6RQ}t*' );
define( 'SECURE_AUTH_SALT', 'u]*QsS0Ci0MpHyD2/AX11=p9}.3PVCey3U uZWu[w&Uc5oyw/=x?bBw??zOs,jq|' );
define( 'LOGGED_IN_SALT',   'B,@Pee#$vC@zjNx%!jsEBIM&$OGwhdu6coh:x;MzS`(7fubwN|I3.;GCm0!VF~E=' );
define( 'NONCE_SALT',       'X,%S)dk-0Ep~j:{?)1]Ow*zsL|x!Jb.gYc.o!ht~[JsJZ$&-DrtBurM=Ys.`fs2w' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
