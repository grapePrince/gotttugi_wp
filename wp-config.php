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
define('DB_NAME', 'rahata1');

/** MySQL database username */
define('DB_USER', 'rahata1');

/** MySQL database password */
define('DB_PASSWORD', 'rahata!2qw12');

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
define( 'AUTH_KEY',         'pkJi Vw|(Dy$W:i:572d4*XU^3`GCAZf1bb|=wemH3KY~eu.Lk YpgV6VXQO9aN/' );
define( 'SECURE_AUTH_KEY',  'uOEoPB<)X4ci59pK!S%ZruMo~a#ODvl]f2bVu(_6h(V @rf8Uem8P5h9&zmWU;O5' );
define( 'LOGGED_IN_KEY',    '<ftYbk<5O6pYH<j~}b9KfPF;1(|@/:10xe^`fME<uBIewF-F3(qCH`3AyjWP?P-0' );
define( 'NONCE_KEY',        'VCD_Q8{+7ZXm f/3NTs<_Z$w|Y3l@ >rxK|F_XuGlck^<OP+yp:n[a!/O+/UY&{U' );
define( 'AUTH_SALT',        '(b:<omW)uG@C%+ja9$|cr:6:jU]0dfj7w6(a_l+K51=sL($ZdZH{,m44B.YXJ!_~' );
define( 'SECURE_AUTH_SALT', 'Bs15KKXcel+U:kOSbzUIcB<Y.&5&f5ogCL&U7yVM=;yI!Q=R.8pAws:}{o&@+qm-' );
define( 'LOGGED_IN_SALT',   'JWC<9LD,Dk$);KTh]YtoUxi>gnOLr>laW.K5rwy^6-VY=U-woexCH)umnr6mTCl!' );
define( 'NONCE_SALT',       'hj*2`kp:g$hfqe+#Q!!aH/LMcY~)VqCW]&(#D2MWlQh#!pW2G:WH;TCA[G6:68-!' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );


/** global variables */
define('BASE_URI', get_stylesheet_directory_uri());
