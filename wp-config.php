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
define( 'DB_NAME', 'base_misitio' );

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
define( 'AUTH_KEY',         'x9kw?Bn  ~<>@:P|$/qh}m86[Il9bqzVe$~*7S%R;ot^BNe<,#yKS]v*,7Sz|{>`' );
define( 'SECURE_AUTH_KEY',  '1m#aEc~*l84|z--{SE]ZF1UZ;>V|F$ouECQ*+9/MS(j?] lb3>FY[,),{6/giRvp' );
define( 'LOGGED_IN_KEY',    '%#kW!Zw2R1ZuW33I|,4|8DE|GIJ1S;tp^7F)uyyDP~v.hkZVQk !0Xzxk<eigLv@' );
define( 'NONCE_KEY',        'a0k}$@p`/(pp=4J&HOZG<n:QLgg={aXb,xv0`Lhh2=F.u`3qU>_mu76b/<|X~e*g' );
define( 'AUTH_SALT',        '9LY9zLj*Z.y]1!KXg&/jUL[^YN-iTQz2c|9hC2N:=37)Z:v/Q8J*>UI(i.Eexv0G' );
define( 'SECURE_AUTH_SALT', 'Pa3S_.c VOgf(4;7}G}fGD5&$R{!wb2{F:LDD#C+^gYz=>,%S|s(qr8M8LNpQLu@' );
define( 'LOGGED_IN_SALT',   '3eq&i)N@Em(r#1X?~]_3Ot=12h+k*- ?ZNY>sCpiShtP#PSj:+&zVdCeK2R,6i! ' );
define( 'NONCE_SALT',       'f=cPs1sEQHe8~p8_DFWe]gUL:<f:XZ2._Jg a8x)QoK}ZDA`bUL<OEL;=Ye7wz]C' );

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
