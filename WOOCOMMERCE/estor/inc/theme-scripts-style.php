<?php 
if ( ! defined( 'ABSPATH' ) ) {
	// Replace the version number of the theme on each release.
	exit;
}


/**
* Enqueue scripts and styles.
*/
function estor_styles() {
	
	wp_enqueue_style( 'estor-style', get_stylesheet_uri(), array('boottrap-style '), _S_VERSION );
	wp_enqueue_style( 'boottrap-style', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), _S_VERSION );
	wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/assets/css/flexslider.css', array(), _S_VERSION );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), _S_VERSION );
	wp_enqueue_style( 'countdown', get_template_directory_uri() . '/assets/css/jquery.countdown.css', array(), _S_VERSION );
	wp_enqueue_style( 'popup-box', get_template_directory_uri() . '/assets/css/popuo-box.css', array(), _S_VERSION );
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );
}
add_action( 'wp_enqueue_scripts', 'estor_styles' );

function estor_scripts() {

//	wp_enqueue_script( 'estore-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );
	
//	wp_enqueue_script( 'estore-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), _S_VERSION, true );
	
	wp_deregister_script( 'jquery');
wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), _S_VERSION ,true);
wp_enqueue_script( 'jquery');


	wp_enqueue_script('bootstrap-script' , get_template_directory_uri() . '/assets/js/bootstrap-3.1.1.min.js', array('jquery'), null, true);
	wp_enqueue_script('imagezoom' , get_template_directory_uri() . '/assets/js/imagezoom.js', array('jquery'), null, true);
	wp_enqueue_script('countdown' , get_template_directory_uri() . '/assets/js/jquery.countdown.js', array('jquery'), null, true);
	wp_enqueue_script('easyResponsiveTabs' , get_template_directory_uri() . '/assets/js/easyResponsiveTabs.js', array('jquery'), null, true);
	wp_enqueue_script('flexisel' , get_template_directory_uri() . '/assets/js/jquery.flexisel.js', array('jquery'), null, true);
	wp_enqueue_script('flexslider' , get_template_directory_uri() . '/assets/js/jquery.flexslider.js', array('jquery'), null, true);
	wp_enqueue_script('magnific-popup' , get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', array('jquery'), null, true);
	wp_enqueue_script('wmuSlider' , get_template_directory_uri() . '/assets/js/jquery.wmuSlider.js', array('jquery'), null, true);
	wp_enqueue_script('minicart' , get_template_directory_uri() . '/assets/js/minicart.js', array('jquery'), null, true);
	wp_enqueue_script('easyResponsiveTabs' , get_template_directory_uri() . '/assets/js/easyResponsiveTabs.js', array('jquery'), null, true);
	
	wp_enqueue_script('ajax-search' , get_template_directory_uri() . '/assets/js/ajax-search.js', array('jquery'), null, true);

wp_localize_script('ajax-search', 'search_form' , array(
		'url' => admin_url('admin-ajax.php'),
		'nonce' => wp_create_nonce('search-nonce')
	));


	wp_enqueue_script('script' , get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null);
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}






	
wp_enqueue_script( 'booestor-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}

}
add_action( 'wp_enqueue_scripts', 'estor_scripts' );