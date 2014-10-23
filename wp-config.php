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
define('DB_NAME', 'wordpress1');

/** MySQL database username */
define('DB_USER', 'guy');

/** MySQL database password */
define('DB_PASSWORD', 'rabbitears');

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
define('AUTH_KEY',         'ri-X_V +Qx)Ksx5!Pe& JaAqS H/D7JYP)<D5Rb6gdCEt/wzW+qbN/T[9C-V4Z{T');
define('SECURE_AUTH_KEY',  'YZaVywM~>8JV|!Wvs>vE4<h?2A{_:PnWA.&K-CJ>U^-glC|UYCbYYM&:j*eU#Y@/');
define('LOGGED_IN_KEY',    'm)C`ozagA[:_@#c)uQHf6=ne/S3|2;A68R<[Q-uhsZL+DX6O)luqW9&`*XGnOk4t');
define('NONCE_KEY',        'A3[=+Kjy}j=/}n!i5=|xJh`8U_S&V/jMI~^-Q3p@^|C/,O,7Dqx]4/*Bu|VaUG3~');
define('AUTH_SALT',        '1_K)tba9LDs2gNX8Or]SZ@N`cNLy{GHGeJdj`@3[WkE3b2}7tzt/E6|qHdld@<`}');
define('SECURE_AUTH_SALT', 'BrkDD/CKy%T)#RF~#l!vdskG|owky9%)xFSpJfmO[qgG4f>q;-;fu!FBSD-1QIM8');
define('LOGGED_IN_SALT',   'P%=D=|lk2%-TE+[aPbj<g>Usgb XKP%`AXoH.7-G_a|~$c(oOYY3D=-.!gkG@5 +');
define('NONCE_SALT',       '-`.,epzcGu/a_r$9U(4Af1$qM/hQDTs_%o&&^#C]|?nU^?Lu-ir*vVT-OxHI}hE0');

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
