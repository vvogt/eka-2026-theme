<?php

add_action( 'admin_init', function() {
    // Get the front page ID
    $front_page_id = get_option( 'page_on_front' );

    // If we're editing the front page, remove editor support
    if ( isset( $_GET['post'] ) && (int) $_GET['post'] === (int) $front_page_id ) {
        remove_post_type_support( 'page', 'editor' );
    }
} );