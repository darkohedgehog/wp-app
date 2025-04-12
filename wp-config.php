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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
define( 'DB_NAME', getenv('WORDPRESS_DB_NAME') );
define( 'DB_USER', getenv('WORDPRESS_DB_USER') );
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') );
define( 'DB_HOST', getenv('WORDPRESS_DB_HOST') );

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
define( 'AUTH_KEY',          '*XrYDuie7A+Y{l8W9?b$myEaf77i]CIP()Qa%[n<XecAr]z3aog{7L$c-L{}u9?=' );
define( 'SECURE_AUTH_KEY',   'mIvjY^;s6Q]gNKg,k}d>ZM5meEr}!#9yaAUdxev+4Iky0JP=]68+{P$@vU$Tj5UF' );
define( 'LOGGED_IN_KEY',     '{KL)Ov%!yS|CS`d>jp@LZ!W|7Ggy`kYrAeT<VG|Od5zAy`wM}e<bu-|AKsH0&LV/' );
define( 'NONCE_KEY',         '?Cr9/mIK3fzn!RKrnd5oD< ;~3`!AnmS;b-,+;h:JjQ?1!]9nwv!:~fglsLXPt 1' );
define( 'AUTH_SALT',         '/Hib?y9nA&Rc>2}}ihuR0=!S56%qni(E0fT1~xlfe<5hgjYyw:9ywOCASpb*Y1xC' );
define( 'SECURE_AUTH_SALT',  ']G;YKc)5oKtpS@~FNs_tZXy@l9QX6au5XJ06!HLb1qB6p3Q(Y)=#ApqOeQy0m[,r' );
define( 'LOGGED_IN_SALT',    'OGtkdUg:BLn,#B_}YvAX&3yGP2VC2koT#kS`04V=>GfUQW#6)Mh@B0o5`}$jJ4[3' );
define( 'NONCE_SALT',        'J_mx[F XwhVg?/eD3cS`7Xt~zcL@16U/`0#F4I}Aeplx#X6=`y;BWe $=_a:i$9&' );
define( 'WP_CACHE_KEY_SALT', '+BPww!8OW+H.Cmu2^U~dU9=FX6te+m@PW#]4*=Ksfs${P1rqP-Wu)isJUYV8qd/V' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
define('JWT_AUTH_SECRET_KEY', 'hedgehog-1234567890');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
