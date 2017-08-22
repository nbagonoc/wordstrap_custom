<!DOCTYPE html>
<html lang="en">

<!-- important heading -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?><?php wp_title('-'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<!-- <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:bold|Roboto" rel="stylesheet">  google font -->
</head>

<?php wp_head();?> <!-- wordpress include required header data -->

<body>
	<!-- bootstrap menu -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
		    
		    <div class="navbar-header">

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- <a class="navbar-brand text-uppercase" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a> -->
				<a class="navbar-brand text-uppercase" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="brand"></a>
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