<?php

/*
 * Class MP_Entrepreneur_Customizer
 *
 * add actions for default widgets if footer
 */
require get_template_directory() . '/inc/admin/customise-classes.php';

class MP_Entrepreneur_Customizer {

	private $prefix;

	public function __construct( $prefix ) {
		$this->prefix = $prefix;
		//Handles the theme's theme customizer functionality.
		add_action( 'customize_register', array( $this, 'customize_register' ) );
		add_action( 'customize_preview_init', array( $this, 'customize_preview_js' ) );
	}


	/**
	 * Get prefix.
	 *
	 * @access public
	 * @return sting
	 */
	private function get_prefix() {
		return $this->prefix . '_';
	}


	/**
	 * Sets up the theme customizer sections, controls, and settings.
	 *
	 * @since  Entrepreneur 1.0.0
	 * @access public
	 *
	 * @param  object $wp_customize
	 *
	 * @return void
	 */
	function customize_register( $wp_customize ) {
		/*
		 * Enable live preview for WordPress theme features.
		 */
		$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
		$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
		$wp_customize->remove_section( "header_image" );
		$wp_customize->get_setting( 'custom_logo' )->transport         = 'refresh';

		/*
		 * Add 'gemeral' section
		 */
		$wp_customize->add_section(
			$this->get_prefix() . 'general_section', array(
				'title'      => esc_html__( 'General', 'entrepreneur-lite' ),
				'priority'   => 20,
				'capability' => 'edit_theme_options'
			)
		);


		

		$color_scheme = $this->get_color_scheme();

		/*
		 * Brand Color
		 */

		$wp_customize->add_setting( $this->get_prefix() . 'color_text', array(
			'default'           => MP_ENTREPRENEUR_TEXT_COLOR,
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_hex_color'
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $this->get_prefix() . 'color_text', array(
			'label'    => __( 'Text Color', 'entrepreneur-lite' ),
			'section'  => 'colors',
			'settings' => $this->get_prefix() . 'color_text'
		) ) );
		$wp_customize->add_setting( $this->get_prefix() . 'color_primary', array(
			'default'           => $color_scheme[0],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_hex_color'
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $this->get_prefix() . 'color_primary', array(
			'label'    => __( 'Accent Color', 'entrepreneur-lite' ),
			'section'  => 'colors',
			'settings' => $this->get_prefix() . 'color_primary'
		) ) );

		
		/*
		 * Add 'Posts Settings' section
		 */
		$wp_customize->add_section(
			$this->get_prefix() . 'posts_settings', array(
				'title'      => esc_html__( 'Posts Settings', 'entrepreneur-lite' ),
				'priority'   => 150,
				'capability' => 'edit_theme_options'
			)
		);

		/*
		 *  Add the 'Show meta' setting.
		 */
		$wp_customize->add_setting( $this->get_prefix() . 'show_meta', array(
			'default'           => '1',
			'sanitize_callback' => array( $this, 'sanitize_checkbox' ),
		) );
		/*
		 * Add the upload control for the 'Show meta' setting.
		 */
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize, $this->get_prefix() . 'show_meta', array(
				'label'    => esc_html__( 'Show Meta', 'entrepreneur-lite' ),
				'section'  => $this->get_prefix() . 'posts_settings',
				'settings' => $this->get_prefix() . 'show_meta',
				'type'     => 'checkbox',
			) )
		);
		/*
		 * Add the 'Show Categories' setting.
		 */
		$wp_customize->add_setting( $this->get_prefix() . 'show_categories', array(
			'default'           => '1',
			'sanitize_callback' => array( $this, 'sanitize_checkbox' ),
		) );
		/*
		 * Add the upload control for the 'Show Categories'setting.
		 */
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize, $this->get_prefix() . 'show_categories', array(
				'label'    => esc_html__( 'Show Categories', 'entrepreneur-lite' ),
				'section'  => $this->get_prefix() . 'posts_settings',
				'settings' => $this->get_prefix() . 'show_categories',
				'type'     => 'checkbox',
			) )
		);
		/*
		 * Add the 'Show Tags' setting.
		 */
		$wp_customize->add_setting( $this->get_prefix() . 'show_tags', array(
			'default'           => '1',
			'sanitize_callback' => array( $this, 'sanitize_checkbox' ),
		) );
		/*
		 *  Add the upload control for the 'Show Tags' setting.
		 */
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize, $this->get_prefix() . 'show_tags', array(
				'label'    => esc_html__( 'Show Tags', 'entrepreneur-lite' ),
				'section'  => $this->get_prefix() . 'posts_settings',
				'settings' => $this->get_prefix() . 'show_tags',
				'type'     => 'checkbox',
			) )
		);


		/*
		 * Add the 'first section'.
		 */
		$wp_customize->add_section(
			$this->get_prefix() . 'first_section', array(
				'title'       => __( 'First Section', 'entrepreneur-lite' ),
				'priority'    => 80,
				'capability'  => 'edit_theme_options',
				'description' => __( '<i>Fill in this section by adding widgets to "Customize > Widgets > First section"</i><hr/>', 'entrepreneur-lite' )
			)
		);
		/*
		 * Add the 'Hide first section?' setting.
		 */
		$wp_customize->add_setting( $this->get_prefix() . 'first_section_show', array(
			'default'           => 0,
			'sanitize_callback' => array( $this, 'sanitize_checkbox' ),
		) );
		/*
		 *  Add the upload control for the 'first section' setting.
		 */
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize, $this->get_prefix() . 'first_section_show', array(
				'label'    => esc_html__( 'Hide this section', 'entrepreneur-lite' ),
				'section'  => $this->get_prefix() . 'first_section',
				'settings' => $this->get_prefix() . 'first_section_show',
				'type'     => 'checkbox',
				'priority' => 1,
			) )
		);

		/*
     * Add the 'first section bg' upload setting.
     */
		$wp_customize->add_setting(
			$this->get_prefix() . 'first_section_bg', array(
				'default'           => get_template_directory_uri() . '/images/bg1.jpg',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			)
		);

		/*
		 * Add the upload control for the 'first section bg' setting.
		 */
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize, $this->get_prefix() . 'first_section_bg', array(
					'label'    => esc_html__( 'Background image', 'entrepreneur-lite' ),
					'section'  => $this->get_prefix() . 'first_section',
					'settings' => $this->get_prefix() . 'first_section_bg',
					'priority' => 7
				)
			)
		);

		/*
		* Add the 'first section position' setting.
		*/
		$wp_customize->add_setting( $this->get_prefix() . 'first_section_position', array(
			'default'           => 10,
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => array( $this, 'sanitize_position' )
		) );
		/*
		 * Add the upload control for the  'first section position' setting.
		 */
		$wp_customize->add_control( $this->get_prefix() . 'first_section_position', array(
			'label'    => __( 'Section position', 'entrepreneur-lite' ),
			'section'  => $this->get_prefix() . 'first_section',
			'settings' => $this->get_prefix() . 'first_section_position',
			'priority' => 30
		) );

		/*
		 * Add the 'news section'.
		 */
		$wp_customize->add_section(
			$this->get_prefix() . 'news_section', array(
				'title'       => __( 'News Section', 'entrepreneur-lite' ),
				'priority'    => 88,
				'capability'  => 'edit_theme_options',
				'description' => __( '<i>Automatically filled by your latest posts.</i><hr/>', 'entrepreneur-lite' )
			)
		);

		/*
		 * Add the 'Hide news section?' setting.
		 */
		$wp_customize->add_setting( $this->get_prefix() . 'news_show', array(
			'default'           => 0,
			'sanitize_callback' => array( $this, 'sanitize_checkbox' ),
		) );
		/*
		 *  Add the upload control for the 'news title section?' setting.
		 */
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize, $this->get_prefix() . 'news_show', array(
				'label'    => esc_html__( 'Hide this section', 'entrepreneur-lite' ),
				'section'  => $this->get_prefix() . 'news_section',
				'settings' => $this->get_prefix() . 'news_show',
				'type'     => 'checkbox',
				'priority' => 1,
			) )
		);
		/*
		 * Add the 'news' setting.
		 */
		$wp_customize->add_setting( $this->get_prefix() . 'news_title', array(
			'sanitize_callback' => array( $this, 'sanitize_text' ),
			'default'           => __( 'Tips & News', 'entrepreneur-lite' ),
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage'
		) );
		/*
		 * Add the upload control for the 'news' setting.
		 */
		$wp_customize->add_control( $this->get_prefix() . 'news_title', array(
			'label'    => __( 'Title', 'entrepreneur-lite' ),
			'section'  => $this->get_prefix() . 'news_section',
			'settings' => $this->get_prefix() . 'news_title',
			'priority' => 2
		) );

		/*
		 * Add the 'news' setting.
		 */
		$wp_customize->add_setting( $this->get_prefix() . 'news_subtitle', array(
			'sanitize_callback' => array( $this, 'sanitize_text' ),
			'default'           => __( 'Updates from the blog', 'entrepreneur-lite' ),
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage'
		) );
		/*
		 * Add the upload control for the 'news' setting.
		 */
		$wp_customize->add_control( new MP_Entrepreneur_Customize_Textarea_Control( $wp_customize, $this->get_prefix() . 'news_subtitle', array(
			'label'    => __( 'Sub Title', 'entrepreneur-lite' ),
			'section'  => $this->get_prefix() . 'news_section',
			'settings' => $this->get_prefix() . 'news_subtitle',
			'priority' => 3
		) ) );
		/*
		 * Add the 'install brand button label' setting.
		 */
		$wp_customize->add_setting( $this->get_prefix() . 'news_button_label', array(
			'sanitize_callback' => array( $this, 'sanitize_text' ),
			'default'           => __( 'Read all news', 'entrepreneur-lite' ),
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage'
		) );
		/*
		 * Add the upload control for the 'last news button label' setting.
		 */
		$wp_customize->add_control( $this->get_prefix() . 'news_button_label', array(
			'label'    => __( 'Button label', 'entrepreneur-lite' ),
			'section'  => $this->get_prefix() . 'news_section',
			'settings' => $this->get_prefix() . 'news_button_label',
			'priority' => 4
		) );
		/*
		 * Add the 'last news button url' setting.
		 */
		$wp_customize->add_setting( $this->get_prefix() . 'news_button_url', array(
			'sanitize_callback' => array( $this, 'sanitize_text' ),
			'default'           => '#',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage'
		) );
		/*
		 * Add the upload control for the 'last news button url' setting.
		 */
		$wp_customize->add_control( $this->get_prefix() . 'news_button_url', array(
			'label'    => __( 'Button url', 'entrepreneur-lite' ),
			'section'  => $this->get_prefix() . 'news_section',
			'settings' => $this->get_prefix() . 'news_button_url',
			'priority' => 5
		) );
		/*
		* Add the 'news position' setting.
		*/
		$wp_customize->add_setting( $this->get_prefix() . 'news_position', array(
			'default'           => 50,
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => array( $this, 'sanitize_position' )
		) );
		/*
		 * Add the upload control for the  'news position' setting.
		 */
		$wp_customize->add_control( $this->get_prefix() . 'news_position', array(
			'label'    => __( 'Section position', 'entrepreneur-lite' ),
			'section'  => $this->get_prefix() . 'news_section',
			'settings' => $this->get_prefix() . 'news_position',
			'priority' => 30
		) );


		/*
		 * Add the 'call to action section'.
		 */
		$wp_customize->add_section(
			$this->get_prefix() . 'call_to_action_section', array(
				'title'      => __( 'Call to Action Section', 'entrepreneur-lite' ),
				'priority'   => 90,
				'capability' => 'edit_theme_options'
			)
		);

		/*
		 * Add the 'Hide call to action section?' setting.
		 */
		$wp_customize->add_setting( $this->get_prefix() . 'call_to_action_show', array(
			'default'           => 0,
			'sanitize_callback' => array( $this, 'sanitize_checkbox' ),
		) );
		/*
		 *  Add the upload control for the 'call to action title section?' setting.
		 */
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize, $this->get_prefix() . 'call_to_action_show', array(
				'label'    => esc_html__( 'Hide this section', 'entrepreneur-lite' ),
				'section'  => $this->get_prefix() . 'call_to_action_section',
				'settings' => $this->get_prefix() . 'call_to_action_show',
				'type'     => 'checkbox',
				'priority' => 1,
			) )
		);
		/*
		 * Add the 'call to action' setting.
		 */
		$wp_customize->add_setting( $this->get_prefix() . 'call_to_action_title', array(
			'sanitize_callback' => array( $this, 'sanitize_text' ),
			'default'           => __( 'Book your visit online and save 10&#37;', 'entrepreneur-lite' ),
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage'
		) );
		/*
		 * Add the upload control for the 'call to action' setting.
		 */
		$wp_customize->add_control( $this->get_prefix() . 'call_to_action_title', array(
			'label'    => __( 'Title', 'entrepreneur-lite' ),
			'section'  => $this->get_prefix() . 'call_to_action_section',
			'settings' => $this->get_prefix() . 'call_to_action_title',
			'priority' => 2
		) );
		/*
				 * Add the 'call to action brand button label' setting.
				 */
		$wp_customize->add_setting( $this->get_prefix() . 'call_to_action_button_label', array(
			'sanitize_callback' => array( $this, 'sanitize_text' ),
			'default'           => __( 'book your visit', 'entrepreneur-lite' ),
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage'
		) );
		/*
		 * Add the upload control for the 'call to action button label' setting.
		 */
		$wp_customize->add_control( $this->get_prefix() . 'call_to_action_button_label', array(
			'label'    => __( 'Button label', 'entrepreneur-lite' ),
			'section'  => $this->get_prefix() . 'call_to_action_section',
			'settings' => $this->get_prefix() . 'call_to_action_button_label',
			'priority' => 4
		) );
		/*
		 * Add the 'call to action button url' setting.
		 */
		$wp_customize->add_setting( $this->get_prefix() . 'call_to_action_button_url', array(
			'sanitize_callback' => array( $this, 'sanitize_text' ),
			'default'           => '#first-section',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage'
		) );
		/*
		 * Add the upload control for the 'call to action button url' setting.
		 */
		$wp_customize->add_control( $this->get_prefix() . 'call_to_action_button_url', array(
			'label'    => __( 'Button url', 'entrepreneur-lite' ),
			'section'  => $this->get_prefix() . 'call_to_action_section',
			'settings' => $this->get_prefix() . 'call_to_action_button_url',
			'priority' => 5
		) );
		/*
		* Add the 'call to action position' setting.
		*/
		$wp_customize->add_setting( $this->get_prefix() . 'call_to_action_position', array(
			'default'           => 60,
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => array( $this, 'sanitize_position' )
		) );
		/*
		 * Add the upload control for the  'call to action position' setting.
		 */
		$wp_customize->add_control( $this->get_prefix() . 'call_to_action_position', array(
			'label'    => __( 'Section position', 'entrepreneur-lite' ),
			'section'  => $this->get_prefix() . 'call_to_action_section',
			'settings' => $this->get_prefix() . 'call_to_action_position',
			'priority' => 30
		) );
		/*
     * Add the 'call to action section bg' upload setting.
     */
		$wp_customize->add_setting(
			$this->get_prefix() . 'call_to_action_bg', array(
				'default'           => get_template_directory_uri() . '/images/bg2.jpg',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			)
		);
		/*
				 * Add the upload control for the 'first section bg' setting.
				 */
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize, $this->get_prefix() . 'call_to_action_bg', array(
					'label'    => esc_html__( 'Background image', 'entrepreneur-lite' ),
					'section'  => $this->get_prefix() . 'call_to_action_section',
					'settings' => $this->get_prefix() . 'call_to_action_bg',
					'priority' => 7
				)
			)
		);
	}

	/**
	 * Sanitize text
	 *
	 * @since  Entrepreneur 1.0.0
	 * @access public
	 * @return sanitized output
	 */
	function sanitize_text( $txt ) {
		return wp_kses_post( force_balance_tags( $txt ) );
	}


	/**
	 * Sanitize checkbox
	 *
	 * @since  Entrepreneur 1.0.0
	 * @access public
	 * @return sanitized output
	 */
	function sanitize_checkbox( $input ) {
		if ( $input == 1 ) {
			return 1;
		} else {
			return '';
		}
	}

	/**
	 * Sanitize position
	 *
	 * @since Entrepreneur 1.0
	 * @access public
	 * @return sanitized output
	 */
	function sanitize_position( $str ) {
		if ( $this->is_positive_integer( $str ) ) {
			return intval( $str );
		}
	}

	/**
	 * Sanitize is positive integer
	 *
	 * @since Entrepreneur 1.0
	 * @access public
	 * @return sanitized output
	 */
	function is_positive_integer( $str ) {
		return ( is_numeric( $str ) && $str > 0 && $str == round( $str ) );
	}

	/**
	 * Enqueue Javascript postMessage handlers for the Customizer.
	 *
	 * Binds JavaScript handlers to make the Customizer preview
	 * reload changes asynchronously.
	 *
	 * @since Entrepreneur 1.0
	 */
	function customize_preview_js() {
		wp_enqueue_script( 'theme-customizer', get_template_directory_uri() . '/js/theme-customizer.min.js', array( 'customize-preview' ), $this->get_theme_version(), true );
	}

	/**
	 * Register color schemes for Entrepreneur.
	 *
	 * Can be filtered with {@see $this->get_prefix().'color_schemes'}.
	 *
	 * The order of colors in a colors array:
	 * 1. Main Background Color.
	 * 2. Sidebar Background Color.
	 * 3. Box Background Color.
	 * 4. Main Text and Link Color.
	 * 5. Sidebar Text and Link Color.
	 * 6. Meta Box Background Color.
	 *
	 * @since Entrepreneur 1.0
	 *
	 * @return array An associative array of color scheme options.
	 */
	function get_color_schemes() {
		return apply_filters( $this->get_prefix() . 'color_schemes', array(
			'default' => array(
				'label'  => __( 'Default', 'entrepreneur-lite' ),
				'colors' => array(
					MP_ENTREPRENEUR_BRAND_COLOR,
					get_template_directory_uri() . '/images/headers/logo.png'
				),
			)
		) );
	}

	/**
	 * Get the current Entrepreneur color scheme.
	 *
	 * @since Entrepreneur 1.0
	 *
	 * @return array An associative array of either the current or default color scheme hex values.
	 */
	function get_color_scheme() {
		$color_scheme_option = esc_html( get_theme_mod( $this->get_prefix() . 'color_scheme', 'default' ) );
		$color_schemes       = $this->get_color_schemes();

		if ( array_key_exists( $color_scheme_option, $color_schemes ) ) {
			return $color_schemes[ $color_scheme_option ]['colors'];
		}

		return $color_schemes['default']['colors'];
	}

	/**
	 * Returns an array of color scheme choices registered for Entrepreneur.
	 *
	 * @since Entrepreneur 1.0
	 *
	 * @return array of color schemes.
	 */
	function get_color_scheme_choices() {
		$color_schemes                = $this->get_color_schemes();
		$color_scheme_control_options = array();

		foreach ( $color_schemes as $color_scheme => $value ) {
			$color_scheme_control_options[ $color_scheme ] = $value['label'];
		}

		return $color_scheme_control_options;
	}

	/**
	 * Get theme vertion.
	 *
	 * @since Entrepreneur 1.0.0
	 * @access public
	 * @return string
	 */
	function get_theme_version() {
		$theme_info = wp_get_theme( get_template() );

		return $theme_info->get( 'Version' );
	}
}
