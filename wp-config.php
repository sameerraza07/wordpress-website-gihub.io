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
define( 'AUTH_KEY',         '-?iI{S!pNe<kzS>alNtbSCNcL,|^,1$!@^p,r8+)8Tk?@kp]lI-Fa/l}/6<zpFTw' );
define( 'SECURE_AUTH_KEY',  '#jZ%FN3=9bg& .DOep#n_#Mga^VDK!_6xgOCL8zoEM#c/D*+GOfgd2Wyy VU>iKw' );
define( 'LOGGED_IN_KEY',    'qPCa!,cXA}muOtI_4I3O*h FR?x}rkp{S=stOl?MI@wN7tC,XMLXVUpH:^stQOI!' );
define( 'NONCE_KEY',        '2C.8yKV^^rzpE/$`3rqh~zGKGKCM:J{ &^Y5VIU+8?+ EOU;I?=6WOGHrZ,s7m5l' );
define( 'AUTH_SALT',        '@y&?fiyC+MQ=NIJy52tu&5Da*2V=eyAe:.apxN)7t1shrPw };&Qw7N5?4(F2MwJ' );
define( 'SECURE_AUTH_SALT', 'hYJ8Mn)c)^K`Bu(E`l6gJ&[a#xSj`E :hB[R*h`@yU`y:k9(hSvQbqTCs40;rv8L' );
define( 'LOGGED_IN_SALT',   'LoLT(9Y)1U*xZEsJT)K8BP0h1`tGA|R+wJ;Lh$`8%(5hVzQ3nUZlq{Af(BN0#m$L' );
define( 'NONCE_SALT',       '}&jHS?M]fTm:/Vc,7z/F+SNh[_TtP;C{0Rudy;d {SHy?L7g2*{xUABp<DkL_}z_' );

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
