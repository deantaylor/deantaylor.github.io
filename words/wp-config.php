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
define('DB_NAME', 'deantay1_words');

/** MySQL database username */
define('DB_USER', 'deantay1');

/** MySQL database password */
define('DB_PASSWORD', 'Arduinodeano12!');

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
define('AUTH_KEY',         '94OhbegvCGgEZ?z@J+~/gJvik>2_@5x{^-><997!X#-J}`YT;M;`{~n|H;g*I#d>');
define('SECURE_AUTH_KEY',  'i+g_qtz{-_VXPBK>}T;t>#UTe<?h-0b6e{Vj8^5@A2(fG%gu<na^>bR0YUDo?~34');
define('LOGGED_IN_KEY',    'dX0:;8lKGYTXUlkGi#*Fa;E!2qfBamqapu)Xb4-B5.{wu;gID[7#}L/g=}~kM_R^');
define('NONCE_KEY',        '{PDM{x<lS+4tRAQ5&K0+pz:)j:`ey<vX:;P9JzH}tZ5wXpaB>Y_c-`8C=MR57n63');
define('AUTH_SALT',        '2MDKIthmf{)F$V?W(M Uf?QEY|kg`(;&0My[MV$ Lz-6PxDP|{&4EavpHvsyxQZT');
define('SECURE_AUTH_SALT', 'pGodK~fcO2R9YeLsuG?joD{5Wk3KGj/J-EXKjvXtA29B8y/T_M/<.W+m!L#2/c-*');
define('LOGGED_IN_SALT',   '-+2?)7NDv1E>v.hcvZyJ`0XZKMxh<%3e4`z;*Uh;O)EDR(!=z9b5@E4d(dG)sZ0{');
define('NONCE_SALT',       'Ef,mLDbuP_ -30}eX/ICucCT>1;}jo`_AF~a^4Qw.a8!$7.a#RCFp?|L|SR@TTke');

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
