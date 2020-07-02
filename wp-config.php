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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-theme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>|,AYhE*)58=<=LCnxg.1LI2hO`,y~gP~``%$_3boIT~/Q7`>|?GKHWf2;!W9~+$' );
define( 'SECURE_AUTH_KEY',  '7G}+M@y*hF]-n%#%C@,FN+5}(c7sg08n)%oUso/xZ<(Mp2fI(u.-(D2/FXCWrvpv' );
define( 'LOGGED_IN_KEY',    '4W$X)}[**,^(g^hP5l:I4REj/R%6Q9GGE{csu?=dzG;XV]%`yXl*Y:O=_=u~vhiY' );
define( 'NONCE_KEY',        '#q-6v R~j&zi/VR[!r=nM4.>rFYM@so?pO_bTwsS[xDjvd61loXg0%<8S{^t1Z1$' );
define( 'AUTH_SALT',        'IOUJ|C?YS|vlv#c!gp+P,iwjchb`~~*3xb/=K)>)x)x%sx_qg9pdM:3BT}Pea{m~' );
define( 'SECURE_AUTH_SALT', 'Tz0%QAYj0R_A=ar6+5,g6ka@;p1hj?aTQsSk^_MVZu*6TbXy07Kc<Y8PgikC:j:#' );
define( 'LOGGED_IN_SALT',   'DmDq@R!RL<z|q4tgm)B/0/H+,||D4?85.fsT>ebKVod<adrCtsg]=-76qt#3OD8i' );
define( 'NONCE_SALT',       ')FnzYBgdA49[L$fi2i>twgKO_9rNlQy0VIih&2b%AIUYl*7LhN7z3=_rS]Z^MN+;' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
