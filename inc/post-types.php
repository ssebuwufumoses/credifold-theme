<?php
defined( 'ABSPATH' ) || exit;

function credifold_register_post_types() {

    // ── Services ──────────────────────────────────────────────
    register_post_type( 'cf_service', [
        'labels' => [
            'name'          => __( 'Services', 'credifold' ),
            'singular_name' => __( 'Service', 'credifold' ),
            'add_new_item'  => __( 'Add New Service', 'credifold' ),
            'edit_item'     => __( 'Edit Service', 'credifold' ),
        ],
        'public'        => true,
        'has_archive'   => true,
        'show_in_rest'  => true,
        'menu_icon'     => 'dashicons-shield',
        'menu_position' => 5,
        'supports'      => [ 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ],
        'rewrite'       => [ 'slug' => 'services' ],
    ] );

    // ── Case Studies ───────────────────────────────────────────
    register_post_type( 'cf_case', [
        'labels' => [
            'name'          => __( 'Case Studies', 'credifold' ),
            'singular_name' => __( 'Case Study', 'credifold' ),
            'add_new_item'  => __( 'Add New Case Study', 'credifold' ),
        ],
        'public'        => true,
        'has_archive'   => true,
        'show_in_rest'  => true,
        'menu_icon'     => 'dashicons-portfolio',
        'menu_position' => 6,
        'supports'      => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
        'rewrite'       => [ 'slug' => 'case-studies' ],
    ] );

    // ── Testimonials ──────────────────────────────────────────
    register_post_type( 'cf_testimonial', [
        'labels' => [
            'name'          => __( 'Testimonials', 'credifold' ),
            'singular_name' => __( 'Testimonial', 'credifold' ),
            'add_new_item'  => __( 'Add New Testimonial', 'credifold' ),
        ],
        'public'        => false,
        'show_ui'       => true,
        'show_in_rest'  => true,
        'menu_icon'     => 'dashicons-format-quote',
        'menu_position' => 7,
        'supports'      => [ 'title', 'editor' ],
    ] );

    // ── FAQs ──────────────────────────────────────────────────
    register_post_type( 'cf_faq', [
        'labels' => [
            'name'          => __( 'FAQs', 'credifold' ),
            'singular_name' => __( 'FAQ', 'credifold' ),
            'add_new_item'  => __( 'Add New FAQ', 'credifold' ),
        ],
        'public'        => false,
        'show_ui'       => true,
        'show_in_rest'  => true,
        'menu_icon'     => 'dashicons-editor-help',
        'menu_position' => 8,
        'supports'      => [ 'title', 'editor' ],
    ] );
}
add_action( 'init', 'credifold_register_post_types' );

// Service Category taxonomy
function credifold_register_taxonomies() {
    register_taxonomy( 'service_category', 'cf_service', [
        'labels'       => [ 'name' => 'Service Categories', 'singular_name' => 'Service Category' ],
        'hierarchical' => true,
        'show_in_rest' => true,
        'rewrite'      => [ 'slug' => 'service-category' ],
    ] );

    register_taxonomy( 'case_type', 'cf_case', [
        'labels'       => [ 'name' => 'Case Types', 'singular_name' => 'Case Type' ],
        'hierarchical' => true,
        'show_in_rest' => true,
        'rewrite'      => [ 'slug' => 'case-type' ],
    ] );
}
add_action( 'init', 'credifold_register_taxonomies' );
