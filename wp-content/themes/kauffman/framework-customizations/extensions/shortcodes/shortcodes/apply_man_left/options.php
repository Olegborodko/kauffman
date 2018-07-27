<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(
'title' => array(
'type'  => 'text',
'value' => 'Tadhg O’Toole Scholarship Fund',
'label' => __('title', '{domain}')
),

'text1' => array(
'type'  => 'textarea',
'value' => 'In April of 2017, we lost a Fellow and friend, Tadhg O’Toole (Class 18) to cancer. In his memory, we are launching a scholarship fund to help foster leaders who embody Tadhg’s integrity, compassion, and entrepreneurial spirit—and asking for your support.',
'label' => __('text1', '{domain}')
),

'text2' => array(
'type'  => 'textarea',
'value' => 'The scholarship will be awarded to the new Fellow portraying similar qualities as Tadhg, including integrity, compassion, thoughtfulness, insight, leadership, generosity and a strong entrepreneurial spirit.',
'label' => __('text2', '{domain}')
),

'link_text' => array(
'type'  => 'text',
'value' => 'find out more about scholarship',
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