	<div class="footer marginTop">
		<div class="container">
			<div class="row">
				<div class="footerMenu col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<?php
						//$args = array(
						//	'menu' => 'footer-nav',
						//	'container' => 'ul',
						//	'container_id' => 'footer-nav',
						//	'menu_class' => 'footer-nav list-inline',
						//);

						//wp_nav_menu( $args );
					?>
					<?php dynamic_sidebar('footerleft') ?>
				</div>
				<div class="footerCopyright col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<!-- <p>Copyright WordStrap Boilerplate</p> -->
					<?php dynamic_sidebar('footerright') ?>
				</div>
			</div>
		</div>
	</div>

	<?php wp_footer(); ?> <!-- wordpress include required footer data -->
  
</body>
</html>