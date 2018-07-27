<?php if (!defined('FW')) {
  die('Forbidden');
}

$text = '';
if ( ! empty( $atts['text'] ) ) {
  $text = $atts['text'];
}

$title = '';
if ( ! empty( $atts['title'] ) ) {
  $title = $atts['title'];
}

$link_image = '';
if ( !empty( $atts['link_image'] ) && !empty($atts['link_image']['url']) ) {
  $link_image = $atts['link_image']['url'];
}

$link_url = '';
if ( ! empty( $atts['link_url'] ) ) {
  $link_url = $atts['link_url'];
}

$image = '';
if ( !empty( $atts['image'] ) && !empty($atts['image']['url']) ) {
  $image = $atts['image']['url'];
}

$background = '';
if ( !empty( $atts['background'] ) && !empty($atts['background']['url']) ) {
  $background = $atts['background']['url'];
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
?>

<div data-aos="<?=$data_aos?>"
     class="g_relative clear_both j_mobile_margin"
     data-m-top="<?=$m_margin_top?>"
     data-m-bottom="<?=$m_margin_bottom?>"
     style="margin-top: <?= $margin_top ?>px;
     margin-bottom: <?= $margin_bottom ?>px">
  <div class="main_background_full_width" style="background-image: url(<?=$background?>);"></div>
  <div class="apply_section center_container">

    <div class="left_top">
      <div class="row">
        <div class="col-xs-12 col-lg-12">
          <div class="blue_line"></div>
          <div class="fostering_a g_title">
            <?=$title?>
          </div>

          <div class="individualized_2">
            <div class="text g_text">
              <?=$text?>
            </div>

            <a href="<?=$link_url?>" class="jeff_btn">
              <img src="<?=$link_image?>"/>
            </a>
          </div>

        </div>
      </div>
    </div>

  </div>
  <div class="apply_section_block_top">
    <img src="<?=$image?>">
  </div>
</div>