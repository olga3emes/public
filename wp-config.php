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
define( 'AUTH_KEY',          's*Q9 ^*j#~U_w@Bnr6X!*,b>W?GuGOghw,gyKfC9q<Qq-Cc%X#?Me7E{BCk)jD(n' );
define( 'SECURE_AUTH_KEY',   'XPbrw./:67Wejm1w$4s@?>r1xu@Ektg)#n?^{=CJsEp[7G;;{bISk>Wt2[ub-lh?' );
define( 'LOGGED_IN_KEY',     '^K8C:8rY{V~Y,$mnvt`REOoHP),BgTXGu)7uSuqzhNK#)&Da_;m*Ky[m1*g0,x&v' );
define( 'NONCE_KEY',         'X5UA!sBN6@-(eg^y(Wdd]FIDJRf9<JK%hg]V[EEQtEMZP&Z%:?vF_QKneY~eH59n' );
define( 'AUTH_SALT',         'C/D&fu_w73<LdMG|t:xe<!?QKQ>TFlK+;|RxpVKw0]4kRk$K4C=%b_0Fx+r_eR$S' );
define( 'SECURE_AUTH_SALT',  '/D]-*zXL.K.g&?/c95846#[WU|g%P/*-0;x`.2e3L_)cwa#.dM^oK1b5L$hxjm=/' );
define( 'LOGGED_IN_SALT',    '{tPH/T1!p[AQxrZiF?<b^d*_vR287kL&G>C/DNP0I]ckoB0CIcZ9I|L{(niz@xEw' );
define( 'NONCE_SALT',        'cl[)]^|qT=Coa@e7pM_GtK0EI3-1dV1eV]_0Hgi0&>mX(C0:u9]E Ns8p**A}l( ' );
define( 'WP_CACHE_KEY_SALT', 'i}XGRf>u2tp:nM&bjIB!L|Y~tgUV=ZFgmR6HZc*X)Dn9YV=_&7=hdTx!Y$H/ah%x' );


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



define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'mi-blog.local' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
