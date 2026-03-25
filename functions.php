<?php
defined( 'ABSPATH' ) || exit;

define( 'CF_THEME_VERSION', '1.0.0' );
define( 'CF_THEME_DIR', get_template_directory() );
define( 'CF_THEME_URI', get_template_directory_uri() );

require_once CF_THEME_DIR . '/inc/enqueue.php';
require_once CF_THEME_DIR . '/inc/menus.php';
require_once CF_THEME_DIR . '/inc/post-types.php';
require_once CF_THEME_DIR . '/inc/scf-fields.php';
require_once CF_THEME_DIR . '/inc/ajax.php';

function credifold_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ] );
    add_theme_support( 'custom-logo', [
        'height'      => 60,
        'width'       => 240,
        'flex-width'  => true,
        'flex-height' => true,
    ] );
    add_theme_support( 'align-wide' );
    add_image_size( 'cf-hero',     1920, 1080, true );
    add_image_size( 'cf-card',      800,  600, true );
    add_image_size( 'cf-thumb',     400,  300, true );
    load_theme_textdomain( 'credifold', CF_THEME_DIR . '/languages' );
}
add_action( 'after_setup_theme', 'credifold_theme_setup' );

function credifold_content_width() {
    $GLOBALS['content_width'] = 1200;
}
add_action( 'after_setup_theme', 'credifold_content_width', 0 );

// WhatsApp & contact helpers (editable from Customizer)
function cf_whatsapp() {
    return get_theme_mod( 'cf_whatsapp_number', '+256700000000' );
}
function cf_email() {
    return get_theme_mod( 'cf_contact_email', 'info@credifold.com' );
}
function cf_whatsapp_link( $message = '' ) {
    $number  = preg_replace( '/[^0-9]/', '', cf_whatsapp() );
    $encoded = $message ? '?text=' . rawurlencode( $message ) : '';
    return 'https://wa.me/' . $number . $encoded;
}

// Customizer settings
function credifold_customizer( $wp_customize ) {
    $wp_customize->add_section( 'cf_contact', [
        'title'    => __( 'CrediFold Contact', 'credifold' ),
        'priority' => 30,
    ] );
    $wp_customize->add_setting( 'cf_whatsapp_number', [ 'default' => '+256700000000', 'sanitize_callback' => 'sanitize_text_field' ] );
    $wp_customize->add_control( 'cf_whatsapp_number', [ 'label' => 'WhatsApp Number', 'section' => 'cf_contact', 'type' => 'text' ] );
    $wp_customize->add_setting( 'cf_contact_email', [ 'default' => 'info@credifold.com', 'sanitize_callback' => 'sanitize_email' ] );
    $wp_customize->add_control( 'cf_contact_email', [ 'label' => 'Contact Email', 'section' => 'cf_contact', 'type' => 'email' ] );
}
add_action( 'customize_register', 'credifold_customizer' );

// Disable Gutenberg on pages we fully control
function credifold_disable_gutenberg( $use_block_editor, $post ) {
    $classic_templates = [ 'template-request-investigation.php' ];
    if ( $post->post_type === 'page' ) {
        $template = get_page_template_slug( $post->ID );
        if ( in_array( $template, $classic_templates ) ) return false;
    }
    return $use_block_editor;
}
add_filter( 'use_block_editor_for_post', 'credifold_disable_gutenberg', 10, 2 );
