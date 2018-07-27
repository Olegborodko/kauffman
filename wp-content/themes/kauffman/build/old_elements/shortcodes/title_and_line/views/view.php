<?php if (!defined('FW')) {
  die('Forbidden');
}

$margin_top = 0;
if ( ! empty( $atts['margin_top'] ) ) {
  $margin_top = (int) $atts['margin_top'];
}

$margin_bottom = 0;
if ( ! empty( $atts['margin_bottom'] ) ) {
  $margin_bottom = (int) $atts['margin_bottom'];
}

//$settings_options = fw()->theme->get_settings_options();
//if ( ! empty( $settings_options['mobile_margin_top'] ) ) {
//  $margin_bottom = (int) $atts['margin_bottom'];
//}

$data_aos = '';
if ( ! empty( $atts['data_aos'] ) ) {
  $data_aos = $atts['data_aos'];
}
?>

<div data-aos="<?=$data_aos?>" class="home_section g_mobile_margin_100" style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
  <div class="blue_line"></div>
  <div class="fostering_a g_title">
    <?php if (!empty($atts['text'])): ?>
      <?php echo $atts['text'] ?>
    <?php endif; ?>
  </div>
</div>