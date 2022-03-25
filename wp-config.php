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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'inboxb1k_hkagrofood' );

/** MySQL database username */
define( 'DB_USER', 'inboxb1k_hkagrof' );

/** MySQL database password */
define( 'DB_PASSWORD', ';K{Ky2gw&R~h' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Kpa`:uy{(K>t5R#!}C4PD<JzWxu33WXt}^AA_Zf`*Ga(}Gn#~q0I>_w`J$I(z$CU' );
define( 'SECURE_AUTH_KEY',  'kA`5v6!*<~A$JxZ71ee_0nl].IazjQ1QUjCB*z=q`Sw3kdB2p10/Wv[73vwg5>HD' );
define( 'LOGGED_IN_KEY',    ')mW3W>ygVq`*8COR3W7z%L@/B]S2LzKi-^lDI(f(@XXNH`pz`Z])X]{{0^X=EfjA' );
define( 'NONCE_KEY',        'LqF+Q+5O&$QutedZ5$ho#%(;qD4xo_=4q1`mL%vA=Em?})<%=gF(+hf&0g0+ H]~' );
define( 'AUTH_SALT',        '5bF+vk_l{sS/wy;eOI{F-nzysx^iEw wZ]aCn_r6B*YTc_E~(B&SRa)8<>zJMW)Y' );
define( 'SECURE_AUTH_SALT', 'QWrzqGil+#[ggxE(HwDBKcVktEcu}yRe4w#V:9l0qxqT+wCF:/D_g~jZ*o$JVoPI' );
define( 'LOGGED_IN_SALT',   'oRR)DZ85-n3]4;.vI(DZ@w$W@g{.K-%8dN%;*3SU.$<wv[BpCU6ZZ4[`2u[M#qTR' );
define( 'NONCE_SALT',       'hl3gLO1KcF#Gu,<E%@Gn@!SVYe3,$`2%UjzDKYy?ZL-[Cw:TM%-Z{h/|zIEchtsh' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'WP_POST_REVISIONS', 5 );
define( 'WP_CACHE', true );
define( 'COMPRESS_SCRIPTS', true );
define( 'COMPRESS_CSS', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
