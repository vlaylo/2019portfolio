<?php
/**
 * vincelaylo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package vincelaylo
 */

if ( ! function_exists( 'vincelaylo_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function vincelaylo_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on vincelaylo, use a find and replace
		 * to change 'vincelaylo' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'vincelaylo', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'main-menu1' => esc_html__( 'Main Menu 1', 'vincelaylo' )
		) );

	

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'vincelaylo_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'vincelaylo_setup' );


 
function wpb_widgets_init() {

    register_sidebar( array(
        'name' =>__( 'Footer', 'wpb'),
        'id' => 'footer',
        'description' => __( 'Main footer Widget', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
	) );

	register_sidebar( array(
        'name' => __( 'Pre-Footer', 'wpb' ),
        'id' => 'pre-footer',
        'description' => __( 'Comes before the footer.', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	
    register_sidebar( array(
        'name' =>__( 'Locations', 'wpb'),
        'id' => 'locations',
		'before_widget' => '<div id="locations-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<!--',
		'after_title'   => '-->'));

	
    register_sidebar( array(
        'name' =>__( 'Mobile Locations', 'wpb'),
        'id' => 'mlocations',
		'before_widget' => '<div id="mobile-locations-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<!--',
		'after_title'   => '-->'));
    }
 
add_action( 'widgets_init', 'wpb_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vincelaylo_scripts() {
	wp_enqueue_style( 'vincelaylo-style', get_stylesheet_uri(), array(), filemtime(get_theme_file_path('/style.css')));

	wp_register_script('common-js', get_template_directory_uri() . '/js-build/common.min.js', array('jquery'), filemtime(get_theme_file_path('/js-build/common.min.js')));
	wp_localize_script( 'common-js', 'avdata', array(
        'siteUrl' => get_stylesheet_directory_uri()
    ));
	wp_enqueue_script( 'common-js' );

	wp_enqueue_script('fa-svg', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.js', array(), '5.10.3');

	wp_enqueue_script('bodymovin', 'https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.9/lottie.min.js', array(), '5.10.3');
	
	wp_enqueue_style('typekit', 'https://use.typekit.net/ier0aii.css', array(), 3);

}
add_action( 'wp_enqueue_scripts', 'vincelaylo_scripts' );



require get_template_directory() . '/inc/template-tags.php';





function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');






function wide_guten() {
    ?>
         <style type="text/css">
           .editor-styles-wrapper .wp-block {
                 max-width: 96% !important;
             }
          </style>
     <?php
 }
 add_action('admin_head', 'wide_guten');
 function column_outline_styles() { ?>
    <style type="text/css">
           [data-type="core/column"] > .editor-block-list__block-edit.block-editor-block-list__block-edit:before {
               border: 1px solid rgb(215, 215, 215);
           }
     </style>
<?php
}
add_action('admin_head', 'column_outline_styles');

function wpb_add_google_fonts() {
 
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat&display=swap', false ); 
	}
	 
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

