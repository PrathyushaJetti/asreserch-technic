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
define( 'DB_NAME', 'u613173283_research' );

/** Database username */
define( 'DB_USER', 'u613173283_research_admin' );

/** Database password */
define( 'DB_PASSWORD', 'R0d&GUoD' );

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
define( 'AUTH_KEY',         '`:,iT2#@|:3r7%7zR4?O^qCIzD*vl23#+a/5x.5b.[D+@$7AwH;+, b0dD^wpal@' );
define( 'SECURE_AUTH_KEY',  '9es];w8edy.4PhsEp7:`~7?e7)J;;/vGXz*=h?|ObX;YJ9Sks7^OX:]=NuAG:RiJ' );
define( 'LOGGED_IN_KEY',    'R5Tr.cL1f?qF 2OWGWf$+S2 #?Cp{yju0<HN!J#NC#Pg.TVQO{C;recJ[kTobsGV' );
define( 'NONCE_KEY',        'USO|0(>xeuK-K6kfQ@L5FUXA$E ao[TuJu~lKpTcIz%az<8c8^1i?C^_uR<wBy{[' );
define( 'AUTH_SALT',        '5q(~4JUbjEeC#o`5.kG:N*?R[lx_pUjd<8>qF<,)?R=A8FGo-`wdbg]$p=i_Y@[!' );
define( 'SECURE_AUTH_SALT', ';?^(.#^NNXOW?/&8y7[&ge>6aeJ>pzN@a|k3fC_q1iO@.5YIU3 Wc@QtC<huiF;=' );
define( 'LOGGED_IN_SALT',   'jB+pRY4+q5JBdhHhEk0q(b6-+9#j&5iU,,,mg+!(qu%_&*P`x*Iq%%irb1?-nAA-' );
define( 'NONCE_SALT',       ']c&*Bor8(%$/,7ikVTzx$K6gm.37(7:Rxa{vCu 3{*J0D,#z`8-!D=cG<y#!l27%' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
