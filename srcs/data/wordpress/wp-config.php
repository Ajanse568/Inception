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
 * * Localized language
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
define( 'DB_USER', 'ajanse' );

/** Database password */
define( 'DB_PASSWORD', 'secret_more' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'D<0m!TUSot^Wf$i,N]|pK8n[Y3W|g/)? iPG0#!]2~YlRp{BL3OoSw1k!y+^*X<Q' );
define( 'SECURE_AUTH_KEY',   '<7k&7+:H:7JC.;#4}lhUK;^-GDI@:jF?>IAKGZ(2a+Zm_ta)$] rHuTJ/@4}_c}>' );
define( 'LOGGED_IN_KEY',     '3_Bz9/s-CM]$nE^<L8Pq~GjM?T9Il=c44,}LbR9hPaQ0%D+UBAj#*78`t7eEo$#9' );
define( 'NONCE_KEY',         '#FJ<6q/`We8zphX._5tOV1#ond[ROFCRZGpZ;*z:b[#w$<nLU:dQxF`dlt7#4f;|' );
define( 'AUTH_SALT',         'rIzlC[x];xY%.K+GRZ,r-Y+.y*~GK0{u76 C$iAvU1rY)^%^QVyf6S2q}GH{y:kO' );
define( 'SECURE_AUTH_SALT',  '`Oz,Pd@^maTuY,`P>kwjW[TY,jT?11{uSf A8.Kkg}#c*eBag$w2hOHl;;>hs<4|' );
define( 'LOGGED_IN_SALT',    'ip(MaqIpcd$;lM>^o9*tymR<${+>Q,2&_-&6M$!->^L)LR_ YY0Sf$9A-trQ84TG' );
define( 'NONCE_SALT',        '#xot(s>GeAgd6$KAwpw*,ghq#>GLtdO1*>H65c~.0h-z>]H-b0<~ZewRYI+-@&dc' );
define( 'WP_CACHE_KEY_SALT', '#rn(wb0V_fpf+]jb}xr#jS8wa>w|#D&<itFO7uSiXED(vk<9.L:|3?H&=xM*3A!}' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
