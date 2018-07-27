<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(
'title' => array(
'type'  => 'text',
'value' => 'Members of the Kauffman Fellows Society are eligible to write for our publications',
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

'link_text_1' => array(
'type'  => 'text',
'value' => 'review guidelines',
'label' => __('link text 1', '{domain}')
),

'link_url_1' => array(
'type'  => 'text',
'value' => '#u1',
'label' => __('link url 1', '{domain}')
),

'link_text_2' => array(
'type'  => 'text',
'value' => 'journal guidelines',
'label' => __('link text 2', '{domain}')
),

'link_url_2' => array(
'type'  => 'text',
'value' => '#u2',
'label' => __('link url 2', '{domain}')
),

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