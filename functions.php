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
        'core/group',
        array(
            'name'=> 'preview-pane',
            'label'=> __( 'preview-pane', 'bureaucrat' ),
        )
    );
    register_block_style(
        'core/group',
        array(
            'name'=> 'gridded',
            'label'=> __( 'gridded', 'bureaucrat' ),
        )
    );
    register_block_style(
        'core/group',
        array(
            'name'=> 'collapse-mobile',
            'label'=> __( 'collapse-mobile', 'bureaucrat' ),
        )
    );
    register_block_style(
        'core/cover',
        array(
            'name'=> 'link-cover',
            'label'=> __( 'link', 'bureaucrat' ),
        )
    );
    register_block_style(
        'core/details',
        array(
            'name'=> 'right-icon',
            'label'=> __( 'right-icon', 'bureaucrat' ),
        )
    );
    register_block_style(
        'core/site-logo',
        array(
            'name'=> 'boxed',
            'label'=> __( 'boxed', 'bureaucrat' ),
        )
    );
    register_block_style(
        'core/heading',
        array(
            'name'=> 'ruled',
            'label'=> __( 'ruled', 'bureaucrat' ),
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
        'core/details',
        array(
            'handle' => 'bureaucrat-details-style',
            'src'    => get_parent_theme_file_uri( 'assets/css/details.css' ),
            'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
            'path'   => get_parent_theme_file_path( 'assets/css/details.css' ),
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
        'core/separator',
        array(
            'handle' => 'bureaucrat-separator-style',
            'src'    => get_parent_theme_file_uri( 'assets/css/separator.css' ),
            'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
            'path'   => get_parent_theme_file_path( 'assets/css/separator.css' ),
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
        'core/spacer',
        array(
            'handle' => 'bureaucrat-spacer-style',
            'src'    => get_parent_theme_file_uri( 'assets/css/spacer.css' ),
            'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
            'path'   => get_parent_theme_file_path( 'assets/css/spacer.css' ),
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
        'core/post-featured-image',
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
    wp_enqueue_block_style(
        'core/social-links',
        array(
            'handle' => 'bureaucrat-social-links-style',
            'src'    => get_parent_theme_file_uri( 'assets/css/social-links.css' ),
            'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
            'path'   => get_parent_theme_file_path( 'assets/css/social-links.css' ),
        )
    );
    wp_enqueue_block_style(
        'core/button',
        array(
            'handle' => 'bureaucrat-button-style',
            'src'    => get_parent_theme_file_uri( 'assets/css/button.css' ),
            'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
            'path'   => get_parent_theme_file_path( 'assets/css/button.css' ),
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

    wp_enqueue_script(
		'offset-text',
		get_parent_theme_file_uri( 'assets/script/offset-text.js' ),
		array(),
		'1.0',
		true
	);
    wp_enqueue_script(
		'cover-link',
		get_parent_theme_file_uri( 'assets/script/cover-link.js' ),
		array(),
		'1.0',
		true
	);
}
add_action('wp_enqueue_scripts', 'bureaucrat_scripts');
?>