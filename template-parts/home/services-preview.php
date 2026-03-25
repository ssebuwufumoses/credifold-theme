<?php
// Service icons mapped by slug/title keywords
function cf_service_icon( $title ) {
  $t = strtolower( $title );
  if ( str_contains($t,'property') || str_contains($t,'land') ) return '<path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9,22 9,12 15,12 15,22"/>';
  if ( str_contains($t,'corporate') || str_contains($t,'due') ) return '<rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/>';
  if ( str_contains($t,'background') || str_contains($t,'screen') ) return '<path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/>';
  if ( str_contains($t,'marital') || str_contains($t,'relation') ) return '<path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/>';
  if ( str_contains($t,'surveil') ) return '<circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>';
  if ( str_contains($t,'fraud') || str_contains($t,'insurance') ) return '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>';
  if ( str_contains($t,'asset') ) return '<line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/>';
  if ( str_contains($t,'missing') || str_contains($t,'person') ) return '<circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/>';
  if ( str_contains($t,'cyber') || str_contains($t,'digital') ) return '<rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/>';
  if ( str_contains($t,'kyc') || str_contains($t,'verif') ) return '<path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/>';
  if ( str_contains($t,'diaspora') || str_contains($t,'investment') ) return '<circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/>';
  // Default
  return '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>';
}

$services = get_posts( [
  'post_type'      => 'cf_service',
  'posts_per_page' => 6,
  'meta_key'       => 'service_featured',
  'meta_value'     => '1',
  'orderby'        => 'meta_value_num',
  'meta_key'       => 'service_order',
] );

// Fallback if no featured services yet
if ( empty( $services ) ) {
  $services = get_posts( [ 'post_type' => 'cf_service', 'posts_per_page' => 6, 'orderby' => 'menu_order' ] );
}
?>

<section class="section" id="services" aria-labelledby="services-heading">
  <div class="container">

    <div class="section-header--center fade-up">
      <div class="section-eyebrow">What We Do</div>
      <h2 class="section-title h2" id="services-heading">Investigations Tailored to Your Situation</h2>
      <p class="section-desc">From land fraud to corporate threats — we operate with absolute discretion across Uganda and internationally.</p>
    </div>

    <?php if ( $services ) : ?>
      <div class="services-grid">
        <?php foreach ( $services as $i => $service ) :
          $tagline = get_field( 'service_tagline', $service->ID ) ?: get_the_excerpt( $service );
        ?>
          <a href="<?php echo esc_url( get_permalink( $service->ID ) ); ?>"
             class="service-card fade-up fade-up--delay-<?php echo min( $i + 1, 5 ); ?>"
             aria-label="<?php echo esc_attr( $service->post_title ); ?>">
            <div class="service-card__inner">
              <div class="service-card__icon">
                <svg viewBox="0 0 24 24" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                  <?php echo cf_service_icon( $service->post_title ); // phpcs:ignore ?>
                </svg>
              </div>
              <h3 class="service-card__title"><?php echo esc_html( $service->post_title ); ?></h3>
              <p class="service-card__desc"><?php echo esc_html( wp_trim_words( $tagline ?: $service->post_content, 18, '…' ) ); ?></p>
              <span class="service-card__arrow">
                Learn more
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </span>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    <?php else : ?>
      <!-- Placeholder cards — replace once services are added in WP admin -->
      <div class="services-grid">
        <?php
        $placeholders = [
          [ 'Property & Land Verification',     'We investigate fraudulent land transfers, title disputes, and property mismanagement across Uganda.' ],
          [ 'Diaspora Investment Protection',    'Protect your investments from abroad. We monitor assets, agents, and business activities on your behalf.' ],
          [ 'Corporate Due Diligence',           'Verify potential partners, directors, and suppliers before you sign any agreement.' ],
          [ 'Employee Background Screening',     'Comprehensive vetting for domestic staff, executives, and field personnel.' ],
          [ 'Marital & Relationship Investigations', 'Discreet, evidence-based investigations for personal matters requiring clarity.' ],
          [ 'Fraud Investigation',               'From insurance fraud to financial scams — we uncover deception with documented evidence.' ],
        ];
        foreach ( $placeholders as $i => $p ) : ?>
          <div class="service-card fade-up fade-up--delay-<?php echo min($i+1,5); ?>">
            <div class="service-card__inner">
              <div class="service-card__icon">
                <svg viewBox="0 0 24 24" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                </svg>
              </div>
              <h3 class="service-card__title"><?php echo esc_html( $p[0] ); ?></h3>
              <p class="service-card__desc"><?php echo esc_html( $p[1] ); ?></p>
              <span class="service-card__arrow">
                Coming soon
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </span>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <div style="text-align:center; margin-top: var(--sp-6);" class="fade-up">
      <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn-navy">
        View All Services
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>

  </div>
</section>
