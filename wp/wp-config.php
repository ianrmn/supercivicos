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
define('DB_NAME', 'superciv_01');

/** MySQL database username */
define('DB_USER', 'supercivicoscom');

/** MySQL database password */
define('DB_PASSWORD', 'supercivicosdvd01');

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
define('AUTH_KEY',         'l5H,jg2 25i&pMPUI)4%XJG;e?N.D[@+9K@XwV$9-6;itauDmaJDr!J!i|Mg@#zY');
define('SECURE_AUTH_KEY',  '~Kh=kW6|$`G;zCtWx=3-|vm(0`Rw3o][zueUXy<vdBm>A@Zz98h(z98[$1NlUcH#');
define('LOGGED_IN_KEY',    'CisrS]mWD2r_|w(hHS-qCkD4,.C$R/^O+7l&49O xS1;hMyS5vXzDQ#MaiVUK-R6');
define('NONCE_KEY',        '+Q/n@O-?yePQ8kCj2<`.cqi?z,t!e}+`?clf~wZc6/7 bu0D(T:_:PKSXil )+Ns');
define('AUTH_SALT',        'td!^$$h[+AcOo;G2d?l~QLY^P?|!a17p.ui//d5CF{-Jcri|l+eNo,?XxDc$bF-<');
define('SECURE_AUTH_SALT', 'IU~}&`uWs)x?c7ZbnijP+}<n#WZs=53W=@Uw[>6j%R.5b-IcWW9$:hBIuB+.F2+Y');
define('LOGGED_IN_SALT',   'Gt;[+O~a Qnl#hont/qpAf9:]yYvl0E%bVuRB#!ph7p}3-Efs}OF-Cl/?|U =;Gt');
define('NONCE_SALT',       'wF;0YLtcG,h%./+:R>_P/<UV+n^m6oD=Y,`l?.yH|PTk+wAgT$#*$Tcm)x;(K-sw');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
