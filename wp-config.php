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
define( 'DB_NAME', 'marketing' );

/** MySQL database username */
define( 'DB_USER', 'marketing' );

/** MySQL database password */
define( 'DB_PASSWORD', 'marketing' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'SpQjWh9iBvJ}%5oUR;s:lgJc]>LOVC!#GsKI*S>0Z_7^;i.oNH3(fw%cvQik4p0c' );
define( 'SECURE_AUTH_KEY',   'F#lf%N&hab!c-!p;o iF^R+o#_Hh~uezxTG:WFnmXA&Kp p_vp*F1(tOO@[!#}0}' );
define( 'LOGGED_IN_KEY',     'Uw|[Fs)dSb:43f_*l%JkYl_Wyu%493Ul$T={<!AmFlzt,S$%2hVYs6USw= EIX)n' );
define( 'NONCE_KEY',         '!Tg++]|$ZW8t{%&r?r5|S+S/nOqvyKWwMKoiW^:ChjOobuZ4DVM~[[=d4gOl17js' );
define( 'AUTH_SALT',         'Ro!U5TKuDo*]tS@]R5<nJXi(a4a(0?w6HZiIk573lxa*NWxy$40iT2UE|xFR(Uj:' );
define( 'SECURE_AUTH_SALT',  'Q`HdNjz29eij-yp.hFLG6XmsajR$-jed!9P_w E5=WEi[i2]]D`cBF)8U2xac@vs' );
define( 'LOGGED_IN_SALT',    'vL0<[eD?mU6{+3K0u{=T9XQH-h eOM[jPcKdU~.`j9uehkv;h5m1xJ9q>U,mGBIM' );
define( 'NONCE_SALT',        'H-z(>_4%TsC <*Cz?QF05Th@Wb]}h*M%>.(4jV$!E;Nb*ANoJ9ck9~:%bgVcT2S`' );
define( 'WP_CACHE_KEY_SALT', 'mE[^!_qCw!:$GM(y9,OqL5/k%p4,Z<m#.<mn1fC%zllE:7{<<BgBv<ps @lBby?S' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
