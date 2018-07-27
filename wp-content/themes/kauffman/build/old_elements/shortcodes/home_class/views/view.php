<?php if (!defined('FW')) {
  die('Forbidden');
}

$link = '';
if ( ! empty( $atts['link'] ) ) {
  $link = $atts['link'];
}

$link_text = '';
if ( ! empty( $atts['link_text'] ) ) {
  $link_text = $atts['link_text'];
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
  <div class="block_class g_relative g_mobile_margin_100"  style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
    <img class="img_class" src="<?php echo get_stylesheet_directory_uri(); ?>/img/class.png"/>
    <a href="<?=$link?>" class="apply">
      Apply
    </a>
    <div class="link">
            <span class="link_underline">
              <a class="link_block" href="<?=$link?>">
                <?=$link_text?>
              </a>
            </span>
    </div>
  </div>
</div>