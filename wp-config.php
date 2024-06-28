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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fabweb' );

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
define( 'AUTH_KEY',         'L2;vh;gIo-H}mSq!-Y_.;_~=r)}$f5?yXK]1gFjInlpG]F~_H!RQ&MU(u+{/]&Mu' );
define( 'SECURE_AUTH_KEY',  'ZtUYLKTAP~?ac|b^[4NGZ2t?z0TBl<p6>di;Sr!>./$)abBfARUy<z8F6y.dunB^' );
define( 'LOGGED_IN_KEY',    'Bmn.)u^3&efP Gf:qD`7h8QR8)FBR(LtZZ5L/(MgRW[nj-~c?|q3c;fI[#L_;t&|' );
define( 'NONCE_KEY',        'ZXGER=FW[xNXi?P_vf4|yJiMLoj8%tfC#}iS;g&w9X;Yxc9:xC_!1S]r`rDW? 4~' );
define( 'AUTH_SALT',        ' R-yErK&XGTZ&3>>;^M-IlPmM+_G NUF]et1wcs7aY>@U$:^A)*Rp|q %u$gqksY' );
define( 'SECURE_AUTH_SALT', 'H;FPN6gW2{jR^@}J`RVK[`Gk4X?oc8179gt@HA>*8%#QXJfv&S/]A,qG^8%6+R(H' );
define( 'LOGGED_IN_SALT',   '.RjFo`]*HJ0+G!o%4g{~qAUo}Y[45{:Fk19Y4!heh6{87)a=3EGBmu,Li0y /t)%' );
define( 'NONCE_SALT',       ':`g|1OH0lrJ%TT#UD^iThjggjN+JyH~zIU9N,wjA&ZJz^o<UJ@-V#eKU#y6@+kHC' );

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
