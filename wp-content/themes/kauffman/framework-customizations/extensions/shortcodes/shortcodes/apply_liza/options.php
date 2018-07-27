<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(
'title' => array(
'type'  => 'text',
'value' => 'Kauffman Foundation Scholarship Program for Mid-Continent Investors',
'label' => __('title', '{domain}')
),

'text' => array(
'type'  => 'textarea',
'value' => 'The Kauffman Foundation has made a grant for 12 scholarships to experienced fund managers to attend the Kauffman Fellows Program. The scholarships total $960,000 over a 3-year period, beginning in 2017.',
'label' => __('text', '{domain}')
),

'link_text' => array(
'type'  => 'text',
'value' => 'find out more about scholarship',
'label' => __('link text', '{domain}')
),

'link_url' => array(
'type'  => 'text',
'value' => '#',
'label' => __('link url', '{domain}')
),

'image' => array(
'type'  => 'upload',
'label' => __('image', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'image_button' => array(
'type'  => 'upload',
'label' => __('image button', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),
  
//'quote' => array(
//'type'  => 'text',
//'value' => 'Something that Lisa said. The program has already helped Lisa understand how critical it is to form deep relationships in the investment community.',
//'label' => __('quote', '{domain}')
//),

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

'data_aos' => array(
'type'  => 'text',
'value' => '',
'label' => __('data-aos', '{domain}')
)
);