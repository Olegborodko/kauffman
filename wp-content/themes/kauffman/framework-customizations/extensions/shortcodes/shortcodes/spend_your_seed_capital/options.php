<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(
'text' => array(
'type'  => 'text',
'value' => 'Spend your seed capital wisely or risk starving down the road',
'label' => __('text', '{domain}')
),

'link' => array(
'type'  => 'text',
'value' => '#',
'label' => __('link', '{domain}')
),

'link_text' => array(
'type'  => 'text',
'value' => 'see what Kate Mitchell had to say',
'label' => __('link text', '{domain}')
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