<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Puding' );

/** Database username */
define( 'DB_USER', 'Роман' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'np+*2r[w:0oFB#7oQ+iSUQ2QNO@p!8UAvWI~2ru.SeE*|V?qsWXnGD+u`4I1G_FJ' );
define( 'SECURE_AUTH_KEY',  '0Na;8-Nv.5~ckd&*Z^dhuH5~zAkW$1WB;`!S[tIHzH_@4Us8-7bPDbwX6!j% 3O,' );
define( 'LOGGED_IN_KEY',    '*3P|#t*::A*47Z#es^4>M5C34I2_JVdeHKZ,fcY.vauHo>_# t8SMHhup5aO{+aP' );
define( 'NONCE_KEY',        'smr<52s1Kp6S9>o5jctJi&BfL(_>GrY>7Y7_@MVvFo(6k!MH>jQFc7rzvIv`7TP;' );
define( 'AUTH_SALT',        'NrT:/6Dt_xO>Y)!I$7>nVjID8l5Cebxr_&.*Qx7oEuVlJYvo[zFt-:<v0A#?;u!j' );
define( 'SECURE_AUTH_SALT', '4lNDQV,?35@ji!t}g*OXLRX}/S.a*ag0lQ3>@gsR2|FSi}~ S~sPYvt1`wnwmqBW' );
define( 'LOGGED_IN_SALT',   'eL*Kw5+uIE5r=aC:f5a]F(coIXHFKfC394Z3E#~ggp|7xS{*GT 9{2}6w`bE3>uE' );
define( 'NONCE_SALT',       ']~A=gewr{FyyfH!fq0Fdvm+?!+zFam!9mI|x56!GGz@YO9L&F$-]E2LZa)!AZWnq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

// Увеличиваем лимит памяти для решения ошибок
define('WP_MEMORY_LIMIT', '256M');
define('WP_MAX_MEMORY_LIMIT', '512M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';