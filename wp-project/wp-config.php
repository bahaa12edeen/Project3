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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-project' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'B(reBlc>B}wll`ARMSn[cT{A7};^F{j*H0;d-hlFJ@H~/~{N1gwL?j.rzL{vk!+%' );
define( 'SECURE_AUTH_KEY',  '<c->lA|y&,)ck~cw}uRrum`$n?S_TgIYVU%qB$IR-dWq<Yg}2z%W3_k[(Y@Q%SXj' );
define( 'LOGGED_IN_KEY',    'Vc[kY.+A:@q!FBb2W/Y65nn}BL!-q<TZ1;]7D(XlK4aHc5R-9op-a=-C+iRQ;Xif' );
define( 'NONCE_KEY',        'w(@>4YC=x<v17SHUKp{Y/3@^%fO90RQ,6s4a]c;`X9Jn+IuFInYAz=C8:c;M@-}%' );
define( 'AUTH_SALT',        '=G{p?|w4zB&{i]4_68zHN}rQ=A}4#VB<z#R2Yau#dT`Sk>HT,^Ai $*mI[pO|!1|' );
define( 'SECURE_AUTH_SALT', 'y~-0(.5wN!50 m^PTq1#9jG+W{!96lXu/A)$D(z>-tkpKUPr/:>eI4npFr82](EG' );
define( 'LOGGED_IN_SALT',   'X.#T ecT~qf,-caZ/J=~%kb.H0t GW{eu:u*o#Y{~ch6X~[b`dCea{<[R,GW.cDX' );
define( 'NONCE_SALT',       'tUHUeIn>y}oj}eQ2&7k!S(i7j@k&!.r6WXTcJd06Rqw(^:TbJ:T*uyh%ltDO`EV!' );

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
