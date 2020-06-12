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
define( 'DB_NAME', 'oldtunes.com.ua' );

/** MySQL database username */
define( 'DB_USER', 'mysql' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

// auto update off
define( 'WP_AUTO_UPDATE_CORE', false );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'POlK-s~Hwpt.b.i|V7H@d0^^KAWR};G+^2K3bzaQJ?-L$efu+tlNTt|hTK+1>7Yo');
define('SECURE_AUTH_KEY',  'O*5+ke?-6pYWBa9#:]Lsx]3<V_[|#!UPsO?PKIxqPRFK_ll-0sQWsv6k&zs3YQ=8');
define('LOGGED_IN_KEY',    '^r;bD$Aj<ATQ@EI>8|tyK4gtrLs9CCh?]wQQ5[]YQrPIBpfl^$1,688_R=|8lW?3');
define('NONCE_KEY',        ', [9Z;#HEJ6vL8WYN=U4f^`c,=F.&0y<)ui}5?5}!E/+Dmg(9Oj_82+#7j; YcA1');
define('AUTH_SALT',        'wNNY_1kF3Eb}s.<Uqr<@K~rf6-4eJ0dL7kH:gO-oL@/: %<f2>gHzvo0MxB}Wh/r');
define('SECURE_AUTH_SALT', ']3&Cna*(J=um`J+W_P70QX84<plo5R`52N~k;ziEE|JMyXYSvFGQ(Qq#IlFjQc{a');
define('LOGGED_IN_SALT',   'Ivk^Q}b5:EFbOhW8T,%tY-k<1GB%GRtc#9I-vpaH?G^47VJ3X L[VGuV}.xF3278');
define('NONCE_SALT',       ' cFEeZfbCo6j+,}%aAZ7X@GoY< *W=+&,y-BlGRQ;kAFK=H!Uh,+a`q&$r5L%-;N');

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
