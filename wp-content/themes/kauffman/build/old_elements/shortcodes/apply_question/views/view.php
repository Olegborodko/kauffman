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

$data_aos = '';
if ( ! empty( $atts['data_aos'] ) ) {
  $data_aos = $atts['data_aos'];
}
?>

<div data-aos="<?=$data_aos?>" class="apply_section_next" style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
  <div class="do_question">
    <div class="row">
      <div class="col-xs-12">
        <ul>
          <li class="g_line_520">
          </li>
          <li class="g_title do_question_title">
            <?=$title?>
          </li>
        </ul>

        <div class="questions">
        <?php

        foreach ( $atts['items'] as $key => $value ) {
          ?>
          <div class="q_item">
            <div class="question js_question">
              <?=$value['title']?>
              <div class="min_plus js_min_plus">+</div>
            </div>
            <div class="q_ansver js_q_ansver">
              <?=$value['text']?>
            </div>
          </div>
          <?php
        }
        ?>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="still_have">
          <div>
          <?php if (!empty($atts['text'])): ?>
            <?php echo $atts['text'] ?>
          <?php endif; ?>
          </div>
          <div class="still_line"></div>
        </div>
      </div>
    </div>
  </div>
</div>