<?php if (!defined('FW')) {
  die('Forbidden');
}

$title = '';
if ( ! empty( $atts['title'] ) ) {
  $title = $atts['title'];
}

$text = '';
if ( ! empty( $atts['text'] ) ) {
  $text = $atts['text'];
}

$link_text = '';
if ( ! empty( $atts['link_text'] ) ) {
  $link_text = $atts['link_text'];
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
     class="j_mobile_margin"
     data-m-top="<?=$m_margin_top?>"
     data-m-bottom="<?=$m_margin_bottom?>"
     style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
  
  <?php
  $args = array(
  'post_type'=> 'post',
  'order'    => 'DESC',
  'category_name' => 'kf-review',
  'posts_per_page' => 3
  );
  
  $number = 0;
  $the_query = new WP_Query( $args );

  echo '<div>';
  echo '<div class="row">';
  
  if($the_query->have_posts() ) {
    while ($the_query->have_posts()) {
      $the_query->the_post();
      
      if ($number==3){
        return;
      }
      
      $number +=1;
      
      
      if ($number == 1){
        include_once 'post1.php';
      }elseif ($number == 2){
        echo '<div class="fw-col-xs-12 fw-col-lg-6">';
        include_once 'post2.php';
      }elseif ($number == 3){
        include_once 'post3.php';
      }
      
      if ($the_query->post_count == $number){
        echo '</div>';
?>
  <div class="g_mobile_display_block" style="margin:0 auto;text-align: left">
    <a style="padding: 29px 100px 28px 250px; color: rgb(16, 134, 194) !important;
    background-color: transparent !important;"
       href="<?=$link_url?>" class="releases__more-btn"
       onmouseover="this.style.cssText ='color:#FFFFFF!important;background-color:#1086C2!important;padding:29px 100px 28px 250px';"
       onmouseout="this.style.cssText='color:#1086C2!important;background-color:transparent!important;padding:29px 100px 28px 250px';"
       >
      <?=$link_text?></a>
</div>
<?php
      }
?>
      
      <?php
    }
  }
  
  echo '</div></div>';
  
    ?>

</div>