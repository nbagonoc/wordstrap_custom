<?php get_header(); ?>

	<div class="container">
		<div class="row">
			
			<div class="contentArea marginTop col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<!-- retrieves a post/page, if any -->
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<h2 class="text-uppercase"><?php the_title(); ?></h2>
					<p><?php echo get_the_content(); ?></p>
				<?php endwhile; ?>
				<?php else: ?>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>

			<div class="sidebar marginTop widget-area col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<?php dynamic_sidebar('sidebar') ?>
			</div>
			
		</div>
	</div>

<?php get_footer(); ?>