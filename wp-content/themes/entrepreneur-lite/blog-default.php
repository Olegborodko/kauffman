<?php
/**
 *  With Sidebar (Blog)
 * The template file for pages without right sidebar.
 * @package Entrepreneur
 * @since Entrepreneur 1.0
 */


if ( has_action( mp_entrepreneur_get_prefix() . 'theme_sub_header_blog' ) ) {
    do_action( mp_entrepreneur_get_prefix() . 'theme_sub_header_blog' );
}
?>
<div class="container main-container">
    <div class="row clearfix">
        <div class=" col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <?php if (have_posts()) : ?>
                <?php /* The loop */ ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('content', get_post_format()); ?>
                <?php endwhile; ?>
                <?php mp_entrepreneur_pagination(); ?>
            <?php endif; ?>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 col-lg-offset-1">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php 