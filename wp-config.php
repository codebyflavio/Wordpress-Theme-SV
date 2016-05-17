<?php
/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'wp_sv');

/** MySQL database username */
define('DB_USER', 'damown');

/** MySQL database password */
define('DB_PASSWORD', '966379815lol');

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
define('AUTH_KEY',         'Rb7uXLH:n&2V;.;}7CrJt9^)te}`yobdp6Zk,ik4w7T,Ip0><4P?o..=qs&46cE0');
define('SECURE_AUTH_KEY',  '@XSOyF;|~&@KDz*Z8%+ FX|_iQ@XGk)$Nm~-Hss+C~DxVYmpO.Q^CyB@@c:Ijfv`');
define('LOGGED_IN_KEY',    '5/0U1I0-Fxp>!4u<Te({+;J61]syooJtC}NsE>8!b]wEz0O|N+gr=7&phAfMOgqe');
define('NONCE_KEY',        'N,,Z~+eGfPXVo|06MHYP(_ubb6HdAZ0JDIo-2q _W+b!~JnI*#k3E@+x/|NrmeO7');
define('AUTH_SALT',        'wVV2I+Mea4i2+p.wo(_;2F@nudU2pXJX<^pH>dAr}j75|h)e-j)-*xOd%aJc?*Fy');
define('SECURE_AUTH_SALT', 'ateF^YR)G_uh>?KD`rgZ*!>qs-1_S+zN0-k~, 4f5 +elg#~;-A.J02v77+hrMN]');
define('LOGGED_IN_SALT',   '/Ke5Vg?!zNk-:%MelAqL~q/5!k]H^);3OR$C#kw!~Mg@LdjebMS<+-)a$o ~=)fq');
define('NONCE_SALT',       'yACut+tVbFt>dQq9!Zp]I9Xirv#p,IZ4?px0*i8#mVQ:SFPR]#T8B,7A}u?6Ka:H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'db_wp_sv_';

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
