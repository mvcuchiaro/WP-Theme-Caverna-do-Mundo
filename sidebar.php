			<div id="sidebar">

				<div id="sidebar-vistos">

					<div id="title-vistos">

						<span>POSTS MAIS VISTOS</span>
						
						<?php if(function_exists('get_most_viewed')): ?>

						<ul>

							<li>

								<?php get_most_viewed('post', 10); ?>

							</li>

						</ul>

						<?php endif; ?>

					</div> <!---/ fim title-vistos -->

				</div> <!--/ fim sidebar-vistos -->

				<?php include_once("sidebar-colunistas.php"); ?>


				<div id="sidebar-coment">

					<div id="title-coment"> <span>MAIS COMENTADOS</span> </div>	

					<ul>

						<?php $result = $wpdb->get_results("SELECT comment_count, ID, post_title FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0 , 9");
                           foreach($result as $post) {
                              setup_postdata($post);
                              $postid = $post->ID;
                              $title = $post->post_title;
                              $commentcount = $post->comment_count;
                              if($commentcount != 0) { ?>
                                
						<li>

							<span class="coment-number" ><?php $i = $i; $i++; echo $i; ?></span>
							<a href="<?php the_Permalink(); ?>"><?php echo $title; ?><!--/ fazer aparecer numero de coments/ - <?php echo $commentcount ?> --> </a>

						</li>
							
						<?php } ?>
						<?php } ?>

					</ul>

				</div> <!--/ fim sidebar-coment -->

				<div id="sidebar-facebook">

					<div id="title-facebook">

						<span>FACEBOOK</span>

						<div id="face-box">

							<div class="fb-like-box" data-href="https://www.facebook.com/cavernadomundo?ref=hl" data-width="280" data-height="300" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>

						</div> <!--/ fim face-box -->
						
					</div> <!--/ fim title-facebook -->

				</div> <!--/ fim sidebar-facebook -->

			</div> <!--/ fim sidebar -->