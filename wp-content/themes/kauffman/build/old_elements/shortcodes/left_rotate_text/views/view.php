<?php if (!defined('FW')) {
  die('Forbidden');
}

$top = 0;
if ( ! empty( $atts['top'] ) ) {
  $top = (int) $atts['top'];
}

$text = '';
if ( ! empty( $atts['text'] ) ) {
  $text = $atts['text'];
}

$data_aos = '';
if ( ! empty( $atts['data_aos'] ) ) {
  $data_aos = $atts['data_aos'];
}

?>

<div data-aos="<?=$data_aos?>" class="home_section">
  <div class="on_right_now" style="top: <?= $top ?>px">
    <?=$text?> <div class="on_right_now_line"></div>
  </div>
</div>