<?php
/**
 * Event Caterer functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Event Caterer
 */

if ( ! defined( 'EVENT_CATERER_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'EVENT_CATERER_VERSION', wp_get_theme()->get( 'Version' ) );
}

if ( ! function_exists( 'event_caterer_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function event_caterer_setup() {

		load_theme_textdomain( 'event-caterer', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'align-wide' );

		add_theme_support( 'woocommerce' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Add support for core custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 192,
				'width'       => 192,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

        add_theme_support( 'custom-background', apply_filters( 'event_caterer_custom_background', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

		// Experimental support for adding blocks inside nav menus
		add_theme_support( 'block-nav-menus' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

	}
endif;
add_action( 'after_setup_theme', 'event_caterer_setup' );

function event_caterer_scripts() {
    wp_enqueue_style('event-caterer-style', get_stylesheet_uri(), array() );
    wp_enqueue_script('jquery-wow', get_template_directory_uri() . '/js/wow.js', array('jquery'));
    wp_enqueue_style('animate-css', get_template_directory_uri() . '/css/animate.css');

	//font-awesome
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/font-awesome/css/all.css', array(), '6.7.0' );

    wp_enqueue_style( 'owl.carousel-style', get_template_directory_uri().'/css/owl.carousel.css', array(), EVENT_CATERER_VERSION );
	wp_enqueue_script( 'owl.carousel-js', get_template_directory_uri(). '/js/owl.carousel.js', array('jquery') ,EVENT_CATERER_VERSION,true);

    // Custom scripts should depend on JS and jQuery
    wp_enqueue_script('event-caterer-custom-scripts', get_template_directory_uri() . '/js/custom.js',  array('jquery'),'' ,true );
    wp_style_add_data( 'event-caterer-style', 'rtl', 'replace' );
}
add_action( 'wp_enqueue_scripts', 'event_caterer_scripts' );

/**
 * Enqueue block editor style
 */
function event_caterer_block_editor_styles() {

	wp_enqueue_style( 'event-caterer-block-patterns-style-editor', get_theme_file_uri( '/css/block-editor.css' ), false, '1.0', 'all' );
}
add_action( 'enqueue_block_editor_assets', 'event_caterer_block_editor_styles' );


function event_caterer_init_setup() {

	require_once get_theme_file_path( '/inc/customizer.php' );

	// Add block patterns
	require get_template_directory() . '/inc/block-patterns.php';

	/**
     * Demo Import
     */
    require get_parent_theme_file_path( '/inc/get-started/demo-import-settings.php' );

    if ( ! defined( 'EVENT_CATERER_FREE_THEME_URL' ) ) {
        define( 'EVENT_CATERER_FREE_THEME_URL', 'https://www.seothemesexpert.com/products/event-caterer-theme' );
    }
    if ( ! defined( 'EVENT_CATERER_PRO_THEME_URL' ) ) {
        define( 'EVENT_CATERER_PRO_THEME_URL', 'https://www.seothemesexpert.com/products/event-caterer-website-template' );
    }
    if ( ! defined( 'EVENT_CATERER_FREE_DOC_URL' ) ) {
        define( 'EVENT_CATERER_FREE_DOC_URL', 'https://demo.seothemesexpert.com/documentation/event-caterer/' );
    }
    if ( ! defined( 'EVENT_CATERER_DEMO_THEME_URL' ) ) {
        define( 'EVENT_CATERER_DEMO_THEME_URL', 'https://demo.seothemesexpert.com/event-caterer/' );
    }
    if ( ! defined( 'EVENT_CATERER_RATE_THEME_URL' ) ) {
        define( 'EVENT_CATERER_RATE_THEME_URL', 'https://wordpress.org/support/theme/event-caterer/reviews/' );
    }
    if ( ! defined( 'EVENT_CATERER_SUPPORT_THEME_URL' ) ) {
        define( 'EVENT_CATERER_SUPPORT_THEME_URL', 'https://wordpress.org/support/theme/event-caterer/' );
    }
    if ( ! defined( 'EVENT_CATERER_THEME_BUNDLE_URL' ) ) {
        define( 'EVENT_CATERER_THEME_BUNDLE_URL', 'https://www.seothemesexpert.com/products/wordpress-theme-bundle' );
    }
}
add_action( 'after_setup_theme', 'event_caterer_init_setup' );


// Show Admin Notice
function event_caterer_promo_notice() {
    if (get_option('event_caterer_notice_dismissed')) {
        return;
    }

    if (isset($_GET['page']) && $_GET['page'] === 'eventcaterer-wizard') {
        return;
    }

    $event_caterer_theme = wp_get_theme();
    $event_caterer_theme_title = $event_caterer_theme->get( 'Name' );
    $event_caterer_theme_version = $event_caterer_theme->get( 'Version' );

    ?>
    <div class="notice event-caterer-notice is-dismissible">
        <div>
            <h3>
                <span><?php echo esc_html( '(Version: ' . $event_caterer_theme_version . ')' ); ?></span><br>
                <?php esc_html_e( 'Thank you for choosing,', 'event-caterer'); ?>
                <?php echo esc_html( $event_caterer_theme_title ); ?> <?php esc_html_e( '!!!', 'event-caterer'); ?>
            </h3>
            <p><?php esc_html_e( 'Welcome! You can now easily start building your website using our beautiful and user-friendly themes. No need to worry about setup — with our one-click demo importer, your site can look just like the demo in minutes. All the tools and information you need to get started are right here!', 'event-caterer'); ?></p>
            <a class="button button-primary event-caterer-buy-now" href="<?php echo esc_url(admin_url('themes.php?page=eventcaterer-wizard')); ?>" target="_blank">
                <?php esc_html_e( 'Get Started', 'event-caterer') ?>
            </a>
            <a class="button button-primary event-caterer-bundle-button" target="_blank" href="<?php echo esc_url( EVENT_CATERER_THEME_BUNDLE_URL ); ?>">
                <?php echo esc_html__( 'Get All 60+ Themes @ $79', 'event-caterer' ); ?>
            </a>
        </div>
        <div class="event-caterer-image-wrap">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/screenshot.png'); ?>">
        </div>
        <canvas id="event-caterer-notice-confetti"></canvas>
    </div>
    <?php
}
add_action('admin_notices', 'event_caterer_promo_notice');

add_action('wp_ajax_event_caterer_dismiss_notice', 'event_caterer_dismiss_notice');
function event_caterer_dismiss_notice() {
    update_option('event_caterer_notice_dismissed', true);
    wp_send_json_success();
}

add_action('after_switch_theme', 'event_caterer_reset_notice_on_activation');
function event_caterer_reset_notice_on_activation() {
    delete_option('event_caterer_notice_dismissed');
}

function event_caterer_enqueue_admin_assets() {
    wp_enqueue_script(
        'event-caterer-confetti',
        get_template_directory_uri() . '/inc/get-started/assets/js/confetti/confetti.min.js',
        ['jquery'],
        null,
        true
    );

    wp_enqueue_script(
        'event-caterer-notice-confetti-js',
        get_template_directory_uri() . '/inc/get-started/assets/js/plugin-update-notice.js',
        ['event-caterer-confetti'],
        null,
        true
    );

    wp_enqueue_script(
        'event-caterer-notice-dismiss',
        get_template_directory_uri() . '/inc/get-started/assets/js/notice-dismiss.js',
        ['jquery'],
        null,
        true
    );
}
add_action('admin_enqueue_scripts', 'event_caterer_enqueue_admin_assets');