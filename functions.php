<?php
/**
 * underscores functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package underscores
 */

function session_init() {
	if(!session_id()) {
   	session_start();
 	}
}
add_action('init', 'session_init', 1);

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
 * Mangae jQuery
 */
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

/**
 * Enqueue scripts and styles.
 */
function underscores_scripts() {
	wp_enqueue_style( 'underscores-style', get_stylesheet_uri() );
	wp_enqueue_script( 'joint-libs', get_template_directory_uri() . '/js/libs.js', array('jquery'), '20170327.01', true );
	wp_enqueue_script( 'particlesjs', get_template_directory_uri() . '/js/particles.js', array('jquery'), '20170327.01', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('joint-libs'), '20170327.01', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'underscores_scripts' );

/**
 * WP_head cleanup
 */
add_action('after_setup_theme','start_cleanup');
function start_cleanup() {
  // Initialize the cleanup
  add_action('init', 'cleanup_head');
}
// WordPress cleanup function
function cleanup_head() {

  // EditURI link
  remove_action( 'wp_head', 'rsd_link' );

  // Category feed links
  remove_action( 'wp_head', 'feed_links_extra', 3 );

  // Post and comment feed links
  remove_action( 'wp_head', 'feed_links', 2 );

  // Windows Live Writer
  remove_action( 'wp_head', 'wlwmanifest_link' );

  // Index link
  // remove_action( 'wp_head', 'index_rel_link' );

  // Previous link
  // remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );

  // Start link
  // remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );

  // Canonical
  // remove_action('wp_head', 'rel_canonical', 10, 0 );

  // DNS Prefetch
  remove_action( 'wp_head', 'wp_resource_hints', 2 );

  // Shortlink
  // remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );

  // Links for adjacent posts
  // remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

	// WP json api
	remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );

  // WP version
  remove_action( 'wp_head', 'wp_generator' );

	// WP emoji
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );

}

/**
 * Customer redirect
 */
add_action('init', 'do_output_buffer');
function do_output_buffer() {
	ob_start();
}

function get_link_by_slug($slug, $type = 'post'){
  $post = get_page_by_path($slug, OBJECT, $type);
  return get_permalink($post->ID);
}

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
function zb_get_breadcrumb($home,$second,$third){
	if($home == true){
		$list_items = '<li class="active">Home</li>';
	} elseif($third == '') {
		$list_items = '<li><a href="'. home_url( '/' ) .'">Home</a></li>';
		$list_items .= '<li class="active">'.$second.'</li>';
	} else {
		$list_items = '<li><a href="'. home_url( '/' ) .'">Home</a></li>';
		$list_items .= '<li><a href="'. zb_get_cat_url($second) .'">'.$second.'</a></li>';
		$list_items .= '<li class="active">'.$third.'</li>';
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
