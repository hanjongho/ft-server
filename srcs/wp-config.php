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
define( 'DB_USER', 'johan' );

/** MySQL database password */
define( 'DB_PASSWORD', 'johan' );

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
define( 'AUTH_KEY',         '-*$/]}I/ @G1ZT0}l&%K[;6$amSW-0CND3<m=SP&<_VFdyng$s#B_@l5v:V>+SPW' );
define( 'SECURE_AUTH_KEY',  '*F|hqOE5#J9hJPO4Jp~S4JE4?19Pj.-|;09^6kqb3?>lU=Woa,+zP% mjR<DM!U%' );
define( 'LOGGED_IN_KEY',    'h7a*xjMQhI4}Inwc7)c:l~cS8y[EW`C6;&7D9z v!f&+W/rspv;k?2R4NajQyJVr' );
define( 'NONCE_KEY',        '<b>m&cPq6q%H;Ij+l}vKk2i}BR]409{xp~`sN`fnyk8]w$f]<H&7An?2$&v<hJ6`' );
define( 'AUTH_SALT',        '7CSw9X,TS}{@nY&f)Q)O`&WyR2L`LB/b>P=}!3,MJ*kZn%[kU%x~z#xn)8<ry`1h' );
define( 'SECURE_AUTH_SALT', 'zWX8aBSE<5Ec)<Ll,:B$2V.]DdTME$<FO*k8~y[ENtd)Gn*C=~I52hEZfnu8uP5B' );
define( 'LOGGED_IN_SALT',   '<8w@3Er%*<)-SP`%BDn{1%>U/bm=sA%xs;&G6EGOHQ`bt91)#KC2;b%jBdEJ~@;-' );
define( 'NONCE_SALT',       'CV|mpH%E#P/l0f~Tn^&@hi)yl)sTMWDv{v5b&D8Zy-6]K9UxYH)(R$lzS,f:H0Q!' );

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
