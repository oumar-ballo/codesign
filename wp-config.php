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
define( 'DB_NAME', 'brief' );

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
define( 'AUTH_KEY',         'a+d(WdX{KjR=r6biyO_d_[q:7FE3idASE`Oa2lY.y,RJ,vy%yXx.C1KDl%v0O6bH' );
define( 'SECURE_AUTH_KEY',  'Cd)2BQ1;4$ uK5UTq#Z QY9*^yt2|4jtFInF+`@d7=Ik~Q]&N]2U{LBc23`C(:l}' );
define( 'LOGGED_IN_KEY',    'LhF(<yEbmZ<>aAaW@)9%Ei&m#Kfho27QG{bz}tC*VPu!=J{5Pg3v2y^@i?Y)pt}H' );
define( 'NONCE_KEY',        'pust(~x;M0p48(s8lv}FMsxB>-Eq2&+KK,6KR82H1b[s[NQ6KW1d)R9wDd]:[1/,' );
define( 'AUTH_SALT',        'L*V(F,iG_gn=EzRy$U.[mw2O,${Kn3KjkjDp|06g!yFgF8G?bNEaf}ye:>_LXTps' );
define( 'SECURE_AUTH_SALT', 'g=GsYEy!yX<&+NyKjg[pq2_laF:LMmTMRSl(/6,wJ+@;+zy0G Z),Bj-5-iP01;C' );
define( 'LOGGED_IN_SALT',   'q^yENv3-Utm<(Nc.N8)nv3aM7+9G,-YfPh8me~4;utGL]WHU`vI|{U(oBuH+/uT5' );
define( 'NONCE_SALT',       '`O !af{WDD13b{CW2NmJx;(y;z%[Ocvr1/`rke  !V{0<V%|U:Y9r|+1dT_b).|$' );

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
