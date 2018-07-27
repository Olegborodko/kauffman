<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(

'items' => array(
'type'  => 'addable-box',
'value' => array(
),
'label' => __('Items', '{domain}'),
'box-options' => array(
'text' => array( 'type' => 'textarea')
),
'template' => 'item', // box title
'box-controls' => array(),
'limit' => 50,
'add-button-text' => __('Add', '{domain}'),
'sortable' => true
),

'margin_top' => array(
  'type'  => 'text',
  'value' => '0',
  'label' => __('margin-top', '{domain}')
),

'margin_bottom' => array(
  'type'  => 'text',
  'value' => '0',
  'label' => __('margin-bottom', '{domain}')
)

);