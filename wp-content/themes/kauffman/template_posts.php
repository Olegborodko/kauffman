<?php
/*
Template Name: Archive posts
*/
?>

<?php
get_header('scroll-menu');
?>


<?php
while ( have_posts() ) :
  the_post();
  
  get_template_part( 'template-parts/content', 'home' );

endwhile;
?>

<?php
$args = array(
'post_type'=> 'post',
'order'    => 'DESC',
'posts_per_page' => -1
);

$the_query = new WP_Query( $args );

echo '<div class="center_container posts g_mobile_margin_top_0"><div class="row">';

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
    ?>

    <div class="fw-col-xs-12 fw-col-lg-6">

      <div class="review-item-block aos-init aos-animate">
        <div class="review-item--left">
          <div class="review-item__white-block">
          </div>
          <div class="review-item__img-wrapper">
            <a href="<?=get_post_permalink()?>">
              <?=get_the_post_thumbnail()?>
            </a>
          </div>

          <div class="review-item__tags">
            <?php
            if (get_the_tags()) {
              foreach (get_the_tags() as $key => $value) {
                ?>
                <a href="<?= get_tag_link($value->term_id) ?>"
                   style="background-color: <?= color_next($key + 1) ?>"><?= $value->name ?></a>
                <?php
              }
            }
            ?>
          </div>

          <div class="review-item__content">
      <span class="review-item__title">
        <a href="<?=get_post_permalink()?>">
          <?=get_the_title()?>
        </a>
      </span>
            <div class="review-item__dscr">
              <p>
        <span>
          <?=get_field("short_text")?>
        </span>
              </p>
            </div>
            <a href="<?=get_post_permalink()?>" class="review-item__link">
              <?=get_field("link_text")?>
            </a>
          </div>
        </div>
      </div>

    </div>
    
    <?php
  }
}

echo '</div></div>';
?>

<?php
get_footer();
?>