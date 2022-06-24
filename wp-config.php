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
define( 'DB_NAME', 'jesus' );

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
define( 'AUTH_KEY',         '-b{zx:9L>[x5XIv,|6L,sTHx-P>5VM}~eukT%r2hx<hU|nuC`3;d9zTFG#56FRg?' );
define( 'SECURE_AUTH_KEY',  'Hpo7S<KW,cJ;=fjKbBvz~BvE+W*z_/2$z}bF2^]m|7*h8hsK}]6)&ED[vljQ>N%$' );
define( 'LOGGED_IN_KEY',    'ARs{[+Eiw6!tOJ0R(o=z%S{wIU}WI7~Bv7$yc&~N8obDFA!c$qr=x5.]@KZgbs{D' );
define( 'NONCE_KEY',        'b0%ou{r}6w~ >H>|r8^l)h]#j(aW^?><hx.gBys>@E*!Im$N#nPJMu6q|8z?qjT0' );
define( 'AUTH_SALT',        'hU/YR:&^o6_dF)rNf}=]RS3u0sRgfS95]>{a&btt+2Kx0RN}8~_:aPz(vzTj.[*8' );
define( 'SECURE_AUTH_SALT', '@t0aA`j;:zA!]yPMPg5-F%WVK#cZ~]o1KB^H:oNtcHU0HEVW/ ]=(%`Qn`:ZYIW^' );
define( 'LOGGED_IN_SALT',   '&Z&,3#,:Ll{J*3o20eDLB$%`5R-pIheAjzeD$9R^MG|K{hv>Wz,5V%Zo{Kq6xc|F' );
define( 'NONCE_SALT',       'U.Q^{C86<(u!VRB%k2%#dPZA]$<6X xI7z6b=U_C1!L_BWFS~OT8RquSv<#kE+`Z' );

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
