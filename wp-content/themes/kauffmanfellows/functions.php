<?php
require_once( __DIR__ . '/inc/teamview.php');
require_once( __DIR__ . '/inc/fellowmap.php');
require_once( __DIR__ . '/inc/shortcode.php');

add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);
function enqueue_child_theme_styles() {
    wp_enqueue_style( 'bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function theme_js() {
    global $wp_scripts;
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
    wp_enqueue_script( 'bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js');
    wp_enqueue_script( 'isotope _js', 'https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js');

    //wp_enqueue_script( 'my_custom_js', get_template_directory_uri() . '/assets/js/scripts.js');
}
add_action( 'wp_enqueue_scripts', 'theme_js');

/**
 * Footer add extra column
 */
function footerAddColumn(){
    register_sidebar( array(
        'name'          => __( 'Footer Extra', 'entrepreneur-lite' ),
        'id'            => 'sidebar-5',
        'description'   => __( 'Appears in the footer section of the site.', 'entrepreneur-lite' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'footerAddColumn');

function mytheme_customize_register( $wp_customize ) {
    $wp_customize->add_section('kauffman_section', array(
            'title'      => __( 'Kauffman section', 'kauffmanfellows' ),
            'priority'   => 190,
            'capability' => 'kauffman_theme_options'
        )
    );
}
add_action( 'customize_register', 'mytheme_customize_register' );

/**
 * Create Fellow directory post type
 */
function fellows_derectory_post() {
    register_post_type( 'fellow_directory',
        array(
            'labels' => array(
                'name' => __( 'Fellows' ),
                'singular_name' => __( 'Fellow' ),
                'menu_name' => __('Fellows List')
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'fellows-directory'),
            'supports' => array( 'thumbnail', 'title', 'custome_field'),

        )
    );
}
add_action( 'init', 'fellows_derectory_post' );


/**
 * Create Team post type
 */
function create_post_team() {
    register_post_type( 'kaufffman_team',
        array(
            'labels' => array(
                'name' => __( 'Teams' ),
                'singular_name' => __( 'Team' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'kauffman-fellows-team'),
            'taxonomies' => array('category'),
            'supports' => array( 'thumbnail', 'title', 'editor', 'custome_field'),

        )
    );
}
add_action( 'init', 'create_post_team' );


