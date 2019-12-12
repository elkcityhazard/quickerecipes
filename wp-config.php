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
define( 'DB_USER', 'elkcityhazard' );

/** MySQL database password */
define( 'DB_PASSWORD', 'GetRad3739' );

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
define( 'AUTH_KEY',         '9ZFf|GsrJ;kx!X;66p*h.tuk.=}b$mQL7_gVkXJMMs|nMW;3i*r|yz-eUV~;-Vv6' );
define( 'SECURE_AUTH_KEY',  '/RiR5GRit-?fv:gX%(-v|s10ws3]Ro[;|tSda }Cc){EMs$V96&vs^.x4i*:2#`D' );
define( 'LOGGED_IN_KEY',    'uLxD #tU/XhT@tdGNhwE2c`-=q_.0L^)%#Z$eQAX@26oU|r|+TA8J?J~`;og2MtH' );
define( 'NONCE_KEY',        'au<Y|U#Kuf=xAbNlz{>W`bJp_GA:_ke>${pSGZlNd1^$E1w}DEgW%5^b=lR_n+dy' );
define( 'AUTH_SALT',        '1Dx<r[[bc}t%c?,y%6mw8!X0u#jT+nN3l>46!TeXl~sS-oz[N^HBs!&|O/R2Jl?w' );
define( 'SECURE_AUTH_SALT', 'aV_U%H%g8/Axw*MKWNWm&2P6H0&u]#aTJA*3tFln,Cgk.w~:X^]Mp#3u89?eakp*' );
define( 'LOGGED_IN_SALT',   'P79*hy{QW3DbfuE >M$^o#y%<(:FkW!_SSR7+Th|5ITy146IzR=>sCB-y]05tzu{' );
define( 'NONCE_SALT',       'tq]jO@ IHrsfpxqH~fYEX<C:h!L.ip0PA5)rC,c<;m+/}qc $,XyKvi4p%u?IO_>' );

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
