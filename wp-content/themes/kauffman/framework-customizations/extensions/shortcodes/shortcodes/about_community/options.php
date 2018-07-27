<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(

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

'background_1' => array(
'type'  => 'upload',
'label' => __('background 1', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'background_2' => array(
'type'  => 'upload',
'label' => __('background 2', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'background_3' => array(
'type'  => 'upload',
'label' => __('background 3', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'background_4' => array(
'type'  => 'upload',
'label' => __('background 4', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'background_5' => array(
'type'  => 'upload',
'label' => __('background 5', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'background_6' => array(
'type'  => 'upload',
'label' => __('background 6', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'tab1' => array(
'type'  => 'wp-editor',
'value' => '',
'label' => __('Tab1', '{domain}'),
'size' => 'large', // small, large
'editor_height' => 400,
'wpautop' => true,
'editor_type' => false, // tinymce, html
'shortcodes' => false // true, array('button', map')
),

'tab2' => array(
'type'  => 'wp-editor',
'value' => '',
'label' => __('Tab2', '{domain}'),
'size' => 'large', // small, large
'editor_height' => 400,
'wpautop' => true,
'editor_type' => false, // tinymce, html
'shortcodes' => false // true, array('button', map')
),

'tab3' => array(
'type'  => 'wp-editor',
'value' => '',
'label' => __('Tab3', '{domain}'),
'size' => 'large', // small, large
'editor_height' => 400,
'wpautop' => true,
'editor_type' => false, // tinymce, html
'shortcodes' => false // true, array('button', map')
),

'tab4' => array(
'type'  => 'wp-editor',
'value' => '',
'label' => __('Tab4', '{domain}'),
'size' => 'large', // small, large
'editor_height' => 400,
'wpautop' => true,
'editor_type' => false, // tinymce, html
'shortcodes' => false // true, array('button', map')
),

'tab5' => array(
'type'  => 'wp-editor',
'value' => '',
'label' => __('Tab5', '{domain}'),
'size' => 'large', // small, large
'editor_height' => 400,
'wpautop' => true,
'editor_type' => false, // tinymce, html
'shortcodes' => false // true, array('button', map')
),

'tab6' => array(
'type'  => 'wp-editor',
'value' => '',
'label' => __('Tab6', '{domain}'),
'size' => 'large', // small, large
'editor_height' => 400,
'wpautop' => true,
'editor_type' => false, // tinymce, html
'shortcodes' => false // true, array('button', map')
),

'data_aos' => array(
'type'  => 'text',
'value' => '',
'label' => __('data-aos', '{domain}')
)

);