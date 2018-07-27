<?php if (!defined('FW')) {
  die('Forbidden');
}

$cfg = array(
  'page_builder' => array(
  'title'         => __('question (Full width)', '{domain}'),
  'description'   => __('', '{domain}'),
  'tab'           => __('Apply', '{domain}'),
  'popup_size'    => 'small',
  'icon' => get_template_directory_uri().'/framework-customizations/'.
  'extensions/shortcodes/shortcodes/apply_question/static/img/question.jpg'
  )
);