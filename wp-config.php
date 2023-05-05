<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'codeartssolutionV2-db' );

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
define( 'AUTH_KEY',         '5+VaN3MQYy^4<(=27S]g_Ip;rEOj`ii|rG+!hAjrFJFM`iPmo)>I:35V-:pS80dC' );
define( 'SECURE_AUTH_KEY',  'Zkb:t}TZXYu#l|+&8Dg0k=>B4[%k5llFJ7l%x@cVf EOyf4`/,s`hQ%h}k@!n#Rv' );
define( 'LOGGED_IN_KEY',    'mn+dBF~@zi_%:P+c3_uoO lf?=>p ZnFbJ8y)VP5m,K!9A2{9D!U$za[@Ity?u)R' );
define( 'NONCE_KEY',        ';*BC(x-p;h0:*;I}X.#bLGrjO1#~Bo8uUoT$`72d9;n:,LK.al~cxL;dy,h+-EBV' );
define( 'AUTH_SALT',        '#^lT52]Sjcq1ZYMRWQm`e|IkF+shGz-?zbU:?WQ4&1z]K):&3ueige.&~HfP5^kY' );
define( 'SECURE_AUTH_SALT', 'keBv_. #W5dLrhwH,!w k8ri[7HQq~!O310M7dvM[:Z#/0.=$C}3T9@+,XKf.kaf' );
define( 'LOGGED_IN_SALT',   'X-Y]F:A1qq$?m?9/LIy]#4Z^WrPC3=ZZM%e$;J@ENxt_rg&9f%b`RRXjP0j7Yxk?' );
define( 'NONCE_SALT',       '~2@/HzFd:14gh).U75x:0}nGP5z=&#rEr-4r~2m^,TcP<+Te!{Q!{Rsl%?kAkaE_' );

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
