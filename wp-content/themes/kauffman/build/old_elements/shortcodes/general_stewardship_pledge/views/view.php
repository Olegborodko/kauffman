<?php if (!defined('FW')) {
  die('Forbidden');
}

$title = '';
if ( ! empty( $atts['title'] ) ) {
  $title = $atts['title'];
}

$text_bottom = '';
if ( ! empty( $atts['text_bottom'] ) ) {
  $text_bottom = $atts['text_bottom'];
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

<div data-aos="<?=$data_aos?>" style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
  <div class="row" style="margin-bottom: 140px">
    <div class="col-lg-10 offset-lg-1">
      <div class="about-pledge-border"></div>
      <div class="about-pledge-border2"></div>
      <div class="row">
        <div class="col-lg-10 offset-lg-1 no-gutters">
          <div class="about-pledge__content">
            <div class="about-pledge-header">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/pledge_logo.svg" alt="" class="about-pledge-header__img">
              <span class="about-pledge-header__line"></span>
            </div>
            <span class="about-pledge__title"><?=$title?></span>
            <span class="about-pledge-content__text g_text">
              <!--As an investor in innovation, I recognize:-->
              <?php if (!empty($atts['text_small'])): ?>
                <?php echo do_shortcode( $atts['text_small'] ); ?>
              <?php endif; ?>
            </span>
<!--            <ul class="about-pledge__top-list">-->
<!--              <li>Our industry of innovation capital has the power to drive both private value creation and sustainable, positive societal transformation.</li>-->
<!--              <li>My purpose is to direct capital and expertise to create shared value by accelerating the pace of innovation through company formation and growth.</li>-->
<!--              <li>My investment decisions affect the well-being of individuals inside and outside my own organization, the companies in which we invest, my capital partners, the industries in which we work, and beyond, both today and in the future.</li>-->
<!--            </ul>-->

            <div class="g_text_align_right">
              <a class="releases__more-btn js_read_more_btn">read more</a>
            </div>

            <div class="js_read_more_block">
              <span class="about-pledge-content__text g_text">
                <?php if (!empty($atts['text_large'])): ?>
                  <?php echo do_shortcode( $atts['text_large'] ); ?>
                <?php endif; ?>
              </span>
              <span class="about-pledge__name"><?=$text_bottom?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>