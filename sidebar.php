<?php
/**
archivos con el sidebar del tema

@package wordpress
@subpackage jehaann
@since 1.0
*/
?>
<aside class="sidebar-principal sticky">
    <section class="user-data">
        <figure class="contenedor-img">
                <img src= '<?php echo RutaImagenes?>/Perfil-jehaann-manzanares.png' alt="jehaann-manzanares.png">
        </figure>
        <div class="contenedor-info">
            <h1>Autor: Jehaann Manzanares</h1>
            <p>Frontend/Backend developer</p>
            <p><strong>Categoria:</strong>Uncategorized</p>
        </div>
        
    </section>
    <section class="gidgets-seconds">
        <?php if (is_active_sidebar('main-sidebar')) {

            dynamic_sidebar('main-sidebar');

              } else { ?>
            <div class="widget">
                <?php get_search_form();?>
            </div>
        <?php } ?>
    </section>


</aside>
