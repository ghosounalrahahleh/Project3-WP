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
define( 'DB_NAME', 'task4' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'X]3@-.xX;?:I4s}I_zUsp%qVRVqn 7Sy2ipf0tRY0G(zu[]XYj5[^xI4l?i2O8d6' );
define( 'SECURE_AUTH_KEY',  '4^sP:Ai#@)qiaup+o@h}uhAG_}Cv>xd@7F9HJ0@S,b& !m<Ef:W6!j(,n:X)qN+n' );
define( 'LOGGED_IN_KEY',    'Bu/z_gzzbO&nWjI3R&Iq[)<by!}Kx9$~}ICQSNfn/ladG5&Kh2U96mvPW`*7,I2w' );
define( 'NONCE_KEY',        '[;vEb(^zvL3bG m.)e@;p4)eUPPdtSJxABxM)@KI-ZYQ4IYfeQxt4oH, ~d%ye)C' );
define( 'AUTH_SALT',        'JM]s~sKi6T@N~43%]1EQx!}t-U~fi1S+Tx]cjGlK}{E.!y9z#Qs`<)}(u!Zor-j8' );
define( 'SECURE_AUTH_SALT', 'Is_5Iw[#9?SM$wD~/OGB<3Rwdb X*oOpv{8>y@VfFBL_pGk(JC^Ura`[CoR]1Kk)' );
define( 'LOGGED_IN_SALT',   'kW6w~MG0v:d)+[`lDAAe76PC,oa~=Zw#&aiW3w:f>g{l~zU}.597:rxbd#e[;~{I' );
define( 'NONCE_SALT',       'k/7X3x}P@Wm!<wLu [m2pi:}9ait#U$I6q>ff*Uy1TeuL4B>CK-(QArD]9$bcD]d' );

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
