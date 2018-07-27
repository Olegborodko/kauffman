<?php

/**
 * Template Name: Front Page
 * The template file for front page.
 * @package Entrepreneur
 * @since Entrepreneur 1.0.0
 */
get_header();

if (have_posts()) :
    /* The loop */
    while (have_posts()) : the_post();
       get_template_part('custom-page');
    endwhile;
endif;

get_footer();
