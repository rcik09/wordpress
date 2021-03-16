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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'V9vP)>K3[OO7Wuvn,]. #1:FYH/Eg=%WKOe(~w;Fp]_QBTSM^hQl|l5FH,V7)Fxw' );
define( 'SECURE_AUTH_KEY',  'Ci^)5z-R)1>X=S1g2gOhQaKx.M{/[,qb@xVL|&a{vUz79Zm+M,v,QQUyMN3|{E*j' );
define( 'LOGGED_IN_KEY',    'Ml4RpQS ]aQ6![[H6}]I=6u9Sl%QQ,GTE:(fMWY7%+p{@V MvFU(G48SR71W%*C$' );
define( 'NONCE_KEY',        'lhx6~xe rp~JR{[aZ bD{|ac%:_XX0.C!YAm5XKC`4QaGMi)s$8#81X}!Y>;KM8S' );
define( 'AUTH_SALT',        'vPtU]L#qq/rnczFpKQ5WDSt|r+FRw3GaE u_k`&[SM0p[ik$b^$190N&ulP{(.>Q' );
define( 'SECURE_AUTH_SALT', '!+pzKuh=0;m]A8rtzS+|$0*-$$7&53enUCJbhkLc3?mx|PLreTCP~=YVE/Y5)!Wf' );
define( 'LOGGED_IN_SALT',   '(zL:w#XuO[k^!AE])+|mH(v.JWpG:B87c83bQ0DxP;W),,gl-/BN0Y{|MHF],VG.' );
define( 'NONCE_SALT',       'O2llV2>6b^{`8L/TPvF~_A6W,`p<zABrv*So?ebBX2ehuNFb*I-<*n|4pE@_lCPK' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ia_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
