<?php
/**
 * Main template file.
 * 
 * @package Leela
 */
get_header();
?>

<div class="container blog-page">
  <h1>Our Blog</h1>

  <?php if ( have_posts() ) : ?>
    <div class="blog-grid">
      <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class('blog-card'); ?>>
          <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('medium'); ?>
            </a>
          <?php endif; ?>

          <h2>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h2>

          <p class="meta"><?php echo get_the_date(); ?> | <?php the_author(); ?></p>

          <div class="excerpt">
            <?php the_excerpt(); ?>
          </div>

          <a href="<?php the_permalink(); ?>" class="read-more">Read More →</a>
        </article>
      <?php endwhile; ?>
    </div>

    <div class="pagination">
      <?php the_posts_pagination(); ?>
    </div>
  <?php else : ?>
    <p>No posts found.</p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>