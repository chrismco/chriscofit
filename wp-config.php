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
define('DB_NAME', 'chriscofit_wp');

/** MySQL database username */
define('DB_USER', 'chrismco');

/** MySQL database password */
define('DB_PASSWORD', 'Wanette2018');

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
define('AUTH_KEY',         'yNqhS0)!e2*@!%Rsm+CVH*D5rO?b8{./+ez>&|rnm7Phv_qLpkE-N{Z0jK@>?aI~');
	define('SECURE_AUTH_KEY',  'tQQ3FK|Zd<@P$(uq}$WdcGLA89W!<z&@M| $N*4e:odhbIrxH:$)Ip.42sZ]!+]G');
	define('LOGGED_IN_KEY',    '3>N?&P+>uzDXg/WwLB]rKI%hT^x!9[+kEyHhph3yEi&z?>E|&WJy?/>xc1)*SZ6K');
	define('NONCE_KEY',        't;X?z_p&O<ExAenf1eC.-=A;B.-FNC.xFdhgBhT_,qf@v#31G{UmV<D_v@3N:xX#');
	define('AUTH_SALT',        'Tw2TkTJ$9L4A{Ut<my&-%h9bFc3=|^-1E%x8-rMQ%iWyvNi!x=ym#(b}.^_|Ca6h');
	define('SECURE_AUTH_SALT', 'c,,=eu+XVzC2|[`+M4u5R V*Q>qz[c(A|3bI+f|HFFDGj>s.`D9@MP.$I}w:|7i|');
	define('LOGGED_IN_SALT',   '/%dnCE8` Mp@Rr]K1Z!1*ffgFZI{M48<968%iloUNM?r(r/T)/USB<Otx8rS.bGt');
	define('NONCE_SALT',       'H3V|O6nSU95G+]=+L{Fjb-)3;`t;1pp+*)S;*0DG0u, yHZ=Cq$Vb_a-d~4u=:KW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'chriscofit_';

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
