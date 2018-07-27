<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Entrepreneur
 * @since Entrepreneur 1.0
 */
get_header();

if ( has_action( mp_entrepreneur_get_prefix() . 'theme_sub_header_single' ) ) {
	do_action( mp_entrepreneur_get_prefix() . 'theme_sub_header_single' );
}
?>
	<div class="container main-container">
		<div class="row clearfix">
			<div class=" col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'single' ); ?>
					<?php comments_template(); ?>
				<?php endwhile; ?>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 col-lg-offset-1">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>