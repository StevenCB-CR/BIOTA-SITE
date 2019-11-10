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
define('DB_NAME', 'wordpress_biota');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY', '5/YH.S-QC1;[K&k`gQnxJ=V4-4n!Q`2?r<`WA_b2Kx2Ex0zFCq,.J~A3l$WNrSv.');
define('SECURE_AUTH_KEY', 'h=ra*H&?IDk[Cy]A8o[]U?-vb~UU.Ao/d^3Twk;a^givOJ3b9!9?3?U59{D/LcU/');
define('LOGGED_IN_KEY', '[E?&5Q#[uo$l;LNoH/e?K?iE6$POAyl)$I&C8ne!EKNhdOmb:vN>O 2=]NM9WqUj');
define('NONCE_KEY', 'rvmWp2d?^LHUz(dJx.!Ylf)hmQkbm%2DZ<)k}q^]6nJ<OkNZH5i@XuH0X^V=F3j)');
define('AUTH_SALT', 'w(Ma@Ga#/LOP-u@6%o/zG$_*p=~%&l]u?mpL@%,$E^t@J0RBI*Lh`wFmCOf5dwP-');
define('SECURE_AUTH_SALT', 'mGi! E/1:,jm9UAs^3<jfA?Y,w8z5r2~}Gef3[G]7P3aCA2dVF|muk)s89}YU]VC');
define('LOGGED_IN_SALT', 'f`YhK]y_3>8!,kzCgQktd`?s9=M_w|o.>YA~Sjk%11g }M|:yMdWaBjKuv&v@gsq');
define('NONCE_SALT', '?KcX[iS/[Ee/5)=h^>UM?[UxT8f!*=h8XUuFho1Exg;y|.Dztsn0oP|/u;gvVAtS');

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
define('WP_DEBUG_DISPLAY', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

