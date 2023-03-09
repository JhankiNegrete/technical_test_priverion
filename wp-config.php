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
define( 'DB_NAME', 'technical_test_priverion' );

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
define( 'AUTH_KEY',         '8neBDB%=)AGuV3:KJg$:>Z?PWCbQWAP%.p-RwT?g@UoJ$)oy_jce(tXP#wlt3?Gv' );
define( 'SECURE_AUTH_KEY',  'hun5Ed.6klctcmj Wdje|uqP8IACA1/xwiCir<p9ogD-W!9(JpuX/quV&vK_2oa}' );
define( 'LOGGED_IN_KEY',    't_)$&PMB=iN|b J)rDE[66WG`/ciav|`SH$%]$^kyqSY/AC@LgqLeK6y@jSxhKze' );
define( 'NONCE_KEY',        'x] +LGp56UKkk(!WZcgur7d:CfgO.aWQoRFVW4G6kkd9Ln_=pPx(6+Q3KyU`0UiU' );
define( 'AUTH_SALT',        '!]=BYvbtDr(wLW*_6uiKRsV_n9V>`n=*O[w@)0!`8uv{S|7(W?lkD@1mDdtk YN8' );
define( 'SECURE_AUTH_SALT', '%)PgGBPho)*N5|F|=VLtI9=O(v`X;_fX1(o3Qv=v8=mW+lD@V$x)1?B>)U`1eQWc' );
define( 'LOGGED_IN_SALT',   'i{zpx1en%O81%s2ZA0{x<#}~iq}#Z}K}3?wop7B+1gI)uqN[>adC/zsB#:EXlIqY' );
define( 'NONCE_SALT',       '3|/UpkkMh<r3S%-`;l#xB[n}m0@fC!^/pA+Y7S`6Xr@&kL.n:Bt:L ^4K(zqs,Bu' );

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
