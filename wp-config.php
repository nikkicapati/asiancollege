<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'asiancollege');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'pass');

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
define('AUTH_KEY',         '63@>0+@[*2si2)/Yhp6T}hZ-5JXxhs59}Ln8o~3/qsPT5m&[z26XCw S:*+H6m|7');
define('SECURE_AUTH_KEY',  '.LjbSY^;$/%b7%D?#_s^T;<h!> ;:E|O1qbn=9nzj045|*|?oq}&Vw|n.eX{F3j]');
define('LOGGED_IN_KEY',    'O.O:&|G.[GI2!ws[7WtrG+b08&zx:GwgeGlIS&Ff,oME<W3:gnZ~5T-<Udwe|z*[');
define('NONCE_KEY',        '7WDtky_1pV.0N0JfgVN-hQnojs:b:Byb|j|)6BuD@OrYqiXFkX`&P0090`7X#x$3');
define('AUTH_SALT',        '<3}3g!SE`13^kkIH-l!^fGQO]P9c:7Dtt)|hI6g6{*4#|%)5-c+0hk-&J4b3w|){');
define('SECURE_AUTH_SALT', 'MQ_l7Mu$u0Eqk=|M[?rf[.gka9je(G#}-1Dr?dYDz5]|sImPR}^:$KDCw+m5!oAA');
define('LOGGED_IN_SALT',   'shTW?M!d,S[fx&.Qt4!T6{#2/Y5)-%D%dJwcRvSNmCV(-9+_)G74M(<2Oi]29@8P');
define('NONCE_SALT',       'iG{+A^c29-u]^x4U$td!9py*]OpDU!21)<yf*Gs&QhU1mN<p<U}ZEU]|_Jc~BRDF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
