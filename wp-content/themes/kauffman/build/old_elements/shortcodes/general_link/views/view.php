<?php if (!defined('FW')) {
  die('Forbidden');
}

$text = '';
if ( ! empty( $atts['text'] ) ) {
  $text = $atts['text'];
}

$url = '';
if ( ! empty( $atts['url'] ) ) {
  $url = $atts['url'];
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

<div style="margin-top: <?= $margin_top ?>px;
     margin-bottom: <?= $margin_bottom ?>px;
     text-align: <?= $atts['align'] ?>">
  <a class="releases__link" href="<?=$url?>">
    <?=$text?>
  </a>
</div>