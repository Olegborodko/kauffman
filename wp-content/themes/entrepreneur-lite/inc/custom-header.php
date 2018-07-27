<?php

/**
 * Implement a custom header for Entrepreneur
 *
 * @link https://codex.wordpress.org/Custom_Headers
 *
 * @package WordPress
 * @subpackage Entrepreneur
 * @since Entrepreneur 1.0
 */
class MP_Entrepreneur_Custom_Header {

	private $prefix;

	public function __construct( $prefix ) {
		$this->prefix = $prefix;
		add_action( 'after_setup_theme', array( $this, 'custom_header_setup' ), 11 );
	}

	/**
	 * Get prefix.
	 *
	 * @access public
	 * @return sting
	 */
	public function get_prefix() {
		return $this->prefix . '_';
	}

	/**
	 * Set up the WordPress core custom header arguments and settings.
	 *
	 * @uses add_theme_support() to register support for 3.4 and up.
	 * @uses theme_header_style() to style front-end.
	 *
	 * @since Entrepreneur 1.0
	 */
	function custom_header_setup() {
		$args = array(
			// Text color and image (empty to use none).
			'default-text-color'     => '23292e',
			// Callbacks for styling the header and the admin preview.
			'wp-head-callback'       => array( $this, 'header_style' ),
			'admin-head-callback'    => array( $this, 'header_style' ),
			'admin-preview-callback' => array( $this, 'header_style' ),
		);

		add_theme_support( 'custom-header', $args );
		$args_bg = array(
			'default-color' => 'ffffff',
		);
		add_theme_support( 'custom-background', $args_bg );
	}

	/**
	 * Style the header text displayed on the blog.
	 *
	 * get_header_textcolor() options: Hide text (returns 'blank'), or any hex value.
	 *
	 * @since Entrepreneur 1.0
	 */
	function header_style() {
		$header_text_color = get_header_textcolor();
		$color_text        = get_option( $this->get_prefix() . 'color_text' );
		$brand_color       = get_option( $this->get_prefix() . 'color_primary' );

		$font_family       = esc_html( get_theme_mod( $this->get_prefix() . "title_font_family", "Ubuntu" ) );
		$font_weight_style = esc_html( get_theme_mod( $this->get_prefix() . "title_font_weight", "700" ) );
		$font_weight       = preg_replace( "/[^0-9?! ]/", "", $font_weight_style );
		$font_style        = preg_replace( "/[^A-Za-z?! ]/", "", $font_weight_style );
		$font_size         = esc_html( get_theme_mod( $this->get_prefix() . "title_font_size", "2em" ) );
		if ( $font_style == "" ) {
			$font_style = "normal";
		}
		if ( $font_weight == "" ) {
			$font_weight = "700";
		}
		if ( strcasecmp( $font_family, "Ubuntu" ) != 0 ) {
			?>
			<link id='theme-title-font-family'
			      href="http://fonts.googleapis.com/css?family=<?php echo str_replace( " ", "+", $font_family ) . ":" . $font_weight_style . ( $font_weight_style != '400' ? ',400' : '' ); ?>"
			      rel='stylesheet' type='text/css'>

			<?php
		}
		$font_family_text       = esc_html( get_theme_mod( $this->get_prefix() . "text_font_family", "Ubuntu" ) );
		$font_weight_style_text = esc_html( get_theme_mod( $this->get_prefix() . "text_font_weight", "400" ) );
		$font_weight_text       = preg_replace( "/[^0-9?! ]/", "", $font_weight_style_text );
		$font_style_text        = preg_replace( "/[^A-Za-z?! ]/", "", $font_weight_style_text );
		if ( $font_style_text == "" ) {
			$font_style_text = "normal";
		}
		if ( $font_weight_text == "" ) {
			$font_weight_text = "400";
		}
		$font_size_text = esc_html( get_theme_mod( $this->get_prefix() . "text_font_size", "1em" ) );
		if ( strcasecmp( $font_family_text, "Ubuntu" ) != 0 ) {
			?>
			<link id='theme-title-font-family'
			      href="http://fonts.googleapis.com/css?family=<?php echo str_replace( " ", "+", $font_family_text ) . ":" . $font_weight_style_text . ( $font_weight_style_text != '400' ? ',400' : '' ); ?>"
			      rel='stylesheet' type='text/css'>

			<?php
		}
		$tagline_font     = esc_html( get_theme_mod( $this->get_prefix() . "tagline_font", 0 ) );
		$logo_border      = esc_html( get_theme_mod( $this->get_prefix() . "logo_border", 1 ) );
		$first_section_bg = '';
		if ( get_theme_mod( mp_entrepreneur_get_prefix() . 'first_section_bg', false ) === false ) :
			$first_section_bg = get_template_directory_uri() . '/images/bg1.jpg';
		else:
			$first_section_bg = esc_url( get_theme_mod( $this->get_prefix() . "first_section_bg", '' ) );
		endif;
		$call_to_action_bg = '';
		if ( get_theme_mod( mp_entrepreneur_get_prefix() . 'call_to_action_bg', false ) === false ) :
			$call_to_action_bg = get_template_directory_uri() . '/images/bg2.jpg';
		else:
			$call_to_action_bg = esc_url( get_theme_mod( $this->get_prefix() . "call_to_action_bg", '' ) );
		endif;

		$testimonials_bg = esc_url( get_theme_mod( $this->get_prefix() . "testimonials_section_bg", '' ) );

		$services_bg = esc_url( get_theme_mod( $this->get_prefix() . "services_section_bg", '' ) );
		?>
		<style type="text/css" id="theme-header-css">
			.call-to-action-section {
				background-image: url(<?php echo $call_to_action_bg;?>);
			}

			.first-section {
				background-image: url(<?php echo $first_section_bg;?>);
			}

			<?php if ( ! empty( $testimonials_bg ) ): ?>

			.testimonials-section {
				background-image: url(<?php echo $testimonials_bg;?>);
			}

			<?php endif; ?>

			<?php if ( ! empty( $services_bg ) ): ?>

			.services-section {
				background-image: url(<?php echo $services_bg;?>);
			}

			<?php endif; ?>
			<?php if ( strcasecmp( $logo_border, "1" ) != 0 ) { ?>
			.site-header .site-description {
				border: 0px solid;
			}

			<?php } ?>
			<?php if ( ! get_bloginfo( 'description' ) ) : ?>
			.site-footer .site-description {
				margin: 0;
			}

			<?php endif; ?>
			<?php if ( strcasecmp( $tagline_font, "0" ) != 0 ) { ?>
			.site-tagline {
				font-family: <?php echo $font_family; ?>;
				font-weight: <?php echo $font_weight; ?>;
				font-style: <?php echo $font_style; ?>;
			}

			<?php } ?>
			body {
				font-family: <?php echo $font_family_text; ?>;
				font-size: <?php echo $font_size_text; ?>;
				font-weight: <?php echo $font_weight_text; ?>;
				font-style: <?php echo $font_style_text; ?>
			}

			.site-header .site-title,
			.site-footer .site-title {
				font-family: <?php echo $font_family; ?>;
				font-weight: <?php echo $font_weight; ?>;
				font-style: <?php echo $font_style; ?>;
			}

			.site-header .site-title {
				font-size: <?php echo $font_size; ?>;
			}

			<?php if ( $header_text_color != '23292e' && $header_text_color != '' ):?>
			.site-title {
				color: #<?php echo $header_text_color;?>;
			}

			<?php endif; ?>
			<?php if ( $color_text != MP_ENTREPRENEUR_TEXT_COLOR && $color_text != '' ) : ?>

			body {
				color: <?php echo $color_text;?>;
			}

			<?php if (is_plugin_active('booked/booked.php')) : ?>
			body.entrepreneur .booked-calendar-wrap.small table.booked-calendar td.next-month .date, body.entrepreneur .booked-calendar-wrap.small table.booked-calendar td.next-month .date span, body.entrepreneur .booked-calendar-wrap.small table.booked-calendar td.prev-month .date, body.entrepreneur .booked-calendar-wrap.small table.booked-calendar td.prev-month .date span, body.entrepreneur table.booked-calendar td.next-month .date, body.entrepreneur table.booked-calendar td.next-month .date span, body.entrepreneur table.booked-calendar td.prev-month .date, body.entrepreneur table.booked-calendar td.prev-month .date span {
				//color: <?php echo $color_text;?> !important;
			}

			body #booked-profile-page .booked-profile-appt-list .appt-block {
				color: <?php echo $color_text;?>;
			}

			<?php if (is_plugin_active('motopress-content-editor/motopress-content-editor.php') || is_plugin_active('motopress-content-editor-lite/motopress-content-editor.php')) : ?>
			.motopress-accordion-obj.ui-accordion.mp-theme-accordion-brand .motopress-accordion-item .ui-accordion-header {
				background: <?php echo $color_text;?>;
			}

			.motopress-accordion-obj.ui-accordion.mp-theme-accordion-brand .motopress-accordion-item .ui-accordion-header.ui-state-active {
				color: <?php echo $color_text;?>;
			}

			.motopress-accordion-obj.ui-accordion.mp-theme-accordion-brand .ui-accordion-header.ui-state-active {
				background: transparent;
			}

			.entrepreneur .motopress-tabs-obj.ui-tabs.motopress-tabs-vertical .ui-tabs-nav li a,
			.entrepreneur .motopress-tabs-obj.ui-tabs.motopress-tabs-basic .ui-tabs-nav li a {
				border-color: <?php echo $color_text;?> !important;
			}

			<?php endif; ?>

			<?php if (is_plugin_active('woocommerce/woocommerce.php')) : ?>
			.price del {
				color: <?php echo $color_text;?>;
			}

			<?php endif; ?>
			<?php endif; ?>
			<?php endif; ?>
			<?php if ( $brand_color != MP_ENTREPRENEUR_BRAND_COLOR && $brand_color != '' ) : ?>
			.section-subtitle,
			blockquote:before, .widget .current-cat > a,
			a, .porfolio-title, .testimonial-content:after, .testimonial-content:before,
			.widget_text a, .widget_calendar a, .mp_entrepreneur_widget_about .site-socials a:hover,
			.sf-menu > li.menu-item-object-custom.current-menu-item.current > a, .sf-menu > li.current_page_item > a, .sf-menu > li.current-menu-item > a, .sf-menu > li:hover > a, .sf-menu > li.menu-item-object-custom.current-menu-item:hover > a, .sf-menu > li.current_page_parent > a, .sf-menu ul a:hover {
				color: <?php echo $brand_color;?>;
			}

			body .booked-calendar-wrap.small table.booked-calendar td.today:hover .date span,
			body .booked-calendar-wrap.small table.booked-calendar td.today .date span {
				background: <?php echo $brand_color;?> !important;
			}

			.mobile-menu.open,
			.navigation.wp-paging-navigation a:hover, .navigation.wp-paging-navigation > span, .navigation a.page-numbers:hover, .navigation .page-numbers.current,
			.testimonials-section .flex-control-paging li a.flex-active,
			input[type="submit"], .btn, .button, .more-link,
			.news-list .entry-thumbnail-default,
			.mp_entrepreneur_widget_recent_posts .empty-entry-thumbnail {
				background: <?php echo $brand_color;?>;
			}

			.navigation.wp-paging-navigation a:hover, .navigation.wp-paging-navigation > span, .navigation a.page-numbers:hover, .navigation .page-numbers.current,
			blockquote {
				border-color: <?php echo $brand_color;?>;
			}
			
			.portfolio-section .porfolio-title, .portfolio-section .portfoli-categories {
				color: <?php echo $brand_color;?>;
			}

			<?php if (is_plugin_active('motopress-content-editor/motopress-content-editor.php') || is_plugin_active('motopress-content-editor-lite/motopress-content-editor.php')) : ?>
			.motopress-list-obj .motopress-list-type-icon .fa, .mp-theme-icon-brand, .motopress-ce-icon-obj.mp-theme-icon-bg-brand .motopress-ce-icon-preview,
			.motopress-ce-icon-obj.mp-theme-icon-bg-brand.motopress-ce-icon-shape-outline-rounded .motopress-ce-icon-bg .motopress-ce-icon-preview, .motopress-ce-icon-obj.mp-theme-icon-bg-brand.motopress-ce-icon-shape-outline-circle .motopress-ce-icon-bg .motopress-ce-icon-preview, .motopress-ce-icon-obj.mp-theme-icon-bg-brand.motopress-ce-icon-shape-outline-square .motopress-ce-icon-bg .motopress-ce-icon-preview {
				color: <?php echo $brand_color;?>;
			}

			.motopress-countdown_timer.mp-theme-countdown-timer-brand .countdown-section,
			.motopress-cta-style-brand,
			.entrepreneur .motopress-posts-grid-more a, .entrepreneur .motopress-service-box-obj .motopress-service-box-button-section .mp-theme-button-brand, .entrepreneur .motopress-button-group-obj .mp-theme-button-brand, .entrepreneur .motopress-button-obj .mp-theme-button-brand, .entrepreneur .motopress-modal-obj .mp-theme-button-brand, .entrepreneur .motopress-download-button-obj .mp-theme-button-brand,
			.motopress-ce-icon-obj.mp-theme-icon-bg-brand.motopress-ce-icon-shape-rounded .motopress-ce-icon-bg, .motopress-ce-icon-obj.mp-theme-icon-bg-brand.motopress-ce-icon-shape-square .motopress-ce-icon-bg, .motopress-ce-icon-obj.mp-theme-icon-bg-brand.motopress-ce-icon-shape-circle .motopress-ce-icon-bg {
				background: <?php echo $brand_color;?>;
			}

			.motopress-ce-icon-obj.mp-theme-icon-bg-brand.motopress-ce-icon-shape-outline-rounded .motopress-ce-icon-bg, .motopress-ce-icon-obj.mp-theme-icon-bg-brand.motopress-ce-icon-shape-outline-circle .motopress-ce-icon-bg, .motopress-ce-icon-obj.mp-theme-icon-bg-brand.motopress-ce-icon-shape-outline-square .motopress-ce-icon-bg {
				border-color: <?php echo $brand_color;?>;
			}

			.entrepreneur .motopress-tabs-obj.ui-tabs.motopress-tabs-vertical .ui-tabs-nav li.ui-state-active a, .entrepreneur .motopress-tabs-obj.ui-tabs.motopress-tabs-no-vertical .ui-tabs-nav li.ui-state-active a {
				border-color: <?php echo $brand_color;?> !important;
			}

			.entrepreneur .motopress-tabs-obj.ui-tabs.motopress-tabs-vertical .ui-tabs-nav li.ui-state-active a, .entrepreneur .motopress-tabs-obj.ui-tabs.motopress-tabs-no-vertical .ui-tabs-nav li.ui-state-active a {
				color: <?php echo $brand_color;?> !important;
			}

			<?php endif; ?>
			<?php if (is_plugin_active('woocommerce/woocommerce.php')) : ?>
			.woocommerce .star-rating span,
			.wc-tabs li.active a, .woocommerce p.stars a.active:after, .woocommerce p.stars a:hover:after {
				color: <?php echo $brand_color;?>;
			}

			.woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
			.woocommerce-pagination a:hover, .woocommerce-pagination span, .woocommerce-pagination a.page-numbers:hover, .woocommerce-pagination .page-numbers.current,
			.woocommerce span.onsale, .woocommerce ul.products li.product .button, .woocommerce ul.products li.product .added_to_cart {
				background: <?php echo $brand_color;?>;
			}

			.woocommerce .woocommerce-message, .woocommerce .woocommerce-info,
			.wc-tabs li.active a,
			.woocommerce-pagination a:hover, .woocommerce-pagination span, .woocommerce-pagination a.page-numbers:hover, .woocommerce-pagination .page-numbers.current {
				border-color: <?php echo $brand_color;?>;
			}

			<?php endif; ?>
			<?php if (is_plugin_active('bbpress/bbpress.php')) : ?>
			.bbp-pagination-links a:hover, .bbp-pagination-links span.current {
				background: <?php echo $brand_color;?>;
			}

			.bbp-pagination-links a:hover, .bbp-pagination-links span.current {
				border-color: <?php echo $brand_color;?>;
			}

			<?php endif; ?>
			<?php if (is_plugin_active('booked/booked.php')) : ?>

			body.entrepreneur .booked-calendar-wrap.small table.booked-calendar td.booked .date, body.entrepreneur .booked-calendar-wrap.small table.booked-calendar td.booked .date span, body.entrepreneur .booked-calendar-wrap.small table.booked-calendar td.booked:hover .date, body.entrepreneur .booked-calendar-wrap.small table.booked-calendar td.booked:hover .date span, body.entrepreneur table.booked-calendar td.booked .date, body.entrepreneur table.booked-calendar td.booked .date span, body.entrepreneur table.booked-calendar td.booked:hover .date, body.entrepreneur table.booked-calendar td.booked:hover .date span {
				background: <?php echo $brand_color;?> !important;
			}

			body .booked-calendar-wrap .booked-appt-list .timeslot .timeslot-title,
			body.entrepreneur .booked-calendar-wrap.small table.booked-calendar thead th .page-left:hover, body.entrepreneur .booked-calendar-wrap.small table.booked-calendar thead th .page-right:hover, body.entrepreneur table.booked-calendar thead th .page-left:hover, body.entrepreneur table.booked-calendar thead th .page-right:hover {
				color: <?php echo $brand_color;?> !important;
			}

			body .booked-modal .bm-window .close, body .booked-modal .bm-window .close:hover {
				color: <?php echo $brand_color;?>;
			}
			.first-section .widget.booked_calendar .widgettitle, .first-section .widget.booked_calendar .widget-title, .first-section .widget_booked_calendar .widgettitle, .first-section .widget_booked_calendar .widget-title {
				background: <?php echo $brand_color;?>;
			}
			.first-section .widget.booked_calendar .widgettitle:after, .first-section .widget.booked_calendar .widget-title:after, .first-section .widget_booked_calendar .widgettitle:after, .first-section .widget_booked_calendar .widget-title:after {
				border-color: <?php echo $brand_color;?> transparent transparent;
			}
			
			body.entrepreneur .booked-calendar-wrap.small table.booked-calendar td.today:hover .date span {
				background: <?php echo $brand_color;?> !important;
			}

			<?php endif; ?>
			<?php endif; ?>


		</style>
		<?php
	}

}
