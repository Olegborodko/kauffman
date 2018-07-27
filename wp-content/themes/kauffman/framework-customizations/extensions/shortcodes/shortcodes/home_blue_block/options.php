<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(
'background_text' => array(
'type'  => 'text',
'value' => 'Class 23',
'label' => __('Background text', '{domain}')
),

'text1' => array(
'type'  => 'text',
'value' => 'Kauffman Fellows Announces',
'label' => __('text1', '{domain}')
),

'text2' => array(
'type'  => 'text',
'value' => 'Class 23',
'label' => __('text2', '{domain}')
),

'image' => array(
'type'  => 'upload',
'label' => __('image', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'description' => array(
'type'  => 'text',
'value' => 'exceptionally diverse and highly talented leaders',
'label' => __('description', '{domain}')
),

'margin_top' => array(
'type'  => 'text',
'value' => '200',
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