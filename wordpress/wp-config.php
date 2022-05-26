<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'healthlifevn_db');

/** MySQL database username */
define( 'DB_USER', 'healthlifevn_usr');

/** MySQL database password */
define( 'DB_PASSWORD', 'healthlifevn@Pass');

/** MySQL hostname */
define( 'DB_HOST', 'mysql:3306');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '914a293314a8e90269587d2bfc7f4539f4eb82a6');
define( 'SECURE_AUTH_KEY',  '1d8e785c3bb826dbbc04d71b3c6f93f25c90d8ec');
define( 'LOGGED_IN_KEY',    '5034dc7663ff2e8c5075b702207d5707678630f3');
define( 'NONCE_KEY',        '6eb8650d628ea120b204b411f9c872e9f1df3635');
define( 'AUTH_SALT',        '8e3ec6fac02531416302c1f99bc695c1698d28b9');
define( 'SECURE_AUTH_SALT', '603906cf30dd7dd025152180bbb696df0b20e721');
define( 'LOGGED_IN_SALT',   '22e5857934155577c0f58b086c40bac875862e3f');
define( 'NONCE_SALT',       'b1040c743a1e2a359c62dac78771f0e8f040fddf');

/**#@-*/

/**
 * WordPress Database Table prefix.
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

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
