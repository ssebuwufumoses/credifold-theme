<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">

      <!-- Brand Column -->
      <div class="footer-brand">
        <div class="footer-logo">
          <svg width="28" height="32" viewBox="0 0 32 36" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M16 0L0 6V18C0 27.4 7.2 34.4 16 36C24.8 34.4 32 27.4 32 18V6L16 0Z" fill="#C9A84C" fill-opacity="0.2" stroke="#C9A84C" stroke-width="1.5"/>
            <path d="M16 4L4 9V18C4 25.2 9.4 31.2 16 32.8C22.6 31.2 28 25.2 28 18V9L16 4Z" fill="#1A2D7C" fill-opacity="0.5"/>
          </svg>
          <span class="footer-logo__text">Credi<span style="color:var(--cf-gold)">Fold</span></span>
        </div>
        <p class="footer-desc">Confidential private investigations across Uganda and beyond. Discreet, professional, results-driven.</p>
        <div class="footer-contact-row">
          <a href="mailto:<?php echo esc_attr( cf_email() ); ?>">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            <?php echo esc_html( cf_email() ); ?>
          </a>
          <a href="<?php echo esc_url( cf_whatsapp_link() ); ?>" target="_blank" rel="noopener">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            <?php echo esc_html( cf_whatsapp() ); ?>
          </a>
        </div>
        <a href="<?php echo esc_url( home_url( '/request-investigation' ) ); ?>" class="btn btn-primary btn-sm">
          Start an Investigation
        </a>
      </div>

      <!-- Services Column -->
      <div class="footer-col">
        <p class="footer-col__title">Services</p>
        <ul>
          <?php
          $services = get_posts( [ 'post_type' => 'cf_service', 'posts_per_page' => 8, 'orderby' => 'meta_value_num', 'meta_key' => 'service_order' ] );
          if ( $services ) :
            foreach ( $services as $s ) : ?>
              <li><a href="<?php echo esc_url( get_permalink( $s->ID ) ); ?>"><?php echo esc_html( $s->post_title ); ?></a></li>
            <?php endforeach;
          else : ?>
            <li><a href="<?php echo esc_url( home_url( '/services/background-checks' ) ); ?>">Background Checks</a></li>
            <li><a href="<?php echo esc_url( home_url( '/services/property-verification' ) ); ?>">Property Verification</a></li>
            <li><a href="<?php echo esc_url( home_url( '/services/corporate-due-diligence' ) ); ?>">Corporate Due Diligence</a></li>
            <li><a href="<?php echo esc_url( home_url( '/services/marital-investigations' ) ); ?>">Marital Investigations</a></li>
            <li><a href="<?php echo esc_url( home_url( '/services/surveillance' ) ); ?>">Surveillance</a></li>
          <?php endif; ?>
        </ul>
      </div>

      <!-- Company Column -->
      <div class="footer-col">
        <p class="footer-col__title">Company</p>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">About CrediFold</a></li>
          <li><a href="<?php echo esc_url( home_url( '/how-it-works' ) ); ?>">How It Works</a></li>
          <li><a href="<?php echo esc_url( home_url( '/case-studies' ) ); ?>">Case Studies</a></li>
          <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Intelligence Blog</a></li>
          <li><a href="<?php echo esc_url( home_url( '/faq' ) ); ?>">FAQ</a></li>
          <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a></li>
        </ul>
      </div>

      <!-- Legal Column -->
      <div class="footer-col">
        <p class="footer-col__title">Legal</p>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/confidentiality-policy' ) ); ?>">Confidentiality Policy</a></li>
          <li><a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>">Privacy Policy</a></li>
          <li><a href="<?php echo esc_url( home_url( '/terms' ) ); ?>">Terms of Engagement</a></li>
        </ul>

        <p class="footer-col__title" style="margin-top: var(--sp-4);">Secure Contact</p>
        <ul>
          <li><a href="<?php echo esc_url( cf_whatsapp_link() ); ?>" target="_blank" rel="noopener">WhatsApp</a></li>
          <li><a href="mailto:<?php echo esc_attr( cf_email() ); ?>">Encrypted Email</a></li>
          <li><a href="<?php echo esc_url( home_url( '/request-investigation' ) ); ?>">Secure Form</a></li>
        </ul>
      </div>

    </div><!-- .footer-grid -->

    <div class="footer-bottom">
      <p class="footer-copyright">
        &copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> CrediFold. All rights reserved. All engagements are strictly confidential.
      </p>
      <div class="footer-badge">
        <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z"/></svg>
        100% Confidential
      </div>
    </div>

  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
