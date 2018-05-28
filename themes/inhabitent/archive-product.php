<?php
/**
 * The template for displaying archive pages.
 *
 * @package inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">
		<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title shop-title">', '</h1>' );
				?>
		</header><!-- .page-header -->
		<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'archive-menu' ) ); ?>
		<div class="products-archive-main">
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<a href="<?php echo the_permalink(); ?>">
				<article id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'large' ); ?>
						<?php endif; ?>
						<div class="entry-content">
							<p class="entry-title"><?php the_title() ?></p>
							<p class="dots"></p>
							<p><?php echo CFS()->get( 'price' ); ?></p>

							<?php if ( 'post' === get_post_type() ) : ?>

							<?php endif; ?>
						</div>
					</header><!-- .entry-header -->
				</article><!-- #post-## -->
			</a>	

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
