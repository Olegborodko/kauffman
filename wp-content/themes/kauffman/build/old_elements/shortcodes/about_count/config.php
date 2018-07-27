<?php if (!defined('FW')) {
  die('Forbidden');
}

$cfg = array(
  'page_builder' => array(
  'title'         => __('About count', '{domain}'),
  'description'   => __('', '{domain}'),
  'tab'           => __('About', '{domain}'),
  'popup_size'    => 'small',
  'icon' => get_template_directory_uri().'/framework-customizations/'.
  'extensions/shortcodes/shortcodes/about_count/static/img/about_count.jpg'
  )
);