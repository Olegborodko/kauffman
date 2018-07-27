<?php if (!defined('FW')) {
  die('Forbidden');
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

//$download_pdf_url = '';
//if ( ! empty( $atts['download_pdf_url'] ) ) {
//  $download_pdf_url = $atts['download_pdf_url'];
//}

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

$white_block_size = '0';
if ( ! empty( $atts['white_block_size'] ) ) {
  $white_block_size = $atts['white_block_size'];
}

$data_aos = '';
if ( ! empty( $atts['data_aos'] ) ) {
  $data_aos = $atts['data_aos'];
}
?>

<div data-aos="<?=$data_aos?>" class="g_mobile_margin_100" style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
  <div class="row">
    <div class="col-lg-5">
      <div class="report__img-wrapper">
        <img src="<?=$image?>" alt="">
      </div>
      <div class="report__btns">
        <a class="report__btn-more"></a>
        <a href="<?=$link_url?>" class="report__btn-buy"><?=$link_text?></a>
      </div>
    </div>
    <div class="col-lg-7">
      <div>
        <h3 class="report__heading"><?=$title?></h3>
        <div class="report__top-text">
          <?php if (!empty($atts['text_1'])): ?>
            <?php echo $atts['text_1'] ?>
          <?php endif; ?>
        </div>
        <div class="report__middle">
          <div class="report__middle-text">
            <?php if (!empty($atts['text_2'])): ?>
              <?php echo $atts['text_2'] ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="report__bottom-text">
          <?php if (!empty($atts['text_3'])): ?>
            <?php echo $atts['text_3'] ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>