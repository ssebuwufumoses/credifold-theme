<?php
$headline    = get_field( 'hero_headline' )    ?: 'Uncover the Truth. <em>Protect</em> What Matters.';
$sub         = get_field( 'hero_subheadline' ) ?: 'Confidential private investigations across Uganda and beyond. Discreet. Professional. Results-driven.';
$cta_primary = get_field( 'hero_cta_primary' ) ?: 'Start an Investigation';
$cta_second  = get_field( 'hero_cta_secondary') ?: 'Explore Services';
?>

<section class="hero" aria-label="Hero">

  <div class="hero__bg"></div>
  <div class="hero__grid" aria-hidden="true"></div>
  <div class="hero__glow" aria-hidden="true"></div>

  <!-- Shield watermark -->
  <div class="hero__shield" aria-hidden="true">
    <svg viewBox="0 0 100 115" xmlns="http://www.w3.org/2000/svg">
      <path d="M50 0L5 18V52C5 78 25 101 50 108C75 101 95 78 95 52V18L50 0Z"/>
    </svg>
  </div>

  <div class="container">
    <div class="hero__content">

      <div class="hero__eyebrow fade-up">
        Private Intelligence &amp; Investigation
      </div>

      <h1 class="hero__headline fade-up fade-up--delay-1">
        <?php echo wp_kses( $headline, [ 'em' => [], 'strong' => [], 'br' => [] ] ); ?>
      </h1>

      <p class="hero__subheadline fade-up fade-up--delay-2">
        <?php echo esc_html( $sub ); ?>
      </p>

      <div class="hero__actions fade-up fade-up--delay-3">
        <a href="<?php echo esc_url( home_url( '/request-investigation' ) ); ?>" class="btn btn-primary btn-lg">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          <?php echo esc_html( $cta_primary ); ?>
        </a>
        <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn-outline btn-lg">
          <?php echo esc_html( $cta_second ); ?>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      </div>

      <div class="hero__scroll fade-up fade-up--delay-4" aria-hidden="true">
        <div class="hero__scroll-line"></div>
        Scroll to explore
      </div>

    </div>
  </div>

</section>
