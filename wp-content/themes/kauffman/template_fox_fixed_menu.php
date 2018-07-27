<?php
/*
Template Name: Template fox fixed menu
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
get_footer();
?>