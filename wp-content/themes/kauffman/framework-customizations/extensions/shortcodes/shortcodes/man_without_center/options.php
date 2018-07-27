<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(
'name' => array(
'type'  => 'text',
'value' => 'Jayden Ortiz',
'label' => __('name', '{domain}')
),

'description' => array(
'type'  => 'text',
'value' => 'Arabia – Class 20',
'label' => __('description', '{domain}')
),

'text' => array(
'type'  => 'wp-editor',
'value' => '',
'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
'label' => __('Text', '{domain}'),
'size' => 'large', // small, large
'editor_height' => 500,
'wpautop' => true,
'editor_type' => false, // tinymce, html
'shortcodes' => false // true, array('button', map')
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