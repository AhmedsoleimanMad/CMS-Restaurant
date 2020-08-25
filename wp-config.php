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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zqbPDr32wk' );

/** MySQL database username */
define( 'DB_USER', 'zqbPDr32wk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'BHWHjw24Yz' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         'ba$Jv2Ge GE|`w=ky$Bc(B pLyWLw+k.Hg_5+rm6~m05dKugR|,|A6@W?i#./LVj' );
define( 'SECURE_AUTH_KEY',  '?AA#C.%Ql^;GlwqbgZI.wiPnVeBR|y*^2lzj/cq)LzMWnm&j4:gD4})`K7|U$cFu' );
define( 'LOGGED_IN_KEY',    'u=dtYKc.AE$yP~ A4bvSA7L4z##{)s92Jr*8>lGB8n&-^j(4Af?Js1[x1Q=jYcQ0' );
define( 'NONCE_KEY',        'v;Ft[+7T-_v5TlxPiEYw$pG^}:n%ADvD7T~:jGXUReb80<Vr>zTh|_CkmUGZ95#}' );
define( 'AUTH_SALT',        'b#N*<4cu]<aeWlX/oou0^?mZmm!mua^>d%bJ>dO6Dn#zaR[)ileQDG&VaE:yud4G' );
define( 'SECURE_AUTH_SALT', 'm0+QnV.xUlV|L?^IAQ>.k_g({Kh>Ow!_Rh<*?({9&3hV6$,d(nz`?<p&Jm?!2+ET' );
define( 'LOGGED_IN_SALT',   'K+/`tOHbP< lxYZhRS^v#LbT+YC7oe1+gc4/$[b}PWGS>D/3Q)@25KgynJ!Q3x<5' );
define( 'NONCE_SALT',       'avs(9L[`$hK4wN`grY*m:<${&ttCQ;e=m,*%kCj*AC~jaeK-@8i!b~Bi[IJ0Xh#0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
