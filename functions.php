<?php

function hjudesite_block_styles() {
    register_block_style(
        'core/cover',
        array(
            'name'=> 'feature',
            'label'=> __( 'feature', 'bureaucrat' ),
        )
    );
    register_block_style(
        'core/cover',
        array(
            'name'=> 'link',
            'label'=> __( 'link', 'bureaucrat' ),
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
        'core/heading',
        array(
            'name'=> 'offset',
            'label'=> __( 'offset', 'bureaucrat' ),
        )
    );
}

add_action( 'init', 'hjudesite_block_styles' );


function bureaucrat_block_scripts(){
    wp_enqueue_script(
		'navigation-spacing',
		get_parent_theme_file_uri( 'assets/scripts/navigation-spacing.js' ),
		array(),
		'1.0',
		true
	);

    wp_enqueue_script(
		'cover-hero',
		get_parent_theme_file_uri( 'assets/scripts/cover-hero.js' ),
		array(),
		'1.0',
		true
	);

    wp_enqueue_script(
		'offset-text',
		get_parent_theme_file_uri( 'assets/scripts/offset-text.js' ),
		array(),
		'1.0',
		true
	);

    wp_enqueue_script(
		'image-peak',
		get_parent_theme_file_uri( 'assets/scripts/image-peak.js' ),
		array(),
		'1.0',
		true
	);
}
add_action('wp_enqueue_scripts','bureaucrat_block_scripts');



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
        'core/heading',
        array(
            'handle' => 'bureaucrat-heading-style',
            'src'    => get_parent_theme_file_uri( 'assets/css/heading.css' ),
            'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
            'path'   => get_parent_theme_file_path( 'assets/css/heading.css' ),
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

    wp_enqueue_block_style(
        'core/group',
        array(
            'handle' => 'bureaucrat-group-style',
            'src'    => get_parent_theme_file_uri( 'assets/css/group.css' ),
            'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
            'path'   => get_parent_theme_file_path( 'assets/css/group.css' ),
        )
    ); 

    wp_enqueue_block_style(
        'core/query',
        array(
            'handle' => 'bureaucrat-query-style',
            'src'    => get_parent_theme_file_uri( 'assets/css/query.css' ),
            'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
            'path'   => get_parent_theme_file_path( 'assets/css/query.css' ),
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
        'core/image',
        array(
            'handle' => 'bureaucrat-image-style',
            'src'    => get_parent_theme_file_uri( 'assets/css/image.css' ),
            'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
            'path'   => get_parent_theme_file_path( 'assets/css/image.css' ),
        )
    ); 

    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'init', 'bureaucrat_block_stylesheets' );


//add video field 

