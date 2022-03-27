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
define( 'DB_NAME', 'portfolio-v3' );

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
define( 'AUTH_KEY',         'PjQ9yzIgBye ;bfp7U{+M>0o`qV|4qa|uD,.6XZlK;M_dG9dkmK[hpYvrG;Eh:]=' );
define( 'SECURE_AUTH_KEY',  'l|Lc{;P|fsQa?esoKr[FgU?qzVNGqKOiI6/[i`NINY|X/6{<YI!~9I%BCFwLFzr,' );
define( 'LOGGED_IN_KEY',    'sar^Ib#?8-&;n:=zZoAWI&Q#phEO+:H!v9=w[K,g4[hd wj:3*;lp:G.Fk6Nm#s9' );
define( 'NONCE_KEY',        'w^$L]eBd2`Rpj/G;R#l.U#2JAC 0ilX-#3NBAbJ+kP24}q$x<]$V,{[J|eW0Kp2x' );
define( 'AUTH_SALT',        'rog{sELaXU^;y(MTv9fjNPZ5yo{P_V-;,@Cq36V_yx;sHIQUX3>5X$x`*(YeEIc0' );
define( 'SECURE_AUTH_SALT', 'j6^9a9KBmP{x:4m.@It}Okv3<wR~Z;U!So0Cnjc+2%_;g.p,7W|cD]~jW.t32 Zx' );
define( 'LOGGED_IN_SALT',   ' VhbEp YGIEiI.niKYiQZ9S]ALvgEt75o}nJvC~^n,!I9.nvU02,D+GWz&<{ylEa' );
define( 'NONCE_SALT',       '!6tyE54@x#/3pN}m t#^b#~HJF^>ki-LZ0kAXwfe*=[l| h|Hl#b!v^k)GFVB|p&' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pv3_';

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
