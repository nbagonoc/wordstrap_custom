	<div class="footer background-dark space-sm">
		<div class="container">
			<div class="menu">
				<div class="row">
					<div class="col-sm-3">
						<?php dynamic_sidebar('footer-a') ?>
					</div>
					<div class="col-sm-3">
						<?php dynamic_sidebar('footer-b') ?>
					</div>
					<div class="col-sm-3">
						<?php dynamic_sidebar('footer-c') ?>
					</div>
					<div class="col-sm-3">
						<?php dynamic_sidebar('footer-d') ?>
					</div>
				</div><!-- END ROW -->
			</div><!-- END FOOTERMENU -->
			<hr class="hr-dark">
			<div class="social text-center">
				<a href="#" target="_blank"><i class="fab fa-facebook-f fa-2x" data-fa-transform="shrink-5" data-fa-mask="fas fa-circle"></i></a>
				<a href="#" target="_blank"><i class="fab fa-twitter fa-2x" data-fa-transform="shrink-5" data-fa-mask="fas fa-circle"></i></a>
				<a href="#" target="_blank"><i class="fab fa-instagram fa-2x" data-fa-transform="shrink-5" data-fa-mask="fas fa-circle"></i></a>
			</div>
			<hr class="hr-dark">
			<div class="copyrights text-center">
				&#9400; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>
			</div><!-- END FOOTERCOPYRIGHTS -->
		</div><!-- END CONTAINER -->
	</div><!-- /footer -->
	<!-- back to top-->
	<a href="#top" id="to-top"><i class="fas fa-chevron-circle-up fa-3x"></i></a>
	<?php wp_footer(); ?> <!-- wordpress include required footer data -->
</body>
</html>