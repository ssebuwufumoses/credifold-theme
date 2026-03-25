<?php get_header(); ?>

<main class="main-content" style="padding-top: var(--nav-height);">

  <!-- Hero -->
  <div class="page-hero">
    <div class="page-hero__inner container">
      <div class="section-eyebrow" style="justify-content:center;">What We Do</div>
      <h1 class="page-hero__title display-2">Our Investigation Services</h1>
      <p class="page-hero__desc text-xl">Every case is different. Every investigation is handled with absolute discretion, documented evidence, and a clear result.</p>
    </div>
  </div>

  <!-- Trust strip -->
  <div style="background:var(--cf-navy-deep); border-bottom:1px solid rgba(201,168,76,0.15); padding:var(--sp-3) 0;">
    <div class="container" style="display:flex; align-items:center; justify-content:center; gap:var(--sp-6); flex-wrap:wrap;">
      <?php foreach ( [
        [ '500+', 'Cases Handled' ],
        [ '100%', 'Confidential'  ],
        [ '24hrs', 'Response Time' ],
        [ '12+',  'Service Types' ],
      ] as $s ) : ?>
        <div style="text-align:center;">
          <span style="font-family:var(--font-heading); font-size:1.5rem; color:var(--cf-gold); display:block; line-height:1;"><?php echo esc_html( $s[0] ); ?></span>
          <span style="font-size:0.75rem; color:rgba(232,232,244,0.5); text-transform:uppercase; letter-spacing:0.1em;"><?php echo esc_html( $s[1] ); ?></span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- Services grid -->
  <div class="section container">

    <?php
    $all_services = get_posts( [
      'post_type'      => 'cf_service',
      'posts_per_page' => -1,
      'orderby'        => 'meta_value_num',
      'meta_key'       => 'service_order',
      'order'          => 'ASC',
    ] );

    if ( $all_services ) : ?>
      <div class="services-grid services-grid--archive">
        <?php foreach ( $all_services as $i => $service ) :
          $tagline  = get_field( 'service_tagline', $service->ID );
          $price    = get_field( 'service_price', $service->ID );
          $turnaround = get_field( 'service_turnaround', $service->ID );
        ?>
          <a href="<?php echo esc_url( get_permalink( $service->ID ) ); ?>"
             class="service-card fade-up fade-up--delay-<?php echo min( ( $i % 3 ) + 1, 5 ); ?>"
             aria-label="<?php echo esc_attr( $service->post_title ); ?>">
            <div class="service-card__inner">
              <div class="service-card__icon">
                <svg viewBox="0 0 24 24" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                  <?php echo cf_service_icon( $service->post_title ); // phpcs:ignore ?>
                </svg>
              </div>
              <h2 class="service-card__title"><?php echo esc_html( $service->post_title ); ?></h2>
              <p class="service-card__desc"><?php echo esc_html( wp_trim_words( $tagline ?: get_the_excerpt( $service->ID ), 20, '…' ) ); ?></p>
              <?php if ( $price || $turnaround ) : ?>
                <div class="service-card__meta">
                  <?php if ( $turnaround ) : ?>
                    <span>
                      <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12,6 12,12 16,14"/></svg>
                      <?php echo esc_html( $turnaround ); ?>
                    </span>
                  <?php endif; ?>
                  <?php if ( $price ) : ?>
                    <span>
                      <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                      <?php echo esc_html( $price ); ?>
                    </span>
                  <?php endif; ?>
                </div>
              <?php endif; ?>
              <span class="service-card__arrow">
                Learn more
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </span>
            </div>
          </a>
        <?php endforeach; ?>
      </div>

    <?php else : ?>

      <!-- No services added yet — placeholder grid -->
      <div class="services-grid services-grid--archive">
        <?php
        $placeholders = [
          [ 'Property & Land Verification',      'We investigate fraudulent land transfers, title disputes, and property mismanagement across Uganda.' ],
          [ 'Diaspora Investment Protection',     'Protect your investments from abroad. We monitor assets, agents, and businesses on your behalf.' ],
          [ 'Corporate Due Diligence',            'Verify potential partners, directors, and suppliers before you sign any agreement.' ],
          [ 'Employee Background Screening',      'Comprehensive vetting for domestic staff, executives, and field personnel.' ],
          [ 'Marital & Relationship Investigations', 'Discreet, evidence-based investigations for personal matters requiring clarity.' ],
          [ 'Fraud & Financial Investigation',    'From insurance fraud to financial scams — we uncover deception with documented evidence.' ],
          [ 'Missing Person Investigation',       'Locate missing individuals through field intelligence, records analysis, and network contacts.' ],
          [ 'Cyber & Digital Investigation',      'Uncover digital fraud, fake identities, online scams, and social media impersonation.' ],
          [ 'KYC & Identity Verification',        'Confirm the identity and background of individuals before entering any business relationship.' ],
          [ 'Surveillance Operations',            'Discreet physical surveillance with documented photographic and video evidence.' ],
          [ 'Asset Tracing',                      'Locate hidden assets, undisclosed property, and financial holdings in legal or personal disputes.' ],
          [ 'Insurance Fraud Investigation',      'Investigate suspected fraudulent insurance claims with documented, court-ready evidence.' ],
        ];
        foreach ( $placeholders as $i => $p ) : ?>
          <div class="service-card fade-up fade-up--delay-<?php echo min( ( $i % 3 ) + 1, 5 ); ?>">
            <div class="service-card__inner">
              <div class="service-card__icon">
                <svg viewBox="0 0 24 24" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                  <?php echo cf_service_icon( $p[0] ); // phpcs:ignore ?>
                </svg>
              </div>
              <h2 class="service-card__title"><?php echo esc_html( $p[0] ); ?></h2>
              <p class="service-card__desc"><?php echo esc_html( $p[1] ); ?></p>
              <span class="service-card__arrow">
                Learn more
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </span>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

    <?php endif; ?>
  </div>

  <!-- Bottom CTA -->
  <div class="section section--navy" style="text-align:center;">
    <div class="container" style="max-width:640px;">
      <div class="section-eyebrow" style="justify-content:center;">Not sure which service you need?</div>
      <h2 class="h2" style="color:var(--cf-white); margin-bottom:var(--sp-2);">Describe your situation — we'll advise.</h2>
      <p style="color:rgba(232,232,244,0.6); margin-bottom:var(--sp-5); line-height:1.75;">Many cases span multiple service types. Submit a free confidential inquiry and we will tell you exactly what you need.</p>
      <div style="display:flex; gap:var(--sp-2); justify-content:center; flex-wrap:wrap;">
        <a href="<?php echo esc_url( home_url( '/request-investigation' ) ); ?>" class="btn btn-primary btn-lg">
          Start a Free Inquiry
        </a>
        <a href="<?php echo esc_url( cf_whatsapp_link( 'Hello, I need help choosing the right investigation service.' ) ); ?>"
           class="btn btn-whatsapp btn-lg" target="_blank" rel="noopener">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          Ask on WhatsApp
        </a>
      </div>
    </div>
  </div>

</main>

<?php get_footer(); ?>
