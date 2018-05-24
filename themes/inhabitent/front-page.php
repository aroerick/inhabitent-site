<?php
/**
 * The main template file.
 *
 * @package inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		
		<main id="main" class="site-main" role="main">
				<div class="overlay"></div>
				<img class="site-logo" src="<?php echo get_template_directory_uri() ?>/assets/images/logos/inhabitent-logo-full.svg" width="330px" alt="Main Inhabitent Logo" />
				<?php if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
				<?php endif; ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'large' ); ?>
							<?php endif; ?>
						</header><!-- .entry-header -->
					</article><!-- #post-## -->

				<?php endwhile; ?>
				
			<section class="shop-stuff container">
				<h2>Shop Stuff</h2>
				<?php
				$terms = get_terms( array(
					"taxonomy" => "product_type",
					"hide_empty" => 0,
				) );
				
				if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) : ?>

					<div class="product-types">
					
					<?php foreach ( $terms as $term ) : ?>

						<div class="shop-type">

							<img src="<?php echo get_template_directory_uri() . '/assets/images/icons/' . $term->slug; ?>.svg" width="75px" 
							alt="<?php echo $term->name; ?>" />

						<p><?php echo $term->description; ?></p>

						<a class="uppercase green" href="<?php echo get_term_link( $term ); ?>">
							<?php echo $term->name; ?> Stuff</a>
				</div>
				<?php endforeach ?>
				</div>
				<?php endif; ?>	

			</section>
			<section class="inhabitent-journal container">
			<h2>Inhabitent Journal</h2>
			<?php
				$args = array( 'post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => 3 );
				$product_posts = get_posts( $args ); // returns an array of posts
			?>
			<div class="journals">
			<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
				<div class="journal-entry">
					<?php	
					if ( has_post_thumbnail() ) :
						the_post_thumbnail( 'large' ); 
					endif;
					?>
					<div class="journal-content">
						<?php	inhabitent_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ) ?>
						<h3><?php the_title() ?></h3>
						<a href="<?php the_permalink(); ?>" class="uppercase black">Read Entry</a>
					</div>
				</div>
					<?php endforeach; wp_reset_postdata(); ?>
				</div>
			</section>
			<section class="latest-adventures container">
				<h2>Latest Adventures</h2>
				<?php
				$args = array( 'post_type' => 'adventure', 'order' => 'ASC', 'posts_per_page' => 4 );
				$adventure_posts = get_posts( $args ); // returns an array of posts
			?>
			<div class="adventures-grid">
			<?php $i = 0 ?>
			<?php foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>
				<?php $i++ ?>
				<div class="grid-item item<?php echo $i ?>">
				<!-- <div class="overlay"></div> -->
					<div class="wrapper">
						<?php	
						if ( has_post_thumbnail() ) :

							the_post_thumbnail( 'large' ); 
						endif;
						?>
					</div>	
						<div class="adventure-content">
							<h3><?php the_title() ?></h3>
							<a href="<?php the_permalink(); ?>" class="uppercase white">Read Entry</a>
						</div>
					</div>
					<?php endforeach; wp_reset_postdata(); ?>
					<a class="uppercase green more-adventures">More Adventures</a>
				</div>
			</section>	
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
