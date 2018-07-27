<?php
/**
 * The sidebar containing the secondary widget area
 *
 * Displays on posts and pages.
 *
 * If no active widgets are in this sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Entrepreneur
 * @since Entrepreneur 1.0
 */
?>
<aside id="sidebar">
    <div class="widget-area">
        <?php if (is_active_sidebar('sidebar-1')) : ?>
            <?php dynamic_sidebar('sidebar-1'); ?>
        <?php else: ?>
            <?php
            $mp_entrepreneur_args = array(
                'before_title' => '<h3 class="widget-title h2">',
                'after_title' => '</h3>',
            );
            $mp_entrepreneur_instance = array();
            the_widget('WP_Widget_Search', $mp_entrepreneur_instance, $mp_entrepreneur_args);
            
            the_widget('WP_Widget_Recent_Posts', $mp_entrepreneur_instance, $mp_entrepreneur_args);
            
            the_widget('WP_Widget_Tag_Cloud', $mp_entrepreneur_instance, $mp_entrepreneur_args);
                       
            the_widget('WP_Widget_Meta', $mp_entrepreneur_instance, $mp_entrepreneur_args);
            ?> 
        <?php endif; ?>
    </div><!-- .widget-area -->
</aside>
