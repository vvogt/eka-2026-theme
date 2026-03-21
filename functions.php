<?php

add_action( 'admin_init', function() {
    // Get the front page ID
    $front_page_id = get_option( 'page_on_front' );

    // If we're editing the front page, remove editor support
    if ( isset( $_GET['post'] ) && (int) $_GET['post'] === (int) $front_page_id ) {
        remove_post_type_support( 'page', 'editor' );
    }
} );

/* ENABLE APPEARANCE > MENUS */
add_theme_support( 'menus' );
register_nav_menus( [
    'primary' => __( 'Primary Menu' ),
    'footer'  => __( 'Footer Menu' ),
] );

/* ENQUEUE SCRIPTS */
function mytheme_enqueue_scripts() {
    wp_enqueue_script(
        'medendi-app',
        get_template_directory_uri() . '/app.js',
        [],
        filemtime( get_template_directory() . '/app.js' ),
        true
    );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_scripts' );