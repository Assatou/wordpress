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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '#m4L[z~fbn|Z>i{@Hzg9PjJW$9bN3^(^#@oLtS,T*z5N-Z^NLuY;H:BS$BMx,BAm' );
define( 'SECURE_AUTH_KEY',  'B^$Hj>^@OxK8cY4V[U8]d)]=b^qq_N5Qh.1=&*0y^tC[Znb n8uW#azebZb[_y:S' );
define( 'LOGGED_IN_KEY',    's!&I)/=.7#44MnUk>ay{d?8tBu)&aS`V?|1~W[@#<sOjn)V0C[]`=4_ea[#HeU{l' );
define( 'NONCE_KEY',        'nRUIct/@uQ5_[8D-pTl`<E0*0Vr?`obB!N{8+ph?<U3[{//c`l8lJf~P*.mtMS]I' );
define( 'AUTH_SALT',        '@*=9)+Io,2zLk}LIvOg%e:-1F_rl->w%o=L^idza]^}E$Y+tA9f2<u?%zTLl;<oc' );
define( 'SECURE_AUTH_SALT', '?+VWxQ1FW~]5.]=CBA+6``Qv:Nfn8/?chb#lPB.z$&p2kV!YloGYkPC7D-d6 ZA_' );
define( 'LOGGED_IN_SALT',   'K%9`~du!zI(ybseGDA, @$UlK`z:Z(gbO&xM|/EAB1|-7E.%5]@Nk4)T^<c#Q6~Z' );
define( 'NONCE_SALT',       '2L[F$QboU@8r02}>DL)dxbO#/^V/`Qfj/@U5Wdbg]o4VO?v>ILsyW!r%-I7a69L.' );

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
