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
define( 'DB_NAME', 'brief7' );

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
define( 'AUTH_KEY',         'jk=KC&F0HvHWFc[*lS0Ev5>kO]UPc1zitabZ2XoQ@)+S68cx.IAAqosp4HBp,56J' );
define( 'SECURE_AUTH_KEY',  'h.>LI&ND9qKA@A li>G~;x;lmj8~h9LOZZeRSeq%_Ro(M=kV><TzTz>T=Gb2IzZO' );
define( 'LOGGED_IN_KEY',    'v.{uC+e!5li*[# uiOB4Db0%>a{!:~Jt;16@N,<FW,@bJp^t-t XzOs]5JbC;{vG' );
define( 'NONCE_KEY',        'mL`yNU1]RVaq%YCs$]t!;B@moK_P/GrE0vVKAQD{W^^ne&6D~a/6~zHB2ld$u(}7' );
define( 'AUTH_SALT',        'dq,*E?}Xx~|(rC19TRrB^q=@Z-o7z/.nQ<^1o].<}QN[Q&3eqJln#n,#t$DY~J]X' );
define( 'SECURE_AUTH_SALT', '+I}7^)IX`BJPK8l>.o$0i6Kl2`:H#U9Nk>$ 9@<H,8:B`ktq0h*_-eNBDT%T(o?%' );
define( 'LOGGED_IN_SALT',   'LEk@kEBsWV}-Xx*Q9a@groVS{4jl[ ;GS-{Vh6FE>_cD<P?(./t~u[_f@+gAj5~!' );
define( 'NONCE_SALT',       'f(>hm3.6>Q-d)Wo^3G2E3wXdSS6|!+`?ei-9ab3.5)h.A;v^JO`SdPVrT-=#.|vj' );

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
