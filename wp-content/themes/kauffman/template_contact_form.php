<?php
/*
Template Name: For form
*/

get_header('scroll-menu');
?>

<div class="center_container g_mobile_margin_top_50" style="margin-top: 110px">
  <?php
  while ( have_posts() ) :
    the_post();
    
    get_template_part( 'template-parts/content', 'home' );
  
  endwhile;
  ?>
</div>

<?php
get_footer();
?>