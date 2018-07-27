<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(
'name' => array(
'type'  => 'text',
'value' => 'Jayden Ortiz',
'label' => __('name', '{domain}')
),

'description' => array(
'type'  => 'text',
'value' => 'Arabia – Class 20',
'label' => __('description', '{domain}')
),

'text1' => array(
'type'  => 'textarea',
'value' => 'The Program’s ultimate goal is for each Fellow to develop skills and strategies to be an effective and visionary “Top 5%” investor. Very often a Fellow will bring a well-articulated challenge to the module that they have been working on for months. Through 1-on-1 and class discussions with faculty, peers, and the Kauffman Fellows Team, they achieve clarity on their issue. To optimize the learning experience and maximize the exchange of ideas, attendance at every module is required.',
'label' => __('text1', '{domain}')
),

'text2' => array(
'type'  => 'textarea',
'value' => 'A 90-day problem solved in 3. That’s a good return on investment. ',
'label' => __('text2', '{domain}')
),

'text3' => array(
'type'  => 'textarea',
'value' => 'There are 7 modules, approximately 3.5 days each, held each quarter during the 2-year Program. Each constantly evolving module explores an essential theme of innovation investing such as running the firm as a business, best board practices, and optimizing talent environments.',
'label' => __('text3', '{domain}')
),

'quote' => array(
'type'  => 'textarea',
'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu laoreet neque, vitae rutrum magna. Integer sit amet lobortis erat. In ut libero ut sem vestibulum sollicitudin. Integer non viverra nibh, ac porttitor lorem. Quisque dignissim, lorem et vestibulum feugiat, nibh justo vestibulum orci, fermentum mollis tellus neque nec massa.',
'label' => __('quote', '{domain}')
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

'image' => array(
'type'  => 'upload',
'label' => __('image', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'data_aos' => array(
'type'  => 'text',
'value' => '',
'label' => __('data-aos', '{domain}')
)
);