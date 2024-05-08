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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mydb' );

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
define( 'AUTH_KEY',         'ZV~3uJ(W-tRgLhh0#R.(ah~gI}0`^)@-A Mo>TBXisbnAS_DGAR`CC^WEho@6[Vk' );
define( 'SECURE_AUTH_KEY',  'Tv#G9G<2!M!&mjQSHkB/`?,NIfwK+J@;<a>;Q+)=.= Z1#6G>%xJ{0V8U40I54#<' );
define( 'LOGGED_IN_KEY',    'c>-{]|Fa! ~Y}7zwvAK`M4/N0iwvKStY*A}Q)w>lY)a|Z,+,&).pZotGw#YVb,%Y' );
define( 'NONCE_KEY',        'D6WWEB#?M2IF{>ZJTD<1[k<7b`_)>Ov^}UJq=Mc!u}C7;/=Y<}Jq*#o#:V5uWS3C' );
define( 'AUTH_SALT',        'Clm3~2yGRg4|RSo%4LY,5Fb*&DKpK9NS:],6t/^7dIdn2OE39^(jguFIqn} $rZX' );
define( 'SECURE_AUTH_SALT', '*+e24m^Z*LQ.Nw4% N}V$8nRMIE1n0MjkQ>fyo0CF;2Pa[>qdj&9UiWv5swtY$ z' );
define( 'LOGGED_IN_SALT',   '-]4H^5@@>?,/8]X[7*@-N!RnB.OhhjF; F;v9.  v!|20xF^-?Hy*dO@kt^GCv>(' );
define( 'NONCE_SALT',       'fv  Q7bb}E!F_Cuw>7tEk`TW~4Oq9ID_y/=(Z:`w(,}]V~bS9A)`xD;%Qb![ =0Q' );

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
