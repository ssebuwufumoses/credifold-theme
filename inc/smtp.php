<?php
/**
 * SMTP configuration — sends via inquiries@credifold.com (Namecheap mail server)
 * Add this constant to wp-config.php:
 *   define( 'CF_SMTP_PASSWORD', 'your-email-password-here' );
 */
add_action( 'phpmailer_init', function ( $phpmailer ) {
    $phpmailer->isSMTP();
    $phpmailer->Host       = 'mail.credifold.com';
    $phpmailer->SMTPAuth   = true;
    $phpmailer->Port       = 465;
    $phpmailer->SMTPSecure = 'ssl';
    $phpmailer->Username   = 'inquiries@credifold.com';
    $phpmailer->Password   = defined( 'CF_SMTP_PASSWORD' ) ? CF_SMTP_PASSWORD : '';
    $phpmailer->From       = 'inquiries@credifold.com';
    $phpmailer->FromName   = 'CrediFold';
} );
