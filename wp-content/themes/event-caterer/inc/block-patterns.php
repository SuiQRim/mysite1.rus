<?php
/**
 * Event Caterer: Block Patterns
 *
 * @since Event Caterer 1.0
 */

 /**
  * Get patterns content.
  *
  * @param string $file_name Filename.
  * @return string
  */
function event_caterer_get_pattern_content( $file_name ) {
	ob_start();
	include get_theme_file_path( '/patterns/' . $file_name . '.php' );
	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}

/**
 * Registers block patterns and categories.
 *
 * @since Event Caterer 1.0
 *
 * @return void
 */
function event_caterer_register_block_patterns() {

	$patterns = array(
		'header-default' => array(
			'title'      => __( 'Default header', 'event-caterer' ),
			'categories' => array( 'event-caterer-headers' ),
			'blockTypes' => array( 'parts/header' ),
		),
		'footer-default' => array(
			'title'      => __( 'Default footer', 'event-caterer' ),
			'categories' => array( 'event-caterer-footers' ),
			'blockTypes' => array( 'parts/footer' ),
		),
		'home-banner' => array(
			'title'      => __( 'Home Banner', 'event-caterer' ),
			'categories' => array( 'event-caterer-banner' ),
		),
		'about-section' => array(
			'title'      => __( 'About Section', 'event-caterer' ),
			'categories' => array( 'event-caterer-about-section' ),
		),
		'counter-section' => array(
			'title'      => __( 'Counter Section', 'event-caterer' ),
			'categories' => array( 'event-caterer-counter-section' ),
		),
		'latest-blog-section' => array(
			'title'      => __( 'Latest Blog Section', 'event-caterer' ),
			'categories' => array( 'event-caterer-latest-blog-section' ),
		),
		'primary-sidebar' => array(
			'title'    => __( 'Primary Sidebar', 'event-caterer' ),
			'categories' => array( 'event-caterer-sidebars' ),
		),
		'hidden-404' => array(
			'title'    => __( '404 content', 'event-caterer' ),
			'categories' => array( 'event-caterer-pages' ),
		),
		'post-listing-single-column' => array(
			'title'    => __( 'Post Single Column', 'event-caterer' ),
			//'inserter' => false,
			'categories' => array( 'event-caterer-query' ),
		),
		'post-listing-two-column' => array(
			'title'    => __( 'Post Two Column', 'event-caterer' ),
			//'inserter' => false,
			'categories' => array( 'event-caterer-query' ),
		),
		'post-listing-three-column' => array(
			'title'    => __( 'Post Three Column', 'event-caterer' ),
			//'inserter' => false,
			'categories' => array( 'event-caterer-query' ),
		),
		'post-listing-four-column' => array(
			'title'    => __( 'Post Four Column', 'event-caterer' ),
			//'inserter' => false,
			'categories' => array( 'event-caterer-query' ),
		),
		'feature-post-column' => array(
			'title'    => __( 'Feature Post Column', 'event-caterer' ),
			//'inserter' => false,
			'categories' => array( 'event-caterer-query' ),
		),
		'comment-section-1' => array(
			'title'    => __( 'Comment Section 1', 'event-caterer' ),
			'categories' => array( 'event-caterer-comment-sections' ),
		),
		'cover-with-post-title' => array(
			'title'    => __( 'Cover With Post Title', 'event-caterer' ),
			'categories' => array( 'event-caterer-banner-sections' ),
		),
		'theme-button' => array(
			'title'    => __( 'Theme Button', 'event-caterer' ),
			'categories' => array( 'event-caterer-theme-button' ),
		),
	);

	$block_pattern_categories = array(
		'event-caterer-footers' => array( 'label' => __( 'Footers Section', 'event-caterer' ) ),
		'event-caterer-headers' => array( 'label' => __( 'Headers Section', 'event-caterer' ) ),
		'event-caterer-pages'   => array( 'label' => __( 'Pages', 'event-caterer' ) ),
		'event-caterer-query'   => array( 'label' => __( 'Query', 'event-caterer' ) ),
		'event-caterer-sidebars'   => array( 'label' => __( 'Sidebars', 'event-caterer' ) ),
		'event-caterer-banner'   => array( 'label' => __( 'Slider Section', 'event-caterer' ) ),
		'event-caterer-about-section'   => array( 'label' => __( 'About Section', 'event-caterer' ) ),
		'event-caterer-counter-section'   => array( 'label' => __( 'Counter Section', 'event-caterer' ) ),
		'event-caterer-latest-blog-section'   => array( 'label' => __( 'Latest Blog Section', 'event-caterer' ) ),
		'event-caterer-comment-section'   => array( 'label' => __( 'Comment Section', 'event-caterer' ) ),
		'event-caterer-theme-button'   => array( 'label' => __( 'Theme Button Section', 'event-caterer' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Event Caterer 1.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'event_caterer_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Event Caterer 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$patterns = apply_filters( 'event_caterer_block_patterns', $patterns );

	foreach ( $patterns as $block_pattern => $pattern ) {
		$pattern['content'] = event_caterer_get_pattern_content( $block_pattern );
		register_block_pattern(
			'event-caterer/' . $block_pattern,
			$pattern
		);
	}
}
add_action( 'init', 'event_caterer_register_block_patterns', 9 );
