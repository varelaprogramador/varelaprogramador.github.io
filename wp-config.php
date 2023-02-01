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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         'ItI$uU[%R$0A7yH!H:9NS9bK5P/Y6+MkFP3?)#b8}gN+OItk~9Dc<svzI&CX(o,0' );
define( 'SECURE_AUTH_KEY',  '7!`S.|dHnGMNPK~4{WwE<v ~c)OWuMT/7<`2O,ey4/[Q]pms;^.Z#Nw2H7~1.i*3' );
define( 'LOGGED_IN_KEY',    'Gwv^-?qV/pOV5*O+8S`r[~;>G3{,xBZQn0Wvn?]nvr&Cbm%<Ip;#`cbv|<K9XhRS' );
define( 'NONCE_KEY',        'Y:i7%}4?kILn)^z*JLhfNJ1`T~XGduZ$j 5ScI)X]wY@7eXKetB5Ts7Tkl7W4uVH' );
define( 'AUTH_SALT',        '_hkv^JigNp+~~Ya,&qGuB,lj90$3_Cc{0<zeKf1_ut7!/sQN0(.h0**%:&Rc=LW+' );
define( 'SECURE_AUTH_SALT', '}je:YW{$+xv>CY3n+>*53Ro),Ior8I`1Z4:BI3lpUbW+b1KFb+,c=m6lu,15c7 o' );
define( 'LOGGED_IN_SALT',   '&YsKXg>R_dO1IQ6wea*7r[Wu/*%ho})NxgrsKASYfRujL=!x}iQ#u60,`onvY~Gw' );
define( 'NONCE_SALT',       ')%a+m2C;u=E7U:]B*CTof,LBf#N.?|YZ6H#N%]VOfojCK!w[*Q>cLb[.;l=~m<xh' );

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
