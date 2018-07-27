<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(
'name' => array(
'type'  => 'text',
'value' => 'Dorothy Dela Cruz',
'label' => __('text', '{domain}')
),

'position' => array(
'type'  => 'text',
'value' => 'Office Coordinator',
'label' => __('position', '{domain}')
),

'text_font_size' => array(
'type'  => 'text',
'value' => '26px',
'label' => __('text font size', '{domain}'),
'desc'  => __('12px', 'fw'),
),

'image' => array(
'type'  => 'upload',
'label' => __('image', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'url' => array(
'type'  => 'text',
'value' => '#',
'label' => __('url', '{domain}')
),

'data_aos' => array(
'type'  => 'text',
'value' => '',
'label' => __('data-aos', '{domain}')
)
);