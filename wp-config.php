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
define( 'DB_NAME', 'suite_db' );

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
define( 'AUTH_KEY',         'biMceqD9-D[q~2 H,kl>%=l_Q?0*HpNnrO9mNhP9R0bs|h}(ks&zWDD:3kDl#loQ' );
define( 'SECURE_AUTH_KEY',  'JkfsGt@OpGJhCLos5W{:Pj|]rclJu?,;4/OKekd]7TV/;@.InUjz4Dh?HVsLEk.h' );
define( 'LOGGED_IN_KEY',    'RuX<1F.~3hLxY8[vS1p.,X?]6b#eGig/|i8t^8EOqo+|!@X*Mxk${+(i5Nmg<L9w' );
define( 'NONCE_KEY',        '{;4.Q`bwe@bx%fjFcexc2yk}Di+dV{dwv/!qqVK4jkGA|l+.lBpQSF1V`HI7y*.y' );
define( 'AUTH_SALT',        '0X:AsXGNPR></F]7@`.B8T-~O}dDu3 </t#nImFXoW~W[Qv{6d/E|$Qjr};Z<|~+' );
define( 'SECURE_AUTH_SALT', '@3G i4HRA@1Gq?t7GbJ)V%q*5CJ<2fWodi0lO.0 hW|EEG.EdUYrqO; KEV)JSUS' );
define( 'LOGGED_IN_SALT',   'fS?q%K2jfNJ(p`]%55 7.4:z(.RoThhQcaBMtw&-,h?/L p;3npJ(BQ,]iFMJz:2' );
define( 'NONCE_SALT',       'jG=`T?7Vn&XgNR[u1;mOU9cO?owO]KK+3zQCe,?b`g/OzgkOn_FF4}[+B)!)wHqs' );

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
