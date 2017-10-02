<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		<?php if(is_front_page()): ?>
			<?php bloginfo('name'); ?><?php echo " &#45; Software Outsourcing" ?>
		<?php elseif(is_single()): ?>
			<?php wp_title(''); ?>
		<?php else: ?>
			<?php bloginfo('name'); ?><?php echo " &#45; Software Outsourcing" ?><?php wp_title('&#124;'); ?>
		<?php endif; ?>
	</title>
	<!-- <meta name="keywords" content="image moderation service, image moderation, social media content moderation, software development outsourcing company, software outsourcing company, software development Vietnam, outsource software development, Moderation Outsourcing, software development, outsource QA company, mobile development outsourcing, game development testing, outsource mobile game development, Brand Moderation, Brand Moderation Outsourcing, content moderation outsourcing, content moderation, outsourcing software development trends, software development outsourcing trends, tools used in software development, automated testing benefits, android testing book, game development software for android, mobile application automation tools, cross platform browser testing"> -->
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
</head>
<?php wp_head();?>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" data-hover="dropdown" data-animations="fadeIn">
		<div class="container">
		    <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand text-uppercase" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="brand" alt="company logo"></a>
		    </div>
	        <?php
	            wp_nav_menu( array(
	                'menu'              => 'main-nav',
	                'theme_location'    => 'wordstrap',
	                'depth'             => 2,
	                'container'         => 'div',
	                'container_class'   => 'collapse navbar-collapse',
	                'container_id'      => 'navbar',
	                'menu_class'        => 'nav navbar-nav navbar-right',
	                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
	                'walker'            => new WP_Bootstrap_Navwalker())
	            );
	        ?>
		</div>
	</nav>