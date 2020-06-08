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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'base' );

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
define( 'AUTH_KEY',         'lMt1c+oI.%&d|0D-/)|I~245cJ,m{1u#k@e95>G,4&NNQ^ZyzDWoD1X/5%wz8f8n' );
define( 'SECURE_AUTH_KEY',  'u%+6<m_QLEI7|R@<)#7-Cj2mT@4v$7J&|wT^2G4(0=QY-v3pu}`g}va`hy0yl0iT' );
define( 'LOGGED_IN_KEY',    'Ulh0j>&E(sHx?6l@R&`,T<`u@yP*q-/Is8E`=7x/lG78Hji&TZ3B ^#$H2G3vJ@X' );
define( 'NONCE_KEY',        ':gliC?qjYb%R2C;1-.b!e3kRe~l~VCtW>/PNKf31:$onoh4VS/zmS~9VZ;/x~Cqp' );
define( 'AUTH_SALT',        'gO}7cHn8s~u#)<tn^f_b)op_CqZ)?>neU$U][2Yl+{7%(mI{wzq}c5Bn=!ooh~zo' );
define( 'SECURE_AUTH_SALT', 'pmHfPEv2S],bB)x,p^uV8vcq[_moQeFsf[Xo| S&6Dl-uS iBH ox4gUq7Qy!A5/' );
define( 'LOGGED_IN_SALT',   '`+ LDmoa*&CYnd!{xQ@fyp$UdpIw$j#x@h5&u#aC%ap]UPqEie+be/SWiDEW~n}Z' );
define( 'NONCE_SALT',       'xN}hg#S{ NMeNe&KN$d;P:OmEV(d8|)^zJ=ERHv,BuqnytTE(+OqS&mwWkuWW#8]' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
