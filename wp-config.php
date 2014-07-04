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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '_-(h`yW:Y~sh5-Eq-]I@T#*HJmFVPMp${K]O%E_R1FhPpT.uz,THO`!O*]Q5W.+:');
define('SECURE_AUTH_KEY',  '*Yfsv4rlKXyu3K+I~q#0T/tB04+r&F&[&|B$f[eS)_g_[<Ep+Ih>p1onp1s$%PRc');
define('LOGGED_IN_KEY',    '5x1}rutx{|HG&w05%=6-u?q#e;qu+7aPui~9:eKI]ub@Z%GHcczU[d?<+f7Gempt');
define('NONCE_KEY',        'jBO(%1rbTzb{XmE* ygQ]x0g$~!<r4p>bW<>KkC|O,+&`plvlcxD 1R++y^ixHE}');
define('AUTH_SALT',        '_g(5(sKwlmb+d_jxm=IiGt%P~7+*GTgh*3aK7Xe~(+s)vt%#>G;;[cOG+$/an`R#');
define('SECURE_AUTH_SALT', '(@8-ib:Mug+AP5Sajbx5PJqeyEMbM9yY2-99;{}ls-066-p+;$M+`g97b;Ozy?18');
define('LOGGED_IN_SALT',   'I |Q{mT?7h u2j]J0alh8X[)hrd9F^~Pz!Dol015`Y:S`LB.sjDfy0IPHWSc o7W');
define('NONCE_SALT',       'rbXSh5[G:?jN(GKS>qTvP6A$W~Rr)lB/B~~3^q0XmTZ-Et+>umgb0tiJ?~`GT=8p');

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
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
