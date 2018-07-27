<?php if (!defined('FW')) {
  die('Forbidden');
}

$cfg = array(
  'page_builder' => array(
  'title'         => __('Link', '{domain}'),
  'description'   => __('', '{domain}'),
  'tab'           => __('General', '{domain}'),
  'popup_size'    => 'small', // can be large, medium or small
  'icon' => get_template_directory_uri().'/framework-customizations/'.
  'extensions/shortcodes/shortcodes/general_link/static/img/url.jpg'
  )
);