<?php if (!defined('FW')) {
  die('Forbidden');
}

$text3 = '';
if ( ! empty( $atts['text3'] ) ) {
  $text3 = $atts['text3'];
}

$text1 = '';
if ( ! empty( $atts['text1'] ) ) {
  $text1 = $atts['text1'];
}

$text2 = '';
if ( ! empty( $atts['text2'] ) ) {
  $text2 = $atts['text2'];
}

$name = '';
if ( ! empty( $atts['name'] ) ) {
  $name = $atts['name'];
}

$description = '';
if ( ! empty( $atts['description'] ) ) {
  $description = $atts['description'];
}

$quote = '';
if ( ! empty( $atts['quote'] ) ) {
  $quote = $atts['quote'];
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

<div class="apply_section_next j_mobile_margin"
     data-m-top="<?=$m_margin_top?>"
     data-m-bottom="<?=$m_margin_bottom?>"
     style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
  <div data-aos="<?=$data_aos?>" class="center_container clear_both jayden g_mobile_middle">
    <div class="row">
      <div class="col-xs-12 col-lg-7">
        <div class="small_top_line"></div>
        <ul class="jayden_left">
          <li class="li_1 g_text g_mobile_margin_100">
            <?=$text1?>
          </li>
          <li class="li_2">
            <div>
              <?=$text2?>
            </div>
          </li>
          <li class="li_3 g_text">
            <?=$text3?>
          </li>
        </ul>
      </div>
      <div class="col-xs-12 col-lg-5 g_relative">
        <img class="jayden_right" src="<?=$image?>"/>
        <div class="jayden_block_name">
        <div class="jayden_name"><?=$name?></div>
        <div class="jayden_description"><?=$description?></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-lg-6">
      </div>
      <div class="col-xs-12 col-lg-6">
        <div class="g_relative">
          <div class="comma"></div>
          <div class="comma_text g_something">
            <?=$quote?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>