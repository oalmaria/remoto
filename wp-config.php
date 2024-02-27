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
define( 'DB_NAME', 'remoto' );

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
define( 'AUTH_KEY',         'o }X#[%E)I ~)jW >?C>=zt@5kReQb5AXah-(r}8^^<.)N(N#F E8-7dO0%ZB1h*' );
define( 'SECURE_AUTH_KEY',  'mP)`$PQpS_/P16dr?LE)1,q.yuGG!Zi51y8X|4h}I#rs=N0c5a=a5*y:@XW,TpL:' );
define( 'LOGGED_IN_KEY',    '0 pJbwp<_/Au41nI%>C9:mO0 1KjY-59;7(?3[c(CzshJrxw0r]7BSpey|m{=2B,' );
define( 'NONCE_KEY',        '0GB~kb]zqqBn9@uF9#;-?ZGerLRuF1S[y#;i@e{_[Jiyi;,2k?xdG$5&x$uCX|[ ' );
define( 'AUTH_SALT',        'w#o.0FW}.7,i--Gm3.<@Pqg{56K9Y^/w5bYMT|9z;twj*}Sgm=qRBS%:vI0BW<I7' );
define( 'SECURE_AUTH_SALT', 'W!<[X.B(tnm^<m/c)J>/GTyvK%{dabc/3Py[VFgzlmv4DQ$E3Y|mfw9YjgP}r4;v' );
define( 'LOGGED_IN_SALT',   '|w4TCf[Y1uj-^KG@O24 ClC(Yjdv(V+6$X7m>_~H7,(Ra1~`S{^pU[x<X3uyMQJS' );
define( 'NONCE_SALT',       'L1?cfs;I@dnwj}KBfZ%M(;=1(G|<%UQ]{}M*;H<SI5?`f&NLM|k}9v4_1m#^%*~,' );

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
