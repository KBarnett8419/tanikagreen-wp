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
define('DB_NAME', 'tanikagr_tanikagreen');

/** MySQL database username */
define('DB_USER', 'tanikagr_tgreen');

/** MySQL database password */
define('DB_PASSWORD', 'Tgreen2012');

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
define('AUTH_KEY',         'b;q}rkb5Zca)K^qD,FbdcJ|sp}dw>:`{e*57[Yz&TZ:NJ!E4MmPX4uvGE3N/!XJ7');
define('SECURE_AUTH_KEY',  '#Vvu `r8hCgm3`_fUd`4OOt~RThY=]m~AdS$U?f2W]QO,gp@MojLx(y@JB2qhAEr');
define('LOGGED_IN_KEY',    'f_Zr_Bv hxZO<bS^ZoCJPR}vgm9Fkfpm-5*O!4wul#<-sAPbs_ktT<ah[tEX._bT');
define('NONCE_KEY',        '+H84[]Kd<l@}`8~|Y*aC5_RWg0pusnfyU69cDZ`]_D8M|VQ4[pc4o} |])]{MfzJ');
define('AUTH_SALT',        'xECBau3|}(-yPJiwHT~#12#WmCy5m+_ aprMkpQFX~%(cI<~P!0x{Pq-vQg[pt2#');
define('SECURE_AUTH_SALT', 'zsZzv*DMW}/Yi&K%2;_:TQ6D2wzlh(Ok$C#$nT^jME!q/3_<`47sJtft:oiE4L/#');
define('LOGGED_IN_SALT',   '!9gI9N{dC]O-!0HAx[AY?KkH1J2Ajr2Kp2m{gF;jUHUaxf60YZeaIv.LF1>YLb/2');
define('NONCE_SALT',       ';8[U0*~}3RF 6z~.1T1xk88a..mElrx!Zm-{Id~P{iQ/1}#ys&AYM-z77,5+DaKY');

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

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );
