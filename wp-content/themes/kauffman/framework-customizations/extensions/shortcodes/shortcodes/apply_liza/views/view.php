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

$link_url = '';
if ( ! empty( $atts['link_url'] ) ) {
  $link_url = $atts['link_url'];
}

$link_text = '';
if ( ! empty( $atts['link_text'] ) ) {
  $link_text = $atts['link_text'];
}

$image_button = '';
if ( !empty( $atts['image_button'] ) && !empty($atts['image_button']['url']) ) {
  $image_button = $atts['image_button']['url'];
}

$image = '';
if ( !empty( $atts['image'] ) && !empty($atts['image']['url']) ) {
  $image = $atts['image']['url'];
}

//$quote = '';
//if ( ! empty( $atts['quote'] ) ) {
//  $quote = $atts['quote'];
//}

$margin_top = 0;
if ( ! empty( $atts['margin_top'] ) ) {
  $margin_top = (int) $atts['margin_top'];
}

$margin_bottom = 170;
if ( ! empty( $atts['margin_bottom'] ) ) {
  $margin_bottom = ((int) $atts['margin_bottom'])+170;
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

<div class="apply_section_next" data-aos="<?=$data_aos?>">
  <div class="g_relative lisa_feria g_mobile_middle j_mobile_margin"
       data-m-top="<?=$m_margin_top?>"
       data-m-bottom="<?=$m_margin_bottom?>"
       style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
      <div class="row">
        <div class="col-xs-12 col-lg-6 lisa_block">
          <img class="lisa_img" src="<?=$image?>"/>
          <a href="<?=$link_url?>" class="lisa_btn">
            <img class="lisa_img_btn" src="<?=$image_button?>"/>
          </a>
        </div>
      </div>
      <div class="lisa_block_2">
        <ul>
          <li class="liza_line g_line_520">
          </li>
          <li class="lisa_title g_title">
            <?=$title?>
          </li>
          <li class="lisa_text g_text">
            <?=$text?>
          </li>
          <li class="lisa_link">
              <span class="link_underline">
                <a class="link_block" href="<?=$link_url?>">
                  <?=$link_text?>
                </a>
              </span>
          </li>
        </ul>
      </div>

<!--      <div class="row lisa_something_block">-->
<!--        <div class="col-xs-12 col-lg-6">-->
<!--          <div class="lisa_something g_something g_relative">-->
<!--            <div class="comma"></div>-->
<!--            --><?//=$quote?>
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
  </div>
</div>