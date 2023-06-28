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
//define( 'DB_NAME', 'local' );
//define( 'DB_NAME', getenv('WORDPRESS_DB_NAME'));
define( 'DB_NAME', 'local' );

/** MySQL database username */
//define( 'DB_USER', 'admindb2' );
//define( 'DB_USER', 'root' );
//define( 'DB_USER',  getenv('WORDPRESS_DB_USER'));
define( 'DB_USER', 'wp_user' );

/** MySQL database password */
//define( 'DB_PASSWORD', 'P@ssw0rdICT..' );
//define( 'DB_PASSWORD', '' );
//define( 'DB_PASSWORD',  getenv('WORDPRESS_DB_PASSWORD'));
define( 'DB_PASSWORD', 'P@ssw0rd' );

/** MySQL hostname */
/**define( 'DB_HOST', 'localhost' );**/
//define( 'DB_HOST', '192.168.15.122' );
//define( 'DB_HOST', 'localhost' );
//define( 'DB_HOST',  getenv('WORDPRESS_DB_HOST'));
define( 'DB_HOST', '3.12.114.141:3308' );

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
define('AUTH_KEY',         'fcD970tieWc22vC0KkAQVR6iywbJcpEHgJKoB1e/EuhBKcAgfKinnIuOwrNCQvO7zHFT6+Gt8TBbwi6AbdYcTg==');
define('SECURE_AUTH_KEY',  'E+eL2NK4YS7g0wib04sz6w45q1jy9EcnJJjM1ELD/2lKUcg6KwiCkBw8LUzm8pAi4mzVI/1MF9xUMxxJj/VOow==');
define('LOGGED_IN_KEY',    '3osCr8yTP5LAWljac353v7vPM4yePMbBSZkPPlpzh65aygED5S8RHm7DoJhmOK+yK0FtrLkHUgbKHypiTldV4g==');
define('NONCE_KEY',        'ur3oc508FLeioHUURo3oJ5LhPGhkI5J25AWdI0UzvK+c1nbfPh2us2ziXzF9Lwj5+E/mU12Nny8Rvi4oc/qUqw==');
define('AUTH_SALT',        'qMklhwO2doFz2fkOzQEdXZRhxaRceF9SWQF2IsTqLNv+ouCB77/+Nqio8VaU9fRAkaFJrZPwFaTeGsc7ROG5ew==');
define('SECURE_AUTH_SALT', '16FmN4pDk1cNUMfGqg5H81mnBUNuNmpmLHTe7Czowb1n/ZVwJVrIiANOzq7mgrt4IhYy48XOEahmU26of/+lXQ==');
define('LOGGED_IN_SALT',   'Phuh434pObFdmZBjiFUlX4kVXGV484i4J6HL2N4HJbn3I2H25lwY3d/a5IH4kB0RXaOK5V/MT4vqX0sgPU3Fnw==');
define('NONCE_SALT',       'rMOK2BOoemDlYPzHSS1ME1nlFsJja/3hE/i6UXK5nPirFkUdudgauGTOFZgVbjry56I3sS/3F3LX+99/4B6TDw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '3p1dt_';

/* Disallow file edit */
define( 'DISALLOW_FILE_EDIT', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

@ini_set('upload_max_size', '256M');
@ini_set( 'post_max_size', '256M');
@ini_set( 'memory_limit', '90M' );
