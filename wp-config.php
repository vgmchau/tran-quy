<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tran-quy' );

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
define( 'AUTH_KEY',         'OGhU$U9wOKQ1af/P[<IV*&T^]>+3!e7?H7LKd,ZNQu*|LXW5jbNsmu*v+j<C[63F' );
define( 'SECURE_AUTH_KEY',  'JEMTg*Iu`#=7%%@!Gm`9z1 M(-_]20R5hLsO<(AZL|eL{cFp,fDqo;F.*?EdE.eu' );
define( 'LOGGED_IN_KEY',    '%AXt|s6!I}RXOW*5Zgs53NpJHGnmQU{=cUUU2.Pyc64ni!-};vdmAY84}@8yfk2!' );
define( 'NONCE_KEY',        'N/|z5|1:H-!IGWEoAv4XWTB$%ky8A{Q07Ghka<_j;v:A8h^z}rCbpoB7@~irG^zj' );
define( 'AUTH_SALT',        'CpU9z[)ddF#(rE8;q|7UuF :SuvHvbet_+S/Q/aMIT5FQ(z&9qQp}^d52;/ilN:%' );
define( 'SECURE_AUTH_SALT', ':/5-D<+f~ua&h<Y~iBT^YdIF,KuVtnBD$|jv@y?W5Gs<l*4QOETVz]M68S%kjTE/' );
define( 'LOGGED_IN_SALT',   'iD=nZB~8YWgVt6!RC~1Ir{Y8eUJYEAgPQq`1Bm_<Ly9Md,C1.AX)X]fJV8uxfHvy' );
define( 'NONCE_SALT',       'JN.n*Y|#zPBgRm%v?xJwt*HtO=bDv&&/#DJa-d}Vy2$cM2sAIx}/3!W]gx6hn:_%' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
