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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'spam' );

/** Database username */
define( 'DB_USER', 'spam' );

/** Database password */
define( 'DB_PASSWORD', 'Florecita123' );

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
define( 'AUTH_KEY',         '.3ovR--1+w2NFL 3g*9c>}VzGG34,PFF2G-RP7$.x#FQJuK7$I;/~+mcGF?[;-)[' );
define( 'SECURE_AUTH_KEY',  '=,Xgf)NLN3>`hKn3/]B%DE@l1.I@g-M#Ed#V}[e_uY?Ta+-Y@z7-x?B^%iGBMZpf' );
define( 'LOGGED_IN_KEY',    '#7i:;#[bC9p^H>P]RjK4R(.jCf9@oAm?op-7Tm@t1j3Vlgs?-V39LDsKFa!OYfmZ' );
define( 'NONCE_KEY',        'Dd/EF+tP~EMT&Wx$ctTG~CeHCzV-48N}|,u2^EnJ-t6ni5l$C+W78]p*#c6}UUco' );
define( 'AUTH_SALT',        'wF;~,;fE^9%lSu5m$Yc.H]gdMf+%/L]jRr!4AX,hsTo9Qw?1eL17VX5cImr5e!sg' );
define( 'SECURE_AUTH_SALT', ' MqX1Bw~=6Ln8cmfGg26qm3t 0k*x%g;mS8MpH.LnYOgF%3]nu/b:>;;/MVsG~5?' );
define( 'LOGGED_IN_SALT',   ';b~2%j0_@3R3_K4!$|>/ 4t`( :E.AsF#Op[#f^81OW#pg_LCO~^y Jx<]/E{<&a' );
define( 'NONCE_SALT',       'hOcl2JH?C,+[weJhw0Ih`,g/vc@mNt+Ayi5{eX9kr}6X$u@Gr?Vzsv2uL/l]!H+{' );

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
