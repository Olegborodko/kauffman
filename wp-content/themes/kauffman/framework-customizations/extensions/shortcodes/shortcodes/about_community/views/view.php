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

$data_aos = '';
if ( ! empty( $atts['data_aos'] ) ) {
  $data_aos = $atts['data_aos'];
}

$background_1 = '';
if ( !empty( $atts['background_1'] ) && !empty($atts['background_1']['url']) ) {
  $background_1 = $atts['background_1']['url'];
}

$background_2 = '';
if ( !empty( $atts['background_2'] ) && !empty($atts['background_2']['url']) ) {
  $background_2 = $atts['background_2']['url'];
}

$background_3 = '';
if ( !empty( $atts['background_3'] ) && !empty($atts['background_3']['url']) ) {
  $background_3 = $atts['background_3']['url'];
}

$background_4 = '';
if ( !empty( $atts['background_4'] ) && !empty($atts['background_4']['url']) ) {
  $background_4 = $atts['background_4']['url'];
}

$background_5 = '';
if ( !empty( $atts['background_5'] ) && !empty($atts['background_5']['url']) ) {
  $background_5 = $atts['background_5']['url'];
}

$background_6 = '';
if ( !empty( $atts['background_6'] ) && !empty($atts['background_6']['url']) ) {
  $background_6 = $atts['background_6']['url'];
}

$m_margin_top = 0;
if ( ! empty( $atts['m_margin_top'] ) ) {
  $m_margin_top = (int) $atts['m_margin_top'];
}

$m_margin_bottom = 0;
if ( ! empty( $atts['m_margin_bottom'] ) ) {
  $m_margin_bottom = (int) $atts['m_margin_bottom'];
}

?>

<div data-aos="<?=$data_aos?>"
     data-m-top="<?=$m_margin_top?>"
     data-m-bottom="<?=$m_margin_bottom?>"
     class="col mainland j_mobile_margin"
     style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
  <div>
    <div class="mainland__block">
      <div class="mainland__drop g_mobile_display_block js_mainland_mobile">
        Select Continent
      </div>

      <ul class="mainland__ul tabs clearfix g_mobile_display_none_without_i" data-tabgroup="first-tab-group">
        <li><a href="#tab1" class="active">Africa/ME</a></li>
        <li><a href="#tab2">Asia</a></li>
        <li><a href="#tab3">Australia</a></li>
        <li><a href="#tab4">Europe</a></li>
        <li><a href="#tab5">North America</a></li>
        <li><a href="#tab6">South America</a></li>
      </ul>
    </div>
    <div id="first-tab-group" class="tabgroup">
      <div id="tab1" class="companies-tab" style="background-image:url(<?=$background_1?>);">
        <?=$atts['tab1']?>
      </div>
      <div id="tab2" class="companies-tab" style="background-image:url(<?=$background_2?>);">
        <?=$atts['tab2']?>
      </div>
      <div id="tab3" class="companies-tab" style="background-image:url(<?=$background_3?>);">
        <?=$atts['tab3']?>
      </div>
      <div id="tab4" class="companies-tab" style="background-image:url(<?=$background_4?>);">
        <?=$atts['tab4']?>
      </div>
      <div id="tab5" class="companies-tab" style="background-image:url(<?=$background_5?>);">
        <?=$atts['tab5']?>
      </div>
      <div id="tab6" class="companies-tab" style="background-image:url(<?=$background_6?>);">
        <?=$atts['tab6']?>
      </div>
    </div>
  </div>
</div>