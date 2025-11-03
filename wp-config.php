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
define( 'DB_NAME', 'wordpress_website' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '~&e{0[S*4.2l2kMO:v4_x|5mFI}B0S--EB3.PYd*Nmp#@CQAGA6d~)aUT,OL4FN5' );
define( 'SECURE_AUTH_KEY',  '0SQ1+<%RI>O>Gm]Hbvk;Z*eN)-gD5s6)B<0J*P;r#aTN)Y8`s)DekDVBF)+UHJjE' );
define( 'LOGGED_IN_KEY',    '>  O]zYab IvzRe3j?erI.%jmA_ au?Ymxp=<cp!xvoqH4J6(+[^tgkNE$W~Z[-.' );
define( 'NONCE_KEY',        'SzhS]`aH*8E9Ef<(^3dVUJLR:t(g{N.1d1!#lNTy(3SkVp+)R~]tqM9ugD;KcLia' );
define( 'AUTH_SALT',        '!y]}J4F>t]BazQ{jX!X Tue)Fux4_U lYKs&&&5N<Qg-}-EJlK}]PWBlkc2?)]s-' );
define( 'SECURE_AUTH_SALT', 'UDa&{IG}xYGjDN%Kn/|M_C;!Fs?^7P<0aZB5H0]$&k71rz<dXs;&XE.lF-ttus@h' );
define( 'LOGGED_IN_SALT',   'vw} )R*PGD8qU5V0;3C^a.+utrc6o?`)HD!TR/tWa?au#o$kb^p#0HLl7%M ).KV' );
define( 'NONCE_SALT',       'Fa(-*LjmHD|1y4H~~=jhB.7ksDYWm8$Led2#;)JDbpq5-8$:ppFG%1$,WJ1}oP&F' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
