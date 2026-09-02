<?php

add_action( 'after_setup_theme', function () {
    add_theme_support( 'title-tag' );
    add_theme_support( 'html5', [ 'style', 'script' ] );
    add_theme_support( 'custom-logo' );

    register_nav_menus( [
        'primary' => __( 'Menu Principal', 'celeste' ),
    ] );
} );

add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'celeste-fonts',
        'https://fonts.googleapis.com/css2?family=Belleza&family=Inter:wght@400;600;700&family=Montserrat:wght@400;700&family=Rajdhani:wght@300;400;600&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'celeste-main',
        get_template_directory_uri() . '/assets/css/main.css',
        [ 'celeste-fonts' ],
        wp_get_theme()->get( 'Version' )
    );

    wp_enqueue_script(
        'celeste-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        wp_get_theme()->get( 'Version' ),
        true // carrega no footer
    );
} );

// Adiciona defer no script para não bloquear a renderização
add_filter( 'script_loader_tag', function ( $tag, $handle ) {
    if ( 'celeste-main' !== $handle ) {
        return $tag;
    }
    return str_replace( ' src', ' defer src', $tag );
}, 10, 2 );
