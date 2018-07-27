<?php
if ( ! defined( 'ABSPATH' ) ) {
    die( '-1' );
}
function block_photo($atts, $content = null) {

    extract(shortcode_atts(
            array(
                'title'    => '',
                'image_id'    => '',
                'content_text'  => '',
                'subtitle'      => '',
                'css'	   => '',
            ), $atts)
    );
    $css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ),  $atts );
    if ($image_id != '') {
        $image_url = wp_get_attachment_url( $image_id );
    }
    ob_start(); ?>

    <div class="row">
        <div class=" col-md-6">
            <img class="alignnone size-full wp-image-147" src="<?php echo $image_url?>" alt="" width="100%">
        </div>
        <div class=" col-md-6 d-flex align-items-center block-blue-border">
            <div class="col-md-12">
                <div class="block-content "><?php echo $content_text?></div>
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
            "type" 			=> 	"textarea_html",
            "heading" 		=> 	__( 'Description', 'info-box-content' ),
            "param_name" 	=> 	"content_text",
            "description" 	=> 	__( 'write detail about info banner', 'info-banner-vc' ),
            "group" 		=> 	'General',
            "value"			=> ''
        ),
        array(
            "type" 			=> 	"attach_image",
            "heading" 		=> 	__( 'Image', 'infobox' ),
            "param_name" 	=> 	"image_id",
            "description" 	=> 	__( 'Select the image', 'infobox' ),
            "group" 		=> 	'General',
            "dependency" => array('element' => "info_opt", 'value' => 'show_image'),
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

