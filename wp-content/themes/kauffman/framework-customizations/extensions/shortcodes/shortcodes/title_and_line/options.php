<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(
  'text' => array(
  'type'  => 'wp-editor',
  'value' => '',
  'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
  'label' => __('Text', '{domain}'),
  'size' => 'small', // small, large
  'editor_height' => 400,
  'wpautop' => true,
  'editor_type' => false, // tinymce, html

    /**
     * By default, you don't have any shortcodes into the editor.
     *
     * You have two possible values:
     *   - false:   You will not have a shortcodes button at all
     *   - true:    the default values you provide in wp-shortcodes
     *              extension filter will be used
     *
     *   - An array of shortcodes
     */
  'shortcodes' => false // true, array('button', map')
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