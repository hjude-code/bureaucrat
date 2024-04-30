<?php

function hjudesite_block_styles() {
    register_block_style(
        'core/column',
        array(
            'name'=> 'sticky-column',
            'label'=> __( 'sticky', 'bureaucrat' ),
        )
    );
    register_block_style(
        'core/site-logo',
        array(
            'name'=> 'invert',
            'label'=> __( 'invert', 'bureaucrat' ),
        )
    );
    register_block_style(
        'core/column',
        array(
            'name'=> 'sticky-column-desktop',
            'label'=> __( 'sticky-desktop', 'bureaucrat' ),
        )
    );
    register_block_style(
        'core/cover',
        array(
            'name'=> 'full-bleed',
            'label'=> __( 'full-bleed', 'bureaucrat' ),
        )
    );
    register_block_style(
        'core/post-featured-image',
        array(
            'name'=> 'full-bleed',
            'label'=> __( 'full-bleed', 'bureaucrat' ),
        )
    );
    register_block_style(
        'core/navigation',
        array(
            'name'=> 'primary-navigation',
            'label'=> __( 'primary', 'bureaucrat' ),
        )
    );
    register_block_style(
        'core/image',
        array(
            'name'=> 'peakaboo',
            'label'=> __( 'peakaboo', 'bureaucrat' ),
        )
    );
    register_block_style(
        'core/list',
        array(
            'name'=> 'cell-list',
            'label'=> __( 'cell', 'bureaucrat' ),
        )
    );
}


add_action( 'init', 'hjudesite_block_styles' );

function bureaucrat_block_stylesheets() {

    wp_enqueue_block_style(
        'core/columns',
        array(
            'handle' => 'bureaucrat-columns-style',
            'src'    => get_parent_theme_file_uri( 'assets/css/columns.css' ),
            'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
            'path'   => get_parent_theme_file_path( 'assets/css/columns.css' ),
        )
    );

    wp_enqueue_block_style(
        'core/site-logo',
        array(
            'handle' => 'bureaucrat-site-logo-style',
            'src'    => get_parent_theme_file_uri( 'assets/css/site-logo.css' ),
            'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
            'path'   => get_parent_theme_file_path( 'assets/css/site-logo.css' ),
        )
    );
    wp_enqueue_block_style(
        'core/image',
        array(
            'handle' => 'bureaucrat-image-style',
            'src'    => get_parent_theme_file_uri( 'assets/css/image.css' ),
            'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
            'path'   => get_parent_theme_file_path( 'assets/css/image.css' ),
        )
    ); 

    wp_enqueue_block_style(
        'core/cover',
        array(
            'handle' => 'bureaucrat-cover-style',
            'src'    => get_parent_theme_file_uri( 'assets/css/cover.css' ),
            'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
            'path'   => get_parent_theme_file_path( 'assets/css/cover.css' ),
        )
    );

    wp_enqueue_block_style(
        'core/list',
        array(
            'handle' => 'bureaucrat-list-style',
            'src'    => get_parent_theme_file_uri( 'assets/css/list.css' ),
            'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
            'path'   => get_parent_theme_file_path( 'assets/css/list.css' ),
        )
    ); 

    wp_enqueue_block_style(
        'core/navigation',
        array(
            'handle' => 'bureaucrat-navigation-style',
            'src'    => get_parent_theme_file_uri( 'assets/css/navigation.css' ),
            'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
            'path'   => get_parent_theme_file_path( 'assets/css/navigation.css' ),
        )
    );

    wp_enqueue_block_style(
        'core/query-pagination',
        array(
            'handle' => 'bureaucrat-query-pagination-style',
            'src'    => get_parent_theme_file_uri( 'assets/css/query-pagination.css' ),
            'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
            'path'   => get_parent_theme_file_path( 'assets/css/query-pagination.css' ),
        )
    );
    wp_enqueue_block_style(
        'core/post-template',
        array(
            'handle' => 'bureaucrat-post-template-style',
            'src'    => get_parent_theme_file_uri( 'assets/css/post-template.css' ),
            'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
            'path'   => get_parent_theme_file_path( 'assets/css/post-template.css' ),
        )
    );  

    // Add support for block styles.
   add_theme_support( 'wp-block-styles' );

   // Enqueue editor styles.
   add_editor_style( 'style.css' );

    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'init', 'bureaucrat_block_stylesheets' );


function bureaucrat_scripts() {
    wp_enqueue_script(
		'navigation-spacing',
		get_parent_theme_file_uri( 'assets/script/navigation-offset.js' ),
		array(),
		'1.0',
		true
	);

    wp_enqueue_script(
		'image-peak',
		get_parent_theme_file_uri( 'assets/script/image-peak.js' ),
		array(),
		'1.0',
		true
	);
}
add_action('wp_enqueue_scripts', 'bureaucrat_scripts');
?>