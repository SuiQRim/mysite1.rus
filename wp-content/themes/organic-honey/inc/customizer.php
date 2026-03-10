<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage organic-honey
 * @since organic-honey 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function organic_honey_customize_register( $wp_customize ) {
    // Check for existence of WP_Customize_Manager before proceeding
	if ( ! class_exists( 'WP_Customize_Manager' ) ) {
        return;
    }
    
    // Add the "Go to Premium" upsell section
	$wp_customize->add_section( new Organic_Honey_Upsell_Section( $wp_customize, 'upsell_premium_section', array(
		'title'       => __( 'Organic Honey', 'organic-honey' ),
		'button_text' => __( 'GO TO PREMIUM', 'organic-honey' ),
		'url'         => esc_url( ORGANIC_HONEY_BUY_NOW ),
		'priority'    => 0,
	)));

	// Add the "Bundle" upsell section
	$wp_customize->add_section( new Organic_Honey_Upsell_Section( $wp_customize, 'upsell_bundle_section', array(
		'title'       => __( 'All themes in Single Package', 'organic-honey' ),
		'button_text' => __( 'GET BUNDLE', 'organic-honey' ),
		'url'         => esc_url( ORGANIC_HONEY_BUNDLE ),
		'priority'    => 1,
	)));
}
add_action( 'customize_register', 'organic_honey_customize_register' );

if ( class_exists( 'WP_Customize_Section' ) ) {
	class Organic_Honey_Upsell_Section extends WP_Customize_Section {
		public $type = 'organic-honey-upsell';
		public $button_text = '';
		public $url = '';

		protected function render() {
			?>
			<li id="accordion-section-<?php echo esc_attr( $this->id ); ?>" class="organic_honey_upsell_section accordion-section control-section control-section-<?php echo esc_attr( $this->id ); ?> cannot-expand">
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
function organic_honey_custom_control_scripts() {
	wp_enqueue_script( 'organic-honey-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );

    wp_enqueue_style( 'organic-honey-customizer-css', get_template_directory_uri() . '/assets/css/customizer.css', array(), '1.0' );
}
add_action( 'customize_controls_enqueue_scripts', 'organic_honey_custom_control_scripts' );
