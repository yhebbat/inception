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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb');

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
define('AUTH_KEY',         '@mL-qGUG;(E^iH@^#ZiUcW/b#|tGQ[X)n*$.4moXz*h]}Ln*{yC|qfts|h%QH96y');
define('SECURE_AUTH_KEY',  'H)oP y_6h])^Wc|8n^+(lAo+9i4pXEIc11W<AuQKWA&/m*a^$?;-FDHnU1f-;wXd');
define('LOGGED_IN_KEY',    '[&FDS;-g{bSY2+t~j->1~beoed$:iBs<Mq}J:a+|9WiHg.+}io<KfB/LZ38/CzI*');
define('NONCE_KEY',        '{7Md;5OsSh)AF!Yx<M--@`ewCK#8w978$T|q8+!t!8&.o2a7lE+sW*{VN/PnKLta');
define('AUTH_SALT',        'mK@_6IB_^]8y<-|^4H/vk+;-jHyJ-I#nJ(PU|&J<wD=S-Vo&)i-d# 8-1lhzC|zd');
define('SECURE_AUTH_SALT', 'Z<!-ffq7/ezvA^Md;{Oa-ocV,-GqS%m^w%^jnR4!rlIrGN++#p,ls^<v/{!v,^{I');
define('LOGGED_IN_SALT',   'aSt,I$&B{6D2JdD$OVpOb+l*}C8@s:e_-}]dL|s|{}=Re7Aq+$9(c9~v)M_T5iV(');
define('NONCE_SALT',       'b}BRe%NnOdz_AxJ(-W-xwV)pjI2+ij@FO>Vc)ScPps$#U+|bx#;tvC+|z5C=SSx[');
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

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

