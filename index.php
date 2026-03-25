<?php get_header(); ?>

<main class="main-content">
  <div class="page-hero">
    <div class="page-hero__inner container">
      <h1 class="page-hero__title h1"><?php the_archive_title(); ?></h1>
    </div>
  </div>
  <div class="container section">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="blog-card" style="margin-bottom:var(--sp-3);">
        <div class="blog-card__body">
          <h2 class="blog-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p class="blog-card__excerpt"><?php the_excerpt(); ?></p>
        </div>
      </article>
    <?php endwhile; else : ?>
      <p>No posts found.</p>
    <?php endif; ?>
    <?php the_posts_pagination(); ?>
  </div>
</main>

<?php get_footer(); ?>
