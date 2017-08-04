<?php

//add menu feature
register_nav_menus(array('main-nav'=>'Main Navigation'));

//remove admin bar from site
add_filter('show_admin_bar', '__return_false');

//add thumbnail function
add_theme_support('post-thumbnails');

//add custom image size. add image size b4 uploading images
add_image_size('background', 1920, 720, true);

//add custom image size. add image size b4 uploading images
add_image_size('custom', 480, 320, true);

//insert styles
function add_styles(){
	wp_enqueue_style('bootstrap.min-style', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');
}
add_action('wp_enqueue_scripts', 'add_styles');

//insert scripts
function add_scripts(){
	wp_enqueue_script('jsQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '1.12.4', true);	
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true);
	wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array(), false, true);
	wp_enqueue_script('respond', get_template_directory_uri() . '/js/respond.min.js', array(), false, true);
	wp_enqueue_script('viewportchecker', get_template_directory_uri() . '/js/viewportchecker.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'add_scripts');

//add sidebar  support
function widget() {
	register_sidebar(array(
		'name'          => 'The Sidebar',
		'id'            => 'sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	));
	register_sidebar(array(
		'name'          => 'The Footerbar Left',
		'id'            => 'footerleft',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	));
	register_sidebar(array(
		'name'          => 'The Footerbar Right',
		'id'            => 'footerright',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	));
}
add_action( 'widgets_init', 'widget' );


//pagination Bootstrap
function sa_get_bootstrap_paginate_links() {
	ob_start();
	?>
		<div class="pages clearfix">
			<?php
				global $wp_query;
				$current = max( 1, absint( get_query_var( 'paged' ) ) );
				$pagination = paginate_links( array(
					'base' => str_replace( PHP_INT_MAX, '%#%', esc_url( get_pagenum_link( PHP_INT_MAX ) ) ),
					'format' => '?paged=%#%',
					'current' => $current,
					'total' => $wp_query->max_num_pages,
					'type' => 'array',
					'prev_text' => '&laquo;',
					'next_text' => '&raquo;',
				) ); ?>
			<?php if ( ! empty( $pagination ) ) : ?>
				<ul class="pagination">
					<?php foreach ( $pagination as $key => $page_link ) : ?>
						<li class="paginated_link<?php if ( strpos( $page_link, 'current' ) !== false ) { echo ' active'; } ?>"><?php echo $page_link ?></li>
					<?php endforeach ?>
				</ul>
			<?php endif ?>
		</div>
	<?php
	$links = ob_get_clean();
	return apply_filters( 'sa_bootstap_paginate_links', $links );
}
function sa_bootstrap_paginate_links() {
	echo sa_get_bootstrap_paginate_links();
}

?>