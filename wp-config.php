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
<<<<<<< HEAD
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );
=======
define( 'DB_USER', 'elkcityhazard' );

/** MySQL database password */
define( 'DB_PASSWORD', 'GetRad3739' );
>>>>>>> e5a9fccff1110b8772de17afbdf40f53dd172b57

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
<<<<<<< HEAD
define( 'DB_CHARSET', 'utf8' );
=======
define( 'DB_CHARSET', 'utf8mb4' );
>>>>>>> e5a9fccff1110b8772de17afbdf40f53dd172b57

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
<<<<<<< HEAD
define('AUTH_KEY',         '>Kpz+)2eD+bV_ko+U+/d6.Bni;uDo##N6q@O?$[&0;R|B[m)-4Zs_s-|dW~:Gj+Q');
define('SECURE_AUTH_KEY',  ' uP0yr9uEu`f63t-X5%OT2H]Sr]T~8&q@R7,}5;s|{Pu$FA(W$_pf@`_>sN|7X1B');
define('LOGGED_IN_KEY',    '2q.FU0oBg::K%.z*g?X5Q?wsr(A9G Fjnhu_wiE>9Eju.muoW&~<.55f:$v]%R)l');
define('NONCE_KEY',        'h9T1sA7tz-yD:i>&Y^6VRcd0Kf|@*|;ELrKxC36J7dFo?C-Yz>hbx?m^bBxn^%{3');
define('AUTH_SALT',        'EEKQ1Kp&&#ycW_i?n+H {UO|U.>exnLsmi>[jnO4XX&%oXo3#:I@$L~yh|*R@*kA');
define('SECURE_AUTH_SALT', ')8+<!!,NL+%|,./`b~A+:1P0D<b3Eg~0O+nO+5N CpDyJFRAJ5#B-+*@n%:+L4S`');
define('LOGGED_IN_SALT',   'b^_~Cu{*dB<q*Q9_J8?h2G9Ca-PcKE*X*~?D-5OEYh)HM<Z35+B,T~fS6/~SF1,`');
define('NONCE_SALT',       'jlGMg3XMI=M?2_}Q}qwm4-TQ@P[5!UDzrJtH)+9R5d*=CC>ZWbhe1hsB TaDA0i+');

=======
define( 'AUTH_KEY',         '9ZFf|GsrJ;kx!X;66p*h.tuk.=}b$mQL7_gVkXJMMs|nMW;3i*r|yz-eUV~;-Vv6' );
define( 'SECURE_AUTH_KEY',  '/RiR5GRit-?fv:gX%(-v|s10ws3]Ro[;|tSda }Cc){EMs$V96&vs^.x4i*:2#`D' );
define( 'LOGGED_IN_KEY',    'uLxD #tU/XhT@tdGNhwE2c`-=q_.0L^)%#Z$eQAX@26oU|r|+TA8J?J~`;og2MtH' );
define( 'NONCE_KEY',        'au<Y|U#Kuf=xAbNlz{>W`bJp_GA:_ke>${pSGZlNd1^$E1w}DEgW%5^b=lR_n+dy' );
define( 'AUTH_SALT',        '1Dx<r[[bc}t%c?,y%6mw8!X0u#jT+nN3l>46!TeXl~sS-oz[N^HBs!&|O/R2Jl?w' );
define( 'SECURE_AUTH_SALT', 'aV_U%H%g8/Axw*MKWNWm&2P6H0&u]#aTJA*3tFln,Cgk.w~:X^]Mp#3u89?eakp*' );
define( 'LOGGED_IN_SALT',   'P79*hy{QW3DbfuE >M$^o#y%<(:FkW!_SSR7+Th|5ITy146IzR=>sCB-y]05tzu{' );
define( 'NONCE_SALT',       'tq]jO@ IHrsfpxqH~fYEX<C:h!L.ip0PA5)rC,c<;m+/}qc $,XyKvi4p%u?IO_>' );
>>>>>>> e5a9fccff1110b8772de17afbdf40f53dd172b57

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
<<<<<<< HEAD
$table_prefix = '735hjq9';
=======
$table_prefix = 'wp_';
>>>>>>> e5a9fccff1110b8772de17afbdf40f53dd172b57

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
<<<<<<< HEAD
define( 'WP_DEBUG', true );

define('WP_HOME','http://localhost/wordpress');
define('WP_SITEURL','http://localhost/wordpress');

define('WP_ALLOW_REPAIR', true);
=======
define( 'WP_DEBUG', false );

>>>>>>> e5a9fccff1110b8772de17afbdf40f53dd172b57
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
