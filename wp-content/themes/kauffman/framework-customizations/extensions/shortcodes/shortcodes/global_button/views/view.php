<?php if (!defined('FW')) {
  die('Forbidden');
}

$text = '';
if ( ! empty( $atts['text'] ) ) {
  $text = $atts['text'];
}

$link = '';
if ( ! empty( $atts['link'] ) ) {
  $link = $atts['link'];
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

$padding = '';
if ( ! empty( $atts['padding'] ) ) {
  $padding = $atts['padding'];
}

$background = esc_attr($atts['background']);
if ( empty( $atts['background'] ) ) {
  $background = 'transparent';
}

$color = esc_attr($atts['color']);
if ( empty( $atts['color'] ) ) {
  $color = 'transparent';
}

$hover_background = esc_attr($atts['hover_background']);
if ( empty( $atts['hover_background'] ) ) {
  $hover_background = 'transparent';
}

$hover_color = esc_attr($atts['hover_color']);
if ( empty( $atts['hover_color'] ) ) {
  $hover_color = 'transparent';
}

$mobile_align = '';
if ($atts['mobile_align']=='yes') {
  $mobile_align = ' g_mobile_align_center';
}

?>

<div class="j_mobile_margin <?=$mobile_align?>"
     data-m-top="<?=$m_margin_top?>"
     data-m-bottom="<?=$m_margin_bottom?>"
     style="margin-top: <?= $margin_top ?>px;
            margin-bottom: <?= $margin_bottom ?>px;
            text-align: <?= $atts['align'] ?>">
<a style="padding:<?=$padding?>!important;
          color:<?= esc_attr($color) ?>;
          background-color:<?=  esc_attr($background) ?>;"
   href="<?=$link?>" class="releases__more-btn"
   onMouseOver="this.style.cssText ='color:<?= esc_attr($hover_color) ?>!important;background-color:<?= esc_attr($hover_background) ?>!important;padding:<?=$padding?>!important';"
   onMouseOut="this.style.cssText='color:<?= esc_attr($color) ?>!important;background-color:<?= esc_attr($background) ?>!important;padding:<?=$padding?>!important';"
   >
  <?=$text?>
</a>
</div>

