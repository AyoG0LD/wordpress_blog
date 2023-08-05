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
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'stackinc' );

/** Database hostname */
define( 'DB_HOST', 'wordpressdb.cxancv1foguf.us-east-1.rds.amazonaws.com'  );

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

define('AUTH_KEY',         '=<2q8CZ3Sf-/[EO[[gzP3`dT*U_mt!3DBGh7A@} },|ebuZlqgKLsf[N<eawEI~}');
define('SECURE_AUTH_KEY',  '+5v|k[BINh6-0az_w9Su;)LUy^PTNy:t68Dyq<}xZGL~IV+hvj8)C~g_&J^]N%a>');
define('LOGGED_IN_KEY',    '{{z7jDP`4_L,fWg<sB=Q}qM5H=go-8)]=`eh7[Y)a&Kl|O.UY.CwbRdhM0I*0RC(');
define('NONCE_KEY',        'RY@qJvaJJ=_kC9I3en3|*yWS{%&a=bPr[f~0:krRObM[>OI.@#5IYNNm^e|Rm++W');
define('AUTH_SALT',        'W0W,@?/h8R~j*4m+/PKwvx~7q05(`oIHo|N?SenfZ1Kb2<l-ARA1.9dP!36]4U0;');
define('SECURE_AUTH_SALT', 'ij<:nVO%|-oUiwDx&W?IJ`kmrg[-W**.C~iOz|T|Bme;cV(p(&`S^oiSu]xa*}l~');
define('LOGGED_IN_SALT',   'Q1(Pe[9HG[s%%im-8aB_4i++(?m m+m)Ef+du|Nl|Bl;L!l=m F1+In{Tx3.<,(N');
define('NONCE_SALT',       '1ndDy 7TTw|[Cx?u`E5s?9;yTw q-&-qGP<:R3R{;G|8,Vh8.H_:layCM(zM-KZR');

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
