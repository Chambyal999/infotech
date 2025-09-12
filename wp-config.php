<?php
define( 'WP_CACHE', true );

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u364876456_t2W34' );

/** Database username */
define( 'DB_USER', 'u364876456_uXR7T' );

/** Database password */
define( 'DB_PASSWORD', '48kpSZ3A1q' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'U=D=J4NwL=l~!g;b@AkJ`$9]mf<{gSK-%H7f&;cx49b((b/kL^yiCzp5ua^h{i@=' );
define( 'SECURE_AUTH_KEY',   '$vhaA`+Qrc@#sd&/XT*Wv5B)6B~~W8<+$]r3LEBH-(XM=DP^5LKgP91lg!}a2.Sp' );
define( 'LOGGED_IN_KEY',     '.00Q[E:S+OhK8a^mR$d!~B&8N@8af${RmF3BO@82=&Cz9|p@?Og_YVBQ}sv4;c)P' );
define( 'NONCE_KEY',         'K4#&jt};h[W_<q&8%a_6}]=`1iepBYDOz$n@QFCI.].1kY[b&Q|%2WLOS0x`.deg' );
define( 'AUTH_SALT',         'p^h-+j>^gGQ]}kq8=9ct[V<Og6}d]]-+k;+=lUfW=>D)O$Sy$Tu2}Wi#0xK}/s;R' );
define( 'SECURE_AUTH_SALT',  ':|#4&@lK8Av_,6C*wc>T!<R>xU *)#=9OIZSL!Xal*mXef|+9ENcCpMG5&-w>u+ ' );
define( 'LOGGED_IN_SALT',    '+]_(! n0=!gphGBeptcNve=r}>fzfq(-]zn2R;/zV;9GZ-9Z#aiavv/%|NE2XaPh' );
define( 'NONCE_SALT',        'KlRNpOu]:M.Ii:/B}](uClV`nN^|gD*:u%iUb|*BnL >vZMMa=>5Sa:/ldtyI8N]' );
define( 'WP_CACHE_KEY_SALT', '<T%Q=>-v}ly*jyi1*WgXaCU<2y$oWi)*PVU#u,%,B0d_& 5td+%I?;Vu/-Qr|]Ad' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '52cce8a0f55dbbfa47661656df6ad5ae' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
