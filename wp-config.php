<?php
define( 'WP_HOME', 'https://samplecicd.squareops.co.in' );
define( 'WP_SITEURL', 'https://samplecicd.squareops.co.in' );
if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)   $_SERVER['HTTPS']='on';
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
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'squareops' );

/** Database hostname */
define( 'DB_HOST', 'wp-server-cicd-ashutosh.cfdyrms3ajre.ap-south-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'zb9Lie@:!YG5Cl9b>DnSAsp8UuY*-YUW;U{ay1mCvP+ZAvBR0nea-cX?%1sZy;5{' );
define( 'SECURE_AUTH_KEY',  '@[34K@6lg>g`J5q$;OL*~Pix!6wJ/&WC`#:L%H3CWsSYma&H(Y|vK[.1G+BE@3o|' );
define( 'LOGGED_IN_KEY',    'YeP(doJ5 ,D]?ez$R*d1!tU<vC/ggAxU(%;r[>l8y{iKNY1`7>`&couec`^{7nQ;' );
define( 'NONCE_KEY',        '8]Mc2i`j|7+dx9n2j7CQ$U;:5biEV=i-nzz%3XdVs@3&9wF4dr{],-.oX Rw2J>)' );
define( 'AUTH_SALT',        ' (h&y0@HxQ>%slAn`>LL&~1-`{,,^I=-dUkn|]iumj~4]:MTIN3ozI*7 1s>$E4e' );
define( 'SECURE_AUTH_SALT', 'uh.N. 8Sx<tf#EhrghjS$1d_h__[Fs-+TcV.nVgwybOg{d08OlBh)jfv6b}RLj/H' );
define( 'LOGGED_IN_SALT',   'G]z)#}|w_W/?|#jw*kS=1VRay}Cs*feU0AbFwS/jk@e7Zv(&azjavAk>JKYE5SV9' );
define( 'NONCE_SALT',       '?et&xESIevd~-|M 1&m)]$9QO9#[kI3Qq]q -;mM>A|*zEXv5Ev5{~Kr:|w=`_Nh' );

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
