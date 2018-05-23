<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
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

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content' ); ?>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>
				
			<section class="shop-stuff">
				<h2 class="uppercase" >Shop Stuff</h2>
				<div class="product-types">
					<div class="shop-type do">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/do.svg" width="75px" alt="Do Stuff icon" />
						<p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
						<a class="uppercase" href="#">Do Stuff</a>
					</div>
					<div class="shop-type eat">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/eat.svg" width="75px" alt="Eat Stuff icon" />
						<p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
						<a class="uppercase" href="#">Eat Stuff</a>
					</div>
					<div class="shop-type sleep">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/sleep.svg" width="75px" alt="Sleep Stuff icon" />
						<p>Get a good night's rest in the wild in a home away from home that travels well.</p>
						<a class="uppercase" href="#" class="uppercase" href="#">Sleep Stuff</a>
					</div>
					<div class="shop-type wear">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/wear.svg" width="75px" alt="Wear Stuff icon" />
						<p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
						<a class="uppercase" href="#">Wear Stuff</a>
					</div>
				</div>	
			</section>
			<section class="inhabitent-journal">
				<h2 class="uppercase">Inhabitent Journal</h2>
				<div class="journals">
					<div class="journal-entry">
					<img />
						<div>
							<p>Lorem ipsum...</p>
							<h3>Placeholder Title</h3>
							<a class="uppercase">Read Entry</a>
						</div>
					</div>
					<div class="journal-entry">
						<img />
						<div>
							<p>Lorem ipsum...</p>
							<h3>Placeholder Title</h3>
							<a class="uppercase">Read Entry</a>
						</div>
					</div>
					<div class="journal-entry">
					<img />
						<div>
							<p>Lorem ipsum...</p>
							<h3>Placeholder Title</h3>
							<a class="uppercase">Read Entry</a>
						</div>
					</div>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
