<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(
'shortcode' => array(
'type'  => 'text',
'value' => '',
'label' => __('shortcode', '{domain}')
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
)
);