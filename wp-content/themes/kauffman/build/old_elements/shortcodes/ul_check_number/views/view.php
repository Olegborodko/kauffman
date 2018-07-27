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
  <ol class="about-pledge__numbers-list">
  <?php
    $format_text = '';
    foreach ( $atts['items'] as $key => $value ) {
      if (($key+1)<10){
        $format_text = '0'.($key+1);
      }else{
        $format_text = ($key+1);
      }
  ?>
  <li>
    <span><?=$format_text?>.</span>
    <?=$value['text']?>
  </li>
  <?php
    }
  ?>
  </ol>
</div>
