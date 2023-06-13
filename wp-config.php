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
define( 'DB_NAME', 'fictional-university' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'kenya1234' );

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
define( 'AUTH_KEY',         '.gO8:np-pc$@#U${+|?}B#cI|>ylE){MYXx}7qcLuY>`oKXYc8|5gB/l5h[ r(M1' );
define( 'SECURE_AUTH_KEY',  'BTmk9m]a=,[XonZ7UEZ_=|D4bhqOF8JyZm$X2=vgJ =I2s|yRAH!g1uX~PCh%{=p' );
define( 'LOGGED_IN_KEY',    'NYF70F7Ovf+l,1+43Z !|YQK1E0>uyikD}0e(%k=-?6Ob.44nR,{M&?ltBP3>V<m' );
define( 'NONCE_KEY',        '&604]#&Ob0HYFxq>IF6~PCpr#jI:wFR%JP)CIL/K]]-CK&KEEiKK;Tlw,]{NynK#' );
define( 'AUTH_SALT',        '9,A^Yp+P3,Ey90Z q{JCB~=R{4!JvGyz*$o*sx]u%nT_pV(BIkr-7u#ql%L>+`xV' );
define( 'SECURE_AUTH_SALT', 'J8rN7MSzsE.Rzv&wr|e]x+S+XPGyRx||~..EZQ*+0-(3>:X~&NRHv]6, ;Gs*Et)' );
define( 'LOGGED_IN_SALT',   '9NtO7+wy`A/wdRQw_}> Fv`^[1XY)G(UVbp;sKA%LdHl^KWX }eu/Ykv/R=NP`H ' );
define( 'NONCE_SALT',       '*y?B~.VrFaRo=d|]v2?J;_ca=)fG8d|A(0(kt{ekg0}y=+:-dpe{;7I8QdR3ANWq' );

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
