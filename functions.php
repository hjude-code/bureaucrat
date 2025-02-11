<?php
/**
 * bureaucratcrat functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since bureaucrat 1.0
 */

 //Adds block stylesheets


function themeslug_enqueue_block_styles() {
	wp_enqueue_block_style( 'core/details', array(
		'handle' => 'themeslug-block-details',
		'src'    => get_theme_file_uri( "assets/css/blocks/core-details.css" ),
		'path'   => get_theme_file_path( "assets/css/blocks/core-details.css" )
	) );
	wp_enqueue_block_style( 'core/video', array(
		'handle' => 'themeslug-block-video-figure',
		'src'    => get_theme_file_uri( "assets/css/blocks/figure.css" ),
		'path'   => get_theme_file_path( "assets/css/blocks/figure.css" )
	) );
	wp_enqueue_block_style( 'core/image', array(
		'handle' => 'themeslug-block-image-figure',
		'src'    => get_theme_file_uri( "assets/css/blocks/figure.css" ),
		'path'   => get_theme_file_path( "assets/css/blocks/figure.css" )
	) );
	wp_enqueue_block_style( 'core/post-featured-image', array(
		'handle' => 'themeslug-block-post-featured-image-figure',
		'src'    => get_theme_file_uri( "assets/css/blocks/figure.css" ),
		'path'   => get_theme_file_path( "assets/css/blocks/figure.css" )
	) );
	wp_enqueue_block_style( 'core/group', array(
		'handle' => 'themeslug-blockgroup',
		'src'    => get_theme_file_uri( "assets/css/blocks/core-group.css" ),
		'path'   => get_theme_file_path( "assets/css/blocks/core-group.css" )
	) );
	wp_enqueue_block_style( 'core/post-navigation-link', array(
		'handle' => 'themeslug-block-post-navigation-link',
		'src'    => get_theme_file_uri( "assets/css/blocks/core-post-navigation-link.css" ),
		'path'   => get_theme_file_path( "assets/css/blocks/core-post-navigation-link.css" )
	) );
	wp_enqueue_block_style( 'core/columns', array(
		'handle' => 'themeslug-block-columns',
		'src'    => get_theme_file_uri( "assets/css/blocks/core-columns.css" ),
		'path'   => get_theme_file_path( "assets/css/blocks/core-columns.css" )
	) );
	wp_enqueue_block_style( 'core/navigation', array(
		'handle' => 'themeslug-block-navigation',
		'src'    => get_theme_file_uri( "assets/css/blocks/core-navigation.css" ),
		'path'   => get_theme_file_path( "assets/css/blocks/core-navigation.css" )
	) );
}
add_action( 'init', 'themeslug_enqueue_block_styles' );

// Adds theme support for post formats.
if ( ! function_exists( 'bureaucrat_post_format_setup' ) ) :
	/**
	 * Adds theme support for post formats.
	 *
	 * @since bureaucrat 1.0
	 *
	 * @return void
	 */
	function bureaucrat_post_format_setup() {
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
	}
endif;
add_action( 'after_setup_theme', 'bureaucrat_post_format_setup' );

// Enqueues editor-style.css in the editors.
if ( ! function_exists( 'bureaucrat_editor_style' ) ) :
	/**
	 * Enqueues editor-style.css in the editors.
	 *
	 * @since bureaucrat 1.0
	 *
	 * @return void
	 */
	function bureaucrat_editor_style() {
		add_editor_style( get_parent_theme_file_uri( 'assets/css/editor-style.css' ) );
	}
endif;
add_action( 'after_setup_theme', 'bureaucrat_editor_style' );

// Enqueues style.css on the front.
if ( ! function_exists( 'bureaucrat_enqueue_styles' ) ) :
	/**
	 * Enqueues style.css on the front.
	 *
	 * @since bureaucrat 1.0
	 *
	 * @return void
	 */
	function bureaucrat_enqueue_styles() {
		wp_enqueue_style(
			'bureaucrat-style',
			get_parent_theme_file_uri( 'style.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'bureaucrat_enqueue_styles' );

// Registers custom block styles.
if ( ! function_exists( 'bureaucrat_block_styles' ) ) :
	/**
	 * Registers custom block styles.
	 *
	 * @since bureaucrat 1.0
	 *
	 * @return void
	 */
	function bureaucrat_block_styles() {
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'bureaucrat' ),
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
	}
endif;
add_action( 'init', 'bureaucrat_block_styles' );

//adds scripts
function bureaucrat_enqueue_scripts() {
	wp_enqueue_script( 
		'bureaucrat-sticky-top',
		get_parent_theme_file_uri( 'assets/scripts/sticky-top.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'bureaucrat_enqueue_scripts' );

// Registers pattern categories.
if ( ! function_exists( 'bureaucrat_pattern_categories' ) ) :
	/**
	 * Registers pattern categories.
	 *
	 * @since bureaucrat 1.0
	 *
	 * @return void
	 */
	function bureaucrat_pattern_categories() {

		register_block_pattern_category(
			'bureaucrat_page',
			array(
				'label'       => __( 'Pages', 'bureaucrat' ),
				'description' => __( 'A collection of full page layouts.', 'bureaucrat' ),
			)
		);

		register_block_pattern_category(
			'bureaucrat_post-format',
			array(
				'label'       => __( 'Post formats', 'bureaucrat' ),
				'description' => __( 'A collection of post format patterns.', 'bureaucrat' ),
			)
		);
	}
endif;
add_action( 'init', 'bureaucrat_pattern_categories' );

// Registers block binding sources.
if ( ! function_exists( 'bureaucrat_register_block_bindings' ) ) :
	/**
	 * Registers the post format block binding source.
	 *
	 * @since bureaucrat 1.0
	 *
	 * @return void
	 */
	function bureaucrat_register_block_bindings() {
		register_block_bindings_source(
			'bureaucrat/format',
			array(
				'label'              => _x( 'Post format name', 'Label for the block binding placeholder in the editor', 'bureaucrat' ),
				'get_value_callback' => 'bureaucrat_format_binding',
			)
		);
	}
endif;
add_action( 'init', 'bureaucrat_register_block_bindings' );

// Registers block binding callback function for the post format name.
if ( ! function_exists( 'bureaucrat_format_binding' ) ) :
	/**
	 * Callback function for the post format name block binding source.
	 *
	 * @since bureaucrat 1.0
	 *
	 * @return string|void Post format name, or nothing if the format is 'standard'.
	 */
	function bureaucrat_format_binding() {
		$post_format_slug = get_post_format();

		if ( $post_format_slug && 'standard' !== $post_format_slug ) {
			return get_post_format_string( $post_format_slug );
		}
	}
endif;


