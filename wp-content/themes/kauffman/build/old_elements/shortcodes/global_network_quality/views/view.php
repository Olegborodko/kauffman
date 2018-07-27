<?php if (!defined('FW')) {
  die('Forbidden');
}

$margin_top = 0;
if ( ! empty( $atts['margin_top'] ) ) {
  $margin_top = (int) $atts['margin_top'];
}

$margin_bottom = 0;
if ( ! empty( $atts['margin_bottom'] ) ) {
  $margin_bottom = (int) $atts['margin_bottom'];
}

$data_aos = '';
if ( ! empty( $atts['data_aos'] ) ) {
  $data_aos = $atts['data_aos'];
}
?>

<div data-aos="<?=$data_aos?>" class="network-block" style="margin-top: <?= $margin_top ?>px; margin-bottom: <?= $margin_bottom ?>px">
  <ul>
    <li>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fund_logos/1.png"/>
    </li>
    <li>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fund_logos/2.png"/>
    </li>
    <li>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fund_logos/3.png"/>
    </li>
    <li>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fund_logos/4.png"/>
    </li>
    <li>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fund_logos/5.png"/>
    </li>
    <li>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fund_logos/6.png"/>
    </li>
    <li>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fund_logos/7.png"/>
    </li>
    <li>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fund_logos/8.png"/>
    </li>
    <li>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fund_logos/9.png"/>
    </li>
    <li>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fund_logos/10.png"/>
    </li>
    <li>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fund_logos/11.png"/>
    </li>
    <li>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fund_logos/12.png"/>
    </li>
    <li>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fund_logos/13.png"/>
    </li>
    <li>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fund_logos/14.png"/>
    </li>
    <li>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fund_logos/15.png"/>
    </li>
    <li>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fund_logos/16.png"/>
    </li>
    <li>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fund_logos/17.png"/>
    </li>
    <li>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fund_logos/18.png"/>
    </li>
    <li>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fund_logos/19.png"/>
    </li>
    <li>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fund_logos/20.png"/>
    </li>
  </ul>
</div>