<?php
/**
 * Template Name: Full width page
 * The template file for full width pages.
 * @package Entrepreneur
 * @since Entrepreneur 1.0
 */
get_header();
?>
    <div class="container-fluid main-container landing-page-container">
        <?php if (have_posts()) : ?>
            <?php /* The loop */ ?>
            <?php while (have_posts()) : the_post(); ?>
                <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php if (has_post_thumbnail() && !post_password_required()) : ?>
                        <div class="entry-thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div><!-- .entry-content -->
                </article><!-- #post -->
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>