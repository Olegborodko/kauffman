<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(
'title' => array(
'type'  => 'text',
'value' => 'Do you have a question? We got you covered.',
'label' => __('title', '{domain}')
),

'text' => array(
'type'  => 'wp-editor',
'value' => '',
'label' => __('Text', '{domain}'),
'size' => 'small',
'editor_height' => 400,
'wpautop' => true,
'editor_type' => false,
'shortcodes' => false
),

'items' => array(
'type'  => 'addable-box',
'value' => array(
array(),
),
'label' => __('Items', '{domain}'),
'box-options' => array(
'title' => array( 'type' => 'text' ),
  
'text' => array(
'type'  => 'wp-editor',
'value' => '',
'label' => __('Text', '{domain}'),
'size' => 'small',
'editor_height' => 200,
'wpautop' => true,
'editor_type' => false,
'shortcodes' => false
)
),
'template' => 'item', // box title
'box-controls' => array(),
'limit' => 50,
'add-button-text' => __('Add', '{domain}'),
'sortable' => true,
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

'data_aos' => array(
'type'  => 'text',
'value' => '',
'label' => __('data-aos', '{domain}')
)
);