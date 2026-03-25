<?php
/**
 * Template Name: About
 */
get_header();
?>

<main class="main-content">

  <!-- Hero -->
  <div class="page-hero">
    <div class="page-hero__inner container">
      <div class="section-eyebrow" style="justify-content:center;">Who We Are</div>
      <h1 class="page-hero__title display-2">Uganda's Trusted Private Intelligence Operator</h1>
      <p class="page-hero__desc text-xl">Discreet. Evidence-based. Results-driven. Built for those who need the truth — and can't afford to be wrong.</p>
    </div>
  </div>

  <!-- Mission statement -->
  <section class="section">
    <div class="container">
      <div class="about-mission">
        <div class="about-mission__text fade-up">
          <div class="section-eyebrow">Our Mission</div>
          <h2 class="h2 about-mission__title">We Exist to Give People the Truth They Deserve</h2>
          <p class="about-mission__body">CrediFold was founded on a simple principle: in Uganda — and across the diaspora — too many people are making life-changing decisions without verified information. Land is bought without title checks. Business partners are trusted without background verification. Families are torn apart by unanswered questions.</p>
          <p class="about-mission__body">We bridge that gap. Using field intelligence, document analysis, surveillance, and a deep network across Uganda, we deliver documented, actionable results — handled with the discretion every case demands.</p>
        </div>
        <div class="about-mission__visual fade-up fade-up--delay-2">
          <div class="about-stat-card">
            <div class="about-stat-card__item">
              <span class="about-stat-card__num">500+</span>
              <span class="about-stat-card__label">Cases Completed</span>
            </div>
            <div class="about-stat-card__item">
              <span class="about-stat-card__num">100%</span>
              <span class="about-stat-card__label">Confidentiality Rate</span>
            </div>
            <div class="about-stat-card__item">
              <span class="about-stat-card__num">12+</span>
              <span class="about-stat-card__label">Service Specialisations</span>
            </div>
            <div class="about-stat-card__item">
              <span class="about-stat-card__num">24hrs</span>
              <span class="about-stat-card__label">Average First Response</span>
            </div>
            <div class="about-stat-card__shield" aria-hidden="true">
              <svg viewBox="0 0 100 115" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M50 0L5 18V52C5 78 25 101 50 108C75 101 95 78 95 52V18L50 0Z" fill="url(#shield-grad)" stroke="rgba(201,168,76,0.3)" stroke-width="1"/>
                <defs>
                  <linearGradient id="shield-grad" x1="50" y1="0" x2="50" y2="108" gradientUnits="userSpaceOnUse">
                    <stop offset="0%" stop-color="#1A2D7C" stop-opacity="0.6"/>
                    <stop offset="100%" stop-color="#0F1A4A" stop-opacity="0.3"/>
                  </linearGradient>
                </defs>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- What sets us apart -->
  <section class="section section--light">
    <div class="container">
      <div class="section-header--center fade-up">
        <div class="section-eyebrow">Why CrediFold</div>
        <h2 class="section-title h2">What Makes Us Different</h2>
        <p class="section-desc">Private investigation in Uganda is largely unregulated. We hold ourselves to a standard far above the market.</p>
      </div>
      <div class="about-pillars">
        <?php
        $pillars = [
          [
            'icon'  => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
            'title' => 'Absolute Confidentiality',
            'body'  => 'Every engagement is governed by a signed confidentiality agreement. Your identity, your case details, and our findings are never disclosed — to anyone — without your written consent.',
          ],
          [
            'icon'  => '<path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14,2 14,8 20,8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10,9 9,9 8,9"/>',
            'title' => 'Documented Evidence',
            'body'  => 'We don\'t deal in rumour or hearsay. Every finding is supported by photographs, documents, records, or verified testimony — delivered in a structured report you can act on.',
          ],
          [
            'icon'  => '<circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/>',
            'title' => 'Diaspora-Ready Operations',
            'body'  => 'We are built for Ugandans abroad. You communicate with us from anywhere in the world. We operate on the ground in Uganda. Updates are provided throughout — in a format you can understand.',
          ],
          [
            'icon'  => '<path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/>',
            'title' => 'No Case Too Sensitive',
            'body'  => 'Marital investigations, family disputes, corporate fraud, missing persons — we handle every case type with the same professionalism. Sensitivity is never a reason to turn away a client who needs the truth.',
          ],
          [
            'icon'  => '<polyline points="22,12 18,12 15,21 9,3 6,12 2,12"/>',
            'title' => 'Regular, Clear Updates',
            'body'  => 'You are never left wondering what is happening. We provide structured progress updates throughout the investigation — no jargon, no guesswork, just clear facts.',
          ],
          [
            'icon'  => '<rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/>',
            'title' => 'Ethical Practice',
            'body'  => 'We operate within legal boundaries at all times. All evidence is gathered through lawful means, ensuring it can be used in legal proceedings if required.',
          ],
        ];
        ?>
        <div class="about-pillars__grid">
          <?php foreach ( $pillars as $i => $p ) : ?>
            <div class="about-pillar fade-up fade-up--delay-<?php echo min( ( $i % 3 ) + 1, 5 ); ?>">
              <div class="about-pillar__icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <?php echo $p['icon']; // phpcs:ignore ?>
                </svg>
              </div>
              <h3 class="about-pillar__title"><?php echo esc_html( $p['title'] ); ?></h3>
              <p class="about-pillar__body"><?php echo esc_html( $p['body'] ); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Who we serve -->
  <section class="section section--navy">
    <div class="container">
      <div class="section-header--center fade-up">
        <div class="section-eyebrow">Who We Serve</div>
        <h2 class="section-title h2" style="color:var(--cf-white);">Built for People Who Need Certainty</h2>
        <p class="section-desc">Our clients share one thing in common — they need the truth, and they need it handled with care.</p>
      </div>
      <div class="about-clients">
        <?php
        $clients = [
          [ 'Ugandan Diaspora',         'Living in the UK, US, UAE, Canada, or Europe — trusting agents, family, or partners to manage property and investments back home. We give you eyes on the ground.' ],
          [ 'Business Owners',          'Considering a partnership, hiring a senior employee, or entering a supplier relationship. Know exactly who you\'re dealing with before you sign.' ],
          [ 'Individuals & Families',   'Facing personal situations that require clarity — marital concerns, missing relatives, or suspicious behaviour from people close to you.' ],
          [ 'Legal Professionals',      'Requiring documented, court-admissible evidence to support litigation, property disputes, or fraud cases.' ],
          [ 'Property Investors',       'Purchasing or developing land in Uganda and needing independent verification of titles, boundaries, and agent conduct.' ],
          [ 'NGOs & Organisations',     'Conducting due diligence on local partners, contractors, or staff in high-accountability environments.' ],
        ];
        ?>
        <div class="about-clients__grid">
          <?php foreach ( $clients as $i => $c ) : ?>
            <div class="about-client-card fade-up fade-up--delay-<?php echo min( ( $i % 3 ) + 1, 5 ); ?>">
              <h3 class="about-client-card__title"><?php echo esc_html( $c[0] ); ?></h3>
              <p class="about-client-card__body"><?php echo esc_html( $c[1] ); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Confidentiality commitment -->
  <section class="section">
    <div class="container">
      <div class="about-commitment fade-up">
        <div class="about-commitment__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
          </svg>
        </div>
        <div class="about-commitment__body">
          <h2 class="about-commitment__title">Our Confidentiality Commitment</h2>
          <p class="about-commitment__text">Every engagement at CrediFold is governed by a signed confidentiality agreement before any work begins. We do not discuss, disclose, or reference any case — past or present — without the express written permission of the client. Your identity, your situation, and our findings belong to you alone.</p>
          <p class="about-commitment__text">This is not a policy. It is a founding principle. Without trust, private investigation is meaningless.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="section section--dark" style="text-align:center; border-top:1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width:600px;">
      <div class="section-eyebrow" style="justify-content:center;">Start Here</div>
      <h2 class="h2" style="color:var(--cf-white); margin-bottom:var(--sp-2);">Ready to Work With Us?</h2>
      <p style="color:rgba(232,232,244,0.6); margin-bottom:var(--sp-5); line-height:1.75;">Submit a confidential inquiry — no names, no commitment until you're ready. We respond within 24 hours.</p>
      <div style="display:flex; gap:var(--sp-2); justify-content:center; flex-wrap:wrap;">
        <a href="<?php echo esc_url( home_url( '/request-investigation' ) ); ?>" class="btn btn-primary btn-lg">
          Start an Investigation
        </a>
        <a href="<?php echo esc_url( cf_whatsapp_link( 'Hello, I would like to learn more about CrediFold.' ) ); ?>"
           class="btn btn-outline" target="_blank" rel="noopener">
          Chat on WhatsApp
        </a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
