<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wp_rumba');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'dEc9KxX9S{z7Ns*2{B$ Q*I{0$0 wX|2/E%:U;TU3F=134+jmr?>qoIlj?-!&O5`');
define('SECURE_AUTH_KEY', 'L&|P/^ jRRpXT=~+W OGl~6Ey1%d1 :=#68RrMi(/YMLgRa0tZ6jAJb28L%*o+pd');
define('LOGGED_IN_KEY', '86}Ke)2,o!*Db_o]ys4$Ot6DRpyKtpRp#0}mH8L6x>l]qo,,UYhD+I@QeHIWo$5T');
define('NONCE_KEY', 'ej}Gg5s=laR#VbtW|OxM41(c<d,[5ebpgt}><<.^ T{>x+}/Q]ZHk[$DY)?m%HHn');
define('AUTH_SALT', 'N3LK9P^te8p~@[XhB~!SX/L>MV+54QI]oJp6ze0Mfa6L*Ei/IpV*JRd!$MWgAG-*');
define('SECURE_AUTH_SALT', 'Ef}Oa/NKDAkpwj$FQsDXX/??6QvjOknsac:we1c,bjegW9mW>~#wD:kPk%Eq{i-+');
define('LOGGED_IN_SALT', 'Qvlrao_=qf+%(CiYJ{KAGk2<rqGNh x]L@UKNuOM,=,6rr#f_G*JnlU{A:v}GOwd');
define('NONCE_SALT', '7]S/XSpDE]tkqix]->7@.zZN<l<1,GaBRmT9%ltmZA.3Q^CFEb]|&obtQ[D/hIP.');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

