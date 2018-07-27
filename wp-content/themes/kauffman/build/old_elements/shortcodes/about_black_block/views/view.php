<?php if (!defined('FW')) {
  die('Forbidden');
}

$text = '';
if ( ! empty( $atts['text'] ) ) {
  $text = $atts['text'];
}

$title = '';
if ( ! empty( $atts['title'] ) ) {
  $title = $atts['title'];
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

<div data-aos="<?=$data_aos?>" class="about-black g_mobile_margin_100" style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
  <div class="center_container">
    <div class="row">
      <div class="col-lg-6 offset-lg-1">
        <div class="about-black__content">
          <span class="about-black__heading"><?=$title?></span>
          <p class="about-black__text"><?=$text?></p>
        </div>
      </div>
    </div>
  </div>
</div>