<?php if (!defined('FW')) {
  die('Forbidden');
}

$title = '';
if ( ! empty( $atts['title'] ) ) {
  $title = $atts['title'];
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

$is_not_visible = '';
if ( isset( $atts['is_not_visible_mobile'] ) && $atts['is_not_visible_mobile'] ) {
  if ($atts['is_not_visible_mobile']=='yes'){
    $is_not_visible .= 'mobile-display-none';
  }
}
?>

<div data-aos="<?=$data_aos?>" style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
  <div class="row">
    <div class="col-lg-7">
      <div class="about-500__img-wrapper <?=$is_not_visible?>">
        <img src="<?=$image?>" alt="">
      </div>
    </div>
    <div class="col-lg-1">
    </div>
    <div class="col-lg-4">
      <div class="g_line_before_160"></div>
      <h3 class="g_title">
        <?=$title?>
      </h3>
      <div class="g_text">
        <?php if (!empty($atts['text'])): ?>
          <?php echo $atts['text'] ?>
        <?php endif; ?>
        
        <a class="link_block" href="<?=$link_url?>"><?=$link_text?></a>
      </div>
    </div>
  </div>
</div>