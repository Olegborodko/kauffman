<?php
/**
 * kauffman functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kauffman
 */

if ( ! function_exists( 'kauffman_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function kauffman_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on kauffman, use a find and replace
		 * to change 'kauffman' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'kauffman', get_template_directory() . '/languages' );

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
      'menu-up' => 'Menu up'
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
		add_theme_support( 'custom-background', apply_filters( 'kauffman_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
    
    add_theme_support( 'job-manager-templates' );
    
    
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
add_action( 'after_setup_theme', 'kauffman_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kauffman_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'kauffman_content_width', 640 );
}
add_action( 'after_setup_theme', 'kauffman_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kauffman_widgets_init() {
//	register_sidebar( array(
//		'name'          => esc_html__( 'Sidebar', 'kauffman' ),
//		'id'            => 'sidebar-1',
//		'description'   => esc_html__( 'Add widgets here.', 'kauffman' ),
//		'before_widget' => '<section id="%1$s" class="widget %2$s">',
//		'after_widget'  => '</section>',
//		'before_title'  => '<h2 class="widget-title">',
//		'after_title'   => '</h2>',
//	) );

  register_sidebar( array(
  'name'          => 'Footer left',
  'id'            => 'footer_left',
  'before_widget' => '<div>',
  'after_widget'  => '</div>',
  'before_title'  => '<h2 class="widget-title">',
  'after_title'   => '</h2>',
  ) );

//  register_sidebar( array(
//  'name'          => 'Footer center',
//  'id'            => 'footer_center',
//  'before_widget' => '<div>',
//  'after_widget'  => '</div>',
//  'before_title'  => '<h2 class="widget-title">',
//  'after_title'   => '</h2>',
//  ) );
//
//  register_sidebar( array(
//  'name'          => 'Footer right',
//  'id'            => 'footer_right',
//  'before_widget' => '<div>',
//  'after_widget'  => '</div>',
//  'before_title'  => '<h2 class="widget-title">',
//  'after_title'   => '</h2>',
//  ) );
}
add_action( 'widgets_init', 'kauffman_widgets_init' );

/**
 * Enqueue scripts and styles.
 */



function kauffman_scripts() {
  //wp_enqueue_style( 'kauffman-style', get_stylesheet_uri());
  wp_enqueue_script("jquery");
  //wp_deregister_script('jquery');
	wp_enqueue_style( 'kauffman-style', get_template_directory_uri().'/build/app.css' );
  
  //wp_enqueue_script( 'kauffman-js-jquery', get_template_directory_uri() . '/jquery/jquery-3.2.0.min.js', array(), true );
	//wp_enqueue_script( 'kauffman-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	//wp_enqueue_script( 'kauffman-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
  wp_enqueue_script( 'kauffman-js', get_template_directory_uri() . '/build/app.js', array(), '20151215', true );
  //wp_enqueue_script( 'datatable-js', '//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js', array(), true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kauffman_scripts' );

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

/* --------------------------------- */

// Register Custom Post Type
function custom_post_type() {
  
  $labels = array(
  'name'                  => _x( 'press releases', 'Post Type General Name', 'text_domain' ),
  'singular_name'         => _x( 'item', 'Post Type Singular Name', 'text_domain' ),
  'menu_name'             => __( 'Press releases', 'text_domain' ),
  'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
  'archives'              => __( 'Item Archives', 'text_domain' ),
  'attributes'            => __( 'Item Attributes', 'text_domain' ),
  'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
  'all_items'             => __( 'All Items', 'text_domain' ),
  'add_new_item'          => __( 'Add New Item', 'text_domain' ),
  'add_new'               => __( 'Add New', 'text_domain' ),
  'new_item'              => __( 'New Item', 'text_domain' ),
  'edit_item'             => __( 'Edit Item', 'text_domain' ),
  'update_item'           => __( 'Update Item', 'text_domain' ),
  'view_item'             => __( 'View Item', 'text_domain' ),
  'view_items'            => __( 'View Items', 'text_domain' ),
  'search_items'          => __( 'Search Item', 'text_domain' ),
  'not_found'             => __( 'Not found', 'text_domain' ),
  'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
  'featured_image'        => __( 'Featured Image', 'text_domain' ),
  'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
  'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
  'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
  'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
  'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
  'items_list'            => __( 'Items list', 'text_domain' ),
  'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
  'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  );
  $args = array(
  'label'                 => __( 'press releases item', 'text_domain' ),
  'description'           => __( 'Post Type Description', 'text_domain' ),
  'labels'                => $labels,
  'supports'              => array('title', 'editor', 'thumbnail'),
  'taxonomies'            => array( 'press_releases_category' ),
  'hierarchical'          => false,
  'public'                => true,
  'show_ui'               => true,
  'show_in_menu'          => true,
  'menu_position'         => 5,
  'show_in_admin_bar'     => true,
  'show_in_nav_menus'     => true,
  'can_export'            => true,
  'has_archive'           => true,
  'exclude_from_search'   => false,
  'publicly_queryable'    => true,
  'capability_type'       => 'post',
  );
  register_post_type( 'press_releases', $args );
  
}
add_action( 'init', 'custom_post_type', 0 );

//================================================

function _thz_filter_auto_activate_builder() {
  
  $auto = array(
  'post' => true,
  'page' => true,
  'press_releases' => true,
  'team' => true
  );
  
  return  $auto;
}
add_filter( 'fw_ext_page_builder_settings_options_post_types_default_value', '_thz_filter_auto_activate_builder' );




function _thz_filter_page_builder_support($result){
  
  $result['thzsection'] = esc_html__('Thz Section','fw');
  return $result;
  
}
add_filter( 'fw_ext_page_builder_supported_post_types', '_thz_filter_page_builder_support' );

// Customize mce editor font sizes
if ( ! function_exists( 'wpex_mce_text_sizes' ) ) {
  function wpex_mce_text_sizes( $initArray ){
    $initArray['fontsize_formats'] = "9px 10px 11px 12px 13px 14px 15px 16px 17px 18px 19px 20px 21px 22px 23px 24px 25px 26px 27px 28px 29px 30px 31px 32px 33px 34px 35px 36px 37px 38px 39px 40px 41px 42px 43px 44px 45px 50px 55px 60px";
    return $initArray;
  }
}
add_filter( 'tiny_mce_before_init', 'wpex_mce_text_sizes' );

//custom fonts mce editor
add_filter( 'tiny_mce_before_init', 'mce_custom_fonts' );
function mce_custom_fonts( $init ) {
  $theme_advanced_fonts = "GTAmerica=GTAmerica,Helvetica,Arial,sans-serif;" .
  "GTAmerica Medium=GTAmerica Medium,Helvetica,Arial,sans-serif;" .
  "NocturneSerif-ExtraBold=NocturneSerif-ExtraBold,Times New Roman,serif;".
  "Andale Mono=andale mono,times;" .
  "Arial=arial,helvetica,sans-serif;" .
  "Arial Black=arial black,avant garde;" .
  "Book Antiqua=book antiqua,palatino;" .
  "Comic Sans MS=comic sans ms,sans-serif;" .
  "Courier New=courier new,courier;" .
  "Georgia=georgia,palatino;" .
  "Helvetica=helvetica;" .
  "Impact=impact,chicago;" .
  "Symbol=symbol;" .
  "Tahoma=tahoma,arial,helvetica,sans-serif;" .
  "Terminal=terminal,monaco;" .
  "Times New Roman=times new roman,times;" .
  "Trebuchet MS=trebuchet ms,geneva;" .
  "Verdana=verdana,geneva;" .
  "Webdings=webdings;" .
  "Wingdings=wingdings,zapf dingbats";
  $init['font_formats'] = $theme_advanced_fonts;
  return $init;
}

//custom admin style
//hide or show fields icos admin panel
function custom_admin_css() {
  //$url = get_stylesheet_directory_uri() . '/mvc/js/wp_admin.js';
  //echo '"<script type="text/javascript" src="'. $url . '"></script>"';
  wp_enqueue_style( 'admin-style-builder', get_template_directory_uri().'/admin/admin.css' );
}
add_action('admin_footer', 'custom_admin_css');

//=======================

function color_next($x1){
  if ($x1==1) {
    return '#3a8cd3';
  }
  if ($x1/2-round($x1/2)==0) {
    return '#dd9933';
  }
  if ($x1/3-round($x1/3)==0) {
    return '#89d23b';
  }
  if ($x1==4) {
    return '#3a8cd3';
  }
  if ($x1/5-round($x1/5)==0) {
    return '#90a360';
  }
  if ($x1==6) {
    return '#bdd420';
  }
  if ($x1/7-round($x1/7)==0) {
    return '#f13788';
  }
  if ($x1/8-round($x1/8)==0) {
    return '#24a74f';
  }
  if ($x1/9-round($x1/9)==0) {
    return '#4b19d2';
  }
  
  return '#3a8cd3';
}

//==========================

function override_mce_options($initArray) {
  $opts = '*[*]';
  $initArray['valid_elements'] = $opts;
  $initArray['extended_valid_elements'] = $opts;
  return $initArray;
}
add_filter('tiny_mce_before_init', 'override_mce_options');

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

//add_filter( 'tinymce_templates_enable_media_buttons', function(){
//  return true; // Displays insert template button on all visual editors
//});


//add custom styles to the WordPress editor
//function my_custom_styles( $init_array ) {
//
//  $style_formats = array(
//    // These are the custom styles
//  array(
//  'title' => 'Red Button',
//  'block' => 'span',
//  'classes' => 'red-button',
//  'wrapper' => true,
//  ),
//  array(
//  'title' => 'Content Block',
//  'block' => 'span',
//  'classes' => 'content-block',
//  'wrapper' => true,
//  ),
//  array(
//  'title' => 'Highlighter',
//  'block' => 'span',
//  'classes' => 'highlighter',
//  'wrapper' => true,
//  ),
//  );
//  $init_array['style_formats'] = json_encode( $style_formats );
//
//  return $init_array;
//
//}
//add_filter( 'tiny_mce_before_init', 'my_custom_styles' );

/* --- */

/* --------------------------------- */

// Register Custom Post Type
function custom_post_type_game() {
  
  $labels = array(
  'name'                  => _x( 'team', 'Post Type General Name', 'text_domain' ),
  'singular_name'         => _x( 'team', 'Post Type Singular Name', 'text_domain' ),
  'menu_name'             => __( 'Team', 'text_domain' ),
  'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
  'archives'              => __( 'Item Archives', 'text_domain' ),
  'attributes'            => __( 'Item Attributes', 'text_domain' ),
  'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
  'all_items'             => __( 'All Items', 'text_domain' ),
  'add_new_item'          => __( 'Add New Item', 'text_domain' ),
  'add_new'               => __( 'Add New', 'text_domain' ),
  'new_item'              => __( 'New Item', 'text_domain' ),
  'edit_item'             => __( 'Edit Item', 'text_domain' ),
  'update_item'           => __( 'Update Item', 'text_domain' ),
  'view_item'             => __( 'View Item', 'text_domain' ),
  'view_items'            => __( 'View Items', 'text_domain' ),
  'search_items'          => __( 'Search Item', 'text_domain' ),
  'not_found'             => __( 'Not found', 'text_domain' ),
  'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
  'featured_image'        => __( 'Featured Image', 'text_domain' ),
  'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
  'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
  'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
  'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
  'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
  'items_list'            => __( 'Items list', 'text_domain' ),
  'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
  'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  );
  $args = array(
  'label'                 => __( 'person', 'text_domain' ),
  'description'           => __( 'Post Type Description', 'text_domain' ),
  'labels'                => $labels,
  'supports'              => array('title', 'editor', 'thumbnail'),
  'taxonomies'            => array( 'person_category' ),
  'hierarchical'          => false,
  'public'                => true,
  'show_ui'               => true,
  'show_in_menu'          => true,
  'menu_position'         => 5,
  'show_in_admin_bar'     => true,
  'show_in_nav_menus'     => true,
  'can_export'            => true,
  'has_archive'           => true,
  'exclude_from_search'   => false,
  'publicly_queryable'    => true,
  'capability_type'       => 'post',
  );
  register_post_type( 'team', $args );
  
}
add_action( 'init', 'custom_post_type_game', 0 );

//================================================

// Register Custom Taxonomy
function custom_taxonomy() {
  
  $labels = array(
  'name'                       => _x( 'person_category', 'Taxonomy General Name', 'text_domain' ),
  'singular_name'              => _x( 'person_category', 'Taxonomy Singular Name', 'text_domain' ),
  'menu_name'                  => __( 'Person category', 'text_domain' ),
  'all_items'                  => __( 'All Items', 'text_domain' ),
  'parent_item'                => __( 'Parent Item', 'text_domain' ),
  'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
  'new_item_name'              => __( 'New Item Name', 'text_domain' ),
  'add_new_item'               => __( 'Add New Item', 'text_domain' ),
  'edit_item'                  => __( 'Edit Item', 'text_domain' ),
  'update_item'                => __( 'Update Item', 'text_domain' ),
  'view_item'                  => __( 'View Item', 'text_domain' ),
  'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
  'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
  'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
  'popular_items'              => __( 'Popular Items', 'text_domain' ),
  'search_items'               => __( 'Search Items', 'text_domain' ),
  'not_found'                  => __( 'Not Found', 'text_domain' ),
  'no_terms'                   => __( 'No items', 'text_domain' ),
  'items_list'                 => __( 'Items list', 'text_domain' ),
  'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
  );
  $args = array(
  'labels'                     => $labels,
  'hierarchical'               => true,
  'public'                     => true,
  'show_ui'                    => true,
  'show_admin_column'          => true,
  'show_in_nav_menus'          => true,
  'show_tagcloud'              => true,
  );
  register_taxonomy( 'person_category', array( 'team' ), $args );
  
}
add_action( 'init', 'custom_taxonomy', 0 );

/* --------------------------------- */

// Register Custom Post Type
function custom_post_type_journal() {
  
  $labels = array(
  'name'                  => _x( 'journal Articles', 'Post Type General Name', 'text_domain' ),
  'singular_name'         => _x( 'post', 'Post Type Singular Name', 'text_domain' ),
  'menu_name'             => __( 'journal Articles', 'text_domain' ),
  'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
  'archives'              => __( 'Item Archives', 'text_domain' ),
  'attributes'            => __( 'Item Attributes', 'text_domain' ),
  'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
  'all_items'             => __( 'All Items', 'text_domain' ),
  'add_new_item'          => __( 'Add New Item', 'text_domain' ),
  'add_new'               => __( 'Add New', 'text_domain' ),
  'new_item'              => __( 'New Item', 'text_domain' ),
  'edit_item'             => __( 'Edit Item', 'text_domain' ),
  'update_item'           => __( 'Update Item', 'text_domain' ),
  'view_item'             => __( 'View Item', 'text_domain' ),
  'view_items'            => __( 'View Items', 'text_domain' ),
  'search_items'          => __( 'Search Item', 'text_domain' ),
  'not_found'             => __( 'Not found', 'text_domain' ),
  'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
  'featured_image'        => __( 'Featured Image', 'text_domain' ),
  'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
  'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
  'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
  'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
  'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
  'items_list'            => __( 'Items list', 'text_domain' ),
  'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
  'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  );
  $args = array(
  'label'                 => __( 'person', 'text_domain' ),
  'description'           => __( 'Post Type Description', 'text_domain' ),
  'labels'                => $labels,
  'supports'              => array('title', 'editor', 'thumbnail'),
  'taxonomies'            => array( 'category', 'post_tag' ),
  'hierarchical'          => false,
  'public'                => true,
  'show_ui'               => true,
  'show_in_menu'          => true,
  'menu_position'         => 5,
  'show_in_admin_bar'     => true,
  'show_in_nav_menus'     => true,
  'can_export'            => true,
  'has_archive'           => true,
  'exclude_from_search'   => false,
  'publicly_queryable'    => true,
  'capability_type'       => 'post',
  );
  register_post_type( 'journal_posts', $args );
  
}
add_action( 'init', 'custom_post_type_journal', 0 );