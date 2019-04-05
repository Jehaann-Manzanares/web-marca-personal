<?php

/** Template name: Ancho completo
* PAGINA DE ANCHO COMPLETO
@package wordpress
@subpackage jehaann
@since 1.0
*/
?>

<?php get_header();?>

    <?php if (have_posts() ): while ( have_posts() ): the_post(); ?>
        
        <section class="content-post">
            <article <?php post_class ('article single'); ?> id="post-<?php the_ID();?>">
                <div class="article-content">
                    <?php the_content();?>
                </div>
            </article>

    <?php endwhile;?>
    <?php  endif; ?>


        </section>
<?php get_footer();?>
