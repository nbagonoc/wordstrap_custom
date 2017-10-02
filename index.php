<?php get_header(); ?>
	<div class="content-area space-lg">
		<div class="container">
			<!-- retrieves a post/page, if any -->
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<h2 class="text-uppercase"><?php the_title(); ?></h2>
				<p><?php echo get_the_content(); ?></p>
			<?php endwhile; ?>
			<?php else: ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
<?php get_footer(); ?>