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
define( 'DB_NAME', 'equals_wrdp1' );

/** MySQL database username */
define( 'DB_USER', 'equals_equals' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Amiegibba1' );

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
define( 'AUTH_KEY',         '>,Wi*[LG}:ewFMVasQ6XmFX-0$NrkK|VvRBIsEN$(1o[Y`.c~sJA`^WIF-DBA@h*' );
define( 'SECURE_AUTH_KEY',  'S;=m~nY9r?^x+vn5`(m2#G&Lg1S^6aBc$n_ e&G!iK^~s<Ly-CXzwZqp_B+KVTx!' );
define( 'LOGGED_IN_KEY',    'mH5 kYK:`l>e0x)%CCJk U`6dHAl=rV?V,GB^E*rhL!,f45pVAjsCQ$-AQ}4o/=Y' );
define( 'NONCE_KEY',        '[*b<VDu5UUHSCOk Vii)4.-I>pWH0nJu+E:{{|i1{[otVC+(i AB=}{Ro7}{va?i' );
define( 'AUTH_SALT',        'ks]D U15cY,-,$cRb@af)+F5PWWzjM4KmA4[.IfD!Z=P&|*GQJJX!(;YA&j AxyE' );
define( 'SECURE_AUTH_SALT', 'oh;m :s/xzJ>k#EPZ}hB%4:.CJAt3B |;=xDyP;~?.TM*]+nPA )Jx/|H]ACV&/T' );
define( 'LOGGED_IN_SALT',   'roQ)yc7%Ds<mUNaCvDAez_)(:tcRS/3szzk{=0B1fEs8j2V3`#~@EL~&e>w<ca)V' );
define( 'NONCE_SALT',       'x;<y|1$&J0/wm4Pu#XiMzV{H)H:VA4}(<4VvwL$Q!G9lknBXa@N0T~_=fNV6HpR_' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'eq_';

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
