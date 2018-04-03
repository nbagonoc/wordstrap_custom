<?php get_header(); ?>
	<div class="space-lg">
		<div class="container">
            <h2>All Reviews:</h2>
		</div>
	</div>
	<div class="space-bottom-lg">
		<div class="container">		
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<div class="search-result">
					<a href="<?php the_permalink(); ?>"><h3 class="text-uppercase"><?php the_title(); ?></h3></a>
					<p> <?php the_time('F jS, Y'); ?> - <?php echo get_the_excerpt(); ?></p>
                    <?php echo get_the_term_list( $post->ID, 'product-type', '<ul class="list-inline"><li>The Mood:</li><li>', ',</li><li>', '</li></ul>' ); ?>
                        <?php echo get_the_term_list( $post->ID, 'price', '<ul class="list-inline"><li>Price Range:</li><li>', ',</li><li>', '</li></ul>' ); ?>
                        <?php echo get_the_term_list( $post->ID, 'mood', '<ul class="list-inline"><li>The Mood:</li><li>', ',</li><li>', '</li></ul>' ); ?>
				</div>
				<hr>
			<?php endwhile; ?>
				<div class="pagination text-center">
					<?php echo paginate_links(); ?>
				</div>
			<?php else: ?>
				<div class="search-results-none">
					<h2 class="text-center">NOTHING FOUND</h2>
					<p class="text-center">Sorry, we couldn't find what you're looking for. Please try again.</p>
				</div>
			<?php endif; ?>
		</div>
	</div>
<?php get_footer(); ?>