<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$margin_top = 0;
if ( ! empty( $atts['margin_top'] ) ) {
  $margin_top = (int) $atts['margin_top'];
}

$margin_bottom = 0;
if ( ! empty( $atts['margin_bottom'] ) ) {
  $margin_bottom = (int) $atts['margin_bottom'];
}

$m_margin_top = 0;
if ( ! empty( $atts['m_margin_top'] ) ) {
  $m_margin_top = (int) $atts['m_margin_top'];
}

$m_margin_bottom = 0;
if ( ! empty( $atts['m_margin_bottom'] ) ) {
  $m_margin_bottom = (int) $atts['m_margin_bottom'];
}

$class = '';
if ( ! empty( $atts['class'] ) ) {
  $class = $atts['class'];
}

$padding = '';
if ( ! empty( $atts['padding'] ) ) {
  $padding =  esc_attr($atts['padding']);
}
?>

<div class="g_text j_mobile_margin <?=$class?>"
     data-m-top="<?=$m_margin_top?>"
     data-m-bottom="<?=$m_margin_bottom?>"
     style="margin-top: <?= $margin_top ?>px;
     margin-bottom: <?= $margin_bottom ?>px;
     padding:<?=$padding?>">
	<?php echo do_shortcode( $atts['text'] ); ?>
</div>
	