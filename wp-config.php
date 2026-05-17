<?php
//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', 'plfQz7klH89noHd0M4eI1KW8nApbbqEJDMkaVwKGUMFOU8i2YTctPmn8Jukexgue');
//END Really Simple Security key

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
define( 'DB_NAME', 'mystore' );

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
define( 'AUTH_KEY',         'I}bqLP,JL4(Z;>P3~+IEc.bLdf8frf=:X%rE,Dd!W<H0T7>J=C]Z$k!o-{bxu6c5' );
define( 'SECURE_AUTH_KEY',  ':F]8Y.wiKLC+Uhp+5aT0KcI/Brr9E`]Tn>nIzgJZ{o[Qh2Jj+XiXI?]NHoqPQIV]' );
define( 'LOGGED_IN_KEY',    '[3W8%4n<x88.{+7[7UD~YWHi*Yi?iAk+jSy]=2.Yg.0EO.T^mDOIa`a#PX**zGwi' );
define( 'NONCE_KEY',        ']klEg-EzSO7jGeAxx!60On?ak<EI2X~|W<qu6RBQvHL5sf#])[zMl<PHz[F&C~<H' );
define( 'AUTH_SALT',        'j_)T,P.Y>9v*%,[EI;-nz]8:d%USgtxfQ_tA{bA@D[cXen<Is42k4|em~IPjvUGo' );
define( 'SECURE_AUTH_SALT', 'AsTdgU4PJ0;v#js;T0^oJum~,g7kur(,U@OPCM?V(SV>|$<F=pD[z)9+5N2`DwuN' );
define( 'LOGGED_IN_SALT',   'RkbS:a?]!AxDB0EiAZQ2N(B>Ah|2nFc](oW_Y$sDhU}Roo< JKqz-]4T(($]`qM0' );
define( 'NONCE_SALT',       '9o,E,nDFjnUNZC`(5JlV.;%^.k&z[O$e?9)OAE/bHq|@cN.Hwx&nA~0dAE:(#>f9' );

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
