<?php
/**
 * The template for displaying posts in the Quote post format
 *
 * Used for  index/archive/search.
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
		<section class="entry entry-content">
			<?php mp_entrepreneur_get_post_format_quote($post); ?>
			<div class="clearfix"></div>
			<?php wp_link_pages( array(
				'before'      => '<nav class="navigation paging-navigation wp-paging-navigation">',
				'after'       => '</nav>',
				'link_before' => '<span>',
				'link_after'  => '</span>'
			) ); ?>
		</section>
	</div>
</article><!-- #post -->
