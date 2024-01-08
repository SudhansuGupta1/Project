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
define( 'AUTH_KEY',         'Tm6O`t{p6g`yi=6yFL*A5}xy`*wgS==^m?#57s5yEbF:k<eLG)2aX;J7E+ui`z.Q' );
define( 'SECURE_AUTH_KEY',  'Usi%%/KGAFf1_Lt.667sXp~fB$@6?E$u:I%B7,]@2ArkSx~_$D-@| 8pyS@zuAY=' );
define( 'LOGGED_IN_KEY',    '}o0XYb^@iguB)Qv Udw(**InR]J[(^GO-Rg9C8}75h RG<gUHnFH/0JJY^>F7Wh3' );
define( 'NONCE_KEY',        'MANdlmmVaTiijaF}:XpxXR/|BLwo1R4sy[K(}l,5,,az{C]zJgDSnh{KcU663{:7' );
define( 'AUTH_SALT',        'xI4Slg0T6KVPezpHZ^W2Eb9a<Cb5oS5FYZKp;hY(w<]zfA~t)|%^dzKKp9=J(kp6' );
define( 'SECURE_AUTH_SALT', 'D-jYwvPGE.gs)zus}xPyFV-8ALuk~{{f>)3a`gcq#9$*^=##Lu^$`!h &EpA/ kr' );
define( 'LOGGED_IN_SALT',   'En 0STusNMafO!c:%!(:8H_m*r]]|C1p6GK|S*xae;W4_JHMxNr9h^[*36^DBC+d' );
define( 'NONCE_SALT',       'I`)Wk%!4mKQ~lYu2({t:wjzbtFrFOl_LhQiVZz;d2=TNZvl-:dV/7.i,JN6}:G98' );

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
