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

$class = '';
if ( ! empty( $atts['class'] ) ) {
  $class = $atts['class'];
}

$padding = '';
if ( ! empty( $atts['padding'] ) ) {
  $padding =  esc_attr($atts['padding']);
}
?>

<div class="g_text <?=$class?>"
     style="margin-top: <?= $margin_top ?>px;
     margin-bottom: <?= $margin_bottom ?>px;
     padding:<?=$padding?>">
	<?php echo do_shortcode( $atts['text'] ); ?>
</div>
	