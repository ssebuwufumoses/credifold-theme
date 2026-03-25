<?php
defined( 'ABSPATH' ) || exit;

function credifold_register_menus() {
    register_nav_menus( [
        'primary'  => __( 'Primary Navigation', 'credifold' ),
        'footer'   => __( 'Footer Navigation', 'credifold' ),
        'services' => __( 'Services Menu', 'credifold' ),
    ] );
}
add_action( 'init', 'credifold_register_menus' );
