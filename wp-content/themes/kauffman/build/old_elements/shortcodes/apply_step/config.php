<?php if (!defined('FW')) {
  die('Forbidden');
}

$cfg = array(
  'page_builder' => array(
  'title'         => __('Step (Full width)', '{domain}'),
  'description'   => __('', '{domain}'),
  'tab'           => __('Apply', '{domain}'),
  'popup_size'    => 'small', // can be large, medium or small
  'icon' => get_template_directory_uri().'/framework-customizations/'.
  'extensions/shortcodes/shortcodes/apply_step/static/img/step.jpg'
  )
);

