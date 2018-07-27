<?php if (!defined('FW')) {
  die('Forbidden');
}

$title = '';
if ( ! empty( $atts['title'] ) ) {
  $title = $atts['title'];
}

$link_text = '';
if ( ! empty( $atts['link_text'] ) ) {
  $link_text = $atts['link_text'];
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

<!-- start --><div data-aos="<?=$data_aos?>" style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
  
  <?php
  
  $args = array(
  'post_type'=> 'team',
  'order'    => 'DESC',
    
  'tax_query' => array(
  array(
    'taxonomy' => 'person_category',
    'field'    => 'slug',
    'terms' =>  'game-changers'
  )
  ),
    
  'posts_per_page' => -1
  );
  
  $number = 0;
  $the_query = new WP_Query( $args );
  

  if(((int)($the_query->post_count)) % 2 === 0) {
    $even = true;
  }else {
    $even = false;
  }

  echo '<div class="swiper-container"><div class="swiper-wrapper">'; #two div
  
  if($the_query->have_posts() ) {
    while ($the_query->have_posts()) {
      
      $the_query->the_post();
      if ($number==2){
        $number = 0;
      }
      $number +=1;
  
      $link_url = get_field( "link_url" );
  
      if ($number==1) {
        include 'post1.php';
      }
      if ($number==2) {
        include 'post2.php';
      }
    }
  
    ?>
    
    <?php
    if (!$even){
      ?>
        <div class="swiper_response_lg_50_xs_100">
          <div style="margin-top: 98px;
            margin-bottom: 0;
            text-align: right">
            <a style="padding: 29px 100px 28px 250px;
    color: rgb(16, 134, 194);
    background-color: transparent !important;"
               class="releases__more-btn swiper_button_js mobile-display-none"
               onmouseover="this.style.cssText ='color:#FFFFFF!important;background-color:#1086C2!important;padding:29px 100px 28px 250px';"
               onmouseout="this.style.cssText='color:#1086C2!important;background-color:transparent!important;padding:29px 100px 28px 250px';">
              <?=$link_text?></a>
            <div class="g_mobile_display_block g_text" style="font-size: 20px;">
              Swipe to see more >
            </div>
          </div>
        </div>
        </div>
      <?php
      
    }
    
  }
  
  echo '</div><div class="swiper-pagination"></div></div>'; #two div
  echo '</div>'; # end
  
    ?>

</div>