<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(
'title' => array(
'type'  => 'text',
'value' => 'Mamoon Hamid: Future Programmers Could Be Blue-Collar Workers',
'label' => __('title', '{domain}')
),

'text' => array(
'type'  => 'wp-editor',
'value' => '',
'label' => __('Text', '{domain}'),
'size' => 'large', // small, large
'editor_height' => 400,
'wpautop' => true,
'editor_type' => false,
'shortcodes' => false
),

'text_max_width' => array(
'type'  => 'text',
'value' => '',
'label' => __('text max width', '{domain}'),
'desc'  => __('310px, 50%, ...', 'fw'),
),

'link_text' => array(
'type'  => 'text',
'value' => 'see what Mamoon Hamid had to say',
'label' => __('link text', '{domain}')
),

'link_url' => array(
'type'  => 'text',
'value' => '#',
'label' => __('link_url', '{domain}')
),

'image' => array(
'type'  => 'upload',
'label' => __('image', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'white_block_size' => array(
'type'  => 'text',
'value' => '',
'label' => __('white block size', '{domain}'),
'desc'  => __('11px, 12%, ...', 'fw'),
),

'items' => array(
'type'  => 'addable-box',
'value' => array(
array(),
),
'label' => __('Tags', '{domain}'),
'box-options' => array(
'link_text' => array('type' => 'text'),
'link_url' => array('type' => 'text'),
'background_color' => array('type'  => 'color-picker')
),
'template' => 'item', // box title
'box-controls' => array( // buttons next to (x) remove box button
),
'limit' => 30, // limit the number of boxes that can be added
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

'margin_right' => array(
'type'  => 'text',
'value' => '60',
'label' => __('margin-right', '{domain}'),
'desc'  => __('0, 12, -10, ...', 'fw'),
),

'margin_left' => array(
'type'  => 'text',
'value' => '60',
'label' => __('margin-left', '{domain}'),
'desc'  => __('0, 12, -20, ...', 'fw'),
),

'padding_left' => array(
'type'  => 'text',
'value' => '0',
'label' => __('inside padding-left', '{domain}'),
'desc'  => __('0, 12, -5, ...', 'fw'),
),

'padding_right' => array(
'type'  => 'text',
'value' => '0',
'label' => __('inside padding-right', '{domain}'),
'desc'  => __('0, 12, -3, ...', 'fw'),
),

'data_aos' => array(
'type'  => 'text',
'value' => '',
'label' => __('data-aos', '{domain}')
)
);