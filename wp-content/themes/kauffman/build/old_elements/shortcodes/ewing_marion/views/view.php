<?php if (!defined('FW')) {
  die('Forbidden');
}

$first_text = '';
if ( ! empty( $atts['first_text'] ) ) {
  $first_text = $atts['first_text'];
}

$title = '';
if ( ! empty( $atts['title'] ) ) {
  $title = $atts['title'];
}

$padding = '';
if ( ! empty( $atts['padding'] ) ) {
  $padding = $atts['padding'];
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

<div data-aos="<?=$data_aos?>" class="home_section">
  <div class="g_relative man_block g_mobile_margin_100" style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
    <img src="<?=$image?>"/>
    <div class="man_block__item" style="padding: <?=$padding?>">
        <?php if ($atts['line_align']=='right'){ ?>
      <div class="man_block__small_text">
        <?=$first_text?>
        <div class="man_block__line"></div>
      </div>
        <?php }else{ ?>
      <div class="man_block__small_text" style="text-align: left">
          <div class="man_block__line"></div>
          <?=$first_text?>
      </div>
        <?php } ?>
      <div class="man_block__title">
        <?=$title?>
      </div>
      <div class="man_block__description">
        <?=$description?>
      </div>
    </div>
  </div>
</div>