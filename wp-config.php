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
define('DB_NAME', 'prissolutions');

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
define('AUTH_KEY',         'DZkL`F>QQnB;H0Q5T;ABq|vN`;O#5O7H*V8Rud5xg{D|/jL^5T`/K5HvnX!S1lND');
define('SECURE_AUTH_KEY',  'w@+jis,dgm}-k[beV?r{%{*5OR+fa$u8HaytRFjCip([:DTh$qE+=7cr#`> UpQ*');
define('LOGGED_IN_KEY',    'Mri~PN0 *M;cHN@d6kRq.Hx`X?R-=k=~t-oH<+UrhQ18}`!Pq=J6hx zWOfDqMkD');
define('NONCE_KEY',        'LhKcpm1*.y^RK/|3s3wCT4{it&@$G$<]=+oxgq2JiP1@~zz5mHUne *KH5h*3FAV');
define('AUTH_SALT',        'YB;g tW>`Ttmmz7HZIGKXRjH[-u!;uzl}U]R<T;#]?_?z-m2 Bo~.{&%?!{~Iar>');
define('SECURE_AUTH_SALT', '2V]LW4?1B7buW}boe`_p]H/L563Ibs99ATz3DDFp9j_EX>M.>.mQ:y&xfMQc<G[9');
define('LOGGED_IN_SALT',   'DA7VfEuN01lzLSsKz_:]KZuSBahLA~m=~a1G}4X-+>`BYm=.!=AG?z?]sbnX>]h(');
define('NONCE_SALT',       'o@j5F@MGs=qn|m[)`MmOLC (FI=j5&`x;KV$%8tPsY))-+TG)9oTty84%1of2o&&');

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
