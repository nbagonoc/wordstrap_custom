<?php get_header(); ?>
	<div class="space-lg">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="content">
						<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
							<h2 class="text-uppercase"><?php the_title(); ?></h2>
							<p><?php echo get_the_content(); ?></p>
                            <?php
                                $nb_option = get_post_meta($post->ID, 'nb_option_meta_key', true);
                                if(!empty($nb_option)){
                                    echo 'meta box value: '. $nb_option;
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
				<div class="col-md-4">
					<div class="sidebar widget-area">
						<?php get_sidebar('sidebar'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>