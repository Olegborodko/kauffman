<?php if (!defined('FW')) {
  die('Forbidden');
}

$title = '';
if ( ! empty( $atts['title'] ) ) {
  $title = $atts['title'];
}

$text1 = '';
if ( ! empty( $atts['text1'] ) ) {
  $text1 = $atts['text1'];
}

$text2 = '';
if ( ! empty( $atts['text2'] ) ) {
  $text2 = $atts['text2'];
}

$text3 = '';
if ( ! empty( $atts['text3'] ) ) {
  $text3 = $atts['text3'];
}

$text4 = '';
if ( ! empty( $atts['text4'] ) ) {
  $text4 = $atts['text4'];
}

$image1 = '';
if ( !empty( $atts['image1'] ) && !empty($atts['image1']['url']) ) {
  $image1 = $atts['image1']['url'];
}

$image2 = '';
if ( !empty( $atts['image2'] ) && !empty($atts['image2']['url']) ) {
  $image2 = $atts['image2']['url'];
}

$image3 = '';
if ( !empty( $atts['image3'] ) && !empty($atts['image3']['url']) ) {
  $image3 = $atts['image3']['url'];
}

$image4 = '';
if ( !empty( $atts['image4'] ) && !empty($atts['image4']['url']) ) {
  $image4 = $atts['image4']['url'];
}

$margin_top = 0;
if ( ! empty( $atts['margin_top'] ) ) {
  $margin_top = (int) $atts['margin_top'];
}

$margin_bottom = 0;
if ( ! empty( $atts['margin_bottom'] ) ) {
  $margin_bottom = (int) $atts['margin_bottom'];
}

$data_aos = '';
if ( ! empty( $atts['data_aos'] ) ) {
  $data_aos = $atts['data_aos'];
}
?>

<div class="apply_section_next">
  <div class="small_top_line"></div>
  <div class="element_4">
    <div class="title g_title">
      <?=$title?>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 block_4">
        <img src="<?=$image1?>"/>
        <div class="text">
          <?=$text1?>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 block_4">
        <img src="<?=$image2?>"/>
        <div class="text">
          <?=$text2?>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 block_4">
        <img src="<?=$image3?>"/>
        <div class="text">
          <?=$text3?>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 block_4">
        <img src="<?=$image4?>"/>
        <div class="text">
          <?=$text4?>
        </div>
      </div>
    </div>
  </div>
</div>
