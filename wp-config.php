<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'capital' );

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
define( 'AUTH_KEY',         ',OY>HOtsrAEGcZ-|o+%@0<sO=QpRaf[d@KA^Ld`SNK/,0o)11[l+1mgRJC11!gLq' );
define( 'SECURE_AUTH_KEY',  '2_J;DC?=K6A2})9j|C@A3WJHfoj`oqH9|r 4>eGLI(;/0n[,66@sw)d)!p,_luX<' );
define( 'LOGGED_IN_KEY',    'tah~UrF<~-`fu;{)O2eZ]+.EP-VxDt!Un{7t:4o9|S @&~y DJIE8*}9.=1@,A.m' );
define( 'NONCE_KEY',        'zM?x9wCK%eDBbZ#N$&YKjnH7/n}T>FA5t7Jin2v56)C*(bk6z4.]L?nJxIp#Q&Tw' );
define( 'AUTH_SALT',        'hIkG&lsAr- .14JAmZ $wRy*V2ktFK/=#|R,mN]EC<|cG55jY$UNeJ.]Q0I&.@ -' );
define( 'SECURE_AUTH_SALT', 'MB fBa5[uW.%a^L)`0>Nu{Eo=9m{XXWJL(/K(?Ay=P5M^ r#<^,=A=4QU%fW4 o1' );
define( 'LOGGED_IN_SALT',   's+#2/:{_BVbh RZ9-qj1_04zdtoD)|hP?cO{[l@Gkyy_n9an`:--Dd4A% B)RY80' );
define( 'NONCE_SALT',       'W4L[gg|E+K2@@gZB,%7NgV~FaR,R@DM=5:-v,)CWO3^+ya&84w*i![X}KA#5yE_6' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
