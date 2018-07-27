<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(
'title' => array(
'type'  => 'text',
'value' => '',
'label' => __('title', '{domain}')
),

'text' => array(
'type'  => 'wp-editor',
'value' => '',
'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
'label' => __('Text', '{domain}'),
'size' => 'small', // small, large
'editor_height' => 400,
'wpautop' => true,
'editor_type' => false, // tinymce, html
'shortcodes' => false // true, array('button', map')
),

'image' => array(
'type'  => 'upload',
'label' => __('image', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'is_not_visible_mobile' => array(
'label' => __('Image hide on mobile', 'fw'),
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

'link_text' => array(
'type'  => 'text',
'value' => '',
'label' => __('link text', '{domain}')
),

'link_url' => array(
'type'  => 'text',
'value' => '#',
'label' => __('link url', '{domain}')
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