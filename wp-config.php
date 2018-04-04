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
define('AUTH_KEY',         'G>eT2:H^M<W&zgX!}?zWnK%Hydw](U0LUx!C,|8(o,M.Kq`l0TH;@P!AYwByZ9<-');
define('SECURE_AUTH_KEY',  'Ah7M$M0C^=~fm;<AqZWKR|,*lka+gT^^oiJ))<o}c/pTya>wg!Z6#|w~4~q#qNCc');
define('LOGGED_IN_KEY',    'VULpT^$Q^:4owQ/!Jv.q/@n:w!wI>FQ=bM;z:]qG*YJG1E#m-&LQ9S_l-#%Js{>%');
define('NONCE_KEY',        'p/s>i]{&f!|PrAt?WAIOqjIi-@$t[~Djk|azc>u/KB{Ts$3UAU:d&>#oE%+W.0.o');
define('AUTH_SALT',        'NQIhS{Awh S*TTB $7v<{zXw[xwHd;/`62QI*rpL=(<mS5b}-Ko;9g`c9Euu=Rj?');
define('SECURE_AUTH_SALT', '}KXcP=*1;,%-nbe/p13:R& FpwID`gRM8]ZeV7Bx7O5XdC.9)K!O?)`+I~z>t4<3');
define('LOGGED_IN_SALT',   '.*a}^$Q%eiI?RGh:e:8ZRn x=r{t8y,n DpvVO.bHMN$=W2?Gxk:0BE4X$zFmn2b');
define('NONCE_SALT',       'Bjc=kpF!5s#%jw#ZZ-v],2|-)+~^tl?pW|asM{X8a88{*0FyzK*R^slY3&D,]N%&');

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
