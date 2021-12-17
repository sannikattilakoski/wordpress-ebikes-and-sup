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
define( 'DB_NAME', 'wordpressdb3' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '6tdHR1T^MuSJpF.R>BY*!{?rH7Hq<EZ%j_2Pl27$du,uMVKH9?eJva4nZubS@N[v' );
define( 'SECURE_AUTH_KEY',  'ty=XzVR^i<T4go^m:iTt-X=E4GJb8A@HJC&[7&W_4:s},zJ]wh?I,]8opayEv>XJ' );
define( 'LOGGED_IN_KEY',    '9M))y5A5HdyFEA!{-p(Oni 198`2:PgY`3b*xq@Rm&VTc qyz4hdTU;zAZ_3F/uf' );
define( 'NONCE_KEY',        '%z[_s.DMi(=K$btab1VEJ_]1h/$P2MKm<m#|d%Za/aF?ka6#q31AEW~H8SaR91:W' );
define( 'AUTH_SALT',        'W[SUn)<1UfY_%<IJju+(xWV$>V|DDg`Tu+(Ra~XKLqE%Eup$pDqzwZDs,@W_9]Z@' );
define( 'SECURE_AUTH_SALT', 'AhM,EZD*6NWs{lo>JcLlt;/pm,fs!nn~7Yq;<W9` }f)8umq<N7+7_Z]`bmb.#4V' );
define( 'LOGGED_IN_SALT',   'l)GAZ7YMs1Ln@]K_kt!GnOa!&=[#clb7u34peh[U%%4fd&7WGk{hN0QJjv}b#Zpf' );
define( 'NONCE_SALT',       '/Ch7^Aj@|i:C=e2_[=M^eO2=<x<y@Eg.OklP<n|VoHZg=4ljX?H3J~EW6M)Ma~yT' );

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
