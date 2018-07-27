<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'is_fullwidth' => array(
		'label'        => __('Full Width', 'fw'),
		'type'         => 'switch',
	),
	'background_color' => array(
		'label' => __('Background Color', 'fw'),
		'desc'  => __('Please select the background color', 'fw'),
		'type'  => 'color-picker',
	),
	'background_image' => array(
		'label'   => __('Background Image', 'fw'),
		'desc'    => __('Please select the background image', 'fw'),
		'type'    => 'background-image',
		'choices' => array(//	in future may will set predefined images
		)
	),
  'background_repeat' => array(
    'label' => __('Background repeat', 'fw'),
    'type'  => 'switch',
  ),
  'background_position_x' => array(
    'label' => __('Background position X', 'fw'),
    'desc'  => __('center, left, right, 10px, calc(100% - 20px)', 'fw'),
    'type'  => 'text'
  ),
  'background_position_y' => array(
  'label' => __('Background position Y', 'fw'),
  'desc'  => __('bottom, center, top, 10px, calc(70% - 90px)', 'fw'),
  'type'  => 'text'
  ),
  'background_mobile' => array(
  'label' => __('Background display on mobile', 'fw'),
  'type'  => 'switch',
  'value' => 'yes',
  'left-choice' => array(
  'value' => 'yes',
  'label' => __('YES', 'fw'),
  ),
  'right-choice' => array(
  'value' => 'no',
  'label' => __('NO', 'fw'),
  )
  ),
	'video' => array(
		'label' => __('Background Video', 'fw'),
		'desc'  => __('Insert Video URL to embed this video', 'fw'),
		'type'  => 'text',
	),
  'id' => array(
    'label' => __('id', 'fw'),
    'desc'  => __('Insert id', 'fw'),
    'type'  => 'text',
  ),
  'class' => array(
    'label' => __('class', 'fw'),
    'desc'  => __('Insert class', 'fw'),
    'type'  => 'text',
  ),
  'container_class' => array(
    'label' => __('Container class', 'fw'),
    'desc'  => __('Insert container class', 'fw'),
    'type'  => 'text',
  ),
  'is_mobile_top' => array(
  'label'        => __('Mobile margin-top 80px', 'fw'),
  'type'         => 'switch',
  ),
  'margin_top' => array(
  'type'  => 'text',
  'value' => '0',
  'label' => __('margin-top', '{domain}'),
  'desc'  => __('0, 22, ...', 'fw'),
  ),
  'margin_bottom' => array(
  'type'  => 'text',
  'value' => '0',
  'label' => __('margin-bottom', '{domain}'),
  'desc'  => __('0, 22, ...', 'fw'),
  ),

  'is_mobile_display' => array(
  'label' => __('Mobile display', 'fw'),
  'type'  => 'switch',
  'value' => 'yes',
  'left-choice' => array(
  'value' => 'yes',
  'label' => __('YES', 'fw'),
  ),
  'right-choice' => array(
  'value' => 'no',
  'label' => __('NO', 'fw'),
  )
  ),

  'data_aos' => array(
  'type'  => 'text',
  'value' => '',
  'label' => __('data-aos', '{domain}'),
  'desc'  => __('https://github.com/michalsnik/aos#-animations', 'fw'),
  )
);
