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
define('DB_NAME', 'mercedes');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'X]vIiN?]6xxw45jc8]EO9HeII3{CZ&*MN-Dn f,RNf|AfaL6NA`d4:1vYT]WBO2L');
define('SECURE_AUTH_KEY',  'y/d]M6.%~7g22SnhIy?oO%p,Rf#z]A#_XmyV|k< 9^tsZ?R@K|e2gAJ)!,o+-S7h');
define('LOGGED_IN_KEY',    'I(lO8!+rNH^1M^Z6Yh4%i=?Xg?}c[.V}#N2VhKP++wF#wP[5e!bjf}AhI%kyMQ_2');
define('NONCE_KEY',        'p YD&P,igjB5>.I]Gx}RAs2`kJ<)+Ly>`D0d[($$}}o+v5nLw[76QY8Qfb@5n+%c');
define('AUTH_SALT',        'Ek~^8L*2BkuxiQPvSF4S>.bIs,UAl]`OJL#>Q98ulCQG=s)}{?{lBj./r|y|fzB?');
define('SECURE_AUTH_SALT', 'JC6FtHG$D-x]#-%oZ2ZV6#DtUg1!42`?GWf/Bn-&YT%EzX(LK{KN>99vCNe`Y*s}');
define('LOGGED_IN_SALT',   'd>#@:!QP&4@<w?=6vznrJK!0pnD;3d.+U;ZK:V2bZ?<~^)J2L/*QTZ*`l1kT6Dbx');
define('NONCE_SALT',       'tOKk?U<r ^W|Xq~TfOBJD31/AO!V6^9d?<&w)k1bb-S9R#nHKr7R<LtFa (HH:*[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'm_';

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
define('WP_DEBUG', true);
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', '0.0.0.0');
define('PATH_CURRENT_SITE', '/mercedes/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
