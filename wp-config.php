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
define( 'AUTH_KEY',          'qI10FgV?e%#u#ml<e,(Fi)0>J$ <=Lpxo5@1Fq17maJXDwq-{w`zs%ZBN&k-7yBn' );
define( 'SECURE_AUTH_KEY',   '7^~)Q$H8{C:zmfA3l~lPS[40<@1n@weufQU_3zWkc4_{idLycGlU1P7_Zza$SaNv' );
define( 'LOGGED_IN_KEY',     'qK9lS|6{wi>rY5Z=n.@>)?a%{TiTI(y 9(w9,.= zZD%l.CRLPP_&Na>RWX2gb6y' );
define( 'NONCE_KEY',         '&VE[G4Yjrp}_.4w$)z~DD?!|!yU7AA2<X?,yKePQtzD?tb8r0D.:5%mK]m6S2mOm' );
define( 'AUTH_SALT',         '[ME-Sg3k-&Aa` B*ME:<!6ILQCJ_k9}mEu$2,geTNs?K#pP%q+x/6,p~?G<J,TN`' );
define( 'SECURE_AUTH_SALT',  '+$2<Rh$G_i/63UFhKec1YENgKu$fV7o@@`1tPi+E=-l-#=KLP&#^%f$Me.%j=b&T' );
define( 'LOGGED_IN_SALT',    'q<ZJJK&Xy6b5Q2,$V<@hm#6 LMDn0s~!OxqbwoUjmh4o)h`S;ZZY0]6LWX ]f3!j' );
define( 'NONCE_SALT',        '=v<$yEJxrAR&w24{WE{3.a_(xVf/c?OK9(4{jHCAcYKY*u;>^lgDb<1<7 jUQ@4n' );
define( 'WP_CACHE_KEY_SALT', 'Xs}KvRJ$ai7|L8CWnmBd~O*lT*|P#LlOd8aXP,3S= &Qm0n1.>yCPM_7Y#VY2#C2' );


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
