<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(
'text' => array(
'type'  => 'text',
'value' => '',
'label' => __('text', '{domain}')
),

'url' => array(
'type'  => 'text',
'value' => '',
'label' => __('url', '{domain}')
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
)
);