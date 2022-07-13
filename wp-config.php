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
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         'kJewXq ;{YlxGR|px#Ya9S1JZnQ&(19ohc=00VcrHx~,fq;/`%ZbeNo_Nvu(*T; ' );
define( 'SECURE_AUTH_KEY',  'k0G|9K2IHZloCADWlrZ#y^@_YM`&0}whGn7`wQh3c(`N4>8]HaIiGM>O5e!NihUS' );
define( 'LOGGED_IN_KEY',    'bo~Sx!sBx?NlGB-s?T~_@xp*2rZ0-]B6w.U^Q#/@{RQ9>_~mOlX~)`_zHJl+B>H<' );
define( 'NONCE_KEY',        ':Cc}KYOAb (m!ug26NvN,:  !ImGlY+A=;4*n9>|UQkfNs9Xa|RdubfhfgC^1,.|' );
define( 'AUTH_SALT',        '.7ty_/Y9me%eK5Ozc%?,vLMAXRzsvFFn+q_h{l5+:mFb6b2<J/<Ji5Ih*sW}beS+' );
define( 'SECURE_AUTH_SALT', 'tqzt5mGK)=_f(yhuTT{z{Ke_A.auqQVi)>411AV%0dcp<=#LxN^|z:Nz>p)$S/|X' );
define( 'LOGGED_IN_SALT',   '%brvR7$c!P.R+*)`aT9/H<HxkI4F~==GXkl~_]h@Y:Ml~cg4zRxZJ8y8/}a(0x,b' );
define( 'NONCE_SALT',       '/[I.y7K@r9sAZ?1(V,rPb@Mk6%@%>[^@(ZyQ_A5uv#$7/iw_57KL2H.3QKcyi3$[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ta_';

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
