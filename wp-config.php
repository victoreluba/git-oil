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


define('AUTH_KEY',         'SMLfygkRdQeol935dHd+itk4eD0AEJHxRGL1nYeARxYhFn6n6P55r23+ylXWYXVkjjJ1g6t9AEvaC32xUY6bMg==');
define('SECURE_AUTH_KEY',  'FpV83VPwGFId3EsRYO1rKrX3a+PoDMPP9wkZKBSBrKAQH817FbhUC3jY6nrVYSXyN7cdwY5nQCdZh7o/Br3W6g==');
define('LOGGED_IN_KEY',    'AWnmiPx2UDKumTTLWNqO4ckP9e5gG+MRFzHyA9Q8sRjfKd/B3gJYmYeuCYK6Ps+p8A+wACMx5xCb6858spPwAg==');
define('NONCE_KEY',        'mEXhb5WA5ju7NZOxCyN24qoCV5u8a2btcbXOq/Z8iWKB434JwAjTB0CjzPDK1RXEZ4HpP47pLPEHAskATskb1g==');
define('AUTH_SALT',        'NF/Cv1yo2Dm54ypNQBHSl9zRx9FVmISxzfP5kYuUGyvkZHFvDf5Fh1nIBP8LHzmVbrW0YmGpTD8OWC1RJZg6UA==');
define('SECURE_AUTH_SALT', 'shjj5qT5nZwAp2mMdJ7noP7PAiX/xQeGuSk6g+0L7pKbvb8vp5wbCXuvBsrOQWk5xaKKYN3OD8C9ZkTMoAyiQQ==');
define('LOGGED_IN_SALT',   'C5KWzt+QCq6wUqa1QDYBJ/0VkV0bvN1RFyJN0Wu9+T7zlqnwwMe/TEtgS/7tv/8ffmGSo86qnWYX/xOgyyTpXQ==');
define('NONCE_SALT',       '3MNROFeHhsvk0V5JKrM5X+Dg78BHNfNlxptRw6D2OoiOOi5uz1armGX2BzgqQilNzTaf2RM9LjlpW+F0eiII1A==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
