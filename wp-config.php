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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ByXtHrm7hIQaJ0dvJkoucIYsCGqW1jlZwWbKzXP+9W2kJkbx5lUqNkZNMsF8tpJwhOHfr8D5YAHKQZpC6a0DGw==');
define('SECURE_AUTH_KEY',  'v1309QGZ2+KeMbJRwT6CgN5mdERZKBGdlRAvvlUURmMiMGWx+pOseLP1MIhYzaLKSHWb5jenCv+e6wVapKaxjw==');
define('LOGGED_IN_KEY',    '7197DN9NHmTu9sf5q9SIhoP+lK+pzS9ZHrBMSKjluhEWjjW6VXMdamAx/ExTO71MnGypUj0U/6Pw/rihmaQn3w==');
define('NONCE_KEY',        'OzowOUSnJg7R04EbxT+BvcPiDkelVPaiYBxhgWkD8DU+7wEIcvGKBRZGn8YysudAwCV/C1qoGJpHh5O6mqlq+A==');
define('AUTH_SALT',        '2QAAmJvarT8WiHM9m6R7OjQJNTSXy4MuT9qa9zGeCaKucdQdBoMNuC2hkEFYWnSwlbIwy43MmJgPef90slfMCw==');
define('SECURE_AUTH_SALT', 'yR5rLi2HbPcv8L/SmmpGVU/lGQdYl/KGVKI9Dj69asQ5hLjNbUqE3oHBYlYKR8bv5DeK0Y0ldc2M+/abv9zbaw==');
define('LOGGED_IN_SALT',   'Y8B9jUqfvrKDzMmkgeVgeedks4e+ttwyorZ+tien7M+Sy653HCcIxRNiL5WsWHPxpeC+YlEo250uKeGmWcC6fw==');
define('NONCE_SALT',       'OGK500EDWv08ZKZ7tD1LM7igXqu7Tfuj5UP56XIJ4qxQQOHt17Ha2bWEPuBUL4KWNeO33msc6mkdP7RVPoie2g==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
