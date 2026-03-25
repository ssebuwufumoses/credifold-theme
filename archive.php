<?php get_header(); ?>

<main class="main-content">

  <div class="page-hero">
    <div class="page-hero__inner container">
      <div class="section-eyebrow" style="justify-content:center;">Intelligence Reports</div>
      <h1 class="page-hero__title display-2">Know More. Risk Less.</h1>
      <p class="page-hero__desc">Practical guides on protecting your assets, understanding fraud patterns, and knowing when to act.</p>
    </div>
  </div>

  <section class="section section--light">
    <div class="container">

      <?php if ( have_posts() ) : ?>
        <div class="blog-archive-grid">
          <?php while ( have_posts() ) : the_post();
            $cats = get_the_category();
            $cat  = $cats ? $cats[0]->name : 'Investigation';
          ?>
            <article class="blog-card fade-up" id="post-<?php the_ID(); ?>">
              <a href="<?php the_permalink(); ?>" class="blog-card__image" tabindex="-1" aria-hidden="true">
                <?php if ( has_post_thumbnail() ) :
                  the_post_thumbnail( 'cf-card' );
                else : ?>
                  <div class="blog-card__img-placeholder">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="rgba(201,168,76,0.5)" stroke-width="1.5" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                  </div>
                <?php endif; ?>
              </a>
              <div class="blog-card__body">
                <p class="blog-card__category"><?php echo esc_html( $cat ); ?></p>
                <h2 class="blog-card__title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <p class="blog-card__excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 25, '…' ) ); ?></p>
                <div class="blog-card__meta">
                  <span><?php echo get_the_date( 'M j, Y' ); ?></span>
                  <span aria-hidden="true">·</span>
                  <span><?php echo ceil( str_word_count( get_post_field( 'post_content', get_the_ID() ) ) / 200 ); ?> min read</span>
                </div>
              </div>
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
        <div class="blog-archive-empty fade-up">
          <svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="var(--cf-gold)" stroke-width="1.25" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          <h2>Reports Coming Soon</h2>
          <p>We are preparing in-depth intelligence reports on fraud patterns, property verification, and diaspora protection. Check back soon — or subscribe via WhatsApp to be notified.</p>
          <a href="<?php echo esc_url( cf_whatsapp_link( 'Hello, I would like to be notified when new intelligence reports are published.' ) ); ?>"
             class="btn btn-whatsapp" target="_blank" rel="noopener">
            Notify Me on WhatsApp
          </a>
        </div>
      <?php endif; ?>

    </div>
  </section>

</main>

<?php get_footer(); ?>
