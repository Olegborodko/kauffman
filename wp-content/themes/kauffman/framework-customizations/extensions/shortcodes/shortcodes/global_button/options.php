<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(
'text' => array(
'type'  => 'text',
'value' => 'read more',
'label' => __('text', '{domain}')
),

'link' => array(
'type'  => 'text',
'value' => '#',
'label' => __('link', '{domain}')
),

'align' => array(
'type'  => 'select',
'value' => 'left',
'label' => __('Align', '{domain}'),
'choices' => array(
'left' => 'left',
'center' => 'center',
'right' => 'right'),
'no-validate' => false
),

'mobile_align' => array(
'label' => __('Mobile align center', 'fw'),
'type'  => 'switch',
'value' => 'no',
'left-choice' => array(
'value' => 'yes',
'label' => __('YES', 'fw'),
),
'right-choice' => array(
'value' => 'no',
'label' => __('NO', 'fw'),
)
),
  
'background' => array(
'type'  => 'color-picker',
'value' => '',
'label' => __('Background', '{domain}'),
'desc'  => __('Empty = transparent', '{domain}'),
),
  
'color' => array(
'type'  => 'color-picker',
'value' => '#1086C2',
'label' => __('Text color', '{domain}'),
'desc'  => __('Empty = transparent', '{domain}'),
),

'hover_background' => array(
'type'  => 'color-picker',
'value' => '#1086C2',
'label' => __('Hover background', '{domain}'),
'desc'  => __('Empty = transparent', '{domain}'),
),

'hover_color' => array(
'type'  => 'color-picker',
'value' => '#FFFFFF',
'label' => __('Hover text color', '{domain}'),
'desc'  => __('Empty = transparent', '{domain}'),
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

'padding' => array(
'type'  => 'text',
'value' => '29px 28px 28px 28px',
'label' => __('padding', '{domain}'),
'desc'  => __('2px 3px 2px 3px, (top|right|bottom|left)', 'fw'),
),
);
