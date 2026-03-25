<?php get_header(); ?>

<main class="main-content">

  <div class="page-hero">
    <div class="page-hero__inner container">
      <div class="section-eyebrow" style="justify-content:center;">Real Results</div>
      <h1 class="page-hero__title display-2">Case Studies</h1>
      <p class="page-hero__desc">Documented examples of investigations carried out by CrediFold — anonymised to protect our clients, detailed enough to show how we work.</p>
    </div>
  </div>

  <section class="section">
    <div class="container">

      <?php if ( have_posts() ) : ?>

        <div class="case-studies-grid">
          <?php while ( have_posts() ) : the_post();
            $type   = get_the_terms( get_the_ID(), 'case_type' );
            $label  = $type ? $type[0]->name : 'Investigation';
            $result = get_post_meta( get_the_ID(), 'case_result', true );
          ?>
            <article class="case-card fade-up" id="case-<?php the_ID(); ?>">
              <div class="case-card__header">
                <span class="case-card__type"><?php echo esc_html( $label ); ?></span>
                <?php if ( $result ) : ?>
                  <span class="case-card__result">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><polyline points="20,6 9,17 4,12"/></svg>
                    <?php echo esc_html( $result ); ?>
                  </span>
                <?php endif; ?>
              </div>
              <h2 class="case-card__title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
              <p class="case-card__excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 28, '…' ) ); ?></p>
              <a href="<?php the_permalink(); ?>" class="case-card__link" aria-label="Read full case: <?php the_title_attribute(); ?>">
                Read Case
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
            </article>
          <?php endwhile; ?>
        </div>

        <div class="blog-archive-pagination">
          <?php the_posts_pagination( [
            'mid_size'  => 2,
            'prev_text' => '← Previous',
            'next_text' => 'Next →',
          ] ); ?>
        </div>

      <?php else : ?>

        <!-- Placeholder case studies until real ones are added -->
        <div class="case-studies-grid">
          <?php
          $placeholders = [
            [ 'type' => 'Property', 'result' => 'Fraud Confirmed', 'title' => 'Land Title Fraud — Kampala Residential Plot', 'excerpt' => 'A UK-based client engaged CrediFold after discovering that a 0.25-acre plot in Ntinda had been transferred without their knowledge. We verified the title chain, identified the fraudulent transfer, and produced a documented report for legal proceedings.' ],
            [ 'type' => 'Corporate', 'result' => 'Partner Cleared', 'title' => 'Due Diligence — Logistics Firm Partnership', 'excerpt' => 'Before committing $80,000 to a joint venture with a Kampala logistics company, a Canadian investor requested a full corporate background check. CrediFold verified company registration, director histories, and financial standing.' ],
            [ 'type' => 'Marital', 'result' => 'Evidence Delivered', 'title' => 'Marital Investigation — Undisclosed Assets', 'excerpt' => 'A client going through divorce proceedings suspected undisclosed assets and business interests. Our field team documented property ownership, vehicle registration, and business affiliations within 10 days.' ],
            [ 'type' => 'Background', 'result' => 'Risk Flagged', 'title' => 'Executive Background Check — Finance Director Hire', 'excerpt' => 'An SME hiring a Finance Director asked CrediFold to verify qualifications, employment history, and criminal record. Our investigation revealed a prior fraud conviction not disclosed in the application.' ],
            [ 'type' => 'Surveillance', 'result' => 'Activity Documented', 'title' => 'Surveillance — Insurance Claim Verification', 'excerpt' => 'A business requested surveillance of an employee claiming a workplace injury that prevented them from working. CrediFold documented physical activity inconsistent with the claimed injury over a 5-day period.' ],
            [ 'type' => 'Diaspora', 'result' => 'Investment Protected', 'title' => 'Diaspora — Construction Progress Verification', 'excerpt' => 'A UAE-based client had paid three instalments to a contractor building a home in Entebbe with no progress updates. CrediFold conducted site visits, photographed progress, and interviewed the site foreman.' ],
          ];
          foreach ( $placeholders as $i => $p ) : ?>
            <div class="case-card fade-up fade-up--delay-<?php echo min( $i + 1, 5 ); ?>">
              <div class="case-card__header">
                <span class="case-card__type"><?php echo esc_html( $p['type'] ); ?></span>
                <span class="case-card__result">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><polyline points="20,6 9,17 4,12"/></svg>
                  <?php echo esc_html( $p['result'] ); ?>
                </span>
              </div>
              <h2 class="case-card__title"><?php echo esc_html( $p['title'] ); ?></h2>
              <p class="case-card__excerpt"><?php echo esc_html( $p['excerpt'] ); ?></p>
              <span class="case-card__link case-card__link--placeholder">
                Full case coming soon
              </span>
            </div>
          <?php endforeach; ?>
        </div>

      <?php endif; ?>

    </div>
  </section>

  <!-- CTA -->
  <section class="section section--dark" style="text-align:center; border-top:1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width:600px;">
      <div class="section-eyebrow" style="justify-content:center;">Start Your Case</div>
      <h2 class="h2" style="color:var(--cf-white); margin-bottom:var(--sp-2);">Every Case Begins With One Message</h2>
      <p style="color:rgba(232,232,244,0.6); margin-bottom:var(--sp-5); line-height:1.75;">No names required. No commitment. Just your situation — and we take it from there.</p>
      <a href="<?php echo esc_url( home_url( '/request-investigation' ) ); ?>" class="btn btn-primary btn-lg">
        Start a Confidential Inquiry
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>
  </section>

</main>

<?php get_footer(); ?>
