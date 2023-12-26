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
define( 'DB_NAME', 'ajakus' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'iw7_9gy/ZLk~p3z;3f1m?P-ZnyrlOxXdatyPN`X=PT{G5bmE@7sRyf*M0^Dl.$q&' );
define( 'SECURE_AUTH_KEY',  '{zU?_JLhK*&~sV,|~`dWk)YZWd2t,jt{b4`)*<vH2D8<8,(e6n%!&K0>Wp0xDB58' );
define( 'LOGGED_IN_KEY',    '?7ee};U?bJJ($|?HX?ZuuY_+&XT3U+5SYuRM|h6q0zM8hm5ugvJtDAwf QGpPr. ' );
define( 'NONCE_KEY',        '[/2wcyBcy8#}{I|xNX@IWT>y/oVB8OR!RmXsL##oO&vf^*/=.7:9uXB4bTt17~sZ' );
define( 'AUTH_SALT',        ';#z2xO#52(|<9OwJ$p~0goPb0fdr:@s5>Ae2xMNd)pQTsa*:yE]$Br?f@vmEe.w?' );
define( 'SECURE_AUTH_SALT', '^_N&:drdC>%WezzD=AFzMHyA$!4f/(Ny)Dw.; (7W>(N*GSx=6`M7p iRbSLUV6@' );
define( 'LOGGED_IN_SALT',   '$?!hiqbD+CD5};h;eb?v:0ua5FiXo$&^;GKh}8u|IPH}pHHdMcn M^ZDN(JKy;!4' );
define( 'NONCE_SALT',       's %*2QQ2$_G}f 4[Wq7jAWl@[{Y0rEgfN_ys1+._RdZka5a+<5sI2eG=%1:F8X9]' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'aj_';

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
