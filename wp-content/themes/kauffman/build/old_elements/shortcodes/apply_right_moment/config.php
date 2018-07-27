<?php if (!defined('FW')) {
  die('Forbidden');
}

$cfg = array(
  'page_builder' => array(
  'title'         => __('right moment (Full width)', '{domain}'),
  'description'   => __('', '{domain}'),
  'tab'           => __('Apply', '{domain}'),
  'popup_size'    => 'small',
  'icon' => get_template_directory_uri().'/framework-customizations/'.
  'extensions/shortcodes/shortcodes/apply_right_moment/static/img/right.jpg'
  )
);