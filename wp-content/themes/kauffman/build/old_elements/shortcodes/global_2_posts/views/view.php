<?php if (!defined('FW')) {
  die('Forbidden');
}

$link = '';
if ( ! empty( $atts['link'] ) ) {
  $link = $atts['link'];
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

<div data-aos="<?=$data_aos?>" style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
<!--  <div class="row justify-content-between">-->
<!--    <div class="col-lg-5">-->
<!--      <div class="releases-header">-->
<!--        <h3 class="releases-header__heading">Press Releases</h3>-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="col-lg-5">-->
<!--      <p class="releases-header__text">Press materials are intended for journalists for a professional use. Subscribe to Kauffman Fellows press releases below.</p>-->
<!--      <form action="" method="post" class="releases-header__form">-->
<!--        <input type="email" placeholder="your e-mail address" class="releases-header__input" required>-->
<!--      </form>-->
<!--    </div>-->
<!--  </div>-->
  
  <?php
  $args = array(
  'post_type'=> 'press_releases',
  'order'    => 'DESC',
  'posts_per_page' => -1
  );
  
  $number = 0;
  $data_count = 0;
  $the_query = new WP_Query( $args );
  
  $length = $the_query->post_count;
  
  echo '<div class="row">';
  
  if($the_query->have_posts() ) {
    while ($the_query->have_posts() && $number<2) {
      $the_query->the_post();
      
      if ($number==2){
        $number = 0;
        $data_count +=1;
        return;
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
  
  if ($length>=3) {
    ?>
    <div class="row justify-content-end">
      <div class="col-xl-3">
        <div class="releases__more-wrapper">
          <a href="<?=$link?>" class="releases__more-btn">read more</a>
        </div>
      </div>
    </div>
    <?php
  }
  
  ?>

</div>