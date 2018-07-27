<?php

$mp_entrepreneur_sections = array();

if ( ! ( get_theme_mod( mp_entrepreneur_get_prefix() . 'first_section_show', false ) || get_theme_mod( mp_entrepreneur_get_prefix() . 'first_section_show' ) ) ):
	$mp_entrepreneur_sections["first_section"] = esc_html( get_theme_mod( mp_entrepreneur_get_prefix() . 'first_section_position', 10 ) );
endif;
if ( ! ( get_theme_mod( mp_entrepreneur_get_prefix() . 'services_show', false ) || get_theme_mod( mp_entrepreneur_get_prefix() . 'services_show' ) ) ):
	$mp_entrepreneur_sections["services"] = esc_html( get_theme_mod( mp_entrepreneur_get_prefix() . 'services_position', 20 ) );
endif;
if ( ! ( get_theme_mod( mp_entrepreneur_get_prefix() . 'portfolio_show', false ) || get_theme_mod( mp_entrepreneur_get_prefix() . 'portfolio_show' ) ) ):
	$mp_entrepreneur_sections["portfolio"] = esc_html( get_theme_mod( mp_entrepreneur_get_prefix() . 'portfolio_position', 30 ) );
endif;
if ( ! ( get_theme_mod( mp_entrepreneur_get_prefix() . 'testimonials_show', false ) || get_theme_mod( mp_entrepreneur_get_prefix() . 'testimonials_show' ) ) ):
	$mp_entrepreneur_sections["testimonials"] = esc_html( get_theme_mod( mp_entrepreneur_get_prefix() . 'testimonials_position', 40 ) );
endif;
if ( ! ( get_theme_mod( mp_entrepreneur_get_prefix() . 'news_show', false ) || get_theme_mod( mp_entrepreneur_get_prefix() . 'news_show' ) ) ):
	$mp_entrepreneur_sections["lastnews"] = esc_html( get_theme_mod( mp_entrepreneur_get_prefix() . 'news_position', 50 ) );
endif;
if ( ! ( get_theme_mod( mp_entrepreneur_get_prefix() . 'call_to_action_show', false ) || get_theme_mod( mp_entrepreneur_get_prefix() . 'call_to_action_show' ) ) ):
	$mp_entrepreneur_sections["call_to_action"] = esc_html( get_theme_mod( mp_entrepreneur_get_prefix() . 'call_to_action_position', 60 ) );
endif;
asort( $mp_entrepreneur_sections );
foreach ( $mp_entrepreneur_sections as $key => $val ) {
	get_template_part( "sections/content", $key );
}