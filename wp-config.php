<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'restapiplayground');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         '.RPgl_caE+dI_ :NxY8_ !/w=Sod`V;IU_Uo(;Oq d|XmGryhU!5F*hR@qb>d]J=');
define('SECURE_AUTH_KEY',  '+os@-D4pjSI/t7vwS;i^f^A>B1OvmJX)hUCZ&C.JY[w%SNjYZ+};,+o.-5JFcoZ+');
define('LOGGED_IN_KEY',    'FjC*Z[{|/N2mGb3I|-3$-?YB@Bm(dCk>jZc-.7`vJXpSAjac4(RH+.mE?/k:8SP.');
define('NONCE_KEY',        '$;a+ (f+YI#27)ML|,:g`iNi~3dXr3mu<!++!(bNg? >a`>$Q<d0/mJ.#2p.d*V8');
define('AUTH_SALT',        'U++r$mtjU8vW+[/]K{hDo+Ibwc8Y>co.)F(tp5p;+#|Jum{[id-2-8oh1ch+1Jbu');
define('SECURE_AUTH_SALT', '*%;l(sX:7h+G>JZc|a%NUk]<Zk,Nx;~ 89S@,.t0-K,QKn%aZgGp|M|~>mc^uQ*h');
define('LOGGED_IN_SALT',   '#9i=xlLGmUS%DWOv0v/D;T|a#]J^dK6uD=+YHx6~#1vUYn,<#XiN~)-,Sq%m7toL');
define('NONCE_SALT',       'JF(tTo%fu|Va]M%@,p-a|o,0I@03{yWslfUkUL&5cx:UM)fJ9%vZI_uG#K6mjumP');


$table_prefix = 'wp_';


define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);
define('SCRIPT_DEBUG', true);
define('JETPACK_DEV_DEBUG', true);



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
