<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(
  
'title' => array(
'type'  => 'text',
'value' => 'Developing leaders in innovation &&nbspcapital&nbspformation through 2-year program.',
'label' => __('title', '{domain}')
),

'text' => array(
'type'  => 'text',
'value' => 'Transformative opportunity designed to radically accelerate innovator success through through self-reflection, peer learning, mentoring, and a structured curriculum taught by venture capitalists and global thought leaders.',
'label' => __('text', '{domain}')
),

'margin_top' => array(
'type'  => 'text',
'value' => '160',
'label' => __('margin-top', '{domain}')
),

'margin_bottom' => array(
'type'  => 'text',
'value' => '0',
'label' => __('margin-bottom', '{domain}')
),

'm_margin_top' => array(
'type'  => 'text',
'value' => '80',
'label' => __('mobile margin-top', '{domain}')
),

'm_margin_bottom' => array(
'type'  => 'text',
'value' => '',
'label' => __('mobile margin-bottom', '{domain}')
),

'image' => array(
'type'  => 'upload',
'label' => __('background', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'background_position_x' => array(
'label' => __('Background position X', 'fw'),
'desc'  => __('center, left, right, 10px, calc(100% - 20px)', 'fw'),
'type'  => 'text'
),
'background_position_y' => array(
'label' => __('Background position Y', 'fw'),
'desc'  => __('bottom, center, top, 10px, calc(70% - 90px)', 'fw'),
'type'  => 'text'
),

'background_resize' => array(
'label' => __('Background resize on mobile', 'fw'),
'type'  => 'switch',
'value' => 'no',
'left-choice' => array(
'value' => 'yes',
'label' => __('YES', 'fw'),
),
'right-choice' => array(
'value' => 'no',
'label' => __('NO', 'fw'),
)
),
  
'data_aos' => array(
'type'  => 'text',
'value' => '',
'label' => __('data-aos', '{domain}')
)
);