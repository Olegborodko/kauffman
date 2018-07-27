<?php
if ( ! defined( 'ABSPATH' ) ) {
    die( '-1' );
}
function mvc_textbox($atts, $content = null) {

    extract(shortcode_atts(
            array(
                'title'    => '',
                'content_text'  => '',
                'css'	   => '',
            ), $atts)
    );
    $css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ),  $atts );
    ob_start(); ?>

        <div class="block-with-border-top clearfix row <?php echo $css_class?>">
            <div class="col-md-7 "><?php echo $title?></div>
        </div>
        <div class="row">
            <div class="col-md-12 offset-md-1"><?php echo $content_text; ?></div>
        </div>
    <?php
    return ob_get_clean();
}
add_shortcode('mvc_textbox', 'mvc_textbox');



vc_map( array(
    "name" 			=> __( 'Text Box Info With Top Line', 'counter' ),
    "base" 			=> "mvc_textbox",
    "category" 		=> __('Fellow'),
    "description" 	=> __('Your milestones, achievements etc', 'counter'),
    "icon" => plugin_dir_url( __FILE__ ).'../icons/counter.png',
    'params' => array(

        array(
            "type" 			=> 	"textfield",
            "heading" 		=> 	__( 'Title', 'counter' ),
            "param_name" 	=> 	"title",
            "description" 	=> 	__( 'Box Title', 'counter' ),
            "value"			=>	"",
            "group" 		=> 	'General',
        ),
        array(
            "type" 			=> 	"textarea_html",
            "heading" 		=> 	__( 'Description', 'info-box-content' ),
            "param_name" 	=> 	"content_text",
            "description" 	=> 	__( 'write detail about info banner', 'info-banner-vc' ),
            "group" 		=> 	'General',
            "value"			=> ''
        ),
        array(
            "type" 			=> "css_editor",
            "heading" 		=> __( 'Styling Info Banner', 'info-banner-vc' ),
            "param_name" 	=> "css",
            "group" 		=> 'Design Options',
        ),

    ),
) );

