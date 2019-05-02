<?php get_header();?>

<section class="blog">
<div class="container-blog-image" style="background-image: url('<?php echo RutaImagenes ?>/main-slider.png')">
           <?php if (is_category() ):?>
                <h1 class="titles-project"><?php _e('Categoria:','jehaann') ?> <?php single_cat_title(); ?></h1>
            <?php elseif ( is_tag() ):?>
            <h1 class="titles-project"><?php _e('Etiqueta:','jehaann') ?> <?php single_tag_title(); ?></h1>
            <?php elseif ( is_search() ): ?>
							<h1 class="titles-project"><?php _e('Resultado de búsqueda para:','jehaann') ?> <?php the_search_query(); ?></h1>
						<?php elseif ( is_day() ): ?>
									<h1 class="titles-project"><?php _e('Archivo:','jehaann') ?> <?php the_time(get_option('date_format')) ?></h1>
						<?php elseif ( is_month() ): ?>
									<h1 class="titles-project"><?php _e('Archivo:','jehaann') ?> <?php the_time('F Y'); ?></h1>
						<?php elseif ( is_year() ): ?>
									<h1 class="titles-project"><?php _e('Archivo:','jehaann') ?> <?php the_time('Y'); ?></h1>
						<?php elseif ( is_author() ): ?>
									<h1 class="titles-project"><?php _e('Artículos de:','jehaann') ?>
										<?php $curauth = (isset ($_GET ['author_name'])) ?  get_user_by ('slug', $author_name) : get_userdata (intval ($author)); ?>
										<?php echo $curauth->display_name; ?>
									</h1>
                                    <?php elseif ( is_404() ): ?>
									<h1 class="titles-project"><?php _e('No se encontro la página:')?></h1>
						<?php elseif ( is_home() ): ?>
								<?php if(is_front_page()): ?>
									<h1 class="titles-project"><?php _e('Blog','code') ?></h2>
								<?php else: ?>
									<h1 class="titles-project"><?php wp_title(' ', true, 'right'); ?></h1>
								<?php endif; ?>

					<?php else: ?>
						<h1 class="titles-project"><?php wp_title(' ', true, 'right'); ?></h1>
				<?php endif; ?>
</div>
 <div class="container-blog">
 <?php if (have_posts()): while (have_posts() ): the_post(); ?>
    <article class="blog-post" id="post-<?php the_ID(); ?>" <?php post_class('blog'); ?>>
            <picture>
            <?php if(! has_post_format('video') && ! has_post_format('audio')):  ?>
                    <?php if (has_post_thumbnail()): ?> 
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('blog-size-image');?></a>
                    <?php else: ?>
                        <a href="<?php the_permalink(); ?>"><img src="<?php echo RutaImagenes ?>/main-slider.png" alt="" class="img-post"></a>
                    <?php endif; ?>
            <?php endif; ?>
            </picture>
            <div>
                <h1 class="titles-project" title= "<?php the_title_attribute(); ?>"><?php the_title(); ?></h1>
                <?php the_excerpt();?>
                <a class="btn" href="<?php the_permalink(); ?>">Leer más</a>
            </div>
    </article>
    <?php endwhile;?>
    <?php endif; ?>

</div>
</section>



<?php get_footer();?>
