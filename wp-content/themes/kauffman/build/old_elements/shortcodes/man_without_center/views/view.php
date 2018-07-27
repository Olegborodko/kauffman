<?php if (!defined('FW')) {
  die('Forbidden');
}

$text = '';
if ( ! empty( $atts['text'] ) ) {
  $text = $atts['text'];
}

$name = '';
if ( ! empty( $atts['name'] ) ) {
  $name = $atts['name'];
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

<div class="apply_section_next mobile_control" style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
  <div data-aos="<?=$data_aos?>" class="clear_both jayden g_mobile_margin_50 g_mobile_middle">
    <div class="row">
      <div class="col-xs-12 col-lg-7">
        <div class="small_top_line"></div>
        <ul class="jayden_left">
          <li class="g_text g_mobile_margin_100">
            <?=$text?>
          </li>
        </ul>
      </div>
      <div class="col-xs-12 col-lg-5 g_relative">
        <img class="jayden_right" src="<?=$image?>"/>
        <div class="jayden_block_name">
        <div class="jayden_name"><?=$name?></div>
        <div class="jayden_description"><?=$description?></div>
        </div>
      </div>
    </div>
  </div>
</div>