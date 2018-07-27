<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(

'title' => array(
'type'  => 'text',
'value' => '',
'label' => __('Title', '{domain}')
),

'text_bottom' => array(
'type'  => 'text',
'value' => '',
'label' => __('Text bottom', '{domain}')
),

'text_small' => array(
'type'   => 'wp-editor',
'label'  => __( 'Text small', 'fw' ),
'size' => 'large',
'editor_height' => 400,
'shortcodes' => true
),

//'text_small' => array(
//'type'  => 'wp-editor',
//'value' => '',
//'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
//'label' => __('Text small', '{domain}'),
//'size' => 'large', // small, large
//'editor_height' => 400,
//'wpautop' => true,
//'editor_type' => false,
//'shortcodes' => true
//),

'text_large' => array(
'type'   => 'wp-editor',
'label'  => __( 'Text large', 'fw' ),
'size' => 'large',
'editor_height' => 400,
'shortcodes' => true
),

//'text_large' => array(
//'type'  => 'wp-editor',
//'value' => '',
//'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
//'label' => __('Text large', '{domain}'),
//'size' => 'large', // small, large
//'editor_height' => 400,
//'wpautop' => true,
//'editor_type' => 'html', // tinymce, html
//'shortcodes' => true
//),

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