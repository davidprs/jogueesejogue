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
define('DB_NAME', 'jogueesejogue');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 't1069207');

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
define('AUTH_KEY',         'EaP,fK*dEtK|~4jpEvh3@-WoYivv>Y5(^)T(_l~[Iq.M`d$&k(z)$VYvetB{v%0,');
define('SECURE_AUTH_KEY',  '5i^*B${N>OsGO?<_~&4:%u5znelFnJp&#V|%2&dx%cV:#Ul(jqMxWom*IKaF0QKT');
define('LOGGED_IN_KEY',    'srDwPq3kREI7d3.zBucZLY[2;W[]6rhLZ0q*i2)=A?0u:DjX}_Tk&?p?peiO^(WA');
define('NONCE_KEY',        'A3t0v]Fd0EPF#LVJOL,%+NkunFlTs:>e1xo#8g;ujfOPs%}I8vnV|R:PuPLQmg`T');
define('AUTH_SALT',        'ZG;_>].y)Q#gb%#}]!9NWE#m_pen&:EPp_eg3CWw.J2e*PUq,1 + @7LaIj{MW>U');
define('SECURE_AUTH_SALT', '>FL1IS=..JomPcab0OayuJk:EqJPBcJ]xP&Gp^U*1ur?EJ?*8r%G.mkMWG$ RY;f');
define('LOGGED_IN_SALT',   ']bG0Y`o8oU`?EL%<L1#?~CG:Vo1lp$qZI38wYcr2|F&[|;@[38tu:}warnak(C8Z');
define('NONCE_SALT',       '|8.~y6u2RZ:VVR`yiBMv.]qXQ38MgB6?W7w+o:7r8jpQ[c|+{~+mQd,hB@-g>thE');

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
