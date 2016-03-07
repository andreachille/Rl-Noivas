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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'mRmJegl.OBgt0*oOIacOFDvv/oL:~v9}#1i8L)/LA_(:AHpaz8bX-F;r[GN12aM%');
define('SECURE_AUTH_KEY',  'jz8Em89C!S2Qh`DC|jd:#BX*t2F3r~3+c%qwGTvXO>bb!>m?kH#UTY@9!V]UW_<o');
define('LOGGED_IN_KEY',    '{EO$<Z<NU)*!U@R]n<FD:Ir]1#J-q|ltg-y 1}.RfQ5^P|P<{*&F)W-xXZu;[p3K');
define('NONCE_KEY',        'p{EO/Q&Sb9q|!sA,qT;%m-:><9HdIva}Kt=n5yr9)(&0VmK@*>.c[dO2qTfb_XHk');
define('AUTH_SALT',        '/.[aA`qs)$]?$4Vh.r Sm5Ml|HVFi=GXNK.o)271p@vCAjz:e@:}t)qXOXh.E:rE');
define('SECURE_AUTH_SALT', '5o;-omgo%P7?sa`4Vn%r#EYylD i9q$$ZNJ?]$iP3A9L(;rR]LR!DG_t%i-,`Ycq');
define('LOGGED_IN_SALT',   '42<z(|lz5Hmm]!wZckSqi|KofUqZ3@3$f[OGXy<XR)xu5^A ~dzGx@:cqSpe|9/n');
define('NONCE_SALT',       'x{]0dR/[[tR3nlvVhT..`s<IGaiQm:!5960TMuYZh6uv5[:~eiU+d.(L-6*/4[]U');

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
