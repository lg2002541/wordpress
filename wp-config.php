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
define( 'DB_NAME', 'testdb' );

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
define( 'AUTH_KEY',         '~}?H_eb[6/&p@drL,OF-<ou.>&0#$kf%h!_kuS|$3}Xs7.$ZaA9MDH$/!4ZggL/C' );
define( 'SECURE_AUTH_KEY',  '_;8Jq09@TC<K-Ab3f<;Gut[w*A51zo_Otf2J[Po%E~Q/e8PM>J|~{0X %RmGCvCE' );
define( 'LOGGED_IN_KEY',    ':xp*N6M|-Af$wb:.]rVyiV>(<|Zgo ]%FX7|dgG2Md/7n_xsp$=7ij-uI}y_n>qw' );
define( 'NONCE_KEY',        'm]J~auvZ/]X-]2_,2-Me~0 :v9T;Y;Z,M0KK>ktc9_AOcY^[y$[}OOGKBYqri!B+' );
define( 'AUTH_SALT',        ';)o]E2:xKT :r`.-G!H@NJ{MUiN+I>RyuK7^P!Bu:X3I39X4c3-U{F^0?5g!W#HI' );
define( 'SECURE_AUTH_SALT', 'm|1:ne{nEZs#;T%<sbzGc+O IelcWhx;Z/]1z*(eR6n3V_XwU54$$E7fAx/g*7Zz' );
define( 'LOGGED_IN_SALT',   'MA.R+$J.u2?s&Qy~43Y6cGUSel~f~J>(n*wivG)$AKeW*q4(0E0TlRs,PVW:2y;O' );
define( 'NONCE_SALT',       'TUL4Q(Ho>0ywJfB*r{-e4aGxtPjIR VovR,[:RXeSQ2H=%{FRzw)2ko41?jf*M12' );

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
