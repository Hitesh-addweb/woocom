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
define( 'DB_NAME', 'newtheme_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('FS_METHOD','direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'uMw$nI}Kf@7anJ@7<(Fhta.D2YtwD=oJU$jAyVO2JM.Sau%giP-9yHL JS3+wrg{' );
define( 'SECURE_AUTH_KEY',  'kbMR9n%R3};PZrV>3N@{0(aLk[q*t@pid{4e1%7P2g7lBh;6VSCgeT/*ZMhD^iL2' );
define( 'LOGGED_IN_KEY',    'U6~IMO4!tRNvk07OKYexP?rxc[og7SURg[ulg0>.k9ai?Icp.Kfpi)$>@qpH8BPg' );
define( 'NONCE_KEY',        'sInE+,%4-8IW!x3[#EUJp3hmN9(lv,bcq9cfl.2Um|[98j%jEK&+?.D< )[A</1q' );
define( 'AUTH_SALT',        '4bf9TRzxuvnw`RQgBs.*9)0Oo)q*b?RgETs.OC%8f{3^fblvj Rgiy>TPwa$60-~' );
define( 'SECURE_AUTH_SALT', 'K{k|x04P0K`1HY[rdF6#2W5~bLXEvO:X[cy=o*ZQzg-q#~:fy=hC*vy.q&C>G^+V' );
define( 'LOGGED_IN_SALT',   '_<yt1pMm]HYW<d`@A&%)A+:+Fnu2BO-%hDpdHZ-{5Q5~Wo,ekO/j<n&&UrMgycz^' );
define( 'NONCE_SALT',       '91b,]OizoJKP@0#7Iy1#P-seIK!Q_YNqPn!pzAQ&f +#={unnZm^DSB8oQ=XL$q_' );

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

