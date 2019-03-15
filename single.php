<?php get_header();?>
    
    <?php if (have_posts() ): while ( have_posts() ): the_post(); ?>
        <section class="container-blog-image" style="background-image: url('<?php echo RutaImagenes ?>/main-slider.png')">
            <h1 class="titles-project"><?php the_title();?></h1>
        </section>
        <section class="content-post">
            <article <?php post_class ('article single'); ?> id="post-<?php the_ID();?>">
                <div class="article-content">
                    <?php the_content();?>
                </div>
            </article>
    
    <?php endwhile;?>
    <?php  endif; ?>
            
    <?php get_sidebar();?>
        </section>
<?php get_footer();?>