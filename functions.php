<!-- Archivo para agregar funcionalidades al tema -->
<?php
/**
*Jehaann Theme - Function and Definitions

@package wordpress
@subpackage jehaann
@since 1.0.0
@Version 1.0.0/
*/

/** funcion para mandar la ruta en la llamada del hmtl del los archivos css y js */

define('RutaTema', get_stylesheet_directory_uri() );

/** funcion para mandar la ruta en la llamada de las imagenes en el html */
define('RutaImagenes',RutaTema.'/images');

//cargando estilos y script

require_once('includes/scripts-styles.php');


//Registrando Sidebars interactivos


require_once('includes/sidebars.php');