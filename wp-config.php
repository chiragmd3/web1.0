<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'onlinestore1.0' );

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
define( 'AUTH_KEY',         'jogJ^yAWzw3HT?!2he4)=Hj`JqC:9 M;xh.1M%tjcv(1B=>Ibo/oD?=*sOSwSKiy' );
define( 'SECURE_AUTH_KEY',  't5,)DBSMkl;H CAE$Z7WX_Dv {$ch0/o^<|U:Odp)lRPR$=i=} FB<(.sscRVq}p' );
define( 'LOGGED_IN_KEY',    'bzr3(6Nl~~BFQ=b^Ep0u{lfXJZOK=6F`W ?-Gk.s&^OJt,(a_[`wyia0e,6$Va)Z' );
define( 'NONCE_KEY',        '=Ji%%71XYKm,y9a /qt$18106)8`;M(HU(pQ}/4Wk2N;I{o[,JiOIav$]jK}C$UU' );
define( 'AUTH_SALT',        'QFrwH4;7QRdK}cWAkXh6;p#/cD:bFjV/zSoZ,%z78yJ3bMg =xH+j/GN)_a=_iI@' );
define( 'SECURE_AUTH_SALT', '|;FpAJRZ^k;B$!?I_~E1a?TjY.?QIi>5hv(Zag,Rabv8?JUaXj*jJ.WLl#=thbC5' );
define( 'LOGGED_IN_SALT',   'rI+b#-p*CNaC|S+ZJT6=3NP0JytiNod$LC66C020,-SkCRF[{90mJz3C#iA!iR0Q' );
define( 'NONCE_SALT',       'Z>5_udo3hl><617CSAdt:0]Y,.(.7;TeX2dbcOV-Xr2xgkbYOnd.sFf,WI>fg%ed' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
