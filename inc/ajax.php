<?php
defined( 'ABSPATH' ) || exit;

/**
 * Handle investigation inquiry form submission.
 * Hooked to wp_ajax_cf_submit_inquiry and wp_ajax_nopriv_cf_submit_inquiry.
 */
function cf_handle_inquiry() {
    // Verify nonce
    if ( ! check_ajax_referer( 'cf_nonce', 'nonce', false ) ) {
        wp_send_json_error( 'Security check failed. Please refresh and try again.' );
    }

    // Sanitize inputs
    $service_type   = sanitize_text_field( wp_unslash( $_POST['service_type']     ?? '' ) );
    $urgency        = sanitize_text_field( wp_unslash( $_POST['urgency']           ?? 'normal' ) );
    $situation      = sanitize_textarea_field( wp_unslash( $_POST['situation']     ?? '' ) );
    $contact_method = sanitize_text_field( wp_unslash( $_POST['contact_method']   ?? '' ) );
    $contact_detail = sanitize_text_field( wp_unslash( $_POST['contact_detail']   ?? '' ) );
    $location       = sanitize_text_field( wp_unslash( $_POST['location']         ?? '' ) );
    $preferred_date = sanitize_text_field( wp_unslash( $_POST['preferred_date']   ?? '' ) );
    $preferred_time = sanitize_text_field( wp_unslash( $_POST['preferred_time']   ?? '' ) );
    $client_name    = sanitize_text_field( wp_unslash( $_POST['client_name']      ?? '' ) );

    // Require at minimum a service type and contact detail
    if ( empty( $service_type ) ) {
        wp_send_json_error( 'Please select an investigation type.' );
    }
    if ( empty( $contact_detail ) ) {
        wp_send_json_error( 'Please provide a contact detail so we can reach you.' );
    }

    // Build email to admin
    $admin_email = get_option( 'admin_email' );
    $cf_email    = get_theme_mod( 'cf_contact_email', $admin_email );
    $to          = $cf_email;
    $subject     = sprintf(
        '[CrediFold Inquiry] %s — %s',
        ucfirst( $urgency ),
        ucwords( str_replace( '_', ' ', $service_type ) )
    );

    $body  = "New investigation inquiry received from credifold.com\n";
    $body .= str_repeat( '─', 50 ) . "\n\n";
    $body .= 'Service Type:     ' . ucwords( str_replace( '_', ' ', $service_type ) ) . "\n";
    $body .= 'Urgency:          ' . ucfirst( $urgency ) . "\n";
    $body .= 'Contact Method:   ' . ucfirst( $contact_method ) . "\n";
    $body .= 'Contact Detail:   ' . $contact_detail . "\n";
    $body .= 'Location:         ' . ( $location ?: 'Not provided' ) . "\n";
    $body .= 'Preferred Date:   ' . ( $preferred_date ?: 'Not selected' ) . "\n";
    $body .= 'Preferred Time:   ' . ( $preferred_time ? $preferred_time . ' EAT' : 'Not selected' ) . "\n";
    $body .= 'Name (optional):  ' . ( $client_name ?: 'Not provided' ) . "\n";
    $body .= "\nSituation / Notes:\n";
    $body .= ( $situation ?: 'Not provided' ) . "\n\n";
    $body .= str_repeat( '─', 50 ) . "\n";
    $body .= 'Submitted: ' . current_time( 'Y-m-d H:i:s' ) . " (server time)\n";
    $body .= 'IP: ' . sanitize_text_field( $_SERVER['REMOTE_ADDR'] ?? 'unknown' ) . "\n";

    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'From: CrediFold Website <no-reply@credifold.com>',
    ];

    $sent = wp_mail( $to, $subject, $body, $headers );

    if ( $sent ) {
        // Also save as a custom post for record-keeping (optional, no SCF needed)
        wp_insert_post( [
            'post_type'   => 'cf_inquiry',
            'post_status' => 'private',
            'post_title'  => sprintf( '%s — %s', ucwords( str_replace( '_', ' ', $service_type ) ), current_time( 'Y-m-d H:i' ) ),
            'meta_input'  => [
                'inquiry_service_type'   => $service_type,
                'inquiry_urgency'        => $urgency,
                'inquiry_contact_method' => $contact_method,
                'inquiry_contact_detail' => $contact_detail,
                'inquiry_location'       => $location,
                'inquiry_preferred_date' => $preferred_date,
                'inquiry_preferred_time' => $preferred_time,
                'inquiry_client_name'    => $client_name,
                'inquiry_situation'      => $situation,
                'inquiry_submitted_at'   => current_time( 'mysql' ),
            ],
        ] );

        wp_send_json_success( 'Inquiry received.' );
    } else {
        wp_send_json_error( 'Email delivery failed. Please contact us via WhatsApp.' );
    }
}
add_action( 'wp_ajax_cf_submit_inquiry',        'cf_handle_inquiry' );
add_action( 'wp_ajax_nopriv_cf_submit_inquiry', 'cf_handle_inquiry' );

/**
 * Register cf_inquiry CPT (private, admin-only) for storing inquiry records.
 */
function cf_register_inquiry_cpt() {
    register_post_type( 'cf_inquiry', [
        'label'           => 'Inquiries',
        'public'          => false,
        'show_ui'         => true,
        'show_in_menu'    => true,
        'capability_type' => 'post',
        'supports'        => [ 'title', 'custom-fields' ],
        'menu_icon'       => 'dashicons-email-alt',
    ] );
}
add_action( 'init', 'cf_register_inquiry_cpt' );
