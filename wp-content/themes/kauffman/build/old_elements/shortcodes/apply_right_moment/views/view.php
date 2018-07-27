<?php if (!defined('FW')) {
  die('Forbidden');
}

$title = '';
if ( ! empty( $atts['title'] ) ) {
  $title = $atts['title'];
}

$link_url = '';
if ( ! empty( $atts['link_url'] ) ) {
  $link_url = $atts['link_url'];
}

$link_text = '';
if ( ! empty( $atts['link_text'] ) ) {
  $link_text = $atts['link_text'];
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

<div class="apply_section_next" data-aos="<?=$data_aos?>">
  <div class="right_moment g_mobile_margin_100 g_mobile_middle" style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
    <div class="right_moment_background">
      <a href="<?=$link_url?>" class="right_moment_block">
      <span class="right_moment_btn">
        <?=$link_text?>
      </span>
      </a>
      <div class="right_moment_text">
        <div class="right_moment_line"></div>
        <?=$title?>
      </div>
    </div>
  </div>
</div>