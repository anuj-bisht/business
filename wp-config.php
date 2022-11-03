<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'business' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql@1234' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')TA?#YxK #T(2Gc{W&2Jr$Ec7Qr(<+NdxKA{=pr_6sE?SrY1Rk=~hU#t[5@o-yD*' );
define( 'SECURE_AUTH_KEY',  'f(]RgG+RDQy$IDIgfH.=MM%R$IK ?{ZK6g>l0|p`+Le#K30/<@DYK.^q&tP(YaE/' );
define( 'LOGGED_IN_KEY',    'nISVEf$$HUZt)U>@c8s~TPZ{EH2 L2$l~kIZ/fPd@ar>xm8a.Jc([cd1Ed_L^pRu' );
define( 'NONCE_KEY',        'Ut18)F&])W>PUh]3h+&d$Jmpx52AOMID+j3<vM&TYTXWi,HrZ0Lg-d[NZ,g!YY5%' );
define( 'AUTH_SALT',        '|N!.cb%Y?*6qn[0a^(YCN)n@k}w:+d$g@L<$;]IGYDg4gNe j`fa(-]`E55G;te9' );
define( 'SECURE_AUTH_SALT', 'LdsR/&6mD?IBy*{,n(8A2U|y,J6OvndvtqA2T-D0gxm2xCMv=j`/~(UVpq,crIAG' );
define( 'LOGGED_IN_SALT',   'n={CP@9qO>%VjZ[^T3e?e#a]%!H75wB<[,,gewjWq=|5)kF%#-vqa@l%EC;M+.Ao' );
define( 'NONCE_SALT',       '^Zp%,=xJwCz1yK l7WXgHky[cFo 30=63Bf<L1NPtXE^N_L8AM<)SEoHt_9*U#;d' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
