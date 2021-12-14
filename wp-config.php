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
define( 'DB_NAME', 'philiparudy' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'e/}].v-ZshuRsa]=;3:n()MCxEW8C3<b-CG1udYA9Z 0>i5oOvH5. lo[p%n_n$D' );
define( 'SECURE_AUTH_KEY',  '7Dwqb5F/F3,HyV%t/[`*-a&=b$]TRSztA&6VtF<BOymzC]y(fl 02zk~V;$<Xq@2' );
define( 'LOGGED_IN_KEY',    'C>&3~Qy5I~wQ VyTh3jT;4?Ji/epq @@:}50Ue0Wc*<_M9>r|VX`nJ~%`%Ga&hXH' );
define( 'NONCE_KEY',        '=P~V2k2d<%o{oXb/jREOUZJZg5;I !LRyU31%+mS|<T=_}dhmm@}?weOyaCI|?0N' );
define( 'AUTH_SALT',        'rKW:. <qW,l7C.*IRABNO<hPOx%*st;O}H!T)dvyGG5s;/PYcap>Rcxx)MncjA]P' );
define( 'SECURE_AUTH_SALT', 'vr)O.t]O*2z^?tvo[dt|SPTmiOAGKp^&T4OzSb&~I]_45d&*J+UJt&*?Ep)IrNHV' );
define( 'LOGGED_IN_SALT',   'L#c(-U}Gc#rSTpP#OE`%JHg/$kiROTM4;~12(+K$rIe`Hs]YR}JTI:Ek/W2V/y/L' );
define( 'NONCE_SALT',       'npKP=3{rzFPHe$OX?HME[t_xo|CTU|];R3(<!M.Jv{U8je-D)OV~^yd6-:]0MW}6' );

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
