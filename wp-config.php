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
define( 'DB_NAME', 'wprueba' );

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
define( 'AUTH_KEY',         'g(B&1EobW HZO9zD9%S3l/[8Z@;Oz2?*OQMq:*=||F6dFH5}< !-A/?Q8Fa3u( M' );
define( 'SECURE_AUTH_KEY',  'w_Iy}Jl.&@DMQZ,d(!kl/A+Q]a@bgXzCF9qMGOCWBFtqR?3*3NHmDUoe]_N7q>9~' );
define( 'LOGGED_IN_KEY',    '+63z#)8.c)jE<EQq415Eg0![1M05$O%2V{::eI!(0y9#jl*L1Pl/@H_[j*}{{lt?' );
define( 'NONCE_KEY',        'TE<1sM$_I5Y}G1D~B{XALaNMP<:O^7[[K*/1:LH?>7Q}j[XD}OU@`309J)`JdGGw' );
define( 'AUTH_SALT',        'd(R4U.%YvbYHNR#o{*#1d@?62%qJ!/tt9.|~Gi#5B@>*l1VV{QW.^:B=* ^S~B!$' );
define( 'SECURE_AUTH_SALT', 'ysLdQF(FDduOhW}$F Z*[gh~6:(XKHff/:L)OhX&<*~we,4Jr-|o)Z.V@@5m5s-M' );
define( 'LOGGED_IN_SALT',   'TdjwsveqDPCS6{JMG{|Gg1RJ-x0}6X,.}:2BG,!Ng3?a1R[+aXD#<F,P>e*Bk&6(' );
define( 'NONCE_SALT',       '$/C9nFr~ZY)K:uxsMGb>nTSK3noJ>.[1vJFn,,KXK0lrDRcU[ dPfu(To(X|{_wV' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
