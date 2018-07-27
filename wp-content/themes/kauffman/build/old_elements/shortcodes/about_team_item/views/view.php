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

$url = '';
if ( ! empty( $atts['url'] ) ) {
  $url = $atts['url'];
}

$text_font_size = '';
if ( ! empty( $atts['text_font_size'] ) ) {
  $text_font_size = $atts['text_font_size'];
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

<div data-aos="<?=$data_aos?>" class="team-item">
    <a href="<?=$url?>">
        <img src="<?=$image?>" alt="">
        <div class="team-item__info">
            <span class="team-item__name" style="font-size:<?=esc_attr($text_font_size)?>"><?=$name?></span>
            <span class="team-item__position"><?=$position?></span>
        </div>
  </a>
</div>