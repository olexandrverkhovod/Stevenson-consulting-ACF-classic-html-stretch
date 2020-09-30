<?php
/**
 * stevenson-consulting functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package stevenson-consulting
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'stevenson_consulting_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function stevenson_consulting_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on stevenson-consulting, use a find and replace
		 * to change 'stevenson-consulting' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'stevenson-consulting', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'stevenson-consulting' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'stevenson_consulting_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'stevenson_consulting_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function stevenson_consulting_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'stevenson_consulting_content_width', 640 );
}
add_action( 'after_setup_theme', 'stevenson_consulting_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function stevenson_consulting_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'stevenson-consulting' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'stevenson-consulting' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'stevenson_consulting_widgets_init' );

/**
 * Disable default post/page editor;
 */
add_action( 'init', 'my_remove_post_formats_support', 10 );
	function my_remove_post_formats_support() {
	remove_post_type_support( 'page', 'editor' );
	remove_post_type_support( 'post', 'editor' );
}

/**
 * Enqueue scripts and styles.
 */
function stevenson_consulting_scripts() {
	wp_enqueue_style( 'stevenson-consulting-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'animsition', get_template_directory_uri() . '/assets/css/animsition.min.css');
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css');
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/fonts/fontawesome/css/fontawesome.css');
	wp_enqueue_style( 'brand', get_template_directory_uri() . '/assets/fonts/fontawesome/css/brands.css');
	wp_enqueue_style( 'solid', get_template_directory_uri() . '/assets/fonts/fontawesome/css/solid.css');

	if ( !is_admin() ) {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', ( 'https://code.jquery.com/jquery-1.12.4.min.js' ), false, '3.4.1', true );
		wp_enqueue_script( 'jquery' );
	}
	wp_enqueue_script( 'search', get_template_directory_uri() . '/assets/js/search.js', array('jquery', 'animsition'), false, true  );
	wp_enqueue_script( 'animsition', get_template_directory_uri() . '/assets/js/animsition.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), false, true  );
	wp_enqueue_script( 'brands', get_template_directory_uri() . '/assets/fonts/fontawesome/js/brands.js');
	wp_enqueue_script( 'solid', get_template_directory_uri() . '/assets/fonts/fontawesome/js/solid.js');
	wp_enqueue_script( 'fontawesome', get_template_directory_uri() . '/assets/fonts/fontawesome/js/fontawesome.js');

	wp_style_add_data( 'stevenson-consulting-style', 'rtl', 'replace' );

	wp_enqueue_script( 'stevenson-consulting-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'stevenson_consulting_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//TODO: Should be Removed  after development
add_filter('show_admin_bar', '__return_false');

//add SVG to allowed file uploads
function add_file_types_to_uploads($file_types){

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );

    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');