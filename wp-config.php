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
define('DB_NAME', 'fb_db');

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
define('AUTH_KEY',         '&/p;%}^{r{m!$ZY(YW$8Xt$Ic$)33M.uiC+-DGqXd{jkP8H`Il6e^^^I0EZt]Hdi');
define('SECURE_AUTH_KEY',  'jjLX,J@*#NrV5rIUzD#$,XU`/im-PAPZslK<rS*nA#L,,kC2tx*g>2`84S@+(H%b');
define('LOGGED_IN_KEY',    'o3u@zm0>TRExp?w+XP[}Y%dYyc!ICpk ViG/FNby^I88LBb(/gRQ!`*;D, >=Xy;');
define('NONCE_KEY',        'VvXDR%9Wj/FVkB38c6.J%(RQy1(:,8l6JIi;Nx4;Y.>;q43!N^:t>1 >;~?b~b~_');
define('AUTH_SALT',        'H[O.f P~Ftt;ik[?j.6f?v;Pa*tuW;kx+oMfa!h(brtTKjc4YSQ$l[o#(1>1]uCr');
define('SECURE_AUTH_SALT', '&dF0VaThHE!3Pj/gnpsK=TvB?/`3F%mfoPI&X1G8;Y+&nyi]/&x Aos&wy/vec3[');
define('LOGGED_IN_SALT',   'L>]HY=&}P}[ZGg-uNv>;>8p@c4T *^EJ1fCC$Muji/?%1< )XUk}S;XEuR]Ys}~;');
define('NONCE_SALT',       'F}t>oQ6OVgcxVTuAvo>%]7jsk!:t1b3r8ru(l,rYF3gXSPR9Jpu*P6=~wOI||S}W');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fb_';

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
