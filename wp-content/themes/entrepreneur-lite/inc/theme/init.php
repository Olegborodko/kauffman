<?php

class MP_Entrepreneur {

	private $prefix;

	public function __construct() {
		$this->prefix = 'mp_entrepreneur';
		$this->define_constant();
		$this->init();
		$this->add_actions();
		$this->add_filters();
	}

	/**
	 * Add theme actions.
	 *
	 * @access public
	 * @return voi
	 */
	public function add_actions() {
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue_scripts' ) );
		add_action( 'after_setup_theme', array( $this, 'setup' ) );
		add_action( 'wp_print_styles', array( $this, 'load_google_fonts' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'scripts_styles' ) );
		add_action( 'widgets_init', array( $this, 'widgets_init' ) );
		
		// theme wizard notice
		if ( current_user_can( 'edit_theme_options' ) ) {
			add_action( 'admin_notices', array( $this, 'wizard_admin_notice' ) );
		}
		/*if ( ! function_exists( '_wp_render_title_tag' ) ) {
			add_action( 'wp_head', array( $this, 'slug_render_title' ) );
		}*/
		add_action( 'after_setup_theme', array( $this, 'woocommerce_support' ) );

		add_action( $this->get_prefix() . 'theme_sub_header_page', array( $this, 'theme_sub_header' ) );
		add_action( $this->get_prefix() . 'theme_sub_header_single', array( $this, 'theme_sub_header' ) );
		add_action( $this->get_prefix() . 'theme_sub_header_archive', array( $this, 'theme_sub_header' ) );
		add_action( $this->get_prefix() . 'theme_sub_header_blog', array( $this, 'theme_sub_header' ) );
	}

	/**
	 *  Add theme add_filters.
	 *
	 * @access public
	 * @return voi
	 */
	public function add_filters() {
		add_filter( 'excerpt_length', array( $this, 'excerpt_length' ), 999 );
		add_filter( 'excerpt_more', array( $this, 'new_excerpt_more' ), 999 );
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
	 * Set constants.
	 *
	 * @access private
	 * @return void
	 */
	private function define_constant() {
		define( 'MP_ENTREPRENEUR_TEXT_COLOR', '#55616b' );
		define( 'MP_ENTREPRENEUR_BRAND_COLOR', '#3cc9c1' );
	}

	public function init() {
		/*
		 * Set up the content width value based on the theme's design.
		 *
		 */
		if ( ! isset( $content_width ) ):
			$content_width = 770;
		endif;


		include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

		$this->theme_requires();
	}

	/**
	 * Entrepreneur setup.
	 *
	 * Sets up theme defaults and registers the various WordPress features that
	 * Entrepreneur supports.
	 *
	 * @since Entrepreneur 1.0
	 */
	public function setup() {
		/*
		 * This theme styles the visual editor to resemble the theme style,
		 * specifically font, colors, icons, and column width.
		 */
		add_editor_style();
		/*
		 * Makes Entrepreneur available for translation.
		 *
		 * Translations can be added to the /languages/ directory.
		 * If you're building a theme based on Entrepreneur, use a find and
		 * replace to change 'Entrepreneur' to the name of your theme in all
		 * template files.
		 */
		load_theme_textdomain('entrepreneur-lite', get_template_directory() . '/languages');

		$locale      = get_locale();
		$locale_file = get_template_directory() . "/languages/$locale.php";

		if ( is_readable( $locale_file ) ) {
			require_once( $locale_file );
		}
		/*
		 *  Adds RSS feed links to <head> for posts and comments.
		 */
		add_theme_support( 'automatic-feed-links' );
		/*
		 * Supporting title tag via add_theme_support (since WordPress 4.1)
		 */
		add_theme_support( 'title-tag' );
		/*
		 * This theme supports a variety of post formats.
		 */
		add_theme_support( 'post-formats', array(
			'aside',
			'gallery',
			'image',
			'video',
			'quote',
			'audio',
			'link',
			'status',
		) );
		add_theme_support( 'custom-logo' );
		/*
		 *  This theme uses wp_nav_menu() in one location.
		 */
		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'entrepreneur-lite' )
			) );

		/*
		 * This theme uses its own gallery styles.
		 */
		add_filter( 'use_default_gallery_style', '__return_false' );

		$this->add_theme_image_sizes();
	}

	/*
	 * Add theme support post thumbnails.
	 */

	public function add_theme_image_sizes() {
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 770, 396, true );

		add_image_size( $this->get_prefix() . 'thumb-portfolio', 570, 570, false );
		add_image_size( $this->get_prefix() . 'thumb-thumbnail', 100, 100, false );
		add_image_size( $this->get_prefix() . 'thumb-large', 770, 624, true );
		add_image_size( $this->get_prefix() . 'thumb-medium', 385, 396, true );
	}

	/* Return the Google font stylesheet URL, if available.
	 *
	 * The use of Open Sans by default is localized.
	 *
	 * @since Entrepreneur  1.0.0
	 * @access public
	 * @return void
	 */

	function load_google_fonts() {
		wp_register_style( $this->get_prefix() . 'ubuntu', 'https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,400italic&subset=latin,latin-ext,cyrillic' );
		wp_enqueue_style( $this->get_prefix() . 'ubuntu' );
	}

	/* Theme page sub header
	 * Add action for first section
	 * @since  Entrepreneur 1.0.0
	 * @access public
	 * @return void
	 */

	function theme_sub_header() {

		if ( ! ( get_theme_mod( mp_entrepreneur_get_prefix() . 'first_section_show', false ) || get_theme_mod( mp_entrepreneur_get_prefix() . 'first_section_show' ) ) ):
			get_template_part( "sections/content-first_section" );
		endif;

	}

	/**
	 * Enqueue scripts and styles for the front end.
	 */
	function scripts_styles() {
		/*
		 * Adds JavaScript to pages with the comment form to support
		 * sites with threaded comments (when in use).
		 */
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
		/*
		 *  Scripts for template masonry blog
		 */
		wp_enqueue_script( 'superfish.min', get_template_directory_uri() . '/js/superfish.min.js', array( 'jquery' ), '1.7.5', true );
		wp_enqueue_script( $this->get_prefix() . 'script', get_template_directory_uri() . '/js/entrepreneur.min.js', array(
			'jquery',
			'superfish.min'
		), $this->get_theme_version(), true );

		$translation_array = array(
			'url' => get_template_directory_uri()
		);
		wp_localize_script( $this->get_prefix() . 'script', 'template_directory_uri', $translation_array );

		/*
		 * Loads Entrepreneur Styles
		 */
		wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', '', '4.5.0', 'all' );
		wp_enqueue_style( $this->get_prefix() . 'main', get_template_directory_uri() . '/css/entrepreneur-style.min.css', array(
			'font-awesome'
		), $this->get_theme_version(), 'all' );

		if ( is_plugin_active( 'motopress-content-editor/motopress-content-editor.php' ) || is_plugin_active( 'motopress-content-editor-lite/motopress-content-editor.php' ) ) {
			wp_enqueue_style( $this->get_prefix() . 'motopress', get_template_directory_uri() . '/css/entrepreneur-motopress.min.css', array(
				'font-awesome',
				$this->get_prefix() . 'main'
			), $this->get_theme_version(), 'all' );
		}
		if ( is_plugin_active( 'booked/booked.php' ) ) {
			wp_enqueue_style( $this->get_prefix() . 'booked', get_template_directory_uri() . '/css/entrepreneur-booked.min.css', array(
				'font-awesome',
				$this->get_prefix() . 'main'
			), $this->get_theme_version(), 'all' );
		}
		if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
			wp_enqueue_style( $this->get_prefix() . 'woocommerce', get_template_directory_uri() . '/css/entrepreneur-woocommerce.min.css', array(
				'font-awesome',
				$this->get_prefix() . 'main'
			), $this->get_theme_version(), 'all' );
		}

		if ( is_plugin_active( 'bbpress/bbpress.php' ) ) {
			wp_enqueue_style( $this->get_prefix() . 'bbpress', get_template_directory_uri() . '/css/entrepreneur-bbpress.min.css', array(
				'font-awesome',
				$this->get_prefix() . 'main'
			), $this->get_theme_version(), 'all' );
		}
		if ( is_rtl() ) {
			wp_enqueue_style( $this->get_prefix() . 'rtl', get_template_directory_uri() . '/css/entrepreneur-rtl.min.css', array(
				'font-awesome',
				$this->get_prefix() . 'main'
			), $this->get_theme_version(), 'all' );
		}
		/*
		 *  Loads our main stylesheet.
		 */
		wp_enqueue_style( $this->get_prefix() . 'style', get_stylesheet_uri(), array(), $this->get_theme_version() );
	}

	/**
	 * Register widget areas.
	 *
	 * @since Entrepreneur 1.0
	 * @access public
	 * @return void
	 */
	function widgets_init() {
		register_sidebar( array(
			'name'          => __( 'Main Widget Area', 'entrepreneur-lite' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Appears on posts and pages in the sidebar.', 'entrepreneur-lite' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
		if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
			register_sidebar( array(
				'name'          => __( 'Shop Widget Area', 'entrepreneur-lite' ),
				'id'            => 'sidebar-shop',
				'description'   => __( 'Appears on shop pages in the sidebar.', 'entrepreneur-lite' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			) );
		}
		register_sidebar( array(
			'name'          => __( 'First Section Widget Area', 'entrepreneur-lite' ),
			'id'            => 'sidebar-first-section',
			'description'   => __( 'Appears on front page.', 'entrepreneur-lite' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
		if ( is_plugin_active( 'mp-entrepreneur/mp-entrepreneur.php' ) ) {
		register_sidebar( array(
			'name'          => __( 'Services & Prices Widget Area', 'entrepreneur-lite' ),
			'id'            => 'sidebar-services',
			'description'   => __( 'Appears on front page.', 'entrepreneur-lite' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
		}
		register_sidebar( array(
			'name'          => __( 'Footer Left', 'entrepreneur-lite' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Appears in the footer section of the site.', 'entrepreneur-lite' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );

		register_sidebar( array(
			'name'          => __( 'Footer Center', 'entrepreneur-lite' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'Appears in the footer section of the site.', 'entrepreneur-lite' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );

		register_sidebar( array(
			'name'          => __( 'Footer Right', 'entrepreneur-lite' ),
			'id'            => 'sidebar-4',
			'description'   => __( 'Appears in the footer section of the site.', 'entrepreneur-lite' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );
	}

	/**
	 * Title Tag backwards compatibility for older versions
	 *
	 */
	/*function slug_render_title() {
		?>
		<?php wp_title( '|', true, 'right' ); ?>
		<?php

	}*/

	/*
	 * The experts length
	 */

	function excerpt_length( $length ) {
		return 55;
	}

	// Replaces the excerpt "more" text by a link
	function new_excerpt_more( $more ) {
		global $post;

		return '... <p><a class="more-link" href="' . get_permalink( $post->ID ) . '">' . __( 'read more', 'entrepreneur-lite' ) . '</a></p>';
	}

	/*
	 * Declare WooCommerce support
	 */

	function woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}

	/**
	 * Entrepreneur page menu.
	 *
	 * Show pages of site.
	 *
	 * @since entrepreneur 1.0
	 */
	function page_menu() {
		echo '<ul class="sf-menu">';
		wp_list_pages( array( 'title_li' => '', 'depth' => 1 ) );
		echo '</ul>';
	}

	/**
	 * Require files.
	 *
	 * @since Entrepreneur 1.0
	 * @access public
	 * @return void
	 */
	function theme_requires() {
		/**
		 * Add support for a custom header image.
		 */
		require get_template_directory() . '/inc/custom-header.php';
		new MP_Entrepreneur_Custom_Header( $this->prefix );
		/*
		 * Customizer
		 */
		require get_template_directory() . '/inc/admin/customize.php';
		new MP_Entrepreneur_Customizer( $this->prefix );

		/*
		 * Entrepreneur only works in WordPress 3.6 or later.
		 */
		if ( version_compare( $GLOBALS['wp_version'], '3.6-alpha', '<' ) ):
			require get_template_directory() . '/inc/back-compat.php';
		endif;
		/*
		 * Theme functions
		 */
		require get_template_directory() . '/inc/theme/theme-functions.php';
		/*
		 * Post gallery
		 */
		require get_template_directory() . '/inc/theme/post-gallery.php';

		/*
		 * Init woocommerce
		 */

		if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
			require get_template_directory() . '/inc/woocommerce/woo-init.php';
		}

		/*
		 * Init motopress
		 */
		if ( is_plugin_active( 'motopress-content-editor/motopress-content-editor.php' ) || is_plugin_active( 'motopress-content-editor-lite/motopress-content-editor.php' ) ) {
			require get_template_directory() . '/inc/motopress/motopress-init.php';
			new MP_Entrepreneur_Motopress_Init( $this->get_prefix() );
		}

		/*
		* Init  mp-restaurant-menu
		*/
		if ( is_plugin_active( 'mp-restaurant-menu/restaurant-menu.php' ) ) {
			require get_template_directory() . '/inc/mp-restaurant-menu/mp-restaurant-menu-init.php';
		}

		/*
		 * Init  mp-timetable
		 */
		if ( is_plugin_active( 'mp-timetable/mp-timetable.php' ) ) {
			require get_template_directory() . '/inc/mp-timetable/mp-timetable-init.php';
		}

		if ( current_user_can( 'install_plugins' ) ) {
			require get_template_directory() . '/inc/theme/tgm-init.php';
		}

		
		/*
		 * Theme Wizard
		 */
		require get_template_directory() . '/classes/theme/class-theme-wizard.php';
	}

	/*
	 * Entrepreneur admin js.
	 *
	 * Add js for customizer.
	 *
	 * @since Entrepreneur 1.0.0
	 */

	function admin_enqueue_scripts() {
		if ( is_callable( 'is_customize_preview' ) && is_customize_preview() ) {
			wp_enqueue_script( $this->get_prefix() . 'sections', get_template_directory_uri() . '/js/theme-sections.min.js', '', $this->get_theme_version(), true );
		}
	}

	/*
	* Dismiss Theme Wizard admin notice
	*  @since Entrepreneur 1.0.0
	*/

	private function wizard_dismiss() {
		if ( isset( $_GET[ $this->get_prefix() . 'wizard-dismiss' ] ) ) {
			update_user_meta( get_current_user_id(), $this->get_prefix() . 'wizard_dismiss', 1 );
		}
	}

	/*
	 * Theme Wizard admin notice
	 *  @since Entrepreneur 1.0.0
	 */

	public function wizard_admin_notice() {
		
		$this->wizard_dismiss();

		$isThemeActivation = apply_filters( $this->get_prefix() . 'activation', true );
		if ( $isThemeActivation && ! get_user_meta( get_current_user_id(), $this->get_prefix() . 'wizard_dismiss', true ) ) :
			?>
			<div class="notice notice-success is-dismissible">
				<p>
					<strong><?php _e( 'You&#8217;ve installed Entrepreneur theme. Click &#34;Run Theme Wizard&#34; to view a quick guided tour of theme functionality and complete the installation.',  'entrepreneur-lite' ); ?></strong>
				</p>
				<p>
					<a class="button button-primary"
					   href="<?php echo esc_url( admin_url( 'themes.php?page=theme-setup' . '&' . $this->get_prefix() . 'wizard-dismiss=dismiss_admin_notices' ) ); ?>"><strong><?php _e( 'Run Theme Wizard',  'entrepreneur-lite' ); ?>
						</strong></a>
					<a class="button"
					   href="<?php echo esc_url( admin_url( 'themes.php'  . '?' . $this->get_prefix() . 'wizard-dismiss=dismiss_admin_notices') ); ?>"
					   class="dismiss-notice"
					   target="_parent"><strong><?php _e( 'Skip',  'entrepreneur-lite' ); ?>
						</strong></a>
				</p>
			</div>
			<?php
		endif;
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

new MP_Entrepreneur();
