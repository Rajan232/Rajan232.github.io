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
define( 'AUTH_KEY',         '|*89<{K.il^ TOf93Ob`j=(_-iE<^bF);mkJZ}iUSJs2;-6c%kvhG<,f5aEk0Nir' );
define( 'SECURE_AUTH_KEY',  'w$Od*y%c=,n9*21QC//^M XYX_Iz4I/zE6`TwW~SRbQavHIrH8}eot7qk{:m@ce{' );
define( 'LOGGED_IN_KEY',    '|=[zLcL7hJhpI>FNB(T*j3o5#|2#4}+jcz$hY<suy>UDP_(5HDkmEI9;!SDedw*$' );
define( 'NONCE_KEY',        'H(ZyK,3n2S-qVtDJXMoQWNGhK=$1wSqbIY~Z+^+>}s7pL2.FxIxunR;=em2?AL{K' );
define( 'AUTH_SALT',        '1-EMl7jfT1*dnfKra~iU5ugI)_@a!hNRa@w@6r?d@a7RjK00@f%zQ> vX4Z%$z_+' );
define( 'SECURE_AUTH_SALT', '[[{ [ab#0heQ i_KWg062:SEJwqfFqIT9hh(JGCVRI.8|lQDmlfyPQv7j#SORq@=' );
define( 'LOGGED_IN_SALT',   '/xbUq[~4X)~-q^~XwnIRfr5S)>?mmKw`Z]D(,^a#bpO1R4Uth>%QU#G_ndW6VN3x' );
define( 'NONCE_SALT',       '/3ct.fPvCuLkgKu$S)o6{r.CJ03xS`q^smJx`n?Y|v}&B.lWSU!0l;Dx1V$j@Q[R' );

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
