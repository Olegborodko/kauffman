<?php
/**
 * The sidebar containing the secondary widget area
 *
 * Displays on shop pages.
 *
 * If no active widgets are in this sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Entrepreneur
 * @since Entrepreneur 1.0.4
 */
?>
<?php if ( is_active_sidebar( 'sidebar-shop' ) ) : ?>
    <aside id="sidebar">
        <div class="widget-area">
            <?php dynamic_sidebar( 'sidebar-shop' ); ?>
        </div><!-- .widget-area -->
    </aside>
<?php else: ?>
    <?php	get_template_part( 'sidebar' );	?>
<?php endif; ?>
