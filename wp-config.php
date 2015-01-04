<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'local_saraheins');

/** MySQL database username */
define('DB_USER', 'local_saraheins');

/** MySQL database password */
define('DB_PASSWORD', 'Dezzybutt');

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
define('AUTH_KEY',         '`#K|wJI|9,a&dd[`/`q!;})L9{Ij0,PzX1---}LPg(+Z.n74Ugw1-i*MK_1<9X=?');
define('SECURE_AUTH_KEY',  'T;mGm/JxmZG}Q&;lrAPyu0l_SPvq._JYCDAZujBsTHuO(e9sh5]r_fJb{%-.8BqG');
define('LOGGED_IN_KEY',    'Orz)tBB5bEW;|6c@][fs!PGM6Z|GYBy}jVW$pNjr+Fx|4|[g`>Ck:u+Y--4onRD+');
define('NONCE_KEY',        '+Cm9op!a&m(BVdrN~?ga|>Cf4Un6|:Y})whQvAei!Q,(R7W_6ob#TFmD{`Nd!7@,');
define('AUTH_SALT',        '-SH=#j,vx3ovqkM:7 vRXzQxK;HaeU_tJDNBcz<2|cmgj7/SX6Zj?H25$4$b$x^%');
define('SECURE_AUTH_SALT', '`E^s||~+x2S?r <7i])g1CwmL-nD+V<eYW,9:S| 9!jao_[OwZ,I:hZqB&3;+Vso');
define('LOGGED_IN_SALT',   'Vyy3n}^Xb0Gf[8t?g/p$..slmG1uQ+4i_q&i~BRAQ#sT^Kk%(thV<>n9MLVhiEh:');
define('NONCE_SALT',       'c5@f 3Y#qBN]@:k-uql-qZk.=durV,H-$2JKJ;,ae/:5A]l|$4cZ~zdOP~y-AbJL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
