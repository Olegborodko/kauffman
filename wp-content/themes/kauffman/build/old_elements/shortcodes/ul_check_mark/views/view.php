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

?>

<div style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
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
