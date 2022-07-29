<?php

// ** MySQL settings - You can get this info from your web host ** //
define( 'DB_NAME', getenv('MYSQL_DATABASE'));
define( 'DB_USER', getenv('MYSQL_USER'));
define(	'DB_PASSWORD', getenv('MYSQL_PASSWORD'));
define(	'DB_HOST', 'mariadb');
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

/**Authentication unique keys and salts.*/
define('AUTH_KEY',         'PF1DFEp_@]LQW1P%tONU8U7)}OvI?7HkH{@L?${UZ+dr^$uQV)*o:A#knm;& 6s:');
define('SECURE_AUTH_KEY',  'W=W2N09q2C52~ =^a3`Jv&CvJdu:> y-H.+?W}@egr@.-u|U|Vji&&PA6Sk{;/Sv');
define('LOGGED_IN_KEY',    'hx |uJ+pLc]v1`#k>}[!g8CTGhj%R^:F5$BG&e[f&COlU|?xRT[||,.|PYU@vt|4');
define('NONCE_KEY',        ']>|!ch-u3_ [o;</o$#$^UTt&dufstTmV)/5kGBipSXoe/U=MF{JR+M(&SS`3b7?');
define('AUTH_SALT',        '@af-ZIP-y&~voE^utWNHGPD<JG5]-cl<CrT>Gd,h$`Ei#T#!L;w `lwx-Me_);H~');
define('SECURE_AUTH_SALT', ' [6C)W2I@aHat5LNp4x+.L+*WIgH!+2|D)w6.XTXz$_e~#$STsT6aJeq>.G$ydy,');
define('LOGGED_IN_SALT',   '&8cR(@$xqX.NC;p7qY44mt0Tdi|Id09BKqvw#%Fv5u1C)NUv+f#3:uW7u[r Jt?G');
define('NONCE_SALT',       ';^CG )Vh~cAyW#6+D.Z$.eq?Q:+/|4Rme*/nR6FEQM7keep0%~89i;a.Xk PmGG9');

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

define('CONCATENATE_SCRIPTS', false);

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
