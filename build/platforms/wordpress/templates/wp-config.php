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
define('DB_NAME', '${deploy.db.name}');

/** MySQL database username */
define('DB_USER', '${deploy.db.username}');

/** MySQL database password */
define('DB_PASSWORD', '${deploy.db.password}');

/** MySQL hostname */
define('DB_HOST', '${deploy.db.host}');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'aJT]{6R{;E.YjC(@P6T?G)K;EChSz7p2jBpTXL>BGacr+-z-Bp?D_?Dx-Edr@K6+');
define('SECURE_AUTH_KEY',  'OEuK(?w&I-O5y)8ftdt;,5Apam]*_9;k(mr/PC.4e3$%ZXRw/ Xoa|X4{n{3ry.F');
define('LOGGED_IN_KEY',    'zCK1(~J_C~ ^48&j^n_n}8^2yycbTC43|P`e<F7LjU(xQx/INX*?b|8V7UI[AVea');
define('NONCE_KEY',        'sn(WwUn.-DEOc3pC.K17j]Mu9WHkRu|:?o04?5ITUhTjbA$r>LBu?h$v9lGUC8@.');
define('AUTH_SALT',        ']d6Vsa@k?{YX`O_Rb@5;-XYvnx*)um.`X$fou3WHwu(NUCNOooB]=1PhPY,bZ6-P');
define('SECURE_AUTH_SALT', ':9<5_GA{OmZ`AeuX,>lA#*73$24;B0Wjvi9Lv%-)1{b8qNYiMAuZf r&>K!}W>+l');
define('LOGGED_IN_SALT',   'CHe1a<|gt/99&}FDn`Zh(V=i<Qu=WmdXgqF(b7$(20rK*>[@}[ DG!]WO7-[uk~r');
define('NONCE_SALT',       'R^W1?k V Ax@^c#{D* RDwjXkN<ff;/q$2.e_R#^M.};T}>f]&T:pAcfRZ.9Ku+[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '${platform.wordpress.language}');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', isset($_GET['debug']));

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
