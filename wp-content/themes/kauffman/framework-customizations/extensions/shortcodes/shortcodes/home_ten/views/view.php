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

$image = '';
if ( !empty( $atts['image'] ) && !empty($atts['image']['url']) ) {
  $image = $atts['image']['url'];
}

$data_aos = '';
if ( ! empty( $atts['data_aos'] ) ) {
  $data_aos = $atts['data_aos'];
}
?>

<div data-aos="<?=$data_aos?>"
     class="home_section clear_both">
  <div class="ten_block g_float_right j_mobile_margin"
       data-m-top="<?=$m_margin_top?>"
       data-m-bottom="<?=$m_margin_bottom?>"
       style="margin-top: <?= $margin_top ?>px;
       margin-bottom: <?= $margin_bottom ?>px">
    <img src="<?=$image?>"/>
    <div class="interactive">
      <?=$title?>
    </div>
    <div class="g_clear_both g_text">
      <?php if (!empty($atts['text'])): ?>
        <?php echo $atts['text'] ?>
      <?php endif; ?>
    </div>
  </div>
</div>