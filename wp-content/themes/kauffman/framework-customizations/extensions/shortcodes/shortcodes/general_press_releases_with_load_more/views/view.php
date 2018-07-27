<?php if (!defined('FW')) {
  die('Forbidden');
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
    
 <?php
  $args = array(
  'post_type'=> 'press_releases',
  'order'    => 'DESC',
  'posts_per_page' => -1
  );
  
  $number = 0;
  $data_count = 0;
  $the_query = new WP_Query( $args );
  ?>

  <div class="j_mobile_margin"
       data-aos="<?=$data_aos?>"
       data-m-top="<?=$m_margin_top?>"
       data-m-bottom="<?=$m_margin_bottom?>"
  style="margin-top: <?=$margin_top?>px;
  margin-bottom: <?=$margin_bottom?>px">
  <div class="row">
  
  <?php
  if($the_query->have_posts() ) {
    while ($the_query->have_posts()) {
      $the_query->the_post();
      
      if ($number==2){
        $number = 0;
        $data_count +=1;
      }
      
      $number +=1;
      ?>


      <div data-view="0" class="js_data_view col-md-6 js_post_item_display" data-post="<?=$data_count?>">
        <div class="releases__item">
          <span class="releases__date">
            <?= get_the_date()?>
          </span>
          <h4 class="releases__heading">
            <?=get_the_title();?>
          </h4>
          <p class="releases__text">
            <?=get_field( "short_text" )?>
          </p>
          <a href="<?=get_post_permalink()?>" class="releases__link">read the whole story</a>
        </div>
      </div>
      
      <?php
    }
  }
  
  echo '</div>';
  
  if ($data_count>0) {
    ?>
    <div class="row justify-content-end">
      <div class="col-xl-3">
        <div class="releases__more-wrapper">
          <a class="releases__more-btn js_post_btn_more" data-count="<?=$data_count?>">load more press releases</a>
        </div>
      </div>
    </div>
    <?php
  }
  
  ?>
</div>
