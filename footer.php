<div id="footer">
	
	<div id="footer-content">

		<div id="title-footer"> <span><img src="<?php bloginfo('template_url'); ?>/images/logo-footer.png" alt="" title=""></span> </div> <!--/ fim title-footer -->
		
		<div id="footer-sobre">
		
		      <?php query_posts('page_id=8'); ?>  
		
		      <?php if (have_posts()) : ?> 
		      <?php while (have_posts()) : the_post(); ?>
			
			<div id="title-sobre"> <span><?php the_title(); ?></span> </div>

			<p><?php the_excerpt(); ?> <a href="<?php the_Permalink(); ?>">Leia mais...</a> </p>
			
			<?php endwhile; ?>
            <?php else : ?>
			<?php endif; ?>

		</div> <!--/ fim footer-sobre -->

		<div id="footer-paginas">
			
			<div id="title-paginas"> <span>PÁGINAS</span> </div>	

			<ul>

				<li><a href="<?php bloginfo('home'); ?>">Home</a></li>
               
                <?php wp_list_pages('title_li='); ?>

			</ul>

		</div> <!--/ fim footer-paginas -->

		<div id="footer-recentes">
			
			<div id="title-recentes"> <span>POSTS RECENTES</span> </div>

			<ul>
                
                  <?php query_posts('showposts=5'); ?>  
		
		          <?php if (have_posts()) : ?> 
		          <?php while (have_posts()) : the_post(); ?>

				<li><a href="<?php the_Permalink();?>"><?php the_title(); ?></a></li>
				
				<?php endwhile; ?>
                <?php else : ?>
			    <?php endif; ?>

			</ul>	

		</div> <!--/ fim footer-recentes -->

	</div> <!--/ fim footer-content -->

	<div id="footer-info">

		<div id="info-content">
			
			<span>©2014EquipeCDM All rights reserved.</span>

			<span class="info-right">Developed by: <b>Marco V. Cuchiaro</b></span>

		</div> <!---/ fim info-content -->
		
	</div> <!--/ fim footer-info -->

</div> <!--/ fim footer -->

	<?php wp_footer(); ?>
	</body> <!---/ fim do body -->

</html> <!--/ fim do html -->