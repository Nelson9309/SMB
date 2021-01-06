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
define( 'DB_NAME', 'smbcomp.ru' );

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
define( 'AUTH_KEY',         'U =l^c]/t_R@)}/NdP MmPq|D*;i8i0gs=.v=JVFY]Eh>2iChasa}rQ>I`zf}B9}' );
define( 'SECURE_AUTH_KEY',  'UJvy>`hf1c2m4^OPaPnjR1i&8n^=oYp_9%FI-I0d8HtLnRO?@-HgG$R}_`1Xg]@;' );
define( 'LOGGED_IN_KEY',    'lCI{h]2KVNjs:Lk5yAf+i)-=Vd-RZFTa$q5CM}Yo;l-*0~-EB5ib&bp-,k&*^AG3' );
define( 'NONCE_KEY',        '%IXe~(bMQZIJ}j!IX%56w@z2]4HnSf*83q2mIIl2_F| c))J^[}.SL#rgk.CPumJ' );
define( 'AUTH_SALT',        '8?GF?HD{Nk/zQ/@cQX+3moVU1M=yu$VJ;!I~(8t;E4r8)fG2smnMJSg8gG4Tr#<z' );
define( 'SECURE_AUTH_SALT', '!UI@Qd&64,2M}gA_{Dq[y`]m7ef`.* -<,DU_]Dea%BjiJZgA(heVU=Fc1$56XPm' );
define( 'LOGGED_IN_SALT',   'i^ +XtTOpJW./9aStGdRfLk{ wNU>m2P}Hg}}yuYK?)zha_.w5BZUC ]88;jL<{z' );
define( 'NONCE_SALT',       'fyA(~G]INb99@eJfzezj0f(dAbFrV=@Q:9>U,<Vp.%+$%Z4gETcJsbUtT6C6OjHB' );

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
