<?php if (!defined('FW')) {
  die('Forbidden');
}

$cfg = array(
  'page_builder' => array(
  'title'         => __('general button', '{domain}'),
  'description'   => __('', '{domain}'),
  'tab'           => __('General', '{domain}'),
  'popup_size'    => 'small', // can be large, medium or small
  'icon' => get_template_directory_uri().'/framework-customizations/'.
  'extensions/shortcodes/shortcodes/global_button/static/img/btn.jpg'
  )
);