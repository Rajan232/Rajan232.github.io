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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'U;ryNjE#@HXT_/Jj5SXeG:TQ}$T=b=RdqRTgO=Jfz[m4sTzX-Ogau/4hZD]2#pg]' );
define( 'SECURE_AUTH_KEY',  'mAf#rQf# #k1VGrwRF0(/ f~T5`b^8B|NIDR}_nHfWspy7|2jl5+Z0m]L~`zWGx`' );
define( 'LOGGED_IN_KEY',    'yTnGoNekaH6~xP,9p]1pzF<5&SMJkr1*xw+f3Qo`I^F!J/RRtfsFYCun4K*UxF0j' );
define( 'NONCE_KEY',        'm[}( !.*/uoR{[8CsoDcr+%xK[:me6*g_eKXWL.Jhkk61VH]H@slev_v&4,N,$S0' );
define( 'AUTH_SALT',        '5Ox8{A0#$%:G=*rBq,6pkF25USW.6Tn7c1B;^yA3=xPUR)}k=n&Z9nKsy<lyitXe' );
define( 'SECURE_AUTH_SALT', 'abP+}=kCKhxoCG7_SkKyB/*sz@|>7|W=BOj^IeC5IC>g0$~$:*~WfOieCR&$5^(^' );
define( 'LOGGED_IN_SALT',   'YVtcQbDK|<{s.Rkx~.qCd10HLKi})b@gT);jv??:**]o9&f w]SezQY;7*Da0]G{' );
define( 'NONCE_SALT',       'q5pD_xZ#nh[H&]ISHcDHd7>O${|0QPjpWlm!(jG]$yu2I.[RW{pJ1g*ocReXHx|J' );

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
