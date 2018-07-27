<?php
/**
 * The sidebar containing the footer widget area
 *
 * If no active widgets in this sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage entrepreneur
 * @since entrepreneur 1.0
 */
?>

<?php if ( is_active_sidebar('sidebar-2') || is_active_sidebar('sidebar-3') || is_active_sidebar('sidebar-4') ) : ?>

<div class="footer-sidebar">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<?php if ( is_active_sidebar( 'sidebar-2' ) ) {
					dynamic_sidebar( 'sidebar-2' );
				} ?>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<?php if ( is_active_sidebar( 'sidebar-3' ) ) {
					dynamic_sidebar( 'sidebar-3' );
				} ?>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<?php if ( is_active_sidebar( 'sidebar-4' ) ) {
					dynamic_sidebar( 'sidebar-4' );
				} ?>
			</div>
		</div><!-- .widget-area -->
	</div>
</div>

<?php endif; ?>