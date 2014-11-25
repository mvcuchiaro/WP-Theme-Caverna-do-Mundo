<!DOCTYPE html>
<html <?php language_attributes() ?>>

	<head>

		<meta charset="<?php bloginfo('charset') ?>">
		<title><?php wp_title('-', true, 'right'); bloginfo() ?></title>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/style.css">

	<?php wp_head(); ?>
	</head> <!--/ fim do head -->

	<body>

	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


		<div id="header">

			<div id="header-superior">

				<div id="header-superior-content">

					<div id="header-paginas">

						<ul>

							<li><a href="<?php bloginfo('home'); ?>">Home</a></li>
							<?php wp_list_pages ('title_li='); ?>

						</ul>

					</div> <!--/ fim header-paginas -->

					<div id="header-social">

						<a href="https://www.facebook.com/cavernadomundo?ref=hl"><img src="<?php bloginfo('template_url'); ?>/images/icon-face.jpg" rel="" title=""/></a>
						<a href="https://twitter.com/cavernadomundo"><img src="<?php bloginfo('template_url'); ?>/images/icon-twitter.jpg" rel="" title=""/></a>
						<a href="https://www.youtube.com/channel/UCUckoYHB8H5M2YrfyOP_s4Q"><img src="<?php bloginfo('template_url'); ?>/images/icon-youtube.jpg" rel="" title=""/></a>
						<a href="https://plus.google.com/u/2/117079695198744840088/posts"><img src="<?php bloginfo('template_url'); ?>/images/icon-google.jpg" rel="" title=""/></a>

					</div> <!--/ fim header-social -->

				</div> <!--/ fim header-superior-content -->

			</div> <!--/ fim header-superior -->

			<div id="header-content">

				<div id="logo">

					<a href="<?php bloginfo('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.jpg" rel="" title="" /></a>

				</div> <!--/ fim logo -->

                <?php get_search_form(); ?>

				<div id="login">

					<ul>
						<li class="logar"><a href="http://wordpress.com/wp-login.php">Login</a></li>
						<li class ="registre"><a href="http://signup.wordpress.com/signup">Registre-se</a></li>
					</ul>

				</div> <!--/ fim login -->

			</div> <!--/ fim header-content -->

			<div id="nav">

				<div id="nav-content">

					<ul>
						
						<?php wp_list_categories('title_li=&hide_empty=0&orderby&depth=2&exclude=41'); ?>

					</ul>

				</div> <!--/ fim nav-content -->

			</div> <!--/ fim nav -->

		</div> <!--/ fim header -->