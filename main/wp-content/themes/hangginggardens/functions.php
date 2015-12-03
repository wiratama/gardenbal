<?php
/**
 * hangginggardens functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hangginggardens
 */

if ( ! function_exists( 'hangginggardens_setup' ) ) :

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

function hangginggardens_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on hangginggardens, use a find and replace
	 * to change 'hangginggardens' to the name of your theme in all the template files.
	 */

	load_theme_textdomain( 'hangginggardens', get_template_directory() . '/languages' );

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
	add_image_size( 'media_thumb', 320, 320, true ); // 220 pixels wide by 180 pixels tall, soft proportional crop mode
	add_image_size( 'slide_img', 960, 500, true ); // 220 pixels wide by 180 pixels tall, soft proportional crop mode
	add_image_size( 'blog_top', 720, 320, true ); // 220 pixels wide by 180 pixels tall, soft proportional crop mode
	add_image_size( 'blog_bottom', 220, 250, true ); // 220 pixels wide by 180 pixels tall, soft proportional crop mode
	add_image_size( 'news_reviews', 600, 420, true ); // 220 pixels wide by 180 pixels tall, soft proportional crop mode

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'hangginggardens' ),
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
	add_theme_support( 'custom-background', apply_filters( 'hangginggardens_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

}

endif; // hangginggardens_setup
add_action( 'after_setup_theme', 'hangginggardens_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */

function hangginggardens_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hangginggardens_content_width', 640 );
}
add_action( 'after_setup_theme', 'hangginggardens_content_width', 0 );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function hangginggardens_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hangginggardens' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'hangginggardens_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

function hangginggardens_scripts() {
	
	/*wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap-select-style', get_template_directory_uri() . '/css/bootstrap-select.css' );
	wp_enqueue_style( 'blog-style', get_template_directory_uri() . '/css/blog.css' );
	wp_enqueue_style( 'menu-style', get_template_directory_uri() . '/css/menu.css' );
	wp_enqueue_style( 'hangginggardens-style', get_stylesheet_uri() );
	wp_enqueue_style( 'supersized-style', get_template_directory_uri() . '/css/supersized.css' );
	wp_enqueue_style( 'font-awesome-style', get_template_directory_uri() . '/css/font-awesome.min.css' );

	wp_enqueue_script( 'bootstrap-select', get_template_directory_uri() . '/js/bootstrap-select.js' );
	wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js' );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js' );
	wp_enqueue_script( 'modernizr-custom-transform-media-queries', get_template_directory_uri() . '/js/modernizr.custom.transform-media-queries.js' );
	wp_enqueue_script( 'default-randheli', get_template_directory_uri() . '/js/default.randheli.min.js' );
*/

	//wp_enqueue_script('jquery');


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hangginggardens_scripts' );




/*function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="ajax"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');*/

add_shortcode('blogpage', 'cleanproductsloop');
function echo_blogpage ($number =5) { 
    wp_reset_query();
	$args = array(
    'post_type' => 'post',
    'showposts' => $number,
    'orderby'   => 'date',
    'order'     => 'desc',
    );
    $event_loop = new WP_Query($args);
    if($event_loop->have_posts()):while($event_loop->have_posts()):$event_loop->the_post();
    ?>
		
		
		<div class="col-md-6"> 
			<div class="blog-item">
				<?php the_post_thumbnail('', array('class' => 'img-responsive')); ?>
				<h1><?php
    $posttags = get_the_tags();
    if ($posttags) {
      foreach($posttags as $tag) {
        echo $tag->name . ' ';
      }
    }
?>
				 </h1>
				<h2><?php the_title(); ?></h2>
				by: <?php the_field('author_blog'); ?>
				<p><?php echo substr(strip_tags(get_the_content()),0,183); ?>..<p>
				<a href="<?php the_permalink(); ?>">READ MORE</a>
			</div>
		</div>
   
    <?php 
    endwhile;
    endif;
}

function echo_blogpage2 () {
    wp_reset_query();
    $args = array(
    'post_type' => 'post',
    'showposts' => 5,
    'orderby' => 'date',
    'order' => 'desc'
    );

    $event_loop = new WP_Query($args );
    //query_posts($query_string  );
    $list_post=1;
    if($event_loop->have_posts()):
        while($event_loop->have_posts()):$event_loop->the_post();
        if($list_post==5) {
            break;
        } else if($list_post>1) {
    //$blogpage_data = get_field('blogpage_data');
    ?>

		<div class="row blog-items">
				<div class="col-xs-4 col-md-4 item-left-img">
					<?php the_post_thumbnail('blog_bottom', array('class' => 'img-responsive')); ?>
				</div>
				<div class="col-xs-8 col-md-8 blog-desc">
				<a href="#">Pool</a>
				 <h3><a href="<?php the_permalink();?>" class="blog-link"><?php the_title(); ?></a></h3>
				<?php echo substr(strip_tags(get_the_content()),0,330); ?>
			 	<p>by <?php $create_by = get_post_meta(get_the_ID(), 'create_by', true ); ?> <?php echo $create_by; ?> <?php //the_author(); ?> <i class="fa fa-calendar-o"></i> <?php the_date(); ?> <i class="fa fa-clock-o"></i> <?php the_time(); ?>
            <i class="fa fa-map-marker"></i> Ubud, Bali </p>
				</div>
		</div>

    <?php
    }
    $list_post++;
    endwhile;
    endif;
}

add_shortcode('newspage', 'cleanproductsloop');
function echo_newspage ($number =100) { 
    wp_reset_query();
    $args = array(
    'post_type' => 'news',
    'showposts' => $number,
    'orderby'   => 'date',
    'order'     => 'desc',
    );
    $event_loop = new WP_Query($args);
    if($event_loop->have_posts()):while($event_loop->have_posts()):$event_loop->the_post();
    //$blogpage_data = get_field('blogpage_data');
    ?>
		<div class="row the-news">
			<div class="col-md-12">
				<div class="col-md-5">
					<?php the_post_thumbnail('news_reviews', array('class' => 'img-responsive')); ?>					
				</div>
				<div class="col-md-7">
					<h1><?php the_title(); ?></h1>
					<h2><?php echo get_the_date(); ?></h2>
					<p><?php echo substr(strip_tags(get_the_content()),0,164); ?> [..]</p>
					<a href="<?php the_permalink(); ?>">FULL STORY</a>
				</div>
			</div>
		</div>      
    <?php 
    endwhile;
    endif;
}

add_action( 'init', 'hangginggardens_new_default_post_type', 1 );
function hangginggardens_new_default_post_type() {
 
    register_post_type( 'post', array(
        'labels' => array(
            'name_admin_bar' => _x( 'Post', 'add new on admin bar' ),
        ),
        'public'  => true,
        '_builtin' => false, 
        '_edit_link' => 'post.php?post=%d', 
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'blog' ),
        'query_var' => false,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'post-formats' ),
    ) );
}

/**/
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
require_once('wp_bootstrap_navwalker.php');