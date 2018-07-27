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
?>

<div data-aos="<?=$data_aos?>" class="network-page__count" style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
  <div class="network-page__title">Class 23 Stats</div>
  <ul>
    <li>
      <div class="network-page__line"></div>
      <div class="network-page__text">
        <span class="count" data-duration="1000" data-result="20" data-count-to="20">
          0</span>% Founders or Co-Founders <br>of VC Funds
      </div>
    </li>
    <li>
      <div class="network-page__line"></div>
      <div class="network-page__text">
        <span class="count" data-duration="1600" data-result="28" data-count-to="28">
          0</span>% Managing Directors or Partners
      </div>
    </li>
    <li>
      <div class="network-page__line"></div>
      <div class="network-page__text">
        <span class="count" data-duration="1600" data-result="15" data-count-to="15">
          0</span>% Directors or Managers
      </div>
    </li>
    <li>
      <div class="network-page__line"></div>
      <div class="network-page__text">
        <span class="count" data-duration="2600" data-result="37" data-count-to="37">
          0</span>% Principals or Investors
      </div>
    </li>
  </ul>
</div>