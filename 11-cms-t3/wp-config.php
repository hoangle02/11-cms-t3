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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cms' );

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
define( 'AUTH_KEY',         ',}/C3HjK75ap%1rk!9IhZ$E1s4P+!Zn`/fv)VWuH&yU3B^7RN xtVuC$ku 6^E.L' );
define( 'SECURE_AUTH_KEY',  'i/[_Zv7MBy^1IH;Tg){HMT.ZFX#zin ]DP{3Ga[%Vt)WK{k(NC{.u%.p#PS4QX??' );
define( 'LOGGED_IN_KEY',    'eNa9^SGqR.&zp0__#<Yz!<W7#kCv!*+t`#X1Yl s{z8=b[3bK%:iWpw{ t)41 fE' );
define( 'NONCE_KEY',        'ZLsDx>&~,_QLD:Ve{W2*W;f):uxAph1b6CZ$RK .fS`{#3CFhhv7%JhnSB_*kx/U' );
define( 'AUTH_SALT',        'bX|to&bUwU*D[!u7FwB|hn5y%9i?y%8MQB+u=w>r/zq(zp[$ 2YS$)U Zw3rJj78' );
define( 'SECURE_AUTH_SALT', 'doxr5>DTowI-_Wa.U.o=6P5z5YfzU%  .Hrw?Dk1?m?&R0sV(?/GkI%U,))<:>`y' );
define( 'LOGGED_IN_SALT',   'zx;*F54A7iY3ag@0mCrI8Mb~A;&&$f%sH]lKGs>FD.W>0yWgvMl0!S5U&)|iX#v_' );
define( 'NONCE_SALT',       'Zz+vg=iGiho{3rRoFW%UNbDgVK>aYW/n7X>%RN b74w?~>NCcLXl){p]5~IL#yV<' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
