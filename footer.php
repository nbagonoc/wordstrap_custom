	<div class="footer">
		<div class="container">
			<div class="footer-menu space-lg">
				<div class="row">
					<div class="footerMenuElement col-sm-3 col-xs-12">
						<?php dynamic_sidebar('footer-a') ?>
					</div>
					<div class="footerMenuElement col-sm-3 col-xs-12">
						<?php dynamic_sidebar('footer-b') ?>
					</div>
					<div class="footerMenuElement col-sm-3 col-xs-12">
						<?php dynamic_sidebar('footer-c') ?>
					</div>
					<div class="footerMenuElement col-sm-3 col-xs-12">
						<?php dynamic_sidebar('footer-d') ?>
					</div>
				</div><!-- END ROW -->
			</div><!-- END FOOTERMENU -->
			<hr>
			<div class="footer-copyrights space-lg">
			</div><!-- END FOOTERCOPYRIGHTS -->
		</div><!-- END CONTAINER -->
	</div>
	<?php wp_footer(); ?> <!-- wordpress include required footer data -->
</body>
</html>