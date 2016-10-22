<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'familyprDBggsxd');

/** MySQL database username */
define('DB_USER', 'familyprDBggsxd');

/** MySQL database password */
define('DB_PASSWORD', 'cFwWcIOzfl');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '7F}B0>7kzr|Ng+;eTmexEXPeT.62<Auiyy{*PifTm6QEATMy{<Bj$qOh1#95ODt]');
define('SECURE_AUTH_KEY',  ']6maxtm*xHeWvo|VNkYZRk8}JC8VN@w:[!4:d-soh-NGZRRld1|C81OGwo__w:dVp');
define('LOGGED_IN_KEY',    'bq3ME7Q${^7nbur,yIbYMfI770J$v}^^3>Yr]_9;iattm.xLDaTPme2]D66;H+t');
define('NONCE_KEY',        '[w[~-1|Vshh-sC5OODa[_5:]H5p_wx]_SKeeSp9;Lkcvn7UJJcU,@00|8rg@zs|@N');
define('AUTH_SALT',        'mXqA2LEATL+2<KdV|@11|Csh~-o|VOhZWsh5OGD5O~w[]~5ldwtl~xHdSOla;H9YQ');
define('SECURE_AUTH_SALT', '<y{bTnnbyIAUMIfU>B3>Bvj$eSp92LD9WL*2]#*2maxtm*xHeTTme;HA6;I+q..y');
define('LOGGED_IN_SALT',   '^<Aqf$yr,UMfXUrf3MEB3M^v{>$3jcvnj@vFcQQkY}F7WPi6]HD6PHx;.*6]exmm');
define('NONCE_SALT',       'vQc,4}7k@cx<tm+ETLb.2{Aiy{Xibq6IAQ${^b1Gt~w_OdWh:DW_1]5ixm+HSLa#');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
