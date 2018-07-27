<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(
  
array(
'type' => 'box',
'title' => __('Social icons', 'fw'),
'attr' => array('data-foo' => 'bar'),
'options' => array(

  'twitter_link' => array(
    'type'  => 'text',
    'value' => '',
    'label' => __('Twitter link', '{domain}')
  ),
//  'facebook_link' => array(
//    'type'  => 'text',
//    'value' => '',
//    'label' => __('Facebook link', '{domain}')
//  ),
  'linkedin_link' => array(
    'type'  => 'text',
    'value' => '',
    'label' => __('LinkedIn link', '{domain}')
  )

)),

array(
'type' => 'box',
'title' => __('Main settings', 'fw'),
'attr' => array('data-foo' => 'bar'),
'options' => array(

    'copyright' => array(
    'type'  => 'text',
    'value' => '© 2018 Kauffman Fellows',
    'label' => __('Copyright', '{domain}')
    ),

    'telephone' => array(
    'type'  => 'text',
    'value' => '1-650-561-7450',
    'label' => __('Telephone', '{domain}')
    ),

    'address' => array(
    'type'  => 'text',
    'value' => '855 El Camino Real, Suite 12 Palo Alto, California 94301 USA',
    'label' => __('Address', '{domain}')
    ),

    'mail_chimp' => array(
    'type'  => 'text',
    'value' => '[mc4wp_form id="6856"]',
    'label' => __('Footer short code', '{domain}')
    )
)),

array(
'type' => 'box',
'title' => __('Links', 'fw'),
'attr' => array('data-foo' => 'bar'),
'options' => array(

'link_press' => array(
'type'  => 'text',
'value' => '',
'label' => __('link to press', '{domain}'),
'desc'  => __('http://xxx.com/press', 'fw')
),

'link_press_releases' => array(
'type'  => 'text',
'value' => '',
'label' => __('link to press releases', '{domain}'),
'desc'  => __('http://xxx.com/press', 'fw')
),

))


);