<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(
'title' => array(
'type'  => 'text',
'value' => 'Kauffman Fellows has a strong commitment to diversity.',
'label' => __('text', '{domain}')
),

'text' => array(
'type'  => 'textarea',
'value' => 'We believe our community is stronger & allows us to better serve entrepreneurs with a multiplicity of viewpoints and backgrounds.',
'label' => __('link', '{domain}')
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