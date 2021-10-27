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
define( 'DB_NAME', 'maker_db' );

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
define( 'AUTH_KEY',         '=8X;k61EV6`/HDA.,>2v+M%H^Ez5g<A7VrQ.68<}~hh2p;KnV]0@WSw}=tt_gNla' );
define( 'SECURE_AUTH_KEY',  'zA8LdVyWlm?uD*yY=-0DXLp;Sl4|W?<ut=enM~^D%>|8&jk/b9k#ViPF^OL;4|tq' );
define( 'LOGGED_IN_KEY',    'Ox$?pTyuV7{=^Mg4@@.{@h?*K8YYMmlpuD9V%_&~K^6[*1`w;|G!78<$n{zvJo%y' );
define( 'NONCE_KEY',        'Bm*rF9JR(?(#NA/dj&+y..Ur55:4ZlknQ(7=L9M/!adXv`~HU5w>tL sa VW.MLm' );
define( 'AUTH_SALT',        '`eg;:7H+7]W[++<]Owwj+w{uy<U#ZM?q_jhA#BNh;z>}=/CcJuY{,G]e:Crqn3LY' );
define( 'SECURE_AUTH_SALT', 'HU~CkN-e<)El5*.ZP4:2aV0g_dfZL{VlNb/3&gXGoPn2%}Qm#?/HXUsK= eRdWx{' );
define( 'LOGGED_IN_SALT',   'k5_M<L=Ma8}{s!5}n=jfzP7Q;Xya4#m-uzQNPLT~9+BnrD~B9,3 #:$ykC9DO _+' );
define( 'NONCE_SALT',       'AO^rarX}W<U#n-6|Q#W@D9@r;tdd{b?MXQvE`t[ht4]0SvpUHlrN4AQDsSG2u/eN' );

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
