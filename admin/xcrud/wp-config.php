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

 * @link https://codex.wordpress.org/Editing_wp-config.php

 *

 * @package WordPress

 */



// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define('DB_NAME', 'db_trasportescun');



/** MySQL database username */

define('DB_USER', 'root');



/** MySQL database password */

define('DB_PASSWORD', 'admin01**');



/** MySQL hostname */

define('DB_HOST', 'localhost');



/** Database Charset to use in creating database tables. */

define('DB_CHARSET', 'utf8mb4');



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

define('AUTH_KEY',         '4Mm1#fp40zZ$Pxnd2l{Gb`#^*y8TeDK{!NVwoCWEAJDPWZ!Kn}bRq>:(t7%P1^GF');

define('SECURE_AUTH_KEY',  'c]_-p _EQ16:c1_zrz|U{:+Kk7Xf4wd%Wr`M_P#a84rS6*/uDpsUHu8e4/^~SC,o');

define('LOGGED_IN_KEY',    'iL;8=.[.[A+!h4G&{.`/Ne8gI7GiVVbH!RKub13iwk#B[A{9eEIU$JG=SN{NF9t|');

define('NONCE_KEY',        'UE=[AVXW)>dZq0^h7m#zJu3<b(^w~<,8Ni5z?GxdQn=xf1C%>=[[}hW#wFEUr.%]');

define('AUTH_SALT',        '(IknHI|CG+QayA*MoVSo^BwQv?Y@r@^reI5eKZZ0s5ls,ZgR,roMq*Zeya#nwAFQ');

define('SECURE_AUTH_SALT', 'r{0,PCksA-sxc)A !dADOYqM`NZ@Bu_la(X]}C6}lNZu@sor=6.g1SDg<5qfL/1!');

define('LOGGED_IN_SALT',   'Z?mubNBYwv4DF1}Mbbf!R0Xd-uod/,Mqi/TNUWYjFB:h`tR]&9lMs 1pgcR>X<K3');

define('NONCE_SALT',       'rOgpjKmHbyB;zBb7aseMU%{xi}y7RKIeCbKl&@(PHu6vN2J+sT_j,n}>?lN9[!vA');



/**#@-*/



/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix  = 'tic_';



/**

 * For developers: WordPress debugging mode.

 *

 * Change this to true to enable the display of notices during development.

 * It is strongly recommended that plugin and theme developers use WP_DEBUG

 * in their development environments.

 *

 * For information on other constants that can be used for debugging,

 * visit the Codex.

 *

 * @link https://codex.wordpress.org/Debugging_in_WordPress

 */

define('WP_DEBUG', false);



/* That's all, stop editing! Happy blogging. */



/** Absolute path to the WordPress directory. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');



/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');

