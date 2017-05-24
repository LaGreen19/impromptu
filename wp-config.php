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
define('DB_NAME', 'impromptu');

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
define('AUTH_KEY',         '$h+u(;BB H0Xj$J%#6&/c(|uEj_@Y%6j_GoM+X@4Z<?sx=l;T*mXf6NN;iXqB ;Z');
define('SECURE_AUTH_KEY',  'IP f Uai(9:(.w>SyY`6;wo8Sg&c&E`GSZ1u0{;C]mTPq%v$}1/?-:E TwQ@>Bz<');
define('LOGGED_IN_KEY',    ':iU&F%jx)8*^X>6ewA_zuoMLpBByFjD)e/tItO~L Yg1u,Jj?[m#<Oao<-`5{w~=');
define('NONCE_KEY',        ']Gup`y@=9G>^RxbPi/xCvOBQU>`]VcMsCj!;Bmi=@t:Lr9Bw&,0#.6yD4l+VSA/f');
define('AUTH_SALT',        '*wGU%Uy25jU]SJe+=l,uJec8nO~(;JUg)`7zK^0_CVDQ;Z-W.wYJY@{rpyv!0<N=');
define('SECURE_AUTH_SALT', 'X#E[&x^=*?dvjA(cznWwW#pZq|d#+8V%5PTGkHL+Y3QQa$jFPmJ>*=jt }XWsaoz');
define('LOGGED_IN_SALT',   '0`UwMa8mA-S7xW*OeQ _*D(PHbck* z+*>r8~(ml9Tku9G`DEKKF*tqA]<0:np3t');
define('NONCE_SALT',       ':HCkf}}l~wFZs@!FeuHI-76Xhw&>*0k [MwryRzqeBRPVVn]GruV~SrJx(>oQz*m');

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
