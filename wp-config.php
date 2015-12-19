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
define('DB_NAME', 'rsk');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'y9)rGge!9`Qs_|],hK4]UG4dw0TQ>$yA7]y*c-:o+9C6UbR}Qe@@2{]|a@j,qn*@');
define('SECURE_AUTH_KEY',  '`LxLv0D;LKd<srS>:N]xC5*7gZ($;_/1*9kg$<k0sR:HB]hd7M|39H0qnE_%SiGU');
define('LOGGED_IN_KEY',    '2GPg-JqUoO25gBonNfIzranj-i9W]<20oEFbwH0|>@$rwG6?U}I>IEa|Y.FbLA40');
define('NONCE_KEY',        '-|oAYm618d/H}/x#[ 4C1uORqg0UO#bZPBFjd5D9>q:!ZLkXu]9[M|{YQS;@kJ1R');
define('AUTH_SALT',        '2VmMe|YXaMuOib>@3hr3==:]Vng#rA4;}8BR8;)(fWcD1q:-:]#4&y[sDsrXv+#P');
define('SECURE_AUTH_SALT', 'GD]{^Ti(FD1U<|b|.!c!7W0.h)lR@#0D%b|[pB7rA%EC[Fz&ddzFT|]-N12/f>+U');
define('LOGGED_IN_SALT',   'Uk h&^TI#OK.-G&R:)FTheYZ2t7X)3TE}y(#Ptoam,ITV^&-8Sf8eUPf-eu |+D4');
define('NONCE_SALT',       ';(XX7wHvM)/-qRb6T@>i_-&N@qZ~~msXhyt*}s<9U#$d*<A>[cFR,sb;m_j4E<88');

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
