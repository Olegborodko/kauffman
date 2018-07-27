<?php if (!defined('FW')) {
  die('Forbidden');
}

$cfg = array(
  'page_builder' => array(
  'title'         => __('Title&text/ with offset (Full width)', '{domain}'),
  'description'   => __('', '{domain}'),
  'tab'           => __('General', '{domain}'),
  'popup_size'    => 'small', // can be large, medium or small
  'icon' => get_template_directory_uri().'/framework-customizations/'.
  'extensions/shortcodes/shortcodes/about_title_and_text/static/img/top_with.jpg'
  )
);