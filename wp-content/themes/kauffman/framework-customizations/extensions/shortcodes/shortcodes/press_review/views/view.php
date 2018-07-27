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

$text_max_width = '';
if ( ! empty( $atts['text_max_width'] ) ) {
  $text_max_width = $atts['text_max_width'];
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

$margin_right = 0;
if ( ! empty( $atts['margin_right'] ) ) {
  $margin_right = (int) $atts['margin_right'];
}

$margin_left = 0;
if ( ! empty( $atts['margin_left'] ) ) {
  $margin_left = (int) $atts['margin_left'];
}

$padding_left = 0;
if ( ! empty( $atts['padding_left'] ) ) {
  $padding_left = (int) $atts['padding_left'];
}

$padding_right = 0;
if ( ! empty( $atts['padding_right'] ) ) {
  $padding_right = (int) $atts['padding_right'];
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

<div class="review-item-block j_mobile_margin"
     data-m-top="<?=$m_margin_top?>"
     data-m-bottom="<?=$m_margin_bottom?>"
     data-aos="<?=$data_aos?>" style="
margin-top: <?= $margin_top ?>px;
margin-bottom: <?= $margin_bottom ?>px;
margin-right: <?=$margin_right?>px;
margin-left: <?=$margin_left?>px;
">
  <div class="review-item review-item--left" style="
  padding-left: <?=$padding_left?>px;
  padding-right: <?=$padding_right?>px;
  margin-bottom: 0;
  ">
    <div class="review-item__white-block" style="width:100%;max-width:<?=$white_block_size?>">
    </div>
      <div class="review-item__img-wrapper">
        <img src="<?=$image?>" alt="">
      </div>

    <?php
    foreach ( $atts['items'] as $key => $value ) {
    ?>
      <div class="review-item__tags">
        <a href="<?=$value['link_url']?>" style="background-color: <?=$value['background_color']?>;"><?=$value['link_text']?></a>
      </div>
    <?php
    }
    ?>

      <div class="review-item__content">
        <span class="review-item__title"><?=$title?></span>
        <div class="review-item__dscr" style="max-width:<?=$text_max_width?>">
          <?php if (!empty($atts['text'])): ?>
            <?php echo $atts['text'] ?>
          <?php endif; ?>
        </div>
        <a href="<?=$link_url?>" class="review-item__link">
          <?=$link_text?>
        </a>
      </div>
  </div>
</div>