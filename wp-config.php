 <?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'r<X*_!Y4a(>3nL:d*D5w-#pznGf[aZ_c~2:JsPcW05h$b<e >]jb%9Vbs&{IUl,r' );
define( 'SECURE_AUTH_KEY',  '*uj}V)d<u4SBe4&fQ/]su=~j0{FHEmp[W#UMe($5_]fVrZ/g%5G6:dZNz-cr n&e' );
define( 'LOGGED_IN_KEY',    '(RWt9U Iv9pLn/k0^e7)+>,cLr+]K.5x.dvcpQtyx^AQoKsU>O$@Pi7?lE2qyy0c' );
define( 'NONCE_KEY',        '-E|bcJD|NXsV|f}>oW+t3|N pAnhrcX23#dcvT&;)lqz4!h-N{0>-7&9dCW;fMr?' );
define( 'AUTH_SALT',        'L79T8|{r&DsIaK%qJ5ei{n7I Q8O* m[d=O,UhlR2!_3xTXAx,O(n+W;op*/?]aD' );
define( 'SECURE_AUTH_SALT', 'X-_NfG#IM3FBT:O{Rs=I-~IL;rfC}{@D{m6Q.}vXS9.,e?EcWR14{<L@<[g`ERNA' );
define( 'LOGGED_IN_SALT',   'sJA4eSzHlnl:jxP&N[JZe@Kz&;fe:Tc$4I]0)uUuAl2J^OvC:W~uQZtGbVFz2W~u' );
define( 'NONCE_SALT',       'Cc-r)hIK`>[%`bJ)/Kxr3Tl9J9v+[Wa>:m6R<6O,:)r1u# neM3 ;hxZ[WGw1B, ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define('WP_SITEURL','http://'.$_SERVER['HTTP_HOST']);
define('WP_HOME','http://'.$_SERVER['HTTP_HOST']);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
