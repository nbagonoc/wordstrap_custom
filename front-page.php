<?php get_header(); ?>

<!-- carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1" class=""></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>
	<!-- carousel items -->
	<div class="carousel-inner" role="listbox">
		<?php $query = new WP_Query('cat=1&posts_per_page=3'); ?>				
		<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
		<div class="item">
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'background' ); ?>
			<div class="banner-slider" style="background-image: url('<?php echo $thumb['0'];?>');">
				<div class="vertical-align">
					<div class="vertical-align-element">
						<div class="container">
							<h1 class="text-center text-uppercase color-white"><?php the_title(); ?></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endwhile; ?>
		<?php else: ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
	</div><!-- /caousel items -->
	<!-- arrows -->
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="fas fa-chevron-circle-left fa-2x left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="fas fa-chevron-circle-right fa-2x right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a><!-- /arrows -->
</div><!-- /carousel -->

<!-- banner -->
<!-- <div class="banner">
	<?php //$query = new WP_Query('p=7'); ?>				
	<?php //if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
	<?php //$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'background' ); ?>
	<div class="banner" style="background-image: url('<?php //echo $thumb['0'];?>');">
		<div class="vertical-align">
			<div class="vertical-align-element">
				<div class="container">
					<h1 class="text-center text-uppercase color-white"><?php //the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
	<?php //endwhile; ?>
	<?php //else: ?>
	<?php //endif; ?>
	<?php //wp_reset_postdata(); ?>
</div> -->
<!--- /banner -->

<!-- feature headings-->
<div class="space-sm background-light">
	<div class="container">
		<div class="row">
			<?php //$query = new WP_Query('cat=1&posts_per_page=3'); ?>	
			<?php $query = new WP_Query('post_type[]=post&post_type[]=review&posts_per_page=6'); ?>			
			<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
				<div class="col-md-4 mobile-space">
					<div class="border radius space background-white">
						<h3 class="text-center text-uppercase"><?php the_title(); ?></h3>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" class="btn btn-custom text-uppercase center-block">text goes here</a>
					</div>
				</div>
			<?php endwhile; ?>
			<?php else: ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
</div><!-- /feature headings-->

<!-- content and sidebar-->
<div class="space-sm">
	<div class="container">
		<div class="row">
			<!-- content -->
			<div class="col-md-8">
				<div class="content">
					<div class="panel panel-default border">
						<div class="panel-body">
							<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<h2 class="text-uppercase"><?php the_title(); ?></h2>
								<?php echo the_content(); ?>
							<?php endwhile; ?>
							<?php else: ?>
							<?php endif; ?>
							<?php wp_reset_postdata(); ?>
						</div>
					</div>
				</div>
			</div><!-- /content -->
			<!-- sidebar -->
			<div class="col-md-4 mobile-space">
				<div class="sidebar" data-offset-smart-dynamic>
						<?php dynamic_sidebar('sidebar'); ?>
				</div>
			</div><!-- /sidebar -->
		</div>
	</div>
</div><!-- content and sidebar -->

<?php get_footer(); ?>