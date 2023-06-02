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
define( 'DB_NAME', 'juliecp_dk_gungun' );

/** Database username */
define( 'DB_USER', 'juliecp_dk_gungun' );

/** Database password */
define( 'DB_PASSWORD', 'Kompagnistraede25' );

/** Database hostname */
define( 'DB_HOST', 'juliecp.dk.mysql' );

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
define( 'AUTH_KEY',         'L9f.kcT$Ubj0]|Y&Y|Rg/<QKK1vFtBR3+lS;;FmRXXn?p&8}&7YtM_m1)BIJ4qXD' );
define( 'SECURE_AUTH_KEY',  'ZNaRtKrd4Ig?woIiUej9Tu{e8bsXhS&|Hfjd7`+r8xd[KT8RYaSh!Fc~SOk<50Q%' );
define( 'LOGGED_IN_KEY',    '1Dspcc9<3[2#,(]xh^^dya3GpIcp&9JAwn&u(`xEmpw;l{xWuwmC1.YFrdyn^gLp' );
define( 'NONCE_KEY',        '726e2JUbBR2WYu.sLxSbcQmx~wjrl%N}x6{HH&v.jg#(Y~rs=&qs0Uv46R)%_.B`' );
define( 'AUTH_SALT',        'CYEP4qjw-u0D~%<yd(?x.7:{_e>Wd:a}z.ygs2-Ivt{0atGW7Z`OmT Dv/@JMfhl' );
define( 'SECURE_AUTH_SALT', 'k&`PPUS;g?jc!Xp>/Ut(QWp@lHdt:^|PD5WsD9)VoF^l2x4nKl+^$Br5Vw,d%|E ' );
define( 'LOGGED_IN_SALT',   'yz*)!I8+YQgnm.(?}xsF6Ces6rT=`~!b%Gl=Ic>)M6==)q?;#gUN@a0`=,>8rP2Z' );
define( 'NONCE_SALT',       '<Flb&C]1^]c9=LdL_hKYQiql/nTc!Y.YV+$$ :QNbEZDhMwfGl3v1[Al^/=@a/6U' );

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
