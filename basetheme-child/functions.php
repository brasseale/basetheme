<?php 

/* Child theme setup function
 *****************************
 **************************
 ***********************
 *********************
 */
  
add_action( 'after_setup_theme', 'basethemechild_setup', 11 );

function basethemechild_setup() {

	$prefix = hybrid_get_prefix();
	
	
/* Add the search form to the secondary menu. Uncommenting this action will put a searchform at the end of the 
 * secondary menu 
 */
	
	// add_action( "{$prefix}_close_menu_secondary", 'get_search_form' );
	
/* To unregister sidebars currently in the parent theme, do so with the following action. Also remember to 
 * uncomment the corresponding function further down this functionsfile
 */
	
	// add_action( 'widgets_init', 'basethemechild_unregister_sidebars', 11 );
	
/* For sites that may require a page have its own custom stylesheet, such as a landing page or form page where main site styles
 * are not wanted, enable the following feature, and then you can create stylesheet for custom pages 
 */
 
	// add_theme_support( 'post-stylesheets' );

/*
	// add image sizes for this site
	add_image_size( 'tiny', 80, 80, true );
	add_image_size( 'wide-thumb', 220, 120, true );
	add_image_size( 'feature', 940, 370, true );

*/

	add_action( 'wp_enqueue_scripts', 'basethemechild_enqueue_scripts' );

}

/* End setup function. All functions go after this. Actions and filters should go above
 ***********************************************************************
 *********************************************************************
 * Start functions after this. All actions and filters should go above
 */


function basethemechild_enqueue_scripts() {
	
	wp_enqueue_style( 'basethemechild-style', get_stylesheet_uri(), array( 'basethemechild-style', 'basethemechild-base' ) );
	
	/*
	 * Loads Google font CSS file.
	 *
 	 * To disable in a child theme, use wp_dequeue_style()
 	 * function basethemechild_dequeue_fonts() {
 	 *     wp_dequeue_style( 'basethemechild-fonts' );
 	 * }
	 * add_action( 'wp_enqueue_scripts', 'basethemechild_dequeue_fonts', 11 );
 	 */
	
//	$protocol = is_ssl() ? 'https' : 'http';
	
//	wp_enqueue_style( 'basethemechild-fonts', "$protocol://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic", array(), null );
}

/**
 * Unregisters some of the core framework sidebars that the theme doesn't use.
 *
 * @since 0.1.0
 */

function basethemechild_unregister_sidebars() {
	unregister_sidebar( 'header' );
	unregister_sidebar( 'after-singular' );
}


