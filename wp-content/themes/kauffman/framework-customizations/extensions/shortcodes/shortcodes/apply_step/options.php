<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(
'title_digit' => array(
'type'  => 'text',
'value' => '01.',
'label' => __('title digit', '{domain}')
),

'title_text' => array(
'type'  => 'text',
'value' => '',
'label' => __('title text', '{domain}')
),

'text' => array(
'type'  => 'wp-editor',
'value' => '',
'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
'label' => __('Text', '{domain}'),
'size' => 'small', // small, large
'editor_height' => 400,
'wpautop' => true,
'editor_type' => false,
'shortcodes' => false
),

'link_url' => array(
'type'  => 'text',
'value' => '#',
'label' => __('link url', '{domain}')
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
)
);