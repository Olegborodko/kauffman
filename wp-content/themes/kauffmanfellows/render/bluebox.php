<?php
if ( ! defined( 'ABSPATH' ) ) {
    die( '-1' );
}
function blue_box($atts, $content = null) {

    extract(shortcode_atts(
            array(
                'title'    => '',
                'bgtitle'  => 'ISRAEL',
                'content_text'  => '',
                'subtitle'      => '',
                'css'	   => '',
            ), $atts)
    );
    $css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ),  $atts );
    ob_start(); ?>

    <div class="col-md-6 block-with-blue-bg <?php echo $css_class ?>">
        <div class="">
            <div class="block-text-background">
                <div class="">
                    <div class=""><?php echo $bgtitle?></div>
                </div>
            </div>
            <div class="" >
                <div >
                    <div>
                        <h4><?php echo $title?></h4>
                        <div class="block-subtitle"><?php echo $subtitle?></div>
                    </div>
                </div>
            </div>
            <div class="block-body" >
                <div >
                    <div >
                        <div >
                            <img class="size-full" src="http://ec2-52-90-205-250.compute-1.amazonaws.com/wp-content/uploads/2018/04/date22-27.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('blue_box', 'blue_box');

vc_map( array(
    "name" 			=> __( 'Blue Box Info', 'counter' ),
    "base" 			=> "blue_box",
    "category" 		=> __('Fellow'),
    "description" 	=> __('Your milestones, achievements etc', 'counter'),
    "icon" => plugin_dir_url( __FILE__ ).'../icons/counter.png',
    'params' => array(
        array(
            "type" 			=> 	"textfield",
            "heading" 		=> 	__( 'Background Title', 'counter' ),
            "param_name" 	=> 	"bgtitle",
            "description" 	=> 	__( 'Background Title', 'counter' ),
            "value"			=>	"",
            "group" 		=> 	'General',
        ),
        array(
            "type" 			=> 	"textfield",
            "heading" 		=> 	__( 'Title', 'counter' ),
            "param_name" 	=> 	"title",
            "description" 	=> 	__( 'Box Title', 'counter' ),
            "value"			=>	"",
            "group" 		=> 	'General',
        ),
        array(
            "type" 			=> 	"textfield",
            "heading" 		=> 	__( 'Sub Title', 'counter' ),
            "param_name" 	=> 	"subtitle",
            "description" 	=> 	__( 'Subtitle', 'counter' ),
            "value"			=>	"",
            "group" 		=> 	'General',
        ),
        array(
            "type" 			=> "css_editor",
            "heading" 		=> __( 'Styling Info Banner', 'info-banner-vc' ),
            "param_name" 	=> "css",
            "group" 		=> 'Design Options',
        ),
    ),
) );

