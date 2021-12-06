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
define( 'DB_NAME', 'wp_woocommerce' );

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
define( 'AUTH_KEY',         'TaOpdM]W0.{Eg`l;2{%[5szM{=VJCk-L}/@f{5=(lGGV/|?9O`+C^uiclg8KJ@GM' );
define( 'SECURE_AUTH_KEY',  '>Ie@/O,2sD9L*;>.PPlQ{!-1kK|<)OqcJ;[a5DF@F1@[(ocC9$q`O0s;D,i{LWF]' );
define( 'LOGGED_IN_KEY',    'z;p%xI$KJsn.XFf7i#S[XoO,`rIoI%t#Z]Lugc<:Q}){M-f|`M;f:Mt5yMdJMf3G' );
define( 'NONCE_KEY',        'DL(x6HG~sEu%Br2NYD/*4@5,XkliBf!W8XP-Whn!wI03:Y~9`8W/39UnO7-c.}K/' );
define( 'AUTH_SALT',        'KnuR&A(LXfU[.?+>f5M%?Lee9z_B.~/{7|bjM org?Y&e`pE0LD@!RW617ccUTnW' );
define( 'SECURE_AUTH_SALT', 'w-1r/uIi8Ftn+.9T0W >q}d6+}j}cPlP[;)!AYB:iJzK7&AOcXc`[}lPezWF[8d-' );
define( 'LOGGED_IN_SALT',   'XP75aEd=@-=3!T96`,.HPj+*G~C({=DIk]]I^xZC|ef|5aYG>c$^{ONmaEOo^MkT' );
define( 'NONCE_SALT',       '=o~uUMw`59f&g2WKN.4(_P3WHjzMd5`U=S=R)t0wTZl%1v,:(ENs*Qu{Txx_Deho' );

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
