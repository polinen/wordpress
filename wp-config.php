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
define( 'DB_NAME', 'prueba' );



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
define( 'AUTH_KEY',         '&pjknN<x47LgF<+[#L?:(b|i.2whBJ6hy|h+:(i97}[m+(cHk0Q1-FX=f4oM^OsU' );
define( 'SECURE_AUTH_KEY',  '4zmux;bpYGxf446;=0{61Ri? V{uRbhsAE]Tb2l^>bzu]$b*YXyZFa7z`Nik&I/u' );
define( 'LOGGED_IN_KEY',    '#q9[l[H8wE#H^ !Q7fSc{*%H&?!z/b22a=|~k`h0$+2s}0Rxa.6C?[2BrIB{Y,l7' );
define( 'NONCE_KEY',        'XzTz5&XxgCYpVD~KkmFSt]]&7ujLUD,;c[=>EGJ>]T~7|W]?*peo0>3RSp=kUOP%' );
define( 'AUTH_SALT',        'S kE`-oC ribVF:.ir  /bcy]o 0k*TdX/iVX[c:,2nR_h}w48+YwPc@P1XxHVc2' );
define( 'SECURE_AUTH_SALT', '+Pz7@P,(qOwd?dNbTMI|lm8/lgd9Jb,IG%Rr-qW gxmyI7QS)R :01(`ThVi)-|=' );
define( 'LOGGED_IN_SALT',   '(dlvp2fmfa&d& M3eW C{D ad|s^)?BV?)T(^lZustyU]KtvE|5r3C24mZw3nD@Q' );
define( 'NONCE_SALT',       '>;0!Q26[&9HlzyOH[){Nor6Mdpaw{V%>tRfARhE;3-*<n;4a(s0Q&rW4OUEax]sr' );

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
require_once ABSPATH . 'wp-settings.php';




