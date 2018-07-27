<?php if (!defined('FW')) {
  die('Forbidden');
}

$title = '';
if ( ! empty( $atts['title'] ) ) {
  $title = $atts['title'];
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

<div data-aos="<?=$data_aos?>" style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
  <div class="row">
    <div class="col-lg-4">
      <div class="g_line_before_160"></div>
      <h3 class="g_title">
        <?=$title?>
      </h3>
      <div class="g_text">
        <?php if (!empty($atts['text'])): ?>
          <?php echo $atts['text'] ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="col-lg-1">
    </div>
    <div class="col-lg-7">
      <div class="about-500__img-wrapper">
        <img src="<?=$image?>" alt="">
      </div>
    </div>
  </div>
</div>