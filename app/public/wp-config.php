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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'jBEJMqzW0M,i[Q=]&wdG@]Z+oW,pnbqNW)NnOF7zwB>o%]yUCHM-]7zQ:EBMenoW' );
define( 'SECURE_AUTH_KEY',   ':{)]`FGHP)C=49L~+PF3WKdu<A#V*/OJ{~tk<Xhd6,L;/l)whtyZ4C-MewfZ7]S1' );
define( 'LOGGED_IN_KEY',     'Gn:;,]q/IBQe>py5M}N 8Ys@VQn$M8M|$^N7<*07-];i>wpCCoM[helaiWn8]eI>' );
define( 'NONCE_KEY',         '9dO@t*}f/0jS)bf%r=U*g:gg_Ox<I{ uI,QVeg]3SSDk~5CzwLE=}<zWN.]G2eO0' );
define( 'AUTH_SALT',         '#V1R#te!BXxe},[AyM)o>yz{I&VsE->}K1T89H=)^]_=ZEu~+L(3@a`C/JTH:(sK' );
define( 'SECURE_AUTH_SALT',  ':>H;O(vm9?~ALQz mYxrgR.b]F0XHj$7.gC.0{f*Y|(._YD_n7meVlN$Ot26bQ-K' );
define( 'LOGGED_IN_SALT',    'Rj dsZUD/u,@ERl|g_BcD}gT@Rvdk#pwE{=#DKWOsOEWl6m1xu-6)=1i:{,2Ee# ' );
define( 'NONCE_SALT',        'T!a]{94l@te~L`l)LGJlj?dcc.PQPRx,RXJ!9 nfwluX=c(7J>D>D6Rp>8(6nD+6' );
define( 'WP_CACHE_KEY_SALT', 'uhjGYA~J73@hxS%,V){RN/wn2G}aH<CfI*4Z[1GJBrBCN;3[$xw;S^|S@V&{1P5]' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
