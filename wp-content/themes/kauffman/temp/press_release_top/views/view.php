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

<div data-aos="<?=$data_aos?>" class="row justify-content-between" style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
  <div class="col-lg-5">
    <div class="releases-header">
      <h3 class="releases-header__heading">
        <?=$title?>
      </h3>
    </div>
  </div>
  <div class="col-lg-5">
    <p class="releases-header__text">
      <?=$text?>
    </p>
    <form action="" method="post" class="releases-header__form">
      <input type="email" placeholder="your e-mail address" class="releases-header__input" required>
    </form>
  </div>
</div>