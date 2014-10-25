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
define('AUTH_KEY',         'ck3{R?>X] sGPe~L?!ENPNo3P:yCSa6Mkjj!_U%Y,I_DH^WRvq><km$L{fWsWn 2');
define('SECURE_AUTH_KEY',  'UAY(mEW&y^>f9 w=qcu+ A7{vb?k>SdzRf=H(7bq0$ISW%8ZN3~:&%b4i7X!pmF(');
define('LOGGED_IN_KEY',    'p7Q>o0_XaZBLXF%z%N+oL:G8=[Kjt>[EE:[}}*r=S7[O#{)HP@pFX^#K9&4H9W@m');
define('NONCE_KEY',        'qR7=*Qo?mE?@$$E;.8U<oHa&gkb(GQT>TDX{iC@Un+6:.5)~QRv^31yQ8rCd(66_');
define('AUTH_SALT',        '>Oa#`of!tJew<@mpV7<x%+NR]CQZjv!rJ]7TmrX&kYx@E#Lks|+&Z@Me_p+.%Uf<');
define('SECURE_AUTH_SALT', ')(rtbkjBe<)JFW57>YQ$O}>UrrHy>VG!tRS-O>O{4!QDz;.Vze1~F@IM?^s@F?8M');
define('LOGGED_IN_SALT',   'XNXcQ/-|R5M+zt?m(X1.*L&!~=as+ C.&HE<R(K=f5y|ria}J9{KMwm?oE~]m4]S');
define('NONCE_SALT',       'j#(8BB(&t^Wgq.g ^zb(}4Bu3-7HoMaTDx6JKB##FO](;/iovX-N0S}c5nV4$<7n');

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
