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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'leeway' );

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
define( 'AUTH_KEY',         ';&.+laM`Xwl3#yHyEzw,V_*`%09OU]%i;F4C&Jhw1o=G]I<aX[.FYB%<~:YY>W:=' );
define( 'SECURE_AUTH_KEY',  '|Z&V=VHZ!6oaw|lg)7LRRKM$K)<HA-x>L9pHU.rm<[[[IF@_ynRVyLnDg}txfhN|' );
define( 'LOGGED_IN_KEY',    'jrK>v7c~3YHf>r>,YQQ@83T+C}!$aMZ_Umm60F(GD5;32EMz7n^N+h_8`f6?a3.A' );
define( 'NONCE_KEY',        ';ADXI>0 Q6/5=Q0Vw9mLs%|(-$)1?-W7uxLo4Y&`=^cd]||:%.|>3KP0:b[UACQ`' );
define( 'AUTH_SALT',        ';d)jpj,`7*pU{1^@f|Rf=F8q4FyDzVywe^nOZp+pM:{*)].y<Bg^%?>*yaaDsJ~8' );
define( 'SECURE_AUTH_SALT', ':Q:Tuz?=Cg7 SAUMs)x5!8xbX.z]}f[:jI#iZBO^)pm>})${NoN)`kWy?3n;}3jY' );
define( 'LOGGED_IN_SALT',   ':Aq:t;k6f8U9Ta|[L{=gInQXK;2fXCTWRfg3V:jJ/;$)=o(l{T.P%eldi9O%)rKC' );
define( 'NONCE_SALT',       '`K/B<TH<KB@hbcJ7^b`aCt0Tl_&X)?L^vP8zP9$aQX?/8>c.gKl.V:Fm^Y }%Rb(' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
