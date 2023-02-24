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
define('DB_NAME', 'presta');

/** Database username */
define('DB_USER', 'prestauser');

/** Database password */
define('DB_PASSWORD', 'prestapw');

/** Database hostname */
define('DB_HOST', 'db');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '=c Eq>j!zM*l=S2$SEq=J+H^zdsDSU^i|+g&L>O?wWmdY]G__;~h+<YM77.hJU`o');
define('SECURE_AUTH_KEY',  'w]Y}yBdZqT13$FZD0B[Wlz|@hcp@ <4W5T5L`]4o&57wacOh4/5/!/z/~e^lM6Nh');
define('LOGGED_IN_KEY',    'eOgN=U`dXGyJmH|O}~EYysFbDrE]LJ$9z:1+Q>H]:@]PY9bZIIfjDNa)@euwHe{/');
define('NONCE_KEY',        'v1d9XTE,U?d=U>NewwyjUlGtUzx[GELvjUaxSX/NdKq{o^ZZ|2SsWul ?Zc;^SJC');
define('AUTH_SALT',        '&b^-c@=Li@_w]s{FFe9<h*sIp=NJns9i]|8LDw%(eCU9}|k T4N+h_R^5oxsLGM;');
define('SECURE_AUTH_SALT', 'f<QMxV%FBBeni9qP4h+)K/y}%2!^z4W]%)B_*m<~HjJM/8qXRED?{=:u] T&59z)');
define('LOGGED_IN_SALT',   '@[FWhscRsOL|15./op,H<JKRzxR%H%GgpL8p(SO*WMwJ-9?H+0[$cXH6t+4<rilz');
define('NONCE_SALT',       'E^4y/>XElvk6t~O=TDI4C@cw_sA/LHB4TBn1H|,obs&GMT~eM&{lo.dtsJ&~t7hQ');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
