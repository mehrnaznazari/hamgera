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
define('DB_NAME', 'hemayat');

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
define('AUTH_KEY',         ':X!uch|csjo}u4j0p-6~~H5h*P+B$Nw@)|6J99!#b4`_tddO//~)kpQ&nJ=^K:9`');
define('SECURE_AUTH_KEY',  '?S[E1vCwI)}/vo0UUF.oI%0B9vhXtPW,f;^7~SiqU(Nr$7+W?MbW!5^!Hux<v/Io');
define('LOGGED_IN_KEY',    'Wr~ickpye0M#i#ZdW<iRc<tOb1/LY&.um}=5hn}sXj>#IU?36tQb^.Vs`Y0RUQ(2');
define('NONCE_KEY',        'D`!%4}/Q$E=WeFE:.tE#=^V! xs4dk^v8xT}Wpw,9Z#V+GPP7M`OiqnmJq$@.YwG');
define('AUTH_SALT',        '- WE`X4-zV8MTe$MqQShaYg&heFBE!Ah@c4%/]8:e86mYF6S>`xI#$KRgX<sfpuR');
define('SECURE_AUTH_SALT', '{oKJ6%8#&4K1s.2[P$Q<9q Un)isB?Hs7;*Gn]Qj5MuL|{!2EWP+LG`Ex}*$otF4');
define('LOGGED_IN_SALT',   '1jb,>4+DXpSva9`F6a o`;7a=qI&RCPL_}0=iEYBakjTcB!M:NgIz:Ve_<3Ybfs.');
define('NONCE_SALT',       'gi@UBE6pUxm>tNqueqa-FEEuxMC$@r?V}j,EPqJOwQyQNwkCpy?FFFj(6ieWOQs4');

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
