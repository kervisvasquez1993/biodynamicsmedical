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
define( 'DB_NAME', 'biodynamics' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Kervisvasquez1993' );

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
define( 'AUTH_KEY',         '51;_}/i9s5MT2MUq_|JJ}zuKcDj9S57C^)8]~WJaba<&F^vcu/QK @DJlts*df:g' );
define( 'SECURE_AUTH_KEY',  '[9J`92&Gss*&@[{WlzD>3$%a9TM`v6}O #Q@s.s0PVCe14ucC$IXXp}%Z=;J0bd#' );
define( 'LOGGED_IN_KEY',    'YM*{pd.qE0@>u,lc]cZ]>hrhY.5LfMc_bYQo*T4dv!OaG5d.#_yk_ck0oB=TD|eK' );
define( 'NONCE_KEY',        '*];;fAvVxNXbGiAQ5Q%%?Du?xnldkH-oZ9T#5y,7}Y]Czyo<JSR&qC|M8>miiT9n' );
define( 'AUTH_SALT',        '2;zZ-}Bfx]h[W(U08mED;q@~~ %7?cO#LI){$b<M=j/P7qF!]82._0C:xK+Xu{^]' );
define( 'SECURE_AUTH_SALT', '>Zo^^4f^Yjnb _k@Fhpp+hb `%ivysCw+N|4BU,uoNg([nK%-y&.lF3`NF]i%.1x' );
define( 'LOGGED_IN_SALT',   't4#ZNPJxHYPhO3zL(ROnwHD,*55g+h;^qg`3]xg({0xPbfZN`L]*H/o-t4RvJ7(4' );
define( 'NONCE_SALT',       ']#;#:UON/e11Vh`dLQC0gh?xVfm_vQB_fK?pz)i.emMz>ntJd$|:QK[m1f$sJ2d~' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'biodynamics__medical__';

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
define ( 'WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/biodynamicsmedical/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
