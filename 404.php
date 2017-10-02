<?php get_header(); ?>
	<div class="container">
		<div class="content-area space-lg text-center">
			<h1>WHOOOPS! PAGE NOT FOUND.</h1>
			<h3>Sorry, but the page you're looking for does not exist.</h3>
			<a href="<?php echo home_url(); ?>" class="btn btn-lg btn-default">TAKE ME HOME</a>
		</div>	
		<hr class="">
		<div class="space-lg">
			<h1 class="text-center">LOOKING FOR SOMETHING?</h1>
			<?php get_search_form(); ?>
		</div><!-- close search bar -->
	</div>
<?php get_footer(); ?>