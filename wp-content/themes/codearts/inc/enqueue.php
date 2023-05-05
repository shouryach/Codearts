<?php



/**

 * Enqueue scripts and styles.

 */



function codearts_scripts() {

	

	wp_enqueue_style( 'codearts-style', get_stylesheet_uri() );


	wp_enqueue_style( 'codearts-bootstrap', get_theme_file_uri('/assets/css/bootstrap.min.css'), array(), '1.0' );

	wp_enqueue_style( 'codearts-owl-carousel', get_theme_file_uri('/assets/css/owl.carousel.min.css'), array(), '1.0' );

	wp_enqueue_style( 'codearts-style-css', get_theme_file_uri('/assets/css/style.css'), array(), '1.0' );

	wp_enqueue_style( 'codearts-services-sb', get_theme_file_uri('/assets/css/services-sb.css'), array(), '1.0' );

	wp_enqueue_style( 'codearts-fdev-sg', get_theme_file_uri('/assets/css/fdev-sg.css'), array(), '1.0' );	

	wp_enqueue_style( 'codearts-fdev-dc', get_theme_file_uri('/assets/css/fdev-dc.css'), array(), '1.0' );

	wp_enqueue_style( 'codearts-responsive', get_theme_file_uri('/assets/css/responsive.css'), array(), '1.0' );

	wp_enqueue_style( 'codearts-font-awesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', array(), '1.0' );

	wp_enqueue_style( 'codearts-line-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css', array(), '1.0' );








    wp_enqueue_script( 'jquery-ui-js', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js', array(), '1.0', true );

    wp_enqueue_script( 'jquery-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js', array(), '1.0', true );

    wp_enqueue_script( 'bootstrap-js', get_theme_file_uri('/assets/js/bootstrap.bundle.min.js'), array(), '1.0', true );

    wp_enqueue_script( 'owl-carousel-js', get_theme_file_uri('/assets/js/owl.carousel.min.js'), array(), '1.0', true );

    wp_enqueue_script( 'custom-js', get_theme_file_uri('/assets/js/custom.js'), array(), '1.0', true );


 




}

add_action( 'wp_enqueue_scripts', 'codearts_scripts' );

