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
define('DB_NAME', 'thesweetDBem2k8');

/** MySQL database username */
define('DB_USER', 'thesweetDBem2k8');

/** MySQL database password */


/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'rg,F~KwHp5h[Vs+*Lx2WtDl6Xeq.L+HpAJf0Eb<T^M9R@JwGo0Yv~Lx]Wp|d-T*7');
define('SECURE_AUTH_KEY',  'ip~Hw^IuEqBf3b<TGo8gFr,Q4c>~KwGo9h1Z|uEm6e]W_O-HQ$IqBj7fqA|R@4c>');
define('LOGGED_IN_KEY',    'YjzFrBj3u~Kd[V!NzFra#S~LxHp9d[7j3b<P+HtEtDl6d[W_O-GP+IxEqAi2a#vFn');
define('NONCE_KEY',        'aa2a#S~G7fMyMyEqAJvGo8g0NzQ$l5S~KwG-GsCAi2a#e~LxH0Y,Q$MyEqAisCk4');
define('AUTH_SALT',        '_HW_OwHsDlT*IyEqAi2t#4c>U^MyEn7_O-G@JwGc>ge]i2a#S~KwH^X.PqIu2a#4g');
define('SECURE_AUTH_SALT', '!z0M~Oh9K~1hw<6q*PeAL~Q,7n$Mb3I$oGR|4ozNcSh9W~DhwKAq*Tt.WmDrFn$Qf');
define('LOGGED_IN_SALT',   '[9dwGo9g1A+2t#S~e]H_YBQ3b<T*My!8zFrCk4c>UHp9h1d[V!N-.P+HtEm6a#Go8');
define('NONCE_SALT',       '>,Y,B$3b<5d[V!NzFsC@T*LxHp9-2ZDIuEm*LxEqACk@JvFnMn3|Z_5o9d[V!NAi6');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
