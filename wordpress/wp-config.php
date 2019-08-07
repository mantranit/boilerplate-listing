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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fujielevator' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'P;P/ZV7?H/F.bn|lT34,*J;=|fDQf/*4@REV6demIp:wa#!Uw, nwweo{}Vp kfd' );
define( 'SECURE_AUTH_KEY',  '1B@D-I.W;.?A9t$x5;O[j7t^,laYnhuA~0vS$#F{~4sNgjE+-W3v>e[:%KR1(]Dt' );
define( 'LOGGED_IN_KEY',    '<l~B,prF9fVd3)8/q(0-H/{M(;G[Fyy^^ieEoQ40~5?S)D[lC!hR}]]fB?E+.s={' );
define( 'NONCE_KEY',        '-,aB+U6l:t!x2D$z=Wgj!coB2>;@:WMBpP5dD@@p$4SwXuq|Jeujsk-zXmPK1Ke]' );
define( 'AUTH_SALT',        'ah{F5$Q8%F6?UEu<vF)40X`3u`X1SG0D5}fcCC&m2)whHGq70}cf3NH@~x,,F%GF' );
define( 'SECURE_AUTH_SALT', '<TL<%_Y^Y{R2=h8ZIkZ&9Ar alrg5KW@xSEhFX%:*? 5VXKjo>x+*w^F(zG(y+Dz' );
define( 'LOGGED_IN_SALT',   '1VbafvfqyYtAuY7Rkr.;!Qpjh+i8Z+6;!l#F;2=wjg)]PB~;C}b8}yD+4u(Pa`|v' );
define( 'NONCE_SALT',       'B:pgi+x}Y*D@{w:+2wa%wlGgFY2.bfJ/*&uZe:vq4E )+Om<(D*!mEYR4iuFiqji' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fuji_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
