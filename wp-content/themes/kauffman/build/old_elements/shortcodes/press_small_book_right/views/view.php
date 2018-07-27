<?php if (!defined('FW')) {
  die('Forbidden');
}

$title = '';
if ( ! empty( $atts['title'] ) ) {
  $title = $atts['title'];
}

$description = '';
if ( ! empty( $atts['description'] ) ) {
  $description = $atts['description'];
}

$link_url = '';
if ( ! empty( $atts['link_url'] ) ) {
  $link_url = $atts['link_url'];
}

$link_text = '';
if ( ! empty( $atts['link_text'] ) ) {
  $link_text = $atts['link_text'];
}

$buy_url = '';
if ( ! empty( $atts['buy_url'] ) ) {
  $buy_url = $atts['buy_url'];
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

<div data-aos="<?=$data_aos?>" class="g_mobile_margin_100" style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
  <div class="row">
    <div class="col-lg-12">
      <div class="books-item books-item--right">
        <div>
          <div class="books-item__content">
            <span class="books-item__autors">
              <?=$description?>
            </span>
            <span class="books-item__title">
              <?=$title?>
            </span>
            <div class="books-item__dscr">
              <?php if (!empty($atts['text'])): ?>
                <?php echo $atts['text'] ?>
              <?php endif; ?>
            </div>
          </div>
          <div class="books-item__btns">
            <a href="<?=$link_url?>" class="books-item__btn-more"><?=$link_text?></a>
            <a href="<?=$buy_url?>" class="books-item__btn-buy">buy the book</a>
          </div>
        </div>
        <div class="books-item__img-wrapper">
          <img src="<?=$image?>" alt="">
        </div>
      </div>
    </div>
  </div>
</div>