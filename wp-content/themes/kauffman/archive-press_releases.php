<?php
get_header('scroll-menu');

$args = array(
'post_type'=> 'press_releases',
//'areas'    => 'painting',
'order'    => 'DESC',
'posts_per_page' => -1
);

$number = 0;
$data_count = 0;
$the_query = new WP_Query( $args );

echo '<div class="center_container g_mobile_margin_100" style="margin-top:80px;margin-bottom: 120px"><div class="row">';

//$the_query = new WP_Query( $args );

//if ( $wp_query->max_num_pages > 1 ){
//  echo next_posts_link( 'Load More' );
//}


if($the_query->have_posts() ) {
  while ($the_query->have_posts()) {
    $the_query->the_post();
  
//    echo get_the_title();
//    echo get_the_content();
  
    //echo get_the_date();
  
    //echo get_field( "short_text" );
    //echo get_post_permalink();
    if ($number==6){
      $number = 0;
      $data_count +=1;
    }
    
    $number +=1;
    ?>
  
    
      <div class="col-md-6 js_post_item_display" data-post="<?=$data_count?>">
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
        <a class="releases__more-btn js_post_btn_more">load more press releases</a>
      </div>
    </div>
  </div>
  <?php
}

echo '</div>';

get_footer();
?>