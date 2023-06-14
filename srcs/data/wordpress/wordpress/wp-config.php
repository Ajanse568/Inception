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
define( 'AUTH_KEY',          '+g<fz(0+Ii]gJ4qe&Abr?S1CD-X])1sI61#?0T4!_,+ZQB7(|-a.}(p]xa<?-r`5' );
define( 'SECURE_AUTH_KEY',   'sE(AjqP8zm!T;fpCZy0TLHD@p,i7wj+##$fzXt{XX3_qD`Z9>_RW[=kd2Ng#V2TR' );
define( 'LOGGED_IN_KEY',     '37GX8{{ES<*cK~E@3[~X<F9zZS17&au.5Jwv=D$;*[u8[K+xM6:%Fy#kr_;<SA+J' );
define( 'NONCE_KEY',         'AD*Roc3`iv><Ys89*@_|Cy,2BFPt#~EZQ[CF0ehzxA1A8oN3oFS5tT(@U8zXwEKu' );
define( 'AUTH_SALT',         'Ep<*9Uowbhm;aYtD{+1/p:UW)Jn05`d1^w8Z?1#=qK/VXD`8^mYW;O8.#~,w#0^M' );
define( 'SECURE_AUTH_SALT',  'fCcVx:UX53DSA7W5d]dFX+g/CImqc=6bd]/,KqMKz|+W72.th_:6s&k1stB%!D!W' );
define( 'LOGGED_IN_SALT',    'fRNR5o6w6KHBKTL24:GJBi7LhOp!7o8$Q:Q&l(`0Rz:Wa>MqfxSJP}#s)j|EA 9H' );
define( 'NONCE_SALT',        '%G^qO3T^.qAR[7QI~|/3DQc;*BEp[ lYoBtX8|+%$5@2V YdF3B#_9gGGcXlS Sq' );
define( 'WP_CACHE_KEY_SALT', 'dj&t!;$>* sV#^$u4X72TZO@8_j&:`3$jA4 (]!?HK8h0@7b{u*5iE$IdL1](D]~' );


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
