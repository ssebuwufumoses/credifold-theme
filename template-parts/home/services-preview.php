<?php
$services = get_posts( [
  'post_type'      => 'cf_service',
  'posts_per_page' => 6,
  'orderby'        => 'meta_value_num',
  'meta_key'       => 'service_order',
  'meta_query'     => [ [ 'key' => 'service_featured', 'value' => '1' ] ],
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
