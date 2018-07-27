<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(

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

'text' => array(
'type'  => 'wp-editor',
'value' => '',
//'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
'label' => __('Text', '{domain}'),
'size' => 'large', // small, large
'editor_height' => 400,
'wpautop' => true,
'editor_type' => false, // tinymce, html
'shortcodes' => false // true, array('button', map')
),

'data_aos' => array(
'type'  => 'text',
'value' => '',
'label' => __('data-aos', '{domain}')
)
);