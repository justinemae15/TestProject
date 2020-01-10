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
define( 'DB_NAME', 'testproject_db' );

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
define( 'AUTH_KEY',         'R,+VEd=xK.h(1<U(TNX9_$0F$n<e`tRAb2H$QJiu1JmJClqad[dITbsMQ:t&Jaa_' );
define( 'SECURE_AUTH_KEY',  'JP|/x$A:7|B+PZ4nFBVlsN_(,JAKdX|N_9XMAtP&H$r^z^9OM.3y?e09iAh^WeiT' );
define( 'LOGGED_IN_KEY',    '~rE}wc*0dn9@f*(;:{5m xK|H!wV}OM+/Tkbv3F:w<o<$RuGOX mQQ6j)@c@,u7 ' );
define( 'NONCE_KEY',        'GZFX}<7$F94B?R?c{c3^Sab_Kc<zM$EjbU]EHhh$~t`BWUTbG&hw[;L7ILX3wBdD' );
define( 'AUTH_SALT',        'do9.TLI88Gul$i{A%^lm|!4Du;^EKR QPEf2D8-$7^+E>_**L6M[eH>!Q:2ah_,>' );
define( 'SECURE_AUTH_SALT', 'TH5KIE|[Uh]V6~1.Co%M*Wyh%;]b]gop|R-lCWw]i2B1`zNaUJQ~:W?p8+qYcg|+' );
define( 'LOGGED_IN_SALT',   '=Id:~{JN4?7[6q?h_.@!D,j|S$jGWS=Sc4?PALzB)c<U=b0V{!iLI1IGv*2G;0*@' );
define( 'NONCE_SALT',       '9$:mE<Mmu?LyDiKQ^ 8%t]*eIDQ4a6%#t{3?Gqfex!jR)hm_J]*_7;NR=K=rkP$?' );

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
