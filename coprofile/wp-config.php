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
define( 'DB_NAME', 'wp_companyprofile' );

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
define( 'AUTH_KEY',         'FRlD[Zcz1LM=%&il)~^}uvFW)dZAt^yLY-?VS@{eX |2Bsg}i$9VJsM&F9^-AgnJ' );
define( 'SECURE_AUTH_KEY',  '57>s1~jF,{U/nJcq*Tnb5nFT/a&unJm?~rODVIod)Sg5~-LM=Y}BSa^,JCfq%^=+' );
define( 'LOGGED_IN_KEY',    '5z!S_vfGH}V7gK-X?=<zKEW#`w=u4H[ROsS|%%hWTg8[soTY^nhWtiywZW``4Q>T' );
define( 'NONCE_KEY',        '-T.Ymd.Fj[=F?mKf`SQ;?ch}F&]2l0q_v^``YB#]=L TGwk0v!];S/l}Yb#@{_~H' );
define( 'AUTH_SALT',        'O}q)q(amn<#ubgpl3Dn,DWgHa9.m+]?&#[n[(1>Fa;]jY}RA9%4Dct/v4BK.d&Pg' );
define( 'SECURE_AUTH_SALT', '~yn@>.E1.NhOi;oV!58JZb;,]6gM%cQ7*b c~Te*~Zubd1U/]fKW>k&?)[Sr7}y:' );
define( 'LOGGED_IN_SALT',   'uN4Ww@zJcBfY<iv3h[R;]!<q$]%NC2C^#zoN,UkLa-Cpo>Vp ns%r+#OCo-yEyVF' );
define( 'NONCE_SALT',       'wBXi9&f)=gs!J}Ob5@ltxb&RRCaXMTk4)F;cDneIo6-sNP^I-1oTALL+uQMN@Ql~' );

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
