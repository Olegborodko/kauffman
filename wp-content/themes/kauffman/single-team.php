<?php
get_header('scroll-menu');
?>

<div class="center_container" style="margin-top:82px;">
  <?php
  while ( have_posts() ) :
    the_post();
    
    get_template_part( 'template-parts/content2', get_post_type() );
  
  endwhile; // End of the loop.
  ?>
</div>

<?php
get_footer();
?>
