<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(

'title' => array(
'type'  => 'text',
'value' => 'Kauffman Fellow Review',
'label' => __('title', '{domain}')
),

'text' => array(
'type'  => 'textarea',
'value' => '',
'label' => __('text', '{domain}')
),

'link_text' => array(
'type'  => 'text',
'value' => 'Show More Posts',
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

'data_aos' => array(
'type'  => 'text',
'value' => '',
'label' => __('data-aos', '{domain}')
)
);
