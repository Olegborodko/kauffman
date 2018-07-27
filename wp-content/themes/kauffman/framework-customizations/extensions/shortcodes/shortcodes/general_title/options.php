<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(
'text' => array(
'type'  => 'text',
'value' => '',
'label' => __('text', '{domain}')
),

'align' => array(
'type'  => 'select',
'value' => 'left',
'label' => __('Align', '{domain}'),
'choices' => array(
  'left' => 'left',
  'center' => 'center',
  'right' => 'right'),
'no-validate' => false
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
),

'class' => array(
'type'  => 'text',
'value' => '',
'label' => __('class', '{domain}'),
'desc'  => __('custom class', 'fw')
),

);