<?php
$testimonials = get_posts( [ 'post_type' => 'cf_testimonial', 'posts_per_page' => 3 ] );
?>

<section class="section testimonials" id="testimonials" aria-labelledby="testi-heading">
  <div class="container">

    <div class="section-header--center fade-up">
      <div class="section-eyebrow">Client Voices</div>
      <h2 class="section-title h2" id="testi-heading" style="color:var(--cf-white)">What Our Clients Say</h2>
      <p class="section-desc">All identities protected. All outcomes real.</p>
    </div>

    <div class="testimonials-grid">

      <?php if ( $testimonials ) :
        foreach ( $testimonials as $i => $t ) :
          $quote   = get_field( 'testi_quote', $t->ID );
          $client  = get_field( 'testi_client', $t->ID ) ?: 'Anonymous Client';
          $service = get_field( 'testi_service', $t->ID );
          $rating  = (int) ( get_field( 'testi_rating', $t->ID ) ?: 5 );
        ?>
          <div class="testimonial-card fade-up fade-up--delay-<?php echo $i + 1; ?>">
            <div class="testimonial-card__stars">
              <?php for ( $s = 0; $s < $rating; $s++ ) echo '<span>★</span>'; ?>
            </div>
            <p class="testimonial-card__quote"><?php echo esc_html( $quote ); ?></p>
            <div class="testimonial-card__client">
              <div class="testimonial-card__avatar">
                <svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
              </div>
              <div>
                <p class="testimonial-card__name"><?php echo esc_html( $client ); ?></p>
                <?php if ( $service ) : ?>
                  <p class="testimonial-card__role"><?php echo esc_html( $service ); ?></p>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php endforeach;

      else :
        // Placeholder testimonials
        $placeholders = [
          [ 'quote' => 'CrediFold uncovered a fraudulent land transfer on my property in Kampala. I was in London with no idea what was happening. Their report saved me from losing everything.', 'client' => 'Property Investor, UK', 'role' => 'Property & Land Verification' ],
          [ 'quote' => 'I hired CrediFold to do background checks on two business partners before signing a contract. What they found changed everything. Best investment I ever made.', 'client' => 'Business Owner, Kampala', 'role' => 'Corporate Due Diligence' ],
          [ 'quote' => 'Discreet, professional, and thorough. They gave me the clarity I needed in a very difficult personal situation. I can\'t recommend them enough.', 'client' => 'Anonymous Client, Uganda', 'role' => 'Marital Investigation' ],
        ];
        foreach ( $placeholders as $i => $p ) : ?>
          <div class="testimonial-card fade-up fade-up--delay-<?php echo $i + 1; ?>">
            <div class="testimonial-card__stars">
              <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
            </div>
            <p class="testimonial-card__quote"><?php echo esc_html( $p['quote'] ); ?></p>
            <div class="testimonial-card__client">
              <div class="testimonial-card__avatar">
                <svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
              </div>
              <div>
                <p class="testimonial-card__name"><?php echo esc_html( $p['client'] ); ?></p>
                <p class="testimonial-card__role"><?php echo esc_html( $p['role'] ); ?></p>
              </div>
            </div>
          </div>
        <?php endforeach;
      endif; ?>

    </div>
  </div>
</section>
