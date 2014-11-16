<?php get_header(); ?>

		<div id="container">

			<div id="content">

				<div id="destaque">

					<div class="destaque-post">

						<?php query_posts('category_name=destaques&offset=0&showposts=1'); ?>

						<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>

						<a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>

						<div class="destaque-info">

							<ul>

								<li class="dest-autor"><?php the_author(); ?></li>
								<li class="dest-views"><?php if (function_exists('the_views')) { the_views(); } ?></li>
								<li class="dest-coment"><?php comments_number('0', '1', '%'); ?></li>

							</ul>

						</div> <!--/ fim destaque-info -->

						<h1><a href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></h1>

						<?php endwhile; ?>
						<?php else : ?>
						<?php endif; ?>

						<div class="list-dest">

							<ul>

								<?php query_posts('category_name=destaques&offset=2&showposts=2'); ?>

								<?php if (have_posts()) : ?>
								<?php while (have_posts()) : the_post(); ?>

								<li>

									<a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>
									<h2><a href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></h2>

								</li>

								<?php endwhile; ?>
								<?php else : ?>
								<?php endif; ?>

							</ul>

						</div> <!--/ fim list-dest -->

					</div> <!--/ fim destaque-post -->

					<div class="destaque-post right ">

						<?php query_posts('category_name=destaques&offset=1&showposts=1'); ?>

						<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>

						<a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>

						<div class="destaque-info">

							<ul>

								<li class="dest-autor"><?php the_author(); ?></li>
								<li class="dest-views"><?php if (function_exists('the_views')) { the_views(); } ?></li>
								<li class="dest-coment"><?php comments_number('0', '1', '%'); ?></li>

							</ul>

						</div> <!--/ fim destaque-info -->

						<h1><a href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></h1>

						<?php endwhile; ?>
						<?php else : ?>
						<?php endif; ?>

						<div class="list-dest">

							<ul>

								<?php query_posts('category_name=destaques&offset=4&showposts=2'); ?>

								<?php if (have_posts()) : ?>
								<?php while (have_posts()) : the_post(); ?>

								<li>

									<a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>
									<h2><a href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></h2>

								</li>

								<?php endwhile; ?>
								<?php else : ?>
								<?php endif; ?>

							</ul>

						</div> <!--/ fim list-dest -->

					</div> <!--/ fim destaque-post -->

				</div> <!--/ fim destaque -->

				<div id="tecnologia">

					<div id="title-tec">

						<span>TECNOLOGIA</span>

					</div> <!--/ fim title-tec -->

					<?php query_posts('category_name=tecnologia&offset=0&showposts=2'); ?>

					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>

					<div class="post-tec">

						<a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						<h1><a href="<?php the_Permalink(); ?>"/><?php  the_title(); ?></h1>

						<div class="tec-info">

							<ul>

								<li class="tec-autor"><?php the_author(); ?></li>
								<li class="tec-views"><?php if (function_exists('the_views')) { the_views(); } ?></li>
								<li class="tec-coment"><?php comments_number('0', '1', '%'); ?></li>

							</ul>

						</div> <!--/ fim tec-info -->

						<p><?php the_excerpt_rereloaded(20, ' Continue lendo...'); ?></p>

					</div> <!--/ fim post-tec -->

					<?php endwhile; ?>
					<?php else : ?>
					<?php endif; ?>

				</div> <!--/ fim tecnologia -->
				
				<div id="entretenimento">
					
					<div id="title-entretenimento"> <span>ENTRETENIMENTO</span> </div> 

					<?php query_posts('category_name=entretenimento&offset=0&showposts=3'); ?>

					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>

					<div class="post-entretenimento">
						
						<a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>

						<h1><a href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></h1>

						<div class="info-entretenimento">
							
							<ul>
								
								<li class="autor-entretenimento"><?php the_author(); ?></li>
								<li class="coment-entretenimento"><?php comments_number('0', '1', '%'); ?></li>
								
							</ul>

						</div> <!--/fim info-entretenimento -->

						<p><?php the_excerpt_rereloaded(20, ' Continue lendo...'); ?></p>

					</div> <!--/ fim post-entretenimento -->

					<?php endwhile; ?>
					<?php else : ?>
					<?php endif; ?>


				</div> <!---/ fim entretenimento -->
				
				<div id="bloco-esport-colunas">

					<div id="esport">

						<div id="title-esport">

							<span>E-SPORT</span>

						</div> <!-- fim title-esport -->

						<?php query_posts('category_name=e-sports&offset=0&showposts=1'); ?>

						<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>

						<a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>

								<div class="esport-info"/>

									<ul>

										<li class="esport-autor"><?php the_author(); ?></li>
										<li class="esport-views"><?php if (function_exists('the_views')) { the_views(); } ?></li>
										<li class="esport-coment"><?php comments_number('0', '1', '%'); ?></li>

									</ul>

								</div> <!--/ fim esport-info -->

								<h1><a href="<?php  the_Permalink(); ?>"><?php the_title(); ?></a></h1>

						<?php endwhile; ?>
						<?php else : ?>
						<?php endif; ?>

								<div id="esport-list">

									<ul>

										<?php query_posts('category_name=e-sports&offset=1&showposts=1'); ?>

										<?php if (have_posts()) : ?>
										<?php while (have_posts()) : the_post(); ?>

										<li>

											<a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>

											<h2><a href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></h2>

										</li>

										<?php endwhile; ?>
										<?php else : ?>
										<?php endif; ?>

									</ul>

								</div> <!--/ fim esport-list -->

					</div> <!--/ fim esport -->


					<div id="colunas">

						<div id="title-colunas">

							<span>COLUNAS</span>

						</div> <!-- fim title-colunas -->

						<?php query_posts('category_name=colunas&offset=0&showposts=1'); ?>

						<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>

						<a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>

								<div class="colunas-info"/>

									<ul>

										<li class="colunas-autor"><?php the_author(); ?></li>
										<li class="colunas-views"><?php if (function_exists('the_views')) { the_views(); } ?></li>
										<li class="colunas-coment"><?php comments_number('0', '1', '%'); ?></li>

									</ul>

								</div> <!--/ fim colunas-info -->

								<h1><a href="<?php  the_Permalink(); ?>"><?php the_title(); ?></a></h1>

						<?php endwhile; ?>
						<?php else : ?>
						<?php endif; ?>

								<div id="colunas-list">

									<ul>

										<?php query_posts('category_name=colunas&offset=1&showposts=1'); ?>

										<?php if (have_posts()) : ?>
										<?php while (have_posts()) : the_post(); ?>

										<li>

											<a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>

											<h2><a href="<?php  the_Permalink(); ?>"><?php the_title(); ?></a></h2>

										</li>

										<?php endwhile; ?>
										<?php else : ?>
										<?php endif; ?>

									</ul>

								</div> <!--/ fim colunas-list -->

					</div> <!--/ fim colunas -->

				</div> <!--/ fim bloco-esport-colunas -->


				<div id="bloco-politica-games">

					<div id="politica">

						<div id="title-politica">

							<span>POLÍTICA</span>

						</div> <!-- fim title-politica -->
						
						<?php query_posts('category_name=politica&offset=0&showposts=1'); ?>

				    	<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>

						<a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>

								<div class="politica-info"/>

									<ul>

										<li class="politica-autor"><?php the_author(); ?></li>
										<li class="politica-views"><?php if (function_exists('the_views')) { the_views(); } ?></li>
										<li class="politica-coment"><?php comments_number('0', '1', '%'); ?></li>

									</ul>

								</div> <!--/ fim politica-info -->

								<h1><a href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></h1>
								
								<?php endwhile; ?>
								<?php else : ?>
								<?php endif; ?>

								<div id="politica-list">

									<ul>
                                        
                                        <?php query_posts('category_name=politica&offset=1&showposts=1'); ?>

				                    	<?php if (have_posts()) : ?>
						                <?php while (have_posts()) : the_post(); ?>

										<li>

											<a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>

											<h2><a href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></h2>

										</li>
										
										<?php endwhile; ?>
								        <?php else : ?>
								        <?php endif; ?>

									</ul>

								</div> <!--/ fim politica-list -->

					</div> <!--/ fim politica -->


					<div id="games">

						<div id="title-games">

							<span>GAMES</span>

						</div> <!-- fim title-games -->
						
						<?php query_posts('category_name=games&offset=0&showposts=1'); ?>

				        <?php if (have_posts()) : ?>
				        <?php while (have_posts()) : the_post(); ?>

						<a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>

								<div class="games-info"/>

									<ul>

										<li class="games-autor"><?php the_author(); ?></li>
										<li class="games-views"><?php if (function_exists('the_views')) { the_views(); } ?></li>
										<li class="games-coment"><?php comments_number('0', '1', '%'); ?></li>

									</ul>

								</div> <!--/ fim games-info -->

								<h1><a href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></h1>
								
								<?php endwhile; ?>
				                <?php else : ?>
								<?php endif; ?>

								<div id="games-list">

									<ul>

										<li>
                                            
                                            <?php query_posts('category_name=games&offset=1&showposts=1'); ?>

				                            <?php if (have_posts()) : ?>
				                            <?php while (have_posts()) : the_post(); ?>

											<a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>

											<h2><a href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></h2>

										</li>
										
										<?php endwhile; ?>
				                        <?php else : ?>
								        <?php endif; ?>

									</ul>

								</div> <!--/ fim games-list -->

					</div> <!--/ fim games -->

				</div> <!--/ fim bloco-politica-games -->

			</div> <!-- fim content -->

<?php get_sidebar(); ?>

		</div> <!--/ fim container -->

<?php get_footer(); ?>