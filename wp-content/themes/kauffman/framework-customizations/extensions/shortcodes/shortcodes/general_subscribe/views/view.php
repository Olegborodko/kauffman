<?php if (!defined('FW')) {
  die('Forbidden');
}

$shortcode = '';
if ( ! empty( $atts['shortcode'] ) ) {
  $shortcode = $atts['shortcode'];
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
?>

<div class="j_mobile_margin"
      data-m-top="<?=$m_margin_top?>"
      data-m-bottom="<?=$m_margin_bottom?>"
      style="margin-top: <?= $margin_top ?>px;
      margin-bottom: <?= $margin_bottom ?>px">
  <?= do_shortcode($shortcode) ?>
<!--  <form action="" method="post" class="releases-header__form">-->
<!--    <input type="email" placeholder="--><?//=$placeholder?><!--" class="releases-header__input" required>-->
<!--  </form>-->
</div>