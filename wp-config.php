<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'esa' );

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
define( 'AUTH_KEY',         '9kCw9 lc*5/Z{%}mMcb-6j7-q;s+.l;8QvNf4Qp?3!l|s|P->(#YHstK,)d]j=3S' );
define( 'SECURE_AUTH_KEY',  'a|Vb(o)[SeLZ}sTP-/Dq:[2!@/<mi%R[JU-~U9l;~_b(B^m4QU|uAZ/,b^Fp1=!8' );
define( 'LOGGED_IN_KEY',    'nb;s5$x/.v4 h`{z%KG5i4-zFP1Yl/xhN.8 [9&)0cst2:CMJz2j&f8IS]eQC4Ch' );
define( 'NONCE_KEY',        'o<`t01rM5{9^7]sp7vog{_9>gZ qZkD.`yVS#o,+{Wx.I;+yYUI<}b*VNMpnJ34+' );
define( 'AUTH_SALT',        'j>n_zq1i0Bx8>La)YD7xDLmJo8rR{9fF:D(B(9/-A4@YKgK)@`_}G~je~nEj-e8=' );
define( 'SECURE_AUTH_SALT', '6hqx6s`Ap*=(;25^LIw_)p&Hd0x;XC6/aMA*I[+ab97s;Tl5RDPeYf+)qitpjVP[' );
define( 'LOGGED_IN_SALT',   '~*tZZ0zS3qjk .o=:YF|6@@?OYBZ=ugGLjfTlE@yWw-F+Ry&cP}f89B+9cm=jQIh' );
define( 'NONCE_SALT',       'I5uM=Maw`{&)GY$~GOm($6D$?sVVdK/rjJS{g#,+X8!m*YpIyyA3B7kpTL@Fj{O]' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
