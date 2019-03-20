<?php
/**
 * Definimos los datos para facilitar el 
 * acceso a la base de datos en los demas
 * archivos.
 */
/*Nombre del servidor*/
define('HOST','localhost');
/*Nombre de la base de datos*/
define('DBNAME','BogotaT');
/*Nombre del usuario*/
define('USER','root');
/*Contraseña del usuario*/
define('PASSWORD','');


/**
 * Definimos el acceso a las carpetas del aplicativo
 */


/*Ruta de la aplicacion*/
define('RUTA_APP',dirname(dirname(__FILE__)));
/*Ruta Url para acceder al aplicativo,(Acesso a la carpeta 'public' por defecto.*/
define('RUTA_URL','http://'.$_SERVER['HTTP_HOST'].'/Bogota_Turismo(Final)/');
/*Definimos el nombre del aplicativo*/
define('NOMBRESITIO','Bogota Turismo');
?>