<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(
'first_text' => array(
'type'  => 'text',
'value' => 'In Service To Humanity',
'label' => __('first text', '{domain}')
),
'line_align' => array(
'type'  => 'select',
'value' => 'left',
'label' => __('Line align', '{domain}'),
'choices' => array(
'left' => 'left',
'right' => 'right'),
'no-validate' => false
),
'title' => array(
'type'  => 'text',
'value' => 'Ewing Marion Kauffman',
'label' => __('title', '{domain}')
),
'description' => array(
'type'  => 'textarea',
'value' => 'believer every person has the opportunity to be uncommon and
take risks to achieve success. Learn more about Kauffman\'s legacy and 
our timeless values.',
'label' => __('description', '{domain}')
),
'image' => array(
'type'  => 'upload',
'label' => __('image', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),
'padding' => array(
'type'  => 'text',
'value' => '17vw 3.7vw 0 1vw',
'label' => __('padding', '{domain}'),
'desc'  => __('5px 3vw 0 1.5%', 'fw'),
),
'margin_top' => array(
'type'  => 'text',
'value' => '690',
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