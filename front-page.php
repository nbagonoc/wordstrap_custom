<?php get_header(); ?>
	<?php /* 
	<!-- Banner Slider make sure to add active class on 1st item via jqeury-->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<!-- retrieving specific post by category ID with post per page-->
			<?php $query = new WP_Query('cat=30&posts_per_page=3'); ?>				
			<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
		    <div class="item">
				<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'background' ); ?>
				<div class="banner VerticalAlign" style="background-image: url('<?php echo $thumb['0'];?>');">
					<div class="verticalAlignElement text-center">
			        	<h1><?php the_title(); ?></h1>
			        	<h3><?php echo the_content();?></h3>
					</div>
				</div>
		    </div>
			<?php endwhile; ?>
			<?php else: ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	
	</div><!-- banner closed -->
	*/ ?>
	<div class="space-lg">
		<div class="container">
			<div class="search post-d post-delay-a">
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>
	<div class="space-lg">
		<div class="container">
			<div class="row">
				<?php $query = new WP_Query('cat=30&posts_per_page=3'); ?>	
				<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
					<div class="col-md-4">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('custom', array('class'=>'img-responsive')); ?></a>
						<a href="<?php the_permalink(); ?>"><h2 class="text-capitalize text-center"><?php the_title(); ?></h2></a>
						<p><?php echo get_the_excerpt(); ?></p>
					</div>
				<?php endwhile; ?>
				<?php else: ?>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>