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
define('DB_NAME', '2290934_bhamsitesblog');

// /** MySQL database username */
define('DB_USER', '2290934_bhamsitesblog');

// /** MySQL database password */
define('DB_PASSWORD', 'Bh@mS!t35BL0g');

/** MySQL hostname */
define('DB_HOST', 'pdb14.awardspace.net');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/* BloG:hhA0j$(hNfMhR$qtot */
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'o7!WfwrcI]Hey&]#LzdFm.&h^ob5,g$]&cO|8#s@gIe1b%tE!+c))l9;E`~4^Am0');
define('SECURE_AUTH_KEY',  '9-Xb[Lp|A&[T+]U+y7&#du6yGCth%%8a#J7,b?Yz_YO9?XH -`0{$0fxv2GE?Jv3');
define('LOGGED_IN_KEY',    'GrM6+>UmDsO8ZSvz!/_R6ysJ`UvaC+>)FoEj=Yo0]8S<tw`4.s_(}Gh0JU=5MKiE');
define('NONCE_KEY',        'z|%GvU$5$[eaR5Ab>QO2IKP H5#M@ $&=FI+d,ZV@@i`5qx?}5=%PJx5ZEthGBP=');
define('AUTH_SALT',        '?3_O_ Knsj+vj2Buu^EMRa4J85_~+~Yf -i^~UW|}8u$2tURE%@Te_</x^{fjL]6');
define('SECURE_AUTH_SALT', 'Mf7YL.nUH ehHS vnzuL`@=R/3GTS-,@SVtmy@E9mC|pizirQ>{&+$5-8lxydk6s');
define('LOGGED_IN_SALT',   '<EENHP9~L.]2q. RdM$y>i]<O$I5m0}Thf-*I=ner.jr7whyu%4HWHPq~Z!5|:Yu');
define('NONCE_SALT',       '+1F4i{gJ%gAEWB|8HhXepWcNVhb{_nAs4/i0-C}c5J|$1JLiWGOm@..H>__$P>-L');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bhamsitesblog_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
