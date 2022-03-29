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
define( 'DB_NAME', 'nutritionweb' );

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
define( 'AUTH_KEY',         'FyL^Yr7LYJm8Xz?Ycc4R<^xQn8gLtTR!O({.-@8aNJ`z56@T$C2Xu!/OZCVe~,hv' );
define( 'SECURE_AUTH_KEY',  '7VHo~7E%{]SM_l9,6DynUAF8aj;4HE>f/x~S5LUYMgDj;1qay[B?Zt=&^kXSV;mV' );
define( 'LOGGED_IN_KEY',    'pA6#>+6BGsP}7vVA,67-Q>OKQ?H@U4[eekKUjov30Cd:D+#qLX2eQSBs{k?Q5S$*' );
define( 'NONCE_KEY',        ':%478I+{}=*s&^@Ps.5~}NghrW>Sz/Am_bH<9 ybhypOHEZ$!-Q-`Mfr &1u&0N2' );
define( 'AUTH_SALT',        'vA|gW#6,wP@.U9dek`W*%XSfPZ&Hdi)f)g*LTrS1[%xAQ}xL]c9!1zoN&N[kZvvd' );
define( 'SECURE_AUTH_SALT', '!IdNl@i3NW:G0(?N{u?/`yG&s>~-ZSh_M,bPZ&-^R x1Ts(Oh6,dqq`Hf^7gO&DZ' );
define( 'LOGGED_IN_SALT',   '[mz7cVzp$6hHRIEiQ:=)gr+9.4 a3iZ*:ahoL$idc90>s/[$icR>|gjDRN:{Gzgq' );
define( 'NONCE_SALT',       '=s^y,S/![yA>=j70n~DRVO2f3el_9,~!WL:BO[2F^<}`WSBEnOHf/l@+g4-Mm]K?' );

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
