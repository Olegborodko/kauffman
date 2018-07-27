<?php if (!defined('FW')) {
  die('Forbidden');
}

if ( empty( $atts['items'] ) ) {
  return;
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
  $padding =  esc_attr($atts['padding']);
}

?>

<div style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px;
            padding:<?=$padding?>"
     data-m-top="<?=$m_margin_top?>"
     data-m-bottom="<?=$m_margin_bottom?>"
     class="j_mobile_margin">
  <ul class="about-pledge__top-list">
  <?php
    foreach ( $atts['items'] as $key => $value ) {
  ?>
  <li>
    <?=$value['text']?>
  </li>
  <?php
    }
  ?>
  </ul>
</div>
