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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myanimal_theme' );

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
define( 'AUTH_KEY',         'qram{`Ki|rJcyIqD=Q+wpg)c1G38X{[5jz7}N$`%=SosI~:@Ko5U|mY]IIPgv&u+' );
define( 'SECURE_AUTH_KEY',  '`y9448P:{#|<E6m8fTbox[)JVv!5LP+o>x0l)J1Z}_=}%i_!3JC?gn@;-D^c0k+>' );
define( 'LOGGED_IN_KEY',    '/]I`c9u/B|wAq9zFJvk3e<-9qjny3lDuYM!;Y~:}%8H`yjF_oLA.7;ytka!pL#Vm' );
define( 'NONCE_KEY',        'RMg;&mHXpwHX-6:oOR:I EErzV!-Z7WDd+e4cX||GcnVhfNv!u8Umu>G{Xg_M2JB' );
define( 'AUTH_SALT',        '1>tT65E#k|o:/vfScy1itYs|!WeI>$^~hc&;q*U8E/]HRfVpfg-p|o]_p=3Rgw%@' );
define( 'SECURE_AUTH_SALT', '`KkYER,v}gOy<Oy&Ce%tJzXoFb+yJ@A.n++5M^k5>@Jb|@4tgR !>BrCC4#lR!Rx' );
define( 'LOGGED_IN_SALT',   'I,W:FZ63h!w2~#),^)y[D>R4hpI._[i4+S#QZ;M!Z}Y,>jj)WV,Cc9{;6$R|.-L)' );
define( 'NONCE_SALT',       '<e|P^u}/6I!RLzVZ8Vc?nV%Ts2o!&?d4=3R0(9dvpc#F%${?GD.gk6iD_Ea>25Rc' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
