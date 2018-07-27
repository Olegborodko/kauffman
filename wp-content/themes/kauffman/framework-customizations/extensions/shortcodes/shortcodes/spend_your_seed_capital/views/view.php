<?php if (!defined('FW')) {
  die('Forbidden');
}

$text = '';
if ( ! empty( $atts['text'] ) ) {
  $text = $atts['text'];
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
     class="home_section">
  <div class="block_player g_relative j_mobile_margin"
       data-m-top="<?=$m_margin_top?>"
       data-m-bottom="<?=$m_margin_bottom?>"
       style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
    
    <div class="z_white_background"></div>
      <div class="z_grey">
        <img class="s_money" src="<?=$image?>"/>
      </div>
    <div class="z_bottom">
      <img class="z_logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/z_logo.png"/>
      <div class="z_text">
        <?=$text?>
      </div>
    </div>
    <div class="z_link">
      <a class="link_block" href="<?$link?>">
        <?=$link_text?>
      </a>
    </div>
  </div>
</div>