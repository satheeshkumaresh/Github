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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'atlanticfinal' );

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
define( 'AUTH_KEY',         'M1O/[Q,Bo|<c$Gdaxv?A>_-8]_pW14te8.DIz_[xLV#Fk9#Q~a]/h)X2 QRPmL~a' );
define( 'SECURE_AUTH_KEY',  '~R!kM)bOLzI-6lFarR9ov2;dV8fbxP>Mzl^wgvF+xW0k@@Qfzi5INz`~}$r)GV<a' );
define( 'LOGGED_IN_KEY',    '3(*Q0CgT[nrlo<kKcD ;QnhHQJ]a_)*R5I=0fYEddUm4+?cl/bq>:#]q`qy%CmUT' );
define( 'NONCE_KEY',        '2#1D(8m~JXK@t|r]xdOw7*G7c6vwK@4/_`9aoK[.?~GQMBw%!zBAEaZt+6MtKKQ-' );
define( 'AUTH_SALT',        '8.,kBs98.`e;S8cVVU.mlCz)v$&;nqKxZ}6SJElVHt^&*A%)m7jOk2qR{}&i-3bS' );
define( 'SECURE_AUTH_SALT', '6`S2y/RmBk:c}JBhk(kUHgUmDc6T#N _~5_RA-17~a_jXKx_jY};s&]1^S+WuB]y' );
define( 'LOGGED_IN_SALT',   '_i$0/rXCMaH5dUXDlg6+kf4!xzX9q8@,WNM5jI7qqiK[n<?jfsYtQR@vO%JDsngK' );
define( 'NONCE_SALT',       '/j2{L(&u|`A&T#?c/X[CakS.Vmk976IQ@[ppOr||/O2Iv: ,cs o[kF,QQY`^fW;' );

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
@ini_set( 'max_input_vars' , 2500 );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
