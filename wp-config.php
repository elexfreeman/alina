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
define('DB_NAME', 'forest2013_alina');

/** MySQL database username */
define('DB_USER', 'forest2013_alina');

/** MySQL database password */
define('DB_PASSWORD', '1qazxsw2');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '7?mn7QK]EX(7U`VDiYrO0|h)d@wzy-(kIwo*G=,Y<DZB<Ft=aB{2,wHpN:4:hp>`');
define('SECURE_AUTH_KEY',  '#H/H[m%V%yYt0A7JRR]X|WfK;Q$KEgtE*}NP;D}X>#?U?dUGK6roMX)|De]-@%S2');
define('LOGGED_IN_KEY',    '^MJk_mZc.I(lkOa+-Rxeg @ys{6[eTPlk->Vf^9qGdz2Lj]OOA5nzDyr7b9W]EIC');
define('NONCE_KEY',        '*5)`?cB)QFEObB./a,cu`:>kl-Gd=E9?q~Y;x{?/^FBrc=d%2$q+#Sb mvR38U@v');
define('AUTH_SALT',        '<{ygZQdG R1^Y/|OI=c!IuMUD+o9-mWop_Nt3z%jcb{E)^$c}!~ ;y>X.4$@F3:x');
define('SECURE_AUTH_SALT', '#k<d%)j|S {b2NauwR>Pn-nZT>j3!7+.K`HR:d&Kwk1^)U>>xQQvD@Qkgj4GDnoZ');
define('LOGGED_IN_SALT',   '#GV%gI`RVZp[VxW$b7!=5$e jgUClK78<(s.]m[8B}YqMg@F?l^KRSe2^r:7v>X4');
define('NONCE_SALT',       'M;^7}kJ90hTC[Xk vh:Mh)YD%Hj/s.&_KZ F:oNRLWS)X$]kYC192Zg]yRrr|TRM');

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
