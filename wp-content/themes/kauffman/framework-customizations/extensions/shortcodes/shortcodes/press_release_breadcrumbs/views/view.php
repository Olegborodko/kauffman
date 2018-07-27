<?php if (!defined('FW')) {
  die('Forbidden');
}

if ( ! empty( $atts['items'] ) ) {
}else{
  return;
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
     class="j_mobile_margin"
     style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
  <ul class="breadcrumbs">
    
    <?php
    $last_el = count($atts['items'])-1;
    foreach ( $atts['items'] as $key => $value ) {
      if ($key!=$last_el){
        ?>
        <li class="breadcrumbs__item">
          <a href="<?=$value['url']?>"><?=$value['text']?></a>
        </li>
        <?php
      }else{
        ?>
        <li class="breadcrumbs__item-current">
          <span><?=$value['text']?></span>
        </li>
        <?php
      }
    }
    ?>
    
    
  </ul>
</div>