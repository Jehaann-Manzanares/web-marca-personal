<?php get_header();?>

    <?php if (have_posts() ): while ( have_posts() ): the_post(); ?>
    <?php if (has_post_thumbnail()): ?>    
       <?php $banner_article = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');?>
        <section class="container-blog-image" style="background-image: url('<?php echo $banner_article[0]; ?>')">

        </section>
    <?php else:?>
        <section class="container-blog-image" style="background-image: url('<?php echo RutaImagenes ?>/main-slider.png')">
        </section>
    <?php endif?>
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
