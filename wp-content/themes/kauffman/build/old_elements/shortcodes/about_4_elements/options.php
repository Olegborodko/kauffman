<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(
'title' => array(
'type'  => 'text',
'value' => '4-element framework',
'label' => __('title', '{domain}')
),

'text1' => array(
'type'  => 'textarea',
'value' => 'Develop self-awareness & understanding of one’s unique zone of genius.',
'label' => __('text1', '{domain}')
),

'text2' => array(
'type'  => 'textarea',
'value' => 'Define & refine one’s unique investment thesis based upon passions and convictions discovered in that zone of genius.',
'label' => __('text2', '{domain}')
),

'text3' => array(
'type'  => 'textarea',
'value' => 'Develop a personal brand, again in light of one’s zone of genius.',
'label' => __('text3', '{domain}')
),

'text4' => array(
'type'  => 'textarea',
'value' => 'Hone each participant’s ability to build & maintain deep relationships built on trust.',
'label' => __('text4', '{domain}')
),

'image1' => array(
'type'  => 'upload',
'label' => __('image1', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'image2' => array(
'type'  => 'upload',
'label' => __('image2', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'image3' => array(
'type'  => 'upload',
'label' => __('image3', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'image4' => array(
'type'  => 'upload',
'label' => __('image4', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
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