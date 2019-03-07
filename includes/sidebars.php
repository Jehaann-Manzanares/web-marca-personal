<?php
/**


@package wordpress
@subpackage jehaann
@since 1.0.0
@Version 1.0.0/
*/

function jehaann_sidebars(){

    register_sidebar(array(
        'name'          => __( 'Widget de contacto', 'jehaanns' ),
          'id'            => 'contact-widget',    // ID should be LOWERCASE  ! ! !
          'description'   => __('Esta es la zona de widget principal para agregar el formulario de contacto','jehaann'),
          'class'         => '',
          'before_widget' => '<div id="%1$s" class="footer-logo %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h3 class="title">',
          'after_title'   => '</h3>'
      ));

}

add_action('widgets_init', 'jehaann_sidebars');