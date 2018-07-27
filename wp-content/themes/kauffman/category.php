<?php
/**
 * The template for displaying the summary listing of Journal articles for a volume.
 * Created by Together Editing & Design (www.togetherediting.com)
 * It relies on the function JournalTemplateSelect to force subcategories (e.g., vol-5)
 * to use the parent (journal) category template.
 *
 * @package snpcore-revised-2017
 * @since snpcore 2.0
 */

get_header('scroll-menu'); ?>

<?php
$term = get_queried_object();
//var_dump($term);
?>

  <div class="center_container g_mobile_margin_100 category_template">
           
            <div class="entry-head">
              <h1 class="g_title">
                Category: <?=$term->name?>
              </h1>
            </div>
            
            <?php

            $custom_query = new WP_Query( array(
            'post_type' => 'journal_posts',
            'tax_query' => array(
            array(
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    => $term->slug
            )
            )
            ) );
            
            //var_dump($custom_query->post_count);

            while($custom_query->have_posts()) : $custom_query->the_post(); ?>
            
              <div class='report-article'>
                <h4 class='entry-title'>
                  <a href='<?php echo the_permalink(); ?>'>
                    <?php the_title(); ?>
                  </a>
                </h4>
                <?php the_excerpt(); ?>
              </div>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          
          </div>
<?php get_footer(); ?>