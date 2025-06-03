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
define( 'DB_NAME', 'teste' );

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
define( 'AUTH_KEY',         'sG:W<SP.rmQC<BaOO)^QYq_{98[nU:Y,?ZcsWEZ~#Kyo?5y,i)KjvhUe6?Mo]C~V' );
define( 'SECURE_AUTH_KEY',  'WVo8_wmZF^juT6X-p:dQ3vG&-4T9I-.KIh7Gf@dT5*z{?aj`D2?b}1gG1|<dIA,<' );
define( 'LOGGED_IN_KEY',    'QU~~0f86)^}<i*7muGnd]Lw_,F>8e)I~jx|T<b`vl^KenjW-QyeL}Ss/`|3=2wZ;' );
define( 'NONCE_KEY',        'G.RT=sqAqK(<eazH^vW?@Vl%d.<+!t_/(0Xy$|==Nb6^N2o[D7t6JRA!}0gqz2$p' );
define( 'AUTH_SALT',        'zmQiu6bk<NIx`>BQ=!/:q:V:,Gn{}S@g+TcT&:FPN] ` aZ;cUE,}]Z#ApB>YM_1' );
define( 'SECURE_AUTH_SALT', 'zs$TpeqF?a%/-]^=E@s1w+&`6T)Xtw0oixMWf}aZgxI~0i<aU.6;x< JAq]EEN{w' );
define( 'LOGGED_IN_SALT',   '10h<7,_P[xH{>_iET!}e@oWB}&$P9P5!6Ip`gP>+v IamWKn:!jPxott|j.I;!6E' );
define( 'NONCE_SALT',       'p|IjX:Mb,~^|bH^Yhr%376NDIY`g8KoOX[((~O6dDMs ?6-Lck3g>?M:5H~t0h[b' );

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
