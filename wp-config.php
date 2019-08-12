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
define( 'DB_NAME', 'test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'phh^u=wz$J{w9vVs!%u1.R=zA{j/Fv-F6<im.lPS*wGYh:kDA]52x>ElI*#J}2r$' );
define( 'SECURE_AUTH_KEY',  'YH2#K3Q^ /RlbJ` pe7@tR8Xfv*6uC7:;<VKB4>!wgTpQ}!PS{4DH&2f+(5a<jzB' );
define( 'LOGGED_IN_KEY',    'SklJ%:sF-E`c{Oz2Kv+${O4d#_o_?@:}(]e)~ :2p3rZmxk_i-7dR(ND!mWsxA`5' );
define( 'NONCE_KEY',        'HJsfe8Yq vx$fwtOB}kGmxzI;EMZc@:#O({^~8(<>1/_D@*r06yu.1M@6GFMgKT!' );
define( 'AUTH_SALT',        'NI?-iEmOH-AE#D`^sPNY0)lE3;EC@3xVvhC{d,EWp?n }zz=?%h!*-V-XB|05UaZ' );
define( 'SECURE_AUTH_SALT', '8a}=+E^!t?u)zYe]gP2]#&T=JZ+Z`vpUkfWAkS;,F-#t1Z-[wh2!(!) 0s-s,uCk' );
define( 'LOGGED_IN_SALT',   '1jXHo<{^qJBztK/ )SntsmZv.,1qT%GkS>!Z.!0qTi^F6Dz=V{`L}Xng^EH6n.)+' );
define( 'NONCE_SALT',       'HgdF#;c,yVf}K&/j2VtL%Y h%o^aHTyv,?B}x(T:N?unJXnT#lJU@,q]]xQ#-Ky<' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
