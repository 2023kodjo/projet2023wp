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
define( 'DB_NAME', 'basewordpress' );

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
define( 'AUTH_KEY',         'GYX>8u1t(PS]|kOS@;)q;k})/2;tMhKPgiAxY8Nt&_,?(XurH F! >K*xq7m/1h:' );
define( 'SECURE_AUTH_KEY',  '}J8)98G`CIj:A O9;u0T=sDR>gvtxc1(/vjE%!_H_zEuv2}dICtK0Jb.2?#p9cz0' );
define( 'LOGGED_IN_KEY',    '+C3gNq7j1QBQ8&ujR)1xFqJVVS|Qvc.&7V0zz.(5{xKnkO-U]sJ`!K*}>(pLQ}CE' );
define( 'NONCE_KEY',        'C01QJ)sJ(C}*[)jD|0J?#x3J%`-vp^@BlAF e+npq12uFdW]>2-p^NA0KR=_7>1X' );
define( 'AUTH_SALT',        'ju>XC]eVIih:I?&aN0.m.cW,^rK$i=jS0RGKL}PDcfrt6(R3-vIbuEd?@14&o0l*' );
define( 'SECURE_AUTH_SALT', '+#fr>n)wB/m33|f%{$.bc,b5.TC%H|`(x~{^]}sV/.ic4ce5,BF0Z#Cn~x( QCWy' );
define( 'LOGGED_IN_SALT',   '!t+7uI#%$rM@Z8]HY6J!N:X.Ju^|ZKhsq9zau]i(<V([r|KkjR4mC}6FK~2jFAU/' );
define( 'NONCE_SALT',       '=PM{#-OZ_g3iR)qK}++Quz+(|gHtjN,MW1F/{eX}]1_D5< pE{b$MB`?}Vn0Bc[U' );

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
