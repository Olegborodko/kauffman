<?php if (!defined('FW')) {
  die('Forbidden');
}

$size = 0;
if ( ! empty( $atts['size'] ) ) {
  $size = (int) $atts['size'];
}

$margin_top = 0;
if ( ! empty( $atts['margin_top'] ) ) {
  $margin_top = (int) $atts['margin_top'];
}

$margin_bottom = 0;
if ( ! empty( $atts['margin_bottom'] ) ) {
  $margin_bottom = (int) $atts['margin_bottom'];
}

$class = '';
if ( ! empty( $atts['class'] ) ) {
  $class = $atts['class'];
}
?>

<div style="margin-top: <?= $margin_top ?>px;
margin-bottom: <?= $margin_bottom ?>px;
text-align: <?= $atts['align'] ?>;" class="<?=$class?>">

  <div style="background-color: #1086C2;
              height: 4px;
              max-width:<?=$size?>px;
              width:100%;
              display:inline-block"
  ></div>
  
</div>