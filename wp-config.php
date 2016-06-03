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
define('DB_NAME', 'tushblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'omokhudu');

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
define('AUTH_KEY',         '721-nQ9>jt]KBnFOU!/T>[|me-EojG4r|8kwvv28/>bk78zG dv8jCorI$nn}[,y');
define('SECURE_AUTH_KEY',  '{<v2[2>kve#O){_M)M([#DDt8;*P#QN:g@tIbk/e<%zeTwb;7[+IS@sCaziO1jsa');
define('LOGGED_IN_KEY',    '`(efDS3sW/j.lU>cKgopu[rAgHYvIvDOS#clbHzcuk;-&3hoJau^)d.{j7WU)$>P');
define('NONCE_KEY',        '^=l7i~9+LAwH!*/KIzpHY.l0#B)4|nR}h=K3nCL^~e@wn2Q~D{|9cC{NlLY%[w,5');
define('AUTH_SALT',        'Gt&|~y}$cJ[x+Y+y7;8d,3U_[u$P/u*p%^<(nN()kQlF[aFO o}Szk{`@UUP4X@B');
define('SECURE_AUTH_SALT', ' tHB&MPUnPhHevH 6@O]l&c1o+:1Y&&1&fgkvLFPj_%yd>#cXq;[8 1X)P?otb!L');
define('LOGGED_IN_SALT',   '~L$gTyQ^^XK-gM&nc5I;pDO:sYaDjld9?2P> m.$hK!MXGB5Q3X28,D0kX(V/=A]');
define('NONCE_SALT',       '|uH]:OSUIQ(qu0?`wGU5Cc|P*#uGSM+L>q&XPrD*zyESi,@bn0HGaV|i@(*4860d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tush_';

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
