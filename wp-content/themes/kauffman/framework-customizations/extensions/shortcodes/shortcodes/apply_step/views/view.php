<?php if (!defined('FW')) {
  die('Forbidden');
}

$title_digit = '';
if ( ! empty( $atts['title_digit'] ) ) {
  $title_digit = $atts['title_digit'];
}

$title_text = '';
if ( ! empty( $atts['title_text'] ) ) {
  $title_text = $atts['title_text'];
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

$m_margin_top = 0;
if ( ! empty( $atts['m_margin_top'] ) ) {
  $m_margin_top = (int) $atts['m_margin_top'];
}

$m_margin_bottom = 0;
if ( ! empty( $atts['m_margin_bottom'] ) ) {
  $m_margin_bottom = (int) $atts['m_margin_bottom'];
}

$data_aos = '';
if ( ! empty( $atts['data_aos'] ) ) {
  $data_aos = $atts['data_aos'];
}
?>

<div data-aos="<?=$data_aos?>"
     data-m-top="<?=$m_margin_top?>"
     data-m-bottom="<?=$m_margin_bottom?>"
     class="apply_section_next j_mobile_margin"
     style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
  <div class="nomination_b">

    <ul class="nomination_block">
      <li class="nomination_title">
        <div class="nomination_top_line"></div>
        <div class="nomination_01">
          <?=$title_digit?>
        </div>
        <div class="nomination_02">
          <?=$title_text?>
        </div>
      </li>
      <li class="nomination_text_block clear_both">
        <div class="nomination_text">
          <?php if (!empty($atts['text'])): ?>
            <?php echo $atts['text'] ?>
          <?php endif; ?>
        </div>
      </li>
      <li class="nomination_btn_li">
        <a href="<?=$link_url?>" class="nomination_btn">apply</a>
      </li>
    </ul>

  </div>
</div>