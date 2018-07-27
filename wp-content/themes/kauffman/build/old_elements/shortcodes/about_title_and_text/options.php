<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(

'title' => array(
'type'  => 'textarea',
'value' => 'The Kauffman Fellows Program is made possible through the steady support of the global venture community.',
'label' => __('text', '{domain}')
),

'text' => array(
'type'  => 'textarea',
'value' => 'Firms become members of the Kauffman Fellows Network by sponsoring someone at their firm for a Kauffman Fellowship.',
'label' => __('text', '{domain}')
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

'offset_lg' => array(
'type'  => 'text',
'value' => '1',
'label' => __('offset-lg', '{domain}')
),
  
'data_aos' => array(
'type'  => 'text',
'value' => '',
'label' => __('data-aos', '{domain}')
)
);