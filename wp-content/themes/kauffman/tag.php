<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kauffman
 */

get_header('scroll-menu');
?>
      
      <?php if ( have_posts() ) : ?>
        <div class="tags">
        <div class="center_container">
        <header class="page-header">
          <?php
          the_archive_title( '<h1 class="g_title">', '</h1>' );
          //the_archive_description( '<div class="archive-description">', '</div>' );
          ?>
        </header><!-- .page-header -->
        </div>
        <?php
        /* Start the Loop */
        echo '<div class="center_container posts tags__block"><div class="row">';
        
        while ( have_posts() ) :
          the_post();
        
        ?>
  
          <div class="fw-col-xs-12 fw-col-lg-6">
    
            <div class="review-item-block aos-init aos-animate tags__review">
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
                  foreach (get_the_tags() as $key => $value){
                    ?>
                    <a href="<?=get_tag_link($value->term_id)?>" style="background-color: <?=color_next($key+1)?>"><?=$value->name?></a>
                    <?php
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
          
          //get_template_part( 'template-parts/content', get_post_type() );
        endwhile;
  
        echo '</div></div></div>';
      
      else :
        
        get_template_part( 'template-parts/content', 'none' );
      
      endif;
      ?>

<?php
get_footer();
