<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(

//'choices' => array(
//'type'   => 'addable-option',
//'value' => array('Value 1', 'Value 2', 'Value 3'),
//'label'  => __( 'Choices', 'fw' ),
//'desc'   => __( 'Add choice', 'fw' ),
//'option' => array(
//'type' => 'text',
//)
//)

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
'link_id' => array( 'type' => 'text' ,
'desc'  => __('menu-anchor-xx2, menu-anchor-item1 | for section need use - menu-anchor-xx2-content, menu-anchor-item1-content', 'fw')),
'link_text' => array( 'type' => 'text' ),
),
'template' => 'item', // box title
'box-controls' => array( // buttons next to (x) remove box button
//'control-id' => '<small class="dashicons dashicons-smiley"></small>',
),
'limit' => 10, // limit the number of boxes that can be added
'add-button-text' => __('Add', '{domain}'),
'sortable' => true,
),

'top' => array(
  'type'  => 'text',
  'value' => '661',
  'label' => __('top', '{domain}')
),

'space' => array(
'type'  => 'text',
'value' => '120',
'label' => __('space', '{domain}'),
'desc'  => __('space between items', 'fw'),
)

);