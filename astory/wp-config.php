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
define( 'DB_NAME', 'wp_oncourse' );

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
define( 'AUTH_KEY',         'B(8mm`Vq@w^(G-VZ)KqX+~0IgWbo2tP!)=B/3v3q[ 0x[s=)+:cBB}$keM<3bdC(' );
define( 'SECURE_AUTH_KEY',  'Rkvshw}5R9}sTe)BY3gXi_dh5.)g8.o~vVE@g#Cma{!TcpuUtx?04^n4 v!Oy(z-' );
define( 'LOGGED_IN_KEY',    'WJRG:th1/%#y%hNh/9r: ;]Xm{&:@8w$Z~^:;;Vkcl|[lif)`=Wf0*Pj#o`/R+E(' );
define( 'NONCE_KEY',        '!JNeWZQz(=Li72y[TRv276k1`LgNTW3FO<0qf(B@lG3SmO9kY)}[Q@cqDEf|,XjX' );
define( 'AUTH_SALT',        'B(H#tu{3CI:4S{Nrg_FKE-j8uH&,p.N-3qt[pWE_K$Hq?cQqP^awv6hA.a^+_J,:' );
define( 'SECURE_AUTH_SALT', 'z;6Tx82jNgb +.H(V&x=O)ku>iqEYm8X`hQ(+c?vaYJ`-B9Wex M-P3&ih!CZNlN' );
define( 'LOGGED_IN_SALT',   '`<:z#7Wk%^MA#>`oEK`0/W.gbfLPYA]R12E uA+vvzZ_5mb5*X0%NL#0@?[~]o#M' );
define( 'NONCE_SALT',       '[{^tNu?sc^0lb@T,H3k~8?$ cV]0.Pf*B OG^Q^Vtlgp*<_sb&Z<O#8G?/yj`y|d' );

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
