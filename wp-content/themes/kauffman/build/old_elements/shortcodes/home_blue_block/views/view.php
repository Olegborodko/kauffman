<?php if (!defined('FW')) {
  die('Forbidden');
}

$background_text = '';
if ( ! empty( $atts['background_text'] ) ) {
  $background_text = $atts['background_text'];
}

$text1 = '';
if ( ! empty( $atts['text1'] ) ) {
  $text1 = $atts['text1'];
}

$text2 = '';
if ( ! empty( $atts['text2'] ) ) {
  $text2 = $atts['text2'];
}

$description = '';
if ( ! empty( $atts['description'] ) ) {
  $description = $atts['description'];
}

$margin_top = 0;
if ( ! empty( $atts['margin_top'] ) ) {
  $margin_top = (int) $atts['margin_top'];
}

$margin_bottom = 0;
if ( ! empty( $atts['margin_bottom'] ) ) {
  $margin_bottom = (int) $atts['margin_bottom'];
}

$image = '';
if ( !empty( $atts['image'] ) && !empty($atts['image']['url']) ) {
  $image = $atts['image']['url'];
}

$data_aos = '';
if ( ! empty( $atts['data_aos'] ) ) {
  $data_aos = $atts['data_aos'];
}
?>

<div data-aos="<?=$data_aos?>" class="home_blue_block clear_both">
  <div class="home_blue_block_item" style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
    <div class="home_blue_block_background_text">
      <?=$background_text?>
    </div>
    <div class="home_blue_block_text1">
      <?=$text1?>
    </div>
    <div class="home_blue_block_text2">
      <?=$text2?>
    </div>
    <div class="home_blue_block_image_description">
      <div class="home_blue_block_left"><img class="home_blue_block_image" src="<?=$image?>"></div>
      <div class="home_blue_block_right"><?=$description?></div>
    </div>
  </div>
</div>