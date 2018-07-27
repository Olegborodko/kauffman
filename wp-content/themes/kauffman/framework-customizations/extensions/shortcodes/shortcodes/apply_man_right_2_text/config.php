<?php if (!defined('FW')) {
  die('Forbidden');
}

$cfg = array(
  'page_builder' => array(
  'title'         => __('block man and text (Full width)', '{domain}'),
  'description'   => __('', '{domain}'),
  'tab'           => __('Apply', '{domain}'),
  'popup_size'    => 'small', // can be large, medium or small
  'icon' => get_template_directory_uri().'/framework-customizations/'.
  'extensions/shortcodes/shortcodes/apply_man_right_2_text/static/img/apply_man_right_2.jpg'
  )
);