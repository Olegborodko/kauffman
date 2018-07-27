<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(
'title' => array(
'type'  => 'text',
'value' => 'Unlocking the Ivory Tower: How Management Research Can Transform Your Business',
'label' => __('title', '{domain}')
),

'description' => array(
'type'  => 'text',
'value' => 'Eric Ball, PhD & Joseph A. LiPuma, DBA',
'label' => __('autors', '{domain}')
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

'link_text' => array(
'type'  => 'text',
'value' => 'more information',
'label' => __('link text', '{domain}')
),

'link_url' => array(
'type'  => 'text',
'value' => '#mi',
'label' => __('link_url', '{domain}')
),

'buy_url' => array(
'type'  => 'text',
'value' => '#',
'label' => __('buy url', '{domain}')
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

'data_aos' => array(
'type'  => 'text',
'value' => '',
'label' => __('data-aos', '{domain}')
)
);