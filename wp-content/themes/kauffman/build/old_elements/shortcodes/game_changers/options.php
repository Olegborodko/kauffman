<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(

'title' => array(
'type'  => 'text',
'value' => 'Game Changers',
'label' => __('title', '{domain}')
),

'link_text' => array(
'type'  => 'text',
'value' => 'Show More Posts',
'label' => __('show more game changers >', '{domain}')
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
