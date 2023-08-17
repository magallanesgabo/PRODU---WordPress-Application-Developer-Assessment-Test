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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\Users\Archtaken\Local Sites\produ-wpsite\app\public\wp-content\plugins\wp-super-cache/' );
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


define('AUTH_KEY',         'cuDrSMm2YNsACxcB/PsK81VTS+LvhLc8eHSppLaI++FewQWTZBs7buoDvOvgXpxTpWsMcTOtF7yxlDCFBi6hkQ==');
define('SECURE_AUTH_KEY',  'yf2i/Cph3i0z7ixrqxZFM+mD7w9OXmyDQ4JARSn7MLsd+Zz6WiS5+rQU8UBWMctPsh5098OfRJtR/Ktt4EbqQw==');
define('LOGGED_IN_KEY',    'NnXovdA67Z9htNWYxKamE/dvZu4Nca5T5xoGEFSdrjD154R7XUOKhfJJtlyUhyYDDAiwU0YKoWIlIiPTukmj8Q==');
define('NONCE_KEY',        '0a3YOHYXjmKockeIuFNbb2vtxpkJ/AdFcqlpqBUyOlnbeQ9s4VyCDoBIEko8NKAjsgsunKM6knsd+6qQm6v0YA==');
define('AUTH_SALT',        'C/CJKGnDXl2uuOh43Z26bgaCqVAhIq4iW4FmV1q34WywsAGCr/p9VM8Y4CqmBqOPkAbRR1wG+Aj+FcuGuSrTHg==');
define('SECURE_AUTH_SALT', 'Av+QIGik2FLJAkc3qsh58jddsmWHIjeiGemkEDAe7XrwKiOyU95GLBhAWHUGQNdlLDPEu5p1lhx0C3/oMds1bA==');
define('LOGGED_IN_SALT',   '366R8Dc+EiQIoGMDfHKCmmVRMo5fg9Uc9OPJNEOd/rLnLL43Z5nwCZO4yO7NCDdPGOUyeKuxXUoWSBROzXFOaw==');
define('NONCE_SALT',       'oWssAL4+5Ql9svHHQPA4aEMciM2QsEXs7VY3vUde2Jss+MASgXxorkaFXHXx9DOkmuTUdV3xhTNAjILeTO+Brg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
