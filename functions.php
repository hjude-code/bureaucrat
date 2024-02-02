<?php

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
        'core/media-text',
        array(
            'handle' => 'bureaucrat-media-text-style',
            'src'    => get_parent_theme_file_uri( 'assets/css/media-text.css' ),
            'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
            'path'   => get_parent_theme_file_path( 'assets/css/media-text.css' ),
        )
    );  

    wp_enqueue_block_style(
        'core/buttons',
        array(
            'handle' => 'bureaucrat-button-style',
            'src'    => get_parent_theme_file_uri( 'assets/css/buttons.css' ),
            'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
            'path'   => get_parent_theme_file_path( 'assets/css/buttons.css' ),
        )
    ); 
    
    wp_enqueue_block_style(
        'core/social-links',
        array(
            'handle' => 'bureaucratsocial-links-style',
            'src'    => get_parent_theme_file_uri( 'assets/css/social-links.css' ),
            'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
            'path'   => get_parent_theme_file_path( 'assets/css/social-links.css' ),
        )
    ); 

    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'init', 'bureaucrat_block_stylesheets' );