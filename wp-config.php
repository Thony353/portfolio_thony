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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         'C(J22%T(~Kz|PS?-=(Y>:BhiUN(C.y*7tEBM0 `,Z?-{vB%:l_W(,UBm3M$;yVF:' );
define( 'SECURE_AUTH_KEY',  '[hd=LtgHn=_QN~8D?V%sMjz;;;t)Q_!YK@%!:X|Q1:F?!G2re&RH,~0iRur7ql8#' );
define( 'LOGGED_IN_KEY',    ' ?Q>m#iXVl~oKw`uZfe^&b&%$FTg8$)Gca!CdFN-o/&$RU=5p~{/t-J-jQ#WGy7@' );
define( 'NONCE_KEY',        'Ff9.baG7DyaL(uW2e}Z5OqK$%J-s ,{KZ!fNwwSj>XUtL(z+]SbwzU!Vy[67B6^q' );
define( 'AUTH_SALT',        '?_ruy!(f>a,l-@Ck,hN)6X=_T/Y.^^U<;i9Hm8@,*&vg!fYY:hZ vH~p>mL{U#OW' );
define( 'SECURE_AUTH_SALT', '#!!Rcnl3E>SSh$/Go**JNt&fKxxCn%>fv>~1Whk/%_}mG ]xuBWy;Fj5*,-.lnki' );
define( 'LOGGED_IN_SALT',   'k&36czD OQQP7/+#2~MGc>l]1jnW1No`3!ocYrRf3WZ.]Y vyRGw{p ZcUNs)UsC' );
define( 'NONCE_SALT',       '&eVh%= R,FV)YyiPbfhX,tI~^qlF`L_azE^zXUb~v*aB$=aMy}H6W~ID3Jt_D-Kt' );

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
