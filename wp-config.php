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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '>Kpz+)2eD+bV_ko+U+/d6.Bni;uDo##N6q@O?$[&0;R|B[m)-4Zs_s-|dW~:Gj+Q');
define('SECURE_AUTH_KEY',  ' uP0yr9uEu`f63t-X5%OT2H]Sr]T~8&q@R7,}5;s|{Pu$FA(W$_pf@`_>sN|7X1B');
define('LOGGED_IN_KEY',    '2q.FU0oBg::K%.z*g?X5Q?wsr(A9G Fjnhu_wiE>9Eju.muoW&~<.55f:$v]%R)l');
define('NONCE_KEY',        'h9T1sA7tz-yD:i>&Y^6VRcd0Kf|@*|;ELrKxC36J7dFo?C-Yz>hbx?m^bBxn^%{3');
define('AUTH_SALT',        'EEKQ1Kp&&#ycW_i?n+H {UO|U.>exnLsmi>[jnO4XX&%oXo3#:I@$L~yh|*R@*kA');
define('SECURE_AUTH_SALT', ')8+<!!,NL+%|,./`b~A+:1P0D<b3Eg~0O+nO+5N CpDyJFRAJ5#B-+*@n%:+L4S`');
define('LOGGED_IN_SALT',   'b^_~Cu{*dB<q*Q9_J8?h2G9Ca-PcKE*X*~?D-5OEYh)HM<Z35+B,T~fS6/~SF1,`');
define('NONCE_SALT',       'jlGMg3XMI=M?2_}Q}qwm4-TQ@P[5!UDzrJtH)+9R5d*=CC>ZWbhe1hsB TaDA0i+');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '735hjq9';

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
define( 'WP_DEBUG', true );

define('WP_ALLOW_REPAIR', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
