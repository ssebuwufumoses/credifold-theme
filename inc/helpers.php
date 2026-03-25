<?php
defined( 'ABSPATH' ) || exit;

/**
 * Returns the SVG path(s) for a service icon based on the service title.
 */
function cf_service_icon( $title ) {
    $t = strtolower( $title );
    if ( str_contains( $t, 'property' ) || str_contains( $t, 'land' ) )
        return '<path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9,22 9,12 15,12 15,22"/>';
    if ( str_contains( $t, 'corporate' ) || str_contains( $t, 'due' ) )
        return '<rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/>';
    if ( str_contains( $t, 'background' ) || str_contains( $t, 'screen' ) || str_contains( $t, 'employee' ) )
        return '<path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/>';
    if ( str_contains( $t, 'marital' ) || str_contains( $t, 'relation' ) )
        return '<path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/>';
    if ( str_contains( $t, 'surveil' ) )
        return '<circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>';
    if ( str_contains( $t, 'fraud' ) || str_contains( $t, 'insurance' ) || str_contains( $t, 'financial' ) )
        return '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>';
    if ( str_contains( $t, 'asset' ) )
        return '<line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/>';
    if ( str_contains( $t, 'missing' ) || str_contains( $t, 'person' ) )
        return '<circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/>';
    if ( str_contains( $t, 'cyber' ) || str_contains( $t, 'digital' ) )
        return '<rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/>';
    if ( str_contains( $t, 'kyc' ) || str_contains( $t, 'verif' ) || str_contains( $t, 'identity' ) )
        return '<path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/>';
    if ( str_contains( $t, 'diaspora' ) || str_contains( $t, 'investment' ) )
        return '<circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/>';
    return '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>';
}
