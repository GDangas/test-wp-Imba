<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'wordpress_imba');

/** MySQL-databasens användarnamn */
define('DB_USER', 'root');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', '');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8mb4');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');


/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8m1}&+f7, h|aTjW|(I6?6CGy:eG1-D^|R/V `{`A|sh#x=tZCFk(C|T&xZ22]Go');
define('SECURE_AUTH_KEY',  'P[Ym0L|ebU9VQ4ZyZDJi[`MTmY#z%Q9pcQ(o2o#+dP:xyEQ?rN;X&ojEaa%j2CE}');
define('LOGGED_IN_KEY',    'o74_}UrIg&@*tXAJ]|,!/Xsu$wAQUJNbU~|!0+7uf-r4M>f}~E7yI![<3^8q1dxg');
define('NONCE_KEY',        'azJaNq&_`*q1vTbU}4RMR)YP HkI+[!-{(W%V(xC4N;nUMk<+~d.,zkU@|C|MfeK');
define('AUTH_SALT',        '|/Iiw4F+@ETv_~jh[,]oAS9G-hD=-Lo~UBV;s1~yX|S0rmsj[CvlMnChF+]t?ms9');
define('SECURE_AUTH_SALT', 'K-1fK@bPu*=GH|-5;%/7o[.o)1PV&Zd+G,b+U4Doxl-w5fww O`j~*0I-~:`+s%2');
define('LOGGED_IN_SALT',   'Y}p;Cy8{+Hq+E<{l7NJa*nI%?-?TFpiZQ-^|.pqeO&yP`%QT7v9*h>M+%dn$ZPzq');
define('NONCE_SALT',       ')o@jSe}D8]2B)DsWL&.$na?V{$_(_fb@MBvZb{0MB/?>Ouu:w3rt:h-y_8Z]7tC5');

/**#@-*/

/**
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'wp_';

/**
 * För utvecklare: WordPress felsökningsläge.
 *
 * Ändra detta till true för att aktivera meddelanden under utveckling.
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG
 * i sin utvecklingsmiljö.
 *
 * För information om andra konstanter som kan användas för felsökning,
 * se dokumentationen.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* Det var allt, sluta redigera här! Blogga på. */

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');
