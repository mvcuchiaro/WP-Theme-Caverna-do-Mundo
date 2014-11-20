<div id="sidebar-colunistas">

					<div id="title-colunistas">

						<span>COLUNISTAS</span>

						<div class="colunistas">

							<ul>

								<?php $author='1'; ?>

								<li>

									<?php echo get_avatar($author, 70); ?>
									<h1><a href="<?php bloginfo('url'); ?>/?author=<?php echo $author ?>"><?php $user_info = get_userdata($author); echo ($user_info->first_name ."". $user_info->last_name ."\n"); ?></a></h1>

									<div class="info-colunistas">

										<ul>

											<li><a href="https://www.facebook.com/marco.vinicius.351" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/facebook.png" alt="" title=""/></a></li>
											<li><a href="https://plus.google.com/u/0/100785009166641512731/posts" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/google+.png" alt="" title=""/></a></li>
											<li><a href="https://twitter.com/mvcuchiaro" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/twitter.png" alt="" title=""/></a></li>
											<li><a href="https://www.youtube.com/channel/UCkpXrRpT2_N9XZpOS07jR5g" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/youtube.png" alt="" title=""/></a></li>

										</ul>

									</div> <!---/ fim info-colunistas -->

								</li>

								<?php $author='2'; ?>

								<li>

									<?php echo get_avatar($author, 70); ?>
									<h1><a href="<?php bloginfo('url'); ?>/?author=<?php echo $author ?>"><?php $user_info = get_userdata($author); echo ($user_info->first_name ."". $user_info->last_name ."\n"); ?></a></h1>

									<div class="info-colunistas">

										<ul>

											<li><a href="https://www.facebook.com/giovanni.cuchiaro" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/facebook.png" alt="" title=""/></a></li>
											<li><a href="https://plus.google.com/u/0/106018785112008707025/posts" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/google+.png" alt="" title=""/></a></li>
											<li><a href="https://twitter.com/cavernadomundo" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/twitter.png" alt="" title=""/></a></li>
											<li><a href="https://www.youtube.com/channel/UCUckoYHB8H5M2YrfyOP_s4Q" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/youtube.png" alt="" title=""/></a></li>

										</ul>

									</div> <!---/ fim info-colunistas -->

								</li>

							</ul>

						</div> <!--/ fim colunistas -->

					</div> <!--/ fim title-colunistas -->

				</div> <!--/ fim sidebar-colunistas -->