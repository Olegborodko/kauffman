<?php if (!defined('FW')) die('Forbidden');

$cfg = array();

/**
 * Default item widths for all builders
 *
 * It is better to use fw_ext_builder_get_item_width() function to retrieve the item widths
 * because it has a filter and users will be able to customize the widths for a specific builder
 *
 * @see fw_ext_builder_get_item_width()
 * @since 1.2.0
 *
 * old $cfg['default_item_widths'] https://github.com/ThemeFuse/Unyson-Builder-Extension/issues/8
 * https://github.com/ThemeFuse/Unyson-Builder-Extension/blob/v1.1.17/config.php#L13
 */
$cfg['grid.columns'] = array(
	'1_6' => array(
		'title'          => '1/6',
		'backend_class'  => 'fw-col-sm-2',
		'frontend_class' => 'fw-col-xs-12 fw-col-sm-2',
	),
	'1_5' => array(
		'title'          => '1/5',
		'backend_class'  => 'fw-col-sm-15',
		'frontend_class' => 'fw-col-xs-12 fw-col-sm-15',
	),
	'1_4' => array(
		'title'          => '1/4',
		'backend_class'  => 'fw-col-sm-3',
		'frontend_class' => 'fw-col-xs-12 fw-col-sm-3',
	),
	'1_3' => array(
		'title'          => '1/3',
		'backend_class'  => 'fw-col-sm-4',
		'frontend_class' => 'fw-col-xs-12 fw-col-sm-4',
	),
	'1_2' => array(
		'title'          => '1/2',
		'backend_class'  => 'fw-col-sm-6',
		'frontend_class' => 'fw-col-xs-12 fw-col-sm-6',
	),
	'2_3' => array(
		'title'          => '2/3',
		'backend_class'  => 'fw-col-sm-8',
		'frontend_class' => 'fw-col-xs-12 fw-col-sm-8',
	),
	'3_4' => array(
		'title'          => '3/4',
		'backend_class'  => 'fw-col-sm-9',
		'frontend_class' => 'fw-col-xs-12 fw-col-sm-9',
	),
  'lg_1' => array(
  'title'          => 'lg_1',
  'backend_class'  => 'fw-col-sm-1',
  'frontend_class' => 'fw-col-xs-12 fw-col-lg-1',
  ),
  'lg_2' => array(
  'title'          => 'lg_2',
  'backend_class'  => 'fw-col-sm-2',
  'frontend_class' => 'fw-col-xs-12 fw-col-lg-2',
  ),
  'lg_3' => array(
  'title'          => 'lg_3',
  'backend_class'  => 'fw-col-sm-3',
  'frontend_class' => 'fw-col-xs-12 fw-col-lg-3',
  ),
  'lg_4' => array(
  'title'          => 'lg_4',
  'backend_class'  => 'fw-col-sm-4',
  'frontend_class' => 'fw-col-xs-12 fw-col-lg-4',
  ),
  'lg_5' => array(
  'title'          => 'lg_5',
  'backend_class'  => 'fw-col-sm-5',
  'frontend_class' => 'fw-col-xs-12 fw-col-lg-5',
  ),
  'lg_6' => array(
  'title'          => 'lg_6',
  'backend_class'  => 'fw-col-sm-6',
  'frontend_class' => 'fw-col-xs-12 fw-col-lg-6',
  ),
  'lg_7' => array(
    'title'          => 'lg_7',
    'backend_class'  => 'fw-col-sm-7',
  'frontend_class' => 'fw-col-xs-12 fw-col-lg-7',
  ),
  'lg_8' => array(
  'title'          => 'lg_8',
  'backend_class'  => 'fw-col-sm-8',
  'frontend_class' => 'fw-col-xs-12 fw-col-lg-8',
  ),
  'lg_9' => array(
  'title'          => 'lg_9',
  'backend_class'  => 'fw-col-sm-9',
  'frontend_class' => 'fw-col-xs-12 fw-col-lg-9',
  ),
  'lg_10' => array(
  'title'          => 'lg_10',
  'backend_class'  => 'fw-col-sm-10',
  'frontend_class' => 'fw-col-xs-12 fw-col-lg-10',
  ),
  'lg_11' => array(
  'title'          => 'lg_11',
  'backend_class'  => 'fw-col-sm-11',
  'frontend_class' => 'fw-col-xs-12 fw-col-lg-11',
  ),
  'md_6&lg_3' => array(
  'title'          => 'md_6&lg_3',
  'backend_class'  => 'fw-col-sm-3',
  'frontend_class' => 'fw-col-xs-12 fw-col-md-6 fw-col-lg-3',
  ),
  '1_1' => array(
  'title'          => '1/1',
  'backend_class'  => 'fw-col-sm-12',
  'frontend_class' => 'fw-col-xs-12 fw-col-lg-12',
  )
);

/**
 * @since 1.2.0
 */
$cfg['grid.row.class'] = 'fw-row';

/**
 * @deprecated since 1.2.0
 * if this is empty fw_ext_builder_get_item_width() will use $cfg['grid.columns']
 */
$cfg['default_item_widths'] = false;
