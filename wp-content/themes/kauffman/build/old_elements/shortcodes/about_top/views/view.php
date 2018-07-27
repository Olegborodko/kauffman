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

$m_margin_top = 0;
if ( ! empty( $atts['m_margin_top'] ) ) {
  $m_margin_top = (int) $atts['m_margin_top'];
}

$m_margin_bottom = 0;
if ( ! empty( $atts['m_margin_bottom'] ) ) {
  $m_margin_bottom = (int) $atts['m_margin_bottom'];
}

$container_style = '';
$image = '';
if ( !empty( $atts['image'] ) && !empty($atts['image']['url']) ) {
  $image = $atts['image']['url'];
  $container_style .= 'background-image: url('.esc_attr($image).');';
}

if ( ! empty( $atts['background_position_x'] ) ) {
  $container_style .= 'background-position-x:'.esc_attr($atts['background_position_x']).';';
}
if ( ! empty( $atts['background_position_y'] ) ) {
  $container_style .= 'background-position-y:'.esc_attr($atts['background_position_y']).';';
}

$container_class = '';
if ( isset( $atts['background_resize'] ) && $atts['background_resize'] ) {
  if ($atts['background_resize']=='yes'){
    $container_class .= 'about-header__background_resize';
  }
}

$data_aos = '';
if ( ! empty( $atts['data_aos'] ) ) {
  $data_aos = $atts['data_aos'];
}

?>

<div data-aos="<?=$data_aos?>"
     data-m-top="<?=$m_margin_top?>"
     data-m-bottom="<?=$m_margin_bottom?>"
     class="about-header__wrapper j_mobile_margin <?=$container_class?>"
     style="<?=$container_style?>;
     margin-top: <?= $margin_top ?>px;
     margin-bottom: <?= $margin_bottom ?>px">
  <div class="row">
    <div class="col-lg-7">
      <h3 class="about-header__heading"><?=$title?></h3>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 offset-lg-1">
      <p class="about-header__text"><?=$text?></p>
    </div>
  </div>
</div>