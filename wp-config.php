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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_v631' );

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
define( 'AUTH_KEY',         'CW<17,HSn85pvf3#k|}j:J[;kBQqQ](0T! HUr_}|w<]nW-+<}9 :2k_,heIc`zt' );
define( 'SECURE_AUTH_KEY',  'zNG4CBAwMeL_@coYv6=tG7CQ{L5b1bkOAHqq6S{C*<YxVtV?-n^L(|$7H/j6C;e+' );
define( 'LOGGED_IN_KEY',    '2t<OrOsji8m2{=,p^HlncM@(bUZ }BMO[]+bMMk-+@HqwB]K}(:[, Pt2ykHDL[:' );
define( 'NONCE_KEY',        'af-C^Oi?# 6F_w`9dTc&d$o%}VNF8e~jp>}X*;Wcb5)nhvLgY*A{uJ)t.*O&2eH)' );
define( 'AUTH_SALT',        'DMO=xr:oNyps!NXV*m]:]+:WKN#bEF<V7NhzJUgQpLv_iMu&E4=g*b!F#1h{6>dX' );
define( 'SECURE_AUTH_SALT', 'd.NK/nu;)- s>wn7J{H,sb8:DYK$;0C<q5=!`B+sr!!$pJ$8~GKO=2c|G46hP8At' );
define( 'LOGGED_IN_SALT',   '{3Lx6FJL>4tV^M`.%D AK o+,lcj~Fo0_12f6*gqozkZ?>O^D.2/&M+U.J:zIX!Z' );
define( 'NONCE_SALT',       'v@nWuv_/UH)cV2u0l+,a}Sxc@F}iv-nm<:&5Ct?s>B( iQkwqhB2%fN/0){=Y!8m' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
