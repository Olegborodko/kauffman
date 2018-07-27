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

$image = '';
if ( !empty( $atts['image'] ) && !empty($atts['image']['url']) ) {
  $image = $atts['image']['url'];
}

$data_aos = '';
if ( ! empty( $atts['data_aos'] ) ) {
  $data_aos = $atts['data_aos'];
}
?>

<div data-aos="<?=$data_aos?>" class="g_mobile_margin_100" style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
  <div class="row">
    <div class="col-lg-5 offset-lg-1">
      <div class="about-inspired">
        <span class="about-inspired__heading"><?=$title?></span>
        <p class="about-inspired__text"><?=$text?></p>
      </div>
    </div>
    <div class="col-lg-5 offset-lg-1">
      <div class="about-inspired__img-wrapper">
        <img src="<?=$image?>" alt="">
        <div class="about-inspired__img-overlay">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/kauffman_dots.png" alt="">
        </div>
      </div>
    </div>
  </div>
</div>