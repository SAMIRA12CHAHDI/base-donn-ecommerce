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
define( 'DB_NAME', 'monsite Ecommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'tHMo=0)j5FW4EitI=M=^SI/#,CdB.D*Q~9o~*CytLQa6S?|QlJ@n>}*4g3)sMOmQ' );
define( 'SECURE_AUTH_KEY',  ' ,@!b3]vS6gU^=5*:xngvEbth]_(ZxO6:3VvwP6l<IxzXvzx4;o>@H1~Htqy<e54' );
define( 'LOGGED_IN_KEY',    'X)#B1^H0l!u<f5b8L7{$!ZG7Qk4!<,xH/l|{gXa7,M_A_ci;YMD44_ww]A*-!$(`' );
define( 'NONCE_KEY',        '&Q=P~xe4OU}>}&E |&FhLxAKY4qj^}qS-2Q-~I3(G^N8/V<-!6]R[}mKgOHX@=N=' );
define( 'AUTH_SALT',        '9Axp[vOT*uu.aR9O,ea%fxyd[ZKFRH{@7o>{@KIkl**EJ6EcteL;lU0X`0>b];|<' );
define( 'SECURE_AUTH_SALT', 'BIg#D_L1W4F~E&1<?Q_V+,;M:(D.RlQlguCf}|SP<]hXxr>jRkWxFR%eN$5;1F[@' );
define( 'LOGGED_IN_SALT',   'xYVY~Ftd]C0pd`9gZdFMZ#^6M+3}{elol8XD=v`IDxb_SnA6EZCb]SGer_t&?wb/' );
define( 'NONCE_SALT',       'M{}+WK~Zh,IA8B%5R]`sg|@OQkJMS*SQR&y4G1C5../ ;(yQ}M-(]r>QN^FXK=>%' );

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
