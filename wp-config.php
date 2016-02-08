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
define('DB_NAME', 'class869_iidywd');

/** MySQL database username */
define('DB_USER', 'class869_iidywd');

/** MySQL database password */
define('DB_PASSWORD', '8P.@SN99k2');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'lpwnpwstvfgzfmvdskn6pdxvqfwqxnqmcxixj6wl3yiihowo3h8dgdbvnvfren7c');
define('SECURE_AUTH_KEY',  'zzrcgd8zisnbh8jfuhiqkhs2266zcuzkptbfcyqqrqjnoadrufjm7dtnklzahon8');
define('LOGGED_IN_KEY',    'xfxenwwdeo3sfo3ubr4zq6pmsppnfwjrvlbumvmhtau5tyu4zr1gvynsr2iibr08');
define('NONCE_KEY',        'f3a7nohh6ptp0vgeef2cicsscgwykmnf76ps0mleraliptwgtbwm31mfkcmxsesm');
define('AUTH_SALT',        '05zcldn9fgt4plvocyq2zmravyfseocurbfte24acjxfilscmuppvsemvb8vtd65');
define('SECURE_AUTH_SALT', 'gpuwcusslul3uqjzuojqbgtlzhjviktfi4kff4zv6conjsc7cdfnsezoetkzgau6');
define('LOGGED_IN_SALT',   '09gy2aa3psh3lo0o6f0fxt0ey7ddqqv2c1fa750innnguymivexscjc1dwqogvs7');
define('NONCE_SALT',       'hzczr1ib9jpspbzocnufaumkbhw4lsn8bqvtjyc06e5dffblvylmndv3xwzgn5nd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpwd_w8wq_';

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
define('WP_DEBUG', false);
define( 'WP_MEMORY_LIMIT', '128M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );
