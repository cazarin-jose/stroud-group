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
define('DB_NAME', "stroud18356_wp_2wjna");

/** MySQL database username */
define('DB_USER', "stroud18356_wp_5qjip");

/** MySQL database password */
define('DB_PASSWORD', "%s7zWKBsK3Mp_37V");

/** MySQL hostname */
define('DB_HOST', "localhost:3306");

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'J-(j641]R+l91K8;]|;MLm61lT(56#7C87!c&1!kxF1#M1k~0#hj](2(60~(+SFV');
define('SECURE_AUTH_KEY', 'j:4U82|@*19H[h7&;+m04Qf7g&uG_5285a%W~j|sT+-kI9]D30PTU[p90wp45b1k');
define('LOGGED_IN_KEY', ')t8K9lX*vM~5F*@re&@:7q9C2D0c16&Hk901eH+7fK2B2*x;4Z1[/i]3@]/5&49s');
define('NONCE_KEY', '[b+D&tI_rqR)t;cW6yHd6aJs80p:hIUJ#6Oe;62x8y@M2tHD162AC+Rw4M216gsR');
define('AUTH_SALT', 'Jrq);0)j%9zB0Wy9q_/IIXfWeP0#yhlHUGlHR;2:Q!+dnnJj74L+SUGQR-7tR2gB');
define('SECURE_AUTH_SALT', 'f8Xwoq8]:(w4lm)kX-LYwm9;4qXZ:R9bA17&89k:8U2W25P(9nXYF;ygp7Z[U3pl');
define('LOGGED_IN_SALT', '#Lcv6SQV)6w[i994&iioW(|![%Y13QQ)2;8o7v|18W4+tP2Z(;~q!cz8Wz&0Sf5g');
define('NONCE_SALT', '@N)ro)v~GSn3-8C2/;!]5MB62*]|g&UO_r502|00zGT6-(fTtIpui0Vpg/(7z4a#');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'X88zpjf_';


define('WP_ALLOW_MULTISITE', true);
define( 'WP_CACHE_KEY_SALT', 'e708d202acf8cfd7a6d5bd132c0fb914' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
