<?php if (!defined('FW')) {
  die('Forbidden');
}

$title = '';
if ( ! empty( $atts['title'] ) ) {
  $title = $atts['title'];
}

$text_1 = '';
if ( ! empty( $atts['text_1'] ) ) {
  $text_1 = $atts['text_1'];
}

$text_2 = '';
if ( ! empty( $atts['text_2'] ) ) {
  $text_2 = $atts['text_2'];
}

$link_text = '';
if ( ! empty( $atts['link_text'] ) ) {
  $link_text = $atts['link_text'];
}

$link_url = '';
if ( ! empty( $atts['link_url'] ) ) {
  $link_url = $atts['link_url'];
}

$margin_top = 0;
if ( ! empty( $atts['margin_top'] ) ) {
  $margin_top = (int) $atts['margin_top'];
}

$margin_bottom = 0;
if ( ! empty( $atts['margin_bottom'] ) ) {
  $margin_bottom = (int) $atts['margin_bottom'];
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

<div class="apply_section_next" data-aos="<?=$data_aos?>">
  <div class="tadhg g_mobile_margin_100 g_mobile_middle g_relative" style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
    <div class="center_container">
      <div class="row">
        <div class="col-xs-12 col-lg-6">
          <ul class="tadhg_block1">
            <li class="tadhg_line">
            </li>
            <li class="tadhg_title g_title">
              <?=$title?>
            </li>
            <li class="tadhg_li_img">
              <img class="tadhg_img" src="<?=$image?>"/>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <ul class="tadhg_block2">
      <li class="li_1 g_text">
        <?=$text_1?>
      </li>
      <li class="li_2 g_text">
        <div class="tadhg_absolute_bg">
          <div class="tadhg_absolute_text">
            <?=$text_2?>
          </div>
        </div>
      </li>
      <li data-aos="fade-up" class="li_3">
          <span class="link_underline">
            <a class="link_block" href="<?=$link_url?>">
              <?=$link_text?>
            </a>
          </span>
      </li>
    </ul>
  </div>
</div>