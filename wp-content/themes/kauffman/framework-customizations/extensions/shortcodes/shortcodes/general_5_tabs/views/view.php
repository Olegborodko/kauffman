<?php if (!defined('FW')) {
  die('Forbidden');
}

if (empty( $atts['items'] ) ) {
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

<div class="apply_section_next j_mobile_margin"
     data-m-top="<?=$m_margin_top?>"
     data-m-bottom="<?=$m_margin_bottom?>"
     data-aos="<?=$data_aos?>"
     style="margin-top: <?= $margin_top ?>px;
     margin-bottom: <?= $margin_bottom ?>px">
  <div class="in_an_app">
    <div class="row in_an_box_outside clear_both">
      <div class="col-xs-12 col-lg-12">
        <ul class="in_an_menu clear_both">
          
          <?php
          $isFirst = true;
          foreach ( $atts['items'] as $key => $value ) {
            if($isFirst){
              echo '<li class="active" data-tab="'.($key+1).'">';
            }else{
              echo '<li data-tab="'.($key+1).'">';
            }
            
            echo '<span>'.$value['title'].'</span>';
            echo '</li>';
            $isFirst = false;
          }
          ?>

        </ul>
      </div>
    </div>

    <div class="row">
      <div class="in_an_box g_relative">
        
        <?php
        foreach ( $atts['items'] as $key => $value ) {
          ?>

          <div class="in_an_box_item" data-tab="<?=$key+1?>" style="
          background-image:url(<?=$value['image']['url']?>);
          background-repeat: no-repeat;
          background-position: 95% 24px;
          ">
            <div class="in_an_left_bg"></div>

            <div class="col-xs-12 col-lg-6 g_line_height_36">
               <?=$value['text']?>
            </div>
          </div>
          
          <?php
        }
        ?>

        
      </div>
    </div>
  </div>
</div>

