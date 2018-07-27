<?php if (!defined('FW')) {
  die('Forbidden');
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
  $margin_bottom     = (int) $atts['margin_bottom'];
}

$m_margin_top = 0;
if ( ! empty( $atts['m_margin_top'] ) ) {
  $m_margin_top = (int) $atts['m_margin_top'];
}

$m_margin_bottom = 0;
if ( ! empty( $atts['m_margin_bottom'] ) ) {
  $m_margin_bottom = (int) $atts['m_margin_bottom'];
}

$data_aos = '';
if ( ! empty( $atts['data_aos'] ) ) {
  $data_aos = $atts['data_aos'];
}
?>


<span data-aos="<?=$data_aos?>"
      data-m-top="<?=$m_margin_top?>"
      data-m-bottom="<?=$m_margin_bottom?>"
      class="team__heading team__heading--right js_float_right j_mobile_margin"
      style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
  <?=$title?>
</span>