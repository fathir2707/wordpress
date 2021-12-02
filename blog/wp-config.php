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
define( 'DB_NAME', 'wp_blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'am_H<Qg6b95X(:B2}=+)lt{|~/)QVMCMsTkSVp+Zog}#L(FI_!Q3AK&A{MfVp}(2' );
define( 'SECURE_AUTH_KEY',  'v?N{G-P)<H5C|nbYMcyA:Uh]*DOf,wK|=<V}KXt7?^v{ti|<%u[bh=*FhLxSU6On' );
define( 'LOGGED_IN_KEY',    '8r,#o>YAGWQDAoY=Sv]Gn9u{^-bTg+g~i!x%3a/:c4X8N+?m1]UcOdUrg0N}dnF{' );
define( 'NONCE_KEY',        '5$*.N8 rHNta=@7/22SqqS?KTY^R^#RrynfrLFv;6r^$|6q6bGT`M[c68K|^V?@^' );
define( 'AUTH_SALT',        'biQ%OmO_CX.OFvs5y2<F~9>e<)hcLj&goZ3NC^ESET{r77)^+-8[r*dY)WB,&31%' );
define( 'SECURE_AUTH_SALT', 'y6yede<6|c|uF=Hv>B9HM>m:z*^Z=Si-J8O#JR>eoFWSsvLD0CzcZ8_H%*b:vqaD' );
define( 'LOGGED_IN_SALT',   'i9KF-h{Bj_K3+qw,S`HKhC:t344^K2jrl=[&V()au48[.n!~NB^/R28j?3lEE;Bo' );
define( 'NONCE_SALT',       'd7rqB-0O6QP6=?Qs[[EbeN~>u$j31SM$QqrO=~>T7a)5gr;R]R6 )w+NJ7g1zM7q' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
