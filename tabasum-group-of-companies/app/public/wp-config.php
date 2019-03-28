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
define('DB_NAME', 'local');

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
define('AUTH_KEY',         'V@x85qtXXCIPVJBHstST5<O4!P&(LFXwu}ng{ |X)?_6PAu`Xwink#J6<Nlb{[}O');
define('SECURE_AUTH_KEY',  '`ukW105Pxca`Uql=fK;-r8$SlcM pt:2JeMDC6H{fHqNbQWR,BjDPqUErO>ibn={');
define('LOGGED_IN_KEY',    'e62@Cz@HQTOf WHgCFFD8i;<xNp7OcYPMaCG8m{TF]CTs@-ZLjMqpQijC]4fZ>8q');
define('NONCE_KEY',        'Uk{JL%97H.eqRay#k-CnF]946h0{jvf+<%lozs[]wV}}};m8m1k]LDqP3;S,Y*A+');
define('AUTH_SALT',        'X5l0ncT`GnIrA7:=6?ft+cWGk3z[0C0rM|E]I-eQ5c0B{(X6ht*9)nlz`r<X/)]&');
define('SECURE_AUTH_SALT', 'T`NLJ5XsG[.0|C /4FztP.UEpW.=9dmR~JPEmyTa0T&9tq*%grT-s{Ykg{>S>D^n');
define('LOGGED_IN_SALT',   'g-|7i(k<p+$X- Pn^/QJt00+)0VxpgoZlS|rks$Vwa1uJer}{:h+/1hz>y[.en2V');
define('NONCE_SALT',       'flO_:61lA[@!6sI-&`~U&04E&>aP|s^I|w^1N+z(oLcww;F(C2c9~cjZ{e17{%ig');

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
