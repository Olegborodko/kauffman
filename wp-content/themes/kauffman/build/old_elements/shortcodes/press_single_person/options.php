<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(
'name' => array(
'type'  => 'text',
'value' => 'Rusty Dornin',
'label' => __('name', '{domain}')
),

'position' => array(
'type'  => 'text',
'value' => 'Director of Marketing and Communications',
'label' => __('position', '{domain}')
),

'email' => array(
'type'  => 'text',
'value' => 'rdornin@kfp.org',
'label' => __('email', '{domain}')
),

'phone' => array(
'type'  => 'text',
'value' => '415-999-7806',
'label' => __('phone', '{domain}')
),

'margin_top' => array(
'type'  => 'text',
'value' => '40',
'label' => __('margin-top', '{domain}')
),

'margin_bottom' => array(
'type'  => 'text',
'value' => '0',
'label' => __('margin-bottom', '{domain}')
),

'image' => array(
'type'  => 'upload',
'label' => __('image', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'data_aos' => array(
'type'  => 'text',
'value' => '',
'label' => __('data-aos', '{domain}')
)
);