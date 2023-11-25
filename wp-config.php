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
define( 'DB_NAME', 'testdb' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'Admin123' );

/** Database hostname */
define( 'DB_HOST', 'database-1.cdjoh3mr89uq.us-east-1.rds.amazonaws.com' );

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
define('AUTH_KEY',         'P9pE+KG%bAyh.L+/Iq0jk-hD.PJL#XD6b+>f/G7|cfB^(Zzxl1)!Y:!M|rqu<.c0');
define('SECURE_AUTH_KEY',  ')bjVf|n#Cc}ar[7D!D,9e9:VQ5Mn~]ta-vrQ3|ky5Q#rB:-0xB0F$f{EAgppu%(-');
define('LOGGED_IN_KEY',    '^NT2yY_2k6ZCD|R*,*B-Y/nG.1++d@!-ch<9{=|> :iwM(:eYlw=ka36>eGn$|Hv');
define('NONCE_KEY',        'J:SO1xqp,-_m_(0K8_cMNB?CXzWF.-0=}P3>3/$ws)`|!Gp,AQ G8,O~nuuL=z0b');
define('AUTH_SALT',        'C Dg+8HH+3zR SnOMU|5Pw|/q:)NF3x5b ys.CP!7bnR+!=_cN|0|GRd}@GF>u[2');
define('SECURE_AUTH_SALT', 'd##+Ze@upK.A!z81b%-7R|=>jd?]<B/z-vPSBigRl7ymNBZOC7.E,Ix+R)C`6cXh');
define('LOGGED_IN_SALT',   '+Y3btAmCZ(RU5T_nfC:tX6cH?qP:9>tf>PrsCd;#x+[ciHl3jZ~&GOcW ;Wf~#8?');
define('NONCE_SALT',       'c1O15INDin v|W9Xsg]&v/-#AH-6DGK{~nD. eF9Zl27K2>]<K-OX$@D|+dn?;MS');
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
define('UPLOADS', 'wp-content/uploads');
require_once ABSPATH . 'wp-settings.php';
