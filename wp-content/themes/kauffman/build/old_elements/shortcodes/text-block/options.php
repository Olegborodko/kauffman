<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'text' => array(
		'type'   => 'wp-editor',
		'label'  => __( 'Content', 'fw' ),
		'desc'   => __( 'Enter some content for this texblock', 'fw' ),
    'shortcodes' => true
	),

'margin_top' => array(
'type'  => 'text',
'value' => '0',
'label' => __('margin-top', '{domain}')
),

'margin_bottom' => array(
'type'  => 'text',
'value' => '0',
'label' => __('margin-bottom', '{domain}')
),

'padding' => array(
'type'  => 'text',
'value' => '0',
'label' => __('padding', '{domain}'),
'desc'  => __('example -> 10px 20px 0 1%, 10px', 'fw'),
),

'class' => array(
'type'  => 'text',
'value' => '',
'label' => __('class', '{domain}'),
'desc'  => __('custom class', 'fw')
)
);
