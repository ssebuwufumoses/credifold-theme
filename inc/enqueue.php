<?php
defined( 'ABSPATH' ) || exit;

function credifold_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style(
        'cf-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=DM+Serif+Display:ital@0;1&display=swap',
        [],
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'credifold-main',
        CF_THEME_URI . '/assets/css/main.css',
        [ 'cf-google-fonts' ],
        CF_THEME_VERSION
    );

    // Main JS
    wp_enqueue_script(
        'credifold-main',
        CF_THEME_URI . '/assets/js/main.js',
        [],
        CF_THEME_VERSION,
        true
    );

    // Pass PHP data to JS
    wp_localize_script( 'credifold-main', 'cfData', [
        'ajaxUrl'    => admin_url( 'admin-ajax.php' ),
        'nonce'      => wp_create_nonce( 'cf_nonce' ),
        'whatsapp'   => cf_whatsapp_link( 'Hello, I would like to request an investigation.' ),
        'siteUrl'    => get_site_url(),
    ] );
}
add_action( 'wp_enqueue_scripts', 'credifold_enqueue_assets' );

// Remove default block styles we don't need
function credifold_dequeue_block_styles() {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'global-styles' );
}
add_action( 'wp_enqueue_scripts', 'credifold_dequeue_block_styles', 100 );
