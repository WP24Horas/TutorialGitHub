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
define( 'DB_NAME', 'm3cs162_wp_wfll2' );

/** MySQL database username */
define( 'DB_USER', 'm3cs162_wp_ahnrw' );

/** MySQL database password */
define( 'DB_PASSWORD', 'L2%Tbzef1*$TJm2j' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'FlaQXCI4167tUov:b56nQ6[~&7g6%!1F!SL~PY;RA!lBS*ujS6iUVMo2I5h68~uZ');
define('SECURE_AUTH_KEY', 'RfU@@N*9l4cN7)X2Xm0184|75elGet1_r*vE75[]#ik329jJPVYAA-/d*Sp5)9/s');
define('LOGGED_IN_KEY', '6yVS:&s[@8o/ZA+Gra4z|zC#aH(p4*8/~H3cb%jozb*P0A0fA~5B-P/IQ%6h2~4p');
define('NONCE_KEY', 'Y@kFZp)13&uO5;4)Y*7eoM7PW&*96rGl0uz[n243u78(WpmfAWK2V|4lsEe-@&Oy');
define('AUTH_SALT', 'W74]nKtH0&1!j3cmxcQU~bSw6#cEn!;@Mt2r&z]+BRK/1JB:2#4jTf_7G;+4w~6e');
define('SECURE_AUTH_SALT', ';L@7MWk6c6_VJ8m2_Y5NkI[1Olf3067U3):1(1!+86QxQqf8_x624Ekm2H~Op/B_');
define('LOGGED_IN_SALT', 'F7c#uV_4j%Jj60oU#]Jz/5~av0HPMK)IpJJv!xc][vG630+y5%s1-e_N!Z5p94S)');
define('NONCE_SALT', '(v+*a53*J(Y471-;ff(4YTg@&(4J7j61R#+G4Day3-b)mlP&86028S|C4723OGR;');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'TsanKvHAg_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
