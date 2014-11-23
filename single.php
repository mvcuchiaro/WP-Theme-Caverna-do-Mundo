<?php get_header(); ?>

		<div id="container">

			<div id="content">
                
                <div class="main-single">
                   
                    <div id="title-single">

						<span><?php the_title(); ?></span>

					</div> <!--/ fim title-page -->
                   
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    
                    <h6>Por: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Em: <?php the_time('j M Y'); ?> | <?php comments_number('0', '1', '%'); ?> Comentário(s) | Categoria(s): <a href="#"><?php the_category(' - '); ?></a></h6>
                    
                    <p><?php the_content(); ?></p>
                    
                    <?php endwhile; ?>
                    <?php else : ?>
				    <?php endif; ?>
                    
                </div>
        
			</div> <!-- fim content -->

<?php get_sidebar(); ?>

		</div> <!--/ fim container -->

<?php get_footer(); ?>
