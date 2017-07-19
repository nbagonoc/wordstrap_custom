<?php get_header(); ?>

	<div class="container">
		<div class="search marginTop">
			<h2 class="text-center">LOOKING FOR SOMETHING?</h2>
			<?php get_search_form(); ?>
		</div>
	</div>

	<div class="container">
		<div class="contentArea marginTop">		
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<div class="searchResultItem">
					<a href="<?php the_permalink(); ?>"><h3 class="text-uppercase"><?php the_title(); ?></h3></a>
					<p> <?php the_time('F jS, Y'); ?> - <?php echo get_the_excerpt(); ?></p>
				</div>
				<hr>
			<?php endwhile; ?>
				<div class="pagination text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<?php echo paginate_links(); ?>
				</div>
			<?php else: ?>
				<div class="searchResultNone">
					<h2 class="text-center">NOTHING FOUND</h2>
					<p class="text-center">Sorry, we couldn't find what you're looking for. Please try again.</p>
				</div>
			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>