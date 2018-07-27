<?php if (!defined('FW')) {
  die('Forbidden');
}

$number1 = '';
if ( ! empty( $atts['number1'] ) ) {
  $number1 = $atts['number1'];
}

$result1 = '';
if ( ! empty( $atts['result1'] ) ) {
  $result1 = $atts['result1'];
}

$text1 = '';
if ( ! empty( $atts['text1'] ) ) {
  $text1 = $atts['text1'];
}

$number2 = '';
if ( ! empty( $atts['number2'] ) ) {
  $number2 = $atts['number2'];
}

$result2 = '';
if ( ! empty( $atts['result2'] ) ) {
  $result2 = $atts['result2'];
}

$text2 = '';
if ( ! empty( $atts['text2'] ) ) {
  $text2 = $atts['text2'];
}

$number3 = '';
if ( ! empty( $atts['number3'] ) ) {
  $number3 = $atts['number3'];
}

$result3 = '';
if ( ! empty( $atts['result3'] ) ) {
  $result3 = $atts['result3'];
}

$text3 = '';
if ( ! empty( $atts['text3'] ) ) {
  $text3 = $atts['text3'];
}

$number4 = '';
if ( ! empty( $atts['number4'] ) ) {
  $number4 = $atts['number4'];
}

$result4 = '';
if ( ! empty( $atts['result4'] ) ) {
  $result4 = $atts['result4'];
}

$text4 = '';
if ( ! empty( $atts['text4'] ) ) {
  $text4 = $atts['text4'];
}

$number5 = '';
if ( ! empty( $atts['number5'] ) ) {
  $number5 = $atts['number5'];
}

$result5 = '';
if ( ! empty( $atts['result5'] ) ) {
  $result5 = $atts['result5'];
}

$text5 = '';
if ( ! empty( $atts['text5'] ) ) {
  $text5 = $atts['text5'];
}

$number6 = '';
if ( ! empty( $atts['number6'] ) ) {
  $number6 = $atts['number6'];
}

$result6 = '';
if ( ! empty( $atts['result6'] ) ) {
  $result6 = $atts['result6'];
}

$text6 = '';
if ( ! empty( $atts['text6'] ) ) {
  $text6 = $atts['text6'];
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

<div data-scroll-class="about-page__count" data-aos="<?=$data_aos?>" class="about-page__count" style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
  <ul>
    <li>
      <div class="big">
        <span class="count" data-duration="1000" data-result="<?=$result1?>" data-count-to="<?=$number1?>">
          0
        </span>
      </div>
      <div class="small"><?=$text1?></div>
    </li>
    <li>
      <div class="big">
        <span class="count" data-duration="1300" data-result="<?=$result2?>" data-count-to="<?=$number2?>">
        0
        </span>
      </div>
      <div class="small"><?=$text2?></div>
    </li>
    <li>
      <div class="big">
        <span class="count" data-duration="1600" data-result="<?=$result3?>" data-count-to="<?=$number3?>">
        0
        </span>
      </div>
      <div class="small"><?=$text3?></div>
    </li>
    <li>
      <div class="big">
        <span class="count" data-duration="1900" data-result="<?=$result4?>" data-count-to="<?=$number4?>">
        0
        </span>
      </div>
      <div class="small"><?=$text4?></div>
    </li>
    <li>
      <div class="big">
        <span class="count" data-duration="2300" data-result="<?=$result5?>" data-count-to="<?=$number5?>">
        0
        </span>
      </div>
      <div class="small"><?=$text5?></div>
    </li>
    <li>
      <div class="big">
        <span class="count" data-duration="2600" data-result="<?=$result6?>" data-count-to="<?=$number6?>">
        0
        </span>
      </div>
      <div class="small"><?=$text6?></div>
    </li>
  </ul>
</div>