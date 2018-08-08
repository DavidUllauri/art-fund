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
define('DB_NAME', 'artfund_db');

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
define('AUTH_KEY',         'MCxLHe9oUfA76S%(&]l7P(D-s=7}FWxMrE$9$L!mjrZuDjTI<bM<]b>CZxG@5<~F');
define('SECURE_AUTH_KEY',  'y@NYSqnjz~()&?<8z-XLLstxRPt6(Kh:wu},n8Ed!Y]$/I|QqmE2oOjh%gf6AQv@');
define('LOGGED_IN_KEY',    '[H+$_kKcZaL^i ()zoV1rPdkLW^-.cFcb9@@Q> N; )+vWpE$5Hc<>{jx^(rSJj>');
define('NONCE_KEY',        '~P;2miQ ]X/u-$OE*oM/yq{!HpW`D1P!XtBS3F7M<eW* XFSvVW2]([ZHJK1<pR^');
define('AUTH_SALT',        'MG47tvY,waR{j$H*o%^-YRqjLqEG-$kxeJW]S(V;+wGZxoVhCqRZf=Yt#sXn~N`M');
define('SECURE_AUTH_SALT', 'lgyymRs{[fa0F21* Ad{GN4jHQ,JC^r4> Ug/V6[t:G(Xh(Gzy*R0vs-.5nhn91E');
define('LOGGED_IN_SALT',   '(Hr!&DYlujET[XcBTTWFt`TUr|]Un6H=0g+NH#/N]8^ 0(dL%w-v$CHX5{A/tU3T');
define('NONCE_SALT',       '46na^W&J<oMQ1}S+#9B/`0([O ID.vnP2f#z!c71M-,~Adp>^X3b4=$!PYRBWf=6');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
