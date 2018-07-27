<?php if (!defined('FW')) {
  die('Forbidden');
}

$text = '';
if ( ! empty( $atts['text'] ) ) {
  $text = $atts['text'];
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

$data_aos = '';
if ( ! empty( $atts['data_aos'] ) ) {
  $data_aos = $atts['data_aos'];
}

$class = '';
if ( ! empty( $atts['class'] ) ) {
  $class = $atts['class'];
}
?>

<div data-aos="<?=$data_aos?>"
     data-m-top="<?=$m_margin_top?>"
     data-m-bottom="<?=$m_margin_bottom?>"
     class="g_title j_mobile_margin <?=$class?>"
     style="margin-top: <?= $margin_top ?>px;
     margin-bottom: <?= $margin_bottom ?>px;
     text-align: <?= $atts['align'] ?>">

<?=$text?>
</div>