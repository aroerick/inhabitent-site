<?php
/**
 * The header for our theme.
 *
 * @package inhabitent_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>
			<div class="header-back">
				<header id="masthead" class="site-header container" role="banner">
					<div class="site-branding">
						<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<a class="header-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logos/inhabitent-logo-tent
						<?php if( is_front_page() || is_page("about") ) : ?>
						-white
						<?php endif; ?>
						.svg" width="50" alt="Inhabitent Home" /></a>
					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						<!-- <div class="search-button"><i class="fas fa-search"></i></div> -->
						<div class="search">
							<?php get_search_form(); ?>
						</div>
					</nav><!-- #site-navigation -->
				</header><!-- #masthead -->
			</div>

			<div id="content" class="site-content">
