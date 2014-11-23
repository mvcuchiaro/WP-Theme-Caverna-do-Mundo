<?php get_header(); ?>

		<div id="container">

			<div id="content">
                
                <div class="main-cat">
                   
                    <div id="title-cat">

						<span>Você está na categoria: <?php single_cat_title('', 'true'); ?></span>

					</div> <!--/ fim title-page -->
                                                      
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    
                    <h1><a href="<?php the_Permalink(); ?>" style="font:20px arial;font-weight:bold; border-bottom:2px solid #ed5353;"><?php the_title(); ?></a></h1>
                    
                    <p><?php the_excerpt_rereloaded(80, ' Continue lendo...'); ?></p>
                    
                    <?php endwhile; ?>
                    <?php else : ?>
				    <?php endif; ?>   
                    
                </div>
            
			</div> <!-- fim content -->

<?php get_sidebar(); ?>

		</div> <!--/ fim container -->

<?php get_footer(); ?>