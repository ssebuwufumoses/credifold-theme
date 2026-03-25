<?php
get_header();
the_post();

$tagline    = get_field( 'service_tagline' );
$who_needs  = get_field( 'service_who_needs' );
$what_we_do = get_field( 'service_what_we_do' );  // repeater: item
$process    = get_field( 'service_process' );       // repeater: step_title, step_desc
$price      = get_field( 'service_price' );
$turnaround = get_field( 'service_turnaround' );
?>

<main class="main-content" style="padding-top: var(--nav-height);">

  <!-- Hero -->
  <div class="svc-hero">
    <div class="svc-hero__bg"></div>
    <div class="svc-hero__grid" aria-hidden="true"></div>
    <div class="svc-hero__icon-watermark" aria-hidden="true">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round">
        <?php echo cf_service_icon( get_the_title() ); // phpcs:ignore ?>
      </svg>
    </div>
    <div class="container svc-hero__inner">
      <div class="svc-hero__breadcrumb">
        <a href="<?php echo esc_url( home_url( '/services' ) ); ?>">Services</a>
        <span aria-hidden="true">›</span>
        <span><?php the_title(); ?></span>
      </div>
      <div class="svc-hero__icon">
        <svg viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none">
          <?php echo cf_service_icon( get_the_title() ); // phpcs:ignore ?>
        </svg>
      </div>
      <h1 class="svc-hero__title"><?php the_title(); ?></h1>
      <?php if ( $tagline ) : ?>
        <p class="svc-hero__tagline"><?php echo esc_html( $tagline ); ?></p>
      <?php endif; ?>
      <?php if ( $price || $turnaround ) : ?>
        <div class="svc-hero__badges">
          <?php if ( $turnaround ) : ?>
            <span class="svc-badge">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12,6 12,12 16,14"/></svg>
              <?php echo esc_html( $turnaround ); ?>
            </span>
          <?php endif; ?>
          <?php if ( $price ) : ?>
            <span class="svc-badge">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
              <?php echo esc_html( $price ); ?>
            </span>
          <?php endif; ?>
          <span class="svc-badge">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z"/></svg>
            100% Confidential
          </span>
        </div>
      <?php endif; ?>
      <div class="svc-hero__actions">
        <a href="<?php echo esc_url( home_url( '/request-investigation' ) ); ?>" class="btn btn-primary btn-lg">
          Start This Investigation
        </a>
        <a href="<?php echo esc_url( cf_whatsapp_link( 'Hello, I need ' . get_the_title() . ' services.' ) ); ?>"
           class="btn btn-outline" target="_blank" rel="noopener">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          Ask on WhatsApp
        </a>
      </div>
    </div>
  </div>

  <!-- Main content + sidebar -->
  <div class="section container">
    <div class="svc-layout">

      <!-- Main column -->
      <div class="svc-main">

        <!-- Who needs this -->
        <?php if ( $who_needs ) : ?>
          <div class="svc-block fade-up">
            <h2 class="svc-block__title">Who Needs This?</h2>
            <div class="entry-content svc-block__content">
              <?php echo wp_kses_post( $who_needs ); ?>
            </div>
          </div>
        <?php elseif ( get_the_content() ) : ?>
          <div class="svc-block fade-up">
            <div class="entry-content svc-block__content">
              <?php the_content(); ?>
            </div>
          </div>
        <?php endif; ?>

        <!-- What we investigate -->
        <?php if ( $what_we_do ) : ?>
          <div class="svc-block fade-up">
            <h2 class="svc-block__title">What We Investigate</h2>
            <ul class="svc-checklist">
              <?php foreach ( $what_we_do as $row ) : ?>
                <li class="svc-checklist__item">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20,6 9,17 4,12"/></svg>
                  <?php echo esc_html( $row['item'] ); ?>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endif; ?>

        <!-- Process steps -->
        <?php if ( $process ) : ?>
          <div class="svc-block fade-up">
            <h2 class="svc-block__title">How This Investigation Works</h2>
            <div class="svc-process">
              <?php foreach ( $process as $i => $step ) : ?>
                <div class="svc-process__step">
                  <div class="svc-process__num"><?php echo str_pad( $i + 1, 2, '0', STR_PAD_LEFT ); ?></div>
                  <div class="svc-process__body">
                    <h3 class="svc-process__title"><?php echo esc_html( $step['step_title'] ); ?></h3>
                    <?php if ( ! empty( $step['step_desc'] ) ) : ?>
                      <p class="svc-process__desc"><?php echo esc_html( $step['step_desc'] ); ?></p>
                    <?php endif; ?>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endif; ?>

      </div><!-- .svc-main -->

      <!-- Sidebar -->
      <aside class="svc-sidebar">

        <!-- Quick enquiry box -->
        <div class="svc-sidebar__card svc-sidebar__card--cta fade-up">
          <h3 class="svc-sidebar__cta-title">Ready to start?</h3>
          <p class="svc-sidebar__cta-desc">Submit a confidential inquiry — no names required until you're ready.</p>
          <a href="<?php echo esc_url( home_url( '/request-investigation' ) ); ?>" class="btn btn-primary btn-full" style="margin-bottom:var(--sp-2);">
            Start Investigation
          </a>
          <a href="<?php echo esc_url( cf_whatsapp_link( 'Hello, I need ' . get_the_title() . ' services.' ) ); ?>"
             class="btn btn-whatsapp btn-full" target="_blank" rel="noopener">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            WhatsApp Us
          </a>
        </div>

        <!-- Pricing/turnaround -->
        <?php if ( $price || $turnaround ) : ?>
          <div class="svc-sidebar__card fade-up">
            <h4 class="svc-sidebar__card-title">Service Details</h4>
            <?php if ( $turnaround ) : ?>
              <div class="svc-detail-row">
                <span class="svc-detail-row__label">Turnaround</span>
                <span class="svc-detail-row__value"><?php echo esc_html( $turnaround ); ?></span>
              </div>
            <?php endif; ?>
            <?php if ( $price ) : ?>
              <div class="svc-detail-row">
                <span class="svc-detail-row__label">Starting from</span>
                <span class="svc-detail-row__value text-gold"><?php echo esc_html( $price ); ?></span>
              </div>
            <?php endif; ?>
            <p style="font-size:0.8rem; color:var(--cf-text-muted); margin-top:var(--sp-2); line-height:1.6;">Exact scope and fee confirmed in your free consultation.</p>
          </div>
        <?php endif; ?>

        <!-- Other services -->
        <div class="svc-sidebar__card fade-up">
          <h4 class="svc-sidebar__card-title">Other Services</h4>
          <?php
          $others = get_posts( [
            'post_type'      => 'cf_service',
            'posts_per_page' => 5,
            'post__not_in'   => [ get_the_ID() ],
            'orderby'        => 'meta_value_num',
            'meta_key'       => 'service_order',
          ] );
          if ( $others ) : ?>
            <ul class="svc-sidebar__links">
              <?php foreach ( $others as $other ) : ?>
                <li>
                  <a href="<?php echo esc_url( get_permalink( $other->ID ) ); ?>">
                    <?php echo esc_html( $other->post_title ); ?>
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
          <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn-ghost" style="display:inline-flex; align-items:center; gap:6px; margin-top:var(--sp-3); font-size:0.8125rem; text-transform:uppercase; letter-spacing:0.08em; color:var(--cf-gold); border-bottom:1px solid var(--cf-gold); padding-bottom:2px;">
            View All Services
          </a>
        </div>

      </aside>
    </div>
  </div>

  <!-- Bottom CTA -->
  <div class="section section--dark" style="text-align:center; border-top:1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width:600px;">
      <h2 class="h2" style="color:var(--cf-white); margin-bottom:var(--sp-2);">Ready to uncover the truth?</h2>
      <p style="color:rgba(232,232,244,0.6); margin-bottom:var(--sp-5);">Submit a confidential inquiry today. No names required until you're ready. We respond within 24 hours.</p>
      <a href="<?php echo esc_url( home_url( '/request-investigation' ) ); ?>" class="btn btn-primary btn-lg">
        Start Your Investigation
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>
  </div>

</main>

<?php get_footer(); ?>
