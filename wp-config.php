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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'initialWordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Rn0YwFPNJ~-B<l#Nq`Ga({1N%AcDT7A*1*yMCo[*.[UL xX^>NjG~>-jK s8Vq8[' );
define( 'SECURE_AUTH_KEY',  '23-taEn?^?B@H`NY61HF%c:p(xhNz_ECC@0Y&oOxWllegWh9MI _>/vz3}#w1(Eg' );
define( 'LOGGED_IN_KEY',    'aRtz`SEh]QH<Q0(ZY6O>o]]sSdD?7=I!@OKp/I7ee]Ec~%{6*;jcr.[DNt<l@7hT' );
define( 'NONCE_KEY',        'io,$v)*(WvhzDcNMHmh]wZ5q2z+3CR{l!(vUpnbhP$xmNtXWZUI]Du<-16$-GEeL' );
define( 'AUTH_SALT',        '*C$QHwwf-v=X5tj5O+!L2;^X88B2i<dzk+M,BGNYFUSt(%]nOGUp{Hu}!e?0rZS[' );
define( 'SECURE_AUTH_SALT', 'lTz:6|Bl;`ZcxZwLo{S#Li7]{J<>`DZTsCf`QBtH[USIRK&c<[]d=:/$3.E4cff-' );
define( 'LOGGED_IN_SALT',   'IYUX8r^*uh;n~6V>NlN&f|41d^,Yd/wO|80uQF0sTCitb>_2}{0M]akF9%J|T4Rs' );
define( 'NONCE_SALT',       'i K{&htMsy8]&l=5vEb+ZhJTJQ&rPo3G1B66Bhkf[NMS{d=,Z~<Xb%bZ@u3}Ds.T' );

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
