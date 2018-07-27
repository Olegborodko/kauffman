<?php
/**
 * The template for displaying posts in the Video post format
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
	<?php mp_entrepreneur_post_format_gallery( $post, $MP_Entrepreneur_Page_Template ); ?>
	<div class="post-wrapper">
		<header class="entry-header">
			<?php mp_entrepreneur_post_meta( $post ); ?>
			<h2 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2>
		</header>
		<section class="entry entry-content">
			<?php the_excerpt(); ?>
			<div class="clearfix"></div>
			<?php wp_link_pages( array(
				'before'      => '<nav class="navigation paging-navigation wp-paging-navigation"',
				'after'       => '</nav>',
				'link_before' => '',
				'link_after'  => ''
			) ); ?>
		</section>
	</div>
</article><!-- #post -->