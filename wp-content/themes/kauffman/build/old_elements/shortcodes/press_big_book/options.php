<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(
'title' => array(
'type'  => 'text',
'value' => 'Kauffman Fellow Report – Journal',
'label' => __('title', '{domain}')
),

'text_1' => array(
'type'  => 'wp-editor',
'value' => '',
'label' => __('Text 1', '{domain}'),
'size' => 'large', // small, large
'editor_height' => 400,
'wpautop' => true,
'editor_type' => false,
'shortcodes' => false
),

'text_2' => array(
'type'  => 'wp-editor',
'value' => '',
'label' => __('Text 2', '{domain}'),
'size' => 'large', // small, large
'editor_height' => 400,
'wpautop' => true,
'editor_type' => false,
'shortcodes' => false
),

'text_3' => array(
'type'  => 'wp-editor',
'value' => '',
'label' => __('Text 3', '{domain}'),
'size' => 'large', // small, large
'editor_height' => 400,
'wpautop' => true,
'editor_type' => false,
'shortcodes' => false
),

'link_text' => array(
'type'  => 'text',
'value' => 'see previous reports',
'label' => __('link text', '{domain}')
),

'link_url' => array(
'type'  => 'text',
'value' => '#pp',
'label' => __('link_url', '{domain}')
),

//'download_pdf_url' => array(
//'type'  => 'text',
//'value' => '#',
//'label' => __('download pdf url', '{domain}')
//),

'image' => array(
'type'  => 'upload',
'label' => __('image', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
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