<?php get_header(); ?>
	<div class="space-sm">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="content">
						<div class="panel panel-default">
							<div class="panel-body">
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<h2 class="text-uppercase"><?php the_title(); ?></h2>
								<p><?php echo get_the_content(); ?></p>
								<!-- output nb_option_meta_box -->
								<?php
									$nb_option_meta_box = get_post_meta($post->ID, '_nb_option_meta_box_key', true);
									if(!empty($nb_option_meta_box)){
										echo 'meta box value: '. $nb_option_meta_box . '<br/>';
									}
								?>
								<!-- output nb_field_meta_box -->
								<?php
									$nb_field_meta_box = get_post_meta($post->ID, '_nb_field_meta_box_key', true);
									if(!empty($nb_field_meta_box)){
										echo 'meta box value: '. $nb_field_meta_box;
									}
								?>
								<?php echo get_the_term_list( $post->ID, 'product-type', '<ul class="list-inline"><li>The Mood:</li><li>', ',</li><li>', '</li></ul>' ); ?>
								<?php echo get_the_term_list( $post->ID, 'price', '<ul class="list-inline"><li>Price Range:</li><li>', ',</li><li>', '</li></ul>' ); ?>
								<?php echo get_the_term_list( $post->ID, 'mood', '<ul class="list-inline"><li>The Mood:</li><li>', ',</li><li>', '</li></ul>' ); ?>
								<?php endwhile; ?>
								<?php else: ?>
								<?php endif; ?>
								<?php wp_reset_postdata(); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 mobile-space">
					<div class="sidebar" data-offset-smart-dynamic>
						<?php dynamic_sidebar('sidebar'); ?>
					</div>
				</div><!-- /sidebar -->
			</div>
		</div>
	</div>
<?php get_footer(); ?>