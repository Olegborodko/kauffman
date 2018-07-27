<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(

'items' => array(
'type'  => 'addable-box',
'value' => array(
array(
//'option_1' => 'value 1',
//'option_2' => 'value 2',
),

),
//'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
'label' => __('Items', '{domain}'),
//'desc'  => __('Description', '{domain}'),
//'help'  => __('Help tip', '{domain}'),
'box-options' => array(
'text' => array( 'type' => 'text' ),
'url' => array( 'type' => 'text' ),
),
'template' => 'item', // box title
'box-controls' => array( // buttons next to (x) remove box button
//'control-id' => '<small class="dashicons dashicons-smiley"></small>',
),
'limit' => 10, // limit the number of boxes that can be added
'add-button-text' => __('Add', '{domain}'),
'sortable' => true,
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