<?php get_header(); ?>

<main class="main-content">
  <div class="page-hero">
    <div class="page-hero__inner container">
      <h1 class="page-hero__title h1"><?php the_title(); ?></h1>
    </div>
  </div>
  <div class="container section">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="entry-content" style="max-width:800px;">
        <?php the_content(); ?>
      </div>
    <?php endwhile; endif; ?>
  </div>
</main>

<?php get_footer(); ?>
