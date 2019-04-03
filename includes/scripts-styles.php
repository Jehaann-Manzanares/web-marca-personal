<?php
/**
*Jehaann Theme - Function and Definitions

@package wordpress
@subpackage jehaann
@since 1.0.0
@Version 1.0.0/
*/

//Registrando y cargando hojas de estilos
function jehaann_style(){
  wp_register_style('style', get_stylesheet_uri(),'','1.0','all');

  //cargando hojas de estilos

  wp_enqueue_style('style');
}


  //Cargando la funcion
add_action('wp_enqueue_scripts','jehaann_style');



//registrando y cargando scripts


function jehaann_scripts(){


  wp_register_script('scripts',RutaTema.'/js/scripts.js','','1.0','True');
  wp_enqueue_script('scripts');


}

  add_action('wp_enqueue_scripts','jehaann_scripts');
