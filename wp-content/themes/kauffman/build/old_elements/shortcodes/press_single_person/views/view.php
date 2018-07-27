<?php if (!defined('FW')) {
  die('Forbidden');
}

$name = '';
if ( ! empty( $atts['name'] ) ) {
  $name = $atts['name'];
}

$position = '';
if ( ! empty( $atts['position'] ) ) {
  $position = $atts['position'];
}

$email = '';
if ( ! empty( $atts['email'] ) ) {
  $email = $atts['email'];
}

$phone = '';
if ( ! empty( $atts['phone'] ) ) {
  $phone = $atts['phone'];
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

<div data-aos="<?=$data_aos?>" class="article-contacts__item" style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
  <div class="article-contacts__img-wrapper">
    <img src="<?=$image?>" alt="">
  </div>
  <div class="article-contacts__footer">
    <span class="article-contacts__name"><?=$name?></span>
    <span class="article-contacts__position"><?=$position?></span>
    <a href="mailto:<?=$email?>" class="article-contacts__link"><?=$email?></a>
    <a href="tel:<?=$phone?>" class="article-contacts__link"><?=$phone?></a>
  </div>
</div>