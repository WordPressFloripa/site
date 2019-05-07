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
define('DB_NAME', 'meetup-floripa');

/** MySQL database username */
define('DB_USER', 'meetup-floripa');

/** MySQL database password */
define('DB_PASSWORD', 'hohoparabensagoraehsohackear');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'soMO?|3sSR_?E7.LuX7}I.:~?}EI-t>ym45v6F&T:bux`H(0kUZ0jvsZ7FA*h+p ');
define('SECURE_AUTH_KEY',  'HsYhi1:dl0e2%B-!6z9a3:=nU?gO,M2/&SR:CS:1RS*GB{6GVBALmWpT9Q!N l5l');
define('LOGGED_IN_KEY',    'g1R6T)i;>+;$DHLbIUR2nE<a(@[ZxP^8KqvS]$O` Bp,{pd?4mWv-0Ix3VXm~<L)');
define('NONCE_KEY',        'WiK%B0KbB2.GYt)2?Nu{_&e(ekTauw0C}W%t_BJvHj#kQu4|xy1}h@8Oiq+)DDw0');
define('AUTH_SALT',        '{:g5kodKO`&-`ENo^3_ks.SdyoP7jcwUw2P8pw%8pG9~B8/IGwO/niOH.g%(l{j]');
define('SECURE_AUTH_SALT', '` LJ?I{vGW$4>0kY*hhFp~IYxA$G0qiQJ:r%dt&wG3&T;7om|sTThE=L DJiZLbg');
define('LOGGED_IN_SALT',   'iIvI4n^IV7| ECDc8$0M!uqa8C*6Z({d1qEXc#.g:kN?/],P#]KSb:`&&@qaLrN9');
define('NONCE_SALT',       'MndcQyB9@.//8/6x{IM(JE!oM6MZPjqMY2%v(X;bO,u9uaIVq;K}ijobO9H*cp9V');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
