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
define('DB_NAME', 'awaken_db');

/** MySQL database username */
define('DB_USER', 'root');

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
define('AUTH_KEY',         '8?{0?MNdjW!ltO57w`0b_YIQY@} 6JSlG-AGNF;}7$IgK(@ocsI!h3/fE0|bl?$=');
define('SECURE_AUTH_KEY',  'QUYB&eyKxZ/IXR9Wv~WR;]Q-jxx#pJ;gT,z]D_6q?6[lSOg.f(|s%l3iV1vt_(q`');
define('LOGGED_IN_KEY',    'K;{3-ZH3!Oj U(VHzcU>#|b- c}v:ae1+uowHJCp`{`Hq}/;QojVQg#|_-ZKPdaH');
define('NONCE_KEY',        '}w#6|7pncCU]D#N[iPXs3+}A*l;v;AhoT@c38(lLw&T 4`G*VNsG}+]>ANe4_1hD');
define('AUTH_SALT',        'k,F-o[uoD]r`N6#gI/.~&qm!)q1(|;JKDogaekoAlk6uy/r$!/0x+c?iTCvk.[Nz');
define('SECURE_AUTH_SALT', 'h-M(3cMya4FZ6GNv|b[[-0(@=3.@+<u$@J<.Pzek6</}O6aU9g%z@+C7^QdBVe~i');
define('LOGGED_IN_SALT',   '$Md@e(lL*3#tCGb7.3@F HTDHOM =/|Mfp8/l;~(K~UG>TdhuH7^:!z$(Le3t/d-');
define('NONCE_SALT',       '^-cS|zXbux|6)^U?X0v /A,YWbkTLw=+FvkT)[EQRP/T.kD]U{c#K66!7KP0~&W-');

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
