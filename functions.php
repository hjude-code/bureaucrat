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