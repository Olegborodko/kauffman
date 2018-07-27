<?php if (!defined('FW')) {
  die('Forbidden');
}

$title = '';
if ( ! empty( $atts['title'] ) ) {
  $title = $atts['title'];
}

$link_url_1 = '';
if ( ! empty( $atts['link_url_1'] ) ) {
  $link_url_1 = $atts['link_url_1'];
}

$link_text_1 = '';
if ( ! empty( $atts['link_text_1'] ) ) {
  $link_text_1 = $atts['link_text_1'];
}

$link_url_2 = '';
if ( ! empty( $atts['link_url_2'] ) ) {
  $link_url_2 = $atts['link_url_2'];
}

$link_text_2 = '';
if ( ! empty( $atts['link_text_2'] ) ) {
  $link_text_2 = $atts['link_text_2'];
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
     data-m-top="<?=$m_margin_top?>"
     data-m-bottom="<?=$m_margin_bottom?>"
     class="j_mobile_margin" style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
  <div class="row">
    <div class="col-12">
      <div class="authors__wrapper" style="background-image: url(<?=$image?>);">
        <div class="row">
          <div class="col-lg-7 offset-lg-4">
            <span class="authors__heading">
              <?=$title?>
            </span>
            <span class="authors__subheading">
              <?php if (!empty($atts['text'])): ?>
                <?php echo $atts['text'] ?>
              <?php endif; ?>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <ul class="authors__list">
        <li class="authors__list-item">
          <a href="<?=$link_url_1?>"><?=$link_text_1?></a>
        </li>
        <li class="authors__list-item">
          <a href="<?=$link_url_2?>"><?=$link_text_2?></a>
        </li>
      </ul>
    </div>
  </div>
</div>