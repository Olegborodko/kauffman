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
     class="apply_section_next">
  <div class="tuition_for j_mobile_margin g_mobile_middle"
       data-m-top="<?=$m_margin_top?>"
       data-m-bottom="<?=$m_margin_bottom?>"
       style="margin-top: <?= $margin_top ?>px;
       margin-bottom: <?= $margin_bottom ?>px;
       background-image: <?= $image ?>">
    <div class="center_container">
      <div class="row">
        <div class="col-xs-12 col-lg-5">
        </div>
        <div class="col-xs-12 col-lg-7">
          <ul class="tuition_ul">
            <li class="tuition_line">
            </li>
            <li class="tuition_title g_title">
              <?=$title?>
            </li>
            <li class="tuition_text g_mobile_padding_left_20 g_text">
              <?=$text?>

              <div class="tuition_button">
                <span class="link_underline">
                  <a class="link_block" href="<?=$link_url?>">
                    <?=$link_text?>
                  </a>
                </span>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>