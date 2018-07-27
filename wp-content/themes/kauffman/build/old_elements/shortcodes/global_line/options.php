<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(
'size' => array(
'type'  => 'text',
'value' => '200',
'label' => __('size', '{domain}')
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

'class' => array(
'type'  => 'text',
'value' => '',
'label' => __('class', '{domain}'),
'desc'  => __('custom class', 'fw')
),

);