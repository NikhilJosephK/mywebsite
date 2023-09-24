<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', 'my_website' );

/** Database username */
define( 'DB_USER', 'nikhiljoseph' );

/** Database password */
define( 'DB_PASSWORD', 'Reminder369@' );

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
define( 'AUTH_KEY',         'U wZ-Z CN8?,+h$/<qk6N|z;l9K!V12f5D.glB=z*|WJjk4Gz7Tp1?[j&GY;&6yN' );
define( 'SECURE_AUTH_KEY',  '`O7!.g37rVKc_X)Tf(w&C%9,aJ2|WgNX|Da|AtSP{k,4clNo{8P8Opi7ypiEJ~@]' );
define( 'LOGGED_IN_KEY',    '{(6aUoh_Svq7m}C2Po_~mHB0v*Q cKB#&y-HNp{b1x}i<E8|$hI4KNRInO2-{j{s' );
define( 'NONCE_KEY',        'Ybophyv?h?!+4$:vJ~SD+[xaR.RmU#Qbz2D:pFJ(FH/w)0 zgbKs@r-LalX.3*^K' );
define( 'AUTH_SALT',        '(<6BPPSm0=m|Q7$-q4P|g0=I1)W]a/Yt<&}@.Z)i7BmlTX<xB[%stm_w_.Js]sJs' );
define( 'SECURE_AUTH_SALT', '?&9E@1?JQpmM{eXVz^Tc-)FbIA}z6v=Tl9q=km.{ex{qUGo<D,VI5%Y{%fCtN`$O' );
define( 'LOGGED_IN_SALT',   'qG5S:X[IzLgZC)C~,!?=^x2`Mx2#Vdn0D|OoimZ<PlLn(^l^k_St9&Y[.%l[w>5,' );
define( 'NONCE_SALT',       '>I<GBd:[Cb96+WJ{*Wy[ossdpP+cy<-A|+Jud~i*1r[!jOZY;q|Mcs=2sltDN-:4' );

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


