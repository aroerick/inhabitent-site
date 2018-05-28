<?php
/**
 * The template for displaying all pages.
 *
 * @package inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area sidebar-page container">

		<main id="main" class="site-main" role="main">
			<iframe class="map-insert" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.6831203809093!2d-123.14036224886684!3d49.26345177995274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673c79e1ac457%3A0x3aea6428fa30dc6a!2s1490+W+Broadway%2C+Vancouver%2C+BC!5e0!3m2!1sen!2sca!4v1527536213788" width="790" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
		<?php get_sidebar(); ?>
	</div><!-- #primary -->


<?php get_footer(); ?>
