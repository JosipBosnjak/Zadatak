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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'a5PYzNO[kon-r>>8jyG$s1H%32IZ^PPQub5~p;./[_$[d:+?59aIS)n8Nf]Hmn3 ' );
define( 'SECURE_AUTH_KEY',  'xQC]0OVex~8ZD:b=h!B[+XF*4z!=Z&Kqt;Yn45=wO%f+[4hNyDSJ>Q=o>w^JQH9]' );
define( 'LOGGED_IN_KEY',    '@vg_;$sa;m4ifZx_op#/t`5&T:TO=Jo#{92)&=<Cr7 Kew(g{*WU], >HdqT.aNm' );
define( 'NONCE_KEY',        'F[3vgyfSiBWS!})iuwy=,o~d8rb 4q_JCmC0oEjSx4`@mB7#@5PQP!Gt,2xBJEpc' );
define( 'AUTH_SALT',        'cd~sX=f +Yp-CawV[53a]n~LG]AQnRI-_dlDTuDVJ:~t3<`{2z,WSYfp-/MZ+;vs' );
define( 'SECURE_AUTH_SALT', 'X2V&HdOsP%tL@?)ee*S}Ztn@T0r{Q7o=V*#6)*mO,DEY d?<d2eaXq^QQSVpt.kL' );
define( 'LOGGED_IN_SALT',   '/e(6Q~0j 6H@RU&_z WDE?#>FQZ4MOllX}am_&01>A75sdy/ktV?YY,.;0]_tF!}' );
define( 'NONCE_SALT',       'Nl#8pR$VX,Tg0:LO5wsINQ:!5rc:}}X$*n4ahHV<2SiZ1w04i^!Ch5>+Cn)#yZHU' );

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
