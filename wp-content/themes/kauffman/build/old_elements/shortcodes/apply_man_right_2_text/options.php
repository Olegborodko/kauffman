<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(
'title' => array(
'type'  => 'text',
'value' => 'Tadhg O’Toole Scholarship Fund',
'label' => __('title', '{domain}')
),

'text_1' => array(
'type'  => 'textarea',
'value' => 'In April of 2017, we lost a Fellow and friend, Tadhg O’Toole (Class 18) to cancer. In his memory, we are launching a scholarship fund to help foster leaders who embody Tadhg’s integrity, compassion, and entrepreneurial spirit—and asking for your support.',
'label' => __('text 1', '{domain}')
),

'text_2' => array(
'type'  => 'textarea',
'value' => 'The scholarship will be awarded to the new Fellow portraying similar qualities as Tadhg, including integrity, compassion, thoughtfulness, insight, leadership, generosity and a strong entrepreneurial spirit.',
'label' => __('text 2', '{domain}')
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