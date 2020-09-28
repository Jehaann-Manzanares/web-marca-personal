<?php
/**
archivos con el sidebar del tema

@package wordpress
@subpackage jehaann
@since 1.0
*/
?>
<aside class="sidebar-principal">
    <section class="user-data">
        <figure class="contenedor-img">
                <img src= '<?php echo RutaImagenes?>/Perfil-jehaann-manzanares.svg' alt="jehaann-manzanares.png">
        </figure>
        <div class="contenedor-info">
            <h1>Autor: <?php echo get_the_author(); ?></h1>
            <p>Soy informático de profesión especializado como:<br><br> 🔹Desarrollador FrontEnd<br>🔹Docente Creativo</p>
            
        </div>
        
    </section>
    <section class="gidgets-seconds sticky">
        <?php if (is_active_sidebar('main-sidebar')) {

            dynamic_sidebar('main-sidebar');

              } else { ?>
            <div class="widget">
                <?php get_search_form();?>
            </div>
        <?php } ?>
    </section>


</aside>
