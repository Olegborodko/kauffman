<?php if (!defined('FW')) {
  die('Forbidden');
}

$cfg = array(
  'page_builder' => array(
  'title'         => __('Review', '{domain}'),
  'description'   => __('', '{domain}'),
  'tab'           => __('Press', '{domain}'),
  'popup_size'    => 'small', // can be large, medium or small
  'icon' => get_template_directory_uri().'/framework-customizations/'.
  'extensions/shortcodes/shortcodes/press_review/static/img/review.jpg'
  )
);