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
define('DB_NAME', 'digitan62');

/** MySQL database username */
define('DB_USER', 'digitan62');

/** MySQL database password */
define('DB_PASSWORD', 'Opaline616618571999');

/** MySQL hostname */
define('DB_HOST', 'digitan62.mysql.db:3306');

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
define('AUTH_KEY',         '0ErW2LcPdxvc6pRWD7I1iTchyYmaFqllpLWQXgT7QozSqa5JnG70j19N8Dx3');
define('SECURE_AUTH_KEY',  'wwUkax1NM0uICgjTXTvSxv8OFfmV5KaqAEujb6jwgjMHSrXRG4K409ldcfYa');
define('LOGGED_IN_KEY',    '7+V4K+cAvoZI/GIBchOqHRyq5Y+ewkxmF7tfTNvp6XrMcI06NWO1nxhHTDvg');
define('NONCE_KEY',        'mVUkglsvHvBRmp3l/XSX8O0aoJpu5TMzGUB35bSfCrc0N7W97ktzYorqSfKL');
define('AUTH_SALT',        'iDdErmh6DQZeikirkZYX1w54HmuReyUgxqMF3ZK2AYTUYi9qBE8DLItSvyg+');
define('SECURE_AUTH_SALT', 'Q6F9uPqYWJvIhS4UdSaFS/RonG0qtZtd48bNp33h2qfGbQBLvSuviSPFrCN3');
define('LOGGED_IN_SALT',   'nQlGBxs/B0b0OGusZBclDp1qdYet2MeDO2yfpJ++E/tOo1/VVcV3/0T2sUgr');
define('NONCE_SALT',       '5zt59dV1X3ZjmgE7m3JSbvsmS3fbXoAKqBb1SwAOxi9c7kOrQqGHoCcHd6UX');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wor5474_';

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

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
