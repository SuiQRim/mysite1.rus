<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage Event Caterer
 * @since Event Caterer 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function event_caterer_customize_register( $wp_customize ) {
    // Check for existence of WP_Customize_Manager before proceeding
	if ( ! class_exists( 'WP_Customize_Manager' ) ) {
        return;
    }
    
	$wp_customize->add_section( new event_caterer_Customizer_Pro_Button( $wp_customize, 'upsell_premium_section', array(
		'title'       => __( 'UPGRADE TO PREMIUM', 'event-caterer' ),
		'button_text' => __( 'Go Pro', 'event-caterer' ),
		'url'         => esc_url( EVENT_CATERER_PRO_THEME_URL ),
		'priority'    => 0,
	)));

	$wp_customize->add_section( new event_caterer_Customizer_Pro_Button( $wp_customize, 'upsell_bundle_section', array(
		'title'       => __( 'BUY ALL 60+ THEMES', 'event-caterer' ),
		'button_text' => __( 'Buy Now', 'event-caterer' ),
		'url'         => esc_url( EVENT_CATERER_THEME_BUNDLE_URL ),
		'priority'    => 0,
	)));

}
add_action( 'customize_register', 'event_caterer_customize_register' );

if ( class_exists( 'WP_Customize_Section' ) ) {
	class event_caterer_Customizer_Pro_Button extends WP_Customize_Section {
		public $type = 'event-caterer-buynow';
		public $button_text = '';
		public $url = '';

		protected function render() {
			?>
			<li id="accordion-section-<?php echo esc_attr( $this->id ); ?>" class="event_caterer_Customizer_Pro_Button accordion-section control-section control-section-<?php echo esc_attr( $this->id ); ?> cannot-expand">
				<h3 class="accordion-section-title premium-details">
					<?php echo esc_html( $this->title ); ?>
					<a href="<?php echo esc_url( $this->url ); ?>" class="button button-secondary alignright" target="_blank" style="margin-top: -4px;"><?php echo esc_html( $this->button_text ); ?></a>
				</h3>
			</li>
			<?php
		}
	}
}

/**
 * Enqueue script for custom customize control.
 */
function event_caterer_custom_control_scripts() {
	wp_enqueue_script( 'event-caterer-custom-controls-js', get_template_directory_uri() . '/inc/get-started/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );

    wp_enqueue_style( 'event-caterer-customizer-css', get_template_directory_uri() . '/inc/get-started/assets/css/customizer.css', array(), '1.0' );
}
add_action( 'customize_controls_enqueue_scripts', 'event_caterer_custom_control_scripts' );