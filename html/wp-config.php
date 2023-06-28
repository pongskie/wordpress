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
define( 'DB_NAME', getenv('WORDPRESS_DB_NAME'));

/** Database username */
define( 'DB_USER',  getenv('WORDPRESS_DB_USER'));

/** Database password */
define( 'DB_PASSWORD',  getenv('WORDPRESS_DB_PASSWORD'));

/** Database hostname */
define( 'DB_HOST',  getenv('WORDPRESS_DB_HOST'));

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
define( 'AUTH_KEY',         'in1?-+g?r`^peHwnP]=;U_>;jixA@6Cv+ja <l][rKG#.!lS~5D~<#D[iz_1{M9!' );
define( 'SECURE_AUTH_KEY',  '4K0OH5>iwil6hX?eT-bzVf&zy~_9nk<Nn=dit/:c`K8kn_M9K~C-agj_$EY>3=Bk' );
define( 'LOGGED_IN_KEY',    '&gZVol^o<G[~jpZ2F!-4,w7X#^nThAo6oS`6seb5zj=UjCwiZv=;F21]XfO<t74)' );
define( 'NONCE_KEY',        'bv^,~F5L}=0OBX(YZ-/tzfLt6x>wg^{6vN*kPoBcU 8W#)I`a9&BlKymQbI9mFk!' );
define( 'AUTH_SALT',        ' (rz_~0FVkbp0m|-hbB8q4Lth10{p/zPq$K?92_?<%=$YN/iF?TJ]&g9F;?O_0{D' );
define( 'SECURE_AUTH_SALT', 'N *hy$OuE|#p*A4WX<Z0/v5hR`qcAf[,<R2;,d`$?E;B8?8[NBkwf;m&sch&u&fA' );
define( 'LOGGED_IN_SALT',   'R=1Chs<b;;D/wR09*HTTKemhmI,fwL2q?TggD5-9T,Ang+7iI(k2]-W70 /`j$`F' );
define( 'NONCE_SALT',       'VhazMCpw) ^yT,H<c1ieA@ U 3 N;*1|{ $|!zw+]hX3*1+T_E/)mS%$i}/wr9,%' );

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
