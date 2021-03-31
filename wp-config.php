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
define( 'DB_NAME', 'YannickQuemard' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'PWAL5jQeApjCg4mWkgmLr1WlbFGWJQvpyMobmDUdJh0y2yHBvQOg2J0roMmAi5Fs' );
define( 'SECURE_AUTH_KEY',  'RTW2UFFPYqqc77CE7pHfDFtRfZvHifJfuA4Ofav1rba53P38xtA6C0st5jMaZiXp' );
define( 'LOGGED_IN_KEY',    'PbC9WIN2g9LApHq7ZJWZxAPFY2LiXdBEArjpkOIx0n9sdzCoHp5XnRpOfYY0j4s7' );
define( 'NONCE_KEY',        'KNC8bteMqxjNaQLjXg519K1LmNtJIN0ASjaYCAwPQQ4HzMsqZDfRkQXrWMUzgncx' );
define( 'AUTH_SALT',        '3nIWc1N6fOA9aDT2lEPsuof9Ldx9UOIe71tJFDFzzBeMUaOTw4ducaNjALitrmAv' );
define( 'SECURE_AUTH_SALT', 'oIloyeZgApLO1RsUtU8iwIl1aD8J2cjJBJdyNGxisXNAL3ZgWxYsgr5AqhzwV6sW' );
define( 'LOGGED_IN_SALT',   'sv4JMdE536hZC8XeHs10Rftoo6J53NcjW36H50jc0dkGc5cTU2oKLe5YlfBTj19w' );
define( 'NONCE_SALT',       'DLMgd0QwDKYXx30rhey8Eomk8XF0pZ64wNzoxrGsSypuSp3TH3Ls179r1vvCK8XY' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
