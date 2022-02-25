<?php
add_action( 'wp_enqueue_scripts', '_p_enqueue_scripts' );
function _p_enqueue_scripts() {
	wp_enqueue_style( 'ranti-typekit', 'https://use.typekit.net/wwd6pco.css', array(), _S_VERSION );
	wp_enqueue_style( 'mineral-style', get_template_directory_uri() . '/mineral.css', array(), _S_VERSION );

	// wp_enqueue_script( 'ranti-script-core-jquery', get_template_directory_uri() . '/js/core/jquery.js', array(), _S_VERSION, true );
	// wp_enqueue_script( 'ranti-script-core-plugins', get_template_directory_uri() . '/js/core/plugins.js', array(), _S_VERSION, true );
	// wp_enqueue_script( 'ranti-script-core-functions', get_template_directory_uri() . '/js/core/functions.js', array(), _S_VERSION, true );
	// wp_enqueue_script( 'ranti-script-core-custom', get_template_directory_uri() . '/js/core/custom.js', array(), _S_VERSION, true );
	
	// wp_enqueue_script( 'ranti-script-core-footer', get_template_directory_uri() . '/js/core/footer.js', array(), _S_VERSION, true );
}

add_filter( 'body_class','_r_add_body_class' );
function _r_add_body_class( $classes ) {
 
    $classes[] = 'mineral';
     
    return $classes;
     
}

