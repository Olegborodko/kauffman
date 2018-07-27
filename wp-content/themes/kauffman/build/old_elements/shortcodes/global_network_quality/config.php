<?php if (!defined('FW')) {
  die('Forbidden');
}

$cfg = array(
  'page_builder' => array(
  'title'         => __('Network quality', '{domain}'),
  'description'   => __('', '{domain}'),
  'tab'           => __('General', '{domain}'),
  'popup_size'    => 'small',
  'icon' => get_template_directory_uri().'/framework-customizations/'.
  'extensions/shortcodes/shortcodes/global_network_quality/static/img/network.jpg'
  )
);