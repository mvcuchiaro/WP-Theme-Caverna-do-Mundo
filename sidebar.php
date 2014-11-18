			<div id="sidebar">

				<div id="sidebar-vistos">

					<div id="title-vistos">

						<span>POSTS MAIS VISTOS</span>
						
						<?php if(function_exists('get_most_viewed')): ?>

						<ul>

							<li>

								<?php get_most_viewed('post', 5); ?>

							</li>

						</ul>

						<?php endif; ?>

					</div> <!---/ fim title-vistos -->

				</div> <!--/ fim sidebar-vistos -->

				<div id="sidebar-colunistas">

					<div id="title-colunistas">

						<span>COLUNISTAS</span>

						<div class="colunistas">

							<ul>

								<?php $author='ID-USER'; ?>

								<li>

									<?php echo get_avatar($author, 70); ?>
									<h1><a href="#"><?php $user_info = get_userdata($author); ?><?php echo $user_info->fist_name ."". $user_info->last_name ."\n" ?></a></h1>

									<div class="info-colunistas">

										<ul>

											<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/facebook.png" alt="" title=""/></a></li>
											<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/google+.png" alt="" title=""/></a></li>
											<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/twitter.png" alt="" title=""/></a></li>
											<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/youtube.png" alt="" title=""/></a></li>

										</ul>

									</div> <!---/ fim info-colunistas -->

								</li>

							</ul>

						</div> <!--/ fim colunistas -->

					</div> <!--/ fim title-colunistas -->

				</div> <!--/ fim sidebar-colunistas -->

				<div id="sidebar-publi">

					<div id="title-publi">

						<span>PUBLICIDADE</span>

						<ul>

							<li class="publi-maior">Publicidade Maior</li>
							<li class="publi-left">Publicidade Left</li>
							<li class="publi-right">Publicidade Right</li>

						</ul>

					</div> <!--/ fim title-publi -->

				</div> <!--/ fim sidebar-publi -->

				<div id="sidebar-coment">

					<div id="title-coment">

						<span>MAIS COMENTADOS</span>

						<ul>

							<li>

								<span class="coment-number" >1</span>
								<a href="#">Google deve liberar nova interface do Maps em evento</a>

							</li>

							<li>

								<span class="coment-number" >2</span>
								<a href="#">iPhone 'baratinho' deve chegar a poucos países</a>

							</li>

							<li>

								<span class="coment-number" >3</span>
								<a href="#">Aprenda como usar o Google Now no Android</a>

							</li>

							<li>

								<span class="coment-number" >4</span>
								<a href="#">Adobe revela caneta e régua com recursos para tablets</a>

							</li>

							<li>

								<span class="coment-number" >5</span>
								<a href="#">Samsung e Nokia são líderes em reclamações no Brasil</a>

							</li>

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