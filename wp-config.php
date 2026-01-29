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
define( 'DB_NAME', 'wp-u1-2' );

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
define( 'AUTH_KEY',         '_yrMp3QTyQXG=}Fr:CM1YwdI4Eqj!rDAx=>quO(;]]Ze^eG7^Fk0Shd~a@$=V(aK' );
define( 'SECURE_AUTH_KEY',  'jk5AlKP hAkq>1OU36N?81(<ZVH?6t.W5|KM}-xdxV;beugt[eU_=Fz)<1fX>-LF' );
define( 'LOGGED_IN_KEY',    'c&0#P=;1mWGBCq/A$Xv]kY&zfc_&KR(X1{1)d-Nu&]ilSCAmrk_%41sOy7#T6K@Q' );
define( 'NONCE_KEY',        'q`NpujRlrR/m?oKB*v.z@4~:iv#LR0|_aaf2 nef dq339+@4r_M8lcC`I&r$lur' );
define( 'AUTH_SALT',        'YUNgM&NB`Nh3;QmK)z}-dPBtIAp_X wG/->I+g%c7IC69E?<v%><;:q#c]yB]|O@' );
define( 'SECURE_AUTH_SALT', '7{Shsz6uQM}#!;F  TJlChl?@4BDl<_Cn9SvevXZfYt5*nTOb7uQWD,`2v7Zb UF' );
define( 'LOGGED_IN_SALT',   '=s=uPT]zxmPf.}Bt-Z&EmDUe=V$)(e^:KQP]?+4r.;2)IA#rNj/i<~2]OlM+m7F=' );
define( 'NONCE_SALT',       '2|q<nM95N<G $W=J&1*`vqJpif{c{S%K9_.bR4snW61gL >g._D=&mlkVzt=qnE:' );

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
