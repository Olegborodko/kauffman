<?php
/**
 * The default template for displaying content
 *
 * Used for single post.
 *
 * @package WordPress
 * @subpackage Entrepreneur
 * @since Entrepreneur 1.0
 */
global $MP_Entrepreneur_Page_Template;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post-entry'); ?>>
	<?php mp_entrepreneur_post_thumbnail( $post, $MP_Entrepreneur_Page_Template ); ?>
	<div class="post-wrapper">
		<header class="entry-header">
			<?php mp_entrepreneur_post_meta( $post ); ?>
			<h2 class="entry-title"><?php the_title(); ?></h2>
		</header>
		<section class="entry entry-content">
			<?php the_content(); ?>
			<div class="clearfix"></div>
			<?php wp_link_pages( array(
				'before'      => '<nav class="navigation paging-navigation wp-paging-navigation">',
				'after'       => '</nav>',
				'link_before' => '<span>',
				'link_after'  => '</span>'
			) ); ?>
		</section><!-- .entry-content -->
	</div>
	<footer class="entry-footer">
		<?php get_template_part( 'author-bio' ); ?>
	</footer><!-- .entry-meta -->

</article><!-- #post -->