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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'TSpokhJXmoVKrVtvGjMscHxibbK75hNBazgb2Vx1czq39kluupyA8IMehxeU8etm' );
define( 'SECURE_AUTH_KEY',  '91x5BkwLUmGavi4QQYgv2sWwBNbsnPsCqreXTkZYeme7Z664aRe5SJnKQ1FmMjwu' );
define( 'LOGGED_IN_KEY',    'JHuhuNB0kyb5o4I4x58LLR1LwxdEb96o27VUr1oodD7b6Mr70thzv9uPfo7e4dtq' );
define( 'NONCE_KEY',        'ARw8Y5hqeEdkdNtTiQXmP8lJWvg34fJIl0ruz9wUd9FoWmFfzJbkkNP7SG7duDU2' );
define( 'AUTH_SALT',        'N0iJQtd2JYA0vWOA16S2vZb6bZVOUBIZcwcL3BNKfyWTnmxGjkckbsIgbIVSt1Ax' );
define( 'SECURE_AUTH_SALT', 'uTdoGAOM39QUlnEEtr7fnYPiWvhgz1Hafb2Lq0Wojl4X4PyW8FXsIyXKbe3pKc4s' );
define( 'LOGGED_IN_SALT',   'r6bH8w1qOdC38LAk1riMzPMdcgEVjdIR1dFpn0Q9olPavasgmEyRrUnpoDJ4dV14' );
define( 'NONCE_SALT',       'HLfD0hLY5bWwP9DCA8tE5x3PXf5O9gI5uC0ITCtXvyjwGpfF3hZxnx1hOW1NR0qi' );

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
