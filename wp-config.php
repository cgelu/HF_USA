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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hf-usa_db' );

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
define( 'AUTH_KEY',         'uD*h4!yHXg+Gaf&aTPj-|Da]@LrQ[m{gX^4aHdkp;wN%ji>=UD:i)E,LspUH#]e{' );
define( 'SECURE_AUTH_KEY',  'D;su5%k9/P&mY345PYK3KeerJ`|[1t/!j !{,)JWJv(l/1W.NpD( On50-V$gyhw' );
define( 'LOGGED_IN_KEY',    ':&z^MkwW9lA3?!IZ+#RlV}AgX_~-B5R0K.8i!z@|iJ/j8k3FJ%Rz~8.?*[Rx;]-;' );
define( 'NONCE_KEY',        '2,[$!H;,MS^Wovjy]2DUwAHitC|Co9dJ,gB@(%BoLVQQ75?ADHYw6T:P.fWyH+vQ' );
define( 'AUTH_SALT',        '^gmuagE.0gVn:ch!R35N<o~zFnP_]kOw&vDO@Q/~}d!WH;b_0 G%V/6-&5)h}e$l' );
define( 'SECURE_AUTH_SALT', '@2Z!&U6kxCt?=Ux@n<>AMW{q/.P[)p-c]kpy<]F:fSN.KQV@|d^8>CrGV?O0#e_s' );
define( 'LOGGED_IN_SALT',   'QCQn5|fyI$md>V^^L8Sy~j2NY-fPRn%U&{r`PWLBS{psN4.!DHno$e85B-:y-b}F' );
define( 'NONCE_SALT',       ',zr%2+r$v8-Q)]!z~?b<^UnG&1:^4emVGz[1XV)Avl3B2Pi;}*.-HkvNxZoA xd)' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
