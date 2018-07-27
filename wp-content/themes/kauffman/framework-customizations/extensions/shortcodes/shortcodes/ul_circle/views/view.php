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

<div  data-m-top="<?=$m_margin_top?>"
      data-m-bottom="<?=$m_margin_bottom?>"
      class="j_mobile_margin"
      style="margin-top: <?= $margin_top ?>px;
      margin-bottom: <?= $margin_bottom ?>px;
      padding:<?=$padding?>">
  <ul class="ul_circle">
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
