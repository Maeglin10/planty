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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'A@svei:h^PdgBU)Rm([y*P_UK0FF4^0i+:XO=!vJL0[&<w)sTSgaeZ!z]_NN``,h' );
define( 'SECURE_AUTH_KEY',   '(w*K<SSfi#bN,p?)fUDZdEs*]eF42jOV5?F#g#g`xqJFcs5h(L[rCy!u!o}u a+9' );
define( 'LOGGED_IN_KEY',     '#Zoz`1`7q|NNETvj~Fn73hdf@afYQ(FwfLp},LLud.PN;g:rqREVAx|]}3h.[S(y' );
define( 'NONCE_KEY',         '62dS1fY%bh|A ~m/^[Y{+6EeJ(r|yC}J-m2D<;[0AFw#N]Q)e.,C6I`y<G<WtDKH' );
define( 'AUTH_SALT',         'nm(frQ7_k_}p~/i@)ji*%RSvZS|m)D1rY&b6e$c2Q0]%q-1<W;#`ROnC696^6 Qk' );
define( 'SECURE_AUTH_SALT',  'niqh5!VaVm8n<:6V*dgCGkeV*o_f&.y.uae:6sSWuj`]ypbeK_R7b5zjDAZYNpsG' );
define( 'LOGGED_IN_SALT',    '@WLI:g73Z7pty^8Fxm!C;ilC@S)3p_fz?s;IP%Z+GnBU gI|(9zqtq@0feJRY2VA' );
define( 'NONCE_SALT',        'i?ch.~Cea6$BG`uFnP|*&#J5)vL,_y)Ru]/P>9}dO3T(r-64n$lBytefZtL`&+J(' );
define( 'WP_CACHE_KEY_SALT', '3qdwK_>%aDC<J+2Sxa9[kAvMY cR^_Cyw?-v-(oC_#g4vLC]=&;Ad?[lmFi0H]*(' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
