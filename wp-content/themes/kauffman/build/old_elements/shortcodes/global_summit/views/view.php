<?php if (!defined('FW')) {
  die('Forbidden');
}

$title = '';
if ( ! empty( $atts['title'] ) ) {
  $title = $atts['title'];
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

$data_aos = '';
if ( ! empty( $atts['data_aos'] ) ) {
  $data_aos = $atts['data_aos'];
}
?>

<div data-aos="<?=$data_aos?>" class="home_section">
  <ul class="israel_global_s g_relative g_mobile_margin_100" style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
    <li class="title">
      <?=$title?>
    </li>
    <li class="text">
      <?=$text?>
    </li>
    <li class="g_relative">
      <img class="img22_27" src="<?php echo get_stylesheet_directory_uri(); ?>/img/22_27.png"/>
    </li>
    <li class="israel">
      Israel
    </li>
  </ul>
</div>