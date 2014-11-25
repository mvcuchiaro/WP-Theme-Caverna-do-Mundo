<?php get_header(); ?>

		<div id="container">

			<div id="content">
                
                <div class="main-cat">
                   
                    <div id="title-cat">
                        
                        <?php if ( have_posts() ) : ?>

						<span><?php printf( __( 'Search Results for: %s', 'cdm' ), get_search_query() ); ?></span>

					</div> <!--/ fim title-page -->
                   
                        <?php while ( have_posts() ) : the_post(); ?> 
                    
                    <h1><a href="<?php the_Permalink(); ?>" style="font:20px ubuntu;font-weight:bold; border-bottom:2px solid #ed5353;"><?php the_title(); ?></a></h1>
                    
                    <p><?php the_excerpt_rereloaded(80, ' Continue lendo...'); ?></p>
                    
                    <?php endwhile; ?>
                    
                        <?php if (function_exists('pagination_funtion')) pagination_funtion(); ?>
                        
                    <?php else :?>
                    
                    <div class="main-404">
                   
                        <div id="title-404">

				            <span>ERRO 404 - PÁGINA NÃO ENCONTRADA</span>

					    </div> <!--/ fim title-page -->
                    
                    <h1>Oops, parece que você entrou na Caverna errada. Tente novamente! </h1>
                    
                    </div>
                    
				    <?php endif; ?> 
                    
                </div>
        
			</div> <!-- fim content -->

<?php get_sidebar(); ?>

		</div> <!--/ fim container -->

<?php get_footer(); ?>