<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage codearts
 * 
 */

// This theme requires WordPress 5.3 or later.
if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'codearts_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * 
	 *
	 * @return void
	 */
	function codearts_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on codearts, use a find and replace
		 * to change 'codearts' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'codearts', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'codearts' ),
				'footer'  => esc_html__( 'Secondary menu', 'codearts' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		/*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		// $logo_width  = 300;
		// $logo_height = 100;

		// add_theme_support(
		// 	'custom-logo',
		// 	array(
		// 		'height'               => $logo_height,
		// 		'width'                => $logo_width,
		// 		'flex-width'           => true,
		// 		'flex-height'          => true,
		// 		'unlink-homepage-logo' => true,
		// 	)
		// );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );
		$background_color = get_theme_mod( 'background_color', 'D1E4DD' );
		if ( 127 > codearts_Custom_Colors::get_relative_luminance_from_hex( $background_color ) ) {
			add_theme_support( 'dark-editor-style' );
		}

		$editor_stylesheet_path = './assets/css/style-editor.css';

		// Note, the is_IE global variable is defined by WordPress and is used
		// to detect if the current browser is internet explorer.
		global $is_IE;
		if ( $is_IE ) {
			$editor_stylesheet_path = './assets/css/ie-editor.css';
		}

		// Enqueue editor styles.
		add_editor_style( $editor_stylesheet_path );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => esc_html__( 'Extra small', 'codearts' ),
					'shortName' => esc_html_x( 'XS', 'Font size', 'codearts' ),
					'size'      => 16,
					'slug'      => 'extra-small',
				),
				array(
					'name'      => esc_html__( 'Small', 'codearts' ),
					'shortName' => esc_html_x( 'S', 'Font size', 'codearts' ),
					'size'      => 18,
					'slug'      => 'small',
				),
				array(
					'name'      => esc_html__( 'Normal', 'codearts' ),
					'shortName' => esc_html_x( 'M', 'Font size', 'codearts' ),
					'size'      => 20,
					'slug'      => 'normal',
				),
				array(
					'name'      => esc_html__( 'Large', 'codearts' ),
					'shortName' => esc_html_x( 'L', 'Font size', 'codearts' ),
					'size'      => 24,
					'slug'      => 'large',
				),
				array(
					'name'      => esc_html__( 'Extra large', 'codearts' ),
					'shortName' => esc_html_x( 'XL', 'Font size', 'codearts' ),
					'size'      => 40,
					'slug'      => 'extra-large',
				),
				array(
					'name'      => esc_html__( 'Huge', 'codearts' ),
					'shortName' => esc_html_x( 'XXL', 'Font size', 'codearts' ),
					'size'      => 96,
					'slug'      => 'huge',
				),
				array(
					'name'      => esc_html__( 'Gigantic', 'codearts' ),
					'shortName' => esc_html_x( 'XXXL', 'Font size', 'codearts' ),
					'size'      => 144,
					'slug'      => 'gigantic',
				),
			)
		);

		// Custom background color.
		add_theme_support(
			'custom-background',
			array(
				'default-color' => 'd1e4dd',
			)
		);

		// Editor color palette.
		$black     = '#000000';
		$dark_gray = '#28303D';
		$gray      = '#39414D';
		$green     = '#D1E4DD';
		$blue      = '#D1DFE4';
		$purple    = '#D1D1E4';
		$red       = '#E4D1D1';
		$orange    = '#E4DAD1';
		$yellow    = '#EEEADD';
		$white     = '#FFFFFF';

		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'Black', 'codearts' ),
					'slug'  => 'black',
					'color' => $black,
				),
				array(
					'name'  => esc_html__( 'Dark gray', 'codearts' ),
					'slug'  => 'dark-gray',
					'color' => $dark_gray,
				),
				array(
					'name'  => esc_html__( 'Gray', 'codearts' ),
					'slug'  => 'gray',
					'color' => $gray,
				),
				array(
					'name'  => esc_html__( 'Green', 'codearts' ),
					'slug'  => 'green',
					'color' => $green,
				),
				array(
					'name'  => esc_html__( 'Blue', 'codearts' ),
					'slug'  => 'blue',
					'color' => $blue,
				),
				array(
					'name'  => esc_html__( 'Purple', 'codearts' ),
					'slug'  => 'purple',
					'color' => $purple,
				),
				array(
					'name'  => esc_html__( 'Red', 'codearts' ),
					'slug'  => 'red',
					'color' => $red,
				),
				array(
					'name'  => esc_html__( 'Orange', 'codearts' ),
					'slug'  => 'orange',
					'color' => $orange,
				),
				array(
					'name'  => esc_html__( 'Yellow', 'codearts' ),
					'slug'  => 'yellow',
					'color' => $yellow,
				),
				array(
					'name'  => esc_html__( 'White', 'codearts' ),
					'slug'  => 'white',
					'color' => $white,
				),
			)
		);

		add_theme_support(
			'editor-gradient-presets',
			array(
				array(
					'name'     => esc_html__( 'Purple to yellow', 'codearts' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'purple-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to purple', 'codearts' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'yellow-to-purple',
				),
				array(
					'name'     => esc_html__( 'Green to yellow', 'codearts' ),
					'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'green-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to green', 'codearts' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
					'slug'     => 'yellow-to-green',
				),
				array(
					'name'     => esc_html__( 'Red to yellow', 'codearts' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'red-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to red', 'codearts' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'yellow-to-red',
				),
				array(
					'name'     => esc_html__( 'Purple to red', 'codearts' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'purple-to-red',
				),
				array(
					'name'     => esc_html__( 'Red to purple', 'codearts' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'red-to-purple',
				),
			)
		);

		/*
		* Adds starter content to highlight the theme on fresh sites.
		* This is done conditionally to avoid loading the starter content on every
		* page load, as it is a one-off operation only needed once in the customizer.
		*/
		if ( is_customize_preview() ) {
			require get_template_directory() . '/inc/starter-content.php';
			add_theme_support( 'starter-content', codearts_get_starter_content() );
		}

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height controls.
		add_theme_support( 'custom-line-height' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for experimental cover block spacing.
		add_theme_support( 'custom-spacing' );

		// Add support for custom units.
		// This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
		add_theme_support( 'custom-units' );

		// Remove feed icon link from legacy RSS widget.
		add_filter( 'rss_widget_feed_link', '__return_false' );
	}
}
add_action( 'after_setup_theme', 'codearts_setup' );

/**
 * Register widget area.
 *
 * 
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */
function codearts_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Quick Links', 'codearts' ),
			'id'            => 'quick-links',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'codearts' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h4 class="custom-footer-heading">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Services', 'codearts' ),
			'id'            => 'services',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'codearts' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h4 class="custom-footer-heading">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Technology', 'codearts' ),
			'id'            => 'technology',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'codearts' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h4 class="custom-footer-heading">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Digital Marketing', 'codearts' ),
			'id'            => 'digital-marketing',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'codearts' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h4 class="custom-footer-heading">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Social Links', 'codearts' ),
			'id'            => 'social-link',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'codearts' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);

	
}
add_action( 'widgets_init', 'codearts_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * 
 *
 * @global int $content_width Content width.
 *
 * @return void
 */
function codearts_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'codearts_content_width', 750 );
}
add_action( 'after_setup_theme', 'codearts_content_width', 0 );

/**
 * Enqueue scripts and styles.
 *
 * 
 *
 * @return void
 */
// function codearts_scripts() {
// 	// Note, the is_IE global variable is defined by WordPress and is used
// 	// to detect if the current browser is internet explorer.
// 	global $is_IE, $wp_scripts;
// 	if ( $is_IE ) {
// 		// If IE 11 or below, use a flattened stylesheet with static values replacing CSS Variables.
// 		wp_enqueue_style( 'codearts-style', get_template_directory_uri() . '/assets/css/ie.css', array(), wp_get_theme()->get( 'Version' ) );
// 	} else {
// 		// If not IE, use the standard stylesheet.
// 		wp_enqueue_style( 'codearts-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
// 	}

// 	// RTL styles.
// 	wp_style_add_data( 'codearts-style', 'rtl', 'replace' );

// 	// Print styles.
// 	wp_enqueue_style( 'codearts-print-style', get_template_directory_uri() . '/assets/css/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

// 	// Threaded comment reply styles.
// 	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
// 		wp_enqueue_script( 'comment-reply' );
// 	}

// 	// Register the IE11 polyfill file.
// 	wp_register_script(
// 		'codearts-ie11-polyfills-asset',
// 		get_template_directory_uri() . '/assets/js/polyfills.js',
// 		array(),
// 		wp_get_theme()->get( 'Version' ),
// 		true
// 	);

// 	// Register the IE11 polyfill loader.
// 	wp_register_script(
// 		'codearts-ie11-polyfills',
// 		null,
// 		array(),
// 		wp_get_theme()->get( 'Version' ),
// 		true
// 	);
// 	wp_add_inline_script(
// 		'codearts-ie11-polyfills',
// 		wp_get_script_polyfill(
// 			$wp_scripts,
// 			array(
// 				'Element.prototype.matches && Element.prototype.closest && window.NodeList && NodeList.prototype.forEach' => 'codearts-ie11-polyfills-asset',
// 			)
// 		)
// 	);

// 	// Main navigation scripts.
// 	if ( has_nav_menu( 'primary' ) ) {
// 		wp_enqueue_script(
// 			'codearts-primary-navigation-script',
// 			get_template_directory_uri() . '/assets/js/primary-navigation.js',
// 			array( 'codearts-ie11-polyfills' ),
// 			wp_get_theme()->get( 'Version' ),
// 			true
// 		);
// 	}

// 	// Responsive embeds script.
// 	wp_enqueue_script(
// 		'codearts-responsive-embeds-script',
// 		get_template_directory_uri() . '/assets/js/responsive-embeds.js',
// 		array( 'codearts-ie11-polyfills' ),
// 		wp_get_theme()->get( 'Version' ),
// 		true
// 	);
// }
// add_action( 'wp_enqueue_scripts', 'codearts_scripts' );

/**
 * Enqueue block editor script.
 *
 * 
 *
 * @return void
 */
function codearts_block_editor_script() {

	wp_enqueue_script( 'codearts-editor', get_theme_file_uri( '/assets/js/editor.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), true );
}

add_action( 'enqueue_block_editor_assets', 'codearts_block_editor_script' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * 
 *
 * @link https://git.io/vWdr2
 */
function codearts_skip_link_focus_fix() {

	// If SCRIPT_DEBUG is defined and true, print the unminified file.
	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
		echo '<script>';
		include get_template_directory() . '/assets/js/skip-link-focus-fix.js';
		echo '</script>';
	} else {
		// The following is minified via `npx terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
		?>
		<script>
		/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",(function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())}),!1);
		</script>
		<?php
	}
}
add_action( 'wp_print_footer_scripts', 'codearts_skip_link_focus_fix' );

/**
 * Enqueue non-latin language styles.
 *
 * 
 *
 * @return void
 */
function codearts_non_latin_languages() {
	$custom_css = codearts_get_non_latin_css( 'front-end' );

	if ( $custom_css ) {
		wp_add_inline_style( 'codearts-style', $custom_css );
	}
}
add_action( 'wp_enqueue_scripts', 'codearts_non_latin_languages' );

// SVG Icons class.
require get_template_directory() . '/classes/class-codearts-svg-icons.php';

// Custom color classes.
require get_template_directory() . '/classes/class-codearts-custom-colors.php';
new codearts_Custom_Colors();

// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Menu functions and filters.
require get_template_directory() . '/inc/menu-functions.php';

// Custom template tags for the theme.
require get_template_directory() . '/inc/template-tags.php';

// Customizer additions.
require get_template_directory() . '/classes/class-codearts-customize.php';
new codearts_Customize();

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Block Styles.
require get_template_directory() . '/inc/block-styles.php';

// Dark Mode.
require_once get_template_directory() . '/classes/class-codearts-dark-mode.php';
new codearts_Dark_Mode();

/**
 * Enqueue scripts for the customizer preview.
 *
 * 
 *
 * @return void
 */
function codearts_customize_preview_init() {
	wp_enqueue_script(
		'codearts-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script(
		'codearts-customize-preview',
		get_theme_file_uri( '/assets/js/customize-preview.js' ),
		array( 'customize-preview', 'customize-selective-refresh', 'jquery', 'codearts-customize-helpers' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'customize_preview_init', 'codearts_customize_preview_init' );

/**
 * Enqueue scripts for the customizer.
 *
 * 
 *
 * @return void
 */
function codearts_customize_controls_enqueue_scripts() {

	wp_enqueue_script(
		'codearts-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'codearts_customize_controls_enqueue_scripts' );

/**
 * Calculate classes for the main <html> element.
 *
 * 
 *
 * @return void
 */
function codearts_the_html_classes() {
	/**
	 * Filters the classes for the main <html> element.
	 *
	 * 
	 *
	 * @param string The list of classes. Default empty string.
	 */
	$classes = apply_filters( 'codearts_html_classes', '' );
	if ( ! $classes ) {
		return;
	}
	echo 'class="' . esc_attr( $classes ) . '"';
}

/**
 * Add "is-IE" class to body if the user is on Internet Explorer.
 *
 * 
 *
 * @return void
 */
function codearts_add_ie_class() {
	?>
	<script>
	if ( -1 !== navigator.userAgent.indexOf( 'MSIE' ) || -1 !== navigator.appVersion.indexOf( 'Trident/' ) ) {
		document.body.classList.add( 'is-IE' );
	}
	</script>
	<?php
}
add_action( 'wp_footer', 'codearts_add_ie_class' );

if ( ! function_exists( 'wp_get_list_item_separator' ) ) :
	/**
	 * Retrieves the list item separator based on the locale.
	 *
	 * Added for backward compatibility to support pre-6.0.0 WordPress versions.
	 *
	 * @since 6.0.0
	 */
	function wp_get_list_item_separator() {
		/* translators: Used between list items, there is a space after the comma. */
		return __( ', ', 'codearts' );
	}
endif;




/* *********** */

/* *** Stop plugin updates *** */
/*******************************/
function remove_core_updates() {
    global $wp_version;
    return (object) array('last_checked' => time(), 'version_checked' => $wp_version,);
} 
add_filter('pre_site_transient_update_core', 'remove_core_updates');
add_filter('pre_site_transient_update_plugins', 'remove_core_updates');
add_filter('pre_site_transient_update_themes', 'remove_core_updates');



/* *** Enqueue CSS & JS *** */
/****************************/
require get_template_directory() . '/inc/enqueue.php';

/* *** Navwalker *** */
/*********************/
require get_template_directory() . '/inc/navwalker.php';


/* **** Register Custom Post Types **** */
/***************************************/
require get_template_directory() . '/inc/custom-post-types.php';



/* *** Site identity fields *** */
/********************************/
function add_custom_fields($wp_customize) {


	/* Main Logo */
	$wp_customize->add_setting( 'main_logo', array(
        'default' => get_theme_file_uri('assets/images/logo.webp'), // Add Default Image URL 
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'main_logo_control', array(
        'label' => 'Upload Main Logo',
        'priority' => 5,
        'section' => 'title_tagline',
        'settings' => 'main_logo',
        'button_labels' => array(// All These labels are optional
                    'select' => 'Select Logo',
                    'remove' => 'Remove Logo',
                    'change' => 'Change Logo',
                    )
    )));

    /* Alternative Main Logo */
	$wp_customize->add_setting( 'alt_main_logo', array(
        'default' => get_theme_file_uri('assets/images/logo.webp'), // Add Default Image URL 
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'alt_main_logo_control', array(
        'label' => 'Upload Alternate Logo',
        'priority' => 5,
        'section' => 'title_tagline',
        'settings' => 'alt_main_logo',
        'button_labels' => array(// All These labels are optional
                    'select' => 'Select Logo',
                    'remove' => 'Remove Logo',
                    'change' => 'Change Logo',
                    )
    )));

    /* Project email address */
	$wp_customize->add_setting( 'project_email_address', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'project_email_address', array(
		'label' => 'Project Email Address',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

	/* Primary email address */
	$wp_customize->add_setting( 'primary_email_address', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'primary_email_address', array(
		'label' => 'Primary Email Address',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

	/* Secondary email address */
	$wp_customize->add_setting( 'secondary_email_address', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'secondary_email_address', array(
		'label' => 'Secondary Email Address',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

	/* Primary contact number */
	$wp_customize->add_setting( 'primary_contact_number', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'primary_contact_number', array(
		'label' => 'Primary Contact Number',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

	/* Secondary contact number */
	$wp_customize->add_setting( 'secondary_contact_number', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'secondary_contact_number', array(
		'label' => 'Secondary Contact Number',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

	/* facebook url */
	$wp_customize->add_setting( 'facebook_url', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'facebook_url', array(
		'label' => 'Facebook URL',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

	/* twitter url */
	$wp_customize->add_setting( 'twitter_url', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'twitter_url', array(
		'label' => 'Twitter URL',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

	/* Linkedin url */
	$wp_customize->add_setting( 'linkedin_url', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'linkedin_url', array(
		'label' => 'Linkedin URL',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

	/* instagram url */
	$wp_customize->add_setting( 'instagram_url', array(
	'default' => '',
	'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'instagram_url', array(
	'label' => 'Instagram URL',
	'section' => 'title_tagline',
	'type' => 'text'
	) );

	/* Codearts Address */
	$wp_customize->add_setting( 'codearts_address', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'codearts_address', array(
		'label' => 'Codearts Address',
		'section' => 'title_tagline',
		'type' => 'textarea'
	) );

	/* Codearts Address Link */
	$wp_customize->add_setting( 'codearts_address_link', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'codearts_address_link', array(
		'label' => 'Codearts Address Link',
		'section' => 'title_tagline',
		'type' => 'text'
	) );


	/* location iframe gmaps */
	$wp_customize->add_setting( 'google_map_iframe', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'google_map_iframe', array(
		'label' => 'Location iFrame',
		'section' => 'title_tagline',
		'type' => 'textarea'
	) );

	/* Copyright */
	$wp_customize->add_setting( 'copyright', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'copyright', array(
		'label' => 'Copyright',
		'section' => 'title_tagline',
		'type' => 'textarea'
	) );


}
add_action('customize_register', 'add_custom_fields');

/* add class nav-item in menu li item */
/**************************************/
function add_classes_on_li($classes, $item, $args) {
    $classes[] = 'nav-item';
    return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);

/* add class nav-link in menu li item anchor tag */
/*************************************************/
function add_classes_on_each_anchor( $atts, $item, $args ) {
    $class = 'nav-link';
    $atts['class'] = $class;
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_classes_on_each_anchor', 10, 3 );


/* add class active in current menu items and  menu-parent items */
/*****************************************************************/
function add_active_class($classes, $item) {
  if( $item->menu_item_parent == 0 && 
    in_array( 'current-menu-item', $classes ) ||
    in_array( 'current-menu-ancestor', $classes ) ||
    in_array( 'current-menu-parent', $classes ) ||
    in_array( 'current_page_parent', $classes ) ||
    in_array( 'current_page_ancestor', $classes )
    ) {
    $classes[] = "active";
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_active_class', 10, 2 );

/* *** load more blogs *** */
/**************************/

function weichie_load_more() {
  $ajaxposts = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 2,
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => $_POST['paged'],
  ]);

  $response = '';

  if($ajaxposts->have_posts()) {
    while($ajaxposts->have_posts()) : $ajaxposts->the_post(); ?>
    	<div class="blog-box">
            <div class="blog-box-content">
                <h5><?php echo get_the_title(); ?></h5>
                <ul class="blog-list">
                    <li><span><i class="fas fa-user"></i> <a href="#"><?php echo get_the_author(); ?></a></span></li>
                    <li><span><i class="fas fa-calendar-alt"></i> <a href="#"><?php echo get_the_date( 'F j, Y g:i a' ); ?></a></span></li>
                    <li><span><i class="fas fa-file"></i> <a href="#">Blog</a></span></li>
                    <li><span><i class="fas fa-comments"></i> <a href="#">0</a></span></li>
                </ul>
                <div class="custom-paragraph">
                    <p class="demo">
                    	<?php $my_content = apply_filters( 'the_content', get_the_content() );
								echo wp_trim_words( $my_content, 40); ?>
					</p>
                </div>
                <div class="blog-btn">
                    <a class="custom-button" href="<?php echo get_the_permalink(); ?>">Learn More</a>
                </div>
            </div>
        </div>
    <?php
    endwhile;
  } else {
    $response = '';
  }

  echo $response;
  exit;
}
add_action('wp_ajax_weichie_load_more', 'weichie_load_more');
add_action('wp_ajax_nopriv_weichie_load_more', 'weichie_load_more');


// practice


