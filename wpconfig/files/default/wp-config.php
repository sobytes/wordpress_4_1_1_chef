<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('WP_REDIS_HOST', 'wordpress.d5paub.0001.use1.cache.amazonaws.com');
 
define('WP_HOME','http://d1e7ub4jqerqzl.cloudfront.net');
define('WP_SITEURL','http://d1e7ub4jqerqzl.cloudfront.net');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'wordpress.cduem6w6blu5.us-east-1.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'J%pITobI1-zf<0ID?|R~@iMqt.x8mO-+-i!0J BA<z]s|S4:q]SU.Ru%)oA9>#X?');
define('SECURE_AUTH_KEY',  'GT}SLu#=RGxi >d_+bTPpSCabQZP][4{MA2,vL}-E&<,AAE{MPj-Key3Ae+6?tf>');
define('LOGGED_IN_KEY',    '`rHj?qdV52uG,>RA(k!pw+LO%w{1WKib9IS/4s8~+<6>K3bRGdzQoRFlJ}r*L3??');
define('NONCE_KEY',        'ont^yjL)O_]2QA+!Z]$meGBDC@hZ&X@+L/Gh?y]+ek;@nPtg3/*lOH,~K#=K9CZG');
define('AUTH_SALT',        'jCy>*k|MA+V;gfL-PPF:m1}`c`nG%BXUmb+[3#CC`2=YI@oHMPv~hDzmI9m nub-');
define('SECURE_AUTH_SALT', 'Go({Yb6$*`BmjW8#H(X_ly(j-9V3m7JL}pXMTas{#$|$rx4noe-!G,L]4F7p+5dS');
define('LOGGED_IN_SALT',   'TFiPg^)g!;z68vpZf4bLU0K)pNMV-K1JQ)sZUZTwHB33rYU%e]*Q5}nr+lc[K/|]');
define('NONCE_SALT',       ']F+.nFqxeB]n=G|<xP<<*@fPMmn R<fv>-lGx^v6[)c.MRy*<?nE2u/cX9,:k|oe');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sobytes_';

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
