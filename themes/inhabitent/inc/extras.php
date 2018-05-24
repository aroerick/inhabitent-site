<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package inhabitent_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_body_classes' );

// Remove "Editor" links from sub-menus
function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );

// function inhabitent_dynamic_css() {
// 	if ( ! is_page_template( "page-templates/about.php" ) ) {
// 		return;
// 	}
// 	$image = CFS()->get( "hero_image" );
// 	if ( ! $image ) {
// 		return;
// 	}
// 	$hero_css = "
// 	body {
// 		background-color: darkslategrey;
// 		color: slategrey;
// 	} ";
	
// 	wp_add_inline_style( "inhabitent-style", $hero_css );
// }
// add_action( "wp_enqueue_scripts", "inhabitent_dynamic_css" );

function inhabitent_login_logo(){
	echo '<style>
		#login h1 a {
			background: url(' . get_template_directory_uri() . '/assets/images/logos/inhabitent-logo-text-dark.svg)
			no-repeat !important;
			background-size: 300px 53px !important;
			width: 300px !important;
			height: 53px !important;
		}
		#login .button.button-primary {
			background: #248A83;
		}
	</style>';
}
add_action( 'login_head', 'inhabitent_login_logo' );

function inhabitent_login_link( $url ){
	return home_url();
}
add_filter( 'login_headerurl', 'inhabitent_login_link' );

function inhabitent_login_title(){
	return 'Inhabitent';
}
add_filter( 'login_headertitle', 'inhabitent_login_title' );