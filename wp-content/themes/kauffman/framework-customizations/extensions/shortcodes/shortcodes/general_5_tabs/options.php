<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(

'items' => array(
'type'  => 'addable-box',
'value' => array(
array(),
),
'attr'  => array( 'class' => 'g_width_100'),
'label' => __('Items', '{domain}'),
'box-options' => array(
'title' => array( 'type' => 'text' ),

'text' => array(
'type'  => 'wp-editor',
'value' => '',
'label' => __('Text', '{domain}'),
'size' => 'large',
'editor_height' => 400,
'wpautop' => true,
'editor_type' => false,
'shortcodes' => false
),

'image' => array(
'type'  => 'upload',
'label' => __('background', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
)


),
'template' => 'item', // box title
'box-controls' => array(),
'limit' => 5, // limit the number of boxes that can be added
'add-button-text' => __('Add', '{domain}'),
'sortable' => true,
),


//================

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

'data_aos' => array(
'type'  => 'text',
'value' => '',
'label' => __('data-aos', '{domain}')
)
);