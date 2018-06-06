<?php
/**
 * The template for displaying search results pages.
 *
 * @package inhabitent_Theme
 */

get_header(); ?>

		<main id="main" class="site-main container results-main" role="main">

			<div class="results">
				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'search' ); ?>

					<?php endwhile; ?>

					<?php inhabitent_numbered_pagination(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			</div>	

			<?php get_sidebar(); ?>
		</main><!-- #main -->

<?php get_footer(); ?>
