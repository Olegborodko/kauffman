<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kauffman
 */
$settings_options = fw()->theme->get_settings_options();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="masthead" class="site-header center_container clear_both">
   <div class="site-logo">
     <?php if ( function_exists( 'the_custom_logo' ) ) {
       the_custom_logo();
     }
     ?>
   </div>

   <div id="navbar" class="navbar">
     <div class="mobile-menu"><i class="fa fa-align-justify" id="i_menu"></i></div>
     <nav id="site-navigation" class="main-navigation">
       <?php
       $mp_entrepreneur_defaults = array(
       'theme_location' => 'menu-up',
       'menu_class'     => 'sf-menu ',
       'menu_id'        => 'main-menu',
       'fallback_cb'    => 'mp_entrepreneur_page_menu'
       );
       wp_nav_menu( $mp_entrepreneur_defaults );
       ?>
     </nav>
     <div class="clear_both">
     </div>
   </div>
   
	</header><!-- #masthead -->