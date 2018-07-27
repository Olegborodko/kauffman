<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */

if ( empty( $atts['image'] ) ) {
	return;
}

$width  = ( is_numeric( $atts['width'] ) && ( $atts['width'] > 0 ) ) ? $atts['width'] : '';
$height = ( is_numeric( $atts['height'] ) && ( $atts['height'] > 0 ) ) ? $atts['height'] : '';

if ( ! empty( $width ) && ! empty( $height ) ) {
	$image = fw_resize( $atts['image']['attachment_id'], $width, $height, true );
} else {
	$image = $atts['image']['url'];
}

$alt = get_post_meta($atts['image']['attachment_id'], '_wp_attachment_image_alt', true);

$img_attributes = array(
	'src' => $image,
	'alt' => $alt ? $alt : $image
);

if(!empty($width)){
	$img_attributes['width'] = $width;
}

if(!empty($height)){
	$img_attributes['height'] = $height;
}

$margin_top = 0;
if ( ! empty( $atts['margin_top'] ) ) {
  $margin_top = (int) $atts['margin_top'];
}

$margin_bottom = 0;
if ( ! empty( $atts['margin_bottom'] ) ) {
  $margin_bottom = (int) $atts['margin_bottom'];
}

$m_margin_top = 0;
if ( ! empty( $atts['m_margin_top'] ) ) {
  $m_margin_top = (int) $atts['m_margin_top'];
}

$m_margin_bottom = 0;
if ( ! empty( $atts['m_margin_bottom'] ) ) {
  $m_margin_bottom = (int) $atts['m_margin_bottom'];
}

$data_aos = '';
if ( ! empty( $atts['data_aos'] ) ) {
  $data_aos = $atts['data_aos'];
}

?>

<div data-aos="<?=$data_aos?>"
     class="j_mobile_margin"
     data-m-top="<?=$m_margin_top?>"
     data-m-bottom="<?=$m_margin_bottom?>"
     style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">

<?php
if ( empty( $atts['link'] ) ) {
	echo fw_html_tag('img', $img_attributes);
} else {
	echo fw_html_tag('a', array(
		'href' => $atts['link'],
		'target' => $atts['target'],
	), fw_html_tag('img',$img_attributes));
}

?>

</div>
