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

define('DB_NAME', 'thedror1_WPITS');


/** MySQL database username */

define('DB_USER', 'thedror1_WPITS');


/** MySQL database password */

define('DB_PASSWORD', 'QcqfZLZxY1ILCY5Jz');


/** MySQL hostname */

define('DB_HOST', 'localhost');



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

define('AUTH_KEY', '7e73de079f29d287991114703b461f4cc18f074c21e2452d8ad63e11f3a5eb98');
define('SECURE_AUTH_KEY', '2ca3031545502fd18dc892b84e6396f0ac6d7c23c86ad4a194b09ebc7adaafa8');
define('LOGGED_IN_KEY', '932bbe89e8c60518a2d1713950ced01f33c2e3d57afad367ec82d3d9e1594f6b');
define('NONCE_KEY', '9dceb5636fe0ec35c91048f8230c0c518a257ae050c6f456f4cfd9c100c08b40');
define('AUTH_SALT', '68a919aa858adad53a55007aed7df0a2bb856710e838e464369b35ab74db229f');
define('SECURE_AUTH_SALT', '23e93f88c57af396626afd8d8c54725221c8f2b3825ce13fae8959c532d73f8f');
define('LOGGED_IN_SALT', '4fadbeb9248b1ca1ef4bec231d0096bf2b2f0c7348d9979d007d86bd1f262468');
define('NONCE_SALT', 'a44e30be5258847453dc11e242d1ef21b770de1ac0d6af85ede4a95b8f7a9139');


/**#@-*/



/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix  = '_ITS_';


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


define( 'WP_CRON_LOCK_TIMEOUT', 120   ); 
define( 'AUTOSAVE_INTERVAL',    300   );
define( 'WP_POST_REVISIONS',    5     );
define( 'EMPTY_TRASH_DAYS',     7     );
define( 'WP_AUTO_UPDATE_CORE',  true  );


