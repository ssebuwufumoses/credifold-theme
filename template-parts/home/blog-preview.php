<?php
$posts = get_posts( [ 'post_type' => 'post', 'posts_per_page' => 3, 'post_status' => 'publish' ] );

// Hardcoded placeholders shown until real posts are published
$placeholders = [
  [
    'title'   => 'How to Verify a Land Title in Uganda: A Step-by-Step Guide',
    'excerpt' => 'Land fraud is Uganda\'s most common financial crime targeting diaspora. Here is exactly how to verify that a title deed is legitimate before you commit any funds.',
    'cat'     => 'Property',
    'date'    => 'Mar 2026',
    'mins'    => 6,
  ],
  [
    'title'   => 'Five Warning Signs Your Business Partner Is Defrauding You',
    'excerpt' => 'Corporate fraud rarely announces itself. These are the behavioural and financial patterns that experienced investigators look for — and that you should know too.',
    'cat'     => 'Corporate',
    'date'    => 'Mar 2026',
    'mins'    => 5,
  ],
  [
    'title'   => 'What Diaspora Clients Need to Know Before Sending Money Home',
    'excerpt' => 'Distance is the fraudster\'s greatest asset. Before you transfer funds, there are five things you must verify — and most people skip all of them.',
    'cat'     => 'Diaspora',
    'date'    => 'Mar 2026',
    'mins'    => 7,
  ],
];
?>

<section class="section section--light" id="blog" aria-labelledby="blog-heading">
  <div class="container">

    <div class="section-header--center fade-up">
      <div class="section-eyebrow">Intelligence Reports</div>
      <h2 class="section-title h2" id="blog-heading">Know More. Risk Less.</h2>
      <p class="section-desc">Practical guides on protecting your assets, understanding fraud patterns, and knowing when to act.</p>
    </div>

    <div class="blog-grid">
      <?php if ( $posts ) :
        foreach ( $posts as $i => $post ) :
          setup_postdata( $post );
          $cats = get_the_category( $post->ID );
          $cat  = $cats ? $cats[0]->name : 'Investigation';
      ?>
        <article class="blog-card fade-up fade-up--delay-<?php echo $i + 1; ?>">
          <a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>" class="blog-card__image" tabindex="-1" aria-hidden="true">
            <?php if ( has_post_thumbnail( $post->ID ) ) : ?>
              <?php echo get_the_post_thumbnail( $post->ID, 'cf-card' ); ?>
            <?php else : ?>
              <div class="blog-card__img-placeholder">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="rgba(201,168,76,0.5)" stroke-width="1.5" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
              </div>
            <?php endif; ?>
          </a>
          <div class="blog-card__body">
            <p class="blog-card__category"><?php echo esc_html( $cat ); ?></p>
            <h3 class="blog-card__title">
              <a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>"><?php echo esc_html( get_the_title( $post->ID ) ); ?></a>
            </h3>
            <p class="blog-card__excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt( $post->ID ), 22, '…' ) ); ?></p>
            <div class="blog-card__meta">
              <span><?php echo esc_html( get_the_date( 'M j, Y', $post->ID ) ); ?></span>
              <span aria-hidden="true">·</span>
              <span><?php echo esc_html( ceil( str_word_count( get_post_field( 'post_content', $post->ID ) ) / 200 ) ); ?> min read</span>
            </div>
          </div>
        </article>
      <?php endforeach;
      wp_reset_postdata();
      else :
        foreach ( $placeholders as $i => $p ) : ?>
        <article class="blog-card fade-up fade-up--delay-<?php echo $i + 1; ?>">
          <div class="blog-card__image">
            <div class="blog-card__img-placeholder">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="rgba(201,168,76,0.5)" stroke-width="1.5" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            </div>
          </div>
          <div class="blog-card__body">
            <p class="blog-card__category"><?php echo esc_html( $p['cat'] ); ?></p>
            <h3 class="blog-card__title"><?php echo esc_html( $p['title'] ); ?></h3>
            <p class="blog-card__excerpt"><?php echo esc_html( $p['excerpt'] ); ?></p>
            <div class="blog-card__meta">
              <span><?php echo esc_html( $p['date'] ); ?></span>
              <span aria-hidden="true">·</span>
              <span><?php echo esc_html( $p['mins'] ); ?> min read</span>
            </div>
          </div>
        </article>
      <?php endforeach;
      endif; ?>
    </div>

    <div style="text-align:center; margin-top:var(--sp-6);" class="fade-up">
      <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="btn btn-navy">
        Read All Reports
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>

  </div>
</section>
