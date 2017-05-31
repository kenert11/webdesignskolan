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
define('DB_NAME', 'wds');

/** MySQL database username */
define('DB_USER', 'kenertwds');

/** MySQL database password */
define('DB_PASSWORD', '1W0hljFiaYrEib5U');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
 define('AUTH_KEY',         '}Yy/R.S Q<-XC~C?0 &`/QNQ%@-F<jTQKh)yzT&i79x)hZRxQR)uCnJh4R*MLk8k');
 define('SECURE_AUTH_KEY',  'A0[eWBY@(y/R1BN_B+ n=,nITc9__!IiHxQ+XD_*b@|vyI9cKkFAU/M~oF|3MN>3');
 define('LOGGED_IN_KEY',    'n#,v1$((TD`y]VdF(@w3zv,_2@it8 f1F&m0{fH($AneJV!8iYWFQRKO,,ew=S+T');
 define('NONCE_KEY',        '-[f#|dh%9^dwTXl#G^X+A?7-=Mo}BGaN,vav` qJO(+15ug9!^!2-gM8%h.W]Frw');
 define('AUTH_SALT',        'tXYK9Tu-Lgr6pmLGYyJ!o58m4oWOi;y(JGe1:f&PU|@&bG_k%6]O#^5$A y=B_u,');
 define('SECURE_AUTH_SALT', 'Vo]ltmN=PdkQzFO{9q`lK]`!y7:ClG|3Je3o/iW$Fd3aXAJLl~2~*LHv+s&[8bP+');
 define('LOGGED_IN_SALT',   'MlFy;trS3Aj4P1Fx/>!E$%Tu}WD.#u9:j8Hob?E:-}MkkM_dmfD.|%8n#6dNvllN');
 define('NONCE_SALT',       'jPq5-{L y-l?}I@mC4Ty:c(:Qs.mj f+AKgcVB1d3vC&5Wa`o]w-3$iFqA8ddvFn');

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
