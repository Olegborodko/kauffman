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

'margin_top' => array(
'type'  => 'text',
'value' => '0',
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

'data_aos' => array(
'type'  => 'text',
'value' => '',
'label' => __('data-aos', '{domain}')
)
);