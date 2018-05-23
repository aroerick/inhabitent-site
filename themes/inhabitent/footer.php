<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<div class="contact">
						<h3 class="uppercase">contact info</h3>
						<ul>
							<li>
								<i class="fas fa-envelope"></i>
								<a href="#">info@inhabitent.com</a>
							</li>
							<li>
								<i class="fas fa-phone"></i>
								778-456-7891
							</li>
							<li>
								<i class="fab fa-facebook-square"></i>
								<i class="fab fa-twitter-square"></i>
								<i class="fab fa-google-plus-square"></i>
								<i class="fab fa-instagram"></i>
							</li>
						</ul>
					</div>
					<div class="hours">
						<h3 class="uppercase">business hours</h3>
						<ul>
							<li><span class="bold">Monday-Friday:</span> 9am to 5pm</li>
							<li><span class="bold">Saturday:</span> 10am to 2pm</li>
							<li><span class="bold">Sunday:</span> Closed</li>
					</div>
				</div><!-- .site-info -->
				<div class="footer-logo">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/logos/inhabitent-logo-text.svg" width="330px" alt="Inhabitent Logo" />
				</div>
				<div class="legal">
					<p class="uppercase">copyright &copy; 2018 inhabitent</p>
				</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
