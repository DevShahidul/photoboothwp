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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'photobooth' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'j8c92lkYo):5A}4I,Uf5f{$FbA@FOMl/ukk=E&r=C?(u(3I_sLyEJkIxsjQ#CvtW' );
define( 'SECURE_AUTH_KEY',  '$PKw)gUw$5>/J#k<l;`;(]OT(KxL2|xZY[G3yjd>;xY}hz{jnvO}ZP-6jHG)=)Xf' );
define( 'LOGGED_IN_KEY',    'hL%#D:ftsaP0wMoOXpVJzU`5d!o{l$(}:amtUk#.yf8,q9&)q+4K&H6}~Kk1>f[g' );
define( 'NONCE_KEY',        'Jn8Y6]=[;r!)O&Uc4|5/O[= r$KJ&kuR]AKd8L1!/OrD$Wv*Bl+1F@g~8f_kxU$?' );
define( 'AUTH_SALT',        't`>]JLxcxoA_hc4yK55x5`V8Qd@c46`dCgi<@{7x#7S<Z G1q/W-jc?1V:p_S2$a' );
define( 'SECURE_AUTH_SALT', '/GFk$,PA%(qbk7rw{F<3WKY3yK~).4o~=e{;X2ia8Ij2._CMhAD&Ag0!NB1K2QOr' );
define( 'LOGGED_IN_SALT',   'd.HQW[:aJy^Ki&vwMm!VXs5zvg gjgBG&c7(QH9$OcG?YhE7FyKQ7]uZ,USomA9m' );
define( 'NONCE_SALT',       '5O[h-?@5]j*qjXW@$T@]qe!vC8fB W4EEt,r^l=>t2`I[ZWG6=X@1YT07_hv`(;D' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'photobooth_wp';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
