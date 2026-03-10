<?php
/**
 * Organic Honey functions
 */

if ( ! function_exists( 'organic_honey_setup' ) ) :
function organic_honey_setup() {
    load_theme_textdomain( 'organic-honey', get_template_directory() . '/languages' );

    /**
	* About Theme Function
	*/
	require get_theme_file_path( '/about-theme/about-theme.php' );
	
}
endif; 
add_action( 'after_setup_theme', 'organic_honey_setup' );

//Admin css
	add_editor_style( array( 'assets/css/admin.css' ) );

if ( ! function_exists( 'organic_honey_styles' ) ) :
	function organic_honey_styles() {
		// Register theme stylesheet.
		wp_register_style('organic-honey-style',
			get_template_directory_uri() . '/style.css',array(),
			wp_get_theme()->get( 'Version' )
		);

		wp_enqueue_style(
			'owl.carousel-css',
			get_template_directory_uri() . '/assets/css/owl.carousel.css',
			array(),
			'2.3.4'
		);
		
		wp_enqueue_style( 
			'fontawesome-style', 
			get_template_directory_uri() .'/assets/fontawesome/css/all.css' 
		);

		wp_enqueue_script(
			'owl-carousel-js',
			get_template_directory_uri() . '/assets/js/owl.carousel.js',
			array('jquery'),
			'2.3.4',
			true
		);

		wp_enqueue_script('organic-honey-js',
        	get_template_directory_uri() . '/assets/js/effects.js',array(),
        	wp_get_theme()->get('Version'),true 
   		);

		wp_enqueue_script( 'wow-jquery',
		 get_template_directory_uri() . '/assets/js/wow.js', array('jquery'),'' ,true );

		wp_enqueue_style( 'animate-style',
		 get_template_directory_uri().'/assets/css/animate.css' );

		// Scroll to top CSS and JS
		wp_enqueue_style( 'dashicons' );
		
		wp_enqueue_style( 'scroll-to-top-style',
			get_template_directory_uri() . '/assets/css/scroll-to-top.css',
			array(),
			wp_get_theme()->get('Version')
		);

		wp_enqueue_script( 'scroll-to-top-js',
			get_template_directory_uri() . '/assets/js/scroll-to-top.js',
			array(),
			wp_get_theme()->get('Version'),
			true
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'organic-honey-style' );

		wp_style_add_data( 'organic-honey-style', 'rtl', 'replace' );

	}
endif;
add_action( 'wp_enqueue_scripts', 'organic_honey_styles' );

/**
 * Customizer
 */
require get_template_directory() . '/inc/customizer.php';