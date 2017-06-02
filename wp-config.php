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
define('DB_NAME', 'zionturismo');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', '91XH6gTM1ut9M50U');

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
define('AUTH_KEY',         '`2x$U5@DY<(=ME}}b3y`<_u8=|tfm*u-sQy$,kI/Z@0YTf-{nIw]M-pe?Qz<.xjU');
define('SECURE_AUTH_KEY',  '+9a)B[6iv]3ErE(6iqNp0_KBE} doFckAK#rM(fqT6fo O+hlkW6]yB-jX-zN`9K');
define('LOGGED_IN_KEY',    ',D[ T%xpu;6^qjwMu7mnO<ML)p#LPf)2.NIZ~DJ0y_d_T`Zp2K5`C#%Ra$1siBzK');
define('NONCE_KEY',        '0e)(X/`@S<y8ca5<mN#$8t/_,A M!J4XJZ+FDgfuq)IQ/IiB<A^snB!,gkyoC5au');
define('AUTH_SALT',        'G+}N6)@dZg(/y$ZW>hFwUf-dFVW8rs80[#LaY8pT`HgVHEH&,pT-su1e1Uz)%!P~');
define('SECURE_AUTH_SALT', 'X^{?/vfO0<$(k=H_Fmg>:g3v@uck6g_1Gi~p#5HOn%^RQSLg9D#St5s%?Z!nhYHL');
define('LOGGED_IN_SALT',   'WEc+f}lqOXATL)y|NR(KU=d8f0aiP8}+Vjp0TE;Cd7R0Eg[[O0WWz}hSo6zR[Q_|');
define('NONCE_SALT',       '_*l/emHu)ir!ad!U7cz%;qv39@I()P{Q8tLLWQ8Bv:I}TI|y*`mpf]yOQCx1*9cQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'zion_';

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
