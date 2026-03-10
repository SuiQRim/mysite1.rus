<?php

require get_template_directory() . '/inc/get-started/tgm/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function event_caterer_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'FAQly – Ultimate FAQ', 'event-caterer' ),
			'slug'             => 'faqly-ultimate-faq',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'event_caterer_register_recommended_plugins' );