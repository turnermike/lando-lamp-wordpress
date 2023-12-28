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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'lamp');

/** Database username */
define('DB_USER', 'lamp');

/** Database password */
define('DB_PASSWORD', 'lamp');

/** Database hostname */
define('DB_HOST', 'database');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',          'R+9YSEV&X/8BR`<p&]w/<W< /+85p|}k5M](-CRWFjNPgOBX7v%9h?h[OO<z?A(W');
define('SECURE_AUTH_KEY',   'eZcO53Z SXNnWjz1J*ynw@wS1WH174YIb3II$2pgo@ jR%B~_yjJV/A3 sb+8Kkc');
define('LOGGED_IN_KEY',     'y ICcy=J$wv#%Q=tuL_J#-Ebc)*k%DDH9&;ak9e04Xzpn1bPINpCDB$1kjJb{ -J');
define('NONCE_KEY',         '&DRvz<Ty-yBjI56PHf3PNJ=6oKMtgnp(%It#z|t8:ErJ.ci@59Ay]oD6;@5=vAH|');
define('AUTH_SALT',         '`OaMS)F`1<LM!pR]06zHYp+fC=>f18q3r>}QuO@N,L6~|R+]_t#fVzBIqYVBzg#{');
define('SECURE_AUTH_SALT',  'h_2]O-)fTi?7]j0lz,!IS=V&6)Oj6(mcmmr1&G*qIeou2^:wB:7s^_Pqd1%i=e8_');
define('LOGGED_IN_SALT',    '6vNG8nc- *?*s-8cq9fI)cK`j#1;$R,!FoBPYx:fp>W;o>RHPSJynb+<3(0?(v]1');
define('NONCE_SALT',        'l8HB~%%0Lpd`|ESru2HL*g!gN]@}Ts%E=_ddkV9Wx3W[/q=JT$s6blkNl(:(|#s`');
define('WP_CACHE_KEY_SALT', '5g-gN[h)M<>A7ovcW],Y2l]c;~Lt{SJ9?{?DRf>j4rquv5El!w=MqVR$W&U{EdW%');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', true);
}

define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
