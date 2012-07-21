<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
 if ( $_SERVER['REMOTE_ADDR'] == '127.0.0.1' ) {
<<<<<<< HEAD
  define('DB_NAME', 'gcb_wp');          // The name of the database
  define('DB_USER', 'gcb');            // Your MySQL username
  define('DB_PASSWORD', 'gcb123'); // ...and password
  define('DB_HOST', '127.0.0.1');       // 99% chance you won't need to change this value
  
  define('WP_HOME','http://localhost/~sleepyxivo/gcustomsbrokerage');  // Local Development URL
  define('WP_SITEURL','http://localhost/~sleepyxivo/gcustomsbrokerage'); // Local Development URL
} else {
  define('DB_NAME', 'heroku_72ad7a228ed4ac4');             
  define('DB_USER', '079f8d4c8a2ca6');       
  define('DB_PASSWORD', 'ad786909'); 
  define('DB_HOST', 'us-cdbr-east.cleardb.com'); 
  
  define('WP_HOME','http://gcustomsbrokerages.herokuapp.com');  // Can Be Domain Name
  define('WP_SITEURL','http://gcustomsbrokerages.herokuapp.com'); // Can Be Domain Name
=======
  define('DB_NAME', 'db_name');          // The name of the database
  define('DB_USER', 'user_name');            // Your MySQL username
  define('DB_PASSWORD', 'user_password'); // ...and password
  define('DB_HOST', '127.0.0.1');       // 99% chance you won't need to change this value
  define('WP_HOME','http://localhost/');  // Local Development URL
  define('WP_SITEURL','http://localhost/'); // Local Development URL
} else if ( $_SERVER['SERVER_NAME'] == 'appname.herokuapp.com') {
  define('DB_NAME', 'heroku_db');             
  define('DB_USER', 'heroku_db_user');       
  define('DB_PASSWORD', 'heroku_db_password'); 
  define('DB_HOST', 'heroku_db_host');               
  define('WP_HOME','http://nameofapp.herokuapp.com');  // Can Be Domain Name
  define('WP_SITEURL','http://nameofapp.herokuapp.com'); // Can Be Domain Name
} else {
  define('DB_NAME', 'domain_db');             
  define('DB_USER', 'domain_db_user');       
  define('DB_PASSWORD', 'domain_db_password'); 
  define('DB_HOST', 'domain_db_host'); 
  define('WP_HOME','http://domain.com');  // Can Be Domain Name
  define('WP_SITEURL','http://domain.com'); // Can Be Domain Name
>>>>>>> 5ecc0cc153fba6c2aa01e735405b73d27583f506
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'gcustomsbrokerages info');
define('SECURE_AUTH_KEY',  'gcustomsbrokerages info');
define('LOGGED_IN_KEY',    'gcustomsbrokerages info');
define('NONCE_KEY',        'gcustomsbrokerages info');
define('AUTH_SALT',        'gcustomsbrokerages info');
define('SECURE_AUTH_SALT', 'gcustomsbrokerages info');
define('LOGGED_IN_SALT',   'gcustomsbrokerages info');
define('NONCE_SALT',       'gcustomsbrokerages info');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
