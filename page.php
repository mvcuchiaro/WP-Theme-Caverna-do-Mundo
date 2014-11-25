<?php get_header(); ?>

		<div id="container">

			<div id="content">
                
                <div class="main-page">
                   
                    <div id="title-page">

						<span><?php the_title(); ?></span>

					</div> <!--/ fim title-page -->
                   
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    
                    <p><?php the_content(); ?></p>
                    
                    <?php endwhile; ?>
                    <?php else : ?>
				    <?php endif; ?>
                    
                </div>
        
			</div> <!-- fim content -->

<?php get_sidebar(); ?>

		</div> <!--/ fim container -->

<?php get_footer(); ?>