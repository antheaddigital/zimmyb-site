<?php
/**
 * underscores functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package underscores
 */

if ( ! function_exists( 'underscores_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function underscores_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on underscores, use a find and replace
	 * to change 'underscores' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'underscores', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'underscores' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'underscores_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'underscores_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function underscores_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'underscores_content_width', 640 );
}
add_action( 'after_setup_theme', 'underscores_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function underscores_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'underscores' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'underscores_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function underscores_scripts() {
	wp_enqueue_style( 'underscores-style', get_stylesheet_uri() );
	wp_enqueue_style('owlCarousel-min', get_template_directory_uri() . '/libs/css/owl.carousel.css');
	wp_enqueue_style('owlCarousel-theme', get_template_directory_uri() . '/libs/css/owl.theme.default.min.css');

	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-2.2.3.min.js', array(), '2.2.3', true );

	wp_enqueue_script( 'boostrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', array('jquery'), '3.3.4', true );

	wp_enqueue_script( 'owlCarousel-min', get_template_directory_uri() . '/libs/js/owl.carousel.min.js', array('jquery'), '1.3.3', true );

	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), false, true );

	//wp_enqueue_script( 'underscores-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	//wp_enqueue_script( 'underscores-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'underscores_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Get *number of posts by category
 */
function zb_get_most_recent_posts($category_name, $num_of_posts) {

	$catID = get_cat_ID($category_name);

	$args=array(
    'cat' => $catID,
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => $num_of_posts,
    'caller_get_posts'=> 1
  );

	return new WP_Query( $args );

}

/**
 * Get category url
 */
 function zb_get_cat_url($cat_name){
	 $category_id = get_cat_ID( $cat_name );
	 $category_link = get_category_link( $category_id );
	 return $category_link;
 }

 /**
  * Get page header
  */
function zb_get_page_header($header_page_class, $header_text){
	return '<div class="page-title-header page-title-header--'.$header_page_class.'">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="page-title-header--header">'.$header_text.'</h1>
				</div>
			</div>
		</div>
	</div>';
}

/**
 * Get breadcrumb section
 */
function zb_get_breadcrumb($page){
	if($page == ''){
		$list_items = '<li class="active">Home</li>';
	} else {
		$list_items = '<li><a href="'. home_url( '/' ) .'">Home</a></li>';
		$list_items .= '<li class="active">'.$page.'</li>';
	}
	return '<div class="breadcrumb-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ol class="breadcrumb">'.$list_items.'
					</ol>
				</div>
			</div>
		</div>
	</div>';
}
